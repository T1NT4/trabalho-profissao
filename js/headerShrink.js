window.onscroll = function() {myFunction()};

var header = document.getElementsByTagName("header")[0];

var sticky = 100;

function myFunction() {
  if (window.scrollY > sticky) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
}