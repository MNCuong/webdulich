<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<title>Untitled Document</title>
	<style>
		.button {
            float: right;
            padding: 10px;
            background-color: rgba(17, 190, 231, 1.00);
            border-radius: 8px;
            border: none;
        }

        .button:hover {
            opacity: 0.7;
            cursor: pointer;
        }
	</style>
</head>

<body>
	<?php
	$conn=mysqli_connect("localhost","root","","anh") or die ("Không connect đc với máy chủ");
	//Chọn CSDL để làm việc
	mysqli_select_db($conn,"anh") or die ("Không tìm thấy CSDL");
	//Tạo câu truy vấn
	$sql_select_tour="Select * from `tourdulich`";
	$result_se_tour=mysqli_query($conn,$sql_select_tour);
	$tong_tour=mysqli_num_rows($result_se_tour);// đếm số bản ghi
		//echo $tong_bg; die;
	$stt_tour=0;
	while($row=mysqli_fetch_object($result_se_tour))
	{
		$stt_tour++;
		$id[$stt_tour]=$row->id;
		$diadiem[$stt_tour]=$row->diadiem;
		$tinhthanh[$stt_tour]=$row->tinhthanh;
		$theloai[$stt_tour]=$row->theloai;
		$giatien[$stt_tour]=$row->giatien;
		$anh[$stt_tour]=$row->anh;
		$dacdiem[$stt_tour]=$row->dacdiem;
		$gioithieu[$stt_tour]=$row->gioithieu;
	}
	?>
<table class="table table-dark table-hover" width="500" align="center" border="1">
  <h1 align="center">Danh mục các tour du lịch</h1>
	<tbody>
    <tr>
      <td width="20">ID</td>
      <td width="30">Địa Điểm</td>
      <td width="60">Tỉnh Thành</td>
      <td width="65">Thể loại</td>
	  <td width="50">Giá Tiền</td>
	  <td width="150">Ảnh</td>
	  <td width="150">Đặc Điểm</td>	
	  <td width="150">Giới Thiệu</td>
      <td width="50">&nbsp;</td>
    </tr>
	  <?php
	  for ($i=1;$i<=$tong_tour;$i++)
	  {
	  ?>
    <tr>
      <td height="100"><?php echo $id[$i];?></td>
      <td><?php echo $diadiem[$i]?></td>
      <td><?php echo $tinhthanh[$i]?></td>
      <td><?php echo $theloai[$i]?></td>
	  <td><?php echo $giatien[$i]?></td>
	  <td><img style="width: 100%" src="./HinhAnh/<?php echo $anh[$i]?>"></td>
<!--	  <td><?php echo $anh[$i]?></td>-->
	  <td><?php echo $dacdiem[$i]?></td>
	  <td><?php echo $gioithieu[$i]?></td>
	  <td><a href="xoatour.php?id=<?php echo $id[$i]?>">
		  <input type="button" value="Xóa" class="button"></a> 
		  <a href="suatour.php?id=<?php echo $id[$i]?>">
		  <input type="button" value="Sửa" class="button"></a></td>
    </tr>
														
														 
														 
	  <?php
	  }
	  ?>
	<tr>
		<td colspan="9" align="center"><a href="themmoitour.php"/>
		<input type="button" value="Thêm tour" class="button"></td>
	</tr>
    <tr>
      <td colspan="9" align="center">Có tổng số <?php echo $tong_tour?> tour du lịch</td>
    </tr>
  </tbody>
</table>

</body>
</html>
</body>
</html>