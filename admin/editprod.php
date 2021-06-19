<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if(isset($_POST['edit']))
{
$c=$conn->prepare("select * from product where pid=?");
$arr=array($_POST['pid']);
$c->execute($arr);
while($r=$c->fetch())
{
?>
<table style="border:1px solid black; width:200px; margin-left:400px; padding-left:10px; padding-top:10px">
<form action="updateprod.php" method="post">
<tr>
<td><input type="hidden" name="pid" value="<?php echo $r['pid'];?> " /></td></tr>
<tr><th>Product</th><td>
<input type="text" name="product" value="<?php echo $r['product'];?>" /></td></tr>
<tr><th>Code</th><td>
<input type="text" name="code" value="<?php echo $r['code'];?>" /></td></tr>
<tr><th>Warranty</th><td>
<input type="text" name="warranty" value="<?php echo $r['warranty'];?>" /></td></tr>
<tr><th>Price</th><td>
<input type="text" name="price" value="<?php echo $r['price'];?>" /></td></tr>
<tr><th>Tax</th><td>
<input type="text" name="tax" value="<?php echo $r['tax'];?>" /></td></tr>
<tr><th>Pm period</th><td>
<input type="text" name="pmperiod" value="<?php echo $r['pmperiod'];?>" /></td></tr>
<tr><td>
<input type="submit" name="submit" value="submit" style="margin-left:60px" /></td></tr>
</form></table>
<?php
}}
?>

</body>
</html>
