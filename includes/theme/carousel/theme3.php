<style>

    #atw_style11 .atw__title11 {

        padding-bottom: 0;

        margin-bottom: 45px;

    }

    #atw_style11 .atw__title11:before {

        content: none;

    }

    #atw_style11 .atw_slider_wrapper {

        margin-top: 60px;
        position: relative;

    }

    #atw_style11 .atw__title11 h3 {

        text-align: left;

    }

    #atw_style11 .atw_wrapper .atw_title {

        margin-bottom: 0!important;

    }

    #atw_style11 .atw--single_item {

        -webkit-border-radius: 5px;

        border-radius: 5px;

        padding: 10px;

    }

    #atw_style11 .add_to_cart_inline {

        margin: 0;

        line-height: 0;

    }

    #atw_style11 .atw--single_item .atw_item_top {

        -webkit-border-radius: 5px;

        border-radius: 5px;

        overflow: hidden;

        position: relative;

    }

    #atw_style11 .atw--single_item .atw_item_top .badge--left {

        left: 0;

        top: 0;

    }

    #atw_style11 .atw--single_item .atw_item_top .badge--right {

        right: 0;

        top: 0;

    }

    #atw_style11 .atw--single_item .atw_item_top .atw_item_view {

        position: absolute;

        width: 100%;

        left: 0;

        top: 0;

        height: 100%;

        display: -webkit-box;

        display: -webkit-flex;

        display: -ms-flexbox;

        display: flex;

        -webkit-box-pack: center;

        -webkit-justify-content: center;

        -ms-flex-pack: center;

        justify-content: center;

        -webkit-box-align: center;

        -webkit-align-items: center;

        -ms-flex-align: center;

        align-items: center;

        -webkit-transition: 0.3s;

        -o-transition: 0.3s;

        transition: 0.3s;

        visibility: hidden;

        opacity: 0;

    }

    #atw_style11 .atw--single_item .atw_item_top .atw_item_view a {

        padding: 12px 25px;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        font-size: 12px;

        font-weight: 500;

        text-transform: uppercase;
        text-align: center;

        -webkit-border-radius: 25px;

        border-radius: 25px;

        display: inline-block;

        -webkit-transition: 0.3s;

        -o-transition: 0.3s;

        transition: 0.3s;

        margin-top: 20px;

    }

    #atw_style11 .atw--single_item .atw_item_bottom .atw_item_info {

        padding: 20px 0;

        text-align: center;

    }

    #atw_style11 .atw--single_item .atw_item_bottom .atw_item_info .atw_item_title {

        font-weight: 400;

        font-size: 16px;

        margin-bottom: 12px;

        margin-top: 0;

    }

    #atw_style11 .atw--single_item .atw_item_bottom .atw_item_info .atw_item_title a {
        color: <?php echo !empty($title_font_color) ? $title_font_color : '#363940';?> !important;
        font-size: <?php echo !empty($title_font_size) ? $title_font_size : '16px';?>!important;
        white-space: <?php if( empty($display_full_title) || 'yes' == $display_full_title) { echo "normal";} else { echo "nowrap";}?>;
        text-overflow: ellipsis;
        overflow: hidden;
        display: block;
    }

    #atw_style11 .atw--single_item .atw_item_bottom .atw_item_info .atw_item_title a:hover {

        color: <?php echo !empty($title_hover_font_color) ? $title_hover_font_color : '#ff5500';?>!important;

    }

    #atw_style11 .atw--single_item .atw_item_bottom .atw_item_info .atw_price, #atw_style11 .atw--single_item .atw_item_bottom .atw_item_info .atw_rating {

        display: block;

    }

    #atw_style11 .atw--single_item .atw_item_bottom .atw_item_info .atw_price {

        color: <?php echo !empty($price_font_color) ? $price_font_color : '#ff5500';?>;

        margin-bottom: 10px;

        font-size: <?php echo !empty($price_font_size) ? $price_font_size : '14px';?>;

    }

    #atw_style11 .atw--single_item:hover .atw_item_top .atw_item_view {

        visibility: visible;

        opacity: 1;

        background: rgba(0, 0, 0, 0.2);

    }

    #atw_style11 .atw--single_item:hover .atw_item_top .atw_item_view a {

        margin-top: 0;

    }

    #atw_style11 .atw_slider_controls .slider--control<?php echo $rand_id;?> {

        position: absolute;

        right: 0;

        margin: 0 -25px 0 4px;

        top: -65px;

        -webkit-transform: none;

        -ms-transform: none;

        transform: none;

        -webkit-border-radius: 3px;

        border-radius: 3px;

        -webkit-transition: 0.3s ease;

        -o-transition: 0.3s ease;

        transition: 0.3s ease;

        background: <?php echo !empty($nav_back_color) ? $nav_back_color : '#ffffff';?>;

        color: <?php echo !empty($nav_arrow_color) ? $nav_arrow_color : '#9192a3';?>;

        border: 1px solid <?php echo !empty($nav_border_color) ? $nav_border_color : '#e4e4ed';?>;

    }

    #atw_style11 .atw_slider_controls .slider--control<?php echo $rand_id;?>:hover {

        border-color: <?php echo !empty($nav_border_hover) ? $nav_border_hover : '#ff5500';?>;

        background: <?php echo !empty($nav_back_hover_color) ? $nav_back_hover_color : '#ff5500';?>;

        color: <?php echo !empty($nav_arrow_hover_color) ? $nav_arrow_hover_color : '#fff';?>;

    }

    #atw_style11 .atw_slider_controls .slider--control<?php echo $rand_id; ?>.icon-arrow-left {

        left: auto;

        right: 75px;

    }

    #atw_style11 .atw_slider_controls .slider--control<?php echo $rand_id; ?>.icon-arrow-right {

        right: 25px;

    }

    .atw_wrapper .woocommerce .woocommerce-product-rating{

        display: flex;

        justify-content: center;

    }

    .atw_wrapper .woocommerce .woocommerce-product-rating .star-rating{

        color: <?php echo !empty($ratings_color) ? $ratings_color : '#FEB507';?>;

    }

    /*# sourceMappingURL=maps/theme11.css.map */

    /* add to cart */

    #atw_style11 .cart .add_to_cart_inline .amount {

        display: none;

    }

    #atw_style11 .cart .add_to_cart_inline {

        border: none!important;

        padding: 0!important;

    }

    #atw_style11 .cart .add_to_cart_inline:hover {

        border: none!important;

    }

    #atw_style11 .cart .add_to_cart_inline .add_to_cart_button  {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

    }

    #atw_style11 .cart .add_to_cart_inline .add_to_cart_button:hover {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

    }

    #atw_style11 .cart .add_to_cart_inline .add_to_cart_button  {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>!important;

    }

    #atw_style11 .cart .add_to_cart_inline .add_to_cart_button:hover {

        color: <?php echo !empty($cart_button_hover_font_color) ? $cart_button_hover_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_button_hover_color) ? $cart_button_hover_color : '#ffffff';?>!important;

    }

    #atw_style11 .add_to_cart_button.added {

        display: none!important;

    }
    #atw_style11 .added_to_cart {
        padding: 17px 25px !important;
    }

    .atw_wrapper #atw_style11 .atw_floated_badge a{

        color: <?php echo !empty($ribbon_font_color) ? $ribbon_font_color : '#fff';?> !important;

        background: <?php echo !empty($ribbon_bg_color) ? $ribbon_bg_color : '#ff5500';?> !important;

        border: <?php echo !empty($ribbon_bg_color) ? $ribbon_bg_color : '#ff5500';?> !important;

    }

    #atw_style11 .atw_title  h3{

        text-align: <?php echo !empty($header) ? $header : 'center'?>!important;

        color: <?php echo !empty($header_font_color) ? $header_font_color : '#303030';?> !important;

        font-size: <?php echo !empty($header_font_size) ? $header_font_size : '24px';?> !important;

    }



</style>