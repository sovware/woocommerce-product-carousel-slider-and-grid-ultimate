<?php
defined('ABSPATH') || die('Direct access is not allow');

class Wcpcsu_Meta_Box
{
    public function __construct ()
    {
        if (is_admin()) {
            add_action('add_meta_boxes_' . WCPCSU_CUSTOM_POST_TYPE, array($this, 'wcpcsu_meta_box'));
            add_action('edit_post', array($this, 'wcpcsu_update_post'));
        }
    }

    public function wcpcsu_meta_box ()
    {
        add_meta_box('wcpcsu_meta_box',
            __('Settings & Shortcode Generator', WCPCSU_TEXTDOMAIN),
            array($this, 'wcpcsu_meta_box_input'),
            WCPCSU_CUSTOM_POST_TYPE,
            'normal'
        );
    }

    public function wcpcsu_meta_box_input ($post)
    {
        // Add a nonce field so we can check for it later.
        wp_nonce_field('wcpscu_action', 'wcpscu_nonce');

        $lcg_svalue = get_post_meta($post->ID, 'wcpscu', true);
        $s_value = Woocmmerce_Product_carousel_slider_ultimate::unserialize_and_decode24($lcg_svalue);
        $value = is_array($s_value) ? $s_value : array();
        extract($value);

        require_once WCPCSU_INC_DIR . 'settings/settings.php';
    }

    public function wcpcsu_update_post ($post_id)
    {
        // vail if the security check fails
        if (!$this->wcpscu_security_check('wcpscu_nonce', 'wcpscu_action', $post_id))
            return;


        // save the meta data if it is our post type lcg_mainpost post type
        if (!empty($_POST['post_type']) && (WCPCSU_CUSTOM_POST_TYPE == $_POST['post_type'])) {

            $wcpscu = !empty($_POST['wcpscu']) ? Woocmmerce_Product_carousel_slider_ultimate::serialize_and_encode24($_POST['wcpscu']) : Woocmmerce_Product_carousel_slider_ultimate::serialize_and_encode24(array());

            //save the meta value
            update_post_meta($post_id, "wcpscu", $wcpscu);

        }
    }

    //security check
    private function wcpscu_security_check($nonce_name, $action, $post_id){
        // checks are divided into 3 parts for readability.
        if ( !empty( $_POST[$nonce_name] ) && wp_verify_nonce( $_POST[$nonce_name], $action ) ) {
            return true;
        }
        // If this is an autosave, our form has not been submitted, so we don't want to do anything. returns false
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return false;
        }
        // Check the user's permissions.
        if ( current_user_can( 'edit_post', $post_id ) ) {
            return true;
        }
        return false;
    }
}