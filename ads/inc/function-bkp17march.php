<?php
session_start();

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

 //Lead Square API Details
$accessKey='u$r8619de77b3b680e4de885545cd4e12a0';
$secretKey='5be929cb66a833dd56878ca44216f481c8563ab0';

if (isset($_GET['done'])) {
	$namepass = $_GET['done'];
	?>

	<a href="<?php echo $namepass ?>.pdf" download="<?php echo $namepass ?>" id="pdf">Click</a>
	<script>
			document.getElementById("pdf").click(),window.location.href="lib/thanks.html";
	</script>
		
	<?php	
}

function getCurrentURL()
{
	//$currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$currentURL = (@$_SERVER["HTTPS"] == "on");
	//$currentURL .= $_SERVER["SERVER_NAME"];
	if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
	{
		$currentURL .= ":".$_SERVER["SERVER_PORT"];
	} 
	$currentURL .= $_SERVER["REQUEST_URI"];
	return $currentURL;
}

function getBaseURL(){
    $baseURL = $_SERVER['SERVER_NAME'];
    return $baseURL;
}

function Connection(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "universitylp";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

function ConnectionLive(){
	$servername = "192.186.179.2";
	$username = "university_livlp";
	$password = "DB@aAf#t6#*2%";
	$dbname = "universitylp";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

function InsertFormData($v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10,$v11,$v12,$v13,$v14,$v15,$v16,$v17,$v18,$v19,$v20,$v21,$v22,$v23,$v24,$v25,$v26,$v27){
	$state_name="";
	$conn = ConnectionLive();
	 
	$sql1 = "INSERT INTO lp_enquery_data (name, contact, email, course, qualification, state, city, school, pageName, otp, remark, map, utm_source, utm_medium, utm_campaign, utm_content, utm_term, utm_creative, utm_campaignid, utm_adgroupid, utm_creativeid, utm_matchtype, utm_device, utm_network, utm_keyword, utm_placement, gclid) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$v15','$v16','$v17','$v18','$v19','$v20','$v21','$v22','$v23','$v24','$v25','$v26','$v27')";
	$conn->query($sql1);
}

function sendotp($mobile,$otp,$tmpid,$authid){
	$parampro['authkey'] = $authid;
	$parampro['template_id'] = $tmpid;
	$parampro['mobile'] = $mobile;   
	$parampro['otp'] = $otp;
	//$parampro['invisible'] = 0;     
	//$parampro['userip'] = "IPV4";
	$sendsmspro_otp = http_build_query($parampro);
	//$urlpro_otp="https://api.msg91.com/api/v5/otp?authkey=334584AYu4VCVvJw5f00120eP1&template_id=5f04297cd6fc055ef3620221&mobile=9716015545&otp=5654";
	$urlpro_otp="https://api.msg91.com/api/v5/otp?".$sendsmspro_otp;
	$ch_otp=curl_init();
	curl_setopt($ch_otp, CURLOPT_URL, $urlpro_otp); 
	curl_setopt($ch_otp, CURLOPT_RETURNTRANSFER, true);  
	$resultpro_otp = curl_exec($ch_otp);
	$err = curl_error($ch_otp);
	curl_close($ch_otp);
}

function UpdateOtpStatus($otp,$mobile){
	$conn = ConnectionLive();
	$sql1 = "UPDATE lp_enquery_data SET otpVerified=1 WHERE otp=".$otp." and contact=".$mobile;
	$result1 = $conn->query($sql1);
}

function GetStateDrop(){
	$conn=ConnectionLive();
	$sql1 = "SELECT id, name,  code FROM state WHERE status=1";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	// output data of each row
	$i=0;
	while($row1 = $result1->fetch_assoc()) {
	$i++;
	$state[] = $row1;
	}}
	return $state;
}

function GetStateName($sid){
	$state="";
	$conn=ConnectionLive();	
	$sql1 = "SELECT name FROM state WHERE code=".$sid;
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		$row1 = $result1->fetch_assoc();
		$state = $row1['name'];
	}
	return $state;
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

function leadSqCrtOld($secretKey,$accessKey,$val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9,$val10,$val11,$val12,$val13,$val14,$val15,$val16,$val17,$val18,$val19,$val20,$val21,$val22,$val23)
{
	$data_string = '[{"Attribute":"FirstName","Value":"'.$val1.'"},
		{"Attribute":"EmailAddress","Value":"'.$val2.'"},
		{"Attribute":"Phone","Value":"'.$val3.'"},
		{"Attribute":"ProspectStage","Value":"Lead"},
		{"Attribute":"SearchBy","Value":"Phone"},
		{"Attribute":"mx_School","Value":"'.$val4.'"},
		{"Attribute":"mx_Course_Interested_In","Value":"'.$val5.'"},
		{"Attribute":"mx_State","Value":"'.$val6.'"},
		{"Attribute":"mx_City","Value":"'.$val7.'"},
		{"Attribute":"mx_Qualification_Id","Value":"'.$val8.'"},
		{"Attribute":"Source","Value":"'.$val9.'"},
		{"Attribute":"SourceMedium","Value":"'.$val10.'"},
		{"Attribute":"SourceCampaign","Value":"'.$val11.'"},
		{"Attribute":"mx_Search_Term","Value":"'.$val12.'"},
		{"Attribute":"mx_UTM_Term","Value":"'.$val13.'"},
		{"Attribute":"mx_UTM_Campaignid","Value":"'.$val14.'"},
		{"Attribute":"mx_UTM_adgroupid","Value":"'.$val15.'"},
		{"Attribute":"mx_UTM_Creative","Value":"'.$val16.'"},
		{"Attribute":"mx_UTM_matchtype","Value":"'.$val17.'"},
		{"Attribute":"mx_UTM_device","Value":"'.$val18.'"},
		{"Attribute":"mx_UTM_network","Value":"'.$val19.'"},
		{"Attribute":"mx_UTM_placement","Value":"'.$val20.'"},
		{"Attribute":"mx_OTP_Status","Value":"'.$val21.'"},
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
		//$arr = json_decode($json_response);
		//$lsdid = $arr->Message->Id;
		//$_SESSION['lsdid']=$lsdid;
		curl_close($curl);
	} catch (Exception $ex) {
		curl_close($curl);
	}
}

