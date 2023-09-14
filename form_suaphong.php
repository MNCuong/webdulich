<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sửa phòng</title>

	<?php
			$id_hang0=$_REQUEST["id"];
			$db="anh";
			$conn=new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");//tạo kết nối với server
			$select_hangxs="Select * from `anhhh` where id=$id_hang0";
			$result_se_hang=mysqli_query($conn,$select_hangxs);
			$row=mysqli_fetch_object($result_se_hang);
				$id_hang0=$row->id;
				$price=$row->price;
				$description=$row->description;
				

	?>
<style>
        /* Form styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
        }
        .container:hover {
            transform: scale(1.02); /* Slightly zoom in on hover */
        }
        h1 {
            text-align: center;
            color: #FF5733;
        }
        table {
            width: 100%;
        }
        table tr {
            text-align: left;
        }
        table tr td {
            padding: 10px;
        }
        input[type="number"],
        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #FF5733;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        input[type="submit"]:hover {
            background-color: #FF7044;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sửa Phòng</h1>
        <form action="sua_phongcontroller.php?id=<?php echo $id_hang0?>" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Giá</td>
                    <td><input type="number" name="price" value="<?php echo $price?>"  ></td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td><input type="text" name="description"  value="<?php echo $description?>" ></td>
                </tr>
                
				<tr>
                    <td>Ảnh</td>
                    <td><input type="file" name="anhphongmoi" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Lưu Thay Đổi"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>