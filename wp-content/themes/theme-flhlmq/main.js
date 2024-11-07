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

// ---------------------- PAGE NOUVELLE HUB -> EN CONTINU ------------------------

let slideActuelle = 0;
let slide = document.querySelector('.swiper-wrapper');
let boutton = document.querySelectorAll('.pagination-button');

function changerSlide(indexSlide) {
    slide.style.transform = `translateX(-${indexSlide * 100}%)`;
    
    boutton[slideActuelle].classList.remove('active');
    boutton[indexSlide].classList.add('active');
    
    slideActuelle = indexSlide;
}

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
