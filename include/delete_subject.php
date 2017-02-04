<?php	
	include "database.php";
	session_start();
	$id = $_SESSION['user'];
	$subject = $_POST['subject'];
	$delete_grade = "delete from grade 
					where (sub_id = '$subject') and (user_login = $id)";
	$run = mysqli_query($con,$delete_grade);
	if($run){echo "yes";}else{echo "error";}
	mysqli_close($con);
?>