<?php
	include 'database.php';
	session_start();
		$user_login = $_POST['id'];
		$user_pass = $_POST['password'];
		
		//เข้าสู่ระบบ
		if($user_login != "" && $user_pass != ""){
			$select_login = "select * from user where user_login='$user_login' and user_pass='".md5($user_pass)."';";
			$run_select = mysqli_query($con,$select_login) or die('error');
			$check = 0;
			if($run_select){
				if($data_login = mysqli_fetch_array($run_select)){
					if($data_login['user_blacklist']=='true'){
						echo "โปรดยืนยันอีเมล์ก่อนเข้าสู่ระบบ";
					}
					else if($data_login['user_login']==$user_login && $data_login['user_pass']==md5($user_pass)){
						$_SESSION['user']=$user_login;
						if($data_login['user_status']== 'admin'){
							$_SESSION['status']=$data_login['user_status'];
							echo "admin";
						}else {
							$_SESSION['status']=$data_login['user_status'];
							echo "user";
						}
					}else{
						echo "รหัสนักศึกษาหรือรหัสผ่านผิด";
					}
				}else{echo "รหัสนักศึกษาหรือรหัสผ่านผิด";}
			}else {echo "รหัสนักศึกษาหรือรหัสผ่านผิด";}
		}else echo "jaja";
?>
