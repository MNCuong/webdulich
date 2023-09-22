<?php 
	session_name('admin');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Trang chủ</title>
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
  
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



       
        .sidebar {
			width: 250px;
			background-color: #333;
			color: white;
			position: fixed; 
			height: 100%;
			top: 0; 
			left: 0; 
		}

        .sidebar .ulfisrt {
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
			opacity: 0.8;
           
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
		a[href="dangxuatadmin_controller.php"] button {
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

		a[href="dangxuatadmin_controller.php"] button:hover {
			opacity: 0.7;

		}
    </style>
</head>
<body>
    <header>
        <h1><?php
			if(isset($_SESSION['useradmin'])){
				echo "Xin chào " . $_SESSION['useradmin'] . "!<br>";
				echo '<a href="dangxuatadmin_controller.php"><button><i class="fa-solid fa-right-from-bracket fa-bounce" style="color: #f7f7f8; margin-right:4px;"></i>Đăng xuất</button></a>';
            }
		?> </h1>
		
        
    </header>
	
    <div class="sidebar" style="height: 100%;">	
		<ul class="ulfisrt" >
        		<li><a id="menu1" href="indexadmin.php" >Quản lý tài khoản</a></li>
                <li><a id="menu2" href="adminDanhSachChuyenDi.php">Quản lý di chuyển</a></li>
                <li><a href="danhsachphongsauadd.php"id="menu3">Quản lý phòng</a></li>
                <li>
                    <a href="#" id="hoatdonggiaitri">Hoạt động giải trí</a>
                    <div class="submenu" id="submenu">
						<ul>
							<li><a href="Tabletour.php">Tour</a></li>
							<li><a href="Tablediadiem.php">Điểm tham quan</a></li>
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
    const menu1 = document.getElementById('menu1');
    const menu2 = document.getElementById('menu2');
    const menu3 = document.getElementById('menu3');
    const submenu = document.getElementById('submenu');

    hoatdonggiaitri.addEventListener('click', function (event) {
		 hoatdonggiaitri.style.background = 'rgba(50, 140, 46, 0.6)';
        submenu.style.display = 'block';
    });

    submenu.addEventListener('mouseleave', function (event) {
		hoatdonggiaitri.style.background = '#FF5733';
        submenu.style.display = 'none';
    });
		 
	

    menu1.addEventListener('click', function (event) {
		menu1.style.background = 'none';
      
    });
		  menu2.addEventListener('click', function (event) {
		menu2.style.background = 'none';
      
    });
		  menu3.addEventListener('click', function (event) {
		menu3.style.background = 'none';
      
    });
</script>


 





</body>
</html>







</body>
</html>
