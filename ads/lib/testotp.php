<?php
function sendotp($mobile,$otp,$tmpid,$authid){
	$parampro['authkey'] = $authid;
	$parampro['template_id'] = $tmpid;
	$parampro['mobile'] = $mobile;   
	$parampro['otp'] = $otp;
	//$parampro['invisible'] = 0;     
	//$parampro['userip'] = "IPV4";
	$sendsmspro_otp = http_build_query($parampro);
	//$urlpro_otp="https://api.msg91.com/api/v5/otp?authkey=334584AYu4VCVvJw5f00120eP1&template_id=1207164725877652523&mobile=9716015545&otp=5654";
	$urlpro_otp="https://api.msg91.com/api/v5/otp?".$sendsmspro_otp;
	$ch_otp=curl_init();
	curl_setopt($ch_otp, CURLOPT_URL, $urlpro_otp); 
	curl_setopt($ch_otp, CURLOPT_RETURNTRANSFER, true);  
	$resultpro_otp = curl_exec($ch_otp);
	$err = curl_error($ch_otp);
	curl_close($ch_otp);
}

$TempID="6231b5fa25349c444e344676";
$AuthID="334584AYu4VCVvJw5f00120eP1";
$Phone="9708677791";
$Otp="9090";
sendotp($Phone,$Otp,$TempID,$AuthID);
?>