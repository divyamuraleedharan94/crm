i<?php
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
$addeddate=date("y-m-d");
$a=$conn->prepare("insert into token(complaint,description,customer,status,addeddate,sid) values(?,?,?,?,?,?)");
$arr=array($_POST['complaint'],$_POST['description'],$_SESSION['x'],'pending',$addeddate,$_SESSION['f']);
$a->execute($arr);


}

?>
<script>
alert("Token added successfully");
</script>
</body>
</html>
