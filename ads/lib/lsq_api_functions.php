<?php
function ConnectionLsq(){
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

function GetSchoolIdLsq($cid){
	$conn = ConnectionLsq(); 
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

function GetSchoolNameLsq($sid){
	$conn = ConnectionLsq(); 
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

function GetCourseNameLsq($cid){
	$conn = ConnectionLsq(); 		
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

function GetQualificationLsq($qid){
	$conn = ConnectionLsq(); 		
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

function GetStateNameLsq($sid){
	$conn = ConnectionLsq(); 		
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

function GetCityNameLsq($cid){
	$conn = ConnectionLsq(); 		
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

function GetAPIDataLsq(){
	$conn = ConnectionLsq();
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

	$sql1 = "SELECT id, student, contact, email, course_id, qual_id, state_id, city_id, source, school_id, school_name, page_name, otp, otp_varified, remark, utm_source, utm_medium, utm_campaign, utm_content, created_on, updated_on, status from data_course_lp where lsq=0 and created_on between '".$prevDay." 00:00:00' and '".$difference."'";

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

function GetCampaignNameLsq($cmpid){
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

function GetCronUpdateLsq($id,$val1){
	$conn = ConnectionLsq(); 		
	$sql1 = "UPDATE data_course_lp SET lsq=".$val1." WHERE id=".$id;
	$result1 = $conn->query($sql1);
}
?>