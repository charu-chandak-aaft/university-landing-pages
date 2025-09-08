<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AAFT University</title>
<meta name="robots" content="noindex, nofollow" />
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/css/hero_sec_style.css" rel="stylesheet">

</head>
<body>
<div class="part1 part11" id="part1">
	<img style="position:absolute; top:0;left:0; width:100%" src="assets/img/topi.webp">
	<img style="width:100%; height:85vh; margin:60px 0;" src="assets/img/banner/banner1-mob.jpg">
	<img style="position:absolute; bottom:0;left:0; width:100%" src="assets/img/bottomi.webp">
</div>
<section class="part2" id="main_sec">
<?php
include("inc/function.php");
/*$SchoolidNewLp="1";
$SubSchoolidNewLp="'1','0'";
$Dur="2";*/
?>
<?php include('inc/header-script.php'); ?>

<style>
#header { height: 70px;}
#header .logo img { width: 75%;}	
.pop-mod {background: #000000c4;}
.enqurie-btn
{
	/*display:block !important;*/
}
@media (min-width: 576px) {
	.rounded-nav {border-radius: 50rem !important;}
}

@media (min-width: 576px) {
	.rounded-nav .nav-link { border-radius: 50rem !important;}
}

/* With arrow tabs */
.with-arrow .nav-link.active {position: relative;}
.with-arrow .nav-link.active::after {content: ''; border-left: 6px solid transparent; border-right: 6px solid transparent; border-top: 6px solid #ff500d; position: absolute; bottom: -6px; left: 50%; transform: translateX(-50%); display: block;}
/* lined tabs */
.lined .nav-link {border: none; border-bottom: 3px solid transparent;}
.lined .nav-link:hover {border: none; border-bottom: 3px solid transparent;}
.lined .nav-link.active {background: none; color: #555; border-color: #2b90d9;}
.nav-pills .nav-link {color: #555;}
.text-uppercase {letter-spacing: 0.1em;}
/*.nav-pills .nav-link.active, .nav-pills .show > .nav-link {background:#ff500d !important;}*/
#home1 .row, #profile1 .row, #contact1 .row{/*border-bottom: solid 1px #E5E3E3;*/ margin-bottom: 20px;}
.white-sec .nav-item a{font-weight: bold;}
.placement-sec p{font-size: 18px; line-height: 1.6;}
	
.what .body-copy h1::before{content: ""; position: absolute; height: 2px; width: 40%; top: -10px; left: 0px; background-color: #333333; opacity: 0.9;}
.curriculam{padding: 50px 0;}	
.curriculam h2{font-size: 35px; font-weight: 600; letter-spacing: 0px; color: #0B2653; opacity: 1; margin-bottom: 20px;}
.curriculam .tab-content h5{font-size: 18px; font-weight: 600; letter-spacing: 0px; color: #0B2653; opacity: 1;}
.curriculam .tab-content ul{margin: 0; padding: 0;}
.curriculam .flex-sm-row{background: #FFFFFF; box-shadow: 0px 16px 32px #00000008;}
.curriculam .tab-content{background: #FFFFFF !important; margin-top: 10px; background: #FFFFFF; box-shadow: 0px 16px 32px #00000008;}
.curriculam .tab-content ul li{font-size: 15px; font-weight: 400; letter-spacing: 0px; color: #333333; opacity: 1; list-style: inside;	list-style-type: decimal;}
.curriculam .nav-item a{font-size: 14px !important; text-transform: capitalize !important;}
.nav-pills .nav-link.active{background: #FFFFFF !important; color: #333333;}
.nav-pills .nav-link.active::after{content: ''; border: 2px solid #ff500d !important; position: absolute; bottom: -1px !important; left: 50%; transform: translateX(-50%); width: 30%;}

.program-language .body-copy h1{font-size: 35px; font-weight: 600; letter-spacing: 0px; line-height: 45px; color: #0B2653; opacity: 1; margin-bottom: 20px;}
.program-language .program-logo-hold{display: flex; align-items: center;}
.program-language .program-logo-hold .program-logo{width: 100%; padding: 50px; background: #F9F9F9; text-align: center; display: flex; height: 200px; align-items: center; margin-bottom: 25px;}
.program-language .program-logo-hold .program-logo img{width: 100%;}
.key-project-sec .body-copy h1{font-size: 35px; font-weight: 600; letter-spacing: 0px; line-height: 45px; color: #0B2653; opacity: 1; margin-bottom: 20px;}
.key-project-sec .key-project:hover {background: #062F4F; border-radius: 8px;}
.key-project-sec .key-project:hover h2{border-radius: 8px; font-size: 25px; font-weight: 600; color: #FFFFFF; margin: 20px 0;}
.key-project-sec .key-project:hover p{border-radius: 8px; font-size: 16px; font-weight: normal; color: #FFFFFF; margin: 20px 0;}
.key-project-sec .key-project:hover .bx{color: #FFFFFF; font-size: 30px;}
.key-project-sec .key-project:hover .round-bag{background: #FF500D; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center;}

.key-project-sec .key-project{background: #FFFFFF; border-radius: 8px; border:1px solid #062F4F; margin-bottom: 35px;}
.key-project-sec .key-project h2{border-radius: 8px; font-size: 25px; font-weight: 600; color: #333333; margin: 20px 0; min-height: 60px;}
.key-project-sec .key-project p{border-radius: 8px; font-size: 16px; font-weight: normal; color: #666666; margin: 20px 0; min-height: 80px;}
.key-project-sec .key-project .bx{color: #FF500D; font-size: 30px;}
.key-project-sec .key-project .round-bag{background: #FF815A; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center;}

.project-sec .body-copy h1{font-size: 35px;  font-weight: 600; letter-spacing: 0px; line-height: 45px; color: #0B2653; opacity: 1; margin-bottom: 20px;}
.project-sec .pro-image {position: relative;}
.project-sec .pro-image img{filter: brightness(50%);}

/*.project-sec .pro-image img::after {
position: absolute;
content:"";
height:100%;
width:100%;
top:0;
left:0;
background: linear-gradient(to bottom, rgba(255,0,0,0) 0%,rgba(255,0,0,0.65) 100%);
}*/
.project-sec .pro-image h2{position: absolute; bottom: 30px; color: #FFFFFF; left: 50px; }

.course-sec{background: #f5f5f5;}
.course-sec .batch-box{background: #062F4F; padding: 40px;}
.course-sec .batch-box h2{font-size: 37px; line-height: 54px; font-weight: 400; color: #FFFFFF;}
.course-sec .batch-box h3{font-size: 18px; line-height: 54px; font-weight: 200; color: #FFFFFF;}
.course-sec .batch-box .duration{display: flex; justify-content: space-between;}
.course-sec .batch-box .duration .duration-cat{font-size: 14px; font-weight: 600; color: #062F4F; background: #FFFFFF; padding: 20px; text-align: center; width: 100%; margin: 15px 0;}

.course_video {padding: 40px;}
.course_video img{border-radius: 20px; margin-top:40px;}
.course_video .hold22{ background-image: url(assets/img/gbg.png); background-repeat: no-repeat; background-position: right top;}
.course_video .holder11{display: flex; align-items: center;}
.course_video h2{margin-bottom: 90px; color:#123B81; font-size: 35px;}
	
.innovative-sec{background: url("assets/img/datasc-new/innov-bg.webp") !important; position: relative; padding: 30px 0;}
.innovative-sec .body-copy {text-align: center;}
.innovative-sec .body-copy h2{color: #FFFFFF; font-size: 48px; font-weight: 600; line-height: 120px;}
.innovative-sec::after{content: ''; height: 100%; background: #FFFFFF; position: absolute; top: 50%; width: 100%;}
.innovative-sec .card-img-wrap{padding: 15px}
	
.place-sec .body-copy {text-align: center;}
.placement-grid .circle { border-radius: 10%!important;}
.placement-grid .circle img {border-radius: 10%!important;}
.place-sec .body-copy h2{color: #002249; font-size: 48px; font-weight: 600; line-height: 5rem}
.place-sec .body-copy p{color: #4D4D4D; font-size: 16px;}
.place-box{position: relative; margin-bottom: 50px;}
.place-box img{border: 15px solid #FFFFFF; box-shadow: 0px 8px 16px #84BEFF1A;}
.place-img-content{position: absolute; bottom: -20px; background: #FFFFFF; box-shadow: 0px 8px 16px #84BEFF1A; right: 0; padding: 20px; width: 90%;}
.place-img-content h5{font-size: 20px; font-weight: 700; color: #002249;}
.place-img-content span{font-size: 16px; font-weight: 400; color: #002249;}

.faculty-sec .body-copy {text-align: left; margin-bottom: 50px;}
.faculty-flex{display: flex; align-items: center;}
.faculty-sec .body-copy h2{color: #002249; font-size: 48px; font-weight: 600; line-height: 3rem;}
.faculty-sec .body-copy p{color: #4D4D4D; font-size: 18px; line-height: 30px;}
.faculty-box{position: relative; background: #002249; margin-bottom: 35px;}
.faculty-box img{box-shadow: none; filter: opacity(50%);}
.faculty-img-content{position: absolute; bottom: 0px; background: transparent; right: 0; padding: 20px; width: 90%;}
.faculty-img-content h5{font-size: 20px; font-weight: 700; color: #FFFFFF;}
.faculty-img-content span{font-size: 16px; font-weight: 400; color: #FFFFFF;}

.president-sec {padding: 50px 0;}
.president-sec h2{font-size: 40px; line-height: 70px; font-weight: 600; color:#002249; }
.president-sec h3{font-size: 34px; line-height: 72px; font-weight: 600; color:#333333; }
.president-sec h4{font-size: 24px; line-height: 50px; font-weight: normal; color:#848484; position: relative;}
.president-sec h4::after{content: ''; background: #FF500D; width: 50%; height: 3px; position: absolute; left: 0; bottom: -5px; opacity: 1;}
.president-sec p{font-size: 18px; line-height: 30px; font-weight: normal; color:#4d4d4d; margin-top: 50px; }

.faq-sec .body-copy {text-align: center;}
.faq-sec .body-copy h2{color: #002249; font-size: 48px; font-weight: 600; line-height: 5rem;}
.faq-sec .body-copy p{color: #4D4D4D; font-size: 18px; line-height: 30px;}
#accordion .card{margin-bottom: 20px; background: #EEF3F9; border: none; padding: 15px 25px;}
#accordion .card-header {background: #EEF3F9; padding: 0;}
#accordion .card-body {padding: 20px 0; font-size: 16px; color: #062F4F; font-weight: 400;}	
#accordion .card-header a{font-size: 18px; color: #062F4F; font-weight: 600; text-decoration: none;}

.footer-sec{background: #191830; padding: 50px 0;}
.footer-sec h3{color: #d3d3d3; font-weight: 400; font-size: 16px; line-height: 40px;}
/*.footer-sec .address{padding: 40px; border: 8px solid #3b3a4f;}*/
.footer-sec .address h2{color: #d3d3d3; font-weight: 400; font-size: 26px; letter-spacing: -1.65px;}
.footer-sec .address h4{color: #d3d3d3; font-weight: 100; font-size: 16px; line-height: 25px;}
	
/*.register-form-home-wrapper {top: -45rem; position: absolute !important; z-index: 0 !important;}*/

.top-roles{background: #EEF3F9; padding:50px 0;}
.top-roles .body-copy h2{color: #8A8A8A; font-size: 32px; font-weight: 100; letter-spacing: -1.2px; font-family: 'gothambook', sans-serif !important;}
.top-roles .body-copy h3{color: #222222; font-size: 35px; font-weight: 700; letter-spacing: -1.5px;}
.top-roles .body-copy h4{color: #8A8A8A; font-size: 18px; font-weight: 100; line-height: 28px;}
.top-roles .body-copy p{color: #4D4D4D; font-size: 16px; font-weight: 100;}
.top-roles .role-box{background: #FFFFFF; padding: 20px; margin-bottom: 20px;}
.top-roles .role-box h2{font-size: 20px; color: #222222; font-weight: 400;}
.top-roles .role-box h3{font-size: 16px; color: #062F4F; font-weight: 200;}
.top-roles .role-box p{font-size: 16px; color: #4D4D4D; font-weight: 200; margin-top: 20px;}
.top-roles .role-box .row{align-content: center; align-items: center;}
.top-roles .swiper-wrapper{height: auto !important;}
.swiper-container02{overflow: hidden;}
.students .role-box p{color:#000;}
.modal-dialog {top:10vh; max-width: 450px!important;} 

.enqurie-btn {
    background: #ff500d;
    font-size: 17px;
    text-align: center;
    padding: 10px 12px;
    border-radius: 4px;
    font-weight: bold;
    text-decoration: none;
}

/*.top-roles .swiper-container{padding-bottom: 110px;}*/
.register-form-home-wrapper {
	width: 400px !important;
    top: 125px!important;
    position: fixed !important;
    z-index: 999 !important;
}

@media screen and (max-width:480px){
	.register-form-home-wrapper {position: inherit !important; width: 100%!important;margin-top: 20px;}
	.curriculam h2{margin-top: 20px; font-size: 25px;}
	.nav-pills .nav-link.active{margin-bottom: 10px;}
	.program-language .body-copy h1{font-size: 25px; line-height: 35px;}
	.key-project-sec .body-copy h1{font-size: 25px; line-height: 35px;}
	.project-sec .body-copy h1{font-size: 25px; line-height: 35px;}
	.place-sec .body-copy h2{font-size: 25px; line-height: 35px;}
	.faculty-sec .body-copy h2{font-size: 25px; line-height: 35px;}
	.president-sec h2{font-size: 25px; line-height: 35px; margin-top: 20px;}
	.president-sec h3{font-size: 22px; line-height: 32px;}
	.president-sec h4{font-size: 20px; line-height: 30px;}
	.faq-sec .body-copy h2{font-size: 25px; line-height: 35px;}
	#accordion .card-header a{font-size: 15px;}
	#accordion .card-body{font-size: 15px;}
	.faq-sec .body-copy p{font-size: 16px;}
	.footer-sec .address h2{font-size: 30px; line-height: 40px;}
	.footer-sec .address {margin-bottom: 50px;}
	.white-sec{padding: 0 0 30px 0;}
	.white-sec-2{padding: 0 0 30px 0;}
	.footer-sec{padding-top: 30px;}
	.footer-sec{padding-bottom: 10px;}
	.faq-sec{padding: 30px 0;}
	.president-sec{padding: 30px 0;}
	.faculty-sec{padding: 30px 0;}
	.place-sec{padding: 30px 0 10px 0;}
	.body-copy h1{margin-top: 40px;}
	.key-project-sec{padding: 0;}
	.program-language{padding: 0;}
	.top-roles .role-box .col-sm-3{width: 20%;}
	.top-roles .role-box .col-sm-9{width: 75%;}
	.top-roles .body-copy h3{font-size: 25px; line-height: 35px;}
	.innovative-sec .body-copy h2{font-size: 25px; line-height: 35px; margin: 25px 0;}
	.innovative-sec{padding: 20px 0;}
	.students {min-height: 100% !important; height: 115vh !important;}
	.students .role-box {
    margin: 10px !important;}	
	.students .role-box p {
    font-size: 14px!important;}
	.iiimg{margin-bottom: 20px;}
	.program-language {background-image: none!important; background-color: #000000;}
	.curriculam .ppp1{bottom: 15px!important ;}
	.pro-image h2{font-size: 18px;}
	.hero_sec_cinema_new .align-items-center{margin-top: 200px;}
	.course_video h2{padding-top: 30px; margin-bottom: 20px;}
	.course_video {padding:0px;}
}
@media screen and (max-width:1500px)and (min-width:768px){
	.register-form-home-wrapper {top: -40rem !important;}
	.students .swiper-button-prev, .students .swiper-button-next {bottom:60px;}
	.students .role-box .row{zoom: .7;}
	.register-form-home-wrapper {
    top: 125px!important;
    position: fixed !important;
    z-index: 999 !important;
}
	
}
@media screen and (max-width:2200px) and (min-width:1501px){
	.register-form-home-wrapper {top: 125px !important;}
	.students .swiper-button-prev, .students .swiper-button-next {bottom:50px;}
	.register-form-home-wrapper {
    top: 125px!important;
    position: fixed !important;
    z-index: 999 !important;
}
}
@media screen and (max-width:6000px) and (min-width:2201px){
	.register-form-home-wrapper {top: -50rem !important;}
	.register-form-home-wrapper {
    top: 125px!important;
    position: fixed !important;
    z-index: 999 !important;
}
}

@media (max-width: 640px) and (min-width: 100px)
{
.hero_sec_datasciencenew {
    background-size: cover;
    background-position: bottom;
	background-repeat: no-repeat;
	}
	.hero_sec_content{margin-top:200px;}
.course-orientation .nav-item {
    width: 30%!important;
}

	}

</style>
<!--  navigation css --->
<style>
.navbar input[type="checkbox"],
.navbar .hamburger-lines{display: none;}
.navbar .container{width: 100%; margin: auto;}
.navbar{position: fixed; top:0;	left:0;	right: 0; width: 100%; height:72px; background: #fff; color: #000; opacity: 0.98; z-index: 100;box-shadow: 0 4px 8px 0 rgb(0 0 0 / 5%), 0 6px 10px 0 rgb(0 0 0 / 5%);}
.navbar-container{display: flex; justify-content: space-between; height: 65px; align-items: center;}
.menu-items{order: 2; display: flex;}
.logo{order: 1; font-size: 2.3rem;}
.menu-items li{list-style: none; /*margin-left: 1.5rem;*/ font-size: 1.3rem;}
.navbar a{color: #000; text-decoration: none; font-weight: 600; transition: color 0.3s ease-in-out;}
.navbar a:hover{color: #000;}
.navbar a, .navbar a:focus {padding: 10px 8px 10px 8px !important;}	
.lplogo{width: 155px; padding: 10px 0;}
.hero_sec_home_lp{margin-top:70px;}
@media (max-width: 768px){
	.navbar a{color: #fff;}
	.navbar a:hover{color: #fff;}
	.navbar a, .navbar a:focus {font-size: 15px;}
	.navbar .container{max-width: 100%; width: 100%;}
	.navbar{opacity: 0.95;}
	.lplogo{width: 155px; padding: 10px 0;}
	.navbar-container input[type="checkbox"],
	.navbar-container .hamburger-lines{display: block;}
	.navbar-container{display: block; position: relative; height: 60px;}
	.navbar-container input[type="checkbox"]{position: absolute; display: block; height: 32px; width: 30px; top: 20px; right: 10px; z-index: 5; opacity: 0; cursor: pointer;}
	.navbar-container .hamburger-lines{display: block; height: 28px; width: 35px; position: absolute; top: 20px; right: 10px; z-index: 2;
	display: flex; flex-direction: column; justify-content: space-between;}
	.navbar-container .hamburger-lines .line{display: block; height: 4px; width: 100%; border-radius: 10px; background: #000;}
	.navbar-container .hamburger-lines .line1{transform-origin: 0% 0%; transition: transform 0.3s ease-in-out;}
	.navbar-container .hamburger-lines .line2{transition: transform 0.2s ease-in-out;}
	.navbar-container .hamburger-lines .line3{transform-origin: 0% 100%; transition: transform 0.3s ease-in-out;}
	.navbar .menu-items{padding-top: 30px; background: #000; height: 100vh; width: 120%; max-width: 120%; transform: translate(-150%);        display: flex; flex-direction: column; margin-left: -40px; padding-left: 40px; margin-top: -3px; margin-right: -15px; transition: transform 0.5s ease-in-out;  /*box-shadow:  5px 0px 10px 0px #aaa;*/  /*overflow: scroll;*/ }
	.navbar .menu-items li{margin-bottom: 1rem; font-size: 1.1rem; font-weight: 500; border-bottom: 1px solid #4a4a4a;}
	.logo{position: absolute; top: 10px; right: 15px; font-size: 2.5rem;}
	.navbar-container input[type="checkbox"]:checked ~ .menu-items{transform: translateX(0);}
	.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{transform: rotate(45deg);}
	.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{transform: scaleY(0);}
	.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{transform: rotate(-45deg);}
}

@media (max-width: 500px){
    .navbar-container input[type="checkbox"]:checked ~ .logo{display: none;}
}

</style>
<!--  navigation css --->	
<!--  navigation --->
<nav class="navbar">
	<div class="navbar-container container">
		
		<input type="checkbox" name="" id="checkbox">
		<div class="hamburger-lines">
			<span class="line line1"></span>
			<span class="line line2"></span>
			<span class="line line3"></span>
		</div>
		<ul class="menu-items" id="menu003">
			
			<li><a href="#enquire" class="d-block d-sm-none" onClick="menuHide()">Enquire Now</a></li>
			<li><a href="#about" onClick="menuHide()">About Us</a></li>
			<li><a href="#recognitions" onClick="menuHide()">Recognitions</a></li>
			<li><a href="#recruiters" onClick="menuHide()">Recruiters</a></li>
			<li><a href="#alumni" onClick="menuHide()">Our Alumni</a></li>
			<li><a href="#chancellor" onClick="menuHide()">Chancellor's Desk</a></li>
			<li><a href="#campus" onClick="menuHide()">Campus</a></li>
		</ul>
		<img src="assets/img/univ-logo.webp" title="AAFT | School of cinema" alt="AAFT | School of cinema" class="img-fluid lplogo">
				
		<a class="d-none" style="background: #ed1b24; text-align: center; padding: 10px 12px; border-radius: 4px; font-weight: bold; text-decoration: none; order:3; color:#fff;">
		<i class="bx bx-phone"></i> <?php echo getDidnumber($utm_campaign); ?></a>
	</div>
</nav>	
	
<script>
function menuHide() {
	//alert('welcome');
	document.getElementById("checkbox").checked = false;
}
	
</script>
<!--  navigation--->

<section class="hero_sec_home_lp d-flex align-items-center">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-8 col-md-8">
				<div class="hero_sec_content">
					<img src="assets/img/univ-aaft.png" alt="univ" class="slid-ico" style="display:block!important; filter: contrast(1.1); margin-bottom:20px; width:70px!important; height:70px!important;">
					<h2>India's First <br> Skill-Oriented University <br> with 50+ Programs</h2>
					<h4 style="color:#ffffff;">Enroll for - <span>July 2025 Batch</span></h4><br>
					<a href="#enquire"><button style="background-color: #ed1b24; padding:10px; width:200px; text-align: center; color:#ffffff;" >Enquire Now</button></a><br>&nbsp;<br>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<!-- empty div -->
			</div>
		</div>
	</div>
	<div id="enquire"></div>
</section>
<style>
	.register-form-home-lp{background-color: #F2F4F6; padding: 40px 20px;}	
	.register-form-home-lp input[type=text], .register-form-home-lp input[type=email], .register-form-home-lp input[type=tel], .register-form-home-lp select, .register-form-home-lp input[type=submit]{height: 40px; width:100%; border:none;}
	.register-form-home-lp input[type=submit]{background-color: #ed1b24; color:#fff; padding: 5px;}
	.home_form_lp{background-color:#F2F4F6;}
	.form-btn-wrap {padding: 0; margin-bottom: 10px;}
</style>
<section class="home_form_lp" style="padding-bottom: 0; padding:0 0 0 0; ">
	<div class="container">
		<div class="row reverse">
			<div class="col-sm-12">
				<?php
				$pageOption="AAFT Home LP";
				$schoolOption="University LP";
				$courseOption= '<option value="Cinema">Cinema</option><option value="Fashion">Fashion</option><option value="Interior Design">Interior Design</option><option value="Wellness">Wellness</option><option value="Hospitality">Hospitality</option><option value="Fine Arts">Fine Arts</option><option value="Law">Law</option><option value="Performing Arts">Performing Arts</option><option value="Animation">Animation</option><option value="PR & Events">PR & Events</option><option value="Doctoral Research">Doctoral Research</option><option value="Management">Management</option><option value="Digital Marketing">Digital Marketing</option><option value="Journalism & Mass Communication">Journalism & Mass Communication</option><option value="Photography">Photography</option>';				
				include('inc/form-home-lp-ho.php');
				?>	
			</div><div id="about" style="height:40px;"></div>
		</div>
		
	</div>
	
</section>
<style>
	.about_aaft{padding: 40px  20px;}
</style>	
	
<section class="about_aaft">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="about_text">
					<h2>About AAFT</h2>
					<p>AAFT has been providing education in media and arts for the past 30 years. We offer 50+ professional courses in various fields of Cinema, Journalism and Mass Communication, Performing Arts, Animation, Hospitality and Tourism, Still Photography, Advertising, PR and Events and Fashion Design.</p>
				</div>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-6">
				<div class="about_info">
					<div class="row">
						<div class="col-sm-6">
							<h2>10<sup>th</sup></h2>
							<p>IN WORLD RANKING</p>
						</div>
						<div class="col-sm-6">
							<h2>30000+</h2>
							<p>ALUMNI NETWORK</p>
						</div>
						<div class="col-sm-6">
							<h2>500+</h2>
							<p>AWARDS & ACCOLADES</p>
						</div>
						<div class="col-sm-6">
							<h2>30+</h2>
							<p>YEARS IN EDUCATION</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.admission_open{padding: 40px  20px; background-color: #232323; text-align: center; color:#fff;}
	.admission_open .admn_text{display: flex; justify-content: center;}
	.admission_open .admn_dt{color:#ED3237; margin-bottom: 40px;}
	.admission_open .txt_box{text-align: left; margin-left: 20px;}
	.admission_open .degree{font-size: 14px; color:#9C9B9B; line-height: 0px;}
	@media (max-width: 500px){
		.admission_open .admn_text { display: flex; justify-content: left; margin-bottom: 20px;}
	}
	
</style>	
	
<section class="admission_open">
	<div class="container">
		<h2>Admission Open</h2>
		<p class="admn_dt">July 2025 Batch</p>
		<div class="row">
			<div class="col-sm-4">
				<div class="admn_text">
					<div class="img_box">
						<img src="assets/img/home-v1/icon1.png" alt="">
					</div>
					<div class="txt_box">
						<p>Masters Degrees (2 Yr)</p>
						<p class="degree">Getting Masters Degrees</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="admn_text">
					<div class="img_box">
						<img src="assets/img/home-v1/icon1.png" alt="">
					</div>
					<div class="txt_box">
						<p>Graduation Degrees (3/4 Yr)</p>
						<p class="degree">Getting Degrees</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="admn_text">
					<div class="img_box">
						<img src="assets/img/home-v1/icon1.png" alt="">
					</div>
					<div class="txt_box">
						<p>Diploma Courses (1 Yr)</p>
						<p class="degree">Getting Diploma</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>	


<style>
	.schools{background-color: #ED3237; padding: 40px 40px 0 40px; color:#fff; margin-top: 155px;}
	.schools .scl {position: relative;}
	.schools .g_img {position: absolute; bottom: 0px;}
	.schools .g_img img{width: 350px;}
	.schools h2{margin-bottom: 40px;}
	.schools button {background-color: #000; color:#fff; width: 150px; padding: 2px; text-align: center; margin-bottom: 40px;}
	@media screen and (max-width:480px){
		.schools{margin-top:0px;}
	}
	
</style>	
	
<section class="schools">
	<div class="container scl">
		<div class="row">
			<div class="col-sm-5">
				
			</div>
			<div class="col-sm-7">
				<h2>Fourteen Creative Streams to Pursue Your Passion</h2>
				<p>Animation | Cinema | Photography | Fashion Design | Interior Design |  Health & Wellness | Hospitality | BBA | MBA | Fine Arts | Performing Arts | Journalism & Mass Communication | PR & Event Management | PhD</p>
				<a href="#enquire"><button>Enquire now</button></a>
			</div>
		</div>
		<div class="g_img d-none d-sm-block">
			<img src="assets/img/home-v1/girl1.png" alt="">
		</div>
	</div>
	<div id="chancellor"></div>
</section>
	
<style>
	.chansellor {padding: 40px  20px;}
	.chansellor .abt_ch h2{ padding: 10px; background-color: #ED3237; color:#fff; font-size: 24px;}
	.chansellor .abt_ch{text-align: center;}
	.chansellor .nm{font-size: 24px; margin-top: 40px;}
	.chansellor .chn{display: flex; align-items: center;}
</style>	
	
<section class="chansellor">
	<div class="container">
		<div class="row chn">
			<div class="col-sm-7 order-sm-2">
				<img src="assets/img/home-v1/sandeep-marwah.webp" alt="" width="100%">
			</div>
			<div class="col-sm-5 order-sm-1">
				<div class="abt_ch">
					<h2>From the Chancellor's Desk</h2>
					<p class="nm">Sandeep Marwah</p>
					<p>Persistent and systematic efforts play an indispensable part in human progress. In this modern era, media has the power to control human mind, ideas and values. Media professionals has a crucial role in adequately inform, educate and entertain the masses. Therefore, we continuously strive to act as a catalyst in the progression of human self-esteem and cultural inheritance through research, teaching, and resources to develop skills essential to the film, media and arts industry.</p>
					<p>FOUNDER & PRESIDENT</p>
				</div>
			</div>
			
		</div>
	</div>
<div id="recognitions"></div>
</section>
	
	
<style>
	.recognition{padding: 40px 20px; background-color: #fff1f1; background-image: url("assets/img/home-v1/madel.webp"); background-repeat: no-repeat; background-position: right top; background-size: 325px;}
	.recognition .award_box{display: flex; align-items: flex-start; margin-bottom: 20px;}
	.recognition .awd_img img{width:80px;}
	.recognition h2{margin-bottom: 40px;}
	.recognition .awd_txt{margin-left: 20px;}
	.recognition .ttl1{font-weight: 600; line-height: 5px;}
	@media screen and (max-width:480px){
		.recognition{background-image:none;}
	}

</style>	
	
<section class="recognition">
	<div class="container">
		<h2>RECOGNITIONS & APPROVALS</h2>
		<div class="row">
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-6">
						<div class="award_box">
							<div class="awd_img">
								<img src="assets/img/home-v1/recog1.png" alt="">
							</div>
							<div class="awd_txt">
								<p class="ttl1">UGC Approved</p>
								<p>AAFT University is approved by University Grants Commission (UGC) and is competent to award degrees as specified by UGC under section 22 of UGC Act, 1956.</p>
							</div>
						</div>				
					</div>
					<div class="col-sm-6">
						<div class="award_box">
							<div class="awd_img">
								<img src="assets/img/home-v1/recog2.png" alt="">
							</div>
							<div class="awd_txt">
								<p class="ttl1">Gazette Notification</p>
								<p>With inspiring educational pedagogy and state-of-the-art infrastructure, we give students an opportunity few institutes offer.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="award_box">
							<div class="awd_img">
								<img src="assets/img/home-v1/cg.png" alt="">
							</div>
							<div class="awd_txt">
								<p class="ttl1">Chhattisgarh State</p>
								<p>An Act to further amend the Chhattisgarh Private Universities (Establishment and</p>
							</div>
						</div>				
					</div>
					<div class="col-sm-6">
						<div class="award_box">
							<div class="awd_img">
								<img src="assets/img/home-v1/mhrd.png" alt="">.
							</div>
							<div class="awd_txt">
								<p class="ttl1">MHRD</p>
								<p>The Ministry of Human Resource Development, formerly Ministry of Education.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>
	<div id="recruiters"></div>
</section>	

	
<style>	
	.recruiters{padding: 40px 20px; text-align: center;}
	.recruiters h2{margin-bottom: 30px;}
</style>	
	
<section class="recruiters">
	<div class="container">
		<h2>Our Top Recruiters</h2>
		<p>AAFT is dedicated to working toward facilitating a strong foundation for the students to embark on their professional journey. We feel honored and privileged to be associated with the leading companies across all industries.</p>
		<div class="img_bx">
			<img src="assets/img/home-v1/zara.jpg" alt="">
			<img src="assets/img/home-v1/colors.jpg" alt="">
			<img src="assets/img/home-v1/dharma.jpg" alt="">
			<img src="assets/img/home-v1/zee.jpg" alt="">
			<img src="assets/img/home-v1/aajtak.jpg" alt="">
			<img src="assets/img/home-v1/sony.jpg" alt="">
			<img src="assets/img/home-v1/star.jpg" alt="">
			<img src="assets/img/home-v1/dlf.jpg" alt="">
		</div>
	</div>
</section>
	

<style>	
	.apply_now{padding: 40px 20px; background-image: url("assets/img/home-v1/appl_bg.jpg"); background-repeat: no-repeat; color:#fff; background-size: cover;}
	.apply_now button{color:#ED3237; background-color: #fff; width: 200px; text-align: center; padding: 5px; border: none; border-radius: 10px;}
	.apply_now .cntr{text-align: center;}
	.apply_now .aply{display: flex; align-items: center;}
	.apply_now .pt1{font-size: 22px;}
	.apply_now .pt2{font-size: 16px; line-height: 10px}
</style>	

<?php
// Get the current date
$date = new DateTime();
// Find the next Saturday
$date->modify('next Saturday');
// Add 7 days
$date->add(new DateInterval('P7D'));
// Output the date of the next week's Saturday
$dt= $date->format('d');
$mn= $date->format('m');
$yr= $date->format('y');

$dateObj   = DateTime::createFromFormat('!m', $mn);
$monthName = $dateObj->format('F');
		
$lastdt=$dt ." ".$monthName." 20".$yr;	
?>
	
<section class="apply_now">
	<div class="container">
		<div class="row aply">
			<div class="col-sm-6">
				<p class="pt1">Admission Closing Soon</p>
				<p class="pt2">Last Date: <?php echo $lastdt; ?></p>
			</div>
			<div class="col-sm-6 cntr">
				<a href="#enquire"><button>Enquire Now</button></a>
			</div>
		</div>
	</div>
<div id="alumni"></div>
</section>	
	
<style>	
	.alumni{padding: 40px 20px; text-align: center;}
	.alumni .almn{position: relative;}
	.alumni .txtg{position: absolute; bottom: 0px; left: 15px; background-color: #000; color:#fff; opacity: .8; width: 90%; padding: 8px;}
	.alumni img{width: 100%;}
	.alumni .pt22{line-height: 5px;}
	.alumni h2{margin-bottom: 30px;}
	.alumni .almn{margin-bottom:20px;}
</style>	
	
<section class="alumni">
	<div class="container">
		<h2>Our Alumni's Impact</h2>
		<p class="mb-5">AAFT boasts of a network of 20000+ global alumni. Our alumni work at well-known news and media agencies, MNCs, film production houses, music companies, fashion designing companies, PR firms, event management companies, etc.</p>
		<div class="row">
			<div class="col-sm-3 almn">
				<img src="assets/img/home-v1/luv.webp" alt="">
				<div class="txtg">
					<p class="pt11">Luv Ranjan</p>
					<p class="pt22">Film director, writer and producer</p>
				</div>
			</div>
			<div class="col-sm-3 almn">
				<img src="assets/img/home-v1/aarti.webp" alt="">
				<div class="txtg">
					<p class="pt11">Aarti Khetarpal</p>
					<p class="pt22">Actress and Presenter</p>
				</div>
			</div>
			<div class="col-sm-3 almn">
				<img src="assets/img/home-v1/ajay.webp" alt="">
				<div class="txtg">
					<p class="pt11">Ajay Behl</p>
					<p class="pt22">Scriptwriter</p>
				</div>
			</div>
			<div class="col-sm-3 almn">
				<img src="assets/img/home-v1/hasleen.webp" alt="">
				<div class="txtg">
					<p class="pt11">Hasleen Kaur</p>
					<p class="pt22">Model & Actress</p>
				</div>
			</div>
		</div>
	</div>
</section>	
	
<style>	
	.advisory{padding: 40px 20px; text-align: center; background: transparent linear-gradient(90deg, #000000 0%, #000000 100%) 0% 0% no-repeat padding-box;}
	.advisory .almn{position: relative;}
	.advisory .txtg{position: absolute; bottom: 0px; left: 0px; background-color: rgba(237, 50, 55, 0.9); color:#fff; opacity: .8; width: 100%; padding: 8px;}
	.advisory img{width: 100%;}
	.advisory .pt22{line-height: 5px;}
	.advisory h2{margin-bottom: 30px; color:#fff;}
	.advisory .cncl{display: grid; grid-template-columns: auto auto auto auto;}
	.advisory .almn{margin-bottom:20px;}
	.advisory .grid-container {padding: 0px;}
	@media screen and (max-width:480px){
		.advisory .cncl{display: grid; grid-template-columns: auto;}
	}
</style>	
	
<section class="advisory">
	<div class="container">
		<h2>Core Advisory Council</h2>
		
		<div class="cncl grid-container">
			<div class="almn grid-item">
				<img src="assets/img/home-v1/karl.webp" alt="">
				<div class="txtg">
					<p class="pt11">Prof. Karl Bardosh</p>
					<p class="pt22">NYU Tisch School of Arts</p>
				</div>
			</div>
			<div class="almn grid-item">
				<img src="assets/img/home-v1/anil.webp" alt="">
				<div class="txtg">
					<p class="pt11">Anil Kapoor</p>
					<p class="pt22">Renowned Actor</p>
				</div>
			</div>
			<div class="almn grid-item">
				<img src="assets/img/home-v1/sonam.webp" alt="">
				<div class="txtg">
					<p class="pt11">Sonam Kapoor</p>
					<p class="pt22">Renowned Actress</p>
				</div>
			</div>
			<div class="almn grid-item">
				<img src="assets/img/home-v1/boney.webp" alt="">
				<div class="txtg">
					<p class="pt11">Boney Kapoor</p>
					<p class="pt22">Renowned Film Producer</p>
				</div>
			</div>
		</div>
	</div>
</section>	

<style>	
	.events{padding: 40px 20px; text-align: center; background-color: #ED3237; color:#fff;}
	.events .txtg{background-color: #fff; color:#000; width: 100%; padding: 8px; height: 220px;}
	.events img{width: 100%;}
	.events h2{margin-bottom: 30px;}
	.events .rjst{text-align: right; color:#f1382f;}
	.events .almn{margin-bottom:20px;}
</style>	
	
<section class="events">
	<div class="container">
		<h2>Our Events</h2>
		<p class="mb-5">Our Board of Directors are excellent leaders who curate and invite the top of the faculty of today’s times
throughout our intensive courses.</p>
		<div class="row">
			<div class="col-sm-4 almn">
				<img src="assets/img/home-v1/sunil.webp" alt="">
				<div class="txtg">
					<p class="rjst">SUNIL SHETTY</p>
					<p class="pt11">Sunil Shetty's discourse on acting</p>
					<p class="pt22">Sunil Shetty's discourse on acting emphasizes the importance of honesty, preparation, listening and responding, versatility, and collaboration in the craft of acting.</p>
				</div>
			</div>
			<div class="col-sm-4 almn">
				<img src="assets/img/home-v1/soha.webp" alt="">
				<div class="txtg">
					<p class="rjst">SOHA ALI KHAN</p>
					<p class="pt11">Soha Ali Khan's discourse on Acting</p>
					<p class="pt22">Soha Ali Khan's discourse on acting emphasizes the importance of empathy, listening, preparation, vulnerability</p>
				</div>
			</div>
			<div class="col-sm-4 almn">
				<img src="assets/img/home-v1/manjot.webp" alt="">
				<div class="txtg">
					<p class="rjst">MANJOT SINGH</p>
					<p class="pt11">Manjot Singh talks about film ind.</p>
					<p class="pt22">Manjot Singh shared his insights and thoughts on the challenges and opportunities that come with being a part of the Indian film industry</p>
				</div>
			</div>
			
		</div>
	</div>
</section>
	
<style>
	.upcomingBox{background-color: #23262D;}
	.upcomingBox h2{color: #FFFFFF;}
	.upcomingBox p{color: #FFFFFF80;}
	.upcomingBox button{background-color: #FFFFFF; padding: 7px 35px; color: #ed1b24; font-size: 14px; border: none; width:175px;}
</style>
<section class="upcoming">
	<div class="container py-5">
		<div class="row">
			<div class="col-sm-12">
				<div class="upcomingBox rounded py-3 px-5">
					<div class="row">
						<div class="col-sm-6">
							<h2>Upcoming Application Deadline</h2>
							<p>Admissions are closed once the requisite number of participants enroll for the upcoming cohort. Apply early to secure your seat.</p>
						</div>
						<div class="col-sm-2"></div>
						<div class="col-sm-4" style="display: flex; flex-direction: column; align-items: flex-end; justify-content: center;">
							<a href="#enquire"><button class="rounded mb-3">Enquire Now</button></a>
							<p>Deadline: <?php echo $lastdt; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	

	
<style>
.apply-for-admission-section {
  background-color: #F2F4F6;
}
.apply-for-admission-section .row .col-sm-5 img {
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.apply-for-admission-section .application-right h2 {
  font: bold 30px/44px GothamBook !important;
  color: #FFFFFF;
}
.apply-for-admission-section .application-right p {
  font: normal 15px/25px GothamLight !important;
  color: #FFFFFF;
}
.apply-for-admission-section .degree-list h3 {
  font: bold 24px/28px GothamBold !important;
  color: #062F4F;
}
.apply-for-admission-section .degree-list p {
  font: normal 15px/25px GothamBook !important;
  color: #696984;
}	
</style>	
	
<section class="apply-for-admission-section">
	<div class="container py-5">
		<div class="row">
			<div class="col-sm-5 p-0">
				<img src="assets/img/home-v1/admn1.webp" alt="" width="100%">
			</div>
			<div class="col-sm-7 d-flex justify-content-center flex-column application-right p-5" style="background-image: url('assets/img/home-v1/admission-bg.webp'); background-repeat: no-repeat; background-size: cover;">
				<h2 class="mb-3">Online Application</h2>
				<p class="mb-5">Students seeking admission to AAFT will have to take a mandatory AAFT Global Entrance Exam (AAFT GEE). The exam consists of an aptitude test and a personal interview (via offline or online modes) based on the aspirant's chosen discipline. Applications to AAFT’s programs can be submitted online.</p>
				<a href="#enquire" class="" style="background-color: #ed1b24; text-decoration:none; padding: 10px; width: 150px; color:#FFFFFF; text-align: center;"><span>Enquire Now</span></a>
			</div>
		</div>
		<div id="campus"></div>
	</div>
	
</section>
	

<style>	
	.campus{padding: 40px 20px;}
	.campus img{width: 100%;}
	.campus h2{margin-bottom: 30px;}
	.campus .cncl{display: grid; grid-template-columns: auto auto auto;}
	.campus .almn{margin-bottom:0px;}
	.campus .grid-container {padding:0px;}
	@media screen and (max-width:480px){
		.campus .cncl{display: grid; grid-template-columns: auto;}
	}
</style>	
	
<section class="campus">
	<div class="container">
		<h2>Our Campus</h2>
		<p>Raipur is growing as an education hub of Central India, propelling opportunities to young minds like never before. It is a fascinating city with many scenic views and numerous things to do.</p>
		
		<div class="cncl grid-container">
			<div class="almn grid-item">
				<img src="assets/img/home-v1/camp1.webp" alt="">
			</div>
			<div class="almn grid-item">
				<img src="assets/img/home-v1/camp2.webp" alt="">
			</div>
			<div class="almn grid-item">
				<img src="assets/img/home-v1/camp3.webp" alt="">
			</div>		
			<div class="almn grid-item">
				<img src="assets/img/home-v1/camp4.webp" alt="">
			</div>
			<div class="almn grid-item">
				<img src="assets/img/home-v1/camp5.webp" alt="">
			</div>
			<div class="almn grid-item">
				<img src="assets/img/home-v1/camp6.webp" alt="">
			</div>
		</div>
	</div>
</section>
	
<style>	
	.footer{padding: 40px 20px; background-color: #23262D; color:#fff;}
</style>	
	
<section class="footer">
	<div class="container">
		<p>University Campus</p>
		<h2>AAFT University, Raipur</h2>
		<p>AAFT University, Vill. Manth, Kharora, District – Raipur, Chhattisgarh- 493225</p>
		<p>© 2022 AAFT University • Powered by AAFT</p>
	</div>
</section>	

<?php include('inc/contact-details-university-ho1.php'); ?>	
<?php include('inc/form-scripts.php'); ?>
<?php include('inc/footer-script.php'); ?>

</section>	
</body>
</html>