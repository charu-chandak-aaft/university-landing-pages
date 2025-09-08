<?php

//$ct=$_GET['first'];
$st=$_GET['state'];
//$cty=GetCityDrop($ct,$st);
$cty=GetDistrictDrop($st);
$cnt=count($cty);
$i=0;

?><option value="" selected="selected">Select City*</option><?php
while($i<$cnt)
{
?>
<option value="<?php echo $cty[$i]['id']; ?>"><?php echo $cty[$i]['name']; ?></option>
<?php
$i++;
}

function GetDistrictDrop($st){
	$servername = "192.186.179.2";
	$username = "aaft_dbuser";
	$password = "?4IYzmqDB(8+";
	$dbname = "aaft_website_content";
		
		$city=array();
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
		//$sql1 = "SELECT id, name, state_id FROM district WHERE name like '$ct%' and code='$st' and status=1";
		$sql1 = "SELECT id, name, state_id FROM district WHERE code='$st' and status=1";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) {
		// output data of each row
		$i=0;
		while($row1 = $result1->fetch_assoc()) {
		$i++;
		$city[] = $row1;
		}}
		return $city;
}

?>

