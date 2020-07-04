<style type="text/css">
	
html{
	scroll-behavior: smooth;
}

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	cursor: default;
	font-family: 'Poppins' , sans-serif;
}


@font-face{
	font-family: gaming;
	src: url('Css/pdark.ttf');
}

#loading{
	position: fixed;
	width: 100%;
	height: 100vh;
	background: url('Images/loader1.gif')
	no-repeat center;
	background-size: 110% 110%;
	z-index: 9999999;
}

.bgimage{
	background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('Images/batman.jpg');
	background-size: 120% 110%;
	background-position: center;
	clip-path: polygon(100% 0%, 100% 75%, 50% 100%, 0 75%, 0 0);
	height: 100vh;
	animation: slider 9s infinite linear;
}

@keyframes slider{

0%{
	background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('Images/batman.jpg');
}

20%{
	background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('Images/Lol.jpg');
}
	
40%{
	background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('Images/gtagang.jpg');
}

60%{
	background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('Images/countdown.jpg');
}

80%{
	background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('Images/mine.jpg');
}

100%{
	background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('Images/throne.jpg');
}

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
	color: #fff!important;
	font-size: 2rem;
	position: absolute;
	top: 20px;
	right: 20px;
	opacity: 0;
	visibility: hidden;
}

#hamburger i:hover{
	color: #f39d1a!important;
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
	color: #fff!important;
	transition: 0.5s all ease;
}

.text{
	width: 100%;
	margin-top: 120px;
	text-transform: uppercase;
	text-align: center;
	cursor: default;
}

.text .games{	
	font-family: 'gaming' , sans-serif!important;
	color: #fff!important;
	font-size: 50px;
	text-align: center;
	font-weight: bold;
}

.header-extradiv{
	color: #000!important;
	cursor: default;
	width: 100%;
	height: auto;
	margin: 100px 0;
	text-align: center;
}

.extra-div{
	border: medium none;
	padding: 50px!important;
	border-radius: 3px;
	transition: 0.3s;
}

 .extra-div .eye, .servicediv .eye{
 	color: #000;
	font-size: 1.0rem;
	margin: 20px 0 15px 0;
	font-weight: bold;
	line-height: 1.1;
	word-spacing: 4px;
}

.watch{
	color: #000;
}

.extra-div:hover{
	box-shadow: 0 0 14px 0 #000!important;
	transform: translateY(-20px);
}

.serviceoffers{
	background: #f7f7f9;
	padding: 50px 0;
	margin-bottom: 50px;
	cursor: default;
	font-family: 'Poppins' , sans-serif;
}

.service{
	color: #000;
}

.hack{
	color: #000!important;
	font-size: 27px;
	font-weight: 500;
}

.headings{
	margin-bottom: 50px;
}


.headings .service{
	font-size: 1.5rem;
	font-weight: 600;
	text-transform: uppercase;
}

i{
	color: #2fccd0;
}

.names .hack{
	color: #2e2e2e;
	font-size: 0.9rem;
	text-transform: uppercase;
	font-weight: bold;
}

.service-icons{
	display: flex;
	align-items: center;
	justify-content: center;
}

.progress{
	height: 0.6rem!important;
	margin-bottom: 25px!important;
}

.project-work{
	margin: 100px 0;
}

.headings p{
	color: #000;
}

.cms{
	color: #000!important;
}

.container .count{
	font-weight: 400;
	color: #000;
}

.pricing{
	cursor: default;
	width: 100%;
	height: 100vh;
	padding: 50px;
	position: relative;
}

.pricing:before{
	content: "";
	position: absolute;
	top: 0%;
	bottom: 0%;
	right: 0%;
	left: 0%;
	z-index: -1;
	background: linear-gradient(160deg, #16c9fc 55%, #fff 0%);
}

.headings .service{
	font-family: 'Poppins' , sans-serif;
	font-weight: 600;
}

.game{
	font-size: 30px;
	line-height: 1;
	color: #606060;
}

.card{
	cursor: default;
	transition: 0.4s ease;
}

.card-header{
	font-size: 1.6rem;
	font-weight: bold;
	background-color: #fff!important;
	padding: 25px 0!important;
}

.card-body{
	padding: 30px 0px!important;
	list-style: none;
}

.li{
	margin: 10px 0;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.6;
	color: #000!important;
}

.card-footer{
	background-color: #fff!important;
	padding: 30px 0px!important;
}

.card-footer a{
	cursor: pointer!important;
	text-decoration: none;
	border: 1px solid #50d1c0;
	border-radius: 100px;
	margin: 0 5px;
	padding: 12px 35px;
	outline: none;
	color: #50d1c0;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.4;
	text-align: center;
}

.card-footer a:hover{
	color: #fff!important;
	text-decoration: none;
	background-color: #50d1c0!important;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, .3);
}

.card:hover .card-footer a{
	color: #fff;
	font-weight: bold;
	text-decoration: none;
	background-color: #50d1c0;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, .3);
}

.card:hover{
	transform: translateY(-20px);
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, .3);
}

