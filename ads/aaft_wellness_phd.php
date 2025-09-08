<?php
include("inc/function.php");
/*$SchoolidNewLp="1";
$SubSchoolidNewLp="'1','0'";
$Dur="2";*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AAFT University</title>
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />	
<?php include('inc/header-script.php'); ?>

	
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	
<style>
.collapsed { background-color: #FFF1F1!important; color:#000000 !important;}
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
#accordion .card-header {background: #ED3237; padding: 0;}
#accordion .card-body {padding: 20px 0; font-size: 16px; color: #ED3237; font-weight: 400;}
	
#accordion .card-header a{font-size: 18px; color: #062F4F; font-weight: 600; text-decoration: none;}
	
.course-orientation .card-body {background-color:#ED3237; color:#ffffff; }

.footer-sec{background: #ED3237; padding: 50px 0;}
.footer-sec h3{color: #ffffff; font-weight: 400; font-size: 16px; line-height: 40px;}
/*.footer-sec .address{padding: 40px; border: 8px solid #3b3a4f;}*/
.footer-sec .address h2{color: #ffffff; font-weight: 400; font-size: 26px; letter-spacing: -1.65px;}
.footer-sec .address h4{color: #ffffff; font-weight: 100; font-size: 16px; line-height: 25px;}
	
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
	.hero_sec_phd .align-items-center{margin-top: 200px;}
	.course_video h2{padding-top: 30px; margin-bottom: 20px;}
	.course_video {padding:0px;}
	
	.learn img{margin-left:0px !important; width: 80%!important;}
	.bodnew .img-card img {width: 100% !important;}
	
	
	.bodnew .hold11{flex-wrap: wrap;}
	.bodnew .img-card{width: 100%;margin-bottom: 20px;}
	.bodnew .img-card img{width: 100%;}
	
	.chdsk{margin-right: 0px!important; padding-right: 0px!important;}
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
	
.course-orientation .nav-item {
    width: 30%!important;
}

	}

</style>
</head>
<body>
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
.hero_sec_phd{margin-top:70px;}
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
			<li><a href="#choose" onClick="menuHide()">Why Choose AAFT</a></li>
			<li><a href="#program" onClick="menuHide()">Our Programs</a></li>
			<li><a href="#overview" onClick="menuHide()">Program Overview</a></li>
			<li><a href="#apply" onClick="menuHide()">How To Apply</a></li>
			<li><a href="#faq" onClick="menuHide()">FAQ</a></li>
			
		</ul>
		<img src="assets/img/univ-logo.webp" title="AAFT | School of cinema" alt="AAFT | School of cinema" class="img-fluid lplogo">
				
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

<section class="hero_sec_phd d-flex align-items-center">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-8 col-md-8">
				<div class="hero_sec_content">
					<p style="color:#ffe9e8; font-weight: 600; font-size: 25px;">Degree Programs</p>
					<h2>Professional PhD<br>Courses</h2>
					<h4 style="color:#ffffff;">Enroll for - <span>August 2025 Batch</span></h4><br>
					<!--button style="background-color: #FF500D; padding:10px; width:200px; text-align: center; color:#ffffff;" type="button" class="btn" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">Download Brochure</button--><br>&nbsp;<br>
					<span class="tagline">Application closes <span style="color:#ED3237">24<sup>th</sup> August 2025</span></span>
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
				$pageOption="PhD Wellness";
				$schoolOption="PHD Programme";
				$courseOption= '<option value="PhD in Wellness">PhD in Wellness</option>';				
				include('inc/form.php');
				?>	
			</div>
		</div>
	</div>
</section>
<style>
.duration{padding: 0 0 50px 0; margin-top: -60px;}
.duration .duration-content{background: #ED3237 0% 0% no-repeat padding-box;box-shadow: 0px 3px 30px #00000029; border-radius: 90px; color:#ffffff;height: 118px; padding: 30px;}
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

	<style>
		.enroll{background-color: #FFF1F1; padding: 20px; border-radius: 10px;}
		.enroll p{color:#666666;}
		.enroll h2{color:#ED3237; font-size: 30px; font-weight: 100; margin-top: 20px;}
		.ad-open{background-color: #ED3237; padding: 20px; color:#ffffff; margin-top:40px;}
		.ad-open h2{text-align: center;}
		.ad-text{background-color: #000000;padding: 10px; border-radius: 10px; display: flex; justify-content: center; }
		
		.chansellor{margin: 60px 0;}
		.chansellor h2{background-color: #232323; color:#ffffff; text-align: center;padding: 5px; font-size: 18px;}
		.chansellor p, .chansellor h3{text-align: center; color:#666666;}
		
		.glance{background-color: #000000; padding: 30px; background-image: url("assets/img/univ-build.jpg"); background-repeat: no-repeat; color:#FFFFFF; font-size: 18px;}
		.glance h2{margin:30px 0;}
		.glance p{margin:30px 0;}
		.body-copy h2{font-size: 28px;}
		
		.phdprog{padding: 40px 0;}
		.phdprog h2{margin: 20px 0;}
		
		.chdsk{margin-right: -25px; padding-right: 25px;}
		
	</style>
<section class="white-sec" style="padding-top: 0;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="body-copy">
					<h2 style="line-height: 35px; margin:20px 0;">About AAFT PhD in Wellness Programs</h2>
					<p>The PhD in Food and Nutrition is a field of science, and the main objectives of this programme are food, nutrition, diet, its production, control, and protection. This programme allows applicants to develop a basic understanding of new technologies and subject areas.<span id="choose"></span>  The minimum requirement for admission is a master's degree in food and nutrition from an accredited institution or university, or passing an examination equivalent to this degree</p>
					
				</div>
				<h2>Why Enroll in a PhD Program at AAFT?</h2><br>
				<div class="enroll">
									
					<p>PhD helps you attain your passion of following the details through research. The one who is interested in holding the expertise in any area of their interest should pursue a PhD program. It helps you to achieve your career goals by adding something innovative to your discipline and thus attaining the bigger goals in life. PhD program helps you to apply theory to practical by gaining insight knowledge and helps you grab a job in the field of academics at any reputed University. Here are four reasons how a PhD Program will help you with your career.</p>
					<h2>1. Contribute to the preferred area of interest:</h2>
					<p>By pursuing PhD in the area of your chosen subject you make discoveries in that field, and this helps in extending the body of literature available on that topic. Also, if found appropriate your work will be referred to by the other experts and scholars who are also interested in the same field and subject.</p>
					<h2>2. Achieve long term goals in your career:</h2>
					<p>PhD is a vital qualification in the field of academics. By obtaining a PhD degree, you become an expert in the subject matter and can be absorbed by the industry with open hands. The program also helps you gain many analytical and research skills which are very useful in other industries including government ventures.</p>
					<h2>3. Expression of Intellectual Ability:</h2>
					<p>A PhD programme will help to differentiate the good academics from the great ones. It not only indicates a person's capacity to conduct independent research but also their in-depth understanding of a certain subject. This is critical in the realm of academics.</p>
					<h2>4. Networking Prospects:</h2>
					<p>While pursuing a PhD program the scholar attends a lot of seminars, conferences, and workshops. In the process of doing so, they meet many people with similar interests and of the same area in different fields. The scholars get an opportunity to interact with the experts across various geographical boundaries. These associations can prove mutually beneficial to both parties.</p>
				
				
				</div>
				<div class="ad-open">
					<h2>Admission Open</h2>
					<div class="ad-text">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-3 col-3">
										<img src="assets/img/cir-calendar.png" width="100%">
									</div>
									<div class="col-sm-9 col-9">
										<h4>24/07/2025</h4>
										<p>Last date for Registration</p>
									</div>
								</div>
							</div>
								
							<div class="col-sm-6">
								<div class="row" style="border-left: 1px solid #6a6767;">
									<div class="col-sm-3 col-3">
										<img src="assets/img/cir-calendar.png" width="100%">
									</div>
									<div class="col-sm-9 col-9">
										<h4>28/07/2025</h4>
										<p>Date for Entrance test</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="chansellor">
					<div class="row">
						<div class="col-sm-5 order-sm-2">
							<img src="assets/img/sandeep-sir.jpg" width="100%">
						</div>
						<div class="col-sm-7 order-sm-1">
							<h2 class="chdsk">From the Chancellor's Desk</h2>
							<h3 style="font-size: 18px;">Sandeep Marwah</h3>
							<center><p style="color:#ff0000; width: 35px; border-top: 5px solid red;"></p></center>
							<p>Persistent and systematic efforts play an indispensable part in human progress. In this modern era, media has the power to control human mind, ideas and values. Media professionals has a crucial role in adequately inform, educate and entertain the masses. Therefore, we continuously strive to act as a catalyst in the progression of human self-esteem and cultural inheritance through research, teaching, and resources to develop skills essential to the film, media and arts industry.</p>
						</div>
						
					</div>
				</div>
				
				<div class="glance">
					<h2>AAFT at glance</h2>
									
					<p>AAFT has been a global pioneer in facilitating media and arts education for more than 30 years. We offer 50+ professional courses in the disciplines of Cinema, Fashion, Journalism and Mass Communication, Animation, Fine Arts, Music, Event Management, Digital Marketing, DJing, Interior Design, and many more. We have successfully trained more than 20,000 students from 180+ countries to date. </p>
					<p>AAFT University is inspired by the talent and driven by innovations and is firmly committed to providing industry-relevant, socially responsible manpower to meet the challenges of the 21st Century. Academic research is a vital component of any university. AAFT offers its Doctor of Philosophy programme with the vigour and seriousness that it deserves. The vibrant and developing culture of research and innovations in the AAFT campus inspires students from the UG level onwards to engage in cutting edge technology development and discover the value and worth of the knowledge acquired by them during their studies. With specialized laboratories, this research programme is established very well in AAFT with the latest research topics.</p>
					<div id="program"></div>
					
				</div>
				
				<div class="phdprog">
					<h2>About AAFT PhD Program:</h2>
									
					<p>AAFT University is inspired by the talent and driven by innovations and is firmly committed to providing industry-relevant, socially responsible manpower to meet the challenges of the 21st Century. Academic research is a vital component of any university. Keeping this in mind, AAFT pursues its Doctor of Philosophy programme with the vigour and seriousness that it deserves. The vibrant and developing culture of research and innovations in the AAFT campus inspires students from the UG level onwards to engage in cutting edge technology development and discover the value and worth of the knowledge acquired by them during their studies. With specialized laboratories, this research programme is established very well in AAFT with the latest research topics. The academic programme leading to the PhD degree is broad-based and involves a course credit requirement and a research publication leading to thesis submission. Facilities for research work leading to the PhD degree are available in the School of Management, School of SOAPRE, School of SOJMC. </p>
					
					
				</div>
								
			</div>
		</div>
	</div>
	<div id="overview"></div>
</section>
	
	
<style>
	.learn{background-color: #ED3237; padding: 50px 0 0 0; color:#ffffff;}	
	.learn ul { list-style-image: url('assets/img/check.png'); line-height: 28px;font-size: 18px;}
	.learn img{margin-left: -100px; width: 120%;}
	.learn h2{margin: 20px 0;}
	.learn button{width: 192px;height: 55px; background-color: #ffffff; color:#ED3237; margin-top:20px; border:none;}
</style>
	
<section class="learn">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="row">
					<div class="col-sm-4 order-sm-2">
						<h2 class="d-block d-sm-none">What You Will Learn?</h2>
						<img src="assets/img/diploma.png">
					</div>
					<div class="col-sm-8 order-sm-1">
						<h2 class="d-none d-sm-block">What You Will Learn?</h2>
						<ul>
							<li>Develop an understanding of the research process </li>
							<li>Define research problem and develop a research approach </li>
							<li>Conducting literature review </li>
							<li>Understand the research methodology </li>
							<li>Learn different statistical tools </li>
							<li>Write a research paper </li>
							<li>Report the research findings with their implications </li>
							<li>Develop presentation and networking skills </li>
							<li>Develop insight into a particular topic</li>
						</ul>
						<button class="d-none">Enquire Now</button>
						<br>&nbsp;<br>
					</div>
											
				</div>
				
			</div>
		</div>
	</div>
</section>
	
<style>
	.bodnew{padding: 50px 0;}
	.bodnew .img-card{position: relative;}
	.bodnew .img-card img{width:225px;}
	.bodnew .img-caption{position: absolute; bottom: 0px; left:0px; background-color: #ed3237cf; color: #ffffff; height: 60px; width: 100%; padding-right: 10px;}
	.bodnew .img-caption p {margin-bottom: 0px; text-align: right;  padding: 2px; font-size: 12px;}
	.bodnew .hold11{display: flex;}
	
	.process{margin: 50px 0;}
	.process h2{font-size: 30px; line-height: 60px; color: #000000;}
	.process ul{background-image: linear-gradient(to right, #ED32372b 40px, #FFFFFF 40px);}
	.process ul li{list-style: decimal; padding-left: 20px; font-size: 18px; line-height: 30px; margin-bottom: 20px;}
	.process ul li::marker{font-size:25px; color:#ED3237; font-weight: bold; margin-bottom: -10px;}
	.framework .pp{color:#ED3237; font-weight: 600; font-size: 20px; margin:20px 0; width: 160px; border-bottom: 3px solid;}
	.bgnone{background-image: url("")!important; border-radius: 10px;}
	.ppp{font-size: 18px!important;   font-weight: 600;}
</style>
	
<section class="bodnew">
	<div class="container">
		<div class="row">
			<h2 class="mb-4">Board of Directors</h2>
			<div class="col-lg-8 col-md-8 hold11">
				<div class="img-card">
					<img src="assets/img/sandeepsir.jpg">
					<div class="img-caption">
						<p class="ppp">Sandeep Marwah</p>
						<p>Director - Marwah Film Company</p>
					</div>
				</div>
				<div class="img-card">
					<img src="assets/img/akshaysir.jpg">
					<div class="img-caption">
						<p class="ppp">Akshay Marwah</p>
						<p>CEO, Asian Education Group</p>
					</div>
				</div>
				<div class="img-card">
					<img src="assets/img/mohitsir.jpg">
					<div class="img-caption">
						<p class="ppp">Mohit Marwah</p>
						<p>Director - Marwah Film Company</p>
					</div>
				</div>
				<div class="img-card">
					<img src="assets/img/deepaksir.jpg">
					<div class="img-caption">
						<p class="ppp">Deepak Marwah</p>
						<p>Director - Marwah Film Company</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<section class="framework">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<h2>Course Framework</h2>
				<p class="pp">PhD Program</p>
				<div class="glance bgnone">
					<p>The entire program will be three years to six years duration. The candidate shall be permitted to submit his/ her thesis after three years (including coursework). The duration should not exceed six years from the date of registration. </p><p>The scholar will have to undergo coursework in the first semester of the program. The course work is a preparation for a PhD program and should consist of courses on research methodology, as compulsory subjects, including qualitative and quantitative methods, computer applications, research ethics and review of literature relevant to the discipline concerned. </p><p>After successful completion of the course work, the candidate is required to submit a synopsis of his/her proposed research work along with the title of the thesis duly forwarded by the supervisor/ Co-supervisor </p><p>The Candidate must submit the six-monthly progress of his research work duly signed by his / her Supervisor/ Co-Supervisor along with the conferences, seminar attended along with publications of the research work. The candidates must attend a conference/seminar or publish a paper to be included in a progress report every six months. </p><p>The final submission of the thesis and viva voce will be conducted in the last semester.</p>

				</div>
			</div>
</div>
</section

><section class="whyraipur">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				
				<div class="enroll">
					<h2>Why Raipur?</h2>
					<p>Raipur is the perfect blend of city lights and townships. As a student, you can enjoy all facilities of a metro city - the affordable cost of living, basic amenities, and easy transportation. From waterfalls, dense forests to architectural marvels, Raipur provides ample picturesque spaces. </p><p>Along with AAFT University of Media and Arts, Raipur also houses IIT, AIIMS, IIIT, NIT and National Law University. </p><p>Raipur is one of the safest places to live in North India.</p>
					
					<img src="assets/img/raipurmix.JPG" width="100%">
					<div id="apply"></div>
				</div>
				
				<div class="process">
					<h2>Admission Process:</h2>
					<ul>
						<li>The admission into the Doctor of Philosophy Programme is done twice a year, i.e., in January and in July by holding an admission test followed by a personal interview.</li>
						<li>Candidates who do not have a valid score in national tests like UGC-NET etc will have to appear in an Entrance Test named ‘AAFT Ph. D. Entrance Test’ (AAFTPET) and will have the following weightage of various components for admission: AAFTPET marks 50%, Qualifying degree marks – 30%, and Interview –20%.</li>
						<li>Candidates who have a valid score in the above National tests or M.Phil degree shall be exempted from AAFTPET.</li>
						<li>After the AAFTPET written test, interviews will be conducted (by respective Departments/Schools) on the scheduled date and Time.</li>
						<li>The modalities of the entrance test will be decided by the University.</li>
						<li>Satisfying the requirements of minimum qualifications as laid down in clause of Eligibility criteria, Performance in Entrance Test & Interview Availability of the number of seats.</li>
					</ul>
				</div>
				
				<div class="enroll mb-5">
					<h2>Application Procedure</h2>
					<p><span style="color:#ff0000; font-weight: 600;">Online –</span> Candidates can fill out the application form through the University’s website (www.aaft.edu.in) by filling out the application form online. All mandatory details are essential to be filled up. The candidates will upload at the appropriate place a scanned copy of their photograph on the form. Once the mandatory details are completed, the payment option will be activated for making an online payment of Rs. 1100/ - as application fees (non-refundable) & subsequent submission of the form.</p>
					<p><span style="color:#ff0000; font-weight: 600;">Offline –</span> If a candidate wants to, they can collect the hard copy of the form from the Admission office of the AAFT University and submit the filled-in form along with all the documents and fees via offline mode. All mandatory details are essential to be filled up.</p>
					
				</div>
				
				<div class="glance bgnone">
					<h2 style="color:#ED3237; font-size: 25px;">Eligibility Criteria:</h2>
					<ul>
						<li>Subject to the conditions stipulated in UGC regulations, the following persons are eligible to seek admission to the PhD programme: </li>
						<li>The candidate must possess a Master’s or M.Phil Degree with a minimum of 55% marks or equivalent grade from any accredited University. </li>
						<li>A candidate seeking admission to the PhD. Programme under any school of AAFT must have obtained post-graduation in the same subject or other relevant disciplines subject to the approval of School with min. 55% marks in aggregate or equivalent. </li>
						<li>The minimum eligibility criteria indicated above for each Programme is only an enabling clause. The concerned Doctoral Research Committee (DRC) may fix higher criteria at the time of shortlisting keeping in view the number of candidates, several seats and minimum academic/professional background expected to cope with the Programme etc.</li>
					</ul>
					<div id="faq"></div>
				</div>
				
			</div>
		</div>
	</div>
	
</section>
	
<style>
.course-orientation {padding: 50px 0;}
.course-orientation .courseo-txt{font: normal normal normal 20px/30px gothambook;letter-spacing: 0px;color: #000000;}
.course-orientation .nav-link{border:none; width: 205px; height: 50px; margin-right: 10px; padding:14px; text-align: center;font: normal normal bold 20px/30px gothambook;letter-spacing: 0px;color: #ED3237; }
.course-orientation .nav-tabs .nav-item.show .nav-link,.course-orientation .nav-tabs .nav-link.active {background-color:#00000000; border:none; border-bottom: 2px solid #ff0000; font: normal normal medium 20px/30px gothambook;letter-spacing: 0px;color: #ED3237;}
.course-orientation .tab-content{margin-top: 20px;}
.course-orientation .nav-tabs { border-bottom: 0px solid #dee2e6;}
.course-orientation .card-header{background-color: #ED3237;color:#ffffff;margin-top: 10px!important;}
.course-orientation .card-header .accicon {color: #a7a7a7;}
/* accordian arrow up/down */
.card-header:not(.collapsed) .rotate-icon { transform: rotate(180deg); }
/* accordian arrow up/down */
.card-header .accicon { float: right;  font-size: 20px; width: 1.2em;}
.course-orientation .card-body{border: 1px solid rgba(0, 0, 0, 0.2);}
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
				<h2>Frequently Asked Questions</h2>
								
				<div class="accordion" id="accordionExample">
							<div class="card">
								<div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">     
									<span class="title">Is moving to Raipur a good decision?</span>
									<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseOne" class="collapse show" data-parent="#accordionExample">
									<div class="card-body">
										<p>Ans: Raipur is one of Northern India's safest cities. It is one of the fastest-growing educational centers and provides students with a wide choice of educational amenities. Raipur, Chhattisgarh's bustling city, is noted for its colorful steel mills, lakes, and native artwork known as Bastar.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">     
								<span class="title">Are there any scholarships for deserving candidates? And how can I apply for it?</span>
								<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
								</div>
								<div id="collapseTwo" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										<p>Ans: Yes, various scholarships are available for deserving students. Please talk to an enrollment officer for more details.</p>
									</div>
								</div>
							</div>
					</div>
					
				
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>	
</section>

	
	
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
<?php include('inc/contact-details-new4.php'); ?>	
<?php include('inc/form-scripts.php'); ?>
<?php include('inc/footer-script.php'); ?>
	
</body>
</html>