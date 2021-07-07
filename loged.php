<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width .initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<script src="https://kit.fontawesome.com/48bf1e1ffa.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins&display=swap" rel="stylesheet">
	<title>Fitness Formula</title>

	<style type="text/css">
		/* The sidebar menu */
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 19%; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: white; /* Black */
  overflow-x: hidden; 
  overflow-y:hidden;/* Disable horizontal scroll */
  box-shadow: 0px 0px 10px gray;
  transition: 1s ease;
}
.sidenav:hover{
	overflow-y: hidden;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: orange;
}

/* Style page content */
.main {
	width: 80%;
  height: all;
  margin-left: 20%;
  padding: 0px;
  }
.boxes{
	height: 8em;
	border-radius: 5px;
	box-shadow: 1px 1px 5px gray;
	opacity: .9;

}
.boxes:hover{
	opacity: 1;
	transform: translate(-2px,1px);
}
.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-container {
  display: none;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
#openbtn{
	position: absolute;
  visibility: hidden;
}
/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	</style>
</head>

<body>
	
	<div class="container-fluid">
	<div class="sidenav" id="mysidebar">
	<a href="#" style="border-bottom: 2px solid darkorange;"><img src="Logo.png" style="height: 6em; width: 10em ;"></a>
  	<h6 style="background: orange;">Home</h6>
  	<a href="loged.php">Dashboard</a>
  	<h6 style="background: orange;">Management</h6>
  	<button class="dropdown-btn">Client Management
    <i class="fa fa-caret-down"></i>
  	</button>
  	<div class="dropdown-container">
    <a href="Add_Client.php">Add Client</a>
    <a href="View_Client.php">View Clients</a>
  	</div>
  	<button class="dropdown-btn">Membership Plans
    <i class="fa fa-caret-down"></i>
  	</button>
  	<div class="dropdown-container">
    <a href="Add_Member.php">Add Memebership Plans</a>
    <a href="View_Member.php">View Membership Plans</a>
  	</div>
  	<button class="dropdown-btn">Trainers Management
    <i class="fa fa-caret-down"></i>
  	</button>
  	<div class="dropdown-container">
    <a href="Add_Trainer.php">Add Gym Trainers</a>
    <a href="View_Trainer.php">View Gym Trainers</a>
  	</div>
  	<button class="dropdown-btn">Manage Enquiry
    <i class="fa fa-caret-down"></i>
  	</button>
  	<div class="dropdown-container">
    <a href="#">Add Enquiry</a>
    <a href="#">View Enquiry</a>
  	</div>
  	<a href="Payment.php">Fee Payment</a>
  	<button class="dropdown-btn">Manage Attendence
    <i class="fa fa-caret-down"></i>
  	</button>
  	<div class="dropdown-container">
    <a href="Manage_Attendence.php">Check In</a>
  	</div>
  	<h6 style="background: orange;">Add On</h6>
  	<button class="dropdown-btn">Expense Management
    <i class="fa fa-caret-down"></i>
  	</button>
  	<div class="dropdown-container">
    <a href="Add_Expense.php">Add Expense</a>
    <a href="View_Expense.php">View Expense</a>
  	</div>
  	<a href="Settings.php">Settings</a>
  	<h6 style="background: orange;">Users</h6>
  	<a href="Add_User.php">User Management</a>
  	<a href="Permissions.php">User Permissions</a>
  	<a href="Reports.php">User Reports</a>
	</div>
	<script type="text/javascript">
			
			var dropdown = document.getElementsByClassName("dropdown-btn");
  			var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
	</script>
<!-- Page content -->
<div class="main" id="main">
<div class="row py-3 bg-light text-dark text-center" style="border-bottom: 2px solid darkorange">
	<div class="col-sm-1">
		 <button class="openbtn" onclick="openNav();" id="openbtn">&#9776;</button>
		 <button id="closebtn" onclick="closeNav();">&#9776;</button>
	</div>
	<div class="col-sm-8">
		<h2>Welcome to Fitness Formula</h2>
	</div>
	<div class="col-sm-3">
		<div class="dropdown">
  <button type="button" class="btn btn-light" data-toggle="dropdown">
    <i class="fas fa-user"></i>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="Profile.php">Profile</a>
    <a class="dropdown-item" href="Change_psd.php">Change Password</a>
    <a class="dropdown-item" href="out.php">log out</a>
  </div>
