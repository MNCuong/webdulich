
			<?php 
				
			if(isset($_GET['xuli'])){
				$temp=$_GET['xuli'];
			}
			else{
				$temp="";
			}
			if ($temp == 'lsdp') {
				include('lichsudatphong.php');
			}
		else if ($temp == 'lsdv') {
				include('./adminDanhSachChuyenDi.php');
			} else if ($temp == 'ttcn') {
				include('./thongtincanhan.php');
			} else if ($temp == 'doimatkhau') {
				include('./quenmatkhau_form.php');
			}
			else{
				include('./thongtincanhan.php');

			}

			
			?>
			</div>