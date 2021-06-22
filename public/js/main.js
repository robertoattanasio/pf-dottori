window.addEventListener('scroll', function() {
    let navFixedTop = document.querySelector('header');
    navFixedTop.classList.toggle('nav_scrollOverHeader', window.scrollY > 10);

    // let toTopBtn = document.querySelector('.fixed_buttons_toTop');
    // toTopBtn.classList.toggle('toTop_scrollOverHeader', window.scrollY > 570);
})

//SLIDESHOW

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

//FINE SLIDESHOW

//INIZIO MODALE

// Get the modal
var modal = document.getElementById("myModal");

// Get the trigger that opens the modal
var trigger = document.getElementById("triggerModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the trigger, open the modal
trigger.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//FINE MODALE