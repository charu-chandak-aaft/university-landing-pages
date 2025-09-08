<?php
function leadSqCrt($val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9){
		$data_string = '[{"Attribute":"FirstName","Value":"'.$val1.'"},
		{"Attribute":"EmailAddress","Value":"'.$val2.'"},
		{"Attribute":"Phone","Value":"'.$val3.'"},
		{"Attribute":"ProspectStage","Value":"Lead"},
		{"Attribute":"Source","Value":"'.$val4.'"},
		{"Attribute":"SourceMedium","Value":"'.$val5.'"},
		{"Attribute":"SourceCampaign","Value":"'.$val6.'"},
		{"Attribute":"SearchBy","Value":"EmailAddress"},
		{"Attribute":"SearchBy","Value":"Phone"},
		{"Attribute":"mx_Course_Interested","Value":"'.$val7.'"},
		{"Attribute":"mx_City","Value":"'.$val8.'"},
		{"Attribute":"mx_SourceTerm","Value":"'.$val9.'"},
		{"Attribute":"Status","Value":"Active"}]';
		try
		{
		
		//For AAFT online_lp
		$curl = curl_init('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r3d9ba79d4d9c22b2c928ca5d004e1278&secretKey=4e8e9c7c1a0e5d90534edf059541ee3cf580e9f2');
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		        "Content-Type:application/json",
		        "Content-Length:".strlen($data_string)
		        ));
			$json_response = curl_exec($curl);
			echo $json_response;
			//$arr = json_decode($json_response);
			//$lsdid = $arr->Message->Id;
			//$_SESSION['lsdid']=$lsdid;
		    curl_close($curl);
		} catch (Exception $ex) { 
		    curl_close($curl);
		}
}

//LeadSqCrt($name,$email,$phone,$utm_source,$utm_medium,$utm_campaign,$course,$city,$utm_term);

echo LeadSqCrt("Prateek","prateek.yadav@asms.edu.in","9716015545","Website","medium","campaign","Digital","Delhi","term");
?>