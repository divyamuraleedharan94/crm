<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
$d=$_POST['product'];
$b=$_POST['price'];
$c=$_POST['quantity'];


 $taxam=$conn->prepare("select * from product where product=?"  );
$arr=array($d);
$taxam->execute($arr);
while($r=$taxam->fetch())
{
$pid=$r['pid'];
$gross=$b*$c;

$tax=$r['tax'];


$tax1=$gross*($tax/100);
$total=$tax1+$gross;


$salesdate=date("y-m-d");





$a=$conn->prepare("insert into sales(billno,customer,product,code,quantity,gross,tax,total,salesdate) values(?,?,?,?,?,?,?,?,?)");
$arr=array($_POST['billno'],$_POST['customer'],$d,$pid,$_POST['quantity'],$gross,$tax,$total,$salesdate);
$a->execute($arr);

}}
?>
</body>
</html>
