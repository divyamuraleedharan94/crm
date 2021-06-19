<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="dsd" style="background-color:#0033FF;  height:80px">
<h1 style=" padding-top:20px; padding-left:600px"><i>CRM</i></h1>
<ul style="margin-left:800px; color:#FFFFFF;padding-top:-30px; margin-top:-40px; list-style-type:none" >

<li><a href="../login.php" style="color:#FFFFFF; text-decoration:none "><i>Logout</i></li></a>

</div>
<?php
include("connection.php");
?>
<form action="inserttoken.php" method="post" style="margin-left:550px">
<table>
<h2 ><i>Add Token</i></h2>

<tr>
<td>Complaint:</td><td><input type="text" name="complaint" value=""  /></td></tr>
<br /><br />
<tr><td>Description:</td><td><input type="text" name="description"  values="" /></td></tr>
<br /><br />
<tr><td><br /></td></tr>
<tr><td><input type="submit" name="submit" value="submit" style="margin-left:150px" /></td></tr>
</form></table>
<?php
if(isset($_POST['submit'])){
$_SESSION['f']=$_POST['sid'];

}
?>
</body>
</html>
