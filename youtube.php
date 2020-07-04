<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	<title>Best Gameplays</title>
	<link rel="shortcut icon" type="image/jpg" href="Images/logojpg.jpg">
	<?php include 'link/links.php'; ?>
	<style>

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

.footersection{
	width: 100%;
	height: auto;
	padding: 70px 0 20px 0;
	background-color: #00abff;
	position: relative;
}

.english{
	margin-bottom: 50px;
	text-align: center;
	color: #000;
	font-size: 1.4rem;
}

.ninjaimg{
	width: 85%;
}

.levimg{
	width: 60%;
}

.ninja{
	color: #000;
	font-size: 1.3rem;
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

.indian{
	width: 75%;
}

.indianimg{
	width: 80%;
}

.ron{
	width: 60%;
}

.viper{
	width: 66%;
	margin-left: 30px;
}

.gamepaly{
	margin-top: 25px;
	margin-bottom: 25px;
	text-align: center;
	color: #000;
	font-size: 1.4rem;
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
			<li class="menu_item"><a href="gaminglogout.php"> Search Games </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Downlaod Games</a></li>
			<li class="menu_item"><a href="gaminglogout.php"> About me </a></li>
			<li class="menu_item"><a href="gaminglogout.php"> Contact </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Log Out </a></li>
		</ul>

		<a href="#" id="hamburger" onclick="responsive_menu()"><i class="fa fa-bars"></i></a>

</div>
	</style>
</head>
<body>
<section class="youtube">
	<div class="headings text-center">
		<h1 class="service font-weight-bold mt-5">Best Youtubers </h1>
		<p class="text-capitalize pt-1">There are the Best Youtubers whose Gameplays and Commentaries are Great!</p>
	</div>

	<div>
			<h3 class="english text-center align-top">Foreign Youtubers</h3>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/Pewdiepie.jpg" class="ninjaimg img-fluid">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center">PewDiePie (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Felix Arvid Ulf Kjellberg</span> (born October 24, 1989), better known as <span class="font-weight-bold">PewDiePie</span>, is an Swedish Youtuber, Comedian, and Philanthropist, known primarily for his Let's Pay videos and comedic formatted shows. His age is 30 years and he lives in Gothenburg, Sweden. His total subscribers are 105 million and total views are 25.6 billion. He had the most subscribers in the world. But, nowadays <span class="font-weight-bold mt-2">T-Series</span> has the most subscribers 141 million which is a Music Channel.</p>
				<p><a href="https://www.youtube.com/user/PewDiePie">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel PewDiePie</span></a></p>
			</div>

			<div class="text-center col-xl-12 col-lg-12 col-md-12 col-12">
				<h3 class="gamepaly text-center">Best Gameplay of PewDiePie</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/YdVdF7xH2oo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>	
		</div>

		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/shroud.jpg" class="ninjaimg img-fluid mt-3">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">Shroud (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Michael Grzesiek</span> (born June 2, 1994), professionally known by his online alias <span class="font-weight-bold">Shroud</span>, is an Polish-Canadian streamer and former <span class="font-weight-bold"> Counter Strike: Global Offensive </span> professional. He is also known as the  <span class="font-weight-bold">God of Pubg Mobile </span> His age is 26 years and he lives in Mississauga, Ontario. His total followers are 7.05 million and total views are 366 million. His total subscribers are 6.17 million and total views are 682 million. </p>
				<p><a href="https://www.youtube.com/channel/UCoz3Kpu5lv-ALhR4h9bDvcw">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel Shroud</span></a></p>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of Shroud</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/rH_QjEarhwY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/Ninja.jpg" class="ninjaimg img-fluid mt-3">
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">Ninja (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Richard Tyler Belvin Jr.</span> (born June 5, 1991), better known by his online alias <span class="font-weight-bold">Ninja</span>, is an American Streamer, Youtuber, Professional Gamer, and Internet Personality. His age is 28 years and he lives in Grayslake, Lllinois. He played so many games like Fortite, Player Unknown's Battlegounds, Halo, Apex Legends, etc. His total followers are 14.6 million (May 19, 2020) and total views are 481 million (May 19, 2020). His total subscribers are 23.5 million (May 29, 2020) and total views are 2.21 billion (May 29, 2020).</p>
				<p><a href="https://www.youtube.com/user/NinjasHyper">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel Ninja</span></a></p>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of Ninja</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/bluiXRc-uU8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/miniminter.jpg" class="ninjaimg img-fluid mt-3">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">MM7games (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Simon Minter</span> (born September 7, 1992), better known as <span class="font-weight-bold">Miniminter</span>, is an British Youtuber, Gamer who is best known for his commentary style videos and vlogs. His age is 27 years and he lives in South East London. His total subscribers are 10.7 million and total views are 3.9 billion. He has also another channel MM7Games. In this channel, his total subscribers are 4.32 million.</p>
				<p><a href="https://www.youtube.com/user/miniminter">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel Miniminter</span></a></p>
				<p><a href="https://www.youtube.com/user/MM7Games">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel MM7Games</span></a></p>
			</div>	

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of MM7Games</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/kegysR5VHDo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Video of Miniminter</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/TIEsh8VFnN0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/ldshadowlady.jpg" class="levimg ml-5 img-fluid mt-3">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">LDShadowLady (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Elizabeth Dwyer</span> (born 7 October 1992), better known online as <span class="font-weight-bold">LDShadowLady or Lizzie</span>,  is an English YouTuber known for her video content based on the video game Minecraft. His age is 27 years and he lives in England, United Kingdom. His total subscribers are 5 million and total views are 2.2 billion. He also created his second channel, a Vlog channel, More LDShadowLady. His total subscribers are 361,000 and total views are 11 million.</p>
				<p><a href="https://www.youtube.com/user/ldshadowlady">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel LDShadowLady</span></a></p>
				<p><a href="https://www.youtube.com/channel/UCo1EeBExY-7dtu3BlikS3Fw">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel More LDShadowLady</span></a></p>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of LDShadowLady</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/H2KImHMX42U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>	

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Vlog of More LDShadowLady</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/wELwVCldG3Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>				
		</div>
	</div>

	<p class="divider-text">
			<span class="bg-light">Indian Youtubers</span>
	</p>

	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/dynamo.jpg" class="indian img-fluid mt-3">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">Dynamo (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Aaditya Deepak Sawant</span> (born 18 April 1996), better known online as <span class="font-weight-bold">Dynamo</span>,  is an Indian YouTuber and Streamer known for her video content based on the video game Pubg Mobile. His age is 23 years and he lives in Mumbai, Maharastra, India. And he currently lives in Lokhandvala. He usually known for his <span class="font-weight-bold">Sniping Gaming</span> and he the member of  <span class="font-weight-bold">Hydra Clan </span>. His total subscribers are 7.54 million and total views are 565 million. </p>
				<p><a href="https://www.youtube.com/user/sam14319">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel Dynamo Gaming</span></a></p>
			</div>	

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of Dynamo Gaming</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/HOiXNdE5zG8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/mortal.jpg" class="indianimg img-fluid mt-3">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">Soul Mortal (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Naman Mathur</span> (born 22 May 1996), better known online as <span class="font-weight-bold">Soul Mortal</span>, and he is the member of <span class="font-weight-bold">Soul Clan which is the #1 currently clan.</span>. He is an Indian YouTuber and Streamer known for her video content based on the video game Pubg Mobile. His age is 23 years and he lives in Mumbai, Maharastra, India. He is also known as the <span class="font-weight-bold">King of Grenades</span>. His total subscribers are 4.97 million and total views are 524 million. </p>
				<p><a href="https://www.youtube.com/channel/UC7Q7pl0z0MrdayvmAnchlJQ">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel Mortal</span></a></p>
			</div>	

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of Mortal</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/Ne4lJ75QyWo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/carryminati.jpg" class="indianimg img-fluid mt-3">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">CarryisLive (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Ajey Nagar</span> (born 12 June 1999), better known online as <span class="font-weight-bold">Carry Minati</span>, he is an Indian YouTuber, Rapper, Gamer, Comedian, Roaster and Streamer. His age is 20 years and he lives in Faridabad, India. He is known for his comedic skits, commentary and reactions to various online topics on his another channel <span class="font-weight-bold">Carry Minati</span>. His total subscribers on Carryislive are 5.45 million and total views are 507 million. His total subscribers on Carry Minati are 20.9 million and total views are 1.34 billion.<span class="font-weight-bold"> He is the first Indian to be the most subscribers on channel Carry Minati. </span> In this channel, he roasted Tik Tok on the account of he gained so many subscribers and break so many records. </p>
				<p><a href="https://www.youtube.com/user/AddictedA1">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel Carry Minati</span></a></p>
				<p><a href="https://www.youtube.com/channel/UC0IWRLai-BAwci_e9MylNGw">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel CarryisLive</span></a></p>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of CarryisLive</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/9B_XbkvjdRU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Video of Carry Minati</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/Ya0hBc-IQQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Rap by Carry Minati</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/zzwRbKI2pn4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/ron.jpg" class="ron img-fluid mt-3 ml-5">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">Ron Gaming (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Ravi Rawant</span> (born 24 Feburary 1998), better known online as <span class="font-weight-bold">Ron Gaming, </span> he is an Indian Youtuber and Gamer better known for his commentary and gaming style. He usually plays Pubg Mobie and many more games. His total subscribers on Ron Gaming are 3.26 million and total views are 507 million. </p>
				<p><a href="https://www.youtube.com/channel/UCaA8TUWM6TJ5wj-DH60VEFg">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel Ron Gaming</span></a></p>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of Ron Gaming</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/Yc_4cnYRVi4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<img src="Images/viper.jpg" class="viper img-fluid mt-3">
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<h4 class="ninja text-center mt-3">Soul Viper (Gamer)</h4>
				<hr>
				<p><span class="font-weight-bold mt-2">Yash Parmesh Soni</span> (born 26 May 1999), better known online as <span class="font-weight-bold">Soul Viper</span>, and he is the leader of <span class="font-weight-bold">Soul Clan</span>. He is an Indian YouTuber, Streamer, Gamer and PMIS Champion 2019. He is usually known for her video content based on the video game Pubg Mobile. His age is 21 years and he lives in India. There are many best players in the Soul Clan such as Soul Mortal, Soul Owais, Soul Ronak, etc. His total subscribers are 787,000 and total views are 76.9 million. </p>
				<p><a href="https://www.youtube.com/channel/UCQ-aRbnit-y0TlR7CpNSJWA">Click me to see the <span class="font-weight-bold mt-2">Youtube Channel Soul Viper</span></a></p>
			</div>		

			<div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h3 class="gamepaly text-center">Best Gameplay of Soul Vicky</h3>
				<iframe class="mt-3 col-xl-12 col-lg-12 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/XBbZaW0PlzI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>	
		</div>
	</div>

</section>


<!-- *************************** youtuber ends ********************* -->

<!-- *************************** youtube starts ********************* -->

<section class="youtube">
	<div class="headings text-center">
		<h1 class="service font-weight-bold mt-3">Other Best Gameplays</h1>
		<p class="text-capitalize pt-1">These are some more list of Best Gameplays in the World</p>
	</div>

	<div class="container">
		<div class="row">
				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/giQ5NEssW3E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12" width="560" height="315" src="https://www.youtube.com/embed/9NinxoQFGbg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/TBgKn0ml3A8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/-Q6wH3DqcDE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/_bNSa6aSgAQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/kZDjIeq3fyI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/mawYSZHKnsM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/bboKbik18Ao" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/n70bSxIoxuk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/FVZGjB-gcYQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>

</section>

<footer class="footersection mt-5" id="footerdiv">
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
					<li><a href="#"> Search Games </a></li>
					<li><a href="#">  Downlaod Games</a></li>
					<li><a href="#"> About me </a></li>
					<li><a href="#"> Contact </a></li>
					<li><a href="#">  Log Out </a></li>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 col-12 footer-div">
				<div>
					<h3>Game</h3>
					<p>Whatever game you want to search, you can search to know about your intrested game.</p>

					<div class="container newsletter-main">
						<div class="row">
							<div class="col-lg-12 col-12">
								<div class="input-group mb-3">
    							<input type="text" class="form-control news-input" placeholder="Your Game">
    							<div class="input-group-append">
     							<span class="input-group-text">Search</span>
    							</div>
							</div>
						</div>
					</div>

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