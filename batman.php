<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	<title>Batman Arkham</title>
	<link rel="shortcut icon" type="image/jpg" href="Images/logojpg.jpg">
	<?php include 'link/links.php'; ?>

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
	font-size: 28px;
}
.content h3{
	font-family: 'Stencil' , sans-serif;
}

.content p{
	font-family: 'Arial Rounded' , sans-serif;
	font-size: 18px ;
	padding: 0 0 10px 0px;
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
			<li class="menu_item"><a href="gaminglogout.php"> Search Games </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Downlaod Games</a></li>
			<li class="menu_item"><a href="gaminglogout.php"> About me </a></li>
			<li class="menu_item"><a href="gaminglogout.php"> Contact </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Best Gameplays </a></li>
			<li class="menu_item"><a href="gaminglogout.php">  Log Out </a></li>
		</ul>

		<a href="#" id="hamburger" onclick="responsive_menu()"><i class="fa fa-bars"></i></a>

</div>
<div class="content container">
<div class="image">
<img src="Images/batlogo.jpg" class="w-50">
<i><h1>Batman Arkham</h1></i>
<hr>
</div>
<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<p><i><span class="font-weight-bold">Batman: Arkham</span> (also commonly known by the fan-originated term Arkhamverse) is a series of action-adventure video games based on the DC Comics character Batman, developed by Rocksteady Studios and WB Games Montréal, and published by Warner Bros. Interactive Entertainment. The first two Rocksteady games were written by veteran Batman writer Paul Dini and featured voice actors Kevin Conroy and Mark Hamill reprising their roles as Batman and the Joker, respectively, from the DC Animated Universe (DCAU). Conroy and Hamill returned to voice their characters in the fourth main installment of the series, Batman: Arkham Knight. The franchise consists of four main titles, with additional mobile games, and a virtual reality game, Batman: Arkham VR, also developed by Rocksteady.

	The first game, Batman: Arkham Asylum (2009), is set on Arkham Island, which houses the eponymus Arkham Asylum, home of Batman's greatest villains. Its story centers around Batman facing his archenemy, the Joker, who has taken over Arkham and trapped Batman inside with his incarcerated foes, while threatening Gotham City with hidden bombs. Players assume the role of Batman and must defeat the escaped inmates, while also uncovering a plot orchestrated by the Joker involving a super-steroid called "Titan". The second game, Batman: Arkham City (2011), is set one year later, within the titular Arkham City, a new super-prison based in the decaying urban slums of Gotham. When Batman is incarcerated in the prison, he must uncover a sinister scheme orchestrated by Arkham City's warden, Hugo Strange, while also contending with other villains taking advantage of the prison's lawlessness, including the Joker, who is slowly dying from a disease inflicted by the unstable Titan, and forces Batman to find a cure by infecting him as well. The third main game in the series, Batman: Arkham Origins (2013), serves as a prequel set fives years before Arkham Asylum, and follows a younger and less-refined Batman, who becomes the target of eight deadly assassins hired by crime lord Black Mask to kill him on Christmas Eve; he must also contend with the Gotham City police, who attempt to hunt him down, and other villains taking advantage of the chaos, including the Joker, whom Batman encounters for the first time. The fourth and final installment, Batman: Arkham Knight (2015), set nine months after Arkham City, sees Scarecrow forcing a citywide evacuation in Gotham and uniting some of Batman's greatest enemies in an attempt to destroy him once and for all, aided by the mysterious Arkham Knight; while working with his allies to defeat the villains and restore justice to Gotham, Batman must also contend with an illness caused by the late Joker, which is slowly transforming him into the Joker.

	The main installments in the Batman Arkham series have been met with widespread critical acclaim, with praise for their narratives, voice acting, world design, graphics, and gameplay systems and design, along with the faithfulness to the source material.</i></p></div>

	<div class="col-xl-6 col-lg-6 col-md-6 col-12">
		<img src="Images/logo.batman.jpg" class="text-center align-items-center w-75 ml-4">
		<h4 class="text-center mb-2" style="font-size: 2.3rem; color: #000; font-weight: bold; font-family: 'Algerian' ;"> Batman Arkham</h4>
		<hr>
	<p><i>The "Bat" logo for the series, as seen on the Batman: Arkham Collection box art, featuring the color schemes (from left to right) used on the Arkham Asylum, Arkham City, and Arkham Origins logos.</i></p>
		<p><span class="font-weight-bold">Genre(s)</span>	<i>Action-adventure, open world, stealth</i></p>
		<p><span class="font-weight-bold">Developer(s)</span>	
		<i>Rocksteady Studios,
		WB Games Montréal,
		Splash Damage,
		Human Head Studios,
		NetherRealm Studios,
		Armature Studio,
		Turbine, Inc.</i></p>
		<p><span class="font-weight-bold">Publisher(s)</span>	
		<i>Eidos Interactive (2009),
		Warner Bros. Interactive Entertainment (2009–present),
		Writer(s),	
		Paul Dini,
		Corey May,
		Dooma Wendschuh,
		Adam Beechen,
		Sefton Hill</i></p>
		<p><span class="font-weight-bold">Platform(s)</span>	
		<i>Android,
		iOS,
		Microsoft Windows,
		Nintendo 3DS,
		OS X,
		PlayStation 3,
		PlayStation 4,
		PlayStation Vita,
		Wii U,
		Xbox 360,
		Xbox One</i></p>
		<p><span class="font-weight-bold">First release</span>	<i>Batman: Arkham Asylum
		August 25, 2009</i></p>
		<p><span class="font-weight-bold">Latest release</span>	<i>Batman: Arkham Collection
		September 6, 2019</i></p>
	</div>
</div>
<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/batfly.jpg" class="w-75">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<h3>Main series</h3>
<hr>
<h4>Batman: Arkham Asylum (2009)</h4>
<p><span class="font-weight-bold">Main article: Batman: Arkham Asylum</span></p>
<p><span class="font-weight-bold">Batman: Arkham Asylum,</span> <i>the first game in the series, was written by veteran Batman writer Paul Dini and developed by Rocksteady.[1] The game takes place entirely on Arkham Island, which houses Arkham Asylum, home of Batman's most notorious foes.</i></p></div> <p><i>Its story sees Batman having to once again stop his archenemy, the Joker, who instigates an elaborate plot to seize control of Arkham and trap Batman inside with many of his incarcerated foes, while threatening to detonate bombs hidden throughout Gotham City should anyone else intervine. While fighting through the Asylum's inmates and attempting to restore order, Batman learns that the Joker has gained possession of a large quantity of Titan, an experimental chemical based on Venom, the drug used by Bane to enchance his powers, and must destroy it before the Joker can use it for his nefarious schemes. Arkham Asylum also features downloadable content (DLC) that adds extra challenges and the Joker as a playable character (on the PlayStation 3 version only).</i></p>

</div>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/batcar.jpg" class="w-75">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<h3>Batman: Arkham City (2011)</h3>
<hr>
<h4>Main article: Batman: Arkham City</h4>
<p><span class="font-weight-bold">Batman: Arkham City</span> <i>is the sequel to Arkham Asylum and features a bigger cast of characters and a story again written by Paul Dini, along with Paul Crocker and Sefton Hill. The game's story, set one year after Arkham Asylum, sees Batman incarcerated within Arkham City, a massive new super-prison based in the decaying urban slums of Gotham City and established by Quincy Sharp, the former</i></p></div> <p><i>warden of Arkham Asylum and now mayor of Gotham. While contending with various inmates and villains taking advantage of Arkham City's lawlessness, Batman must uncover the secret behind a sinister scheme, code-named "Protocol 10", orchestrated by the facility's warden, Hugo Strange. At the same time, the Joker is slowly dying due to the unstable properties of the Titan formula in his blood (having injected himself with Titan in a failed attempt to defeat Batman at the end of the previous game), and now infects Batman with his blood to force him to find a cure. Kevin Conroy and Mark Hamill reprise their roles of as Batman and the Joker, respectively, from the previous game. It is the first game in the series to introduce side missions, each focusing on different characters. It also features DLC that adds Catwoman as a playable character in the game's storyline, with her own campaign taking place at the same time as the main story, as well as in the challenge mode, alongside Nightwing and Robin. Another DLC, entitled Harley Quinn's Revenge, adds a separate campaign, set after the events in the main story, which features both Batman and Robin as playable character, and sees them attempting to defeat a vengeful Harley Quinn, who has taken over the Joker's gang following his death.</i></p>
</div>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<img src="Images/batgun.jpg" class="w-75">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<h3>Batman: Arkham Origins (2013)</h3>
<hr>
<h4>Main article: Batman: Arkham Origins</h4>
<p><span class="font-weight-bold">Batman: Arkham Origins</span> <i>is a prequel set five years before the events of Arkham Asylum. It was developed by WB Games Montréal and written by Assassin's Creed and Prince of Persia writers Corey May and Dooma Wendschuh. The game is the first in the series to feature multiplayer gameplay, with that content developed by Splash Damage. The story follows a younger, less refined, and less</i></p></div> <p><i>experienced Batman, who has a bounty placed on his head by Black Mask, drawing eight of the world's deadliest assassins to Gotham City on Christmas Eve. Batman must defeat these assassins and bring Black Mask to justice, while also being hunted by the police, who see him as nothing but a dangerous vigilante, and having to foil the schemes of other villains taking advantage of the chaos, including the Joker, whom he encounters for the first time. Arkham Origins is set in downtown and east Gotham, which would later be transformed into Arkham City. Roger Craig Smith and Troy Baker voiced Batman and the Joker, respectively, replacing Conroy and Hamill from the previous two games. Like its predecessors, the game features DLC that adds extra challenges, as well as Bruce Wayne and Deathstroke as playable characters; the Cold, Cold Heart DLC adds an entirerly new campaign, set only a week after the events of the main story, on New Year's Eve, and depicts Batman's first encounter with Mr. Freeze.</i></p>
</div>

<h3>Batman: Arkham Knight (2015)</h3>
<hr>
<h4>Main article: Batman: Arkham Knight</h4>
<p><span class="font-weight-bold">Batman: Arkham Knight</span> <i>is the sequel to Arkham City; it was developed once again by Rocksteady, and was released on the PlayStation 4, Xbox One and Windows on June 23, 2015. It is intended to be the final Arkham game by Rocksteady. Set nine months after Arkham City, the game sees the return of the supervillain Scarecrow, who forces a citywide evacuation and unites several of Gotham City's greatest villains, including Penguin, Two-Face, Riddler, and Harley Quinn, to destroy Batman once and for all. Scarecrow is aided by the mysterious Arkham Knight, who desires revenge against Batman and seems to known much more about him than any individual the Dark Knight has faced so far. While attempting to stop Scarecrow and restore justice to Gotham with the help of his allies, Batman must also contend with an illness caused by the late Joker, which is physically and mentally transforming him into the Joker over time. Arkham Knight is set in uptown Gotham, located west of downtown and east Gotham (Arkham City and Origins' setting), and composed of three main islands: Bleake Island, Miagani Island, and Founders' Island. Kevin Conroy and Mark Hamill reprise their roles as Batman and the Joker, respectively. The DLC includes a series of four new side missions centered around the characters Killer Croc, Ra's al Ghul, Mr. Freeze, and Mad Hatter, new levels set both before and after the events of the main story and featuring Batgirl, Red Hood, Harley Quinn, Nightwing, Robin, and Catwoman as playable characters, new challenges, and skins for both the playable characters and the Batmobile (which makes its debut in the series as an actual gameplay element).</i></p>

