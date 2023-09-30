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

    <div class="cdContainer cdMargin cdBorder cdPadding" style="flex-direction: column;">
        <p class="cdHeading">Tìm mua vé</p>

        <form action="danhSachVe.php" method="post">
            <div class="cdContainer">
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
                        <span class="">Điểm đến</span>
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
                        <input type="number" class="cdInputInput" name="soHanhKhach" required>
                    </div>
                    <div class="cdInputGroup">
                        <span class="cdInputText">Giá vé</span>
                        <input type="number" class="cdInputInput" name="giaVe">
                    </div>
                </div>

                <button type="submit" class="button">Tìm</button>
            </div>
        </form>
    </div>



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