</div>
	</div>
</div>
<?php

$connection = new mysqli('localhost','root','','clients');

$fQuery=$connection->query("SELECT SUM(Fees_amount) AS sum FROM `fees`")


?>
<div class="row text-light mx-auto">
	<div class="col-sm-3 mt-3 ml-4 py-2 bg-info boxes" >
		<i class="fas fa-suitcase"></i>
		<?php
		$fdata=$fQuery->fetch_assoc();

	?>
		<h3><?php echo $fdata['sum'];
	?><sub>pkr</sub></h3>
		<p>Total Earnings</p>
	</div>
	<?php
$Monthly=$connection->query("SELECT *
FROM `fees`
WHERE `Created_ON`  > DATE_SUB(CURDATE(), INTERVAL 30 DAY)")
	?>
	<div class="col-sm-3 mt-3 ml-4 py-2 bg-warning boxes">
		<i class="fas fa-comment-alt"></i>
		<h2>1000</h2>
		<p>Monthly Earning</p>
	</div>
	<div class="col-sm-3 mt-3 ml-4 py-2 bg-danger boxes" >
		<h2>1000</h2>
		<p>Weekly Earning</p>
	</div>
</div>
<?php

$selectQuery=$connection->query("SELECT * FROM `clients`"); 


$rows=mysqli_num_rows($selectQuery);
?>
<div class="row text-light mx-auto">
	<div class="col-sm-3 mt-3 ml-4 py-2 bg-success boxes" >
		<i class="fas fa-map-marker-alt"></i>
		<h2>1000</h2>
		<p>Average Monthly</p>
	</div>
	<div class="col-sm-3 mt-3 ml-4 py-2 bg-secondary boxes" >
		<i class="fas fa-users"></i><h2><?php echo $rows; ?></h2>
		<p>Total Customers</p>
	</div>
	<?php

	$Customers=$connection->query("SELECT *
FROM `clients`
WHERE `Created_ON`  > DATE_SUB(CURDATE(), INTERVAL 30 DAY)");
	
	$Crows=mysqli_num_rows($Customers);
	?>
	<div class="col-sm-3 mt-3 ml-4 py-2 bg-primary boxes" >
		<i class="fas fa-user"></i><h2><?php echo $Crows;?></h2>
		<p>Customers this month</p>
	</div>
</div>

<?php
$connection = new mysqli('localhost','root','','clients');

$selectQuery=$connection->query("SELECT * FROM `clients`"); 
  
?>
<div class="row mt-5 text-center">
	<div class="col-sm-6">
		<h4>Subscriptions Expiring on next 30 Days</h4>
		<table class="table table-striped">
			<tr>
				<th>id</th>
				<th>Client Name</th>
				<th>Expiring on</th>
				<th>Action</th>
			</tr>
		</table>
		
	</div>
	<div class="col-sm-6">
		<h4>Due Payments</h4>
		<table class="table table-striped">
			<tr>
				<th>id</th>
				<th>Client Name</th>
				<th>Due Amount</th>
				<th>Due Payment</th>
			</tr>
		</table>
		
	</div>
	
</div>
	<h2 class="text-center">Recent Customers</h2>
	<table class="table">
		<tr>
			<th>id</th>
			<th>Client Name</th>
			<th>E-mail</th>
			<th>Contact</th>
			<th>Gender</th>
			<th>Created On</th>
		</tr>
		<?php
   while($data = $selectQuery->fetch_assoc()): 
	?>
		<tr>
   	 <td><?=$data['id'];?></td>
      <td><?=$data['FirstName'];?></td>
      <td><?=$data['Email'];?></td>
      <td><?=$data['Contact'];?></td>
      <td><?=$data['Gender'];?></td>
      <td><?=$data['Created_ON'];?></td>
		</tr>
	<?php endwhile; ?>
	</table>
</div>
</div>
</body>
</html>