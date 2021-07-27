<?php
defined('ABSPATH') || die('Direct access is not allow');

class wcpcsu_Shortcode
{
    public function __construct ()
    {
        add_shortcode( 'wcpcsu', array( $this,'wcpcsu_shoortcode_method' ) );
        add_action( 'wp_ajax_ajax_quick_view', array( $this, 'ajax_quick_view' ) );
        add_action( 'wp_ajax_nopriv_ajax_quick_view', array( $this, 'ajax_quick_view') );
    }

    public function wcpcsu_shoortcode_method( $atts, $content = null ) {
        ob_start();
        global $product;
        $atts = shortcode_atts( array(
            'id'    =>  ''
        ), $atts );
        $post_id = $atts['id'];
        $this->wcpcsu_style_files();
        // get the array of data from the post meta
        $enc_data = get_post_meta( $post_id, 'wcpscu', true );
        $data_array = Woocmmerce_Product_carousel_slider_ultimate::unserialize_and_decode24( $enc_data );
        $value = is_array( $data_array ) ? $data_array : array();
        extract( $value );
        $rand_id                 = rand();
        $total_products          = ! empty( $total_products ) ? $total_products : 6;
        $layout                  = ! empty( $layout ) ? $layout : 'carousel';
        $products_type           = ! empty( $products_type ) ? $products_type : 'latest';
        $img_crop                = ! empty( $img_crop ) ? $img_crop : 'yes';
        $crop_image_width        = ! empty( $crop_image_width ) ? intval( $crop_image_width ) : 300;
        $crop_image_height       = ! empty( $crop_image_height ) ? intval( $crop_image_height ) : 300;
        $c_theme  			     = ! empty( $c_theme ) ? $c_theme : 'c_theme1';
        $g_theme  			     = ! empty( $g_theme ) ? $g_theme : 'g_theme1';
        $display_title           = ! empty( $display_title ) ? $display_title : 'yes';
        $display_price           = ! empty( $display_price ) ? $display_price : 'yes';
        $display_ratings         = ! empty( $display_ratings ) ? $display_ratings : 'yes';
        $display_cart            = ! empty( $display_cart ) ? $display_cart : 'yes';
        $nav_show                = ! empty( $nav_show ) ? $nav_show : 'yes';
        $ribbon                  = ! empty( $ribbon ) ? $ribbon : 'discount';
        $header                  = ! empty( $header ) ? $header : 'center';
        $h_title_show            = ! empty( $h_title_show ) ? $h_title_show : 'no';
        $display_full_title      = ! empty( $display_full_title ) ? $display_full_title : 'no';
        $g_column                = ! empty( $g_column ) ? intval( $g_column ) : 3;
        $g_tablet                = ! empty( $g_tablet ) ? intval( $g_tablet ) : 3;
        $g_mobile                = ! empty( $g_mobile ) ? intval( $g_mobile ) : 1;
        $grid_pagination         = ! empty( $grid_pagination ) ? $grid_pagination : 'no';
        $slide_time              = ! empty( $slide_time )  ? $slide_time : '2000' ;

        $theme                          = ! empty( $theme ) ? $theme : 'theme_1';
        $title_font_size                = ! empty( $title_font_size[$theme] ) ? $title_font_size[$theme] : '16';
        $title_font_color               = ! empty( $title_font_color[$theme] ) ? $title_font_color[$theme] : '#363940';
        $title_hover_font_color         = ! empty( $title_hover_font_color[$theme] ) ? $title_hover_font_color[$theme] : '#ff5500';
        $price_font_size                = ! empty( $price_font_size[$theme] ) ? $price_font_size[$theme] : '14';
        $price_font_color               = ! empty( $price_font_color[$theme] ) ? $price_font_color[$theme] : '#ff5500';
        $ratings_size                   = ! empty( $ratings_size[$theme] ) ? $ratings_size[$theme] : '1em';
        $ratings_color                  = ! empty( $ratings_color[$theme] ) ? $ratings_color[$theme] : '#FEB507';
        $cart_font_color                = ! empty( $cart_font_color[$theme] ) ? $cart_font_color[$theme] : '#ffffff';
        $cart_bg_color                  = ! empty( $cart_bg_color[$theme] ) ? $cart_bg_color[$theme] : '#ff5500';
        $cart_button_hover_color        = ! empty( $cart_button_hover_color[$theme] ) ? $cart_button_hover_color[$theme] : '#9A9A9A';
        $cart_button_hover_font_color   = ! empty( $cart_button_hover_font_color[$theme] ) ? $cart_button_hover_font_color[$theme] : '#ffffff';
        $ribbon_bg_color                = ! empty( $ribbon_bg_color[$theme] ) ? $ribbon_bg_color[$theme] : '#A4C741';
        $quick_view_icon_color          = ! empty( $quick_view_icon_color[$theme] ) ? $quick_view_icon_color[$theme] : '#ffffff';
        $quick_view_icon_back_color     = ! empty( $quick_view_icon_back_color[$theme] ) ? $quick_view_icon_back_color[$theme] : '#ff5500';

        $paged                          =  wcpcsu_get_paged_num();
        $common_args = array(
            'post_type'      => 'product',
            'posts_per_page' => ! empty( $total_products ) ? intval( $total_products ) : 12,
            'post_status'    => 'publish',
            'meta_query'     => array(
                array(
                    'key'       => '_stock_status',
                    'value'     => 'outofstock',
                    'compare'   => 'NOT IN'
                )
            )
        );
        if( 'grid' == $layout && 'yes' == $grid_pagination ) {
            $common_args['paged']    = $paged;
        }
        if( $products_type == "latest" ) {
            $args = $common_args;
        }
        elseif( $products_type == "older" ) {
            $older_args = array(
                'orderby'     => 'date',
                'order'       => 'ASC'
            );
            $args = array_merge( $common_args, $older_args );
        }
        elseif( $products_type == "featured" ) {
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
            $args = array_merge( $common_args, $featured_args );
        }

        else {
            $args = $common_args;
        }
        $loop = new WP_Query( $args );

        if( $loop->have_posts() ) { ?>
        <div
        class="wpcu-products wpcu-<?php echo $theme; ?> wpcu-lazy-load <?php echo ( 'carousel' == $layout ) ? 'wpcu-carousel' : ''; ?>"
        style="
            --headerFontSize: inherit;
            --headerFontColor: inherit;
            --productTitleSize: 15px;
            --productTitleColor: #363940;
            --productTitleColorHover: #000;
            --productPriceSize: 16px;
            --productPriceColor: #ff5500;
            --productRatingSize: 16px;
            --productRatingColor: #feb507;
            --buttonColor: #fff;
            --buttonColorHover: #fff;
            --buttonBgColor: #ff5500;
            --buttonBgColorHover: #d54500;
            --ribbonBgColor: #ff5500;
            --qvIconColor: #fff;
            --qvBgColor: #ff5500;
        "
        <?php if( 'carousel' == $layout ) { ?>
        data-wpcu-items="4"
        data-wpcu-margin="30"
        data-wpcu-loop="true"
        data-wpcu-perslide="1"
        data-wpcu-speed="300"
        data-wpcu-autoplay='{
            "delay": "3000",
            "pauseOnMouseEnter": "true",
            "disableOnInteraction": "false"
        }'
        data-wpcu-responsive='{
            "320": {"slidesPerView": "2", "spaceBetween": "20"},
            "480": {"slidesPerView": "3", "spaceBetween": "30"},
            "640": {"slidesPerView": "4", "spaceBetween": "30"}
        }'
        <?php } ?>
        >
        <div class="<?php echo ( 'carousel' == $layout ) ? 'swiper-wrapper' : 'wpcu-row wpcu-column-5 wpcu-column-md-2'; ?>">
        <?php
            while($loop->have_posts()) : $loop->the_post();
            global $post,$product;
            $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
            $wpcsu_img = $aazz_thumb['0'];
            $sale_price = $product->get_sale_price();
            $ratings = (($product->get_average_rating()/5)*100);
            
