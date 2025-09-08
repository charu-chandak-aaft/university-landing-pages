<?php
include("function.php");
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
<option value="<?php echo $cty[$i]['name']; ?>"><?php echo $cty[$i]['name']; ?></option>
<?php
$i++;
}

function GetDistrictDrop($st){
	$city=array();
	$conn = Connection();
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