function leadSqCrt($secretKey,$accessKey,$val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9,$val10,$val11,$val12,$val13,$val14,$val15,$val16,$val17,$val18,$val19,$val20,$val21,$val22,$val23,$val24)
{	
	$data_string = '[{"Attribute":"FirstName","Value":"'.$val1.'"},
		{"Attribute":"EmailAddress","Value":"'.$val2.'"},
		{"Attribute":"Phone","Value":"'.$val3.'"},
		{"Attribute":"ProspectStage","Value":"Lead"},
		{"Attribute":"SearchBy","Value":"Phone"},
		{"Attribute":"mx_School","Value":"'.$val4.'"},
		{"Attribute":"mx_Course_Interested_In","Value":"'.$val5.'"},
		{"Attribute":"mx_State","Value":"'.$val6.'"},
		{"Attribute":"mx_City","Value":"'.$val7.'"},
		{"Attribute":"mx_Qualification_Id","Value":"'.$val8.'"},
		{"Attribute":"Source","Value":"'.$val9.'"},
		{"Attribute":"SourceMedium","Value":"'.$val10.'"},
		{"Attribute":"SourceCampaign","Value":"'.$val11.'"},
		{"Attribute":"mx_Search_Term","Value":"'.$val12.'"},
		{"Attribute":"mx_UTM_Term","Value":"'.$val13.'"},
		{"Attribute":"mx_UTM_Campaignid","Value":"'.$val14.'"},
		{"Attribute":"mx_UTM_adgroupid","Value":"'.$val15.'"},
		{"Attribute":"mx_UTM_Creative","Value":"'.$val16.'"},
		{"Attribute":"mx_UTM_matchtype","Value":"'.$val17.'"},
		{"Attribute":"mx_UTM_device","Value":"'.$val18.'"},
		{"Attribute":"mx_UTM_network","Value":"'.$val19.'"},
		{"Attribute":"mx_UTM_placement","Value":"'.$val20.'"},
		{"Attribute":"mx_OTP_Status","Value":"'.$val21.'"},
		{"Attribute":"mx_GCLID","Value":"'.$val22.'"},
		{"Attribute":"SourceContent","Value":"'.$val23.'"},
		{"Attribute":"mx_Lead_URL","Value":"'.$val24.'"}]';
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

