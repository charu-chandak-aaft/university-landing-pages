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

function GetAPIData(){
	$conn = Connection();
	$softData="";
	
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

	$sql1 = "SELECT id, school, program, std_name, std_email, std_contact, father_name, address, txnid, amt_paid, payment_status, created_on from diploma_payment where payment_status='E000'";

	$result1 = $conn->query($sql1);
	$softData= $result1->num_rows;
	return $softData;
}

$totaldata = GetAPIData();

if($totaldata>0){
	echo ["count"=>$totaldata];
}
else{
	echo ["count"=>"N/A"];
}

//$totaldatacnt = count($totaldata);
//echo json_encode($totaldata);
?>