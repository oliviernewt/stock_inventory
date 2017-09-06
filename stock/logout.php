<?php
	include 'dbcon.php';
	session_start();
	// session_destroy();
	// header("location: index.php");
	$conn->query("
	UPDATE staff SET
	staff_login_status=0
	WHERE staff_id='".$_SESSION['staff_id_ses']."'
	");
	// ล้างตัวแปร session
	unset(
	$_SESSION['staff_id_ses'],
	$_SESSION['staff_name_ses']
	);
			// ไปที่หน้าล็อกอิน
	header("Location:index.php");
	exit;
?>
