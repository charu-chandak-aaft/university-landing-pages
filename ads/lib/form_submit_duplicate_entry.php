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

	$Name = $_POST['YourName'];
	$Emailid = $_POST['Email'];
	$Phone = $_POST['ContactNumber'];
	$CourseId = $_POST['Course'];
	$SchoolId = $_POST['School'];
	$QualId = $_POST['Edu'];
	$StateId = $_POST['State'];
	$CityId = $_POST['City'];
	$Remark = $_POST['Remark'];
	$Ip = $_SERVER['REMOTE_ADDR'];
	
	$Otp = rand(1000, 9999);
	$_SESSION['Otp'] = $Otp;
	$_SESSION['Phone'] = $Phone;
		
		if($Name!='' && $Emailid!='' && is_numeric($Phone) && $Phone!='' && $CourseId!='' && $StateId!=''){
			InsertFormData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$Otp,$Remark,$utm_source,$utm_medium,$utm_campaign,$utm_content);
			sendotp($Phone,$Otp,$TempID,$AuthID);

			if(empty($utm_source) || empty($utm_medium) || empty($utm_campaign) || empty($utm_content)){
				header("location: ".$ReUrl."?mode=1");
			}else{
				header("location: ".$ReUrl."&mode=1");
			}
		}
		else{
		echo 'All fields are mandatory.';
		}
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
		header("location: https://aaft.com/ad/lib/thanks.html");
	}else{
		$_SESSION['OtpStatus'] = "Wrong OTP!";
	}
	
	//return $OtpStatus;
}
?>