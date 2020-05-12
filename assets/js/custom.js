(function($) {
    /*jQuery("div.cart").each(function(i){

        var $this = jQuery(this),
            $a = $this.find('a');
        $this.html($a);
    });*/

        var textNodes = $(".add_to_cart_inline").contents().filter(function() {
            return this.nodeType === Node.TEXT_NODE;
        });

        textNodes.each(function() {
            $(this).remove();
        });

    $('[data-vc-tabs]').on('click', function () {
        window.dispatchEvent(new Event('resize'));
    });

    if($(".owl-carousel").length > 0){
        $(window).on("load", function () {
            setTimeout(function () {
                window.dispatchEvent(new Event('resize'));
            }, 500)
        })
    }
})(jQuery);
