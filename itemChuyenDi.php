<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    $id = $_GET['id'];
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

    <div class="container marginTop" style="border-style: solid; border-width: 1px; border-radius: 10px;">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <span class="input-group-text">Phương tiện</span>
                    <div class="form-control"><?php echo $phuongTien ?></div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Điểm khởi hành</span>
                        <input type="text" class="form-control" name="diemKhoiHanh" value="<?php echo $diemKhoiHanh ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Điểm đến</span>
                        <input type="text" class="form-control" name="diemDen" value="<?php echo $diemDen ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <button class="button">Chọn</button>
        </div>

    </div>
</body>

</html>