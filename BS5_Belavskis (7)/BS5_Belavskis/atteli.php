<!DOCTYPE html>
<html lang="lv">
<head>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {width: 70%; height: 70%;}
    /* Change carousel button colors */
    .carousel-control-next, .carousel-control-prev{filter: invert(100%);}
    /* Add shadow to caption */
    .carousel-caption{filter: drop-shadow(3px 3px 1px black);}
    </style>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">

<?php 
  include 'navbar.php';
?>


      <!-- Text -->
      <div class="container">
        <h3>Mani attēli</h3>
    
     <h4>PIKC "Daugavpils Tehnoloģiju un Tūrisma tehnikums" foto sīktēli</h4>
     <div class="alert alert-success alert-dismissible fade show">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Info!</strong> Ieklikskiniet uz siktela, lai apskatitu liela izmera foto!
    </div>
  </div>

      <!-- Images -->
      <div class="container mt-3">
        <img src="images/dttt1.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <img src="images/dttt2.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
        <img src="images/dttt3.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
        <img src="images/dttt4.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      </div>


      <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/dttt1.jpg" alt="Stradnieku iela" class="d-block mx-auto">
      <div class="carousel-caption">
      <h3>Stradnieku iela 16</h3>
    </div>
  </div>

    <div class="carousel-item">
      <img src="images/dttt2.jpg" alt="Bausakas iela" class="d-block mx-auto">
      <div class="carousel-caption">
      <h3>Bauskas iela 23</h3>
    </div>
  </div>

    <div class="carousel-item">
      <img src="images/dttt3.jpg" alt="Mendelejeva iela" class="d-block mx-auto">
      <div class="carousel-caption">
      <h3>Mendelejeva iela 1</h3>
    </div>
  </div>

    <div class="carousel-item">
      <img src="images/dttt4.jpg" alt="Miera iela" class="d-block mx-auto">
      <div class="carousel-caption">
      <h3>Miera iela 57</h3>
    </div>
  </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
  
<!-- Footer -->
<footer class="mt-auto p-2 bg-success text-white max-width text-center">
  <p>Manas lapas kajene - @ 2022</p>
</footer>

</body>
</html>