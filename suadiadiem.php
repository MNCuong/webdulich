<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$id=$_REQUEST["id"];
//		if (isset($_REQUEST["id"]) && is_numeric($_REQUEST["id"])) {
//    $id = $_REQUEST["id"];
//} else {
//    // Xử lý trường hợp khi biến id không hợp lệ
//    echo "ID không hợp lệ hoặc không tồn tại.";
//    exit; // Kết thúc chương trình để ngăn tiếp tục thực thi
//}
		$conn=mysqli_connect("localhost","root","","anh") or die ("Không connect đc với máy chủ");
		//Chọn CSDL để làm việc
		mysqli_select_db($conn,"anh") or die ("Không tìm thấy CSDL");
		//Tạo câu truy vấn
		$sql_select_dulich="Select * from `diadiemdulich` WHERE `diadiemdulich`.`id` = $id";
		$result_se_dulich=mysqli_query($conn,$sql_select_dulich);
		$row=mysqli_fetch_object($result_se_dulich);
		$id=$row->id;
		$ten=$row->ten;
		$diachi=$row->diachi;
		$theloai=$row->theloai;
		$giatien=$row->giatien;
		$dacdiem=$row->dacdiem;
		$gioithieu=$row->gioithieu;
	?>
	
	<form name="frm_suadulich" action="Connect_suadulich.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Trường ẩn để truyền giá trị id -->
		<table width="405" border="1" align="center">
		  <tbody>
			<tr>
			  <td colspan="2" align="center">Sửa địa điểm</td>
			</tr>
<!--
			<tr>
			  <td width="149">ID</td>
			  <td width="240"><input type="number" name="txt_id"></td>
			</tr>
-->
			<tr>
			  <td>Tên</td>
			  <td><input type="text" name="txt_ten" value="<?php echo $ten?>"></td>
			</tr>
			<tr>
			  <td>Địa Chỉ</td>
			  <td><input type="text" name="txt_diachi" value="<?php echo $diachi?>"></td>
			</tr>
			<tr>
			  <td>Thể Loại</td>
			  <td><input type="text" name="txt_theloai" value="<?php echo $theloai?>"></td>
			</tr>
			  <tr>
			  <td>Giá Tiền</td>
			  <td><input type="number" name="txt_giatien" value="<?php echo $giatien?>"></td>
			</tr>
			<tr>
				<td width="149">Ảnh</td>
				<td width="149"><input type="file" name="anh" id="anh"><td>
			</tr>
			<tr>
			  <td>Đặc Điểm</td>
			  <td><input type="text" name="txt_dacdiem" value="<?php echo $dacdiem?>"></td>
			</tr>
			<tr>
			  <td>Giới Thiệu</td>
			  <td><input type="text" name="txt_gioithieu" value="<?php echo $gioithieu?>"></td>
			</tr>
			<tr>
			  <td colspan="2" align="center"><input type="submit"><input type="reset"></td>
			</tr>
		  </tbody>
		</table>
	</form>
</body>
</html>