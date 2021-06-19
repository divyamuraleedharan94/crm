<?php
session_start();
$q=$_POST['tid'];

$_SESSION['r']=$q;
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
<h2 style="text-align:center"><i>Update Token</i></h2>
<?php
include("connection.php");
?>
<form action="insertcheck.php" method="post" style="margin-left:400px">
<table>

<tr><td>Rootcause:</td>
<td>
<input type="text" name="rootcause" value="" /></td></tr>
<tr><td>Corrective action:</td>
<td>
<input type="text" name="action" value="" /></td></tr>
<tr><td>Price:</td>
<td><input type="text" name="price" value=" " /></td></tr>
<tr>

<td>
<input type="submit" name="submit" value="submit" /></td></tr>

</table></form>
</body>
</html>
