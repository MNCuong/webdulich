<?php
session_name('client');
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "anh";

$conn = new mysqli($host, $username, $password, $database) or die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
$phongId = $_GET["id_phong"];

$tenkhach = $_POST["tenkhach"];
$ngayden = $_POST["ngayden"];
$ngaydi = $_POST["ngaydi"];
$diadiem=$_GET['diadiem'];
$username = $_SESSION['userclient'];

try {
    $check_phong = "SELECT * FROM anhhh WHERE id = '$phongId' AND tinhtrang = 'Còn trống'";
    $result = $conn->query($check_phong);
    $sql_insert_datphong = "INSERT INTO datphong (id_phong, username, tenkhach, ngayden, ngaydi, `diadiem`) VALUES ('$phongId','$username', '$tenkhach', '$ngayden', '$ngaydi','$diadiem')";
    if ($conn->query($sql_insert_datphong) === TRUE) {
        $sql_update_phong = "UPDATE anhhh SET tinhtrang = 'Đã đặt' WHERE id_phong = '$phongId'";
        if ($conn->query($sql_update_phong) === TRUE) {
            header("Location: index.php");
        } 
	}
} catch (Exception $e) {
    echo "Có lỗi xảy ra: " . $e->getMessage();
}

$conn->close();
?>