.card:hover .card-header, .card:hover .game{
	color: #50d1c0;
}

.card-second{
	transform: translateY(-20px);
}

.headings .service{
	cursor: default;
}

.headings p{
	cursor: default;
}

.topgames{
	width: 100%;
	height: 100vh;
	padding: 80px 0;
}

a .button{
	text-decoration: none;
	list-style-type: none;
	cursor: pointer!important;
	text-decoration: none;
	border: 1px solid #50d1c0;
	border-radius: 100px;
	margin: 0 5px;
	padding: 12px 35px;
	outline: none;
	color: #50d1c0;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.4;
	text-align: center;
}

a .button:hover{
	color: #fff;
	font-weight: bold;
	text-decoration: none;
	background-color: #50d1c0;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, .3);
}

.box-shadow{
	cursor: default;
	text-align: center;
	border-radius: 100px 0 100px 0;
	border: 1px solid rgba(0, 0, 0, .2);
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .3);
	transition: 0.3s ease;
}

.box-shadow h1{
	font-size: 18px;
	font-weight: 700;
	margin-bottom: 10px;
	color: #000;
}

.box-shadow h2{
	font-size: 13px;
	font-weight: 400;
	color: #000;
	margin-bottom: 20px;
}

.box-shadow:hover{
	background-color: #50d1c0!important;
	border-radius: 2px;
}

.box-shadow p{
	color: #000;
}

.indicators{
	position: absolute;
	right: 0;
	bottom: -60px!important;
}

.indicators li{
	background-color: #50d1c0!important;
}

.box-shadow a img{
	width: 100px;
	height: 100px;
	border-radius: 100%;
	margin-top: 20px;
}

.box-shadow a:after{
	content: "\f10d";
	font-family: FontAwesome;
	width: 40px;
	height: 40px;
	background: linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
	color: #fff;
	position: absolute;
	top: 110%;
	left: 50%;
	border-radius: 50%;
	display: flex;
	justify-content: center;
	align-items: center;
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

.gameplay{
	margin-top: 25px;
	margin-bottom: 25px;
	text-align: center;
	color: #000;
	font-size: 1.4rem;
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

.contactus{
	width: 100%;
	height: 100vh;
	padding: 80px 0;
	position: relative;
}

.contactus:before{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	background: linear-gradient(330deg, #16c9f6 55%, #fff 0%);
	z-index: -1;
	bottom: 0;
	right: 0;
}

.form-button .button{
	cursor: pointer!important;
	text-decoration: none;
	border: 1px solid #50d1c0!important;
	border-radius: 100px;
	margin: 0 5px;
	padding: 12px 35px;
	outline: none;
	color: #50d1c0!important;
	font-size: 1rem;
	font-weight: 300;
	line-height: 1.4;
	text-align: center;
	background: transparent!important;
}

.form-control{
	resize: none;
}

.form-button .button:hover{
	color: #50d1c0!important;
}

form:hover .form-button button{
	background-color: #fff!important;
	color: #50d1c0!important;
	font-weight: bold;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, .3)!important;
}

::placeholder{
	font-size: 0.8rem;

}

.shadow{
	cursor: default;
	text-align: center;
	border: 1px solid rgba(0, 0, 0, .2);
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .3);
	border-radius: 2px;
	transition: 0.3s ease;
}

.shadow h1{
	font-size: 18px;
	font-weight: 700;
	margin-bottom: 10px;
	color: #000;
}

.shadow h2{
	font-size: 13px;
	font-weight: 400;
	color: #000;
	margin-bottom: 20px;
}

.shadow:hover{
	background-color: #ff5722!important;
	border-radius: 100px 0 100px 0;
}

.shadow p{
	color: #000;
}

.shadow a img{
	width: 100px;
	height: 100px;
	border-radius: 100%;
	margin-top: 20px;
}

.shadow a:after{
	content: "\f10d";
	font-family: FontAwesome;
	width: 40px;
	height: 40px;
	background: linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
	color: #fff;
	position: absolute;
	top: 110%;
	left: 50%;
	border-radius: 50%;
	display: flex;
	justify-content: center;
	align-items: center;
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

#mybutton{
	display: none;
	position: fixed;
	bottom: 20px;
	right: 40px;
	z-index: 999999;
	border: none;
	color: #fff!important;
	background-color: #00abff!important;
	padding: 10px;
	border-radius: 10px;
	cursor: pointer;
}

#mybutton:hover{
	background-color: #606060!important;
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
		text-shadow: 3px 4px 1px #000/* !important */;
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

@media(max-width: 875px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}


	.text{
		margin-top: 20px;
	}

}

