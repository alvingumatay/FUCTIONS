<?php
include_once("db_connect.php");
if(isset($_POST['emp_id'])) {
	$homid = trim($_POST['emp_id']);	
	$sql = "DELETE FROM home_tasks WHERE homid IN ($emp_id)"
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	echo $emp_id;
}
?>

