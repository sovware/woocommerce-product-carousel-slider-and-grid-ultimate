<?php
/**
 * Exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $_GET['wcpcsu-dismiss-discount-notice'] ) && 'true' == $_GET['wcpcsu-dismiss-discount-notice'] ) {
    update_option( 'wcpcsu_dismiss_discount_notice', true );
}

if ( ! isset( $_GET['wcpcsu-dismiss-discount-notice'] ) ) { ?>
    <div class="wpcu-dashboard-notice">
        <a class="wpcu-dashboard-notice__dismiss" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'wcpcsu-dismiss-discount-notice', 'true' ) ) ); ?>"><?php esc_html_e( 'Dismiss', 'woocommerce-product-carousel-slider-and-grid-ultimate' ); ?></a>

        <img src="<?php echo esc_url( 'https://s12.gifyu.com/images/SuUGf.gif' ); ?>" alt="">
        <h5><?php esc_html_e( 'EXCLUSIVE OFFER FOR PRODUCT CAROUSEL SLIDER & GRID ULTIMATE!', 'logo-showcase-ultimate' ); ?></h5>
        <p>
        <?php esc_html_e( "Save 35% this summer with Product Carousel Slider & Grid Ultimate! Boost your WooCommerce store this season and enhance product showcasing. Create dynamic sliders and grids, customize layouts, and maximize conversions. Don't miss out on this exclusive offer.", "woocommerce-product-carousel-slider-and-grid-ultimate" ); ?>
        </p>
        <a class="wpcu-dashboard-notice__dismiss" target="_blank" href="<?php echo esc_url( 'https://wpwax.com/product/woocommerce-product-carousel-slider-grid-ultimate-pro/#single-plugin-pricing-plan' ); ?>"><?php esc_html_e( 'Get Now!', 'woocommerce-product-carousel-slider-and-grid-ultimate' ); ?></a>
        
    </div>
<?php } ?>
