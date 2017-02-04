<?php	
	include "database.php";
	session_start();
	$id = $_SESSION['user'];
	$passo1 = $_POST['password_o1'];
	$passo2 = $_POST['password_o2'];
	$passn1 = $_POST['password_n1'];
	$passn2 = $_POST['password_n2'];
	
	$err = "";
	$pass_pattern= "/^[a-zA-Z0-9]{8,15}$/";
	if($passo1 == $passo2){
		if($passn1 == $passn2){
			if(!preg_match($pass_pattern,$passn1)){
			$err .= "•กรุณากรอกรหัสผ่านใหม่ให้เป็นภาษาอังกฤษหรือตัวเลข จำนวน8-20 ตัว\n";
		}
		}else{
			$err .= "•กรุณากรอกรหัสผ่านใหม่ให้เหมือนกัน \n";
		}
	}else{
		$err .= "•กรุณากรอกรหัสผ่านเก่าให้เหมือนกัน \n";
	}
	
	if($err != ""){
			echo "$err";
	}else{
		$sel_user = "select * from user where (user_login = $id) and (user_pass = '".md5($passo1)."')";
		$run_select_user = mysqli_query($con,$sel_user);
		$check_user = mysqli_num_rows($run_select_user);
		
		if($check_user){
			$update_user = "update user 
							set user_pass='".md5($passn1)."'
							where user_login='$id'";
			$run_update = mysqli_query($con,$update_user);
			if($run_update){echo "yes";}else{echo "error";}
		}else{
			echo "รหัสผ่านเก่าไม่ถูกต้อง";
		}
	}
	mysqli_close($con);
?>