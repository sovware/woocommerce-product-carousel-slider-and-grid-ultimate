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
            'name'               => _x( 'Woocommerce Product Ultimate', WCPCSU_TEXTDOMAIN ),
            'singular_name'      => _x( 'Woocommerce Product Ultimate', WCPCSU_TEXTDOMAIN ),
            'menu_name'          => _x( 'Woocommerce Product Ultimate', WCPCSU_TEXTDOMAIN ),
            'name_admin_bar'     => _x( 'Woocommerce Product Ultimate', WCPCSU_TEXTDOMAIN ),
            'add_new'            => _x( 'Add New', WCPCSU_TEXTDOMAIN ),
            'add_new_item'       => __( 'Add New', WCPCSU_TEXTDOMAIN ),
            'new_item'           => __( 'Add New', WCPCSU_TEXTDOMAIN ),
            'edit_item'          => __( 'Edit Woocommerce Product Grid Carousel Slider Ultimate', WCPCSU_TEXTDOMAIN ),
            'view_item'          => __( 'View Woocommerce Product Grid Carousel Slider Ultimate', WCPCSU_TEXTDOMAIN ),
            'all_items'          => __( 'All Woocommerce Product Ultimate', WCPCSU_TEXTDOMAIN ),
            'search_items'       => __( 'Search Woocommerce Product Grid Carousel Slider Ultimate', WCPCSU_TEXTDOMAIN ),
            'parent_item_colon'  => __( 'Parent Woocommerce Product Grid Carousel Slider Ultimate:', WCPCSU_TEXTDOMAIN ),
            'not_found'          => __( 'No Woocommerce Product Grid Carousel Slider Ultimate found.', WCPCSU_TEXTDOMAIN ),
            'not_found_in_trash' => __( 'No Woocommerce Product Grid Carousel Slider Ultimate found in Trash.', WCPCSU_TEXTDOMAIN )
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', WCPCSU_TEXTDOMAIN ),
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
        $columns['title']   = esc_html__('All Titles', WCPCSU_TEXTDOMAIN);
        $columns['wpcsp_shortcode_col']   = esc_html__('All Shortcodes', WCPCSU_TEXTDOMAIN);
        //$columns['slider_id']   = esc_html__('Carousel ID # (helpful for widget) ', WCPCSU_TEXTDOMAIN); //uncomment when widgets added
        $columns['date']   = esc_html__('Created at', WCPCSU_TEXTDOMAIN);
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
                <strong><?= intval($post_id); ?></strong>
                <?php
                break;

            default:
                break;

        }
    }
}