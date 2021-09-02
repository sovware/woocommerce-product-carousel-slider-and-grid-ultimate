<?php


defined( 'ABSPATH' ) || exit;

! defined( 'WOOSW_URI' ) && define( 'WOOSW_URI', plugin_dir_url( __FILE__ ) );


if ( ! function_exists( 'woosw_init' ) ) {

	add_action( 'plugins_loaded', 'woosw_init', 11 );

	function woosw_init() {

		if ( ! class_exists( 'WPcleverWoosw' ) ) {

			class WPcleverWoosw {

				protected static $woosw_added = array();
				protected static $woosw_summary_default = array();

				function __construct() {
					// add query var
					add_filter( 'query_vars', array( $this, 'query_vars' ), 1 );

					add_action( 'init', array( $this, 'init' ) );

					// frontend scripts
					add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );

					// add
					add_action( 'wp_ajax_wishlist_add', array( $this, 'wishlist_add' ) );
					add_action( 'wp_ajax_nopriv_wishlist_add', array( $this, 'wishlist_add' ) );


					// remove
					add_action( 'wp_ajax_wishlist_remove', array( $this, 'wishlist_remove' ) );
					add_action( 'wp_ajax_nopriv_wishlist_remove', array( $this, 'wishlist_remove' ) );

					// load
					add_action( 'wp_ajax_wishlist_load', array( $this, 'wishlist_load' ) );
					add_action( 'wp_ajax_nopriv_wishlist_load', array( $this, 'wishlist_load' ) );

					// footer
					add_action( 'wp_footer', array( $this, 'wp_footer' ) );
				}

				function query_vars( $vars ) {
					array_push( $vars, 'woosw_id' );

					return $vars;
				}

				function init() {


					// shortcode
					add_shortcode( 'woosw', array( $this, 'shortcode' ) );

					add_shortcode( 'woosw_list', array( $this, 'list_shortcode' ) );

					// add button for archive
					$woosw_button_position_archive = apply_filters( 'woosw_button_position_archive', get_option( 'woosw_button_position_archive', 'after_add_to_cart' ) );

					add_action( 'wishlist_button', array( $this, 'add_button' ) );



					// add button for single
					$woosw_button_position_single = apply_filters( 'woosw_button_position_single', get_option( 'woosw_button_position_single', '31' ) );
					if ( $woosw_button_position_single != '0' ) {
						add_action( 'woocommerce_single_product_summary', array(
							$this,
							'add_button'
						), $woosw_button_position_single );
					}

					// added products
					$woosw_key = self::get_key();
					if ( get_option( 'woosw_list_' . $woosw_key ) ) {
						self::$woosw_added = get_option( 'woosw_list_' . $woosw_key );
					}
				}

				function wishlist_add() {
					$return = array( 'status' => 0 );
					if ( ( $product_id = absint( $_POST['product_id'] ) ) > 0 ) {
						$woosw_key = self::get_key();
						if ( $woosw_key == '#' ) {
							$return['status'] = 0;
							$return['notice'] = esc_html__( 'Please log in to use Wishlist!', 'woosw' );
							$return['image']  = WOOSW_URI . 'assets/images/heart_error.svg';
						} else {
							$woosw_products = array();
							if ( get_option( 'woosw_list_' . $woosw_key ) ) {
								$woosw_products = get_option( 'woosw_list_' . $woosw_key );
							}
							if ( ! array_key_exists( $product_id, $woosw_products ) ) {
								// insert if not exists
								$woosw_products = array( $product_id => time() ) + $woosw_products;
								update_option( 'woosw_list_' . $woosw_key, $woosw_products );
								self::update_meta( $product_id, 'add' );
								$return['notice'] = esc_html__( 'Added to Wishlist!', 'woosw' );
								$return['image']  = WOOSW_URI . 'assets/images/heart_add.svg';
							} else {
								$return['notice'] = esc_html__( 'Already in your Wishlist!', 'woosw' );
								$return['image']  = WOOSW_URI . 'assets/images/heart_duplicate.svg';
							}
							$return['status'] = 1;
							$return['count']  = count( $woosw_products );
							if ( get_option( 'woosw_popup_content', 'list' ) == 'list' ) {
								$return['value'] = self::get_items( $woosw_key );
							}
						}
					} else {
						$return['status'] = 0;
						$return['notice'] = esc_html__( 'Have an error, please try again!', 'woosw' );
						$return['image']  = WOOSW_URI . 'assets/images/heart_error.svg';
					}
					echo json_encode( $return );
					die();
				}


				function wishlist_remove() {
					$return = array( 'status' => 0 );
					if ( ( $product_id = absint( $_POST['product_id'] ) ) > 0 ) {
						$woosw_key = self::get_key();
						if ( $woosw_key == '#' ) {
							$return['notice'] = esc_html__( 'Please log in to use Wishlist!', 'woosw' );
						} else {
							$woosw_products = array();
							if ( get_option( 'woosw_list_' . $woosw_key ) ) {
								$woosw_products = get_option( 'woosw_list_' . $woosw_key );
							}
							if ( array_key_exists( $product_id, $woosw_products ) ) {
								unset( $woosw_products[ $product_id ] );
								update_option( 'woosw_list_' . $woosw_key, $woosw_products );
								self::update_meta( $product_id, 'remove' );
								$return['count']  = count( $woosw_products );
								$return['status'] = 1;
								if ( count( $woosw_products ) > 0 ) {
									$return['notice'] = esc_html__( 'Removed from Wishlist!', 'woosw' );
								} else {
									$return['notice'] = esc_html__( 'There are no products on your Wishlist!', 'woosw' );
								}
							} else {
								$return['notice'] = esc_html__( 'The product does not exist on your Wishlist!', 'woosw' );
							}
						}
					} else {
						$return['notice'] = esc_html__( 'Have an error, please try again!', 'woosw' );
					}
					echo json_encode( $return );
					die();
				}

				function wishlist_load() {
					$return    = array( 'status' => 0 );
					$woosw_key = self::get_key();
					if ( $woosw_key == '#' ) {
						$return['notice'] = esc_html__( 'Please log in to use Wishlist!', 'woosw' );
					} else {
						$woosw_products = array();
						if ( get_option( 'woosw_list_' . $woosw_key ) ) {
							$woosw_products = get_option( 'woosw_list_' . $woosw_key );
						}
						$return['status'] = 1;
						$return['count']  = count( $woosw_products );
						$return['value']  = self::get_items( $woosw_key );
					}
					echo json_encode( $return );
					die();
				}

				function add_button( $id = null ) {
					if ( ! $id ) {
						global $product;
						$id = $product->get_id();
					}
					if ( $id ) {
						$woosw_class = 'woosw-btn woosw-btn-' . esc_attr( $id );
						$woosw_text  = apply_filters( 'woosw_button_text', 'Siyam' );
						if ( array_key_exists( $id, self::$woosw_added ) ) {
							$woosw_class .= ' woosw-added';
							$woosw_text  = apply_filters( 'woosw_button_text_added', 'Hello' );
						}
						if ( get_option( 'woosw_button_class' ) != '' ) {
							$woosw_class .= ' ' . esc_attr( get_option( 'woosw_button_class' ) );
						}

							echo '<a href="#" class="' . esc_attr( $woosw_class ) . '" data-id="' . esc_attr( $id ) . '">
							<img class="wpcu-svg" src=' . WCPCSU_URL . 'assets/icons/eye.svg /></a>';

					}
				}

				function shortcode( $atts ) {
					$atts = shortcode_atts( array(
						'id'   => null,
						'type' => get_option( '_woosw_button_type', 'button' )
					), $atts, 'woosw' );
					if ( ! $atts['id'] ) {
						global $product;
						$atts['id'] = $product->get_id();
					}
					if ( $atts['id'] ) {
						$woosw_class = 'woosw-btn woosw-btn-' . esc_attr( $atts['id'] );
						$woosw_text  = apply_filters( 'woosw_button_text', get_option( 'woosw_button_text', esc_html__( 'Add to Wishlist', 'woosw' ) ) );
						if ( array_key_exists( $atts['id'], self::$woosw_added ) ) {
							$woosw_class .= ' woosw-added';
							$woosw_text  = apply_filters( 'woosw_button_text_added', get_option( 'woosw_button_text_added', esc_html__( 'Browse Wishlist', 'woosw' ) ) );
						}
						if ( get_option( 'woosw_button_class' ) != '' ) {
							$woosw_class .= ' ' . esc_attr( get_option( 'woosw_button_class' ) );
						}
						if ( $atts['type'] == 'link' ) {
							return '<a href="#" class="' . esc_attr( $woosw_class ) . '" data-id="' . esc_attr( $atts['id'] ) . '">' . $woosw_text . '</a>';
						} else {
							return '<button class="' . esc_attr( $woosw_class ) . '" data-id="' . esc_attr( $atts['id'] ) . '">' . $woosw_text . '</button>';
						}
					}
				}

				function list_shortcode() {
					if ( get_query_var( 'woosw_id' ) ) {
						$key = get_query_var( 'woosw_id' );
					} else {
						$key = self::get_key();
					}
					$return_html = '<div class="woosw-list">';
					$return_html .= self::get_items( $key );
					$return_html .= '</div>';

					return $return_html;
				}

				function wp_enqueue_scripts() {
					// perfect srollbar
					wp_enqueue_style( 'perfect-scrollbar', WOOSW_URI . 'assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css' );
					wp_enqueue_style( 'perfect-scrollbar-wpc', WOOSW_URI . 'assets/libs/perfect-scrollbar/css/custom-theme.css' );
					wp_enqueue_script( 'perfect-scrollbar', WOOSW_URI . 'assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js', array( 'jquery' ), null, true );

					// feather icons
					wp_enqueue_style( 'woosw-feather', WOOSW_URI . 'assets/libs/feather/feather.css' );

					// main style
					wp_enqueue_style( 'woosw-frontend', WOOSW_URI . 'assets/css/frontend.css' );
					$woosw_color_default = apply_filters( 'woosw_color_default', '#5fbd74' );
					$woosw_color         = apply_filters( 'woosw_color', get_option( 'woosw_color', $woosw_color_default ) );
					$woosw_custom_css    = ".woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-notice { background-color: {$woosw_color}; } ";
					$woosw_custom_css    .= ".woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-page a:hover, .woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-continue:hover { color: {$woosw_color}; } ";
					wp_add_inline_style( 'woosw-frontend', $woosw_custom_css );

					// main js
					wp_enqueue_script( 'woosw-frontend', WOOSW_URI . 'assets/js/frontend.js', array( 'jquery' ), null, true );
					wp_localize_script( 'woosw-frontend', 'woosw_vars', array(
							'ajax_url'          => admin_url( 'admin-ajax.php' ),
							'menu_action'       => get_option( 'woosw_menu_action', 'open_page' ),
							'popup_content'     => get_option( 'woosw_popup_content', 'list' ),
							'button_text'       => apply_filters( 'woosw_button_text', get_option( 'woosw_button_text', esc_html__( 'Add to Wishlist', 'woosw' ) ) ),
							'button_text_added' => '<img class="wpcu-svg src=' . WCPCSU_URL . 'assets/icons/eye.svg />'
						)
					);
				}


				function get_items( $key ) {
					$items_html     = '';
					$woosw_products = get_option( 'woosw_list_' . $key );
					if ( is_array( $woosw_products ) && ( count( $woosw_products ) > 0 ) ) {
						$items_html .= '<table class="woosw-content-items">';
						foreach ( $woosw_products as $product_id => $product_time ) {
							$product = wc_get_product( $product_id );
							if ( ! $product ) {
								continue;
							}
							$items_html .= '<tr class="woosw-content-item woosw-content-item-' . $product_id . '" data-id="' . $product_id . '">';
							if ( self::can_edit( $key ) ) {
								$items_html .= '<td class="woosw-content-item--remove"><span></span></td>';
							}
							$items_html .= '<td class="woosw-content-item--image">' . $product->get_image() . '</td>';
							$items_html .= '<td>';
							$items_html .= '<div class="woosw-content-item--title"><a href="' . $product->get_permalink() . '">' . $product->get_name() . '</a></div>';
							$items_html .= '<div class="woosw-content-item--price">' . $product->get_price_html() . '</div>';
							$items_html .= '<div class="woosw-content-item--time">' . date_i18n( get_option( 'date_format' ), $product_time ) . '</div>';
							$items_html .= '</td>';
							$items_html .= '<td>';
							$items_html .= '<div class="woosw-content-item--stock">' . ( $product->is_in_stock() ? esc_html__( 'In stock', 'woosw' ) : esc_html__( 'Out of stock', 'woosw' ) ) . '</div>';
							$items_html .= '<div class="woosw-content-item--add">' . do_shortcode( '[add_to_cart id="' . $product_id . '"]' ) . '</div>';
							$items_html .= '</td>';
							$items_html .= '</tr>';
						}
						$items_html .= '</table>';
					} else {
						$items_html = '<div class="woosw-content-mid-notice">' . esc_html__( 'There are no products on Wishlist!', 'woosw' ) . '</div>';
					}

					return $items_html;
				}

				function update_meta( $product_id, $action = 'add' ) {
					$meta_count = 'woosw_count';
					$meta_time  = ( $action == 'add' ? 'woosw_add' : 'woosw_remove' );
					$count      = get_post_meta( $product_id, $meta_count, true );
					$new_count  = 0;
					if ( $action == 'add' ) {
						if ( $count ) {
							$new_count = absint( $count ) + 1;
						} else {
							$new_count = 1;
						}
					} elseif ( $action == 'remove' ) {
						if ( $count && ( absint( $count ) > 1 ) ) {
							$new_count = absint( $count ) - 1;
						} else {
							$new_count = 0;
						}
					}
					update_post_meta( $product_id, $meta_count, $new_count );
					update_post_meta( $product_id, $meta_time, time() );
				}

                function wp_footer() {
                    ?>
                    <div id="woosw-area" class="woosw-area">
                        <div class="woosw-inner">
                            <div class="woosw-content">
                                <div class="woosw-content-top">
                                    <?php esc_html_e( 'Wishlist', 'woosw' ); ?> <span
                                            class="woosw-count"><?php echo count( self::$woosw_added ); ?></span>
                                    <span class="woosw-close"></span>
                                </div>
                                <div class="woosw-content-mid"></div>
                                <div class="woosw-content-bot">
                                    <div class="woosw-content-bot-inner">
                                        <span class="woosw-continue">
									<?php esc_html_e( 'Continue Shopping', 'woosw' ); ?>
								</span>
                                    </div>
                                    <div class="woosw-notice"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                public static function generate_key() {
                    $key         = '';
                    $key_str     = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                    $key_str_len = strlen( $key_str );
                    for ( $i = 0; $i < 6; $i ++ ) {
                        $key .= $key_str[ random_int( 0, $key_str_len - 1 ) ];
                    }

                    return $key;
                }

                public static function exists_key( $key ) {
                    if ( get_option( 'woosw_list_' . $key ) ) {
                        return true;
                    } else {
                        return false;
                    }
                }

				public static function can_edit( $key ) {
					if ( is_user_logged_in() ) {
						if ( get_user_meta( get_current_user_id(), 'woosw_key', true ) == $key ) {
							return true;
						}
					} else {
						if ( isset( $_COOKIE['woosw_key'] ) && ( $_COOKIE['woosw_key'] == $key ) ) {
							return true;
						}
					}

					return false;
				}

				public static function get_page_id() {
					if ( get_option( 'woosw_page_id' ) ) {
						return absint( get_option( 'woosw_page_id' ) );
					} else {
						return false;
					}
				}

				public static function get_key() {
					if ( ! is_user_logged_in() && ( get_option( 'woosw_disable_unauthenticated', 'no' ) == 'yes' ) ) {
						return '#';
					} else {
						if ( is_user_logged_in() ) {
							// for user
							if ( ( $user_id = get_current_user_id() ) > 0 ) {
								if ( get_user_meta( $user_id, 'woosw_key', true ) == '' ) {
									$new_key = self::generate_key();
									while ( self::exists_key( $new_key ) ) {
										$new_key = self::generate_key();
									}

									update_user_meta( $user_id, 'woosw_key', $new_key );

									return $new_key;
								} else {
									return get_user_meta( $user_id, 'woosw_key', true );
								}
							}
						} else {
							// for guest
							if ( isset( $_COOKIE['woosw_key'] ) ) {
								return esc_attr( $_COOKIE['woosw_key'] );
							} else {
								$new_key = self::generate_key();
								while ( self::exists_key( $new_key ) ) {
									$new_key = self::generate_key();
								}
								setcookie( 'woosw_key', $new_key, time() + ( 3600 * 24 * 7 ), COOKIEPATH, COOKIE_DOMAIN );

								return $new_key;
							}
						}
					}
				}

				public static function get_url( $key = null, $full = false ) {
					$url = home_url( '/' );
					if ( ( $page_id = self::get_page_id() ) ) {
						if ( $full ) {
							if ( ! $key ) {
								$key = self::get_key();
							}
							if ( get_option( 'permalink_structure' ) != '' ) {
								$url = trailingslashit( get_permalink( $page_id ) ) . $key;
							} else {
								$url = get_permalink( $page_id ) . '&woosw_id=' . $key;
							}
						} else {
							$url = get_permalink( $page_id );
						}
					}

					return apply_filters( 'woosw_wishlist_url', $url );
				}

				public static function get_count( $key = null ) {
					if ( ! $key ) {
						$key = self::get_key();
					}
					$woosw_products = array();
					if ( get_option( 'woosw_list_' . $key ) ) {
						$woosw_products = get_option( 'woosw_list_' . $key );
					}

					return apply_filters( 'woosw_wishlist_count', count( $woosw_products ) );
				}
			}

			new WPcleverWoosw();
		}
	}
}