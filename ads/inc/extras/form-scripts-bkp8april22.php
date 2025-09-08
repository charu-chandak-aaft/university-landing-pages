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
	var uso=document.getElementById("uso").value;
	var ume=document.getElementById("ume").value;
	var uca=document.getElementById("uca").value;
	var ute=document.getElementById("ute").value;
	var ucr=document.getElementById("ucr").value;
	var uco=document.getElementById("uco").value;
	var map=document.getElementById("map").value;

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //alert('submit');
    }
  };
  
  //alert("lib/form-submit.php?nam="+nam+"&sna="+sna+"&pag="+pag+"&ema="+ema+"&num="+num+"&sta="+sta+"&cit="+cit+"&edu="+edu+"&sch="+sch+"&pro="+pro+"&uso="+uso+"&ume="+ume+"&uca="+uca+"&ute="+ute+"&ucr="+ucr+"&uco="+uco+"&map="+map+"&sub=1");
  //xhttp.open("GET","lib/form-submit.php?nam="+nam+"&sna="+sna+"&pag="+pag+"&ema="+ema+"&num="+num+"&sta="+sta+"&cit="+cit+"&edu="+edu+"&sch="+sch+"&pro="+pro+"&sub=1", true);
  xhttp.open("GET","lib/form-submit.php?nam="+nam+"&sna="+sna+"&pag="+pag+"&ema="+ema+"&num="+num+"&sta="+sta+"&cit="+cit+"&edu="+edu+"&sch="+sch+"&pro="+pro+"&uso="+uso+"&ume="+ume+"&uca="+uca+"&ute="+ute+"&ucr="+ucr+"&uco="+uco+"&map="+map+"&sub=1", true);
  xhttp.send();
}

function submitDataOtp() {
  	//alert('enter');
	var otp=document.getElementById("txtOtp").value;
	//alert(sna);

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	//var res=this.responseText;
    	//alert(res);
    	if(this.responseText=='OtpSuccess'){
    		//alert('enter01');
    		window.location.href="https://aaft.com/ad/newlp/lib/thanks.html";
    	}else{
    		//alert('enter02');
    		document.getElementById("otpError").innerHTML = this.responseText;
    	}
    }
  };
  
  //alert("lib/form-submit.php?nam="+nam+"&sna="+sna+"&pag="+pag+"&ema="+ema+"&num="+num+"&sta="+sta+"&cit="+cit+"&edu="+edu+"&sch="+sch+"&pro="+pro+"&sub=1");
  xhttp.open("GET","lib/form-submit.php?otp="+otp+"&sub=2", true);
  xhttp.send();
}

function reOtp() {
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	if(this.responseText=='Success'){
    		window.location.href="https://aaft.com/ad/newlp/lib/thanks.html";
    	}else{
    		document.getElementById("otpError").innerHTML = this.responseText;
    	}
    }
  };
  
  //alert("lib/form-submit.php?nam="+nam+"&sna="+sna+"&pag="+pag+"&ema="+ema+"&num="+num+"&sta="+sta+"&cit="+cit+"&edu="+edu+"&sch="+sch+"&pro="+pro+"&sub=1");
  xhttp.open("GET","lib/form-submit.php?sub=3", true);
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
	var v9 = $('#txtPag').val();
	var v10 = $('#txtSna').val();

    if (v1=='' || v2=='' || (v3<1111111111 ||  v3>9999999999) || v4=='' || v5=='' || v6=='' || v7=='' || v8=='' || v9=='' || v10=='')
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
            submitData();
            document.getElementById("step01").style.display="none";
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
        submitDataOtp();
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