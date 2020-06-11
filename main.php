<?php
/**
Plugin Name: WooCommerce Product Carousel, Slider and Grid Ultimate
Plugin URI:  https://aazztech.com/product/woocommerce-product-carousel-slider-grid-ultimate-pro
Description: It is a fully responsive and mobile friendly WooCommerce Product Carousel, Slider and Grid plugin which comes with lots of features.
Version:     1.7.4
Author:      AazzTech
Author URI:  https://aazztech.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages/
Text Domain: woo-product-carousel-slider-and-grid-ultimate
WC requires at least: 3.0
WC tested up to: 4.2
 */
defined('ABSPATH') || die('Direct access is not allow');
/**
 * Main Woocommerce Product Carousel Slider Ultimate class.
 *
 * @since 1.0.0
 */
Final class Woocmmerce_Product_carousel_slider_ultimate
{

    /**
    *
    * @since 1.0.0
    */
    private static $instance;

    /**
     * all metabox
     * @since 1.0.0
     */
    public $metabox;

    /**
     *custom post
     *@since 1.0.0
     */
    public $custom_post;

    /**
     *all shortcode
     *@since 1.0.0
     */
    public $shortcode;

    /**
     * Main Woocmmerce_Product_carousel_slider_ultimate Instance.
     *
     *
     * @since 1.0
     * @static
     * @static_var array $instance
     * @uses instanceof::adl_constants() Setup the constants needed.
     * @uses instanceof::wcpcsu_include() Include the required files.
     * @uses instanceof::wcpcsu_load_textdomain() load the language files.
     * @return object|Woocmmerce_Product_carousel_slider_ultimate The one true Woocmmerce_Product_carousel_slider_ultimate
     */
    public static function instance() {
        if(!isset(self::$instance) && !(self::$instance instanceof Woocmmerce_Product_carousel_slider_ultimate)) {
            self::$instance = new Woocmmerce_Product_carousel_slider_ultimate;
            //if woocmmerce plugin not activate
            if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                add_action( 'admin_notices', array(self::$instance, 'WCPCSU_admin_notice') );

            }
            self::$instance->adl_constants();
            add_action('plugin_loaded',array( self::$instance,'wcpcsu_load_textdomain' ) );
            add_action('admin_enqueue_scripts',array(self::$instance, 'wcpcsu_enqueue_file'));
            add_action('template_redirect',array(self::$instance, 'template_enqueue_file'));
            add_action('admin_menu',array(self::$instance,'upgrade_to_pro'));
            self::$instance->wcpcsu_include();
            self::$instance->custom_post = new Wcpcsu_Custom_Post();
            self::$instance->metabox = new Wcpcsu_Meta_Box();
            self::$instance->shortcode = new wcpcsu_Shortcode();
        }

        return self::$instance;
    }

    /**
     * Setup plugin constants.
     * @access private
     * @since 1.0
     * @return void
     */
    public function adl_constants() {
        // Plugin Folder Path.
        if ( ! defined( 'WCPCSU_DIR' ) ) { define( 'WCPCSU_DIR', plugin_dir_path( __FILE__ ) ); }
        // Plugin Folder URL.
        if ( ! defined( 'WCPCSU_URL' ) ) { define( 'WCPCSU_URL', plugin_dir_url( __FILE__ ) ); }
        // Plugin Root File.
        if ( ! defined( 'WCPCSU_FILE' ) ) { define( 'WCPCSU_FILE', __FILE__ ); }
        if ( ! defined( 'WCPCSU_BASE' ) ) { define( 'WCPCSU_BASE', plugin_basename( __FILE__ ) ); }
        // Plugin Text domain File.
        if ( ! defined( 'WCPCSU_TEXTDOMAIN' ) ) { define( 'WCPCSU_TEXTDOMAIN', 'woo-product-carousel-slider-and-grid-ultimate' ); }
        // Plugin Includes Path
        if ( !defined('WCPCSU_INC_DIR') ) { define('WCPCSU_INC_DIR', WCPCSU_DIR.'includes/'); }
        // Plugin Language File Path
        if ( !defined('WCPCSU_LANG_DIR') ) { define('WCPCSU_LANG_DIR', dirname(plugin_basename( __FILE__ ) ) . '/languages'); }
        //custom post type id
        if ( !defined('WCPCSU_CUSTOM_POST_TYPE') ) { define('WCPCSU_CUSTOM_POST_TYPE', 'wcpcsu-custom-post'); }
    }

    public function upgrade_to_pro () {
        add_submenu_page( 'edit.php?post_type=wcpcsu-custom-post', esc_html__('Support', WCPCSU_TEXTDOMAIN), esc_html__('Usage & Support', WCPCSU_TEXTDOMAIN), 'manage_options', 'support', array( self::$instance, 'support_view' ) );
    }

    public function support_view () {
        include WCPCSU_INC_DIR . 'upgrade-pro.php';
    }

    /**
     * plugin text domain
     */
    public function wcpcsu_load_textdomain()
    {
        load_plugin_textdomain( WCPCSU_TEXTDOMAIN,false,WCPCSU_LANG_DIR );
    }

    /**
     * include all require files
     *
     * @access private
     * @since 1.0.0
     * @return void
     */
    public function wcpcsu_include(){
        require_once WCPCSU_INC_DIR . 'wcpcsu-custom-post.php';
        require_once WCPCSU_INC_DIR . 'wcpcsu-meta-box.php';
        require_once WCPCSU_INC_DIR . 'wcpcsu-Shortcode.php';
        require_once WCPCSU_INC_DIR . 'aq_resizer.php';
        require_once WCPCSU_INC_DIR . 'helper-functions.php';
    }

    public function WCPCSU_admin_notice() { ?>
        <div class="error">
            <p>
                <?php
                printf('%s <strong>%s</strong>', esc_html__('WooCommerce plugin is not activated. Please install and activate it to use', WCPCSU_TEXTDOMAIN), esc_html__('WooCommerce Product Carousel Slider Ultimate Plugin', WCPCSU_TEXTDOMAIN) );
                ?>
            </p>
        </div>
    <?php
    }

    public function wcpcsu_enqueue_file () {
        global $typenow;
        if($typenow == WCPCSU_CUSTOM_POST_TYPE) {
            wp_enqueue_style('wcpcsu-admin-cmb2', WCPCSU_URL . 'admin/css/cmb2.min.css');
            wp_enqueue_style('wcpcsu-admin', WCPCSU_URL . 'admin/css/wcpcsu-admin.css');
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_script('wp-color-picker');
            wp_enqueue_script('wcpcsu-admin-js', WCPCSU_URL . 'admin/js/wcpcs-admin.js', array('jquery'));
        }
    }

    public function template_enqueue_file () {
        wp_register_style('wcpcsu-animate', WCPCSU_URL . 'assets/css/animate.css');
        wp_register_style('wcpcsu-line-awesome', WCPCSU_URL . 'assets/css/line-awesome.css');
        wp_register_style('wcpcsu-owl-carousel', WCPCSU_URL . 'assets/css/owl.carousel.css');
        wp_register_style('wcpcsu-simple-line-icon', WCPCSU_URL . 'assets/css/simple-line-icons.css');
        wp_register_style('wcpcsu-theme', WCPCSU_URL . 'assets/css/theme.css');
        wp_register_style('featherlight-style', WCPCSU_URL . 'assets/css/featherlight.css');
        wp_register_style('wcpcsu-style', WCPCSU_URL . 'assets/css/style.css');
        wp_register_script('wcpcsu-owl-carousel',WCPCSU_URL . 'assets/js/owl.carousel.min.js',array('jquery'));
        wp_register_script('wcpcsu-featherlight', WCPCSU_URL . 'assets/js/featherlight.js',array('jquery'));
        wp_register_script('wcpcsu-custom', WCPCSU_URL . 'assets/js/custom.js',array('jquery'));
    }

    /**
     * It will serialize and then encode the string using base64_encode() and return the encoded data
     * @param $data
     * @return string
     */
    public static function serialize_and_encode24($data)
    {
        return base64_encode(serialize($data));
    }

    /**
     * It will decode the data using base64_decode() and then unserialize the data and return it
     * @param string $data Encoded strings that should be decoded and then unserialize
     * @return mixed
     */
    public static function unserialize_and_decode24($data){
        return unserialize(base64_decode($data));
    }

} //end of class

function WCPCSU() {
    return Woocmmerce_Product_carousel_slider_ultimate::instance();
}

// Get WCPCSU ( Woocommerce Product Carousel Slider Ultimate plugin ) Running.
WCPCSU();
function wpcsu_image_cropping($attachmentId, $width, $height, $crop = true, $quality = 100)
{
    $resizer = new Wpcsu_Image_resizer($attachmentId);

    return $resizer->resize($width, $height, $crop, $quality);
}

