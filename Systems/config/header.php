<?php 
session_start();
include('config/config.php');
$username=$_SESSION['username'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$email=$_SESSION['email'];
$designation=$_SESSION['designation'];
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>




	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="img/logo-dark.png">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header></header>
	<nav class="navbar navbar-expand-lg navbar-dark navbar-fixed" style="background-color: black;">
  <a class="navbar-brand" href="#"><img src="img/logo-light.png" width="120px" height="70px"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fd7e14;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#dee2e6;">Experties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#dee2e6;">Consulting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#dee2e6;">Solution</a>
      </li>
      <?php if($designation==="Employee"){ ?><li class="nav-item">
        <a class="nav-link" href="#" style="color:#dee2e6;">Salary</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#dee2e6">Audit</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="newAduit.php">Add New</a>
            <a class="dropdown-item" href="view-audit.php">View Reports</a>

          </div>
      </li>
      <?php 
    }   
      ?><li class="nav-item">
       <?php if($designation==="Internee"){ 

       ?> <a class="nav-link" href="#" style="color:#dee2e6;">Internee Menu</a>
      </li>
      <?php 
      }
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:#dee2e6;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Story</a>
          <a class="dropdown-item" href="#">Culture</a>
          <a class="dropdown-item" href="#">Corporate Information</a>
          <a class="dropdown-item" href="#">breakthrough77</a>
      </li>
     
      </ul>
      <ul class="navbar-nav">
      <li class="nav-item dropdown" text-align="right">
      <a class="nav-link dropdown-toggle" style="color:#dee2e6;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $fname." ".$lname;?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item"><?php echo $username; ?></a>
            <a class="dropdown-item" href="profile.php">Profile </a>
            <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
    </li>
    </ul>
    
   
  </div>
</nav>