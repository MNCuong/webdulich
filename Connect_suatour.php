<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	
<body>
	<?php
		$id=$_REQUEST["id"];
		$diadiem=$_REQUEST["txt_diadiem"];
		$tinhthanh=$_REQUEST["txt_tinhthanh"];
		$theloai=$_REQUEST["txt_theloai"];
		$giatien=$_REQUEST["txt_giatien"];
		$dacdiem=$_REQUEST["txt_dacdiem"];
		$gioithieu=$_REQUEST["txt_gioithieu"];
		$uploadDir_img_logo = "HinhAnh/";

		$file_tmp = isset($_FILES['anh']['tmp_name']) ? $_FILES['anh']['tmp_name'] : "";
		$file_name = isset($_FILES['anh']['name']) ? $_FILES['anh']['name'] : "";
		$file_type = isset($_FILES['anh']['type']) ? $_FILES['anh']['type'] : "";
		$file_size = isset($_FILES['anh']['size']) ? $_FILES['anh']['size'] : "";
		$file_error = isset($_FILES['anh']['error']) ? $_FILES['anh']['error'] : "";

		if ($file_error === UPLOAD_ERR_OK) {
			$dmyhis = date("Y") . date("m") . date("d") . date("H") . date("i") . date("s");
			$file__name__ = $dmyhis . $file_name;
			$file__name__ = $file_name;
			move_uploaded_file($file_tmp, $uploadDir_img_logo.$file__name__);
			echo $uploadDir_img_logo.$file__name__;

			$conn=mysqli_connect("localhost","root","","anh") or die ("Không connect đc với máy chủ");//tạo kết nối với server

			mysqli_select_db($conn,"anh") or die ("Không tìm thấy CSDL");
			$sql_update_tour="UPDATE `tourdulich` 
					SET `diadiem` = '$diadiem', `tinhthanh` = '$tinhthanh', `theloai` = '$theloai', `giatien` = '$giatien', `anh` = '$file__name__', `dacdiem` = '$dacdiem', `gioithieu` = '$gioithieu'
					WHERE `id` = '$id'";
			mysqli_query($conn,$sql_update_tour);	
		}
			// Tìm CSDL đề làm việc
			// Câu truy vấn thêm dữ liệu được lưu vào biến $sql_insert_hangxs
			//echo $sql_insert_hangxs; die;
			// THực hiện truy vấn
			header('Location: Tabletour.php');
	?>
</body>
</html>