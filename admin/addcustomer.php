<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../jquery-3.0.0.js"></script></head>

<body>
<div class="dsd" style="background-color:#0033FF;  height:80px">
<h1 style=" padding-top:20px; padding-left:600px"><i>CRM</i></h1>
<ul style="margin-left:800px; color:#FFFFFF;padding-top:-30px; margin-top:-40px; list-style-type:none" >

<li><a href="../login.php" style="color:#FFFFFF; text-decoration:none "><i>Logout</i></li></a>

</div>

<h2 style="margin-left:600px"><i>Add Customer</i></h2>
<form action ="insertcustomer.php" method="post" id="f">
<table style ="padding-top:40px; margin-left:500px">
<?php
include("connection.php");

$c=$conn->query("select cid from customer ");

while($r=$c->fetch())
{
?>
<tr><td><input type="hidden" name="cid" value="<?php echo $r['cid']?>" /></td></tr>
<?php } ?>
<tr>
<td>Name:</td>
<td><input type="text" name="name" value="" placeholder="Enter name..." id="n" required /><b id="na" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Address:</td>
<td><input type="text" name="address" value="" placeholder="Enter address..." id="a" required /><b id="ad" style="color:green"> </b></td>
</tr><tr><td><br /></td></tr>
<tr>
<td>Phone1:</td>
<td><input type="number" name="phone1" value="" placeholder="Enter phoneno..." id="p1" required /><b id="ph1" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Phone2:</td>
<td><input type="number" name="phone2" value="" placeholder="Enter phoneno..." id="p2" required /><b id="ph2" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email" value="" placeholder="Enter email..." required id="e" /><b id="em" style="color:green"> </b></td>
</tr><tr><td><br /></td></tr>
<tr>
<td>DOB:</td>
<td><input type="date" name="dob" value="" required/></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Username:</td>
<td><input type="text" name="username" value="" placeholder="Enter username..." id="u" required /><b id="us" style="color:green"> </b></td>
</tr><tr><td><br /></td></tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" value="" placeholder="Enter password..." id="pa" required/> <b id="pw" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td><input type="submit" name="submit" value="Submit" style=" margin-left:200px" id="s"/></td></tr>
</table></form>

<?php
include("connection.php");

$c=$conn->query("select * from customer ");
?>
<table style="border:1px solid #000000; margin-left:200px; margin-top:150px; padding:10px; width:800px;">
<tr height="50px;"><th style="border-bottom:1px solid #000000">Name</th>
 <th style="border-bottom:1px solid #000000">Address</th> 
 <th style="border-bottom:1px solid #000000">Phone1</th> 
<th style="border-bottom:1px solid #000000">Phone2</th>
<th style="border-bottom:1px solid #000000">Email</th> 
<th style="border-bottom:1px solid #000000">DOB</th>
<th style="border-bottom:1px solid #000000">Username</th>


</tr>
<?php
while($r=$c->fetch())
{
?>
<tr height="50px;"> <td style="text-align:center; "><?php echo $r['name']?></td>
<td style="text-align:center;"><?php echo $r['address']?></td>
<td style="text-align:center;"><?php echo $r['phone1']?></td>
<td style="text-align:center;"><?php echo $r['phone2']?></td>
<td style="text-align:center;"><?php echo $r['email']?></td>
<td style="text-align:center;"><?php echo $r['dob']?></td>
<td style="text-align:center;"><?php echo $r['username']?></td>

<td>
<form action="editcust.php" method="post">
<input type="hidden" name="cid" value="<?php echo $r['cid'];?>" />
<input type="submit" name="edit" value="edit" /></td>
</form>
<td> <form action="deletecust.php" method="post">
<input type="hidden" name="cid" value="<?php echo $r['cid'];?>" />
<input type="submit" name="delete" value="delete" /></td>
</tr>
</form>
<?php
}
?>
<script>
$(document).ready(function(){
$("#pa").keyup(function(){
		var w=$("#pa").val();
		if (w.length>6) {
	
		   $("#pw").html("strong");
		   $("#pw").css("color","green");
		   //code
		}
		else
		{
		   $("#pw").html("weak"); 
		   $("#pw").css("color","red");
		}

	    } );

$("#s").click(function(e){
		var w1=$("#n").val();
		var w2=/^[A-Za-z ]+$/;
		if ((w1=="")||(!w1.match(w2))) {
		    e.preventDefault();
		    $("#na").html("Invalid name");
		}
		
		var w5=$("#a").val();
		var w6=/^[A-Za-z0-9 ]+$/;
		if ((w5=="")||(!w5.match(w6))) {
		    e.preventDefault();
		    $("#ad").html("Invalid address");
		}
		var w8=$("#p1").val();
		var w9=/^[0-9 ]+$/;
		if ((w8=="")||(!w5.match(w9))) {
		    e.preventDefault();
		    $("#ph1").html("Invalid number");
		}
		var w15=$("#p2").val();
		var w16=/^[0-9 ]+$/;
		if ((w15=="")||(!w15.match(w16))) {
		    e.preventDefault();
		    $("#ph2").html("Invalid number");
		}
		var w6=$("#e").val();
		var w7=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if ((w6=="")||(!w6.match(w7))) {
		    e.preventDefault();
		    $("#em").html("Invalid email");
			}
			
		var w10=$("#u").val();
		var w11=/^[A-Za-z0-9 ]+$/;
		if ((w10=="")||(!w10.match(w11))) {
		    e.preventDefault();
		    $("#us").html("Invalid username");
		}
		var w12=$("#pa").val();
		
		if ((w1=="")) {
		    e.preventDefault();
		    $("#pw").html("invalid password");
		}
		
		else{
		   $("#f").submit("#s"); 
		}
	    } );
		} );
		</script>

</table>
</body>
</html>
