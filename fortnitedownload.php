<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><head>
	<title> Fortnite Save the World</title>
	<?php include 'link/links.php' ?>
	<link rel="shortcut icon" type="image/jpg" href="Images/logojpg.jpg">
	<style type="text/css">
		html{
	scroll-behavior: smooth;
}

*{
	margin: 0;
	padding: 0;
	cursor: default;
	color: #000;
}
.nicelogo .logo{
	border: none;
	height: 150px;
	width: auto;
	border-radius: 0%;
	float: left;
}

@font-face{
	font-family: gaming;
	src: url('Css/pdark.ttf');
}

.nav{
	margin: 0 auto;
	color: #fff!important;
	font-family: 'Poppins' , sans-serif;
	font-size: 16px;
}

#hamburger{
	text-decoration: none;
}

#hamburger i{
	cursor: pointer!important;
	color: #000!important;
	font-size: 2rem;
	position: absolute;
	top: 20px;
	right: 20px;
	opacity: 0;
	visibility: hidden;
}

#hamburger i:hover{
	color: orange!important;
}

.nicelogo .logo{
	border: none;
	height: 150px;
	width: auto;
	border-radius: 0%;
	float: left;
}

.menu{
	font-family: 'Poppins', sans-serif;
	line-height: 30px;
	font-weight: 700;
	text-transform: uppercase;
}

.nav ul{
	list-style-type: none;
	text-align: right;
	margin-right: 50px;
}

.nav .menu .menu_item{
	display: inline-block;
	position: relative;
	margin-top: 40px;
}

#listone{
	padding: 3px 0;
	border-bottom: 2px solid #f39d1a!important;
}

.menu_item:hover{
	border-bottom: 2px solid #f39d1a!important;
	padding: 3px 0;
}

.nav .menu .menu_item a{
	padding: 40px 24px;
	cursor: pointer;
	text-decoration: none;
	color: #000!important;
	transition: 0.5s all ease;
}
.topgames p{
	font-family: 'Arial Rounded' , sans-serif;
	font-size: 18px ;
	padding: 0 0 10px 0px;
}
.content{
	padding: 10px!important;
	cursor: default;
}
.image{
	margin-top: 20px;
	text-align: center;
}
.image img{
	width: 35%;
}
#pubg{
	float: right;
}
.content h1{
	font-family: 'gaming';
	margin-top: 15px;
	font-weight: bold;
	font-size: 52px;
	text-align: center; 
}
.content h2{
	font-weight: bold;
	font-family: 'Britannica Bold' , sans-serif;
	font-size: 20px;
}
.content h3{
	font-family: 'Stencil' , sans-serif;
}

.content p{
	font-family: 'Arial Rounded' , sans-serif;
	font-size: 18px ;
	padding: 0 0 10px 0px;
}

.imglol{
	border-radius: 20px;
}

.read{
	font-family: 'Elephant' , sans-serif!important;
	margin-top: 15px!important;
	margin-bottom: 15px!important;
	font-weight: bold!important;
	font-size: 52px!important;
	text-align: center!important; 
}

.button{
	box-shadow: 0 0 14px 0 #000!important;
	font-size: 20px;
}

.imagepubg{
	border-radius: 50px;
	height: 37vh;
	margin-top: 20px;
}

.image{
	border-radius: 50px;
}

.download{
	font-family: 'gaming';
	margin-top: 15px;
	font-weight: bold;
	font-size: 30px;
	text-align: center;
}

.imagelol{
	border-radius: 50px;
	height: 30vh;
	margin-top: 45px;
}

.divider-text{
	position: relative;
	text-align: center;
	margin-top: 15px;
	margin-bottom: 15px;
}

.divider-text span{
	padding: 7px;
	font-size: 1.4rem;
	position: relative;
	z-index: 2;
}

.divider-text:after{
	content: "";
	position: absolute;
	width: 100%;
	border-bottom: 1px solid #ddd;
	top: 55%;
	left: 0;
	z-index: 1;
}

.divider-text .title{
	color: #000;
	font-size: 1.4rem;
	text-align: center;
}

.thanks{
	font-family: 'gaming';
	margin-top: 15px;
	margin-bottom: 15px;
	font-weight: bold;
	font-size: 52px;
	text-align: center; 
}

.footersection{
	width: 100%;
	height: auto;
	padding: 70px 0 20px 0;
	background-color: #00abff;
	position: relative;
}

.footersection p{
	cursor: default;
	color: #fff;
}

.footersection .footer-div{
	list-style-type: none!important;
}

.footersecion .footer-div li{
	text-decoration: none;
}

