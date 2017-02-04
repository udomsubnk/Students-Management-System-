<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>ลืมรหัสผ่าน</title>
 </head>
 <body>
	<?php 
	//reset passwords
	include 'send_mail.php';
	include 'database.php';
	$userId = $_POST['id'];
	$userEmail = $_POST['email'];

			//เข้าสู่ระบบ
	$select_login = "select * from user where user_login='".$userId."' and user_email='".$userEmail."'";
	$run_select = mysqli_query($con,$select_login);
	if($data_login = mysqli_fetch_array($run_select,MYSQL_ASSOC)){

		$user_login = $data_login['user_login'];
		$user_email = $data_login['user_email'];
		$user_first_name = $data_login['user_frist_name'];
		$user_last_name = $data_login['user_last_name'];

		$pwdGen  = rand(100000,999999);

		$email = $user_email;
		$subject = "รีเซ็ตรหัสผ่าน";
		$msg = "สวัสดีคุณ ".$user_first_name." ".$user_last_name."<br>ID ของคุณ : ".$user_login."<br>รหัสผ่านใหม่ของคุณ : ".$pwdGen."<br>สามารถLoginไปแก้ไขพาสเวิร์ดได้ที่ http://kab.esy.es/";

		if(send_reset_password($email,$user_first_name,$user_last_name,$msg)){
			$sql = "update user set user_pass='".md5($pwdGen)."' where user_login='$user_login'";
			if(mysqli_query($con,$sql)) 
				echo "กรุณาตรวจสอบ Email ของคุณ";
				header("refresh:2 ;url=../index.php");
		}else {
			echo "กรุณาลองใหม่อีกครั้ง";
			header("refresh:2 ;url=../index.php");
		};
	}else echo "ไม่พบ id นี้หรือ email นี้ในระบบ"
	 ?>
 </body>
 </html>