<?
header("Pragma: no-cache");
header('Cache-Control: no-cache');

if (file_exists("connect.php")) include("connect.php"); else include("../includes/connect.php");

$ipage=(int)$_GET['ipage'];
$shownum=10;

if (!($ipage>0)) $ipage=0;
$starts=$ipage*$shownum;

$query="SELECT * FROM $TABLE_IMAGES ORDER BY id desc LIMIT $starts, $shownum";

$result = mQuery($query);
$num=mNumRows($result);
if ($num) for ($i=0; $i<$num;$i++)
	{
	$row=mFetchArray($result);
	$row[name_1]=stripslashes($row[name_1]);
	$row[zag_1]=stripslashes($row[zag_1]);
	echo "<a href=../images/$TABLE_IMAGES.$row[crtdate].b.$row[format] target=_blank><img src=../images/$TABLE_IMAGES.$row[crtdate].s.jpg border=0 alt=\"$row[name_1]\" title=\"$row[name_1]\" hspace=\"3\" vspace=\"3\"></a><br>$row[name_1]<br>[ <a href=$act?id=$row[id]>".imedm."</a> <a  onClick=\"confirming('������� �������� $row[name_1]$row[zag_1]?','$act?id=$row[id]&del=1')\" href=#>".imdelm."</a> ]<hr size=1>";
	}

//Pages
$pages="";
$query="SELECT * FROM $TABLE_IMAGES ORDER BY id desc";
$result = mQuery($query);
$num=mNumRows($result);

for ($i=0; $i<$num/$shownum;$i++)
{
	if (($ipage)==$i) $pages.=" <strong>".($i+1)."</strong> ";
	else $pages.=" <a href=# OnClick=\"listImages($i)\">".($i+1)."</a> ";
}
echo "<br>".$word[$ALANG]['pages'].": $pages";
include("disconnect.php");
?>

