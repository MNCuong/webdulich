<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$id=$_REQUEST["id"];
	$conn=mysqli_connect("localhost","root","","anh") or die ("Không connect đc với máy chủ");
	//Chọn CSDL để làm việc
	mysqli_select_db($conn,"anh") or die ("Không tìm thấy CSDL");
	//Tạo câu truy vấn
	$sql_del_tour="DELETE FROM tourdulich WHERE `tourdulich`.`id` = $id";
	mysqli_query($conn,$sql_del_tour);
	header("Location: Tabletour.php");
	?>
</body>
</html>