<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php include "dbconnect.php"?>

	<?php
		session_start();
			if(isset($_REQUEST["flag"]))
			{
				echo "<script> alert('record updated successfully') </script>";
			}

				$uname = $_SESSION["sname"];
				$uemail = "";
				$uphone = "";
				$upassword = "";
				$uaddress = "";
			

$sql = "select password,email,phone,address from mydatabase where username = '$uname'";


$result  = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0 )
{
	while($row=mysqli_fetch_assoc($result))
	{
		$uemail = $row["email"];
		$upassword = $row["password"];
		$uphone = $row["phone"];
		$uaddress = $row["address"];
	}
}
else
{
	
	echo "Error in fetching data for " . $uname;
}

mysqli_close($con);
?>
<form action="update.php">
	<table bgcolor="grey" width="40%" align="center">
		<tr>
			<th colspan="2"> User Signup </th>
		</tr>
		<tr>
			<td>Username</td>
			<td>
				<output> <?php echo $uname ; ?> </output>
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" id="txtpass" name="txtpass" autofocus placeholder = "Enter Password" value = "<?php echo $upassword;?>"/>
				<div id="errp"></div>
				</td>
			</tr>
			<tr>
				<td>email</td>
				<td>
					<input type="email" name="email" autofocus placeholder = "Enter Email"required value = "<?php echo $uemail;?>"/>
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>
					<input type="number" name="phone" autofocus placeholder = "Enter phone Number" value ="<?php echo $uphone;?>"/>
				</td>
				</tr>
			<tr>
				<th colspan="2"> <input type="submit" class="btn btn-primary" value="Update"/> 
				<a href="delete.php" class="btn btn-primary"> Delete </a>
				</th>
			</tr>
		</table>
	</form>
</body>