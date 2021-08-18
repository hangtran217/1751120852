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

<div id="main-main" class="container-fluid" >
        <main>
            <h2 class="text-align-center">Dashboard</h2>
            <div class="row main-content d-flex justify-content-center">
                <div class="col col-md-2 mx-3 bg-white">
                    <h5 >Số lượng khách hàng:</h5>
                    <h3 class=" d-flex justify-content-center">
                        <?php
                            
                            // Bước 02: Thực thi truy vấn
                            $sql1 = "SELECT * FROM tbl_customer";
                            $result = mysqli_query($conn,$sql1);
                            // Bước 03: Xử lý kết quả: Lấy ra số bản ghi
                            $count_customer = mysqli_num_rows($result);
                            echo $count_customer;
                            // // Bước 04: Đóng kết nối
                            // mysqli_close($conn);
                        ?>
                    </h3>
                    
                </div>
                <div class="col col-md-2 mx-3 bg-white">
                    <h5 >Số lượng nhân viên:</h5>
                    <h3 class=" d-flex justify-content-center">
                    <?php
                           
                            // Bước 02: Thực thi truy vấn
                            $sql2 = "SELECT * FROM tbl_admin";
                            $result = mysqli_query($conn,$sql2);
                            // Bước 03: Xử lý kết quả: Lấy ra số bản ghi
                            $count_admin = mysqli_num_rows($result);
                            echo $count_admin;
                            // // Bước 04: Đóng kết nối
                            // mysqli_close($conn);
                    ?>
                    </h3>
                </div>
                <div class="col col-md-2 mx-3 bg-white">
                    <h5 >Số lượng khóa học:</h5>
                    <h3 class=" d-flex justify-content-center">
                    <?php
                           
                            // Bước 02: Thực thi truy vấn
                            $sql3 = "SELECT * FROM tbl_course";
                            $result = mysqli_query($conn,$sql3);
                            // Bước 03: Xử lý kết quả: Lấy ra số bản ghi
                            $count_course = mysqli_num_rows($result);
                            echo $count_course;
                            // // Bước 04: Đóng kết nối
                            // mysqli_close($conn);
                    ?>
                    </h3>
                </div>
                <div class="col col-md-2 mx-3 bg-white">
                    <h5 >Số lượng Đơn hàng:</h5>
                    <h3 class=" d-flex justify-content-center">
                    <?php
                            
                            // Bước 02: Thực thi truy vấn
                            $sql4 = "SELECT * FROM tbl_invoice";
                            $result = mysqli_query($conn,$sql4);
                            // Bước 03: Xử lý kết quả: Lấy ra số bản ghi
                            $count_invoice = mysqli_num_rows($result);
                            echo $count_invoice;
                            // // Bước 04: Đóng kết nối
                            // mysqli_close($conn);
                    ?>
                    </h3>
                </div>
                <div class="col col-md-2 mx-3 bg-white">
                    <h5 >Số lượng Bài viết:</h5>
                    <h3 class=" d-flex justify-content-center">
                    <?php
                            
                            // Bước 02: Thực thi truy vấn
                            $sql4 = "SELECT * FROM tbl_post";
                            $result = mysqli_query($conn,$sql4);
                            // Bước 03: Xử lý kết quả: Lấy ra số bản ghi
                            $count_post = mysqli_num_rows($result);
                            echo $count_post;
                            // // Bước 04: Đóng kết nối
                            // mysqli_close($conn);
                    ?>
                    </h3>
                </div>


            </div>

        </main>
    </div>
    <?php
    include("templates/footer.php");
?>
   