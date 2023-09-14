<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
                    <td><input type="file" name="anhphong" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Nhập"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
