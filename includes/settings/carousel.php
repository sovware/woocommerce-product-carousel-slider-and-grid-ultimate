<?php
if ( ! defined( 'ABSPATH' ) ) die( 'Are you cheating??? Accessing this file directly is forbidden.' );
$stop_hover      = ! empty( $stop_hover ) ? $stop_hover : 'true';
$A_play          = ! empty( $A_play ) ? $A_play : 'yes';
$pagination      = ! empty( $pagination ) ? $pagination : 'yes';
$scrol_direction = ! empty( $scrol_direction ) ? $scrol_direction : 'left';
$scrool          = ! empty( $scrool ) ? $scrool : 'false';
$nav_show        = ! empty( $nav_show ) ? $nav_show : 'yes';
$nav_position    = ! empty( $nav_position ) ? $nav_position : 'bottom_right';
?>
<!--TAB 2  Carousel setting -->
<div id="lcsp-tab-2" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">

            <!--Auto Play-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Auto Play', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[A_play]"
                                id="lcsp_ap1" value="yes" <?php checked('yes', $A_play, true); ?>>
                            <label for="lcsp_ap1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[A_play]"
                                id="lcsp_ap2" value="no" <?php checked('no', $A_play, true); ?>>
                            <label for="lcsp_ap2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--AutoPlay Type-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('AutoPlay Type', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <!-- <select id="c_theme" name="wcpscu[a_play_type]">
                        <option value="normal">Normal</option>
                        <option value="marquee"
                            <?php if(!empty($a_play_type) && $a_play_type == "marquee"){ echo "selected";}?>>Marquee
                        </option>
                    </select> -->
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[auto_product]"
                                id="wcpscu_repeat_product11" value="Normal" checked>
                            <label for="wcpscu_repeat_product11">Normal</label>
                        </li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[auto_product]"
                                id="wcpscu_repeat_product22" value="Marquee">
                            <label for="wcpscu_repeat_product22">Marquee</label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Repeat Product-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu_repeat_product"><?php esc_html_e('Repeat Product', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[repeat_product]"
                                id="wcpscu_repeat_product1" value="yes"
                                <?php if(empty($repeat_product) || 'yes' === $repeat_product) { echo 'checked'; } ?>>
                            <label for="wcpscu_repeat_product1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[repeat_product]"
                                id="wcpscu_repeat_product2" value="no"
                                <?php if (!empty($repeat_product)) { checked('no', $repeat_product); } ?>>
                            <label for="wcpscu_repeat_product2"><?php _e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Stop on hover-->
            <?php if(empty($a_play_type) || 'marquee' != $a_play_type) { ?>
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_soh"><?php esc_html_e('Stop on Hover', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[stop_hover]"
                                id="lcsp_soh1" value="true" <?php checked('true', $stop_hover, true); ?>>
                            <label for="lcsp_soh1">
                                <?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[stop_hover]"
                                id="lcsp_soh2" value="false" <?php checked('false', $stop_hover, true);  ?>>
                            <label for="lcsp_soh2">
                                <?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <?php } ?>
            <!--Items on desktop-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_li_desktop">
                        <?php esc_html_e('Products Column', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-product-columns">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"><span class="fas fa-desktop"></span>
                                </div>
                            </div>
                            <input type="text" class="cmb2-text-small" name="wcpscu[c_desktop]" id="lcsp_li_desktop"
                                value="<?php echo !empty($c_desktop) ? intval($c_desktop) : 4; ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"><span class="fas fa-laptop"></span>
                                </div>
                            </div>
                            <input type="text" class="cmb2-text-small" name="wcpscu[c_desktop_small]"
                                id="lcsp_li_desktop_small"
                                value="<?php echo !empty($c_desktop_small) ? intval($c_desktop_small) : 3; ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"><span class="fas fa-tablet-alt"></span>
                                </div>
                            </div>
                            <input type="text" class="cmb2-text-small" name="wcpscu[c_tablet]" id="lcsp_li_tablet"
                                value="<?php echo !empty($c_tablet) ? intval($c_tablet) : 2; ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"><span class="fas fa-mobile-alt"></span>
                                </div>
                            </div>
                            <input type="text" class="cmb2-text-small" name="wcpscu[c_mobile]" id="lcsp_li_mobile"
                                value="<?php echo !empty($c_mobile) ? intval($c_mobile) : 1; ?>">
                        </div>
                    </div>

                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('Set products column(s) in different devices.', WCPCSU_TEXTDOMAIN); ?>
                    </p>

                </div>
            </div>
            <!--slide speed-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_ss">
                        <?php esc_html_e('Slide Speed', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[slide_speed]" id="wcpscu[slide_speed]"
                        value="<?php echo !empty($slide_speed) ? intval($slide_speed) : 4000; ?>">
                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('Here 1000 is equal to 1 second. So provide a speed accordingly', WCPCSU_TEXTDOMAIN); ?>
                    </p>
                </div>
            </div>
            <!--slide Timeout-->
            <?php if(empty($a_play_type) || 'marquee' != $a_play_type) { ?>
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_ss">
                        <?php esc_html_e('Slide Timeout', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[slide_time]" id="wcpscu[slide_time]"
                        value="<?php echo !empty($slide_time) ? intval($slide_time) : 2000; ?>">
                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('Here 1000 is equal to 1 second. So provide a timeout accordingly', WCPCSU_TEXTDOMAIN); ?>
                    </p>
                </div>
            </div>
            <?php } ?>
            <!--Scrolling-->
            <?php if(empty($a_play_type) || 'marquee' != $a_play_type) { ?>
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_spp">
                        <?php esc_html_e('Scroll', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[scrool]" id="lcsp_spp1" value="false"
                                <?php checked('false', $scrool, true); ?>>
                            <label for="lcsp_spp1">
                                <?php esc_html_e('Per Item', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[scrool]" id="lcsp_spp2" value="true"
                                <?php checked('true', $scrool, true); ?>>
                            <label for="lcsp_spp2">
                                <?php esc_html_e('Per Page', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div> <!-- end cmb2-metabox -->
            <?php } ?>
            <!-- Navigation show/hide -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[c10_nav]">
                        <?php esc_html_e('Navigation Show', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list  cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option  cmb2-radio-switch1" name="wcpscu[nav_show]"
                                id="wcpscu[c10_nav]1" value="yes" <?php checked('yes', $nav_show, true);  ?>>
                            <label for="wcpscu[c10_nav]1">
                                <?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option  cmb2-radio-switch2" name="wcpscu[nav_show]"
                                id="wcpscu[c10_nav]2" value="no" <?php checked('no', $nav_show, true);  ?>>
                            <label for="wcpscu[c10_nav]2">
                                <?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Navigation Position', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-theme-wrapper">
                        <select id="theme_" class="wcpscu_theme" name="wcpscu[nav_position]">
                            <option value="top_left" <?php selected( $nav_position, 'top_left'); ?> >Top Left</option>
                            <option value="top_right" <?php selected( $nav_position, 'top_right'); ?>>Top Right
                            </option>
                            <option value="middle" <?php selected( $nav_position, 'middle'); ?>>Middle
                            </option>
                            <option value="bottom_left" <?php selected( $nav_position, 'bottom_left'); ?>>Bottom Left
                            </option>
                            <option value="bottom_right" <?php selected( $nav_position, 'bottom_right'); ?>>Bottom Right
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Navigation arrow color -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[nav_arrow_color]">
                        Navigation Style
                    </label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation">
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_arrow_color]">
                                <?php esc_html_e('Navigation Arrow Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_arrow_color]" class="cpa-color-picker"
                                value="<?php if(empty($nav_arrow_color)) { echo "#9192a3";}else{ echo $nav_arrow_color;}?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_back_color]">
                                <?php esc_html_e('Navigation Background Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_back_color]" class="cpa-color-picker"
                                value="<?php if(!empty($nav_back_color)) { echo $nav_back_color ;}else{ echo "#fff" ;}?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_border_color]">
                                <?php esc_html_e('Navigation Border Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_border_color]" class="cpa-color-picker"
                                value="<?php if(!empty($nav_border_color)) { echo $nav_border_color ;}else{ echo "#e4e4ed" ;}?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_arrow_hover_color]">
                                <?php esc_html_e('Navigation Hover Arrow Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_arrow_hover_color]" class="cpa-color-picker"
                                value="<?php if(empty($nav_arrow_hover_color)) { echo "#9192a3";}else{ echo $nav_arrow_hover_color;}?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_back_hover_color]">
                                <?php esc_html_e('Navigaiton Hover Background Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_back_hover_color]" class="cpa-color-picker"
                                value="<?php if(empty($nav_back_hover_color)) { echo "#ffffff";}else{ echo $nav_back_hover_color;}?>" />
                        </div>
                        <div class="cmb-navigation-item">
                            <label for="wcpscu[nav_border_hover]">
                                <?php esc_html_e('Navigaiton Hover Border Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[nav_border_hover]" class="cpa-color-picker"
                                value="<?php if(empty($nav_border_hover)) { echo "#ff5500";}else{ echo $nav_border_hover;}?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-2 -->