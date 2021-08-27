<?php
    // We need to use sessions, so you should always start sessions using the below code.
    include('connection.php');
    session_start();
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ../login.php');
        exit;
    }
    include("templates/header.php");
    //ob_start();
?>

<!-- GET dữ liệu cán bộ theo id -->
    <?php 
        $id     = $_GET['myid'];
        $sql    = "SELECT * from tbl_customer where id_customer={$id}";
        $query  = mysqli_query($conn,$sql);
        $row    = mysqli_fetch_array($query);


        
    ?>

            <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
                <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                <h2 style="margin-bottom: 30px;">Đổi mật khẩu</h2>
                <table>
                    <tr>
                        <td>Username: </td>
                        <td>
                            <?php echo $row['fullname']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nhập mật khẩu hiện tại:</td>
                        <td>
                            <input type="password" name="currentPassword" placeholder ="Nhập mật khẩu cũ">
                            <span id="currentPassword" class="required"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Nhập mật khẩu mới:</td>
                        <td>
                            <input type="password" name="newPassword" placeholder ="Nhập mật khẩu mới">
                            <span id="newPassword" class="required"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Xác nhận mật khẩu mới:</td>
                        <td>
                            <input type="password" name="confirmPassword" placeholder ="Nhập lại mật khẩu mới">
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
                $currentPassword = $_POST['currentPassword'];
                $newPassword = $_POST['newPassword'];
                $confirmPassword = $_POST['confirmPassword'];
                $password_query = mysql_query("select * from tbl_customer where id_customer='$id'");
                $password_row = mysql_fetch_array($password_query);
                $database_password = $password_row['currentPassword'];
                if ($database_password == $currentPassword)
                    {
                    if ($newPassword == $confirmPassword)
                        {
                        $update_pwd = mysql_query("update tbl_customer set password='$newPassword' where id_customer='$id'");
                        echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
                        }
                      else
                        {
                        echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
                        }
                    }
                  else
                    {
                    echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
                    }
                }
             
            ?>
    </main>
</div>
<?php
    


    include("templates/footer.php");
    //ob_end_flush();
?>
  