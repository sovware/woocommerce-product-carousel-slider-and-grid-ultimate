<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
class Elementor_Hello_World_Widget_1 extends \Elementor\Widget_Base {

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
				'label'   => __( 'General', 'woocommerce-product-carousel-slider-and-ultimate' ),
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
					'theme_1' => __( 'Theme One', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'theme_2' => __( 'Theme Two', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'theme_3' => __( 'Theme Three', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'theme_1',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'total_products',
				'label'     => __( 'Total Products to Display', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 12,
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'h_title_show',
				'label'     => __( 'Display Header', 'directorist' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'total_products',
				'label'     => __( 'Header Title', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 12,
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'header_position',
				'label'   => __( 'Header Position', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'middle' => __( 'Middle', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'left' => __( 'Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'right' => __( 'Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'middle',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_title',
				'label'     => __( 'Display Product Title', 'directorist' ),
				'default'   => 'yes',
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'products_type',
				'label'   => __( 'Product Type', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'latest' 		=> __( 'Latest Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'older' 		=> __( 'Older Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'top_rated' 	=> __( 'Top Rated Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'random' 		=> __( 'Random Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'onsale' 		=> __( 'On Sale Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bestselling' 	=> __( 'Best Selling Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'featured' 		=> __( 'Featured Products', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'latest',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_sale_ribbon',
				'label'     => __( 'Display "Sale" Badge', 'directorist' ),
				'default'   => 'no',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'sale_ribbon_text',
				'label'     => __( 'Sale Ribbon Text', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'Sale!',
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
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_featured_ribbon',
				'label'     => __( 'Display "Featured" Badge', 'directorist' ),
				'default'   => 'no',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'feature_ribbon_text',
				'label'     => __( 'Featured Ribbon Text', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'Featured!',
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
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_sold_out_ribbon',
				'label'     => __( 'Display "Sold Out" Badge', 'directorist' ),
				'default'   => 'no',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'sold_out_ribbon_text',
				'label'     => __( 'Sold Out Ribbon Text', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 'Sold Out!',
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
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_discount_ribbon',
				'label'     => __( 'Display "Discount" Badge', 'directorist' ),
				'default'   => 'no',
			),
			array(
				'type'    => Controls_Manager::SELECT,
				'id'      => 'discount_ribbon_position',
				'label'   => __( 'Sold Out Ribbon Position', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'options' => array(
					'top_left' 		=> __( 'Top Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'top_right' 	=> __( 'Top Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_left' 	=> __( 'Bottom Left', 'woocommerce-product-carousel-slider-and-ultimate' ),
					'bottom_right' 	=> __( 'Bottom Right', 'woocommerce-product-carousel-slider-and-ultimate' ),
				),
				'default' => 'bottom_right',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_price',
				'label'     => __( 'Display Product Price', 'directorist' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_ratings',
				'label'     => __( 'Display Product Ratings', 'directorist' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'display_cart',
				'label'     => __( 'Display "Add to Cart" Button', 'directorist' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'exclude_stock_out',
				'label'     => __( 'Exclude Stock-out Products from the query', 'directorist' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'img_crop',
				'label'     => __( 'Image Resize & Crop', 'directorist' ),
				'default'   => 'yes',
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'crop_image_width',
				'label'     => __( 'Image Cropping Width', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 350,
			),
			array(
				'type'      => Controls_Manager::TEXT,
				'id'        => 'crop_image_height',
				'label'     => __( 'Image Cropping Height', 'woocommerce-product-carousel-slider-and-ultimate' ),
				'default'   => 250,
			),
			array(
				'type'      => Controls_Manager::SWITCHER,
				'id'        => 'img_hover_effect',
				'label'     => __( 'Image Hover Effect', 'directorist' ),
				'default'   => 'yes',
			),
			array(
				'mode' => 'section_end',
			),
		);
		return $fields;
	}

	public function get_name() {
		return 'woocommerce_ultimate_pro';
	}

	public function get_title() {
		return esc_html__( 'WooCommerce Ultimate Pro', 'woocommerce-product-carousel-slider-and-ultimate' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
		$settings = $this->get_settings();

		$atts = array(
			'layout'                => $settings['layout'] ? $settings['layout'] : 'carousel',
			'theme'                => $settings['theme'] ? $settings['theme'] : 'theme_1',
		);

		if( is_admin() ) {
			$this->display_image( $atts );
		} else {
			$this->run_shortcode( 'wcpcsup', $atts );
		}
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