<?php
session_start();
include "_loginmodal.php";
include "_signupmodal.php";
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="./index.php">
      <img src="./Images/Logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand" href="./index.php">Swing your Mood</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" id="home_nav" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="menu_nav" href="./menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="specials_nav" href="./specials.php">Specials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact_nav" href="./contact.php">Contact Us</a>
        </li>
      </ul>
      <?php
      if(isset($_SESSION['loggedin'])){
        echo '<button class="btn btn-outline-success" type="submit"><a href="./Components/_logout.php" style="text-decoration:none; color:white;">Logout</a></button>';
        echo '<a class="nav-link" id="orders_nav" style="text-decoration:none; color:white;" href="./orders.php">My Orders</a>';
      }
      else{
        echo '<button class="btn btn-outline-success mx-2" type="submit" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
        <button class="btn btn-outline-success" type="submit" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>';
      }
      ?>
    </div>
  </div>
</nav>
<?php
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> You can now login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> '.$_GET['error'].'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['login']) && $_GET['login']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> You are logged in
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['login']) && $_GET['login']=="false"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> '.$_GET['error'].'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>