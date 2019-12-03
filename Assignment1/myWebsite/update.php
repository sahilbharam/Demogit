<?php include "dbconnect.php"?>

<?php 
session_start();
$uname = $_SESSION["susername"];
$upass = $_REQUEST["txtpass"];
$uemail = $_REQUEST["email"];
$umobile = $_REQUEST["mobile"];

$sql = "update user_registration
set userpass = '$upass',
email = '$uemail',
mobile = $umobile
where username = '$uname'";

//echo $sql;

if(mysqli_query($con,$sql))
{
		header('Location: http://localhost/mywebsite/myaccount.php?flag=1');
}
else
{
		echo "error" . mysqli_error($con);
}

mysqli_close($con);
?>