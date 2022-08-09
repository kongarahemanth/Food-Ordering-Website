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
    <title>Dine & Cheer Restaurant</title>
</head>
<style>
img {
        display: block;
        margin: auto;
        border-radius: 20px;
    }
    .cont{
        min-height:85vh;
    }
</style>
<body>
    <?php include 'Components/_header.php';?>
    <?php
    if(isset($_SESSION['purchased'])){
        include 'Components/_placeorders.php';
   echo '<div class="container cont my-5">
     <div class="alert alert-success my-3" role="alert">
     <h4 class="alert-heading">Your order has been placed successfully</h4>
     <p class="my-2">You can now see the status of your order by going to My Orders section.</p>
   </div>
     <img class="my-5 mx-auto" src="Images/smiley.webp" alt="Smiley">
    </div>';
    }
    else{
        echo '<div class="container cont my-5">
        <div class="alert alert-danger my-3" role="alert">
        <h4 class="alert-heading">Your order has not been placed successfully :( as you purchased no items</h4>
        <p class="my-2">You can exit this page by clicking logout or again view other items.</p>
      </div></div>';
    }
    ?>
    
    <?php include 'Components/_footer.php';?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>
</html>