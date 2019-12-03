<?php include "dbconnect.php"?>

<?php 
session_start();
$uname = $_REQUEST["Username"];
$upass = $_REQUEST["Password"];

$_SESSION["spass"] = $upass;
$_SESSION["sname"] = $uname;

$sql = "select count(*) as cnt from mydatabase where 
username = '$uname' ;";

//echo $sql;

//mysqli_close($con);
$flag = 0;

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result))
{
		$flag = $row["cnt"];
		

}
?>

<?php
if($flag)
{
		echo "Welcome " . $uname;
		?>
   <form action="myaccount.php"> <input type="submit"></form>
<?php
}
else
{
	header('Location:home.php?$flag='.$flag);
}

mysqli_close($con);
?>