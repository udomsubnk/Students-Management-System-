<!-- หัวข้อที่เลือกข้างบน /// -->
<div class="container">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	  
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">KMUTNB </a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<?php
				if(!$_SESSION){
					echo '<li data-toggle="modal" data-target="#login"><a href="#"><span class="glyphicon glyphicon-log-in"> เข้าสู่ระบบ </a></li>';
					echo '<li data-toggle="modal" data-target="#signup"><a href="#"><span class="glyphicon glyphicon-user"> สมัครสมาชิก </a></li>';
					echo '<li data-toggle="modal" data-target="#forget"><a href="#"><span class="glyphicon glyphicon-search"> ลืมรหัสผ่าน </a></li>';
				}else if($_SESSION){
					echo '<li data-toggle="modal" data-target="#"><a href="#"><span class="glyphicon glyphicon-user"> '.$_SESSION['user'].' </a></li>';
					echo'<li data-toggle="modal" data-target="#logout"><a href="#"><span class="glyphicon glyphicon-log-out""></span> ออกจากระบบ </a></li>';
				}
			?>
		  </ul>
		</div>
		
	  </div>
	</nav>
</div>
