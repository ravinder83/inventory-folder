<?php
include 'dbcon.php';
$sql = "Select * from product";
$sqlquery = mysqli_query($con,$sql);
$res = [];
while ($row = mysqli_fetch_array($sqlquery)){
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
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <!-- <th scope="col">Qty</th> -->
      <th scope="col">New Qty</th>
    </tr>
  </thead>
  <tbody>
    <?php 
         foreach($res as $items){
            ?><tr>
                <td><?php echo $items['name'] ?>
                <p>Qty - <?php echo $items['qty'] ?></p></td>
                <td><input type=number value="0"></td>
                <!-- <td><button class="subtract">-</button>
                    <input type="number" value="<?php //echo $items['qty'] ?>">
                    <button class="add">+</button>
                </td>  -->
            </tr><?php
         }
    ?>
  </tbody>
</table>
    <button class="btn btn-success" id="getValues" class="btn btn-success m-4">Update All</button>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

<!-- <script>
// function getdata(){
//   var data =document.getElementById('mytable').value;
//   var qty =document.getElementsByClassName('qty');
//     // for(i=0;i<iqty.length;i++){
//     //     (qty[i].innerText=(iqty[i].value)) ;
//     // }
//     console.log(data);
// }

// for (var i = 0 ; i < btnAdd.length; i++) {
//    btnAdd[i].addEventListener('click' , ()=>{
//     input[i].value = parseInt(input[i].value) + 1;
//    }) ; 
// }



// let btnAdd = document.getElementsByClassName('add');
// let btnSubtract = document.getElementsByClassName('subtract');
// let input = document.querySelector('input');

// btnAdd.addEventListener('click', () =>{
//   input.value = parseInt(input.value) + 1;
// });
// btnSubtract.addEventListener('click', () =>{
//     input.value = parseInt(input.value) - 1;
// });
// subtotal();



 // Perform some action on button click
 jQuery('#getValues').click(function(){
//We will iterate over all rows in inside tbody of table with id myTable 
  jQuery('#myTable tbody tr').each(function(index, tr) {
         var lines =jQuery('td', tr).map(function(index, td) {
          return jQuery(td).text();
// This will save all date in lines array
    });
  
// Now test lines array by doing a console.log()
      console.log(lines[0] + ' ' + lines[1] + ' '  + lines[2] + ' '  + lines[3] );
    })
    // Now you have all values in lines array. You can send this complete array via ajax to server.
});



</script> -->
