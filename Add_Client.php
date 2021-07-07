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
#openbtn{
  visibility: hidden;
}
/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.Add_Client{
  width: 70%;
  box-shadow: 2px 2px 5px gray;
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
<div class="row py-2 bg-light">
  <div class="col-sm-12">
    <h5>User Management</h5>
  </div>
</div>
<div class="Add_Client_Div px-5 mx-5 py-5 ">
  <form class="Add_Client px-5 py-4 ml-5 bg-light" action="action/Add_Client.php" method="post">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" placeholder="First Name" name="firstname">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" placeholder="First Name" name="lastname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Gender</label>
    <select name="gender">
      <option>No_select</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  <div class="form-group">
    <label>Date Of Birth</label>
    <input type="Date" class="form-control" name="birth">
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="number" class="form-control" placeholder="Your telephone number" name="contact">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control py-auto" placeholder="Enter your house Address" name="address" style="height: 100px;">
  </div>
  <div class="form-group">
    <label>Reason of Joining</label>
    <input type="text" class="form-control" name="reason">
  </div>
  <div class="form-group">
    <label>Photo</label>
    <input type="file" class="form-control" name="photo">
  </div>
  <div class="form-group">
    <label>Packages</label>
    <select name="packages">
      <option>No_select</option>
      <option>Package 1</option>
      <option>Package 2</option>
      <option>Package 3</option>
    </select>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions.</label>
  </div>
  <button type="submit" class="btn btn-warning mt-3" name="submit">Add Client</button>
</form>
</div>
</div> 
</body>
</html>