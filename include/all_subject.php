<div class="jumbotron">
	<div class="container">
		<h4>หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</h4>
		<hr>
		<h6><table border="2" class="table table-striped table-hover ">
			<tr class="warning"><th>รหัสวิชา</th><th>ชื่อ</th><th>หน่วงกิต</th></tr>
			<?php
				include "database.php";
				$perpage = 12; //จำนวนข้อมูลในแต่ละหน้า
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				} else {
					$page = 1;
				}
				$start = ($page - 1) * $perpage;
				$select = "select * from subject limit {$start} , {$perpage}";
				$run = mysqli_query($con,$select);
				while($data = mysqli_fetch_array($run)){
					$id = $data['sub_id'];
					$name = $data['sub_name'];
					$credits = $data['sub_credits'];
			?>
			<tr>
				<td><?php echo $id;?></td>
				<td><?php echo $name;?></td>
				<td><?php echo $credits;?></td>
			</tr>
			<?php } ?>
			<?php
				$select = "select * from subject";
				$run = mysqli_query($con,$select);
				$total_record = mysqli_num_rows($run);
				$total_page = ceil($total_record / $perpage);
			mysqli_close($con); ?>
		</table></h6>
		<ul class="pagination">
			<li>
			 <a href="index.php?page=1" aria-label="Previous">
			 <span aria-hidden="true">&laquo;</span>
			 </a>
			</li>
			 <?php for($i=1;$i<=$total_page;$i++){ ?>
			<li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			 <?php } ?>
			<li>
			 <a href="index.php?page=<?php echo $total_page;?>" aria-label="Next">
			 <span aria-hidden="true">&raquo;</span>
			 </a>
			</li>
		</ul>
	</div>
</div>