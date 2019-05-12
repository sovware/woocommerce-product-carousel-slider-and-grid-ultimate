jQuery( document ).ready(function() {
    jQuery("div.cart").each(function(i){

        var $this = jQuery(this),
            $a = $this.find('a');
        $this.html($a);
    });

});