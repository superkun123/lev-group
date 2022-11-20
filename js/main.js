const bread = jQuery('.breadcrumbs');
if (bread) {
    bread.find('.home span').text('Главная')
}

if (jQuery('body'.hasClass('team-template-out-team-post'))) {
    // bread.find('.home span').text('Главная')
    const firstBread = bread.find('.home span')[0]
    $(`<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Перейти к ЛЕВЪ." href="https://lev-group.ru/about/" class="home" data-wpel-link="internal"><span property="name">О компании</span></a><meta property="position" content="1"></span>
    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Перейти к ЛЕВЪ." href="https://lev-group.ru/about/nashi-sotrudniki/" class="home" data-wpel-link="internal"><span property="name">Команда</span></a><meta property="position" content="1"></span>`).insertAfter( firstBread );

}



jQuery(document).on('ready', function () {

    const lastMember = jQuery('.member').last()

    const noPhotoArr = jQuery('.member-no-photo')

    noPhotoArr.insertAfter( lastMember );

    const main = jQuery('main');
    let menuBtn = document.querySelector('.nav-main__hamburger')
    let modalBtn = document.querySelectorAll('.contacts__modal')
    let closeBtn = document.querySelector('.modal__cross')
    let modal = document.querySelector('.modal-form')
    let menu = document.querySelector('.nav__list')
    let modalBanner = document.querySelector('.modal-banner')
    let closeBtnBanner = document.querySelector('.modal-banner .modal__cross')
    let bannerLocal = sessionStorage.getItem('banner');

    // block animation
    const animations = () => {
        // map visible animation for index page
        let animationsItem = jQuery('.animation-block');

        jQuery(animationsItem).each(function () {
            let offsetItem = jQuery(this).offset().top - 600;
            if (jQuery(window).width() < 767) {
                offsetItem = jQuery(this).offset().top - 800;
            }

            let item = jQuery(this);

            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > offsetItem) {
                    item.addClass('animation');
                }
            });
        })
    }

    if (main.hasClass('main-page') || main.hasClass('services-page')) {
        animations();
    }

    // cookie
    function checkCookies() {
        let cookieDate = localStorage.getItem('cookieDate');
        let cookieNotification = document.getElementById('cookie_notification');
        let cookieBtn = cookieNotification.querySelector('.cookie_accept');

        // Если записи про кукисы нет или она просрочена на 1 год, то показываем информацию про кукисы
        if (!cookieDate || (+cookieDate + 31536000000) < Date.now()) {
            cookieNotification.classList.add('show');
        }

        // При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
        cookieBtn.addEventListener('click', function () {
            localStorage.setItem('cookieDate', Date.now());
            cookieNotification.classList.remove('show');
        })
    }

    checkCookies();

    jQuery('#index-menu .sub-menu').addClass('sub-list');

    // if (jQuery(main).hasClass('teammate-page')) {
    //
    //     if (window.matchMedia("(min-width: 1200px)").matches) {
    //         (function () {
    //             var a = document.querySelector('.person-img'), b = null, P = 0;  // если ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента. Может быть отрицательным числом
    //             window.addEventListener('scroll', Ascroll, false);
    //             document.body.addEventListener('scroll', Ascroll, false);
    //
    //             function Ascroll() {
    //                 if (b == null) {
    //                     var Sa = getComputedStyle(a, ''), s = '';
    //                     for (var i = 0; i < Sa.length; i++) {
    //                         if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
    //                             s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
    //                         }
    //                     }
    //                     b = document.createElement('div');
    //                     b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
    //                     a.insertBefore(b, a.firstChild);
    //                     var l = a.childNodes.length;
    //                     for (var i = 1; i < l; i++) {
    //                         b.appendChild(a.childNodes[1]);
    //                     }
    //                     a.style.height = b.getBoundingClientRect().height + 'px';
    //                     a.style.padding = '0';
    //                     a.style.border = '0';
    //                 }
    //                 var Ra = a.getBoundingClientRect(),
    //                     R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('.company-news').getBoundingClientRect().top + 0);  // селектор блока, при достижении верхнего края которого нужно открепить прилипающий элемент;  Math.round() только для IE; если ноль заменить на число, то блок будет прилипать до того, как нижний край элемента дойдёт до футера
    //                 if ((Ra.top - P) <= 0) {
    //                     if ((Ra.top - P) <= R) {
    //                         b.className = 'stop';
    //                         b.style.top = -R + 'px';
    //                     } else {
    //                         b.className = 'sticky';
    //                         b.style.top = P + 'px';
    //                     }
    //                 } else {
    //                     b.className = '';
    //                     b.style.top = '';
    //                 }
    //                 window.addEventListener('resize', function () {
    //                     a.children[0].style.width = getComputedStyle(a, '').width
    //                 }, false);
    //             }
    //         })()
    //     }
    // }

    const showBaner = function () {
        modalBanner.classList.toggle('show')
    }

    const hideBanner = function () {
        modalBanner.classList.toggle('show')
    }

    modalBtn.forEach(element => {
        element.addEventListener('click', function (event) {
            event.preventDefault()
            modal.classList.toggle('show')
        })
    });

    closeBtn.addEventListener('click', function (event) {
        event.preventDefault()
        modal.classList.toggle('show')
    })

    jQuery('.js-tab-content:first-child').addClass('active');
    jQuery('.tab-header > div:first-child .js-tab-trigger').addClass('active');

    jQuery('.js-tab-trigger').click(function () {
        var id = jQuery(this).attr('data-tab'),
            content = jQuery('.js-tab-content[data-tab="' + id + '"]');
        jQuery('.tab-content__slider').addClass('fadeInAnim');

        jQuery('.js-tab-trigger.active').removeClass('active');
        jQuery(this).addClass('active');

        jQuery('.js-tab-content.active').removeClass('active');
        content.addClass('active');
    });

    jQuery('.big-image-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: `<svg  class="slick-prev" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.37136e-07 11.5L20 2.38498e-07C20 2.38498e-07 4.63768 11.5 20 23L1.37136e-07 11.5Z" fill="#7D88A3"/></svg>`,
        nextArrow: `<svg class="slick-next" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 11.5L9.01987e-07 23C9.01987e-07 23 15.3623 11.5 1.90735e-06 -8.74228e-07L20 11.5Z" fill="#7D88A3"/></svg>`,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    infinite: true,
                    prevArrow: `<div></div>`,
                    nextArrow: `<div></div>`,
                }
            },
        ]
    });


    jQuery('.victories-slider').slick({
        infinite: true,
        slidesToShow: 3,
        centerMode: true,
        centerPadding: '0px',
        slidesToScroll: 1,
        prevArrow: `<svg  class="slick-prev" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.37136e-07 11.5L20 2.38498e-07C20 2.38498e-07 4.63768 11.5 20 23L1.37136e-07 11.5Z" fill="#7D88A3"/></svg>`,
        nextArrow: `<svg class="slick-next" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 11.5L9.01987e-07 23C9.01987e-07 23 15.3623 11.5 1.90735e-06 -8.74228e-07L20 11.5Z" fill="#7D88A3"/></svg>`,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    infinite: true,
                    prevArrow: `<div></div>`,
                    nextArrow: `<div></div>`,
                }
            },
        ]
    });


    jQuery('.news-slider-new').slick({
        dots: false,
        speed: 500,
        centerMode: false,
        slidesToShow: 3,
        cssEase: 'linear',
        nextArrow: `<svg class="slick-next" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 11.5L9.01987e-07 23C9.01987e-07 23 15.3623 11.5 1.90735e-06 -8.74228e-07L20 11.5Z" fill="#7D88A3"/></svg>`,
        prevArrow: `<svg  class="slick-prev" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.37136e-07 11.5L20 2.38498e-07C20 2.38498e-07 4.63768 11.5 20 23L1.37136e-07 11.5Z" fill="#7D88A3"/></svg> `,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    infinite: false,
                    centerPadding: 0,
                    prevArrow: `<div></div>`,
                    nextArrow: `<div></div>`,
                }
            },
        ]
    });

