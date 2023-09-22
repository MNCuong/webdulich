<?php
$phuongTien = isset($_POST["phuongTien"]) ? $_POST["phuongTien"] : "loi";
$diemKhoiHanh = isset($_REQUEST["diemKhoiHanh"]) ? $_REQUEST["diemKhoiHanh"] : "";
$diemDen = isset($_REQUEST["diemDen"]) ? $_REQUEST["diemDen"] : "";
$ngayDi = isset($_REQUEST["ngayDi"]) ? $_REQUEST["ngayDi"] : "";
$soHanhKhach = isset($_REQUEST["soHanhKhach"]) ? $_REQUEST["soHanhKhach"] : "";
$giaVe = isset($_REQUEST["giaVe"]) ? $_REQUEST["giaVe"] : "";

$db = "anh";
$table = "chuyendi";
$conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ");

$sql_add = "INSERT INTO $table (`phuongtien`, `diemKhoiHanh`,`diemDen`, `ngayDi`,`soHanhKhach`, `giaVe`) VALUES ('$phuongTien', '$diemKhoiHanh','$diemDen','$ngayDi','$soHanhKhach','$giaVe')";
mysqli_query($conn, $sql_add);

header("Location: adminDanhSachChuyenDi.php");
