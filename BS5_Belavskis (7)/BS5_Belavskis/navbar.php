<?php

echo '<nav class="navbar navbar-expand-sm bg-success navbar-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.jpg" alt="Logo" style="width:40px;" class="rounded-pill"> Mana Bootstrap vietne
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Darbi</a>
          <ul class="dropdown-menu bg-success">
            <li><a class="dropdown-item text-white" href="darbs1.php">1. darbs</a></li>
            <li><a class="dropdown-item text-white" href="darbs2.php">2. darbs</a></li>
            <li><a class="dropdown-item text-white" href="darbs3.php">3. darbs</a></li>
            <li><a class="dropdown-item text-white" href="darbs4.php">4. darbs</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="atteli.php">Attēli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakti.php">Kontākti</a>
        </li>  
    </ul>
    </div>
  </div>
</nav>';

?>