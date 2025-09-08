<?php
$pageDetail = GetCampaignUrlName();
$PageName = $pageDetail['campaignName'];
$SchoolName = $pageDetail['schoolName'];
$Schoolid = $pageDetail['schoolId'];
$PageId = $pageDetail['pageId'];
?>

<!--Form Start-->
<?php if($mode==""){ ?>
<div class="side-form form-hold" id="side_form">
  <form name="aaft01" action="" method="post">
    <h3 style="margin: 5px 0 -5px 0;">Request A Call Back!</h3>
    <h4>Fill the below form to get a call back from our admission manager</h4><br />
    <p><input name="PageName" type="hidden" value="<?php echo $PageName; ?>" required></p>
    <p><input name="SchoolName" type="hidden" value="<?php echo $SchoolName; ?>" required></p>
    <p><input name="School" type="hidden" value="<?php echo $Schoolid; ?>" required></p>
    <p><input name="YourName" type="text" required class="form-control txt_box" id="txtName" placeholder="Name*"></p>
    <p><input name="Email" type="email" required class="form-control txt_box" id="txtEmail" placeholder="Email*"></p>
    <p><input name="ContactNumber" type="tel" required pattern="[0-9]{10}" minlength="10" maxlength="10" class="form-control txt_box" id="txtNumber" placeholder="Contact Number*" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></p>
    <p><select name="Edu" class="form-control txt_selectarea" required id="txtEdu">
      <!--<option value="99.N/A" selected="selected">Qualification*</option>-->
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
    </select></p>

    <p><select class="selectpicker form-control txt_selectarea" name="Course" required id="txtCountry">
      <option value="" selected="selected">Select Course*</option>
      <?php
      switch ($PageId) {
        case '28': $PageId="27,28";
          break;
        case '22': $PageId="22,33";
          break;
      }      
      $prg=GetProgramLPForm($Schoolid,5);
      $prgCnt=count($prg);
      $i=0;
      while ($i<$prgCnt)
      {
        echo "<option value=".$prg[$i]['id'].">".$prg[$i]['name_in_form']."</option>";
        $i++;
        }
      ?>
      </select></p>

    <p><select name="State" required class="selectpicker form-control txt_selectarea" id="txtState" onChange="setBlank()">
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
    </select></p>

    <p><select name="City" required class="selectpicker form-control txt_selectarea" id="txtCity1">
      <option value="" selected="selected">Select City*</option>
      <option value="">Select State First*</option>
    </select></p>

    <p><textarea name="Remark" cols="30" rows="2" required class="form-control" id="txtMsg" placeholder="Message*"></textarea></p>
      <center><input id="btn_cng" name="BtnSubmit" type="submit" value="Enquire Now" onClick="myVal()" >
      <input id="btn_cng1" name="submit_home_bottom" type="text" value="Wait..." class="please_wait" disabled></center>
  </form>
</div>
<?php }else {?>
<!--Form end-->

<!--OTP Form Start-->
<div class="side-form form-hold" id="side_form">
  <form name="aaft02" action="" method="post">
    <h3 style="margin: 5px 0 -5px 0;"><?php if(empty($_SESSION['OtpStatus'])){echo "Enter OTP";}else{echo "<span style='color:#FF0000'>".$_SESSION['OtpStatus']."</span>";} ?> </h3>
    <!--<h4>Fill the below form to get a call back from our admission manager</h4>-->
    <br />
    
    <p><input name="Otp" type="tel" required pattern="[0-9]{4}" minlength="4" maxlength="4" class="form-control txt_box" id="txtNumber" placeholder="Enter OTP*" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></p>
      <center><input id="btn_cng" name="OtpSubmit" type="submit" value="Submit OTP" onClick="myVal01()">
      <input id="btn_cng1" name="submit_home_bottom" type="text" value="Wait..." class="please_wait" disabled></center>
      <div style="clear:both; height:10px;"></div>
      
      <p style="cursor: pointer;" onclick="OtpRe()"><i class="fa fa-repeat" aria-hidden="true"></i> Resend OTP</p>
      <input id="SesPhone" type="hidden" value="<?php echo $_SESSION['Phone']; ?>">
  </form>
</div>
<?php } ?>
<!--OTP Form end-->