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
$c=$conn->prepare("select * from sales where sid=?");
$arr=array($_POST['sid']);
$c->execute($arr);
while($r=$c->fetch())
{
?>
<table style="border:1px solid black; width:200px; margin-left:400px; padding-left:10px; padding-top:10px">
<form action="updatesales.php" method="post">
<tr>
<td><input type="hidden" name="sid" value="<?php echo $r['sid'];?> " /></td></tr>
<tr><th>Bill no</th><td>
<input type="text" name="billno" value="<?php echo $r['billno'];?>" /></td></tr>
<tr><th>Customer</th><td>
<input type="text" name="customer" value="<?php echo $r['customer'];?>" /></td></tr>
<tr><th>Product</th><td>
<input type="text" name="product" value="<?php echo $r['product'];?>" /></td></tr>
<tr><th>Code</th><td>
<input type="text" name="code" value="<?php echo $r['code'];?>" /></td></tr>


<tr><th>Quantity</th><td>
<input type="text" name="quantity" value="<?php echo $r['quantity'];?>" /></td></tr>
<tr><th>Gross</th><td>
<input type="text" name="gross" value="<?php echo $r['gross'];?>" /></td></tr>
<tr><th>Tax</th><td>
<input type="text" name="tax" value="<?php echo $r['tax'];?>" /></td></tr>
<tr><th>Total</th><td>
<input type="text" name="total" value="<?php echo $r['total'];?>" /></td></tr>
<tr><th>Sales date</th><td>
<input type="text" name="salesdate" value="<?php echo $r['salesdate'];?>" /></td></tr>

<tr><td>
<input type="submit" name="submit" value="submit" style="margin-left:60px" /></td></tr>
</form></table>
<?php
}}
?>

</body>
</html>
