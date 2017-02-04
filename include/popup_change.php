<!-- ป๊อบอัพกล่อง login /// -->
		<div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><font color="#b94a48"><span class="glyphicon glyphicon-wrench"> เปลี่ยนรหัสผ่าน </font></h4>
              </div>
              <form id="form_change" >
                <div class="modal-body">
                  <div class="container-fulid">
                    <div class="row">
                      <div align="center" class="col-md-12">
						<table class="table table-striped table-hover " style="color:#b94a48" >
							<tr><div class="form-group has-error">
							  <td><label class="control-label" for="inputError">รหัสผ่านเก่า</label></td>
							  <td><input type="password" class="form-control" id="inputError" name="password_o1" maxlength="30" placeholder="โปรดใส่รหัสผ่านเก่าของท่าน" required="required" ></td>
							</div></tr>
							<tr><div class="form-group has-error">
							  <td><label class="control-label" for="inputError">รหัสผ่านเก่าอีกครั้ง</label></td>
							  <td><input type="password" class="form-control" id="inputError" name="password_o2" maxlength="30" placeholder="โปรดใส่รหัสผ่านเก่าของท่านอักครั้ง" required="required" ></td>
							</div></tr>
						</table><hr>
						<table class="table table-striped table-hover " style="color:#b94a48" >
							<tr><div class="form-group has-error">
							  <td><label class="control-label" for="inputError">รหัสผ่านใหม่</label></td>
							  <td><input type="password" class="form-control" id="inputError" name="password_n1" maxlength="30" placeholder="โปรดใส่รหัสผ่านใหม่ของท่าน" required="required" ></td>
							</div></tr>
							<tr><div class="form-group has-error">
							  <td><label class="control-label" for="inputError">รหัสผ่านใหม่อีกครั้ง</label></td>
							  <td><input type="password" class="form-control" id="inputError" name="password_n2" maxlength="30" placeholder="โปรดใส่รหัสผ่านใหม่ของท่านอักครั้ง" required="required" ></td>
							</div></tr>
						</table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">เปลี่ยนรหัสผ่าน</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>
              </form>
            </div>
          </div>
        </div>