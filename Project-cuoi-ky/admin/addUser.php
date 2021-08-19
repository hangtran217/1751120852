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
    <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputUsernam3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="usename" class="form-control" id="inputEmail3" placeholder="Username">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group row">
    <div colspan="2" class="d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
</div>


<?php
    if(isset($_POST['btnAddUser']))
    $sql = "INSERT INTO tbl_customer ("full
?>
   