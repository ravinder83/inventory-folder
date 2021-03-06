<?php
include 'dbcon.php';
include 'user/userAuth.php';
if(isset ($_COOKIE['loginid'])){
  $id = $_COOKIE['loginid'];
  $sql = "Select * from user where id = '$id'";
  $query = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($query);

}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Dashboard</title>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-6 col-sm-6 d-flex">
          <!-- <p>Hello <?php if(isset($_COOKIE['loginid'])){ echo $row['username'];}else{echo "";}  ?></p> -->
          <?php
          if($row['role'] == 1)
          {
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
              $url = "https://";   
              else  
              $url = "http://";      
              $url.= $_SERVER['HTTP_HOST'];     
              $url.= $_SERVER['REQUEST_URI'];
              // echo $url;
              // die;    
                if($url === 'http://localhost/php-routing/customer/contacts.php'){
                 ?><a href="../customer/addcontact.php" class="btn btn-primary" style="font-size: 11px; margin:7px; margin-left:14px; text-align:center; height:35px;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Contact</a><?php
                }else if($url === 'http://localhost/inventory%20stock%20management/editall.php'){
                  ?><?php
                }  else if($url === 'http://localhost/php-routing/product/product.php' || $url === 'http://localhost/php-routing/product/items.php' || $url === 'http://localhost/php-routing/customer/addcontact.php'){
                  ?><a href="../product/product.php" class="btn btn-primary" style="font-size: 11px; margin:7px; margin-left:14px; text-align:center; height:35px;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Item</a><?php
                }
                else{
                  ?><a href="product/product.php" class="btn btn-primary" style="font-size: 11px; margin:7px; margin-left:14px; text-align:center; height:35px;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Item</a><?php
                }
          }
          ?>
      </div>

      <div class="col-6 col-sm-6">
          <a href="user/logout.php" class="btn btn-light btn-sm" style="margin-top:7px; margin-left: 25%;">
            <span><i class="fas fa-sign-out-alt"></i></span>Log out
          </a>
      </div>
        
    </div>
  </div>   
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>