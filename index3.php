<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id="checkInTime"></p>
<?php
    if ($result->checkInTime == 0 || $result->checkInTime == NULL) {
     // here echo your button or link 
    } else { ?>
     <input type="text" class="form-control timepicker" id="checkInTime" name="checkInTime" value="<?php echo date('H:i:s',strtotime($result->checkInTime));}?>" required parsley-maxlength="6" placeholder="checkInTime" disabled/>
  <?php  } ?>
</body>
</html>