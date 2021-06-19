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
$c=$conn->prepare("select * from customer where cid=?");
$arr=array($_POST['cid']);
$c->execute($arr);
while($r=$c->fetch())
{
?>
<table style="border:1px solid black; width:200px; margin-left:400px; padding-left:10px; padding-top:10px">
<form action="updatecust.php" method="post">
<tr>
<td><input type="hidden" name="cid" value="<?php echo $r['cid'];?> " /></td></tr>
<tr><th>Name</th><td>
<input type="text" name="name" value="<?php echo $r['name'];?>" /></td></tr>
<tr><th>Address</th><td>
<input type="text" name="address" value="<?php echo $r['address'];?>" /></td></tr>
<tr><th>Phone1</th><td>
<input type="text" name="phone1" value="<?php echo $r['phone1'];?>" /></td></tr>
<tr><th>Phone2</th><td>
<input type="text" name="phone2" value="<?php echo $r['phone2'];?>" /></td></tr>
<tr><th>Email</th><td>
<input type="text" name="email" value="<?php echo $r['email'];?>" /></td></tr>
<tr><th>DOB</th><td>
<input type="text" name="dob" value="<?php echo $r['dob'];?>" /></td></tr>
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
