<?php
include 'dbcon.php';
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
              $url = "https://";   
              else  
              $url = "http://";      
              $url.= $_SERVER['HTTP_HOST'];     
              $url.= $_SERVER['REQUEST_URI'];   
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Product Page</title>
</head>

<body style="background-color: #f0f2f7;";>
<div class="container-fluid" style="box-shadow: 20px 20px 50px #8aaae6 inset;">
  <div class="row">
    <?php 
        if($url === 'http://localhost/php-routing/dashboard.php')
          {
            ?><div class="col-12 d-flex">
            <a class="nav-link text-dark" style="font-size: 24px;" href="dashboard.php">Home</a>
            <p style="margin-top:5%; margin-left:40%;">Hello <?php if(isset($_COOKIE['loginid'])){ echo $row['username'];}else{echo "";}  ?></p>
            </div><?php
          }else{
            ?><div class="col-12 d-flex">
            <a class="nav-link text-dark" style="font-size: 24px;" href="../dashboard.php">Home</a>
            <p style="margin-top:5%; margin-left:40%;">Hello <?php if(isset($_COOKIE['loginid'])){ echo $row['username'];}else{echo "";}  ?></p>
            </div><?php
          }
    ?>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>