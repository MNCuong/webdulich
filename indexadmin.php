<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
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
            position: fixed;
            height: 100%;
            padding-top: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
			
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
           
        }
		.submenu ul li a{
			margin-left: 12px;
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
    </style>
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
        <nav>
            
        </nav>
    </header>
    <div class="sidebar">
		<ul>
        		<li><a href="#">Quản lý tài khoản</a></li>
                <li><a href="#">Di chuyển</a></li>
                <li><a href="#">Đặt phòng</a></li>
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
        <h2>Dashboard</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>jane@example.com</td>
            </tr>
        </table>
    </div>
	
	
	
	
	 <script>
    const hoatdonggiaitri = document.getElementById('hoatdonggiaitri');
    const submenu = document.getElementById('submenu');

    // Bắt sự kiện di chuột vào "Hoạt động giải trí"
    hoatdonggiaitri.addEventListener('mouseenter', function (event) {
        // Hiển thị submenu khi di chuột vào
        submenu.style.display = 'block';
    });

    // Bắt sự kiện di chuột ra submenu
    submenu.addEventListener('mouseleave', function (event) {
        // Ẩn submenu khi di chuột ra
        submenu.style.display = 'none';
    });
</script>







    </script>
</body>
</html>







</body>
</html>
