<script>
function setBlank(){
	let t=document.getElementById("id_State").value,
	e=new XMLHttpRequest;
	e.onreadystatechange=function(){
		4==this.readyState&&200==this.status&&(document.getElementById("id_City").innerHTML=this.responseText)
	},
	e.open("GET","inc/city.php?state="+t,!0),e.send()
}

function setBlankpop(){
	let t=document.getElementById("txtStatepop").value,
	e=new XMLHttpRequest;
	e.onreadystatechange=function(){
		4==this.readyState&&200==this.status&&(document.getElementById("txtCitypop").innerHTML=this.responseText)
	},
	e.open("GET","inc/city.php?state="+t,!0),e.send()
}
	
function checkDetailsEnq(){
	//alert('welcome');
	var v1 = document.getElementById('id_YourName').value;
	var v2 = document.getElementById('id_Email').value;
	var v3 = document.getElementById('id_ContactNumber').value;
	var v4 = document.getElementById('id_State').value;
	var v5 = document.getElementById('id_City').value;
	var v6 = document.getElementById('id_Edu').value;
	//var v7 = document.getElementById('txtSchool').value;
	var v8 = document.getElementById('id_Course').value;
	var v9 = document.getElementById('id_PageName').value;
	var v10 = document.getElementById('id_School').value;
	
    if (v1=='' || v2=='' || (v3<1111111111 ||  v3>9999999999) || v4=='' || v5=='' || v6=='' || v8=='' || v9=='' || v10=='')
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
            //SendOtp(1);
			/*sessionStorage.setItem('email', v2);*/            
            //document.getElementById("step01").style.display="none";
            //document.getElementById("step02").style.display="block";
			//alert(v1+v2+v3+v4+v5+v6+v8+v9+v10);
			document.getElementById('waitBtn').style.display="block";
			document.getElementById('subBtn').style.display="none";
			
			submitData();
        }
        else
        {
            alert('Invalid Data');
        }
    }
}
	
