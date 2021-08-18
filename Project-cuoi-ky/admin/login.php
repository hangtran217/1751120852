
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
				<ul class="nav">
		            <li class="nav-item"><a href="http://localhost/project-cuoi-ky/admin/register.php" class="nav-link active" aria-current="page">Chưa có tài khoản. Đăng ký ngay!</a></li>
		            <li class="nav-item"><a href="http://localhost/project-cuoi-ky/admin/forgotpassword.php" class="nav-link">Quên mật khẩu?</a></li>
		        </ul>
			</form>

		</div>

   
	</body>
</html>
