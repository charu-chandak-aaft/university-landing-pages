<?php
$data_string = '[{"Attribute":"FirstName","Value":"Prateek Test 01"},
	{"Attribute":"EmailAddress","Value":"prateek01@gmail.com"},
	{"Attribute":"Phone","Value":"9716015501"},
	{"Attribute":"mx_OTP_Statis","Value":"Yes"}]';
	try
	{
		$curl = curl_init('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r19f16e8e0e4d98b358acefdc6ad32a8e&secretKey=c757368b724e32693bb25703d99eee8a22cc8a47');
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
			$resultdata = json_decode($json_response);
			var_dump($resultdata);
			//echo $resultdata->Status;
			//if($resultdata->Status=="Success"){GetCronUpdate($id,1);}else{GetCronUpdate($id,2);}
			//if($resultdata->Status=="Success"){echo "Update01";}else{echo "Update02";}
		    curl_close($curl);

	} catch (Exception $ex) { 
	    curl_close($curl);
	}
?>