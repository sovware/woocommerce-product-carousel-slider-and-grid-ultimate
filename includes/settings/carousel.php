<?php
if ( ! defined( 'ABSPATH' ) ) die( 'Are you cheating??? Accessing this file directly is forbidden.' );
$stop_hover      = !empty($stop_hover) ? $stop_hover : 'true';
$A_play          = !empty($A_play) ? $A_play : 'yes';
$pagination      = !empty($pagination) ? $pagination : 'yes';
$scrol_direction = !empty($scrol_direction) ? $scrol_direction : 'left';
$scrool          = !empty($scrool) ? $scrool : 'false';
$nav_show          = !empty($nav_show) ? $nav_show : 'yes';
?>
<!--TAB 2  Carousel setting -->
<div id="lcsp-tab-2" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">
            <!--Select theme-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Select Theme', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <select id="c_theme" name="wcpscu[c_theme]">
                        <option value="c_theme1">Theme-1</option>
                        <option value="c_theme2" <?php if(!empty($c_theme) && $c_theme == "c_theme2"){ echo "selected";}?>>Theme-2</option>
                        <option value="c_theme3" <?php if(!empty($c_theme) && $c_theme == "c_theme3"){ echo "selected";}?>>Theme-3</option>
                        <option disabled>Theme-4 (Pro)</option>
                        <option disabled>Theme-5 (Pro)</option>
                        <option disabled>Theme-6 (Pro)</option>
                        <option disabled>Theme-7 (Pro)</option>
                        <option disabled>Theme-8 (Pro)</option>
                        <option disabled>Theme-9 (Pro)</option>
                        <option disabled>Theme-10 (Pro)</option>
                        <option disabled>Theme-11 (Pro)</option>
                        <option disabled>Theme-12 (Pro)</option>
                        <option disabled>Theme-13 (Pro)</option>
                        <option disabled>Theme-14 (Pro)</option>
                        <option disabled>Theme-15 (Pro)</option>
                    </select>
                </div>
            </div>

            <!--Auto Play-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Auto Play', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[A_play]"
                                   id="lcsp_ap1"
                                   value="yes" <?php checked('yes', $A_play, true); ?>>
                            <label for="lcsp_ap1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[A_play]"
                                   id="lcsp_ap2"
                                   value="no" <?php checked('no', $A_play, true); ?>>
                            <label for="lcsp_ap2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
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
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[repeat_product]" id="wcpscu_repeat_product1"
                                   value="yes" <?php if(empty($repeat_product) || 'yes' === $repeat_product) { echo 'checked'; } ?>
                            >
                            <label for="wcpscu_repeat_product1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[repeat_product]" id="wcpscu_repeat_product2"
                                   value="no" <?php if (!empty($repeat_product)) { checked('no', $repeat_product); } ?>
                            >
                            <label for="wcpscu_repeat_product2"><?php _e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Stop on hover-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_soh"><?php esc_html_e('Stop on Hover', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li><input type="radio" class="cmb2-option"
                                   name="wcpscu[stop_hover]"
                                   id="lcsp_soh1"
                                   value="true" <?php checked('true', $stop_hover, true); ?>>
                            <label for="lcsp_soh1">
                                <?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li><input type="radio" class="cmb2-option"
                                   name="wcpscu[stop_hover]"
                                   id="lcsp_soh2"
                                   value="false" <?php checked('false', $stop_hover, true);  ?>>
                            <label for="lcsp_soh2">
                                <?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Items on desktop-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_li_desktop">
                        <?php esc_html_e('Products to display on Desktop)', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small"
                           name="wcpscu[c_desktop]"
                           id="lcsp_li_desktop"
                           value="<?php echo !empty($c_desktop) ? intval($c_desktop) : 4; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('Maximum amount of items to display at a time on Desktop that screen size larger than 1198px', WCPCSU_TEXTDOMAIN); ?></p>

                </div>
            </div>
            <!--Item on smaller desktop or laptop-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_li_desktop_small">
                        <?php esc_html_e('Products to display on Laptop', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small"
                           name="wcpscu[c_desktop_small]"
                           id="lcsp_li_desktop_small"
                           value="<?php echo !empty($c_desktop_small) ? intval($c_desktop_small) : 3; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('Maximum amount of items to display at a time on Desktop that screen size larger than 978px', WCPCSU_TEXTDOMAIN); ?></p>
                </div>
            </div>
            <!--items on tablet-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_li_tablet">
                        <?php esc_html_e('Products to Display on Tablet', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small"
                           name="wcpscu[c_tablet]"
                           id="lcsp_li_tablet"
                           value="<?php echo !empty($c_tablet) ? intval($c_tablet) : 3; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('Maximum amount of items to display at a time on Tablet', WCPCSU_TEXTDOMAIN); ?></p>
                </div>
            </div>
            <!--items on mobile-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_li_mobile">
                        <?php esc_html_e('Products to Display on Mobile', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small"
                           name="wcpscu[c_mobile]"
                           id="lcsp_li_mobile"
                           value="<?php echo !empty($c_mobile) ? intval($c_mobile) : 2; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('Maximum amount of items to display at a time on Mobile', WCPCSU_TEXTDOMAIN); ?></p>
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
                    <input type="text" class="cmb2-text-small"
                           name="wcpscu[slide_speed]"
                           id="wcpscu[slide_speed]"
                           value="<?php echo !empty($slide_speed) ? intval($slide_speed) : 4000; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('Here 1000 is equal to 1 second. So provide a speed accordingly', WCPCSU_TEXTDOMAIN); ?></p>
                </div>
            </div>
            <!--slide Timeout-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_ss">
                        <?php esc_html_e('Slide Timeout', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small"
                           name="wcpscu[slide_time]"
                           id="wcpscu[slide_time]"
                           value="<?php echo !empty($slide_time) ? intval($slide_time) : 2000; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('Here 1000 is equal to 1 second. So provide a timeout accordingly', WCPCSU_TEXTDOMAIN); ?></p>
                </div>
            </div>
            <!--Scrolling-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_spp">
                        <?php esc_html_e('Scroll', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[scrool]"
                                   id="lcsp_spp1"
                                   value="false" <?php checked('false', $scrool, true); ?>>
                            <label for="lcsp_spp1">
                                <?php esc_html_e('Per Item', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li><input type="radio" class="cmb2-option"
                                   name="wcpscu[scrool]"
                                   id="lcsp_spp2"
                                   value="true" <?php checked('true', $scrool, true); ?>>
                            <label for="lcsp_spp2">
                                <?php esc_html_e('Per Page', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div> <!-- end cmb2-metabox -->

            <!-- Navigation show/hide -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[c10_nav]">
                        <?php esc_html_e('Navigation Show', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[nav_show]"
                                   id="wcpscu[c10_nav]1"
                                   value="yes" <?php checked('yes', $nav_show, true);  ?>>
                            <label for="wcpscu[c10_nav]1">
                                <?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li>
                            <input type="radio"
                                   class="cmb2-option"
                                   name="wcpscu[nav_show]"
                                   id="wcpscu[c10_nav]2"
                                   value="no" <?php checked('no', $nav_show, true);  ?>>
                            <label for="wcpscu[c10_nav]2">
                                <?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Navigation arrow color -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[nav_arrow_color]">
                        <?php esc_html_e('Navigation Arrow Color', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" name="wcpscu[nav_arrow_color]"
                           class="cpa-color-picker"
                           value="<?php if(empty($nav_arrow_color)) { echo "#9192a3";}else{ echo $nav_arrow_color;}?>" />
                </div>
            </div>

            <!-- Navigation Backgroudn color -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[nav_back_color]">
                        <?php esc_html_e('Navigation Background Color', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" name="wcpscu[nav_back_color]"
                           class="cpa-color-picker"
                           value="<?php if(!empty($nav_back_color)) { echo $nav_back_color ;}else{ echo "#fff" ;}?>" />
                </div>
            </div>

            <!-- Navigation Border color -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[nav_border_color]">
                        <?php esc_html_e('Navigation Border Color', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" name="wcpscu[nav_border_color]"
                           class="cpa-color-picker"
                           value="<?php if(!empty($nav_border_color)) { echo $nav_border_color ;}else{ echo "#e4e4ed" ;}?>" />
                </div>
            </div>

            <!-- Navigation Hover arrow color -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[nav_arrow_hover_color]">
                        <?php esc_html_e('Navigation Hover Arrow Color', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" name="wcpscu[nav_arrow_hover_color]"
                           class="cpa-color-picker"
                           value="<?php if(empty($nav_arrow_hover_color)) { echo "#9192a3";}else{ echo $nav_arrow_hover_color;}?>" />
                </div>
            </div>

            <!-- Navigation Hover Background color -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[nav_back_hover_color]">
                        <?php esc_html_e('Navigaiton Hover Background Color', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" name="wcpscu[nav_back_hover_color]"
                           class="cpa-color-picker"
                           value="<?php if(empty($nav_back_hover_color)) { echo "#ffffff";}else{ echo $nav_back_hover_color;}?>" />
                </div>
            </div>

            <!-- Navigation Hover border color -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[nav_border_hover]">
                        <?php esc_html_e('Navigaiton Hover Border Color', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <input type="text" name="wcpscu[nav_border_hover]"
                           class="cpa-color-picker"
                           value="<?php if(empty($nav_border_hover)) { echo "#ff5500";}else{ echo $nav_border_hover;}?>" />
                </div>
            </div>


        </div>
    </div> <!-- end cmb2-wrap -->

</div> <!-- end lcsp-tab-2 -->
