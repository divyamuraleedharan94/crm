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

<h2 style="margin-left:600px"><i>Add Product</i></h2>
<form action ="insertproduct.php" method="post" id="f">
<table style ="padding-top:40px; margin-left:500px">
<?php
include("connection.php");

$c=$conn->query("select pid from product ");

while($r=$c->fetch())
{
?>
<tr><td><input type="hidden" name="pid" value="<?php echo $r['pid']?>" /></td></tr>
<?php } ?>


<tr>
<td>Product:</td>
<td><input type="text" name="product" value="" id="p" placeholder="Enter product..." required /><b id="pr" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Code:</td>
<td><input type="text" name="code" value="" id="c" placeholder="Enter code..."  /><b id="co" style="color:green"> </b></td>
</tr><tr><td><br /></td></tr>
<tr>
<td>Warranty:</td>
<td><input type="text" name="warranty" id="w" value="" placeholder="Enter warranty..."  /><b id="wa" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Price:</td>
<td><input type="text" name="price" value="" placeholder="Enter price..." id="pr" required /><b id="pri" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Tax:</td>
<td><input type="text" name="tax" value="" placeholder="Enter tax..." id="t" required /><b id="ta" style="color:green"> </b></td>
</tr><tr><td><br /></td></tr>
<tr>
<td>PM period:</td>
<td><input type="text" name="pmperiod" value="" placeholder="Enter pmperiod..." id="pm" required /><b id="pmp" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td><input type="submit" name="submit" value="Submit" style=" margin-left:200px" required id="s" /></td></tr>
</table></form>

<?php
include("connection.php");

$c=$conn->query("select * from product  ");
?>
<table style="border:1px solid #000000; margin-left:200px; margin-top:150px; padding:10px; width:800px;">
<tr height="50px;"><th style="border-bottom:1px solid #000000">Product</th>
 <th style="border-bottom:1px solid #000000">Code</th> 
 <th style="border-bottom:1px solid #000000">Warranty</th> 
<th style="border-bottom:1px solid #000000">Price</th>
<th style="border-bottom:1px solid #000000">Tax</th> 
<th style="border-bottom:1px solid #000000">Pm period</th>
<th>  </th>
<th >  </th>
</tr>
<?php
while($r=$c->fetch())
{
?>
<tr height="50px;"> <td style="text-align:center; "><?php echo $r['product']?></td>
<td style="text-align:center;"><?php echo $r['code']?></td>
<td style="text-align:center;"><?php echo $r['warranty']?></td>
<td style="text-align:center;"><?php echo $r['price']?></td>
<td style="text-align:center;"><?php echo $r['tax']?></td>
<td style="text-align:center;"><?php echo $r['pmperiod']?></td>
<td>
<form action="editprod.php" method="post">
<input type="hidden" name="pid" value="<?php echo $r['pid'];?>" />
<input type="submit" name="edit" value="edit" /></td>
</form>
<td> <form action="deleteprod.php" method="post">
<input type="hidden" name="pid" value="<?php echo $r['pid'];?>" />
<input type="submit" name="delete" value="delete" /></td>
</tr>
</form>
<?php
}
?>
<script>
$(document).ready(function(){

 $("#s").click(function(e){
		var w1=$("#p").val();
		var w2=/^[A-Za-z ]+$/;
		if ((w1=="")||(!w1.match(w2))) {
		    e.preventDefault();
		    $("#pr").html("Invalid product name");
		}
		var w3=$("#c").val();
		var w4=/^[0-9 ]+$/;
		if ((w3=="")||(!w3.match(w4))) {
		    e.preventDefault();
		    $("#co").html("Invalid code");
		}
		var w5=$("#w").val();
		var w6=/^[0-9 ]+$/;
		if ((w5=="")||(!w5.match(w6))) {
		    e.preventDefault();
		    $("#wa").html("Invalid warranty");
		}
		var w7=$("#pr").val();
		var w8=/^[0-9 ]+$/;
		if ((w7=="")||(!w7.match(w8))) {
		    e.preventDefault();
		    $("#pri").html("Invalid price");
		}
		var w9=$("#t").val();
		var w10=/^[0-9 ]+$/;
		if ((w9=="")||(!w9.match(w10))) {
		    e.preventDefault();
		    $("#ta").html("Invalid tax");
			var w5=$("#pm").val();
		var w6=/^[0-9A-za-z ]+$/;
		if ((w5=="")||(!w5.match(w6))) {
		    e.preventDefault();
		    $("#pmp").html("Invalid pmperiod");
		}
		
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
