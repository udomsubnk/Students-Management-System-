<?php	
	include "database.php";
	session_start();
	$id = $_SESSION['user'];
	$id_ch = $_POST['id'];
	$tname = $_POST['titlename'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$nname = $_POST['nickname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$b_day = $_POST['b_day'];
	$tel = $_POST['tel'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$fb = $_POST['facebook'];
	$education = $_POST['education'];
	$section = $_POST['section'];
	
	$err = "";
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$err .= "•กรุณากรอกอีเมล์ใหม่ให้ตัวตามรูปแบบ \n";
	}
	$id_pattern= "/^[0-9]{2}0406[0-9]{7}$/";
	if(!preg_match($id_pattern,$id)){
		$err .= "•กรุณากรอกเลขรหัสบัตรนักศึกษา \n";
	}
	$name_pattern= "/[  ก-๙]{2,100}$/";
	if(!preg_match($name_pattern,$fname)){
		$err .= "•กรุณากรอกชื่อเป็นภาษาไทย \n";
	}
	if(!preg_match($name_pattern,$lname)){
		$err .= "•กรุณากรอกนามสกุลเป็นภาษาไทย \n";
	}
	if(!preg_match($name_pattern,$nname)){
		$err .= "•กรุณากรอกชื่อเล่นเป็นภาษาไทย \n";
	}
	$tel_pattern= "/^0[0-9]{9}$/";
	if(!preg_match($tel_pattern,$tel)){
		$err .= "•กรุณากรอกเบอร์โทรศัทพ์ตามรูปแบบ (ex.0891234567) \n";
	}
	$wh_pattern= "/^[0-9]{2,}$/";
	if(!preg_match($wh_pattern,$weight)){
		$err .= "•กรุณากรอกน้ำหนักเป็นตัวเลข \n";
	}
	if(!preg_match($wh_pattern,$height)){
		$err .= "•กรุณากรอกส่วนสูงเป็นตัวเลข \n";
	}
	if(!$education){
		$err .= "•กรุณาเลือกระดับการศึกษา \n";
	}
	if($education=="ปริญญาตรี"){
		if($section == "ภาคปกติ" || $section == "ภาคพิเศษ")$err .= "•กรุณาเลือกsectionใหม่ \n";
	}else if($education=="ปริญญาโท"){
		if($section == "RA" || $section == "RB" || $section == "RC" || $section == "DA" || $section == "DB" || $section == "CSB")
			$err .= "•กรุณาเลือกsectionใหม่ \n";
	}else if($education=="ปริญญาเอก"){
		if($section == "RA" || $section == "RB" || $section == "RC" || $section == "DA" || $section == "DB" || $section == "CSB")
			$err .= "•กรุณาเลือกsectionใหม่ \n";
	}
	
	if($err != ""){
			echo "$err";
	}else{
		$update_user = "update user 
						set user_login='$id_ch', user_name_title='$tname' , user_frist_name='$fname' , user_last_name='$lname' , user_nick_name='$nname' , user_birthdate='$b_day' , user_email='$email' , 
							user_tel='$tel', user_address='$address' , user_weight='$weight' , user_height='$height' , user_education='$education' , user_section='$section' , user_facebook='$fb' 
						where user_login='$id'";
		$run_update = mysqli_query($con,$update_user);
		if($run_update){$_SESSION['user']=$id_ch;echo "yes";}else{echo "error";}
	}
	mysqli_close($con);
?>