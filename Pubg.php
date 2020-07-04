<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	<title>Pubg Mobile</title>
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
<img src="Images/pubg.jpg" class="w-50">
</div>
<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<i><h1 class="text-center">Pubg Mobile</h1></i>
<hr>
<p><span class="font-weight-bold">PlayerUnknown's Battlegrounds (PUBG)</span> <i>is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games, inspired by the 2000 Japanese film Battle Royale, and expanded into a standalone game under Greene's creative direction. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game's map decreases in size over time, directing surviving players into tighter areas to force encounters. The last player or team standing wins the round.</i></p>

<p><i>Battlegrounds was first released for Microsoft Windows via Steam's early access beta program in March 2017, with a full release in December 2017. The game was also released by Microsoft Studios for the Xbox One via its Xbox Game Preview program that same month, and officially released in September 2018. A free-to-play mobile version for Android and iOS was released in 2018, in addition to a port for the PlayStation 4. A version for the Stadia streaming platform was released in April 2020. Battlegrounds is one of the best-selling and most-played video games of all time. By 2019, the PC and console versions of the game have sold over 60 million copies, in addition to PUBG Mobile having crossed 600 million downloads.</i></p>

<p><i>Battlegrounds received positive reviews from critics, who found that while the game had some technical flaws, it presented new types of gameplay that could be easily approached by players of any skill level and was highly replayable. The game was attributed to popularizing the battle royale genre, with a number of unofficial Chinese clones also being produced following its success. The game also received several Game of the Year nominations, among other accolades. PUBG Corporation has run several small tournaments and introduced in-game tools to help with broadcasting the game to spectators, as they wish for it to become a popular esport. The game has also been banned in some countries for allegedly being harmful and addictive to younger players</i></p>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-5" style="color: #000;">
		<img src="Images/image.jpg" class="text-center align-items-center w-75 ml-4">
		<h4 class="mb-2 mt-3" style="font-size: 2.3rem; color: #000; font-weight: bold; font-family: 'Algerian' ;"> Pubg Unknown's Battlegrounds</h4>
		<hr>
	
		<p class="mt-4"><span class="font-weight-bold" style="color: #000;">Developer(s)</span>	
		<i>	PUBG Corporation</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Publisher(s)</span>	
		<i>PUBG Corporation</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Director(s)</span>	
		<i>	Brendan Greene, Jang Tae-seok</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Producer(s)</span><i>Kim Chang-han</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Designer(s)</span><i>Brendan Greene</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Artist(s)</span><i>Jang Tae-seok</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Composer(s)</span><i>Tom Salta</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Engine(s)</span><i>Unreal Engine 4</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Platform(s)</span><i>Microsoft Windows, Android, iOS, Xbox One, PlayStation 4, Stadia</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Release(s)</span><i>December 20, 2017</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Genere(s)</span><i>Battle Royal</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Mode(s)</span><i>Multiplayer</i></p>

</div>
</div>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/game.jpg" class="w-75">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<h3>Gameplay</h3>
<hr>
<p><i>Battlegrounds is a player versus player shooter game in which up to one hundred players fight in a battle royale, a type of large-scale last man standing deathmatch where players fight to remain the last alive. Players can choose to enter the match solo, duo, or with a small team of up to four people. The last person or team alive wins the match.</i></p></div></div>

<p class="mt-3"><i>Each match starts with players parachuting from a plane onto one of the four maps, with areas of approximately 8 × 8 kilometres (5.0 × 5.0 mi), 6 × 6 kilometres (3.7 × 3.7 mi), and 4 × 4 kilometres (2.5 × 2.5 mi) in size. The plane's flight path across the map varies with each round, requiring players to quickly determine the best time to eject and parachute to the ground. Players start with no gear beyond customized clothing selections which do not affect gameplay. Once they land, players can search buildings, ghost towns and other sites to find weapons, vehicles, armor, and other equipment. These items are procedurally distributed throughout the map at the start of a match, with certain high-risk zones typically having better equipment. Killed players can be looted to acquire their gear as well. Players can opt to play either from the first-person or third-person perspective, each having their own advantages and disadvantages in combat and situational awareness; though server-specific settings can be used to force all players into one perspective to eliminate some advantages.</i></p>

<p><i>Every few minutes, the playable area of the map begins to shrink down towards a random location, with any player caught outside the safe area taking damage incrementally, and eventually being eliminated if the safe zone is not entered in time; in game, the players see the boundary as a shimmering blue wall that contracts over time. This results in a more confined map, in turn increasing the chances of encounters. During the course of the match, random regions of the map are highlighted in red and bombed, posing a threat to players who remain in that area. In both cases, players are warned a few minutes before these events, giving them time to relocate to safety. A plane will fly over various parts of the playable map occasionally at random, or wherever a player uses a flare gun, and drop a loot package, containing items which are typically unobtainable during normal gameplay. These packages emit highly visible red smoke, drawing interested players near it and creating further confrontations. On average, a full round takes no more than 30 minutes.</i></p>

<p><i>At the completion of each round, players gain in-game currency based on their performance. The currency is used to purchase crates which contain cosmetic items for character or weapon customization. A rotating "event mode" was added to the game in March 2018. These events change up the normal game rules, such as establishing larger teams or squads, or altering the distribution of weapons and armor across the game map.</i></p>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/pubggame.jpg" class="w-75">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<h3>Development</h3>
<hr>

