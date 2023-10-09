<?php
$db = "anh";
$table = "chuyendi";
$id = $_REQUEST["id"];
$conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ");
$sql_delete = "DELETE FROM $table WHERE $table.`id` = $id";
mysqli_query($conn, $sql_delete);
header("Location: indexadmin.php?danhmuc=danhsachchuyen.php");
