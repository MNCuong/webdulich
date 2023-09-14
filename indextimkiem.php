<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
		$timkiem= $_REQUEST['timkiem'];
		$db= "acc";
		$conn= new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");
		$select="SELECT * FROM `tk` where `tk`= '$timkiem' ";
		$resutl=mysqli_query($conn,$select);
		if ( mysqli_num_rows($resutl) > 0) {
        		echo 'Thanh cong';
			}
			else {
				echo "Lỗi";
			}

	?>
</body>
</html>