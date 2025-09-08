<?php
session_start();
@$step = $_POST['step'];


function GetLead($val1)
{
	$result = "";
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/Leads.GetById?accessKey=u$r8619de77b3b680e4de885545cd4e12a0&secretKey=5be929cb66a833dd56878ca44216f481c8563ab0&id=' . $val1,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
		),
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		//echo $response;
		$resultdata = json_decode($response);
		@$result = $resultdata[0]->ProspectStage;
	}
	return $result;
}

if ($step==1) {
	(!empty($_POST['utm_campaign'])) ? $utm_campaign = $_POST['utm_campaign'] : $utm_campaign = "";
	(!empty($_POST['utm_source'])) ? $utm_source = $_POST['utm_source'] : $utm_source = "";
	(!empty($_POST['utm_medium'])) ? $utm_medium = $_POST['utm_medium'] : $utm_medium = "";
	(!empty($_POST['utm_term'])) ? $utm_term = $_POST['utm_term'] : $utm_term = "";
	(!empty($_POST['utm_creativeid'])) ? $utm_creativeid= $_POST['utm_creativeid'] : $utm_creativeid = "";
	(!empty($_POST['utm_ad_network'])) ? $utm_ad_network = $_POST['utm_ad_network'] : $utm_ad_network = "";
	(!empty($_POST['utm_marketing'])) ? $utm_marketing = $_POST['utm_marketing'] : $utm_marketing = "";
	(!empty($_POST['gclid'])) ? $gclid = $_POST['gclid'] : $gclid = "";

	$name = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$phone = $_POST['Phone'];
	$email = $_POST['EmailAddress'];
	(empty($_POST['mx_State'])) ? $state = "NA" : $state = $_POST['mx_State'];
	(empty($_POST['mx_City'])) ? $city = "NA" : $city = $_POST['mx_City'];
	$course = $_POST['mx_Course'];
	$gender = $_POST['gender'];
	
	$refType = $_POST['mx_Ref_Student_Type'];
	$refname = $_POST['mx_Ref_First_Name'];
	$refLastName = $_POST['mx_Ref_Last_Name'];
	$refphone = $_POST['mx_Ref_Contact'];
	$refemail = $_POST['mx_Ref_Email'];
	(empty($_POST['mx_Ref_State'])) ? $refstate = "NA" : $refstate = $_POST['mx_Ref_State'];
	(empty($_POST['mx_Ref_City'])) ? $refcity = "NA" : $refcity = $_POST['mx_Ref_City'];
	$refgender = $_POST['mx_Ref_Gender'];
		
	//$rndno = rand(1000, 9999);
	//$_SESSION['srndno'] = $rndno;
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	$_SESSION['phone'] = $phone;
	
	$_SESSION['refname'] = $refname;
	$_SESSION['refemail'] = $refemail;
	$_SESSION['refphone'] = $refphone;
		
	// get lead stage 
	/*$sessEmail=$_SESSION['email'];
	$getbyemail = GetByEmail($sessEmail);
	if (!empty($getbyemail)) {
		//echo $getbyemail;
		$leadStatus= GetLead($getbyemail);
		if($leadStatus=="Offered" || $leadStatus=="Enrolled" || $leadStatus=="Applicant"){
			$leadStatus=$leadStatus;
		}
		else{
			$leadStatus="Pending Applicant";
		}
		//leadSqPostActivity($prospectId);
	}
	else{
		$leadStatus="Pending Applicant";
	}*/
	
	if ($name != '' && $email != '' && is_numeric($phone) && $phone != '') {			
		echo leadSqCrt01($name, $LastName, $email, $phone, $gender, $course, $city, $state, $refType, $refname, $refLastName, $refemail, $refphone, $refgender, $refcity, $refstate, $utm_campaign, $utm_source, $utm_medium, $utm_term, $gclid, $utm_creativeid, $utm_ad_network, $utm_marketing);
	}
}

