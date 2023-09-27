<?php
	session_name('admin');
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$db = "anh";
	$conn = new mysqli("localhost", "root", "", $db) or die("Không connect được với máy chủ");
	$select = "SELECT * FROM `acc` WHERE `username` = '$username' AND `password` = '$password' AND `role` = 'admin'OR`role` = 'quản trị viên'";
	$result = mysqli_query($conn, $select);

	if (mysqli_num_rows($result) > 0) {
		$_SESSION['useradmin'] = $username;
		$_SESSION['role'] = "Admin";
		
		header('Location: indexadmin.php');
	} else {
		echo '<script type="text/javascript">alert("Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng thử lại.");</script>';
	}

	mysqli_close($conn);
?>


