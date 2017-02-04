<?php 
	session_start();
	if($_POST['destroy']=='yes')
	{
		session_unset(); 
		session_destroy(); 
		echo "yes";
	}

 ?>