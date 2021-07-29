<?php
if (!function_exists('wcpcsu_pagination')) {
    /**
     * Prints pagination for custom post
     * @param object|WP_Query $custom_post_query
     * @param int $paged
     *
     * @return string
     */
    function wcpcsu_pagination($custom_post_query, $paged = 1)
    {
        $navigation = '';
        $largeNumber = 999999999; // we need a large number here
        $links = paginate_links(array(
            'base' => str_replace($largeNumber, '%#%', esc_url(get_pagenum_link($largeNumber))),
            'format' => '?paged=%#%',
            'current' => max(1, $paged),
            'total' => $custom_post_query->max_num_pages,
            'prev_text' => apply_filters('wcpcsu_pagination_prev_text', '<span class="la la-angle-left"></span>'),
            'next_text' => apply_filters('wcpcsu_pagination_next_text', '<span class="la la-angle-right"></span>'),
        ));
        if ($links) {
            $navigation = _navigation_markup($links, 'pagination', ' ');
        }
        return apply_filters('wcpcsu_pagination', $navigation, $links, $custom_post_query, $paged);
    }
}
if (!function_exists('wcpcsu_get_paged_num')) {
    /**
     * Get current page number for the pagination.
     *
     * @since    1.0.0
     *
     * @return    int    $paged    The current page number for the pagination.
     */
    function wcpcsu_get_paged_num()
    {

        global $paged;

        if (get_query_var('paged')) {
            $paged = get_query_var('paged');
        } else if (get_query_var('page')) {
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }

        return absint($paged);

    }

}

if ( ! function_exists('wpcsu_load_dependencies') ) :
    function wpcsu_load_dependencies( $files = 'all', $directory = WCPCSU_INC_DIR, $ext = '.php' )
    {
        if ( ! file_exists( $directory ) ) return; // vail if the directory does not exist

        switch( $files ) {
            case is_array( $files ) && 'all' !== strtolower( $files[0] ):
                // include one or more file looping through the $files array
                load_some_file( $files, $directory );
                break;
            case ! is_array( $files ) && 'all' !== $files:
                //load a single file here
                ( file_exists( $directory . $files . $ext ) ) ? require_once $directory . $files . $ext : null;
                break;
            case 'all' == $files || 'all' == strtolower( $files[0] ):
                // load all php file here
                load_all_files( $directory );
                break;
        }

        return false;

    }
endif;

if ( ! function_exists('load_all_files') ):
    function load_all_files( $dir = '', $ext = '.php' )
    {
        if ( ! file_exists( $dir ) ) return;
        foreach ( scandir( $dir ) as $file ) {
            // require once all the files with the given ext. eg. .php
            if ( preg_match( "/{$ext}$/i", $file ) ) {
                require_once( $dir . $file );
            }
        }
    }
endif;

