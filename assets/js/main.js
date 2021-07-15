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

})();