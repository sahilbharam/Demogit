<html>
<body style="color:white">
<?php
session_start();
//$uname = $_GET["txtname"];
//$uname = $_POST["txtname"];
$uname = $_REQUEST["txtname"];
$upass = $_REQUEST["txtpass"];
$uemail = $_REQUEST["email"];
$ugender = $_REQUEST["rdogender"];
if($ugender == "m")
	$gender = "Male";
elseif($ugender == "f")
	$gender = "Female";
elseif($ugender == "t")
	$gender = "Transgender";	
else
	$gender="No Gender Selected";
//echo $uname;
$ueducation = $_REQUEST["chkedu"];

$education = "";
foreach($ueducation as $edu)
{
	$education.=$edu.",";
}

$education = substr($education,0,strlen($education)-1);

//echo $education;

$ucountry = $_REQUEST["selcountry"];
$uhobby = $_REQUEST["selhobbies"];
$uhobbies="";

foreach($uhobby as $uhob)
{
	$uhobbies .=$uhob.",";
}

$uhobbies = substr($uhobbies,0,strlen($uhobbies)-1);

$udob = $_REQUEST["dob"];

$uexperience = $_REQUEST["experience"];

$uprofile =  $_REQUEST["profile"];

$umobile =   $_REQUEST["mobile"];


setcookie("cname",$uname,time()+3600);
setcookie("cemail",$uemail,time()+3600);

$_SESSION["spass"] = $upass;
$_SESSION["smobile"] = $umobile;






?>
<form action="success.php">
<table align="center" border="1" width="30%" bgcolor="red">
<tr>
<th colspan="2"> Registration Form </th>
</tr>

<tr> 
<td> Username </td>
<td> <?php echo $uname ; ?> </td>
</tr>
<tr> 
<td> Password </td>
<td> <?php echo $upass ; ?> </td>
</tr>
<tr> 
<td> email </td>
<td> <?php echo $uemail ; ?> </td>
</tr>
<tr> 
<td> gender </td>
<td> <?php echo $gender ; ?> </td>
</tr>
<tr> 
<td> Education </td>
<td> <?php echo $education ; ?> </td>
</tr>
<tr> 
<td> country </td>
<td> <?php echo $ucountry ; ?> </td>
</tr>
<tr> 
<td> country </td>
<td nowrap> <?php echo $uhobbies ; ?> </td>
</tr>
<tr> 
<td> dob </td>
<td nowrap> <?php echo $udob ; ?> </td>
</tr>
<tr> 
<td> mobile </td>
<td nowrap> <?php echo $umobile ; ?> </td>
</tr>
<tr> 
<td> Experience </td>
<td nowrap> <?php echo $uexperience ; ?> Yrs</td>
</tr>
<tr> 
<td nowrap> Profile Picture </td>
<td nowrap> <img src="images/<?php echo $uprofile ; ?>" height="100" width="100"></td>
</tr>
<tr>
<td align="right" nowrap> 
<button type="button" onclick="window.history.back()"> Back to Signup </button></td>
<td>
<button type="submit"> Confirm </button>
</td>
</tr>
</table>
</form>
</body>
</html>