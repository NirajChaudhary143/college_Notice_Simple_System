<?php
include('includes/header.php');
include('includes/navbar.php');

?>
	<style type="text/css">
		.con a{
			color:#333;
		}
		.con a:hover{
			color:#000;
		}
		.content1{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			position: relative;
			top: 120px;
			width:60%;
	background-image:linear-gradient(
		45deg,
		rgba(0,0,0,0.9),
		rgba(55,55,55,0.6),
		rgba(55,55,55,0.9),
		rgba(0,0,0,0.9)
		);
	color:#ccc;
	padding:20px 20px;
	border-radius: 15px;
	margin:5px;
	font-family: 'Poppins',sans-serif;
		}
		.content1 h3{
	font-size: 1.4em;
}
.content1 p,.content1 h3{
	text-align: justify;
}
.content1 img{
	height:500px;
	width:60%;
	border-radius: 15px;
	margin:5px;
}
.cont1{
	height: 95vh;
	margin-left: 400px;
}
	</style>
	<div class="cont1">
	<div class="content1">
		<h3>MISSION AND OBJECTIVES</h3>
		<p>The mission of B.Sc. CSIT, TU program is to develop socially responsible, research based and result-oriented IT professionals. The B.Sc. CSIT program is designed to equip graduates with the skills to make them efficient Information Technology professionals. This programme aims to prepare the learners to percieve career advancement in the field of both CS and IT. CSIT course is more practicable, operational, and compatible with the national and international market value.

The mission of B.Sc. CSIT, TU program is to develop socially responsible, research based and result-oriented IT professionals. The B.Sc. CSIT program is designed to equip graduates with the skills to make them efficient Information Technology professionals. This programme aims to prepare the learners to percieve career advancement in the field of both CS and IT. CSIT course is more practicable, operational, and compatible with the national and international market value.</p>
<!-- <img src="img/notice3.jpg"> -->
	</div>
</div>


<?php
	include('includes/footer.php');
?>