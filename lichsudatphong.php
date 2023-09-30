
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lịch sử đặt phòng</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
	
h1 {
    color: #FF5733;
    font-size: 36px; 
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
}
		

table {
    width: 80%; 
    margin: 20px auto; 
    border: 2px solid #333;
    border-radius: 10px; 
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); 
	background:#fff;
}

th {
    background-color: #333;
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
	cursor: pointer;
}



a[href="addphong.php"] button,a[href="indexadmin.php"] button {
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

a[href="addphong.php"] button:hover,a[href="indexadmin.php"] button:hover {
    background-color: #E4482D;
	
}
ul>.chiso {
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
		}

		.chiso:hover {
			background: linear-gradient(135deg, #FF7044, #FF5733); 
			color: white;
			
		}
		i{
			color: black;
		}
		
		.main{
			display: flex;
			flex-direction: column;
		}
		
		
	</style>


</head>

<body>
	
	  <?php
				$sobg = 5;
				$db = "anh";
				$conn = new mysqli("localhost", "root", "", $db) or die ("Không connect đc với máy chủ");

				$tranghientai = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
				$usernamecheck = $_SESSION['userclient'];
				
				$offset = ($tranghientai - 1) * $sobg;
				$select = "SELECT * FROM `datphong` WHERE `username`='$usernamecheck' LIMIT $offset, $sobg";
				$result = mysqli_query($conn, $select);
				$stt_hang = ($tranghientai - 1) * $sobg;

			while($row = mysqli_fetch_object($result))
			{
				$stt_hang++;
				$id[$stt_hang] = $row->id;    
				$id_hang[$stt_hang] = $row->id_phong;
				$username[$stt_hang] = $row->username;
				$ngayden[$stt_hang] = $row->ngayden;
				$ngaydi[$stt_hang] = $row->ngaydi;
				$tenkhach[$stt_hang] = $row->tenkhach;
				$diadiem[$stt_hang] = $row->diadiem;
			}

				$tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `datphong` WHERE `username`='$usernamecheck'"));
				$soluongtrang = ceil($tong_bg / $sobg);
			mysqli_close($conn);
    ?>

	<div class="contentlichsu">
		<div class="main">
	
	<table width="400" align="center" border="1">
	  <tbody>
		<tr>
		  <td colspan="6" align=""><h3>Lịch sử đặt phòng của tài khoản <?php echo ($usernamecheck)?> </h3></td>
		</tr>
		<tr align="center">
		  <td width="38">STT</td>
		  <td width="83">Tên khách</td>
		  <td width="83">ID phòng</td>
		  <td width="83" >Ngày đến</td>
		  <td width="83" >Ngày đi</td>
		  <td width="83" >Địa điểm</td>
		</tr>
		  <?php
			  for ($i = ($tranghientai - 1) * $sobg +1; $i <= ($tranghientai - 1) * $sobg +$sobg ; $i++)
			  {
				  if($i>$tong_bg){
			  break;
		  		}
			?>
		<tr>
		  <td><?php echo $i;?></td>
		  <td><?php echo $tenkhach[$i]?></td>
		  <td><?php echo $id_hang[$i]?></td>
		  <td><?php echo $ngayden[$i]?></td>
		  <td><?php echo $ngaydi[$i]?></td>
		  <td><?php echo $diadiem[$i]?></td>

		 
		</tr>
		  <?php  
		  }
		  ?>
		<tr>
		  <td colspan="6" align="right">Có tổng số: <?php echo $tong_bg?> lần giao dịch</td>
		</tr>
	  </tbody>
	</table>
	<ul>
			<?php
				for ($i = 1; $i <= $soluongtrang; $i++) {
					echo "<li><a class='chiso' href='lichsudatphong.php?page=$i'>$i</a></li> ";
				}
			?>
		</ul></div>
	
	</div>
</body>
</html>