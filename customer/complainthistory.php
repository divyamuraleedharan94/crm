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

$c=$conn->query("select * from token ");
?>
<table style="border:1px solid #000000; margin-left:200px; margin-top:150px; padding:10px; width:800px;">
<tr height="50px;"><th style="border-bottom:1px solid #000000">Complaint</th>
 <th style="border-bottom:1px solid #000000">Description</th> 
 <th style="border-bottom:1px solid #000000">Status</th> 
<th style="border-bottom:1px solid #000000">Added date</th>
<th style="border-bottom:1px solid #000000">Rootcause</th> 
<th style="border-bottom:1px solid #000000">Corrective action</th>
<th style="border-bottom:1px solid #000000">Corrective date</th>


</tr>
<?php
while($r=$c->fetch())
{
?>
<tr height="50px;"> <td style="text-align:center; "><?php echo $r['complaint']?></td>
<td style="text-align:center;"><?php echo $r['description']?></td>
<td style="text-align:center;"><?php echo $r['status']?></td>

<td style="text-align:center;"><?php echo $r['addeddate']?></td>
<td style="text-align:center;"><?php echo $r['rootcause']?></td>
<td style="text-align:center;"><?php echo $r['correctiveaction']?></td>
<td style="text-align:center;"><?php echo $r['correctivedate']?></td>


<?php
}
?>

</table>
</body>
</html>
