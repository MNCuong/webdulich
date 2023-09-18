<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>


    <div class="container marginTop">
        <div class="row text-uppercase text-center fs-1">
            <p>DANH SÁCH CHUYẾN ĐI</p>
        </div>
        <div class="d-flex">
            <form action="themChuyenDi.php" method="post">
                <button type="submit" class="button">Thêm chuyến đi</button>
            </form>
        </div><br>
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="adminDanhSachChuyenDi.php?phuongtien=1" onclick="selectItem1('Máy bay')">Máy bay</a></li>
                <li><a class="dropdown-item" href="adminDanhSachChuyenDi.php?phuongtien=2" onclick="selectItem1('Tàu hoả')">Tàu hoả</a></li>
                <li><a class="dropdown-item" href="adminDanhSachChuyenDi.php?phuongtien=3" onclick="selectItem1('Xe khách')">Xe khách</a></li>
            </ul>
        </div><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Điểm khởi hành</th>
                    <th>Điểm đến</th>
                    <th>Ngày đi</th>
                    <th>Số hành khách</th>
                    <th>Giá vé</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sobg = 5;
                $db = "anh";

                isset($_REQUEST['phuongtien']) ? $phuongtien = $_REQUEST['phuongtien'] : $phuongtien = 1;

                $table = "chuyendi";
                $conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ"); //tạo kết nối với server
                $current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

                // Tính toán OFFSET (độ lệch)
                $offset = ($current_page - 1) * $sobg;
                $select = "SELECT * FROM $table WHERE phuongTien = $phuongtien LIMIT $offset, $sobg";

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
                $tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $table WHERE phuongTien = $phuongtien"));

                $soluongtrang = ceil($tong_bg / $sobg);
                mysqli_close($conn); ?>

                <?php
                for ($i = ($current_page - 1) * $sobg + 1; $i <= ($current_page - 1) * $sobg + $sobg; $i++) {
                    if ($i > $tong_bg) {
                        break;
                    }
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $diemKhoiHanh[$i] ?></td>
                        <td><?php echo $diemDen[$i] ?></td>
                        <td><?php echo $ngayDi[$i] ?></td>
                        <td><?php echo $soHanhKhach[$i] ?></td>
                        <td><?php echo $giaVe[$i] ?></td>
                        <td> <a href="suaChuyenDi.php?id=<?php echo $id[$i] ?>"><i class="fa-solid fa-edit"></i></a> </td>
                        <td> <a href="controllerXoaChuyenDi.php?id=<?php echo $id[$i] ?>"><i class="fa-solid fa-trash"></i></a> </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <ul>
            <?php
            for ($i = 1; $i <= $soluongtrang; $i++) {
                echo "<li><a href='adminDanhSachChuyenDi.php?page=$i'>$i</a></li> ";
            }
            ?>
        </ul>
    </div>


    <script>
        function selectItem1(item) {
            document.getElementById('selectedItem1').textContent = `${item}`;
        }
    </script>
</body>

</html>