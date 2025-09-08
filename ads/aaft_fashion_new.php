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
<title>Fashion Design course in india | AAFT University </title>
<meta name="description" content="AAFT University offers a top Fashion Design course in India. Gain hands-on experience, industry exposure, and shape your future in fashion today.">
  <meta name="keywords" content="Fashion Design course in india">
<?php include('inc/header-script.php'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	
<style>
input.register-input-box, select.register-input-box {color: #b3b3b3!important;}
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
			<li><a href="#about" onClick="menuHide()">About Program</a></li>
			<li><a href="#recognition" onClick="menuHide()">Recognition</a></li>
			<li><a href="#overview" onClick="menuHide()">Program Overview</a></li>
			<li><a href="#apply" onClick="menuHide()">How To Apply</a></li>
			<li><a href="#infrastructure" onClick="menuHide()">Infrastructure</a></li>
			<li><a href="#faq" onClick="menuHide()">FAQ</a></li>
			
		</ul>
		<img src="assets/img/univ-logo.webp" title="AAFT | School of bba" alt="AAFT | School of bba" class="img-fluid lplogo">
				
		<a class="d-none" style="background: #ED3237; color:#ffffff;text-align: center; padding: 10px 12px; border-radius: 4px; font-weight: bold; text-decoration: none; order:3;">
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

<style>

	h2{font-weight: 600;}
	:root {
		--swiper-theme-color: #020202;}
		
	.banner-area{background-color: #000; color:#fff;padding: 30px 10px 50px 10px; margin-top:70px; background-image: url("assets/img/fashion-v2/fashion-banner-desk.webp"); background-repeat: no-repeat; background-position: top; background-size: contain;}
	.banner-area .b-sec{display: flex; align-items: center;}
	
	.banner-area .enq-btn {color:#fff;width: 300px; height: 50px; background-color: #FF500D; text-align: center; padding: 5px;border: 1px solid #FFFFFF; border-radius: 5px; margin-bottom: 20px;}
	.banner-area .down-btn {width: 300px; height: 50px;background-color: transparent;text-align: center; padding: 5px;border: 1px solid #FFFFFF; border-radius: 5px; color:#fff;}
	.banner-area .hr1{color:#fff; font-size: 18px;}
	.banner-area .hr2{color:#BCBCBC; }
	.banner-area p{margin:0px; padding: 0px;}
	.banner-area .hr3{margin:20px 0;}
	.banner-area .left-area h1{font-size: 24px; margin-top: 20px;}
	
    
    input[type=text], input[type=email], input[type=tel], select, input[type=submit]{height: 40px!important; width:100%!important;  background-color: #FFFFFF10!important; border:1px solid #FFFFFF40!important; border-radius: 5px!important; font-size: 14px; color:#b3b3b3!important; padding: 0 19px;}
    input[type=submit]{background-color: #DC3545!important; color:#fff!important; padding: 5px!important;}
	::-webkit-input-placeholder { color: #b3b3b3!important;}
	select { color: #b3b3b3!important;}
	option {color: #b3b3b3!important; background-color: rgba(59,59,59,0.90)!important;}
	
	.banner-area .hr2 {background-color: #ED3237; padding: 10px; width: fit-content; text-align: center;border-radius: 20px; color: #fff; font-size:12px;}
    .home_form_lp{background-color:#F2F4F6;}
	
    .form-btn-wrap {padding: 0;}
	.banner-area p{font-size: 16px; color: #FFFFFF;}
	.left-area h3{font-size: 15px; font-weight: bold;}
	.left-area img{background-color: #FFFFFF; padding: 10px; width: 80px; border-radius: 5px;}
	.banner-area .right-area{padding:20px;	background: #5050507d;border-radius: 10px; backdrop-filter: blur(10px);}
	.right-area p{font-size: 12px;color: #FFFFFF90;	}
	.right-area h2{	font-size: 20px;}
	.right-area .form-group {margin-bottom: 5px;}
	
	@media screen and (max-width: 1366px) and (min-width: 769px) {
		.banner-area {padding: 50px 10px 40px 10px;}
	}

	@media only screen and (max-width: 600px) {
		.banner-area .right-area{text-align:center; padding:0px;}
		.banner-area .hr1{display: none;}
		.banner-area .b-sec{padding-top: 150px;}
		.banner-area{background-color: #000; color:#fff; padding: 100px 0px; background-image: url("assets/img/fashion-v2/fashion-banner-mob.webp"); background-repeat: no-repeat; background-position: unset; background-size: unset;}
		}
</style>	
	
<section class="banner-area">
	<div class="container">
		<div class="row b-sec">
			<div class="col-sm-6">
				<div class="left-area">
					<img src="assets/img/mba-v2/ugc.png" alt="">
					<h1>Fashion Design Programs| AAFT University, Raipur</h1>
					<div class="hr2">
						<p>Enroll for - July 2025 Batch</p>
					</div>
					<p class="hr3">Unlock Your Creative Runway with Fashion Design Courses At AAFT University</p>
					<h3>On-campus program for July 2025 Batch at AAFT University</h3>
				</div>
			</div>
			<div class="col-sm-2 hide1366"></div>
			<div class="col-sm-4"><div id="enquire" style="height:30px; margin-bottom:40px;"></div>
				<div class="right-area">
					<hr class="d-block d-sm-none"/>
					<?php
					$pageOption="Fashion";
					$schoolOption="School of Fashion Design";
					/* $courseOption= '<option value="B.Des Fashion Design">B.Des Fashion Design</option><option value="B.Sc Fashion Design">B.Sc Fashion Design</option><option value="M.Des Fashion Design">M.Des Fashion Design</option><option value="Diploma in Fashion Design">Diploma in Fashion Design</option>'; */
					$courseOption= '<option value="B.Des Fashion Design">B.Des Fashion Design</option>';					
					include('inc/form-new.php');
					?>	
				</div>
			</div>
		</div>
	</div>	
</section>

<style>
.duration1 {background: #ffffff; box-shadow: 0px 3px 30px #00000014 !important; color:#2D2D2D; padding: 30px 30px 20px 30px; margin-bottom: 30px; }
.duration1 p{font-size: 16px; font-weight: 700;}
.duration1 h5{font-size: 14px;}
.duration1 .notice1{justify-content: space-between;}
	
@media only screen and (max-width: 600px)
{
	.duration1{margin-top: 0px; padding: 10px; background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(255,245,242,1) 50%, rgba(255,245,242,1) 100%); height:250px; position: relative; box-shadow: none;}
	.duration1 .duration-content{background-color: #fff; border-radius: 20px; padding: 25px; padding-top: 35px;
    position: absolute;
    top: -50px;
    margin-left: -5px;
    box-shadow: 0px 3px 30px #00000029;
    margin-right: 20px;
	padding-top: 35px;}
	.duration .duration-content div[class*='item']{margin-bottom: 20px;}
	

}
</style>
<section class="duration1">
	<div class="container">
		<div class="duration-content">
			<div class="row notice1">
				<div class="col-sm-2 col-6">
					<div class="item1"><h5>Duration</h5><p>2/3/4 Years</p></div>
				</div>
				<div class="col-sm-2 col-6">
					<div class="item2"><h5>Location</h5><p>Raipur</p></div>
				</div>
				<hr/ class="d-block d-sm-none" style="width:92%;">
				<div class="col-sm-2 col-6">
					<div class="item4"><h5>Easy Education Loan</h5><p>Easy Education Loan Available</p></div>
				</div>
				<div class="col-sm-2 col-6">
					<div class="item5"><h5>Placements</h5><p>100% Assistance</p></div>
				</div>
				<hr/ class="d-block d-sm-none" style="width:92%;">
				<div class="col-sm-2 col-6">
					<div class="item6"><h5>Eligibility</h5><p style="font-size: 14px;">10+2</p></div>
				</div>
				<div class="col-sm-2 col-6">
					<div class="item6"><h5>Hostel Facility</h5><p style="font-size: 14px;">Available</p></div>
				</div>

			</div>
		</div>
		<div id="about"></div>
	</div>	
</section>

<style>
	.program1 {background-color: #FFFFFF; padding:40px 10px;}
	.program1 .main-div{display: flex; align-items: center;}
	.program1 h2{font-size: 24px; line-height: 50px;}
	.program1 .prog-info{display: flex; align-items: center; margin-top:5px;}
	.program1 .icon-part img{width: 60px;}
	.program1 .text-part{ margin-left: 20px; padding: 20px 10px 0 0;}
	.program1 .text-part .top-title { margin-bottom: 0;}
	.program1 .text-part .top-title{font-weight: 600;font-size: 18px;}
	.program1 .prog-info2{padding: 30px; background-color: #ffffff; border-radius: 20px; border: 1px solid #F84808;}
	.program1 .brdr{border: 1.5px solid #F8480870; width: auto; margin: 0 auto;}
	.prog-info2 h3{font-size: 18px; font-weight: bold;}
	.prog-info2 ul{margin: 0; padding: 0 20px;}
	.prog-info2 ul li{font-size: 14px;}
	
</style>
	
<section class="program1">
	<div class="container">
		<div class="progList mb-5">
			<div class="row">
				<div class="col-sm-5">
					<h2>Degree Programs</h2>
					<ul>
						<li>B.Sc. in Fashion Design</li>
						<li>Bachelor of Design in Fashion Design</li>
						<li>Master of Design in Fashion Design</li>
					</ul>
				</div>
				<div class="col-sm-2"><div class="d-none d-sm-block" style="height: 100px; width: 2px; border-left:2px solid #d1cbcb; margin-top: 20px;"></div></div>
				<div class="col-sm-5">
					<h2>Diploma Programs</h2>
					<ul>
						<li>Diploma in Fashion Design</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="about">
			<h2>About the AAFT School of Fashion Design</h2>
			<p>AAFT offers specialization degree courses in fashion design, fashion communication, jewelry design, fashion communication, and textile design. We aim to provide hands-on experience to students through extensive training that matches international standards, preparing them to face future industry challenges with confidence.</p>
		</div>
		<div class="row main-div">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<div class="prog-info">
							<div class="icon-part">
								<img src="assets/img/mba-v2/icon1.png" alt="">
							</div>
							<div class="text-part">
								<p class="top-title">Learn from the best</p>
								<p>World-class faculty with real-world experience </p>
							</div>
						</div>	
						<div class="brdr"></div>
					</div>
					<div class="col-sm-6">
						<div class="prog-info">
							<div class="icon-part">
								<img src="assets/img/mba-v2/icon1.png" alt="">
							</div>
							<div class="text-part">
								<p class="top-title">Easy Education Loan</p>
								<p>Easy Education Loan Options are Available</p>
							</div>
						</div>
						<div class="brdr"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="prog-info">
							<div class="icon-part">
								<img src="assets/img/mba-v2/icon1.png" alt="">
							</div>
							<div class="text-part">
								<p class="top-title">Hands-on training</p>
								<p>Practical projects and simulations to apply your skills</p>
							</div>
						</div>	
						<div class="brdr"></div>
					</div>
					<div class="col-sm-6">
						<div class="prog-info">
							<div class="icon-part">
								<img src="assets/img/mba-v2/icon1.png" alt="">
							</div>
							<div class="text-part">
								<p class="top-title">Build your network</p>
								<p>Connect with ambitious professionals</p>
							</div>
						</div>	
						<div class="brdr"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="prog-info">
							<div class="icon-part">
								<img src="assets/img/mba-v2/icon1.png" alt="">
							</div>
							<div class="text-part">
								<p class="top-title">Customize your path</p>
								<p>Tailor your Fashion Design experience to fit your career goals</p>
							</div>
						</div>
						<div class="brdr d-sm-none d-block"></div>
					</div>
					<div class="col-sm-6">
						<div class="prog-info">
							<div class="icon-part">
								<img src="assets/img/mba-v2/icon1.png" alt="">
							</div>
							<div class="text-part">
								<p class="top-title">Career support</p>
								<p>Advance your career with 100% placement assistance</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-sm-4">
				<div class="prog-info2">
					<h3>Key Takeaways</h3>
					<div class="grid-container">
					  <ul style="color:#000;">
						<li>Curriculum as per the Latest Industry Trends</li>
						<li>Master Workshops by Renowned Fashion Designers</li>
						<li>In-house fashion design studios and jewelry design stations</li>
						<li>Design for in-house short films and web series</li>
						<li>Internship Opportunities</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="recognition"></div>
	</div>	
</section>

<style>
	.excellence{padding: 40px 10px; background-color: #FFF5F2;}	
	.excellence .info_g{padding: 15px; text-align: center; background-color: #fff; border:1px solid #ED1B24; border-radius: 20px;}
	.excellence .info_g img{width: 110px;}
	.excellence h2{font-size: 24px; line-height: 50px; margin-bottom: 10px;}
	.excellence p{margin-bottom: 30px; color: #434343; font-size: 14px; padding-top: 10px;}
	.info_g p{color: #ED1B24; font-size: 14px; padding-top: 10px; margin-bottom: 0;}
	.excellence .itm{margin-bottom: 20px;}
</style>
<section class="excellence">
	<div class="container">
		<h2>Recognized for Excellence!</h2>
		<p>Our Fashion program is accredited by prestigious organizations, ensuring the highest standards of quality and value in business education.</p>
		<div class="row">
			<div class="col-sm-3 itm">
				<div class="info_g">
					<img src="assets/img/mba-v2/ugc.png" alt="">
					<p>UGC Approved</p>
				</div>
			</div>
			<div class="col-sm-3 itm">
				<div class="info_g">
					<img src="assets/img/mba-v2/mhrd.png" alt="">
					<p>MHRD</p>
				</div>
			</div>
			<div class="col-sm-3 itm">
				<div class="info_g">
					<img src="assets/img/mba-v2/cg.png" alt="">
					<p>Chhattisgarh State</p>
				</div>
			</div>
			<div class="col-sm-3 itm">
				<div class="info_g">
					<img src="assets/img/mba-v2/gr.png" alt="">
					<p>Gazette Notification</p>
				</div>
			</div>
		</div>
	</div>	
</section>
	
<style>
	
	.course-info{background-color: #233F7B; padding: 20px 10px;}
	.course-info button{color:#fff; background-color: #ED3237; text-align: center; width: 200px; height: 40px; padding: 5px; border-radius: 10px; border: none;}
	.course-info .info22{color:#ffffff; font-size: 22px;}
	.course-info p{color:#ffffff;}
	.course-info .info-top {display: flex; align-items: center;}
	.course-info {background-image: url("assets/img/mba-v2/shape1.png"), url("assets/img/mba-v2/shape2.png"); background-repeat: no-repeat, no-repeat; background-position: bottom left, bottom right;}

</style>

<section class="course-info">
	<div class="container">
		<div class="row info-top">
			<div class="col-sm-9">
				<p class="info22">Learn to stand out in the Fashion Industry!</p>
				<p>At AAFT University, we stress more on practical knowledge and the latest industry trends</p>
			</div>
			<div class="col-sm-3">
				<a href="#enquire"><button>Inquire Now</button></a>
			</div>
		</div>
	</div>	
</section>
	
	
	<style>
		.advantage{padding: 40px 10px;}
		.advantage .adv-grp{box-shadow: 0px 10px 40px #262D7614; border-radius: 10px; padding: 20px 20px 0px 20px; text-align: center; margin-top: 30px;}
		.advantage h2{margin-bottom: 20px; font-size: 24px; font-weight: 600; text-align: center;}
		.advantage .shd{text-align: center;}
		.advantage .adv-grp img{display: none; margin-bottom: 15px;}
		.advantage .adv-grp .adv-p1{margin-bottom: 0px; font-weight: 600;font-size: 20px;margin-bottom: 10px;}
		.advantage .brdr{border: 1.5px solid #F84808; width: 75px; margin: 0 auto;}
		
		@media only screen and (max-width: 600px) {
			
		}
	</style>
<section class="advantage">
	<div class="container">
		<h2>The AAFT Advantage</h2>
		<p class="shd">At AAFT University, we equip you with cutting-edge training and unprecedented opportunities, paving the way for your future success.</p>
		<div class="row">
			<div class="col-sm-3">
				<div class="adv-grp">
					<img src="assets/img/mba-v2/diploma.webp" alt="">
					<p class="adv-p1">INR 4.2 LPA</p>
					<p>Minimum CTC offered </p>
					<div class="brdr"></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="adv-grp">
					<img src="assets/img/mba-v2/diploma.webp" alt="">
					<p class="adv-p1">250+</p>
					<p>Industry Expert Mentor</p>
					<div class="brdr"></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="adv-grp">
					<img src="assets/img/mba-v2/diploma.webp" alt="">
					<p class="adv-p1">30000+</p>
					<p>Alumni Network</p>
					<div class="brdr"></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="adv-grp">
					<img src="assets/img/mba-v2/diploma.webp" alt="">
					<p class="adv-p1">120+</p>
					<p>Companies Hire From Us</p>
					<div class="brdr"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="overview"></div>
</section>

<!--
<style>
	.about_prog{padding: 20px 10px 50px 10px;}
	
	.about_prog .card{box-shadow: 0px 8px 12px #0000000D;border-radius: 10px; margin-bottom: 20px;}
	.about_prog .accicon{float: right;}
	.about_prog .s_head{margin-bottom: 40px;}
	.about_prog .card-header:not(.collapsed) .rotate-icon { transform: rotate(180deg); }
	.about_prog [data-toggle="collapse"] i:before {  content: "\f068";}
  	.about_prog [data-toggle="collapse"].collapsed i:before {content: "\f067";}
	.about_prog .accordion .card .fas {font-size: 14px; color: #43434380;}
	.about_prog .c_crs {color:#ED1B24; font-weight: bold;}
	.about_prog .c_content {min-height: 270px; padding:30px; margin-bottom: 20px; background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 0px 8px 12px #0000000D; border-radius: 10px;}
	.about_prog .card-header {background-color: rgba(0,0,0,.00);}
	
	
	@media only screen and (max-width: 600px) {
		.desktop{display: none;}
	}
	</style>	
	
	
<section class="about_prog">
	<div class="container">
						
		<div class="accordion d-sm-none d-block" id="accordionExample2">
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-header" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true">     
							<span class="title">Generation of Concepts</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>The generation of ideas and an awareness of the steps involved in the design process that cover time management, the generation of unique concepts, and sustainability.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">     
						<span class="title">Brushing Up of Skill </span>
						<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseTwo2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>Creating garments for a design collection involves a meticulous process that brings together creativity, technical expertise, and attention to detail. Designers start with sketches and fabric selection, followed by pattern making, sample creation, and multiple rounds of fittings and adjustments to achieve the desired aesthetic.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false">
							<span class="title">Creative Designing: Tools to Trend</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseThree2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>Designing posters and fashion illustrations digitally offers artists and designers a range of creative possibilities. With digital tools and software, they can experiment with various colors, textures, and effects to bring their ideas to life.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="false">
							<span class="title">Collaboration and Communication </span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseFour2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>Compiling a portfolio of the best works involves selecting and organizing the most impactful and representative pieces to showcase an artist's or designer's skills, style, and creativity.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFive2" aria-expanded="false">
							<span class="title">Understanding of Concepts</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseFive2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>Learning to style a look as per a specific theme or occasion involves understanding the desired aesthetic, considering appropriate clothing, accessories, and grooming choices.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSix2" aria-expanded="false">
							<span class="title">Preparing to Reign</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseSix2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>A dissertation based on an internship in any sector of the fashion industry explores practical experiences and industry insights gained during the internship.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		
		<div class="row desktop">
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Generation of Concepts</p>
					<p class="c_dtl">The generation of ideas and an awareness of the steps involved in the design process that cover time management, the generation of unique concepts, and sustainability.</p>
					<br>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Brushing Up of Skill</p>
					<p class="c_dtl">Creating garments for a design collection involves a meticulous process that brings together creativity, technical expertise, and attention to detail. Designers start with sketches and fabric selection, followed by pattern making, sample creation, and multiple rounds of fittings and adjustments to achieve the desired aesthetic.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Creative Designing: Tools to Trend</p>
					<p class="c_dtl">Designing posters and fashion illustrations digitally offers artists and designers a range of creative possibilities. With digital tools and software, they can experiment with various colors, textures, and effects to bring their ideas to life.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Collaboration and Communication</p>
					<p class="c_dtl">Compiling a portfolio of the best works involves selecting and organizing the most impactful and representative pieces to showcase an artist's or designer's skills, style, and creativity.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Understanding of Concepts</p>
					<p class="c_dtl">Learning to style a look as per a specific theme or occasion involves understanding the desired aesthetic, considering appropriate clothing, accessories, and grooming choices.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Preparing to Reign</p>
					<p class="c_dtl">A dissertation based on an internship in any sector of the fashion industry explores practical experiences and industry insights gained during the internship.</p><br>
				</div>				
			</div>
			
		</div>
		<div id="overview"></div>
	</div>
</section>

-->

	<style>
		.syllabus{padding: 40px 10px; background-color: #ffffff;}
		.syllabus .card-header:not(.collapsed) .rotate-icon { transform: rotate(180deg); }
		.syllabus .accicon {font-weight: 900;position: absolute; top: 20px; right: 20px;}
		.syllabus .accordion>.card>.card-header {position: relative; background-color: rgb(0 0 0 / 0%);}
		.syllabus .accordion>.card>.card-header p{margin-top: 10px; margin-bottom: 0px; color: #a3a3a3;font-size: 14px;}
		.syllabus .accordion>.card>.card-header .title{font-weight: 700;}
		.syllabus .accordion .card li{font-size: 14px; color: #434343;}
		.syllabus .accordion .card .fas{font-size: 14px; color: #43434380;}
		.syllabus .bbttnn{margin-bottom: 40px; display: flex; font-size: 14px; justify-content: space-between; align-items: center; background-color: #FFF1F1; padding-left: 15px; border-radius: 5px; overflow: hidden;}
		.syllabus .btn-info2{background-color: #ED3237; color:#fff; padding:10px; width: 200px; border: none;}
		.syllabus .btn11 .red{color:#F84808; font-weight: 700;margin-left: 10px; margin-right: 10px;}
		.syllabus .btn11{display: flex; margin-bottom: 10px;}
		.syllabus .card {box-shadow: 0px 8px 12px #0000000D; border-radius: 10px; margin-bottom: 20px; border:none;}
		.syllabus h2{font-size: 24px; text-align: center;}
		.syllabus .shd{text-align: center; margin-bottom: 30px;}
		.syllabus [data-toggle="collapse"] i:before {  content: "\f068";}
  		.syllabus [data-toggle="collapse"].collapsed i:before {content: "\f067";}
		/*.syllabus .fas {background: #0000000D 0% 0% no-repeat padding-box; border: 1px solid #7c7c7c; border-radius: 100px; color:#7c7c7c; font-size: 14px; width: 100px; height: 30px; padding: 7px; text-align: center; font-family: Gotham; }*/
		.syllabus .nav-link{border:none;  margin-right: 10px; padding:5px 15px; text-align: center; color: #ED3237; }
		.syllabus .nav-tabs .nav-item.show .nav-link,.syllabus .nav-tabs .nav-link.active {background-color:#00000000; border:none; border-bottom: 2px solid #ff0000; color: #ED3237;}
		.syllabus .nav-tabs {margin-bottom: 10px; border-bottom: 0px solid #dee2e6;}
		.syllabus .nav-item{padding-bottom: 5px;}
		@media only screen and (max-width: 600px) {
			.syllabus .bbttnn{flex-wrap: wrap; flex-direction: column;}
						
		}
	</style>
<script src="https://kit.fontawesome.com/a91a27e46f.js" crossorigin="anonymous"></script>		
<section class="syllabus">
	<div class="container">
		<h2>Learning Outcomes </h2>
		<p class="shd">Explore the roadmap to success with our comprehensive syllabus, carefully crafted to guide you towards mastery.</p>
		<div class="bbttnn">
			<div class="btn11">Master classes & Workshops: <span class="red"> 15+ </span> <span class="d-sm-block d-none"> | </span></div> 
			<div class="btn11">Industry Visits: <span class="red"> 10+ </span> <span class="d-sm-block d-none"> | </span></div>
			<div class="btn11">Celebrity Interactions: <span class="red"> 15+ </span> <span class="d-sm-block d-none"> | </span></div>
			<div class="btn11">Projects: <span class="red"> 15+ </span></div>
			<a href="#enquire"><button class="btn-info2">Inquire Now</button></a>
		</div>
		
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
									<li>Student will know about Design and Art</li>
									<li>Getting the Basic knowledge of Drawing </li>
									<li>Comprehensively understand the fundamentals of fashion design.</li>
									<li>Understand and use fashion industry terminology.</li>
									<li>Control the sewing machine and make various stitches, seams & finishes.</li>
									<li>To develop communication and problem-solving skills.</li>

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
									<li>Details of Elements and Principles of Design</li>
									<li>Major goals is to understand Environment and to solve environmental problems.</li>
									<li>Basics of Software </li>
									<li>Students will be able to develop patterns by using the acquired knowledge of patternmaking.</li>
									<li>Creativity and Personality Development </li>
									<li>This Course will develop a ‘design eye’ and keep a mental (or physical) record of interesting ways to use these techniques.</li>

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
									<li>Apply flat pattern and draping pattern making methods to the production of apparel.</li>
									<li>Study And Understand the History of Fashion</li>
									<li>Knowledge of fabric, colors, and style.</li>
									<li>Good communication</li>
									<li>Students will gain practical understanding of different textile materials (Fiber, yarn, fabric).</li>
									<li>Recognize and utilize the techniques used in various Indian textiles for their own design creation.</li>
									<li>Understanding of importance of Fashion Illustration in Fashion Industry so that the student will acquaint with the process of designing which will enhance their creative skills and help them to communicate easily their design ideas.</li>

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
									<li>Development of own individual style.</li>
									<li>Students will be able to examine fashion marketing concepts and phenomenon to current business events in the fashion Industry. </li>
									<li>Training in modern and advanced design software like Corel Draw, Adobe Photoshop and Illustrator.</li>
									<li>Learn the business aspect of the fashion.</li>
									<li>Design Process</li>
									<li>World Fashion History</li>

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
									<li>Design Collection </li>
									<li>To develop knowledge and skills to develop various designed patterns through draping.</li>
									<li>Knowledge about washing, finishing, ironing and others you maintaining a good application of garment for longer time.</li>
									<li>Detailed Garment Construction </li>

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
									<li>Fashion Photography</li>
									<li>Digital Portfolio Development in details</li>
									<li>An internship gives a student the opportunity for career exploration and development, and to learn new skills.</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="course2" role="tabpanel">
				<div class="accordion" id="accordionExample22">
					<div class="card">
						<div class="card-header" data-toggle="collapse" data-target="#collapseOne22" aria-expanded="true">     
							<span class="title">Semester 1</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseOne22" class="collapse show" data-parent="#accordionExample22">
							<div class="card-body">
								<ul>
									<li>Design concept and methodology of fashion.</li>
									<li>Creation of varieties of garment and their patterns.</li>
									<li>Getting the brief knowledge of Fashion Marketing</li>
									<li>Getting basic knowledge of textile science</li>
									<li>Creating various surface ornamentation.</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">     
						<span class="title">Semester 2</span>
						<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseTwo22" class="collapse" data-parent="#accordionExample22">
							<div class="card-body">
								<ul>
									<li>Learn the art of Fashion retailing and visual merchandizing.</li>
									<li>Learn the role of merchandizer in fashion industry.</li>
									<li>Mastering in fashion styling concepts.</li>
									<li>Mastering Drapes and draping technique.</li>
									<li>Skills of developing collection of garment with theme and mood board.</li>
									<li>The Skills of Fashion Photography.</li>

								</ul>
							</div>
						</div>
					</div>
				<div class="card">
					<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree22" aria-expanded="false">
						<span class="title">Semester 3</span>
						<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
					</div>
					<div id="collapseThree22" class="collapse" data-parent="#accordionExample22">
						<div class="card-body">
							<ul>
								<li>Learn how to plan for business and became a entrepreneur.</li>
								<li>Deep study and aspects of Research.</li>
								<li>Mastering in Illustrator.</li>
								<li>Mastering in Fashion illustration.</li>
								<li>Learn the role of corporate social responsibilities.</li>

							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour22" aria-expanded="false">
						<span class="title">Semester 4</span>
						<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
					</div>
					<div id="collapseFour22" class="collapse" data-parent="#accordionExample22">
						<div class="card-body">
							<ul>
								<li>Preparation of whole work of program through portfolio.</li>
								<li>Development of collection of garment</li>
								<li>Guided independent research on a topic agreed between the student and their supervisor.</li>

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
								<li>These elements and principles of design will definitely come in handy and will help students develop a personal style. </li>
								<li>The principles of design combine the elements to create a composition.</li>
								<li>Identify the various kind of garment and garment detailing.</li>
								<li>It gives basic knowledge to become a trend setter.</li>
								<li>Understand and use fashion industry terminology.</li>
								<li>Develop patterns by using the acquired knowledge of patternmaking.</li>

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
								<li>Develop an approach towards ideation.</li>
								<li>Knowledge of various national and international stores and there marketing techniques.</li>
								<li>Retail products using techniques learned.</li>
								<li>Recognize and utilize the techniques used in various Indian textiles for their own design creation.</li>
								<li>It initiates students to the world of textile crafts of India, through an appreciation of it’s unfolding through the ages.</li>
								<li>Use the appropriate terminology of used to develop different patterns.</li>
								<li>Create a professional designer’s portfolio which is their identity in fashion market/world.</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	</div>
</section>	
	
	<style>
		.certificate-info{ padding: 0 10px 40px 10px;}
		.certificate-info .cert-box{background-color: #FFF5F2; padding: 30px 80px; text-align: center; border-radius: 20px;border: 1px solid #F84808;}
		.certificate-info .cert-top{box-shadow: 0px 10px 60px #262D7614; height: 400px; display: flex; justify-content: center; padding-top: 50px;}
		.certificate-info .cert-bot{margin-left: 30px;}
		.certificate-info .cert-bot h2{font-size: 24px; line-height: 20px; margin-bottom: 24px;}
		.certificate-info .cert-bot .bot-title2{font-size: 18px; margin-bottom: 20px;}
		.certificate-info .cert-bot span{color:#FF500D;}
		.certificate-info .cert-bot li{margin-bottom: 20px; margin-left: -20px; font-size: 14px;}.
		.certificate-info .cert-bot ul{font-size: 18px;}
		
		@media only screen and (max-width: 600px) {
			.certificate-info{margin: 0;}
			.certificate-info .cert-top{height: auto;}
			.certificate-info .cert-bot {margin-top: 30px;}
			.certificate-info .cert-top img{height: auto;}
		}
	</style>
<section class="certificate-info">
	<div class="container">
		<div class="row cert-top">
			<div class="col-sm-5">
				<div class="cert-box">
					<img src="assets/img/fashion-v2/university-certificate.jpg" alt="" width="100%">
				</div>
			</div>
			<div class="col-sm-5">
				<div class="cert-bot">
					<h2>AAFT University Raipur</h2>
					<p class="bot-title2"><span>Fashion Design Programs | 2/3/4 years</span></p>
					<ul>
						<li>Curriculum as per the Latest Industry Trends</li>
						<li>Additionally, you can apply for B.Des. in Fashion Design, Master Degree, and Diploma Program</li>
						<li>Get placed at top companies in the Fashion Industry</li>

					</ul>
				</div>
			</div>
		</div>
		<div id="apply"></div>
	</div>	
</section>
	

	<style>
		.application-info{margin: 40px 0; padding: 50px 10px; background-color: #F7F7F7;  margin-top: 100px;}
		.application-info .cert-bot span{color:#FF500D;}
		.application-info .grp1{display: flex;align-items: flex-start;}
		.application-info .cert-bot{margin-left: 20px; margin-bottom: 10px;}
		.application-info .bot-title{font-size: 18px; font-weight: 600;margin-bottom: .5rem;}
		.application-info h2{margin-bottom: 20px; font-size: 22px;}
		.application-info .enq-btn {color:#fff;width: 150px; height: 40px; background-color: #ED3237; text-align: center; padding: 5px;border: 1px solid #FFFFFF; border-radius: 5px; margin-bottom: 20px; margin-left: 80px;}
		.application-info .cert-box{position: relative;}
		.application-info .pop1{position: absolute; bottom: -60px;right: -100px;width: 190px;background-color: #fff;padding: 20px;border-radius: 10px;box-shadow: 0px 3px 18px #00000014; border-radius: 16px; }
		.application-info .pop1 .ttl1{font-weight: 600;}
		.application-info .pop1 .ttl2{color:#454545;}
		.application-info .grp1 img{padding: 10px; background-color: #fff; border-radius: 10px;}
		
		@media only screen and (max-width: 600px) {
			.application-info .cert-top{height: auto;}
			.application-info .cert-bot {margin-top: 0px;}
			.application-info .cert-top img{height: auto;}
			.application-info .pop1{top: -60px; left: 20px; right: unset; bottom: unset;}
			.application-info h2 {margin-bottom: 90px;}
			.application-info .grp1{margin-top: 20px;}
			
		}
	</style>
<section class="application-info">
	<div class="container">
		<div class="row cert-top">
			<div class="col-sm-4">
				<h2 class="d-sm-none d-block">Application Process</h2>
				<div class="cert-box">
					<img src="assets/img/mba-v2/appli.webp" alt="" width="100%">
					<div class="pop1">
						<img src="assets/img/mba-v2/tick.webp" alt="">
						<p class="ttl1">Applied!</p>
						<p class="ttl2">*Admission to the program is subject to documents verification</p>
					</div>
				</div>
				
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-6">
				<h2 class="d-sm-block d-none">Fill up the Inquiry Form</h2>
				<div class="grp1">
					<img src="assets/img/mba-v2/appl1.webp" alt="">
					<div class="cert-bot">
						<p class="bot-title">Application Form</p>
						<p class="bot-title2">To get admission at AAFT, fill out this inquiry form, and our admission counselors will get in touch with you</p>
					</div>
				</div>
				<div class="grp1">
					<img src="assets/img/mba-v2/appl2.webp" alt="">
					<div class="cert-bot">
						<p class="bot-title">Personal Interview</p>
						<p class="bot-title2">A personal interview will then be conducted to screen your application.</p>
					</div>
				</div>
				<div class="grp1">
					<img src="assets/img/mba-v2/appl3.webp" alt="">
					<div class="cert-bot">
						<p class="bot-title">Offer of Admission</p>
						<p class="bot-title2">Post the admission rounds, the admission letter will be rolled out to the selected candidates.</p>
					</div>
				</div>
				<a href="#enquire"><button class="enq-btn">Inquire Now</button><br></a>
			</div>
		</div>
	</div>	
</section>

	<style>
		.instructor-sec{padding: 50px 10px; text-align: center;}
		.instructor-sec .f-box{box-shadow: 0px 10px 60px #262D7614; border-radius: 20px; padding: 20px; height: 330px;position: relative;}
		.instructor-sec .f-box img{position: absolute; top: -70px; left: 115px;}
		.instructor-sec .des{color:#F84808;}
		.instructor-sec .nm{margin-bottom:0;}
		.instructor-sec h2{font-size: 24px; margin-bottom: 20px;}
		.instructor-sec img{width: 120px; height: 120px;border-radius: 50%;border: 2px solid #ff0000;box-shadow: 0 0 0 5px #f9393930;}
		.instructor-sec .tutor{display: flex;justify-content: center; margin-top: 115px;}
		.instructor-sec .text-holder {padding-top: 50px;}
		.instructor-sec .s_hd{margin-bottom: 30px;}
		.instructor-sec .s_holder{padding-top: 80px;}
		
	@media only screen and (max-width: 600px) {
			
						
		}
	</style>
<section class="industry-dean py-3">
	<div class="container">
		<h3 class="text-center mb-5 fs-4">Industry Dean</h3>
		<div class="row mb-3">
			<div class="col-sm-3 col-12 img-box mb-4">
				<img alt="image" loading="lazy" class="img-fluid" src="assets/img/dean/rina-dhaka.webp"
					style="color: transparent;border-left: 4px solid #ed4c38" />
			</div>
			<div class="col-sm-9 col-12 content">
				<h5>Rina Dhaka</h5>
				<p>Rina Dhaka, a trailblazer in the fashion industry with a career spanning decades, is celebrated for
					her innovative designs that seamlessly blend traditional craftsmanship with modern aesthetics. Her
					unique approach has earned her global recognition, making her one of India’s most iconic fashion
					designers. Committed to sustainability and preserving traditional artistry, Dhaka has consistently
					championed the cause of ethical fashion. Her efforts have been acknowledged with numerous
					prestigious awards, including the Rajiv Gandhi Excellence Award and the Yuva Rattan Award. Now
					joining AAFT University as the Industry Dean of the School of Fashion Design, Dhaka brings her
					unparalleled expertise and vision to the next generation of designers. Her guidance promises to
					inspire and nurture budding talents, empowering them to create a meaningful impact in the world of
					fashion.</p>
			</div>
		</div>
	</div>
</section>	
<section class="instructor-sec">
	<div class="container">
		<h2>Instructors</h2>
		<p class="s_hd">Our faculty is a powerhouse team of highly qualified professors who bring their rich industry experience to the classroom. They are acclaimed practitioners who are passionate about imparting their enriched insights and knowledge to our students, preparing them for successful careers and fulfilling lives.</p>
		
		<div class="swiper learner">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="s_holder">
						<div class="f-box">
						<img src="assets/img/fashion-v2/ruchi.jpg" alt="">
						<div class="text-holder">
							<p class="nm">Dr. Ruchi Agrawal</p>
							<p class="des">School Incharge</p>
							<p class="dtls">She is an Independent Fashion Designer and Physical Therapist with a Masters in Fashion Design. She has showcased her designs in New York Fashion Week 2019 and Lakme Fashion Week Launchpad India. She specializes in teaching Design Process and Fashion Illustration. She was also a member of the implementation team for the Christian Dior pre-fall Fashion Show 2025 in Mumbai. </p>

						</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="s_holder">
						<div class="f-box">
						<img src="assets/img/fashion-v2/shikha.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Ms. Shikha Singh Rajpoot</p>
								<p class="des">Assistant Professor</p>
								<p class="dtls">She is a Fashion Design and Textile & Clothing graduate, with considerable experience in the fashion industry and publications in International Journal in the related domain. She has a keen interest in ethnic wear, dyeing, and printing. She has judged many prominent fashion shows. Currently, as an Assistant Professor in School of Fashion Design at AAFT University, she shares her expertise in design and fashion with her students. </p>

							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="s_holder">
						<div class="f-box">
						<img src="assets/img/fashion-v2/harshita.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Ms. Harshita Chandrakar</p>
								<p class="des">Assistant Professor</p>
								<p class="dtls">She has considerable experience in fashion design and textile industry, and academics. She has worked as a designer at "33 clothing”. Her area of expertise is Surface Ornamentation Fashion Studies and Textile Designs. She is presently associated with the School of Fashion Design as Asst. Professor. </p>

							</div>
						</div>
					</div>
				</div>
			</div>
				
			<!--div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div-->
			<div class="iswiper-pagination"></div>
		</div>
		
	</div>	
</section>
	
<style>
	.placement-sec1 {padding:40px 10px; background-color: #F7F7F7;}
	.placement-sec1 h2{font-size:24px; margin-bottom:20px; text-align:center;}
	.placement-sec1 .shd {text-align: center;}
	.placement-sec1 .placement-grid {display:grid; grid-template-columns: repeat(6, 1fr); grid-gap: 50px;}
	.placement-sec1 .placement-grid .circle {/*filter: grayscale(1);*/}
	.placement-sec1 .placement-grid .circle img {border-radius: 10% !important; filter: contrast(0.95);}
	
	@media only screen and (max-width: 600px) {
		.placement-sec1 .placement-grid {grid-template-columns: repeat(2, 1fr);}
						}
</style>
<section class="placement-sec1">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<h2>Our Alumni Work At</h2>
			<p class="shd">Discover where the success stories began - our alumni are thriving at these top-tier organizations!</p>
				<div class="placement-grid m-t-40">
					<div class="placement-list circle"><img src="assets/img/fashion-v1/fashion-1.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/fashion-v1/fashion-2.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/fashion-v1/fashion-3.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/fashion-v1/fashion-4.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/fashion-v1/fashion-5.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/fashion-v1/fashion-6.webp" class="img-fluid"></div>					
				</div>
			</div>
		</div>
	</div>
</section>
	
<style>
	.why-sec{padding: 50px 10px; text-align: center;}
	.why-sec .slide-box{box-shadow: 0px 10px 60px #262D7614; border-radius: 20px; padding: 20px;}
	.why-sec .des{color:#F84808;}
	.why-sec .group22{display: flex; align-items: center;}
	.why-sec h2{font-size: 24px;}
	.why-sec .text-holder{text-align: left; margin-left: 10px;}
	.why-sec .slide-box .bot-txt{text-align: left; margin-top: 10px; height: 150px;}
	.why-sec img{width: 100px; height: 100px;border-radius: 50%;border: 2px solid #ff0000;box-shadow: 0 0 0 5px #f9393930;}
	
	@media only screen and (max-width: 600px) {
			
						
		}
	</style>
	
<section class="why-sec">
	<div class="container">
		<h2>Why do learners choose us?</h2>
		<p class="mb-5">Hear from our trailblazers as they share their journeys of growth, leadership, and success.</p>
		<div class="swiper why">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/fashion-v2/kritika.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Kritika Bajaj</p>
								<p class="des">(Shantanu & Nikhil)</p>										
							</div>
						</div>
						<p class="bot-txt">“I would like to take this opportunity to express my heartfelt gratitude to AAFT and the entire team for the valuable assistance provided to me during my interview process with the well-known designers, Shantanu & Nikhil.”</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/fashion-v2/bhavya.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Bhavya Shukla</p>
								<p class="des">(Zara)</p>										
							</div>
						</div>
						<p class="bot-txt">“I got placed at Zara as a visual merchandiser, and it is none less than a dream to work with such a great company at the start of my career, and it is because of the efforts put in by our faculties, and placement cell.”</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/fashion-v2/himanshu.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Himanshu Bagga</p>
								<p class="des">(Nykaa)</p>										
							</div>
						</div>
						<p class="bot-txt">“I love our college’s shoots and different creative initiatives. Faculty members are very helpful and experienced. I used to do makeup shoots every 1 or 2 weeks. Once I completed my program, I got the placement.”</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/fashion-v2/omkar.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Omkar Kumar</p>
								<p class="des">(Lacoste)</p>										
							</div>
						</div>
						<p class="bot-txt">"Stepping in at AAFT was the best decision of my career. There is so much to learn and experience at this university. We often find ourselves juggling between events, interacting with designers, and getting mentored for real." </p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/fashion-v2/kritika.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Kritika Bajaj</p>
								<p class="des">(Shantanu & Nikhil)</p>										
							</div>
						</div>
						<p class="bot-txt">“I would like to take this opportunity to express my heartfelt gratitude to AAFT and the entire team for the valuable assistance provided to me during my interview process with the well-known designers, Shantanu & Nikhil.”</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/fashion-v2/bhavya.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Bhavya Shukla</p>
								<p class="des">(Zara)</p>										
							</div>
						</div>
						<p class="bot-txt">“I got placed at Zara as a visual merchandiser, and it is none less than a dream to work with such a great company at the start of my career, and it is because of the efforts put in by our faculties, and placement cell.”</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/fashion-v2/himanshu.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Himanshu Bagga</p>
								<p class="des">(Nykaa)</p>										
							</div>
						</div>
						<p class="bot-txt">“I love our college’s shoots and different creative initiatives. Faculty members are very helpful and experienced. I used to do makeup shoots every 1 or 2 weeks. Once I completed my program, I got the placement.”</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/fashion-v2/omkar.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Omkar Kumar</p>
								<p class="des">(Lacoste)</p>										
							</div>
						</div>
						<p class="bot-txt">"Stepping in at AAFT was the best decision of my career. There is so much to learn and experience at this university. We often find ourselves juggling between events, interacting with designers, and getting mentored for real." </p>
					</div>
				</div>
				
			</div>
			<!--div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div-->
			<div class="iswiper-pagination"></div>
		</div>
	</div>	
</section>	


<style>
	.media-sec{padding: 50px 10px; text-align: center; background-color: #F7F7F7;}
	.media-sec .slide-box{box-shadow: 0px 10px 60px #262D7614; padding: 20px;}
	.media-sec .des{color:#2A2D3A;}
	.media-sec img{width: 150px; margin-bottom: 20px;}
	.media-sec p{margin-bottom: 5px;}
	.media-sec .nm{font-weight: 700;}
	.media-sec h2{font-size: 24px;}
	.media-sec .text-holder{height: 80px;}
	@media only screen and (max-width: 600px) {
			
						
		}
	</style>
	
<section class="media-sec">
	<div class="container">
		<h2>Moments Of Honour</h2>
		<p class="mb-5"></p>
		<div class="swiper media">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-box">
						<img src="assets/img/mba-v2/award1.jpg" alt="">
						<div class="text-holder">
							<p class="nm">The Entrepreneurs Club Awards</p>
							<p class="des"></p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<img src="assets/img/mba-v2/award2.jpg" alt="">
						<div class="text-holder">
							<p class="nm">The Edutainment Awards 2015 - AAFT - Second Best Web Design School</p>
							<p class="des"></p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<img src="assets/img/mba-v2/award3.jpg" alt="">
						<div class="text-holder">
							<p class="nm">Higher Education Summit & Awards for Exemplary Leadership in Education</p>
							<p class="des"></p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<img src="assets/img/mba-v2/award4.jpg" alt="">
						<div class="text-holder">
							<p class="nm">Exceptional Leader of Excellence</p>
							<p class="des"></p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<img src="assets/img/mba-v2/award5.jpg" alt="">
						<div class="text-holder">
							<p class="nm">Global Excellence Award for Outstanding Academic Leaders</p>
							<p class="des"></p>
						</div>
					</div>
				</div>
			</div>
			<!--div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div-->
			<div class="iswiper-pagination"></div>
		</div>
	</div>	
	<div id="infrastructure"></div>	
</section>	

<style>
	.infra_s {padding: 40px 10px;}
	.infra_s h2{font-size: 24px; margin-bottom: 20px; text-align: center;}
	.infra_s .s_hd{margin-bottom: 30px; text-align: center;}
	.infra_s img{margin:5px; width: 100%;}
	@media only screen and (max-width: 600px) {
			
						
		}
	</style>

<section class="infra_s">
	<div class="container">
		<h2>Infrastructure</h2>
		<p class="s_hd">The infrastructure at AAFT School of Fashion & Design is designed to inspire and facilitate a modern learning environment. Equipped with the latest technology, spacious classrooms, high-speed internet connectivity, and a well-stocked library, our students have access to the tools they need to succeed. We also offer dedicated spaces for extracurricular activities, ensuring a well-rounded experience for all.</p>
		<div class="row">
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6 p-1">
						<img src="assets/img/mba-v2/infra1.png" alt="">
					</div>
					<div class="col-sm-6 p-1">
						<img src="assets/img/mba-v2/infra2.png" alt="">
					</div>
					<div class="col-sm-12 p-1">
						<img src="assets/img/mba-v2/infra5.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-sm-3 p-1 d-none d-sm-block">
				<img src="assets/img/mba-v2/infra4.png" alt="">
			</div>
			<div class="col-sm-3 p-1">
				<img src="assets/img/mba-v2/infra3.png" alt="">
			</div>
		</div>
			
	</div>
</section>

<section class="program1">
	<div class="container">
		<h2 style="text-align: center; line-height: 35px;">Our Hostel: Comfort, Cuisine, and Connection</h2>
		<div class="row main-div">
			<div class="row">
				<div class="col-sm-6">
					<div class="prog-info">
						<div class="icon-part">
							<img src="assets/img/mba-v2/icon1.png" alt="">
						</div>
						<div class="text-part">
							<p class="top-title">Cooler Rooms</p>
							<p>Our hostel offers cozy cooler rooms equipped with coolers to ensure comfort throughout your stay.</p>
						</div>
					</div>	
					<div class="brdr"></div>
				</div>
				<div class="col-sm-6">
					<div class="prog-info">
						<div class="icon-part">
							<img src="assets/img/mba-v2/icon1.png" alt="">
						</div>
						<div class="text-part">
							<p class="top-title">3 meals</p>
							<p>Enjoy nutritious meals three times a day, ensuring you're fueled for your studies and activities.</p>
						</div>
					</div>
					<div class="brdr"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="prog-info">
						<div class="icon-part">
							<img src="assets/img/mba-v2/icon1.png" alt="">
						</div>
						<div class="text-part">
							<p class="top-title">WIFI facility</p>
							<p>Stay connected effortlessly with our campus-wide WIFI network, perfect for academic research and staying in touch with loved ones.</p>
						</div>
					</div>	
					<div class="brdr"></div>
				</div>
				<div class="col-sm-6">
					<div class="prog-info">
						<div class="icon-part">
							<img src="assets/img/mba-v2/icon1.png" alt="">
						</div>
						<div class="text-part">
							<p class="top-title">Laundry service</p>
							<p>Leave the hassle of laundry to us, allowing you to focus on your studies without worrying about chores.<br>&nbsp;</p>
						</div>
					</div>	
					<div class="brdr"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="prog-info">
						<div class="icon-part">
							<img src="assets/img/mba-v2/icon1.png" alt="">
						</div>
						<div class="text-part">
							<p class="top-title">2 Monthly trips</p>
							<p>Break the routine and explore the city with our monthly organized trips for shopping, dining, and cultural experiences.</p>
						</div>
					</div>
					<div class="brdr d-sm-none d-block"></div>
				</div>
				<div class="col-sm-6">
					<div class="prog-info">
						<div class="icon-part">
							<img src="assets/img/mba-v2/icon1.png" alt="">
						</div>
						<div class="text-part">
							<p class="top-title">Gym & Sports facilities</p>
							<p>Maintain a healthy lifestyle with free access to our gym and sports facilities, promoting physical well-being alongside academic pursuits.</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

	<style>
		.who-can{padding: 50px 10px;}
		.who-can .grid-container{display: grid; grid-template-columns: auto auto;}
		.who-can .add-info{background-color: #FFF5F2; padding:20px;border: 1px solid #F84808; border-radius: 10px; color:#FF500D; margin:0 25px;}
		.who-can .add-info h3{font-size: 20px; font-weight: 600; margin-bottom: 20px; text-align: center;}
		.who-can .add-info span{color:#000; font-weight: normal; margin-right: 10px;}
		.who-can .add-info .grid-item{margin-bottom: 10px;}
		.who-can .info-555{box-shadow: 0px 10px 60px #262D7614; border-radius: 20px 15px 20px 20px; padding: 25px;}
		.who-can .info-555 h2{color:#000; font-size: 20px; margin-bottom: 24px; text-align: center;}
		.who-can h2{font-size: 24px; margin-bottom: 20px; text-align: center;}
		.who-can .ppp{text-align: center;}
		.who-can .info-555 ul {list-style:none; color:#696984; margin-left: -30px;}
		.who-can .info-555 li {background: url(assets/img/mba-v2/check.webp) no-repeat left top;  padding-left:30px; background-position: 0px 5px; margin: 0; font-size: 14px; line-height: 30px;} 
		@media only screen and (max-width: 600px) {
			.who-can .add-info{margin:0 0px;}
						
		}
	</style>
<section class="who-can">
	<div class="container">
		<h2>Who can apply?</h2>
		<p class="mb-5 ppp">We attract exceptional candidates who possess a blend of intellectual curiosity, leadership potential, and a passion for business, thereby creating a cohort of promising future leaders.</p>
		<div class="row">
			<div class="col-sm-7">
					<div class="info-555">
					<h2>Eligibility criteria</h2>
					<div class="row">
						<div class="col-sm-6">
							<ul>
								<li>Candidates must have a 10 + 2 + 3 year bachelor’s degree from a recognized university/institution</li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul>
								<li>Candidates must have a minimum of 50% marks in aggregate in graduation (45% for reserved categories)</li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul>
								<li>Candidates need to clear the AAFT Global Entrance Test (GET).</li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul>
								<li>Candidates with a valid score (50 percentile) from any aptitude test such as CAT/GMAT/GRE.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="add-info">
					<h3>Career Prospects</h3>
					<div class="grid-container">
					  <ul style="color:#000;">
						<li>Personal Stylist</li>
						<li>Textile Designer</li>
						<li>Fashion Photographer</li>
						<li>Visual Merchandiser </li>
						<li>Fashion Journalism </li>
						<li>Art Director</li>
					</ul>

					</div>
				</div>
			</div>
		</div>
		<div id="faq"></div>
	</div>	
</section>

<style>
	.faq-sec{padding: 50px 10px;}
	.faq-sec h2{margin-bottom: 30px; text-align: center;}
	.faq-sec .card{box-shadow: 0px 8px 12px #0000000D;border-radius: 10px; margin-bottom: 20px;}
	.faq-sec .accicon{float: right;}
	.faq-sec h2{font-size: 24px;}
	.faq-sec .card-header:not(.collapsed) .rotate-icon { transform: rotate(180deg); }
	.faq-sec [data-toggle="collapse"] i:before {  content: "\f068";}
  	.faq-sec [data-toggle="collapse"].collapsed i:before {content: "\f067";}
	.faq-sec .accordion .card .fas {
    font-size: 14px;
    color: #43434380;
}
	@media only screen and (max-width: 600px) {
			
						
		}
	</style>	
	
	
<section class="faq-sec">
	<div class="container">
		<h2>Frequently Asked Questions</h2>
				
		<div class="accordion" id="accordionExample223">
			<div class="card">
				<div class="card-header" data-toggle="collapse" data-target="#collapseOne223" aria-expanded="true">     
					<span class="title">1. What is the duration of the course?</span>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
				</div>
				<div id="collapseOne223" class="collapse show" data-parent="#accordionExample223">
					<div class="card-body">
						<ul>
							<li>The Bachelor of Fashion Design program at AAFT University has a duration of three years.</li>
						</ul>
					</div>
				</div>
			</div>
			
		<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree223" aria-expanded="false">
				<span class="title">2. What is the eligibility criteria?</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseThree223" class="collapse" data-parent="#accordionExample223">
				<div class="card-body">
					<ul>
						<li>The eligibility criteria for the BBA program at AAFT University is a minimum of 50% marks in 10+2 in any stream from a recognized board.</li>
					</ul>
				</div>
			</div>
		</div>
			<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour223" aria-expanded="false">
				<span class="title">3. What are the career opportunities?</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseFour223" class="collapse" data-parent="#accordionExample223">
				<div class="card-body">
					<ul>
						<li>Graduates of the B.Sc. in Fashion Design program at AAFT University have various career opportunities in fields such as Personal Stylist, Textile Designer, Fashion Photographer, Visual Merchandiser, Fashion Journalism, and Art Director.</li>
					</ul>
				</div>
			</div>
		</div>
			<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFive223" aria-expanded="false">
				<span class="title">4. Can I pursue a Fashion Design program without a Fashion background or degree?</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseFive223" class="collapse" data-parent="#accordionExample223">
				<div class="card-body">
					<ul>
						<li>Yes, students from any academic background can pursue the Fashion Design program at AAFT University as long as they meet the eligibility criteria. The program is designed to provide a foundational understanding of fashion designing principles and students will learn essential skills from scratch.</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
	</div>
</section>
	
<style>
.footer-sec {
    background: #191830;
	padding: 50px 0; color:#d3d3d3;}
	.footer-sec h2{font-size: 20px;}
	.footer-sec h3{font-size: 18px;}
	.footer-sec h4{font-size: 16px;}
</style>	
<section class="footer-sec">
	<div class="container">
		
		<div class="row">
		    
			<div class="col-sm-6 mb-5">
			    <h3>Our Campus-</h3>
				<div class="address">
					<h2>AAFT University</h2>
					<h4>Vill.- Manth, Kharora, District- Raipur,</h4>
					<h4>Chhattisgarh- 493225</h4>
					<h3 class="d-none">Call us: +919109112078</h3>
				</div>
			</div>
			<div class="col-sm-6">
			    <h3>Admission Office-</h3>
				<div class="address">
					<h2>AAFT University</h2>
					<h4>GF-18, Ground Floor, Shyam Plaza,</h4>
					<h4>Pandri, Raipur, Chhattisgarh, India</h4>
					
				</div>
			</div>
			
		</div>
		
	</div>
</section>	
	
	
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script>
	var swiper = new Swiper(".learner", {
			spaceBetween: 30,
			loop:true,
			pagination: {
				el: ".swiper-pagination",
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

<?php include('inc/contact-details-new-fashionnew1.php'); ?>	
<?php include('inc/form-scripts.php'); ?>
<?php include('inc/footer-script.php'); ?>
	
</body>
</html>