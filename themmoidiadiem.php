<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form name="frm_themdulich" action="Connect_themdulich.php" method="post" enctype="multipart/form-data">
		<table width="405" border="1" align="center">
		  <tbody>
			<tr>
			  <td colspan="2" align="center">Thêm địa điểm</td>
			</tr>
			<tr>
			  <td width="149">ID</td>
			  <td width="240"><input type="number" name="txt_id"></td>
			</tr>
			<tr>
			  <td>Tên</td>
			  <td><input type="text" name="txt_ten"></td>
			</tr>
			<tr>
			  <td>Địa Chỉ</td>
			  <td><input type="text" name="txt_diachi"></td>
			</tr>
			<tr>
			  <td>Thể Loại</td>
			  <td><input type="text" name="txt_theloai"></td>
			</tr>
			  <tr>
			  <td>Giá Tiền</td>
			  <td><input type="number" name="txt_giatien"></td>
			</tr>
			<tr>
				<td width="149">Ảnh</td>
				<td width="149"><input type="file" name="anh" id="anh"><td>
			</tr>
			<tr>
			  <td>Đặc Điểm</td>
			  <td><input type="text" name="txt_dacdiem"></td>
			</tr>
			<tr>
			  <td>Giới Thiệu</td>
			  <td><input type="text" name="txt_gioithieu"></td>
			</tr>
			<tr>
			  <td colspan="2" align="center"><input type="submit"><input type="reset"></td>
			</tr>
		  </tbody>
		</table>
	</form>
</body>
</html>