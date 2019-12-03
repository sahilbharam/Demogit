<body>
<?php include "dbconnect.php"?>
<?php
$uname=$_COOKIE["username"];
$upass=$_COOKIE["txtpass"];

$uphone=$_COOKIE["sphone"];

$udob = $_COOKIE["sdob"];
$uaddress = $_COOKIE["sadd"];
$ucountry = $_COOKIE["scon"];

if (isset($_COOKIE["cname"]))
	$uname = $_COOKIE["cname"];
else
	$uname = "Guest";

if (isset($_COOKIE["cemail"]))
	$uemail = $_COOKIE["cemail"];
else
	$uemail = "abc@abc.com";


if (isset($_COOKIE["spass"]))
	$upass = $_COOKIE["spass"];

if (isset($_COOKIE["spass"]))
	$upass = $_COOKIE["spass"];



//echo "<br/> connection successfull  <br/>";

$sql = "insert into mydatabase(username,password,confirm,email,phone,address,dob,country) values ('$uname','$upass','$upass','$uemail','$uphone','$uaddress','$udob','$ucountry')";

//echo $sql . "<br/>";

if(!mysqli_query($con,$sql))
{
	echo "Error : " . $sql . "  " . mysqli_error($con);	
}
else
{
?>

<h3>
Dear <?php echo $uname ;?> you are successfully registered with our website , you will
soon get an email on your registered <?php echo $uemail;?> and password will be sent on given mobile 
<?php echo $uphone;
}
mysqli_close($con);
?>
</h3>












<?php 
/*session_destroy();
setcookie("cname","",time()-3600);
setcookie("cemail","",time()-3600);*/
?>
</body>