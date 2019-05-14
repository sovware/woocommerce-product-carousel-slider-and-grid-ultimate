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

})(jQuery);