/*
    Plugin: WooCommerce Product Carousel, Slider & Grid Ultimate
    Plugin URI: https://wordpress.org/plugins/woo-product-carousel-slider-and-grid-ultimate/
    Author: wpWax
    Version: 1.0
*/

document.addEventListener("DOMContentLoaded", function () {
    (function ($) {

        window.onload = (event) => {
            console.log('page is fully loaded');
        };

        document.addEventListener('DOMContentLoaded', function () {
            console.log('Content Loaded');
        });


        function alljs() {
            console.log('JS Loaded');
            
            window.addEventListener('load', function() {
                console.log('Loaded Window');
                let lazyLoadContainer = document.querySelectorAll('.wpcu-lazy-load');
                console.log({
                    lazyLoadContainer: lazyLoadContainer,
                });
                if (lazyLoadContainer.length !== 0) {
                    document.querySelectorAll('.wpcu-products').forEach((el) => {
                        el.classList.remove('wpcu-lazy-load');
                    })
                }
            });

            
            /* Style reset in buttons p tag */
            document.querySelectorAll('.wpcu-button p.woocommerce, p.product').forEach((el, id) => {
                el.setAttribute('style', 'none');
            });

            /* Lazy load */
            let lazyLoadContainer = document.querySelectorAll('.wpcu-lazy-load');
            if (lazyLoadContainer.length !== 0) {
                document.querySelectorAll('.wpcu-products').forEach((el) => {
                    el.classList.remove('wpcu-lazy-load');
                })
            }

            /* Theme buttons (.wpcu-product__action-icons--boxed) responsive fix */
            function btnResFix(selector, breakPoint) {
                var selectElement = document.querySelectorAll(selector);
                selectElement.forEach(elm => {
                    if (elm.clientWidth < breakPoint) {
                        elm.classList.add('wpcu-product__content--res-fix');
                    }
                })
            }
            btnResFix('.wpcu-theme_8 .wpcu-product__content', 300);
            btnResFix('.wpcu-theme_7 .wpcu-product__content', 305);
            btnResFix('.wpcu-theme_10 .wpcu-product__content', 320);


            /* Theme 15 tweaks */
            var theme15items = document.querySelectorAll('.wpcu-theme_15 .wpcu-product__details__content');
            theme15items.forEach(element => {
                element.closest('.wpcu-product__content').style.paddingBottom = (element.clientHeight - 45) + "px";
            });

            /* Check WPCU Carousel Data */
            let checkData = function (data, value) {
                return typeof data === 'undefined' ? value : data;
            };
            /* WPCU Carousel */
            let wpcuCarousel = document.querySelectorAll('.wpcu-carousel');
            wpcuCarousel.forEach(function (el) {
                let swiper = new Swiper(el, {
                    slidesPerView: checkData(parseInt(el.dataset.wpcuItems), 4),
                    spaceBetween: checkData(parseInt(el.dataset.wpcuMargin), 30),
                    loop: checkData(JSON.parse(el.dataset.wpcuLoop.toLowerCase()), false),
                    slidesPerGroup: checkData(parseInt(el.dataset.wpcuPerslide), 4),
                    speed: checkData(parseInt(el.dataset.wpcuSpeed), 3000),
                    autoplay: checkData(JSON.parse(el.dataset.wpcuAutoplay), {}),
                    navigation: {
                        nextEl: '.wpcu-carousel-nav__btn--next',
                        prevEl: '.wpcu-carousel-nav__btn--prev',
                    },
                    pagination: {
                        el: '.wpcu-carousel-pagination',
                        type: 'bullets',
                        clickable: true
                    },
                    breakpoints: checkData(JSON.parse(el.dataset.wpcuResponsive), {})
                })
            });

            /* Add to cart icon for theme-4, theme-5 and theme-11 */
            $(".wpcu-theme_4 .woocommerce a, .wpcu-theme_5 .woocommerce a, .wpcu-theme_9 .woocommerce a").html(`
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1056" height="896" preserveAspectRatio="xMidYMid meet" viewBox="-3.63064 -66.0327 1030.76 1000.035" style="-ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);"><path d="M1022.74 17.3604l-83.4072 503.777c-7.44043 65.3115 -66.9766 118.432 -132.721 118.432h-70.6562v85.2803c0 130.16 -92.8477 236.032 -222.976 236.032c-130.096 0 -224.943 -105.872 -224.943 -236.032v-85.2803h-76.6719 c-65.7441 0 -125.28 -53.1201 -132.528 -117.056l-77.2803 -504.16c-2.97559 -26.5596 2.22461 -47.5039 15.4082 -62.2881c12.4316 -13.9043 30.5273 -20.9766 53.7432 -20.9766h873.568c32.9121 0 51.7764 13.2158 61.8408 24.3203 c9.21582 10.208 19.6475 28.1436 16.623 57.9512zM352.049 724.865c0 94.8477 66.127 172.031 160.943 172.031c94.816 0 158.977 -77.1836 158.977 -172.031v-85.2803h-319.92zM947.168 -0.446289l-872.498 -0.449219c-5.50391 0 -11.0078 2.94434 -9.71191 10.6885 l77.248 504.096c3.83984 33.4404 35.5039 61.6807 69.1523 61.6807h76.6885v-72.9277c-19.0723 -11.0723 -32.0479 -31.4883 -32.0479 -55.1367c0 -35.3438 28.6562 -64 64 -64s64 28.6562 64 64c0 23.6162 -12.9277 44 -31.9521 55.0879v72.9922h319.904v-72.9922 c-19.0078 -11.0879 -31.9521 -31.4883 -31.9521 -55.0879c0 -35.3438 28.6562 -64 64 -64s64 28.6562 64 64c0 23.6484 -12.9756 44.0645 -32.0479 55.1523v72.9277h70.6562c33.6641 0 65.3125 -28.2559 69.4082 -63.4395l83.3438 -503.28 c0.400391 -4.0957 -2.81543 -9.31152 -12.1914 -9.31152z"/></svg>
        `);


            /* Marquee wrapper value */
            var wpcuStyles = document.createElement('style');
            document.head.append(wpcuStyles);
            wpcuStyles.innerHTML = `
            .wpcu-carousel--marquee .swiper-wrapper{
                animation: wpcuMarquee var(--wpcu-marqueeSpeed) linear infinite running;
            }
            @keyframes wpcuMarquee {
                0% {
                    transform: translate(0, 0);
                }
                100% {
                    transform: translate(var(--wpcu-marqueeItemsWidth), 0);
                }
            }
        `;
            var wpcuMarqueeCarousel = document.querySelectorAll('.wpcu-carousel--marquee');
            wpcuMarqueeCarousel.forEach(elm => {
                var wpcuMarqueeCarouselItem = elm.querySelectorAll('.wpcu-product:not(.swiper-slide-duplicate)');
                wpcuMarqueeCarouselItem.forEach(elmnt => {
                    var wpcuMarqueeWrapperWidth = wpcuMarqueeCarouselItem.length * (elmnt.offsetWidth + checkData(parseInt(elm.dataset.wpcuMargin)));
                    elm.style.setProperty('--wpcu-marqueeItemsWidth', `-${wpcuMarqueeWrapperWidth}px`);
                    elm.style.setProperty('--wpcu-marqueeSpeed', `${checkData(parseInt(elm.dataset.wpcuSpeed))}ms`);
                })
            });
        }

        alljs();

        

        /* Elementor Edit Mode */
        $(window).on('elementor/frontend/init', function () {
            setTimeout(() => {
                if (elementorFrontend.isEditMode()) {
                    alljs();
                    elementorFrontend.hooks.addAction('frontend/element_ready/widget', function () {
                        alljs();
                    });
                }
                smallColumnFix('.wpcu-theme_6');
                smallColumnFix('.wpcu-theme_7');
            }, 6000);
            setTimeout(() => {
                alljs();
            }, 0);
        });

        // window._wpLoadBlockEditor.then( function() {
        //     console.log( 'hooray!' );
        //     alljs();
        // });

        /* Issue fix in small product columns */
        function smallColumnFix(theme) {
            let themeSixColumns = document.querySelectorAll(`.elementor-widget-container ${theme} .wpcu-product`);
            themeSixColumns.forEach(elm=>{
                elm.offsetWidth < 250 ? elm.classList.add('wpcu-product--fix') : '';
            })
        }
        smallColumnFix('.wpcu-theme_6');
        smallColumnFix('.wpcu-theme_7');

    })(jQuery);
})


