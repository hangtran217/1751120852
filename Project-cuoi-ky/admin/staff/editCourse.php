<?php
    // We need to use sessions, so you should always start sessions using the below code.
    session_start();
    include('connection.php');
    
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedinStaff'])) {
        header('Location: ../login.php');
        exit;
    }
    include("templates/header.php");
    //ob_start();
?>

<!-- GET dữ liệu cán bộ theo id -->
    <?php 
        $id     = $_GET['id'];
        $sql    = "SELECT * from tbl_course where id_course={$id}";
        $query  = mysqli_query($conn,$sql);
        $row    = mysqli_fetch_assoc($query);
    ?>

            <form method="POST" action="">

            <h2 style="margin-bottom: 30px;">Sửa thông tin sản phẩm</h2>
                <table>
                    <tr>
                        <td>Tên khóa học: </td>
                        <td>
                            <input style="width: 1112px;" type="text" name="txtCourseName" value="<?php echo $row['course_name']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="nowrap">Mô tả: </td>
                        <td><textarea name="txtDescription" id="content" rows="10" cols="150"><?php echo $row['description']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnEditCourse" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnEditCourse'])){
                    $courseName   = $_POST['txtCourseName'];
                    $description      = $_POST['txtDescription'];
                    $price    = $_POST['txtPrice'];
                   // alert("1");có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Kiểm tra: Dữ liệu người dùng nhập 
                    //Bước 02: Thực hiện truy vấn

                    $sql = "UPDATE tbl_course SET course_name ='$courseName', description = '$description'
                            WHERE id_course = '$id'";
                    if(mysqli_query($conn,$sql)){
                        //echo '<script>alert("Incorrect username and/or password!")</script>';
                         echo '<script>window.location.replace("courseManagement.php")</script>';
                    }
                }
            ?>
    </main>
</div>
<?php
    include("templates/footer.php");
    //ob_end_flush();
?>
   
