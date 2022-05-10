<?php
defined('ABSPATH') || die('Direct access is not allow');

class Wcpcsu_Custom_Post
{
    public function __construct ()
    {
        add_action('init',array($this,'wcpcsu_custom_post'));
        add_filter('manage_'.WCPCSU_CUSTOM_POST_TYPE.'_posts_columns',array($this,'wcpcsu_post_columns'));
        add_action('manage_'.WCPCSU_CUSTOM_POST_TYPE.'_posts_custom_column', array($this, 'wcpcsu_custom_column'), 10, 2);
    }

    public function wcpcsu_custom_post ()
    {
        $labels = array(
            'name'               => _x( 'Woocommerce Product Ultimate', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'singular_name'      => _x( 'Woocommerce Product Ultimate', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'menu_name'          => _x( 'Woocommerce Product Ultimate', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'name_admin_bar'     => _x( 'Woocommerce Product Ultimate', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'add_new'            => _x( 'Add New', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'add_new_item'       => __( 'Add New', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'new_item'           => __( 'Add New', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'edit_item'          => __( 'Edit Woocommerce Product Grid Carousel Slider Ultimate', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'view_item'          => __( 'View Woocommerce Product Grid Carousel Slider Ultimate', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'all_items'          => __( 'All Woocommerce Product Ultimate', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'search_items'       => __( 'Search Woocommerce Product Grid Carousel Slider Ultimate', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'parent_item_colon'  => __( 'Parent Woocommerce Product Grid Carousel Slider Ultimate:', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'not_found'          => __( 'No Woocommerce Product Grid Carousel Slider Ultimate found.', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'not_found_in_trash' => __( 'No Woocommerce Product Grid Carousel Slider Ultimate found in Trash.', 'woocommerce-product-carousel-slider-and-grid-ultimate' )
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => WCPCSU_CUSTOM_POST_TYPE ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title'),
            'menu_icon'          => 'dashicons-images-alt'
        );

        register_post_type( WCPCSU_CUSTOM_POST_TYPE, $args );
        flush_rewrite_rules();
    }

    public function wcpcsu_post_columns ($columns) {
        $columns = array();
        $columns['cb']   = '<input type="checkbox" />';
        $columns['title']   = esc_html__('All Titles', 'woocommerce-product-carousel-slider-and-grid-ultimate');
        $columns['wpcsp_shortcode_col']   = esc_html__('All Shortcodes', 'woocommerce-product-carousel-slider-and-grid-ultimate');
        //$columns['slider_id']   = esc_html__('Carousel ID # (helpful for widget) ', 'woocommerce-product-carousel-slider-and-grid-ultimate'); //uncomment when widgets added
        $columns['date']   = esc_html__('Created at', 'woocommerce-product-carousel-slider-and-grid-ultimate');
        return $columns;
    }

    public function wcpcsu_custom_column ($column_name, $post_id) {
        switch($column_name){
            case 'wpcsp_shortcode_col': ?>
                <textarea style="resize: none; text-align: center; background-color: #0073aa; color: #fff;" cols="20" rows="1" onClick="this.select();" >[wcpcsu id="<?php echo intval($post_id);?>"]</textarea>
                <?php
                break;
            case 'slider_id':
                ?>
                <strong><?php echo intval($post_id); ?></strong>
                <?php
                break;

            default:
                break;

        }
    }
}