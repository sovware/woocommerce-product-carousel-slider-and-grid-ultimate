<?php

use Elementor\Controls_Manager;
class Elementor_Woo_Ultimate_Widget extends \Elementor\Widget_Base {

	public function register_controls() {
		$fields = $this->wpcsu_fields();
		foreach ( $fields as $field ) {
			if ( isset( $field['mode'] ) && $field['mode'] == 'section_start' ) {
				$id = $field['id'];
				unset( $field['id'] );
				unset( $field['mode'] );
				$this->start_controls_section( $id, $field );
			}
			elseif ( isset( $field['mode'] ) && $field['mode'] == 'section_end' ) {
				$this->end_controls_section();
			}
			elseif ( isset( $field['mode'] ) && $field['mode'] == 'tabs_start' ) {
				$id = $field['id'];
				unset( $field['id'] );
				unset( $field['mode'] );
				$this->start_controls_tabs( $id );
			}
			elseif ( isset( $field['mode'] ) && $field['mode'] == 'tabs_end' ) {
				$this->end_controls_tabs();
			}
			elseif ( isset( $field['mode'] ) && $field['mode'] == 'tab_start' ) {
				$id = $field['id'];
				unset( $field['id'] );
				unset( $field['mode'] );
				$this->start_controls_tab( $id, $field );
			}
			elseif ( isset( $field['mode'] ) && $field['mode'] == 'tab_end' ) {
				$this->end_controls_tab();
			}
			elseif ( isset( $field['mode'] ) && $field['mode'] == 'group' ) {
				$type = $field['type'];
				$field['name'] = $field['id'];
				unset( $field['mode'] );
				unset( $field['type'] );
				unset( $field['id'] );
				$this->add_group_control( $type, $field );
			}
			elseif ( isset( $field['mode'] ) && $field['mode'] == 'responsive' ) {
				$id = $field['id'];
				unset( $field['id'] );
				unset( $field['mode'] );
				$this->add_responsive_control( $id, $field );
			}
			else {
				$id = $field['id'];
				unset( $field['id'] );
				$this->add_control( $id, $field );
			}
		}
	}

