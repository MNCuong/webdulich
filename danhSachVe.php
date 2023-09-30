<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/chuyenDi.css">

</head>

<body>
    <!-- <?php include './header.php'; ?> -->

    <div class="cdContainer cdMarginTop cdMargin" style="flex-direction: column;">
        <div class="cdRow" style="justify-content: start;">
            <a href="index_muaVe.php" class="cdButton">Tìm vé khác</a>
        </div>
        <p class="cdHeading">Danh sách vé</p>
    </div>

    <?php
    $qdiemKhoiHanh = $_REQUEST['diemKhoiHanh'];
    $qdiemDen = $_REQUEST['diemDen'];
    $qngayDi = $_REQUEST['ngayDi'];
    $qgiaVe = $_REQUEST['giaVe'];
    ?>

    <?php
    $qsoHanhKhach = $_REQUEST["soHanhKhach"];
    $qphuongTien = $_REQUEST['phuongTien'];

    $sobg = 5;
    $db = "anh";
    $table = "chuyendi";
    $conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ");
    $current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

    $offset = ($current_page - 1) * $sobg;

    $select = "SELECT * FROM $table 
        WHERE soHanhKhach >= $qsoHanhKhach AND phuongTien = $qphuongTien AND diemKhoiHanh LIKE '%$qdiemKhoiHanh%' 
    LIMIT $offset, $sobg";
    $tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $table 
        WHERE soHanhKhach >= $qsoHanhKhach AND phuongTien = $qphuongTien AND diemKhoiHanh LIKE '%$qdiemKhoiHanh%'"));

    $result = mysqli_query($conn, $select);
    $stt_hang = ($current_page - 1) * $sobg;
    while ($row = mysqli_fetch_object($result)) {
        $stt_hang++;
        $id[$stt_hang] = $row->id;
        $diemKhoiHanh[$stt_hang] = $row->diemKhoiHanh;
        $diemDen[$stt_hang] = $row->diemDen;
        $ngayDi[$stt_hang] = $row->ngayDi;
        $soHanhKhach[$stt_hang] = $row->soHanhKhach;
        $giaVe[$stt_hang] = $row->giaVe;
    }

    $soluongtrang = ceil($tong_bg / $sobg);
    mysqli_close($conn); ?>


    <?php
    for ($i = ($current_page - 1) * $sobg + 1; $i <= ($current_page - 1) * $sobg + $sobg; $i++) {
        if ($i > $tong_bg) {
            break;
        }
    ?>
        <div class="cdContainer cdBorder cdPadding cdMargin" style="flex-direction: column;">
            <div class="cdRow">
                <div class="cdInputGroup">
                    <span class="cdInputText">Phương tiện</span>
                    <?php
                    switch ($qphuongTien) {
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
                    <input type="text" class="cdInputInput" name="diemKhoiHanh" value="<?php echo $diemKhoiHanh[$i] ?>" disabled>
                </div>
                <div class="cdInputGroup">
                    <span class="cdInputText">Điểm đến</span>
                    <input type="text" class="cdInputInput" name="diemDen" value="<?php echo $diemDen[$i] ?>" disabled>
                </div>
            </div>

            <div class="cdRow">
                <div class="cdInputGroup">
                    <span class="cdInputText">Ngày đi</span>
                    <input type="date" class="cdInputInput" name="ngayDi" value="<?php echo $ngayDi[$i] ?>" disabled>
                </div>
                <div class="cdInputGroup">
                    <span class="cdInputText">Số hành khách</span>
                    <input type="number" class="cdInputInput" name="soHanhKhach" value="<?php echo $qsoHanhKhach ?>" disabled>
                </div>
                <div class="cdInputGroup ">
                    <span class="cdInputText">Giá vé</span>
                    <input type="number" class="cdInputInput" name="giaVe" value="<?php echo ($qsoHanhKhach * $giaVe[$i] / $soHanhKhach[$i]) ?>" disabled>
                </div>
            </div>

            <div class="cdRow cdCenter">
                <button type="submit" class="cdButton">Mua vé</button>
            </div>
        </div>
    <?php } ?>

    </tbody>
    </table>
    <ul>
        <?php
        for ($i = 1; $i <= $soluongtrang; $i++) {
            echo "<li><a href='danhSachVe.php?page=$i'>$i</a></li> ";
        }
        ?>
    </ul>

    <?php include './footer.php'; ?>


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