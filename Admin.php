
<html lang="lv">
<head>
    <meta http-equiv="Content-Type" content ="text/html" charset ="utf-8" http-equiv= "Content-Language" content = "lv">
<link rel="shortcut icon" href="images/logo.png" type="image/png">
<title>Index.php</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscrypt.js"></script>
 <title>Administratora lapa</title>
</head>
<body style="background-color: #ffffff">

<!-- NAVBAR --> 
<header>
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="logo.jpg" alt="Logo" style="width:40px;" class="rounded-pill"> WEB vietne
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        

        </div>
      </nav>
    </header>

<a href="admin.php?do=logout">Iziet</a>


<?php
session_start();
?>

<?php


if(isset($_GET['do']) && $_GET['do'] == 'logout'){
    unset($_SESSION['admin']);
    session_destroy();
    header("Location: enter.php");
    exit;
}

if(!isset($_SESSION['admin'])){
    header("Location: enter.php");
    exit;
}

include 'config.php';
?>



<?php

if ($result = mysqli_query($conn, 'SELECT id, login, email FROM reg_users ORDER BY id')) {
    echo "<br>Reģistrētie lietotāji: <br>";
    while($row = mysqli_fetch_assoc($result)){
        echo $row['id'] .". ". $row['login'] ." (". $row['email'].")<br>";
    }
    mysqli_free_result($result);
}

mysqli_close($conn);
?>


<footer class="mt-auto p-2 bg-success text-white max-width text-center fixed-bottom">
<p>Manas lapas kajene - @ 2022</p>
</footer>

</body>
</html>
