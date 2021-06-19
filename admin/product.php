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

<h2 style="margin-left:600px"><i> Product</i></h2>
<form action ="insertpro.php" method="post" id="f">
<table style ="padding-top:40px; margin-left:500px">

<tr>
<td>Bill no:</td>
<td><input type="text" name="billno" value="" required id="b" /><b id="bi" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Customer:</td>
<?php
 include("connection.php");
 $c=$conn->query("select name from customer");

?>
<td><select name="customer"> <?php  while($r=$c->fetch()){?>
<option value="<?php echo $r['name']?>"><?php echo $r['name']?></option><?php }?></select></td></tr>

</tr><tr><td><br /></td></tr>
<tr>
<td>Product:</td>
<?php
 include("connection.php");
 $c=$conn->query("select * from product");

?>
<td><select name="product"> <?php  while($r=$c->fetch()){?>
<option value="<?php echo $r['product']?>"><?php echo $r['product']?></option><?php }?></select></td></tr>
<tr><td><br /></td></tr>

<td>Price:</td>
<?php
 include("connection.php");
 $c=$conn->query("select price from product");

?>
<td><select name="price"> <?php  while($r=$c->fetch()){?>
<option value="<?php echo $r['price']?>"><?php echo $r['price']?></option><?php }?></select></td></tr>

</tr>
<tr><td><br /></td></tr>
<tr>
<td>Quantity:</td>
<td><input type="text" name="quantity" value=""  id="q"required /><b id="qu" style="color:green"> </b></td>
</tr>
<tr><td><br /></td></tr>

<tr>
<td><input type="submit" name="submit" value="Submit" id="s" style=" margin-left:200px" /></td></tr>
</table></form>



<?php
include("connection.php");

$c=$conn->query("select * from sales  ");
?>
<table style="border:1px solid #000000; margin-left:200px; margin-top:150px; padding:10px; width:800px;">
<tr height="50px;"><th style="border-bottom:1px solid #000000">Bill no</th>
 <th style="border-bottom:1px solid #000000">Customer</th> 
 <th style="border-bottom:1px solid #000000">Product</th> 
<th style="border-bottom:1px solid #000000">Code</th>
<th style="border-bottom:1px solid #000000">Quantity</th> 
<th style="border-bottom:1px solid #000000">Gross</th>'
<th style="border-bottom:1px solid #000000">Tax</th>
<th style="border-bottom:1px solid #000000">Total</th> 
<th style="border-bottom:1px solid #000000">Salesdate</th>
<th>  </th>
<th >  </th>
</tr>
<?php
while($r=$c->fetch())
{
?>
<tr height="50px;"> <td style="text-align:center; "><?php echo $r['billno']?></td>
<td style="text-align:center;"><?php echo $r['customer']?></td>
<td style="text-align:center;"><?php echo $r['product']?></td>
<td style="text-align:center;"><?php echo $r['code']?></td>
<td style="text-align:center;"><?php echo $r['quantity']?></td>
<td style="text-align:center;"><?php echo $r['gross']?></td>
<td style="text-align:center;"><?php echo $r['tax']?></td>
<td style="text-align:center;"><?php echo $r['total']?></td>
<td style="text-align:center;"><?php echo $r['salesdate']?></td>

<td>
<form action="editsales.php" method="post">
<input type="hidden" name="sid" value="<?php echo $r['sid'];?>" />
<input type="submit" name="edit" value="edit" /></td>
</form>
<td> <form action="deletesales.php" method="post">
<input type="hidden" name="sid" value="<?php echo $r['sid'];?>" />
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
		var w1=$("#b").val();
		var w2=/^[0-9 ]+$/;
		if ((w1=="")||(!w1.match(w2))) {
		    e.preventDefault();
		    $("#bi").html("Invalid bill number");
		}
		var w3=$("#q").val();
		var w4=/^[0-9]+$/;
		if ((w3=="")||(!w3.match(w4))) {
		    e.preventDefault();
		    $("#qu").html("Invalid quantity");
		}
		
		
		else{
		   $("#f").submit("#s"); 
		}
	    } );
		} );
		</script>
</body>
</html>
