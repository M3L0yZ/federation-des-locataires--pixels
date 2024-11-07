// ----------------------------- SWIPER --------------------------------------------

var swiper = new Swiper(".swiper-container", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
});

var swiper2 = new Swiper(".swiper-container2", {
    loop: true,
    slidesPerView: 2,
    centeredSlides: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
});

var swiper2 = new Swiper(".mySwiperHub", {
    loop: false,
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
      },
});

// ----------------------------- NAVBAR BOUTON HAMBURGER -----------------------------------
var navList = document.getElementsByClassName("nav__list")[0];
function boutonHamburger() {
    if (window.matchMedia("(max-width:1400px)").matches) {
        navList.classList.toggle('list-active');
    } else {
        navList.classList.remove('list-active');
    }
}

function TailleFenetre() {
    if (window.innerWidth >= 1400) {
        navList.classList.remove('list-active');
    } else {
        navList.classList.remove('list-active');
    }
}

window.addEventListener('resize', TailleFenetre);

// ----------------------------- GSAP -----------------------------------------

// Bouton hanburger

const hamburger = document.querySelector('.menu-hamburger');

hamburger.addEventListener('mouseover', () => {
  gsap.to(hamburger, {
    scale: 1.2,
    duration: 0.2
    }
  );
});

hamburger.addEventListener('mouseout', () => {
    gsap.to(hamburger, {
        scale: 1,
        duration: 0.2
    }
    );
  });

// ------ Modals page équipe ----- //

let html = document.querySelector("html");

//Modal #1
let modal1 = document.getElementById("modal1");
let info1 = document.getElementById("info1");
let btnClose1 = document.getElementById("btnClose1");

info1.onclick = function() {
  modal1.style.display = "block";
  html.style.overflow = "hidden";
}

btnClose1.onclick = function() {
  modal1.style.display = "none";
  html.style.overflow = "visible";
}

modal1.onclick = function() {
  modal1.style.display = "none";
  html.style.overflow = "visible";
}

//Modal #2
let modal2 = document.getElementById("modal2");
let info2 = document.getElementById("info2");
let btnClose2 = document.getElementById("btnClose2");

info2.onclick = function() {
  modal2.style.display = "block";
  html.style.overflow = "hidden";
}

btnClose2.onclick = function() {
  modal2.style.display = "none";
  html.style.overflow = "visible";
}

modal2.onclick = function() {
  modal2.style.display = "none";
  html.style.overflow = "visible";
}

//Modal #3
let modal3 = document.getElementById("modal3");
let info3 = document.getElementById("info3");
let btnClose3 = document.getElementById("btnClose3");

info3.onclick = function() {
  modal3.style.display = "block";
  html.style.overflow = "hidden";
}

btnClose3.onclick = function() {
  modal3.style.display = "none";
  html.style.overflow = "visible";
}

modal3.onclick = function() {
    modal3.style.display = "none";
    html.style.overflow = "visible";
}

//Modal #4
let modal4 = document.getElementById("modal4");
let info4 = document.getElementById("info4");
let btnClose4 = document.getElementById("btnClose4");

info4.onclick = function() {
  modal4.style.display = "block";
  html.style.overflow = "hidden";
}

btnClose4.onclick = function() {
  modal4.style.display = "none";
  html.style.overflow = "visible";
}

modal4.onclick = function() {
  modal4.style.display = "none";
  html.style.overflow = "visible";
}

//Modal #5
let modal5 = document.getElementById("modal5");
let info5 = document.getElementById("info5");
let btnClose5 = document.getElementById("btnClose5");

info5.onclick = function() {
  modal5.style.display = "block";
  html.style.overflow = "hidden";
}

btnClose5.onclick = function() {
  modal5.style.display = "none";
  html.style.overflow = "visible";
}

modal5.onclick = function() {
  modal5.style.display = "none";
  html.style.overflow = "visible";
}

//Modal #6
let modal6 = document.getElementById("modal6");
let info6 = document.getElementById("info6");
let btnClose6 = document.getElementById("btnClose6");

info6.onclick = function() {
  modal6.style.display = "block";
  html.style.overflow = "hidden";
}

btnClose6.onclick = function() {
  modal6.style.display = "none";
  html.style.overflow = "visible";
}

modal6.onclick = function() {
  modal6.style.display = "none";
  html.style.overflow = "visible";
}
