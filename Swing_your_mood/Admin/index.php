<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../Components/style.css">
  <title>Dine & Cheer Restaurant</title>
  <style>
      .main-container{
          min-height:60vh;
      }
      table,tr,td{
    border:1px solid white;
}
th,td{
    padding:5px;
}
  </style>
</head>
<body>
<?php include '../Components/_adminheader.php';?>
<?php
include '../Components/_dbconnect.php';
?>
<?php
    if(isset($_GET['status']) && $_GET['status']=="true"){
      echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      <strong>Success!</strong> '.$_GET['success'].'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if(isset($_GET['status']) && $_GET['status']=="false"){
      echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
      <strong>Error!</strong> '.$_GET['error'].'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
<div class="main-container container mb-5">
    <h3 class="text-light text-center mt-3">Customer Orders</h3>
    <div class="row row-cols-2 row-cols-md-4 g-3">
        <?php 
        $sql="SELECT * FROM `menu_orders`";
        $result=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)){
        echo'<div class="col">
          <div class="card menucards bg-dark">
            <div class="card-body text-light text-center">
              <h5 class="card-title">Menu Order Id: #'.$row['sno'].'</h5><table class="container">';
              $menu_names_arr = explode (",", $row['menu_names']);
              $menu_prices_arr = explode (",", $row['menu_prices']);
              $menu_qty_arr = explode (",", $row['menu_qty']);
              $tc=0;
              for ($i = 0; $i < count($menu_names_arr)-1; $i++)  {
                echo '<tr><td>'.$menu_names_arr[$i].'</td><td>'.$menu_qty_arr[$i].'</td><td>'.$menu_prices_arr[$i].'</td></tr>';
                $tc+=$menu_qty_arr[$i]*$menu_prices_arr[$i];
              }
              echo '<tr><td>Total Cost</td><td></td><td>'.$tc.'</td></tr></table>';
              if($row['status']==0){
                echo '<p class="card-text fs-5 mt-2"> Status : Processing </p>';
              }
              elseif($row['status']==2){
                echo '<p class="card-text fs-5 mt-2"> Status : Order Delivered </p>';
              }
              else{
                echo '<p class="card-text fs-5 mt-2"> Status : Order on the Way </p>';  
              }
              echo '<form action="../Components/_changestatus.php?id='.$row['sno'].'&type=m" method="post"><button type="submit" class="btn btn-outline-light">Change Status</button></div></form>
          </div>
        </div>';
        }
        $sql="SELECT * FROM `special_orders`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
          echo'<div class="col">
            <div class="card menucards bg-dark">
              <div class="card-body text-light text-center">
                <h5 class="card-title">Specials Order Id: #'.$row['sno'].'</h5><table class="container">';
                $specials_names_arr = explode (",", $row['specials_names']);
                $specials_prices_arr = explode (",", $row['specials_prices']);
                $specials_qty_arr = explode (",", $row['specials_qty']);
                $tc=0;
                for ($i = 0; $i < count($specials_names_arr)-1; $i++)  {
                  echo '<tr><td>'.$specials_names_arr[$i].'</td><td>'.$specials_qty_arr[$i].'</td><td>'.$specials_prices_arr[$i].'</td></tr>';
                  $tc+=$specials_qty_arr[$i]*$specials_prices_arr[$i];
                }
                echo '<tr><td>Total Cost</td><td></td><td>'.$tc.'</td></tr></table>';
                if($row['status']==0){
                  echo '<p class="card-text fs-5 mt-2"> Status : Processing </p>';
                }
                elseif($row['status']==2){
                  echo '<p class="card-text fs-5 mt-2"> Status : Order Delivered </p>';
                }
                else{
                  echo '<p class="card-text fs-5 mt-2"> Status : Order on the Way </p>';  
                }
              echo '<form action="../Components/_changestatus.php?id='.$row['sno'].'&type=s" method="post"><button type="submit" class="btn btn-outline-light">Change Status</button></div></form>
            </div>
          </div>';
          }
        
        ?>
      </div>
  </div>
</div>
<?php include '../Components/_footer.php';?>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
    <script>
        document.getElementById("orders_nav").className ="nav-link active";
    </script>
</body>
</html>