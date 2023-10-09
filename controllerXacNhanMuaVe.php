<?php
$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : "loi";
$soHanhKhachMua = isset($_POST["soHanhKhach"]) ? $_POST["soHanhKhach"] : "loi";
echo $id;
echo $soHanhKhachMua;

$db = "anh";
$table = "chuyendi";
$conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ");
$select = "SELECT * FROM $table WHERE id=$id";
$result_se_hang = mysqli_query($conn, $select);
$row = mysqli_fetch_object($result_se_hang);

$soHanhKhach = $row->soHanhKhach;

$result = $soHanhKhach - $soHanhKhachMua;
echo $soHanhKhach;
echo $result;

$sql_update = "UPDATE $table SET `soHanhKhach`=$result WHERE `id`=$id";
if ($conn->query($sql_update) === TRUE) {
    header("Location:index_muaVe.php");
} else {
    echo "Lỗi trong quá trình cập nhật: " . $conn->error;
}
$conn->close();
