<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"  />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		a{
			color: black;
			font-size: 16px;
		}
		body{
			background-image: url(https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RW195Si?ver=6dfb);
		}
		.mainlogin{
			box-shadow: 0 8px 8px black;
		}
		input[type="submit"]{
			background-color: rgba(222,189,7,1.00);
		}
		input[type="submit"]:hover{
			opacity: 0.7;
		}
	</style>
</head>
<body>
	<form action="dangnhap_controller.php" method="post">
		<div class="nav">
		<div class="mainlogin"> 
			<div class="wrap">
				<div class="anh">
					<img src="pic/nendangnhap.jpg">
				</div>

				<div class="main_login">
					<p style="font-size: 25px;font-weight: 700;margin-bottom: 0">Đăng nhập hệ thống </p>
					<input type="text" name="username" placeholder="Tên đăng nhập"><br><br>
					<input type="password" name="password" placeholder="Mật khẩu"><br><br>
					<input type="submit" value="Đăng nhập">
					<br>
					<a href="dangky.php">Đăng ký</a>
					<a href="quenmatkhau_form.php">Quên mật khẩu?</a>
				</div>
				

			</div>
			
			<div class="copyright" style="font-size: 15px;text-align: center">Phần mềm 
				<img src="https://th.bing.com/th/id/OIP.c_TM8d_9EYJtmMEwNmZ19AAAAA?w=180&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" style="width: 15px;  ">
				2023 Code bởi Team MNCường
			</div>
		</div>
		
	</div>
	</form>
</body>
</html>