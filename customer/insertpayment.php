<?php
session_start();
?>
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
$a=$conn->prepare("update token set status=? where tid=? ");
$arr=array('completed',$_SESSION['r']);
$a->execute($arr);
}
?>
<script>
alert("Token closed successfully");
</script>

</body>
</html>
