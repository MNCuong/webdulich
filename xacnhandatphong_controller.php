<?php
// Kết nối đến cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
$host = "localhost";
$username = "root";
$password = "";
$database = "anh";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy thông tin đặt phòng từ form
$tenkhach = $_POST["tenkhach"];
$ngayden = $_POST["ngayden"];
$ngaydi = $_POST["ngaydi"];

$id_phong = 3;


try {
    // Thêm thông tin đặt phòng vào bảng datphong
    $sql_insert_datphong = "INSERT INTO datphong (id_phong, tenkhach, ngayden, ngaydi) VALUES ('$id_phong', '$tenkhach', '$ngayden', '$ngaydi')";
    
    if ($conn->query($sql_insert_datphong) === TRUE) {
        // Cập nhật trạng thái phòng thành "Đã đặt" trong bảng phong
        $sql_update_phong = "UPDATE phong SET trangthai = 'Đã đặt' WHERE id = '$id_phong'";
        
        
    } else {
        throw new Exception("Có lỗi xảy ra khi thêm thông tin đặt phòng: " . $conn->error);
    }
} catch (Exception $e) {
    
    echo "Có lỗi xảy ra: " . $e->getMessage();
}
header("Location:index.php");
// Đóng kết nối
$conn->close();
?>
