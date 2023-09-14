<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
    /* Form styling */
    body {
        font-family: Arial, sans-serif;
        background: url(https://th.bing.com/th/id/R.879c522d63acf0e33c3be4c33549937b?rik=7UdDaNUaVeLTVg&riu=http%3a%2f%2fwww.czxww.cn%2fmobile%2fpic%2f2022-09%2f13%2f1329091_3f8d51f0-8361-433f-a6ec-950103e267d8.jpg.2&ehk=Pes%2fid5U%2b7jLKMZhmk%2bpugqsR8dxDEeWmij6OqZVTr8%3d&risl=&pid=ImgRaw&r=0);
		background-size: cover;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 24px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 8px 16px black;
		margin-top: 8%;
		
    }
	.container:hover{
		transform: scale(1.01);
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
    }
    input[type="submit"]:hover {
        background-color: #FF7044;
    }
</style>
	

</head>

<body>
    <div class="container">
        <h1>Thêm Phòng</h1>
        <form action="add_phongcontroller.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Giá</td>
                    <td><input type="number" name="price" required></td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td><input type="text" name="description" required></td>
                </tr>
                <tr>
                    <td>Ảnh</td>
                    <td><input type="file"  name="anhphong" required></td>
                </tr>
				<tr>
                    <td>Tình trạng</td>
                    <td><input type="text" name="tinhtrang"  readonly value="Chưa đặt"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Xác nhận"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
