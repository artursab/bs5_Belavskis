<!DOCTYPE html>
<html lang="lv">
<head>
  <title>Mana galvena Bootstrap lapa</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<?php 
  include 'navbar.php';
?>

<body>
      <!-- Kontakti -->
      
      <div class="container-fluid mt-3">
        <h3>Kontākti</h3>
        
      <div class="card-group text-center border border-success mb-2 border-5 bg-success">

          <div class="card">
            <img class="card-img-top" src="images/avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Arturs Belavskis</h4>
              <p class="card-text">PIKC DTTT</br>Programmesanas tehnkikis</p>
              <a href="darbs1.html" class="btn btn-primary bg-success">Skatit darbus</a>
            </div>
          </div>


          <div class="card" >
            <img class="card-img-top" src="images/avatar2.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Jekaterina Habarova</h4>
              <p class="card-text">PIKC DTTT</br>Programmesanas tehnkikis</p>
              <a href="darbs2.html" class="btn btn-primary bg-success">Skatit darbus</a>
            </div>
          </div>
         

          <div class="card" >
            <img class="card-img-top" src="images/avatar3.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Edgars Sinkevics</h4>
              <p class="card-text">PIKC DTTT</br>Programmesanas tehnkikis</p>
              <a href="darbs3.html" class="btn btn-primary bg-success">Skatit darbus</a>
            </div>
          </div>
        
          
          <div class="card" >
            <img class="card-img-top" src="images/avatar4.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Jelena Abarasa</h4>
              <p class="card-text">PIKC DTTT</br>Programmesanas tehnkikis</p>
              <a href="darbs4.html" class="btn btn-primary bg-success">Skatit darbus</a>
            </div>
          </div>

      </div>


      <!-- FOOTER -->
      <footer class="mt-auto p-2 bg-success text-white max-width text-center fixed-bottom">
        <p>Manas lapas kajene - @ 2022</p>
      </footer>
      
    </body>
</html>