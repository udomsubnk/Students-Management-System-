<div class="container">
	<div class="row">
		<div class="col-md-3">
		  <a href="#" class="list-group-item active" id="info"><span class="glyphicon glyphicon-user"> ประวัติส่วนตัว </a>
		  <a href="#" class="list-group-item" id="grade"><span class="glyphicon glyphicon-list-alt"> ผลการเรียน </a>
		  <a href="#" class="list-group-item active" id="subject"><span class="glyphicon glyphicon-file"> วิชาที่เรียน </a>
		  <a href="#" class="list-group-item" id="all_subject"><span class="glyphicon glyphicon-folder-open"> วิชาทั้งหมด </a>

		</div>
		<!-- event ทั้งหมด ของข้างบน /// -->
		<script>
			$(function(){
				$('#info').on('click', function () {
					var data = {user:'<?php echo $_SESSION['user'] ?>'};
					$.ajax({
						url:'include/info.php',type:'post',data:data,
						success:function(result){
							$("#div_body").html(result);
						}
					})
			    })
				$('#all_subject').on('click', function () {
					$.ajax({
						url:'include/all_subject.php',
						success:function(result){
							$("#div_body").html(result);
						}
					})
			    })
				$('#subject').on('click', function () {
					$.ajax({
						url:'include/subject.php',
						success:function(result){
							$("#div_body").html(result);
						}
					})
			    })
				$('#grade').on('click', function () {
					$.ajax({
						url:'include/grade.php',
						success:function(result){
							$("#div_body").html(result);
						}
					})
			    })
				//อีเวนในการแก้ไข
				$("#form_edit").on("submit",function(e){  
					if (confirm("ยืนยันการแก้ไข!")) {
						e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax 
						var data = new FormData($(this)[0]);   // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object  
						$.ajax({
							url:'include/edit_insert.php',type:'post',data:data,
							async: false,cache: false,contentType: false,processData: false, // กรณีใช้งานอัพโหลดไฟล์ด้วย ajax ต้องกำหนด  contentType: false, และ processData: false  
							success:function(result){
								if(result == 'yes'){
									alert("แก้ไขเรียบร้อย");
									location.reload();
								}else{
									alert(result);
								}
							}
						})
					}else{
						e.preventDefault(); //มีไว้เฉย ไม่ให้ข้อความที่พิมหายไป 5555
					}
				});
				//อีเวนในการเปลี่ยนรหัสผ่าน
				$("#form_change").on("submit",function(e){  
					if (confirm("ต้องการเปลี่ยนรหัสผ่าน!")) {
						e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax 
						var data = new FormData($(this)[0]);   // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object  
						$.ajax({
							url:'include/change_insert.php',type:'post',data:data,
							async: false,cache: false,contentType: false,processData: false, // กรณีใช้งานอัพโหลดไฟล์ด้วย ajax ต้องกำหนด  contentType: false, และ processData: false  
							success:function(result){
								if(result == 'yes'){
									alert("แก้ไขเรียบร้อย");
									location.reload();
								}else{
									alert(result);
								}
							}
						})
					}else{
						e.preventDefault(); //มีไว้เฉย ไม่ให้ข้อความที่พิมหายไป 5555
					}
				});
				//อีเวนในการอัพโหลดรูป
				$("#form_upload").on("submit",function(e){  
					if (confirm("ต้องการอัพโหลดรูป!")) {
						e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax 
						var data = new FormData($(this)[0]);   // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object  
						$.ajax({
							url:'include/upload.php',type:'post',data:data,
							async: false,cache: false,contentType: false,processData: false, // กรณีใช้งานอัพโหลดไฟล์ด้วย ajax ต้องกำหนด  contentType: false, และ processData: false  
							success:function(result){
								if(result == 'yes'){
									alert("อัพโหลดเรียบร้อย");
									location.reload();
								}else{
									alert(result);
								}
							}
						})
					}else{
						e.preventDefault(); //มีไว้เฉย ไม่ให้ข้อความที่พิมหายไป 5555
					}
				});
				//อีเวนในการเพิ่มวิชาเรียน
				$("#form_add").on("submit",function(e){  
					if (confirm("ต้องการเพิ่มวิชานี้?!")) {
						e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax 
						var data = new FormData($(this)[0]);   // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object  
						$.ajax({
							url:'include/add_subject.php',type:'post',data:data,
							async: false,cache: false,contentType: false,processData: false, // กรณีใช้งานอัพโหลดไฟล์ด้วย ajax ต้องกำหนด  contentType: false, และ processData: false  
							success:function(result){
								if(result == 'yes'){
									alert("เพิ่มวิชาเรียบร้อย");
									location.reload();
								}else{
									alert(result);
								}
							}
						})
					}else{
						e.preventDefault(); //มีไว้เฉย ไม่ให้ข้อความที่พิมหายไป 5555
					}
				});
				//อีเวนในการลบวิชาเรียน
				$("#form_delete").on("submit",function(e){  
					if (confirm("ต้องการลบวิชานี้?!")) {
						e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax 
						var data = new FormData($(this)[0]);   // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object  
						$.ajax({
							url:'include/delete_subject.php',type:'post',data:data,
							async: false,cache: false,contentType: false,processData: false, // กรณีใช้งานอัพโหลดไฟล์ด้วย ajax ต้องกำหนด  contentType: false, และ processData: false  
							success:function(result){
								if(result == 'yes'){
									alert("ลบวิชาเรียบร้อย");
									location.reload();
								}else{
									alert(result);
								}
							}
						})
					}else{
						e.preventDefault(); //มีไว้เฉย ไม่ให้ข้อความที่พิมหายไป 5555
					}
				});
				
			});
		</script>
		<!-- ข่องข้อความทั้งหมด /// -->
		<div class="col-md-9" id="div_body">
			<?php require'include/all_subject.php'; ?>
		</div>
	</div>
</div>