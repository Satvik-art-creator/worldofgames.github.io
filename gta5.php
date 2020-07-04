
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	<title>GTA 5</title>
	<?php include 'link/links.php'; ?>
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
	font-weight: bold;
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
<img src="Images/gtagang.jpg" class="w-50">
</div>
<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<i><h1 class="text-center">GTA 5</h1></i>
<hr>
<p><i><span class="font-weight-bold">Grand Theft Auto V</span> is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the first main entry in the Grand Theft Auto series since 2008's Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency and powerful crime figures. The open world design lets players freely roam San Andreas' open countryside and the fictional city of Los Santos, based on Los Angeles.</i></p>

<p><i>The game is played from either a third-person or first-person perspective, and its world is navigated on foot or by vehicle. Players control the three lead protagonists throughout single-player and switch among them, both during and outside missions. The story is centred on the heist sequences, and many missions involve shooting and driving gameplay. A "wanted" system governs the aggression of law enforcement response to players who commit crimes. Grand Theft Auto Online, the game's online multiplayer mode, lets up to 30 players engage in a variety of different cooperative and competitive game modes.</i></p>

<p><i>The game's development began soon after Grand Theft Auto IV's release and was shared between many of Rockstar's studios worldwide. The development team drew influence from many of their previous projects such as Red Dead Redemption and Max Payne 3 and designed the game around three lead protagonists to innovate on the core structure of its predecessors. Much of the development work constituted the open world's creation, and several team members conducted field research around California to capture footage for the design team. The game's soundtrack features an original score composed by a team of producers who collaborated over several years. It was released in September 2013 for PlayStation 3 and Xbox 360, in November 2014 for PlayStation 4 and Xbox One, and in April 2015 for Microsoft Windows.</i></p>

<p><i>Extensively marketed and widely anticipated, the game broke industry sales records and became the fastest-selling entertainment product in history, earning $800 million in its first day and $1 billion in its first three days. It received widespread critical acclaim, with praise directed at its multiple protagonist design, open world, presentation and gameplay. However, it caused controversies related to its depiction of violence and women. Considered one of seventh and eighth generation console gaming's most significant titles and among the best video games ever made, it won year-end accolades including Game of the Year awards from several gaming publications. It is the second best-selling video game of all time with over 130 million copies shipped and one of the most financially successful entertainment products of all time, with about $6 billion in worldwide revenue.</i></p></div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-5" style="color: #000;">
		<img src="Images/name.jpg" class="text-center align-items-center w-75 ml-4">
		<h4 class="mb-2 mt-3" style="font-size: 2.3rem; color: #000; font-weight: bold; font-family: 'Algerian'; "> Grand Theft Auto V</h4>
		<hr>
	
		<p class="mt-4"><span class="font-weight-bold" style="color: #000;">Developer(s)</span>	
		<i>	Rockstar North</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Publisher(s)</span>	
		<i>Rockstar Games</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Composer(s)</span>	
		<i>	Tangerine Dream, Woody Jackson, The Alchemist, Oh No</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Producer(s)</span><i>Leslie Benzies, Imran Sarwar</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Designer(s)</span><i>Leslie Benzies, Imran Sarwar</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Artist(s)</span><i>	Aaron Garbut</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Programmer(s)</span><i>Adam Fowler</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Writer(s)</span><i>	Dan Houser, Rupert Humphries, Michael Unsworth</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Platform(s)</span><i>PlayStation 3, Xbox 360, PlayStation 4, Xbox One, Microsoft Windows</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Release(s)</span><i>17 September 2013</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Genere(s)</span><i>	Action-adventure</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Series(s)</span><i>Grand Theft Auto</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Engine(s)</span><i>RAGE</i></p>
		<p><span class="font-weight-bold" style="color: #000;">Mode(s)</span><i>Single-player, multiplayer</i></p>


</div>
</div>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/car.gta.jpg" class="w-75">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<h3>Gameplay</h3>
<hr>
<p><i>Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective. Players complete missions—linear scenarios with set objectives—to progress through the story. Outside of the missions, players may freely roam the open world. Composed of the San Andreas open countryside area, including the fictional Blaine County, and the fictional city of Los Santos, the world is much larger in area than earlier entries in the</i></p></div></div> <p><i>series. It may be fully explored after the game's beginning without restriction, although story progress unlocks more gameplay content.</i></p>

<p><i>The player character crouched behind a vehicle while in combat. The head-up display elements are visible on-screen.
Players can take cover behind objects during firefights to avoid taking damage from enemies.
Players use melee attacks, firearms and explosives to fight enemies, and may run, jump, swim or use vehicles to navigate the world. To accommodate the map's size, the game introduces vehicle types absent in its predecessor Grand Theft Auto IV, such as fixed-wing aircraft. In combat, auto-aim and a cover system may be used as assistance against enemies. Should players take damage, their health meter will gradually regenerate to its halfway point. Players respawn at hospitals when their health depletes. If players commit crimes, law enforcement agencies may respond as indicated by a "wanted" meter in the head-up display (HUD). Stars displayed on the meter indicate the current wanted level (for example, at the maximum five-star level, police helicopters and SWAT teams swarm to lethally dispatch players). Law enforcement officers will search for players who leave the wanted vicinity. The meter enters a cool-down mode and eventually recedes when players are hidden from the officers' line of sight that displays on the mini-map.</i></p>

<p><i>The single-player mode lets players control three characters: Michael De Santa, Trevor Philips and Franklin Clinton—criminals whose stories interconnect as they complete missions. Some missions are completed with only one character and others feature two or three. Outside the missions, players may switch between characters at will by a directional compass on the HUD. The game may switch characters automatically during missions to complete specific objectives. A character's compass avatar will flash red if he is in danger and needs help, and flash white if he has a strategic advantage. Though players complete missions as any of the three protagonists, the more difficult heist missions require aid from AI-controlled accomplices with unique skill sets like computer hacking and driving. If an accomplice survives a successful heist, they take a cut from the cash reward and may be available for later missions with improvements to their unique skills. Some heists afford multiple strategies; in a holdup mission, players may either stealthily subdue civilians with an incapacitating agent or conspicuously storm the venue with guns drawn.</i></p>

<p><i>Each character has a set of eight skills that represent their ability in specific areas such as shooting and driving. Though skills improve through play, each character has a skill with expertise by default (e.g. Trevor's flying skill). The eighth "special" skill determines the effectiveness in performing an ability that is unique to each respective character. Michael enters bullet time in combat, Franklin slows down time while driving, and Trevor deals twice as much damage to enemies while taking half as much in combat. A meter on each character's HUD depletes when an ability is being used and regenerates when players perform skilful actions (for example, drifting in vehicles as Franklin or performing headshots as Michael).</i></p>

<p><i>While free-roaming the game world, players may engage in context-specific activities such as scuba diving and BASE jumping. Each character has a smartphone for contacting friends, starting activities and accessing an in-game Internet. The Internet lets players trade in stocks via a stock market. Players may purchase properties such as garages and businesses, upgrade the weapons and vehicles in each character's arsenal. Players may also visit places such as cinemas and strip clubs. Players can also customise their appearance by purchasing outfits, haircuts and tattoos.</i></p>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/gang.jpg" class="w-75">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
<h3>Plot</h3>
<hr>

<p><i>Michael Townley, Trevor Philips, and Brad Snider partake in a botched robbery in Ludendorff, North Yankton, resulting in all three being presumed dead. Nine years later, Michael is living under witness protection with his family in the city of Los Santos, under the alias Michael De Santa. Across town, gangbanger Franklin Clinton is working for a corrupt Armenian car salesman and meets Michael while attempting to fraudulently repossess his son's car; the two</i></p></div></div> <p><i>later become friends. When Michael finds his wife Amanda sleeping with her tennis coach, he and Franklin chase the coach to a mansion, which Michael destroys in anger. The owner of the mansion turns out to be the girlfriend of Martin Madrazo, a Mexican drug lord who demands compensation to avoid further violence. Michael returns to a life of crime to obtain the money, enlisting Franklin as an accomplice. With the help of Michael's old friend Lester Crest, a disabled hacker, they perform a jewellery store heist to pay off the debt. Meanwhile, Trevor, who now lives in a trailer park on the outskirts of Los Santos, hears of the heist and realises that it was Michael's work; Trevor had believed that Michael was killed in their botched robbery nine years ago. Trevor surprises Michael and reunites with him, after tracking him down.</i></p>

<p><i>As time goes on, the personal lives of the protagonists begin to spiral out of control. Michael's increasingly disreputable behaviour prompts his family to leave him. When he becomes a movie producer at film studio Richards Majestic, Michael comes into conflict with Devin Weston, a self-made billionaire venture capitalist and corporate raider, who vows revenge after his attempts to shut down the studio are thwarted by Michael. Franklin, meanwhile, rescues his friend Lamar Davis from gangster and former friend Harold "Stretch" Joseph, who repeatedly attempts to kill Lamar to prove himself to his new brethren. At the same time, Trevor's reckless efforts to consolidate his control over various black markets in Blaine County see him waging war against The Lost outlaw motorcycle club, several Latin American street gangs, rival meth dealers, hillbillies, private security firm Merryweather, and Triad kingpin Wei Cheng.</i></p>

<p><span class="font-weight-bold"> Federal Investigation Bureau (FIB)</span> <i>agents Dave Norton and Steve Haines contact Michael and demand that he, Franklin, and Trevor perform a series of operations to undermine a rival agency, the</i> <span class="font-weight-bold">International Affairs Agency (IAA)</span>. <i>Under Steve's direction and with Lester's help, they attack an armoured convoy carrying funds intended for the IAA, and steal an experimental chemical weapon from an IAA-controlled lab. As Steve comes under increasing scrutiny, he forces Michael and Franklin to erase any evidence being used against him from the FIB servers. Michael takes the opportunity to wipe the data on his activities, destroying Steve's leverage over him.</i></p>

<p><i>Eventually, Michael, Trevor, Franklin, and Lester start planning their most significant heist ever: raiding the Union Depository's gold bullion reserve. By this time, Michael reconciles with his family. However, Trevor discovers that Brad was not imprisoned as led to believe, but killed during the Ludendorff heist and buried in the grave marked for Michael. Trevor's feelings of betrayal cause friction within the group and threaten to undermine their Union Depository plans. Steve betrays Michael and Dave, and they become caught in a Mexican standoff between the FIB, IAA, and Merryweather. Trevor, feeling that he is the only one who has the right to kill Michael, comes to their aid. Despite not forgiving Michael, Trevor agrees to perform the Union Depository heist and part ways with him afterwards.</i></p>

<p><i>The heist is completed successfully, but Franklin is then approached separately by Steve and Dave, who contend that Trevor is a liability, and Devin, who wants retribution for Michael's betrayal. Franklin has three choices: kill Trevor, kill Michael, or attempt to save both in a suicide mission. Should Franklin choose to kill either Michael or Trevor, he ceases contact with the man he spares and returns to his old life. Otherwise, the trio withstands an onslaught from the FIB and Merryweather before going on to kill Cheng, Stretch, Steve, and Devin. Michael and Trevor reconcile, and the three cease working together but remain friends.</i></p>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/gta5.jpg" class="w-75 ml-5">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">

<h3>Development</h3>
<hr>

<p><span class="font-weight-bold"> Main article: Development of Grand Theft Auto V</span></p>
<p><span class="font-weight-bold">Rockstar North began to develop Grand Theft Auto V in 2008,</span> <i>following Grand Theft Auto IV's release. Development was conducted by a team of more than 1,000 people, including Rockstar North's core team and staff from parent company Rockstar Games'</i></p></div></div> <p><i>studios around the world. The proprietary Rockstar Advanced Game Engine (RAGE) was overhauled for the game to improve its draw distance rendering capabilities. The Euphoria and Bullet software handle additional animation and rendering tasks. Having become familiar with the PlayStation 3 and Xbox 360 hardware over time, Rockstar found they were able to push the consoles' graphical capabilities further than in previous games. Analyst estimations place the game's combined development and marketing budget at more than GB£170 million (US$265 million), which would make it the most expensive game ever made at that time.</i></p>

<p><i>The open world was modelled on Southern California and Los Angeles, and its design and in-game render constituted much of the game's early work. Key members of the game world production team took field research trips throughout the region and documented their research with photo and video footage. Google Maps projections of Los Angeles were used by the team to help design Los Santos' road networks. To reflect and reproduce Los Angeles' demographic spread, the developers studied census data and watched documentaries about the city. The team considered creating the open world the most technically demanding aspect of the game's production.</i></p>

<p><i>A fundamental design goal from the outset was to innovate on the series core structure by giving players control of three lead protagonists instead of one. The idea was first raised during Grand Theft Auto: San Andreas' development, but contemporaneous hardware restrictions made it infeasible. Having developed two Grand Theft Auto IV episodic expansion packs featuring new protagonists in 2009, the team wanted to base Grand Theft Auto V around three simultaneously controlled protagonists. The team viewed it as a spiritual successor to many of their previous games (such as Grand Theft Auto IV, Red Dead Redemption and Max Payne 3), and designed it to improve upon their gameplay mechanics. They sought to improve the action gameplay by refining the shooting mechanics and cover system and reworked the driving mechanics to correct Grand Theft Auto IV's awkward vehicle controls.</i></p>

<p><i>After an audition process, Ned Luke, Shawn Fonteno and Steven Ogg were selected to portray Michael, Franklin and Trevor, respectively. Their performances were mostly recorded using motion capture technology, but dialogue for scenes with characters seated in vehicles was recorded in studios instead. The game is the first in its series to feature an original score, composed by a team of producers collaborating over several years. Licensed music provided by an in-game radio is also used. The team licensed more than 241 tracks shared between fifteen radio stations, with an additional two stations providing talk radio Some of the tracks were written specifically for the game, such as rapper and producer Flying Lotus' original work composed for the FlyLo FM radio station he hosts.</i></p>

<p><i>The game was first announced by Rockstar Games on 25 October 2011. They released its debut trailer one week later,[56] with an official press release acknowledging its setting. Journalists noted that the announcement ignited widespread anticipation within the gaming industry, which they owed to the cultural significance of the series. The game missed its original projected Q2 2013 release date, pushed back to 17 September to allow for further polishing. To spur pre-order game sales, Rockstar collaborated with several retail outlets to make a special edition with extra in-game features. They ran a viral marketing strategy with a website for a fictional religious cult, "The Epsilon Program", that offered users the chance to feature in the game as members of the cult.</i></p>

<div class="row">

<div class="col-xl-6 col-lg-6 col-md-6 col-12">
	<img src="Images/gtaloot.jpg" class="w-75">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12">

<p><i>The city of Los Santos being rendered on the PlayStation 4 on the left, and the PlayStation 3 on the right. Improved texture effects, lighting and draw distances are visible on the PS4 version.
A comparison of the PlayStation 4 (left) and PlayStation 3 (right) versions of the game. The enhanced re-release features greater draw distances and higher-resolution textures than the original versions.
A re-release of the game was announced for Microsoft Windows (PC), PlayStation 4 and Xbox One at E3 2014. This enhanced version features an increased draw distance, finer texture</i></p></div></div> <p><i>details, denser traffic, upgraded weather effects, and new wildlife and vegetation. It includes a new on-foot first-person view option, which required the development team to overhaul the animation system to accommodate first-person gameplay. The PlayStation 4 and Xbox One versions were released on 18 November 2014. The PC version, initially scheduled for simultaneous release with the console versions, was delayed until 14 April 2015. According to Rockstar, it required extra development time for "polish". The PC version is capable of 60 frames per second gameplay at 4K resolution, and the Rockstar Editor lets players capture and edit gameplay videos. Plans to develop single-player downloadable content were later scrapped as the team focused resources on Grand Theft Auto Online and Red Dead Redemption 2.</i></p>

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