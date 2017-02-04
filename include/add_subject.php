<?php	
	include "database.php";
	session_start();
	$id = $_SESSION['user'];
	$subject = $_POST['subjects'];
	$grade = $_POST['grade'];
	$sel = "select * from grade where (sub_id = '$subject') and (user_login = $id) ";
	$run_select = mysqli_query($con,$sel);
	$check_user = mysqli_num_rows($run_select);
	if(!$check_user){	
		$insert_grade = "insert into grade (sub_id,user_login,gra_score)
						values ('$subject','$id','$grade')";
		$run = mysqli_query($con,$insert_grade);
		if($run){echo "yes";}else{echo "error";}
	}else{
		echo "วิชานี้ลงทะเบียนไปแล้ว กรุณาเลือกใหม่";
	}
	mysqli_close($con);
?>