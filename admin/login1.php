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
if(isset($_POST['login']))
{
    $i=$_POST['username'];
    $j=$_POST['password'];
    
    $c=$conn->prepare("select * from login where username=? and password=?");
    $arr=array($i,$j);
    $c->execute($arr);
    if($ff=$c->fetch())
    {
    header("location:homeadmin.php");
    }
	
	if(isset($_POST['login']))
{
    $a=$_POST['username'];
    $b=$_POST['password'];
    
    $d=$conn->prepare("select * from employee where username=? and password=?");
    $arr=array($a,$b);
    $d->execute($arr);
    if($f=$d->fetch())
    {
	
	$_SESSION['y']=$f['eid'];
    header("location:employee/employee.php");
    }
if(isset($_POST['login']))
{
    $l=$_POST['username'];
    $m=$_POST['password'];
    
    $p=$conn->prepare("select * from customer where username=? and password=?");
    $arr=array($l,$m);
    $p->execute($arr);
    if($f=$p->fetch())
    {
	$_SESSION['x']=$f['cid'];
    header("location:customer/customer.php");
    }
	if(isset($_POST['login']))
{
    $j=$_POST['username'];
    $k=$_POST['password'];
   
    $p=$conn->prepare("select * from employee where username=? and password=? and usertype='technician'");
    $arr=array($j,$k);
    $p->execute($arr);
    if($ff=$p->fetch())
    {

    header("location:technician/technician.php");
    }
    else{
        echo "invalid username & password";
    }
}
}}}
?>
</body>
</html>