function leadSqCrt01($name, $LastName, $email, $phone, $gender, $course, $city, $state, $refType, $refname, $refLastName, $refemail, $refphone, $refgender, $refcity, $refstate, $utm_campaign, $utm_source, $utm_medium, $utm_term, $gclid, $utm_creativeid, $utm_ad_network, $utm_marketing)
{
	//$SourceReferrerURL= getCurrentURL();
	$data_string = '[{"Attribute":"FirstName","Value":"' . $name . '"},
		{"Attribute":"LastName","Value":"' . $LastName . '"},
		{"Attribute":"EmailAddress","Value":"' . $email . '"},
		{"Attribute":"Phone","Value":"' . $phone . '"},
		{"Attribute":"ProspectStage","Value":"Lead"},
		{"Attribute":"SearchBy","Value":"Phone"},
		{"Attribute":"mx_Gender","Value":"' . $gender . '"},
		{"Attribute":"mx_Course_Interested_In","Value":"' . $course . '"},
		{"Attribute":"mx_City","Value":"' . $city . '"},
		{"Attribute":"mx_State","Value":"' . $state . '"},
		
		{"Attribute":"mx_Ref_Student_Type","Value":"' . $refType . '"},
		{"Attribute":"mx_Ref_First_Name","Value":"' . $refname . '"},
		{"Attribute":"mx_Ref_Last_Name","Value":"' . $refLastName . '"},
		{"Attribute":"mx_Ref_Email","Value":"' . $refemail . '"},
		{"Attribute":"mx_Ref_Contact","Value":"' . $refphone . '"},
		{"Attribute":"mx_Ref_Gender","Value":"' . $refgender . '"},
		{"Attribute":"mx_Ref_City","Value":"' . $refcity . '"},
		{"Attribute":"mx_Ref_State","Value":"' . $refstate . '"},
		
		{"Attribute":"mx_lp_campaign","Value":"' . $utm_campaign . '"},
		{"Attribute":"mx_lp_source","Value":"' . $utm_source . '"},
		{"Attribute":"Source","Value":"Student Referral"},
		{"Attribute":"SourceMedium","Value":"' . $utm_medium . '"},
		{"Attribute":"SourceCampaign","Value":"' . $utm_campaign . '"},
		{"Attribute":"mx_SourceTerm","Value":"' . $utm_term . '"},
		{"Attribute":"mx_GCLID","Value":"' . $gclid . '"},
		{"Attribute":"mx_utm_creative_id","Value":"' . $utm_creativeid . '"},
		{"Attribute":"mx_AD_Network","Value":"' . $utm_ad_network . '"},
		{"Attribute":"mx_mx_utm_marketing","Value":"' . $utm_marketing . '"}]';
	try {
		//For AAFT online_lp
		$curl = curl_init('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r8619de77b3b680e4de885545cd4e12a0&secretKey=5be929cb66a833dd56878ca44216f481c8563ab0');
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			"Content-Type:application/json",
			"Content-Length:" . strlen($data_string)
		));
		$json_response = curl_exec($curl);
		//echo print $json_response;
		$arr = json_decode($json_response);
		echo @$arr->Status;
		//$lsdid = $arr->Message->Id;
		//$_SESSION['lsdid']=$lsdid;
		curl_close($curl);
	} catch (Exception $ex) {
		curl_close($curl);
	}
}

function GetByEmail($val1)
{
	$result = "";
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/Leads.GetByEmailaddress?accessKey=u$r8619de77b3b680e4de885545cd4e12a0&secretKey=5be929cb66a833dd56878ca44216f481c8563ab0&emailaddress=' . $val1,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
		),
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		//echo $response;
		$resultdata = json_decode($response);
		@$result = $resultdata[0]->ProspectID;
	}
	return $result;
}

function GetByPhone($val1)
{
	$result = "";
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/RetrieveLeadByPhoneNumber?accessKey=u$r8619de77b3b680e4de885545cd4e12a0&secretKey=5be929cb66a833dd56878ca44216f481c8563ab0&phone=' . $val1,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
		),
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		//echo $response;
		$resultdata = json_decode($response);
		@$result = $resultdata[0]->ProspectID;
	}
	return $result;
}
?>