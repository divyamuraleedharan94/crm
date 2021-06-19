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

<h2 style="margin-left:600px"><i>Add Employee</i></h2>
<form action="insertemployee.php" method="post" id="f" style="margin-left:500px; margin-top:50px;">
<table>
<tr><td>Name:</td><td><input type="text" name="name" value="" id="n" placeholder="Enter name..."  required  style="width:300px;  "/><b id="na" style="color:green"> </b></td></tr>
<tr><td><br /></td></tr>
<tr><td>Age:</td><td><input type="text" name="age" id="ag" value="" placeholder="Enter age..." required  style="width:300px;" maxlength="2" /><b id="a" style="color:green"> </b></td></tr>
<tr><td><br /></td></tr>
<tr><td>Branch:</td><td>
<?php
 include("connection.php");
 $c=$conn->query("select name from branch");

?>
<select name="branch"> <?php  while($r=$c->fetch()){?>
<option value="<?php echo $r['name']?>"><?php echo $r['name']?></option><?php }?></select></td></tr>
<tr><td><br /></td></tr>
<tr><td>Address:</td><td><input type="text" name="address" value="" id="ad" placeholder="Enter address..."  required style="width:300px; "/><b id="add" style="color:green"> </b></td></tr>
<tr><td><br /></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" value="" id="e" placeholder="Enter email..." required   style="width:300px;"/><b id="em" style="color:green"> </b></td></tr>
<tr><td><br /></td></tr>
<tr><td>Phone:</td><td><input type="text" name="phone" value="" id="p" placeholder="Enter phone..." required  style="width:300px;"/><b id="ph" style="color:green"> </b></td></tr>
<tr><td><br /></td></tr>
<tr><td>Username:</td><td><input type="text" name="user" value="" id="us" placeholder="Enter username..." required  style="width:300px;" /><b id="u" style="color:green"> </b></td></tr>
<tr><td><br /></td></tr>
<tr><td>Usertype:</td><td>
<select name="usertype">
<option value="employee">Employee</option>
<option value="technician">Technician</option>
</select></td></tr>
<tr><td><br /></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" value="" id="pa" placeholder="Enter password..."   style="width:300px;"/><b id="pw" style="color:green"> </b></td></tr>
<tr><td><br /></td></tr>
</table>
<input type="submit" name="submit" value="submit" id="s" />
</form>




<?php
include("connection.php");

$c=$conn->query("select * from employee ");
?>
<table style="border:1px solid #000000; margin-left:200px; margin-top:150px; padding:10px; width:800px;">
<tr height="50px;"><th style="border-bottom:1px solid #000000">Name</th>
 <th style="border-bottom:1px solid #000000">Age</th> 
 <th style="border-bottom:1px solid #000000">Branch</th> 
<th style="border-bottom:1px solid #000000">Address</th>
<th style="border-bottom:1px solid #000000">  Usertype</th>
<th  style="border-bottom:1px solid #000000"> Email </th>
<th style="border-bottom:1px solid #000000"> Phone</th>
<th style="border-bottom:1px solid #000000"> Username </th>


</tr>
<?php
while($r=$c->fetch())
{
?>


<tr height="50px;"> <td style="text-align:center; "><?php echo $r['name']?></td>
<td style="text-align:center;"><?php echo $r['age']?></td>
<td style="text-align:center;"><?php echo $r['branch']?></td>
<td style="text-align:center;"><?php echo $r['address']?></td>
<td style="text-align:center;"><?php echo $r['usertype']?></td>
<td style="text-align:center;"><?php echo $r['email']?></td>
<td style="text-align:center;"><?php echo $r['phone']?></td>
<td style="text-align:center;"><?php echo $r['username']?></td>
<td>
<form action="editemp.php" method="post">
<input type="hidden" name="eid" value="<?php echo $r['eid'];?>" />
<input type="submit" name="edit" value="edit" /></form></td>

<td> <form action="deleteemp.php" method="post">
<input type="hidden" name="eid" value="<?php echo $r['eid'];?>" />
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
		var w3=$("#ag").val();
		var w4=/^[A-Za-z ]+$/;
		if ((w3=="")||(!w3.match(w4))) {
		    e.preventDefault();
		    $("#a").html("Invalid age");
		}
		var w5=$("#ad").val();
		var w6=/^[A-Za-z0-9 ]+$/;
		if ((w5=="")||(!w5.match(w6))) {
		    e.preventDefault();
		    $("#add").html("Invalid address");
		}
		var w6=$("#e").val();
		var w7=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if ((w6=="")||(!w6.match(w7))) {
		    e.preventDefault();
		    $("#em").html("Invalid email");
		}
		var w8=$("#p").val();
		var w9=/^[0-9 ]+$/;
		if ((w8=="")||(!w5.match(w9))) {
		    e.preventDefault();
		    $("#ph").html("Invalid number");
		}
		var w10=$("#us").val();
		var w11=/^[A-Za-z0-9 ]+$/;
		if ((w10=="")||(!w10.match(w11))) {
		    e.preventDefault();
		    $("#u").html("Invalid username");
		}
		var w12=$("#p").val();
		
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
