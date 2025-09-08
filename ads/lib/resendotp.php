<?php
include('function.php');
$Phone = $_GET['Phone'];
if($Phone==""){header("location: aaft.com");}
$AuthID="334584AYu4VCVvJw5f00120eP1";
resendotp($Phone,$AuthID);
?>