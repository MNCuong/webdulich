	<?php include './header.php';


if (!isset($_SESSION['userclient'])) {
    header('Location: dangnhapclient.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng Khách Sạn</title>
	<link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
		
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
			
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin-bottom: 20px;
			margin-top: 20px;
        }
		.container img{
			border-radius: 10px 10px 0 0;

		}

        .room {
            flex-basis: calc(25% - 20px);
            background-color: #fff;
            border-radius: 10px;
           	border: 1px solid rgba(209,207,207,1.00);
			margin-bottom: inherit;
			float: left;
			
            
        }

        .room:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }

        .room img {
            width: 100%;
            height: auto;
        }

        .room-description {
            padding: 15px;
        }

        .room-description h2 {
            font-size: 18px;
            margin: 0;
        }

        .room-description p {
            font-size: 14px;
            margin: 10px 0;
        }

        .room-button {
            text-align: center;
            padding: 10px;
        }

        .room-button button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .room-button button:hover {
            background-color: #e74c3c;
        }
		.slide{
			height: 300px;
			display: flex;
		}
		.carousel-item{
			height: 300px;
			background-size: contain;
		}
		.container-fluid{
			margin: 0;
			padding: 0;
			z-index: -2;
		}
		
    </style>
</head>
	
<body>
	
<?php	
		$db="anh";
		$conn=new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");//tạo kết nối với server
		
				$selectvip = "SELECT * FROM `anhhh` WHERE `loaiphong`='VIP'";
				$result = mysqli_query($conn, $selectvip);
				$stt_hang=0;
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
	$tong_bg = mysqli_num_rows(mysqli_query($conn, $selectvip));
	
	$selectbd = "SELECT * FROM `anhhh` WHERE `loaiphong`='Bình dân'";
				$bd = mysqli_query($conn, $selectbd);
				$stt_hangbd=0;
			while($row = mysqli_fetch_object($bd))
			{
			
			$stt_hangbd++;
			$id_hangbd[$stt_hangbd]=$row->id_phong;
			$price0bd[$stt_hangbd]=$row->price;
			$description0bd[$stt_hangbd]=$row->description;
			$anhphongbd[$stt_hangbd]=$row->anhphong;
			$tinhtrangbd[$stt_hangbd]=$row->tinhtrang;
			$diadiembd[$stt_hangbd]=$row->diadiem;	
			$loaiphongbd[$stt_hangbd]=$row->loaiphong;	
		}
	$tong_bgbd = mysqli_num_rows(mysqli_query($conn, $selectbd));
	
	
	mysqli_close($conn);

	?>
	
	
	
	
	
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
	<div class="container">
	<h2>Danh sách phòng VIP</h2></div>
    <div class="container">
		 <?php
			  for ($i = 1; $i <= $tong_bg ; $i++)
			  {
				 
			?>
        <div class="room"  >
           <img src="images/<?php echo $anhphong[$i]?>" style="height: 200px;" alt="Anh phong" >
            <div class="room-description">
                 <h2>Mô tả phòng <?php echo $i ?></h2>
					<p><?php echo $description0[$i] ?></p>
					<p><?php echo $price0[$i] ?></p>
					<p><strong><?php echo $diadiem[$i] ?></strong></p>
					<?php
					if ($tinhtrang[$i] == "Đã đặt") {
						echo '<p style="color: red;">Đã đặt</p>';
					} else {
						echo '<p style="color: green;">Còn trống</p>';
					}
					?>
						</div>
						<div class="room-button">
							<?php
							if ($tinhtrang[$i] == "Đã đặt") {
								echo '<button onclick="alert(\'Phòng này đã được đặt. Vui lòng chọn phòng khác.\')">Đặt phòng</button>';
							} else {
								echo '<a href="chitietphong.php?id_phong=' . $id_hang[$i] . '"><button>Đặt phòng</button></a>';
							}
							?>
						</div>
					</div>
					 <?php  
				  }
				  ?>
		</div>
	<div class="container">
		<h2>Danh sách phòng bình dân</h2>
	</div>
	<div class="container">
		 <?php
			  for ($i = 1; $i <= $tong_bgbd ; $i++)
			  {
				 
			?>
        <div class="room"  >
           <img src="images/<?php echo $anhphongbd[$i]?>" style="height: 200px;" alt="Anh phong" >
            <div class="room-description">
                 <h2>Mô tả phòng <?php echo $i ?></h2>
					<p><?php echo $description0bd[$i] ?></p>
					<p><?php echo $price0bd[$i] ?></p>
					<p><strong><?php echo $diadiembd[$i] ?></strong></p>
					<?php
					if ($tinhtrangbd[$i] == "Đã đặt") {
						echo '<p style="color: red;">Đã đặt</p>';
					} else {
						echo '<p style="color: green;">Còn trống</p>';
					}
					?>
						</div>
						<div class="room-button">
							<?php
							if ($tinhtrangbd[$i] == "Đã đặt") {
								echo '<button onclick="alert(\'Phòng này đã được đặt. Vui lòng chọn phòng khác.\')">Đặt phòng</button>';
							} else {
								echo '<a href="chitietphong.php?id_phong=' . $id_hangbd[$i] . '"><button>Đặt phòng</button></a>';
							}
							?>
						</div>
					</div>
					 <?php  
				  }
				  ?>
		</div>
     <?php include './footer.php'?>  
</body>
	
</html>
