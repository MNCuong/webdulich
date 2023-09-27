<?php include('header.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chi tiết du lịch</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">	
<style>
	.container {
		display: flex;
		padding-top: 100px;
	}
	.container1 {
		display: flex;
		flex-direction: column;
		margin: 50px;
		margin-right: 5px;
		margin-bottom: 5px;
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
	<div class="container">
	<div class="container1">
		<div class="title">Sun World</div>
		<div class="image-slider">
        	<button id="prevBtn" class="slider-button" onclick="changeImage(-1)">&#8249;</button>
        	<img src="HinhAnh/SunWorld1.png" alt="Ảnh 1" id="sliderImage">
        	<button id="nextBtn" class="slider-button" onclick="changeImage(1)">&#8250;</button>
    	</div>
	</div>
	
	<div class="container2">
		<div class="info">
			<h2>Giá từ: </h2>
			<h2 style="text-align: center; color: firebrick; font-size: 30px">100000 VNĐ</h2>
			<input type="button" value="Đặt vé" class="datve" >
		</div>
		<h2 style="margin-top: 10px"><strong>Điểm nổi bật:</strong></h2>
		<ul class="features">
			<li>Khám phá Bà Nà thật dễ dàng với vé Bà Nà Hills</li>
			<li>Trải nghiệm hệ thống cáp treo được CNN bình chọn là 1 trong những cáp treo ấn tượng nhất thế giới</li>
			<li>Vui hết mình ở khu vui chơi Fantasy Park nằm ở độ cao 1.489 m</li>
			<li>Ngắm cảnh trên Cầu Vàng, nơi được tạp chí TIME bình chọn vào năm 2018 là 1 trong 100 địa điểm tuyệt vời nhất trên thế giới</li>
		</ul>
	</div>
	</div>
	<div class="introduce">
		<strong>Bạn sẽ trải nghiệm</strong>
		Ai đến Đà Nẵng mà không đi du lịch Bà Nà Hills thì thật là thiếu sót đấy! Bạn hãy cầm trên tay vé Bà Nà Hills và dành nguyên 1 ngày để khám phá điểm đến ấn tượng này nhé. Với vé Bà Nà Hills này, bạn sẽ có cơ hội chiêm ngưỡng quang cảnh hùng vĩ xung quanh khi hệ thống cáp treo dần đưa bạn lên đỉnh núi.
		<br>
		Lên đến Bà Nà Hills, bạn tha hồ bung lựa với hơn 105 trò chơi ở công viên giải trí Fantasy Park mà không mất phí. Chưa hết, khu làng Pháp là địa điểm vô cùng lý tưởng để sống ảo. À mà nhớ hãy dành thời gian ngắm cảnh trên Cầu Vàng, nơi được tạp chí TIME bình chọn vào năm 2018 là 1 trong 100 địa điểm tuyệt vời nhất trên thế giới. Bạn đã sẵn sàng bắt đầu chuyến đi du lịch Bà Nà Hills hứa hẹn nhiều bất ngờ chưa?
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