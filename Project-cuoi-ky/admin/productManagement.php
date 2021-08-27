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
    <div id="main-main" class="">
            <h2 class="d-flex justify-content-center">Danh mục sản phẩm</h2>
            <div style="">
                <ul class="nav d-flex justify-content-center">
                    <li>
                        <a href="addCourse.php" class="btn btn-success" style = "margin-left: 30px;">Thêm sản phẩm</a>
                        
                    </li>
                </ul>



                <div class="container mt-5 mb-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-10">
                            
                            <?php
                                       
                                $sql = "SELECT * FROM tbl_course";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)>0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            
                                <div class="row p-2 bg-white border rounded">
                                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="../images/<?php echo $row['image']?>"></div>
                                <div class="col-md-6 mt-1">
                                    <h5><?php echo $row['course_name']?></h5>
                                    <div class="d-flex flex-row">
                                    </div>
                                    
                                    <p class="text-justify para mb-0"><?php echo $row['description']?><br><br></p>
                                </div>
                                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                    <div class="d-flex flex-row align-items-center">
                                        <h4 class="mr-1"><?php echo $row['price']?>.00 BIGOLD</h4>
                                    </div>
                                    <h6 class="text-success"></h6>
                                    <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Chi tiết</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Thêm vào giỏ hàng</button></div>
                                </div>
                            </div>
                            <?php
                                $i++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                



                </main>
            </div>
<?php
    include("templates/footer.php");
?>