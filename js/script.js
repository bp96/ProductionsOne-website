// Select hamburger menu and navigation links
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

// Expand hamburger menu upon clicking
hamburger.addEventListener('click', ()=>{

//Animate Links
navLinks.classList.toggle("open");
links.forEach(link => {
link.classList.toggle("slide");
});

//Hamburger Animation
hamburger.classList.toggle("toggle");
});

// Change nav bar colour upon scrolling
function runOnScroll() {
	var scrollPos = window.scrollY;
    if (scrollPos >= 700 && window.innerWidth>1000) {
	     var colorVal = document.getElementById("nav-bar");
	     colorVal.style.background = "rgba(0,0,0, 0.4)";
      }
     else {
     var colorVal = document.getElementById("nav-bar");
      	colorVal.style.background = "transparent";
      }
 }; 

window.addEventListener("scroll", runOnScroll);

// Automatically change slides in Gallery
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slides-left");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

