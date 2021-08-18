<?php 
	// Nhận dữ liệu từ user managerment.php gửi sang theo phương thức GET
	include("connection.php")
	// PHP: mặc định khi sử dụng theo phương thức GET, mọi giá trị lưu trong 1 biến SIÊU TOÀN CỤC ($_GET) > mảng
	//Giá trị truyền sang nằm sau dấu ? có dạng key=value
	$id_can_xoa = $_GET['id'];

	//Bước 2: Thực hiện câu truy vấn
	$sql = "DELETE FROM tbl_admin WHERE id = $id_can_xoa";
	$result = mysqli_query($conn,$sql);

	// Bước 3: Xử lý kết quả nếu mysqli_query xóa thành công > trả về true 
	if ($result == true) {
		//Quay trở lại trang đang thao tác
		header('Location:'.SITEURL.'/admin/users-managerment.php');
	}

?>