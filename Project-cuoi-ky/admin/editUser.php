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
        $sql    = "SELECT * from tbl_admin where id_admin={$id}";
        $query  = mysqli_query($conn,$sql);
        $row    = mysqli_fetch_assoc($query);
    ?>

            <form method="POST" action="">

            <h2 style="margin-bottom: 30px;">Sửa thông tin người dùng <?php echo $row['username'];?></h2>
                <table>
                    <tr>
                        <td>Họ và tên: </td>
                        <td>
                            <input type="text" name="txtFullName" value="<?php echo $row['fullname']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td>
                            <input type="email" name="txtEmail" value="<?php echo $row['email']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Giới thiệu: </td>
                        <td>
                            <input type="text" name="txtIntroduction" value="<?php echo $row['introduction']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Quyền</td>
                        <td>
                            <select  name="txtPermission" class="form-select" aria-label="Số điện thoại">
                                <!-- <option >Chọn thể loại</option> -->
                                
                                <?php  
                                     $sql = "SELECT DISTINCT permission FROM tbl_admin";
                                                
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                ?>
                                            <option value="" selected>
                                            <?php if ($row['permission']==0) {
                                                echo 'Giảng viên';
                                            }elseif ($row['permission']==1) {
                                                echo 'Nhân viên';
                                            }else{
                                                echo 'Quản trị viên';
                                            } 
                                            ?>
                                            
                                        </option>
                                <?php
                                        }

                                                        
                                ?>
                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnEditUser" value="Save" class="btn btn-success">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnEditUser'])){
                    $fullName   = $_POST['txtFullName'];
                    $email      = $_POST['txtEmail'];
                    $introduction    = $_POST['txtIntroduction'];
                    $permission      = $_POST['txtPermission'];
                   // alert("1");có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Kiểm tra: Dữ liệu người dùng nhập 
                    //Bước 02: Thực hiện truy vấn

                    $sql = "UPDATE tbl_admin SET fullname = '$fullName', email ='$email', introduction = '$introduction', permission ='$permission'
                            WHERE id_admin = '$id'";
                    if(mysqli_query($conn,$sql)){
                        //echo '<script>alert("Incorrect username and/or password!")</script>';
                         echo '<script>window.location.replace("userManagement.php")</script>';
                    }
                }
            ?>
    </main>
</div>
<?php
    include("templates/footer.php");
    //ob_end_flush();
?>
   
