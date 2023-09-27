<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/css/chuyenDi.css">


</head>

<body>
    <?php
    $db = "anh";
    $table = "chuyendi";
    $conn = new mysqli("localhost", "root", "", $db);

    $result = $conn->query("SELECT * FROM $table ");

    foreach ($result as $row) {
        $diemKhoiHanh[] = $row['diemKhoiHanh'];
        $diemDen[] = $row['diemDen'];
    }
    $conn->close(); ?>

    <datalist id="diemKhoiHanh">
        <?php foreach ($diemKhoiHanh as $diem) { ?>
            <option value="<?php echo $diem; ?>"><?php echo $diem; ?></option>
        <?php } ?>
    </datalist>
    <datalist id="diemDen">
        <?php foreach ($diemDen as $diem) { ?>
            <option value="<?php echo $diem; ?>"><?php echo $diem; ?></option>
        <?php } ?>
    </datalist>


    <div class="cdContainer"></div>
    <p>Tìm mua vé</p>

    <form action="danhSachVe.php" method="post">
        <span class="">Phương tiện</span>
        <select name="phuongTien" onchange="selectPhuongTien()" class="">
            <option value="1">Máy bay</option>
            <option value="2">Tàu hoả</option>
            <option value="3">Xe khách</option>
        </select>
        <span class="">Điểm khởi hành</span>
        <input type="text" class="" name="diemKhoiHanh" list="diemKhoiHanh" autocomplete="on">
        <span class="">Điểm đến</span>
        <input type="text" class="" name="diemDen" list="diemDen" autocomplete="on">

        <span class="">Ngày đi</span>
        <input type="date" class="" name="ngayDi">
        <span class="">Số hành khách</span>
        <input type="number" class="" name="soHanhKhach" required>
        <span class="">Giá vé</span>
        <input type="number" class="" name="giaVe">

        <button type="submit" class="button">Tìm</button>
    </form>
    <script>
        function selectPhuongTien() {
            // Lấy giá trị đã chọn trong dropdown button
            var phuongTien = document.querySelector("select").value;

            // Thay đổi giá trị của biến
            var $variable = document.querySelector("#variable");
            $variable.innerHTML = phuongTien;
        }
    </script>
</body>

</html>