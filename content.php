<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family:Arial, "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
			box-sizing: border-box;
			background-color: #f0f0f0
		}
		
		.content1{
			padding-top: 127px;
			display: flex;
			width: 100%;
			margin: 0 auto;
            min-height: calc(300px; - 100px);/
            
		}
		.child1_content {
			width: 100%;
			height: 300px;
			display: flex;
			background-color: linear-gradient(90deg, rgba(2,0,36,1), rgba(241,242,245,1) , rgba(0,212,255,1));
			justify-content: center;
    align-items: center;

			
		}
		.child1_content img{
			width: 80%;
			margin-left:50%;
			transform: translateX(-50%);
			height: 300px;
		}
		.content2{
			background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			padding: 8px;
			display: flex;
			width: 80%;
			margin: 0 auto;
		}
		.content21{
			
			margin-top: 52px;
			width: 100%;
		}
		.button-container{
			height: 48px;
			
		}
		.button-container button{
			border-radius: 16px;
			padding: 8px;
			border: 1px;
			font-weight: 700;
			background-color:#C8CCCE; 
			background-color:#00aaff; 
			
		}
		.button-container button:hover{
			cursor: pointer;
			opacity: 0.7;
		}
		.image-container img{
			
			height: 200px;
			margin-right: 8px;
			border-radius: 6px;
		}
		.content21 a>img{
			width: 100%;
			height: 150px;
			
			border-radius: 6px;
		}
		h2>strong{
			display: inline;
			max-width: 100%;
		}
		.image-description{
			margin-top: 50px;
			display: flex;
		}
		.image a>img{
			height: 200px;
			width: 600px;
			z-index: -1;
		}
		
		.description button{
			padding: 8px;
			margin-right: 12px;
			border-radius: 8px;
			border: 1px solid ;
			background-color: #FF0000;
			font-weight: 700;
			color: rgba(255,255,255,1.00);
		}.description button:hover{
			cursor: pointer;
			opacity: 0.7;
		}
		.khoi button{
			padding: 8px;
			margin-right: 12px;
			border-radius: 8px;
			border: 1px solid ;
			background-color: #FF0000;
			font-weight: 700;
			color: rgba(255,255,255,1.00);
		}.khoi button:hover{
			cursor: pointer;
			opacity: 0.7;
		}
		.khoi img{
			
			width: calc(90%);
		}
		
		.slide{
			height: 300px;
		}
		.carousel-item{
			height: 300px;
			background-size: contain;
		}
		.container-fluid{
			margin: 0;
			padding: 0;
			margin-top: 12px;
			
		}
		.head{
			margin-top:100; 
		}
		
		
	
	</style>
