<?php
if (isset($_GET['done'])) {
	$namepass = $_GET['done'];
	?>

	<a href="<?php echo $namepass ?>.pdf" download="<?php echo $namepass ?>" id="pdf">Click</a>
	<script>
			document.getElementById("pdf").click(),window.location.href="lib/thanks.html";
	</script>
		
	<?php
	
}

function GetURL()
{
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	//$actual_link_trim = substr($actual_link,0,-16);
	return $actual_link;
}

function Connect()
{
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	return $conn;
}

function ConnectLara()
{
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_laraveldb";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	return $conn;
}

function FetchExistData($contact)
{
	$val = "";
	$conn = Connect();
	$sql1 = "SELECT email FROM brochure_lp WHERE contact='" . $contact . "'";
	$data = $conn->query($sql1);
	if ($data->num_rows > 0) {
		$val = 1;
	}

	return $val;
	$conn->close();
}

function FetchAllData()
{
	$val = "";
	$conn = Connect();
	$sql1 = "SELECT id,name,contact,email,otp_varified,created_on,updated_on,status,sent,otp,course,campaign,source,utm_source,utm_medium,utm_campaign,city FROM brochure_lp";
	$data = $conn->query($sql1);
	$i = 0;
	while ($res = $data->fetch_assoc()) {
		$i++;
		$val[] = $res;
	}

	return $val;
	$conn->close();
}

function InsertNewData($name, $contact, $email, $otp_varified, $status, $sent, $otp, $course, $campaign, $source, $utm_source, $utm_medium, $utm_campaign,$gclid, $city, $state, $sclId, $sclName)
{
	$val = array();
	$conn = Connect();
	$sql1 = "INSERT INTO brochure_lp (student,contact,email,course_id,source,utm_source,utm_medium,utm_campaign,city_id,state_id,school_id,school_name,gclid) VALUES ('$name','$contact','$email','$course','$source','$utm_source','$utm_medium','$utm_campaign','$city','$state','$sclId','$sclName','$gclid')";
	$conn->query($sql1);
	$conn->close();
}

/*
function InsertNewDataTest($col1,$v1,$col2,$v2,$col3,$v3)
{
	$val = array();
	$conn = Connect();
	echo $sql1 = "INSERT INTO brochure_lp ('$col1','$col2','$col3') VALUES ('$v1','$v2','$v3')";
	$conn->query($sql1);
	$conn->close();
}

InsertNewDataTest("student",$student,"email",$email,"contact",$contact);*/
	
function UpdateNewData($name, $contact, $email, $otp_varified, $status, $sent, $otp, $course, $campaign, $source, $utm_source, $utm_medium, $utm_campaign, $city)
{
	$val = array();
	$conn = Connect();
	$sql1 = "UPDATE brochure_lp SET name='" . $name . "', contact='" . $contact . "', email='" . $email . "', otp_varified='" . $otp_varified . "', status='" . $status . "', sent='" . $sent . "', otp='" . $otp . "', course='" . $course . "', campaign='" . $campaign . "', source='" . $source . "', utm_source='" . $utm_source . "', utm_medium='" . $utm_medium . "', utm_campaign='" . $utm_campaign . "', city='" . $city . "' WHERE contact='" . $contact . "'";
	$conn->query($sql1);
	$conn->close();
}

function SchoolNameGet($id)
{
	$result = "";
	$conn = ConnectLara();
	$sql1 = "SELECT name FROM school WHERE id='" . $id . "'";
	$data = $conn->query($sql1);
	$result=$data->fetch_assoc();
	return $result['name'];
	$conn->close();
}

if (isset($_POST['broch_btn'])) {

	$second_url = GetURL();
	$string_pos = strpos($second_url, "?");

	(!empty($_GET['utm_campaign'])) ? $utm_campaign = $_GET['utm_campaign'] : $utm_campaign = "";
	(!empty($_GET['utm_source'])) ? $utm_source = $_GET['utm_source'] : $utm_source = "Website";
	(!empty($_GET['utm_medium'])) ? $utm_medium = $_GET['utm_medium'] : $utm_medium = "";
	(!empty($_GET['utm_term'])) ? $utm_term = $_GET['utm_term'] : $utm_term = "";
	(!empty($_GET['gclid'])) ? $gclid = $_GET['gclid'] : $gclid = "";
	(!empty($_POST['mx_State'])) ? $state = $_POST['mx_State'] : $mx_State = "";

	if (!empty($string_pos)) {
		$trimmed_url = substr($second_url, 0, $string_pos);
		$geturl = $trimmed_url;
	} else {
		$geturl = GetURL();
	}

	$name = $_POST['firstname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$course = $_POST['course'];
	$city = $_POST['city'];
	$broc = $_POST['broc'];
	$state=$_POST['state'];
	$sclId=$_POST['schoolid'];
	$gclid=$_POST['gclid'];
	$sclName=SchoolNameGet($sclId);
	
	if ($name != '' && $email != '' && is_numeric($phone) && $phone != '') {
		
		InsertNewData($name, $phone, $email, "", "", "", "", $course, "", "", $utm_source, $utm_medium, $utm_campaign,$gclid, $city, $state, $sclId, $sclName);
		header("location:" . $geturl . "?done=" . $broc);
		// header("location: ../thank-you.html");
	}
}

?>