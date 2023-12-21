<!DOCTYPE html>
<html>
<head> 
<meta http-equiv="Content-Type" content ="text/html" charset ="utf-8" http-equiv= "Content-Language" content = "lv">
<link rel="shortcut icon" href="images/logo.png" type="image/png">
<title>1. Darbs</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

	
</head>

    <?php 
  include 'navbar.php';
?>

    <body style="background-color: #ffffff"> 
    


    <div class="container-fluid" style="margin-top:80px;">
        <h1>1. Darbs</h1>
        </div>
    <div class="container">
        <h2>Aptaujas forma</h2>
        <p style="color:black;">Lūdzu aizpildiet šo anketu!<br> Jau iepriekš pateicamies par izpratni un sadarbību!</p>
        <p><b>Lūdzu atzīmējiet jūsu iespējas</b></p>
        <form>
        <table class="table table-borderless">
            <thead>
                <tr>
                  <th class="text-left">Iespējas</th>
                  <th class="text-center">Basic</th>
                  <th class="text-center">Pro</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: #F2F2F2">HTML</td>
                    <td><div class="text-center"><input type="radio" id="iespejaHTML1"  name="iespHTML" value="basic" checked></div></td>
                  <td>
                      <div class="text-center"><input type="radio" id="iespejaHTML2"  name="iespHTML" value="pro"></div></td>
                </tr>
                <tr>
                  <td>CSS</td>
                    <td><div class="text-center"><input type="radio" id="iespejaCSS1" name="iespCSS" value="basic" checked></div></td>
                    <td><div class="text-center"><input type="radio" id="iespejaCSS2" name="iespCSS" value="pro"></div></td>
                </tr>
                <tr>
                  <td style="background-color: #F2F2F2">JavaScript</td>
                    <td><div class="text-center"><input type="radio" id="iespejaJavaScript1" name="iespejaJavaScript" value="basic" checked></div></td>
                    <td><div class="text-center"><input type="radio" id="iespejaJavaScript2" name="iespejaJavaScript" value="pro"></div></td>
                </tr>
              </tbody>
            </table>
            <p><b>Vai kursa saturiskā daļa atbilst gaidītajam?</b></p>
            <input type="radio" class="form-check-input; align-middle" id="anwser1" name="radiobutton1" style="margin-right: 4px"> Atbilst <br>
            <input type="radio" class="form-check-input; align-middle" id="anwser2" name="radiobutton1" style="margin-right: 4px"> Daļēji atbilst <br>
            <input type="radio" class="form-check-input; align-middle" id="anwser3" name="radiobutton1" style="margin-right: 4px"> Neatbilst <br>
            <br>
            <p><b>Vai kursa laikā iegūtā informācija būs Jums noderīga?</b></p>    
            <input type="radio" class="form-check-input; align-middle" id="anwser4" name="radiobutton2" style="margin-right: 4px"> Jā <br>
            <input type="radio" class="form-check-input; align-middle" id="anwser5" name="radiobutton2" style="margin-right: 4px"> Daļēji <br>
            <input type="radio" class="form-check-input; align-middle" id="anwser6" name="radiobutton2" style="margin-right: 4px"> Nē <br>                       
            <input type="button" onclick="submitSurvey(i++)" class="btn btn-success" value="Sumbit"/>
          </div>
            <div class="container" style="margin-bottom: 80px">              
            <h2>Aptaujas rezultāti</h2>
            <strong>HTML iespējas</strong>
            <div class="progress">
              <div id="htmlbasic" class="progress-bar bg-success" style="width:0%"></div>
              <div id="htmlpro" class="progress-bar bg-warning" style="width:0%"></div>
            </div>
              <strong>Css iespējas</strong>
            <div class="progress">
              <div id="cssbasic" class="progress-bar bg-success" style="width:0%"></div>
              <div id="csspro" class="progress-bar bg-warning" style="width:0%"></div>
            </div>
              <strong>Java script iespējas</strong>
            <div class="progress">
              <div id="javabasic" class="progress-bar bg-success" style="width:0%"></div>
              <div id="javapro" class="progress-bar bg-warning" style="width:0%"></div>
            </div>
              <strong>Vai kursa saturiskā daļa atbilst gaidītajam?</strong>
            <div class="progress">
              <div id="Pbar1" class="progress-bar bg-success" style="width:0%"></div>
              <div id="Pbar2" class="progress-bar bg-warning" style="width:0%"></div>
              <div id="Pbar3" class="progress-bar bg-danger" style="width:0%"></div>
            </div>
              <strong>Vai kursa laikā iegūtā informācija būs Jums noderīga?</strong>
            <div class="progress">
              <div id="Pbar4" class="progress-bar bg-success" style="width:0%"></div>
              <div id="Pbar5" class="progress-bar bg-warning" style="width:0%"></div>
              <div id="Pbar6" class="progress-bar bg-danger" style="width:0%"></div>
            </div>
                      </div> 

              <!-- Button -->
                      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


                      <footer class="mt-auto p-2 bg-success text-white max-width text-center fixed-bottom">
                        <p>Manas lapas kajene - @ 2022</p>
                      </footer>

                      
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
           <script src="js/bootstrap.min.js"></script>
          <script src="js/myscrypts.js"></script>
          <script>
              i = 0;
              iesphtmlBasic = 0;
              iesphtmlPro = 0;
              htmlbasicWidth = 0;
              htmlproWidth = 0;
              
              iespcssBasic = 0;
              iespcssPro = 0;
              cssbasicWidth = 0;
              cssproWidth = 0;
              
              iespjavaBasic = 0;
              iespjavaPro = 0;
              javabasicWidth = 0;
              javaproWidth = 0;
              
              anws1 = 0;
              anws2 = 0;
              anws3 = 0;
              anws1Width = 0;
              anws2Width = 0;
              anws3Width = 0;
              
              anws12 = 0;
              anws22 = 0;
              anws32 = 0;
              anws12Width = 0;
              anws22Width = 0;
              anws32Width = 0;
              
              anws13 = 0;
              anws23 = 0;
              anws33 = 0;
              anws43 = 0;
              anws53 = 0;
              anws13Width = 0;
              anws23Width = 0;
              anws33Width = 0;
              
              anws14 = 0;
              anws24 = 0;
              anws34 = 0;
              anws14Width = 0;
              anws24Width = 0;
              anws34Width = 0;
              
              function submitSurvey(nr){
              //HTML iespējas
              if (document.getElementById("iespejaHTML1").checked)
                  {
                      iesphtmlBasic += 1;
                  }
                  else if (document.getElementById("iespejaHTML2").checked)
                      {
                          iesphtmlPro += 1;
                      }
                  htmlbasicWidth = iesphtmlBasic / (iesphtmlBasic + iesphtmlPro) * 100;
                  htmlproWidth = iesphtmlPro / (iesphtmlBasic + iesphtmlPro) * 100;
                  
                  document.getElementById("htmlbasic").style.width = htmlbasicWidth + "%";
                  document.getElementById("htmlpro").style.width = htmlproWidth + "%";
                  
                  document.getElementById("htmlbasic").innerHTML = "Basic - " + iesphtmlBasic;
                  document.getElementById("htmlpro").innerHTML = "Pro - " + iesphtmlPro;      
              //CSS iespējas
                  if (document.getElementById("iespejaCSS1").checked)
                  {
                      iespcssBasic += 1;
                  }
                  else if (document.getElementById("iespejaCSS2").checked)
                      {
                          iespcssPro += 1;
                      }
                  cssbasicWidth = iespcssBasic / (iespcssBasic + iespcssPro) * 100;
                  cssproWidth = iespcssPro / (iespcssBasic + iespcssPro) * 100;
                  
                  document.getElementById("cssbasic").style.width = cssbasicWidth + "%";
                  document.getElementById("csspro").style.width = cssproWidth + "%";
                  
                  document.getElementById("cssbasic").innerHTML = "Basic - " + iespcssBasic;
                  document.getElementById("csspro").innerHTML = "Pro - " + iespcssPro;
              //Java script iespējas
                  if (document.getElementById("iespejaJavaScript1").checked)
                  {
                      iespjavaBasic += 1;
                  }
                  else if (document.getElementById("iespejaJavaScript2").checked)
                      {
                          iespjavaPro += 1;
                      }
                  javabasicWidth = iespjavaBasic / (iespjavaBasic + iespjavaPro) * 100;
                  javaproWidth = iespjavaPro / (iespjavaBasic + iespjavaPro) * 100;
                  
                  document.getElementById("javabasic").style.width = javabasicWidth + "%";
                  document.getElementById("javapro").style.width = javaproWidth + "%";
                  
                  document.getElementById("javabasic").innerHTML = "Basic - " + iespjavaBasic;
                  document.getElementById("javapro").innerHTML = "Pro - " + iespjavaPro;
                  
              //Vai kursa saturiskā daļa atbilst gaidītajam?
                  if (document.getElementById("anwser1").checked)
                  {
                        anws1 += 1;
                  }
                  else if (document.getElementById("anwser2").checked)
                      {
                          anws2 += 1;
                      }
                  else if (document.getElementById("anwser3").checked)
                      {
                          anws3 += 1;
                      }
                  anws1Width = anws1 / (anws1 + anws2 + anws3) * 100;
                  anws2Width = anws2 / (anws1 + anws2 + anws3) * 100;
                  anws3Width = anws3 / (anws1 + anws2 + anws3) * 100;
                  
                  document.getElementById("Pbar1").style.width = anws1Width + "%";
                  document.getElementById("Pbar2").style.width = anws2Width + "%";
                  document.getElementById("Pbar3").style.width = anws3Width + "%";
                  
                  document.getElementById("Pbar1").innerHTML = "Atbilst - " + anws1;
                  document.getElementById("Pbar2").innerHTML = "Daļēji Atbilst - " + anws2;
                  document.getElementById("Pbar3").innerHTML = "Neatbilst - " + anws3;
              
              //Vai kursa laikā iegūtā informācija būs Jums noderīga?
                  if (document.getElementById("anwser4").checked)
                  {
                      anws12 += 1;
                  }
                  else if (document.getElementById("anwser5").checked)
                      {
                          anws22 += 1;
                      }
                  else if (document.getElementById("anwser6").checked)
                      {
                          anws32 += 1;
                      }
                  anws12Width = anws12 / (anws12 + anws22 + anws32) * 100;
                  anws22Width = anws22 / (anws12 + anws22 + anws32) * 100;
                  anws32Width = anws32 / (anws12 + anws22 + anws32) * 100;
                  
                  document.getElementById("Pbar4").style.width = anws12Width + "%";
                  document.getElementById("Pbar5").style.width = anws22Width + "%";
                  document.getElementById("Pbar6").style.width = anws32Width + "%";
                  
                  document.getElementById("Pbar4").innerHTML = "Jā - " + anws12;
                  document.getElementById("Pbar5").innerHTML = "Daļēji - " + anws22;
                  document.getElementById("Pbar6").innerHTML = "Ne - " + anws32;
                }
                  </script>
              
                  </body>
          </html>