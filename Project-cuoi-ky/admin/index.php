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


                        <div class="py-4">
                            <h2 class="text-align-center">Thống kê</h2>
                            <div class="row main-content d-flex justify-content-center">
                                <div class="col col-md-2 mx-3 bg-white border border-3">
                                    <h5 >Khách hàng:</h5>
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

                                <!-- <div class="col col-md-3 mx-3 bg-white">
                                    <h5 >Nhân viên:</h5>
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
                                </div> -->

                                <div class="col col-md-2 mx-3 bg-white border border-3">
                                    <h5 >Khóa học:</h5>
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

                                <div class="col col-md-2 mx-3 bg-white border border-3">
                                    <h5 >Đơn hàng:</h5>
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
                                
                                <div class="col col-md-2 mx-3 bg-white border border-3">
                                    <h5 >Bài viết:</h5>
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
                            <br>

                            <h2 style="margin-top: 30px;">Danh sách</h2>
                            <div class="row main-content  d-flex justify-content-center">   
                                <div class="col col-md-5 m-2 mx-3 bg-white border border-3" >
                                    <h5 >Danh sách khóa học</h5>
                                    <div id=" list-content" style="height: 300px; overflow-x: scroll; overflow-y: scroll;">
                                        <table class="table table-striped table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 30px; overflow: hidden; text-align: center;">#</th>
                                                    <th scope="col" style="width: 150px; overflow: hidden; text-align: center;">Tên khóa học</th>
                                                    <th scope="col" style="width: 50px; overflow: hidden; text-align: center;">Giá tiền <br/>(BIGOLD)</th>
                                                    <th scope="col" style="width: 250px; overflow: hidden; text-align: center;">Mô tả</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    //Lặp lấy dữ liệu và hiển thị ra bảng
                                                    //Bước 02: Thực hiện Truy vấn
                                                    $sql = "SELECT * FROM tbl_course";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0){
                                                        $i=1;
                                                        while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td scope="row"><?php echo $i; ?></td>
                                                    <td><?php echo $row['course_name']; ?></td>
                                                    <td><?php echo $row['price']; ?></td>
                                                    <td><?php echo $row['description']; ?></td>
                                                <?php
                                                    $i++;
                                                    }
                                                }
                                                ?>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <div class="col col-md-5 m-2 mx-3 bg-white border border-3">
                                    <h5 >Danh sách đơn hàng</h5>
                                    <div id=" list-content" style="height: 300px; overflow-x: scroll; overflow-y: scroll;">
                                        <table class="table table-striped table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 70px; overflow: hidden; text-align: center;">Mã đơn hàng</th>
                                                    <th scope="col" style="width: 100px; overflow: hidden; text-align: center;">Ngày tạo</th>
                                                    <th scope="col" style="width: 100px; overflow: hidden; text-align: center;">Tên khách hàng</th>
                                                    <th scope="col" style="width: 50px; overflow: hidden; text-align: center;">Khóa học</th>
                                                    <th scope="col" style="width: 70px; overflow: hidden; text-align: center;">Giá tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    //Lặp lấy dữ liệu và hiển thị ra bảng
                                                    //Bước 02: Thực hiện Truy vấn
                                                    $sql = "SELECT * FROM tbl_invoice, tbl_customer where tbl_invoice.customer_id = tbl_customer.id_customer";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0){
                                                        $i=1;
                                                        while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id_invoice']; ?></td>
                                                    <td><?php echo $row['order_date']; ?></td>
                                                    <td><?php echo $row['fullname']; ?></td>
                                                    <td><?php echo $row['course_name']; ?></td>
                                                    <td><?php echo $row['price']; ?></td>
                                                <?php
                                                    $i++;
                                                    }
                                                }

                        
                                                ?>
                                            
                                          </tbody>
                                        </table>
                                    </div>                                    
                                </div>

                            </div>

                            <div class="row main-content d-flex justify-content-center">
                                
                                <div class="col col-md-5 m-2 mx-3 bg-white border border-3">
                                    <h5 >Danh sách khách hàng</h5>
                                    <div id=" list-content" style="height: 300px; overflow-x: scroll; overflow-y: scroll; ">
                                        <table class="table table-striped table-sm table-bordered" >
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 30px; overflow: hidden; text-align: center;">#</th>
                                                    <th scope="col" style="width: 10px; overflow: hidden; text-align: center;">Tên khách hàng</th>
                                                    <th scope="col" style="width: 50px; overflow: hidden; text-align: center;">Ngày sinh</th>
                                                    <th scope="col" style="width: 70px; overflow: hidden; text-align: center;">Email</th>
                                                    <th scope="col" style="width: 10px;  text-align: center;">Địa chỉ</th>
                                                    <th scope="col" style="width: 70px; overflow: hidden; text-align: center;">SDT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    //Lặp lấy dữ liệu và hiển thị ra bảng
                                                    //Bước 02: Thực hiện Truy vấn
                                                    $sql = "SELECT * FROM tbl_customer";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0){
                                                        $i=1;
                                                        while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id_customer']; ?></td>
                                                    <td><?php echo $row['fullname']; ?></td>
                                                    <td><?php echo $row['datebirth']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['address']; ?></td>
                                                    <td><?php echo $row['phone']; ?></td>
                                                <?php
                                                    $i++;
                                                    }
                                                }
                                                ?>
                                            
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <div class="col col-md-5 m-2 mx-3 bg-white border border-3">
                                    <h5 >Danh sách bài viết</h5>
                                    <div id=" list-content" style="height: 300px; overflow-x: scroll; overflow-y: scroll; ">
                                        <table class="table table-striped table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 30px; overflow: hidden; text-align: center;">#</th>
                                                    <th scope="col" style="width: 150px; overflow: hidden; text-align: center;">Tiêu đề bài viết</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    //Lặp lấy dữ liệu và hiển thị ra bảng
                                                    //Bước 02: Thực hiện Truy vấn
                                                    $sql = "SELECT * FROM tbl_post";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0){
                                                        $i=1;
                                                        while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id_post']; ?></td>
                                                    <td><?php echo $row['title']; ?></td>
                                                    
                                                <?php
                                                    $i++;
                                                    }
                                                }
                                                ?>
                                            
                                          </tbody>
                                        </table>
                                    </div>                                    
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
        </main>

    </div>
    <?php
    include("templates/footer.php");
?>
   