


<?php
if (isset($_POST['selected_ids'])) {
    $db = "anh";
	$conn = new mysqli("localhost", "root", "", $db) or die("Không connect được với máy chủ");
    
    // Lấy danh sách các ID đã chọn từ form
    $selected_ids = explode(',', $_POST['selected_ids']);
    
    // Chuyển các tài khoản có ID trong danh sách sang quyền 'Admin'
    foreach ($selected_ids as $user_id) {
       $update_query = "UPDATE acc SET role = 'Admin' WHERE id = $user_id";
        if ($conn->query($update_query) !== TRUE) {
            echo "Lỗi cập nhật quyền: " . $db->error;
        } 
    }
    $conn->close();
    header('Location: indexadmin.php');
} else {
    echo "Không có dữ liệu được gửi từ form.";
}
?>
