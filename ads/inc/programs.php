<?php
include("function.php");
//$ct=$_GET['first'];
$st=$_GET['school'];
//$cty=GetCityDrop($ct,$st);
$prog=GetProgramDropU($st);
$cnt=count($prog);
$i=0;

?><option value="" selected="selected">Select Program*</option><?php
while($i<$cnt)
{
?>
<option value="<?php echo $prog[$i]['name']; ?>"><?php echo $prog[$i]['name']; ?></option>
<?php
$i++;
}

function GetProgramDropU($st){
	$program=array();
	$conn=ConnectionAws();
	//$sql1 = "SELECT id, name, state_id FROM district WHERE name like '$ct%' and code='$st' and status=1";
	$sql1 = "SELECT id, name, school_id FROM programs WHERE school_id='$st' and status=1";
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

?>