            include WCPCSU_INC_DIR . 'template/theme/' . $theme . '.php';

            endwhile;
            wp_reset_postdata();
            if( 'theme_2' == $theme ){
                include WCPCSU_INC_DIR . 'template/quick-view.php';
            }
            ?>
            
            </div>
            <?php if( 'carousel' == $layout ) { 
                include WCPCSU_INC_DIR . 'template/navigation.php';
             } ?>    
        </div><!-- ends: .wpcu-products -->
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
        wp_enqueue_style( 'wcpcsu-main' );
        wp_enqueue_style('wcpcsu-style');
        wp_enqueue_style('wcpcsu-swmodal');
        wp_enqueue_style('wcpcsu-swiper');
        wp_enqueue_script('wcpcsu-swmodal-js');
        wp_enqueue_script('wcpcsu-swiper-js');
        wp_enqueue_script('wcpcsu-main-js');
    }

    public function ajax_quick_view() {
        $nonce          = ! empty( $_POST['nonce'] ) ? $_POST['nonce'] : '';
        $product_id     = ! empty( $_POST['product_id'] ) ? $_POST['product_id'] : '';
        if( ! wp_verify_nonce( $nonce, 'wcpcsu_quick_view_' . $product_id ) ) {
            die();
        }
        ob_start(); 
        $product     = wc_get_product( $product_id );
        $wpcsu_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'large' );
        $wpcsu_img   = $wpcsu_thumb['0'];
        ?>
        <div>
            <div class='title'><?php echo get_the_title( $product_id );?></div>
            <?php if ( ! empty( $wpcsu_img ) ) { ?>
            <div class='image'>
                <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title( $product_id );?>">
            </div>
            <?php } ?>
            <div class='description'>
                <?php echo $product->get_description(); ?>
            </div>
            <div class='price'><?php echo $product->get_price_html(); ?></div>
            <div class='add_to_cart'><?php echo do_shortcode('[add_to_cart id="' . $product_id . '" show_price = "false"]'); ?></div>
        </div>
        <?php
        $template = ob_get_clean();

        wp_send_json( $template );
    }
}
