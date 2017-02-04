<!-- ป๊อบอัพกล่อง  drop /// -->
		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><font color="#b94a48"><span class="glyphicon glyphicon-minus"> ถอนวิชาเรียน </font></h4>
              </div>
              <form id="form_delete">
                <div class="modal-body">
                  <div class="container-fulid">
                    <div class="row">
                      	<table class="table table-striped table-hover " style="color:#b94a48" >
							<tr>
								<td><select name="subject" class="form-control" id="select" >
									<?php 
										include "database.php";
										$select = "select * from grade join subject on grade.sub_id = subject.sub_id ";
										$run = mysqli_query($con,$select);
										while($data = mysqli_fetch_array($run)){
											$id = $data['sub_id'];
											$name = $data['sub_name'];
											$grade = $data['gra_score'];
									?>
									<option value="<?php echo $id;?>"><?php echo $id;?> : <?php echo $name;?> :  เกรด <?php echo $grade;?> 
									<?php }mysqli_close($con); ?></select>
								</td>
							</tr>
						</table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" >ลบวิชาเรียน</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		