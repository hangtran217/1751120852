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
?>
    <div id="main-main" class="">
            <h2 class="d-flex justify-content-center">Quản lý khách hàng</h2>
            <div style="">
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item">
                        <input style="height: 38px; width: 500px;" class="" type="text" id="myInput" onkeyup="myFunction()" placeholder="Tìm theo tên" title="Type in a name">
                    </li>
                    <li>
                        <a href="addCustomer.php" class="btn btn-success" style = "margin-left: 30px;">Thêm nhân sự</a>
                        
                    </li>
                </ul>

                <div class="row main-content" style="margin-left: 1%; margin-right: 1%;"> 
                    <div class=" bg-white">
                        <div id=" list-content">
                            <table class="table table-striped table-sm table-bordered" style="" align="center" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col"style="overflow: hidden; text-align: center; width: 40px;">#</th>
                                        <th scope="col"style="overflow: hidden; text-align: center; width: 170px;">Họ và tên</th>
                                        <th scope="col"style="overflow: hidden; text-align: center; width: 150px;">Username</th>
                                        <th scope="col"style="overflow: hidden; text-align: center; width: 200px;">Email</th>
                                        <th scope="col"style="overflow: hidden; text-align: center; width: 200px;">Giới thiệu</th>
                                        <th scope="col"style="overflow: hidden; text-align: center; width: 200px;">Quyền</th>
                                        <th scope="col"style="overflow: hidden; text-align: center; width: 100px;">Đổi mật khẩu</th>
                                        <th scope="col"style="overflow: hidden; text-align: center; width: 100px;">Cập nhật</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                       
                                        $sql = "SELECT * FROM tbl_admin";
                                        $result = mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($result)>0){
                                            $i=1;
                                            while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr>
                                        <th scope="row" style="overflow: hidden; text-align: center;"><?php echo $i; ?></th>
                                        <td> <?php echo $row['fullname']; ?> </td>
                                        <td > <?php echo $row['username']; ?></td>
                                        <td> <?php echo $row['email']; ?></td>
                                        <td > <?php echo $row['introduction']; ?></td>
                                        <td> <?php if ($row['permission']==0) {
                                            echo 'Giảng viên';
                                        }elseif ($row['permission']==1) {
                                            echo 'Nhân viên';
                                        }else{
                                            echo 'Quản trị viên';
                                        } ?></td>
                                        <td><a href="changePassword.php?myid=<?php echo $row['id_admin']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                        <td><a href="editUser.php?myid=<?php echo $row['id_admin']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <?php
                                        $i++;
                                        }
                                    }
                                    ?>
                                </tr>
                            </tbody><br><br>
                        </table>
                        <script>
                            function myFunction() {
                              var input, filter, table, tr, td, i, txtValue;
                              input = document.getElementById("myInput");
                              filter = input.value.toUpperCase();
                              table = document.getElementById("myTable");
                              tr = table.getElementsByTagName("tr");
                              for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[0];
                                if (td) {
                                  txtValue = td.textContent || td.innerText;
                                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                  } else {
                                    tr[i].style.display = "none";
                                  }
                                }       
                              }
                            }
                        </script>
                    </div>
                </main>
            </div>
<?php
    include("templates/footer.php");
?>