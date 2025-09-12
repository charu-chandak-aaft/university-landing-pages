<?php

include('function.php');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


//Otp API Details
$TempID = "64b65d09d6fc0540b6505af2";
$AuthID = "334584AYu4VCVvJw5f00120eP1";

//Find '/' in Url for Form
$FindSlash = strrpos(getCurrentURL(), '/');
$ReUrl = substr(getCurrentURL(), $FindSlash + 1);

//Find '/' in Url for Brochure
$FindSlashbrc = strrpos(getCurrentURL(), '/');
$ReUrlbrc = substr(getCurrentURL(), $FindSlashbrc + 1);

//echo $_SESSION['Phone'];
function stateIdtoName($sid)
{
	$state = "";
	$res = array();
	$conn = Connection();
	$sql1 = "SELECT name FROM state WHERE code=" . $sid;
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i = 0;
		$row1 = $result1->fetch_assoc();
		$state = $row1['name'];
	}
	return $state;
}

@$sub = $_GET['sub'];
@$id_School = base64_decode($_GET['id_School']);
@$id_PageName = base64_decode($_GET['id_PageName']);
@$id_YourName = $_GET['id_YourName'];
@$id_Email = $_GET['id_Email'];
@$id_ContactNumber = $_GET['id_ContactNumber'];
// @$id_State = (empty($_GET['id_State'])) ? $id_State = 31 : $id_State = $_GET['id_State'];
// @$id_State = stateIdtoName($id_State);
@$id_State = $_GET['id_State'];
@$id_City = $_GET['id_City'];
@$id_Edu = $_GET['id_Edu'];
@$id_Course = base64_decode($_GET['id_Course']);
@$id_utm_source = $_GET['id_utm_source'];
@$id_utm_medium = $_GET['id_utm_medium'];
@$id_utm_campaign = $_GET['id_utm_campaign'];
@$id_utm_term = $_GET['id_utm_term'];
@$id_utm_creative = $_GET['id_utm_creative'];
@$id_utm_content = $_GET['id_utm_content'];
@$id_utm_campaignid = $_GET['id_utm_campaignid'];
@$id_utm_adgroupid = $_GET['id_utm_adgroupid'];
@$id_utm_creativeid = $_GET['id_utm_creativeid'];
@$id_utm_matchtype = $_GET['id_utm_matchtype'];
@$id_utm_device = $_GET['id_utm_device'];
@$id_utm_network = $_GET['id_utm_network'];
@$id_utm_keyword = $_GET['id_utm_keyword'];
@$id_utm_placement = $_GET['id_utm_placement'];
@$id_gclid = $_GET['id_gclid'];
@$id_map = $_GET['id_map'];
@$mx_UTM_Source = $_GET['mx_UTM_Source'];
@$mx_UTM_Medium = $_GET['mx_UTM_Medium'];
@$mx_UTM_Keyword = $_GET['mx_UTM_Keyword'];
@$mx_UTM_creativeid = $_GET['mx_UTM_creativeid'];
@$mx_UTM_Campaign = $_GET['mx_UTM_Campaign'];
@$id_map = $_GET['id_map'];
@$UTM_adgroup = $_GET['UTM_adgroup'];
@$mx_UTM_adgroup = $_GET['mx_UTM_adgroup'];


