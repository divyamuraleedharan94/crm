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
$c=$conn->prepare("update branch set name=?,address=?,incharge=?,mobile=? where bid=?");
$arr=array($_POST['name'],$_POST['address'],$_POST['incharge'],$_POST['mobile'],$_POST['bid']);
$c->execute($arr);

}
?>
</body>
</html>
