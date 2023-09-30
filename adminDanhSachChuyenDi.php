<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/chuyenDi.css">

</head>

<body>
    <div class="cdContainer cdMargin" style="flex-direction: column;">
        <p class="cdHeading">Danh sách chuyến đi</p>
        <div class="cdRow">
            <form action="themChuyenDi.php" method="post">
                <button type="submit" class="cdButton">Thêm chuyến đi</button>
            </form>
        </div>
        <div class=" cdRow">
            <div class="cdDropdown">
                <button class="cdButton">
                    <?php
                    isset($_GET['phuongtien']) ? $phuongtien = $_GET['phuongtien'] : $phuongtien = "1";
                    switch ($phuongtien) {
                        case '1':
                            echo "Máy bay";
                            break;
                        case '2':
                            echo "Tàu hoả";
                            break;
                        case '3':
                            echo "Xe khách";
                            break;
                        default:
                            break;
                    }
                    ?>
                </button>
                <div class="cdDropdown-content">
                    <a href="adminDanhSachChuyenDi.php?phuongtien=1">Máy bay</a>
                    <a href="adminDanhSachChuyenDi.php?phuongtien=2">Tàu hoả</a>
                    <a href="adminDanhSachChuyenDi.php?phuongtien=3">Xe khách</a>
                </div>
            </div>
        </div>

        <div class="cdContainer">
            <table class="cdTable-bordered">
                <form action="controllerXoaNhieuChuyenDi.php" method="post">
                    <thead>
                        <tr>
                            <th>
                                <button type="submit" class="cdButton">
                                    <i class="fa fa-trash"></i>
                            </th>
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
                        $conn = new mysqli("localhost", "root", "", $db) or die("Không connect đc với máy chủ");
                        $current_page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

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
                                <td>
                                    <input name="ids[]" value="<?php echo $id[$i] ?>" type="checkbox" class="cdCheckBox">
                                </td>
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    <?php echo $diemKhoiHanh[$i] ?>
                                </td>
                                <td>
                                    <?php echo $diemDen[$i] ?>
                                </td>
                                <td>
                                    <?php echo $ngayDi[$i] ?>
                                </td>
                                <td>
                                    <?php echo $soHanhKhach[$i] ?>
                                </td>
                                <td>
                                    <?php echo $giaVe[$i] ?>
                                </td>
                                <td> <a href="suaChuyenDi.php?id=<?php echo $id[$i] ?>">
                                        <i class="fa fa-edit cdButton"></i></a>
                                </td>
                                <td>
                                    <a href="controllerXoaChuyenDi.php?id=<?php echo $id[$i] ?>" class="cdButton">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </form>
            </table>

        </div>

        <ul>
            <?php
            for ($i = 1; $i <= $soluongtrang; $i++) {
                echo "<li><a href='adminDanhSachChuyenDi.php?page=$i'>$i</a></li> ";
            }
            ?>
        </ul>


    </div>

    <script>
        const mySelect = document.getElementById("my_select");
        const myLink = document.getElementById("my_link");

        mySelect.addEventListener("change", function() {
            myLink.href = mySelect.value;
        });
    </script>

</body>

</html>