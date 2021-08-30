<?php
    session_start();
    include("connection.php");
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ./login.php');
        exit;
    }
    include("templates/header.php");
    //ob_start();
?>


			<form name="frmChange" method="post" action="">
                <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                <h2 style="margin-bottom: 30px;">Thêm nhân viên</h2>
                <table>
                    <tr>
                        <td>Họ và tên: </td>
                        <td>
                            <input class="required" type="text" name="txtFullname" placeholder ="">
                        </td>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <td>
                            <input class="required" type="text" name="txtUsername" placeholder ="">
                        </td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td>
                            <input class="required" type="email" name="txtEmail" placeholder ="">
                        </td>
                    </tr>
                    <tr>
                        <td>Nhập mật khẩu:</td>
                        <td>
                            <input class="required" type="password" name="txtNewPassword" placeholder ="">
                            <span id="newPassword" class="required"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Xác nhận mật khẩu:</td>
                        <td>
                            <input class="required" type="password" name="txtConfirmPassword" placeholder ="">
                            <span id="confirmPassword" class="required"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Quyền:</td>
                        <td>
                            <input class="required" type="text" name="txtPermission" placeholder ="">
                            <span id="confirmPassword" class="required"></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Đăng ký" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            

		</div>

   <?php  
		if(isset($_POST['submit'])){
            $fullname 	= $_POST['txtFullname'];
            $username 	= $_POST['txtUsername'];
            $email 		= $_POST['txtEmail'];
            $newPassword 	= $_POST['txtNewPassword'];
            $confirmPassword 	= $_POST['txtConfirmPassword'];
            
            $pass = password_hash($newPassword,PASSWORD_BCRYPT);
            if ($newPassword != $confirmPassword){
            	echo '<script>alert("Mật khẩu không trùng khớp")</script>';
            }else{
            	// Kiểm tra tài khoản đã tồn tại chưa
				$sql = "INSERT INTO tbl_admin (fullname, username, email, password, permission)
                            VALUES ('$fullName','$userName','$email',' $pass_hash', '$address', '$phone')";
				$result = mysqli_query($conn, $sql);

				if(mysqli_num_rows($result)  > 0){
					echo '<script>alert("Nhân viên đã tồn tại")</script>';
            }else{
	            $sql ="INSERT into tbl_admin(username,fullname,password,email,permission) values('$username','$fullname','$pass','$email','$permission')";
	            mysqli_query($conn,$sql) or die(mysqli_error($conn));
	            	echo '<script>alert("Đăng ký tài khoản thành công"); window.location.replace("userManagement.php")</script>';
        	}
        }
    }
	   	
   ?>
	</body>
</html>
