<?php
include("form-scripts.php");
?>
<script>
	//sessionStorage.setItem('email', 'help@aaft.com');
</script>
<style type="text/css">
	.register-form-home-wrapper input[type=text], .register-form-home-wrapper input[type=email], .register-form-home-wrapper input[type=tel], .register-form-home-wrapper select{height: 40px;}
</style>

<div class="register-form-home-lp" id="enquire-cta">
	<div class="row">
		<div class="col-sm-3">
			<h3>Connect With Us:</h3>
			<span>AAFT has been providing education in media, arts and management for the past 30 years.</span><br>
		</div>
		<div class="col-sm-9">
				<div class="m-t-30" id="step02" style="display: none;">
					<!--<form class="m-t-30" method="post" action="" id="step02" style="display: none;">-->
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<label>Enter OTP*</label>
								<input name="Otp" type="tel" required pattern="[0-9]{4}" minlength="4" maxlength="4" class="register-input-box" id="id_Otp" placeholder="Enter OTP*" onkeypress="return IsNumeric(event);" ondrop="return false;">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-btn-wrap">
								<input type="submit" name="" class="form-btn" value="SUBMIT OTP" title="SUBMIT OTP" onclick="checkDetailsEnqOtp()">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-btn-wrap">
								<input type="submit" name="" class="form-btn" value="RESEND OTP" title="RESEND OTP" onclick="reOtp()">
							</div>

							<span id="otpError" style="color: red; font-size: 18px; font-weight: bold; display: flex; justify-content: center;"></span>
						</div>
					</div>
					<!--</form>-->
				</div>

			<div class="m-t-30" id="step01">
			<!--<form class="m-t-30" method="post" action="" id="step01">-->
			<input name="PageName" type="hidden" value="<?php echo $pageOption; ?>" id="id_PageName" required>
				<input name="School" type="hidden" value="" id="id_School" required>
				<input type="hidden" name="Edu" id="id_Edu" value="Graduate">
				<input type="hidden" id="id_utm_source" value="<?php echo $utm_source; ?>">
				<input type="hidden" id="id_utm_medium" value="<?php echo $utm_medium; ?>">
				<input type="hidden" id="id_utm_campaign" value="<?php echo $utm_campaign; ?>">
				<input type="hidden" id="id_utm_term" value="<?php echo $utm_term; ?>">
				<input type="hidden" id="id_utm_creative" value="<?php echo $utm_creative; ?>">
				<input type="hidden" id="id_utm_content" value="<?php echo $utm_content; ?>">
				<input type="hidden" id="id_utm_campaignid" value="<?php echo $utm_campaignid; ?>">
				<input type="hidden" id="id_utm_adgroupid" value="<?php echo $utm_adgroupid; ?>">
				<input type="hidden" id="id_utm_creativeid" value="<?php echo $utm_creativeid; ?>">
				<input type="hidden" id="id_utm_matchtype" value="<?php echo $utm_matchtype; ?>">
				<input type="hidden" id="id_utm_device" value="<?php echo $utm_device; ?>">
				<input type="hidden" id="id_utm_network" value="<?php echo $utm_network; ?>">
				<input type="hidden" id="id_utm_keyword" value="<?php echo $utm_keyword; ?>">
				<input type="hidden" id="id_utm_placement" value="<?php echo $utm_placement; ?>">
				<input type="hidden" id="id_gclid" value="<?php echo $gclid; ?>">
				<input type="hidden" id="id_map" value="<?php echo $map; ?>">
				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<label>NAME*</label>
							<input name="YourName" type="text" required class="register-input-box" id="id_YourName" placeholder="Name*">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>EMAIL*</label>
							<input name="Email" type="email" required class="register-input-box" id="id_Email" placeholder="Email*" onkeypress="return IsNumericSpace(event);">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>CONTACT*</label>
							<input name="ContactNumber" type="tel" required pattern="[0-9]{10}" minlength="10" maxlength="10" class="register-input-box" id="id_ContactNumber" placeholder="Contact Number*" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					</div>
					
					
					<div class="col-sm-3">
						<div class="form-group">
							<input type="hidden" name="" id="id_SchoolName" value="">
							<select name="" required class="register-input-box" id="id_School1" onChange="setBlankTest(this)">
							<option value="" selected="selected">Select School*</option>
							<?php
							$schoolu=GetSchoolDropU();
							$schoolCnt=count($schoolu);
							$i=0;
							while ($i<$schoolCnt)
							{
								echo "<option value=".$schoolu[$i]['id'].">".$schoolu[$i]['name']."</option>";
								$i++;
							}
							?>
							</select>
						</div>
					</div>
				</div>

<script>
	function setBlankTest(sel)
	{

		let t=document.getElementById("id_School1").value,
		e=new XMLHttpRequest;
		e.onreadystatechange=function(){
			4==this.readyState&&200==this.status&&(document.getElementById("id_Course").innerHTML=this.responseText)
		},
		e.open("GET","inc/programs.php?school="+t,!0),e.send();
		
		let s_nm=(sel.options[sel.selectedIndex].text);
		document.getElementById("id_School").value=s_nm;
	}
</script>

				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<label>SELECT COURSE*</label>
							<select class="register-input-box" name="Course" required id="id_Course">
								<option value="" selected="selected">Select Program*</option>
								<option value="">Select School First*</option>
						  </select>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>SELECT STATE*</label>
						<select name="State" required class="register-input-box" id="id_State" onChange="setBlank()">
							<option value="" selected="selected">Select State*</option>
							<?php
							$state=GetStateDrop();
							$stateCnt=count($state);
							$i=0;
							while ($i<$stateCnt)
							{
								echo "<option value=".$state[$i]['code'].">".$state[$i]['name']."</option>";
								$i++;
							}
							?>
							</select>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>SELECT CITY*</label>
							<select name="City" required class="register-input-box" id="id_City">
							<option value="" selected="selected">Select City*</option>
							<option value="">Select State First*</option>
							</select>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-btn-wrap">
							<input type="submit" name="" class="form-btn" value="ENQUIRE NOW" title="ENQUIRE NOW" onclick="checkDetailsEnq()">
						</div>
					</div>
				</div>
			<!--</form>-->
		</div>
	</div>
</div>