<?php
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$link = "https";
else
	$link = "http";
	
// Here append the common URL characters.
$link .= "://";
	
// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];
	
// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
	
// Print the link
//echo $link;

$find = strpos($link,"?");
if($find){
	$finalUrl = "form.php".substr($link, $find);
}else{
	$finalUrl = "form.php";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Refferal Program</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="fontss/Recoleta/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="fontss/SF-Pro/stylesheet.css" type="text/css" />
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<style>
 	@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap');
	body{font-family: Work Sans;}
	.heroBanner{background-color: #ED3237; background-image: url("images/heroBanner.jpg"); background-repeat: no-repeat; background-position: right center;margin-top: 70px; }
	.heroBanner h1{font: normal 34px/45px Work Sans; color: #FFFFFF;}
	.heroBanner p{font: normal 18px/30px Work Sans; color: #FFFFFF;}
	
	.howWorks{}
	.howWorks h2{font: normal 29px/37px Work Sans; color: #232323;}
	.howWorks p{font: normal 18px/25px Work Sans;; color: #232323;}
	.howWorks .process{display: flex;align-items: center; margin: 25px 0;}
	.howWorks .process p{margin: 0;}
	.howWorks .workBox{background: #FFFFFF; box-shadow: 0px 3px 30px #00000029;}
	.howWorks .numCount{height: 40px; width: 40px; background: #FFE9E9; border-radius: 50%; border: 1px solid #ED3237; display: flex; align-items: center; justify-content: center; margin-right: 15px;}
	.howWorks .numText{width: 80%;}
	
	
	.refEarn .refEarnTxtBoxLeftTxt{background: #ED3237;}
	
	@media only screen and (max-width:480px)
	{
		.heroBanner{
			background-position: center top;
			background-size: 100% 190px;
			padding-top: 165px;
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
.navbar a{color: #000; text-decoration: none; font-weight: 600; transition: color 0.3s ease-in-out; font: normal 15px/25px Work Sans; }
.navbar a:hover{color: #000;}
.navbar a, .navbar a:focus {padding: 10px 8px 10px 8px !important;}	
.lplogo{width: 155px; padding: 10px 0;}
.hero_sec_advertising_new{margin-top:70px;}
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
			
			<li><a href="<?php echo $finalUrl; ?>" onClick="menuHide()">Apply Now</a></li>
			<li><a href="https://aaft.edu.in/about-aaft-university/" onClick="menuHide()">About Us</a></li>
			<li><a href="https://aaft.edu.in/admission-process/" onClick="menuHide()">How To Apply</a></li>
			<li><a href="https://aaft.edu.in/faq/" onClick="menuHide()">FAQ</a></li>
			<li><a href="https://aaft.edu.in/placements/" onClick="menuHide()">Placements</a></li>
		</ul>
		<img src="https://aaft.edu.in/ads/assets/img/univ-logo.webp" title="AAFT | School of advertising" alt="AAFT | School of advertising" class="img-fluid lplogo">
				
		<a class="d-none d-sm-block" style="color:#ffffff; background: #ff500d;text-align: center; padding: 10px 12px; border-radius: 4px; font-weight: bold; text-decoration: none; order:3;">
		Apply Now</a>
	</div>
</nav>	
	
<script>
function menuHide() {
	//alert('welcome');
	document.getElementById("checkbox").checked = false;
}
	
</script>
<!--  navigation--->
	
	<section class="heroBanner">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 py-5">					
					<h1>Student Referral Program</h1>
					<p>Refer a friend, relative, or family at CLU and let them accomplish a successful career ahead. The student referral program is introducing an opportunity to those who are financially challenged but hold a passion for education. CLU is committed to provide an affordable platform for the students to fulfill their dreams.</p>
				</div>
				<div class="col-sm-6"></div>
			</div>
		</div>
	</section>
	
	<section class="howWorks py-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 pr-sm-0">
					<div class="workBox p-5">
						<h2 class="mb-4">Here is how it works:</h2>
						<div class="process">
							<div class="numCount">1</div> <div class="numText"><p> Fill out and submit the form</p></div>
						</div>
						<div class="process">
							<div class="numCount">2</div> <div class="numText"><p>To Confirm OTP will sent on your phone</p></div>
						</div>	
						<div class="process">
							<div class="numCount">3</div> <div class="numText"><p>One of our Admissions Advisors will contact the person you refer They can start their program</p></div>
						</div>
						<div class="process">
							<div class="numCount">4</div> <div class="numText"><p>You receive 5k discount on their fees or 5K Amazon/Flipkart vouchers</p></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 pl-sm-0"><img src="images/howWorkLady.jpg" class="py-4 w-100"></div>
			</div>
		</div>
	</section>
	
	<style>
		.refEarnTxtBoxLeftTxt h2{font: normal 24px/45px Work Sans; color: #FFFFFF;}
		.refEarnTxtBoxLeftTxt p{font: normal 18px/30px Work Sans; color: #FFFFFF;}
		
		.refEarnTxtBoxRight h2{font: 600 34px/45px Work Sans; color: #232323;}
		.refEarnTxtBoxRight {border: 1px solid #ED3237; height: 100%; text-align: center;}
		.redLine{background: #ED3237; height: 4px; width: 80%;}
		
		.bottomTxt p{font: normal normal normal 18px/30px Work Sans; color: #232323;}
		.refEarnTxtBoxRight .custBtn{width: 165px; background: #ED3237; border: none; color: #FFFFFF;}
		
	</style>
	
	<section class="refEarn pb-5">
		<div class="container">
			<div class="row">				
				<div class="col-sm-6">
					<div class="refEarnTxtBoxLeftImg">
						<img src="images/refEarn.jpg" class="w-100">
					</div>
					<div class="refEarnTxtBoxLeftTxt p-4">
						<h2>Refer and Earn</h2>
						<p>AAFT is improving its learning environment for academic programs with the help of their professional faculty members and their teaching styles so the students can get up-to-date knowledge related to their field and learn the most required skills which are highly demandable in the job market.</p>
					</div>					
				</div>
				<div class="col-sm-6">
					<div class="refEarnTxtBoxRight p-4">
						<h2>Do you know someone who could benefit from a new career? You can receive a financial reward for your referrals.</h2>
						<div class="redLine mx-auto"></div>
						<img src="images/univ-logo.jpg" class="py-4 mt-4" width="150"><br>
						<a href="<?php echo $finalUrl; ?>" class="custBtn btn">Refer Now</a>
					</div>					
										
				</div>
			</div>
		</div>
	</section>
	
	<section class="bottomTxt py-5">
		<div class="container">
			<p>We look forward to helping you change someone’s life for the better!</p>
			<p>*In order to qualify for the 5k discount on their fees or 5K Amazon/Flipkart vouchers, the person you refer must not have contacted us previously and they must stay in their program a minimum of 60 days, i.e. two months.</p>
		</div>
	</section>
<style>
.footer-sec {
    background: #191830;
    padding: 50px 0;
    color: #d3d3d3;
}
	.footer-sec h3 {
    font-size: 18px;
}
	.footer-sec h2 {
    font-size: 20px;
}
	.footer-sec h4 {
    font-size: 16px;
}
	</style>
<section class="footer-sec">
	<div class="container">
		
		<div class="row">
		    
			<div class="col-sm-4">
			    <h3>Our Campus-</h3>
				<div class="address">
					<h2>AAFT University</h2>
					<h4>Vill.- Manth, Kharora, District- Raipur,</h4>
					<h4>Chhattisgarh- 493225</h4>
					
				</div>
			</div>
			<div class="col-sm-3">
			    <h3>Admission Office-</h3>
				<div class="address">
					<h2>AAFT University</h2>
					<h4>GF-18, Ground Floor, Shyam Plaza,</h4>
					<h4>Pandri, Raipur, Chhattisgarh, India</h4>
					
				</div>
			</div>
			<div class="col-sm-5"></div>
		</div>
		
	</div>
</section>	
	
</body>
</html>
