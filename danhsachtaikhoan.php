<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List account</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<style>
	
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		/* Title */
		h1 {
			color: #FFF; /* White text color */
			font-size: 36px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
			text-align: center;
			margin-top: 20px;
		}

		/* Table */
		table {
			width: 80%;
			margin: 20px auto;
			border: 2px solid #333;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
		}

		/* Table Header */
		th {
			background: linear-gradient(135deg, #FF5733, #FF7044); /* Gradient background for table headers */
			color: white;
			padding: 15px;
			text-align: center;
		}

		/* Table Data */
		td {
			padding: 15px;
			text-align: center;
		}

		/* Table Row Hover Effect */
		tr:hover {
			background-color: #ddd;
		}

		/* Image Styles */
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

		/* "Add" Button Styles */
		a[href="addphong.php"] button {
			background: linear-gradient(135deg, #FF5733, #FF7044); /* Gradient background for buttons */
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
			background: linear-gradient(135deg, #FF7044, #FF5733); /* Reverse gradient on hover */
		}

		/* Pagination Styles */
		ul {
			list-style-type: none;
			padding: 0;
			text-align: center;
		}

		ul li {
			display: inline;
			margin: 5px;
		}

		ul li a {
			text-decoration: none;
			color: #333;
			background: linear-gradient(135deg, #FF5733, #FF7044); /* Gradient background for pagination links */
			padding: 5px 10px;
			border-radius: 5px;
			transition: background 0.3s ease-in-out;
		}

		ul li a:hover {
			background: linear-gradient(135deg, #FF7044, #FF5733); /* Reverse gradient on hover */
			color: white;
			
		}
		i{
			color: black;
		}
		
		a[href="dangky.php"] button,a[href="indexadmin.php"] button, button[type="submit"] {
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

		a[href="dangky.php"] button:hover,a[href="indexadmin.php"] button:hover, button[type="submit"]:hover {
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
		<div class="nut" align="center">			
		<a href="dangky.php" ><button><i class="fa-solid fa-user-plus" style="color: #f7f7f8;"></i>Thêm tài khoản</button></a>
		</div>
		<form action="timkiemtaikhoan_controller.php" method="post">
			<div class="timkiem">
			<div class="main">
				<p>Tìm kiếm:</p>
				<input type="search" name="search" class="timkiembutton" placeholder="Nhập từ khóa tìm kiếm">
				<button type="submit" class="search-button">
					<i class="fa-solid fa-magnifying-glass" style="color: #f7f7f8;"></i>
					Tìm kiếm
				</button>			
			</div>
	
		</div>
		</form>
	<?php
		$sobg=5;
		$db="anh";
		$conn=new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");//tạo kết nối với server
		$current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

		// Tính toán OFFSET (độ lệch)
		$offset = ($current_page - 1) * $sobg;
				$select = "SELECT * FROM `acc` LIMIT $offset, $sobg";
				$result = mysqli_query($conn, $select);
				$stt_hang=($current_page - 1) * $sobg;
			while($row = mysqli_fetch_object($result))
			{
			
			$stt_hang++;
			$id[$stt_hang]=$row->id;
			$username[$stt_hang]=$row->username;
			$password[$stt_hang]=$row->password;
			$full_name[$stt_hang]=$row->full_name;
			$email[$stt_hang]=$row->email;
			$role[$stt_hang]=$row->role;
			
			
		}
	$tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `acc`"));
	$soluongtrang = ceil($tong_bg / $sobg);
	mysqli_close($conn);
	
?>

	
	
	
	<table  align="center" border="1">
	  <tbody>
		<tr>
		  <td colspan="8" align="">Danh mục tài khoản</td>
		</tr>
		<tr align="center">
		  <td width="38">&nbsp;</td>
		  <td width="38">STT</td>
		  <td width="83">Username</td>
		  <td width="83">Password</td>
		  <td width="83 ">Fullname</td>
		  <td width="83">Email</td>
		  <td width="83">Role</td>
		  <td width="83">Chức năng</td>
		</tr>
		  	<?php
			  for ($i = ($current_page - 1) * $sobg +1; $i <= ($current_page - 1) * $sobg +$sobg ; $i++)
			  {
				  if($i>$tong_bg){
			  break;
		  }
			?>
		<tr>
		  <td><input name="selected_id[]" value="<?php echo $id[$i] ?>" type="radio"></td>
		  <td><?php echo $i?></td>
		  <td><?php echo $username[$i]?></td>
		  <td><?php echo $password[$i]?></td>
		  <td><?php echo $full_name[$i]?></td>
		  <td><?php echo $email[$i]?></td>
		  <td><?php echo $role[$i]?></td>
		  	<td >
				<a href="xoa_taikhoan_controller.php?id=<?php echo $id[$i]?>"><i class="fa-solid fa-trash"></i></a>
			</td>
		  
		</tr>
		  <?php  
		  }
		  ?>
		<tr>
		  <td colspan="8" align="right">Có tổng số <?php echo $tong_bg?> hãng sản xuất</td>
		</tr>
	  </tbody>
	</table>
		<ul>
			<?php
				for ($i = 1; $i <= $soluongtrang; $i++) {
					echo "<li><a href='indexadmin.php?page=$i'>$i</a></li> ";
				}
			?>
		</ul>
</body>
	
</html>