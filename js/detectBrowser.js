var user_agent = navigator.userAgent
if(user_agent.toLowerCase().includes("android")){
    document.getElementsByClassName("logo-emoji")[0].classList.add("android")
}
if(user_agent.toLowerCase().includes("iphone")){
    document.getElementsByClassName("logo-emoji")[0].classList.add("iphone")
}

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