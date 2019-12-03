<html>
<body>
	<?php
		 $uname=$_REQUEST["username"];
		 $upassword=$_REQUEST["password"];
		 $uconfirm=$_REQUEST["password"];
		 $uemail=$_REQUEST["txtemail"];
		 $uphone=$_REQUEST["phone"];
		 $uaddress=$_REQUEST["textarea"];
		 $ucountry=$_REQUEST["Country"];
		 $udob = $_REQUEST["dob"];
////gender 
		$ugender = $_REQUEST["radio"];
if($ugender == "m")
	$gender = "Male";
elseif($ugender == "f")
	$gender = "Female";
elseif($ugender == "t")
	$gender = "Transgender";	
else
	$gender="No Gender Selected";

///prefered language
$ulanguage = $_REQUEST["checkbox"];

$language = "";
foreach($ulanguage as $lan)
{
	$language.=$lan.",";
}

$language = substr($language,0,strlen($language)-1);
	
///country

setcookie("cname",$uname,time()+3600);
setcookie("spass",$upassword,time()+3600);
setcookie("spass",$upassword,time()+3600);
setcookie("cemail",$uemail,time()+3600);
setcookie("sphone",$uphone,time()+3600);
setcookie("sadd",$uaddress,time()+3600);
setcookie("sdob",$udob,time()+3600);
setcookie("scon",$ucountry,time()+3600);
	
	?>
	
<form  action="success.php" method="POST">	
<table align="center" border="1" width="30%">
<tr>
<th colspan="2"> Registration Form </th>
</tr>

<tr> 
<td> Username </td>
<td> <?php echo $uname ; ?> </td>
</tr>
<tr> 
<td> Password </td>
<td> <?php echo $upassword ; ?> </td>
</tr>
<tr> 
<td> Confirm </td>
<td> <?php echo $uconfirm ; ?> </td>
</tr>

<tr> 
<td> email </td>
<td> <?php echo $uemail ; ?> </td>
</tr>

<tr>
<td> phone </td>
<td> <?php echo $uphone ; ?> </td>
</tr>

<tr> 
<td> Address </td>
<td> <?php echo $uaddress ; ?> </td>
</tr>

<td> dob </td>
<td nowrap> <?php echo $udob ; ?> </td>
</tr>

<tr> 
<td> Country </td>
<td> <?php echo $ucountry ; ?> </td>
</tr>




<tr>
	<td align="right" nowrap> 
<button type="button" onclick="window.history.back()"> Back to Signup </button>
	</td>
		<td>
<button type="submit"> Confirm </button>
		</td>
</tr>
</table>
</form>
</body>
</html>