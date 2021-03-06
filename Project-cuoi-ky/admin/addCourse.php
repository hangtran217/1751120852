<?php
    // We need to use sessions, so you should always start sessions using the below code.
    session_start();
    include('connection.php');
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
                <td colspan="2"><h3>Thêm sản phẩm mới</h3></td>
            </tr>
                    <tr>
                        <td nowrap="nowrap">Tên sản phẩm:</td>
                        <td><input type="" name="txtCourseName" id="content" style="width: 60%;"></td>
                    </tr>
                    <tr>
                        <td  nowrap="nowrap">Mô tả: </td>
                        <td><textarea name="txtDescription" id="content" rows="10" cols="150" style="width: 60%;"></textarea></td>
                    </tr>
                    <tr>
                        <td>Giá tiền</td>
                        <td><input type="" name="txtPrice" id="content" style="width: 60%;"></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><input type="" name="txtImage" id="content" style="width: 60%;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnAddCourse" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnAddCourse'])){
                    $courseName     = $_POST['txtCourseName'];
                    $description    = $_POST['txtDescription'];
                    $price          = $_POST['txtPrice'];
                    $image          = $_POST['txtImage'];
                    //Kiểm tra: Dữ liệu người dùng nhập có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Bước 02: Thực hiện truy vấn
                    $sql = "INSERT INTO tbl_course (course_name, description, price, image)
                            VALUES ('$courseName','$description','$price',' $image')";
                    // echo $sql;
                    // $result = mysqli_query($conn,$sql);
                    
                    // $count=mysqli_num_rows($result);
                    if(mysqli_query($conn,$sql)){
                        echo '<script>window.location.replace("courseManagement.php")</script>';
                    }
                    
                }

            ?>
    </main>
</div>
<?php
    include("templates/footer.php");
?>
   
