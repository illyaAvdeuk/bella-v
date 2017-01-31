<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
       $App->insertHead();
    ?>
	<title><?php echo $PROJECT_NAME.': '.$word[$ALANG]['adminpanel']; ?> SQL</title>
</head>

<body>
<?php
$version=4.2;
include("controllers/menu.php");
?>
<div style="margin:25px;">
<?php

// Создаем недостающие поля в таблице
function addAliasFields($table) {
    
 
    $chkcol = mQuery("SELECT * FROM `$table` LIMIT 1");

    //Таблица есть)
    if (mNumRows($chkcol) > 0) {
        
        $mycol = mFetchArray($chkcol);
        
        // Переименовываем старый транслит
        if(array_key_exists('name_tr', $mycol)) {
            
            if (array_key_exists('alias_1', $mycol)) {
                
                echo $q = "ALTER TABLE `$table` DROP `name_tr`";
                echo mQuery($q);
            }
            else {
                echo $q = "ALTER TABLE `$table` CHANGE `name_tr` `alias_1` VARCHAR(255) NOT NULL";
                echo mQuery($q);
            }
        }
        
        // Если вообще есть транслит поле
        if (array_key_exists('name_tr', $mycol) || array_key_exists('alias_1', $mycol) ) {
        
        $fields = array('alias_1', 'alias_2', 'alias_3');
        
        $i = 0;
        foreach ($fields as $field) {
            
            if(!array_key_exists($field,$mycol)) {
                
                $newType = "VARCHAR(255) NOT NULL DEFAULT ''";
                
                $q = "ALTER TABLE `" . $table . "` 
                        ADD `" . $field . "` " . $newType . " 
                        AFTER `" . $fields[$i-1]."`";
                        
                if (mQuery($q)) {
                    echo ' Column ' . $field . ' added! ';
                }
                else {
                    echo mError();
                }
            }
            
         $i++;
        }
    }
    }
}


if (isset($_GET['table'])) {
	
	if (!empty($wideview)) $shownum="100";
	else $shownum="10";
	
	if (!empty($_GET['delid'])) { 
		mQuery("DELETE FROM ".$_GET['table']." WHERE id=".$_GET['delid']." LIMIT 1");
	}
	

	echo "<strong>Таблица: ".$_GET['table']."</strong><br /><br />";
	
	$res=mQuery("SELECT * FROM " . $_GET['table'] . " LIMIT 1");
    $finfo = mysqli_fetch_fields($res);

	foreach ($finfo as $val) {
		echo $val->name . ' (' .$val->type. ') | ';
	}
        
    mysqli_free_result($res);	
	
	
	echo "<br /><br />";
	$_POST['query']="SELECT * FROM ".$_GET['table']." LIMIT 0,$shownum";
}

if (isset($_POST['query'])) {
	$query=explode(";",$_POST['query']);
	foreach ($query as $q)
	{
		if (strlen($q)>5)
		{
			$q=stripslashes($q);
			$result = mQuery($q);
			if ($result) echo "$q -> <b>Выполнено успешно</b><br>";
			else echo mError();
			
			if (!isset($_GET['table']))
			{
				if (strstr(strtoupper($q), 'FROM') !== FALSE) 
					$q1=explode("FROM",strtoupper($q));
				elseif (strstr(strtoupper($q), 'UPDATE') !== FALSE) 
					$q1=explode("UPDATE",strtoupper($q));
				elseif (strstr(strtoupper($q), 'INTO') !== FALSE) 
					$q1=explode("INTO",strtoupper($q));
					
				if (isset($q1) && is_array($q1)) {
					
					$q2=explode(" ",$q1[1]);
					$table_name=strtolower($q2[1]);
				}
			}
			else $table_name=$_GET['table'];
			
			if ($result && stristr($q,"SELECT") !== FALSE)
			{
				$num=mNumRows($result);
				$rowf=mFetchAssoc($result);
				$result = mQuery($q);
				if ($num>0) {
					echo '<table class="table"><tr>';
					foreach ($rowf as $field=>$val) echo "<td><b>$field</b></td>";
					if ($table_name) echo "<td><b> X </b></td>";
					echo "</tr>";
				
					for ($i=0;$i<$num;$i++)
					{
						echo "<tr>";
						$row=mFetchRow($result);
						foreach ($row as $field) echo "<td>".substr(strip_tags($field),0,50)."</td>";
						if ($table_name) echo "<td> <a href=query.php?table=".$table_name."&wideview=1&delid=".$row[0].">удалить</a> </td>";
						//var_dump($row);
						echo "</tr>";
					}
					echo "</table>";
				}
				
			}
			echo "<hr>";
		}
	}
}
else {
	
	$table_name = 'table';
}

?>
<br>
<table border="0" cellpadding="3">
<tr>
<td valign="top">
<?php
if (strlen($DB_NAME)>0)
{
	$res = mQuery("SHOW TABLES FROM $DB_NAME;");
	$num=mNumRows($res);
	echo '<h4><span aria-hidden="true" class="glyphicon glyphicon-hdd"></span>
	' . $DB_NAME . ':</h4>';
	
	for ($i=0;$i<$num;$i++)
	{
		$row=mFetchRow($res);
		foreach ($row as $table) 
		{
			if (!empty($table_name) && $table_name == $table) $sel='style="font-weight:bold"';
			else $sel="";
			
			echo "<img src=\"img/table_s.gif\" border=\"0\"/> <a href=\"query.php?table=$table\" $sel>$table</a><br>";
            addAliasFields($table);
        }
	}
}
else echo 'Укажите $DB_NAME в config.php';
?>
</td>
<td valign="top" style="padding-left:5px;">
<h4><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> MySQL query:</h4>
<form name="form1" method="post" action="query.php">
  <p align="left">
    <textarea class="form-control" name="query" cols="150" rows="10" class="txt" id="query"><?php echo isset($_POST['query'])?stripslashes($_POST['query']):''; ?></textarea>
    <br>    
    <input name="Submit" class="btn btn-success" type="submit" class="window" value="Execute">
</p>
</form><strong>Examples:</strong><br>
ALTER TABLE `<?=$table_name?>` ADD `name` INT( 11 ) NOT NULL DEFAULT '0' AFTER `name_1`;<br>

ALTER TABLE `<?=$table_name?>` ADD `txt_1` TEXT NOT NULL DEFAULT '' AFTER `name_1`;<br>

ALTER TABLE `<?=$table_name?>` DROP `name`;<br>

UPDATE <?=$table_name?> SET $var='$val' WHERE id='$val';<br>

SELECT * FROM <?=$table_name?> WHERE id>0;<br>

INSERT INTO `<?=$table_name?>` (`id` ,`name`,`var` ,`value`) VALUES (NULL , 'Имя', 'name', 'val');<br>

DELETE FROM `<?=$table_name?>` WHERE id=$id<br>

ALTER TABLE `<?=$table_name?>` CHANGE `price` `price` FLOAT NOT NULL  <br>

ALTER TABLE `<?=$table_name?>` ADD INDEX ( `under` ) <br>

OPTIMIZE TABLE `<?=$table_name?>` <br>

REPAIR TABLE `<?=$table_name?>` 
</td></tr></table></div>
<br>

<?php
include("inc/Bottom.php");
?>
</body>
</html>
