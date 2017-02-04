<?php 
	require 'database.php';
	$num = $_GET['id'];
	$select_login = "select * from verifyEmail where num_verify=$num";
	$run_select = mysqli_query($con,$select_login) or die('die');
	if($data_login = mysqli_fetch_array($run_select,MYSQL_ASSOC)){
		$id = $data_login['user_id'];
		$sql = "update user set user_blacklist=false where user_id='$id'";
		$select = mysqli_query($con,$select_login);
		if($data = mysqli_fetch_array($select,MYSQL_ASSOC)){
			$sql = "DELETE FROM verifyEmail WHERE user_id=$id";
			mysqli_query($con,$select_login);
			
			echo "ยืนยันอีเมล์เรียบร้อย";
			header( "refresh:2; url=../index.php" ); 

		}
	}else echo "error";

 ?>