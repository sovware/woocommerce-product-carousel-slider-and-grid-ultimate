<?php
defined('ABSPATH') || die('Direct access is not allow');

class Wcpcsu_Migration
{
    public function __construct ()
    {
        //add_action('init', array( $this,'migrate_custom_post') );
    }

    public function migrate_custom_post() {
        $old_posts = get_posts( array( 'post_type'        => 'wcpcsu-custom-post' ) );

        if( ! empty( $old_posts ) ) {
            foreach( $old_posts as $old_post ) {
                wp_insert_post( array(

                ) );
            }
        }
    }

   
}