if ($sub == 1) {

	$Remark = 'LP Lead';
	$Ip = $_SERVER['REMOTE_ADDR'];


	/**
	 * We are not sending any OTP
	 * As of Now , so disabling below 
	 * Done BY - stigen 28/01/25
	 */

	/*make session for Otp*/
	// $Otp = rand(1000, 9999);
	// $_SESSION['Otp'] = $Otp;
	// $sesOtp = $_SESSION['Otp'];
	$Otp = '1111';

	/*make session for Phone*/
	$_SESSION['Phone'] = $id_ContactNumber;
	$sesPhone = $_SESSION['Phone'];

	/*make session for Email*/
	$_SESSION['Email'] = $id_Email;
	$sesEmail = $_SESSION['Email'];

	$remark = 'LP Lead';

// 	echo $sesEmail;
// 	echo $sesPhone;
//   echo 'ses value';
	// $getbyemail = GetByEmail($secretKey, $accessKey, $sesEmail);
	// $getbyphone = GetByPhone($secretKey, $accessKey, $sesPhone);
	// echo $getbyemail;
	// echo $getbyphone;
//   InsertFormData($id_YourName, $id_ContactNumber, $id_Email, $id_Course, $id_Edu, $id_State, $id_City, $id_School, $id_PageName, $Otp, $remark, $id_map, $id_utm_source, $id_utm_medium, $id_utm_campaign, $id_utm_content, $id_utm_term, $id_utm_creative, $id_utm_campaignid, $id_utm_adgroupid, $id_utm_creativeid, $id_utm_matchtype, $id_utm_device, $id_utm_network, $id_utm_keyword, $id_utm_placement, $id_gclid);
// die;
	if (!empty($getbyemail) || !empty($getbyphone)) {

		// echo "fdgdf";
		// die;

		if (!empty($getbyemail)) {
			$prospectId = $getbyemail;
		} elseif (!empty($getbyphone)) {
			$prospectId = $getbyphone;
		}
		$SourceReferrerURL = $_SESSION['leadUrl'];
		// working succesfully 
		leadSqUpdt($secretKey, $accessKey, $id_YourName, $id_Email, $id_ContactNumber, $id_School, $id_Course, $id_State, $id_City, $id_Edu, $id_utm_source, $id_utm_medium, $id_utm_campaign, $id_utm_keyword, $id_utm_term, $id_utm_campaignid, $id_utm_adgroupid, $id_utm_creativeid, $id_utm_matchtype, $id_utm_device, $id_utm_network, $id_utm_placement, $id_gclid, $id_utm_content, $SourceReferrerURL, $prospectId,$mx_UTM_Source,$mx_UTM_Medium,$mx_UTM_Keyword,$mx_UTM_creativeid,$mx_UTM_Campaign,$UTM_adgroup,$mx_UTM_adgroup);

 

		//otp removed due to server failure
		/**
		 * We are not sending any OTP
		 * As of Now , so disabling below 
		 * Done BY - stigen 28/01/25
		 */
		// sendotp($id_ContactNumber, $Otp, $TempID, $AuthID);

		InsertFormData($id_YourName, $id_ContactNumber, $id_Email, $id_Course, $id_Edu, $id_State, $id_City, $id_School, $id_PageName, $Otp, $remark, $id_map, $id_utm_source, $id_utm_medium, $id_utm_campaign, $id_utm_content, $id_utm_term, $id_utm_creative, $id_utm_campaignid, $id_utm_adgroupid, $id_utm_creativeid, $id_utm_matchtype, $id_utm_device, $id_utm_network, $id_utm_keyword, $id_utm_placement, $id_gclid);
		// echo json_encode(['status' => 'success', 'message' => 'Thank your for reaching us. We will contact Shortly ']);


	} else {

// echo "2121";
// die;
		/*function to send Otp*/
		//otp removed due to server failure
		/**
		 * We are not sending any OTP
		 * As of Now , so disabling below 
		 * Done BY - stigen 28/01/25
		 */
		// sendotp($id_ContactNumber, $Otp, $TempID, $AuthID);
		//
		/*function to enter Database*/
		InsertFormData($id_YourName, $id_ContactNumber, $id_Email, $id_Course, $id_Edu, $id_State, $id_City, $id_School, $id_PageName, $Otp, $remark, $id_map, $id_utm_source, $id_utm_medium, $id_utm_campaign, $id_utm_content, $id_utm_term, $id_utm_creative, $id_utm_campaignid, $id_utm_adgroupid, $id_utm_creativeid, $id_utm_matchtype, $id_utm_device, $id_utm_network, $id_utm_keyword, $id_utm_placement, $id_gclid);

		/*function to enter Leadsquare*/
		//leadSqCrt($secretKey,$accessKey,$id_YourName,$id_Email,$id_ContactNumber,$id_School,$id_Course,$id_State,$id_City,$id_Edu,$id_utm_source,$id_utm_medium,$id_utm_campaign,$id_utm_keyword,$id_utm_term,$id_utm_campaignid,$id_utm_adgroupid,$id_utm_creativeid,$id_utm_matchtype,$id_utm_device,$id_utm_network,$id_utm_placement,'No',$id_gclid,$id_utm_content);
		$SourceReferrerURL = $_SESSION['leadUrl']? $_SESSION['leadUrl'] : '';
	    leadSqCrt($secretKey, $accessKey, $id_YourName, $id_Email, $id_ContactNumber, $id_School, $id_Course, $id_State, $id_City, $id_Edu, $id_utm_source, $id_utm_medium, $id_utm_campaign, $id_utm_keyword, $id_utm_term, $id_utm_campaignid, $id_utm_adgroupid, $id_utm_creativeid, $id_utm_matchtype, $id_utm_device, $id_utm_network, $id_utm_placement, 'No', $id_gclid, $id_utm_content, $SourceReferrerURL, $mx_UTM_Source,$mx_UTM_Medium,$mx_UTM_Keyword,$mx_UTM_creativeid,$mx_UTM_Campaign,$UTM_adgroup,$mx_UTM_adgroup);
		// echo json_encode(['status' => 'success', 'message' => 'Thank you for reaching us. We will contact Shortly ']);

	}

	// here we will send the mail 
	include("send_mail.php");
}

if ($sub == 2) {
	//$OtpStatus="";
	$OtpPost = $_GET['otp'];
	$Otp = $_SESSION['Otp'];
	$Phone = $_SESSION['Phone'];
	$OtpStatus = verifyotp($Phone, $OtpPost, $AuthID);

	if ($OtpStatus == "OTP verified success" || $OtpStatus == "Mobile no. already verified") {

		//function to update otp in Database
		UpdateOtpStatus($Otp, $Phone);

		//function to update otp in Leadsquare
		$prospectId = GetByEmail($secretKey, $accessKey, $_SESSION['Email']);
		leadSqUpdtOtp($secretKey, $accessKey, "Yes", $prospectId);

		session_unset();
		session_destroy();
		echo "OtpSuccess";
		//header("location: lib/thanks.html");
	} else {
		//$_SESSION['OtpStatus'] = "Wrong OTP!";
		echo "Wrong OTP!";
	}
	//return $OtpStatus;
}

if ($sub == 3) {
	$reOtp = $_SESSION['Otp'];
	$rePhone = $_SESSION['Phone'];
	sendotp($rePhone, $reOtp, $TempID, $AuthID);
	echo "Otp ReSent";
}
   