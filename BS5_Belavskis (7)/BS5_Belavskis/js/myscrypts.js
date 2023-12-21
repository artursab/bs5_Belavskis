
// Get the button
let mybutton = document.getElementById("myBtn");
      
// When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

     function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       mybutton.style.display = "block";
      } else {
       mybutton.style.display = "none";
      }
  } 

// When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
        }



// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//survey form submit
var i=0 //attempts
var iesphtmlBasic = 0 // count of Basic cases
var iesphtmlPro = 0 // count of Pro cases
var htmlbasicWidth = 0 // width of HTML Basics Progress Bar
var htmlproWidth = 0 // width of HTML Pro Progress Bar

function submitSurvey() {
	//HTML iespejas
	if (document.getElementById("iespejaHTML1").checked) {
		iesphtmlBasic += 1;
	}
	else if (document.getElementById("iespejaHTML2").checked){
		iesphtmlPro += 1;
	}
	htmlbasicWidth = iesphtmlBasic / (iesphtmlBasic + iesphtmlPro)}





  function submitQuiz() {
    var res = 0;
    if (document.getElementById("atb11").checked) {
      res += 1;
      document.getElementById("q1d").style.display = "none";
      document.getElementById("q1s").style.display = "block";
      document.getElementById("q1s").innerHTML = "Pareizi!";
    } else if (document.getElementById("atb12").checked || document.getElementById("atb13").checked) {
      document.getElementById("q1d").style.display = "block";
      document.getElementById("q1s").style.display = "none";
      document.getElementById("q1d").innerHTML = "Daļēji pareizi!";
    } else {
      document.getElementById("q1d").style.display = "block";
      document.getElementById("q1s").style.display = "none";
      document.getElementById("q1d").innerHTML = "Nepareizi!";
    }
  }   
     
          
                       