<p><span class="font-weight-bold"> Game creator Brendan "PlayerUnknown" Greene at the 2018 Game Developers Conference</span></p>
<p><i>The game's concept and design was led by Brendan Greene, better known by his online handle PlayerUnknown, who had previously created the ARMA 2 mod DayZ: Battle Royale, an offshoot of popular mod DayZ, and inspired by the 2000 Japanese film Battle </i></p></div></div> <p><i>Royale. At the time he created DayZ: Battle Royale, around 2013, Irish-born Greene had been living in Brazil for a few years as a photographer, graphic designer, and web designer, and played video games such as Delta Force: Black Hawk Down and America's Army. The DayZ mod caught his interest, both as a realistic military simulation and its open-ended gameplay, and started playing around with a custom server, learning programming as he went along. Greene found most multiplayer first-person shooters too repetitive, considering maps small and easy to memorize. He wanted to create something with more random aspects so that players would not know what to expect, creating a high degree of replayability; this was done by creating vastly larger maps that could not be easily memorized, and using random item placement across it. Greene was also inspired by an online competition for DayZ called Survivor GameZ, which featured a number of Twitch and YouTube streamers fighting until only a few were left; as he was not a streamer himself, Greene wanted to create a similar game mode that anyone could play. His initial efforts on this mod were more inspired by The Hunger Games novels, where players would try to vie for stockpiles of weapons at a central location, but moved away from this partially to give players a better chance at survival by spreading weapons around, and also to avoid copyright issues with the novels. In taking inspiration from the Battle Royale film, Greene had wanted to use square safe areas, but his inexperience in coding led him to use circular safe areas instead, which persisted to Battlegrounds.</i></p>

<p><i>When DayZ became its own standalone title, interest in his ARMA 2 version of the Battle Royale mod trailed off, and Greene transitioned development of the mod to ARMA 3. Sony Online Entertainment (now the Daybreak Game Company) had become interested in Greene's work, and brought him on as a consultant to develop on H1Z1, licensing the battle royale idea from him. In February 2016, Sony Online split H1Z1 into two separate games, the survival mode H1Z1: Just Survive, and the battle royale-like H1Z1: King of the Kill, around the same time that Greene's consultation period was over.</i></p>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/kar98.jpg" class="w-75 ml-5">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">

<p><i>Separately, the Seoul-based studio Ginno Games, led by Chang-han Kim and who developed massively multiplayer online games (MMOs) for personal computers, was acquired and renamed Bluehole Ginno Games by Bluehole in January 2015, a major South Korean publisher of MMOs and mobile games. Kim recognized that producing a successful game in South Korea generally meant it would be published globally, and wanted to use his team to create a successful title for personal computers that followed the same model as other mobile games published by Bluehole.</i></p></div></div> <p><i> He had already been excited about making a type of battle royale game after he had played DayZ, in part that the format had not caught on in Korea. He also wanted to make this through an early access model and have a very limited development schedule to get the game out as quickly as possible, while treating the product as a "games as a service" model to be able to support it for many years. In researching what had been done, he came across Greene's mods and reached out to him. In July 2017, Bluehole partnered with social media platform Facebook to provide exclusive streaming content to Facebook's gaming channels, as part of their push to provide more gaming content for its users.</i></p>

<p><i>Around the same time that Greene left Sony Online, Kim contacted and offered him the opportunity to work on a new battle royale concept. Within a week, Greene flew out to Bluehole's headquarters in Korea to discuss the options, and a few weeks later, became the creative director of Bluehole. He moved to South Korea to oversee development. According to Greene, this was the first time a Korean game studio had brought aboard a foreigner for a creative director role, and while a risk, he says that his relationship with Bluehole's management is strong, allowing Greene's team to work autonomously with minimal oversight. The game's main musical theme was composed by Tom Salta, who was personally selected by Greene as he and the team were looking for an "orchestral electronic hybrid theme" that would give players a "huge build-up", keeping them "resolutely determined" until a match starts.</i></p>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/realpubg.jpg" class="w-75 ml-5">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">

<h3>Design</h3>
<hr>

<p><i>Development began in early 2016 and was publicly announced that June, with plans to have the game ready within a year. Kim served as executive producer for the game. Bluehole started with a team of about 35 developers supporting Greene's work, but had expanded to 70 by June 2017. Greene stated that many of these developers were voluntarily putting in longer work hours into the game due to</i></p></div></div> <p><i>their dedication to the project, and not by any mandate from himself or Bluehole's management. In addition to Bluehole, Greene also credits Bohemia Interactive, the developers of ARMA and DayZ, for support with motion capture animations via their Prague studio.</i></p>

<p><i>With the rapid growth of interest in the game, Bluehole spun out the entire development for Battlegrounds into Bluehole Ginno Games in September 2017, which was renamed PUBG Corporation with Kim as its chief executive officer. PUBG Corporation continued the development of the game and its marketing and growth, opening an office in the United States with plans for future ones in Europe and Japan. In August 2018, PUBG Corporation launched the "Fix PUBG" campaign, acknowledging that that game by then still had several lingering bugs and other performance issues.</i></p>

<p><i>The campaign finished in November, with PUBG Corporation calling it a success as everything listed had been implemented by then. In March 2019, Greene announced that he was stepping down as the game's lead designer, but would still serve as a creative consultant. Tae-seok Jang, the game's art director, would replace him, with Green relocating to PUBG's studio in Amsterdam, PUBG Special Projects. Greene stated that he believed the main Battlegrounds team was at a place to continue developing the game in the direction he had set to keep the game unique among the other battle royale games it had launched, and he wanted to try something not tied to battle royale but still multiplayer-based. The move also put him closer to his family in Ireland.</i></p>

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