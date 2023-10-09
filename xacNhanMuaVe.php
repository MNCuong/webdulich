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
    $conn = mysqli_connect("localhost", "root", "", $db);

    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $phuongTien = $row['phuongTien'];
        $diemKhoiHanh = $row['diemKhoiHanh'];
        $diemDen = $row['diemDen'];
        $ngayDi = $row['ngayDi'];
        $soHanhKhach = $row['soHanhKhach'];
        $giaVe = $row['giaVe'];
    } else {
        echo "Không tìm thấy dữ liệu";
    }

    mysqli_close($conn);
    ?>

    <div class="cdContainer cdBorder cdPadding cdMargin" style="flex-direction: column;">
        <form action="controllerXacNhanMuaVe.php?id=<?php echo $id ?>" method="post">
            <div class="cdRow">
                <div class="cdInputGroup">
                    <span class="cdInputText">Phương tiện</span>
                    <?php
                    switch ($phuongTien) {
                        case '1':
                            $phuongTien = "Máy bay";
                            break;
                        case '2':
                            $phuongTien = "Tàu hoả";
                            break;
                        case '3':
                            $phuongTien = "Xe khách";
                            break;
                        default:
                            $phuongTien = "Lỗi";
                            break;
                    } ?>
                    <input type="text" class="cdInputInput" name="phuongTien" value="<?php echo $phuongTien ?>" disabled>
                </div>
                <div class="cdInputGroup">
                    <span class="cdInputText">Điểm khởi hành</span>
                    <input type="text" class="cdInputInput" name="diemKhoiHanh" value="<?php echo $diemKhoiHanh ?>" disabled>
                </div>
                <div class="cdInputGroup">
                    <span class="cdInputText">Điểm đến</span>
                    <input type="text" class="cdInputInput" name="diemDen" value="<?php echo $diemDen ?>" disabled>
                </div>
            </div>

            <div class="cdRow">
                <div class="cdInputGroup">
                    <span class="cdInputText">Ngày đi</span>
                    <input type="date" class="cdInputInput" name="ngayDi" value="<?php echo $ngayDi ?>" disabled>
                </div>
                <div class="cdInputGroup">
                    <span class="cdInputText">Số hành khách</span>
                    <input type="number" class="cdInputInput" name="soHanhKhach" min="1" id="soHanhKhach" required>
                </div>
                <div class="cdInputGroup ">
                    <span class="cdInputText">Giá vé/người</span>
                    <input type="number" class="cdInputInput" name="giaVe" id="giaVe" value="<?php echo $giaVe ?>" disabled>
                </div>
            </div>
            <div class="cdInputGroup">
                <span class="cdInputText">Tổng thanh toán</span>
                <input type="number" class="cdInputInput" name="tongThanhToan" id="tongThanhToan" disabled>
            </div>

            <div class="cdRow cdCenter">
                <button type="submit" class="cdButton cdMargin" onclick="return confirm('Bạn có xác nhận mua vé?')">Xác nhận mua vé</button>
            </div>
        </form>
    </div>

    <script>
        const soHanhKhach = document.getElementById("soHanhKhach");
        const giaVe = document.getElementById("giaVe");
        const tongThanhToan = document.getElementById("tongThanhToan");

        soHanhKhach.addEventListener("input", function() {
            tongThanhToan.value = (soHanhKhach.value * giaVe.value);
        });
    </script>

</body>

</html>