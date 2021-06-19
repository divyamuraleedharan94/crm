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
$c=$conn->prepare("select * from employee where eid=?");
$arr=array($_POST['eid']);
$c->execute($arr);
while($r=$c->fetch())
{
?>
<table style="border:1px solid black; width:200px; margin-left:400px; padding-left:10px; padding-top:10px">
<form action="updateemp.php" method="post">
<tr>
<td><input type="hidden" name="eid" value="<?php echo $r['eid'];?> " /></td></tr>
<tr><th>Name</th><td>
<input type="text" name="name" value="<?php echo $r['name'];?>" /></td></tr>
<tr><th>Age</th><td>
<input type="text" name="age" value="<?php echo $r['age'];?>" /></td></tr>
<tr><th>Branch</th><td>
<input type="text" name="branch" value="<?php echo $r['branch'];?>" /></td></tr>
<tr><th>Address</th><td>
<input type="text" name="address" value="<?php echo $r['address'];?>" /></td></tr>
<tr><th>Usertype</th><td>

<input type="text" name="usertype" value="<?php echo $r['usertype'];?>" /></td></tr>
<tr><th>Email</th><td>
<input type="text" name="email" value="<?php echo $r['email'];?>" /></td></tr>
<tr><th>Phone</th><td>
<input type="text" name="phone" value="<?php echo $r['phone'];?>" /></td></tr>
<tr><th>Username</th><td>
<input type="text" name="username" value="<?php echo $r['username'];?>" /></td></tr>
<tr><td>
<input type="submit" name="submit" value="submit" style="margin-left:60px" /></td></tr>
</form></table>
<?php
}}
?>
</body>
</html>
