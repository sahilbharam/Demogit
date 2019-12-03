<html>
<meta name="viewort" content="width=device-width,initial-scale=1">
<link href="css/bootstrap.min.css"rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>

</script>
<?php
session_start();
if (isset($_SESSION["upass"]))
	 $_SESSION["upass"];
else
	header('Location: home.php');
	
if (isset($_SESSION["uname"]))
	 $_SESSION["uname"];
else
	header('Location: home.php');
?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="prod.css">
<style>
.card
{
  color: black;
  text-align: center;
}
</style>
<div class="container-fluid alert bg-dark sticky-top">

	<a class="menulink" href="home.html"> Home</a>
	<a class="menulink" href="product1.htm"> Product</a>
	<a class="menulink" href="registration.html"> SignUp</a>
	<a class="menulink" href="feedback.html"> Feedback</a>
</div>

</head>
	<body>
	
	<div class="container" bgcolor="transparent">
	<div class="row">
	<div class="col-3">
	
	<p><img src="cm1.jpeg"  class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Nikon D5600<br></p>
	<p class="alert alert-danger">Price:45,000 Rs <strike><br>Price: 55,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	<div class="col-3">
	<p><img src="cm2.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Canon D3500<br></p>
	<p class="alert alert-danger">Price: 60,000 Rs <strike><br>Price: 72,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	<div class="col-3">
	<p><img src="cm3.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Nikon D3500<br></p>
	<p class="alert alert-danger">Price: 30,000 Rs <strike><br>Price: 38,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	<div class="col-3">
	<p><img src="cm4.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Canon D3500<br></p>
	<p class="alert alert-danger">Price: 1,30,000 Rs <strike><br>Price: 1,40,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	</div>
	
	
	
	<div class="row">
	<div class="col-3">
	
	<p><img src="cm5.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Nikon EOS 1500D<br></p>
	<p class="alert alert-danger">Price: 62,000 Rs <strike><br>Price: 70,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	<div class="col-3">
	<p><img src="cm6.jpeg" class="alert alert-success"> <br></p>
	<p class="alert alert-dark">Name :Canon EOS 1500D<br></p>
	<p class="alert alert-danger">Price: 67,000 Rs <strike><br>Price: 70,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	<div class="col-3">
	<p><img src="cm7.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Sony D3500<br></p>
	<p class="alert alert-danger">Price: 60,000 Rs <strike><br>Price: 68,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	<div class="col-3">
	<p><img src="cm8.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Nikon D3500<br></p>
	<p class="alert alert-danger">Price: 1,30,000 Rs <strike><br>Price: 1,40,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	</div>
	
	<div class="row">
	<div class="col-3">
	
	<p><img src="cm9.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Nikon D3500<br></p>
	<p class="alert alert-danger">Price: 55,000 Rs <strike><br>Price: 58,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	
	<div class="col-3">
	<p><img src="cm1.jpeg" class="alert alert-success"></p>
	<p class="alert alert-dark">Name :Nikon D5600<br></p>
	<p class="alert alert-danger">Price: 25,000 Rs <strike><br>Price: 32,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	<div class="col-3">
	<p><img src="cm3.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Nikon D3500<br></p>
	<p class="alert alert-danger">Price: 43,000 Rs <strike><br>Price: 45,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	<div class="col-3">
	<p><img src="cm3.jpeg" class="alert alert-success"><br></p>
	<p class="alert alert-dark">Name :Nikon D3500<br></p>
	<p class="alert alert-danger">Price: 65,000 Rs <strike><br>Price: 70,000</strike>Rs</p>
	<p class="card" bgcolor="black"><button>Add to Cart</button></p>
	</div>
	</div>
	</div>
	</table>
	</body>