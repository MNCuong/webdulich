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

    <div class="container marginTop" style="border-style: solid; border-width: 1px; border-radius: 10px;">
        <div class="row text-uppercase text-center fs-1">
            <p>Tìm mua vé</p>
        </div>

        <form action="danhSachVe.php" method="post">
            <div class="row">
                <div class="col">
                    <span class="input-group-text">Phương tiện</span>
                    <select name="phuongTien" onchange="selectPhuongTien()" class="form-control">
                        <option value="1">Máy bay</option>
                        <option value="2">Tàu hoả</option>
                        <option value="3">Xe khách</option>
                    </select>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Điểm khởi hành</span>
                        <input type="text" class="form-control" name="diemKhoiHanh" list="diemKhoiHanh" autocomplete="on">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Điểm đến</span>
                        <input type="text" class="form-control" name="diemDen" list="diemDen" autocomplete="on">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Ngày đi</span>
                        <input type="date" class="form-control" name="ngayDi">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Số hành khách</span>
                        <input type="number" class="form-control" name="soHanhKhach" required>
                    </div>
                </div>
                <div class="col ">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Giá vé</span>
                        <input type="number" class="form-control" name="giaVe">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="button">Tìm</button>
                </div>
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