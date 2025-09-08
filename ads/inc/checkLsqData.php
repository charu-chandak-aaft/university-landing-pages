<?php
(!empty($_GET['val'])) ? $val1=$_GET['val'] : $val1="";

function leadSqGet($val1)
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
		echo $response;
		//$resultdata = json_decode($response);
		//$result = $resultdata[0]->ProspectID;
	}
	//return $result;
}
leadSqGet($val1);
?>