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
<form action="maintanence.php" method="post" style="margin-left:550px">
<table>
<h2 ><i>Maintanence Report</i></h2>
<tr>
<td>Start date:</td><td><input type="date" name="sdate" value=""  /></td></tr>
<br /><br />
<tr><td>End date:</td><td><input type="date" name="edate"  values="" /></td></tr>
<br /><br />
<tr><td><input type="submit" name="submit" value="View Report" /></td></tr>
</form>
<?php
include("connection.php");

if(isset($_POST['submit'])){
 
$cp=$conn->prepare("select * from token where correctivedate BETWEEN  ? AND  ?  ORDER by tid DESC  ");
$arr=array($_POST['sdate'],$_POST['edate']);
$cp->execute($arr);



?>

<table style="border:1px solid #000000; padding:10px; width:800px; margin-left:-350px">
<tr height="50px;"> <th style="border-bottom:1px solid #000000">Customer</th> 

 <th style="border-bottom:1px solid #000000">Technician</th> 
<th style="border-bottom:1px solid #000000">Complaint</th>
<th style="border-bottom:1px solid #000000">Rootcause</th> 
<th style="border-bottom:1px solid #000000">Correctiveaction</th>'
<th style="border-bottom:1px solid #000000">Price</th>
 

</tr>
<?php
while($r=$cp->fetch())
{
?>
<tr height="50px;"> <td style="text-align:center; "><?php echo $r['customer']?></td>
<td style="text-align:center;"><?php echo $r['attendby']?></td>
<td style="text-align:center;"><?php echo $r['complaint']?></td>
<td style="text-align:center;"><?php echo $r['rootcause']?></td>
<td style="text-align:center;"><?php echo $r['correctiveaction']?></td>
<td style="text-align:center;"><?php echo $r['price']?></td>




</form>
<?php
}}
?>

</table>

</body>
</html>
