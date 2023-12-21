<?php
session_start();
$_SESSION["mySessionVariable"] = "MEMBER"; 
?>

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
 a {
        background-color: transparent;
        -webkit-text-decoration-skip: objects
    }

    a:active,
    a:hover {
        outline-width: 0
    }

    *,
    *:after,
    *:before {
        box-sizing: inherit;
        margin: 0;
        padding: 0;
        color: #000;
    }

    html {
        box-sizing: border-box;
        font-size: 1px !important;
    }

    body {
        font: normal 14rem/21rem Arial, 'Helvetica CY', 'Nimbus Sans L', sans-serif;
        background-color: #E5EEF5;
    }

    .outer {
        display: table;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
    }

    .middle {
        display: table-cell;
        vertical-align: middle;
    }

    .inner {
        margin-left: auto;
        margin-right: auto;
        max-width: 570rem;
        min-width: 360rem;
        padding: 20rem;
    }

    h1 {
        line-height: 48rem;
        font-size: 48rem;
    }

    h2 {
        margin-top: 15rem;
        line-height: 26rem;
        font-size: 26rem;
        margin-bottom: 45rem;
    }

    .button {
        position: relative;
        display: inline-block;
        text-decoration: none;
        background-color: #F93545;
        color: #fff;
        padding: 8rem 16rem;
        border-radius: 5rem;
        overflow: hidden;
        font-size: 16rem;
        font-weight: bold;
        text-shadow: 0px 0px 2px #aa0014;
    }

    i {
        border: solid #fff;
        border-width: 0 3rem 3rem 0;
        display: inline-block;
        padding: 3rem;
    }

    .right {
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }
    </style>

</head>


<body>
    <div class='outer'>
        <div class='middle'>
            <div class='inner'>
                <h1 id='t1'>Добро пожаловать!</h1>
                
                <h2 id='t2'>Darbs3</h2><a href='BS5_Belavskis (7)/BS5_Belavskis' class='button' id='t5'>Praktiskais_darbs_Nr9<i class="right"></i></a>
                
                
            </div>
        </div>
    </div>
    <?php
        echo "Arturs Belavskis";
    ?>
    <script>
    var userLang = navigator.language || navigator.userLanguage;
    var userLang_detected = userLang.toLowerCase();
    if (userLang_detected != 'ru-ru' && userLang_detected != 'ru') {
        document.title = 'Welcome!';
        document.getElementById('t1').innerHTML = 'Welcome!';
        document.getElementById('t2').innerHTML = 'Open Server Panel is running ;-)';
        document.getElementById('t3').innerHTML = 'User\'s manual <i class="right"></i>';
    }
    </script>
</body>




</html>