<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
$c=$conn->prepare("update checklist set product=?,checklist=?,code=? where chid=?");
$arr=array($_POST['product'],$_POST['checklist'],$_POST['code'],$_POST['chid']);
$c->execute($arr);

}
?>

</body>
</html>
