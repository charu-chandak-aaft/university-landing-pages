<input type="text" class="txtbox" name="firstname" placeholder="Name*" required id="txtNameb">						
<input type="email" class="txtbox" name="email" required id="txtEmailb" placeholder="Email*" onkeypress="return IsNumericSpace(event);">
<input type="tel" class="txtbox" name="phone" placeholder="Phone Number*" required pattern="[0-9]{10}" minlength="10" maxlength="10" id="txtNumberb" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
<input type="hidden" class="txtbox" name="firstname" placeholder="Name*" value="1" required id="txtEdub">
<input type="hidden" class="txtbox" name="course" placeholder="course*" value="0" required id="txtProgramb">
<!--select class="txtbox" name="course" required id="txtProgramb">
	<option>Select Program</option>
	<option value="1047">Data Science</option>
</select-->

<select name="state" required class="register-input-box" id="txtStatepop" onChange="setBlankpop()">
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

<select name="city" required class="register-input-box" id="txtCitypop">
  <option value="" selected="selected">Select City*</option>
  <option value="">Select State First*</option>
</select>

<!-- Brochure name -->
<input type="hidden" value="<?php echo strtolower(str_replace(" ","",$SchoolName[0]['name'])); ?>" id="brochName">
<input type="hidden" value="<?php echo $ReUrlbrc; ?>" id="urlbrc">
<!-- Brochure name -->
<!--button name="broch_btn" type="submit" class="btn btn-success"> Save</button-->

<center><input style="width:60%; padding-bottom: 40px;" type="submit" value="Download Brochure"  class="form-btn" onclick="checkDetailsBroch()"></center>
