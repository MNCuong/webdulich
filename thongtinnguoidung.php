
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List user</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<style>
	
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;font-size: 14px;
		}

		h1 {
			color: #FFF; 
			font-size: 36px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
			text-align: center;
			margin-top: 20px;
		}

		table {
			width: 80%;
			margin: 20px auto;
			border: 2px solid #333;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			background-color: rgba(255, 255, 255, 0.9); 
		}

		th {
			background: linear-gradient(135deg, #FF5733, #FF7044); 
			color: white;
			padding: 15px;
			text-align: center;
		}

		td {
			padding: 15px;
			text-align: center;
		}

		tr:hover {
			background-color: #ddd;
		}

		img {
			border: 3px solid #ccc;
			border-radius: 10px;
			transition: transform 0.3s ease-in-out;
			display: block;
			margin: 0 auto;
		}

		img:hover {
			transform: scale(1.05);
			border-color: #FF5733;
		}

		a[href="addphong.php"] button {
			background: linear-gradient(135deg, #FF5733, #FF7044); 
			color: white;
			padding: 10px 20px;
			text-decoration: none;
			border: none;
			border-radius: 5px;
			font-weight: bold;
			transition: background 0.3s ease-in-out;
			cursor: pointer;
			display: block;
			margin: 20px auto;
		}

		a[href="addphong.php"] button:hover {
			background: linear-gradient(135deg, #FF7044, #FF5733); 
		}

		ul {
			list-style-type: none;
			padding: 0;
			text-align: center;
		}

		ul li {
			display: inline;
			margin: 5px;
		}

		.chiso {
			text-decoration: none;
			color: #333;
			background: linear-gradient(135deg, #FF5733, #FF7044); 
			padding: 5px 10px;
			border-radius: 5px;
			transition: background 0.3s ease-in-out;
			display: inline;
		}

		ul li a:hover {
			background: linear-gradient(135deg, #FF7044, #FF5733);
			color: white;
			
		}
		i{
			color: black;
		}
		
		a[href="dangky.php"] button,a[href="indexadmin.php"] button, button[type="submit"],a[href="update_tkadmin_controller.php"] button{
			background-color: rgba(19,99,222,1.00);
			color: white;
			padding: 10px 20px;
			text-decoration: none;
			border: none;
			border-radius: 5px;
			font-weight: bold;
			transition: background-color 0.3s ease-in-out;
			cursor: pointer;
		}

		a[href="dangky.php"] button:hover,a[href="indexadmin.php"] button:hover, button[type="submit"]:hover,a[href="update_tkadmin_controller.php"] button:hover {
			opacity: 0.7;

		}
		.timkiem{
			display: flex;
			width: 60%;
			margin: 0 auto;
		}
		.main{
			width: 100%;
		}
		.timkiembutton{
			width: 80%;
			padding: 12px;
			border-radius: 24px;
			font-size: 16px;
			border: 1px solid rgba(208,205,205,1.00);
		}

	</style>


</head>

<body>
	<?php
		$sobg = 10;
		$db = "anh";
		$conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ");
		$current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

		// Tính toán OFFSET (độ lệch)
		$offset = ($current_page - 1) * $sobg;

		$select = "SELECT * FROM `nguoidung` LIMIT $offset, $sobg";
		$result = mysqli_query($conn, $select);
		$stt_hang = ($current_page - 1) * $sobg;

		while ($row = mysqli_fetch_object($result)) {
			$stt_hang++;
			$id_nguoidung[$stt_hang] = $row->id_nguoidung;
			$username[$stt_hang] = $row->username;
			$hoten[$stt_hang] = $row->hoten;
			$ngaysinh[$stt_hang] = $row->ngaysinh;
			$gioitinh[$stt_hang] = $row->gioitinh;
			$sdt[$stt_hang] = $row->sdt;
			$diachi[$stt_hang] = $row->diachi;
		}


	 

		$tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `datphong`"));
		$soluongtrang = ceil($tong_bg / $sobg);

		mysqli_close($conn);
?>
		
		
	

	
		<form action="update_tkadmin_controller.php" method="post">
        <input type="hidden" name="selected_ids" id="selected_ids_hidden" value="">

	
	<table  align="center" border="1" id="thongtintaikhoan">
	  <tbody>
		<tr>
		  <td colspan="9" align="">Danh mục tài khoản</td>
		</tr>
		<tr align="center">
		  <td width="38">STT</td>
		  <td width="38">ID người dùng</td>
		  <td width="83">Username</td>
		  <td width="83">Họ tên</td>
		  <td width="83 ">Ngày sinh</td>
		  <td width="83">Giới tính</td>
		  <td width="83">Số điện thoại</td>
		  <td width="83">Địa chỉ </td>
		</tr>
		  	<?php
			  for ($i = ($current_page - 1) * $sobg +1; $i <= ($current_page - 1) * $sobg +$sobg ; $i++)
			  {
				  if($i>$tong_bg){
			  break;
		  }
			?>
		<tr>	
			<td><?php echo $i?></td>
		  <td><?php echo $id_nguoidung[$i]?></td>
		  <td><?php echo $username[$i]?></td>
		  <td><?php echo $hoten[$i]?></td>
		  <td><?php echo $ngaysinh[$i]?></td>
		  <td><?php echo $gioitinh[$i]?></td>
		  <td><?php echo $sdt[$i]?></td>
		  <td><?php echo $diachi[$i]?></td>
		  	<td >
				<a href="xoa_taikhoan_controller.php?id=<?php echo $id[$i]?>"><i class="fa-solid fa-trash"></i></a>
			</td>
		  
		</tr>
		  <?php  
		  }
		  ?>
		<tr>
		  <td colspan="9" align="right">Có tổng số <?php echo $tong_bg?> tài khoản</td>
		</tr>
	  </tbody>
	</table>
		<ul>
			<?php
				for ($i = 1; $i <= $soluongtrang; $i++) {
					echo "<li><a class='chiso' href='indexadmin.php?page=$i'>$i</a></li> ";
				}
			?>
		</ul>
		</form>
</body>

	
</html>