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
    $id = $_REQUEST["id"];
    $db = "anh";
    $table = "chuyendi";
    $conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ");
    $select = "SELECT * FROM $table WHERE id=$id";
    $result_se_hang = mysqli_query($conn, $select);
    $row = mysqli_fetch_object($result_se_hang);

    $id = $row->id;
    $phuongTien = $row->phuongTien;
    $diemKhoiHanh = $row->diemKhoiHanh;
    $diemDen = $row->diemDen;
    $ngayDi = $row->ngayDi;
    $soHanhKhach = $row->soHanhKhach;
    $giaVe = $row->giaVe;
    ?>

    <?php
    $db = "anh";
    $table = "chuyendi";
    $conn = new mysqli("localhost", "root", "", $db);

    $result = $conn->query("SELECT * FROM $table ");

    foreach ($result as $row) {
        $listDiemKhoiHanh[] = $row['diemKhoiHanh'];
        $listDiemDen[] = $row['diemDen'];
    }
    $conn->close();

    $listDiemKhoiHanh = array_unique($listDiemKhoiHanh);
    $listDiemDen = array_unique($listDiemDen); ?>


    <datalist id="diemKhoiHanh">
        <?php foreach ($listDiemKhoiHanh as $diem) { ?>
            <option value="<?php echo $diem; ?>">
                <?php echo $diem; ?>
            </option>
        <?php } ?>
    </datalist>
    <datalist id="diemDen">
        <?php foreach ($listDiemDen as $diem) { ?>
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

    <div class="cdContainer cdBorder cdPadding cdMargin" style="flex-direction: column;">
        <p class="cdHeading">Sửa Chuyến đi</p>

        <form action="controllerSuaChuyenDi.php?id=<?php echo $id ?>" method="post">
            <div class="cdContainer" style="flex-direction: column;">
                <div class="cdRow">
                    <div class="cdInputGroup">
                        <span class="cdInputText">Phương tiện</span>
                        <select name="phuongTien" onchange="selectPhuongTien()" class="cdInputInput">
                            <option value="1" <?php if ($phuongTien == '1') echo ("selected") ?>>Máy bay</option>
                            <option value="2" <?php if ($phuongTien == '2') echo ("selected") ?>>Tàu hoả</option>
                            <option value="3" <?php if ($phuongTien == '3') echo ("selected") ?>>Xe khách</option>
                        </select>
                    </div>
                    <div class="cdInputGroup">
                        <span class="cdInputText">Điểm khởi hành</span>
                        <input type="text" name="diemKhoiHanh" value="<?php echo $diemKhoiHanh ?>" class="cdInputInput" list="diemKhoiHanh" autocomplete="on">
                    </div>
                    <div class="cdInputGroup">
                        <span class="cdInputText">Điểm đến</span>
                        <input type="text" name="diemDen" value="<?php echo $diemDen ?>" class="cdInputInput" list="diemDen" autocomplete="on">
                    </div>
                </div>

                <div class="cdRow">
                    <div class="cdInputGroup">
                        <span class="cdInputText">Ngày đi</span>
                        <input type="date" name="ngayDi" value="<?php echo $ngayDi ?>" class="cdInputInput">
                    </div>
                    <div class="cdInputGroup">
                        <span class="cdInputText">Số hành khách</span>
                        <input type="number" name="soHanhKhach" value="<?php echo $soHanhKhach ?>" class="cdInputInput">
                    </div>
                    <div class="cdInputGroup">
                        <span class="cdInputText">Giá vé</span>
                        <input type="number" name="giaVe" value="<?php echo $giaVe ?>" class="cdInputInput">
                    </div>
                </div>

                <div class="cdRow">
                    <button type="submit" class="cdButton">Lưu chuyến đi</button>
                </div>
            </div>
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