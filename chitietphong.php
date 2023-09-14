<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Phòng</title>
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

        .room-container {
            display: flex;
            flex-direction: row;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .room-details {
            flex: 1;
            padding-right: 20px;
        }

        .room-details h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .room-details img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border: 5px solid #fff;
            border-radius: 5px;
        }

        .room-details p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .room-price {
            flex: 1;
            padding-left: 20px;
        }

        .room-price p {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .book-button {
            margin-top: 10px;
        }

        .book-button button {
            background-color: #3498db;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .book-button button:hover {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="room-container">
        <div class="room-details">
            <h1>Phòng Đẹp và Rẻ</h1>
            <img src="pic/OIP (1).jpg" alt="Ảnh phòng">
            <p>Đây là mô tả chi tiết về phòng của chúng tôi...</p>
        </div>
        <div class="room-price">
            <p>Giá phòng: $100/ngày</p>
            <div class="book-button">
              <a href="xacnhandatphong.php"><button>Đặt phòng</button></a>  
            </div>
        </div>
    </div>
</body>
</html>
