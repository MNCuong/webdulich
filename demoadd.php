<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add customer</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body style="background: linear-gradient(0.7turn, #ebf8e1, #f69d3c);" >
	
<?php

	
		$getname=$_POST['name'];
		$getgioitinh=$_POST['gioitinh'];
		$getdiachi=$_POST['diachi'];
		$getngaysinh=$_POST['ngaysinh'];
		$getchucvu=$_POST['chucvu'];
	
		$db="qlns";
		$conn=new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");//tạo kết nối với server
		if($getname){
			$sql_insert="INSERT INTO nhanvien (`name`, `gioitinh`, `ngaysinh`, `diachi`, `chucvu`) VALUES ('$getname', '$getgioitinh', '$getngaysinh', '$getdiachi', '$getchucvu')";
			mysqli_query($conn,$sql_insert);	
		}
	

		//Tạo câu truy vấn select
		$select_nv="Select * from `nhanvien`";
		$result_se_hang=mysqli_query($conn,$select_nv);
		$tong_bg=mysqli_num_rows($result_se_hang);// đếm số bản ghi
			
		$stt_hang=0;
	
		while($row=mysqli_fetch_object($result_se_hang))
		{
			
			$stt_hang++;
			$id[$stt_hang]=$row->id;
			$name[$stt_hang]=$row->name;
			$gioitinh[$stt_hang]=$row->gioitinh;
			$date[$stt_hang]=$row->ngaysinh;
			$diachi[$stt_hang]=$row->diachi;
			$chucvu[$stt_hang]=$row->chucvu;
		}
	$ngaygio=date("y")."_".date("m")."_".date("d")."_".date("H")."h_".date("m")."m_".date("s")."s";
			?>
	
	
	
	
	
	
	
	
	
	
	
	
	
		<div class="row1" >
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " style="box-shadow: 0 0 50px black ">
   <a class="navbar-brand" href="#"><strong>Quản lý nhân viên</strong></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item ">
            <a class="nav-link" href="#">Nhân viên <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Điểm danh</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Tiền lương</a>
         </li>
		  

		  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="list" data-bs-toggle="dropdown">
            Tài khoản
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li> <a class="dropdown-item" href="#">Sửa tài khoản</a></li>
               <li><a class="dropdown-item" href="#">Xóa tài khoản</a></li>
               <li><div class="dropdown-divider"></div></li>
               <li><a class="dropdown-item" href="#">Khác</a></li>
            </ul>
         </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
   </div>
</nav>
		</div>

		<div class="row2">
			<div class="container">
			<p style="padding-top: 100px" class="col-sm-9 w-100 col-xl-8 "><h2>Tìm kiếm nhân viên</h2></p>
			<div id="clock"><i class="fa fa-clock" aria-hidden="true"></i> 
				<?php echo date("d-m-y | h:i:sa")?>
				
			<input type="search" name="" class="form-control mt-2" id="" border="none" placeholder="Tìm kiếm" >
			<a href="them.php" ><input type="button" value="Thêm nhân viên" class="btn btn-danger mt-3"></a>

		</div>
		</div>
	
		<div class="row3 mt-5">
			<table class="table table-light">
			  <thead class="table-dark">
				<tr>
				  	<th scope="col">STT</th>
				  	<th scope="col">Họ tên</th>
				  	<th scope="col">Giới tính</th>
				  	<th scope="col">Ngày sinh</th>
					<th scope="col">Địa chỉ</th>
					<th scope="col">Chức vụ</th>
					<th scope="col">Tính năng</th>
				</tr>
			  </thead>
			  <tbody>
				   <?php
				  for ($i=1;$i<=$tong_bg;$i++)
				  {
				  ?>
				<tr>
				  	<th scope="row"><?php echo $i;?></th>
				  	<td><?php echo $name[$i]?></td>
				 	<td><?php echo $gioitinh[$i]?></td>
				  	<td><?php echo $date[$i]?></td>
					<td><?php echo $diachi[$i]?></td>
					<td><?php echo $chucvu[$i]?></td>
					<td>
						<a href=""><i class="fa-solid fa-pen"></i></a>/
						<a href=""><i class="fa-solid fa-trash " ></i></a>
					</td>
				</tr>
				 <?php  }
				  ?>
				
			  </tbody>
			</table>
		</div>
		
	
	
		
		<div class="end position-static bottom-0">
			<div class="row mt-5 " style="text-align: center; ">
		  <div class="col-lg-4" >Thông tin liên lạc</div>
			<div class="col-lg-4">Danh mục</div>
			<div class="col-lg-4">Hỗ trợ</div>
		</div>


		
		<div class="row-end text-center mt-5" style="font-size: 30px; color: black">
			<a style=" color: black" href="https://www.facebook.com/MNC3000"><i class="fa-brands fa-facebook"></i></a>
			<a style=" color: black" href="https://www.instagram.com/meikun.01?fbclid=IwAR38FR19coC_iYdr3POIHCf2ehT8zMrSMhRIZPE2Emb6TYBR1dEmpWmbJcE"><i class="fa-brands fa-instagram"></i></a>
			<a style=" color: black" href="https://github.com/MNCuong?fbclid=IwAR2PbDkO_u8ofCrojCYePupHR9Igl-9sO9pfQQj3ZJahqPaEYHyFdVt-Vsc"><i class="fa-brands fa-github"></i></a>
			<a style=" color: black" href="https://www.tiktok.com/@cuon912"><i class="fa-brands fa-tiktok"></i></a>
			
			
			
			
			
		</div>
			
		</div>

	</div>	
		

	
</body>
</html>
