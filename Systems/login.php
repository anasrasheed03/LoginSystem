<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img/logo-dark.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Systems Login</title>
	<?php 
		include("config/config.php");

		if(isset($_POST['login'])){
			$username=$_POST['username'];
			$password=$_POST['password'];

		$query="SELECT * FROM `tbl_login` WHERE `username`='$username'";
		$sql=mysqli_query($connect,$query);

		$rows=mysqli_num_rows($sql);

		if($rows==1){	
							
				while($row=mysqli_fetch_assoc($sql)){
				$user=$row['username'];
				$pass=$row['password'];
				$fname=$row['fname'];
				$lname=$row['lname'];
				$designation=$row['designation'];
				$email=$row['email'];
				$id=$row['id'];

						session_start();
						$_SESSION['username']=$user;
						$_SESSION['password']=$pass;
						$_SESSION['fname']=$fname;
						$_SESSION['lname']=$lname;
						$_SESSION['email']=$email;
						$_SESSION['designation']=$designation;
						$_SESSION['id']=$id;
						header("location:index");
						
					}

				}
			else{
				echo "<script>alert('Username and password is not correct');</script>";
			}
					 }



	?>
</head>
<body>
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
            <div class="auth-box">
                <div id="loginform">

<img src="img/logo-dark.png"a>
<h1>Login Form</h1>

       <div class="row">
                        <div class="col-12">
                            
                            <form class="form-horizontal m-t-20"  method="POST" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    
                                    <input type="text" class="form-control form-control-lg" placeholder="username" id="username" name="username" aria-label="username" aria-describedby="basic-addon1">
                                </div>
                                
                                    <div id="msg" class=""></div>
                                <div class="input-group mb-3">
                                    
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        
                                        <input type="submit" class="btn btn-info btn-block btn-lg" id="submit" name="login" value="Login">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 text-center">
                                        Don't have an account? <a href="register" class="text-info"><b>Sign Up</b></a>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>

</div>
</div>
</div>







</body>
</html>

