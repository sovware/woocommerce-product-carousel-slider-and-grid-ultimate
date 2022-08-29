<?php
/**
Plugin Name: Product Carousel Slider & Grid Ultimate Pro for WooCommerce
Plugin URI:  https://wpwax.com/product/woocommerce-product-carousel-slider-grid-ultimate-pro
Description: It is a fully responsive and mobile friendly WooCommerce Product Carousel, Slider and Grid plugin which comes with lots of features.
Version:     3.6.2
Author:      wpWax
Author URI:  https://wpwax.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages/
Text Domain: woo-product-carousel-slider-and-grid-ultimate
WC requires at least: 3.0
WC tested up to: 6.5
 */
defined('ABSPATH') || die('Direct access is not allow');
if( ! in_array('woocommerce-product-carousel-slider-grid-ultimate-pro/main.php', apply_filters('active_plugins', get_option('active_plugins'))) ) {
    /**
     * Main Woocommerce Product Carousel Slider Ultimate class.
     *
     * @since 1.0.0
     */
    class Woocmmerce_Product_carousel_slider_ultimate_Pro
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
         * license
         *@since 1.8.6
        */
        public $license;

        /**
         * Migration
         *@since 1.8.6
        */
        public $migrate;

        /**
         * Main Woocmmerce_Product_carousel_slider_ultimate_Pro Instance.
         *
         *
         * @since 1.0
         * @static
         * @static_var array $instance
         * @uses instanceof::adl_constants() Setup the constants needed.
         * @uses instanceof::wcpcsu_include() Include the required files.
         * @uses instanceof::wcpcsu_load_textdomain() load the language files.
         * @return object|Woocmmerce_Product_carousel_slider_ultimate_Pro The one true Woocmmerce_Product_carousel_slider_ultimate_Pro
         */
        public static function instance() {
            if(!isset(self::$instance) && !(self::$instance instanceof Woocmmerce_Product_carousel_slider_ultimate_Pro)) {
                self::$instance = new Woocmmerce_Product_carousel_slider_ultimate_Pro;
                //if woocmmerce plugin not activate
                if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                    add_action( 'admin_notices', array( self::$instance, 'WCPCSU_admin_notice') );

                }
                self::$instance->adl_constants();
                add_action('plugin_loaded',array( self::$instance,'wcpcsu_load_textdomain' ) );
                add_action('admin_enqueue_scripts',array(self::$instance, 'wcpcsu_enqueue_file'));
                add_action('template_redirect',array( self::$instance, 'template_enqueue_file'));
                add_action( 'elementor/editor/after_enqueue_scripts', [ self::$instance, 'el_editor_script' ] );
                self::$instance->wcpcsu_include();
                self::$instance->custom_post = new Wcpcsu_Custom_Post();
                self::$instance->metabox = new Wcpcsu_Meta_Box();
                self::$instance->shortcode = new wcpcsu_Shortcode();
                self::$instance->license = new Wcpcsu_License_Controller();
                self::$instance->migrate = new Wcpcsu_Migration();
                // Initialize appsero tracking
                self::$instance->init_appsero();
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
            if ( ! defined( 'WCPCSU_TEXTDOMAIN' ) ) { define( 'WCPCSU_TEXTDOMAIN', 'woocommerce-product-carousel-slider-and-grid-ultimate' ); }
            // Plugin Includes Path
            if ( !defined('WCPCSU_INC_DIR') ) { define('WCPCSU_INC_DIR', WCPCSU_DIR.'includes/'); }
            // Plugin Language File Path
            if ( !defined('WCPCSU_LANG_DIR') ) { define('WCPCSU_LANG_DIR', dirname(plugin_basename( __FILE__ ) ) . '/languages'); }
            //custom post type id
            if ( !defined('WCPCSU_CUSTOM_POST_TYPE') ) { define('WCPCSU_CUSTOM_POST_TYPE', 'wcpcsu-custom-post'); }

            //custom post type id
            if (!defined('WCPCSU_VERSION')) {
                define('WCPCSU_VERSION', '3.6.1');
            }
            // this is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
            if (!defined('WCPCSU_REMOTE_URL')) {
                define('WCPCSU_REMOTE_URL', 'https://wpwax.com'); // IMPORTANT: change the name of this constant to something unique to prevent conflicts with other plugins using this system
            }
            // the download ID. This is the ID of your product in EDD and should match the download ID visible in your Downloads list (see example below)
            if (!defined('WCPCSU_REMOTE_POST_ID')) {
                define('WCPCSU_REMOTE_POST_ID', 4200); // IMPORTANT: change the name of this constant to something unique to prevent conflicts with other plugins using this system
            }
        }

        /**
         * plugin text domain
         */
        public function wcpcsu_load_textdomain()
        {
            load_plugin_textdomain( WCPCSU_TEXTDOMAIN, false, WCPCSU_LANG_DIR );
        }

        /**
         * include all require files
         *
         * @access private
         * @since 1.0.0
         * @return void
         */
        public function wcpcsu_include(){
            require_once WCPCSU_INC_DIR . 'elementor/init.php';
            require_once WCPCSU_INC_DIR . 'helper-functions.php';
            require_once WCPCSU_INC_DIR . 'wishlist/wishlist.php';
            require_once WCPCSU_INC_DIR . 'license/class-license-controller.php';
            wpcsu_load_dependencies( 'all', WCPCSU_INC_DIR . 'classes/' );

            if ( ! class_exists('EDD_SL_Plugin_Updater') ) {
                // load our custom updater if it doesn't already exist 
                include( dirname(__FILE__) . '/includes/license/EDD_SL_Plugin_Updater.php' );
            }
            // retrieve our license key from the DB
            $license_key = trim( get_option('wcpcsup_license_key') );
            // setup the updater
            new EDD_SL_Plugin_Updater( WCPCSU_REMOTE_URL, __FILE__, array(
                'version'       => WCPCSU_VERSION,        // current version number
                'license'       => $license_key,    // license key (used get_option above to retrieve from DB)
                'item_id'       => WCPCSU_REMOTE_POST_ID,    // id of this plugin
                'author'        => 'AazzTech',    // author of this plugin
                'url'           => home_url(),
                'beta'          => false // set to true if you wish customers to receive update notifications of beta releases
            ) );
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
            wp_register_style( 'wcpcsu-main', WCPCSU_URL . 'assets/css/style.css' );
            wp_register_style( 'wcpcsu-swmodal', WCPCSU_URL . 'assets/css/swmodal.css' );
            wp_register_style( 'wcpcsu-swiper', WCPCSU_URL . 'assets/css/swiper-bundle.min.css' );
            wp_register_script( 'wcpcsu-main-js', WCPCSU_URL . 'assets/js/main.js' );
            wp_register_script( 'wcpcsu-swmodal-js', WCPCSU_URL . 'assets/js/swmodal.js' );
            wp_register_script( 'wcpcsu-swiper-js', WCPCSU_URL . 'assets/js/swiper-bundle.min.js' );

            wp_localize_script('wcpcsu-swmodal-js','wcpcsu_quick_view',array(
                'ajax_url'           => admin_url( 'admin-ajax.php' ),
        
            ));
            wp_localize_script('wcpcsu-main-js','main_js',array(
                'handbag_svg'           => WCPCSU_URL .'assets/icons/handbag.svg',
        
            ));
        }

        public function el_editor_script() {
			wp_enqueue_style( 'wcpcsu-el-editor-style', WCPCSU_URL . 'includes/elementor/assets/style.css' );
		}

        /**
         * Initialize appsero tracking.
         *
         * @see https://github.com/Appsero/client
         *
         * @return void
         */
        public function init_appsero() {
            if ( ! class_exists( '\Appsero\Client' ) ) {
                require_once WCPCSU_INC_DIR . 'appsero/src/Client.php';
            }

            $client = new \Appsero\Client( 'a39a0a19-5945-4527-84b0-a13bcfac1faa', 'WooCommerce Product Carousel, Slider and Grid Ultimate', __FILE__ );

            // Active insights
            $client->insights()->init();
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

    function WCPCSUP() {
        return Woocmmerce_Product_carousel_slider_ultimate_Pro::instance();
    }

    // Get WCPCSU ( Woocommerce Product Carousel Slider Ultimate plugin ) Running.
    WCPCSUP();
    function wpcsu_image_cropping( $attachmentId, $width, $height, $crop = true, $quality = 100 )
    {
        $resizer = new Wpcsu_Image_Resizer( $attachmentId );

        return $resizer->resize( $width, $height, $crop, $quality );
    }

} else {
    function wcpcsup_delete_old_version() {
        deactivate_plugins('woocommerce-product-carousel-slider-grid-ultimate-pro/main.php');
        delete_plugins( array('woocommerce-product-carousel-slider-grid-ultimate-pro/main.php') );
    }
    add_action( 'admin_init', 'wcpcsup_delete_old_version' );
}