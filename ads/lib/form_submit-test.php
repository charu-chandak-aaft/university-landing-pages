<?php
$TempID="5f04297cd6fc055ef3620221";
$AuthID="334584AYu4VCVvJw5f00120eP1";
$FindSlash = strrpos(getCurrentURL(),'/');
$ReUrl = substr(getCurrentURL(),$FindSlash+1);

if(isset($_POST['BtnSubmit']))
{
	/*session_unset(); 
	session_destroy();
	session_start();*/

	$SchoolName = $_POST['SchoolName'];
	$PageName = $_POST['PageName'];
	$Name = $_POST['YourName'];
	$Emailid = $_POST['Email'];
	$Phone = $_POST['ContactNumber'];
	$CourseId = $_POST['Course'];
	$SchoolId = $_POST['School'];
	$QualId = $_POST['Edu'];
	$StateId = $_POST['State'];
	$CityId = $_POST['City'];
	$Remark = $_POST['Remark'];
	
	/*echo $SchoolName = $_POST['SchoolName'];
	echo $PageName = $_POST['PageName'];
	echo $Name = $_POST['YourName'];
	echo $Emailid = $_POST['Email'];
	echo $Phone = $_POST['ContactNumber'];
	echo $CourseId = $_POST['Course'];
	echo $SchoolId = $_POST['School'];
	echo $QualId = $_POST['Edu'];
	echo $StateId = $_POST['State'];
	echo $CityId = $_POST['City'];
	echo $Remark = $_POST['Remark'];*/
	
	$Ip = $_SERVER['REMOTE_ADDR'];
	
	$Otp = rand(1000, 9999);
	$_SESSION['Otp'] = $Otp;
	$sesOtp = $_SESSION['Otp'];
	$_SESSION['Phone'] = $Phone;
	$sesPhone = $_SESSION['Phone'];

	//-----------------------------
	$recodExist = GetFormData($Phone);
	
	$recodExistCount = count($recodExist);
	
	if($recodExistCount>0){

		date_default_timezone_set("Asia/Kolkata");
		$currentDate = date('Y-m-d H:i:s');
		$recordCreateDate = $recodExist[0]['created_on'];

		$recordCreateDate = strtotime($recordCreateDate);
		$currentDate = strtotime($currentDate);
		$difference = intval(abs($currentDate - $recordCreateDate)/3600);
		//echo $difference;
		
		if($difference>0){
		
			SubmitConditionalData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$SchoolName,$PageName,$Otp,$Remark,$map,$utm_source,$utm_medium,$utm_campaign,$utm_content,$TempID,$AuthID,$ReUrl);	
			//die();
			lsqLeadCurl();
			
		}else{
			$courseApply = $recodExist[0]['course_id'];
			if($courseApply==$CourseId){
				$otpStatus = $recodExist[0]['otp_varified'];
				$recordId = $recodExist[0]['id'];
				$attempt = $recodExist[0]['fillcount']+1;

				if($otpStatus==1){
					header("location: lib/thanks.html");
				}else{
					UpdateFormData($Otp,$Phone,$attempt,$recordId,$utm_source,$utm_medium,$utm_campaign,$utm_content,$TempID,$AuthID,$ReUrl);
				}
			}else{
				SubmitConditionalData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$SchoolName,$PageName,$Otp,$Remark,$map,$utm_source,$utm_medium,$utm_campaign,$utm_content,$TempID,$AuthID,$ReUrl);
				lsqLeadCurl();
			}
		}
	}else{
		SubmitConditionalData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$SchoolName,$PageName,$Otp,$Remark,$map,$utm_source,$utm_medium,$utm_campaign,$utm_content,$TempID,$AuthID,$ReUrl);
		lsqLeadCurl();
	}
	//-----------------------------
}

if(isset($_POST['OtpSubmit']))
{
	//$OtpStatus="";
	$OtpPost = $_POST['Otp'];
	$Otp = $_SESSION['Otp'];
	$Phone = $_SESSION['Phone'];
	$OtpStatus = verifyotp($Phone,$OtpPost,$AuthID);
	
	if($OtpStatus=="OTP verified success" || $OtpStatus=="Mobile no. already verified"){
		UpdateOtpStatus($Otp,$Phone);
		session_unset(); 
		session_destroy();
		header("location: lib/thanks.html");
	}else{
		$_SESSION['OtpStatus'] = "Wrong OTP!";
	}
	
	//return $OtpStatus;
}
?>