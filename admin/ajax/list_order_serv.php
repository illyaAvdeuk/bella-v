<?
$oid=(int)$_GET['oid'];
$add=(int)$_GET['add'];
$del=(int)$_GET['del'];
if ($oid>0)
{
if (file_exists("connect.php")) include("connect.php"); else include("../includes/connect.php");

	if ($add>0)
	{
		$rowi=FetchID($TABLE_CATALOG,$add);
		$qi="INSERT INTO `$TABLE_ORDERS_ITEMS` (`id` ,`orderID`,`itemID`,`item_name`,`price`,`count`) VALUES (NULL , '$oid', '$add', '$rowi[name_1]', '$rowi[price]', '1')";
		mQuery($qi);
		//echo $qi.mError();
	}
	
	if ($del>0)
	{
		$qd="DELETE FROM $TABLE_ORDERS_ITEMS WHERE id=$del";
		mQuery($qd);
	}
	
echo "<strong style=\"font-size:15px;\">������ � ������ �$oid</strong><br />
<br />";

$rowo=FetchID($TABLE_ORDERS,$oid);

$query="SELECT * FROM $TABLE_ORDERS_ITEMS WHERE orderID=$oid ORDER BY price asc";
$result = mQuery($query);
$num=mNumRows($result);
$sum=0;
echo '<table border="0">';
if ($num) for ($i=0; $i<$num;$i++)
	{
	$row=mFetchArray($result);
	$row[item_name]=stripslashes($row[item_name]);
	echo '<tr><td>'.imfile." <a href=\"items.php?tabler=catalog_rubs&tablei=catalog&id=".$row['itemID']."#header\" target=\"_blank\">$row[item_name]</a></td><input name=\"count".$row['id']."\" type=\"text\" id=\"count".$row['id']."\" value=\"".$row['count']."\" onkeyup=\"updateItemVal('".$TABLE_ORDERS_ITEMS."','count','count".$row['id']."','".$row['id']."');\" style=\"width:20px;\"/>��</td><td><input name=\"price".$row['id']."\" type=\"text\" id=\"price".$row['id']."\" value=\"".$row['price']."\" onkeyup=\"updateItemVal('".$TABLE_ORDERS_ITEMS."','price','price".$row['id']."','".$row['id']."');\" style=\"width:55px;\"/>���</td><td></td><td>  <a  href=\"javascript:list_ord(0,".$row['id'].")\">".imdelm."</a> | <strong><a href=\"ajax/serv_add.php?userID=$rowo[under]&itemID=$row[itemID]&name=$row[item_name]\" target=\"_blank\">��������� �� ������������</a></strong></td></tr>";
	$sum+=$row['price']*$row['count'];
	}
echo '</table><br />�������� ����� �� ��: <input name="addid" type="text" id="addid" style="width:50px;" />
<a href="javascript:list_ord(\'addid\',0)"><u>��������</u></a><br /><br />
����� ������: <strong style=\"font-size:15px;\">'.$sum.' ���</strong> / <a href="javascript:list_ord(0,0)"><u>�����������</u></a>';
	if (file_exists("disconnect.php")) include("disconnect.php"); else include("../includes/disconnect.php"); 
}
?>

