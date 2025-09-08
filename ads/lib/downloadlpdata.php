<?php
//session_start();
//$qdata="and d.created_on BETWEEN '2019-05-31 00:00:01' AND '2019-05-31 23:59:59'";
$key=$_GET['key'];
$qdata="";

if(isset($_POST['DownloadRecords'])){
	$from= $_POST['from'];
	$to= $_POST['to'];
	if($from=="" && $to==""){
		$qdata="";
	}else{
		$qdata="and d.created_on BETWEEN '".$from." 00:00:00' AND '".$to." 23:59:59'";
	}
	DownloadRecordsFunc($qdata);
}

function GetFormDataExlLp($qdata){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
	
	/*$servername = "192.186.179.2";
	$username = "root";
	$password = "";
	$dbname = "website_content";*/
	
	$form=array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	
	//SELECT * FROM `form_data_lp` WHERE `created_on` BETWEEN '2019-01-19 00:00:01' AND '2019-01-19 23:59:59';
	//$sql1 = "SELECT id, date, name, contact, unic, email, course, state, city, source, counselor, department, school, otp_varified, created_on, updated_on FROM form_data_lp WHERE status=1 $qdata ORDER BY created_on";

	$sql1 = "SELECT d.id as id, d.student as StudentName, d.contact as PhoneNumber, d.email as EmailId, d.school_name as SchoolName, p.name as CourseName, d.page_name as ProductName, q.q_name as Qualification, s.name as StateName, c.name as CityName, d.utm_source as UtmSource, d.utm_medium as UtmMedium, d.utm_campaign as UtmCampaign, d.utm_content as UtmContent, d.utm_term as UtmTerm, d.utm_creative as UtmCreative, d.otp_varified as OtpStatus, d.remark as Remark, d.created_on as CreationDate, d.lsq as LsqSent FROM data_course_lp d
		INNER JOIN programs p ON d.course_id=p.id
		INNER JOIN state s ON d.state_id=s.id 
		LEFT JOIN district c ON d.city_id=c.id
		INNER JOIN qualification q ON d.qual_id=q.q_id
		WHERE d.status=1 $qdata ORDER BY d.created_on";
	
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

function DownloadRecordsFunc($qdata){
	$form_data = GetFormDataExlLp($qdata);
	$form_data_cnt = count($form_data);
	
	$file = 'Export_LP_Data.xls';
	ob_start();
	echo '<table border="1"> ';
	echo '<tr><th>SN.</th> <th>StudentName</th> <th>PhoneNumber</th> <th>EmailId</th> <th>SchoolName</th> <th>CourseName</th> <th>ProductName</th> <th>Qualification</th> <th>StateName</th> <th>CityName</th> <th>UtmSource</th> <th>UtmMedium</th> <th>UtmCampaign</th> <th>UtmContent</th> <th>UtmTerm</th> <th>UtmCreative</th> <th>OtpStatus</th> <th>Remark</th> <th>CreationDate</th> <th>LsqSent</th></tr>';
	for ($i=1; $i<=$form_data_cnt-1; $i++) {
	echo "<tr><td>".$i."</td> <td align='center'>".$form_data[$i]['StudentName']."</td> <td>".$form_data[$i]['PhoneNumber']."</td> <td>".$form_data[$i]['EmailId']."</td> <td align='center'>".$form_data[$i]['SchoolName']."</td> <td>".$form_data[$i]['CourseName']."</td> <td>".$form_data[$i]['ProductName']."</td> <td align='center'>".$form_data[$i]['Qualification']."</td> <td>".$form_data[$i]['StateName']."</td> <td>".$form_data[$i]['CityName']."</td> <td>".$form_data[$i]['UtmSource']."</td> <td>".$form_data[$i]['UtmMedium']."</td> <td>".$form_data[$i]['UtmCampaign']."</td> <td>".$form_data[$i]['UtmContent']."</td> <td>".$form_data[$i]['UtmTerm']."</td> <td>".$form_data[$i]['UtmCreative']."</td> <td>".$form_data[$i]['OtpStatus']."</td> <td>".$form_data[$i]['Remark']."</td> <td>".$form_data[$i]['CreationDate']."</td> <td>".$form_data[$i]['LsqSent']."</td></tr>";
	}
	echo '</table>';
	$content = ob_get_contents();
	ob_end_clean();
	header("Expires: 0");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");  header("Content-type: application/vnd.ms-excel;charset:UTF-8");
	header('Content-length: '.strlen($content));
	header('Content-disposition: attachment; filename='.basename($file));
	echo $content;
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>AAFT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 

<?php
if($key=="VWf00wm"){?>
<div class="card" style="width:400px; margin: 100px auto 0 auto;">
<?php include_once('download_menu.php'); ?>
  <img class="card-img-top" src="avatar.jpg" alt="Card image" style="width:200px; border-radius: 50%; margin: 20px auto 0 auto; ">
  <div class="card-body">
    <h4 class="card-title">Select Date</h4>
		<form action="" method="post">
			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">From:</span>
				</div>
				<input class="form-control" type="date" name="from">
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">To:</span>
				</div>
				<input class="form-control" type="date" name="to">
			</div>

			<input class="btn btn-success" type="submit" name="DownloadRecords" value="Download Records">	
		</form>
  </div>
</div>
<?php } else{?>
	<div class="card" style="width:400px; margin: 100px auto 0 auto;">
	  <div class="card-body">
	    <h4 class="card-title" style="text-align: center;">!ERROR-<br> You are not Authorised to access this page</h4>
	  </div>
	</div>
<?php } ?>
</body>
</html>

