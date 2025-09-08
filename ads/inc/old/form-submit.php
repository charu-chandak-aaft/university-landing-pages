<?php
include('function.php');
//$TempID="5f04297cd6fc055ef3620221";
$TempID="623d4fc09acff608a6613cb3";
$AuthID="334584AYu4VCVvJw5f00120eP1";
$FindSlash = strrpos(getCurrentURL(),'/');
$ReUrl = substr(getCurrentURL(),$FindSlash+1);

$nam=$_GET['nam'];
$ema=$_GET['ema'];
$num=$_GET['num'];
$sta=$_GET['sta'];
$cit=$_GET['cit'];
$edu=$_GET['edu'];
$sch=$_GET['sch'];
$pro=$_GET['pro'];
$sna=$_GET['sna'];
$pag=$_GET['pag'];
$sub=$_GET['sub'];
$otp=$_GET['otp'];

$utm_source=$_GET['uso'];
$utm_medium=$_GET['ume'];
$utm_campaign=$_GET['uca'];
$utm_term=$_GET['ute'];
$utm_creative=$_GET['ucr'];
$utm_content=$_GET['uco'];
$map=$_GET['map'];
$utm_glcid=$_GET['glcid'];

$utm_campaignid =$_GET['uci'];
$utm_adgroupid =$_GET['uag'];
$utm_creativeid =$_GET['uct'];
$utm_matchtype =$_GET['umt'];
$utm_device =$_GET['udv'];
$utm_network =$_GET['unw'];
$utm_keyword =$_GET['ukw'];
$utm_placement =$_GET['upm'];

if($sub==3)
{
	$reOtp= $_SESSION['Otp'];
	$rePhone= $_SESSION['Phone'];
	sendotp($rePhone,$reOtp,$TempID,$AuthID);
	echo "Otp ReSent";
}

if($sub==1)
{
	/*session_unset(); 
	session_destroy();
	session_start();*/

	/*$SchoolName = $_POST['SchoolName'];
	$PageName = $_POST['PageName'];
	$Name = $_POST['YourName'];
	$Emailid = $_POST['Email'];
	$Phone = $_POST['ContactNumber'];
	$CourseId = $_POST['Course'];
	//$SchoolId = $_POST['School'];
	$SchoolId = $_POST['School'];
	$QualId = $_POST['Edu'];
	$StateId = $_POST['State'];
	$CityId = $_POST['City'];*/
	
	//$SchoolName = $sna;
	
	//if($sch==10){$sch=1;}
		
	$SchoolName= GetSchoolName($sch);
	$SchoolName= $SchoolName[0]['lsq_name'];

	$PageName = $pag;
	$Name = $nam;
	$Emailid = $ema;
	$Phone = $num;
	$CourseId = $pro;
	//$SchoolId = $_POST['School'];
	$SchoolId = $sch;
	$QualId = $edu;
	$StateId = $sta;
	$CityId = $cit;

	$Remark = 'LP Lead';
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
		//echo '1';
		//die();

		date_default_timezone_set("Asia/Kolkata");
		$currentDate = date('Y-m-d H:i:s');
		$recordCreateDate = $recodExist[0]['created_on'];

		$recordCreateDate = strtotime($recordCreateDate);
		$currentDate = strtotime($currentDate);
		$difference = intval(abs($currentDate - $recordCreateDate)/3600);
		//echo $difference;

		if($difference>0){
			//echo '2';
			//die();
			SubmitConditionalData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$SchoolName,$PageName,$Otp,$Remark,$map,$utm_glcid,$utm_source,$utm_medium,$utm_campaign,$utm_content,$utm_term,$utm_creative,$TempID,$AuthID,$ReUrl,$utm_campaignid, $utm_adgroupid, $utm_creativeid, $utm_matchtype, $utm_device, $utm_network, $utm_keyword, $utm_placement);	
			//lsqLeadCurl();
		}else{
			//echo '3';
			//die();
			$courseApply = $recodExist[0]['course_id'];
			if($courseApply==$CourseId){
				//echo '4';
				//die();
				$otpStatus = $recodExist[0]['otp_varified'];
				$recordId = $recodExist[0]['id'];
				$attempt = $recodExist[0]['fillcount']+1;

				if($otpStatus==1){
					//echo '5';
					//die();
					//header("location: lib/thanks.html");
					echo "Success";
				}else{
					UpdateFormData($Otp,$Phone,$attempt,$recordId,$utm_source,$utm_medium,$utm_campaign,$utm_content,$TempID,$AuthID,$ReUrl,$map);
				}
			}else{
				//echo '6';
				//die();
				SubmitConditionalData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$SchoolName,$PageName,$Otp,$Remark,$map,$utm_glcid,$utm_source,$utm_medium,$utm_campaign,$utm_content,$utm_term,$utm_creative,$TempID,$AuthID,$ReUrl,$utm_campaignid, $utm_adgroupid, $utm_creativeid, $utm_matchtype, $utm_device, $utm_network, $utm_keyword, $utm_placement);
				//lsqLeadCurl();
			}
		}
	}else{
		SubmitConditionalData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$SchoolName,$PageName,$Otp,$Remark,$map,$utm_glcid,$utm_source,$utm_medium,$utm_campaign,$utm_content,$utm_term,$utm_creative,$TempID,$AuthID,$ReUrl,$utm_campaignid, $utm_adgroupid, $utm_creativeid, $utm_matchtype, $utm_device, $utm_network, $utm_keyword, $utm_placement);
		//lsqLeadCurl();
	}
	//-----------------------------
}

if($sub==2)
{
	//$OtpStatus="";
	$OtpPost = $otp;
	$Otp = $_SESSION['Otp'];
	$Phone = $_SESSION['Phone'];
	$OtpStatus = verifyotp($Phone,$OtpPost,$AuthID);
	
	if($OtpStatus=="OTP verified success" || $OtpStatus=="Mobile no. already verified"){
		UpdateOtpStatus($Otp,$Phone);
		session_unset(); 
		session_destroy();
		echo "OtpSuccess";
		//header("location: lib/thanks.html");
	}else{
		//$_SESSION['OtpStatus'] = "Wrong OTP!";
		echo "Wrong OTP!";
	}
	
	//return $OtpStatus;
}

?>