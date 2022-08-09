<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Dine & Cheer Restaurant</title>
    <link rel="stylesheet" href="Components/style.css">
    <style>
    .cont1{
        min-height:57vh;
        width:50%;
    }
    </style>
</head>
<body>
    <?php include 'Components/_header.php';?>
    <?php
    if(isset($_GET['review']) && $_GET['review']=="true"){
      echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      <strong>Success!</strong> '.$_GET['success'].'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if(isset($_GET['review']) && $_GET['review']=="false"){
      echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
      <strong>Error!</strong> '.$_GET['error'].'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="container text-light cont1 my-3 mb-5 bg-dark">
    <h1 class="text-center text-light">Contact Us</h1>
    <?php
    if(isset($_SESSION['loggedin'])){
    echo '<form method="post" class="my-5" action="Components/_handlecontact.php">
  <div class="mb-3">
    <label for="reason" class="form-label">Reason for Contacting</label>
    <input type="text" class="form-control" id="reason" name="reason" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="desc" class="form-label">Description</label>
  <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>';
    }
    else{
        echo '<div class="container my-3"><div class="alert alert-danger" role="alert">
        <h3 class="alert-heading">Please login to fill this form</h3>
        <p>The user suggestions or reviews can be sent here.</p>
      </div></div>';
    }
?>
 </div>  
    <?php include 'Components/_footer.php';?>

  <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById("contact_nav").className ="nav-link active";
    </script>
</html>
</body>
