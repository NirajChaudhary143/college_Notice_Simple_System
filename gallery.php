<?php
include('includes/header.php');
include('includes/navbar.php');

?>

<style>
	*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
body{
	background: url(../img/B2.jpg);
	background-size: cover;
	background-attachment: fixed;
	display:flex;
	justify-content: center;
	align-items: center;
}
.gallery{
	font-family: 'Poppins',sans-serif;
	line-height: 1.8em;
	margin-top: 100px;
	margin-left:50px;
	margin-right: 80px;
	position: relative;
	width:100%;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	padding:30px;

}
.gallery .card{
	position: relative;
	max-width: 300px;
	height: 215px;
	margin: 30px 10px;
	padding: 20px 15px;
	display: flex;
	flex-direction: column;
	box-shadow: 0 5px 202px rgba(0,0,0,1);
	transition: 0.3s ease-in-out;
	border-radius: 20px;
}
.gallery .card:hover{
	height: 270px;
	background-image: linear-gradient(
      45deg,
      rgba(255, 255, 255,0.7),
      rgba(242, 242, 242, 0.284),
      rgba(246, 246, 246, 0.216),
      rgba(145, 145, 145, 0.9)
   );
}
.gallery .card .imgx{
	position: relative;
	width: 260px;
	top:-70px;
	left:5px;
	z-index: 1;
}
.gallery .card .imgx img{
	max-width: 100%;
	height:200px;
	border-radius: 15px;
  	box-shadow: 15px 15px 15px 0px rgba(0,0,0,0.7);
}
.gallery .card .content{
	text-align: center;
	color:#fff;
	visibility: hidden;
	opacity: 0;
	transition: 0.2s ease-in-out;
}
.gallery .card:hover .content{
	visibility: visible;
	opacity: 1;
	margin-top: -60px;
	transition-delay: 0.2s;
}
	</style>
	<div class="gallery">
		<div class="card">
			<div class="imgx">
				<img src="img/welcome2.jpg">
			</div>
				<div class="content">
				<h3>Welcome Program 2078</h3>
				<p>December 20, 2021</p>
			</div>
		</div>
		<div class="card">
			<div class="imgx">
				<img src="img/welcome1.jpg">
			</div>
				<div class="content">
				<h3>Welcome Program 2078</h3>
			</div>	
		</div>
		<div class="card">
			<div class="imgx">
				<img src="img/welcome3.jpg">
			</div>
				<div class="content">
				<h3>Welcome Program 2078</h3>
			</div>
		</div>
		<div class="card">
			<div class="imgx">
				<img src="img/welcome4.jpg">
			</div>
				<div class="content">
				<h3>Welcome Program 2078</h3>
			</div>
		</div>
		<div class="card">
			<div class="imgx">
				<img src="img/welcome5.jpg" style="width:250px;">
			</div>
				<div class="content">
				<h3>Welcome Program 2078</h3>
				</div>	
		</div>
		<div class="card">
			<div class="imgx">
				<img src="img/welcome6.jpg">
			</div>
				<div class="content">
				<h3>Welcome Program 2078</h3>
			</div>
		</div>
		<div class="card">
			<div class="imgx">
				<img src="img/welcome7.jpg">
			</div>
				<div class="content">
				<h3>Welcome Program 2078</h3>
			</div>
		</div>

		
	</div>
	<footer style="background:#aaa;color:#000;bottom:-720px;margin-top: 100px;">
	<p>Copyright 2022, All Rights Reserved</p>
	<p class="con">
		<span class="jj">Contact</span>
		<a href="tel:9808894725"><i class="fa fa-phone" aria-hidden="true"></i>
		<a href="https://www.facebook.com/sujan.lama.7330" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
		<a href="viber://chat?number=9808894725"><i class="fab fa-viber"></i></a>
		<a href="mailto:punitsaur12@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	</p>
	</footer>

	<script type="text/javascript">
		window.addEventListener("scroll",function(){
			var header=document.querySelector("header");
			header.classList.toggle("sticky",window.scrollY>0);
		})
	</script>
</body>
</html>