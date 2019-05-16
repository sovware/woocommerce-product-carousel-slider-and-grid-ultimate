<style>

    #atw_style6 .atw__title6 {

        padding: 15px 0;

        margin-bottom: 60px;

    }



    #atw_style6 .atw__title6:before {

        content: none;

    }



    #atw_style6 .atw--single_item:hover .atw_item_top .atw_post_view {

        top: 50%;

        visibility: visible;

        opacity: 1;

    }



    #atw_style6 .atw--single_item .atw_item_top .atw_post_view {

        -webkit-border-radius: 50%;

        border-radius: 50%;

        position: absolute;

        left: 50%;

        top: 60%;

        -webkit-transform: translate(-50%, -50%);

        -ms-transform: translate(-50%, -50%);

        transform: translate(-50%, -50%);

        height: 40px;

        width: 40px;

        font-size: 14px;

        color: #fff;

        text-align: center;

        background: #ff5500;

        display: flex;
        align-items: center;
        justify-content: center;

        visibility: hidden;

        opacity: 0;

        -webkit-transition: 0.3s;

        -o-transition: 0.3s;

        transition: 0.3s;
        cursor: pointer;

    }



    #atw_style6 .atw--single_item .atw_item_bottom {

        padding-top: 20px;

        text-align: center;

    }



    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_title {

        font-weight: 400;

        margin: 0;

    }



    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_title a {
        color: <?php echo !empty($title_font_color) ? $title_font_color : '#363940';?> !important;
        font-size: <?php echo !empty($title_font_size) ? $title_font_size : '16px';?>!important;
        line-height: 26px;
        white-space: <?php if( empty($display_full_title) || 'yes' == $display_full_title) { echo "normal";} else { echo "nowrap";}?>;
        text-overflow: ellipsis;
        overflow: hidden;
        display: block;

    }

    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_title a:hover {

        color: <?php echo !empty($title_hover_font_color) ? $title_hover_font_color : '#ff5500';?>!important;

    }



    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_info {

        margin-top: 8px;

    }



    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_info .atw_rating, #atw_style6 .atw--single_item .atw_item_bottom .atw_item_info .atw_price {

        display: block;

    }



    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_info .atw_price {

        color: <?php echo !empty($price_font_color) ? $price_font_color : '#ff5500';?>;

        line-height: 44px;

        font-size: <?php echo !empty($price_font_size) ? $price_font_size : '14px';?>;

    }



    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_info .atw_price del {

        color: <?php echo !empty($price_font_color) ? $price_font_color : '#ff5500';?>;

        font-weight: 300;

        font-size: <?php echo !empty($price_font_size) ? $price_font_size : '14px';?>;

    }



    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_info .atw_btn {

        padding: 0 20px;

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

    }



    #atw_style6 .atw--single_item .atw_item_bottom .atw_item_info .atw_btn:hover {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

    }



    #atw_style6 .atw_slider_controls .slider--control<?php echo $rand_id;?> {

        border: 1px solid <?php echo !empty($nav_border_color) ? $nav_border_color : '#e4e4ed';?>;

        -webkit-border-radius: 0;

        border-radius: 0;

        z-index: 2;

        position: absolute;

        top: 40%;

        -webkit-transform: translateY(-50%);

        -ms-transform: translateY(-50%);

        transform: translateY(-50%);

        -webkit-transition: 0.3s;

        -o-transition: 0.3s;

        transition: 0.3s;

    }



    #atw_style6 .atw_slider_controls .slider--control<?php echo $rand_id;?>:hover {

        border-color: <?php echo !empty($nav_border_hover) ? $nav_border_hover : '#ff5500';?>;

        color: #ff5500;

    }



    #atw_style6 .atw_slider_controls .icon-arrow-left {

        left: -20px;

        background: <?php echo !empty($nav_back_color) ? $nav_back_color : '#ffffff';?>;

        color: <?php echo !empty($nav_arrow_color) ? $nav_arrow_color : '#9192a3';?>;

    }



    #atw_style6 .atw_slider_controls .icon-arrow-left:hover {

        background: <?php echo !empty($nav_back_hover_color) ? $nav_back_hover_color : '#ffffff';?>;

        color: <?php echo !empty($nav_arrow_hover_color) ? $nav_arrow_hover_color : '#9192a3';?>;

    }



    #atw_style6 .atw_slider_controls .icon-arrow-right {

        right: -20px;

        background: <?php echo !empty($nav_back_color) ? $nav_back_color : '#ffffff';?>;

        color: <?php echo !empty($nav_arrow_color) ? $nav_arrow_color : '#9192a3';?>;

    }

    #atw_style6 .atw_slider_controls .icon-arrow-right:hover {

        background: <?php echo !empty($nav_back_hover_color) ? $nav_back_hover_color : '#ffffff';?>;

        color: <?php echo !empty($nav_arrow_hover_color) ? $nav_arrow_hover_color : '#9192a3';?>;

    }

    .atw_wrapper .woocommerce .woocommerce-product-rating {

        display: flex;

        justify-content: center;

    }



    .atw_wrapper .woocommerce .woocommerce-product-rating .star-rating {

        color: <?php echo !empty($ratings_color) ? $ratings_color : '#FEB507';?>;

    }

    /*# sourceMappingURL=maps/theme6.css.map */

    /* add tp cart*/

    #atw_style6 .add_to_cart_inline .amount {

        display: none;

    }

    #atw_style6 .add_to_cart_inline {

        border: none!important;

        padding: 0!important;

    }

    #atw_style6  .add_to_cart_inline:hover {

        border: none!important;

    }

    #atw_style6 .add_to_cart_inline .add_to_cart_button  {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

    }

    #atw_style6 .add_to_cart_inline .add_to_cart_button:hover {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>;

    }



    #atw_style6 .atw_title  h3{

        text-align: <?php echo !empty($header) ? $header : 'center'?>!important;

        color: <?php echo !empty($header_font_color) ? $header_font_color : '#303030';?> !important;

        font-size: <?php echo !empty($header_font_size) ? $header_font_size : '24px';?> !important;

    }



    .atw_wrapper #atw_style6 .atw_floated_badge a{

        color: <?php echo !empty($ribbon_font_color) ? $ribbon_font_color : '#fff';?> !important;

        background: <?php echo !empty($ribbon_bg_color) ? $ribbon_bg_color : '#ff5500';?> !important;

        border: <?php echo !empty($ribbon_bg_color) ? $ribbon_bg_color : '#ff5500';?> !important;

    }



    #atw_style6 .add_to_cart_inline .add_to_cart_button  {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>!important;

    }

    #atw_style6 .add_to_cart_inline .add_to_cart_button:hover {

        color: <?php echo !empty($cart_button_hover_font_color) ? $cart_button_hover_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_button_hover_color) ? $cart_button_hover_color : '#ffffff';?>!important;

    }

    #atw_style6 .added_to_cart   {

        color: <?php echo !empty($cart_font_color) ? $cart_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_bg_color) ? $cart_bg_color : '#ffffff';?>!important;
        line-height: 30px;
        padding: 0 15px;
        border-radius: 3px
        font-size: 100%;
        font-weight: 500;
    }

    #atw_style6 .added_to_cart:hover   {

        color: <?php echo !empty($cart_button_hover_font_color) ? $cart_button_hover_font_color : '#ff5500';?>!important;

        background: <?php echo !empty($cart_button_hover_color) ? $cart_button_hover_color : '#ffffff';?>!important;

    }

    #atw_style6 .add_to_cart_button.added {

        display: none;

    }

    #atw_style6 .atw_item_bottom {

        line-height: 0;

    }



</style>