<?php 
include('includes/header.php');
session_start();
if(!isset($_SESSION['AdminLoginId'])){
	header("location: login.php");
}
include('includes/connection.php');
?>
	<div class="AddPost">
		<h1 align="center" style="color:#ccc;">Add Exam Notice</h1><br>
		<form action="upload.php" method="post" enctype="multipart/form-data">
  <label>Topic</label>
	<input type="text" name="topic" placeholder="6th Sem Exam Notice" value="Exam Notice">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Notice" name="submit">
</form>
	</div>
</body>
</html>