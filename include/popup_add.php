<!-- ป๊อบอัพกล่อง add /// -->
		<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><font color="#b94a48"><span class="glyphicon glyphicon-plus"> เพิ่มวิชาเรียน  </font></h4>
              </div>
              <form id="form_add">
                <div class="modal-body">
                  <div class="container-fulid">
                    <div class="row">
                      	<table class="table table-striped table-hover " style="color:#b94a48" >
							<tr>
								<tr class="warning"><th><center>วิชา</center></th><th><center>เกรด</center></th></tr>
								<td><select name="subjects" class="form-control" id="select" >
									<?php 
										include "database.php";
										$select = "select * from subject";
										$run = mysqli_query($con,$select);
										while($data = mysqli_fetch_array($run)){
											$id = $data['sub_id'];
											$name = $data['sub_name'];
											$credits = $data['sub_credits'];
									?>
									<option value="<?php echo $id;?>"><?php echo $id;?> : <?php echo $name;?> : <?php echo $credits;?> หน่วยกิต
									<?php }mysqli_close($con); ?></select>
								</td>
								<td><select name="grade" class="form-control" id="select" >
										<option value="A">A</option><option value="B+">B+</option><option value="B">B</option>
										<option value="B-">B-</option><option value="C+">C+</option><option value="C">C</option>
										<option value="C-">C-</option><option value="D+">D+</option><option value="D">D</option>
										<option value="D-">D-</option><option value="F">F</option>
								</select></td>
							</tr>
						</table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" >เพิ่มวิชาเรียน</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		