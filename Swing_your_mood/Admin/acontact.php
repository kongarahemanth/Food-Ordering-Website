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
<div class="main-container container mb-4">
    <h3 class="text-light text-center mt-3">Customer Contact Responses</h3>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <?php 
        $username=$_SESSION['username'];
        $sql="SELECT * FROM `contact`";
        $result=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)){
        echo'<div class="col container">
          <div class="card menucards bg-dark">
            <div class="card-body text-light text-center">
              <h5 class="card-title">Customer Review Id: #'.$row['sno'].'</h5><table class="container">';
                echo '<tr><td>'.$row['username'].'</td><td>'.$row['description'].'</td><td>'.$row['timestamp'].'</td></tr>';
              echo '</table>';
            echo '</div>
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