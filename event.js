		$(function(){
			//อีเวนในการลงทะเบียน
			$("#form_signup").on("submit",function(e){  
				if (confirm("ยืนยันการลงทะเบียน!")) {
					e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax 
					var data = new FormData($(this)[0]);   // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object  
					$.ajax({
						url:'include/reg_insert.php',type:'post',data:data,
						async: false,cache: false,contentType: false,processData: false, // กรณีใช้งานอัพโหลดไฟล์ด้วย ajax ต้องกำหนด  contentType: false, และ processData: false  
						success:function(result){
							if(result == 'yes'){
								alert("สมัครเรียบร้อย");
								location.reload();
							}else if(result == 'success'){
								alert('ส่งอีเมล์ไปหาคุณเรียบร้อยแล้ว โปรดตรวจสอบ Email ของคุณ');
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
			//อีเวนเข้าสู่ระบบ
			$("#form_login").on("submit",function(e){  
				e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax 
				var data = new FormData($(this)[0]);   // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object  
				$.ajax({
					url:'include/login.php',type:'post',data:data,
					async: false,cache: false,contentType: false,processData: false, // กรณีใช้งานอัพโหลดไฟล์ด้วย ajax ต้องกำหนด  contentType: false, และ processData: false  
					success:function(result){
						if(result == 'user'){
							location.reload();
						}else if(result == 'admin'){
							window.location = "admin/index.php";
						}
						else{
							alert(result);
						}
					}
				})
			});
			//อีเวนออกจากระบบ
			$("#form_logout").on("submit",function(e){  
				$.ajax({
					url:'include/logout.php',
					success:function(result){
						location.assign("index.php");
					}
				})
			});
			
		});