<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Nhận Đặt Phòng</title>
    <style>
        body {
            background: linear-gradient(135deg, #3498db, #e74c3c); /* Gradient từ xanh đến đỏ */
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .confirmation-form {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .confirmation-form h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .confirmation-form label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .confirmation-form input[type="text"], input[type="date"] {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .confirmation-form button {
            background-color: #3498db;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .confirmation-form button:hover {
            background-color: #e74c3c;
        }

        .confirmation-message {
            margin-top: 20px;
            font-size: 16px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="confirmation-form">
        <h1>Xác Nhận Đặt Phòng</h1>
        <form method="post" action="xacnhandatphong_controller.php">
            <label for="tenkhach">Tên khách hàng:</label>
            <input type="text" id="tenkhach" name="tenkhach" required>
            <label for="ngayden">Ngày đến:</label>
            <input type="date" id="ngayden" name="ngayden" required>
            <label for="ngaydi">Ngày đi:</label>
            <input type="date" id="ngaydi" name="ngaydi" required>
            <button type="submit">Xác nhận</button>
        </form>
    </div>
    <div class="confirmation-message">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tenkhach = $_POST["tenkhach"];
            $ngayden = $_POST["ngayden"];
            $ngaydi = $_POST["ngaydi"];

            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "anh";

            $conn = new mysqli($host, $username, $password, $database);

            if ($conn->connect_error) {
                die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
            }

            // Chèn thông tin đặt phòng vào cơ sở dữ liệu
            $sql = "INSERT INTO datphong (tenkhach, ngayden, ngaydi) VALUES ('$tenkhach', '$ngayden', '$ngaydi')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Đặt phòng thành công!";
            } else {
                echo "Có lỗi xảy ra trong quá trình đặt phòng: " . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
