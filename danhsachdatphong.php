
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

		ul li a {
			text-decoration: none;
			color: #333;
			background: linear-gradient(135deg, #FF5733, #FF7044); 
			padding: 5px 10px;
			border-radius: 5px;
			transition: background 0.3s ease-in-out;
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
		$sobg = 5;
		$db = "anh";
		$conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ");
		$current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

		// Tính toán OFFSET (độ lệch)
		$offset = ($current_page - 1) * $sobg;

		$select = "SELECT * FROM `acc` LIMIT $offset, $sobg";
		$result = mysqli_query($conn, $select);
		$stt_hang = ($current_page - 1) * $sobg;

		while ($row = mysqli_fetch_object($result)) {
			$stt_hang++;
			$id_tk[$stt_hang] = $row->id;
			$username[$stt_hang] = $row->username;
			$password[$stt_hang] = $row->password;
			$full_name[$stt_hang] = $row->full_name;
			$email[$stt_hang] = $row->email;
			$role[$stt_hang] = $row->role;
			$trangthai[$stt_hang] = $row->trangthai;
		}


		//check 2 bang 
		$query = "SELECT DISTINCT datphong.username FROM datphong ";
		$result = $conn->query($query);

		if ($result) {
			while ($row = mysqli_fetch_object($result)) {
				$username_datphong= $row->username;
				$checkQuery = "SELECT * FROM acc ";
				$checkResult = $conn->query($checkQuery);

				if ($checkResult) {
					$count = mysqli_num_rows($checkResult);

				   if ($count > 0) {
						$updateQuery = "UPDATE acc SET `trangthai` = '<span style=\"color: #00CD00;\">Đang giao dịch</span>' 
						WHERE `username` = '$username_datphong'";
					} else {
						$updateQuery = "UPDATE acc SET `trangthai` = '<span style=\"color: #00CD00;\">Chưa giao dịch</span>' 
						WHERE `username` != '$username_datphong' ";
					}
					if ($conn->query($updateQuery) !== TRUE) {
						echo "Lỗi cập nhật trạng thái: " . $conn->error;
					}
				} else {
					echo "Lỗi truy vấn: " . $conn->error;
				}
			}

		} else {
			echo "Lỗi truy vấn hoặc chưa có tài khoản nào giao dịch " . $conn->error;
		}
			$tong_chuagiaodich = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `acc` WHERE `trangthai`='Chưa giao dịch'"));
			$tong_danggiaodich = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `acc` WHERE `trangthai`='<span style=\"color: #00CD00;\">Đang giao dịch</span>' "));


		$tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `acc`"));
		$soluongtrang = ceil($tong_bg / $sobg);

		mysqli_close($conn);
?>
		<div class="overview" style="display: flex; width: 80%; margin: 0 auto;; justify-content: space-between;">
			<div class="nut" >			
				<a style="margin: 0 auto;" href="dangky.php" ><button><i class="fa-solid fa-user-plus" style="color: #f7f7f8;"></i>Thêm tài khoản</button></a>
			</div>
			<div class="mainoverview" style="border: 3px solid black; width: 30%; border-radius: 8px;padding: 4px;background-color:rgba(157,236,84,1.00);">
				<div class="contentoverview">
					<p>Đang giao dịch: <?php echo($tong_danggiaodich)?> tài khoản</p>
					<p>Chưa giao dịch: <?php echo($tong_chuagiaodich)?> tài khoản</p>
					<p>Tổng số tài khoản: <?php echo($tong_bg)?> tài khoản</p>
				</div>
			</div>
		</div>
		<div class="timkiem">
		  <div class="main">
			<p>Tìm kiếm:</p>
			<input type="search" name="search" class="timkiembutton" id="searchInput" placeholder="Nhập từ khóa tìm kiếm">
			<button type="button" class="search-button" id="searchButton">
			  <i class="fa-solid fa-magnifying-glass" style="color: #f7f7f8;"></i>
			  Tìm kiếm
			</button>
		  </div>
		</div>
	<div id="searchResults">
  <!-- Bảng kết quả tìm kiếm sẽ được hiển thị ở đây -->
	</div>

	
		<form action="update_tkadmin_controller.php" method="post">
        <input type="hidden" name="selected_ids" id="selected_ids_hidden" value="">

	
	<table  align="center" border="1" id="thongtintaikhoan">
	  <tbody>
		<tr>
		  <td colspan="9" align="">Danh mục tài khoản</td>
		</tr>
		<tr align="center">
		  <td width="38">&nbsp;</td>
		  <td width="38">STT</td>
		  <td width="83">Username</td>
		  <td width="83">Password</td>
		  <td width="83 ">Fullname</td>
		  <td width="83">Email</td>
		  <td width="83">Role</td>
		  <td width="83">Trạng thái</td>
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
		  <td><input name="selected_id[]" value="<?php echo $id_tk[$i] ?>" type="checkbox"></td>
		  <td><?php echo $i?></td>
		  <td><?php echo $username[$i]?></td>
		  <td><?php echo $password[$i]?></td>
		  <td><?php echo $full_name[$i]?></td>
		  <td><?php echo $email[$i]?></td>
		  <td><?php echo $role[$i]?></td>
		  <td><?php echo $trangthai[$i]?></td>
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
					echo "<li><a href='indexadmin.php?page=$i'>$i</a></li> ";
				}
			?>
		</ul>
		<button type="submit">Xác nhận Admin</button>
		</form>
</body>
	<script>
        function updateSelectedIds() {
            var selectedIds = [];
            var checkboxes = document.querySelectorAll('input[name="selected_id[]"]:checked');
            for (var i = 0; i < checkboxes.length; i++) {
                selectedIds.push(checkboxes[i].value);
            }
            document.getElementById('selected_ids_hidden').value = selectedIds.join(',');
        }
        
        var checkboxList = document.querySelectorAll('input[name="selected_id[]"]');
        for (var i = 0; i < checkboxList.length; i++) {
            checkboxList[i].addEventListener('change', updateSelectedIds);
        }
    </script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
		  var searchInput = document.getElementById("searchInput");
		  var searchButton = document.getElementById("searchButton");
		  var searchResults = document.getElementById("searchResults");
		  var thongtintaikhoan = document.getElementById("thongtintaikhoan");

		  searchButton.addEventListener("click", function () {
			var searchTerm = searchInput.value.trim();
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "timkiemtaikhoan_controller.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.onreadystatechange = function () {
			  if (xhr.readyState === 4 && xhr.status === 200) {
				var searchResultHTML = xhr.responseText;
				searchResults.innerHTML = searchResultHTML;
				thongtintaikhoan.style.display="none";
			  }
			};
			xhr.send("search=" + searchTerm);
		  });
		});
	</script>
</html>