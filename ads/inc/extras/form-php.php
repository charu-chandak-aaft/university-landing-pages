<?php
//include("lib/form-submit.php");

/*$pageDetail = GetCampaignUrlName();
$PageName = $pageDetail['campaignName'];
$SchoolName = $pageDetail['schoolName'];
$Schoolid = $pageDetail['schoolId'];
$PageId = $pageDetail['pageId'];*/

//for new lp
//$SchoolidNewLp='1';
//$Dur='1';
//die();
//GetProgramLPFormNewLp($SchoolidNewLp,'1y');

//$SchoolidNewLp="10";
//$Dur="3";

$SchoolName= GetSchoolName($SchoolidNewLp);
//GetDegDip($Dur);
?>
<style type="text/css">
	.register-form-home-wrapper input[type=text], .register-form-home-wrapper input[type=email], .register-form-home-wrapper input[type=tel], .register-form-home-wrapper select{height: 40px;}
</style>

<div class="register-form-home-wrapper" id="enquire-cta" style="width: 450px;">
	<h3>Request a Call Back :</h3>
	<span>Fill in Your Details</span>

	<div class="m-t-30" id="step02" style="display: none;">
	<!--<form class="m-t-30" method="post" action="" id="step02" style="display: none;">-->
		<div class="form-group">
			<label>Enter OTP*</label>
			<input name="Otp" type="tel" required pattern="[0-9]{4}" minlength="4" maxlength="4" class="register-input-box" id="txtOtp" placeholder="Enter OTP*" onkeypress="return IsNumeric(event);" ondrop="return false;">
		</div>
		<div class="form-btn-wrap">
			<input type="submit" name="" class="form-btn" value="SUBMIT OTP" title="SUBMIT OTP" onclick="checkDetailsEnqOtp()">
		</div>
	<!--</form>-->
	</div>

	<div class="m-t-30" id="step01">
	<!--<form class="m-t-30" method="post" action="" id="step01">-->
		<input name="PageName" type="hidden" value="<?php echo GetDegDip($Dur); ?>" id="txtPag" required>
		<input name="SchoolName" type="hidden" value="<?php echo $SchoolName[0]['name']; ?>" id="txtSna" required>
		<input name="School" type="hidden" value="<?php echo $SchoolidNewLp; ?>" id="txtSchool" required>

		<div class="form-group">
			<label>NAME*</label>
			<input name="YourName" type="text" required class="register-input-box" id="txtName" placeholder="Name*">
		</div>
		<div class="form-group">
			<label>EMAIL*</label>
			<input name="Email" type="email" required class="register-input-box" id="txtEmail" placeholder="Email*" onkeypress="return IsNumericSpace(event);">
		</div>
		<div class="form-group">
			<label>CONTACT*</label>
			<input name="ContactNumber" type="tel" required pattern="[0-9]{10}" minlength="10" maxlength="10" class="register-input-box" id="txtNumber" placeholder="Contact Number*" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
		</div>
		<div class="form-group">
			<label>QUALIFICATION*</label>
			<select name="Edu" class="register-input-box" required id="txtEdu">
		      <option value="" selected="selected">Qualification*</option>
		      <?php
		      $qual=GetQualificationDrop();
		      $qualCnt=count($qual);
		      $i=0;
		      while ($i<$qualCnt)
		      {
		        echo "<option value=".$qual[$i]['q_id'].">".$qual[$i]['q_name']."</option>";
		        $i++;
		        }
		      ?>
		    </select>
		</div>
		<div class="form-group">
			<label>SELECT COURSE*</label>
            <select class="register-input-box" name="Course" required id="txtProgram">
		      <option value="" selected="selected">Select Course*</option>
		      <?php
		      /*switch ($PageId) {
		        case '28': $PageId="27,28";
		          break;
		        case '22': $PageId="22,33";
		          break;
		      }*/

		      $prg=GetProgramLPFormNewLpForm($SchoolidNewLp,$Dur);
		      //var_dump($prg);
		      $prgCnt=count($prg);
		      $i=0;
		      while ($i<$prgCnt)
		      {
		        echo "<option value=".$prg[$i]['id'].">".$prg[$i]['name']."</option>";
		        $i++;
		        }
		      ?>
	      </select>
		</div>
		
		<div class="form-group">
			<label>SELECT STATE*</label>
            <select name="State" required class="register-input-box" id="txtState" onChange="setBlank()">
		      <option value="" selected="selected">Select State*</option>
		      <?php
		      $state=GetStateDrop();
		      $stateCnt=count($state);
		      $i=0;
		      while ($i<$stateCnt)
		      {
		        echo "<option value=".$state[$i]['code'].">".$state[$i]['name']."</option>";
		        $i++;
		      }
		      ?>
		    </select>
		</div>

		<div class="form-group">
			<label>SELECT CITY*</label>
            <select name="City" required class="register-input-box" id="txtCity">
		      <option value="" selected="selected">Select City*</option>
		      <option value="">Select State First*</option>
		    </select>
		</div>
		<div class="form-btn-wrap">
			<input type="submit" name="" class="form-btn" value="ENQUIRE NOW" title="ENQUIRE NOW" onclick="submitData()">
		</div>
	<!--</form>-->
	</div>
</div>

