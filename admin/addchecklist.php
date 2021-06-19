<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../jquery-3.0.0.js"></script>
</head>

<body>
<div class="dsd" style="background-color:#0033FF;  height:80px">
<h1 style=" padding-top:20px; padding-left:600px"><i>CRM</i></h1>
<ul style="margin-left:800px; color:#FFFFFF;padding-top:-30px; margin-top:-40px; list-style-type:none" >

<li><a href="../login.php" style="color:#FFFFFF; text-decoration:none "><i>Logout</i></li></a>

</div>

<h2 style="margin-left:600px"><i>Add Checklist<i></h2>

<form action ="insertproduct.php" method="post" id="f">
<table style ="padding-top:40px; margin-left:500px">
<?php
include("connection.php");

$c=$conn->query("select chid from checklist ");

while($r=$c->fetch())
{
?>
<tr><td><input type="hidden" name="chid" value="<?php echo $r['chid']?>" /></td></tr>
<?php } ?>

<tr>
<td>Product:</td><?php include("connection.php");
$c=$conn->query("select product from product");
?>
<td><select name="product"> <?php
while($r=$c->fetch()){

?>
 <option value="<?php echo $r['product']?>"><?php echo $r['product']?></option> <?php
}
?>
</td>
</tr><tr><td><br /> </td></tr>
<tr>
<td>Checklist: </td>
<td><input type="text" name="checklist" value="" placeholder="Enter checklist..." id="c"  required /><b id="cl" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Code:</td><?php include("connection.php");
$c=$conn->query("select code from product");
?>
<td><select name="code"> <?php
while($r=$c->fetch()){

?>
 <option value="<?php echo $r['code']?>"><?php echo $r['code']?></option> <?php
}
?>
</td>
<tr>
<td><input type="submit" name="submit" value="Submit" style=" margin-left:200px" id="s" /></td></tr>
</table></form>
<?php
include("connection.php");

$c=$conn->query("select * from checklist  ");
?>
<table style="border:1px solid #000000; margin-left:200px; margin-top:150px; padding:10px; width:800px;">
<tr height="50px;"><th style="border-bottom:1px solid #000000">Product</th>
<th style="border-bottom:1px solid #000000">Checklist</th>
 <th style="border-bottom:1px solid #000000">Code</th> 
  

</tr>
<?php
while($r=$c->fetch())
{
?>
<tr height="50px;"> <td style="text-align:center; "><?php echo $r['product']?></td>
<td style="text-align:center;"><?php echo $r['checklist']?></td>

<td style="text-align:center;"><?php echo $r['code']?></td>

<td>
<form action="editcheck.php" method="post">
<input type="hidden" name="chid" value="<?php echo $r['chid'];?>" />
<input type="submit" name="edit" value="edit" /></td>
</form>
<td> <form action="deletecheck.php" method="post">
<input type="hidden" name="chid" value="<?php echo $r['chid'];?>" />
<input type="submit" name="delete" value="delete" /></td>
</tr>
</form>
<?php
}
?>

</table>
<script>
$(document).ready(function(){
 $("#s").click(function(e){
		var w1=$("#c").val();
		var w2=/^[A-Za-z ]+$/;
		if ((w1=="")||(!w1.match(w2))) {
		    e.preventDefault();
		    $("#cl").html("Invalid checklist");
		}
		else{
		   $("#f").submit("#s"); 
		}
	    } );
		} );
		</script>
</body>
</html>
