<?php 
if( ! defined( 'ABSPATH' ) ) : exit(); endif; // No direct access allowed

function register_block() {
    //$asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

    wp_enqueue_script( 'wcpcsup-gutenberg-js', WCPCSU_URL . 'build/index.js', [
        'wp-block-editor', 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-server-side-render'
    ] );

    wp_enqueue_style( 'wcpcsup-main', WCPCSU_URL . 'assets/css/style.css' );
    wp_enqueue_style( 'wcpcsup-swmodal', WCPCSU_URL . 'assets/css/swmodal.css' );
    wp_enqueue_style( 'wcpcsup-swiper', WCPCSU_URL . 'assets/css/swiper-bundle.min.css' );

    wp_enqueue_script( 'wcpcsup-main-js', WCPCSU_URL . 'assets/js/main.js', /*array( 'jQuery' )*/ );
    wp_enqueue_script( 'wcpcsup-swmodal-js', WCPCSU_URL . 'assets/js/swmodal.js' );
    wp_enqueue_script( 'wcpcsup-swiper-js', WCPCSU_URL . 'assets/js/swiper-bundle.min.js' );

    wp_localize_script('wcpcsup-swmodal-js','wcpcsu_quick_view',array(
        'ajax_url'           => admin_url( 'admin-ajax.php' ),

    ));
    wp_localize_script('wcpcsup-main-js','main_js',array(
        'handbag_svg'           => WCPCSU_URL .'assets/icons/handbag.svg',

    ));

    register_block_type(
        'wcpcsup/block',
        [
            'style'           => 'wcpcsu-main',
            'editor_style'    => 'wcpcsu-main-js',
            'editor_script'   => 'wcpcsup-gutenberg-js',
            'api_version'     => 2,
            'render_callback' => 'render_callback'
        ]
    );
}

function render_callback( $attr ) {
    return do_shortcode("[wcpcsup id='1487']");
}

add_action( 'init', 'register_block' );

function add_rest_method( $endpoints ) {
    if ( is_wp_version_compatible( '5.5' ) ) {
        return $endpoints;
    }

    foreach ( $endpoints as $route => $handler ) {
        if ( isset( $endpoints[ $route ][0] ) ) {
            $endpoints[ $route ][0]['methods'] = [ WP_REST_Server::READABLE, WP_REST_Server::CREATABLE ];
        }
    }

    return $endpoints;
}
add_filter( 'rest_endpoints', 'add_rest_method');
?>