<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Danh sach phong</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

	<style>
	
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

a[href="addphong.php"] button,a[href="indexadmin.php"] button, button[type="submit"] {
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
	.timkiembutton{
			margin: 8px 0 ;
		}
a[href="addphong.php"] button:hover,a[href="indexadmin.php"] button:hover, button[type="submit"]:hover {
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
		.container{
			display: flex;
			width: 70%;
			margin: 0 auto;
			justify-content: space-between;

		}
		.overviewtk{
			border: 3px solid black;
			width: 50%;
			border-radius: 4px;
			padding: 4px;
			background-color: aquamarine;
			
		}
		
		
		.timkiem{
			display: flex;
			width: 100%;
			margin: 0 auto;
		}
		.main{
			width: 100%;
		}
		.timkiembutton{
			width: 100%;
			padding: 12px;
			border-radius: 24px;
			font-size: 16px;
			border: 1px solid rgba(208,205,205,1.00);
		}
		
	</style>


</head>

<body>
	<?php
	$sobg=4;
		$db="anh";
		$conn=new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");
		$current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

		// Tính toán OFFSET (độ lệch)
		$offset = ($current_page - 1) * $sobg;
				$select = "SELECT * FROM `anhhh` LIMIT $offset, $sobg";
				$result = mysqli_query($conn, $select);
				$stt_hang=($current_page - 1) * $sobg;
			while($row = mysqli_fetch_object($result))
			{
			
			$stt_hang++;
			$id_hang[$stt_hang]=$row->id_phong;
			$price0[$stt_hang]=$row->price;
			$description0[$stt_hang]=$row->description;
			$anhphong[$stt_hang]=$row->anhphong;
			$tinhtrang[$stt_hang]=$row->tinhtrang;
			$diadiem[$stt_hang]=$row->diadiem;
			$loaiphong[$stt_hang]=$row->loaiphong;
			
			
		}
	 


	$tong_controng = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `anhhh` WHERE `tinhtrang`='Còn trống'"));
	$tong_dadat = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `anhhh` WHERE `tinhtrang`='Đã đặt' "));
	$tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `anhhh`"));
	$soluongtrang = ceil($tong_bg / $sobg);
	mysqli_close($conn);
	
	
	
		
	
	?>
	
	<br>
		<div class="container">
		<div class="overviewtk">
			<p>Còn trống: <?php echo($tong_controng)?> phòng</p>
			<p>Đã đặt: <?php echo($tong_dadat)?> phòng</p>
			<p>Tổng phòng: <?php echo($tong_bg)?> phòng</p> 
		</div>
		<div class="nut" align="center">			
			<div class="buttonnut">
				<a href="addphong.php" ><button>Thêm phòng</button></a>
				<a href="indexadmin.php" ><button>Trở về</button></a>
			</div>
		
		
		</div>
	</div>
	
		<form action="xoa_phongcontroller.php" method="post">
        <input type="hidden" name="selected_ids" id="selected_ids_hidden" value="">
		<input type="submit" value="Xóa phòng">

	<table width="400" align="center" border="1">
	  <tbody>
		<tr>
		  <td colspan="8" style="height: 0px;"><h3>Danh sách phòng</h3></td>
		</tr>
		<tr align="center">
		  <td width="38">&nbsp;</td>
		  <td style="height: 30px;" width="38">STT</td>
		  <td style="height: 30px;" width="38">Loại phòng</td>
		  <td style="height: 30px;" width="83">Giá</td>
		  <td style="height: 30px;" width="83">Mô tả</td>
		  <td style="height: 30px;" width="44" height="100px">Hình ảnh</td>
		  <td style="height: 30px;" width="83" >Tình trạng</td>
		  <td style="height: 30px;" width="83" >Địa điểm</td>
		  <td style="height: 30px;" width="150">Chức năng</td>
		</tr>
		  <?php
			  for ($i = ($current_page - 1) * $sobg +1; $i <= ($current_page - 1) * $sobg +$sobg ; $i++)
			  {
				  if($i>$tong_bg){
			  break;
		  		}
			?>
		<tr>
		  <td><input name="selected_id[]" value="<?php echo $id_hang[$i] ?>" type="checkbox"></td>
		  <td><?php echo $i;?></td>
		  <td><?php echo $loaiphong[$i];?></td>
		  <td><?php echo $price0[$i]?></td>
		  <td><?php echo $description0[$i]?></td>
		  <td><img src="images/<?php echo $anhphong[$i]?>" width="100px" height="100px" alt="Anh tro"></td>
		  <td><?php echo $tinhtrang[$i]?></td>
		  <td><?php echo $diadiem[$i]?></td>

		  <td>
				<a href="form_suaphong.php?id_phong=<?php echo $id_hang[$i]?>" name="edit"> Edit</a>
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
		
	</form>
	<ul .>
			<?php
				for ($i = 1; $i <= $soluongtrang; $i++) {
					echo "<li><a class='chiso' href='indexadmin.php?page=$i'>$i</a></li> ";
				}
			?>
		</ul>
	
	
	
	
	
</body>
	

	
	<script>
        function deleteselect() {
            var selectedIds = [];
            var checkboxes = document.querySelectorAll('input[name="selected_id[]"]:checked');
            for (var i = 0; i < checkboxes.length; i++) {
                selectedIds.push(checkboxes[i].value);
            }
            document.getElementById('selected_ids_hidden').value = selectedIds.join(',');
        }
        
        var checkboxList = document.querySelectorAll('input[name="selected_id[]"]');
        for (var i = 0; i < checkboxList.length; i++) {
            checkboxList[i].addEventListener('change', deleteselect);
        }
    </script>
	
	
</html>