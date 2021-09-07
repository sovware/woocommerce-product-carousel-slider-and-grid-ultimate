(function ($) {
    /*
        Plugin: WooCommerce Product Carousel, Slider & Grid Ultimate
        Plugin URI: https://wordpress.org/plugins/woo-product-carousel-slider-and-grid-ultimate/
        Author: wpWax
        Version: 1.0
    */

    // Style reset in buttons p tag
    document.querySelectorAll('.wpcu-button p.woocommerce, p.product').forEach((el, id) => {
        el.setAttribute('style', 'none');
    });

    /* Replace all SVG images with inline SVG */
    const convertImages = (query, callback) => {
        const images = document.querySelectorAll(query);
        images.forEach(image => {
            fetch(image.src)
                .then(res => res.text())
                .then(data => {
                    const parser = new DOMParser();
                    const svg = parser.parseFromString(data, 'image/svg+xml').querySelector('svg');

                    if (image.id) svg.id = image.id;
                    if (image.className) svg.classList = image.classList;

                    image.parentNode.replaceChild(svg, image);
                })
                .then(callback)
                .catch(error => console.error(error))
        });
    }
    convertImages('img.wpcu-svg');

    //Lazy load
    let lazyLoadContainer = document.querySelectorAll('.wpcu-lazy-load');
    window.addEventListener('load', () => {
        if (lazyLoadContainer.length !== 0) {
            document.querySelectorAll('.wpcu-products').forEach((el) => {
                el.classList.remove('wpcu-lazy-load');
            })
        }
        convertImages('img.wpcu-svg');
    })


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
            loopFillGroupWithBlank: true,
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
    $(".wpcu-theme_4 .woocommerce a, .wpcu-theme_5 .woocommerce a, .wpcu-theme_9 .woocommerce a").html(`<img class="wpcu-svg" src="${main_js.handbag_svg}" alt="" />`);

})(jQuery);