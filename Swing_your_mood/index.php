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
    <title>Swing your Mood</title>
</head>
<body>
    <?php include 'Components/_header.php';?>

    <div class="container my-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/slider2.jpg"
                        class="d-block w-100" height="600px" alt="CarouselPic1">
                </div>
                <div class="carousel-item">
                    <img src="Images/x2.jpg"
                        class="d-block w-100" height="600px" alt="CarouselPic2">
                </div>
                <div class="carousel-item">
                    <img src="Images/abc.jpg"
                        class="d-block w-100" height="600px" alt="CarouselPic3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mb-5">
    <div id="home-tiles" class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <a href="menu.php"><div id="menu-tile">      
        <h2 class="mb-0">Menu</h2>
        <img src="Images/Menu.jpg" width="100%" height="250"></div></a>
    </div>
    <div id="sp"class="col-md-4 col-sm-6 col-xs-12">
      <a href="specials.php"><div id="specials-tile">
        <h2 class="mb-0">Specials</h2>
      <div><img src="Images/Specials.jpg" width="100%" height="250"></div></div></a>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
      <a href="https://goo.gl/maps/hikUdNvBPcvZEyA18" target="_blank">
        <div id="map-tile"> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243564.65546624045!2d78.1504407722519!3d17.
          47417520816627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb915c4a2a7789%3A0x95e6049fa5492cc8!2s
          Sri%20Raghavendra%20Pure%20Veg!5e0!3m2!1sen!2sin!4v1588266971075!5m2!1sen!2sin" 
          width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="true" loading="lazy" aria-hidden="false" tabindex="0"></iframe>    
          <h2 class="mb-0">Map</h2>
        </div>
      </a>
    </div>
  </div>
    </div>
    </div>
    <?php include 'Components/_footer.php';?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById("home_nav").className ="nav-link active";
    </script>
</body>
</html>