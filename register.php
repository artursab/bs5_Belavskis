

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
 <title>Galvenā lapa</title>

 <style>
    /* Style for anchor tags */
    a {
      color: #007bff; /* Blue color for normal links */
      text-decoration: none; /* Remove underlines from links */
      font-weight: bold; /* Make the links bold */
    }
    a:hover {
      color: #0056b3;
    }
  </style>

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

<form method="post" action="register.php" style="margin-bottom: 20px;">
    <a>Login: <input type="text" name="login"/></a><br>
    <a>Password: <input type="password" name="pass"/></a><br>
    <a>Email: <input type="text" name="email"/></a><br>
    <input type="submit" name="submit" value="Reģistrēties"/>
</form>


<?php
session_start();
$_SESSION["mySessionVariable"] = "MEMBER"; 

include 'config.php';

if(isset($_POST['submit'])){
    $maxIdQuery = "SELECT MAX(id) as last_id FROM reg_users";

    $result = $conn->query($maxIdQuery);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastid = $row['last_id'];

        $newId = $lastid + 1;
    }
    else {
        $newId = 1;
    }

    $login = $_POST['login'];
    $pass = md5($_POST['pass']);
    $email = $_POST['email'];
    $sql= "INSERT INTO reg_user (id, login, password, email) VALUES ('$newId', '$login', '$pass', '$email')";
    if ($conn->query($sql)===TRUE){
    echo "Jaunais ieraksts tika izveidots veiksmīgi";
    }else{
    echo "Kļūda: " .$sql."<br>".$conn->error;
    }
    }
   /* Aizvērt savienojumu */
    mysqli_close($conn);
?>


<footer class="mt-auto p-2 bg-success text-white max-width text-center fixed-bottom">
<p>Manas lapas kajene - @ 2022</p>
</footer>

</body>
</html>