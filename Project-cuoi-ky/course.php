<?php
    // We need to use sessions, so you should always start sessions using the below code.
    include('admin/connection.php');
    session_start();
    // If the user is not logged in redirect to the login page...
    include("navbar.php")
    //ob_start();
?>

<!-- GET dữ liệu cán bộ theo id -->
    <?php 
        $id     = $_GET['id'];
        $sql    = "SELECT * from tbl_course where id_course={$id}";
        $query  = mysqli_query($conn,$sql);
        $row    = mysqli_fetch_assoc($query);
    ?>


            <section>
            <div class="container">
                <div class="row" style="margin-bottom:60px; ">
                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:60px;" id="section2-el1">
                             <img class="col-12" src="images/<?php echo $row['image']; ?>" alt="">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:60px;" >
                            <h1><?php echo $row['course_name']; ?></h1>
                            <p><?php echo $row['description']; ?></p>
                            <a href="cart.php"><button style="margin-left: 20%; margin-right: 10%; height: 40px; text-align: center; background-color: #a93f93; border-radius: 5px; color: white;">Mua khóa học với: <?php echo $row['price']; ?>.00 BIGOLD</button></a>
                    </div>
                </div>
            </div>
        </section>

            
            
    </main>
</div>
<?php
    include("footer.php");
    //ob_end_flush();
?>
   
