<?php
    // We need to use sessions, so you should always start sessions using the below code.
    include('connection.php');
    session_start();
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
        $sql    = "SELECT * from tbl_post where id_post={$id}";
        $query  = mysqli_query($conn,$sql);
        $row    = mysqli_fetch_assoc($query);
    ?>

            <form method="POST" action="">

            <h2 style="margin-bottom: 30px;">Sửa nội dung bài viết</h2>
                <table>
                    <tr>
                        <td>Tiêu đề bài viết: </td>
                        <td>
                            <input style="width: 1112px;" type="text" name="txtTitle" value="<?php echo $row['title']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="nowrap">Nội dung: </td>
                        <td><textarea name="txtContent" id="content" rows="10" cols="150"><?php echo $row['content']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Thể loại</td>
                        <td>
                            <select  name="txtType" class="form-select" aria-label="Số điện thoại">
                                <!-- <option >Chọn thể loại</option> -->
                                
                                <?php  
                                     $sql = "SELECT DISTINCT type FROM tbl_post";
                                                
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                ?>
                                            <option value="" selected><?php echo $row['type']; ?></option>
                                <?php
                                        }

                                                        
                                ?>
                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnEditPost" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnEditPost'])){
                    $title   = $_POST['txtTitle'];
                    $content      = $_POST['txtContent'];
                    $type    = $_POST['txtType'];
                   // alert("1");có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Kiểm tra: Dữ liệu người dùng nhập 
                    //Bước 02: Thực hiện truy vấn

                    $sql = "UPDATE tbl_post SET title ='$title', content = '$content', type ='$type'
                            WHERE id_post = '$id'";
                    if(mysqli_query($conn,$sql)){
                        //echo '<script>alert("Incorrect username and/or password!")</script>';
                         echo '<script>window.location.replace("postManagement.php")</script>';
                    }
                }
            ?>
    </main>
</div>
<?php
    include("templates/footer.php");
    //ob_end_flush();
?>
   
