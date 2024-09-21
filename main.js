function myFunction() {
  var x = document.getElementsByClassName("nav__list")[0];
  if (window.matchMedia("(max-width:1400px)").matches ) {
    if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
  }
  
}