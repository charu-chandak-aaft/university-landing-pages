<?php
include("form-scripts.php");
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$userIP = getUserIP();
// $userIP = '103.191.183.74';
$url = "http://ip-api.com/json/$userIP";
$json = file_get_contents($url);
$data = json_decode($json, true);
if ($data['status'] === 'success') {
    $state = $data['regionName'];
    if($state == 'National Capital Territory of Delhi')
        $state = 'Delhi';
    $city = $data['city'];
}
?>
<script>
	//sessionStorage.setItem('email', 'help@aaft.com');
</script>
<style type="text/css">
	.register-form-home-wrapper input[type=text], .register-form-home-wrapper input[type=email], .register-form-home-wrapper input[type=tel], .register-form-home-wrapper select{height: 40px;}
</style>

<div class="" id="enquire-cta">
	<h3>Request a Call Back</h3>
	<span>Fill in Your Details</span><br>
	
	<div class="m-t-30" id="step02" style="display: none;">
	<!--<form class="m-t-30" method="post" action="" id="step02" style="display: none;">-->
		<div class="form-group">
			<label>Enter OTP*</label>
			<input name="Otp" type="tel" required pattern="[0-9]{4}" minlength="4" maxlength="4" class="register-input-box" id="id_Otp" placeholder="Enter OTP*" onkeypress="return IsNumeric(event);" ondrop="return false;">
		</div>
		<div class="form-btn-wrap mb-4">
			<input type="submit" name="" class="form-btn" value="SUBMIT OTP" title="SUBMIT OTP" onclick="checkDetailsEnqOtp()">
		</div>
		<div class="form-btn-wrap">
			<input type="submit" name="" class="form-btn" value="RESEND OTP" title="RESEND OTP" onclick="reOtp()">
		</div>

		<span id="otpError" style="color: red; font-size: 18px; font-weight: bold; display: flex; justify-content: center;"></span>
	<!--</form>-->
	</div>

	<div class="m-t-30" id="step01">
	<!--<form class="m-t-30" method="post" action="" id="step01">-->
		<input name="PageName" type="hidden" value="<?php echo $pageOption; ?>" id="id_PageName" required>
		<input name="School" type="hidden" value="<?php echo $schoolOption; ?>" id="id_School" required>
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
		<input type="hidden" id="mx_UTM_Source" name="mx_UTM_Source" value="<?php echo isset($_GET['mx_UTM_Source']) ? htmlspecialchars($_GET['mx_UTM_Source']) : ''; ?>">
		<input type="hidden" id="mx_UTM_Medium" name="mx_UTM_Medium" value="<?php echo isset($_GET['mx_UTM_Medium']) ? htmlspecialchars($_GET['mx_UTM_Medium']) : ''; ?>">
	<input type="hidden" id="mx_UTM_Keyword" name="mx_UTM_Keyword" value="<?php echo isset($_GET['mx_UTM_Keyword']) ? htmlspecialchars($_GET['mx_UTM_Keyword']) : ''; ?>">
	<input type="hidden" id="mx_UTM_creativeid" name="mx_UTM_creativeid" value="<?php echo isset($_GET['mx_UTM_creativeid']) ? htmlspecialchars($_GET['mx_UTM_creativeid']) : ''; ?>">
	<input type="hidden" id="mx_UTM_Campaign" name="mx_UTM_Campaign" value="<?php echo isset($_GET['mx_UTM_Campaign']) ? htmlspecialchars($_GET['mx_UTM_Campaign']) : ''; ?>">
<input type="hidden" id="UTM_adgroup" name="UTM_adgroup" value="<?php echo isset($_GET['UTM_adgroup']) ? htmlspecialchars($_GET['UTM_adgroup']) : ''; ?>">
	<input type="hidden" id="mx_UTM_adgroup" name="mx_UTM_adgroup" value="<?php echo isset($_GET['mx_UTM_adgroup']) ? htmlspecialchars($_GET['mx_UTM_adgroup']) : ''; ?>">

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
				<option value="12th Pursuing">12th Pursuing</option>
				<option value="12th Passed">12th Passed</option>
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
				<?php echo $courseOption; ?>
	      </select>
		</div>
		
		<div class="form-group">
			<label>SELECT STATE*</label>
			<input name="State" type="hidden" id="id_State" required>
		</div>

		<div class="form-group">
			<label>SELECT CITY*</label>
			<input name="City" type="hidden" id="id_City" required>
		</div>
		<div class="form-group">
			<div class="checkbox">
			<p style="color:#5e5e5e!important">
				<input id="agreeCheckbox" type="checkbox">&nbsp;
				I acknowledge and agree to the <a href="/terms-and-conditions" target="_blank">Terms and Conditions</a> of AAFT University, including the admission policies, privacy, and code of conduct.
			</p>
			</div>
			</div>
		<div class="form-btn-wrap">
			<input id="subBtn" type="submit" name="" class="form-btn" value="INQUIRE NOW" title="INQUIRE NOW" onclick="checkDetailsEnq()">
			<button id="waitBtn" class="form-btn" style="display:none;">Please Wait...</button>
		</div>
	<!--</form>-->
	</div>
</div>
<script>
    document.getElementById("id_State").value = "<?= $state; ?>";
    document.getElementById("id_City").value = "<?= $city; ?>";
</script>