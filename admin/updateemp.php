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
$c=$conn->prepare("update employee set name=?,age=?,branch=?,address=?,usertype=?,email=?,phone=?,username=? where eid=?");
$arr=array($_POST['name'],$_POST['age'],$_POST['branch'],$_POST['address'],'employee',$_POST['email'],$_POST['phone'],$_POST['username'],$_POST['eid']);
$c->execute($arr);

}
?>

</body>
</html>