function submitData() {
	let id_School=btoa(document.getElementById("id_School").value);
	let id_PageName=btoa(document.getElementById("id_PageName").value);
	let id_YourName=document.getElementById("id_YourName").value;
	let id_Email=document.getElementById("id_Email").value;
	let id_ContactNumber=document.getElementById("id_ContactNumber").value;
	let id_State=document.getElementById("id_State").value;
	let id_City=document.getElementById("id_City").value;
	let id_Edu=document.getElementById("id_Edu").value;
	let id_Course=btoa(document.getElementById("id_Course").value);
	let id_utm_source=document.getElementById("id_utm_source").value;
	let id_utm_medium=document.getElementById("id_utm_medium").value;
	let id_utm_campaign=document.getElementById("id_utm_campaign").value;
	let id_utm_term=document.getElementById("id_utm_term").value;
	let id_utm_creative=document.getElementById("id_utm_creative").value;
	let id_utm_content=document.getElementById("id_utm_content").value;
	let id_utm_campaignid=document.getElementById("id_utm_campaignid").value;
	let id_utm_adgroupid=document.getElementById("id_utm_adgroupid").value;
	let id_utm_creativeid=document.getElementById("id_utm_creativeid").value;
	let id_utm_matchtype=document.getElementById("id_utm_matchtype").value;
	let id_utm_device=document.getElementById("id_utm_device").value;
	let id_utm_network=document.getElementById("id_utm_network").value;
	let id_utm_keyword=document.getElementById("id_utm_keyword").value;
	let id_utm_placement=document.getElementById("id_utm_placement").value;
	let id_gclid=document.getElementById("id_gclid").value;
	let id_map=document.getElementById("id_map").value;

	var xhttp = new XMLHttpRequest();
	
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  //alert('submit');
			if(this.responseText=='Success'){
				window.location.href='inc/thanks.html';
			}else{
				document.getElementById("step01").style.display="none";
				document.getElementById("step02").style.display="block";
			}
		}
	};
  
	//console.log("form-submit.php?id_YourName="+id_YourName+"&id_School="+id_School+"&id_PageName="+id_PageName+"&id_Email="+id_Email+"&id_ContactNumber="+id_ContactNumber+"&id_State="+id_State+"&id_City="+id_City+"&id_Edu="+id_Edu+"&id_Course="+id_Course+"&id_map="+id_map+"&id_utm_source="+id_utm_source+"&id_utm_medium="+id_utm_medium+"&id_utm_campaign="+id_utm_campaign+"&id_utm_term="+id_utm_term+"&id_utm_creative="+id_utm_creative+"&id_utm_content="+id_utm_content+"&id_utm_campaignid="+id_utm_campaignid+"&id_utm_adgroupid="+id_utm_adgroupid+"&id_utm_creativeid="+id_utm_creativeid+"&id_utm_matchtype="+id_utm_matchtype+"&id_utm_device="+id_utm_device+"&id_utm_network="+id_utm_network+"&id_utm_keyword="+id_utm_keyword+"&id_utm_placement="+id_utm_placement+"&id_gclid="+id_gclid+"&sub=1");

	xhttp.open("GET","inc/form-submit-aws.php?id_YourName="+id_YourName+"&id_School="+id_School+"&id_PageName="+id_PageName+"&id_Email="+id_Email+"&id_ContactNumber="+id_ContactNumber+"&id_State="+id_State+"&id_City="+id_City+"&id_Edu="+id_Edu+"&id_Course="+id_Course+"&id_map="+id_map+"&id_utm_source="+id_utm_source+"&id_utm_medium="+id_utm_medium+"&id_utm_campaign="+id_utm_campaign+"&id_utm_term="+id_utm_term+"&id_utm_creative="+id_utm_creative+"&id_utm_content="+id_utm_content+"&id_utm_campaignid="+id_utm_campaignid+"&id_utm_adgroupid="+id_utm_adgroupid+"&id_utm_creativeid="+id_utm_creativeid+"&id_utm_matchtype="+id_utm_matchtype+"&id_utm_device="+id_utm_device+"&id_utm_network="+id_utm_network+"&id_utm_keyword="+id_utm_keyword+"&id_utm_placement="+id_utm_placement+"&id_gclid="+id_gclid+"&sub=1", true);
	xhttp.send();
}

function checkDetailsEnqOtp(){
	let v1 = document.getElementById('id_Otp').value;

    if (v1=='' || (v1<1000 ||  v1>9999))
    {
        alert('Invalid Input');
    }
    else{
		submitDataOtp();
    }
}	

function submitDataOtp() {
	let otp=document.getElementById("id_Otp").value;

	let xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(this.responseText=='OtpSuccess'){
				window.location.href="inc/thanks.html";
			}else{
				document.getElementById("otpError").innerHTML = this.responseText;
			}
		}
	};
  	
	//console.log('inc/form-submit.php?otp="'+otp+'"&sub=2');
	xhttp.open("GET","inc/form-submit-aws.php?otp="+otp+"&sub=2", true);
	xhttp.send();
}

function reOtp() {
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	if(this.responseText=='Success'){
    		window.location.href="inc/thanks.html";
    	}else{
    		document.getElementById("otpError").innerHTML = this.responseText;
    	}
    }
  };
  
  //alert("lib/form-submit.php?nam="+nam+"&sna="+sna+"&pag="+pag+"&ema="+ema+"&num="+num+"&sta="+sta+"&cit="+cit+"&edu="+edu+"&sch="+sch+"&pro="+pro+"&sub=1");
  xhttp.open("GET","inc/form-submit-aws.php?sub=3", true);
  xhttp.send();
}
	
let specialKeys = new Array();
specialKeys.push(8); //Backspace
function IsNumeric(e) {
    let keyCode = e.which ? e.which : e.keyCode
    let ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    //document.getElementById("error").style.display = ret ? "none" : "inline";
    return ret;
}

function IsNumericSpace(e) {
    let keyCode = e.which ? e.which : e.keyCode
    let ret = ((keyCode != 32) || specialKeys.indexOf(keyCode) != -1);
    //document.getElementById("error").style.display = ret ? "none" : "inline";
    return ret;
}
</script>