function leadSqUpdt($secretKey,$accessKey,$val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9,$val10,$val11,$val12,$val13,$val14,$val15,$val16,$val17,$val18,$val19,$val20,$val21,$val22,$val23)
{
	$data_string = '[{"Attribute":"FirstName","Value":"'.$val1.'"},
		{"Attribute":"EmailAddress","Value":"'.$val2.'"},
		{"Attribute":"Phone","Value":"'.$val3.'"},
		{"Attribute":"mx_School","Value":"'.$val4.'"},
		{"Attribute":"mx_Course_Interested_In","Value":"'.$val5.'"},
		{"Attribute":"mx_State","Value":"'.$val6.'"},
		{"Attribute":"mx_City","Value":"'.$val7.'"},
		{"Attribute":"mx_Qualification_Id","Value":"'.$val8.'"},
		{"Attribute":"Source","Value":"'.$val9.'"},
		{"Attribute":"SourceMedium","Value":"'.$val10.'"},
		{"Attribute":"SourceCampaign","Value":"'.$val11.'"},
		{"Attribute":"mx_Search_Term","Value":"'.$val12.'"},
		{"Attribute":"mx_UTM_Term","Value":"'.$val13.'"},
		{"Attribute":"mx_UTM_Campaignid","Value":"'.$val14.'"},
		{"Attribute":"mx_UTM_adgroupid","Value":"'.$val15.'"},
		{"Attribute":"mx_UTM_Creative","Value":"'.$val16.'"},
		{"Attribute":"mx_UTM_matchtype","Value":"'.$val17.'"},
		{"Attribute":"mx_UTM_device","Value":"'.$val18.'"},
		{"Attribute":"mx_UTM_network","Value":"'.$val19.'"},
		{"Attribute":"mx_UTM_placement","Value":"'.$val20.'"},
		{"Attribute":"mx_OTP_Status","Value":"'.$val21.'"},
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

function leadSqUpdtOtp($secretKey,$accessKey,$val1, $val2)
{
	$data_string = '[{"Attribute":"mx_OTP_Status","Value":"'.$val1.'"}]';
	try {
		$curl = curl_init('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Update?accessKey='.$accessKey.'&secretKey='.$secretKey.'&leadId='.$val2);
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

//below code to be remove

function GetFacultyData($school){
	$conn = ConnectionLara();
	$res=array();
	$sql1 = "SELECT id, name, designation, imageLink, bioLink, sequence, school, status FROM faculties_lp WHERE school='".$school."' and status='1' ORDER by sequence ASC";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		$i=0;
		while($row1 = $result1->fetch_assoc()) {
			$i++;
			$res[] = $row1;
		}
	}
	return $res;
}

function verifyotp($mobile,$otp,$authid){
	$res="";
	$parampro['authkey'] = $authid;
	$parampro['mobile'] = $mobile;   
	$parampro['otp'] = $otp;   
	//$parampro['userip'] = "IPV4";
	//$parampro['email'] = "prateek@asms.edu.in";
	//$parampro['template_id'] = "5f04297cd6fc055ef3620221";
	//$parampro['invisible'] = 0;     
	$sendsmspro_otp = http_build_query($parampro);
	$urlpro_otp="https://api.msg91.com/api/v5/otp/verify?".$sendsmspro_otp;
	$ch_otp=curl_init();
	curl_setopt($ch_otp, CURLOPT_URL, $urlpro_otp); 
	curl_setopt($ch_otp, CURLOPT_RETURNTRANSFER, true);  
	$resultpro_otp = curl_exec($ch_otp);
	//$resdata = var_dump(json_decode($resultpro_otp,true));
	$resdata = json_decode($resultpro_otp,true);
	$res = $resdata['message'];
	return $res;
	$err = curl_error($ch_otp);
	curl_close($ch_otp);
}

function resendotp($mobile,$authid){
	$parampro['authkey'] = $authid;
	$parampro['mobile'] = $mobile;
	$parampro['retrytype'] = "text";   
	//$parampro['invisible'] = 0;     
	//$parampro['otp'] = $_SESSION['srndno'];   
	//$parampro['userip'] = "IPV4";
	//$parampro['template_id'] = "5f04297cd6fc055ef3620221";
	$sendsmspro_otp = http_build_query($parampro);
	$urlpro_otp="https://api.msg91.com/api/v5/otp/retry?".$sendsmspro_otp;
	$ch_otp=curl_init();
	curl_setopt($ch_otp, CURLOPT_URL, $urlpro_otp); 
	curl_setopt($ch_otp, CURLOPT_RETURNTRANSFER, true);  
	$resultpro_otp = curl_exec($ch_otp);
	$err = curl_error($ch_otp);
	curl_close($ch_otp);
}

function getWrongUrl()
{
	$new_link=getPage();
	$source=getSource('name_from',$new_link);
	$sourcecnt=count($source);
	$srcval = getSource('name_from',$new_link);
	if(count($srcval)==1){}else{$redirect = header("Location: https://aaftgroup.com/");}
	return $redirect;
}

function GetProgramLP($scl_id,$duration){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$program=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, name, page_links, school_id, duration, status FROM programs WHERE school_id=$scl_id and duration='$duration' and status=1";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	// output data of each row
	$i=0;
	while($row1 = $result1->fetch_assoc()) {
	$i++;
	$program[] = $row1["name"];
	}}
	return $program;
}

function GetProgramLPFormNewLpForm($sclId,$subSclId,$dur){
	if($dur==1){$dur="'4y','3y','2y'";}elseif($dur==2){$dur="'1y','6m','3m'";}elseif($dur==3){$dur="'4y','3y','2y','1y','6m','3m'";}
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_laraveldb";
	$program=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, name, name_in_form, page_links, school_id, duration, seq, status FROM programs WHERE school_id=".$sclId." and subSchool in (".$subSclId.") and duration in (".$dur.") and status in (1,2) ORDER BY seq";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	// output data of each row
	$i=0;
	while($row1 = $result1->fetch_assoc()) {
	$i++;
	$program[] = $row1;
	}}
	return $program;
}

