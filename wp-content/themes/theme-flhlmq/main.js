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

let currentSlide = 0;

function goToSlide(slideIndex) {
    const slides = document.querySelector('.swiper-wrapper');
    const buttons = document.querySelectorAll('.pagination-button');
    
    slides.style.transform = `translateX(-${slideIndex * 100}%)`;
    
    buttons[currentSlide].classList.remove('active');
    buttons[slideIndex].classList.add('active');
    
    currentSlide = slideIndex;
}

//Navbar fonctions
console.log("test");
function boutonHamburger() {
    var list = document.getElementsByClassName("nav__list")[0];
    if (window.matchMedia("(max-width:1400px)").matches) {
        list.classList.toggle('list-active');
    } else {
        list.classList.remove('list-active');
    }
}

function TailleFenetre() {
    var list = document.getElementsByClassName("nav__list")[0];
    if (window.innerWidth >= 1400) {
        list.classList.remove('list-active');
    } else {
        list.classList.remove('list-active');
    }
}

gsap.set(".imgerrerno", { opacity: 1, rotation: 0, x: 0, y: 0 });

// Create a timeline for the fade transition with more fun effects
gsap.timeline({ repeat: -1, yoyo: true })
    .to(".imgerrerno", {
        duration: 2,
        opacity: 0,
        rotation: -90,     
        ease: "bounce.out",
    })
    .to(".imgerrerno", {
        duration: 2,
        opacity: 1,
        rotation: 0,       // Reset rotation
        ease: "bounce.out"
    });