// document.addEventListener("DOMContentLoaded", function () {
//     (function ($) {
//         function alljs() {
//             console.log('JS Loaded');

//             var doc = document.querySelector('.wpcu-lazy-load');
    
//             /* Lazy load */
//             document.addEventListener('load', function() {
//                 console.log('Loaded Window');
//                 var lazyLoadContainer = document.querySelector('.wpcu-lazy-load');
//                 lazyLoadContainer.classList.remove('wpcu-lazy-load');
//                 console.log({
//                     lazyLoadContainer: lazyLoadContainer,
//                 });
//                 if (lazyLoadContainer.length !== 0) {
//                     document.querySelectorAll('.wpcu-products').forEach((el) => {
//                         el.classList.remove('wpcu-lazy-load');
//                     })
//                 }
//             });

//             // let lazyLoadContainer = document.querySelectorAll('.wpcu-lazy-load');
//             // if (lazyLoadContainer.length !== 0) {
//             //     document.querySelectorAll('.wpcu-products').forEach((el) => {
//             //         el.classList.remove('wpcu-lazy-load');
//             //     })
//             // }
            
//             /* WPCU Carousel */
//             let wpcuCarousel = document.querySelectorAll('.wpcu-carousel');
//             wpcuCarousel.forEach(function (el) {
//                 let swiper = new Swiper(el, {
//                     slidesPerView: checkData(parseInt(el.dataset.wpcuItems), 4),
//                     spaceBetween: checkData(parseInt(el.dataset.wpcuMargin), 30),
//                     loop: checkData(JSON.parse(el.dataset.wpcuLoop.toLowerCase()), false),
//                     slidesPerGroup: checkData(parseInt(el.dataset.wpcuPerslide), 4),
//                     speed: checkData(parseInt(el.dataset.wpcuSpeed), 3000),
//                     autoplay: checkData(JSON.parse(el.dataset.wpcuAutoplay), {}),
//                     navigation: {
//                         nextEl: '.wpcu-carousel-nav__btn--next',
//                         prevEl: '.wpcu-carousel-nav__btn--prev',
//                     },
//                     pagination: {
//                         el: '.wpcu-carousel-pagination',
//                         type: 'bullets',
//                         clickable: true
//                     },
//                     breakpoints: checkData(JSON.parse(el.dataset.wpcuResponsive), {})
//                 })
//             });
//         }
    
//         alljs();
//     })(jQuery);
// })