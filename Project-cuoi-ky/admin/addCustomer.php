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
?>

            <form method="POST" action="">

            <h2 style="margin-bottom: 30px;">Thêm mới khách hàng</h2>
                <table>
                    <tr>
                        <td>Họ và tên: </td>
                        <td>
                            <input type="text" name="txtFullName" placeholder="Enter Fullname">
                        </td>
                    </tr>
                    <tr>
                        <td>Tên đăng nhập: </td>
                        <td>
                            <input type="text" name="txtUser" placeholder="Nhập tên đăng nhập">
                        </td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td>
                            <input type="email" name="txtEmail" placeholder="Nhập Email">
                        </td>
                    </tr>
                    <tr>
                        <td>Mật khẩu: </td>
                        <td>
                            <input type="password" name="txtPass" placeholder="Nhập mật khẩu">
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>
                            <input type="text" name="txtAddress" placeholder="Nhập Địa chỉ">
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>
                            <input type="text" name="txtPhone" placeholder="Nhập số điện thoại">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnAddUser" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnAddUser'])){
                    $fullName   = $_POST['txtFullName'];
                    $userName   = $_POST['txtUser'];
                    $email      = $_POST['txtEmail'];
                    $pass       = $_POST['txtPass'];
                    // $pass_md5   = md5($pass);
                    $pass_hash  = password_hash($pass, PASSWORD_DEFAULT);
                    $address    = $_POST['txtAddress'];
                    $phone      = $_POST['txtPhone'];

                    //Kiểm tra: Dữ liệu người dùng nhập có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Bước 02: Thực hiện truy vấn
                    $sql = "INSERT INTO tbl_customer (fullname, username, email, password, address, phone)
                            VALUES ('$fullName','$userName','$email',' $pass_hash', '$address', '$phone')";
                    // echo $sql;
                    // $result = mysqli_query($conn,$sql);
                    
                    // $count=mysqli_num_rows($result);
                    if(mysqli_query($conn,$sql)){
                        echo '<script>window.location.replace("customersManagement.php")</script>';
                    }
                    
                }

            ?>
    </main>
</div>
<?php
    include("templates/footer.php");
?>
   