	public function wpcsu_fields() {
		$fields = array(
			array(
				'mode'    => 'section_start',
				'id'      => 'sec_general',
				'label'   => __( 'Layout', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'layout',
				'label'   => __( 'Layout', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'carousel' => __( 'Carousel', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'grid' => __( 'Grid', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'carousel',
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'theme',
				'label'   => __( 'Theme', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'theme_1' => __( 'Theme 1', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'theme_2' => __( 'Theme 2', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'theme_3' => __( 'Theme 3', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'theme_1',
				'separator' => 'after'
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'h_title_show',
				'label'     => __( 'Display Header', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'no',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'header_title',
				'label'     => __( 'Title', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'h_title_show'          => 'yes',
				],
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'header_position',
				'label'   => __( 'Position', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'middle' => __( 'Middle', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'left' => __( 'Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'right' => __( 'Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'middle',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'h_title_show'          => 'yes',
				],
				'separator' => 'after'
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_title',
				'label'     => __( 'Display Product Title', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'yes',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'id'      => 'sec_query',
				'label'   => __( 'Query', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'products_type',
				'label'   => __( 'Product Type', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'latest' 		=> __( 'Latest Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'older' 		=> __( 'Older Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'featured' 		=> __( 'Featured Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'latest',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'total_products',
				'label'     => __( 'Total Products to Display', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 12,
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'id'      => 'sec_elements',
				'label'   => __( 'Elements', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_sale_ribbon',
				'label'     => __( 'Display "Sale" Badge', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'no',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'sale_ribbon_text',
				'label'     => __( 'Sale Ribbon Text', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'Sale!',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'display_sale_ribbon'          => 'yes',
				],
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'sale_ribbon_position',
				'label'   => __( 'Sale Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'top_left' 		=> __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'top_right' 	=> __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_left' 	=> __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_right' 	=> __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'top_left',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'display_sale_ribbon'          => 'yes',
				],
				'separator' => 'after'
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_featured_ribbon',
				'label'     => __( 'Display "Featured" Badge', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'no',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'feature_ribbon_text',
				'label'     => __( 'Featured Ribbon Text', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'Featured!',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'display_featured_ribbon'          => 'yes',
				],
				'separator' => 'after'
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'featured_ribbon_position',
				'label'   => __( 'Featured Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'top_left' 		=> __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'top_right' 	=> __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_left' 	=> __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_right' 	=> __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'top_right',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'feature_ribbon_text'          => 'yes',
				],
				'separator' => 'after'
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_sold_out_ribbon',
				'label'     => __( 'Display "Sold Out" Badge', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'no',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'sold_out_ribbon_text',
				'label'     => __( 'Sold Out Ribbon Text', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'Sold Out!',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'display_sold_out_ribbon'          => 'yes',
				],
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'sold_out_ribbon_position',
				'label'   => __( 'Sold Out Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'top_left' 		=> __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'top_right' 	=> __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_left' 	=> __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_right' 	=> __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'bottom_left',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'display_sold_out_ribbon'          => 'yes',
				],
				'separator' => 'after'
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_discount_ribbon',
				'label'     => __( 'Display "Discount" Badge', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'no',
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'discount_ribbon_position',
				'label'   => __( 'Discount Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'top_left' 		=> __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'top_right' 	=> __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_left' 	=> __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_right' 	=> __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'bottom_right',
				'classes' => 'tpg-padding-left',
				'condition'    => [
					'display_discount_ribbon'          => 'yes',
				],
				'separator' => 'after'
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_price',
				'label'     => __( 'Display Product Price', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_ratings',
				'label'     => __( 'Display Product Ratings', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_cart',
				'label'     => __( 'Display "Add to Cart" Button', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'yes',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'id'      => 'sec_carousel',
				'label'   => __( 'Carousel', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'condition'    => [
					'layout'          => 'carousel',
				],
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'A_play',
				'label'     => __( 'Auto Play', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'repeat_product',
				'label'     => __( 'Repeat Product', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'stop_hover',
				'label'     => __( 'Stop on Hover', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'no',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'c_desktop',
				'label'     => __( 'Products Columns', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 3,
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'c_desktop_small',
				'label'     => __( 'Laptop Columns', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 2,
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'c_tablet',
				'label'     => __( 'Tablet Columns', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 2,
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'c_mobile',
				'label'     => __( 'Mobile Columns', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 1,
				'separator' => 'after'
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'slide_speed',
				'label'     => __( 'Slide Speed', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 2000,
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'slide_time',
				'label'     => __( 'Slide Timeout', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 2000,
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'nav_show',
				'label'     => __( 'Navigation Show', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'yes',
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'nav_position',
				'classes' => 'tpg-padding-left',
				'label'   => __( 'Position', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'top-left' 		=> __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'top-right' 	=> __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'middle' 		=> __( 'Middle', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom-left' 	=> __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom-right' 	=> __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'bottom-right',
				'condition'    => [
					'nav_show'          => 'yes',
				],
				'separator' => 'after'
			),
			
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'carousel_pagination',
				'label'     => __( 'Pagination Show', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'no',
			),
			
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'id'      => 'sec_grid',
				'label'   => __( 'Grid', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'condition'    => [
					'layout'          => 'grid',
				],
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'g_column',
				'label'   => __( 'Grid Columns', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'1' 	=> __( 'Column-1', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'2' 	=> __( 'Column-2', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'3' 	=> __( 'Column-3', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'4' 	=> __( 'Column-4', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => '3',
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'g_tablet',
				'label'   => __( 'Select Columns for Tablet', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'1' 	=> __( 'Column-1', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'2' 	=> __( 'Column-2', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'3' 	=> __( 'Column-3', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'4' 	=> __( 'Column-4', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => '2',
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'g_mobile',
				'label'   => __( 'Select Columns for Mobile', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'1' 	=> __( 'Column-1', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'2' 	=> __( 'Column-2', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'3' 	=> __( 'Column-3', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'4' 	=> __( 'Column-4', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => '1',
				'separator' => 'after'
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'grid_pagination',
				'label'     => __( 'Display Pagination', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'no',
			),
			
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'id'      => 'sec_image',
				'label'   => __( 'Image', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'img_crop',
				'label'     => __( 'Image Resize & Crop', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'crop_image_width',
				'label'     => __( 'Cropping Width', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 350,
				'condition'    => [
					'img_crop'          => 'yes',
				],
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'crop_image_height',
				'label'     => __( 'Cropping Height', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 250,
				'condition'    => [
					'img_crop'          => 'yes',
				],
				'separator' => 'after'
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'tab'       => Controls_Manager::TAB_STYLE,
				'id'      => 'header_title_tab',
				'label'   => __( 'Header Title', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'      	=> Controls_Manager::TEXT,
				'id'        	=> 'header_font_size',
				'label'     	=> __( 'Font Size', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'description' 	=> 'px',
				'default'   	=> 24,
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'header_font_color',
				'label'     => __( 'Font Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#303030',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'tab'       => Controls_Manager::TAB_STYLE,
				'id'      => 'product_title_tab',
				'label'   => __( 'Product Title', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'      	=> Controls_Manager::TEXT,
				'id'        	=> 'title_font_size',
				'label'     	=> __( 'Font Size', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'description' 	=> 'px',
				'default'   	=> 15,
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'title_font_color',
				'label'     => __( 'Font Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#363940',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'title_hover_font_color',
				'label'     => __( 'Hover Font Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'tab'       => Controls_Manager::TAB_STYLE,
				'id'      => 'price_tab',
				'label'   => __( 'Product Price', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'      	=> Controls_Manager::TEXT,
				'id'        	=> 'price_font_size',
				'label'     	=> __( 'Font Size', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'description' 	=> 'px',
				'default'   	=> 16,
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'price_font_color',
				'label'     => __( 'Font Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'tab'       => Controls_Manager::TAB_STYLE,
				'id'      => 'rating_tab',
				'label'   => __( 'Product Rating', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'      	=> Controls_Manager::TEXT,
				'id'        	=> 'ratings_size',
				'label'     	=> __( 'Size', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'description' 	=> 'px',
				'default'   	=> 16,
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'ratings_color',
				'label'     => __( 'Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#FEB507',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'tab'       => Controls_Manager::TAB_STYLE,
				'id'      => 'cart_tab',
				'label'   => __( 'Add to Cart', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'cart_font_color',
				'label'     => __( 'Font Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ffffff',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'cart_bg_color',
				'label'     => __( 'Background Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'cart_button_hover_color',
				'label'     => __( 'Background Hover Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#9A9A9A',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'cart_button_hover_font_color',
				'label'     => __( 'Hover Font Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ffffff',
			),
			array(
				'mode' => 'section_end',
			),
			
			array(
				'mode'    => 'section_start',
				'tab'     => Controls_Manager::TAB_STYLE,
				'id'      => 'ribbon_tab',
				'label'   => __( 'Badge', 'woocommerce-product-carousel-slider-and-ultimate' ),
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'ribbon_bg_color',
				'label'     => __( 'Background Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'tab'     => Controls_Manager::TAB_STYLE,
				'id'      => 'carousel_navigation',
				'label'   => __( 'Navigation', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'condition' => array( 
					'layout'   => 'carousel',
					'nav_show' => 'yes'
				)
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'nav_arrow_color',
				'label'     => __( 'Arrow Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#333',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'nav_back_color',
				'label'     => __( 'Background Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#fff',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'nav_border_color',
				'label'     => __( 'Border Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#e4e4ed',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'nav_arrow_hover_color',
				'label'     => __( 'Arrow Hover Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#fff',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'nav_back_hover_color',
				'label'     => __( 'Hover Background Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'nav_border_hover',
				'label'     => __( 'Hover Border Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'tab'     => Controls_Manager::TAB_STYLE,
				'id'      => 'carousel_dots',
				'label'   => __( 'Carousel Dots Pagination', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'condition' => array( 
					'layout'   				=> 'carousel',
					'carousel_pagination' 	=> 'yes'
				)
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'dots_color',
				'label'     => __( 'Dots Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#333',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'dots_active_color',
				'label'     => __( 'Dots Active Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#fff',
			),
			array(
				'mode' => 'section_end',
			),
			array(
				'mode'    => 'section_start',
				'tab'     => Controls_Manager::TAB_STYLE,
				'id'      => 'grid_pagination_tab',
				'label'   => __( 'Grid Pagination', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'condition'    => [
					'layout'				=> 'grid',
					'grid_pagination'       => 'yes',
				],
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_color',
				'label'     => __( 'Text Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#333',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_border_color',
				'label'     => __( 'Border Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#e4e4e4',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_back_color',
				'label'     => __( 'Background Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#fff',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_hover_color',
				'label'     => __( 'Hover Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#fff',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_hover_border_color',
				'label'     => __( 'Hover Border Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_hover_back_color',
				'label'     => __( 'Hover Background Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_active_color',
				'label'     => __( 'Active Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#fff',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_active_border_color',
				'label'     => __( 'Active Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'pagi_active_back_color',
				'label'     => __( 'Active Background Color', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => '#ff5500',
			),
			array(
				'mode' => 'section_end',
			),
		);
		return $fields;
	}

	public function get_name() {
		return 'woocommerce_ultimate';
	}

	public function get_title() {
		return esc_html__( 'WooCommerce Ultimate', 'woocommerce-product-carousel-slider-and-ultimate' );
	}

	public function get_icon() {
		return 'eicon-carousel';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'woocommerce', 'product', 'woo', 'ultimate' ];
	}

	protected function render() {
		$settings = $this->get_settings();

		$atts = array(
			'layout'                => $settings['layout'] ? $settings['layout'] : 'carousel',
			'theme'                 => $settings['theme'] ? $settings['theme'] : 'theme_1',
			'total_products'        		=> $settings['total_products'] ? $settings['total_products'] : 12,
			'h_title_show'                 	=> $settings['h_title_show'] ? $settings['h_title_show'] : 'no',
			'header_title'                 	=> $settings['header_title'] ? $settings['header_title'] : '',
			'header_position'               => $settings['header_position'] ? $settings['header_position'] : 'middle',
			'display_title'                 => $settings['display_title'] ? $settings['display_title'] : 'no',
			'products_type'                 => $settings['products_type'] ? $settings['products_type'] : 'latest',
			'display_sale_ribbon'           => $settings['display_sale_ribbon'] ? $settings['display_sale_ribbon'] : 'no',
			'sale_ribbon_text'              => $settings['sale_ribbon_text'] ? $settings['sale_ribbon_text'] : 'Sale!',
			'sale_ribbon_position'          => $settings['sale_ribbon_position'] ? $settings['sale_ribbon_position'] : 'top_left',
			'display_featured_ribbon'       => $settings['display_featured_ribbon'] ? $settings['display_featured_ribbon'] : 'no',
			'feature_ribbon_text'           => $settings['feature_ribbon_text'] ? $settings['feature_ribbon_text'] : 'Featured!',
			'featured_ribbon_position'      => $settings['featured_ribbon_position'] ? $settings['featured_ribbon_position'] : 'top_right',
			'display_sold_out_ribbon'       => $settings['display_sold_out_ribbon'] ? $settings['display_sold_out_ribbon'] : 'no',
			'sold_out_ribbon_text'          => $settings['sold_out_ribbon_text'] ? $settings['sold_out_ribbon_text'] : 'Sold Out!',
			'sold_out_ribbon_position'      => $settings['sold_out_ribbon_position'] ? $settings['sold_out_ribbon_position'] : 'bottom_left',
			'display_discount_ribbon'       => $settings['display_discount_ribbon'] ? $settings['display_discount_ribbon'] : 'no',
			'discount_ribbon_position'      => $settings['discount_ribbon_position'] ? $settings['discount_ribbon_position'] : 'bottom_right',
			'display_price'                 => $settings['display_price'] ? $settings['display_price'] : 'no',
			'display_ratings'               => $settings['display_ratings'] ? $settings['display_ratings'] : 'no',
			'display_cart'                  => $settings['display_cart'] ? $settings['display_cart'] : 'no',
			'img_crop'                 		=> $settings['img_crop'] ? $settings['img_crop'] : 'no',
			'crop_image_width'              => $settings['crop_image_width'] ? $settings['crop_image_width'] : '350',
			'crop_image_height'             => $settings['crop_image_height'] ? $settings['crop_image_height'] : '250',
			'auto_play'                 	=> $settings['A_play'] ? $settings['A_play'] : 'no',
			'repeat_product'                => $settings['repeat_product'] ? $settings['repeat_product'] : 'no',
			'stop_hover'                 	=> $settings['stop_hover'] ? false : true,
			'c_desktop'                 	=> $settings['c_desktop'] ? $settings['c_desktop'] : '3',
			'c_desktop_small'               => $settings['c_desktop_small'] ? $settings['c_desktop_small'] : '3',
			'c_tablet'                 		=> $settings['c_tablet'] ? $settings['c_tablet'] : '2',
			'c_mobile'                 		=> $settings['c_mobile'] ? $settings['c_mobile'] : '1',
			'slide_speed'                 	=> $settings['slide_speed'] ? $settings['slide_speed'] : '2000',
			'slide_time'                 	=> $settings['slide_time'] ? $settings['slide_time'] : '2000',
			'nav_show'                 		=> $settings['nav_show'] ? $settings['nav_show'] : 'no',
			'nav_position'                 	=> $settings['nav_position'] ? $settings['nav_position'] : 'bottom-right',
			'nav_arrow_color'               => $settings['nav_arrow_color'] ? $settings['nav_arrow_color'] : '#333',
			'nav_back_color'                => $settings['nav_back_color'] ? $settings['nav_back_color'] : '#fff',
			'nav_border_color'              => $settings['nav_border_color'] ? $settings['nav_border_color'] : '#e4e4ed',
			'nav_arrow_hover_color'         => $settings['nav_arrow_hover_color'] ? $settings['nav_arrow_hover_color'] : '#fff',
			'nav_back_hover_color'          => $settings['nav_back_hover_color'] ? $settings['nav_back_hover_color'] : '#ff5500',
			'nav_border_hover'              => $settings['nav_border_hover'] ? $settings['nav_border_hover'] : '#ff5500',
			'carousel_pagination'           => $settings['carousel_pagination'] ? $settings['carousel_pagination'] : 'no',
			'dots_color'                 	=> $settings['dots_color'] ? $settings['dots_color'] : '#333',
			'dots_active_color'             => $settings['dots_active_color'] ? $settings['dots_active_color'] : '#fff',
			'g_column'             			=> $settings['g_column'] ? $settings['g_column'] : '3',
			'g_tablet'             			=> $settings['g_tablet'] ? $settings['g_tablet'] : '2',
			'g_mobile'             			=> $settings['g_mobile'] ? $settings['g_mobile'] : '1',
			'grid_pagination'             	=> $settings['grid_pagination'] ? $settings['grid_pagination'] : 'no',
			'pagi_color'             		=> $settings['pagi_color'] ? $settings['pagi_color'] : '#333',
			'pagi_border_color'             => $settings['pagi_border_color'] ? $settings['pagi_border_color'] : '#e4e4e4',
			'pagi_back_color'             	=> $settings['pagi_back_color'] ? $settings['pagi_back_color'] : '#fff',
			'pagi_hover_color'             	=> $settings['pagi_hover_color'] ? $settings['pagi_hover_color'] : '#fff',
			'pagi_hover_border_color'       => $settings['pagi_hover_border_color'] ? $settings['pagi_hover_border_color'] : '#ff5500',
			'pagi_hover_back_color'         => $settings['pagi_hover_back_color'] ? $settings['pagi_hover_back_color'] : '#ff5500',
			'pagi_active_border_color'      => $settings['pagi_active_border_color'] ? $settings['pagi_active_border_color'] : '#ff5500',
			'pagi_active_back_color'        => $settings['pagi_active_back_color'] ? $settings['pagi_active_back_color'] : '#ff5500',

			'header_font_size'        		=> $settings['header_font_size'] ? $settings['header_font_size'] : '24',
			'header_font_color'        		=> $settings['header_font_color'] ? $settings['header_font_color'] : '#303030',
			'title_font_size'        		=> $settings['title_font_size'] ? $settings['title_font_size'] : '15',
			'title_font_color'        		=> $settings['title_font_color'] ? $settings['title_font_color'] : '#363940',
			'title_hover_font_color'        => $settings['title_hover_font_color'] ? $settings['title_hover_font_color'] : '#ff5500',
			'price_font_size'        		=> $settings['price_font_size'] ? $settings['price_font_size'] : '16',
			'price_font_color'        		=> $settings['price_font_color'] ? $settings['price_font_color'] : '#ff5500',
			'ratings_size'        			=> $settings['ratings_size'] ? $settings['ratings_size'] : '16',
			'ratings_color'        			=> $settings['ratings_color'] ? $settings['ratings_color'] : '#FEB507',
			'cart_font_color'        		=> $settings['cart_font_color'] ? $settings['cart_font_color'] : '#ffffff',
			'cart_bg_color'        			=> $settings['cart_bg_color'] ? $settings['cart_bg_color'] : '#ff5500',
			'cart_button_hover_color'       => $settings['cart_button_hover_color'] ? $settings['cart_button_hover_color'] : '#9A9A9A',
			'cart_button_hover_font_color'  => $settings['cart_button_hover_font_color'] ? $settings['cart_button_hover_font_color'] : '#ffffff',
			'action_icon_font_color'        => $settings['action_icon_font_color'] ? $settings['action_icon_font_color'] : '#363940',
			'action_icon_hover_color'       => $settings['action_icon_hover_color'] ? $settings['action_icon_hover_color'] : '#ff5500',
			'ribbon_bg_color'        		=> $settings['ribbon_bg_color'] ? $settings['ribbon_bg_color'] : '#ff5500',
			'quick_view_button_color'       => $settings['quick_view_button_color'] ? $settings['quick_view_button_color'] : '#ffffff',
			'quick_view_button_back_color'        => $settings['quick_view_button_back_color'] ? $settings['quick_view_button_back_color'] : '#363940',
			'quick_view_button_hover_color'        => $settings['quick_view_button_hover_color'] ? $settings['quick_view_button_hover_color'] : '#ffffff',
			'quick_view_button_hover_back_color'        => $settings['quick_view_button_hover_back_color'] ? $settings['quick_view_button_hover_back_color'] : '#000000',

		);
		$this->run_shortcode( 'wcpcsu', $atts );
		
	}

	public function display_image( $atts ) {
		$layout  = ! empty( $atts['layout'] ) ? $atts['layout'] : 'carousel';
		$theme   = ! empty( $atts['theme'] ) ? $atts['theme'] . '.png' : 'theme_1.png';
		$img_src = WCPCSU_URL . 'includes/elementor/assets/img/' . $layout . '/' . $theme;
		ob_start();
		?>
		<div>
			<img src="<?php echo esc_attr( $img_src ); ?>" alt="">
		</div>
		<?php
		echo ob_get_clean();
	}

	public function run_shortcode( $shortcode, $atts = [] ) {
		$html = '';

		foreach ( $atts as $key => $value ) {
			$html .= sprintf( ' %s="%s"', $key, esc_html( $value ) );
		}

		$html = sprintf( '[%s%s]', $shortcode, $html );

		echo do_shortcode( $html );
	}
}