@media(min-width: 874px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}

	.pricing, .contactus, .topgames{
		height: auto;
		margin-top: 50px;
	}

	.card-second{
		transform: translateY(0px);
		margin: 30px 0;
	}

	.contactus p{
		padding: 0 50px;
	}

	.footer-div:nth-child(2){
		text-align: left!important;
	}

	.footer-div{
		margin: 30px 0;
	}

	.copyright .copy{
		margin-left: 50px!important;
	}

}

@media(max-width: 870px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}

	.pricing, .contactus, .topgames{
		height: auto;
		margin-top: 50px;
	}

	.card-second{
		transform: translateY(0px);
		margin: 30px 0;
	}

	.contactus p{
		padding: 0 50px;
	}

	.footer-div:nth-child(2){
		text-align: left!important;
	}

	.footer-div{
		margin: 30px 0;
	}

	.copyright .copy{
		margin-left: 50px!important;
	}

}

@media(max-width: 870px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}

	.pricing, .contactus, .topgames{
		height: auto;
		margin-top: 50px;
	}

	.card-second{
		transform: translateY(0px);
		margin: 30px 0;
	}

	.contactus p{
		padding: 0 50px;
	}

	.footer-div:nth-child(2){
		text-align: left!important;
	}

	.footer-div{
		margin: 30px 0;
	}

	.copyright .copy{
		margin-left: 50px!important;
	}

}

@media(max-width: 863px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}

	.text{
		margin-top: 50px;
	}

}

@media(max-width: 859px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}

	.pricing, .contactus, .topgames{
		height: auto;
		margin-top: 50px;
	}

	.card-second{
		transform: translateY(0px);
		margin: 30px 0;
	}

	.contactus p{
		padding: 0 50px;
	}

	.footer-div:nth-child(2){
		text-align: left!important;
	}

	.footer-div{
		margin: 30px 0;
	}

	.copyright .copy{
		margin-left: 50px!important;
	}

}

@media(max-width: 768px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}

	.pricing, .contactus{
		height: auto;
		margin-top: 50px;
	}

	.card-second{
		transform: translateY(0px);
		margin: 30px 0;
	}

	.topgames{
		height: auto;
		margin-top: 50px;
	}

	.contactus p{
		padding: 0 50px;
	}

	.footer-div:nth-child(2){
		text-align: left!important;
	}

	.footer-div{
		margin: 30px 0;
	}

	.copyright .copy{
		margin-left: 50px!important;
	}
}

@media(max-width: 755px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}

	.text h1, .text h3{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}


}

@media(max-width: 742px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

}

	.text{
		margin-top: 0px!important;
	}

	.text h1{
		font-size: 50px!important;
	}

	.text h3{
		font-size: 16px!important;
	}

}

@media(max-width: 600px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

	}

	.text{
		margin-top: 0px!important;
	}

	.text h1{
		font-size: 60px!important;
	}

	.text h3{
		font-size: 20px!important;
	}

}

@media(max-width: 582px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

	}

	.text{
		margin-top: 0px!important;
	}

}


@media(max-width: 411px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

	}

	.nicelogo .logo{
	height: 85px;
	width: auto;

}

@media(max-width: 360px){

	.box-shadow{
		margin-top: 10px;
	}

	.box-shadow a{
	text-decoration: none;
	list-style-type: none;

	}

	.text{
		margin-top: 0px!important;
	}

	.text h1{
		font-size: 40px!important;
	}

	.text h3{
		font-size: 15px!important;
	}

	.nicelogo .logo{
	height: 90px;
	width: auto;
}


}

</style>