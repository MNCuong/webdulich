
			<?php 
				
			if(isset($_GET['danhmuc'])){
				$temp=$_GET['danhmuc'];
			}
			else{
				$temp="";
			}
			if ($temp == 'danhsachtaikhoan') {
				include('danhsachtaikhoan.php');
			}
		else if ($temp == 'danhsachchuyen') {
				include('./adminDanhSachChuyenDi.php');
			} else if ($temp == 'tour') {
				include('./Tabletour.php');
			} else if ($temp == 'diadiem') {
				include('./Tablediadiem.php');
			}
			else{
				include('./danhsachtaikhoan.php');

			}

			
			?>
			</div>