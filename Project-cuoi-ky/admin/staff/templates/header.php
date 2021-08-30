<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Trang Quản trị</title>
  </head>
  <body>
    <div class="container-fluid bg-dark">
        <header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
        <a href="./" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <h1 class="fs-2 text-white">Quản trị</h1>
        </a>

        <ul class="nav ">
            <li class="nav-item"><a href="../" class="nav-link active el1 text-white" aria-current="page">Trang chủ</a></li>
            <li class="nav-item"><a href="./coursesManagement.php" class="nav-link el1 text-white">Khóa học</a></li>
            <li class="nav-item"><a href="./customersManagement.php" class="nav-link el1 text-white">Khách hàng</a></li>
            <li class="nav-item"><a href="./profile.php" class="nav-link el1 text-white">Profile</a></li>
            <li class="nav-item"><a href="../logout.php" class="nav-link el1 text-white">Logout</a></li>
        </ul>
        
        </header>

    </div>
<div id="main-main" class="container-fluid" >
        <main>
                <div class="row flex-nowrap " style="width: 83.3%; height: 50%;">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-3 bg-dark" style="margin: 0 auto;">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                <a href="./" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                    <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                                </a>
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                    <li class="nav-item">
                                        <a href="./" class="nav-link align-middle px-0">
                                            <i class="fs-4 bi-house text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Trang chủ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-speedometer2 text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý khóa học</span> 
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="courseManagement.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Danh sách khóa học</span>
                                                </a>
                                            </li>
                                            <li class="w-100">
                                                <a href="addCourse.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới khóa học</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                            <i class="fs-4 bi-bootstrap text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý đơn hàng</span>
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="invoiceManagement.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Danh sách đơn hàng</span>
                                                </a>
                                                <a href="addInvoice.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới đơn hàng</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                            <i class="fs-4 bi-bootstrap text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý khách hàng</span>
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="customersManagement.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Danh sách khách hàng</span>
                                                </a>
                                            </li>
                                            <li class="w-100">
                                                <a href="addCustomer.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới khách hàng</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-grid text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Quản lý bài viết</span> 
                                        </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="postManagement.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Danh sách bài viết</span></a>
                                            </li>
                                            <li class="w-100">
                                                <a href="addPost.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm mới bài viết</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="dropdown py-5">
                                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                                    <span class="d-none d-sm-inline mx-1">
                                                        <?php echo $_SESSION['name']?>
                                                    </span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                                <li>
                                                <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="../logout.php">Log out</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                
                            </div>
                        </div>