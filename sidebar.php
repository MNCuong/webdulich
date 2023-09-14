<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		.sidebar {
            display: flex;
            width: 18%;
            background-color: #BD383A;
            height: 100%;
            z-index: 2;
            flex-direction: column; /* Đặt chiều sắp xếp là dọc */
            align-items: flex-start; /* Canh chỉnh các phần tử theo bên trái */
            justify-content: flex-start; /* Canh chỉnh các phần tử theo bên trên */
            padding: 20px;
            position: fixed;
            left: 0;
        }
        .xinchao {
            margin-bottom: 20px;
        }
        .menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .menu ul li {
            margin-bottom: 20px;
            display: inline-block;
            width: 100%;
        }
        .menu ul li a {
            text-decoration: none;
            color: white;
            text-decoration: none;
            color: rgb(0, 28, 64) !important;
            border: 1px;
            font-weight: 600;
            box-shadow: none !important;
            border-radius: 8px;
            display: block;
            padding: 16px;
        }
        .menu ul li a:hover {
            background: #ffd43b !important;
            border: rgba(0, 0, 0, 1.00);
        }
        /* CSS cho dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #BD383A;
            min-width: 160px;
            border-radius: 8px;
            z-index: 1;
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #ffd43b;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
		.content{
			background: #333;
				margin: 300px 300px 0 0;
		}
	</style>
</head>

<body>
	<div class="sidebar">
            <div class="xinchao">
                <h2>Xin chào</h2>
            </div>
            <hr width="100%">
            <div class="menu">
                <ul> 
                    <li class="dropdown">
                        <a href="#">Quản lý tài khoản</a>
                        <div class="dropdown-content">
                            <a href="#">Tài khoản admin</a>
                            <a href="#">Tài khoản người dùng</a>
                        </div>
                    </li>
                    <li>
                        <a href="#">Di chuyển</a>
                    </li>
                    <li>
                        <a href="#">Đặt phòng</a>
                    </li>
                    <li>
                        <a href="#">Hoạt động giải trí</a>
                    </li>
                </ul>
            </div>
        </div>
</body>
</html>