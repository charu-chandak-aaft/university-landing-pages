<?php
//phpinfo();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

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

function ConnectionLara(){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_laraveldb";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 		
	return $conn;
	$conn->close();
}

function GetSchoolId($cid){
	$conn = ConnectionLara(); 
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
	$conn = ConnectionLara(); 
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
	$conn = ConnectionLara(); 		
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

	//$sql1 = "SELECT id, school, program, std_name, std_email, std_contact, father_name, txn_id, amt_paid, payment_status, created_on from diploma_payment where payment_status='E000' and created_on between '".$prevDay." 00:00:00' and '".$difference."'";
	$sql1 = "SELECT id, school, program, std_name, std_email, std_contact, father_name, address, txnid, amt_paid, payment_status, created_on from diploma_payment where payment_status='E000'";

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
	$sql1 = "UPDATE data_course_lp_new SET lsq=".$val1." WHERE id=".$id;
	$result1 = $conn->query($sql1);
}

$totaldata = GetAPIData();

//$totaldatacnt = count($totaldata);
echo json_encode($totaldata);

//$i=0;
/*while($totaldatacnt>$i){
	$id = $totaldata[$i]['id'];
	$schoolId = $totaldata[$i]['school'];	
	$schoolName = GetSchoolName($schoolId);
	$program = $totaldata[$i]['program'];
	switch($program){
		case '777' : $program='Diploma';
		break;
		case '888' : $program='Pg Diploma';
		break;
	}
	$name = $totaldata[$i]['std_name'];
	$email = $totaldata[$i]['std_email'];
	$contact = $totaldata[$i]['std_contact'];
	$fatherName = $totaldata[$i]['father_name'];
	$address = $totaldata[$i]['address'];	
	$txnid = $totaldata[$i]['txnid'];
	$amtPaid = $totaldata[$i]['amt_paid'];
	$paymentStatus = $totaldata[$i]['payment_status'];
	$created_on = $totaldata[$i]['created_on'];
	$i++;
}*/
?>