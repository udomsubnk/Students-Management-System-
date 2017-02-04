<!-- ป๊อบอัพกล่อง forget /// -->
<div class="modal fade" id="forget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title"><font color="#b94a48"><span class="glyphicon glyphicon-search"> ลืมรหัสผ่าน </font></h4>
        </div>
        <form id="form_forget" action="include/forgot.php" method="POST" >
          <div class="modal-body">
            <div class="container-fulid">
              <div class="row">
                <div align="center" class="col-md-12">
			<table class="table table-striped table-hover " style="color:#b94a48" >
				<tr><div class="form-group has-error">
				  <td><label class="control-label" for="inputError">รหัสนักศึกษา</label></td>
				  <td><input type="text" class="form-control" id="inputError" name="id" maxlength="13" placeholder="โปรดใส่รหัสนักศึกษาของท่าน"></td>
				</div></tr>
				<tr><div class="form-group has-error">
				  <td><label class="control-label" for="inputError">อีเมล์ที่สมัคร</label></td>
				  <td><input type="text" class="form-control" id="inputError" name="email"  placeholder="โปรดใส่อีเมล์ของท่าน"></td>
				</div></tr>
			</table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">ส่งรหัสผ่าน</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
          </div>
        </form>
      </div>
    </div>
  </div>