<?php

function register_hello_world_widget( $widgets_manager ) {

	require_once WCPCSU_INC_DIR . 'elementor/widget.php';

	$widgets_manager->register( new \Elementor_Hello_World_Widget_1() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );