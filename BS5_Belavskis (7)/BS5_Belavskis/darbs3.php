<!DOCTYPE html>
<html lang="lv">
<head>
  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
  
<?php 
  include 'navbar.php';
?>
  
      <div class="container mt-3">
        <h2>3. darbs-Reģistracijas forma</h2>
        <form action="/action_page.php">

          <!-- Name --> 
          <div class="mb-3 mt-3">
            <label for="name">Vārds:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>

          <!-- Email --> 
          <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          
          <!-- Password --> 
          <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
          </div>

          <!-- Radio --> 
        <p>Atzimejiet kursu:
          <div class="form-check">
            
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              1. kurss
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
              2. kurss
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3">
              3. kurss
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">
              4. kurss
            </label>
          </div>
          <br>

          <!--  grupa --> 
          <p>
            <form action="/action_page.php">
              <label for="grupa">Izvelejiet grupu:</label><br>
              <select id="grupa" name="grupa">
                <option value="pr11">pr11</option>
                <option value="pr21">pr21</option>
                <option value="pr31">pr31</option>
                <option value="pr41">pr41</option>
              </select>
            </form>

          <!-- Check --> 
          <p>Atzimejiet WEB tehnologijas:
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


          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>








<footer class="mt-auto p-2 bg-success text-white max-width text-center fixed-bottom">
  <p>Manas lapas kajene - @ 2022</p>
</footer>

</body>
</html>