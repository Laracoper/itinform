// new Swiper ('.swiper', {
// бесконечный слайдер
// loop: true,
// effect: 'coverflow',

// количество дублирующих слайдов
// loopedSlides: 0,

// автопрокрутка
// autoplay: {
//     delay: 9000,
// },

// скорость
// speed: 800,

// адаптивность
// breakpoints: {
//     320: {
//         slidesPerView: 1,
//     },
//     480: {
//         slidesPerView: 2,
//     },
//     991.98: {
//         slidesPerView: 3,
//     }
// },


// navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
// круглые кнопки  
// pagination: {
//     el: '.swiper-pagination',
//     clickable: true,
//   },
// автовысота
// autoHeight: true,

// количество слайдов для показа
// slidesPerView: 2.3,
// centeredSlides: true,

// отступы между слайдами
// spaceBetween: 30,

// количество пролистываемых слайдов
// slidesPerGroup: 1,
// });

// -----------------------------------------------------

const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

if (isMobile.any()) {
    document.body.classList.add('_touch');
} else {
    document.body.classList.add('_pc');
}



// -------------------------------------------------------------

const menuIcon = document.querySelector('.menu__icon')
const blockHeaderMenu = document.querySelector('.block-header__menu')

if (menuIcon) {
    menuIcon.addEventListener('click', function (e) {
        menuIcon.classList.toggle('active')
        blockHeaderMenu.classList.toggle('active')
        document.body.classList.toggle('lock')

    })
}

// ----------------------------------------------------------

const stut = document.querySelector('.stut')
const stutbtn = document.querySelector('.stut__btn')

// function stutopen() {
//     stut.classList.add('.open')
// }

setTimeout(() => {
    stut.classList.add('open')
},6000)

stutbtn.addEventListener('click', function() {
    stut.classList.remove('open')
})

// ---------------------------------------------------------

window.addEventListener('scroll', function () {
    if (pageYOffset > 100) {
        document.querySelector('.header').classList.add('_active')
    } else {
        document.querySelector('.header').classList.remove('_active')
    }
})

// ---------------------------------------------------------------

const myModalBtn = document.querySelector('.block-main-bottom__btn')
const myModal = document.querySelector('.mymodal')

myModalBtn.addEventListener('click', function (e) {
    myModal.classList.add('open')
    document.body.classList.add('lock')
})

const myModalIcon = document.querySelector('.mymodal__icon')

myModalIcon.addEventListener('click', function (e) {
    myModal.classList.remove('open')
    document.body.classList.remove('lock')
})