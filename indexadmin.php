<?php
session_name('admin');
session_start();
if (!isset($_SESSION['useradmin'])) {
    header('Location: dangnhapadmin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Trang chủ</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
		.sidebar {
			width: 250px;
			background-color: #333;
			color: white;
			position: fixed;
			height: 100%;
			top: 0;
			left: 0;
			padding-top: 20px;
			overflow-y: auto; /* Thêm cuộn cho sidebar nếu nó quá dài */
		}
		.content{
			width: 80%;
			margin-left:20%; 
		}
		

		

		.username {
			font-weight: bold;
			color: #f7f7f8;
		}

		.menu {
			list-style-type: none;
			padding: 0;
		}

		.menu li {
			margin-top: 10px;
		}

		.menu a {
			text-decoration: none;
			color: white;
			display: block;
			padding: 12px;
			width: 88%;
			border-radius: 8px;
			transition: background-color 0.3s;
		}

		.menu a:hover {
			background-color: rgba(50, 140, 46, 0.6);
		}

		.submenu ul li a {
			margin-left: 12px;
			width: 83%;
		}

		.logout-button {
			background-color: rgba(19, 99, 222, 1.00);
			color: white;
			padding: 10px 20px;
			text-decoration: none;
			border: none;
			border-radius: 5px;
			font-weight: bold;
			transition: background-color 0.3s ease-in-out;
			cursor: pointer;
			display: block;
			text-align: center;
			margin-top: 20px;
		}

		.logout-button:hover {
			opacity: 0.7;
		}
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
            width: 20%;
            background-color: #333;
            color: white;
            position: fixed;
            height: 100%;
            top: 0;
            left: 0;
	            padding-top: 20px;
            overflow-y: auto; 
        }

        .sidebar-header {
            text-align: center;
        }

        .logo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .username {
            font-weight: bold;
            color: #f7f7f8;
        }

        .menu {
            list-style-type: none;
            padding: 0;
        }

        .menu li {
            margin-top: 10px;
        }

        .menu a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 12px;
            width: 88%;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .menu a:hover {
            background-color: rgba(50, 140, 46, 0.6);
        }

        .submenu ul li a {
            margin-left: 12px;
            width: 83%;
        }

        .logout-button {
            background-color: rgba(19, 99, 222, 1.00);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .logout-button:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>
<header>
    <h1>
        <?php
        if (isset($_SESSION['useradmin'])) {
            echo "Xin chào " . $_SESSION['useradmin'] . "!<br>";
            echo '<a href="dangxuatadmin_controller.php"><button><i class="fa-solid fa-right-from-bracket fa-bounce" style="color: #f7f7f8; margin-right:4px;"></i>Đăng xuất</button></a>';
        }
        ?>
    </h1>
</header>

<div class="sidebar">
    <div class="sidebar-header">
        <img src="pic/logodaidien.png" alt="Logo" class="logo">
        <p class="username"><?php echo $_SESSION['useradmin']; ?></p>
    </div>
    <ul class="menu">
        <li><a id="menu1" href="indexadmin.php">Quản lý tài khoản</a></li>
        <li><a id="menu2" href="adminDanhSachChuyenDi.php">Quản lý di chuyển</a></li>
        <li><a href="danhsachphongsauadd.php" id="menu3">Quản lý phòng</a></li>
        <li>
            <a href="#" id="hoatdonggiaitri">Hoạt động giải trí</a>
            <ul class="submenu" id="submenu">
                <li><a href="Tabletour.php">Tour</a></li>
                <li><a href="Tablediadiem.php">Điểm tham quan</a></li>
            </ul>
        </li>
    </ul>
    <a href="dangxuatadmin_controller.php" class="logout-button">
        <i class="fa-solid fa-right-from-bracket fa-bounce" style="color: #f7f7f8; margin-right: 4px;"></i> Đăng xuất
    </a>
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
        hoatdonggiaitri.style.background = 'rgba(54,148,235,1.00)';
        submenu.style.display = 'block';
    });

    submenu.addEventListener('mouseleave', function (event) {
        hoatdonggiaitri.style.background = '#333';
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
