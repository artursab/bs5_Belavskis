

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



    <?php
 session_start();
 if($_SESSION['admin']){
 header("Location: admin.php");
 exit;
 }
 $admin='admin';
 $pass='admin';
 if(isset($_POST['submit'])){
    $input_user = $_POST['user'];
    $input_pass = $_POST['pass'];

 if($input_user == $admin AND md5($pass) == md5($input_pass)){
 $_SESSION['admin']=$admin;
 header("Location:admin.php");
 exit;
 }
 else echo'<p> Username vai Password ir nepareizi! </p>';
 }
?>


<form method="post">
 Username: <input type="text" name="user"/><br>
 Password: <input type="password" name="pass" /><br>
 <input type="submit" name="submit" value="Ienākt"/>
</form>

<form>
<a href="register.php" class="btn">Register</a>
</form>


<footer class="mt-auto p-2 bg-success text-white max-width text-center fixed-bottom">
<p>Manas lapas kajene - @ 2022</p>
</footer>

</body>
</html>