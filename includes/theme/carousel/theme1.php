<style>
    /* style one */

    #atw_style1 .atw_item .atw_overlay_content, #atw_style2 .atw_item .atw_overlay_content {

        width: -webkit-calc( 100% - 42px);

        width: calc( 100% - 42px);

        left: 21px;

        bottom: 0px;

        background: #fff;

        opacity: 0;

    }


    #atw_style1 .atw_item .atw_badge, #atw_style2 .atw_item .atw_badge {

        right: 10px;

        top: 10px;

    }



    #atw_style1 .atw_item .atw_badge span, #atw_style2 .atw_item .atw_badge span {

        background: #ff5500;

        -webkit-border-radius: 500px;

        border-radius: 500px;

        color: #fff;

        display: inline-block;

        line-height: 50px;

        width: 50px;

        font-size: 14px;

        text-align: center;

    }



    #atw_style1 .atw_item .atw_product_actions, #atw_style2 .atw_item .atw_product_actions {

        display: -webkit-box;

        display: -webkit-flex;

        display: -ms-flexbox;

        display: flex;

        -webkit-justify-content: space-around;

        -ms-flex-pack: distribute;

        justify-content: space-around;

        padding: 16px 0 13px 0;

        -webkit-box-shadow: 0 5px 5px rgba(84, 77, 124, 0.1);

        box-shadow: 0 5px 5px rgba(84, 77, 124, 0.1);

    }



    #atw_style1 .atw_item .atw_product_actions li a, #atw_style2 .atw_item .atw_product_actions li a {

        font-size: 18px;

        color: #363940;

        -webkit-transition: 0.3s;

        -o-transition: 0.3s;

        transition: 0.3s;

    }



    #atw_style1 .atw_item .atw_product_actions li a:hover, #atw_style2 .atw_item .atw_product_actions li a:hover {

        color: #ff5500;

    }



    #atw_style1 .atw_item:hover .atw_item_top .atw_overlay_content, #atw_style2 .atw_item:hover .atw_item_top .atw_overlay_content {

        opacity: 1;

        bottom: 20px;

    }



    #atw_style1 .atw_item .atw_item_bottom, #atw_style2 .atw_item .atw_item_bottom {

        padding-top: 20px;

    }



    #atw_style1 .atw_item .atw_item_bottom .atw_item_title, #atw_style2 .atw_item .atw_item_bottom .atw_item_title {

        font-weight: 400;

        margin: 0;

    }

    #atw_style1 .atw_item .atw_item_bottom .atw_item_title a, #atw_style2 .atw_item .atw_item_bottom .atw_item_title a {
        color: <?php echo !empty($title_font_color) ? $title_font_color : '#363940';?>!important;
        font-size: <?php echo !empty($title_font_size) ? $title_font_size : '16px';?>!important;
        line-height: 26px;
        white-space: <?php if( empty($display_full_title) || 'yes' == $display_full_title) { echo "normal";} else { echo "nowrap";}?>;
        text-overflow: ellipsis;
        overflow: hidden;
        display: block;
    }

    #atw_style1 .atw_item .atw_item_bottom .atw_item_title a:hover, #atw_style2 .atw_item .atw_item_bottom .atw_item_title a:hover {

        color: <?php echo !empty($title_hover_font_color) ? $title_hover_font_color : '#ff5500';?>!important;

    }



    #atw_style2 .atw_item .atw_btn {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

    }

    #atw_style2 .atw_item .atw_btn:hover {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

    }



    #atw_style1 .atw_item .atw_item_bottom .atw_item_info, #atw_style2 .atw_item .atw_item_bottom .atw_item_info {

        display: -webkit-box;

        display: -webkit-flex;

        display: -ms-flexbox;

        display: flex;

        -webkit-box-pack: justify;

        -webkit-justify-content: space-between;

        -ms-flex-pack: justify;

        justify-content: space-between;

        -webkit-box-align: center;

        -webkit-align-items: center;

        -ms-flex-align: center;

        align-items: center;

    }



    #atw_style1 .atw_item .atw_item_bottom .atw_item_info .atw_price, #atw_style2 .atw_item .atw_item_bottom .atw_item_info .atw_price,#atw_style2 .atw_item .atw_item_bottom .atw_item_info .atw_price .amount {

        color: <?php echo !empty($price_font_color) ? $price_font_color : '#ff5500';?>;

        line-height: normal;

        font-size: <?php echo !empty($price_font_size) ? $price_font_size : '14px';?>;

    }



    #atw_style1 .atw_item .atw_item_bottom .atw_item_info .atw_price del, #atw_style2 .atw_item .atw_item_bottom .atw_item_info .atw_price del {

        color: #9192a3;

        font-weight: 300;

        font-size: 14px;

    }



    #atw_style1 .atw_item .atw_item_bottom .atw_item_info .atw_price .atw_discount_ratio, #atw_style2 .atw_item .atw_item_bottom .atw_item_info .atw_price .atw_discount_ratio {

        border: 1px solid <?php echo !empty($price_font_color) ? $price_font_color : '#ff5500';?>;

        font-size: 12px;

        color: <?php echo !empty($price_font_color) ? $price_font_color : '#ff5500';?>;

        line-height: 20px;

        padding: 0 7px;

        display: inline-block;

        -webkit-border-radius: 2px;

        border-radius: 2px;

        margin-left: 4px;

    }



    #atw_style1 .slider_control, #atw_style2 .slider_control {

        position: absolute;

        border: 1px solid #e4e4ed;

        top: 50%;

        -webkit-transform: translateY(-50%);

        -ms-transform: translateY(-50%);

        transform: translateY(-50%);

    }



    #atw_style1 .slider_control.icon-arrow-left, #atw_style2 .slider_control.icon-arrow-left {

        left: 0;

    }



    #atw_style1 .slider_control.icon-arrow-right, #atw_style2 .slider_control.icon-arrow-right {

        right: 0;

    }



    #atw_style2 .atw_item:hover .atw_item_top .product-color .owl-dots {

        visibility: visible;

        opacity: 1;

    }



    #atw_style2 .atw_item .atw_item_top .product-color .owl-dots {

        position: absolute;

        right: 15px;

        top: 18px;

        visibility: hidden;

        opacity: 0;

        -webkit-transition: 0.3s ease;

        -o-transition: 0.3s ease;

        transition: 0.3s ease;

    }



    #atw_style2 .atw_item .atw_item_top .product-color .owl-dots .owl-dot {

        width: 12px;

        height: 12px;

        background: #fff;

        -webkit-border-radius: 50%;

        border-radius: 50%;

        margin-bottom: 10px;

        padding: 3px;

        position: relative;

    }



    #atw_style2 .atw_item .atw_item_top .product-color .owl-dots .owl-dot.active {

        position: relative;

    }



    #atw_style2 .atw_item .atw_item_top .product-color .owl-dots .owl-dot.active:before {

        position: absolute;

        content: "";

        left: -5px;

        top: -5px;

        width: 22px;

        height: 22px;

        border: 2px solid #fff;

        -webkit-border-radius: 50%;

        border-radius: 50%;

    }



    #atw_style2 .atw_item .atw_item_top .product-color .owl-dots .owl-dot:nth-child(2) {

        background: #383c59;

    }



    #atw_style2 .atw_item .atw_item_top .product-color .owl-dots .owl-dot:nth-child(3) {

        background: #fc8346;

    }



    #atw_style2 .atw_item .atw_item_top .product-color .owl-dots .owl-dot:last-child {

        margin-bottom: 0;

    }



    #atw_style2 .atw_item .atw_item_top .atw_overlay_content2 {

        z-index: 1;

        background: none;

        text-align: center;

    }



    #atw_style2 .atw_item .atw_item_bottom .atw_item_title {

        text-align: center;

    }



    #atw_style2 .atw_item .atw_item_bottom .atw_item_info {

        display: block;

        text-align: center;

    }



    #atw_style2 .atw_item .atw_item_bottom .atw_item_info .atw_price, #atw_style2 .atw_item .atw_item_bottom .atw_item_info .atw_rating {

        display: block;

    }

    #atw_style2 .atw_item .atw_item_bottom .atw_item_info .atw_price{
        padding: 15px 0;
    }

    #atw_style2 .atw_slider_controls {

        text-align: center;

    }



    #atw_style2 .atw_slider_controls .slider--control<?php echo $rand_id;?> {

        margin: 0px 4px 0 4px;

        position: inherit;

        top: auto;

        -webkit-transform: none;

        -ms-transform: none;

        transform: none;

        -webkit-border-radius: 0;

        border-radius: 0;

        -webkit-transition: 0.3s ease;

        -o-transition: 0.3s ease;

        transition: 0.3s ease;

        background: <?php echo !empty($nav_back_color) ? $nav_back_color : '#ffffff';?>;

        color: <?php echo !empty($nav_arrow_color) ? $nav_arrow_color : '#9192a3';?>;

        border: 1px solid <?php echo !empty($nav_border_color) ? $nav_border_color : '#e4e4ed';?>

    }



    #atw_style2 .atw_slider_controls .slider--control<?php echo $rand_id;?>:hover {

        background: <?php echo !empty($nav_back_hover_color) ? $nav_back_hover_color : '#ff5500';?>;

        color: <?php echo !empty($nav_arrow_hover_color) ? $nav_arrow_hover_color : '#fff';?>;

        border-color: <?php echo !empty($nav_border_hover) ? $nav_border_hover : '#ff5500';?>;

    }



    .atw_wrapper .woocommerce-product-rating{

        display: flex;

        justify-content: center;

    }



    .atw_wrapper .woocommerce .woocommerce-product-rating .star-rating{

        color: <?php echo !empty($ratings_color) ? $ratings_color : '#FEB507';?>;

        margin-top: 5px!important;

    }



    /*# sourceMappingURL=maps/theme2.css.map */

    /* add to cart */

    #atw_style2 .cart .add_to_cart_inline .amount {

        display: none;

    }

    #atw_style2 .cart .add_to_cart_inline {

        border: none!important;

        padding: 0!important;

    }

    #atw_style2 .cart .add_to_cart_inline:hover {

        border: none!important;

    }

    #atw_style2 .cart .add_to_cart_inline .add_to_cart_button,
    a.button.product_type_grouped,
    a.button.product_type_external {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>!important;
        line-height: 20px;

    }

    #atw_style2 .cart .add_to_cart_inline .add_to_cart_button:hover {

        color: <?php echo !empty($cart_button_hover_font_color) ? $cart_button_hover_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_button_hover_color) ? $cart_button_hover_color : '#ffffff';?>!important;

    }

    #atw_style2 .added_to_cart   {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>!important;
        line-height: 30px;
        padding: 0 15px;
        font-size: 100%;
        font-weight: 500;
    }

    #atw_style2 .added_to_cart:hover   {

        color: <?php echo !empty($cart_button_hover_font_color) ? $cart_button_hover_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_button_hover_color) ? $cart_button_hover_color : '#ffffff';?>!important;

    }

    #atw_style2 .add_to_cart_button.added  {

        display: none!important;

    }

    .atw_wrapper #atw_style2 .atw_floated_badge.badge--right {

        z-index: 1!important;

    }

    .atw_wrapper #atw_style2 .atw_floated_badge a{

        color: <?php echo !empty($ribbon_font_color) ? $ribbon_font_color : '#fff';?> !important;

        background: <?php echo !empty($ribbon_bg_color) ? $ribbon_bg_color : '#ff5500';?> !important;

        border: <?php echo !empty($ribbon_bg_color) ? $ribbon_bg_color : '#ff5500';?> !important;

    }



    #atw_style2 .atw_title  h3{

        text-align: <?php echo !empty($header) ? $header : 'center'?>!important;

        color: <?php echo !empty($header_font_color) ? $header_font_color : '#303030';?> !important;

        font-size: <?php echo !empty($header_font_size) ? $header_font_size : '24px';?> !important;

    }



</style>