.footersection .footer-div li a{
	font-size: 0.9rem;
	line-height: 1.6;
	font-weight: 400;
	color: #fff;
	text-transform: capitalize;
	text-align: center;
}

.footersection h3{
	text-transform: uppercase;
	color: #fff;
	margin-bottom: 25px;
	font-size: 1.2rem!important;
	font-weight: 600;
	text-shadow: 0 2px 5px rgba(0, 0, 0, .4);
}

.copyright .copy{
	font-size: 15px!important;
	text-align: center!important;
}

#myBtn{
	display: none;
	position: fixed;
	bottom: 20px;
	right: 40px;
	z-index: 999999999999999;
	border: none;
	color: #fff;
	background-color: #00abff;
	padding: 10px;
	border-radius: 10px;
	cursor: pointer;
}

.newsletter{
	width: 100%;
	height: auto;
	margin: 80px auto;
}

.news-input{
	border-radius: 100px 0px 0px 100px!important;
	min-width: 140px;
	min-width: 45px;
}

.input-group-text{
	text-align: center!important;
	cursor: pointer;
	color: #fff!important;
	background-color: #5bc0de!important;
	border-radius: 0 100px 100px 0!important;
	min-width: 130px;
	min-height: 38px;
}


#myBtn:hover{
	background-color: #606060;
}

::-webkit-scrollbar{
	width: 20px;
}

::-webkit-scrollbar-thumb{
	border-radius: 35px;
	background: -webkit-gradient(linear, left top, left bottom, from(#ff8a00), to(#da1b60));
	box-shadow: inset 2px 2px 2px rgba(255, 255, 255, 0.25), inset -2px -2px -2px rgba(0, 0, 0, 0.25);
}

@media(max-width: 1069px){

	.nicelogo .logo{
		text-align: center!important;
	}

	.nav{
	font-size: 16px;
	font-weight: bold;
	}

	.menu{
/* 		width: 100%;
		text-align: left!important; */
		opacity: 0;
		visibility: hidden;
	}

	#listone{
		padding: 0!important;
		border: none!important;
	}

	.menu li:hover{
		padding: 0!important;
		border: none!important;
		text-shadow: 3px 4px 1px orange;
		color: orange!important;
	}

	.menu li:hover > a{
		color: orange!important;
	}

	#hamburger i{
		opacity: 1;
		visibility: visible;
	}

	.menu.responsive{
		width: 100%!important;
		height: 80vh!important;
		position: relative;
		opacity: 1;
		visibility: visible;
	}

	.menu.responsive li{
		float: none!important;
		display: block!important;
		text-align: center!important;
		line-height: 20px;
	}

}
</style>

</head>
<body>
<div class="nav">
		<div class="nicelogo"><img src="Images/Logo.png" class="logo"></div>
		<ul class="menu ml-auto" id="menu_small">
			<li class="menu_item" id="listone"><a href="gaminglogout.php"> Home </a></li>
			<li class="menu_item"><a href="gaminglogout.php"> Download Games </a></li>
			<li class="menu_item"><a href="gaminglogout.php"> About me </a></li>
			<li class="menu_item"><a href="gaminglogout.php"> Contact </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Best Gameplays </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Log Out </a></li>
		</ul>

		<a href="#" id="hamburger" onclick="responsive_menu()"><i class="fa fa-bars"></i></a>

