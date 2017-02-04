<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>ลืมรหัสผ่าน</title>
 </head>
 <body>
	<?php 
	//reset passwords
	require 'database.php';
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
		$msg = "สวัสดีคุณ ".$user_first_name." ".$user_last_name."\nID ของคุณ : ".$user_login."\nรหัสผ่านใหม่ของคุณ : ".$pwdGen."\nสามารถLoginไปแก้ไขพาสเวิร์ดได้ที่ http://kab.esy.es/";


		echo $msg;


		$flgSend = mail($user_email,$subject,$msg);
		if($flgSend){
			$select_login = "UPDATE user SET user_pass='".md5($pwdGen)."' WHERE user_login='".$user_login."';";
			// mysqli_query($con,$select_login)
			echo "ส่งอีเมล์เรียบร้อย";
		}else{
			echo "กรุณาลองใหม่อีกครั้ง!";
		}
	}else echo "ไม่พบ id นี้หรือ email นี้ในระบบ"
	 ?>
 </body>
 </html>