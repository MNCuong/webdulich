<?php
session_start(); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Phòng</title>
    <style>
        body {
            background: linear-gradient(135deg, #3498db, #e74c3c); /* Gradient từ xanh đến đỏ */
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .room-container {
            display: flex;
            flex-direction: row;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .room-details {
            flex: 1;
            padding-right: 20px;
        }

        .room-details h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .room-details img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border: 5px solid #fff;
            border-radius: 5px;
        }

        .room-details p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .room-price {
            flex: 1;
            padding-left: 20px;
        }

        .room-price p {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .book-button {
            margin-top: 10px;
        }

        .book-button button {
            background-color: #3498db;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .book-button button:hover {
            background-color: #e74c3c;
        }
		.image-slider {
			position: relative;
			max-width: 300px; 
			margin: 0 auto; 
		}

		.slider-button {
			position: absolute;
			top: 50%; 
			transform: translateY(-50%);
			background-color: rgba(0, 0, 0, 0.2);
			color: #fff; 
			border: none;
			padding: 10px 15px;
			cursor: pointer;
			font-size: 1.2em;
			z-index: 1; 
		}

		#prevBtn {
			left: 0;
		}

		#nextBtn {
			right: 0;
		}

		#sliderImage {
			width: 100%;
			height: auto;
			display: block;
			border: 1px solid #ddd; 
		}
    </style>
</head>
	
	<?php
	if (isset($_GET['id_phong'])) {
		$conn = new mysqli("localhost", "root", "", "anh")or  die("Kết nối thất bại: " . $conn->connect_error);
		$phongId = $_GET['id_phong'];
		$query = "SELECT * FROM anhhh WHERE id_phong = $phongId";
		$result = $conn->query($query);
		$row = mysqli_fetch_object($result);
			$price=$row->price;
			$description=$row->description;
			$anh=$row->anhphong;
			$diadiem=$row->diadiem;
			$conn->close();
		} else {
			echo "Không tìm thấy thông tin phòng";
		}

?>
	
	
	
<body>
    <div class="room-container">
        <div class="room-details">
			
            <h2>Chi tiết phòng</h2>
            <div class="image-slider">
				<button id="prevBtn" class="slider-button" onclick="changeImage(-1)">&#8249;</button>
				<img src="images/<?php echo $anh; ?>" alt="Ảnh 1" id="sliderImage" style="height: 300px; width: 300px">
				<button id="nextBtn" class="slider-button" onclick="changeImage(1)">&#8250;</button>
    		</div>
            </div>
            <div class="room-price" >
				<br>
				<br>
				<p ><?php echo $description; ?></p>
                <p>Giá phòng: VND<?php echo $price; ?>/ngày</p>
                <p>Địa điểm: <?php echo $diadiem; ?></p>
                <div class="book-button">
					<a href="xacnhandatphong.php?id_phong=<?php echo $phongId ?>&diadiem=<?php echo $diadiem ?>"><button>Đặt phòng</button></a>
                </div>
        </div>
    </div>
</body>
	<script>
		const images = ["images/<?php echo $anh; ?>", "images/<?php echo $anh; ?>", "images/<?php echo $anh; ?>"];
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
</html>