<h3>Portable games</h3>
<hr>
<h4>Batman: Arkham City Lockdown (2011)</h4>
<p><span class="font-weight-bold">Main article: Batman: Arkham City Lockdown</span></p>
<p><span class="font-weight-bold">Batman: Arkham City Lockdown</span> <i>is an iOS and Android fighting game developed by NetherRealm Studios, the creators of Mortal Kombat. Set several weeks before the events of Arkham City, the game sees Batman facing various villains who have escaped from Arkham Asylum and are causing mayhem in the streets of Gotham City, following the announcement of Arkham City. It also features voice acting, with many actors reprising their roles from Arkham Asylum and Arkham City.</i></p>

<h3>Batman: Arkham Origins (mobile) (2013)</h3>
<hr>
<h4>Main article: Batman: Arkham Origins (mobile)</h4>
<p><span class="font-weight-bold">Batman: Arkham Origins</span> <i>is an iOS and Android fighting game developed by NetherRealm Studios. It plays similarly to Arkham City Lockdown, and follows the same storyline as the console and PC versions of the game.</i></p>

<h3>Batman: Arkham Origins Blackgate (2013)</h3>
<hr>
<h4>Main article: Batman: Arkham Origins Blackgate</h4>
<p><span class ="font-weigth-bold">Batman: Arkham Origins Blackgate</span> <i>is a PlayStation Vita and Nintendo 3DS game developed by Armature Studio. Set three months after the events of Arkham Origins, the story sees Batman investigating a mysterious explosion at Blackgate Prison that set the inmates free and allowed notorious crime bosses Joker, Black Mask, and Penguin to take over and divide the prison between them; Batman is aided throughout the game by Catwoman, whom he meets for the first time, though there might be more about her than meets the eye. Origins Blackgate also features voice acting, with many actors reprising their role from Arkham Origins. A deluxe edition featuring new maps, enemy encounters, difficulty levels, batsuits and enhanced visuals was released on PlayStation 3, Xbox 360, Wii U and Microsoft Windows on April 1, 2014 in North America, and April 2, 2014 in Europe.</i></p>

