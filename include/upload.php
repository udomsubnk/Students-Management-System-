<?php
	include "database.php";
	session_start();
	$id = $_SESSION['user'];
	$img_name = $_FILES['img']['name'];
	$img_type = $_FILES['img']['type'];
	$img_tmp_name = $_FILES['img']['tmp_name'];
	if($img_name != ""){
		move_uploaded_file($img_tmp_name,"../img/$img_name");
		$update_user = "update user 
						set user_img='$img_name'
						where user_login='$id'";
		$run_update = mysqli_query($con,$update_user);
		if($run_update){echo "yes";}else{echo "error";}
	}else{echo "กรุณาเลือกรุปภาพ";}
	mysqli_close($con);
?>