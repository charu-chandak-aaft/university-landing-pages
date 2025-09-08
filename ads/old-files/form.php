<?php
(empty($_GET['utm_source'])) ? $utm_source="NA" : $utm_source = $_GET['utm_source'];
(empty($_GET['utm_medium'])) ? $utm_medium="NA" : $utm_medium = $_GET['utm_medium'];
(empty($_GET['utm_campaign'])) ? $utm_campaign="NA" : $utm_campaign = $_GET['utm_campaign'];
(empty($_GET['utm_term'])) ? $utm_term="NA" : $utm_term = $_GET['utm_term'];
(empty($_GET['utm_creative'])) ? $utm_creative="NA" : $utm_creative = $_GET['utm_creative'];
(empty($_GET['utm_content'])) ? $utm_content="NA" : $utm_content = $_GET['utm_content'];
(empty($_GET['map'])) ? $map="NA" : $map = $_GET['map']; 
(empty($_GET['utm_campaignid'])) ? $utm_campaignid="NA" : $utm_campaignid = $_GET['utm_campaignid'];
(empty($_GET['utm_adgroupid'])) ? $utm_adgroupid="NA" : $utm_adgroupid = $_GET['utm_adgroupid'];
(empty($_GET['utm_creativeid'])) ? $utm_creativeid="NA" : $utm_creativeid = $_GET['utm_creativeid'];
(empty($_GET['utm_matchtype'])) ? $utm_matchtype="NA" : $utm_matchtype = $_GET['utm_matchtype'];
(empty($_GET['utm_device'])) ? $utm_device="NA" : $utm_device = $_GET['utm_device'];
(empty($_GET['utm_network'])) ? $utm_network="NA" : $utm_network = $_GET['utm_network'];
(empty($_GET['utm_keyword'])) ? $utm_keyword="NA" : $utm_keyword = $_GET['utm_keyword'];
(empty($_GET['utm_placement'])) ? $utm_placement="NA" : $utm_placement = $_GET['utm_placement'];
(empty($_GET['gclid'])) ? $gclid="NA" : $gclid = $_GET['gclid'];

include("form-scripts.php");
?>
<script>
	//sessionStorage.setItem('email', 'help@aaft.com');
</script>
<style type="text/css">
	.register-form-home-wrapper input[type=text], .register-form-home-wrapper input[type=email], .register-form-home-wrapper input[type=tel], .register-form-home-wrapper select{height: 40px;}
</style>

<div class="register-form-home-wrapper" id="enquire-cta" style="width: 450px;">
	<h3>Request a Call Back</h3>
	<span>Fill in Your Details</span><br>
	
	<div class="m-t-30" id="step02" style="display: none;">
		<div class="form-group">
			<label>Enter OTP*</label>
			<input name="Otp" type="tel" required pattern="[0-9]{4}" minlength="4" maxlength="4" class="register-input-box" id="id_Otp" placeholder="Enter OTP*" onkeypress="return IsNumeric(event);" ondrop="return false;">
		</div>

		<div class="form-btn-wrap">
			<input type="submit" name="" class="form-btn" value="SUBMIT OTP" title="SUBMIT OTP" onclick="checkDetailsEnqOtp()">
		</div>
		
		<div class="form-btn-wrap">
			<input type="submit" name="" class="form-btn" value="RESEND OTP" title="RESEND OTP" onclick="reOtp()">
		</div>

		<span id="otpError" style="color: red; font-size: 18px; font-weight: bold; display: flex; justify-content: center;"></span>
	</div>

	<div class="m-t-30" id="step01">
		<input name="PageName" type="hidden" value="Fashion" id="id_PageName" required>
		<input name="School" type="hidden" value="School of Fashion" id="id_School" required>
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

		<div class="form-group">
			<label>NAME*</label>
			<input name="YourName" type="text" required class="register-input-box" id="id_YourName" placeholder="Name*">
		</div>

		<div class="form-group">
			<label>EMAIL*</label>
			<input name="Email" type="email" required class="register-input-box" id="id_Email" placeholder="Email*" onkeypress="return IsNumericSpace(event);">
		</div>
		
		<div class="form-group">
			<label>CONTACT*</label>
			<input name="ContactNumber" type="tel" required pattern="[0-9]{10}" minlength="10" maxlength="10" class="register-input-box" id="id_ContactNumber" placeholder="Contact Number*" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
		</div>
		
		<div class="form-group">
			<label>QUALIFICATION*</label>
			<select name="Edu" class="register-input-box" required id="id_Edu">
				<option value="" selected="selected">Qualification*</option>
				<option value="Below 12th">Below 12th</option>
				<option value="12th Pursuing">12th Pursuing</option>
				<option value="Graduation Pursuing">Graduation Pursuing</option>
				<option value="Graduate">Graduate</option>
				<option value="Post-Graduation Pursuing">Post-Graduation Pursuing</option>
				<option value="Post Graduate">Post Graduate</option>
			</select>
		</div>
		
		<div class="form-group">
			<label>SELECT COURSE*</label>
            <select class="register-input-box" name="Course" required id="id_Course">
				<option value="" selected="selected">Select Course*</option>
				<option value="PG Diploma in Interior Design">PG Diploma in Interior Design</option>
				<option value="Diploma in Interior Design">Diploma in Interior Design</option>
	      </select>
		</div>
		
		<div class="form-group">
			<label>SELECT STATE*</label>
            <select name="State" required class="register-input-box" id="id_State" onChange="setBlank()">
				<option value="" selected="selected">Select State*</option>
				<option value="Andaman and Nicobar">Andaman and Nicobar</option>
				<option value="Andhra Pradesh">Andhra Pradesh</option>
				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
				<option value="Assam">Assam</option>
				<option value="Bihar">Bihar</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Chhattisgarh">Chhattisgarh</option>
				<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
				<option value="Daman and Diu">Daman and Diu</option>
				<option value="Delhi">Delhi</option>
				<option value="16">Goa</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Haryana">Haryana</option>
				<option value="Himachal Pradesh">Himachal Pradesh</option>
				<option value="Jammu and Kashmir">Jammu and Kashmir</option>
				<option value="Jharkhand">Jharkhand</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kerala">Kerala</option>
				<option value="Lakshadweep">Lakshadweep</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Manipur">Manipur</option>
				<option value="Meghalaya">Meghalaya</option>
				<option value="Mizoram">Mizoram</option>
				<option value="Nagaland">Nagaland</option>
				<option value="Odisha">Odisha</option>
				<option value="Pondicherry">Pondicherry</option>
				<option value="Punjab">Punjab</option>
				<option value="Rajasthan">Rajasthan</option>
				<option value="Sikkim">Sikkim</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Telangana">Telangana</option>
				<option value="Tripura">Tripura</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="Uttrakhand">Uttrakhand</option>
				<option value="West Bengal">West Bengal</option>
			</select>
		</div>

		<div class="form-group">
			<label>SELECT CITY*</label>
            <select name="City" required class="register-input-box" id="id_City">
		      <option value="" selected="selected">Select City*</option>
		      <option value="Test">Test</option>
		    </select>
		</div>
		
		<div class="form-btn-wrap">
			<input type="submit" name="" class="form-btn" value="ENQUIRE NOW" title="ENQUIRE NOW" onclick="checkDetailsEnq()">
		</div>
	</div>
</div>