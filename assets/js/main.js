(function () {
    /*
        Plugin: WooCommerce Product Carousel, Slider & Grid Ultimate
        Plugin URI: https://wordpress.org/plugins/woo-product-carousel-slider-and-grid-ultimate/
        Author: wpWax
        Version: 1.0
    */

    // Style reset in buttons p tag
    document.querySelectorAll('.wpcu-button p.woocommerce').forEach((el, id) => {
        el.setAttribute('style', 'none');
    });

    //Lazy load
    let lazyLoadContainer = document.querySelectorAll('.wpcu-lazy-load');
    window.addEventListener('load', () => {
        if (lazyLoadContainer.length !== 0) {
            document.querySelectorAll('.wpcu-products').forEach((el) => {
                el.classList.remove('wpcu-lazy-load');
            })
        }
    })

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

    /* carousel one */
    const swiper = new Swiper('.wpcu-carousel-one', {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.wpcu-carousel-nav__btn--next',
            prevEl: '.wpcu-carousel-nav__btn--prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        }
    })

})();