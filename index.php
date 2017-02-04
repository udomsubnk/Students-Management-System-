<?php session_start();?>
<html><!DOCTYPE html>
<html>
<head>
	<?php require'include/head.php'; ?>
	<script type="text/javascript" src="event.js"></script>
</head>

<body>
	<?php require'include/header.php'; ?> <!--include รูปบนสุด /// -->
	<?php require'include/nav_index.php'; ?> <!--include ช่องที่กดต่างๆ /// -->
	<?php require'include/popup_login.php';?> <!--include ป๊อบอัพกล่อง login /// -->
	<?php require'include/popup_signup.php';?> <!--include ป๊อบอัพกล่อง signup /// -->
	<?php require'include/popup_logout.php';?> <!--include ป๊อบอัพกล่อง logout/// -->
	<?php require'include/popup_edit.php';?> <!--include ป๊อบอัพกล่อง edit/// -->
	<?php require'include/popup_add.php';?> <!--include ป๊อบอัพกล่อง add/// -->
	<?php require'include/popup_delete.php';?> <!--include ป๊อบอัพกล่อง drop/// -->
	<?php require'include/popup_change.php';?> <!--include ป๊อบอัพกล่อง change/// -->
	<?php require'include/popup_upload.php';?> <!--include ป๊อบอัพกล่อง upload/// -->
	<?php require'include/popup_forget.php';?> <!--include ป๊อบอัพกล่อง forget /// -->
	<!--include body /// -->
	<?php 
		if(!$_SESSION){
			require'include/body_index.php';
		}else if($_SESSION){
			if($_SESSION['status'] == 'student'){
				require'include/body.php';
			}else if($_SESSION['status'] == 'admin'){
				//หน้านี้จะส่งไปที่เวปกลุ่มเก้า
			}
		}
	?> 

</body>

</html>