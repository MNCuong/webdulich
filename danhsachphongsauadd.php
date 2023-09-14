<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Danh sach phong</title>
	<style>
	
h1 {
    color: #FF5733;
    font-size: 36px; 
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
}
		body{
			background-image: url(https://kconceptvn.com/wp-content/uploads/2020/04/hotel-photography-chup-anh-khach-san-khach-san-bamboo-sapa-hotel-18-1024x683.jpg);
			background-size: cover;
		}

table {
    width: 80%; 
    margin: 20px auto; 
    border: 2px solid #333;
    border-radius: 10px; 
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); 
	background:rgba(239,235,235,1.00);
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
	</style>


</head>

<body>
	<div class="nut" align="center">			
		<a href="addphong.php" ><button>Thêm phòng</button></a>
		<a href="indexadmin.php" ><button>Trở về</button></a>
	</div>
	<?php
	$sobg=4;
		$db="anh";
		$conn=new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");//tạo kết nối với server
		$current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

		// Tính toán OFFSET (độ lệch)
		$offset = ($current_page - 1) * $sobg;
				$select = "SELECT * FROM `anhhh` LIMIT $offset, $sobg";
				$result = mysqli_query($conn, $select);
				$stt_hang=($current_page - 1) * $sobg;
			while($row = mysqli_fetch_object($result))
			{
			
			$stt_hang++;
			$id_hang[$stt_hang]=$row->id;
			$price0[$stt_hang]=$row->price;
			$description0[$stt_hang]=$row->description;
			$anhphong[$stt_hang]=$row->anhphong;
			$tinhtrang[$stt_hang]=$row->tinhtrang;
			
			
		}
	$tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `anhhh`"));
	$soluongtrang = ceil($tong_bg / $sobg);
	mysqli_close($conn);
	
	
	
		
	
	?>
	
	
	<table width="400" align="center" border="1">
	  <tbody>
		<tr>
		  <td colspan="6" align=""><h3>Danh sách phòng</h3></td>
		</tr>
		<tr align="center">
		  <td width="38">STT</td>
		  <td width="83">Giá</td>
		  <td width="83">Mô tả</td>
		  <td width="44" height="100px">Hình ảnh</td>
		  <td width="83" >Tình trạng</td>
		  <td width="150">Chức năng</td>
		</tr>
		  <?php
			  for ($i = ($current_page - 1) * $sobg +1; $i <= ($current_page - 1) * $sobg +$sobg ; $i++)
			  {
				  if($i>$tong_bg){
			  break;
		  		}
			?>
		<tr>
		  <td><?php echo $i;?></td>
		  <td><?php echo $price0[$i]?></td>
		  <td><?php echo $description0[$i]?></td>
		  <td><img src="images/<?php echo $anhphong[$i]?>" width="100px" height="100px" alt="Anh tro"></td>
		  <td><?php echo $tinhtrang[$i]?></td>

		  <td>
				<a href="form_suaphong.php?id=<?php echo $id_hang[$i]?>" name="edit"> Edit</a>/
				<a href="xoa_phongcontroller.php?id=<?php echo $id_hang[$i]?>" name="delete">Delete </a>
			</td>
		</tr>
		  <?php  
		  }
		  ?>
		<tr>
		  <td colspan="6" align="right">Có tổng số <?php echo $tong_bg?> hãng sản xuất</td>
		</tr>
	  </tbody>
	</table>
	<ul>
			<?php
				for ($i = 1; $i <= $soluongtrang; $i++) {
					echo "<li><a href='danhsachphongsauadd.php?page=$i'>$i</a></li> ";
				}
			?>
		</ul>
</body>
	
</html>