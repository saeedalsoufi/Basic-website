/* 
Title: ww3 Responsive Topnav Example
Author: W3Schools.com
Date: 2020
Availability: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav
*/
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
var slideIndex = 0;
showSlides();


 /* 
Title: ww3 Responsive Topnav Example
Author: W3Schools.com
Date: 2020
Availability: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav
Comment: This is the code for the navigation bar, I have edited it so it works on my website and did some changes on it, changed the design and other stuff.
*/
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}