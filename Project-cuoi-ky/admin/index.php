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
                <div class="row flex-nowrap ">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-3 bg-dark" style="margin: 0 auto;">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                    <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                                </a>
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link align-middle px-0">
                                            <i class="fs-4 bi-house text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Trang chủ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-speedometer2 text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý khóa học</span> 
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới khóa học</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Sửa thông tin khóa học</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Xóa khóa học</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                            <i class="fs-4 bi-bootstrap text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý đơn hàng</span>
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới đơn hàng</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Sửa đơn hàng</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Xóa đơn hàng</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                            <i class="fs-4 bi-bootstrap text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý khách hàng</span>
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới khách hàng</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Sửa thông tin khách hàng</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Xóa khách hàng</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-grid text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý bài viết</span> 
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới bài viết</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Sửa bài viết</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Xóa bài viết</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-people text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý nhân viên</span> 
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới nhân viên</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Sửa thông tin nhân viên</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Xóa nhân viên</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                                <hr>
                                <div class="dropdown py-5">
                                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                            <span class="d-none d-sm-inline mx-1">
                                                <?php echo $_SESSION['name']?>
                                            </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                        <li><a class="dropdown-item" href="#">Cài đặt</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li>
                                        <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="http://localhost/project-cuoi-ky/admin/logout.php">Log out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col py-4">
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
                                                    <th scope="col" style="width: 100px; overflow: hidden; text-align: center;">Hành động</th>
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
                                                    <td>
                                                        <a href="#" class="bi-pencil-fill m-3"></a>
                                                        <a href="#" class="bi-trash"></a>
                                                    </td>
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
                                                    <th scope="col" style="width: 100px; overflow: hidden; text-align: center;">Hành động</th>
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
                                                    <td>
                                                        <a href="#" class="bi-pencil-fill m-3"></a>
                                                        <a href="#" class="bi-trash"></a>
                                                    </td>
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
                                                    <th scope="col" style="width: 10px; overflow: hidden; text-align: center;">Địa chỉ</th>
                                                    <th scope="col" style="width: 70px; overflow: hidden; text-align: center;">SDT</th>
                                                    <th scope="col" style="width: 10px; overflow: hidden; text-align: center;">Hành động</th>
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
                                                    <td>
                                                        <a href="#" class="bi-pencil-fill m-3"></a>
                                                        <a href="deleteUser.php?id=<?php echo $row['id_customer']; ?>" class="bi-trash"></a>
                                                    </td>
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
                                                    <th scope="col" style="width: 100px; overflow: hidden; text-align: center;">Hành động</th>
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
                                                    <td>
                                                        <a href="#" class="bi-pencil-fill m-3"></a>
                                                        <a href="#" class="bi-trash"></a>
                                                    </td>
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
   