<?php 

session_start();

if (!isset($_SESSION['username'])) {
	?>
	<script type="text/javascript">
		swal({
			title: "Verification!",
			text: "You Have Logged Out!",
			icon: "warning",
			button: "OK",
		});
	</script>
	<?php 

	header('location:Gaming.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	<title>World of Games</title>
	<link rel="shortcut icon" type="image/jpg" href="Images/logojpg.jpg">
	<?php include 'link/links.php'; ?>
	<?php include 'Css/css2.php'; ?>
</head>
<body onload="loader()">

<div id="loading"></div>

<div class="bgimage">
	<div class="nav">
		<div class="nicelogo"><img src="Images/Logo.png" class="logo"></div>
		<ul class="menu ml-auto" id="menu_small">
			<li class="menu_item" id="listone"><a href="#"> Home </a></li>
			<li class="menu_item"><a href="#searchgamediv"> Search Games </a></li>
			<li class="menu_item"><a href="download.php">  Downlaods Games</a></li>
			<li class="menu_item"><a href="#aboutme"> About me </a></li>
			<li class="menu_item"><a href="#contactid"> Contact </a></li>
			<li class="menu_item"><a href="youtube.php">  Best Gameplays </a></li>
			<li class="menu_item"><a href="logout.php">  Log Out </a></li>
		</ul>

		<a href="#" id="hamburger" onclick="responsive_menu()"><i class="fa fa-bars"></i></a>

	</div>
	<div class="text">
		<i><h1 class="games">Games & Download Links Free</h1></i>
	</div>

	</div>
</div>

<!-- *************************** header parts end **************************** -->

<!-- ************************* three extra header div starts ******************* -->

	<section class="header-extradiv">
		<div class="container">
			<div class="row">
				<div class=" extra-div col-lg-4 col-md-4 col-12">
					<a href="#"><i class="fa-3x fas fa-eye" aria-hidden="true"></i></a>
					<h2 class="eye">Easy to See</h2>
					<p>You can watch our website very easily without any problem, it is very easy to visit our website.</p>
				</div>

			<div class=" extra-div col-lg-4 col-md-4 col-12">
				<a href="#"><i class="fa-3x fas fa-laptop" aria-hidden="true"></i></a>
				<h2 class="eye">Awesome Hacks</h2>
				<p> In our website, we provide you the best hacks of all offline games & some online with download links.</p>
			</div>

			<div class=" extra-div col-lg-4 col-md-4 col-12">
				<a href="#"><i class="fa-3x fas fa-thumbs-up" aria-hidden="true"></i></a>
				<h2 class="eye">Best Information</h2>
				<p> In our website, we provide you the best information of best games that you want to know.</p>				
			</div>

		</div>
	</div>	
</section>

<!-- ************************* three extra header div ends ********************** -->

<!-- ************************* offer section start ********************** -->

<section class="serviceoffers" id="servicediv">
	<div class="headings text-center">
		<h1 class="service font-weight-bold">WHAT DO WE OFFER</h1>
		<p> Lists of the things which we provide in our website</p>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
				<div class="names my-3">
					<h1 class="hack">Hacks & Cheat Codes</h1>
					<div class="progress w-75">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:90%">90%</div>
					</div>
				</div>

				<div class="names my-3">
					<h1 class="hack">Action</h1>
					<div class="progress w-75">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:80%">80%</div>
					</div>
				</div>

				<div class="names my-3">
					<h1 class="hack">Adventurous</h1>
					<div class="progress w-75">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:60%">60%</div>
					</div>
				</div>

				<div class="names my-3">
					<h1 class="hack">Criminal</h1>
					<div class="progress w-75">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:40%">40%</div>
					</div>
				</div>

				<div class="names my-3">
					<h1 class="hack">Brain</h1>
					<div class="progress w-75">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width:20%">20%</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12 col-12 servicediv">
				<div class="row">
					<div class="col-lg-2 col-2 service-icons">
						<i class="fa-3x fas fa-mobile" aria-hidden="true"></i>
					</div>
					<div class="col-lg-10 col-10">
						<h2 class="eye">Mobile Games</h2>
						<p class="watch">We also offer the information about Mobile Games and the best mobile games for you.</p>
					</div> 
				</div>

				<div class="row">
					<div class="col-lg-2 col-2 service-icons">
						<i class="fa-3x fas fa-desktop" aria-hidden="true"></i>
					</div>
					<div class="col-lg-10 col-10">
						<h2 class="eye">PC Games</h2>
						<p class="watch">We also offer the best series of PC Games and how to download games in pc in our website.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-2 col-2 service-icons">
						<i class="fa-3x fas fa-tablet" aria-hidden="true"></i>
					</div>
					<div class="col-lg-10 col-10">
						<h2 class="eye">Tablet Games</h2>
						<p class="watch">Only few people is know that we can play in our Tablet also and which one, we provide you.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<!-- ************************* offer section ends ********************** -->
<!-- ************************* project done starts ********************** -->

<section class="project-work">
	<div class="headings text-center">
		<p class="text-center font-weight-bold">MORE THAN 2,000 GAMES CREATED</p>
	</div>

	<div class="container d-flex justify-content-around align-items-center text-center">
		<div>
			<h1 class="count">1500</h1>
			<p class="cms">CMS Installation </p>
		</div>

		<div>
			<h1 class="count">2500</h1>
			<p class="cms">Awards Won</p>
		</div>

		<div>
			<h1 class="count">700</h1>
			<p class="cms">Happy Clients</p>
		</div>

		<div>
			<h1 class="count">500</h1>
			<p class="cms">Working On</p>
		</div>

	</div>
</section>

<!-- ************************* project done ends ********************** -->

<!-- ************************* best series statrs ********************** -->

<section class="pricing" id="pricingdiv">
	<div class="headings text-center">
		<h1 class="service text-white">OUR BEST SERIES</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-12">
				<div class="card text-center">
  					<div class="card-header">PUBG MOBILE</div>
  					<div class="card-body">
  						<li class="li">All about <span class="game">Pubg Mobile</span></li>
  						<li class="li">The New Updates</li>
  						<li class="li">The Guns & Tips Tricks</li>
  						<li class="li">The Maps & all Modes</li>
  						<li class="li">The Death & Quick Matches</li>
  					</div>
 					 <div class="card-footer">
 					 	<a href="pubg.php"> CLick Me</a>
 					 </div>
				</div>	
			</div>

			<div class="col-lg-4 col-12 card-second">
				<div class="card text-center">
  					<div class="card-header">BATMAN ARKHAM</div>
  					<div class="card-body">
  						<li class="li">All about <span class="game">Batman Arkham</span></li>
  						<li class="li">The New Updates</li>
  						<li class="li">The Guns & Tips Tricks</li>
  						<li class="li">The Stunts & Fights</li>
  						<li class="li">The Missions</li>
  					</div>
 					 <div class="card-footer">
 					 	<a href="batman.php"> Click Me</a>
 					 </div>
				</div>	
			</div>

			<div class="col-lg-4 col-12">
				<div class="card text-center">
  					<div class="card-header">GTA 5</div>
  					<div class="card-body">
  						<li class="li">All about <span class="game">Gta 5</span></li>
  						<li class="li">The New Updates</li>
  						<li class="li">The Guns & Tips Tricks</li>
  						<li class="li">The Cars & Bikes</li>
  						<li class="li">The Missions</li>
  					</div>
 					 <div class="card-footer">
 					 	<a href="gta5.php"> Click Me</a>
 					 </div>
				</div>	
			</div>
			
		</div>
	</div>
</section>

<!-- ************************* best series ends ********************** -->

<!-- ************************* top games starts ********************** -->


<section class="topgames">
	<div class="headings text-center">
		<h1 class="service font-weight-bold">TOP BEST GAMES</h1>
		<p class="text-capitalize pt-1">Our best top games ever made</p>
	</div>

	<div id="demo" class="carousel slide" data-ride="carousel">
	
	<!--indicators -->
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>

	<!--The Slideshow -->
	<div class="carousel-inner container">
		<div class="carousel-item active">
		
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/pubg.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> It is the one of the best game for surviving and for shooting. It's all updates are awesome.We can also play it in the PC. We all know that game.</p>
						<p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1>Pubg Mobile</h1>
						<h2>Bluehole</h2>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/batlogo.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> It is one of the best PC Game for adventure. This game was created on the basis of the Hollywood movie of Batman. You all know the name of that game.</p>
						<p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1>Batman Arkham</h1>
						<h2>Rocksteady Studios</h2>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/name.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> The best PC Game of the world which based on our life. It very seems to be a real world. This company made many parts of this game but this is the best.</p>
						<p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1>GTA 5</h1>
						<h2>Rockstar Games</h2>
					</div>
				</div>
			</div>

		</div>

		<div class="carousel-item">

		<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/fortnite2.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> It is also a surving game like pubg, released in July 25, 2017. It is available on  Windows, MacOS, Nitendo Switch, Play Station 4, Play Station 5, iOS, android, etc.</p>
						<p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1>Fortnite Save the World</h1>
						<h2>Epic Games</h2>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/legend.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> This game is available on Windows, Play Station 4 and Xbox One and released on Feburary 4, 2019. It is a online multiplayer gun-fighting Battle Royale game.</p>
						<p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1>Apex Legends</h1>
						<h2>Respawn Entertainment</h2>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/Lol.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4">It is a multiplayer online battle arena video game for Microsoft Windows and macOS which is released on October 27, 2009. Inspired by the Warcraft III.</p>
						<p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1> Leauge of Legends (LOL)</h1>
						<h2>Riot Games</h2>
					</div>
				</div>
			</div>
	
		</div>

		<div class="carousel-item">

		<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/countdown.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> It is a online multiplayer first-person shooter video game. It was released for Windows, OS X, Xbox 360, Playstation 3, Linux in August 21, 2012. It is the Best Shooting Game.</p>
						<p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1>Counter-Strike: Global Offensive</h1>
						<h2>Valve</h2>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/throne.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> It is based on an American fantasy drama television. It is an adaption of A Song of Ice and Fire, George R. R. Martin's series of fantasy. It released on April 17, 2011.</p><p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1> Games of Throne</h1>
						<h2>David Benioff</h2>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="box-shadow">
						<a href="#"><img src="Images/mine.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> Minecraft is a sandbox video game. It is available on Windows, OS X, Linux, Android, iOS, Xbox 360, Playstaion 3 & 4, etc. and released on November 18, 2011.</p>
						<p> <span><a href="#"> Please sign in to see more info about it.</a></span></p>
						<h1>Minecraft</h1>
						<h2>Mojang Studios</h2>
					</div>
				</div>
			</div>
	
		</div>
	</div>

	<!--Left and Right Controls -->
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>

	</div>

</section>

<!-- ************************* top games ends ********************** -->

<!-- ************************* contact me start ********************** -->

<section class="text-capitalize text-center mt-5 p-5" style="background-color: orange;" id="contactid">
	<div class="headings text-center">
		<h1 class="service font-weight-bold">Contact Me</h1>
		<p class="text-capitalize pt-1">You can contact me freely</p>
	</div>

	<div class="batman_contact">
		<img src="Images/batmanrunning.gif">
	</div>

	<div>
		<h1 class="font-weight-bold text-center" style="color: #000;">+91 8755481562</h1>
		<button class="btn btn-warning text-center font-weight-bold mt-3" style="color: #000;">Contact Me Now</button>
	</div>

</section>

<!-- ************************* contact me end ********************** -->

<!-- ************************* about me starts ********************** -->

<section class="topgames" id="aboutme">
	<div class="headings text-center">
		<h1 class="service font-weight-bold">About Me</h1>
	</div>

	<div id="demo" class="carousel slide" data-ride="carousel">
	
	<!--indicators -->
	<ul class="indicators carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
	</ul>

	<!--The Slideshow -->
	<div class="carousel-inner container">
		<div class="carousel-item active">
		
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-12">
					<div class="shadow">
						<a href="#"><img src="Images/sattu.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4">My name is<span class="font-weight-bold"> Satvik Rastogi</span>. I am a student reading in<span class="font-weight-bold"> Class 8</span> from Shri Ram School, Mawana. I made this website for the gaming information and you can also downlaod any game for free. </p>
						<h1>CEO of Website </h1>
						<h2>Satvik Ratogi</h2>
					</div>
				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-12">
					<div class="shadow">
						<a href="#"><img src="Images/sattu2.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> I start coding in <span class="font-weight-bold">Class 6</span> when I was <span class="font-weight-bold">11 years old</span>. Coding is my hobby and I am very intersted in <span class="font-weight-bold">Coding, about PC and Technology</span>. And in future, our <span class="font-weight-bold">Technology </span>become very important. </p>
						<h1>Web Developer</h1>
						<h2>Satvik Rastogi</h2>
					</div>
				</div>
			</div>

		</div>

		<div class="carousel-item">

		<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-12">
					<div class="shadow">
						<a href="#"><img src="Images/sattu2.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4">I made my Father's Youtube Channel <span class="font-weight-bold">Anuj Classes Itf</span> related to <span class="font-weight-bold">Maths</span>. <span class="font-weight-bold">I am this Channel's Editor, Manager, etc.</span> <span class="font-weight-bold">So, I can say that I am a <span class="font-weight-bold">Youtuber</span>.</p>
						<h1>Youtuber</h1>
						<h2>Satvik Rastogi</h2>
					</div>
				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-12">
					<div class="shadow">
						<a href="#"><img src="Images/sattu.jpg" class="img-fluid img-thumbnail"></a>
						<p class="m-4"> I am also a <span class="font-weight-bold">Editor</span> as you see in the above paragraph. I learn all these from the <span class="font-weight-bold">Youtube</span>. I edit all my videos by the Laptop and by Android <span class="font-weight-bold">Filmora and Kinemaster</span>.  </p>
						<h1>Editor</h1>
						<h2>Satvik Rastogi</h2>
					</div>
				</div>
			</div>
	
		</div>
	
		</div>
	</div>

	<!--Left and Right Controls -->
	<!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a> -->

	</div>

</section>

<!-- ************************* about me ends ********************** -->

<!-- *************************** promotion starts ********************* -->

<section class="youtube">
	<div class="headings text-center">
		<h1 class="service font-weight-bold mt-5">Promoted Channel </h1>
		<p class="text-capitalize pt-1">This is my Father's Channel, please Subscribe, Like and Share to other people!</p>
		<a href="https://www.youtube.com/channel/UCJqXWHJdLJhdUfCUPcKpKQg" class="text-center" style="color: blue!important;"><p class="font-weight-bold text-center" style="color: blue!important;">Click Me To View The Channel</p></a>
	</div>

	<div class="container">
		<div class="row">

			<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/m6ZnVL4KAn8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="col-xl-6 col-lg-6 col-md-12 col-12 mt-3" width="560" height="315" src="https://www.youtube.com/embed/RgSkns5GOqY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		</div>
	</div>

</section>

<!-- *************************** promotion ends ********************* -->



<!-- ************************* subscribe sletter start ********************** -->

<section class="newsletter" id="searchgamediv">
	<div class="headings text-center">
		<h1 class="service font-weight-bold">Search your Game</h1>
	</div>

	<script async src="https://cse.google.com/cse.js?cx=004439739872039172620:hntwa9tygsm"></script>
	<div class="gcse-search"></div>

</section>

<!-- ************************* subscribe sletter ends *********************** -->

<!-- ************************* contact us start ********************** -->

<section class="contactus" id="contactid">
	<div class="headings text-center">
		<h1 class="service font-weight-bold">Feedback</h1>
		<p class="text-capitalize pt-1">We're Here To Help And Answer Any Questions You Might Have. We Look Forward To Hearing From You</p>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
				
				<form action="" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="name" id="username" required autocomplete="off" placeholder="Enter Your Name">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" required autocomplete="off" placeholder="Enter Email">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" required autocomplete="off" placeholder="Enter Mobile Number">
					</div>

					<div class="form-group">
						<textarea class="form-control" rows="4" id="commentbox" name="message" placeholder="Enter Your Feedback"></textarea>
					</div>

					<div class="d-flex justify-content-center form-button">	
					<button type="submit" class="btn btn-primary button" name="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</section>

<?php

include 'dbgame.php';

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);

			$subject = "Message Confirmation";
			$body = "Hii $name, Your feedback has successfully submitted. (From www.worldofgames.com)";
			$headers = "From: satvikrastogi76@gmail.com";

			if (mail($email, $subject, $body, $headers)) {
				?>
				<script type="text/javascript">
				swal({
				  title: "Verification!",
				  text: "Your feedback has been submitted!",
				  icon: "success",
				  button: "OK",
				});
				</script>

				<?php
			} else{
			?>
				<script type="text/javascript">
				swal({
				  title: "Verification!",
				  text: "Email already exist!",
				  icon: "error",
				  button: "OK",
				});
				</script>
				
				<?php
			}	

} 


