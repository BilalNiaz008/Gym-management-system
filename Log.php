<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width .initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<script src="https://kit.fontawesome.com/48bf1e1ffa.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins&display=swap" rel="stylesheet">
	<title>Log_in-</title>
</head>
<body>
	<div class="container-fluid py-1 top d-none d-md-block">
		<div class="row">
		<div class="col-sm-7">
			Call Us : 0324-53137843
		</div>
		<div class="col-sm-5 text-center">
			Gents: 7 - 10am & 5:30pm - 11pm   &nbsp &nbsp      Ladies: 10am - 4:30pm
		</div>
		</div>
	</div>
	<div class="log-img" style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6) ), url('images/Gym1.jpg'); background-size: 100% 100%;">
	<nav class="navbar navbar-expand-lg navbar-dark font-weight-bold mb-5 fixed-top bg ">
		  <a class="navbar-brand" href="index.html">Fitness Formula</a>
		  <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>-->
		  </button>
		  <div class="collapse navbar-collapse " id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="Virtual.html">Virtual Gym</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">What we Offer!</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="log.php">log in</a>
		      </li>
		    </ul>
		  </div>
		  <button onclick="openNav()" class="menu-btn"><i class="fas fa-bars menu"></i></button>
		</nav>
		
		<div id="myNav" class="overlay">
  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="#">About Us</a>
    <a href="log.php">Log in</a>
    <a href="#">What we Offer!</a>
    <a href="Virtual.html">Virtual Gym</a>
  </div>
</div>
<div class="pt-5 px-5 ">
<h3 class="py-5 text-center">If you want something you’ve never had, you must be willing to do something you’ve never done.</h3>
</div>
<form class="login px-5 py-5 my-5 mx-auto" method="post" action="action/Login.php" style="height: 300px; width: 50%;position: relative;top: 0; left: 0;">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="E-mail">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-md text-light float-right" name="submit" style="background: #060c21;">Login</button>
</form>
</div>
<div class="container-fluid px-5 py-5 footer">
	<div class="row text-center">
		<div class="col-sm-3">
			<h3>ABOUT</h3>
			<p>Al Fahd Spa & Fitness Club is Faisalabad’s leading, world-class fitness facility for ladies and gents, combining luxury and aesthetics with state of the art facilities.</p>
		</div>
		<div class="col-sm-3">
			<h3>
				TESTIMONIALS
			</h3>
			<p>
				
			</p>
		</div>
		<div class="col-sm-5">
			<h3>Contact Us</h3>
			<p>Gents: Monday to Saturday
7 - 10am & 5:30pm - 11pm
Sunday: 5 - 9pm</p>
			<p>
				Ladies: Monday to Saturday: 10am - 4:30pm
			</p>
			<p>041 8533 007</p>
			<p> 0322 8533 007</p>
			<p> info@alfahd.com.pk</p>

			<p>Al Fahd Plaza, Kohinoor City, Jaranwala Road, Faisalabad.</p>
		</div>
		
	</div>
</div>
<div class="container-fluid bg-dark px-5 py-3 text-light">
	<div class="row">
	<span class="col-sm-9 text-left">Copyright &copy Fitness Formula</span>
	<span class="col-sm-3 text-left">Developed by MAStre</span>
	</div>
</div>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

$(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 5);
});
</script>
</body>
</html>