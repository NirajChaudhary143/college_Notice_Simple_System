<?php
    include('includes/header.php');
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
	header("location: login.php");
    }
    $adminName=$_SESSION['Admin'];
    $adminPassword=$_SESSION['pw'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="broadcast";

    // Create connection
    $conn =new mysqli($servername, $username, $password,$database);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{
        $stmt= $conn->prepare("INSERT INTO admin_login (Admin_Name,Admin_Password) VALUES (?,?)");
        $stmt->bind_param("ss",$adminName,$adminPassword);
        $stmt->execute();
        ?>
        <div style="color: white; margin-top:200px;font-size:50px;text-align: center;">
            <span><strong>New Admin Added Succesfully</strong></span><br>
            <a href="http://localhost/egov/php/admin/register.php"><button class="btn" style="width:200px;">Add New Admin</button></a>
        </div>
    <?php
        $stmt->close();
        $conn->close();
    }
?>