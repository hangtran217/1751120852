<?php
    // We need to use sessions, so you should always start sessions using the below code.
    include('connection.php');
    session_start();
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: login.php');
        exit;
    }
    include("templates/header.php");
?>

            <form method="POST" action="">

                <table>
                    <tr>
                <td colspan="2"><h3>Thêm bài viết mới</h3></td>
            </tr>
                    <tr>
                        <td nowrap="nowrap">Tiêu đề bài viết :</td>
                        <td><input type="" name="txtTitle" id="content" style="width: 1112px;"> </td>
                    </tr>
                    <tr>
                        <td  nowrap="nowrap">Nội dung: </td>
                        <td><textarea name="txtContent" id="content" rows="10" cols="150"></textarea></td>
                    </tr>
                    <tr>
                        <td>Thể loại</td>
                        <td>
                            <input type="text" name="txtType" id="content" style="width: 1112px;"> 
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnAddPost" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnAddPost'])){
                    $title   = $_POST['txtTitle'];
                    $content   = $_POST['txtContent'];
                    $type      = $_POST['txtType'];

                    //Kiểm tra: Dữ liệu người dùng nhập có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Bước 02: Thực hiện truy vấn
                    $sql = "INSERT INTO tbl_post (title, username, email, password, address, phone)
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
   
