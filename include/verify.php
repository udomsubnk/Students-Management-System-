<?php 
	require 'database.php';
	$num = $_GET['id'];
	$select_login = "select * from verifyEmail where num_verify='$num';";
	$run_select = mysqli_query($con,$select_login) or die('die');
	if($data_login = mysqli_fetch_array($run_select,MYSQL_ASSOC)){
		$id = $data_login['user_id'];
		$sql = "update user set user_blacklist='false' where user_login='$id';";
		$select = mysqli_query($con,$sql) or die('die2');
		if($select){
			$sql = "DELETE FROM verifyEmail WHERE user_id=$id";
			mysqli_query($con,$sql) or die('die3');
			
			echo "ยืนยันอีเมล์เรียบร้อย";
			header( "refresh:2; url=../index.php" ); 

		}
	}else echo "error";

 ?>