function GetProgramLPFormNewLp($sclId,$subSclId,$dur){
	//if($Dur==1){$Dur="'4y','3y','2y'";}elseif($Dur==2){$Dur="'1y','6m','3m'";}elseif($Dur==3){$Dur="'4y','3y','2y','1y','6m','3m'";}
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_laraveldb";
	$program=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, name, name_in_form, page_links, school_id, duration, status FROM programs WHERE school_id=".$sclId." and subSchool in (".$subSclId.") and duration in ('".$dur."') and status in (1,2)";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	// output data of each row
	$i=0;
	while($row1 = $result1->fetch_assoc()) {
	$i++;
	//$program = $row1['name'];
	echo '<li>'.$row1['name'].'</li>';
	}}
	//return $program;
}

function GetProgramLPForm($sclId,$cpnId){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$program=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, name_in_form, page_links, school_id, duration, status FROM programs WHERE school_id=".$sclId." and campaign_id in (".$cpnId.") and status in (1,2)";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	// output data of each row
	$i=0;
	while($row1 = $result1->fetch_assoc()) {
	$i++;
	$program[] = $row1;
	}}
	return $program;
}

function GetQualificationDrop(){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$qualification=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, q_id, q_name FROM qualification WHERE status=1";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	// output data of each row
	$i=0;
	while($row1 = $result1->fetch_assoc()) {
	$i++;
	$qualification[] = $row1;
	}}
	return $qualification;
}

function GetSchoolName($val){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_laraveldb";
	$res=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, lsq_name, name FROM school WHERE id=".$val;
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	// output data of each row
	$i=0;
	while($row1 = $result1->fetch_assoc()) {
	$i++;
	$res[] = $row1;
	}}
	return $res;
}

function getDidnumber($utm_campaign){
	$program='';
	$conn = ConnectionLive();
	//else condition to check source
		$sql1 = "SELECT gs_did, gs_camp, fb_did, fb_camp FROM camp_wise_numbers WHERE gs_camp ='".$utm_campaign."' and status=1";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) {
			$row1 = $result1->fetch_assoc();
			$program = $row1['gs_did'];
			//$program = "919109112078";
		}else{
			$program = "919109112078";
		}
	
	return $program;
}

?>