<h3>Batman: Arkham Underworld (2016)</h3>
<hr>
<p><span class ="font-weigth-bold">Batman: Arkham Underworld</span> <i>is an iOS and Android game developed by Turbine, Inc. and released on iOS on July 14, 2016. Set a few years before the events of Arkham Asylum, the game gives players control over a team of villains - including the Riddler, Harley Quinn, Mr. Freeze, Killer Croc, Scarecrow, and Bane - and has them build hideouts and recruit henchmen, with the goal of becoming Gotham City's "next criminal kingpin". Arkham Underworld also features voice acting, with many actors reprising their roles from the main games series. The game was shut down in 2017.</i></p>

<h3>Virtual reality</h3>
<hr>
<h4>Batman: Arkham VR (2016)</h4>
<p><span class ="font-weigth-bold">Main article: Batman: Arkham VR</span></p>
<p><i>In June 2016 at E3 2016, it was announced that Rocksteady was developing Batman: Arkham VR for the PlayStation VR, which released in October 2016. The game is set a few weeks prior to the events of Arkham Knight, and has players "utilize [Batman's] legendary gadgets to unravel a plot that threatens the lives of his closest allies." It was released for the Oculus Rift and HTC Vive on April 25, 2017.</i></p>

<h3>Collections</h3>
<hr>
<h4>Batman: Arkham Bundle (2013)</h4>
<p><span class ="font-weigth-bold">On September 23, 2013, the Batman: Arkham Bundle</span> <i>was released in North America for the PlayStation 3 and Xbox 360, as a Greatest Hits and Platinum Hits collection, respectively. It features the Game of the Year edition of Arkham Asylum, which includes the "Totally Insane", "Nocturnal Hunter", "Crime Alley" and "Scarecrow Nightmare" challenge maps, and the Game of the Year edition of Arkham City, which includes all additional content, including multiple skin DLC packs, as well as the extended story "Harley Quinn's Revenge".</i></p>

