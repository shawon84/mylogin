<?php
session_start();
if(!isset($_SESSION['email']))
{
     header("location:index.php");
}

require_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome Page</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="./dist/css/AdminLTE.min.css"> 
    
  <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
 
  <script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'right',
        html : true,
      
        content : '<div class="media"><a href="#" class="close" data-dismiss="alert">×</a><a href="#" class="pull-left"></a><div class="media-body"><h4 class="media-heading">in preparation</h4></div></div>'
    });
    $(document).on("click", ".popover .close" , function(){
        $(this).parents(".popover").popover('hide');
    });
});
 </script>
    
</head>
    
    
<body class="hold-transition register-page">

  <div class="content-header">
      <section class="content-header text-right">
          <span class="hidden-xs"><b><?php echo $_SESSION['username']; ?></b>
          <br><small><?php echo $_SESSION['email']; ?></small></span>     
      </section>
    
    
      
      
      
      <div class="container text-center">
      <h1>Jacos JCS System</h1>
      <section class="content-header text-center"></section>   
      <div class="panel panel-default">
          <div class="panel-body text-left"><h2>Maintenance announcement<br>Maintenance will be carried out on 1 October 2016 AM 1: 00 to 2: 00.</h2></div>
      </div>
      </div>
      
      
      <section class="content-header text-center"></section><!--for sape between button-->
      <section class="content-header text-center"></section>
      
      <section class="content-header text-center">
      <a href="#" class="btn btn-primary" data-toggle="popover" style="width: 200px">Confirmed picking</a>
      </section>
      
      
      
      <section class="content-header text-center">
      <a href="#" class="btn btn-primary" data-toggle="popover" style="width: 200px">Handwriting input</a>
      </section>
      
      <section class="content-header text-center">
      <a href="#" class="btn btn-primary" data-toggle="popover" style="width: 200px">Data output</a>
      </section>
      
      <section class="content-header text-center">
      <a href="#" class="btn btn-primary" data-toggle="popover" style="width: 200px">Billing operation</a>
      </section>
      
      <section class="content-header text-center"></section><!--for sape between button-->
      <section class="content-header text-center"></section>
      <section class="content-header text-center"></section>
      
     
      <section class="content-header text-center">
      <a href="logout.php" class="btn btn-primary" style="width: 200px" >Log out</a>
      </section>
      
      
  </div>
    
        

<!-- jQuery 2.2.3 -->
<script src="./plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="./plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
</body>
</html>
