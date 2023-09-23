<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- <?php include './header.php'; ?> -->
    <div class="container" style="margin-top: 100px;">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg/1200px-Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg/1200px-Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg/1200px-Vietnam_Airlines_Boeing_787-9_VN-A869_SGN_10022017.jpg" alt="New York" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <div class="container" style="padding-top:  50px;">
        <div class="row text-uppercase text-center fs-1">
            <p>Danh sách vé</p>
        </div>
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
        <div class="container marginTop" style="border-style: solid; border-width: 1px; border-radius: 10px;">
            <div class="row">
                <div class="col">
                    <span class="input-group-text">Phương tiện</span>
                    <select name="phuongTien" onchange="selectPhuongTien()" class="form-control" disabled>
                        <option value="1" <?php if ($qphuongTien == '1') echo ("selected") ?>>Máy bay</option>
                        <option value="2" <?php if ($qphuongTien == '2') echo ("selected") ?>>Tàu hoả</option>
                        <option value="3" <?php if ($qphuongTien == '3') echo ("selected") ?>>Xe khách</option>
                    </select>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Điểm khởi hành</span>
                        <input type="text" class="form-control" name="diemKhoiHanh" value="<?php echo $diemKhoiHanh[$i] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Điểm đến</span>
                        <input type="text" class="form-control" name="diemDen" value="<?php echo $diemDen[$i] ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Ngày đi</span>
                        <input type="date" class="form-control" name="ngayDi" value="<?php echo $ngayDi[$i] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Số hành khách</span>
                        <input type="number" class="form-control" name="soHanhKhach" value="<?php echo $qsoHanhKhach ?>">
                    </div>
                </div>
                <div class="col ">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Giá vé</span>
                        <input type="number" class="form-control" name="giaVe" value="<?php echo $giaVe[$i] ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="button">Mua vé</button>
                </div>
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