<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="Components/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <style>
.menucards:hover{
      box-shadow: 3px 1px 5px 1px #cccccc;
  }
  .card-img-top{
    border:2px solid white;
  }
</style>
  <title>Swing your Mood</title>
</head>

<body>
<?php include 'Components/_header.php';?>
<?php
  if(isset($_SESSION['loggedin'])){
    echo '<div class="container"><div class="alert alert-success my-3" role="alert">
    <span class="fs-3">Hello,</span> <span class="alert-heading fs-4"><strong> '.$_SESSION['username'].'</strong></span>
    <p>You can now place your order from the below items.</p> 
    <p>Click on proceed to checkout and confirm your order.</p>
    <p>Maximum purchase limit is 10 per item.</p>
    <p class="my-2">You can exit this page whenever you want by clicking the logout option in the top-right corner.</p>
  </div></div>';
 }
?>
  <form action="purchase.php" method="post">
  <div class="container my-4 mb-5">
    <div class="row row-cols-2 row-cols-md-4 g-3">
        <?php 
        $i=1;
        $names=array("7up","Amul Kool","Hershey's Badam Shake ","Banana shake","Hershey's choco shake","cococola","Combo","Frappe shake","Helath drink combo","Hell","Hempyberry","Limca","Monster beast","Monster","Red bull","Sprite","Sting","Strom","thumps Up");
        $prices=array(50,40,30,35,40,30,30,45,45,40,50,50,52,45,78,14,25,14,55);
        while($i<=19){
        echo'<div class="col">
          <div class="card menucards bg-dark" data-aos="zoom-in">
            <img src="Images/a1('.$i.').jfif" height="250" class="card-img-top" alt="Menu Images">
            <div class="card-body text-light text-center">
              <h5 class="card-title fs-3">'.$names[$i-1].'</h5>
              <p class="card-text fs-4">Rs. '.$prices[$i-1].'</p>
             <div class="text-center"> <label class="labels" for="qty"><strong>Quantity:</strong></label>
              <input min="0" max="10" type="number" name="menui'.$i.'qty" id="i'.$i.'qty"></div>
            </div>
          </div>
        </div>';
        $i++;
        }
        ?>
      </div>
     <div class="text-center"><button type="submit" class="btn btn-success mt-4 fs-3">Proceed to Checkout</button></div> 
  </div>
</form>
<?php include 'Components/_footer.php';?>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
      <!-- jQuery -->
  <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById("menu_nav").className ="nav-link active";
        AOS.init({duration:1500, easing:'ease'});
    </script>
</body>
</html>