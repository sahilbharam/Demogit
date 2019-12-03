<?php include "dbconnect.php"?>

<?php 
session_start();
$uname = $_SESSION["sname"];

$sql ="delete from mydatabase where username = '$uname'";

if(mysqli_query($con,$sql))
{
	session_destroy();
		header('Location: home.php');
}
else
{
		echo "error" . mysqli_error($con);
}


mysqli_close($con);
?>