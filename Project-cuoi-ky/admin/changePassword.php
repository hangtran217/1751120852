<?php
    // We need to use sessions, so you should always start sessions using the below code.
    session_start();
    include('connection.php');
    
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ./login.php');
        exit;
    }
    include("templates/header.php");
    //ob_start();
?>

<!-- GET dữ liệu cán bộ theo id -->
    <?php 
        $id     = $_GET['myid'];
        $sql    = "SELECT * from tbl_admin where id_admin={$id}";
        $query  = mysqli_query($conn,$sql);
        $row    = mysqli_fetch_array($query);
        $password = $row['password'];

        
    ?>
            <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
                <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                <h2 style="margin-bottom: 30px;">Đổi mật khẩu</h2>
                <table>
                    <tr>
                        <td>Username: </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nhập mật khẩu hiện tại:</td>
                        <td>
                            <input class="required" type="password" name="txtCurrentPassword" placeholder ="Nhập mật khẩu cũ">
                        </td>
                    </tr>
                    <tr>
                        <td>Nhập mật khẩu mới:</td>
                        <td>
                            <input class="required" type="password" name="txtNewPassword" placeholder ="Nhập mật khẩu mới">
                            <span id="newPassword" class="required"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Xác nhận mật khẩu mới:</td>
                        <td>
                            <input class="required" type="password" name="txtConfirmPassword" placeholder ="Nhập lại mật khẩu mới">
                            <span id="confirmPassword" class="required"></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
 
            if (isset($_POST['submit']))
                {
                $currentPassword    = $_POST['txtCurrentPassword'];
                $newPassword        = $_POST['txtNewPassword'];
                $confirmPassword    = $_POST['txtConfirmPassword'];
                $hashedNewPassword  = password_hash($_POST['txtNewPassword'], PASSWORD_DEFAULT);
                //password_verify($currentPassword, $password)

                if (password_verify($currentPassword, $password))        
                    {
                    //echo "<script>alert('Đúng mật khẩu'); </script>";
                    if ($newPassword == $confirmPassword)
                        {
                        $sql = "UPDATE tbl_admin set password='$hashedNewPassword' where id_admin='$id'";
                        $updatePassword = mysqli_query($conn,$sql);
                        echo "<script>alert('$password,$currentPassword'); window.location='userManagement.php'</script>";
                        }
                      else
                        {
                        echo 
                        "<script> alert('Mật khẩu mới và mật khẩu xác nhận không khớp!'); </script>";
                        }
                    }
                  else
                    {
                    echo "<script>alert('Bạn nhập mật khẩu hiện tại không chính xác,$password, và $currentPassword'); </script>";
                    }
                }
             
            ?>
    </main>
</div>
<?php
    


    include("templates/footer.php");
    //ob_end_flush();
?>
  