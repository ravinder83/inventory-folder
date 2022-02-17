<?php
include 'dbcon.php';
$sql = "Select * from product";
$sqlquery = mysqli_query($con, $sql);
$res = [];
while ($row = mysqli_fetch_array($sqlquery)) {
    array_push($res, $row);
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Dashboard</title>
</head>

<body style="background-color: #f0f2f7;">
    <?php include 'header.php' ?>
    <!-- <form class="d-flex col-lg-2" action="search.php" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Search Items" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form> -->
    <h2 class="text-center mt-4">Item List</h2>
    <form method="post" action="updatedata.php">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Qty</th>
                <th scope="col">New Qty</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($res as $items) {
            ?><tr>
                    <td><?php echo $items['name'] ?></td>
                    <!-- <td><input  class="iquantity" onchange="subtotal()" type=number value="<?php echo $items['qty'] ?>"></td> -->
                    <td><?php echo $items['qty'] ?></td>

                    <td class="cart-product-quantity" width="130px">
                        <div class="input-group quantity">
                            <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                <span class="input-group-text">-</span>
                            </div>
                            <input type="text" class="qty-input form-control" onchange="subtotal()" maxlength="2" max="10" value="<?php echo $items['qty'] ?>">
                            <div class="input-group-append increment-btn" style="cursor: pointer">
                                <span class="input-group-text">+</span>
                            </div>
                        </div>
                    </td>
                 
                </tr><?php
                    }
                ?>
        </tbody>
    </table>
    <input type="submit" class="btn btn-primary" name="submit" value="update All"></a>
    </form>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
<script>
$(document).ready(function () {
$('.increment-btn').click(function (e) {
    e.preventDefault();
    var incre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(incre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
        $(this).parents('.quantity').find('.qty-input').val(value);
    }

    console.log(value);

});

$('.decrement-btn').click(function (e) {
    e.preventDefault();
    var decre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(decre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
        $(this).parents('.quantity').find('.qty-input').val(value);
    }
    console.log(value);
});

});
</script>

<script>
    var iqty =document.getElementsByClassName('qty-input');
    function subtotal()
    {
        // for(i=0;i<iqty.length;i++){
        // (qty[i].innerText=(iqty[i].value) * 4) ;
        // }
        $(iqty)
        console.log(iqty);
    }
</script>