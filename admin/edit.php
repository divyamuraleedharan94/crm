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
$c=$conn->prepare("select * from branch where bid=?");
$arr=array($_POST['bid']);
$c->execute($arr);
while($r=$c->fetch())
{
?>
<table style="border:1px solid black; width:200px; margin-left:400px; padding-left:10px; padding-top:10px">
<form action="update.php" method="post">
<tr>
<td><input type="hidden" name="bid" value="<?php echo $r['bid'];?> " /></td></tr>
<tr><th>Name</th><td>
<input type="text" name="name" value="<?php echo $r['name'];?>" /></td></tr>
<tr><th>Address</th><td>
<input type="text" name="address" value="<?php echo $r['address'];?>" /></td></tr>
<tr><th>Incharge</th><td>
<input type="text" name="incharge" value="<?php echo $r['incharge'];?>" /></td></tr>
<tr><th>Mobile</th><td>
<input type="text" name="mobile" value="<?php echo $r['mobile'];?>" /></td></tr>
<tr><td>
<input type="submit" name="submit" value="submit" style="margin-left:60px" /></td></tr>
</form></table>
<?php
}}
?>
</body>
</html>
