 <?php
 session_start();
 if(!$_SESSION['status']=='admin')
    header("url=../index.php"); require ('connect.php');
 $query = "SELECT * FROM user ORDER BY user_login DESC";
 $result = mysqli_query($connect, $query)or die('error');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Students</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="jsdb.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body >
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" class="active" href="/admin/index.php">Students</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/admin/course.php">Course</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li id="logout"><a href="#"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </nav>
	<div class="contrainer">
		<button type="button" class="btn btn-warning" href="#collapse" data-toggle="collapse" style="width: 100%" >SearchStudent <i class="fa fa-angle-double-down"></i></button>
		<div id="collapse" class="collapse">
			<div class="row">
				<div class="col-md-12 col-sm-12 students">
					<div class="input-group">
						<!-- <div class="input-group-btn">
	 					    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Firstname
	 						    <span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu">
						      <li><a href="#">Firstname</a></li>
						      <li><a href="#">Lastname</a></li>
						      <li><a href="#">ID</a></li>
						    </ul>
	 					</div> -->
						<input type="text" class="form-control" aria-label="Text input with dropdown button" id="SearchStudent" style="width:1000px" placeholder="Name">
					</div>

				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12 col-sm-12 students">
					<div class="input-group">
						<div class="input-group-btn">
	 					    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">GPAX
						    </button>
	 					</div>
	 					<div class="input-group" style="display: inline;">
							<input type="text" class="form-control" aria-label="#" style="width: 50%" placeholder="0.00">
							<input type="text" class="form-control" aria-label="#" style="width: 50%" placeholder="4.00">
						</div>
					</div>
				</div>
			</div> -->

			<div class="row">
				<div class="col-md-12 col-sm-12 students">
					<!-- <button type="button" class="btn btn-primary "data-toggle="dropdown" style="width: 50%;margin-left: 25%;"><i class="fa fa-search"></i> Search </button> -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 students">
			<div class="table-responsive" id="ad">
			   <table class="table table-hover table-striped">
					<thead>
						<tr>
							<th ><span class="column_sort_ja" data-order="desc" id="user_login" style="cursor: pointer;">ID</span></th>
							<th><span class="column_sort_ja" data-order="desc" id="user_frist_name" style="cursor: pointer;">Firstname</span></th>
							<th><span>Lastname</span></th>
							<th>Status</th>
              <!-- <th>GPAX</th> -->
              <th>Detail</th>
						</tr>
					</thead>
					<tbody id="add_search">
					   <?php
              while($row = mysqli_fetch_array($result))
              {
              ?>

						<tr>
  						<td><?php echo $row["user_login"]; ?></td>
              <td><?php echo $row["user_frist_name"]; ?></td>
              <td><?php echo $row["user_last_name"]; ?></td>
              <td><?php echo $row["user_status"]; ?></td>
              <td id="ff"></td>
              <td><input type="button" name="view" value="รายละเอียด" id="<?php echo $row["user_login"]; ?>" class="btn btn-info btn-xs vieww" /></td>
						</tr>
            <?php
              }
            ?>
					</tbody>
				</table>
			</div>
		</div>



			<div class="modal fade" id="studentModal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
              รายละเอียด
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>

						</div>
						<div class="modal-body contrainer">
							<div id="show_detail_modal"></div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>


					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


		</div>
	</div>
</body>
</html>
