<?php
defined('ABSPATH') || die('Direct access is not allow');

class Wcpcsu_Migration
{
    public function __construct ()
    {
        add_action('admin_init', array( $this,'migrate_custom_post') );
    }

    public function migrate_custom_post() {
        $old_posts = get_posts( array( 'post_type'        => 'wcpcsu-custom-pro' ) );
        //$new_posts = get_posts( array( 'post_type'        => 'wcpcsu-custom-post' ) );

        if( ! empty( $old_posts ) ) {
            foreach( $old_posts as $old_post ) {
                $get_post_meta = get_post_meta( $old_post->ID, 'wcpscup', true );
                $get_meta      = Woocmmerce_Product_carousel_slider_ultimate_Pro::unserialize_and_decode24( $get_post_meta );
                $new_meta      = $get_meta;

                $grid_theme_number = trim( $get_meta['g_theme'], 'g_theme' );
                $carousel_theme_number = trim( $get_meta['c_theme'], 'c_theme' );

                $new_meta['title_font_size'] = array();
                $new_meta['title_font_color'] = array();
                $new_meta['title_hover_font_color'] = array();
                $new_meta['price_font_size'] = array();
                $new_meta['price_font_color'] = array();
                $new_meta['ratings_size'] = array();
                $new_meta['ratings_color'] = array();
                $new_meta['cart_font_color'] = array();
                $new_meta['cart_bg_color'] = array();
                $new_meta['cart_button_hover_color'] = array();
                $new_meta['cart_button_hover_font_color'] = array();
                $new_meta['ribbon_bg_color'] = array();
                $new_meta['quick_view_icon_color'] = array();
                $new_meta['quick_view_icon_back_color'] = array();

                if( 'grid' == $get_meta['layout'] ) {
                    $new_meta['theme'] = 'theme_' . $grid_theme_number;
                }elseif( 'carousel' == $get_meta['layout'] ) {
                    $new_meta['theme'] = 'theme_' . $carousel_theme_number;
                }
                
                $new_meta['header_position'] = $get_meta['header'];
                $new_meta['title_font_size'][$new_meta['theme']] = $get_meta['title_font_size'];
                $new_meta['title_font_color'][$new_meta['theme']] = $get_meta['title_font_color'];
                $new_meta['title_hover_font_color'][$new_meta['theme']] = $get_meta['title_hover_font_color'];
                $new_meta['price_font_size'][$new_meta['theme']] = $get_meta['price_font_size'];
                $new_meta['price_font_color'][$new_meta['theme']] = $get_meta['price_font_color'];
                $new_meta['ratings_size'][$new_meta['theme']] = $get_meta['ratings_size'];
                $new_meta['ratings_color'][$new_meta['theme']] = $get_meta['ratings_color'];
                $new_meta['cart_font_color'][$new_meta['theme']] = $get_meta['cart_font_color'];
                $new_meta['cart_bg_color'][$new_meta['theme']] = $get_meta['cart_bg_color'];
                $new_meta['cart_button_hover_color'][$new_meta['theme']] = $get_meta['cart_button_hover_color'];
                $new_meta['cart_button_hover_font_color'][$new_meta['theme']] = $get_meta['cart_button_hover_font_color'];
                $new_meta['ribbon_bg_color'][$new_meta['theme']] = $get_meta['ribbon_bg_color'];
                $new_meta['quick_view_icon_color'][$new_meta['theme']] = $get_meta['quick_view_icon_color'];
                $new_meta['quick_view_icon_back_color'][$new_meta['theme']] = $get_meta['quick_view_icon_back_color'];

                $create_post = wp_insert_post( array( 
                    'ID'         => $old_post->ID,
                    'post_type'  => 'wcpcsu-custom-post',
                    'post_title' => $old_post->post_title,
                    'post_status' => 'publish',
                ) );
                
                if( $create_post ) {
                    update_post_meta( $old_post->ID, 'wcpscu', Woocmmerce_Product_carousel_slider_ultimate_Pro::serialize_and_encode24( $new_meta ) );
                }
                
            }
           
            
        }
    }

   
}