<h4>Batman: Arkham Collection (2013)</h4>
<hr>
<p><span class ="font-weigth-bold">On November 22, 2013, the Batman: Arkham Collection</span> <i>was released in Europe for the PlayStation 3, Xbox 360 and Microsoft Windows. The collection features downloadable versions of Arkham Asylum and Arkham City, and a physical copy of Arkham Origins. In addition, the PlayStation 3 version features the Knightfall DLC pack for Arkham Origins, while Arkham Asylum and Arkham City are the Game of the Year editions on Windows.</i></p>

<h4>Batman: Return to Arkham (2016)</h4>
<hr>
<p><span class ="font-weigth-bold">Batman: Return to Arkham, developed by Virtuos,</span> <i>features remastered versions of Arkham Asylum and Arkham City using Unreal Engine 4 for the PlayStation 4 and Xbox One. Additionally, both games include all previously released downloadable content, and feature improved graphics, upgraded models and environments, as well as improvements in the lighting, effects and shaders. The collection was released on October 18, 2016, to mixed reviews. Reviewers noted improvements to the textures and shading, but had split opinions on the graphics and lighting effects. The collection was also criticized for issues with its frame rate, having been capped at 30 frames per second.</i></p>

</div>
</div>

</div>

<footer class="footersection" id="footerdiv">
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
					<li><a href="#">  Best Gameplays </a></li>
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