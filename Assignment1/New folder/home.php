<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="nav.css">

<div class="container-fluid alert bg-dark sticky-top" >

	<a class="menulink" href="home.html"> Home</a>
	<a class="menulink" href="product1.htm"> Product</a>
	<a class="menulink" href="registration.html"> SignUp</a>
	<a class="menulink" href="registration.html"> </a>
	<a class="menulink" href="feedback.html"> Feedback</a>
</div>

</head>
<body background="bg1.jpg" width="100%" height="100%">

<?php
$errmessage ="";
if(isset($_REQUEST["flag"]))
{
	$errmessage =  "Username or Password incorrect";
}
else
{
	$errmessage ="";
}
	
?>
<form action="login.php">
<div class="relative">
<div class="absolute">
<br>
<label for="Username"><font color="red"><b>Username</b></font></label>

<input type="text" placeholder="Username" name="Username" autofocus required><br>
<label for="Password"><font color="red"><b>Password</b></font></label>

&nbsp;<input type="password" placeholder="Password" name="Password" required><br>
&emsp;&nbsp;<button type="submit" "alert-success">Login</button>&nbsp;

<button type="submit" "alert-success">New User</button>
<div> <?php echo $errmessage ?> </div>
</div>
</div>
</form>
</body>
</html>