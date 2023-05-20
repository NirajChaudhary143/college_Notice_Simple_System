<?php
include('includes/header.php');
session_start();
if(!isset($_SESSION['AdminLoginId'])){
	header("location: login.php");
}
$eDate=$_POST['ExamDate'];
$eSub=$_POST['ExamSubject'];
// database connection
$servername = "localhost";
$username = "root";
$password = "";
$database="notice";

// Create connection
$conn =new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt= $conn->prepare("INSERT INTO exam_notice (Exam_Date,Exam_Subject) VALUES (?,?)");
    $stmt->bind_param("ss",$eDate,$eSub);
    $stmt->execute();
    ?>
    <div style="color: white;margin-top:190px;font-size:50px;display: grid;justify-content: center;">
        <span><strong>Notice Added Succesfully.</strong></span>
        <a href="addpost.php"><button class="btn">Add New Notice</button></a>
    </div>
<?php
    $stmt->close();
    $conn->close();
}
?>