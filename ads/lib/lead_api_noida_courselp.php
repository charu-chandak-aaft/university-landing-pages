<?php
//phpinfo();
function Connection(){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 		
	return $conn;
	$conn->close();
}

function GetSchoolId($cid){
	$conn = Connection(); 
	$school="";
	$sql1 = "SELECT school_id FROM programs WHERE id=".$cid;
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		$row1 = $result1->fetch_assoc();
		$school = $row1['school_id'];
	}		
	return $school;
}

function GetSchoolName($sid){
	$conn = Connection(); 
	$state="";
	$sql1 = "SELECT name FROM school WHERE id=".$sid;
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		$row1 = $result1->fetch_assoc();
		$state = $row1['name'];
	}		
	switch($state){
		case 'School of Still-Photography' : $state='School of Photography';
		break;
		case 'School of AIHT' : $state='School of Hospitality';
		break;
	}
	return $state;
}

function GetCourseName($cid){
	$conn = Connection(); 		
	$course=array();	
	$sql1 = "SELECT name, duration FROM programs WHERE id=".$cid;	
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		$row1 = $result1->fetch_assoc();
		$course[] = $row1;
	}
	return $course;
}

function GetQualification($qid){
	$conn = Connection(); 		
	$qualification="";	
	$sql1 = "SELECT q_name FROM qualification WHERE q_id=".$qid;
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		$row1 = $result1->fetch_assoc();
		$qualification = $row1['q_name'];
	}
	return $qualification;
}

function GetStateName($sid){
	$conn = Connection(); 		
	$state="";	
	$sql1 = "SELECT name FROM state WHERE code=".$sid;
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		$row1 = $result1->fetch_assoc();
		$state = $row1['name'];
	}
	return $state;
}

function GetCityName($cid){
	$conn = Connection(); 		
	$city="";	
	$sql1 = "SELECT name FROM district WHERE id=".$cid;
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		$row1 = $result1->fetch_assoc();
		$city = $row1['name'];
	}
	return $city;
}

function GetAPIData(){
	$conn = Connection();
	$softData=array();
	
	//---------Get previous day
	date_default_timezone_set("Asia/Kolkata");
	$prevDay = date('Y-m-d',strtotime("-1 days"));

	//---------Get 10 mins difference from Current time
	$currentDate = date('Y-m-d H:i:s');
	$currentDate = strtotime($currentDate);
	$timeGap = $currentDate - (10 * 60);
	$difference = date("Y-m-d H:i:s", $timeGap);
	//----------------------

	//$sql1 = "SELECT id, student, contact, email, course_id, qual_id, state_id, city_id, source, school_id, school_name, page_name, otp, otp_varified, remark, utm_source, utm_medium, utm_campaign, utm_content, created_on, updated_on, status from data_course_lp where lsq=0 and created_on>='".$prevDay." 00:00:00'";

	$sql1 = "SELECT id, student, contact, email, course_id, qual_id, state_id, city_id, source, school_id, school_name, page_name, otp, otp_varified, remark, utm_source, utm_medium, utm_campaign, utm_content, utm_term, utm_creative, created_on, updated_on, status, gclid from data_course_lp where lsq=0 and created_on between '".$prevDay." 00:00:00' and '".$difference."'";

	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		//$result1->num_rows;
		//$row1= $result1->fetch_assoc();
		$i=0;
		while($row1= $result1->fetch_assoc()){
			//$i++;
			$softData[]=$row1; 
		}
	}		
	return $softData;
}

function GetCampaignName($cmpid){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$productName="";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT category,school,campaign_name FROM campaign_id WHERE status=1 and campaign_id=$cmpid";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		$row1 = $result1->fetch_assoc();
		$productName = $row1['category']."-".$row1['campaign_name'];
	}
	return $productName;
}

function GetCronUpdate($id,$val1){
	$conn = Connection(); 		
	$sql1 = "UPDATE data_course_lp SET lsq=".$val1." WHERE id=".$id;
	$result1 = $conn->query($sql1);
}

$totaldata = GetAPIData();

$totaldatacnt = count($totaldata);

