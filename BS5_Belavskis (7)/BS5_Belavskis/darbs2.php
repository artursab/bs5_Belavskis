<!DOCTYPE html>
<html lang="lv">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>


	<!-- JavaScript -->
	<script src="js/myscrypts.js"></script>

</head>

<?php 
  include 'navbar.php';
?>

<body class="d-flex flex-column min-vh-100">

  

<div class="container mt-3">
  <h2>2. darbs-Testešanas forma</h2>
  <form action="/action_page.php">

    <!-- Radio --> 
    <ol type="1">
  <b><li>Cik daudz tagu satur nakamaja rinda?</li></b><br>

  < img src="images/logo.jpg" ></br>
  class="rounded" alt="Logo"</br>
  style="width: 40px" >

    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        1
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
      <label class="form-check-label" for="flexRadioDefault2">
        2
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
      <label class="form-check-label" for="flexRadioDefault3">
        3
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
      <label class="form-check-label" for="flexRadioDefault4">
        4
      </label>
    </div>
    <br>

    <!-- Check --> 
    <b><li><p>Atzimejiet WEB tehnologijas:</li></b>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      <label class="form-check-label" for="check1">HTML</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">CSS</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">
      <label class="form-check-label" for="check3">JAVA</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
      <label class="form-check-label" for="check4">PHP</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check5" name="option5" value="something">
      <label class="form-check-label" for="check5">AJAX</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check6" name="option6" value="something">
      <label class="form-check-label" for="check6">JSON</label>
    </div>
    <br>
  
    <form id="quiz">
      <h3>Jautājums 1</h3>
      <p>Kas ir galvenais HTML elements?</p>
      <label>
        <input type="radio" name="q1" value="1" id="atb11"> a) &lt;body&gt;
      </label><br>
      <label>
        <input type="radio" name="q1" value="2" id="atb12"> b) &lt;head&gt;
      </label><br>
      <label>
        <input type="radio" name="q1" value="3" id="atb13"> c) &lt;html&gt;
      </label><br>
      <input type="button" onclick="submitQuiz()" value="Submit">
    </form>
    
    <div id="q1s" class="alert alert-success" style="display:none"></div>
    <div id="q1d" class="alert alert-danger" style="display:none"></div>



  <!-- Vertibas --> 
  <b><li><p>Atzimejiet atributes vertibas:</li></b>

  </ol>

    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>

<footer class="mt-auto p-2 bg-success text-white max-width text-center fixed-bottom">
  <p>Manas lapas kajene - @ 2022</p>
</footer>

</body>
</html>