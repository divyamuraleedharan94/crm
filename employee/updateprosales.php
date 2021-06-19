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
$c=$conn->prepare("update sales set billno=?,customer=?,product=?,code=?,quantity=?,gross=?,tax=?,total=?,salesdate=? where sid=?");
$arr=array($_POST['billno'],$_POST['customer'],$_POST['product'],$_POST['code'],$_POST['quantity'],$_POST['gross'],$_POST['tax'],$_POST['total'],$_POST['salesdate'],$_POST['sid']);
$c->execute($arr);

}
?>

</body>
</html>
