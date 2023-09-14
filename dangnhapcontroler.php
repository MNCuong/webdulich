<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
	
	
	<?php	
	 	$taikhoan= $_REQUEST['taikhoan'];
		$matkhau= $_REQUEST['matkhau'];
		
		$db= "acc";
		$conn= new mysqli("localhost","root","",$db) or die ("Không connect đc với máy chủ");
		$select="SELECT * FROM `tk` where `tk`= '$taikhoan' and `mk`= '$matkhau'";
		$resutl=mysqli_query($conn,$select);
		
		  	if ( mysqli_num_rows($resutl) > 0) {
        		header('Location: Trangchu.php');
			}
			else {
				echo "Lỗi";
			}

    // Close the database connection.
    mysqli_close($conn);
	?>
</body>
</html>