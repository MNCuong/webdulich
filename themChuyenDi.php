<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/chuyenDi.css">
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
    $conn->close();

    $diemKhoiHanh = array_unique($diemKhoiHanh);
    $diemDen = array_unique($diemDen); ?>


    <datalist id="diemKhoiHanh">
        <?php foreach ($diemKhoiHanh as $diem) { ?>
            <option value="<?php echo $diem; ?>">
                <?php echo $diem; ?>
            </option>
        <?php } ?>
    </datalist>
    <datalist id="diemDen">
        <?php foreach ($diemDen as $diem) { ?>
            <option value="<?php echo $diem; ?>">
                <?php echo $diem; ?>
            </option>
        <?php } ?>
    </datalist>

    <div class="cdContainer cdMargin">
        <form action="adminDanhSachChuyenDi.php" method="post">
            <button type="submit" class="cdButton">Danh sách chuyến chuyến đi</button>
        </form>
    </div><br>

    <form action="controllerThemChuyenDi.php" method="post">
        <div class="cdContainer cdMargin cdBorder cdPadding" style="flex-direction: column;">
            <p class="cdHeading">Thêm Chuyến đi</p>

            <div class="cdContainer" style="flex-direction: column;">
                <div class="cdRow">
                    <div class="cdInputGroup">
                        <span class="cdInputText">Phương tiện</span>
                        <select name="phuongTien" onchange="selectPhuongTien()" class="cdInputInput">
                            <option value="1">Máy bay</option>
                            <option value="2">Tàu hoả</option>
                            <option value="3">Xe khách</option>
                        </select>
                    </div>

                    <div class="cdInputGroup">
                        <span class="cdInputText">Điểm khởi hành</span>
                        <input type="text" class="cdInputInput" name="diemKhoiHanh" list="diemKhoiHanh" autocomplete="on">
                    </div>
                    <div class="cdInputGroup">
                        <span class="cdInputText">Điểm đến</span>
                        <input type="text" class="cdInputInput" name="diemDen" list="diemDen" autocomplete="on">
                    </div>
                </div>

                <div class="cdRow">
                    <div class="cdInputGroup">
                        <span class="cdInputText">Ngày đi</span>
                        <input type="date" class="cdInputInput" name="ngayDi">
                    </div>
                    <div class="cdInputGroup">
                        <span class="cdInputText">Số hành khách</span>
                        <input type="number" class="cdInputInput" name="soHanhKhach">
                    </div>
                    <div class="cdInputGroup">
                        <span class="cdInputText">Giá vé</span>
                        <input type="number" class="cdInputInput" name="giaVe">
                    </div>
                </div>

                <div class="cdRow">
                    <button type="submit" class="cdButton" onclick="return confirm('Bạn có xác nhận thêm chuyến đi?')">Thêm chuyến đi</button>
                </div>
            </div>
    </form>

    <script>
        function selectPhuongTien() {
            var phuongTien = document.querySelector("select").value;

            var $variable = document.querySelector("#variable");
            $variable.innerHTML = phuongTien;
        }
    </script>
    </div>
</body>

</html>