</div>
<section class="topgames">
	<div class="headings text-center">
		<h1 class="service font-weight-bold">Download Fortnite Save the World</h1>
		<p>Download Fortnite Save the World for 100% free very easily</p>
	</div>

	<div class="container content">

			<h1 class="read">Read this Carefully</h1>

			<h3>Don't Know About Fortnite Save the World?</h3>
			<p>If you don't know about <span class="font-weight-bold">Fortnite Save the World</span>. You can easily get this information also in our Website. We also provide the information about the games and in the Home Page of our Website, you get the information of any Games which you wanted to know you get it very easily. </p>

			<h3>How you get the Information about Fortnite Save the World in our Website?</h3>
			<h2>You can get the information about Fortnite Save the World in our Website by doing the following steps</h2>
			<p><span class="font-weight-bold"> 1.</span> Go to the<span class="font-weight-bold"> HOME Page</span> of our Website</p>
			<p><span class="font-weight-bold"> 2.</span> Scroll down our Home Page, till the 'Our Best Series' section will come.</p>
			<p><span class="font-weight-bold"> 3.</span> If you want to know more games like this, scroll down our Home Page, till the 'Top Best Games' section will come.</p>
			<p><span class="font-weight-bold"> 4.</span> If you not find your favourable game which you wanted to know about it, Search The Game on our Home Page.</p>


			<h3>How To Download & Play the Game?</h3>
			<h2>Follow the Instructions Given Below to Download any Game for 100% Free</h2>
			<p><span class="font-weight-bold"> 1.</span>CLick on the Download button below the page.</p>
			<p><span class="font-weight-bold"> 2.</span> Then, you will redirected to antoher page, firstly sign in to that website if required.</p>
			<p><span class="font-weight-bold"> 3.</span> Select your device which you wanted to play the game. <span class="font-weight-bold">For Example:-</span> PC/Mac, Play Station 4, etc. And click on it.</p>
			<p><span class="font-weight-bold"> 4.</span> Your 'Setup' of Fortnite Save the World will start downloading above your taskbar.</p>
			<p><span class="font-weight-bold"> 5.</span>When the downloading is completed, Your 'Setup of Fortnite Save the World' will automatic save to the 'Download' Folder of your PC.</p>
			<p><span class="font-weight-bold"> 6.</span>Double CLick on the 'Setup of Your Fortnite Save the World', its start loading.</p>
			<p><span class="font-weight-bold"> 7.</span>Give him all the permissions, and Click on 'Install' button and enjoy your game.</p>

				<div class="text-center">
					<img src="Images/bestfortnite.jpg" class="imglol">
					<h1 class="download">Fortnite Save the World</h1>
					<a href="http://www.mediafire.com/file/7rm02sd4d41pu0p/EpicInstaller-10.17.0-fortnite-d58793460d024de4a8aedc6874c1b839.msi/file" class="button btn btn-success mb-4 mt-4 text-center" role="button"><i class="fas fa-arrow-up"> Download For PC</i></a>
					&nbsp &nbsp &nbsp
					<a href="https://www.epicgames.com/fortnite/en-US/download" class="button btn btn-success mb-4 mt-4 text-center" role="button"><i class="fas fa-arrow-up"> Download For Other Devices</i></a>					
				</div>

			<h3>System Requirements</h3>
			<p><span class="font-weight-bold">Requires a 64-bit processor and operating system</span></p>
			<p><span class="font-weight-bold">OS:</span> Win 7 SP1, Win 8.1 (64-bit Operating System Required)</p>
			<p><span class="font-weight-bold">Processor:</span> Intel Core i5-750, 2.67 GHz | AMD Phenom II X4 965, 3.4 GHz</p>
			<p><span class="font-weight-bold">Memory:</span> 6 GB RAM</p>
			<p><span class="font-weight-bold">Graphics:</span> NVIDIA GeForce GTX 660 (2 GB Memory Minimum) | AMD Radeon HD 7870 (2 GB Memory Minimum)</p>
			<p><span class="font-weight-bold">DirectX:</span> Version 11</p>
			<p><span class="font-weight-bold">Storage:</span> 45 GB available space</p>
		</div>

				<h1 class="text-center font-weight-bold thanks">Thanks For Visiting our Website</h1>

</section>

<footer class="footersection mt-4" id="footerdiv">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12 footer-div">
				<div>
					<h3>About World of Games</h3>
					<p>The world has become so fast paced that people don't want to stand by reading a page of information to be they would much rather look at a presentation and understand the message.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
				<div>
					<h3>Navigation Links</h3>
					<li><a href="#"> Home </a></li>
					<li><a href="#"> Download Games </a></li>
					<li><a href="#"> About Me </a></li>
					<li><a href="#"> Contact </a></li>
					<li><a href="#">  Best Gameplays </a></li>
					<li><a href="#">  Log Out </a></li>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 col-12 footer-div">
				<div>
					<h3>Game</h3>
					<p>Whatever game you want to search, you can search to know about your intrested game.</p>

				</div>

		</div>

		<div class="mt-5 text-center copyright">
			<p class="copy text-center">Copyright &copy;2020 All rights reserved | This template is made with love by World of Games</p>


		</div>

		<div class="scorlltop float-right">
			<i class="fa fa-arrow-up" id="myBtn"></i>
		</div>

	</div>
</footer>

<script>

function responsive_menu(){
	var e = document.getElementById('menu_small');
	if (e.className === 'menu') {
		e.className += " responsive";
	} else{
		e.className = 'menu';
	}
}
	
$(document).ready(function() {

	$(window).scroll(function(){
		if($(this).scrollTop() > 20){
		$('#myBtn').fadeIn();
	} else{
		$('#myBtn').fadeOut();
	}
	});

	$("#myBtn").click(function(){
		$('html ,body').animate({scrollTop : 0}, 400);
	});
});

</script>