?>

<!-- ************************* contact us ends ********************** -->


<!-- ************************* footer start *********************** -->

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
					<li><a href="#">  Best Gameplays </a></li>
					<li><a href="#"> About me </a></li>
					<li><a href="#"> Contact </a></li>
					<li><a href="#"> Downlaod Games </a></li>
					<li><a href="#">  Log Out </a></li>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 col-12 footer-div">
				<div>
					<h3>Game</h3>
					<p>Whatever game you want to search, you can search to know about your intrested game and download it for free.</p>

				</div>
			</div>
		</div>

		<div class="mt-5 text-center copyright">
			<p class="copy text-center">Copyright <span>&copy;</span>2020 All rights reserved | This template is made with love by World of Games</p>
		</div>

		<div class="scorlltop float-right">
			<i class="fas fa-arrow-up" id="myBtn"></i>
		</div>

	</div>
</footer>

<!-- ************************* footer ends *********************** -->

<script>

var preloader = document.getElementById('loading');
	function loader(){
		preloader.style.display = 'none';
	};

	swal({
	title: "Thanks!",
	text: "Hello, Welcome to the Best Mode of our Website!",
	icon: "success",
	button: "OK",
});

function responsive_menu(){
	var e = document.getElementById('menu_small');
	if (e.className === 'menu') {
		e.className += " responsive";
	} else{
		e.className = 'menu';
	}
}


	$('.count').counterUp({
    delay: 10,
    time: 3000
})


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

<?php

include 'dbgame.php';

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];

	$insertquery = " insert into contact(name, email, mobile, message) values('$name', '$email', '$mobile', '$message') ";

	$query = mysqli_query($con, $insertquery);

}

?>