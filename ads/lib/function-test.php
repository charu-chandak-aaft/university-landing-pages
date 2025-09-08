<?php
session_start();
$mode = $_GET['mode'];
(empty($_GET['utm_source'])) ? $utm_source="" : $utm_source = $_GET['utm_source'];
(empty($_GET['utm_medium'])) ? $utm_medium="" : $utm_medium = $_GET['utm_medium'];
(empty($_GET['utm_campaign'])) ? $utm_campaign="" : $utm_campaign = $_GET['utm_campaign'];
(empty($_GET['utm_content'])) ? $utm_content="" : $utm_content = $_GET['utm_content'];
(empty($_GET['utm_term'])) ? $utm_term="" : $utm_term = $_GET['utm_term'];
(empty($_GET['map'])) ? $map="" : $map = $_GET['map'];

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
//echo getBaseURL();

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
	echo $sql1 = "SELECT id, name_in_form, page_links, school_id, duration, status FROM programs WHERE school_id=".$sclId." and campaign_id in (".$cpnId.") and status=1";
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

function GetProgramLPDegDip($scl_id,$dur){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$program=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	echo $sql1 = "SELECT id, name_in_form, page_links, school_id, duration, status FROM programs WHERE school_id=$scl_id and duration in (".$dur.") and status=1";
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

function GetProgramLPFormCoursewise($scl_id, $c_wise){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$program=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, name_in_form, page_links, school_id, duration, status FROM programs WHERE school_id=$scl_id and coursewise_sid=$c_wise and status=1";
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

function GetStateDrop(){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$state=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
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

function GetCampGroup($val){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$res=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, name FROM campaign_group WHERE status=1 and id=".$val;
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

function GetCampSchool($val){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$res=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT school_id FROM programs WHERE status=1 and campaign_id=".$val;
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

function GetSchoolName($val){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$res=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, name FROM school WHERE id=".$val;
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

function GetSchoolPageIdentity($PageId,$SchoolId){
	$res=array();
	$PageName=GetCampGroup($PageId);
    $PageName=$PageName[0]['name'];
    $SchoolName=GetSchoolName($SchoolId);
    $SchoolName=$SchoolName[0]['name'];
    $SchoolName=str_replace("School of ","",$SchoolName);
    switch ($SchoolName) {
      case 'Still-Photography':
        $SchoolName="Photography";
        break;
      case 'AIHT':
        $SchoolName="Hospitality";
        break;
    }
    $res=array("PageName"=>$PageName,"SchoolName"=>$SchoolName);
	return $res;
}

function GetCampaignDetailByUrl($val){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$res=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "SELECT id, name, pageurl, schoolid FROM campaign_group WHERE pageurl='".$val."'";
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

function GetCampaignUrlName(){
	$res=array();
	//Get Current Url
	$url = getCurrentURL();
	

	//Get ad position from Current Url
	$adPos = strpos($url,"ad");
	$adPos = $adPos+3;

	//Get php position from Current Url
	$phpPos = strpos($url,"php");
	 $phpPos = ($phpPos-$adPos)-1;

	//Get page name from Current Url
	 $pageName = substr($url,$adPos,$phpPos);
	 
	 echo $pageName;

	 $pageDetail = GetCampaignDetailByUrl($pageName);
	 var_dump($pageDetail);

	echo $campaignName = $pageDetail[0]['name'];
	echo "<br>";
	echo $schoolId = $pageDetail[0]['schoolid'];
	echo "<br>";
	echo $schoolName = GetSchoolName($schoolId);
	echo "<br>";
	echo $schoolName = $schoolName[0]['name'];
	echo "<br>";
	echo $pageUrlName = $pageDetail[0]['pageurl'];
	echo "<br>";
	echo $pageId = $pageDetail[0]['id'];

    $schoolName=str_replace("School of ","",$schoolName);
    switch ($schoolName) {
      case 'Still-Photography':
        $schoolName="Photography";
        break;
      case 'AIHT':
        $schoolName="Hospitality";
        break;
    }
    $res=array("campaignName"=>$campaignName,"pageId"=>$pageId,"schoolId"=>$schoolId,"schoolName"=>$schoolName);
	return $res;
}

function InsertFormData($v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10,$v11,$v12,$v13,$v14,$v15,$v16,$v17,$v18){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$state_name="";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	echo $sql1 = "INSERT INTO data_course_lp (student, contact, email, course_id, qual_id, state_id, city_id, source, school_id, school_name, page_name, otp, remark, map, utm_source, utm_medium, utm_campaign, utm_content) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$v15','$v16','$v17','$v18')";
	$conn->query($sql1);
}

function SubmitConditionalData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$SchoolName,$PageName,$Otp,$Remark,$map,$utm_source,$utm_medium,$utm_campaign,$utm_content,$TempID,$AuthID,$ReUrl){
	$res="";
	if($Name!='' && $Emailid!='' && is_numeric($Phone) && $Phone!='' && $CourseId!='' && $StateId!=''){
			//InsertFormData($Name,$Phone,$Emailid,$CourseId,"1","1","1","1","1","1","1",$Otp,"1","1",$utm_source,$utm_medium,$utm_campaign,$utm_content);
			//echo $Name; echo $Phone; echo $Emailid; echo $CourseId; echo $QualId; echo $StateId; echo $CityId; echo $Source; echo $SchoolId; echo $SchoolName; echo $PageName; echo $Otp; echo $Remark; echo $map; echo $utm_source; echo $utm_medium; echo $utm_campaign; echo $utm_content;
			//die();
			InsertFormData($Name,$Phone,$Emailid,$CourseId,$QualId,$StateId,$CityId,$Source,$SchoolId,$SchoolName,$PageName,$Otp,$Remark,$map,$utm_source,$utm_medium,$utm_campaign,$utm_content);
			sendotp($Phone,$Otp,$TempID,$AuthID);

			if(empty($utm_source) || empty($utm_medium) || empty($utm_campaign) || empty($utm_content)){
				header("location: ".$ReUrl."?mode=1");
			}else{
				header("location: ".$ReUrl."&mode=1");
			}
		}
		else{
		$res = 'All fields are mandatory.';
		}
}

function GetFormData($mobile){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
			
	$form=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 

	$sql1 = "SELECT id, fillcount, course_id, otp_varified, updated_on, created_on FROM data_course_lp WHERE contact=".$mobile." ORDER by id DESC limit 0,1";

	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	// output data of each row
	$i=0;
	while($row1 = $result1->fetch_assoc()) {
	$i++;
	$form[] = $row1;
	}}

	return $form;
}

function UpdateFormData($Otp,$Phone,$attempt,$recordId,$utm_source,$utm_medium,$utm_campaign,$utm_content,$TempID,$AuthID,$ReUrl){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "UPDATE data_course_lp SET fillcount=".$attempt.", otp=".$Otp.", created_on=now() WHERE id=".$recordId;
	$result1 = $conn->query($sql1);

	sendotp($Phone,$Otp,$TempID,$AuthID);

	if(empty($utm_source) || empty($utm_medium) || empty($utm_campaign) || empty($utm_content)){
		header("location: ".$ReUrl."?mode=1");
	}else{
		header("location: ".$ReUrl."&mode=1");
	}		
}

function UpdateOtpStatus($otp,$mobile){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	$sql1 = "UPDATE data_course_lp SET otp_varified=1 WHERE otp=".$otp." and contact=".$mobile;
	$result1 = $conn->query($sql1);
}

function lsqLeadCurl(){
	$urlpro_otp="https://aaft.com/ad/lib/lead_api_noida_courselp.php";
	$ch_otp=curl_init();
	curl_setopt($ch_otp, CURLOPT_URL, $urlpro_otp); 
	curl_setopt($ch_otp, CURLOPT_RETURNTRANSFER, true);  
	$resultpro_otp = curl_exec($ch_otp);
	$err = curl_error($ch_otp);
	curl_close($ch_otp);
}

?>
