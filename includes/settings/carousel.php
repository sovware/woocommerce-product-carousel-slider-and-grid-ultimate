<?php
if ( ! defined( 'ABSPATH' ) ) die( 'Are you cheating??? Accessing this file directly is forbidden.' );
$stop_hover             = ! empty( $stop_hover ) ? $stop_hover : 'false';
$A_play                 = ! empty( $A_play ) ? $A_play : 'yes';
$pagination             = ! empty( $pagination ) ? $pagination : 'yes';
$scrol_direction        = ! empty( $scrol_direction ) ? $scrol_direction : 'left';
$scrool                 = ! empty( $scrool ) ? $scrool : 'false';
$nav_show               = ! empty( $nav_show ) ? $nav_show : 'yes';
$nav_position           = ! empty( $nav_position ) ? $nav_position : 'bottom-right';
$carousel_pagination    = ! empty( $carousel_pagination ) ? $carousel_pagination : 'no';
?>
<!--TAB 2  Carousel setting -->
<div id="lcsp-tab-2" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">

            <!--Auto Play-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Auto Play', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option wcpcu_auto_play cmb2-radio-switch1" name="wcpscu[A_play]"
                                id="lcsp_ap1" value="yes" <?php checked( 'yes', esc_attr( $A_play ), true ); ?>>
                            <label for="lcsp_ap1"><?php esc_html_e('Yes', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option wcpcu_auto_play cmb2-radio-switch2" name="wcpscu[A_play]"
                                id="lcsp_ap2" value="no" <?php checked( 'no', esc_attr( $A_play ), true ); ?>>
                            <label for="lcsp_ap2"><?php esc_html_e('No', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Repeat Product-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu_repeat_product"><?php esc_html_e('Repeat Product', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[repeat_product]"
                                id="wcpscu_repeat_product1" value="yes"
                                <?php checked( 'yes', esc_attr( $repeat_product ), true ); ?>>
                            <label for="wcpscu_repeat_product1"><?php esc_html_e('Yes', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[repeat_product]"
                                id="wcpscu_repeat_product2" value="no"
                                <?php checked( 'no', esc_attr( $repeat_product ), true ); ?>>
                            <label for="wcpscu_repeat_product2"><?php _e('No', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Stop on hover-->
            <div class="cmb-row cmb-type-radio wpcu_auto_play_depend">
                <div class="cmb-th">
                    <label for="lcsp_soh"><?php esc_html_e('Stop on Hover', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[stop_hover]"
                                id="lcsp_soh1" value="true" <?php checked( 'true', esc_attr( $stop_hover ), true ); ?>>
                            <label for="lcsp_soh1">
                                <?php esc_html_e('Yes', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[stop_hover]"
                                id="lcsp_soh2" value="false" <?php checked( 'false', esc_attr( $stop_hover ), true );  ?>>
                            <label for="lcsp_soh2">
                                <?php esc_html_e('No', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Items on desktop-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_li_desktop">
                        <?php esc_html_e('Products Column', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-product-columns">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">
                                    <img class="svg_compile" src="<?php echo WCPCSU_URL .'assets/icons/desktop.svg' ?>" >
                                </div>
                            </div>
                            <input type="text" class="cmb2-text-small" name="wcpscu[c_desktop]" id="lcsp_li_desktop"
                                value="<?php echo ! empty( $c_desktop ) ? intval( esc_attr( $c_desktop ) ) : 4; ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">
                                  <img class="svg_compile" src="<?php echo WCPCSU_URL .'assets/icons/laptop.svg' ?>" >
                                </div>
                            </div>
                            <input type="text" class="cmb2-text-small" name="wcpscu[c_desktop_small]"
                                id="lcsp_li_desktop_small"
                                value="<?php echo ! empty( $c_desktop_small ) ? intval( esc_attr( $c_desktop_small ) ) : 3; ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">
                                    <img class="svg_compile" src="<?php echo WCPCSU_URL .'assets/icons/tab_mobile.svg' ?>" >
                                </div>
                            </div>
                            <input type="text" class="cmb2-text-small" name="wcpscu[c_tablet]" id="lcsp_li_tablet"
                                value="<?php echo ! empty( $c_tablet ) ? intval( esc_attr( $c_tablet ) ) : 2; ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">
                                   <img class="svg_compile" src="<?php echo WCPCSU_URL .'assets/icons/mobile.svg' ?>" >
                                </div>
                            </div>
                            <input type="text" class="cmb2-text-small" name="wcpscu[c_mobile]" id="lcsp_li_mobile"
                                value="<?php echo ! empty( esc_attr( $c_mobile ) ) ? intval( esc_attr( $c_mobile ) ) : 1; ?>">
                        </div>
                    </div>

                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('Set products column(s) in different devices.', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </p>

                </div>
            </div>
            <!--slide speed-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_ss">
                        <?php esc_html_e('Slide Speed', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[slide_speed]" id="wcpscu[slide_speed]"
                        value="<?php echo ! empty( $slide_speed ) ? intval( esc_attr( $slide_speed ) ) : 2000; ?>">
                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('Here 1000 is equal to 1 second. So provide a speed accordingly', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </p>
                </div>
            </div>
            <!--slide Timeout-->
            <div class="cmb-row cmb-type-text-medium wpcu_auto_play_depend">
                <div class="cmb-th">
                    <label for="lcsp_ss">
                        <?php esc_html_e('Slide Timeout', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[slide_time]" id="wcpscu[slide_time]"
                        value="<?php echo ! empty( $slide_time ) ? intval( esc_attr( $slide_time ) ) : 2000; ?>">
                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('Here 1000 is equal to 1 second. So provide a timeout accordingly', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </p>
                </div>
            </div>
            <!--Scrolling-->
           <!--  <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_spp">
                        <?php esc_html_e('Scroll', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[scrool]" id="lcsp_spp1" value="false"
                                <?php checked('false', $scrool, true); ?>>
                            <label for="lcsp_spp1">
                                <?php esc_html_e('Per Item', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                        </li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[scrool]" id="lcsp_spp2" value="true"
                                <?php checked('true', $scrool, true); ?>>
                            <label for="lcsp_spp2">
                                <?php esc_html_e('Per Page', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div> --> <!-- end cmb2-metabox -->

            <!-- Navigation show/hide -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[c10_nav]">
                        <?php esc_html_e('Navigation Show', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list  cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option wcpcu_navigation cmb2-radio-switch1" name="wcpscu[nav_show]"
                                id="wcpscu[c10_nav]1" value="yes" <?php checked( 'yes', esc_attr( $nav_show ), true );  ?>>
                            <label for="wcpscu[c10_nav]1">
                                <?php esc_html_e('Yes', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option wcpcu_navigation cmb2-radio-switch2" name="wcpscu[nav_show]"
                                id="wcpscu[c10_nav]2" value="no" <?php checked( 'no', esc_attr( $nav_show ), true );  ?>>
                            <label for="wcpscu[c10_nav]2">
                                <?php esc_html_e('No', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cmb-row cmb-type-radio wpcu_navigation_depend">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Navigation Position', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-theme-wrapper">
                        <select id="theme_" class="wcpscu_theme" name="wcpscu[nav_position]">
                            <option value="top-left" <?php selected( esc_attr( $nav_position ), 'top-left'); ?> >Top Left</option>
                            <option value="top-right" <?php selected( esc_attr( $nav_position ), 'top-right'); ?>>Top Right
                            </option>
                            <option value="middle" <?php selected( esc_attr( $nav_position ), 'middle'); ?>>Middle
                            </option>
                            <option value="bottom-left" <?php selected( esc_attr( $nav_position ), 'bottom-left'); ?>>Bottom Left
                            </option>
                            <option value="bottom-right" <?php selected( esc_attr( $nav_position ), 'bottom-right'); ?>>Bottom Right
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Navigation color -->
            <div class="cmb-row cmb-type-radio wpcu_navigation_depend">
                <div class="cmb-th">
                    <label for="wcpscu[nav_arrow_color]">
                        Navigation Style
                    </label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation">
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_arrow_color]">
                                <?php esc_html_e('Navigation Arrow Color', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_arrow_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $nav_arrow_color ) ? esc_attr( $nav_arrow_color ) : '#333'; ?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_back_color]">
                                <?php esc_html_e('Navigation Background Color', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_back_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $nav_back_color ) ? esc_attr( $nav_back_color ) : '#fff'; ?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_border_color]">
                                <?php esc_html_e('Navigation Border Color', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_border_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $nav_border_color ) ? esc_attr( $nav_border_color ) : '#e4e4ed'; ?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_arrow_hover_color]">
                                <?php esc_html_e('Navigation Hover Arrow Color', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_arrow_hover_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $nav_arrow_hover_color ) ? esc_attr( $nav_arrow_hover_color ) : '#fff'; ?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_back_hover_color]">
                                <?php esc_html_e('Navigation Hover Background Color', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_back_hover_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $nav_back_hover_color ) ? esc_attr( $nav_back_hover_color ) : '#ff5500'; ?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_border_hover]">
                                <?php esc_html_e('Navigation Hover Border Color', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_border_hover]" class="cpa-color-picker"
                                value="<?php echo ! empty( $nav_border_hover ) ? esc_attr( $nav_border_hover ) : '#ff5500'; ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation show/hide -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[carousel_pagination]">
                        <?php esc_html_e('Pagination Show', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list  cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option wcpcu_carousel_pagination cmb2-radio-switch1" name="wcpscu[carousel_pagination]"
                                id="wcpscu[carousel_pagination]1" value="yes" <?php checked( 'yes', esc_attr( $carousel_pagination ), true );  ?>>
                            <label for="wcpscu[carousel_pagination]1">
                                <?php esc_html_e('Yes', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option wcpcu_carousel_pagination cmb2-radio-switch2" name="wcpscu[carousel_pagination]"
                                id="wcpscu[carousel_pagination]2" value="no" <?php checked( 'no', esc_attr( $carousel_pagination ), true );  ?>>
                            <label for="wcpscu[carousel_pagination]2">
                                <?php esc_html_e('No', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="cmb-row cmb-type-radio wpcu_carousel_pagination_depend">
                <div class="cmb-th">
                    <label for="wcpscu[dots_color]">
                        <?php esc_html_e('Pagination Style', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation">
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[dots_color]">
                                <?php esc_html_e('Dots Color', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                            <input type="text" name="wcpscu[dots_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $dots_color ) ? esc_attr( $dots_color ) : '#b0b0b0'; ?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[dots_active_color]">
                                <?php esc_html_e('Dots Active Color', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
                            </label>
                            <input type="text" name="wcpscu[dots_active_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $dots_active_color ) ? esc_attr( $dots_active_color ) : '#ff5500'; ?>" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-2 -->