<?php
defined('ABSPATH') || die('Direct access is not allow');

class wcpcsu_Shortcode
{
    public function __construct ()
    {
        add_shortcode( 'wcpcsu', array( $this,'wcpcsu_shoortcode_method' ) );
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
        $paged                   =  wcpcsu_get_paged_num();
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

        if( $loop->have_posts() ) {
            wp_enqueue_style( 'wcpcsu-main' );
            include WCPCSU_INC_DIR . 'template/template2.php';
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

        wp_enqueue_style('wcpcsu-style');
        wp_enqueue_style('wcpcsu-tingle');
        wp_enqueue_script('wcpcsu-main-js');
        wp_enqueue_script('wcpcsu-tingle-js');
    }
}