if ( ! function_exists('wpcsu_ribbon_badge') ) :
    function wpcsu_ribbon_badge( $ribbon_args, $discount )
    {
        global $product;
        $value = is_array( $ribbon_args ) ? $ribbon_args : array();
        extract( $value );


        if( ( 'yes' == $display_sale_ribbon && 'top_left' == $sale_ribbon_position && $product->is_on_sale() ) || ( 'yes' == $display_featured_ribbon && 'top_left' == $featured_ribbon_position && $product->is_featured() ) || ( 'yes' == $display_sold_out_ribbon && 'top_left' == $sold_out_ribbon_position && ! $product->is_in_stock() ) || ( 'yes' == $display_discount_ribbon && 'top_left' == $discount_ribbon_position && $product->get_sale_price() ) ) { ?>
            <div class="wpcu-product__cover-content wpcu-product__cover-content--top-left">

                <?php if( 'yes' == $display_sale_ribbon && 'top_left' == $sale_ribbon_position && $product->is_on_sale() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $sale_ribbon_text ) ? $sale_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_featured_ribbon && 'top_left' == $featured_ribbon_position && $product->is_featured() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $feature_ribbon_text ) ? $feature_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_sold_out_ribbon && 'top_left' == $sold_out_ribbon_position && ! $product->is_in_stock() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $sold_out_ribbon_text ) ? $sold_out_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_discount_ribbon && 'top_left' == $discount_ribbon_position && $product->get_sale_price() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $discount ) ? '-'.$discount : ''; ?></span>
                <?php } ?>

            </div>
            <?php } ?>

            <?php if( ( 'yes' == $display_sale_ribbon && 'top_right' == $sale_ribbon_position && $product->is_on_sale() ) || ( 'yes' == $display_featured_ribbon && 'top_right' == $featured_ribbon_position && $product->is_featured() ) || ( 'yes' == $display_sold_out_ribbon && 'top_right' == $sold_out_ribbon_position && ! $product->is_in_stock() ) || ( 'yes' == $display_discount_ribbon && 'top_right' == $discount_ribbon_position ) && $product->get_sale_price() ) { ?>
            <div class="wpcu-product__cover-content wpcu-product__cover-content--top-right">

                <?php if( 'yes' == $display_sale_ribbon && 'top_right' == $sale_ribbon_position && $product->is_on_sale() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $sale_ribbon_text ) ? $sale_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_featured_ribbon && 'top_right' == $featured_ribbon_position && $product->is_featured() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $feature_ribbon_text ) ? $feature_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_sold_out_ribbon && 'top_right' == $sold_out_ribbon_position && ! $product->is_in_stock() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $sold_out_ribbon_text ) ? $sold_out_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_discount_ribbon && 'top_right' == $discount_ribbon_position && $product->get_sale_price() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $discount ) ? '-'.$discount : ''; ?></span>
                <?php } ?>

            </div>
            <?php } ?>

            <?php if( ( 'yes' == $display_sale_ribbon && 'bottom_left' == $sale_ribbon_position && $product->is_on_sale() ) || ( 'yes' == $display_featured_ribbon && 'bottom_left' == $featured_ribbon_position && $product->is_featured() ) || ( 'yes' == $display_sold_out_ribbon && 'bottom_left' == $sold_out_ribbon_position && ! $product->is_in_stock() ) || ( 'yes' == $display_discount_ribbon && 'bottom_left' == $discount_ribbon_position ) && $product->get_sale_price() ) { ?>
            <div class="wpcu-product__cover-content wpcu-product__cover-content--bottom-left">

                <?php if( 'yes' == $display_sale_ribbon && 'bottom_left' == $sale_ribbon_position && $product->is_on_sale() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $sale_ribbon_text ) ? $sale_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_featured_ribbon && 'bottom_left' == $featured_ribbon_position && $product->is_featured() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $feature_ribbon_text ) ? $feature_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_sold_out_ribbon && 'bottom_left' == $sold_out_ribbon_position && ! $product->is_in_stock() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $sold_out_ribbon_text ) ? $sold_out_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_discount_ribbon && 'bottom_left' == $discount_ribbon_position && $product->get_sale_price() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $discount ) ? '-'.$discount : ''; ?></span>
                <?php } ?>

            </div>
            <?php } ?>

            <?php if( ( 'yes' == $display_sale_ribbon && 'bottom_right' == $sale_ribbon_position && $product->is_on_sale() ) || ( 'yes' == $display_featured_ribbon && 'bottom_right' == $featured_ribbon_position && $product->is_featured() ) || ( 'yes' == $display_sold_out_ribbon && 'bottom_right' == $sold_out_ribbon_position && ! $product->is_in_stock() ) || ( 'yes' == $display_discount_ribbon && 'bottom_right' == $discount_ribbon_position ) && $product->get_sale_price()) { ?>
            <div class="wpcu-product__cover-content wpcu-product__cover-content--bottom-right">

                <?php if( 'yes' == $display_sale_ribbon && 'bottom_right' == $sale_ribbon_position && $product->is_on_sale() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $sale_ribbon_text ) ? $sale_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_featured_ribbon && 'bottom_right' == $featured_ribbon_position && $product->is_featured() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $feature_ribbon_text ) ? $feature_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_sold_out_ribbon && 'bottom_right' == $sold_out_ribbon_position && ! $product->is_in_stock() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $sold_out_ribbon_text ) ? $sold_out_ribbon_text : ''; ?></span>
                <?php } ?>

                <?php if( 'yes' == $display_discount_ribbon && 'bottom_right' == $discount_ribbon_position && $product->get_sale_price() ) { ?>
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--text-lg wpcu-badge--rounded-circle"><?php echo ! empty( $discount ) ? '-'.$discount : ''; ?></span>
                <?php } ?>

            </div>
            <?php }


    }
endif;