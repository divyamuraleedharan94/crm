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
</div>

<h2 style="margin-left:600px"><i>Assign checklist</i></h2>
<form action="insertchecklist.php" method="post" style="margin-left:600px; margin-top:50px;">
<tr><th>Employee:</th><tr>
<?php
 include("connection.php");
if(isset($_POST['submit'])){
$_SESSION['a']=$_POST['customer'];
 $c=$conn->query("select name from employee where usertype='technician'" );

?>
<tr><td><select name="checklist"> <?php  while($r=$c->fetch()){?>
<option value="<?php echo $r['name']?>"><?php echo $r['name']?></option><?php }?></select></td></tr><br />
<tr><td><br /></td></tr>

<tr><td><input type="submit" name="submit" value="submit" /></td></tr>
</form>
<?php
}
?>

<table>

</body>
</html>
