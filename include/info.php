<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h4>ข้อมูลส่วนตัว</h4>
				<h6><table class="table table-striped table-hover ">
				<?php
					include "database.php";
					$login = $_POST['user'];
					$select = "select * from user where user_login = $login";
					$run = mysqli_query($con,$select);
					$data = mysqli_fetch_array($run);
					$id = $data['user_login'];
					$pass = $data['user_pass'];
					$tname = $data['user_name_title'];
					$fname = $data['user_frist_name'];
					$lname = $data['user_last_name'];
					$nname = $data['user_nick_name'];
					$email = $data['user_email'];
					$b_day = $data['user_birthdate'];
					$address = $data['user_address'];
					$tel = $data['user_tel'];
					$weight = $data['user_weight'];
					$height = $data['user_height'];			
					$fb = $data['user_facebook'];
					$education = $data['user_education'];
					$section = $data['user_section'];
					$img = $data['user_img'];
					
					echo "<tr><td>รหัสนักศีกษา </td><td>",$id,"</td></tr>";
					echo "<tr><td>ชื่อ  </td><td>",$tname," ",$fname," ",$lname,"</td></tr>";
					echo "<tr><td>ชื่อเล่น </td><td>",$nname,"</td></tr>";
					echo "<tr><td>วัน/เดือน/ปีเกิด </td><td>",$b_day,"</td></tr>";
					echo "<tr><td>ที่อยู่ </td><td>",$address,"</td></tr>";
					echo "<tr><td>อีเมล์ </td><td>",$email,"</td></tr>";
					echo "<tr><td>เบอร์โทรศัพท์ </td><td>",$tel,"</td></tr>";
					echo "<tr><td>น้ำหนัก  </td><td>",$weight,"</td></tr>";
					echo "<tr><td>ส่วนสูง  </td><td>",$height,"</td></tr>";
					echo "<tr><td>Facebook  </td><td>",$fb,"</td></tr>";
					echo "<tr><td>ระดับการศึกษา  </td><td>",$education,"</td></tr>" ;
					echo "<tr><td>Section  </td><td>",$section,"</td></tr>" ;
				?>
				</table></h6>
			</div>
			<div class="col-md-3">
				<img src="img/<?php echo $img ?>" width="150" height="200";><hr>
				<center><a class="btn btn-primary btn" data-toggle="modal" data-target="#upload"><span class="glyphicon glyphicon-paperclip"> เปลี่ยนรูป </a></center>
			</div>
		</div>
		<a class="btn btn-primary btn" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-cog"> แก้ไข</a>
		<a class="btn btn-primary btn" data-toggle="modal" data-target="#change" ><span class="glyphicon glyphicon-wrench"> เปลี่ยนรหัสผ่าน </a>
	</div>
</div>