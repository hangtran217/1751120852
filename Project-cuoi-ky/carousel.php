<!-- Bắt đầu phần Hệ Thống sản phẩm <Slide> --> 

<div class="container" id="section3">
    <h2>HỆ THỐNG SẢN PHẨM</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="myCarousel" class="carousel multi-item-carousel slide " data-ride="carousel">
            
            <div class="carousel-inner " role="listbox">
                
                
                
                <?php  
                    $sql = "SELECT * FROM tbl_course";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['id_course'] == 1) {
                                
                            
                ?>
                <div class="carousel-item active" data-interval="500">
                    <div class="col col-md-3 mx-auto d-block">
                        <a id="carousel-item" href="/chuongtrinh/#">
                            <img src="images/thai-giao.jpg" class="img-thumbnail rounded-circle border border-5 border-white" style="width:300px;height:300px;">
                            <h4>Chương trình Thai giáo</h4>
                            <p>
                                Chương trình là bộ cẩm nang hữu ích hướng dẫn cha mẹ tương tác với thai nhi đúng cách, giúp con phát triển tối ưu các chức năng não bộ ngay từ những ngày đầu của thai kỳ.
                            </p>
                            <button onclick="location.href='chuongtrinh/#'">Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <?php 
                }else{ ?>
                <div class="carousel-item " data-interval="500">
                    <div class="col col-md-3">
                        <a id="carousel-item" href="course.php?id=<?php echo $row['id_course']; ?>">
                            <img src="images/<?php echo $row['image']; ?>" class="img-thumbnail rounded-circle border border-5 border-white"  style="width:300px;height:300px;">
                            <h4><?php echo $row['course_name']; ?></h4>
                            <p>
                                <?php echo $row['description']; ?>
                            </p>
                            <button onclick="location.href='couse.php?id=<?php echo $row['id_course']; ?>'" class="align-middle">Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <?php  
                            }
                        }
                    }
                ?>
                
            </div>
            
           <a class="carousel-control-prev bg-transparent w-aut text-success"  href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut text-success" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a> 
        </div>
    </div>
    <br>
</div>
    <!-- Kết thúc phần Hệ Thống sản phẩm <Slide> -->