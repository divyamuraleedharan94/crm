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
<h2 style="text-align:center"><i>Payment information</i></h2>

<form action="insertpayment.php" method="post" style="margin-left:400px">
<table>

<tr><td>Card type:</td>
<td>
<select name="cardtype">
<option>credit</option><option>debit</option></select></td></tr>
<tr><td>Cardholder's name:</td>
<td>
<input type="text" name="name" value="" /></td></tr>
<tr><td>Card number:</td>
<td><input type="text" name="number" value=" " /></td></tr>
<tr><td>Expiry date:</td>
<td><input type="date" name="date" value=" " /></td></tr>
<tr><td>Price:</td>
<td><input type="text" name="price" value=" " /></td></tr>

<tr>

<td>
<input type="submit" name="submit" value="submit" /></td></tr>

</table></form>
</body>
</html>
