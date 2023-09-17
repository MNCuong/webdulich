<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>DANH SÁCH CHUYẾN ĐI</h2><br>
        <p>Loại phương tiện</p>
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" id="selectedItem1">Loại phương tiện
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="selectItem1('Máy bay')">Máy bay</a></li>
                <li><a class="dropdown-item" href="#" onclick="selectItem1('Xe khách')">Xe khách</a></li>
                <li><a class="dropdown-item" href="#" onclick="selectItem1('Tàu hoả')">Tàu hoả</a></li>
            </ul>
        </div><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Điểm khởi hành</th>
                    <th>Điểm đến</th>
                    <th>Ngày đi</th>
                    <th>Ngày khứ hồi</th>
                    <th>Số hành khách</th>
                    <th>Giá vé</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sobg = 5;
                $db = "anh";
                $table = "chuyendi";
                $conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ"); //tạo kết nối với server
                $current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
                $phuongTien = "2";

                // Tính toán OFFSET (độ lệch)
                $offset = ($current_page - 1) * $sobg;
                $select = "SELECT * FROM $table WHERE phuongTien = $phuongTien LIMIT $offset, $sobg";
                $result = mysqli_query($conn, $select);
                $stt_hang = ($current_page - 1) * $sobg;
                while ($row = mysqli_fetch_object($result)) {
                    $stt_hang++;
                    $id[$stt_hang] = $row->id;
                    $diemkhoihanh[$stt_hang] = $row->diemkhoihanh;
                    $diemden[$stt_hang] = $row->diemden;
                    $sohanhkhach[$stt_hang] = $row->sohanhkhach;
                    $ngaydi[$stt_hang] = $row->ngaydi;
                    $ngaykhuhoi[$stt_hang] = $row->ngaykhuhoi;
                    $khuhoi[$stt_hang] = $row->khuhoi;
                }
                $tong_bg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $table WHERE phuongTien = $phuongTien"));
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
                        <td><?php echo $diemkhoihanh[$i] ?></td>
                        <td><?php echo $diemden[$i] ?></td>
                        <td><?php echo $sohanhkhach[$i] ?></td>
                        <td><?php echo $ngaydi[$i] ?></td>
                        <td><?php echo $ngaykhuhoi[$i] ?></td>
                        <td><?php echo $khuhoi[$i] ?></td>
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