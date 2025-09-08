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
<title>Best colleges for MBA in India  | AAFT University</title>
<meta name="description" content="AAFT University stands out as one of the best MBA colleges in India, providing practical learning, industry exposure, and strong career opportunities for students.">
<meta name="keywords" content="Best colleges for MBA in India">

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
		<img src="assets/img/univ-logo.webp" title="AAFT University | School of Management" alt="AAFT University | School of Management" class="img-fluid lplogo">
				
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
		
	.banner-area{background-color: #000; color:#fff;padding: 100px 10px; margin-top:0px; background-image: url("assets/img/mba-v2/mba-banner-desk.webp"); background-repeat: no-repeat; background-position: center; background-size: cover;}
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
	.banner-area .right-area{
		padding:20px;
		background: #ffffff21;
		border-radius: 10px;
		backdrop-filter: blur(10px);
	}
	.right-area p{
		font-size: 12px;
		color: #FFFFFF90;
	}
	.right-area h2{
		font-size: 20px;
	}
	.right-area .form-group {
    margin-bottom: 5px;
}
@media screen and (max-width: 1366px) and (min-width: 769px) {
	
	.banner-area {padding: 50px 10px 40px 10px;}
	}

	@media only screen and (max-width: 600px) {
		.banner-area .right-area{text-align:center; padding:0px;}
		.banner-area .hr1{display: none;}
		.banner-area .b-sec{padding-top: 150px;}
		.banner-area{background-color: #000; color:#fff; padding: 100px 0px; background-image: url("assets/img/mba-v2/building-bg-mob.webp"); background-repeat: no-repeat; background-position: unset; background-size: unset;}
	}
</style>	
	
<section class="banner-area">
	<div class="container">
		<div class="row b-sec">
			<div class="col-sm-6">
				<div class="left-area">
					<img src="assets/img/mba-v2/ugc.png" alt="">
					<h1>MBA Program | AAFT University, Raipur</h1>
					<div class="hr2">
						<p>1 week fully paid industrial visit to Dubai</p>
					</div>
					<p class="hr3">Be the CEO of Your Future with our tailored MBA Program and Blaze a Trail of Success in Your Dream Career</p>
					<h3>2-year on-campus program for July 2025 Batch at AAFT University</h3>
				</div>
			</div>
			<div class="col-sm-2 hide1366"></div>
			<div class="col-sm-4"><div id="enquire" style="height:30px; margin-bottom:40px;"></div>
				<div class="right-area">
					<hr class="d-block d-sm-none"/>
					<?php
					$pageOption="MBA";
					$schoolOption="School of Management";
					$courseOption= '<option value="MBA">MBA</option>';				
					include('inc/form-new-individual.php');
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
			<div class="row">
				<div class="col-sm-2 col-6">
					<div class="item1"><h5>Duration</h5><p>2 Years</p></div>
				</div>
				<div class="col-sm-2 col-6">
					<div class="item2"><h5>Location</h5><p>Raipur</p></div>
				</div>
				<div class="col-sm-2 col-6">
					<div class="item3"><h5>Starts On</h5><p>July 2025</p></div>
				</div>
				<div class="col-sm-2 col-6">
					<div class="item4"><h5>Easy Education Loan</h5><p>Easy Education Loan Available</p></div>
				</div>
				<div class="col-sm-2 col-6">
					<div class="item5"><h5>Placements</h5><p>100% Placement Assistance</p></div>
				</div>
				<div class="col-sm-2 col-6">
					<div class="item6"><h5>Eligibility</h5><p style="font-size: 14px;">Graduation</p></div>
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
		<div class="about">
			<h2>Program Highlights</h2>
			<p>At AAFT University, located in Raipur, Chhattisgarh, we stand as one of the leading MBA colleges in the region, offering MBA programs tailored to meet the demands of today's competitive business world. Recognized as one of the best MBA colleges in Raipur, our institution is renowned for its commitment to excellence in MBA management education.</p>
			<p>With a focus on practical learning and industry relevance, our MBA institute provides a comprehensive curriculum that covers key areas such as research, marketing, and production. As one of the premier colleges for MBA in Raipur, Chhattisgarh, we ensure that our students gain hands-on experience through hands-on projects and immersive experiences.</p>
			<p>Our AAFT Raipur MBA program emphasizes the importance of the practical application of MBA concepts, preparing students to tackle challenges in the business world effectively. Whether you're aspiring to pursue an MBA in Raipur or searching for MBA colleges in Chhattisgarh, AAFT University offers a transformative MBA experience that sets you apart from the rest.</p>
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
								<p>World-class faculty with real-world experience</p>
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
								<p class="top-title">Go Global</p>
								<p>Fully paid industrial visit to Dubai to expand your horizons</p>
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
								<p>Tailor your MBA experience to fit your career goals</p>
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
						<li>Learning Strategic thinking and Business Analysis</li>
						<li>Development of attitude in high-pressure situations</li>
						<li>Development of Business Communication skills</li>
						<li>Learning Business Networking Skills</li>
						<li>Development of Time Management</li>
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
		<p>Our MBA program is accredited by prestigious organizations, ensuring the highest standards of quality and value in business education.</p>
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
				<p class="info22">Global learning at its best!</p>
				<p>Explore Dubai's thriving business landscape with a one-week, fully paid industrial visit.</p>
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
					<p class="adv-p1">INR 8 LPA</p>
					<p>Highest CTC offered</p>
					<div class="brdr"></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="adv-grp">
					<img src="assets/img/mba-v2/diploma.webp" alt="">
					<p class="adv-p1">2500+</p>
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
	.about_prog .c_content {padding:30px; margin-bottom: 20px; background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 0px 8px 12px #0000000D; border-radius: 10px;}
	.about_prog .card-header {background-color: rgba(0,0,0,.00);}
	
	
	@media only screen and (max-width: 600px) {
		.desktop{display: none;}
	}
	</style>	
	
	
<section class="about_prog">
	<div class="container">
		<p class="s_head d-none">Master of Business Administration, is a postgraduate degree that focuses on developing business and management skills. Here are some of the key highlights of an MBA program:</p>
				
		<div class="accordion d-sm-none d-block" id="accordionExample2">
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-header" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true">     
							<span class="title">Core Concepts: Mastering the fundamentals</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>We offer a variety of core courses that cover essential business topics such as accounting, finance, marketing, operations management, and organizational behavior.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">     
						<span class="title">Elective Excellence: Tailoring your education</span>
						<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseTwo2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>In addition to core courses, our MBA program offers elective courses that allow students to focus on specific areas of interest. These may include courses in entrepreneurship, consulting, sustainability, or other specialized topics.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false">
							<span class="title">Case Chronicles: Real-world problem-solving</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseThree2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>Our MBA program uses case studies to provide real-world examples of business problems and how they can be solved. This approach helps students develop critical thinking and problem-solving skills.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="false">
							<span class="title">Team Triumphs: Collaboration and Communication</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseFour2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>Our MBA program  requires students to work in teams on projects. This helps develop collaboration and leadership skills, as well as providing practical experience in managing complex projects.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFive2" aria-expanded="false">
							<span class="title">Career Catalysts: Internships and job experience</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseFive2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>We offer internship opportunities that allow students to gain hands-on experience in a specific industry or company. This can be a valuable way to build a network and gain experience that can be useful in future job searches.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSix2" aria-expanded="false">
							<span class="title">Networking Nexus: Building Connections for Success</span>
							<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
						</div>
						<div id="collapseSix2" class="collapse" data-parent="#accordionExample2">
							<div class="card-body">
								<ul>
									<li>We also provide opportunities for students to network with alumni and industry professionals. This can be a valuable way to build connections and explore career opportunities.</li>
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
					<p class="c_crs">Core Concepts: Mastering the fundamentals</p>
					<p class="c_dtl">We offer a variety of core courses that cover essential business topics such as accounting, finance, marketing, operations management, and organizational behavior.</p>
					<br>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Elective Excellence: Tailoring your education</p>
					<p class="c_dtl">In addition to core courses, our MBA program offers elective courses that allow students to focus on specific areas of interest. These may include courses in entrepreneurship, consulting, sustainability, or other specialized topics.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Case Chronicles: Real-world problem-solving</p>
					<p class="c_dtl">Our MBA program uses case studies to provide real-world examples of business problems and how they can be solved. This approach helps students develop critical thinking and problem-solving skills.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Team Triumphs: Collaboration and communication</p>
					<p class="c_dtl">Our MBA program  requires students to work in teams on projects. This helps develop collaboration and leadership skills, as well as providing practical experience in managing complex projects.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Career Catalysts: Internships and job experience</p>
					<p class="c_dtl">We offer internship opportunities that allow students to gain hands-on experience in a specific industry or company. This can be a valuable way to build a network and gain experience that can be useful in future job searches.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="c_content">
					<p class="c_crs">Networking Nexus: Building connections for success</p>
					<p class="c_dtl">We also provide opportunities for students to network with alumni and industry professionals. This can be a valuable way to build connections and explore career opportunities.</p><br>
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
		@media only screen and (max-width: 600px) {
			.syllabus .bbttnn{flex-wrap: wrap; flex-direction: column;}
						
		}
	</style>
<script src="https://kit.fontawesome.com/a91a27e46f.js" crossorigin="anonymous"></script>		
<section class="syllabus">
	<div class="container">
		<h2>Program Overview</h2>
		<div id="overview"></div>
		<p class="shd">Explore the roadmap to success with our comprehensive syllabus, carefully crafted to guide you toward mastery.</p>
		<div class="bbttnn">
			<div class="btn11">Projects: <span class="red"> 4+ </span> <span class="d-sm-block d-none"> | </span></div> 
			<div class="btn11">Expert Sessions: <span class="red"> 20+ </span> <span class="d-sm-block d-none"> | </span></div>
			<div class="btn11">Industry Visits: <span class="red"> 10+ </span> <span class="d-sm-block d-none"> | </span></div>
			<div class="btn11">Case Studies: <span class="red"> 15+ </span></div>
			<a href="#enquire"><button class="btn-info2">Inquire Now</button></a>
		</div>
		
		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">     
					<span class="title">Semester 1</span>
					<p>6 Months | 01 Project Assignment</p>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
				</div>
				<div id="collapseOne" class="collapse show" data-parent="#accordionExample">
					<div class="card-body">
						<ul>
							<li>Introduction of Generic Ability to Management concepts and process articulate, illustrate, analyse, synthesize and apply the knowledge of principles and frameworks of management</li>
							<li>Understanding Critical Thinking for Business Environment and enhancing the ability to conduct a multidimensional business.</li>
							<li>Understanding and allied domains to the solutions of Organizational Behaviour</li>
							<li>Focus on developing Business Communication in Management.</li>
							<li>Introduction to the core of Accounting for Management</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">     
				<span class="title">Semester 2</span>
				<p>6 Months | 01 Project Assignment</p>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
				</div>
				<div id="collapseTwo" class="collapse" data-parent="#accordionExample">
					<div class="card-body">
						<ul>
							<li>Getting Problem Solving & Innovation Ability from Managerial Economics to Identify, formulate and provide innovative solution frameworks for real-world complex business</li>
							<li>Effective Marketing Management is the ability to effectively market in cross-cultural settings, in technology-mediated environments.</li>
							<li>Understanding the E-Business with professional tools necessary for the Organization</li>
							<li>Introduction to the core of Financial Management</li>
							<li>Focus on developing Operations Management in Management</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
					<span class="title">Semester 3</span>
					<p>6 Months | 01 Project Assignment</p>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i><!--<i class="fas a-angle-down otate-icon">Preview</i>--></span>
				</div>
				<div id="collapseThree" class="collapse" data-parent="#accordionExample">
					<div class="card-body">
						<ul>
							<li>Management Information System Work on the Ability to collaborate in an organizational context and across organizational boundaries and lead themselves.</li>
							<li>Getting relevant knowledge of Entrepreneurship corporate & business ethics</li>
							<li>Understanding the Concept of International Financial Management</li>
							<li>Getting knowledge of the Compensation Management</li>
							<li>Introduction Summer Training Project</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false">
					<span class="title">Semester 4</span>
					<p>6 Months | 01 Project Assignment</p>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i><!--<i class="fas a-angle-down otate-icon">Preview</i>--></span>
				</div>
				<div id="collapseFour" class="collapse" data-parent="#accordionExample">
					<div class="card-body">
						<ul>
							<li>Strategic Management Ability to identify entrepreneurial opportunities and leverage managerial & leadership skills for founding.</li>
							<li>Understanding the aspects of Retail Management in management.</li>
							<li>Understanding the Project report for management</li>
							<li>Placement assistance in top companies and industries</li>
						</ul>
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
					<img src="assets/img/mba-v2/mba-certificate.jpg" alt="" width="100%">
				</div>
			</div>
			<div class="col-sm-5">
				<div class="cert-bot">
					<h2>AAFT University Raipur</h2>
					<p class="bot-title2"><span>MBA Program | 2 Years</span></p>
					<ul>
						<li>Specialize in International Business, Finance, HR, Marketing, Digital or Media Management</li>
						<li>Earn an additional diploma in Digital Marketing, Animation, or Event Management</li>
						<li>Learn industry relevant skills with our 1 week, fully-paid trip to Dubai</li>

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
	
<section class="instructor-sec">
	<div class="container">
		<h2>Instructors</h2>
		<p class="s_hd">Our faculty is a powerhouse team of highly qualified professors who bring their rich industry experience to the classroom. They are acclaimed practitioners who are passionate about imparting their enriched insights and knowledge to our students, preparing them for successful careers and fulfilling lives.</p>
		
		<div class="swiper learner">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="s_holder">
						<div class="f-box">
						<img src="assets/img/mba-v2/sadhna.webp" alt="">
						<div class="text-holder">
							<p class="nm">Dr.Sadhna Bagchi</p>
							<p class="des">Associate Dean, AAFT University</p>
							<p class="dtls">Dr. Sadhna Bagchi, with a Ph.D. and double master's in Management and Commerce, specializes in Finance, Accounting, Research, and Management. Her research focuses on Behavioural Finance and Emerging Economic Trends.</p>

						</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="s_holder">
						<div class="f-box">
						<img src="assets/img/mba-v2/shweta.webp" alt="">
							<div class="text-holder">
								<p class="nm">Dr. Shweta Bajaj</p>
								<p class="des">Head of Department (SOAPRE)</p>
								<p class="dtls">As Head of the School of Advertisement, PR and Events, she specializes in event planning, HR management, business research, and marketing. With a Ph.D. in Total Quality Management, she guides students to excel.</p>

							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="s_holder">
						<div class="f-box">
						<img src="assets/img/mba-v2/sidhant.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Mr. Sidhant Baliya</p>
								<p class="des">Head of Department (SOM)</p>
								<p class="dtls">With 16 years of experience in academics and administration, he's responsible for designing regulations, curriculum and maintaining academic records. He heads AAFT University's School of Management.</p>

							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="s_holder">
						<div class="f-box">
						<img src="assets/img/mba-v2/raghvan.jpg" alt="">
							<div class="text-holder">
								<p class="nm">Mr. R. Raghvan</p>
								<p class="des">Assistant Professor (SOM)</p>
								<p class="dtls">After starting his career in Finance in 1984, this graduate now works in education to benefit society. He specializes in MBA Finance and teaches as an Asst. Professor at the School of Management.</p>

							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="s_holder">
						<div class="f-box">
						<img src="assets/img/mba-v2/anjana.webp" alt="">
							<div class="text-holder">
								<p class="nm">Mrs. Anjana Prasad</p>
								<p class="des">Assistant Professor (SOM)</p>
								<p class="dtls">Mrs. Anjana Prasad, with master's in Management and Commerce, specializes in Finance, Accounting, Research, and Management. Her research focuses on Emerging Economic Trends.</p>

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
	.placement-sec1 .placement-grid .circle {filter: grayscale(1);}
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
					<div class="placement-list circle"><img src="assets/img/mba-v2/aditya.png" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/mba-v2/nestle.webp" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/mba-v2/deloitte.png" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/mba-v2/kpmg.png" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/mba-v2/loreal.png" class="img-fluid"></div>
					<div class="placement-list circle"><img src="assets/img/mba-v2/berger.png" class="img-fluid"></div>					
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
	.why-sec .slide-box .bot-txt{text-align: left; margin-top: 10px; height: 130px;}
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
							<img src="assets/img/mba-v2/riya.webp" alt="">
							<div class="text-holder">
								<p class="nm">Riya Jain</p>
								<p class="des">MBA</p>										
							</div>
						</div>
						<p class="bot-txt">Someone truly said that along with hard work and determination, one needs proper guidance and direction to succeed. This is where AAFT came into picture which has helped me a lot.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/mba-v2/abhinash.webp" alt="">
							<div class="text-holder">
								<p class="nm">Abhinash K Singh</p>
								<p class="des">MBA</p>										
							</div>
						</div>
						<p class="bot-txt">A very huge thanks for all the members of AAFT for creating such a program and bringing the wonderful cohort I had and most of all helping me jump into doing the work that I absolutely love.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/mba-v2/simran.webp" alt="">
							<div class="text-holder">
								<p class="nm">Simran Bansal</p>
								<p class="des">MBA</p>										
							</div>
						</div>
						<p class="bot-txt">Experience with AAFT has been like a roller coaster ride but it was a journey worth taking. I have got opportunities to challenge myself and put my skills to test which I am more than thankful for. </p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/mba-v2/nayab.webp" alt="">
							<div class="text-holder">
								<p class="nm">Nayab Choudhary</p>
								<p class="des">MBA</p>										
							</div>
						</div>
						<p class="bot-txt">AAFT provided me with a great launch pad for stepping into the corporate world, armed with tools and best practices critical for success. </p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/mba-v2/riya.webp" alt="">
							<div class="text-holder">
								<p class="nm">Riya Jain</p>
								<p class="des">MBA</p>										
							</div>
						</div>
						<p class="bot-txt">Someone truly said that along with hard work and determination, one needs proper guidance and direction to succeed. This is where AAFT came into picture which has helped me a lot.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/mba-v2/abhinash.webp" alt="">
							<div class="text-holder">
								<p class="nm">Abhinash K Singh</p>
								<p class="des">MBA</p>										
							</div>
						</div>
						<p class="bot-txt">A very huge thanks for all the members of AAFT for creating such a program and bringing the wonderful cohort I had and most of all helping me jump into doing the work that I absolutely love.</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/mba-v2/simran.webp" alt="">
							<div class="text-holder">
								<p class="nm">Simran Bansal</p>
								<p class="des">MBA</p>										
							</div>
						</div>
						<p class="bot-txt">Experience with AAFT has been like a roller coaster ride but it was a journey worth taking. I have got opportunities to challenge myself and put my skills to test which I am more than thankful for. </p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-box">
						<div class="group22">
							<img src="assets/img/mba-v2/nayab.webp" alt="">
							<div class="text-holder">
								<p class="nm">Nayab Choudhary</p>
								<p class="des">MBA</p>										
							</div>
						</div>
						<p class="bot-txt">AAFT provided me with a great launch pad for stepping into the corporate world, armed with tools and best practices critical for success. </p>
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
	.course-info2 button{color:#FF500D; background-color: #fff; border:none; text-align: center; width: 200px; height: 40px; padding: 5px; border-radius: 10px;}
	.course-info2 .info22{color:#ffffff; font-size: 22px;}
	.course-info2 p{color:#ffffff;}
	.course-info2 .info-top {display: flex; align-items: center; background: #FF500D 0% 0% no-repeat padding-box;border-radius: 16px; padding: 20px;}
	.course-info2 {background-repeat: no-repeat; padding: 40px 10px; }
	.course-info2 .bp1{text-align: center;}
	.course-info2 h2{font-size: 24px;}
	.course-info2 .ddln{color:#fff;}
</style>

<section class="course-info2 d-none">
	<div class="container">
		<div class="row info-top">
			<div class="col-sm-9 p-4">
				<p class="info22">Upcoming Application Deadline</p>
				<p>Admissions are closed once the requisite number of participants enroll for the upcoming cohort. <br>Apply early to secure your seat.</p>
			</div>
			<div class="col-sm-3 bp1 p-4">
				<button>Apply Now</button>
				<p class="mt-3"><span class="ddln">Deadline:</span> August 2025</p>
			</div>
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
		<p class="s_hd">The infrastructure at AAFT School of Management is designed to inspire and facilitate a modern learning environment. Equipped with the latest technology, spacious classrooms, high-speed internet connectivity, and a well-stocked library, our students have access to the tools they need to succeed. We also offer dedicated spaces for extracurricular activities, ensuring a well-rounded experience for all.</p>
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
						<li>Sales and Marketing Manager, Finance Manager</li>
						<li>Human Resources (HR), International Business Associate</li>
						<li>Operations Manager, Healthcare and Hospital Manager</li>
						<li>Retail Manager, Supply Chain Executive</li>
						<li>Entrepreneur</li>
						<li>Business Analytics</li>
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
				
		<div class="accordion" id="accordionExample22">
			<div class="card">
				<div class="card-header" data-toggle="collapse" data-target="#collapseOne22" aria-expanded="true">     
					<span class="title">1. What is the eligibility criteria?</span>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
				</div>
				<div id="collapseOne22" class="collapse show" data-parent="#accordionExample22">
					<div class="card-body">
						<ul>
							<li>To be eligible for the MBA program at AAFT University, applicants must have a bachelor's degree in any field with a minimum of 50% marks. Additionally, candidates must clear the entrance examination and personal interview conducted by the university. </li>
						</ul>
					</div>
				</div>
			</div>
			
		<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree22" aria-expanded="false">
				<span class="title">2. What are the career opportunities?</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseThree22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>MBA graduates from AAFT University can pursue various career opportunities, including managerial positions in industries such as marketing, finance, human resources, and international business. They can also become entrepreneurs, consultants, or pursue further studies in their field.</li>
					</ul>
				</div>
			</div>
		</div>
			<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour22" aria-expanded="false">
				<span class="title">3. How do I choose a specialization for my MBA program?</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseFour22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>AAFT University offers specializations in International Business, Finance, HR, Marketing, Digital Marketing, and Media Management. Students can choose their specialization based on their career aspirations and interests.</li>
					</ul>
				</div>
			</div>
		</div>
			<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFive22" aria-expanded="false">
				<span class="title">4. What is the importance of networking during an MBA program?</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseFive22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>Networking is crucial during an MBA program as it helps students build professional relationships, expand their network, and gain access to new opportunities. It can also lead to mentorship and career guidance from experienced professionals in the industry.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSix22" aria-expanded="false">
				<span class="title">5. Can I pursue an MBA program without a business background or degree?</span>
				<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
			</div>
			<div id="collapseSix22" class="collapse" data-parent="#accordionExample22">
				<div class="card-body">
					<ul>
						<li>Yes, students with a non-business background or degree can pursue an MBA program at AAFT University.</li>
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

<?php include('inc/contact-details-new-mbanew1.php'); ?>	
<?php include('inc/form-scripts.php'); ?>
<?php include('inc/footer-script.php'); ?>
	
</body>
</html>