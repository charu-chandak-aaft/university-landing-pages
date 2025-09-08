<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Referral Program</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
	
<style>
 	@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap');
	body{font-family: Work Sans;}
	
	
	.formCanvas input[type="text"], .formCanvas input[type="tel"], .formCanvas input[type="email"]{border: 1px solid #000000; color: #77838F; width: 100%; background: #F6F6F6; padding: 10px; margin-bottom: 10px;}
	.formCanvas select{border: 1px solid #000000; color: #77838F; width: 100%; background: #F6F6F6; padding: 10px; margin-bottom: 10px;}
	.formCanvas input[type="file"]{width: 100%; border:1px solid #000000; padding-left: 10px; color: #77838F; padding-top: 10px; margin-bottom: 10px;}
	::-webkit-input-placeholder { color: #000000 !important;}
	.formCanvas input[type=file]::file-selector-button {float:right; margin-right: 0; border: none; background: url('images/upload-icon.png') no-repeat 10px center, #DFE2E5; padding: 10px 20px; border-radius: 0; color: #000000; font-size: 14px; cursor: pointer; transition: background .2s ease-in-out; margin-top: -10px; border-left:1px solid #000000; padding-left: 40px;}
	.formCanvas .form h3{background: #ED3237; color:#FFFFFF; padding: 5px 10px; font: normal 18px/28px Work Sans; margin: 0;}
	.formCanvas .formOptions{background: #FFFFFF; padding: 15px;}
	.formCanvas .formOptionsHolder50{display: grid; grid-template-columns: 49% 49%; grid-column-gap: 2%;}
	.formCanvas .formOptionsHolder65{display: grid; grid-template-columns: 65% 33%; grid-column-gap: 2%;}
	.formCanvas .formOptionsHolder100{display: grid; grid-template-columns: 100%;}
	.formCanvas .formOptions .formColumn label{color: #391A47; font: normal 16px/10px Work Sans;}
	.formCanvas .formOptions .formColumn span{color: #ED3237; font-size: 14px;}
	.input-group{display: grid; grid-template-columns: 20% 80%;}
	.input-group-text{background: #000000; color:#FFFFFF; width: 100%; margin-bottom: 10px; border: 1px solid #000000;}	
	.step01{background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 0px 3px 6px #00000029;}
	
	/*social part css*/
	.social-icons {display: inline-block; width: 100%;}
	.social-icons > div {background: #ed3237; padding: 20px; display: flex; justify-content: space-between;}
	.social-icons > div p {margin: 0; color: #fff; font-size: 21px; line-height: 30px;}
	.social-icons > div p {margin: 0; color: #fff; font-size: 21px; line-height: 30px;}
	.links-social a {background-image: url(images/social-icon.png); width: 30px; background-size: 182px; display: inline-block; height: 30px; background-position: 0 0px; background-repeat: no-repeat; border-radius: 100%; transition: 0.5s ease all;}
	.links-social a.insta {background-position: -38px 0px;}
	.links-social a.tw {background-position: -76px 0px;}
	.links-social a.in {background-position: -115px 0px;}
	.links-social a.yt {background-position: -152px 0px;}
	a.fb:hover {background-color: blue; border-radius: 100%; transform: scale(1.2);}
	a.insta:hover {background-color: magenta; transform: scale(1.2);}
	a.tw:hover {background-color: skyblue; transform: scale(1.2);}
	a.in:hover {background-color: #008aff; transform: scale(1.2);}
	a.yt:hover {background-color: #d70000; transform: scale(1.2);}
	
	/*footer part css*/
	.footer-sec {background: #000000; padding: 50px 0; color: #d3d3d3;}
	.footer-sec h3 {font-size: 18px;}
	.footer-sec h2 {font-size: 20px;}
	.footer-sec h4 {font-size: 16px;}
	.linksmenu ul {list-style: none; padding: 0;}
	.linksmenu ul a {color: #fff;}
	.linksmenu p, .linksmenu li {color: #2d2d2d; font-size: 16px; line-height: 22px;}
	.linksmenu h3 {color: #ee495c; font-size: 18px;}
	.linksmenu h5 {color: #fff; font-size: 16px;}
	hr {border-top: solid 2px #ee495c; margin: 20px 0;}
	.linksmenu .col-sm-6 p, .linksmenu .col-sm-12 p {color: #fff;}

	/*media query css*/
	@media screen and (max-width: 480px){
		.formCanvas{background: url('images/mainBg.png') no-repeat left top, #F0F2F7; background-size: 100% 100%;}
		.formCanvas .formOptionsHolder50{display: grid; grid-template-columns: 100%;}
		.formCanvas .formOptionsHolder65{display: grid; grid-template-columns: 100%;}
		.formCanvas .formOptions .formColumn label {color: #391A47;font: normal 16px/26px Work Sans;}
		.heroBanner{background-position: center top; background-size: 100% 190px; padding-top: 165px;}
		.social-icons > div {padding: 17px; flex-wrap: wrap; justify-content: center;}
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
		<img src="https://aaft.edu.in/ads/assets/img/univ-logo.webp" title="AAFT | Referral Program" alt="AAFT | Referral Program" class="img-fluid lplogo">
				
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
	<section class="formCanvas py-5" style="margin-top:70px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">					
					
					<form method="post" action="lib/functions.php" id="enquire-form-step01" onsubmit="return false">
						<input name="utm_campaign" type="hidden" value="<?php echo @$_GET['utm_campaign']; ?>">
						<input name="utm_source" type="hidden" value="<?php echo @$_GET['utm_source']; ?>">
						<input name="utm_medium" type="hidden" value="<?php echo @$_GET['utm_medium']; ?>">
						<input name="utm_term" type="hidden" value="<?php echo @$_GET['utm_term']; ?>">
						<input name="utm_creativeid" type="hidden" value="<?php echo @$_GET['utm_creativeid']; ?>">
						<input name="utm_ad_network" type="hidden" value="<?php echo @$_GET['utm_ad_network']; ?>">
						<input name="utm_marketing" type="hidden" value="<?php echo @$_GET['utm_marketing']; ?>">
						<input name="gclid" type="hidden" value="<?php echo @$_GET['gclid']; ?>">

						<!--////////////////////////////////////////////////////////////-->
						<!--Step 01 Start-->
						<div id="step01" class="step01">							
							
							<div class="form">
								<h3 class="">Your Friend's Information</h3>
								<div class="formOptions">
									<div class="formOptionsHolder50">
										<div class="formColumn">
											<label>First Name*</label>
											<input type="text" name="FirstName" value="" required>
										</div>
										<div class="formColumn">
											<label>Last Name*</label>
											<input type="text" name="LastName" value="" required>
										</div>
										<div class="formColumn">
											<label>Phone*</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" style="background: #000000; color:#FFFFFF; width: 100%; margin-bottom: 10px; border: 1px solid #000000;">+91</span>
												</div>
												<input id="txtPhoneCon" name="Phone" type="tel" pattern="[0-9]{10}" minlength="10" maxlength="10" placeholder="Mobile (10 Digits)*" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required >
											</div>
										</div>
										<div class="formColumn">
											<label>Email*</label>
											<input type="email" name="EmailAddress" value="" required>
										</div>										
										<div class="formColumn">
											<label>State*</label>
											<select name="mx_State" required>
												<option value="">State</option>
												<option value="Andhra Pradesh">Andhra Pradesh</option>
												<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
												<option value="Arunachal Pradesh">Arunachal Pradesh</option>
												<option value="Assam">Assam</option>
												<option value="Bihar">Bihar</option>
												<option value="Chandigarh">Chandigarh</option>
												<option value="Chhattisgarh">Chhattisgarh</option>
												<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
												<option value="Daman and Diu">Daman and Diu</option>
												<option value="Delhi">Delhi</option>
												<option value="Lakshadweep">Lakshadweep</option>
												<option value="Puducherry">Puducherry</option>
												<option value="Goa">Goa</option>
												<option value="Gujarat">Gujarat</option>
												<option value="Haryana">Haryana</option>
												<option value="Himachal Pradesh">Himachal Pradesh</option>
												<option value="Jammu and Kashmir">Jammu and Kashmir</option>
												<option value="Jharkhand">Jharkhand</option>
												<option value="Karnataka">Karnataka</option>
												<option value="Kerala">Kerala</option>
												<option value="Madhya Pradesh">Madhya Pradesh</option>
												<option value="Maharashtra">Maharashtra</option>
												<option value="Manipur">Manipur</option>
												<option value="Meghalaya">Meghalaya</option>
												<option value="Mizoram">Mizoram</option>
												<option value="Nagaland">Nagaland</option>
												<option value="Odisha">Odisha</option>
												<option value="Punjab">Punjab</option>
												<option value="Rajasthan">Rajasthan</option>
												<option value="Sikkim">Sikkim</option>
												<option value="Tamil Nadu">Tamil Nadu</option>
												<option value="Telangana">Telangana</option>
												<option value="Tripura">Tripura</option>
												<option value="Uttar Pradesh">Uttar Pradesh</option>
												<option value="Uttarakhand">Uttarakhand</option>
												<option value="West Bengal">West Bengal</option>
												<option value="Others">Others</option>
											</select>
										</div>
										
										<div class="formColumn">
											<label>City*</label>
											<input type="text" name="mx_City" value="" required>
										</div>
									</div>
									<div class="formOptionsHolder50">
										<div class="formColumn">
											<label>Expected Program of Interest*</label>
											<select name="mx_Course" required>
												<option value="">Select Program of Interest</option>
												<option value="Diploma in Nutrition and Dietetics">Diploma in Nutrition and Dietetics</option>
												<option value="M.Sc in Nutrition and Dietetics">M.Sc in Nutrition and Dietetics</option>
												<option value="B.Sc in Nutrition and Dietetics">B.Sc in Nutrition and Dietetics</option>
												<option value="Diploma in Hotel Management">Diploma in Hotel Management</option>
												<option value="BA in Hospitality &amp; Tourism Management">BA in Hospitality &amp; Tourism Management</option>
												<option value="BBA-LLB">BBA-LLB</option>
												<option value="Phd in Media">Phd in Media</option>
												<option value="PhD in Journalism">PhD in Journalism</option>
												<option value="PhD in Management">PhD in Management</option>
												<option value="Master in Fine Arts">Master in Fine Arts</option>
												<option value="Bachelor in Fine Arts">Bachelor in Fine Arts</option>
												<option value="Diploma in Fine Arts">Diploma in Fine Arts</option>
												<option value="Diploma in Dance">Diploma in Dance</option>
												<option value="Diploma in Music Production">Diploma in Music Production</option>
												<option value="Masters in Performing Arts">Masters in Performing Arts</option>
												<option value="Bachelor’s in Performing Arts">Bachelor’s in Performing Arts</option>
												<option value="Master of Business Administration">Master of Business Administration</option>
												<option value="Bachelor of Business Administration – International Business">Bachelor of Business Administration – International Business</option>
												<option value="Master of Business Administration - Finance">Master of Business Administration - Finance</option>
												<option value="Master of Business Administration - Marketing">Master of Business Administration - Marketing</option>
												<option value="Master of Business Administration - International Business">Master of Business Administration - International Business</option>
												<option value="Master of Business Administration – (Executive)">Master of Business Administration – (Executive)</option>
												<option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
												<option value="B.Sc in Interior Design">B.Sc in Interior Design</option>
												<option value="M.Des in Interior Design">M.Des in Interior Design</option>
												<option value="Diploma in Interior Design">Diploma in Interior Design</option>
												<option value="B.DES. IN INTERIOR DESIGN">B.DES. IN INTERIOR DESIGN</option>
												<option value="M.Sc. in Fashion Design">M.Sc. in Fashion Design</option>
												<option value="PG Diploma in Fashion Design">PG Diploma in Fashion Design</option>
												<option value="Diploma in Fashion Design">Diploma in Fashion Design</option>
												<option value="B.Sc. in Fashion Design">B.Sc. in Fashion Design</option>
												<option value="B.Des. (Fashion Design)">B.Des. (Fashion Design)</option>
												<option value="Diploma in Digital Marketing">Diploma in Digital Marketing</option>
												<option value="B.A. in Digital Marketing">B.A. in Digital Marketing</option>
												<option value="M.Sc.in Animation &amp; VFX">M.Sc.in Animation &amp; VFX</option>
												<option value="Diploma in 3d &amp; VFX">Diploma in 3d &amp; VFX</option>
												<option value="B.Sc. in Animation &amp; VFX">B.Sc. in Animation &amp; VFX</option>
												<option value="Diploma in Journalism &amp; Mass Communication">Diploma in Journalism &amp; Mass Communication</option>
												<option value="Post Graduate Diploma in Journalism &amp;Mass Communication">Post Graduate Diploma in Journalism &amp;Mass Communication</option>
												<option value="M.A. in Journalism &amp; Mass Communication">M.A. in Journalism &amp; Mass Communication</option>
												<option value="B.A. in Journalism &amp;Mass Communication">B.A. in Journalism &amp;Mass Communication</option>
												<option value="Diploma in Photography">Diploma in Photography</option>
												<option value="M.A. (Photography)">M.A. (Photography)</option>
												<option value="B.A. (Photography)">B.A. (Photography)</option>
												<option value="BA in Event Management">BA in Event Management</option>
												<option value="Diploma in Event Management">Diploma in Event Management</option>
												<option value="Diploma in PR &amp; Events">Diploma in PR &amp; Events</option>
												<option value="PG Diploma in Advertising &amp; Brand Communication">PG Diploma in Advertising &amp; Brand Communication</option>
												<option value="M.A. PR and Events">M.A. PR and Events</option>
												<option value="B.A. Event Management">B.A. Event Management</option>
												<option value="Diploma in Cinematography">Diploma in Cinematography</option>
												<option value="Diploma in Direction">Diploma in Direction</option>
												<option value="Diploma in Acting for Film &amp; TV">Diploma in Acting for Film &amp; TV</option>
												<option value="Diploma in Post Production">Diploma in Post Production</option>
												<option value="M.A. Cinema">M.A. Cinema</option>
												<option value="B.A. Cinema">B.A. Cinema</option>
											</select>
										</div>
										<div class="formColumn">
											<label>Gender*</label>
											<div style="display: flex; align-items: center; padding-top: 10px;">
												<input type="radio" name="gender" value="Male" checked> <p class="m-0 px-2">Male</p> <input type="radio" name="gender" value="Female"> <p class="m-0 px-2">Female</p> <input type="radio" name="gender" value="Other"> <p class="m-0 pl-2">Other</p>
											</div>
										</div>
									</div>										
								</div>						
							</div>
							
							<div class="form py-4">
								<h3 class="">Referred By</h3>
								<div class="formOptions">
									<div class="formOptionsHolder50">
										<div class="formColumn">
											<label>First Name*</label>
											<input type="text" name="mx_Ref_First_Name" value="" required>
										</div>
										<div class="formColumn">
											<label>Last Name*</label>
											<input type="text" name="mx_Ref_Last_Name" value="" required>
										</div>
										<div class="formColumn">
											<label>Phone*</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" style="background: #000000; color:#FFFFFF; width: 100%; margin-bottom: 10px; border: 1px solid #000000;">+91</span>
												</div>
												<input name="mx_Ref_Contact" type="tel" pattern="[0-9]{10}" minlength="10" maxlength="10" placeholder="Mobile (10 Digits)*" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required >
											</div>
										</div>
										<div class="formColumn">
											<label>Email*</label>
											<input type="email" name="mx_Ref_Email" value="" required>
										</div>										
										<div class="formColumn">
											<label>State*</label>
											<select name="mx_Ref_State" required>
												<option value="">State</option>
												<option value="Andhra Pradesh">Andhra Pradesh</option>
												<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
												<option value="Arunachal Pradesh">Arunachal Pradesh</option>
												<option value="Assam">Assam</option>
												<option value="Bihar">Bihar</option>
												<option value="Chandigarh">Chandigarh</option>
												<option value="Chhattisgarh">Chhattisgarh</option>
												<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
												<option value="Daman and Diu">Daman and Diu</option>
												<option value="Delhi">Delhi</option>
												<option value="Lakshadweep">Lakshadweep</option>
												<option value="Puducherry">Puducherry</option>
												<option value="Goa">Goa</option>
												<option value="Gujarat">Gujarat</option>
												<option value="Haryana">Haryana</option>
												<option value="Himachal Pradesh">Himachal Pradesh</option>
												<option value="Jammu and Kashmir">Jammu and Kashmir</option>
												<option value="Jharkhand">Jharkhand</option>
												<option value="Karnataka">Karnataka</option>
												<option value="Kerala">Kerala</option>
												<option value="Madhya Pradesh">Madhya Pradesh</option>
												<option value="Maharashtra">Maharashtra</option>
												<option value="Manipur">Manipur</option>
												<option value="Meghalaya">Meghalaya</option>
												<option value="Mizoram">Mizoram</option>
												<option value="Nagaland">Nagaland</option>
												<option value="Odisha">Odisha</option>
												<option value="Punjab">Punjab</option>
												<option value="Rajasthan">Rajasthan</option>
												<option value="Sikkim">Sikkim</option>
												<option value="Tamil Nadu">Tamil Nadu</option>
												<option value="Telangana">Telangana</option>
												<option value="Tripura">Tripura</option>
												<option value="Uttar Pradesh">Uttar Pradesh</option>
												<option value="Uttarakhand">Uttarakhand</option>
												<option value="West Bengal">West Bengal</option>
												<option value="Others">Others</option>
											</select>
										</div>
										
										<div class="formColumn">
											<label>City*</label>
											<input type="text" name="mx_Ref_City" value="" required>
										</div>
									</div>

									<div class="formOptionsHolder50">
										<div class="formColumn">
											<label>How are you associated with us?*</label>
											<select name="mx_Ref_Student_Type" required>
												<option value="">Select Student Type</option>
												<option value="Current Student">Current Student</option>
												<option value="Ex Student">Ex Student</option>
												<option value="Friend">Friend</option>
												<option value="Family Member">Family Member</option>												
												<option value="Others">Others</option>
											</select>
										</div>										
										<div class="formColumn">
											<label>Gender*</label>
											<div style="display: flex; align-items: center; padding-top: 10px;">
												<input type="radio" name="mx_Ref_Gender" value="Male" checked> <p class="m-0 px-2">Male</p> <input type="radio" name="mx_Ref_Gender" value="Female"> <p class="m-0 px-2">Female</p> <input type="radio" name="gender" value="Other"> <p class="m-0 pl-2">Other</p>
											</div>
										</div>
									</div>	

									<p class="mt-3" style="display: flex"><input type="checkbox" id="terms" name="tnc"> &nbsp;&nbsp; Please accept the Terms and conditions</p>
									<p class="mt-3" style="display: flex"><input type="checkbox" id="terms" name="tnc"> &nbsp;&nbsp; <i class='bx bxl-whatsapp-square' style="color: #25D366; font-size:25px;"></i> &nbsp; Will send you information on WhatsApp</p>
									
									<p>1. The cash reward will be paid to the referrer once the student is admitted to the college</p>
									<p>2. A Referrer can refer more than one student and the referral cash reward will be paid for each student referred</p>
									<p>3. Existing students who refer can encash the reward or can apply it as a fees discount for the current semester</p>
									<p>4. The Referrer can refer online from anywhere in the world. Update the contact number so that we can reach out to you to get the bank details while paying the reward</p>

									<style>
									.buttonsBar{display: flex; justify-content: flex-start;}
									.customBtnCont{width: 150px; height: 46px; background: #ED3237; border: none; color: #FFFFFF;}
									.customBtnSave{width: 150px; height: 46px; background: #000000; border: 1px solid #000000; color: #FFFFFF;}
									</style>
									<div class="buttonsBar">
										<input name="step" type="hidden" value="1">											
										<input class="customBtnCont" type="submit" value="Continue" onclick="formSubmit01()">
									</div>
								</div>						
							</div>
						</div>
					</form>
					
				</div>				
			</div>
		</div>
	</section>	
	
	<div class="social-icons">
        <div class="container">
            <p>Explore. Discover. Connect. Follow us on:</p>
            <div class="links-social">
                <a href="https://www.facebook.com/aaftindia/" class="fb"></a>
                <a href="https://www.instagram.com/aaft_india/" class="insta"></a>
                <a href="https://twitter.com/aaftindia?lang=en" class="tw"></a>
                <a href="https://www.linkedin.com/in/aaft-university-a726641b3/" class="in"></a>
                <a href="https://www.youtube.com/c/AAFTSCHOOL" class="yt"></a>

            </div>
        </div>
    </div>

	<section class="footer-sec linksmenu py-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14858.576403235824!2d81.896712744079!3d21.403913747109172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd9e6d5a978d%3A0x88a625c6696a9aae!2sAAFT%20University!5e0!3m2!1sen!2sin!4v1606288584724!5m2!1sen!2sin" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>			
				<div class="col-sm-3">
					<h3> Admission Details</h3>
					<ul>
						<li><a href="https://aaft.edu.in/faq/">FAQ</a></li>
						<li><a href="https://aaft.edu.in/icici-pay/iciciform.php">Pay Fee Online</a></li>
					</ul>
				</div>

				<div class="col-sm-3">
					<h3>Schools</h3>
					<ul>
						<li><a href="https://aaft.edu.in/school-of-cinema/">School of Cinema</a></li>
						<li><a href="https://aaft.edu.in/school-of-hospitality-tourism/">School of Hospitality &amp; Tourism Management</a></li>
						<li><a href="https://aaft.edu.in/school-of-law/">School of Law</a></li>
						<li><a href="https://aaft.edu.in/school-of-p-hd/">School of Doctoral Research</a></li>
						<li><a href="https://aaft.edu.in/school-of-fine-arts/">School of Fine Arts</a></li>
						<li><a href="https://aaft.edu.in/school-of-performing-arts/">School of Performing Arts</a></li>
						<li><a href="https://aaft.edu.in/school-of-management/">School of Management</a></li>
						<li><a href="https://aaft.edu.in/school-of-interior-design/">School of Interior Design</a></li>
						<li><a href="https://aaft.edu.in/school-of-fashion/">School of Fashion Design</a></li>
						<li><a href="https://aaft.edu.in/school-of-digital-marketing/">School of Digital Marketing</a></li>
						<li><a href="https://aaft.edu.in/school-of-animation/">School of Animation</a></li>
						<li><a href="https://aaft.edu.in/school-of-journ-mass-comm/">School of Journalism &amp; Mass Communication</a></li>
						<li><a href="https://aaft.edu.in/school-of-photography/">School of Photography</a></li>
						<li><a href="https://aaft.edu.in/school-of-pr-events/">School of PR &amp; Events</a></li>
					</ul>
				</div>
				
				<div class="col-sm-3">
					<h3>Contact Us</h3>
					<ul>
						<li><a href="https://aaft.edu.in/contact-us/">Contact Us</a></li>
					</ul>
				</div>
			</div>

			<hr>
			<div class="row">
				<div class="col-sm-6">
					<h5>Admission Office</h5>
					<p>AAFT University GF-18, Ground Floor, Shyam Plaza, Pandri, Raipur, Chhattisgarh-492001, India</p>
				</div>
				<div class="col-sm-6">
					<h5>University Campus</h5>
					<p>AAFT University, Vill. Manth, Kharora,District – Raipur, Chhattisgarh- 493225</p>
				</div>
			</div>
			<hr>
			
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>© 2022 SOCIETY FOR MEDIA ARTS • Powered by AAFT</p>
				</div>
			</div>
		</div>
	</section>	
	
	<script>
	function formSubmit01(){

		let checVal = document.getElementById("terms");
		if(checVal.checked==false){
			alert("Please accept Terms and conditions");
		}else{
			document.getElementById("enquire-form-step01").addEventListener("submit", function(event) {
			event.preventDefault(); // Prevent form from being submitted and page refreshed
			
			var form = event.target;
			var formData = new FormData(form); // Create FormData object from form
			
			var xhr = new XMLHttpRequest();
			xhr.open("POST", form.action); // Use the form's action attribute as the URL to submit to
			xhr.onload = function() {
				if (xhr.status === 200) {
				// Success! Do something with the response
				console.log(xhr.responseText);
				if(xhr.responseText=="Success"){
					//form steps
					window.location.href="thankyou.php";								
				}
				} else {
				// Error! Handle the error
				console.error(xhr.statusText);
				}
			};
			xhr.onerror = function() {
				// Error! Handle the error
				console.error("Network error");
			};
			xhr.send(formData); // Send the form data as a POST request
			});
		}
	}
	</script>
	
	
</body>
</html>
