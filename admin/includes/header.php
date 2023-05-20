<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<style>
		.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: block;
  width: 180px;
  font-family: Oswald;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #EAEAEA; color: #3AC1F7;}


	</style>

	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<!-- <link rel="stylesheet" type="text/css" href="../header.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>
<nav class="nav-container shadow">
		<a href="http://localhost/notice/php/admin/index.php" id="logo">Broadcast</a>
		<ul>
		<li class="dropdown"><a href="#" class="dropbtn">Add Notice</a>
					<ul class="dropdown-content">
						<li class="first"><a href="http://localhost/notice/php/admin/addExamNotice.php">Exam Notice</a></li>
						<li><a href="#">Practicle Notice</a></li>
						<li class="#"><a href="directives.html">Holiday Notice</a></li>
					</ul>
			</li>
			
			<li><a href="http://localhost/notice/php/admin/database.php">Database</a></li>
			<li><a href="http://localhost/notice/php/admin/register.php">Register</a></li>
			<li><a href="http://localhost/notice/php/admin/logout.php">Log Out</a></li>
		</ul>
	</nav>
<hr style="border-bottom:1px solid black">

		<!-- <ul>
			<li><a href="index.php" class="active">home</a></li>
			<li><a href="about.html">about</a></li>
			<li class="dropdown"><a href="#" class="dropbtn">resource</a>
					<ul class="dropdown-content">
						<li class="first"><a href="policy.html">Policy</a></li>
						<li><a href="acts.html">Acts & Regulations</a></li>
						<li class="last"><a href="directives.html">Directive & Guideline</a></li>
					</ul>
			</li>
			<li><a href="gallery.html">gallery</a></li>
			<li><a href="contact.html">contact</a></li>
		</ul> -->