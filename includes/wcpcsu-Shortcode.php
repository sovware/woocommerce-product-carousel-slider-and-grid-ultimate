<?php
defined('ABSPATH') || die('Direct access is not allow');

class wcpcsu_Shortcode
{
    public function __construct ()
    {
        add_shortcode('wcpcsu', array($this,'wcpcsu_shoortcode_method'));
    }

    public function wcpcsu_shoortcode_method ($atts, $content = null) {
        ob_start();
        global $product;
        $atts = shortcode_atts(array(
            'id'=>''
        ), $atts);
        $post_id = $atts['id'];
        $this->wcpcsu_style_files();
        // get the array of data from the post meta
        $enc_data = get_post_meta( $post_id, 'wcpscu', true );
        $data_array = Woocmmerce_Product_carousel_slider_ultimate::unserialize_and_decode24($enc_data);
        $value = is_array($data_array) ? $data_array : array();
        extract($value);
        $rand_id                 = rand();
        $total_products          = !empty($total_products) ? $total_products : 6;
        $layout                  = !empty($layout) ? $layout : 'carousel';
        $products_type           = !empty($products_type) ? $products_type : 'latest';
        $img_crop                = !empty($img_crop) ? $img_crop : 'yes';
        $crop_image_width        = !empty($crop_image_width) ? intval($crop_image_width) : 300;
        $crop_image_height       = !empty($crop_image_height) ? intval($crop_image_height) : 300;
        $c_theme  			     = !empty($c_theme) ? $c_theme : 'c_theme1';
        $g_theme  			     = !empty($g_theme) ? $g_theme : 'g_theme1';
        $display_title           = !empty($display_title) ? $display_title : 'yes';
        $display_price           = !empty($display_price) ? $display_price : 'yes';
        $display_ratings         = !empty($display_ratings) ? $display_ratings : 'yes';
        $display_cart            = !empty($display_cart) ? $display_cart : 'yes';
        $nav_show                = !empty($nav_show) ? $nav_show : 'yes';
        $ribbon                  = !empty($ribbon) ? $ribbon : 'discount';
        $header                  = !empty($header) ? $header : 'center';
        $h_title_show            = !empty($h_title_show) ? $h_title_show : 'no';
        $display_full_title      = !empty($display_full_title) ? $display_full_title : 'no';
        $g_column                = !empty($g_column) ? intval($g_column) : 3;
        $g_tablet                = !empty($g_tablet) ? intval($g_tablet) : 3;
        $g_mobile                = !empty($g_mobile) ? intval($g_mobile) : 1;
        $grid_pagination         = !empty($grid_pagination) ? $grid_pagination : 'no';
        $slide_time              = !empty( $slide_time)  ? $slide_time : '2000' ;
        $paged                   =  wcpcsu_get_paged_num();
        $common_args = array(
            'post_type'      => 'product',
            'posts_per_page' => !empty($total_products) ? intval($total_products) : 12,
            'post_status'    => 'publish',
            'meta_query'     => array(
                array(
                    'key'       => '_stock_status',
                    'value'     => 'outofstock',
                    'compare'   => 'NOT IN'
                )
            )
        );
        if('grid' == $layout && 'yes' == $grid_pagination) {
            $common_args['paged']    = $paged;
        }
        if ($products_type == "latest") {
            $args = $common_args;
        }
        elseif ($products_type == "older") {
            $older_args = array(
                'orderby'     => 'date',
                'order'       => 'ASC'
            );
            $args = array_merge($common_args, $older_args);
        }
        elseif ($products_type == "featured") {
            $meta_query  = WC()->query->get_meta_query();
            $tax_query   = WC()->query->get_tax_query();

            $tax_query[] = array(
                'taxonomy' => 'product_visibility',
                'field'    => 'name',
                'terms'    => 'featured',
                'operator' => 'IN',
            );
            $featured_args = array(
                'meta_query' => $meta_query,
                'tax_query' => $tax_query,
            );
            $args = array_merge($common_args, $featured_args);
        }

        else {
            $args = $common_args;
        }
        $loop = new WP_Query( $args );

        if($loop -> have_posts()) {
            ?>
            <!-- Style 02 -->
            <div class="atw_wrapper">
                <div class="atw_container">
                    <div class="atw_row">
                        <div>

            <?php
            if('carousel' == $layout) {
                wp_enqueue_script('wcpcsu-owl-carousel');
                wp_enqueue_style('wcpcsu-owl-carousel');
                ?>
                <script>
                    (function($){
                        jQuery(document).ready(function() {
                            'use strict';
                            $(".atw_slider_wrapper").each(function (ind, elm) {
                                $(elm).css({"display": "block"});
                            });
                            // this object contains general option for owl carousel instances
                            var defaultOptions = {
                                loop:<?php echo (!empty($repeat_product) && 'no' == $repeat_product) ? 'false' : 'true';?>,
                                items: 4,
                                dots: false,
                                rtl: <?php echo is_rtl() ? 'true': 'false'; ?>,
                                autoplay: <?php echo (!empty( $A_play) && 'yes'== $A_play) ? 'true':'false'; ?>,
                                margin: 30,
                                autoplayHoverPause:<?php echo (!empty( $stop_hover) && 'true'== $stop_hover) ? 'true' : 'false' ; ?>,
                                slideBy:<?php echo (!empty( $scrool) && 'true' === $scrool) ? '\'page\'' : ((!empty( $scrol_direction) && 'right'== $scrol_direction) ? -1 : 1); ?>,
                                autoplaySpeed: <?php echo (!empty( $slide_speed))  ? $slide_speed : '4000' ; ?>,
                                autoplayTimeout:<?php echo (!empty( $a_play_type) && 'marquee' == $a_play_type)  ? 0 : $slide_time ; ?>,
                                <?php
                                if(!empty( $a_play_type) && 'marquee' == $a_play_type) { ?>
                                slideTransition: "linear",
                                <?php } ?>
                                responsive: {
                                    0 : {
                                        items:1
                                    },
                                    350: {
                                        items:<?php echo (!empty( $c_mobile)) ? absint( $c_mobile):2; ?>
                                    },
                                    480: {
                                        items:<?php echo (!empty( $c_mobile)) ? (absint( $c_mobile)+1):3; ?>
                                    },
                                    600 : {
                                        items:<?php echo (!empty( $c_tablet)) ? (absint( $c_tablet) - 1):3; ?>
                                    },
                                    768:{
                                        items:<?php echo (!empty( $c_tablet)) ? absint( $c_tablet):4; ?>
                                    },
                                    978:{
                                        items:<?php echo (!empty( $c_desktop_small)) ? absint( $c_desktop_small) : 4 ; ?>                                            },
                                    1198:{
                                        items:<?php echo (!empty( $c_desktop)) ? absint( $c_desktop) : 4 ; ?>
                                    }
                                }
                            };


                            /*@param selector is a string name of the selctor that needs to be initialized,
                            * @param specificOptions object that contains options for specific instance of owlCarousel, pass null
                            * if no additional option necessary
                            * @param prevs and next are the control selector for the specific owlcarousel instance
                            */
                            function owlInit(selector, specificOptions, prev, next) {
                                var specificOptions = specificOptions || {},
                                    $selector = $(selector);

                                $selector.owlCarousel(
                                    $.extend({}, defaultOptions, specificOptions)
                                );

                                if ((prev != 'undefined' || prev != 'null') || (next != 'undefined' || next != 'null')) {
                                    $(prev).on('click', function () {
                                        $selector.trigger('prev.owl.carousel');
                                    });
                                    $(next).on('click', function () {
                                        $selector.trigger('next.owl.carousel');
                                    });
                                }
                            }
                            owlInit('.atw--slider<?php echo $rand_id;?>', null, '.slider--control<?php echo $rand_id;?>.icon-arrow-left', '.slider--control<?php echo $rand_id;?>.icon-arrow-right');
                        });
                    })(jQuery)

                </script>
                <?php
                            if('c_theme1' == $c_theme) {
                                include WCPCSU_INC_DIR . 'theme/carousel/theme1.php';?>
                            <div id="atw_style2">
                                <?php if($h_title_show == 'yes') {?>
                                <div class="atw_title atw__title1">
                                    <h3><?php echo !empty($header_title) ? $header_title : '';?></h3>
                                </div>
                                <?php } ?>
                                <div class="atw_slider_wrapper">
                                    <div class="atw_slider atw--slider<?php echo $rand_id;?> owl-carousel">
                                        <?php
                                          while($loop->have_posts()) : $loop->the_post();
                                              global $post, $product;
                                              $thumb = get_post_thumbnail_id();
                                              // crop the image if the cropping is enabled.
                                              if ('yes' === $img_crop){
                                                  $wpcsu_img = wpcsu_image_cropping($thumb, $crop_image_width, $crop_image_height, true, 100)['url'];
                                              }else{
                                                  $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
                                                  $wpcsu_img = $aazz_thumb['0'];
                                              }
                                        ?>
                                        <div class="atw_single_slide">
                                            <div class="atw_item atw--single_item">
                                                <div class="atw_item_top">

                                                    <div class="product-color owl-carousel">
                                                        <div>
                                                            <?php
                                            if ( has_post_thumbnail( $loop->post->ID ) ) { echo '<a href="'.get_the_permalink().'"><img src="'.esc_url($wpcsu_img).'" class="wpcsp-thumb"  alt="'.get_the_title().'" /></a>'; } else { echo '<a href="'.get_the_permalink().'"><img src="'.wc_placeholder_img_src().'" alt="Placeholder" /></a>'; }
                                                             ?>
                                                        </div>
                                                    </div>
                                                    <?php if('yes' == $display_cart) { ?>
                                                    <div class="cart atw_overlay_content atw_overlay_content2">

                                                        <?php
                                                        echo do_shortcode('[add_to_cart id="'.get_the_ID().'"]');
                                                        ?>

                                                    </div>
                                                    <?php } ?>
                                                    <?php
                                                    if( !empty($display_sale_ribbon) && $display_sale_ribbon == "yes") {
                                                        echo '<div class="atw_floated_badge badge--right">';
                                                        if ( $product->is_on_sale() ) {
                                                            echo !empty($sale_ribbon_text)
                                                                ?  apply_filters(
                                                                    'woocommerce_sale_flash',
                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($sale_ribbon_text) . '</a>',
                                                                    $post, $product )
                                                                : apply_filters(
                                                                    'woocommerce_sale_flash',
                                                                    '<a href="" class="float-d-ratio">' . esc_html__( 'Sale!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                    $post, $product );

                                                        }
                                                        echo '</div>';
                                                    }

                                                    /*Display ribbon for featured products*/
                                                    if( !empty($display_featured_ribbon) && $display_featured_ribbon == "yes") {
                                                        echo '<div class="atw_floated_badge badge--left">';
                                                        if ( $product->is_featured() ) {
                                                            echo !empty($feature_ribbon_text)
                                                                ?  apply_filters( 'wpcsp_featured_ribbon',
                                                                    '<a href="" class="float-d-ratio">' . esc_html($feature_ribbon_text) . '</a>',
                                                                    $post, $product )
                                                                : apply_filters(
                                                                    'wpcsp_featured_ribbon',
                                                                    '<a href="" class="float-d-ratio">' . esc_html__( 'Featured!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                    $post, $product );
                                                        }
                                                        echo '</div>';
                                                    }


                                                    /*Display ribbon for Sold Out products*/
                                                    if( !empty($display_sold_out_ribbon) && $display_sold_out_ribbon == "yes") {
                                                        echo '<div class="atw_floated_badge badge--right">';
                                                        if (! $product->is_in_stock() ) {

                                                            echo !empty($sold_out_ribbon_text)
                                                                ?  apply_filters( 'wpcsp_sold_out_ribbon',
                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($sold_out_ribbon_text) . '</a>',
                                                                    $post, $product )

                                                                : apply_filters(
                                                                    'wpcsp_sold_out_ribbon',
                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Sold Out!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                    $post, $product );

                                                        }
                                                        echo '</div>';
                                                    }
                                                    ?>
                                                </div>

                                                <div class="atw_item_bottom">
                                              <?php if ($display_title == "yes") { ?>
                                                    <h4 class="atw_item_title">
                                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                    </h4>
                                              <?php } ?>
                                                    <div class="atw_item_info">
                                                        <?php
                                                        if ('yes' == $display_price) {

                                                        ?>
                                                            <span class="atw_price"><?php echo $product->get_price_html(); ?>
                                                                <?php
                                                                $sale_price = $product->get_sale_price();
                                                                if(!empty($sale_price)) {
                                                                ?>
                                                                <span class="atw_discount_ratio">-<?php echo $this->aazz_show_discount_percentage();?></span>
                                                                    <?php } ?>
                                                            </span>
                                                        <?php }
                                                        if ($display_ratings == "yes") {
                                        $ratings = (($product->get_average_rating()/5)*100); ?>
                                        <div class="atw_rating woocommerce"><div class="woocommerce-product-rating"><div class="star-rating" title="<?php echo $ratings; ?>%"><span style="width: <?php echo $ratings; ?>%;"></span>

                                                </div><span class="total-rating">(<?php echo $product->get_rating_count();?>)</span></div></div>
                                    <?php }?>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end .atw_single_slide -->
                                        </div>
                                          <?php
                                          endwhile;
                                          wp_reset_postdata();
                                          ?>
                                    </div>
                                    <?php
                                      if($nav_show == 'yes') {
                                    ?>
                                    <div class="atw_slider_controls">
                                        <span class="slider_control slider_control_round slider--control<?php echo $rand_id;?> icon-arrow-left"></span>
                                        <span class="slider_control slider_control_round slider--control<?php echo $rand_id;?> icon-arrow-right"></span>
                                    </div>
                                    <?php } ?>
                                </div>

                            </div>
                            <!-- end #atw_style2 -->
                            <?php
                              }elseif('c_theme2' == $c_theme){
                                include WCPCSU_INC_DIR . 'theme/carousel/theme2.php';?>

                                <!-- Style 06 -->
                                        <div id="atw_style6">
                                            <?php if($h_title_show == 'yes') {?>
                                                <div class="atw_title atw__title1">
                                                    <h3><?php echo !empty($header_title) ? $header_title : '';?></h3>
                                                </div>
                                            <?php } ?>

                                            <div class="atw_slider_wrapper">
                                                <div class="atw_slider atw--slider<?php echo $rand_id;?> owl-carousel">

                                <?php
                                while($loop->have_posts()) : $loop->the_post();
                                    global $post, $product;
                                    $thumb = get_post_thumbnail_id();
                                    // crop the image if the cropping is enabled.
                                    if ('yes' === $img_crop){
                                        $wpcsu_img = wpcsu_image_cropping($thumb, $crop_image_width, $crop_image_height, true, 100)['url'];
                                    }else{
                                        $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
                                        $wpcsu_img = $aazz_thumb['0'];
                                    }
                                    ?>
                                                    <div class="atw_single_slide">
                                                        <div class="atw_item atw--single_item">
                                                            <div class="atw_item_top">

                                                                <?php
                                                                    if ( has_post_thumbnail( $loop->post->ID ) ) { echo '<a href="'.get_the_permalink().'"><img src="'.esc_url($wpcsu_img).'" class="wpcsp-thumb"  alt="'.get_the_title().'" /></a>'; } else { echo '<a href="'.get_the_permalink().'"><img src="'.wc_placeholder_img_src().'" alt="Placeholder" /><a>'; }
                                                                ?>
                                                                <?php if(!empty($quick_view) && 'yes' == $quick_view) { ?>
                                                                <a  class="atw_post_view">
                                                                    <span class="icon-eye" data-featherlight="#f<?php echo get_the_id();?>"></span>
                                                                </a>
                                                                <?php } ?>
                                                                <section style="display: none">
                                                                    <div class="lightbox" style="display: flex;" id="f<?php echo get_the_id();?>">
                                                                        <div class="atw_image_l" style="margin-right: 30px;"><?php
                                                                            if ( has_post_thumbnail( $loop->post->ID ) ) { echo '<a href=""><img src="'.esc_url($wpcsu_img).'" class="wpcsp-thumb"  alt="'.get_the_title().'" /></a>'; } else { echo '<a href=""><img src="'.wc_placeholder_img_src().'" alt="Placeholder" /></a>'; }?></div>
                                                                        <div class="atw_product_desc">
                                                                            <h1 style="font-size: 40px; margin-bottom: 30px"><?php the_title();?></h1>
                                                                            <span class="atw_product_price" style="display: block; margin-bottom: 30px; color: red; font-size: 20px;"><?php echo $product->get_price_html(); ?></span>
                                                                            <p><?php echo get_the_content();?></p>
                                                                            <?php
            if("yes" == $display_cart) {
                echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]');
            }
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <?php
                                                                if( !empty($display_sale_ribbon) && $display_sale_ribbon == "yes") {
                                                                echo '<div class="atw_floated_badge badge--right">';
                                                                    if ( $product->is_on_sale() ) {
                                                                    echo !empty($sale_ribbon_text)
                                                                    ?  apply_filters(
                                                                    'woocommerce_sale_flash',
                                                                    '<a href="" class="float-d-ratio">' . esc_html($sale_ribbon_text) . '</a>',
                                                                    $post, $product )
                                                                    : apply_filters(
                                                                    'woocommerce_sale_flash',
                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Sale!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                    $post, $product );

                                                                    }
                                                                    echo '</div>';
                                                                }

                                                                /*Display ribbon for featured products*/
                                                                if( !empty($display_featured_ribbon) && $display_featured_ribbon == "yes") {
                                                                echo '<div class="atw_floated_badge badge--left">';
                                                                    if ( $product->is_featured() ) {
                                                                    echo !empty($feature_ribbon_text)
                                                                    ?  apply_filters( 'wpcsp_featured_ribbon',
                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($feature_ribbon_text) . '</a>',
                                                                    $post, $product )
                                                                    : apply_filters(
                                                                    'wpcsp_featured_ribbon',
                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Featured!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                    $post, $product );
                                                                    }
                                                                    echo '</div>';
                                                                }


                                                                /*Display ribbon for Sold Out products*/
                                                                if( !empty($display_sold_out_ribbon) && $display_sold_out_ribbon == "yes") {
                                                                echo '<div class="atw_floated_badge badge--right">';
                                                                    if (! $product->is_in_stock() ) {

                                                                    echo !empty($sold_out_ribbon_text)
                                                                    ?  apply_filters( 'wpcsp_sold_out_ribbon',
                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($sold_out_ribbon_text) . '</a>',
                                                                    $post, $product )

                                                                    : apply_filters(
                                                                    'wpcsp_sold_out_ribbon',
                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Sold Out!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                    $post, $product );

                                                                    }
                                                                    echo '</div>';
                                                                }
                                                                ?>
                                                            </div>
                                                            <div class="atw_item_bottom">
                                                                <?php if ($display_title == "yes") { ?>
                                                                <h4 class="atw_item_title">
                                                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                                </h4>
                                                                <?php } ?>
                                                                <div class="atw_item_info">
                                                                    <?php
                                                                    if ($display_ratings == "yes") {
                                                                    $ratings = (($product->get_average_rating()/5)*100); ?>
                                                                    <span class="atw_rating"><div class="atw_rating woocommerce"><div class="woocommerce-product-rating"><div class="star-rating" title="<?php echo $ratings; ?>%"><span style="width: <?php echo $ratings; ?>%;"></span></div></div></div></span>
                                                                    <?php }
                                                                    if ($display_price == "yes") { ?>
                                                                    <span class="atw_price"><?php echo $product->get_price_html(); ?>
                                        </span>
                                                                    <?php } ?>
                                                                    <?php if("yes" == $display_cart) {                                                                                               echo do_shortcode('[add_to_cart id="'.get_the_ID().'"]');
                                                                     } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end .atw_single_slide -->
                                                    </div>
                                                    <!-- Ends: .atw_single_slide -->
                                                <?php
                                                endwhile;
                                                wp_reset_postdata();
                                                ?>
                                                </div>
                                                <?php
                                                  if($nav_show == 'yes') {
                                                ?>
                                                <div class="atw_slider_controls">
                                                    <span class="slider_control slider_control_round slider--control<?php echo $rand_id;?> icon-arrow-left"></span>
                                                    <span class="slider_control slider_control_round slider--control<?php echo $rand_id;?> icon-arrow-right"></span>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <!-- Ends: .atw_slider_wrapper -->
                                        </div>
                                        <!-- Ends: .atw_style3 -->

                              <?php }elseif('c_theme3' == $c_theme) {
                                include WCPCSU_INC_DIR . 'theme/carousel/theme3.php';
                              ?>

                                <div id="atw_style11">
                                    <?php if($h_title_show == 'yes') {?>
                                        <div class="atw_title atw__title1">
                                            <h3><?php echo !empty($header_title) ? $header_title : '';?></h3>
                                        </div>
                                    <?php } ?>

                                    <div class="atw_slider_wrapper">
                                        <div class="atw_slider atw--slider<?php echo $rand_id;?> owl-carousel">
                                <?php
                                while($loop->have_posts()) : $loop->the_post();
                                    global $post, $product;
                                    $thumb = get_post_thumbnail_id();
                                    // crop the image if the cropping is enabled.
                                    if ('yes' === $img_crop){
                                        $wpcsu_img = wpcsu_image_cropping($thumb, $crop_image_width, $crop_image_height, true, 100)['url'];
                                    }else{
                                        $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
                                        $wpcsu_img = $aazz_thumb['0'];
                                    }
                                    ?>
                                            <div class="atw_single_slide">
                                                <div class="atw_item atw--single_item atw_card atw_card_rounded">
                                                    <div class="atw_item_top">
                                                        <?php
                                                            if ( has_post_thumbnail( $loop->post->ID ) ) { echo '<a href="'.get_the_permalink().'"><img src="'.esc_url($wpcsu_img).'" class="wpcsp-thumb"  alt="'.get_the_title().'" /></a>'; } else { echo '<a href=""><img src="'.wc_placeholder_img_src().'" alt="Placeholder" /></a>'; }
                                                        ?>
                                                        <?php
                                                        if( !empty($display_sale_ribbon) && $display_sale_ribbon == "yes") {
                                                            echo '<div class="atw_floated_badge badge--right">';
                                                            if ( $product->is_on_sale() ) {
                                                                echo !empty($sale_ribbon_text)
                                                                    ?  apply_filters(
                                                                        'woocommerce_sale_flash',
                                                                        '<a href="" class="float-d-ratio">' . esc_html($sale_ribbon_text) . '</a>',
                                                                        $post, $product )
                                                                    : apply_filters(
                                                                        'woocommerce_sale_flash',
                                                                        '<a href="" class="float-d-ratio">' . esc_html__( 'Sale!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                        $post, $product );

                                                            }
                                                            echo '</div>';
                                                        }

                                                        /*Display ribbon for featured products*/
                                                        if( !empty($display_featured_ribbon) && $display_featured_ribbon == "yes") {
                                                            echo '<div class="atw_floated_badge badge--left">';
                                                            if ( $product->is_featured() ) {
                                                                echo !empty($feature_ribbon_text)
                                                                    ?  apply_filters( 'wpcsp_featured_ribbon',
                                                                        '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($feature_ribbon_text) . '</a>',
                                                                        $post, $product )
                                                                    : apply_filters(
                                                                        'wpcsp_featured_ribbon',
                                                                        '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Featured!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                        $post, $product );
                                                            }
                                                            echo '</div>';
                                                        }


                                                        /*Display ribbon for Sold Out products*/
                                                        if( !empty($display_sold_out_ribbon) && $display_sold_out_ribbon == "yes") {
                                                            echo '<div class="atw_floated_badge badge--right">';
                                                            if (! $product->is_in_stock() ) {

                                                                echo !empty($sold_out_ribbon_text)
                                                                    ?  apply_filters( 'wpcsp_sold_out_ribbon',
                                                                        '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($sold_out_ribbon_text) . '</a>',
                                                                        $post, $product )

                                                                    : apply_filters(
                                                                        'wpcsp_sold_out_ribbon',
                                                                        '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Sold Out!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                        $post, $product );

                                                            }
                                                            echo '</div>';
                                                        }
                                                        ?>
                                                        <?php if('yes' == $display_cart) {?>
                                                            <div class="cart atw_item_view">

                                                                <?php
                                                                echo do_shortcode('[add_to_cart id="'.get_the_ID().'"]');
                                                                ?>

                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="atw_item_bottom">
                                                        <div class="atw_item_info">
                                                            <?php if ($display_title == "yes") { ?>
                                                            <h4 class="atw_item_title">
                                                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                            </h4>
                                                            <?php }
                                                            if('yes' == $display_price) {
                                                            ?>
                                                            <span class="atw_price"><?php echo $product->get_price_html(); ?></span>
                                                            <?php } ?>
                                                            <?php
                                                            if ($display_ratings == "yes") {
                                                            $ratings = (($product->get_average_rating()/5)*100);
                                                            ?>
                                                         <div class="atw_rating woocommerce"><div class="woocommerce-product-rating"><div class="star-rating" title="<?php echo $ratings; ?>%"><span style="width: <?php echo $ratings; ?>%;"></span></div></div></div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          <?php
                                          endwhile;
                                          wp_reset_postdata()
                                          ?>
                                        </div>
                                        <?php
                                          if($nav_show == 'yes') {
                                        ?>
                                        <div class="atw_slider_controls">
                                            <span class="slider_control slider_control_round slider--control<?php echo $rand_id;?> icon-arrow-left"></span>
                                            <span class="slider_control slider_control_round slider--control<?php echo $rand_id;?> icon-arrow-right"></span>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <!-- Ends: .atw_slider_wrapper -->
                                </div>
                                <!-- Ends: .atw_style3 -->


                                <?php }

                                    }elseif('grid' == $layout)  {
                                      if('g_theme1' == $g_theme) {
                                     include WCPCSU_INC_DIR . 'theme/carousel/theme1.php';
                                    ?>
                                    <div id="atw_style2">
                                        <?php if($h_title_show == 'yes') {?>
                                            <div class="atw_title atw__title1">
                                                <h3><?php echo !empty($header_title) ? $header_title : '';?></h3>
                                            </div>
                                        <?php } ?>
                                        <div class="atw_grid_wrapper">
                                            <div class="atw_row">

                                                <?php
                                                    while($loop->have_posts()) : $loop->the_post();
                                                    global $post, $product;
                                                    $thumb = get_post_thumbnail_id();
                                                    // crop the image if the cropping is enabled.
                                                    if ('yes' === $img_crop){
                                                        $wpcsu_img = wpcsu_image_cropping($thumb, $crop_image_width, $crop_image_height, true, 100)['url'];
                                                    }else{
                                                        $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
                                                        $wpcsu_img = $aazz_thumb['0'];
                                                    }
                                                ?>
                                                <div class="atw_grid--single atw_grid_<?= $g_column;?> atw_tab_<?= $g_tablet?> atw_mobile_<?= $g_mobile;?>">
                                                    <div class="atw_item atw--single_item">
                                                        <div class="atw_item_top">
                                                            <div class="product-color owl-carousel">
                                                                <div>
                                                                     <?php
                                                                     if ( has_post_thumbnail( $loop->post->ID ) ) { echo '<a href="'.get_the_permalink().'"><img src="'.esc_url($wpcsu_img).'" class="wpcsp-thumb"  alt="'.get_the_title().'" /></a>'; } else { echo '<a href=""><img src="'.wc_placeholder_img_src().'" alt="Placeholder" /></a>'; }
                                                                     ?>
                                                                </div>
                                                            </div>
                                                            <?php if('yes' == $display_cart) { ?>
                                                                <div class="cart atw_overlay_content atw_overlay_content2">

                                                            <?php
                                                            echo do_shortcode('[add_to_cart id="'.get_the_ID().'"]');
                                                            ?>

                                                    </div>
                                                            <?php } ?>
                                                            <?php
                                                            if( !empty($display_sale_ribbon) && $display_sale_ribbon == "yes") {
                                                                echo '<div class="atw_floated_badge badge--right">';
                                                                if ( $product->is_on_sale() ) {
                                                                    echo !empty($sale_ribbon_text)
                                                                        ?  apply_filters(
                                                                            'woocommerce_sale_flash',
                                                                            '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($sale_ribbon_text) . '</a>',
                                                                            $post, $product )
                                                                        : apply_filters(
                                                                            'woocommerce_sale_flash',
                                                                            '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Sale!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                            $post, $product );

                                                                }
                                                                echo '</div>';
                                                            }

                                                            /*Display ribbon for featured products*/
                                                            if( !empty($display_featured_ribbon) && $display_featured_ribbon == "yes") {
                                                                echo '<div class="atw_floated_badge badge--left">';
                                                                if ( $product->is_featured() ) {
                                                                    echo !empty($feature_ribbon_text)
                                                                        ?  apply_filters( 'wpcsp_featured_ribbon',
                                                                            '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($feature_ribbon_text) . '</a>',
                                                                            $post, $product )
                                                                        : apply_filters(
                                                                            'wpcsp_featured_ribbon',
                                                                            '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Featured!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                            $post, $product );
                                                                }
                                                                echo '</div>';
                                                            }


                                                            /*Display ribbon for Sold Out products*/
                                                            if( !empty($display_sold_out_ribbon) && $display_sold_out_ribbon == "yes") {
                                                                echo '<div class="atw_floated_badge badge--right">';
                                                                if (! $product->is_in_stock() ) {

                                                                    echo !empty($sold_out_ribbon_text)
                                                                        ?  apply_filters( 'wpcsp_sold_out_ribbon',
                                                                            '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($sold_out_ribbon_text) . '</a>',
                                                                            $post, $product )

                                                                        : apply_filters(
                                                                            'wpcsp_sold_out_ribbon',
                                                                            '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Sold Out!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                            $post, $product );

                                                                }
                                                                echo '</div>';
                                                            }
                                                            ?>
                                                        </div>

                                                        <div class="atw_item_bottom">
                                                            <?php if ($display_title == "yes") { ?>
                                                            <h4 class="atw_item_title">
                                                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                            </h4>
                                                            <?php }
                                                            ?>
                                                            <div class="atw_item_info">
                                                                <?php if('yes' == $display_price) {?>
                                                                <span class="atw_price"><?php echo $product->get_price_html(); ?></span>
                                                                <?php } ?>
                                                                <?php
                                                                if('yes' == $display_ratings) {
                                                                $ratings = (($product->get_average_rating()/5)*100);
                                                                ?>
                                                                    <div class="atw_rating woocommerce"><div class="woocommerce-product-rating"><div class="star-rating" title="<?php echo $ratings; ?>%"><span style="width: <?php echo $ratings; ?>%;"></span></div></div></div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end .atw--single_item -->
                                                </div>
                                                <?php
                                               endwhile;
                                               wp_reset_postdata();
                                               ?>
                                            </div>
                                        </div>
                                        <?php
                                        $grid_pagination = !empty($grid_pagination) ? $grid_pagination : '';
                                        if ('yes' == $grid_pagination) {
                                            ?>
                                            <div class="row atbd_listing_pagination">
                                                <div class="col-md-12">
                                                    <?php
                                                    $paged = !empty($paged) ? $paged : '';
                                                    echo wcpcsu_pagination($loop, $paged);
                                                    ?>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <!-- end #atw_style2 -->
                                    <?php
                                    }elseif('g_theme2' == $g_theme) {
                                    include WCPCSU_INC_DIR . 'theme/carousel/theme2.php';
                                    ?>

                                            <div id="atw_style6">
                                                <?php if($h_title_show == 'yes') {?>
                                                    <div class="atw_title atw__title1">
                                                        <h3><?php echo !empty($header_title) ? $header_title : '';?></h3>
                                                    </div>
                                                <?php } ?>

                                                <div class="atw_grid_wrapper">
                                                    <div class="atw_row">
                                                        <?php
                                                        while($loop->have_posts()) : $loop->the_post();
                                                        global $post, $product;
                                                        $thumb = get_post_thumbnail_id();
                                                        // crop the image if the cropping is enabled.
                                                        if ('yes' === $img_crop){
                                                            $wpcsu_img = wpcsu_image_cropping($thumb, $crop_image_width, $crop_image_height, true, 100)['url'];
                                                        }else{
                                                            $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
                                                            $wpcsu_img = $aazz_thumb['0'];
                                                        }
                                                        ?>
                                                        <div class="atw_grid--single atw_grid_<?= $g_column;?> atw_tab_<?= $g_tablet?> atw_mobile_<?= $g_mobile;?>">
                                                            <div class="atw_item atw--single_item">
                                                                <div class="atw_item_top">
                                                                    <?php
                                                                        if ( has_post_thumbnail( $loop->post->ID ) ) { echo '<a href="'.get_the_permalink().'"><img src="'.esc_url($wpcsu_img).'" class="wpcsp-thumb"  alt="'.get_the_title().'" /></a>'; } else { echo '<a href="'.get_the_permalink().'"><img src="'.wc_placeholder_img_src().'" alt="Placeholder" /></a>'; }
                                                                    ?>
                                                                    <?php if(!empty($quick_view) && 'yes' == $quick_view) { ?>
                                                                    <a  data-featherlight= "#f<?php echo get_the_id();?>" class="atw_post_view">
                                                                        <span class="icon-eye"></span>
                                                                    </a>
                                                                    <?php } ?>
                                                                    <section style="display: none">
                                                                        <div class="lightbox" style="display: flex;" id="f<?php echo get_the_id();?>">
                                                                            <div class="atw_image_l" style="margin-right: 30px;"><?php
                                                                                if ( has_post_thumbnail( $loop->post->ID ) ) { echo '<a href="'.get_the_permalink().'"><img src="'.esc_url($wpcsu_img).'" class="wpcsp-thumb"  alt="'.get_the_title().'" /></a>'; } else { echo '<a href="'.get_the_permalink().'"><img src="'.wc_placeholder_img_src().'" alt="Placeholder" /></a>'; }?></div>
                                                                            <div class="atw_product_desc">
                                                                                <h1 style="font-size: 40px; margin-bottom: 30px"><?php the_title();?></h1>
                                                                                <span class="atw_product_price" style="display: block; margin-bottom: 30px; color: red; font-size: 20px;"><?php echo $product->get_price_html(); ?></span>
                                                                                <p><?php echo get_the_content();?></p>
                                                                                <?php
            if("yes" == $display_cart) {
                echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]');
            }
                ?>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                    <?php
                                                                    if( !empty($display_sale_ribbon) && $display_sale_ribbon == "yes") {
                                                                        echo '<div class="atw_floated_badge badge--right">';
                                                                        if ( $product->is_on_sale() ) {
                                                                            echo !empty($sale_ribbon_text)
                                                                                ?  apply_filters(
                                                                                    'woocommerce_sale_flash',
                                                                                    '<a href="" class="float-d-ratio">' . esc_html($sale_ribbon_text) . '</a>',
                                                                                    $post, $product )
                                                                                : apply_filters(
                                                                                    'woocommerce_sale_flash',
                                                                                    '<a href="" class="float-d-ratio">' . esc_html__( 'Sale!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                                    $post, $product );

                                                                        }
                                                                        echo '</div>';
                                                                    }

                                                                    /*Display ribbon for featured products*/
                                                                    if( !empty($display_featured_ribbon) && $display_featured_ribbon == "yes") {
                                                                        echo '<div class="atw_floated_badge badge--left">';
                                                                        if ( $product->is_featured() ) {
                                                                            echo !empty($feature_ribbon_text)
                                                                                ?  apply_filters( 'wpcsp_featured_ribbon',
                                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($feature_ribbon_text) . '</a>',
                                                                                    $post, $product )
                                                                                : apply_filters(
                                                                                    'wpcsp_featured_ribbon',
                                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Featured!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                                    $post, $product );
                                                                        }
                                                                        echo '</div>';
                                                                    }


                                                                    /*Display ribbon for Sold Out products*/
                                                                    if( !empty($display_sold_out_ribbon) && $display_sold_out_ribbon == "yes") {
                                                                        echo '<div class="atw_floated_badge badge--right">';
                                                                        if (! $product->is_in_stock() ) {

                                                                            echo !empty($sold_out_ribbon_text)
                                                                                ?  apply_filters( 'wpcsp_sold_out_ribbon',
                                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($sold_out_ribbon_text) . '</a>',
                                                                                    $post, $product )

                                                                                : apply_filters(
                                                                                    'wpcsp_sold_out_ribbon',
                                                                                    '<a href="" class="float-d-ratio">' . esc_html__( 'Sold Out!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                                    $post, $product );

                                                                        }
                                                                        echo '</div>';
                                                                    }
                                                                    ?>
                                                                </div>

                                                                <div class="atw_item_bottom">
                                                                <?php if('yes' == $display_title) {?>
                                                                    <h4 class="atw_item_title">
                                                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                                    </h4>
                                                                <?php } ?>
                                                                    <div class="atw_item_info">
                                                                        <?php
                                                                        if('yes' == $display_ratings) {
                                                                        $ratings = (($product->get_average_rating()/5)*100);
                                                                        ?>
                                                                            <div class="atw_rating woocommerce"><div class="woocommerce-product-rating"><div class="star-rating" title="<?php echo $ratings; ?>%"><span style="width: <?php echo $ratings; ?>%;"></span></div></div></div>
                                                                        <?php } ?>
                                                                        <?php if('yes' == $display_price) {?>
                                                                        <span class="atw_price"><?php echo $product->get_price_html(); ?></span>
                                                                        <?php } ?>
                                                                        <?php if("yes" == $display_cart) {                                                                                               echo do_shortcode('[add_to_cart id="'.get_the_ID().'"]');
                                                                        } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .atw_single_slide -->
                                                        </div>
                                                        <?php
                                                        endwhile;
                                                        wp_reset_postdata();
                                                        ?>
                                                    </div>
                                                </div>
                                                <!-- Ends: .atw_slider_wrapper -->
                                                <?php
                                                $grid_pagination = !empty($grid_pagination) ? $grid_pagination : '';
                                                if ('yes' == $grid_pagination) {
                                                    ?>
                                                    <div class="row atbd_listing_pagination">
                                                        <div class="col-md-12">
                                                            <?php
                                                            $paged = !empty($paged) ? $paged : '';
                                                            echo wcpcsu_pagination($loop, $paged);
                                                            ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!-- Ends: .atw_style3 -->

                                            <?php
                                            }elseif('g_theme3' == $g_theme) {
                                            include WCPCSU_INC_DIR . 'theme/carousel/theme3.php';?>

                                            <div id="atw_style11">
                                                <?php if($h_title_show == 'yes') {?>
                                                    <div class="atw_title atw__title1">
                                                        <h3><?php echo !empty($header_title) ? $header_title : '';?></h3>
                                                    </div>
                                                <?php } ?>

                                                <div class="atw_grid_wrapper">
                                                    <div class="atw_row">
                                                        <?php
                                                        while($loop->have_posts()) : $loop->the_post();
                                                        global $post, $product;
                                                        $thumb = get_post_thumbnail_id();
                                                        // crop the image if the cropping is enabled.
                                                        if ('yes' === $img_crop){
                                                            $wpcsu_img = wpcsu_image_cropping($thumb, $crop_image_width, $crop_image_height, true, 100)['url'];
                                                        }else{
                                                            $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
                                                            $wpcsu_img = $aazz_thumb['0'];
                                                        }
                                                        ?>

                                                        <div class="atw_grid--single atw_grid_<?= $g_column;?> atw_tab_<?= $g_tablet?> atw_mobile_<?= $g_mobile;?>">
                                                            <div class="atw_item atw--single_item atw_card atw_card_rounded">
                                                                <div class="atw_item_top">
                                                                    <?php
                                                                    if ( has_post_thumbnail( $loop->post->ID ) ) { echo '<a href="'.get_the_permalink().'"><img src="'.esc_url($wpcsu_img).'" class="wpcsp-thumb"  alt="'.get_the_title().'" /></a>'; } else { echo '<a href="'.get_the_permalink().'"><img src="'.wc_placeholder_img_src().'" alt="Placeholder" /></a>'; }
                                                                    if( !empty($display_sale_ribbon) && $display_sale_ribbon == "yes") {
                                                                        echo '<div class="atw_floated_badge badge--right">';
                                                                        if ( $product->is_on_sale() ) {
                                                                            echo !empty($sale_ribbon_text)
                                                                                ?  apply_filters(
                                                                                    'woocommerce_sale_flash',
                                                                                    '<a href="" class="float-d-ratio">' . esc_html($sale_ribbon_text) . '</a>',
                                                                                    $post, $product )
                                                                                : apply_filters(
                                                                                    'woocommerce_sale_flash',
                                                                                    '<a href="" class="float-d-ratio">' . esc_html__( 'Sale!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                                    $post, $product );

                                                                        }
                                                                        echo '</div>';
                                                                    }

                                                                    /*Display ribbon for featured products*/
                                                                    if( !empty($display_featured_ribbon) && $display_featured_ribbon == "yes") {
                                                                        echo '<div class="atw_floated_badge badge--left">';
                                                                        if ( $product->is_featured() ) {
                                                                            echo !empty($feature_ribbon_text)
                                                                                ?  apply_filters( 'wpcsp_featured_ribbon',
                                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($feature_ribbon_text) . '</a>',
                                                                                    $post, $product )
                                                                                : apply_filters(
                                                                                    'wpcsp_featured_ribbon',
                                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Featured!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                                    $post, $product );
                                                                        }
                                                                        echo '</div>';
                                                                    }


                                                                    /*Display ribbon for Sold Out products*/
                                                                    if( !empty($display_sold_out_ribbon) && $display_sold_out_ribbon == "yes") {
                                                                        echo '<div class="atw_floated_badge badge--right">';
                                                                        if (! $product->is_in_stock() ) {

                                                                            echo !empty($sold_out_ribbon_text)
                                                                                ?  apply_filters( 'wpcsp_sold_out_ribbon',
                                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html($sold_out_ribbon_text) . '</a>',
                                                                                    $post, $product )

                                                                                : apply_filters(
                                                                                    'wpcsp_sold_out_ribbon',
                                                                                    '<a href="'.get_the_permalink().'" class="float-d-ratio">' . esc_html__( 'Sold Out!', WPCSP_TEXTDOMAIN ) . '</a>',
                                                                                    $post, $product );

                                                                        }
                                                                        echo '</div>';
                                                                    }
                                                                    ?>
                                                                    <?php if('yes' == $display_cart) {?>
                                                                        <div class="cart atw_item_view">

                                                                <?php
                                                                echo do_shortcode('[add_to_cart id="'.get_the_ID().'"]');
                                                                ?>

                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="atw_item_bottom">
                                                                    <div class="atw_item_info">
                                                                        <?php if('yes' == $display_title) {?>
                                                                        <h4 class="atw_item_title">
                                                                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                                        </h4>
                                                                        <?php }
                                                                        if('yes'== $display_price) {
                                                                        ?>
                                                                        <span class="atw_price"><?php echo $product->get_price_html(); ?></span>
                                                                        <?php } ?>
                                                                        <?php
                                                                        if('yes' == $display_ratings) {
                                                                            $ratings = (($product->get_average_rating()/5)*100);
                                                                            ?>
                                                                            <div class="atw_rating woocommerce"><div class="woocommerce-product-rating"><div class="star-rating" title="<?php echo $ratings; ?>%"><span style="width: <?php echo $ratings; ?>%;"></span></div></div></div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endwhile;
                                                        wp_reset_postdata();
                                                        ?>
                                                    </div>
                                                </div>
                                                <!-- Ends: .atw_slider_wrapper -->
                                                <?php
                                                $grid_pagination = !empty($grid_pagination) ? $grid_pagination : '';
                                                if ('yes' == $grid_pagination) {
                                                    ?>
                                                    <div class="row atbd_listing_pagination">
                                                        <div class="col-md-12">
                                                            <?php
                                                            $paged = !empty($paged) ? $paged : '';
                                                            echo wcpcsu_pagination($loop, $paged);
                                                            ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!-- Ends: .atw_style3 -->

                                            <?php }
                                         }?>
                                        </div>
                                    </div>
                                </div>
                            </div>


            <?php
        }else{
            _e('No products found', WCPCSU_TEXTDOMAIN);
        }

        return ob_get_clean();
    }

    function aazz_show_discount_percentage() {

        global $product;

        if ( $product->is_on_sale() ) {

            if ( ! $product->is_type( 'variable' ) ) {

                $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;

            } else {

                $max_percentage = 0;

                foreach ( $product->get_children() as $child_id ) {
                    $variation = wc_get_product( $child_id );
                    $price = $variation->get_regular_price();
                    $sale = $variation->get_sale_price();
                    if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
                    if ( $percentage > $max_percentage ) {
                        $max_percentage = $percentage;
                    }
                }

            }

            return round($max_percentage) . "%";

        }

    }



    function get_total_reviews_count(){
        return get_comments(array(
            'status'   => 'approve',
            'post_status' => 'publish',
            'post_type'   => 'product',
            'count' => true
        ));
    }

    public function wcpcsu_style_files () {
        wp_enqueue_style('wcpcsu-animate');
        wp_enqueue_style('wcpcsu-line-awesome');
        wp_enqueue_style('wcpcsu-simple-line-icon');
        wp_enqueue_style('wcpcsu-theme');
        wp_enqueue_style('featherlight-style');
        wp_enqueue_style('wcpcsu-style');

        wp_enqueue_script('wcpcsu-featherlight');
        wp_enqueue_script('wcpcsu-custom');
    }
}
