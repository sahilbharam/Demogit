<?php 
$servername = "localhost" ; // 192.168.100.26:3306
$username = "root"; // group001
$userpass = ""; //
$dbname = "mydatabase"; //group001

$con = mysqli_connect($servername,$username,$userpass,$dbname);

if(!$con)
{
		die("Connection Failed ".mysqli_connect_error());
}
?>