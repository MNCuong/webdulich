<?php
		$price = isset($_REQUEST["price"]) ? $_REQUEST["price"] : "";
		$description = isset($_REQUEST["description"]) ? $_REQUEST["description"] : "";
		$tinhtrang = isset($_REQUEST["tinhtrang"]) ? $_REQUEST["tinhtrang"] : "";
		$diadiem = isset($_REQUEST["diadiem"]) ? $_REQUEST["diadiem"] : "";
		$loaiphong = isset($_REQUEST["loaiphong"]) ? $_REQUEST["loaiphong"] : "";

	
	
	//Xử lý ảnh tải lên
		$src_logo0 = "images/";
		$file_tmp = isset($_FILES['anhphong']['tmp_name']) ? $_FILES['anhphong']['tmp_name'] : ""; 
		$file_name = isset($_FILES['anhphong']['name']) ? $_FILES['anhphong']['name'] : ""; 
		$file_type = isset($_FILES['anhphong']['type']) ? $_FILES['anhphong']['type'] : ""; 
		$file_size = isset($_FILES['anhphong']['size']) ? $_FILES['anhphong']['size'] : ""; 
		$file_error = isset($_FILES['anhphong']['error']) ? $_FILES['anhphong']['error'] : "";

		$ngaygioUpfile=date("y")."_".date("m")."_".date("d")."_".date("H")."h_".date("m")."m_".date("s")."s"; //Lay gio cua he thong
		$file__name=$ngaygioUpfile.$file_name;
		copy ( $file_tmp, $src_logo0.$file__name);
	
	
	
		$db="anh";
		$conn=new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");//tạo kết nối với server
		if (!empty($price) && !empty($description)) {
	
			$sql_add="INSERT INTO `anhhh` ( `loaiphong`,`price`,`description`, `anhphong`,`tinhtrang`,`diadiem`) VALUES ('$loaiphong','$price','$description','$file__name','$tinhtrang','$diadiem')";


		mysqli_query($conn,$sql_add);	
		}	header("Location: danhsachphongsauadd.php");





?>