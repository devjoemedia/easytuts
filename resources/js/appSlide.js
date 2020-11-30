let slide = document.getElementsByClassName("banner");
let indicator = document.getElementsByClassName("indicator");

// Slide show
var slideIndex = 0;
function slideShow() {
  for (let i = 0; i < slide.length; i++) {
    slide[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slide.length) {
    slideIndex = 1;
  }

  for (let i = 0; i < indicator.length; i++) {
    indicator[i].className = indicator[i].className.replace(" active", "");
  }
  slide[slideIndex - 1].style.display = "block";
  indicator[slideIndex - 1].className += " active";

  setTimeout(slideShow, 3000);
}
slideShow();
