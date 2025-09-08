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

$accessKey='u$r8619de77b3b680e4de885545cd4e12a0';
$secretKey='5be929cb66a833dd56878ca44216f481c8563ab0';

function leadSqUpdt($secretKey,$accessKey,$val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9,$val10,$val11,$val12,$val13,$val14,$val15,$val16,$val17,$val18,$val19,$val20,$val21,$val22,$val23)
{
	if ($val14!="NA")
		{
			$val14Nw='{"Attribute":"mx_UTM_Campaignid","Value":"'.$val14.'"},';
		}
	else
		{$val14Nw='';}

	$data_string = '[{"Attribute":"FirstName","Value":"'.$val1.'"},
		{"Attribute":"EmailAddress","Value":"'.$val2.'"},
		{"Attribute":"Phone","Value":"'.$val3.'"},
		{"Attribute":"mx_School","Value":"'.$val4.'"},
		{"Attribute":"mx_Course_Interested_In","Value":"'.$val5.'"},
		{"Attribute":"mx_State","Value":"'.$val6.'"},
		{"Attribute":"mx_City","Value":"'.$val7.'"},
		{"Attribute":"mx_Qualification_Id","Value":"'.$val8.'"},
		{"Attribute":"mx_OTP_Status","Value":"'.$val21.'"},
		{"Attribute":"FirstName","Value":"'.$val9.'"},
		{"Attribute":"SourceMedium","Value":"'.$val10.'"},
		{"Attribute":"SourceCampaign","Value":"'.$val11.'"},
		{"Attribute":"mx_Search_Term","Value":"'.$val12.'"},
		{"Attribute":"mx_UTM_Term","Value":"'.$val13.'"},
        '.$val9Nw.'
		{"Attribute":"mx_UTM_adgroupid","Value":"'.$val15.'"},
		{"Attribute":"mx_UTM_Creative","Value":"'.$val16.'"},
		{"Attribute":"mx_UTM_matchtype","Value":"'.$val17.'"},
		{"Attribute":"mx_UTM_device","Value":"'.$val18.'"},
		{"Attribute":"mx_UTM_network","Value":"'.$val19.'"},
		{"Attribute":"mx_UTM_placement","Value":"'.$val20.'"},
		{"Attribute":"mx_GCLID","Value":"'.$val22.'"},
		{"Attribute":"SourceContent","Value":"'.$val23.'"}]';
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
		curl_close($curl);
	} catch (Exception $ex) {
		curl_close($curl);
	}
}

leadSqUpdt($secretKey,$accessKey,$val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9,$val10,$val11,$val12,$val13,$val14,$val15,$val16,$val17,$val18,$val19,$val20,$val21,$val22,$val23);
?>