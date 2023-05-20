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
	background: url(img/B11.jpg);
	background-size: cover;
}
.mid{
	color:white;
	display:flex;
	margin-top: 140px;
	margin-left: 90px;
	margin-right: 120px;
	justify-content: space-between;
	height:360px;

}
.mid .address{
	width:25%;
	/*background: linear-gradient(to right,rgba(0,0,0,0.6)50%,rgba(1,1,1.5,0.6)50%);*/
	background-image: linear-gradient(
      45deg,
      rgb(0, 0, 0),
      rgba(13, 13, 13, 0.716),
      rgba(09, 09	, 09, 0.784),
      rgba(110, 110, 110, 0.5)
   );
	border-radius:10px;
	padding:25px;
  	box-shadow: 15px 15px 15px 0px rgba(0,0,0,0.7);
  	display: flex;
  	flex-direction: column;
  	justify-content: space-between;
}
.mid .map{
	padding:20px 20px;
	width:70%;
	background-image:linear-gradient(
		45deg,
		rgba(0,0,0,0.9),
		rgba(60,60,60,0.5),
		rgba(100,100,100,0.2)
		);
  	box-shadow: 15px 15px 15px 0px rgba(0,0,0,0.7);
  	border-radius: 10px;
}
h3{
	font-size:1.5em;
	font-family: 'Poppins',sans-serif;
	z-index: 1;
	color:#ccc;
	font-weight: 400;
}
.map iframe{
	width:770px;
	height:290px;
	border:0;
	border-radius: 9px;
}
.address i{
	height:20px;
	width:20px;
	padding-top: 5px;
	color:#999;
}
.address p{
	color:#999;
	display:flex;
	font-family: 'Poppins',sans-serif;
}
.address a{
	font-family: 'Poppins',sans-serif;
	color:#999;
	text-decoration: none;
	transition: 0.5s;
}
.address a:hover{
	color:darkcyan;
}
</style>
	<div class="mid">
		<div class="address">
			<h3>Address</h3>

			<p><i class="fa fa-map-marker" aria-hidden="true"></i>Shankhamul- 9 , Lalitpur, Nepal</p>
			<h3>Contact Us</h3>
			<p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:9808894725">9843019444</a></p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:punitsaur12@gmail.com">punitsaur12@gmail.com</a></p>
			<p><i class="fa-brands fa-facebook-f"></i><a href="https://www.facebook.com" target="_blank">Facebook</a></p>
		</div>
		<div class="map">
			<h3>Location</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.853023606951!2d85.329875!3d27.679803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc94f84d1f057520f!2sNagarjuna%20College%20of%20IT!5e0!3m2!1sen!2snp!4v1656859647002!5m2!1sen!2snp"loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>


	<?php
include('includes/footer.php');
?>