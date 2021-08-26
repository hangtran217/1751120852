<?php
include('connection.php');
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
  SELECT * FROM tbl_customer 
  WHERE  
    (fullname LIKE '%" . $search . "%')
 ";
}
else {
    $query = "
  SELECT *
FROM tbl_customer 
 ";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
  <div class="table-responsive">
   <table class="table table-bordered table-triped" style = "width : 1100px">
    <tr>
        <th scope="col" style="width: 30px; overflow: hidden; text-align: center;">#</th>
        <th scope="col" style="width: 10px; overflow: hidden; text-align: center;">Tên khách hàng</th>
        <th scope="col" style="width: 50px; overflow: hidden; text-align: center;">Ngày sinh</th>
        <th scope="col" style="width: 70px; overflow: hidden; text-align: center;">Email</th>
        <th scope="col" style="width: 10px;  text-align: center;">Địa chỉ</th>
        <th scope="col" style="width: 70px; overflow: hidden; text-align: center;">SDT</th>
    </tr>
 ';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
    <tr>
        <td><?php echo $row['id_customer']; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['datebirth']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['phone']; ?></td>
   </tr>
  ';
    }
    echo $output;
} else {
    echo 'Không có thông tin';
}
?>