</head>
<body>
	<div class="container-fluid head">
		
		<div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA11N9kp.img"
                        alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item active">
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA11N9kp.img"
                        alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item active">
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA11N9kp.img"
                        alt="New York" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
	</div>
	<div class="container-fluid">
	<div class="content2">
		
			<div class="content21">
				<div class="button-container">
					<button id="trongnuoc-button">Trong nước</button>
					<button id="quocte-button">Quốc tế</button>
			</div>
			<div class="image-container" id="image-container">
 <!-- Ảnh sẽ được hiển thị ở đây sau khi bấm nút -->

			</div>
		</div>
	</div>
		<br>
	<div class="content2">
		<div class="content21">
        <h2><strong>Top phòng tốt nhất</strong></h2>
        <div class="image-description">
            <div class="image">
                <a href="">
                    <img src="https://th.bing.com/th/id/OIP.FuxFAIWO489wCFrCAnX_ewHaEK?w=303&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
                </a>
            </div>
            <div class="description">
                <p>Đây là mô tả của hình ảnh. Bạn có thể thêm một số văn bản ở đây để mô tả hình ảnh.</p>
				<a href="danhsachphongks.php"><button>Đặt phòng</button></a>
            </div>
        </div>
			<div class="image-description">
            <div class="image">
                <a href="danhsachphongks.php">
                    <img src="https://th.bing.com/th/id/OIP.s1dDG8gYZBkT0Lk4zER6TwHaE7?w=260&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
                </a>
            </div>
            <div class="description">
                <p>Đây là mô tả của hình ảnh. Bạn có thể thêm một số văn bản ở đây để mô tả hình ảnh.</p>
				<a href="danhsachphongks.php"><button>Đặt phòng</button></a>
            </div>
        </div>
			<div class="image-description">
            <div class="image">
                <a href="">
                    <img src="https://th.bing.com/th/id/OIP.4Ry6UELx2z7s1MokYdLdtAHaE8?w=251&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
                </a>
            </div>
            <div class="description">
                <p>Đây là mô tả của hình ảnh. Bạn có thể thêm một số văn bản ở đây để mô tả hình ảnh.</p>
				<a href="danhsachphongks.php"><button>Đặt phòng</button></a>
            </div>
        </div>
			<div class="image-description">
            <div class="image">
                <a href="">
                    <img src="https://th.bing.com/th/id/OIP.wj3rd_IDTtw758TqJnfnlgHaEp?w=266&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
                </a>
            </div>
            <div class="description">
                <p>Đây là mô tả của hình ảnh. Bạn có thể thêm một số văn bản ở đây để mô tả hình ảnh.</p>
				<a href="danhsachphongks.php"><button>Đặt phòng</button></a>
            </div>
        </div>
    </div>
	</div>
		<br>

	<div class="content">
		<h2 align="center" ><strong>Đặt phòng ngay</strong></h2>
	</div>
		<br>

	<div class="content2" >
		
		<div class="khoi" >
				 <img src="pic/OIP (1).jpg" alt="Card image">
				 <div class="card-body">
					<h4 class="card-title">Hà Nội</h4>
					<p class="card-text">Some example text.</p>
					
					 <a href=""><button>Đặt phòng</button></a>
				 </div>
		</div>
		<div class="khoi" >
				 <img src="pic/OIP (1).jpg" alt="Card image">
				 <div class="card-body">
					<h4 class="card-title">Đà Nẵng</h4>
					<p class="card-text">Some example text.</p>
					
					 <a href=""><button>Đặt phòng</button></a>
				 </div>
		</div>
		<div class="khoi" >
				 <img src="pic/OIP (1).jpg" alt="Card image">
				 <div class="card-body">
					<h4 class="card-title">Thành phố Hồ Chí Minh</h4>
					<p class="card-text">Some example text.</p>
					
					 <a href=""><button>Đặt phòng</button></a>
				 </div>
		</div>
	
	
	</div>
	<br>
	<!--script content2 fisrt-->
	<script>
		// JavaScript để xử lý sự kiện click
		const trongNuocButton = document.getElementById("trongnuoc-button");
		const quocTeButton = document.getElementById("quocte-button");
		const imageContainer = document.getElementById("image-container");
		trongNuocButton.addEventListener("click", function () {
			// Xóa màu nền của nút Trong nước (nếu có)
			quocTeButton.style.backgroundColor = "#C8CCCE";

			// Thay đổi màu nền của nút Quốc tế
			trongNuocButton.style.backgroundColor = "#00aaff";


			const images = imageContainer.querySelectorAll("img");
			for (let i = 0; i < images.length; i++) {
				images[i].style.display = "none";
			}


			const img4 = document.createElement("img");
			img4.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/e75b05f4-bd30-3060-9e83-1a49acbfeed0?tr=w-256";
			const img5 = document.createElement("img");
			img5.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/e75b05f4-bd30-3060-9e83-1a49acbfeed0?tr=w-256";
			const img6 = document.createElement("img");
			img6.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/e75b05f4-bd30-3060-9e83-1a49acbfeed0?tr=w-256";
			const img7 = document.createElement("img");
			img7.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/e75b05f4-bd30-3060-9e83-1a49acbfeed0?tr=w-256";


			imageContainer.appendChild(img4);
			imageContainer.appendChild(img5);
			imageContainer.appendChild(img6);
			imageContainer.appendChild(img7);

		});
		quocTeButton.addEventListener("click", function () {
			// Xóa màu nền của nút Trong nước (nếu có)
			trongNuocButton.style.backgroundColor = "#C8CCCE";

			// Thay đổi màu nền của nút Quốc tế
			quocTeButton.style.backgroundColor = "#00aaff";

			// Xóa tất cả các ảnh hiện tại trong container (trừ ảnh Trong nước)
			const images = imageContainer.querySelectorAll("img");
			for (let i = 0; i < images.length; i++) {
				images[i].style.display = "none";
			}

			// Hiển thị loạt ảnh Quốc tế
			// Thêm các dòng sau để hiển thị ảnh Quốc tế
			const img1 = document.createElement("img");
			img1.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/3478502c-cd50-34b3-9eb8-cb9dea19db5a?tr=w-256";
			const img2 = document.createElement("img");
			img2.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/3478502c-cd50-34b3-9eb8-cb9dea19db5a?tr=w-256";
			const img3 = document.createElement("img");
			img3.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/3478502c-cd50-34b3-9eb8-cb9dea19db5a?tr=w-256";

			imageContainer.appendChild(img1);
			imageContainer.appendChild(img2);
			imageContainer.appendChild(img3);
		});
		const img4 = document.createElement("img");
			img4.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/e75b05f4-bd30-3060-9e83-1a49acbfeed0?tr=w-256";
			const img5 = document.createElement("img");
			img5.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/e75b05f4-bd30-3060-9e83-1a49acbfeed0?tr=w-256";
			const img6 = document.createElement("img");
			img6.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/e75b05f4-bd30-3060-9e83-1a49acbfeed0?tr=w-256";
			const img7 = document.createElement("img");
			img7.src = "https://ik.imagekit.io/tvlk/mchitm/imageResource/template/304/vi_VN/2023/08/25/e75b05f4-bd30-3060-9e83-1a49acbfeed0?tr=w-256";


			imageContainer.appendChild(img4);
			imageContainer.appendChild(img5);
			imageContainer.appendChild(img6);
			imageContainer.appendChild(img7);
	</script>
	
	
	</div>
	
	
	
</body>
</html>
