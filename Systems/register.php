<!DOCTYPE html>
<html>
<head>
	<title>Systems Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="img/logo-dark.png">
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	
 <?php 
include('config/config.php');

if(!$connect){
	echo "Not Connected";
}
if(isset($_POST['register'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$designation=$_POST['designation'];
	$password=$_POST['password'];
	$ran=rand(0,100);
	$username=$fname.$lname.$ran;
	$activationcode=md5($email.time());



$sql="INSERT INTO `tbl_login`(`username`, `fname`, `lname`, `email`, `password`, `designation`) VALUES('$username','$fname','$lname','$email','$password','$designation')";

$query=mysqli_query($connect,$sql);

if(!$query){
	 echo "<script>alert('Registration unsuccessful, please verify your Form - Email is Already in the database.');</script>";

            }
            else{            	
               	echo "<script>alert('Registration Successful, please verify your Form');</script>";
               	echo "script>alert('Your Username is '".$username."</script>";
            	header('location:login.php');
            }
            }
?>
</head>
<body>
    <div class="main-wrapper">
       
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
		<div class="auth-box">
                <div id="loginform">
                <div>
                        <img src="img/logo-dark.png">
							<h1>Registration Form</h1>
                       
                    </div>
                    <div>
                   <input type="text" class="form-control form-control-lg"  name="fname" id="Fname" required placeholder="Enter First Name">
	</div>
<br/>
<div>
	<input type="text" class="form-control form-control-lg" name="lname" id="Lname" required placeholder="Enter Last Name">
	</div>
	<br/>
    <div>
                                    
    <input class="form-control form-control-lg" id="usermail" name="email" type="text" required placeholder="Email">
     <div id="msg1" class=""></div>
      </div>
 <br>
<div>
	<select name="designation" class="form-control form dropdown">
		<option value="Intern">Internee</option>
		<option value="Employee">Employee</option>
	</select>
	<!-- <input type="text" class="form-control form-control-lg" name="designation" id="designation" required placeholder="Enter your Office Designation"> -->
</div>
<br>
<div>
	<input type="password" class="form-control form-control-lg" name="password" id="password" required placeholder="Enter your password">
</div>
<br>
<div>
	<input type="password" class="form-control form-control-lg" name="cpassword" id="cpassword" required placeholder="Enter your confirmation password">
</div>
<br>
<div>
	<input type="submit" class="btn btn-info btn-block btn-lg" id="register" name="register" value="Register">
</div>
</div>
</form>
<div class="col-sm-12 text-center">
Already Register? <a href="login.php" class="text-info"><b>Click Here</b></a>
</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
   
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
    <script type="text/javascript">
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <script type="text/javascript">
   $(document).ready(function() {
        
        $("#usermail").blur(function(e) {
            var uname = $(this).val();
            if (uname == "")
            {
                $("#msg1").html("");
                $("#submit").attr("disabled", true);
            }
            else
            {
                $("#msg1").html("checking...");
                $.ajax({
                    url: "config/validateemail.php",
                    data: {username: uname},
                    type: "POST",
                    success: function(data) {
                        if(data > '0') {
                            $("#msg1").html('<span class="text-danger">Email Already Registered!</span>');
                            $("#submit").attr("disabled", true);
                        } else {
                            $("#msg1").html('');
                            $("#submit").attr("disabled", false);
                        }
                    }
                });
            }
        });
    });
    </script>
</body>

</html>