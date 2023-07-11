function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

//Start of link used to reference javascript used for card flip: https://www.youtube.com/watch?v=QGVXmoZWZuw
const card = document.querySelectorAll('.innerCard');

card.forEach((card) => {
     card.addEventListener("click", () => {
          card.classList.toggle("is-flipped");
     });
});
//End of link used to reference javascript used for card flip: https://www.youtube.com/watch?v=QGVXmoZWZuw

//Start of reference of slide show: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto */
var slideIndex = 0;
getSlides();

function getSlides() {
  var i;
  var slides = document.getElementsByClassName("slides");
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
  setTimeout(getSlides, 5000); // Pictures change every 5 seconds
}
//End of reference of slide show: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto */