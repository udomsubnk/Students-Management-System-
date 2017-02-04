<form  method="post">
	<table>
		<tr><td>*รหัส : </td><td><input type="text" name="id" /></td></tr>
		<tr><td>*ชื่อ  : </td><td><input type="name" name="name" ></td></tr>
		<tr><td>*หน่วยกิต  : </td><td><input type="name" name="zz" ></td></tr>
		<tr><td>*หมวด  : </td><td><input type="name" name="aa" ></td></tr>
	</table>	
	<input type="submit" name="submit" value="ลงทะเบียน" />
</form>

<?php	
	include "database.php";
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$zz = $_POST['zz'];
		$aa = $_POST['aa'];
		$insert_user = "insert into subject (sub_id,sub_name,sub_credits,sub_type)values ('$id','$name','$zz','$aa')";
		$run_insert_user = mysqli_query($con,$insert_user);
		mysqli_close($con);
	}
?>