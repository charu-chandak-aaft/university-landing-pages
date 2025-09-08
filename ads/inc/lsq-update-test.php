<?php
$accessKey='u$r8619de77b3b680e4de885545cd4e12a0';
$secretKey='5be929cb66a833dd56878ca44216f481c8563ab0';

$getbyemail = GetByEmail($secretKey,$accessKey,'prateek.yadav@asms.edu.in');
$getbyphone = GetByPhone($secretKey,$accessKey,'9716015545');
if (!empty($getbyemail) || !empty($getbyphone)) 
{
	echo "AAFT 01";
	if (!empty($getbyemail)) {
		$prospectId = $getbyemail;
	} elseif (!empty($getbyphone)) {
		$prospectId = $getbyphone;
	}
	echo $prospectId;
	leadSqUpdt($secretKey,$accessKey,$prospectId);
}else{
	echo "AAFT 02";
	leadSqCrt($secretKey,$accessKey);
}

function leadSqCrt($secretKey,$accessKey)
{	
	$data_string = '[{"Attribute":"FirstName","Value":"AAFT Test"},
		{"Attribute":"EmailAddress","Value":"prateek.yadav@asms.edu.in"},
		{"Attribute":"Phone","Value":"9716015545"},
		{"Attribute":"ProspectStage","Value":"Lead"},
		{"Attribute":"SearchBy","Value":"Phone"},
		{"Attribute":"mx_UTM_Campaignid","Value":"222222"},
		{"Attribute":"mx_UTM_adgroupid","Value":"333333"}]';
	try {
		$curl = curl_init('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey='.$accessKey.'&secretKey='.$secretKey);
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
		//print $json_response;
		//$arr = json_decode($json_response);
		//$lsdid = $arr->Message->Id;
		//$_SESSION['lsdid']=$lsdid;
		curl_close($curl);
	} catch (Exception $ex) {
		curl_close($curl);
	}
}

function leadSqUpdt($secretKey,$accessKey,$leadidNw)
{	
	$data_string = '[{"Attribute":"FirstName","Value":"AAFT Test"},
		{"Attribute":"EmailAddress","Value":"prateek.yadav@asms.edu.in"},
		{"Attribute":"Phone","Value":"9716015545"},
		{"Attribute":"ProspectStage","Value":"Lead"},
		{"Attribute":"SearchBy","Value":"Phone"},
		
		{"Attribute":"mx_UTM_adgroupid","Value":"333333"},
		{"Attribute":"ProspectID","Value":"'.$leadidNw.'"}]';
		try {
			$curl = curl_init('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey='.$accessKey.'&secretKey='.$secretKey);
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
			//$json_response;
			curl_close($curl);
		} catch (Exception $ex) {
			curl_close($curl);
		}
}

function GetByEmail($secretKey,$accessKey,$val1)
{
	$result = "";
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/Leads.GetByEmailaddress?accessKey='.$accessKey.'&secretKey='.$secretKey.'&emailaddress='.$val1,
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

function GetByPhone($secretKey,$accessKey,$val1)
{
	$result = "";
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/RetrieveLeadByPhoneNumber?accessKey='.$accessKey.'&secretKey='.$secretKey.'&phone='.$val1,
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