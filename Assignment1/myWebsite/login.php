<?php include "dbconnect.php"?>

<?php 
session_start();
$uname = $_REQUEST["username"];
$upass = $_REQUEST["userpassword"];

$sql = "select count(*) as cnt from user_registration where 
username = '$uname' and userpass = '$upass'";

//echo $sql;

//mysqli_close($con);
$flag = 0;

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result))
{
		$flag = $row["cnt"];
		$_SESSION["susername"] = $uname;
}

?>
<div style="width:100%;text-align:right">
	<a href="myaccount.php"> My Account </a> &nbsp;&nbsp;&nbsp;
	<a href="logout.php"> Logout </a>
</div>



<?php
if($flag)
{
		echo "Welcom " . $uname;

}
else
{
	
	header('Location: http://localhost/mywebsite/homepage.php?flag='.$flag);
}


?>