<?php
	header('Content-Type: application/json'); // Đặt tiêu đề Content-Type cho JSON
	$conn = mysqli_connect("localhost", "root", "", "anh") or die("Không connect được với máy chủ");
	mysqli_select_db($conn, "anh") or die("Không tìm thấy CSDL");

	$query = "SELECT DISTINCT diachi FROM diadiemdulich";
	$result = mysqli_query($conn, $query);

	$arr = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$city = [
			'id_item' => count($arr) + 1,
			'name' => $row['diachi'],
			'place' => []
		];

		$placeQuery = "SELECT * FROM diadiemdulich WHERE diachi = '" . $row['diachi'] . "'";
		$placeResult = mysqli_query($conn, $placeQuery);

		while ($placeRow = mysqli_fetch_assoc($placeResult)) {
			$place = [
				'id' => $placeRow['id'],
				'source' => $placeRow['anh'],
				'location' => $placeRow['ten'],
				'price' => intval($placeRow['giatien'])
			];

			$city['place'][] = $place;
		}

		$arr[] = $city;
	}

	// Chuyển mảng thành chuỗi JSON và trả về
	$jsonData = json_encode($arr, JSON_PRETTY_PRINT);
	echo $jsonData;

	mysqli_close($conn);
?>
