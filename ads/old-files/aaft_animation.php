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
	<img style="width:100%; height:85vh; margin:60px 0;" src="assets/img/banner/animation-bg-mob.webp">
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

.card-img-text {
    height: 150px;
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
	.hero_sec_animation_new .align-items-center{margin-top: 200px;}
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
.hero_sec_content {   
    margin-top: 100px;
}	
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
.hero_sec_animation_new{margin-top:70px;}
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
			<li><a href="#program" onClick="menuHide()">Our Programs</a></li>
			<li><a href="#overview" onClick="menuHide()">Program Overview</a></li>
			<li><a href="#apply" onClick="menuHide()">How To Apply</a></li>
			<li><a href="#choose" onClick="menuHide()">Why Choose AAFT</a></li>
			<li><a href="#tieup" onClick="menuHide()">Placement Tie-ups</a></li>
		</ul>
		<img src="assets/img/univ-logo.webp" title="AAFT | School of animation" alt="AAFT | School of animation" class="img-fluid lplogo">
				
		<a class="d-none" style="background: #ff500d;text-align: center; padding: 10px 12px; border-radius: 4px; font-weight: bold; text-decoration: none; order:3;">
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

<section class="hero_sec_animation_new d-flex align-items-center">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-8 col-md-8">
				<div class="hero_sec_content">
					<p style="color:#ffe9e8; font-weight: 600; font-size: 25px;">Degree & Diploma Programs</p>
					<h2>Build a Career in the<br>Animation Industry</h2>
					<h4 style="color:#ffffff;">Enroll for - <span>August 2024 Batch</span></h4><br>
					<!--button style="background-color: #FF500D; padding:10px; width:200px; text-align: center; color:#ffffff;" type="button" class="btn" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">Download Brochure</button--><br>&nbsp;<br>
					<span class="tagline d-none">Application closes <span style="color:#FFFFFF">24<sup>th</sup> August 2024</span></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<!-- empty div -->
			</div>
		</div>
	</div>
	<div id="enquire"></div>
</section>
	
<section class="white-sec-2" style="padding-bottom: 0; padding:0 0 0 0; background: none;">
	<div class="container">
		<div class="row reverse">
			<div class="col-lg-8 col-md-8"></div>
			<div class="col-lg-4 col-md-4">
				<?php
				$pageOption="Animation";
				$schoolOption="School of Animation";
				$courseOption= '<option value="BSc in Animation">BSc in Animation</option><option value="MSc in Animation">MSc in Animation</option><option value="Diploma in Animation">Diploma in Animation</option>';				
				include('inc/form.php');
				?>	
			</div>
		</div>
	</div>
</section>
<style>
.duration{padding: 0 0 50px 0; margin-top: -60px;}
.duration .duration-content{background: #062F4F  0% 0% no-repeat padding-box;box-shadow: 0px 3px 30px #00000029; border-radius: 90px; color:#ffffff;height: 118px; padding: 30px;}
.duration .item1 {padding-left: 60px;}
.duration h5{font-size: 18px;}
.duration p{font-size: 14px;}
@media screen and (max-width: 600px) 
{
	.duration{margin-top: 0px; padding: 0 0 0 0;}
	.duration .duration-content{height: auto;border-radius: 20px; padding: 20px;}
	.duration .duration-content div[class*='item']{margin-bottom: 20px;}
	.duration .item1 {padding-left: 0px;}
	.duration .item5 {text-align: center;}
	.duration .duration-content{padding-top: 35px;}	
	
}
</style>
<section class="duration">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="duration-content">
					<div class="row">
						<div class="col-sm-3 col-6">
							<div class="item1"><h5>Course</h5><p>On-campus</p></div>
						</div>
						<div class="col-sm-3 col-6">
							<div class="item2"><h5>Location</h5><p>Raipur</p></div>
						</div>
						<div class="col-sm-3 col-6">
							<div class="item3"><h5>Loan Options</h5><p>Bank/EMI</p></div>
						</div>
						<div class="col-sm-3 col-6">
							<div class="item4"><h5>Placements</h5><p>100% Assistance</p></div>
						</div>
						
					</div>
					<div id="about"></div>
				</div>
			</div>
		</div>
	</div>
	
</section> 

<section class="white-sec" style="padding-top: 0;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="body-copy">
					<h1>About AAFT School of Animation</h1>
					<p>AAFT School of Animation facilitates practical and industry-relevant knowledge in the field of animation, VFX, game design/development and unreal engine. It offers the best animation degree courses with a curriculum designed and taught by industry experts. Students here get to create a strong portfolio with numerous projects and assignments they work on.</p>
				</div>

				<div class="batchbox">
					<div class="batchbox-list">
						<div class="pointer">
							<ul>
								<li>High-end Animation Labs & Chroma Studios</li>
								<li>Industry-aligned practical-oriented curriculum</li>
								<li>100% Placement Assistance</li>
								<li>International Academic Partnerships</li>
							</ul>
						</div>
					</div>
					<div class="batchbox-list">
						<div class="group88">
							<h3>Admission<br>Open</h3>
							<span class="separate-line"></span>
							<h5>August 2024 Batch</h5>
							<div class="course-list">
								<p><i class="bi bi-record2"></i> UG Degree- (3 Years)</p>
								<p><i class="bi bi-record2"></i> PG Degree - (2 Years)</p>
								<p><i class="bi bi-record2"></i> UG/PG Diploma - (1 Year)</p>
								<!--p><i class="bi bi-record2"></i> Certification - (3/6 Months)</p-->
							</div>
							<div id="program"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

<style>
	
.year {font-weight: 600; border-bottom: 2px solid #e3e3e3;}
.conew ul{list-style-image: url("assets/img/dash.png"); line-height: 30px;}
.collapsed{background-color: #646464!important;}

</style>	
<section class="course-orientation conew" style="background-color:#f2f2f2">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 order-sm-1">
				<div class="body-copy-Black">
					<h2>Our Programs</h2>
					<p>Anyone interested in the world of graphics can join our animation institute, which offers degree programs like BSc animation, gaming courses, etc. All our UG/ PG programs provide core creative and technical training for a smooth transition in building a career in the animation and multimedia industry.</p>
				</div>
				<div class="">
					<div class="accordion" id="accordionExample3">
							<div class="card">
								<div class="card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true">     
									<span class="title">Degree</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseOne3" class="collapse show" data-parent="#accordionExample3">
									<div class="card-body">
										<div class="year">2/3 year</div> <br>
										<ul>
											<li>BSc in Animation</li>
                                        	<li>MSc in Animation</li>												
										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">     
								<span class="title">Diploma/ PG Diploma</span>
								<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseTwo3" class="collapse" data-parent="#accordionExample3">
									<div class="card-body">
										<div class="year">1 Year</div> <br>
										<ul>
											<li>Diploma in Animation</li>
										</ul>
									</div>
								</div>
							</div>
						</div>		
				</div>
			</div>
		</div>
	</div>
</section>
	
<style>
	.course_highlight{background-color: #062f4f; padding:40px 0 0 0; color: #ffffff;}
	.course_highlight h2{line-height: 55px; margin-bottom: 20px;}
	.course_highlight ul{list-style-image: url("assets/img/tick.png"); line-height: 30px; font-size: 18px; margin-bottom: 30px;}
	.course_highlight .holder11{align-items: center;}
	@media screen and (max-width: 600px) {
		.course_highlight .order-sm-2{text-align: center;}
	}
</style>
<section class="course_highlight">	
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				
				<div class="row holder11">
					
					<div class="col-sm-6 order-sm-2">
						<img src="assets/img/animation-v1/course-high-ani.webp" width="80%" alt="">
					</div>
					<div class="col-sm-6 order-sm-1">
						<h2>Course Highlights</h2>
						<ul>
							<li>Curriculum as per the Latest Industry Trends</li>
							<li>Financing Options Available</li>
							<li>High-End Workstations with Latest Software</li>
							<li>Work on Live Projects with <br>
							85% practical-based curriculum</li>
							<li>Academic Alliances with globally-renowned</li>
							<li>Unity and Unreal Engine</li>
						</ul>			
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
	
<section class="course_video">	
	<div class="container">
		<div class="row">
			<div class="col-sm-8 hold22">
				
				<div class="row holder11">
					<div class="col-sm-4 order-sm-2 ">
						<h2>About <br>The Course </h2>	
						<p>Here we have overview of our course offered to help you understand better about the program.</p>
					</div>
					<div class="col-sm-8 order-sm-1">
						<video playsinline="playsinline" id="aaft-video" controls width="100%" height="400">
							<source src="https://s3.ap-south-1.amazonaws.com/aaft.com/lp-project-university/SOA-project-video.mp4" type="video/mp4">
						</video>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div id="overview"></div>
</section>	

	
<style>
.course-orientation {padding: 50px 0;}
.course-orientation .courseo-txt{font: normal normal normal 20px/30px gothambook;letter-spacing: 0px;color: #000000;}
.course-orientation .nav-link{border:none; width: 205px; height: 50px; margin-right: 10px; padding:14px; text-align: center;font: normal normal bold 20px/30px gothambook;letter-spacing: 0px;color: #ED3237; }
.course-orientation .nav-tabs .nav-item.show .nav-link,.course-orientation .nav-tabs .nav-link.active {background-color:#00000000; border:none; border-bottom: 2px solid #ff0000; font: normal normal medium 20px/30px gothambook;letter-spacing: 0px;color: #ED3237;}
.course-orientation .tab-content{margin-top: 20px;}
.course-orientation .nav-tabs { border-bottom: 0px solid #dee2e6;}
.course-orientation .card-header{background-color: #333333;color:#ffffff;margin-top: 10px!important; border-radius: 10px!important;}
.course-orientation .card-header .accicon {color: #a7a7a7;}
/* accordian arrow up/down */
.card-header:not(.collapsed) .rotate-icon { transform: rotate(180deg); }
/* accordian arrow up/down */
.card-header .accicon { float: right;  font-size: 20px; width: 1.2em;}
.course-orientation .card-body{border: 1px solid rgba(0, 0, 0, 0.2);border-radius: 10px;}
.course-orientation .card{border-radius: 0rem; border: 0px solid rgba(0, 0, 0, 0.125);}
.featured_box:hover {background: #2D2D2D;}	
@media screen and (max-width: 600px) 
{	
.course-orientation h1{font: normal normal bold 18px/40px gothambook;letter-spacing: 0px;}
.course-orientation .courseo-txt {font: normal normal normal 14px/30px gothambook;letter-spacing: 0px;}
.course-orientation .nav-link {width: 135px;font: normal normal bold 14px/30px gothambook; padding: 10px;}	
}
</style>
<script src="https://kit.fontawesome.com/a91a27e46f.js" crossorigin="anonymous"></script>	
<section class="course-orientation">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h1>Program Overview</h1>
				<p class="courseo-txt">AAFT’s animation and VFX courses are all industry-centric to provide students with comprehensive knowledge of real industry operations and functioning. The following section highlights the broad topics covered in different degree courses at AAFT School of Animation.</p>
				
				<ul class="nav nav-tabs">
					  <li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#course1" role="tab" aria-controls="home">Bachelor</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#course2" role="tab" aria-controls="profile">Master</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#course3" role="tab" aria-controls="bio">Diploma</a>
					  </li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="course1" role="tabpanel">
						
						<div class="accordion" id="accordionExample">
							<div class="card">
								<div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">     
									<span class="title">Semester 1</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseOne" class="collapse show" data-parent="#accordionExample">
									<div class="card-body">
										<ul>
											<li>Introduction to Drawing, Sketching.</li>
											<li>Perspective Study, One point 2 point & 3 Point perspective</li>
											<li>Getting the Design Process & Planning, Development</li>
											<li>Elements of Composition , Principles of Composition</li>
											<li>Creating Animation and sketch</li>
											<li>Work with composition ,elements , arrangement </li> 
											<li>Light concepts & cinematography and audio editing</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">     
								<span class="title">Semester 2</span>
								<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseTwo" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										<ul>
											<li>Learn concepts of art & illustration</li>
											<li>Create digital and matte painting with workflow.</li>
											<li>Work with vector and raster art in illustration, design & development</li>
											<li>2D animation and character design.</li>
											<li>Storyboarding ,planning </li>
											<li>Layout workflow, expression</li>
											<li>Working with sound & animation	</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
									<span class="title">Semester 3</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseThree" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										
										<ul>
											<li>Typography tools and technique</li>
											<li>Color correcting and grading, briefing anatomy</li>
											<li>Basic and advance modeling object and human anatomy</li>
											<li>Texturing and unwrapping, mapping.</li>
											<li>Lighting concepts and rendering process.</li>
											<li>Bone setup rigging process ,skinning</li>
											<li>Working with particles system ,hair and fur, cloths</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false">
									<span class="title">Semester 4</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseFour" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										<ul>
											<li>Working with muscle system</li>
											<li>Maya scene setup and projection.</li>
											<li>Work with CGI lighting & direction</li>
											<li>Global illumination with shadow.</li>
											<li>Maya vector engine workflow, process</li>
											<li>Bone setup rigging process ,skinning ik-fk</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false">
									<span class="title">Semester 5</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseFive" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										
										<ul>
											<li>Learn the concepts of motion capture.</li>
											<li>Create Inverse and forward kinematics with motion builder.</li>
											<li>Work on roto and paint in nuke.</li>
											<li>Introduction to principles of compositing in nuke</li>
											<li>Introduction to Houdini</li>
											<li>Particles and simulation in Houdini</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false">
									<span class="title">Semester 6</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseSix" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										
										<ul>
											<li>Introduction to Basic of game design.</li>
											<li>Introduction to color correction and editing.</li>
											<li>Work with blender , unity and quixel suite</li>
											<li>Introduction to market research </li>
											<li>Creating portfolio and group projects.</li>

										</ul>
									</div>
								</div>
							</div>
					</div>
					</div>
					<div class="tab-pane" id="course2" role="tabpanel">
						
						<div class="accordion" id="accordionExample2">
							<div class="card">
								<div class="card-header" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true">     
									<span class="title">Semester 1</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
									<div class="card-body">
										<ul>
											<li>Introduction to the website & SEO.</li>
											<li>Introduction to Market research in animation.</li>
											<li>Developing multimedia networks.</li>
											<li>Learning the techniques of communication techniques & theories.</li>
											<li>Learning programming with C#.</li>
											<li>Introduction to production design.</li>


										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">     
								<span class="title">Semester 2</span>
								<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseTwo2" class="collapse" data-parent="#accordionExample2">
									<div class="card-body">
										<ul>
											<li>Understanding of media law and ethics.</li>
											<li>Introduction to augmented reality & virtual reality.  </li>
											<li>Develop skills to Act for animation.</li>
											<li>Implementation of animation principles & adopting act in animation. </li>
											<li>Polishing the communication skills and navigate the communication acumen of PR skills to build communication strategy.</li>
											<li>Learn various aspects of film making</li>


										</ul>
									</div>
								</div>
							</div>
						<div class="card">
							<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false">
								<span class="title">Semester 3</span>
								<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
							</div>
							<div id="collapseThree2" class="collapse" data-parent="#accordionExample2">
								<div class="card-body">
									<ul>
										<li>Learn the art and skills for creating 3d environments.</li>
										<li>Explore the arena of 3d modelling texturing and rigging.</li>
										<li>Learn advance 3d animation as a generalist.</li>
										<li>Develop the concept of advance rotoscopy tracking & compositing. </li>


									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="false">
								<span class="title">Semester 4</span>
								<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
							</div>
							<div id="collapseFour2" class="collapse" data-parent="#accordionExample2">
								<div class="card-body">
									<ul>
										<li>Introduction to the Advance Dynamic simulation. </li>
										<li>Creating a portfolio of 3d animation vfx. </li>
										<li>Learning to create projects of augmented reality & virtual reality. </li>
										<li>Creating a solid work of at least 1 min visual for project. </li>
										<li>Know the importance of research concepts. </li>


									</ul>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="tab-pane" id="course3" role="tabpane3">
					    <div class="accordion" id="accordionExample23">
							<div class="card">
								<div class="card-header" data-toggle="collapse" data-target="#collapseOne23" aria-expanded="true">     
									<span class="title">Semester 1</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseOne23" class="collapse show" data-parent="#accordionExample23">
									<div class="card-body">
										<ul>
											<li>Introduction to basic design and construction.</li>
											<li>Creating vector illustration</li>
											<li>Getting the Basic knowledge of designing Fundamentals</li>
											<li>Creating illustrations and digitals paintings.</li>
											<li>Mixing and editing audio files</li>
											<li>Creating basic layouts for magazines and newspapers</li>
											<li>Understanding of aesthetics and designing process.</li>


										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo23" aria-expanded="false" aria-controls="collapseTwo">     
								<span class="title">Semester 2</span>
								<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseTwo23" class="collapse" data-parent="#accordionExample23">
									<div class="card-body">
										<ul>
											<li>Pre-production for shots, including camera angles, story writing and storyboarding</li>
											<li>Creating 3D environment according to VFX shot and camera handling for shoots</li>
											<li>Creating 3D assets and characters with photorealistic textures for VFX shots and creating 3D lighting according to VFX shot (to match the real setup)</li>
											<li>Industry workshops every month, which help students to understand what is currently happening in the industry</li>
											<li>Software covered: Photoshop ,illustrator,3ds max, premiere pro , after effects, nuke</li> 


										</ul>
									</div>
								</div>
							</div>
						
					</div>
					</div>
				</div>
				
				
				<!-- Key Projects -->
				<div class="idus-visit m-t-70">
					<div class="pl11">Key <span>Projects</span></div>
					<div class="clear m-TB-40"></div>
					<div class="featured_box_group">
						<div class="featured_box_list">
							<div class="featured_box">
					          <span class="dash"></span>
					          <h3>Project 1</h3>
					          <p>Creating an object, landscape & pattern drawing</p>
					        </div>
						</div>
						<div class="featured_box_list">
							<div class="featured_box">
					          <span class="dash"></span>
					          <h3>Project 2</h3>
					          <p>Scripting and storyboarding for a Short Live-Action Film</p>
					        </div>
						</div>
						<div class="featured_box_list">
							<div class="featured_box">
					          <span class="dash"></span>
					          <h3>Project 3</h3>
					          <p>Creating motion graphics for Broadcast Media</p>
					        </div>
						</div>
						<div class="featured_box_list">
							<div class="featured_box">
					          <span class="dash"></span>
					          <h3>Project 4</h3>
					          <p>Composting CGI with a Live-action scene</p>
					        </div>
						</div>
						<div class="featured_box_list">
							<div class="featured_box">
					          <span class="dash"></span>
					          <h3>Project 5</h3>
					          <p>Creating a game prototype and teaser</p>
					        </div>
						</div>
						<div class="featured_box_list">
							<div class="featured_box">
					          <span class="dash"></span>
					          <h3>Project 6</h3>
					          <p>Creating full 2D/3D game with multiple levels</p>
					        </div>
						</div>
					</div>
					<div id="apply"></div>
				</div>
				<!-- Key Projects -->
				
				<style>
					.how-it-works{background-color: #062f4f; padding: 50px 50px 50px 50px;position: relative;  margin-top: 40px; margin-bottom: 70px;} /*background-image: url("assets/img/blue.jpg"); background-repeat: no-repeat; background-size: 100% 465px;*/
					.how-it-works .hh2, .how-it-works .pp1{color:#ffffff;margin-bottom: 25px;}
					.ct-box1 {width: 470px; background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 0px 3px 30px #00000029; padding: 40px; top: 165px; right: 56px; border-radius: 20px;}
					.ct-box1 .row{align-items: flex-start;;}
					.ct-box1 .pp2{font-size: 18px; font-weight: 600; margin-bottom: 5px;}
					.ct-box1 img{width: 55px;}
					.ct-box1 .col-1{display: none;}
					@media screen and (max-width: 600px) {
						.how-it-works{padding: 30px 10px 10px 10px;margin-bottom: 0px;}
						.ct-box1{position: unset; width: 100%; padding: 15px; }
						.imhldr{text-align: center;}
						.imhldr .iiimg{width: 100%; }
						.ct-box1 img{width: 45px;}
					}
				</style>
				<div class="how-it-works">
					<div class="row">
						<div class="col-sm-5 imhldr">
							<h2 class="hh2">How to Apply at AAFT?</h2>
							<img class="iiimg" src="assets/img/animation-v1/how.webp" alt="" width="100%">
						</div>	
						<div class="col-sm-7">
							<p class="pp1 d-none">Choose class you want from all class available on here. You just register now to get 30 days free access and then pay once to get lifetime membership.</p>
							<div class="ct-box1">
								<h3>Just follow 3 easy steps</h3>
								<br>
								<div class="row">
									<div class="col-sm-1 col-1">
										<p>1</p>
									</div>
									<div class="col-sm-2 col-2">
										<img src="assets/img/animation-v1/icon1.webp" alt="">
									</div>
									<div class="col-sm-9 col-9">
										<p class="pp2">Fill up the Enquiry Form </p>
										<p>To get admission at AAFT, fill out this enquiry form and our admission counsellors will get in touch with you.</p>
									</div>
								</div>
								<hr/ class="d-block d-sm-none">
								<div class="row">
									<div class="col-sm-1 col-1">
										<p>2</p>
									</div>
									<div class="col-sm-2 col-2">
										<img src="assets/img/animation-v1/icon2.webp" alt="">
									</div>
									<div class="col-sm-9 col-9">
										<p class="pp2">Online Test & Interview</p>
										<p>Online Test & Personal Interview will then be conducted to screen your application.<br><br></p>
									</div>
								</div>
								<hr/ class="d-block d-sm-none">
								<div class="row">
									<div class="col-sm-1 col-1">
										<p>3</p>
									</div>
									<div class="col-sm-2 col-2">
										<img src="assets/img/animation-v1/icon3.webp" alt="">
									</div>
									<div class="col-sm-9 col-9">
										<p class="pp2">Offer of Admission</p>
										<p>Post the admission rounds, the admission letter will be rolled out to the selected candidates. </p>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
				
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>	
	<div id="choose"></div>
</section>
	
	
<section class="blue_back">
	<div class="container">
		<div class="row">
			<?php include('inc/why.php') ?>
		</div>
	</div>
	<div id="tieup"></div>
</section>	
	
<section class="placement-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="pl11">Placement <span>Tie-Ups</span></div>

				<div class="placement-grid m-t-40">
					<div class="placement-list circle"><img src="assets/img/animation-v1/animation-1.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/animation-v1/animation-2.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/animation-v1/animation-3.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/animation-v1/animation-4.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/animation-v1/animation-5.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/animation-v1/animation-6.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/animation-v1/animation-7.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/animation-v1/animation-8.webp" class="img-fluid"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.white-sec-2 .overlay-blue { background-color: #343434b3;}
	.white-sec-2 .img-content {padding: 4px; background-color: #343434b0;}
	.portfolio img{box-shadow: 0px 5px 16px #00000040; width: 100%;}
</style>	
<section class="white-sec-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="body-copy">
					<h2>Alumni</h2>
				</div>

				<div class="row">
					<div class="col-md-3 col-6">
						<div class="course-box">
							<img src="assets/img/animation-v1/alumni1.webp" class="course-image">
							<div class="img-content1">
								<h5>Anushree D.</h5>
								<span>Special Effects Head (Movie : Aks)</span>
							</div>
							<div class="overlay-blue">
								<div class="text txt-blk">
									<span>Anushree D.K</span>
									<span>Special Effects Head (Movie : Aks)</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="course-box">
							<img src="assets/img/animation-v1/alumni2.webp" class="course-image">
							<div class="img-content1">
								<h5>Sandeep Gupta</h5>
								<span>Editor (Desh Mein Nikla Hoga Chand)</span>
							</div>
							<div class="overlay-blue">
								<div class="text txt-blk">
									<span>Sandeep Gupta</span>
									<span>Editor (Desh Mein Nikla Hoga Chand)</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="course-box">
							<img src="assets/img/animation-v1/alumni3.webp" class="course-image">
							<div class="img-content1">
								<h5>Gopal Krishna</h5>
								<span>Sr. Designer (Dreamworks Animation)</span>
							</div>
							<div class="overlay-blue">
								<div class="text txt-blk">
									<span>Gopal Krishna</span>
									<span>Sr. Designer (Dreamworks Animation)</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="course-box">
							<img src="assets/img/animation-v1/alumni4.webp" class="course-image">
							<div class="img-content1">
								<h5>Abhinav Bajpai</h5>
								<span>Incharge Graphics (Smile Pinki)</span>
							</div>
							<div class="overlay-blue">
								<div class="text txt-blk">
									<span>Abhinav Bajpai</span>
									<span>Incharge Graphics (Smile Pinki)</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<style>
					.signs .fa{color:#f72727;}
				</style>
				<!-- Student Projects -->
				<div class="idus-visit m-t-20">
					<div class="pl11">Student <span>Projects</span></div>
					<div class="paragraph">
						Students at AAFT get ample opportunities to apply multimedia techniques like 3D animation and VFX and develop their own games or apps throughout their coursework. Whether you are pursuing a bachelor of game development or a BSc multimedia or master's degree in 3D animation, you will get to work on live projects and create a strong portfolio that can be exhibited to different potential employers.
					</div>
					<div class="clear m-TB-40"></div>
					
					<div class="contentMain">
						<div class="row signs">
							<div class="col-md-4 col-6">
								<i class="fa fa-check-circle" aria-hidden="true"></i> <span>Character Design</span>
							</div>
							<div class="col-md-4 col-6">
								<i class="fa fa-check-circle" aria-hidden="true"></i> <span>Sketching</span>
							</div>
							<div class="col-md-4 col-6">
								<i class="fa fa-check-circle" aria-hidden="true"></i> <span>Digital Painting</span>
							</div>
							<div class="col-md-4 col-6">
								<i class="fa fa-check-circle" aria-hidden="true"></i> <span>Matte Painting</span>
							</div>
							<div class="col-md-4 col-6">
								<i class="fa fa-check-circle" aria-hidden="true"></i> <span>Create Animation</span>
							</div>
							<div class="col-md-4 col-6">
								<i class="fa fa-check-circle" aria-hidden="true"></i> <span>Post-production</span>
							</div>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-4 col-6">
							<img src="assets/img/animation-v1/project1.webp" class="rounded mt-2 mb-2" width="100%" alt="">
						</div>
						<div class="col-sm-4 col-6">
							<img src="assets/img/animation-v1/project2.webp" class="rounded mt-2 mb-2" width="100%" alt="">
						</div>
						<div class="col-sm-4 col-6">
							<img src="assets/img/animation-v1/project3.webp" class="rounded mt-2 mb-2" width="100%" alt="">
						</div>
						<div class="col-sm-4 col-6">
							<img src="assets/img/animation-v1/project4.webp" class="rounded mt-2 mb-2" width="100%" alt="">
						</div>
						<div class="col-sm-4 col-6">
							<img src="assets/img/animation-v1/project5.webp" class="rounded mt-2 mb-2" width="100%" alt="">
						</div>
						<div class="col-sm-4 col-6">
							<img src="assets/img/animation-v1/project6.webp" class="rounded mt-2 mb-2" width="100%" alt="">
						</div>
					</div>

				</div>
				<!-- Student Projects -->
				
			</div>
		</div>
	</div>
</section>
<style>
	.ws22 {padding: 0 0 60px 0;}
</style>
<section class="white-sec-2 ws22">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="body-copy">
					<h2>Infrastructure</h2>
					<p>In terms of infrastructure, our animation school matches international standards. All the VFX classes take place at air-conditioned classrooms with LCD projectors, fully equipped Chroma Studio, different types of practical labs like Sketching Lab, Animation Labs with Hi-End Workstations, Video Editing Lab with I-Mac, Game Design Lab, Game Play Studio, etc. to give hands-on experience to its students.</p>

					<div class="row m-b-20">
						<div class="col-lg-4 col-md-4">
							<div class="course-box portfolio-wrap">
								<img src="assets/img/common-infra1.webp" class="img-center img-fluid">
								<div class="overlay-blue portfolio-info">
									<div class="text txt-blk portfolio-links">
										<a href="assets/img/common-infra1.webp" data-gallery="portfolioGallery" class="portfolio-lightbox2"><i class="bi bi-fullscreen"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="course-box portfolio-wrap">
								<img src="assets/img/common-infra2.webp" class="img-center img-fluid">
								<div class="overlay-blue portfolio-info">
									<div class="text txt-blk portfolio-links">
										<a href="assets/img/common-infra2.webp" data-gallery="portfolioGallery" class="portfolio-lightbox2"><i class="bi bi-fullscreen"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="course-box portfolio-wrap">
								<img src="assets/img/common-infra3.webp" class="img-center img-fluid">
								<div class="overlay-blue portfolio-info">
									<div class="text txt-blk portfolio-links">
										<a href="assets/img/common-infra3.webp" data-gallery="portfolioGallery" class="portfolio-lightbox2"><i class="bi bi-fullscreen"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="m-TB-40"></div>
				
				<div class="curtain swiper-container">
		            <div class="swiper-wrapper">
		                <div class="swiper-slide animals">
		                	<div class="card-img-wrap">
		                		<div class="card-img-box">
		                			<img src="assets/img/animation-v1/infra1.webp" class="img-fluid">
		                		</div>
		                		<div class="card-img-text">
		                			<ul>
										<li>326 Workstations</li>
										<li>64 High-End Setups</li>
										<li>Video Editing Software</li>
										
									</ul>
		                		</div>
		                	</div>
		                </div>
		                <div class="swiper-slide animals">
		                    <div class="card-img-wrap">
		                		<div class="card-img-box">
		                			<img src="assets/img/animation-v1/infra2.webp" class="img-fluid">
		                		</div>
		                		<div class="card-img-text">
		                			<ul>
										<li>Adobe Photoshop</li>
										<li>Corel Draw</li>
										<li>Adobe Dreamweaver</li>

									</ul>
		                		</div>
		                	</div>
		                </div>
		                <div class="swiper-slide animals">
		                    <div class="card-img-wrap">
		                		<div class="card-img-box">
		                			<img src="assets/img/animation-v1/infra3.webp" class="img-fluid">
		                		</div>
		                		<div class="card-img-text">
		                			<ul>
										<li>Learn to carve, mold &amp; shape</li>
										<li>Learn techniques to build characters, elements etc.</li>
									</ul>
		                		</div>
		                	</div>
		                </div>
		                <div class="swiper-slide animals">
		                	<div class="card-img-wrap">
		                		<div class="card-img-box">
		                			<img src="assets/img/animation-v1/infra4.webp" class="img-fluid">
		                		</div>
		                		<div class="card-img-text">
		                			<ul>
										<li>Animation Projector</li>
										<li>Projection Hall</li>
										<li>High-Speed Internet Setup</li>
									</ul>
		                		</div>
		                	</div>
		                </div>
		            </div>
		            <!-- next / prev arrows -->
		            <div class="next_pre_wrap">
		            	<div class="swiper-button-prev swiper-button-white"></div>
		            	<div class="swiper-button-next swiper-button-white"></div>
		            </div>
		            <!-- !next / prev arrows -->
		        </div>
			</div>
		</div>
	</div>
</section>	
	
<style>
.bod-grid .circle { border-radius: 0px;}	
.bod-list h3 { margin: 1.5rem 0 0rem;}
</style>
<section class="boa_back">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="pl12">Master Workshops through Industry Experts</div>

				<div class="bod-grid m-t-40">
					<div class="bod-list">
						<div class="circle">
							<img src="assets/img/animation-v1/ramesh.webp" class="img-fluid img-center">
						</div>
						<h3>Ramesh Meer</h3>
						<span>Chief Creative Director & CEO, FX Factory</span>
					</div>
					<div class="bod-list">
						<div class="circle">
							<img src="assets/img/animation-v1/akshay.webp" class="img-fluid img-center">
						</div>
						<h3>Akshay Arora</h3>
						<span>National Sales Manager, Huion India</span>
					</div>
					<div class="bod-list">
						<div class="circle">
							<img src="assets/img/animation-v1/rajiv.webp" class="img-fluid img-center">
						</div>
						<h3>Rajiv Sharma</h3>
						<span>Founder, CEO & CTO, HQ VFX Pvt. Ltd</span>
					</div>
					<div class="bod-list">
						<div class="circle">
							<img src="assets/img/animation-v1/shruti.webp" class="img-fluid img-center">
						</div>
						<h3>Shruti Verma</h3>
						<span>Regional Marketing Director - ASEAN/India, Epic Games</span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
	
<section class="white-sec-22 m-b-30">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
<!-- project faculty -->
				<div class="facultywrap m-t-0">
					<div class="body-copy">
						<h2>Program Faculty</h2>
						<p>AAFT boasts of highly qualified and experienced team of professors who hold impeccable industrial acumen after having led successful careers in their respective fields.</p>
						<br>
					</div>

					<div class="row">
					    <div class="col-lg-3 col-md-3 col-6">
							<div class="falcutybox">
								<div class="fclty_img"><img src="assets/img/animation-v1/av.webp" class="img-fluid img-center"></div>
								<div class="facultyname">
									<h3>Mr. A Vasant</h3>
									<span>Assistant Professor</span>
								</div>
							</div> 
						</div>	
						<div class="col-lg-3 col-md-3 col-6">
							<div class="falcutybox">
								<div class="fclty_img"><img src="assets/img/animation-v1/pbs.webp" class="img-fluid img-center"></div>
								<div class="facultyname">
									<h3>Mr. PBS Subramaniam</h3>
									<span>Assistant Professor</span>
								</div>
							</div> 
						</div>	
						<div class="col-lg-3 col-md-3 col-6">
							<div class="falcutybox">
								<div class="fclty_img"><img src="assets/img/animation-v1/shiv.webp" class="img-fluid img-center"></div>
								<div class="facultyname">
									<h3>Mr. Shiv Kumar</h3>
									<span>Assistant Professor</span>
								</div>
							</div> 
						</div>	
						<div class="col-lg-3 col-md-3 col-6">
							
						</div>	
												
											</div>
					<div class="clear m-t-20"></div>
				</div>
				<!-- project faculty -->
			</div>
		</div>
	</div>
</section>
	
<style>
	.placement .course-box{height: 260px; background-color: #000000;}
	.white-sec-2 .img-content1 { height: 80px; bottom: 0; padding: 4px; background-color: #343434b0; position: absolute; left: 0; right: 0;color: #ffffff;  font-size: 14px;text-align: center;}
	.placement{background-color: #e3e3e3;}
	.placement .overlay-blue{display: none;}
@media screen and (max-width: 600px) 
{
	.placement .course-box{height: 245px;}
	.placement .course-box h5 { font-size: 1.0rem;}
	}
</style>	


<style>

.learn-from {padding: 50px 0 0 0; color: #ffffff;  background-image: url(assets/img/bg-img2.jpg);    background-repeat: no-repeat;  background-size: 62% 100%;}
.learn-from .btn1{background-color: #000000; color:#ffffff; margin-bottom: 30px; border:none; padding:10px;width: 215px;height: 50px;}
.learn-from h2{font: normal normal normal 35px/45px gothambook; color:#c3c3c3;}
.learn-from p{font: normal normal normal 16px/30px gothambook;}

.learn-from .btn2{width: 200px;border: 1px solid #ffffff; border-radius: 10px; padding: 10px; background: none; color:#ffffff;}
.learn-from .mobile{display: none;}
.swiper-button-next:after, .swiper-button-prev:after { display: none;}
.swiper-horizontal>.swiper-pagination-bullets,.swiper-pagination-bullets.swiper-pagination-horizontal,.swiper-pagination-custom,.swiper-pagination-fraction { padding-left: 35% !important;}
.learn-from .binder{align-items: center;}
	
@media screen and (max-width: 600px) 
{
.learn-from {background-size: 100% 100%; padding: 50px 10px 50px 10px;}
.learn-from .mobile{display: block;}
.learn-from .desktop{display: none;}
.learn-from .master-img {margin-top: 10px; width: 200px;}
.learn-from .mas-img { border-bottom: 10px solid black;  text-align: center;}
.learn-from h2{font: normal normal normal 20px/30px gothambook; margin-top: 20px; color:#c3c3c3;}
.learn-from p{font: normal normal normal 16px/30px gothambook;letter-spacing: 0px; margin-top: 15px;}
.learn-from .btn2{margin-top: 20px;}
.learn-from .btn1 {margin-bottom: 0px;}
.swiper-horizontal>.swiper-pagination-bullets,.swiper-pagination-bullets.swiper-pagination-horizontal,.swiper-pagination-custom,.swiper-pagination-fraction { padding-left: 45% !important;}

}
	
@media only screen and (max-width:1500px) and (min-width:768px){
	.learn-from {background-size: 64% 100%;}
	.learn-from .img{vertical-align: bottom;}
	learn-from h2 {
    font: normal normal normal 30px/55px gothambook;
    line-height: 40px;}
	.learn-from p {
    font: normal normal normal 16px/30px gothambook;}
}
</style>
	
 

 
<!--<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>-->


	
	
<script>
	//document.getElementById("customOne").style.background="#062F4F";lo
</script>
	
<?php include("inc/footer-address.php"); ?>

	<style>
		.pop-mod .modal-header button{
		width: 38px;
		border-radius: 50%;
		background-color: #ff0000;
		border: none;
		color: #ffffff;
		font-size: 25px;}
		.pop-mod input,.pop-mod select {
		width: 100%;
		height: 35px;
		margin-bottom: 20px;
		border: none;
    	border-bottom: 1px solid grey;
		}
		input.register-input-box, select.register-input-box{padding: 0px;}
	</style>
<!-- popup form -->
	<div class="modal pop-mod" id="myModal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="col-lg-12">
					<div class="forhead">
						<span>GET THE BROCHURE</span>
						<h5 class="modal-title" id="exampleModalLabel">Know more about course</h5><br>&nbsp;<br>
					</div>
					<div class="form-block">
						
						<!--form action="" method="post"-->
							<?php //include('inc/brochure-form.php'); ?>
						<!--/form-->
					</div>
				</div>
        </div>
        
        <!-- Modal footer -->
        <!--div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div-->
        
      </div>
    </div>
  </div>
	<!-- popup form -->
<script>
 $('#button').submit(function(e) {
    e.preventDefault();
    // Coding
    $('#IDModal').modal('toggle'); //or  $('#IDModal').modal('hide');
    return false;
});
</script>
	
<script>
	var learnfrom = new Swiper(".learnfrom", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop:true,
		pagination: {
			el: ".swiper-pagination-learnfrom",
			clickable: true,
		},

		navigation: {
			/*nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",*/
		},
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
		breakpoints: {
			300: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			640: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			1024: {
				slidesPerView: 1,
				//centeredSlides: true,
				spaceBetween: 30,
			},
		},
	});
</script>	
<script>
	var portfolio = new Swiper(".portfolio", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop:true,
		pagination: {
			el: ".swiper-pagination-portfolio",
			clickable: true,
		},

		navigation: {
			/*nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",*/
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		breakpoints: {
			300: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			640: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			1024: {
				slidesPerView: 3,
				//centeredSlides: true,
				spaceBetween: 30,
			},
		},
	});
</script>
<?php include('inc/contact-details-animation.php'); ?>	
<?php include('inc/form-scripts.php'); ?>
<?php include('inc/footer-script.php'); ?>

</section>	
</body>
</html>