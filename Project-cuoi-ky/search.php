<?php 
	// Kết nối sql
	require_once ("connection.php");

	$output ="";
	if (isset($_POST['submit'])) {
		$search = $_POST['name'];
		if ($search != "") {
			$query = mysqli_query("SELECT * FROM tbl_post WHERE title LIKE '%search$'") or die("Không thể tìm kiếm");
			$result = mysqli_num_rows($query);
			if ($result == 0) {
				// Kết quả tìm kiếm = 0
				$output = "<span style 'color: red;'> Không có kết quả nào được tìm kiếm với từ khóa '$search'</span>";
			} 
			else{
				// Kết quả tìm kiếm >0
				$output = "<span style 'color: #555;'> Tất cả các kết quả tìm kiếm với từ khóa '$search': $result</span>"."<br><hr style = 'wifth:200px; float: left;'><br>";
				while ($row = mysqli_fetch_array($query)) {
					// Khai báo biến và gán giá trị, các trường được lấy từ database
					$id = $row["id_post"];
					$title = $row["title"];
					$content = $row["content"];

					$output = "<div>$id<br>$title <br>$content<br></div>";
				}
			}
			} else{
				// Không có ký tự nào nhập từ bàn phím
				$output = "<span style 'color: red;'> Hãy nhập nội dung tìm kiếm!</span>";
			}
		
?>
