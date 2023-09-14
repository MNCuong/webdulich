<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* CSS nội bộ cho trang này */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        nav  {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

		

       

        main {
            padding: 20px;
        }

        /* CSS cho menu dọc */
        .sidebar {
			width: 250px;
			background-color: #333;
			color: white;
			position: fixed; /* Đặt thanh sidebar cố định */
			height: 100%;
			top: 0; /* Giữ thanh sidebar ở phía trên */
			left: 0; /* Giữ thanh sidebar ở bên trái */
		}

        .sidebar ul {
            list-style-type: none;
            margin-top: 167px;
        }

        .sidebar ul li {
            margin-top: 10px;
			
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            display: block;
			padding: 12px;
			width: 88%;
			border-radius: 8px;
        }
		.sidebar ul li a:hover{
 			border: 1px solid rgba(226,232,97,1.00);
			background-color: rgba(50, 140, 46, 0.6);
           
        }
		.submenu ul li a{
			margin-left: 12px;
			width: 83%;
		}

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        /* CSS cho bảng */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
		.submenu{
			display: none;
		}
		a[href="dangxuat_controller.php"] button {
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

		a[href="dangxuat_controller.php"] button:hover {
			opacity: 0.7;

		}
    </style>
</head>
<body>
    <header>
        <h1><?php
			if(isset($_SESSION['user'])){ // Nếu đã đăng nhập, hiển thị nút đăng xuất
				echo "Xin chào " . $_SESSION['user'] . "!<br>";
				echo '<a href="dangxuat_controller.php"><button><i class="fa-solid fa-right-from-bracket fa-bounce" style="color: #f7f7f8; margin-right:4px;"></i>Đăng xuất</button></a>';
            }
		?> </h1>
		
        <nav>
            
        </nav>
    </header>
	
    <div class="sidebar" style="height: 100%;">	
		<ul>
        		<li><a id="mnenu1" href="indexadmin.php">Quản lý tài khoản</a></li>
                <li><a id="mnenu2" href="TimChuyenDi.php">Quản lý di chuyển</a></li>
                <li><a href="danhsachphongsauadd.php">Quản lý phòng</a></li>
                <li>
                    <a href="#" id="hoatdonggiaitri">Hoạt động giải trí</a>
                    <div class="submenu" id="submenu">
						<ul>
							<li><a href="#">Tour</a></li>
							<li><a href="#">Điểm tham quan</a></li>
						</ul>
                        
                        
                    </div>
                </li>
		</ul>
    </div>
    <div class="content">
        <?php
		require('./danhsachtaikhoan.php');
		?>
    </div>
	
	
	
	
	 <script>
    const hoatdonggiaitri = document.getElementById('hoatdonggiaitri');
    const submenu = document.getElementById('submenu');

    // Bắt sự kiện di chuột vào "Hoạt động giải trí"
    hoatdonggiaitri.addEventListener('click', function (event) {
        // Hiển thị submenu khi di chuột vào
		 hoatdonggiaitri.style.background = 'rgba(50, 140, 46, 0.6)';
        submenu.style.display = 'block';
    });

    // Bắt sự kiện di chuột ra submenu
    submenu.addEventListener('mouseleave', function (event) {
		hoatdonggiaitri.style.background = 'none';
        // Ẩn submenu khi di chuột ra
        submenu.style.display = 'none';
    });
</script>


 





</body>
</html>







</body>
</html>
