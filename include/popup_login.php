<!-- ป๊อบอัพกล่อง login /// -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><font color="#b94a48"><span class="glyphicon glyphicon-log-in"> ระบบเข้าสู่ระบบ </font></h4>
              </div>
              <form id="form_login" >
                <div class="modal-body">
                  <div class="container-fulid">
                    <div class="row">
                      <div align="center" class="col-md-12">
						<table class="table table-striped table-hover " style="color:#b94a48" >
							<tr><div class="form-group has-error">
							  <td><label class="control-label" for="inputError">รหัสนักศึกษา</label></td>
							  <td><input type="text" class="form-control" id="inputError" name="id" maxlength="13" placeholder="โปรดใส่รหัสนักศึกษาของท่าน" required="required" ></td>
							</div></tr>
							<tr><div class="form-group has-error">
							  <td><label class="control-label" for="inputError">รหัสผ่าน</label></td>
							  <td><input type="password" class="form-control" id="inputError" name="password" maxlength="30" placeholder="โปรดใส่รหัสผ่านของท่าน" required="required" ></td>
							</div></tr>
						</table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>
              </form>
            </div>
          </div>
        </div>