<?php
    include("admin/connection.php");
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Đăng ký tài khoản</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="css/registry.css">
	</head>
	<body>
		<div class="registry">
			<h1>Đăng ký tài khoản</h1>
			<form action="" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Tên đăng nhập" id="username" required>
				
				<label for="fullname">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="fullname" placeholder="Họ và tên" id="fullname" required>
				
				<label for="email">
					<i class="fas fa-user"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
				
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password1" placeholder="Mật khẩu" id="password1" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password2" placeholder="Nhập lại mật khẩu" id="password2" required>

				<input type="submit" value="Đăng ký" name="submit">
				<ul class="nav">
		            <li class="nav-item"><a href="./login.php" class="nav-link active" aria-current="page">Quay lại trang đăng nhập</a></li>
		            
		        </ul>
			</form>

		</div>

   <?php  
		if(isset($_POST['submit'])){
            $username 	= $_POST['username'];
            $fullname 	= $_POST['fullname'];
            $email 		= $_POST['email'];
            $password1 	= $_POST['password1'];
            $password2 	= $_POST['password2'];
            
            $pass = password_hash($password1,PASSWORD_BCRYPT);
            if ($password1 != $password2){
            	echo '<script>alert("Mật khẩu không trùng khớp")</script>';
            }else{
            	// Kiểm tra tài khoản đã tồn tại chưa
				$sql="SELECT * from tbl_customer where username = '$username'";
				$kt=mysqli_query($conn, $sql);

				if(mysqli_num_rows($kt)  > 0){
					echo '<script>alert("Tài khoản đã tồn tại")</script>';
            }else{
	            $sql ="INSERT into tbl_customer(username,fullname,password,email) values('$username','$fullname','$pass','$email')";
	            mysqli_query($conn,$sql) or die(mysqli_error($conn));
	            	echo '<script>alert("Đăng ký tài khoản thành công")</script>';
        	}
        }
    }
	   	
   ?>
	</body>
</html>
