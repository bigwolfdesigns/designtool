<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Product Details</title>
</head>

<body>
<?PHP
	include_once('/home/stdesign/public_html/php_uploads/connect.php');
	$id = escape_data($_GET['id']);
	$query ="SELECT * FROM `featured_products` WHERE id='$id'";
	$result = mysql_query ($query); // Run the query.
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		extract($row);
	}

?>
<table width="<?PHP echo $_GET['width'];?>" cellpadding="5">
<tr valign="top" ><td colspan="2" ><div style="float:right;margin:0px 0px 10px 10px;"><a href="<?PHP echo $link;?>"><img src="/featured-products/images/<?PHP echo $image;?>" /></a></div><h2><a href="<?PHP echo $link;?>"><?PHP echo $product_name;?></a></h2><p><?PHP echo htmlentities($long_description);?>
</p><a href="<?PHP echo $link;?>">More Information on the <?PHP echo $product_name;?></a></td>


<tr><td colspan="2"><h2>Other New Products</h2></td></tr>
<?PHP 
	$query ="SELECT * FROM `featured_products` WHERE id!='$id' order by weight asc";
	$result = mysql_query ($query); // Run the query.
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

	echo '<tr valign="top"><td width="100"><a href="'.$row['link'].'"><img src="/featured-products/images/'.$row['image'].'" height="75" style="border:none;" /></a></td>
	<td width="'.($_GET['width']-100).'"><p><strong><a href="'.$_row['link'].'">'.$row['product_name'].'</a></strong><br />'.$row['short_description'].'</p></td></tr>';
	}
?>
</table>
</body>
</html>
