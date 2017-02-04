<!-- ป๊อบอัพกล่อง  edit /// -->
		<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><font color="#b94a48"><span class="glyphicon glyphicon-cog">  แก้ไขข้อมูลสมาชิก </font></h4>
              </div>
              <form id="form_edit">
                <div class="modal-body">
                  <div class="container-fulid">
                    <div class="row">
						<?php
							include "database.php";
							$login = $_SESSION['user'];
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
						?>
                      	<table class="table table-striped table-hover " style="color:#b94a48" >
							<tr><td>*รหัสนักศึกษา : </td><td><input type="text" name="id" size="35" maxlength="13" required="required" placeholder="โปรดใส่รหัสนศ.(ex.5904062636345)" class="form-control" id="inputEmail" value="<?php echo $id;?>" /></td></tr>
							<tr><td>*ชื่อ :</td><td><select name="titlename" class="form-control" id="select" ><option value="นาย">นาย</option><option value="นาง">นาง</option><option value="นางสาว">นางสาว</option></select>
								<input type="text" name="firstname" size=25" maxlength="35" required="required" placeholder="ชื่อภาษาไทย" class="form-control" id="inputEmail" value="<?php echo $fname;?>"/></td>
							</tr>
							<tr><td>*นามสกุล : </td><td><input type="text" name="lastname" size="35" maxlength="30" required="required" placeholder="นามสกุลภาษาไทย"" class="form-control" id="inputEmail" value="<?php echo $lname;?>" /></td></tr>
							<tr><td>*ชื่อเล่น : </td><td><input type="text" name="nickname" size="35" maxlength="10" required="required" placeholder="ชื่อเล่นภาษาไทย"" class="form-control" id="inputEmail" value="<?php echo $nname;?>" /></td></tr>
							<tr><td>*อีเมล์ : </td><td><input type="text" name="email" size="35" maxlength="50" required="required" placeholder="example@example.com" class="form-control" id="inputEmail" value="<?php echo $email;?>"/></td></tr>
							<tr><td>*ที่อยู่ : </td><td><textarea name="address" rows="8" cols="50" wrap="physical" required="required" placeholder="ที่อยู่" class="form-control" rows="3" id="textArea"><?php echo $address;?></textarea></td></tr>
							<tr><td>*วัน/เดือน/ปีเกิด : </td><td><input type="date" name="b_day" required="required" class="form-control" id="select" max="2000-12-31"  min="1956-01-01" value="<?php echo $b_day;?>"/></td></tr>
							<tr><td>*เบอร์โทรศัพท์  : </td><td><input type="text" name="tel"  size="35" maxlength="10" required="required" placeholder="ใส่ตัวเลข(ex.0891234567)" value="<?php echo $tel;?>"/></td></tr>
							<tr><td>*น้ำหนัก  : <input type="text" name="weight"  size="5" maxlength="3" required="required" placeholder="kg." class="form-control" id="inputEmail" value="<?php echo $weight;?>"/></td>
								<td>*ส่วนสูง  : <input type="text" name="height"  size="5" maxlength="3" required="required" placeholder="cm." class="form-control" id="inputEmail" value="<?php echo $height;?>"/></td>
							</tr>
							<tr><td>*Facebook : </td><td><input type="text" name="facebook" size="35" maxlength="35" required="required" placeholder="ชื่อ facebook" class="form-control" id="inputEmail" value="<?php echo $fb;?>"/></td></tr>
							<tr>
								<td>*ระดับการศึกษา : </td>
								<td><select name="education" class="form-control" id="pagelist1"><option value="">กรุณาเลือก</option><option value="ปริญญาตรี">ปริญญาตรี</option><option value="ปริญญาโท">ปริญญาโท</option><option value="ปริญญาเอก">ปริญญาเอก</option></select></td>
							</tr>
							<tr><td>Section : </td>
								<td>
								  <div id="ปริญญาตรี" style="display:none">
									<input type="radio" name="section" value="RA" checked /> RA <input type="radio" name="section" value="RB"/> RB 
									<input type="radio" name="section" value="RC" /> RC <input type="radio" name="section" value="DA"/> DA 
									<input type="radio" name="section" value="DB"/> DB <input type="radio" name="section" value="CSB"/> CSB 
								  </div>
								  <div id="ปริญญาโท" style="display:none">
									<input type="radio" name="section" value="ภาคปกติ" /> ภาคปกติ <input type="radio" name="section" value="ภาคพิเศษ"/> ภาคพิเศษ
								  </div>
								  <div id="ปริญญาเอก" style="display:none">
									<input type="radio" name="section" value="ภาคปกติ" /> ภาคปกติ <input type="radio" name="section" value="ภาคพิเศษ"/> ภาคพิเศษ 
								  </div>
									<script language="javascript">
									  $("#pagelist1").change(function(){
										var viewID = $("#pagelist1 option:selected").val();
										$("#pagelist1 option").each(function(){
											var hideID = $(this).val();
											$("#"+hideID).hide();
										});
										$("#"+viewID).show();	
									  });
									</script>
								</td>
							</tr>
						</table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" >ยืนยันการแก้ไข</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		