$i=0;
while($totaldatacnt>$i){
	$id = $totaldata[$i]['id'];
	$name = $totaldata[$i]['student'];
	$email = $totaldata[$i]['email'];
	$contact = $totaldata[$i]['contact'];

	$courseId = $totaldata[$i]['course_id'];
	$courseData = GetCourseName($courseId);
	$courseName = "N-".$courseData[0]['name'];
	$courseDuration = $courseData[0]['duration'];
	switch($courseId){
		case '0' : 
		$courseName='-';
		$courseDuration='-';
		break;	
	}

	switch($courseDuration){
		case '4y': $duration="4 Years";
		break;
		case '3y': $duration="3 Years";
		break;
		case '2y': $duration="2 Years";
		break;
		case '1y': $duration="1 Year";
		break;
		case '6m': $duration="6 Months";
		break;
		case '3m': $duration="3 Months";
		break;
	}

	//$schoolId = GetSchoolId($courseId);
	//$schoolName = GetSchoolName($schoolId);
	$schoolName = "School of ".$totaldata[$i]['school_name'];	

	$batchName="Regular";
	$campusName="Noida";

	$qId = $totaldata[$i]['qual_id'];
	$qualification = GetQualification($qId);

	$stateId = $totaldata[$i]['state_id'];
	$stateName = GetStateName($stateId);

	$cityId = $totaldata[$i]['city_id'];
	$cityName = GetCityName($cityId);
	($cityName=="")? $cityName="-" : $cityName=$cityName;

	$source = $totaldata[$i]['utm_source'];
	switch($source){
		case 'adword': $sourceName="Google Search";
		break;
		case 'search': $sourceName="Google Search";
		break;
		case 'searchdeg': $sourceName="Google Search";
		break;
		case 'searchdip': $sourceName="Google Search";
		break;
		case 'searchmusicpro': $sourceName="Google Search";
		break;
		case 'display': $sourceName="Google Display";
		break;
		case 'discovery': $sourceName="Discovery";
		break;
		case 'facebook': $sourceName="Facebook";
		break;
		case 'facebookvideo': $sourceName="Facebook Video";
		break;
		case 'youtube': $sourceName="Youtube";
		break;
		//add for gen-y
		case 'Adwords': $sourceName="Google Search";
		break;
		case 'Discovery': $sourceName="Discovery";
		break;
	}

	$productName = $totaldata[$i]['page_name'];

	$sourceCampaign = $totaldata[$i]['page_name'].'- '.$sourceName;
	//$sourceCampaign = GetCampaignName($sourceCampaign);

	$otpCode = $totaldata[$i]['otp_varified'];
	if($otpCode==1){$otpStatus="Yes";}else{$otpStatus="No";}

	$utm_source = $totaldata[$i]['utm_source'];
	$utm_medium = $totaldata[$i]['utm_medium'];
	$utm_campaign = $totaldata[$i]['utm_campaign'];
	$utm_content = $totaldata[$i]['utm_content'];
	$utm_term = $totaldata[$i]['utm_term'];
	$utm_creative = $totaldata[$i]['utm_creative'];
	$utm_glcid = $totaldata[$i]['gclid'];

	//if($rgnfound!=='rgn'){
	/*echo $name;
	echo $email;
	echo $contact;
	echo $schoolName;
	echo $courseName;
	echo $batchName;
	echo $qualification;
	echo $stateName;
	echo $cityName;
	echo $sourceName;
	echo $campusName;
	echo $sourceCampaign;
	echo $productName;
	echo $otpStatus;	
	echo $duration;
	echo "echo end <br>";*/

	$data_string = '[{"Attribute":"FirstName","Value":"'.$name.'"},
	{"Attribute":"EmailAddress","Value":"'.$email.'"},
	{"Attribute":"Phone","Value":"'.$contact.'"},
	{"Attribute":"ProspectID","Value":"xxxxxxxx-d168-xxxx-9f8b-xxxx97xxxxxx"},
	{"Attribute":"SearchBy","Value":"Phone"},
	{"Attribute":"mx_School","Value":"'.$schoolName.'"},
	{"Attribute":"mx_course","Value":"'.$courseName.'"},
	{"Attribute":"mx_Course_Type","Value":"'.$batchName.'"},
	{"Attribute":"mx_Qualification_Id","Value":"'.$qualification.'"},
	{"Attribute":"mx_State","Value":"'.$stateName.'"},
	{"Attribute":"mx_City","Value":"'.$cityName.'"},
	{"Attribute":"Source","Value":"'.$sourceName.'"},
	{"Attribute":"mx_Centre","Value":"'.$campusName.'"},
	{"Attribute":"mx_Organisation","Value":"AAFT"},
	{"Attribute":"SourceCampaign","Value":"'.$sourceCampaign.'"},
	{"Attribute":"mx_Product","Value":"'.$productName.'"},
	{"Attribute":"mx_OTP_Statis","Value":"'.$otpStatus.'"},	
	{"Attribute":"mx_UTM_Campaign","Value":"'.$utm_campaign.'"},
	{"Attribute":"mx_UTM_Content","Value":"'.$utm_content.'"},
	{"Attribute":"mx_UTM_Creative","Value":"'.$utm_creative.'"},
	{"Attribute":"mx_UTM_Medium","Value":"'.$utm_medium.'"},
	{"Attribute":"mx_UTM_Source","Value":"'.$utm_source.'"},
	{"Attribute":"mx_UTM_Term","Value":"'.$utm_term.'"},
	{"Attribute":"mx_GSLID","Value":"'.$utm_glcid.'"},
	{"Attribute":"mx_Duration","Value":"'.$duration.'"}]';
	try
	{
		$curl = curl_init('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r021b7b6177877a9bc97b94612f0c2912&secretKey=777419673b64a3f0ac227c27ed4a3659f12f9956');
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
			//var_dump($resultdata);
			//echo $resultdata->Status;
			if($resultdata->Status=="Success"){GetCronUpdate($id,1);}else{GetCronUpdate($id,2);}
			//if($resultdata->Status=="Success"){echo "Update01";}else{echo "Update02";}
		    curl_close($curl);

	} catch (Exception $ex) { 
	    curl_close($curl);
	}
	//}
	$i++;
}
?>