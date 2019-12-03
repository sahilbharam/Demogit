<?php include "dbconnect.php"?>

<?php
session_start();
$uname=$_SESSION["sname"];
$upass=$_SESSION["spass"];
$uemail=$_REQUEST["email"];
$uphone=$_REQUEST["phone"];


$sql = "update mydatabase
set password = '$upass',
email = '$uemail',
phone = '$uphone'
where username = '$uname'";


if(mysqli_query($con,$sql))
{
		header('location:myaccount.php');
}
else
{
		echo "error" . mysqli_error($con);
}

mysqli_close($con);
?>
