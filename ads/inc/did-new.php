<?php
(empty($_GET['utm_source'])) ? $utm_source="" : $utm_source = $_GET['utm_source'];
(empty($_GET['utm_medium'])) ? $utm_medium="" : $utm_medium = $_GET['utm_medium'];
(empty($_GET['utm_campaign'])) ? $utm_campaign="" : $utm_campaign = $_GET['utm_campaign'];
(empty($_GET['utm_term'])) ? $utm_term="" : $utm_term = $_GET['utm_term'];
(empty($_GET['utm_creative'])) ? $utm_creative="" : $utm_creative = $_GET['utm_creative'];
(empty($_GET['utm_content'])) ? $utm_content="" : $utm_content = $_GET['utm_content'];
(empty($_GET['map'])) ? $map="" : $map = $_GET['map']; 
(empty($_GET['gclid'])) ? $gclid="" : $gclid = $_GET['gclid'];

//newly added utm parameters
(empty($_GET['utm_campaignid'])) ? $utm_campaignid="" : $utm_campaignid = $_GET['utm_campaignid'];
(empty($_GET['utm_adgroupid'])) ? $utm_adgroupid="" : $utm_adgroupid = $_GET['utm_adgroupid'];
(empty($_GET['utm_creativeid'])) ? $utm_creativeid="" : $utm_creativeid = $_GET['utm_creativeid'];
(empty($_GET['utm_matchtype'])) ? $utm_matchtype="" : $utm_matchtype = $_GET['utm_matchtype'];
(empty($_GET['utm_device'])) ? $utm_device="" : $utm_device = $_GET['utm_device'];
(empty($_GET['utm_network'])) ? $utm_network="" : $utm_network = $_GET['utm_network'];
(empty($_GET['utm_keyword'])) ? $utm_keyword="" : $utm_keyword = $_GET['utm_keyword'];
(empty($_GET['utm_placement'])) ? $utm_placement="" : $utm_placement = $_GET['utm_placement'];

function ConnectionLara(){
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

function getDidnumberold($utm_source,$utm_campaign){
	$program='';
	$conn = ConnectionLara();
	
	//echo $utm_source."<br>";
	//echo $utm_campaign;
	
	if($utm_source=="facebook"){
		$sql1 = "SELECT gs_did, gs_camp, fb_did, fb_camp FROM camp_wise_numbers WHERE fb_camp ='".$utm_campaign."' and status=1";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) {
			$row1 = $result1->fetch_assoc();
			$program = $row1['fb_did'];
		}
	}
	else if($utm_source=="Adwords"){
		$sql1 = "SELECT gs_did, gs_camp, fb_did, fb_camp FROM camp_wise_numbers WHERE gs_camp ='".$utm_campaign."' and status=1";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) {
			$row1 = $result1->fetch_assoc();
			$program = $row1['gs_did'];
		}
	}
	
	return $program;
}

function getDidnumber($utm_campaign){
	$program='';
	$conn = ConnectionLara();
	//else condition to check source
		$sql1 = "SELECT gs_did, gs_camp, fb_did, fb_camp FROM camp_wise_numbers WHERE gs_camp ='".$utm_campaign."' and status=1";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) {
			$row1 = $result1->fetch_assoc();
			$program = $row1['gs_did'];
		}else{
			$program = "919109112056";
		}
	
	return $program;
}

echo getDidnumber($utm_campaign);
?>