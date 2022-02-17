<?php
include 'dbcon.php';
include 'userAuth.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <title>Dashboard2</title>
</head>
<body style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.8)),url('images/91-919034_online-survey-hd-png-download.png'); background-size:cover;background-position: center;background-repeat: no-repeat;">
  <div class="container-fluid" style="margin-top: 20px;">
    <h1 class="text-light">Items</h1>
  </div>
  <div class="container" 
  style="height: 100vh;display: flex;justify-content: center;align-items: center;">
      <div>
      <p class="text-light">You Have No Items In Your Inventory</p>
      <a href="product.php" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Item</a>
      </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>