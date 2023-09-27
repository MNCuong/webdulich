	<?php include './header.php';


if (!isset($_SESSION['userclient'])) {
    header('Location: dangnhapclient.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chi tiết du lịch</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">	
<style>
	.container {
		display: flex;
	}
	.container1 {
		display: flex;
		flex-direction: column;
		margin: 50px;
		margin-right: 5px;
		margin-bottom: 5px;
		margin-top: 200px;
		padding: 30px;
        background-color: rgba(255,255,255,1.00);
        border-radius: 8px;
        border: none;
		box-shadow: 0 0 6px black;
		width: 60%;
	}
	
	.container2 {
		display: flex;
		flex-direction: column;
		margin: 50px;
		margin-left: 5px;
		margin-bottom: 5px;
		margin-top: 200px;
		padding: 30px;
        background-color: rgba(255,255,255,1.00);
        border-radius: 8px;
        border: none;
		box-shadow: 0 0 6px black;
		width: 35%;
	}
	
	.introduce {
		display: flex;
		flex-direction: column;
		margin: 122px;
		margin-top: 5px;
		padding: 30px;
        background-color: rgba(255,255,255,1.00);
        border-radius: 8px;
        border: none;
		box-shadow: 0 0 6px black;
		width: 85%;
	}
	
	.info h2 {
		font-size: 20px;
		font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	}
	
	.datve {
		width: 100%;
        padding: 10px;
        background-color: rgba(17, 190, 231, 1.00);
        border-radius: 8px;
        border: none;
	}
	
	.datve:hover {
        opacity: 0.7;
        cursor: pointer;
    }
	
	.title {
		font-size: 45px;
		font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	}
	
	.image-slider {
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	margin: 20px;
	}

	.slider-button {
    	padding: 10px 20px;
   		font-size: 24px;
    	cursor: pointer;
    	border: none;
    	background-color: transparent;
    	color: #333;
    	transition: color 0.3s;
	}

	.slider-button:hover {
    	color: #007bff;
	}

	#sliderImage {
		border-radius: 10px;
    	width: 550px; 
    	height: 400px; 
    	object-fit: cover; 
    	margin: 10px; /
	}
	
	.features {
/*		margin-top: 30px;*/
	}
</style>
</head>

<body>
	<?php
		$id = $_REQUEST['id'];
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
	
		$dacdiem_dongs= explode(".",$dacdiem);
		$gioithieu_dongs=explode("\n",$gioithieu);
	?>
	<div class="container">
	<div class="container1">
		<div class="title"><?php echo $ten?></div>
		<div class="image-slider">
        	<button id="prevBtn" class="slider-button" onclick="changeImage(-1)">&#8249;</button>
        	<img src="HinhAnh/SunWorld1.png" alt="Ảnh 1" id="sliderImage">
        	<button id="nextBtn" class="slider-button" onclick="changeImage(1)">&#8250;</button>
    	</div>
	</div>
	
	<div class="container2">
		<div class="info">
			<h2>Giá từ: </h2>
			<h2 style="text-align: center; color: firebrick; font-size: 30px">
				<?php echo $giatien?>VNĐ</h2>
			<input type="button" value="Đặt vé" class="datve" >
		</div>
		<h2 style="margin-top: 10px"><strong>Điểm nổi bật:</strong></h2>
		<?php
			echo "<ul>";

			foreach ($dacdiem_dongs as $dacdiem_dong) {
				echo "<li>$dacdiem_dong</li>";
			}

			echo "</ul>";
		?>
	</div>
	</div>
	<div class="introduce">
		<strong>Bạn sẽ trải nghiệm</strong>
		<?php foreach($gioithieu_dongs as $gioithieu_dong) {
			  		echo $gioithieu_dong . "<br>" . "<br>";
			  } 
		?>
	</div>
	
	<script>
		const images = ["HinhAnh/SunWorld1.png", "HinhAnh/SunWorld2.png", "HinhAnh/SunWorld3.png"];
		let currentIndex = 0;

		function changeImage(direction) {
    		currentIndex += direction;

    	if (currentIndex < 0) {
        	currentIndex = images.length - 1;
    	} else if (currentIndex >= images.length) {
        	currentIndex = 0;
		}

    	const sliderImage = document.getElementById("sliderImage");
    	sliderImage.src = images[currentIndex];
		}
	</script>
</body>
</html>