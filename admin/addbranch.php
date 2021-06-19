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
<ul style="margin-left:900px; color:#FFFFFF;padding-top:-30px; margin-top:-40px; list-style-type:none" >

<li><a href="../login.php" style="color:#FFFFFF; text-decoration:none;  "><i>Logout</i></li></a>

</div>

<h2 style="margin-left:600px"><i>Add Branch</i></h2>



<form action="insertbranch.php" method="post" name="myform" id="f" >
<table style="padding-top:40px; margin-left:500px">
<?php
include("connection.php");

$c=$conn->query("select bid from branch ");

while($r=$c->fetch())
{
?>
<tr><td><input type="hidden" name="bid" value="<?php echo $r['bid']?>" /></td></tr>
<?php } ?>

<tr>
<td>Name:</td>
<td><input type="text" name="name" value="" id="n" placeholder="Enter name..." required  /><b id="na" style="color:green"> </b><br /></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Address:</td>
<td><input type="text" name="address" value="" id="ad" placeholder="Enter address..." required /><b id="a" style="color:green"> </b></td>
</tr><tr><td><br /></td></tr>
<tr>
<td>Incharge:</td>
<td><input type="text" name="incharge" value="" id="inc" placeholder="Enter incharge..." required /><b id="in" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Mobile:</td>
<td><input type="number" name="mobile" value="" id="num" placeholder="Enter mobile..." required /><b id="nu" style="color:green"> </b></td>
</tr><tr><td><br /></td></tr>
<tr>
<td><input type="submit" name="submit" value="Submit" id="s" style=" margin-left:200px" /></td></tr>
</table></form>




<?php
include("connection.php");

$c=$conn->query("select * from branch  ");
?>
<table style="border:1px solid #000000; margin-left:200px; margin-top:150px; padding:10px; width:800px;">
<tr height="50px;"><th style="border-bottom:1px solid #000000">Name</th>
 <th style="border-bottom:1px solid #000000">Address</th> 
 <th style="border-bottom:1px solid #000000">Incharge</th> 
<th style="border-bottom:1px solid #000000">Mobile</th>
<th>  </th>
<th >  </th>
</tr>
<?php
while($r=$c->fetch())
{
?>


<tr height="50px;"> <td style="text-align:center; "><?php echo $r['name']?></td>
<td style="text-align:center;"><?php echo $r['address']?></td>
<td style="text-align:center;"><?php echo $r['incharge']?></td>
<td style="text-align:center;"><?php echo $r['mobile']?></td>
<td>
<form action="edit.php" method="post">
<input type="hidden" name="bid" value="<?php echo $r['bid'];?>" />
<input type="submit" name="edit" value="edit" /></td>
</form>
<td> <form action="delete.php" method="post">
<input type="hidden" name="bid" value="<?php echo $r['bid'];?>" />
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
		var w1=$("#n").val();
		var w2=/^[A-Za-z ]+$/;
		if ((w1=="")||(!w1.match(w2))) {
		    e.preventDefault();
		    $("#na").html("Invalid name");
		}
		var w3=$("#ad").val();
		var w4=/^[A-Za-z ]+$/;
		if ((w3=="")||(!w3.match(w4))) {
		    e.preventDefault();
		    $("#a").html("Invalid address");
		}
		var w5=$("#inc").val();
		var w6=/^[A-Za-z ]+$/;
		if ((w5=="")||(!w5.match(w6))) {
		    e.preventDefault();
		    $("#in").html("Invalid incharge name");
		}
		
		
		else{
		   $("#f").submit("#s"); 
		}
	    } );
		} );
		</script>
</body>
</html>
