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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        .row {
            padding: 20px;
        }

        .col {
            padding: 0px 30px 0px 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>

<body>
    <div class="container d-flex marginTop">
        <form action="adminDanhSachChuyenDi.php" method="post">
            <button type="submit" class="button">Danh sách chuyến chuyến đi</button>
        </form>
    </div><br>

    <div class="container" style="border-style: solid; border-width: 1px; border-radius: 10px;">
        <div class="row text-uppercase text-center fs-1">
            <p>Thêm Chuyến đi</p>
        </div>

        <form action="controllerThemChuyenDi.php" method="post">
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
                        <input type="text" class="form-control" name="diemKhoiHanh">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Điểm đến</span>
                        <input type="text" class="form-control" name="diemDen">
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
                        <input type="number" class="form-control" name="soHanhKhach">
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
                    <button type="submit" class="button">Thêm chuyến đi</button>
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