<?php 
	// Nhận dữ liệu từ user managerment.php gửi sang theo phương thức GET
	include("connection.php");
	// PHP: mặc định khi sử dụng theo phương thức GET, mọi giá trị lưu trong 1 biến SIÊU TOÀN CỤC ($_GET) > mảng
	//Giá trị truyền sang nằm sau dấu ? có dạng key=value
	
	
		$id = $_GET['id'];
		$sql= "DELETE FROM tbl_customer WHERE id_customer={$id}";
		$query = mysqli_query($conn,$sql) or die('sql error'.mysqli_error($conn));
		$_SESSION['success'] = 'Xóa thành công bài viết';
		header('location:../admin');
	

?>