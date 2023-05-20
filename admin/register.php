<?php
// include("includes/header.php");
session_start();
if(!isset($_SESSION['AdminLoginId'])){
	header("location: login.php");
}
?>
<?php include('includes/connection.php');
?>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://kit.fontawesome.com/d42c36ec92.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div>
                    <h3 align="center" class="mt-0">Admin Registration Panel</h3>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <form class="formm" method="POST">
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="AdminName" class="form-control input_user" placeholder="Admin Name">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" name="AdminPassword" class="form-control input_pass"placeholder="Password">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" name="ConfirmPassword" class="form-control input_pass"placeholder="Confirm password">
                        </div>
                            <button name="SignIn" class="btn btn-dark login mb-3 shadow">Register</button>
                        <div class="extra" align="center">
                            <a href="http://localhost/egov/php/admin/login.php">Already have an account?</a>
                            <br><a href="http://localhost/egov/php/admin/index.php" class="btn btn-light btn-sm shadow">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
			
        </form>
    </div>
	<?php
			if(isset($_POST['SignIn'])){
				$adminName=$_POST['AdminName'];
				$password=$_POST['AdminPassword'];
				$cpassword=$_POST['ConfirmPassword'];
				if($password==$cpassword){
					session_start();
					$_SESSION['Admin']=$adminName;
					$_SESSION['pw']=$password;
					header("location: adminRegistration.php");
				}
				else{
					echo '<script>alert("Password does not match")</script>';
				}
			}

?>
</body>
</html>