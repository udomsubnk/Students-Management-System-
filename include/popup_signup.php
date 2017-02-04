<!-- ป๊อบอัพกล่อง sigh up /// -->
		<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><font color="#b94a48"><span class="glyphicon glyphicon-user">  ระบบลงทะเบียนเป็นสมาชิก </font></h4>
              </div>
              <form id="form_signup">
                <div class="modal-body">
                  <div class="container-fulid">
                    <div class="row">
                      	<table class="table table-striped table-hover " style="color:#b94a48" >
							<tr><td>*รหัสนักศึกษา : </td><td><input type="text" name="id" size="35" maxlength="13" required="required" placeholder="โปรดใส่รหัสนศ.(ex.5904062636345)" class="form-control" id="inputEmail"/></td></tr>
							<tr><td>*รหัสผ่าน  : </td><td><input type="password" name="password1"  size="35" maxlength="20" required="required" placeholder="รหัสผ่านภาษาอังกฤษหรือตัวเลข จำนวน8-20 ตัว"/ class="form-control" id="inputEmail"></td></tr>
							<tr><td>*ยืนยันรหัสผ่าน  : </td><td><input type="password" name="password2"  size="35" maxlength="20" required="required" placeholder="รหัสผ่านภาษาอังกฤษหรือตัวเลข จำนวน8-20 ตัว"/ class="form-control" id="inputEmail"></td></tr>
							<tr><td>*ชื่อ :</td><td><select name="titlename" class="form-control" id="select" ><option value="นาย">นาย</option><option value="นาง">นาง</option><option value="นางสาว">นางสาว</option></select>
								<input type="text" name="firstname" size=25" maxlength="35" required="required" placeholder="ชื่อภาษาไทย" class="form-control" id="inputEmail"/></td>
							</tr>
							<tr><td>*นามสกุล : </td><td><input type="text" name="lastname" size="35" maxlength="30" required="required" placeholder="นามสกุลภาษาไทย"" class="form-control" id="inputEmail"/></td></tr>
							<tr><td>*ชื่อเล่น : </td><td><input type="text" name="nickname" size="35" maxlength="10" required="required" placeholder="ชื่อเล่นภาษาไทย"" class="form-control" id="inputEmail"/></td></tr>
							<tr><td>*อีเมล์ : </td><td><input type="text" name="email" size="35" maxlength="50" required="required" placeholder="example@example.com" class="form-control" id="inputEmail"/></td></tr>
							<tr><td>*ที่อยู่ : </td><td><textarea name="address" rows="8" cols="50" wrap="physical" required="required" placeholder="ที่อยู่" class="form-control" rows="3" id="textArea"></textarea></td></tr>
							<tr><td>*วัน/เดือน/ปีเกิด : </td><td><input type="date" name="b_day" required="required" class="form-control" id="select" max="2000-12-31"  min="1956-01-01"/></td></tr>
							<tr><td>*เบอร์โทรศัพท์  : </td><td><input type="text" name="tel"  size="35" maxlength="10" required="required" placeholder="ใส่ตัวเลข(ex.0891234567)"/></td></tr>
							<tr><td>*น้ำหนัก  : <input type="text" name="weight"  size="5" maxlength="3" required="required" placeholder="kg." class="form-control" id="inputEmail"/></td>
								<td>*ส่วนสูง  : <input type="text" name="height"  size="5" maxlength="3" required="required" placeholder="cm." class="form-control" id="inputEmail"/></td>
							</tr>
							<tr><td>*Facebook : </td><td><input type="text" name="facebook" size="35" maxlength="35" required="required" placeholder="ชื่อ facebook" class="form-control" id="inputEmail"/></td></tr>
							<tr>
								<td>*ระดับการศึกษา : </td>
								<td><select name="education" class="form-control" id="pagelist"><option value="">กรุณาเลือก</option><option value="ปริญญาตรี">ปริญญาตรี</option><option value="ปริญญาโท">ปริญญาโท</option><option value="ปริญญาเอก">ปริญญาเอก</option></select></td>
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
									  $("#pagelist").change(function(){
										var viewID = $("#pagelist option:selected").val();
										$("#pagelist option").each(function(){
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
                  <button type="submit" class="btn btn-primary" id="button_signup">ลงทะเบียนเป็นสมาชิก</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		