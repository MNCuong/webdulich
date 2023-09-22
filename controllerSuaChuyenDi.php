<?php
$id = $_REQUEST["id"];
$phuongTien = isset($_REQUEST["phuongTien"]) ? $_REQUEST["phuongTien"] : "";
$diemKhoiHanh = isset($_REQUEST["diemKhoiHanh"]) ? $_REQUEST["diemKhoiHanh"] : "";
$diemDen = isset($_REQUEST["diemDen"]) ? $_REQUEST["diemDen"] : "";
$ngayDi = isset($_REQUEST["ngayDi"]) ? $_REQUEST["ngayDi"] : "";
$soHanhKhach = isset($_REQUEST["soHanhKhach"]) ? $_REQUEST["soHanhKhach"] : "";
$giaVe = isset($_REQUEST["giaVe"]) ? $_REQUEST["giaVe"] : "";

$db = "anh";
$table = "chuyenDi";
$conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ"); //tạo kết nối với server
$sql_update = "UPDATE $table SET 
`phuongTien`='$phuongTien', `diemKhoiHanh`='$diemKhoiHanh',
`diemDen`='$diemDen', `ngayDi`='$ngayDi',
`soHanhKhach`='$soHanhKhach', `giaVe`='$giaVe'
WHERE `id`=$id";

if ($conn->query($sql_update) === TRUE) {
    header("Location: adminDanhSachChuyenDi.php");
} else {
    echo "Lỗi trong quá trình cập nhật: " . $conn->error;
}
$conn->close();
