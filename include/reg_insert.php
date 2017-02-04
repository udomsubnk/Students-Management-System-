<?php	
	include 'send_mail.php';
	include "database.php";
	session_start();
	$id = $_POST['id'];
	$pass1 = $_POST['password1'];
	$pass2 = $_POST['password2'];
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
	$pass_pattern= "/^[a-zA-Z0-9]{8,15}$/";
	if($pass1 == $pass2){
		if(!preg_match($pass_pattern,$pass1)){
			$err .= "•กรุณากรอกรหัสผ่านให้เป็นภาษาอังกฤษหรือตัวเลข จำนวน8-20 ตัว\n";
		}
	}else{
		$err .= "•กรุณากรอกรหัสผ่านให้เหมือนกัน \n";
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
		$sel_user = "select * from user where user_login = $id";
		$run_select_user = mysqli_query($con,$sel_user);
		$check_user = mysqli_num_rows($run_select_user);
		
		if(!$check_user){
			$insert_user = "insert into user (user_login,user_pass,user_name_title,user_frist_name,user_last_name,user_nick_name,user_birthdate,user_email,user_tel,user_address,user_weight,user_height,user_education,
							user_section,user_facebook,user_blacklist)values ('$id','".md5($pass1)."','$tname','$fname','$lname','$nname','$b_day','$email','$tel','$address','$weight','$height','$education','$section','$fb',true)";
			$run_insert_user = mysqli_query($con,$insert_user);
			if($run_insert_user){
				$numGen = rand(100000,999999);
				// $_SESSION['user']=$id;$_SESSION['status']='student';

				$subject = "kab.esy.es : ยืนยันอีเมล์";
				$msg = "สวัสดีคุณ ".$fname." ".$lname."<br>ID ของคุณ : ".$id."<br>โปรยืนยันอีเมล์ของคุณโดยเข้าไปที่ : http://kab.esy.es/include/verify.php?id=".$numGen;



				$select_login = "insert into verifyEmail values($id,$numGen);";
				if(mysqli_query($con,$select_login)){
					if(send_verify_email($email,$fname,$lname,$msg))
						echo "success";
				}
				else echo "โปรดลองอีกครั้ง";
				

			}
		}else{
			echo "เลขรหัสนักศึกษาซ้ำ";
		}
	}
	mysqli_close($con);
?>