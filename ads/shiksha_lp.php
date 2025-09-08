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
<title>Shiksha | AAFT University</title>

<?php include('inc/header-script.php'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	
<style>
input.register-input-box, select.register-input-box {color: #5e5e5e!important;border-bottom: 0px solid #AFAFAF;}
#enquire-cta h3{font-size:20px;}

.placement-grid .circle {
    border-radius: 0%;
    border: none;
    padding: 0px;
    overflow: unset;
    background: none; 
}


#header { height: 75px;}
#header .logo img { width: 75%;}	
.pop-mod {background: #000000c4;}
.hero_sec_content span.tagline {
    color: #ffd198;}
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
.with-arrow .nav-link.active::after {content: ''; border-left: 6px solid transparent; border-right: 6px solid transparent; border-top: 6px solid #ED3237; position: absolute; bottom: -6px; left: 50%; transform: translateX(-50%); display: block;}
/* lined tabs */
.lined .nav-link {border: none; border-bottom: 3px solid transparent;}
.lined .nav-link:hover {border: none; border-bottom: 3px solid transparent;}
.lined .nav-link.active {background: none; color: #555; border-color: #2b90d9;}
.nav-pills .nav-link {color: #555;}
.text-uppercase {letter-spacing: 0.1em;}
/*.nav-pills .nav-link.active, .nav-pills .show > .nav-link {background:#ED3237 !important;}*/
#home1 .row, #profile1 .row, #contact1 .row{/*border-bottom: solid 1px #E5E3E3;*/ margin-bottom: 20px;}
.white-sec .nav-item a{font-weight: bold;}
</style>

</head>
<body>
<!--  navigation css --->
<style>
.navbar input[type="checkbox"],
.navbar .hamburger-lines{display: none;}
.navbar .container{width: 100%; margin: auto;}
.navbar{position: fixed; top:0;	left:0;	right: 0; padding: 0rem 1rem; width: 100%; height:72px; background: #fff; color: #000; opacity: 0.98; z-index: 100;box-shadow: 0 4px 8px 0 rgb(0 0 0 / 5%), 0 6px 10px 0 rgb(0 0 0 / 5%);}
.navbar-container{display: flex; justify-content: space-between; height: 65px; align-items: center;}
.menu-items{order: 2; display: flex;}
.logo{order: 1; font-size: 2.3rem;}
.menu-items li{list-style: none; /*margin-left: 1.5rem;*/ font-size: 1.3rem;}
.navbar a{color: #000; text-decoration: none; font-weight: 600; transition: color 0.3s ease-in-out;}
.navbar a:hover{color: #000;}
.navbar a, .navbar a:focus {padding: 10px 8px 10px 8px !important;}	
.lplogo{width: 155px; padding: 10px 0;}
.hero_sec_mba{margin-top:70px;}
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
		



			<li><a href="#enquire" class="" onClick="menuHide()">Enquire Now</a></li>
			<li><a href="#about" onClick="menuHide()">About AAFT</a></li>
			<li><a href="#courses" onClick="menuHide()">Courses</a></li>
			<li><a href="#why" onClick="menuHide()">Why AAFT</a></li>
			<li><a href="#faq" onClick="menuHide()">Admission Process</a></li>
			
			
		</ul>
		<img src="assets/img/univ-logo.webp" title="AAFT | School of bba" alt="AAFT | School of bba" class="img-fluid lplogo">
				
		<a class="d-none" style="background: #ED3237; color:#ffffff;text-align: center; padding: 10px 12px; border-radius: 4px; font-weight: bold; text-decoration: none; order:3;">
		<i class="bx bx-phone"></i> <?php //echo getDidnumber($utm_campaign); ?></a>
	</div>
</nav>	
	
<script>
function menuHide() {
	//alert('welcome');
	document.getElementById("checkbox").checked = false;
}
	
</script>
<!--  navigation--->

<style>

<style>

	h2{font-weight: 600;}
	:root {
		--swiper-theme-color: #020202;}
		
	.banner-area{background-color: #000; color:#fff;padding: 50px 20px; margin-top:0px; background-image: url("assets/img/shiksha-v1/shiksha-bg.jpg"); background-repeat: no-repeat; background-position: center;background-size: 100% 100%;}
	.banner-area .b-sec{display: flex; align-items: center;}
	
	.banner-area .enq-btn {color:#fff;width: 300px; height: 50px; background-color: #FF500D; text-align: center; padding: 5px;border: 1px solid #FFFFFF; border-radius: 5px; margin-bottom: 20px;}
	.banner-area .down-btn {width: 300px; height: 50px;background-color: transparent;text-align: center; padding: 5px;border: 1px solid #FFFFFF; border-radius: 5px; color:#fff;}
	.banner-area .hr1{color:#fff; font-size: 18px;}
	.banner-area .hr2{color:#BCBCBC; }
	.banner-area p{margin:0px; padding: 0px;}
	.banner-area .hr3{margin:20px 0;}
	.banner-area .left-area h1{color: #ed3237; font-family: "Rowdies", Sans-serif!important; font-size: 40px; font-weight: 900; text-transform: uppercase; line-height: 45px;
    -webkit-text-stroke-width: 1px; stroke-width: 1px; -webkit-text-stroke-color: #FFFFFF; stroke: #FFFFFF;}
	
    
    input[type=text], input[type=email], input[type=tel], select, input[type=submit]{height: 40px!important; width:100%!important; color:#5e5e5e!important;}
    input[type=submit]{color:#5e5e5e!important; background-color:#ed3237;color: #fff!important;padding: 4px; border: 2px solid #fff;
    box-shadow: 0px 1px 10px 0px #727070;}
	
	::-webkit-input-placeholder { color: #5e5e5e!important;}
	select { color: #5e5e5e!important;}
	option {color: #5e5e5e!important; background-color: #fff!important;}
	
	.banner-area .hr2 {background-color: #ED3237; padding: 10px; width: fit-content; text-align: center;border-radius: 20px; color: #fff; font-size:12px;}
    .home_form_lp{background-color:#F2F4F6;}
	
    .form-btn-wrap {padding: 0;}
	.banner-area p{font-size: 16px; color: #FFFFFF;}
	.left-area h3{font-size: 15px; font-weight: bold;}
	.left-area img{background-color: #FFFFFF; padding: 10px; width: 80px; border-radius: 5px;}
	.right-area{
		padding: 20px;
		background: #efefef;;
		border-radius: 10px;
	}
	.right-area p{
		font-size: 12px;
		color: #FFFFFF90;
	}
	.right-area h2{
		font-size: 20px;
	}
	.right-area .form-group {
    margin-bottom: 15px;
}

	@media only screen and (max-width: 600px) {
		.banner-area .right-area{text-align:center;}
		.banner-area .b-sec{padding-top:100px;}
		.banner-area .left-area{padding-left:20px; padding-right:20px;}
		.banner-area .hr1{display: none;}
		
		.banner-area{background-color: #000; color:#fff; padding: 100px 0px; background-image: url("assets/img/shiksha-v1/shiksha-bg.jpg"); background-repeat: no-repeat; background-position: unset; background-size: unset;}
	}
</style>	
	
<section class="banner-area">
	<div class="container">
		<div class="row b-sec">
			<div class="col-sm-6">
				<div class="left-area">					
					<h1>INDIA'S FIRST SKILL-ORIENTED UNIVERSITY</h1>
				</div>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-4"><div id="enquire" style="height:30px; margin-bottom:40px;"></div>
				<div class="right-area">
					<hr class="d-block d-sm-none"/>
					<?php
					$pageOption="Shiksha";
					$schoolOption="Shiksha_lp";
					$courseOption= '<option value="MBA">MBA</option>';				
					include('inc/form-shiksha.php');
					?>	
				</div>
			</div>
		</div>
		<div id="about"></div>
	</div>	
</section>

<style>
.duration1{padding: 0 20px 50px 20px; text-align:center;}
.duration1 {background: #ffffff; box-shadow: 0px 3px 30px #00000014 !important; color:#2D2D2D; padding: 30px; }
.duration1 p{font-size: 16px;}
.duration1 h5{font-size: 14px;}
.btn-info2 {background-color: #ED3237; color: #fff; padding: 10px; width: 200px; border: none;}
.duration1 h2{color:#ed3237; font-family: "RocknRoll One", Sans-serif; font-size: 40px; font-weight: 600; text-transform: uppercase;}
.duration1 .shd1{color:#38498b;}

	
@media only screen and (max-width: 600px)
{
	.duration1{margin-top: 0px; padding: 20px 10px; background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(255,245,242,1) 50%, rgba(255,245,242,1) 100%); height:700px; position: relative; box-shadow: none;}
	.duration1 .duration-content{background-color: #fff; border-radius: 20px; padding: 25px; padding-top: 35px; position: absolute; top: -50px; margin-left: -5px; box-shadow: 0px 3px 30px #00000029; margin-right: 20px; padding-top: 35px;}
	.duration1 .duration-content div[class*='item']{margin-bottom: 20px;}
	.duration1 h2 {font-size: 30px;}
	

}
</style>
<section class="duration1">
	<div class="container">
		<div class="duration-content">
			<div class="row">
				<h2>GIVE WINGS TO YOUR DREAMS</h2>
				<p class="shd1 mt-4">Become a part of <span style="font-weight:600;">India's Top Ranked</span> Film, Media & Arts University.</p>
				<p class="mt-4">AAFT is a global pioneer in facilitating media and arts education since more than 27 years. We offer 50+ professional courses in the disciplines of Cinema, Fashion, Journalism and Mass Communication, Animation, Advertising, Music, Dance, Event Management, Digital Marketing, DJ, Interior Design and many more. We have successfully trained more than 20,000 students from 180+ countries till date.</p>
				<a href="#enquire"><button class="btn-info2">Enquire Now</button></a>
			</div>
		</div>
		<div id="courses"></div>
	</div>	
</section>

<style>
	.excellence{padding: 40px 10px; background-color: #FFF5F2;}	
	.excellence .info_g{text-align: center; background-color: #fff; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);}
	.excellence .shd{text-align:center; background-color:#ed3237; padding:5px; width:100%;color:#ffffff; font-size:20px; font-weight:600;}
	.excellence .info_g img{width: 100%; padding:10px;}
	.excellence h2{font-size: 30px; line-height: 50px; margin-bottom: 10px; text-align:center; color:#ed3237;}
	.excellence p{margin-bottom: 30px; color: #434343; font-size: 14px; padding-top: 10px;}
	.info_g p{color:#38498b; font-size:18px; font-weight:600; padding:5px; height:70px;}
	.excellence .cntr{text-align:center; padding:20px 0;}
	.excellence .itm{margin-bottom: 20px;}
	.excellence .brdr{width:150px; text-align:center; border-top:5px dashed #38498b; margin: auto; margin-bottom: 20px;}
	@media only screen and (max-width: 600px)
	{
	.info_g p{color: #38498b; font-size: 14px; font-weight: 600; padding: 5px; height: 85px;}
	}
</style>
<section class="excellence">
	<div class="container">
		<h2>Courses We Offer</h2>
		<div class="brdr"></div>
		<p class="shd">DIPLOMA, UG AND PG COURSES</p>
		<div class="row">
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
					<img src="assets/img/shiksha-v1/cinema.gif" alt="">
					<p>CINEMA</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/interior.gif" alt="">
					<p>INTERIOR DESIGN</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/digital.gif" alt="">
					<p>DIGITAL MARKETING</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/journalism.gif" alt="">
					<p>JOURNALISM & MASS COMMUNICATION</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
					<img src="assets/img/shiksha-v1/management.gif" alt="">
					<p>MANAGEMENT</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/animation.gif" alt="">
					<p>ANIMATION</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/advertising.gif" alt="">
					<p>ADVERTISING, PR & EVENTS</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/health.gif" alt="">
					<p>HEALTH & WELLNESS</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
					<img src="assets/img/shiksha-v1/music.gif" alt="">
					<p>PERFORMING ARTS</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/fashion.gif" alt="">
					<p>FASHION DESIGN</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/photography.gif" alt="">
					<p>PHOTOGRAPHY</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/hospitality.gif" alt="">
					<p>HOSPITALITY & TOURISM MANAGEMENT</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/finearts.gif" alt="">
					<p>FINE ARTS</p>
				</div>
			</div>
			<div class="col-sm-3 itm col-6">
				<div class="info_g">
				<img src="assets/img/shiksha-v1/law.gif" alt="">
					<p>LAW</p>
				</div>
			</div>
		</div>
		<div class="cntr" id="why"><a href="#enquire"><button class="btn-info2">Enquire Now</button></a></div>
	</div>	
</section>


<style>
		.advantage{padding: 40px 10px; background-color:#EFEFEF;}
		.advantage .adv-grp{box-shadow: 0px 10px 40px #262D7614; border-radius: 10px; text-align: center; margin-top: 30px; background-color:#ffffff;}
		.advantage h2{margin-bottom: 20px; font-size: 24px; font-weight: 600; text-align: center;}
		.advantage .shd{text-align: center;}
		.advantage .adv-grp img{display: none; margin-bottom: 15px;}
		.advantage .adv-grp .adv-p1{color: #ed3237; font-family: "Roboto", Sans-serif; font-size: 50px; font-weight: 600;}
		.advantage .adv-grp .adv-p2{color: #38498b;font-family: "Roboto", Sans-serif; font-size: 18px; font-weight: 600; line-height: 25px;  height:60px;}
		.advantage .brdr{width:150px; text-align:center; border-top:5px dashed #38498b; margin: auto; margin-bottom: 20px;}
		.advantage .cntr{text-align:center; padding:20px 0;}
		.advantage h2{color:#ed3237; font-family: "RocknRoll One", Sans-serif; font-size: 30px; font-weight: 600;}
		
		@media only screen and (max-width: 600px) {
			.advantage .adv-grp .adv-p2{height: 115px;}
		}
	</style>
<section class="advantage">
	<div class="container">
		<h2>Why Choose AAFT University</h2>
		<div class="brdr"></div>
		<div class="row">
			<div class="col-sm-3 col-6">
				<div class="adv-grp">
					<p class="adv-p1">1</p>
					<p class="adv-p2">1st Dedicated Creative Arts University</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="adv-grp">
					<p class="adv-p1">2</p>
					<p class="adv-p2">UGC & MHRD Approved</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="adv-grp">
					<p class="adv-p1">3</p>
					<p class="adv-p2">28 Acre Campus</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="adv-grp">
					<p class="adv-p1">4</p>
					<p class="adv-p2">Practical-Based Curriculum</p>
				</div>
			</div>
			<div class="col-sm-4 col-6">
				<div class="adv-grp">
					<p class="adv-p1">5</p>
					<p class="adv-p2">Hands-On Projects & Internship Opportunities</p>
				</div>
			</div>
			<div class="col-sm-4 col-6">
				<div class="adv-grp">
					<p class="adv-p1">6</p>
					<p class="adv-p2">Study Tours & Industry Visits</p>
				</div>
			</div>
			<div class="col-sm-4 col-12">
				<div class="adv-grp">
					<p class="adv-p1">7</p>
					<p class="adv-p2">100% Placement Assistance</p>
				</div>
			</div>
		</div>
		<div class="cntr"><a href="#enquire"><button class="btn-info2">Enquire Now</button></a></div>
	</div>
</section>

<style>
	.board{padding: 50px 10px; padding-bottom: 150px; background-image: url(assets/img/shiksha-v1/curve-bg.webp); background-repeat: no-repeat; background-position: bottom; background-size: 100% 200px;}
	.board h2{font-size: 30px; line-height: 50px; margin-bottom: 10px; text-align:center; color:#ed3237;}
	.board .brdr{width:150px; text-align:center; border-top:5px dashed #38498b; margin: auto; margin-bottom: 20px;}
	.board .grp1 img{width:100%; border-style: solid; border-width: 5px 5px 5px 5px; border-color: #efefef; border-radius: 100px; transition-duration: 0.3s;}
	.board .grp1{text-align:center;}
	.board .grp1 p{margin-bottom: 0;}
	.board .brd{display:flex; flex-wrap: wrap; justify-content: space-between;}
	.board .nm{color:#38498b; font-size:18px; font-weight:600;}
	.board .des{color:#ed3237; font-size:16px; font-weight:600;}
	@media only screen and (max-width: 600px) {
		.board .grp1 img{width:45%;	}
		.board .grp1{margin-bottom:20px;}			
		}
	</style>
<section class="board">
	<div class="container">
		<h2>Board of Directors</h2>
		<div class="brdr mb-5"></div>
		<div class="row brd">
			<div class="col-sm-2">
				<div class="grp1">
					<img src="assets/img/shiksha-v1/sandeepmarwah.jpg" alt="">
					<p class="nm">Sandeep Marwah</p>
					<p class="des">(Founder & President)</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="grp1">
					<img src="assets/img/shiksha-v1/boneykapoor.jpg" alt="">
					<p class="nm">Boney Kapoor</p>
					<p class="des">(Renowned Film Producer)</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="grp1">
					<img src="assets/img/shiksha-v1/anilkapoor.jpg" alt="">
					<p class="nm">Anil Kapoor</p>
					<p class="des">(Renowned Actor)</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="grp1">
					<img src="assets/img/shiksha-v1/sonamkapoor.jpg" alt="">
					<p class="nm">Sonam Kapoor</p>
					<p class="des">(Renowned Actress)</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="grp1">
					<img src="assets/img/shiksha-v1/mohitmarwah.jpg" alt="">
					<p class="nm">Mohit Marwah</p>
					<p class="des">(Renowned Actor & MD - AEG)</p>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.highlight{padding: 10px 10px 50px 10px; background-color:#efefef;}
	.highlight h2{font-size: 30px; line-height: 50px; margin-bottom: 10px; text-align:center; color:#ed3237;}
	.highlight .brdr{width:150px; text-align:center; border-top:5px dashed #38498b; margin: auto; margin-bottom: 70px;}
	.highlight .hlt {background-color:#ffffff; border-radius:20px; padding:5px; position:relative; text-align:center; margin-bottom:60px;}
	.highlight .hlt img{position: absolute; top: -60px; left: 15px; width: 222px;}
	.highlight .count{margin-top:20px; margin-bottom:0px; color: #ED3237;font-size: 30px; font-weight: 900;}
	.highlight .ctxt{color: #54595F; font-size: 18px; font-weight: 600; height:50px;}
	
		@media only screen and (max-width: 600px) {
			.highlight .hlt {margin-bottom:50px;}
			.highlight .hlt img{position: absolute; top: -50px; left: -20px; width: 190px;}	
			.highlight .ctxt{height:70px;}
						
		}
	</style>
<section class="highlight">
	<div class="container">
		<h2>AAFT Group Highlights</h2>
		<div class="brdr"></div>
		<div class="row brd">
			<div class="col-sm-3 col-6">
				<div class="hlt">
					<img src="assets/img/shiksha-v1/books.png" alt="">
					<p class="count">30</p>
					<p class="ctxt">Years in Education</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="hlt">
					<img src="assets/img/shiksha-v1/flag.png" alt="">
					<p class="count">120+</p>
					<p class="ctxt">Countries Students Enrolled</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="hlt">
					<img src="assets/img/shiksha-v1/trophy.png" alt="">
					<p class="count">400+</p>
					<p class="ctxt">Awards & Accolades</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="hlt">
					<img src="assets/img/shiksha-v1/faculty.png" alt="">
					<p class="count">200+</p>
					<p class="ctxt">Faculties</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-6">
				<div class="hlt">
					<img src="assets/img/shiksha-v1/celebinter.png" alt="">
					<p class="count">1000+</p>
					<p class="ctxt">Celebrity Interactions</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="hlt">
					<img src="assets/img/shiksha-v1/graduate.png" alt="">
					<p class="count">19000+</p>
					<p class="ctxt">Alumni Network</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="hlt">
					<img src="assets/img/shiksha-v1/vcamera.png" alt="">
					<p class="count">2300+</p>
					<p class="ctxt">Short Films Produced</p>
				</div>
			</div>
			<div class="col-sm-3 col-6">
				<div class="hlt">
					<img src="assets/img/shiksha-v1/faculty.png" alt="">
					<p class="count">50+</p>
					<p class="ctxt">International Faculties</p>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.films{padding: 10px 10px 50px 10px; background-color:#efefef;}
	.films h2{font-size: 30px; line-height: 50px; margin-bottom: 10px; text-align:center; color:#ed3237;}
	.films .brdr{width:150px; text-align:center; border-top:5px dashed #38498b; margin: auto; margin-bottom: 70px;}
		@media only screen and (max-width: 600px) {
			
						
		}
	</style>
<section class="films">
	<div class="container">
		<h2>Our Inspirational Films</h2>
		<div class="brdr"></div>
		<div class="row">
			<div class="col-sm-6">
				<iframe width="100%" height="303" src="https://www.youtube.com/embed/zWNktMwSceo" title="AAFT | Signature Film" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<div class="col-sm-6">
				<iframe width="100%" height="303" src="https://www.youtube.com/embed/bgKbzBOf6U4" title="AAFT | Aspirational Film" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
		</div>
		<div id="faq"></div>
	</div>
</section>


<style>
	.faq-sec{padding: 50px 10px;}
	.faq-sec h2{font-size: 30px; line-height: 50px; margin-bottom: 10px; text-align:center; color:#ed3237;}
	.faq-sec .card{box-shadow: 0px 8px 12px #0000000D;border-radius: 10px; margin-bottom: 20px;}
	.faq-sec .accicon{float: right;}
	.faq-sec .card-header:not(.collapsed) .rotate-icon { transform: rotate(180deg); }
	.faq-sec [data-toggle="collapse"] i:before {  content: "\f068";}
  	.faq-sec [data-toggle="collapse"].collapsed i:before {content: "\f067";}
	.faq-sec .brdr{width:150px; text-align:center; border-top:5px dashed #38498b; margin: auto; margin-bottom: 70px;}
	.faq-sec .card-header:not(.collapsed) {color: #ffffff; background-color:#38498b;}
	.faq-sec .card-header:hover{color: #ffffff; background-color:#38498b;}
	.faq-sec .accordion .card .fas {
    font-size: 14px;
    color: #43434380;
}
	@media only screen and (max-width: 600px) {
			
						
		}
	</style>	
	
	
<section class="faq-sec">
	<div class="container">
		<h2>Admission Process</h2>
		<div class="brdr"></div>		
		<div class="accordion" id="accordionExample22">
			<div class="card">
				<div class="card-header" data-toggle="collapse" data-target="#collapseOne22" aria-expanded="true">     
					<span class="title">Step 1: Application Form</span>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
				</div>
				<div id="collapseOne22" class="collapse show" data-parent="#accordionExample22">
					<div class="card-body">
						<ul>
							<li>The first step to enrolling in our Interior Designing course is to fill out an Application Form which can be downloaded for free from our website or can be collected from our campus.</li>
						</ul>
					</div>
				</div>
			</div>
			
		<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree22" aria-expanded="false">
				<span class="title">Step 2: AAFT Global Entrance Exam- Online Test</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseThree22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>After submitting the Application Form, the aspirants are required to undertake AAFT GEE (AAFT Global Entrance Exam). The Online Aptitude Test is free for the candidates and is based on the course or the speciality applied for.</li>
					</ul>
				</div>
			</div>
		</div>
			<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour22" aria-expanded="false">
				<span class="title">Step 3: AAFT Global Entrance Exam- Personal Interview</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseFour22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>The next and final step in AAFT GEE is a Personal Interview (direct or online). Once you have successfully cleared the Online Test, you will have to submit the registration amount of Rs. 15,600 before the final interview.<br>Note: If you clear the interview, this registration amount will be adjusted in your fees. In case you do not clear the final interview, the amount will be refunded.</li>
					</ul>
				</div>
			</div>
		</div>
			<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFive22" aria-expanded="false">
				<span class="title">Step 4: Seat Booking</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseFive22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>Once you successfully clear the final interview, you must submit the nominal booking amount to secure your seat.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSix22" aria-expanded="false">
				<span class="title">Step 5: Admission Confirmation</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseSix22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>After making the payment for the seat, the candidate will be provided with the Admission Letter from the Admissions Department confirming his/her admission to the opted program. After this, the candidate is required to submit the 1st-semester fees as per his/ her plan within a week.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSeven22" aria-expanded="false">
				<span class="title">Step 6: Documents Submission</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseSeven22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>The candidates will then be required to submit the educational certificates and other requisite documents, as conveyed by the Admissions Manager.<br>It is mandatory for the applicants to get the Receipt-cum-Acknowledgement duly signed by the Admissions Department.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<style>
.footer1 {padding:40px 10px; background-color:#ed3237; color:#ffffff; text-align:center;}
.footer1 .btn-info2 {background-color: #ffffff; color: #ed3237; padding: 10px; width: 200px; border: none;}
.footer1 p{font-weight:600;}
</style>	
<section class="footer1">
	<div class="container">
		<h2>Do You Know?</h2>
		<p>70% of AAFT students acquire capabilities and skills to get employed as soon as they complete their course.</p>
		<div class="cntr"><a href="#enquire"><button class="btn-info2">Enquire Now</button></a></div>
	</div>
</section>

	
<style>
.footer-sec { background: #000000; text-align:center; padding: 10px 0;}
.footer-sec p{text-align:center; color:#e2e2e2;}
@media only screen and (max-width: 600px) {
	.footer-sec{margin-bottom: 40px;}	
						
		}

</style>	
<section class="footer-sec">
	<div class="container">
	<p>©2025 AAFT University. All Rights Reserved.</p>
	</div>
</section>	
	
	
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a91a27e46f.js" crossorigin="anonymous"></script>	

<script>
	var swiper = new Swiper(".learner", {
		spaceBetween: 30,
      centeredSlides: true,
		loop:true,
		pagination: {
			el: ".iswiper-pagination",
			clickable: true,
		  },
		  navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		  },
		autoplay: {
			delay: 3500,
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
	
<script>
	var swiper = new Swiper(".why", {
		spaceBetween: 30,
        
		loop:true,
		pagination: {
			el: ".iswiper-pagination",
			clickable: true,
		  },
		  navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
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
	
<script>
	var swiper = new Swiper(".media", {
		 spaceBetween: 30,
      centeredSlides: true,
		loop:true,
		pagination: {
			el: ".iswiper-pagination",
			clickable: true,
		  },
		  navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		  },
		autoplay: {
			delay: 3500,
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

<?php include('inc/contact-details-phd3.php'); ?>	
<?php include('inc/form-scripts.php'); ?>
<?php include('inc/footer-script.php'); ?>
	
</body>
</html>