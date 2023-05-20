<?php include('includes/connection.php');
session_start();
if(isset($_SESSION['AdminLoginId'])){
	header("location: index.php");
}
?>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body style="background-image: linear-gradient(to right, #ccc,#eee,#eee,#ccc);">
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="../img/user.jpg" class="brand_logo w-auto" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form class="formm" method="POST" action="login.php">
                        <input name="signin" value="login" type="hidden" />
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="AdminName" id="email" class="form-control input_user" placeholder="Username">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" name="AdminPassword" id="pw" class="form-control input_pass"placeholder="Password">
                        </div>
                        <button name="SignIn" class="btn btn-dark login mb-3 shadow">Sign In</button>
                        <div class="extra">
                            <a href="#">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
    if (isset($_POST['signin'])) {
        $admin_name = $_POST['AdminName'];
        $admin_password = $_POST['AdminPassword'];

        $sql = "SELECT * FROM admin_login WHERE Admin_Name = '$admin_name' AND Admin_Password = '$admin_password'";
        $result = $conn->query($sql);

        if($result->num_rows==1){
            session_start();
            $_SESSION['AdminLoginId']=$admin_name;
            header("location: index.php");
        } else {
            echo("<script>alert('Incorrect Password')</script>");
        }
    }

    ?>
</body>
</html>