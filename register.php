<?php
session_start();

require_once 'dbconnect.php';

if(isset($_POST['register'])) {
 
 
 
 @$username = mysqli_real_escape_string($db,$_POST['fullname']);
 @$email = mysqli_real_escape_string($db,$_POST['email']);
 @$password = mysqli_real_escape_string($db,$_POST['password']);
 @$repassword = mysqli_real_escape_string($db,$_POST['repassword']);
 
     if($password==$repassword){
         $sql = "SELECT id FROM user WHERE email = '$email'";
    
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
 
         if ($count==0) {

          $query = "INSERT INTO user (fullname,email,password) VALUES('$username','$email','$password')";

          if (mysqli_query($db,$query)) {
           @$msg = "<div class='alert alert-success'>
              <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
             Please <a href='index.php'>LOG IN</a></div>";

          }else {
           @$msg = "<div class='alert alert-danger'>
              <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
             </div>";
          }

         } else {


          @$msg = "<div class='alert alert-danger'>
             <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
            Please <a href='index.php'>LOG IN</a></div>";

         }

     }
 //$hashed_password = password_hash($password, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
    else
    {
       @$msg = "<div class='alert alert-danger'>
              <span class='glyphicon glyphicon-info-sign'></span> &nbsp; password missmatch !
             </div>"; 
    }
 
 
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./plugins/iCheck/square/blue.css">

 
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#">Jacos</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
    <p class="login-box-msg"><?php echo @$msg; ?></p>  

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="fullname" class="form-control" placeholder="Full name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="repassword" class="form-control" placeholder="Retype password" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="./plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="./plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
