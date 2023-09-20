<?php
if (isset($_POST['ids'])) {
    $ids = $_POST['ids'];

    $db = mysqli_connect("localhost", "root", "", "anh");
    $sql = "DELETE FROM `chuyendi` WHERE id IN (" . implode(",", $ids) . ")";
    mysqli_query($db, $sql);
    mysqli_close($db);
}
header("Location: adminDanhSachChuyenDi.php");
