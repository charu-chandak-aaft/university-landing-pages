<?php
//include("lib/form-submit.php");

/*$pageDetail = GetCampaignUrlName();
$PageName = $pageDetail['campaignName'];
$SchoolName = $pageDetail['schoolName'];
$Schoolid = $pageDetail['schoolId'];
$PageId = $pageDetail['pageId'];*/

//for new lp
//$SchoolidNewLp='1';
//$Dur='1';
//die();
//GetProgramLPFormNewLp($SchoolidNewLp,'1y');

//$SchoolidNewLp="10";
//$Dur="3";

$SchoolName= GetSchoolName($SchoolidNewLp);
$pageDetail = GetCampaignUrlName();
$campName = $pageDetail['lpName'];
$campType01= strpos($campName,"-");
if(empty($campType01)){
	$campType02= ucfirst($campName);
}else{
	$campType02= ucfirst(substr($campName,0,$campType01));
}
?>
<style type="text/css">
	.register-form-home-wrapper input[type=text], .register-form-home-wrapper input[type=email], .register-form-home-wrapper input[type=tel], .register-form-home-wrapper select{height: 40px;}
</style>

<div class="register-form-home-wrapper" id="enquire-cta" style="width: 450px;">
	<h3>Request a CallBack</h3>
	<span>Fill in Your Details</span><br>
	
	<div class="m-t-30" id="step02" style="display: none;">
	<!--<form class="m-t-30" method="post" action="" id="step02" style="display: none;">-->
		<div class="form-group">
			<label>Enter OTP*</label>
			<input name="Otp" type="tel" required pattern="[0-9]{4}" minlength="4" maxlength="4" class="register-input-box" id="txtOtp" placeholder="Enter OTP*" onkeypress="return IsNumeric(event);" ondrop="return false;">
		</div>
		<div class="form-btn-wrap">
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
		<input name="PageName" type="hidden" value="<?php echo $campType02.'-'.GetDegDip($Dur); ?>" id="txtPag" required>
		<input name="SchoolName" type="hidden" value="<?php echo $SchoolName[0]['name']; ?>" id="txtSna" required>
		<input name="School" type="hidden" value="<?php echo $SchoolidNewLp; ?>" id="txtSchool" required>

		<input type="hidden" id="uso" value="<?php echo $utm_source; ?>">
		<input type="hidden" id="ume" value="<?php echo $utm_medium; ?>">
		<input type="hidden" id="uca" value="<?php echo $utm_campaign; ?>">
		<input type="hidden" id="ute" value="<?php echo $utm_term; ?>">
		<input type="hidden" id="ucr" value="<?php echo $utm_creative; ?>">
		<input type="hidden" id="uco" value="<?php echo $utm_content; ?>">
		<input type="hidden" id="map" value="<?php echo $map; ?>">

		<div class="form-group">
			<label>NAME*</label>
			<input name="YourName" type="text" required class="register-input-box" id="txtName" placeholder="Name*">
		</div>
		<div class="form-group">
			<label>EMAIL*</label>
			<input name="Email" type="email" required class="register-input-box" id="txtEmail" placeholder="Email*" onkeypress="return IsNumericSpace(event);">
		</div>
		<div class="form-group">
			<label>CONTACT*</label>
			<input name="ContactNumber" type="tel" required pattern="[0-9]{10}" minlength="10" maxlength="10" class="register-input-box" id="txtNumber" placeholder="Contact Number*" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
		</div>
		<div class="form-group">
			<label>QUALIFICATION*</label>
			<select name="Edu" class="register-input-box" required id="txtEdu">
		      <option value="" selected="selected">Qualification*</option>
		      <?php
		      $qual=GetQualificationDrop();
		      $qualCnt=count($qual);
		      $i=0;
		      while ($i<$qualCnt)
		      {
		        echo "<option value=".$qual[$i]['q_id'].">".$qual[$i]['q_name']."</option>";
		        $i++;
		        }
		      ?>
		    </select>
		</div>
		<div class="form-group">
			<label>SELECT COURSE*</label>
            <select class="register-input-box" name="Course" required id="txtProgram">
		      <option value="" selected="selected">Select Course*</option>
		      <?php
		      $prg=GetProgramLPFormNewLpForm($SchoolidNewLp,$SubSchoolidNewLp,$Dur);
					//var_dump($prg);
					$prgCnt=count($prg);
					$i=0;
					while ($i<$prgCnt){
						echo "<option value=".$prg[$i]['id'].">".$prg[$i]['name']."</option>";
					$i++;
					}
		      ?>
	      </select>
		</div>
		
		<div class="form-group">
			<label>SELECT STATE*</label>
            <select name="State" required class="register-input-box" id="txtState" onChange="setBlank()">
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

		<div class="form-group">
			<label>SELECT CITY*</label>
            <select name="City" required class="register-input-box" id="txtCity">
		      <option value="" selected="selected">Select City*</option>
		      <option value="">Select State First*</option>
		    </select>
		</div>
		<div class="form-btn-wrap">
			<input type="submit" name="" class="form-btn" value="ENQUIRE NOW" title="ENQUIRE NOW" onclick="checkDetailsEnq()">
		</div>
	<!--</form>-->
	</div>
</div>