// слайдер  таймером

    jQuery('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        centerMode: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 10000,
        pauseOnHover: true

    });

    jQuery(".slider .slick-dots").append("<li class='animated-dot'><li>");

    var time = 10;
    var $bar,
        isPause,
        tick,
        percentTime;

    $bar = jQuery('.slider-progress .progress');

    // function startProgressbar() {
    //     resetProgressbar();
    //     percentTime = 0;
    //     isPause = false;
    //     tick = setInterval(interval, 10);
    // }

    // function interval() {
    //
    //     if (isPause === false) {
    //         percentTime += 1 / (time + 0.1);
    //         $bar.css({
    //             width: percentTime + "%"
    //         });
    //         if (percentTime >= 100) {
    //             jQuery(".slider").slick('slickNext');
    //             startProgressbar();
    //         }
    //     }
    // }
    //
    // function resetProgressbar() {
    //     $bar.css({
    //         width: 0 + '%'
    //     });
    //     clearTimeout(tick);
    // }
    //
    // startProgressbar();
    //
    // jQuery(".slider").on("beforeChange", function () {
    //     resetProgressbar();
    //     startProgressbar();
    //     $bar.css({
    //         width: 100 + "%"
    //     });
    // });


    jQuery('.reviews-slide').hover(function () {
        jQuery('.slider')
    })

    jQuery('.humburger').on('click', function () {
        jQuery('.main-menu').toggleClass('open-menu')
        jQuery('html').toggleClass('lock')
    })


    jQuery('.back-btn').on('click', function () {
        jQuery('.main-menu').toggleClass('open-menu')
        jQuery('html').toggleClass('lock')
    })

})