<script>
function setBlank(){
	var t=document.getElementById("txtState").value,
	e=new XMLHttpRequest;
	e.onreadystatechange=function(){
		4==this.readyState&&200==this.status&&(document.getElementById("txtCity").innerHTML=this.responseText)
	},
	e.open("GET","lib/city.php?state="+t,!0),e.send()
}

function loadShow(){
	document.getElementById("txtCity").style.display="block",
	document.getElementById("txtCity1").style.display="none",
	document.getElementById("txtCity2").style.display="block"}

function OtpRe(){
	var ph=document.getElementById("SesPhone").value,n=new XMLHttpRequest;
	n.onreadystatechange=function(){
		4==this.readyState&&200==this.status&&(document.getElementById("").innerHTML=this.responseText)
	},
	n.open("GET","lib/resendotp.php?Phone="+ph,!0),n.send();
	//alert("https://aaft.com/ad/lib/resendotp.php?Phone="+ph);
}

function getVal1(t){
	var e=document.getElementsByClassName(t).innerHTML;
	document.getElementById("txtCity1").value=e,
	document.getElementById("txtCity").style.display="none"}

function getVal(t,e){
	var n=t.className.toString(),
	l=document.getElementsByClassName(n)[0].innerHTML;
	document.getElementById("txtCity1").value=l,
	document.getElementById("txtCity").style.display="none",
	document.getElementById("txtCity1").style.display="block",
	document.getElementById("txtCity2").style.display="none"}

var width = screen.width;
if(width<480){
	document.getElementById("enquire-cta").style.width = "100%";
    //var element = document.getElementById("enquire-cta");
    //alert(element.className);
	//element.className += " " + "MYSTYLE";
}

function submitData() {
  	//alert('enter');
	var sna=document.getElementById("txtSna").value;
	//alert(sna);
	var pag=document.getElementById("txtPag").value;
	//alert(pag);
	var nam=document.getElementById("txtName").value;
	//alert(nam);
	var ema=document.getElementById("txtEmail").value;
	//alert(ema);
	var num=document.getElementById("txtNumber").value;
	//alert(num);
	var sta=document.getElementById("txtState").value;
	//alert(sta);
	var cit=document.getElementById("txtCity").value;
	//alert(cit);
	var edu=document.getElementById("txtEdu").value;
	//alert(edu);
	var sch=document.getElementById("txtSchool").value;
	//alert(sch);
	var pro=document.getElementById("txtProgram").value;
	//alert(pro);

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert('submit');
    }
  };
  
  //alert("lib/form-submit.php?nam="+nam+"&sna="+sna+"&pag="+pag+"&ema="+ema+"&num="+num+"&sta="+sta+"&cit="+cit+"&edu="+edu+"&sch="+sch+"&pro="+pro+"&sub=1");
  xhttp.open("GET","lib/form-submit.php?nam="+nam+"&sna="+sna+"&pag="+pag+"&ema="+ema+"&num="+num+"&sta="+sta+"&cit="+cit+"&edu="+edu+"&sch="+sch+"&pro="+pro+"&sub=1", true);
  xhttp.send();
}

function checkDetailsEnq(){
	var v1 = $('#txtName').val();
	var v2 = $('#txtEmail').val();
	var v3 = $('#txtNumber').val();
	var v4 = $('#txtState').val();
	var v5 = $('#txtCity').val();
	var v6 = $('#txtEdu').val();
	var v7 = $('#txtSchool').val();
	var v8 = $('#txtProgram').val();

    if (v1=='' || v2=='' || (v3<1111111111 ||  v3>9999999999) || v4=='' || v5=='' || v6=='' || v7=='' || v8=='')
    {
        alert('Fill all the fields');
    }
    else{
        var v2v1 = v2.includes("@");
        var v2v2 = v2.includes(" ");
        var v2v3 = v2.length;
        var v2v3x = v2v3>=3;
        //alert(v2v3x);
        var v2v4 = v2.startsWith("@");
        var v2v5 = v2.endsWith("@");
        var v2v6 = v2.startsWith(".");
        var v2v7 = v2.endsWith(".");
        //if(v2v1==true && v2v2==false && v2v3x==true && v2v4==true && v2v5==true && v2v6==true && v2v7==true){
        if(v2v1==true && v2v2==false && v2v3x==true && v2v4==false && v2v5==false && v2v6==false && v2v7==false)
        {
            SendOtp(1);
            submitData();
            document.getElementById("step02").style.display="block";
        }
        else
        {
            alert('Invalid Data');
        }
    }
}

function checkDetailsEnqOtp(){
	var v1 = $('#txtOtp').val();

    if (v1=='' || (v1<1000 ||  v1>9999))
    {
        alert('Invalid Input');
    }
    else{
        
    }
}

var specialKeys = new Array();
specialKeys.push(8); //Backspace
function IsNumeric(e) {
    var keyCode = e.which ? e.which : e.keyCode
    var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    //document.getElementById("error").style.display = ret ? "none" : "inline";
    return ret;
}

function IsNumericSpace(e) {
    var keyCode = e.which ? e.which : e.keyCode
    var ret = ((keyCode != 32) || specialKeys.indexOf(keyCode) != -1);
    //document.getElementById("error").style.display = ret ? "none" : "inline";
    return ret;
}
</script>