<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><head>
	<title>Download Games</title>
	<link rel="shortcut icon" type="image/jpg" href="Images/logojpg.jpg">
	<?php include 'link/links.php' ?>
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
			<li class="menu_item"><a href="gaminglogout.php"> About me </a></li>
			<li class="menu_item"><a href="gaminglogout.php"> Contact </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Sign in </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Log in </a></li>
		</ul>

		<a href="#" id="hamburger" onclick="responsive_menu()"><i class="fa fa-bars"></i></a>

</div>
<section class="topgames">
	<div class="headings text-center">
		<h1 class="service font-weight-bold">Download Games</h1>
		<p class="text-capitalize pt-1">Here are the List of Best PC & Android Games Download For Freee</p>
	</div>

	<div class="container content">

			<h3>What Do We Provide?</h3>
			<p>If you want to Download Games For Freeee, you are in the correct website. Here we provide you the best Android, PC, Play Station 4, etc. Games Information and Download the Games For Freee and very easily. You can very easily download any games for free. You can also visit our Website's Home page, where you can simply search the game which you want, and enjoy it. If you have any doubt, you can write your Query or Doubt on the Queries Section, and you can also contact us freely without any tension. Our services is open for 24 * 7 hours for you.</p>

			<h3>How You Can Downlaod Any Game For Free?</h3>
			<h2>Follow the Instructions Given Below to Download any Game for Free</h2>
			<p><span class="font-weight-bold"> 1.</span> If you want to download the games for 100% free by very easily, firstly you have to Sign in.</p>

		</div>

		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/pubglandscape.jpg" class="imagelol">
					<h1 class="download">Pubg Mobile</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/batlogo.jpg" class="imagelol">
					<h1 class="download">Batman Arkham Asylum</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/gta5.jpg" class="imagelol">
					<h1 class="download">GTA V</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/fortnite2.jpg" class="imagelol">
					<h1 class="download">Fortnite: Save The World</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/apex.jpg" class="imagelol">
					<h1 class="download">Apex Legend</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/Lol.jpg" class="imagelol">
					<h1 class="download">Leauge of Legends</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/countdown.jpg" class="imagelol">
					<h1 class="download">Counter Strike: Global Offensive</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/throne.jpg" class="imagelol">
					<h1 class="download">Games of Throne</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-center">
					<img src="Images/mine.jpg" class="imagelol">
					<h1 class="download">Minecraft</h1>
					<a href="#" class="button btn btn-success mb-4 mt-4 text-center" role="button"> Sign in</a>
				</div>
			</div>
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
					<li><a href="#"> About me </a></li>
					<li><a href="#"> Contact </a></li>
					<li><a href="#">  Sign in </a></li>
					<li><a href="#">  Log In </a></li>
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

</body>
</html>