<?php 
session_start();
if(!isset($_SESSION['AdminLoginId'])){
	header("location: login.php");
}
include('includes/header.php');
?>

<style type="text/css">
	h1 { 
  		padding: 1px;
 		font-weight: 100;
 		background: linear-gradient(to right, black, #eee, black);
 		
	}
	h1 a {
  		background-image:linear-gradient(to right,#000,#111,#000) ;
  		display: block;
  		padding: 20px;
  		letter-spacing: 25px;
  		color: white;
	}	
	h1:hover a{
		color:#fff;
		text-shadow:0 0 10px #fff,
					0 0 20px #fff;
		transition: 0.3s;
	}
</style>

<div style="text-align:center; margin-top: 220px;">
	<h1>
		<a>Welcome <?=$_SESSION['AdminLoginId'];?></a>
	</h1>
</div>