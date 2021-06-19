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

$a=$conn->prepare("insert into customer(name,address,phone1,phone2,email,dob,username,password) values(?,?,?,?,?,?,?,?)");
$arr=array($_POST['name'],$_POST['address'],$_POST['phone1'],$_POST['phone2'],$_POST['email'],$_POST['dob'],$_POST['username'],$_POST['password']);
$a->execute($arr);

}

?>
</body>
</html>
