<?php
$grid_pagination          = !empty($grid_pagination) ? $grid_pagination : 'no';
$g_column                 = !empty($g_column) ? $g_column : '4';
$g_tablet                 = !empty($g_tablet) ? $g_tablet : '2';
$g_mobile                 = !empty($g_mobile) ? $g_mobile : '1';
?>
<!--TAB 3  Grid setting -->
<div id="lcsp-tab-3" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">

            <!--Select Column for desktop-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Select Columns', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <select id="g_theme" name="wcpscu[g_column]">
                        <option value="1" <?php selected('1', $g_column, true) ?>>Column-1</option>
                        <option value="2" <?php selected('2', $g_column, true) ?>>Column-2</option>
                        <option value="3" <?php selected('3', $g_column, true) ?>>Column-3</option>
                        <option value="4" <?php selected('4', $g_column, true) ?>>Column-4</option>
                    </select>
                </div>
            </div>

            <!--Select Column for Tablet-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Select Columns for Tablet', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <select id="g_theme" name="wcpscu[g_tablet]">
                        <option value="1" <?php selected('1', $g_tablet, true) ?>>Column-1</option>
                        <option value="2" <?php selected('2', $g_tablet, true) ?>>Column-2</option>
                        <option value="3" <?php selected('3', $g_tablet, true) ?>>Column-3</option>
                        <option value="4" <?php selected('4', $g_tablet, true) ?>>Column-4</option>
                    </select>
                </div>
            </div>

            <!--Select Column for Mobile-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Select Columns for Mobile', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <select id="g_theme" name="wcpscu[g_mobile]">
                        <option value="1" <?php selected('1', $g_mobile, true) ?>>Column-1</option>
                        <option value="2" <?php selected('2', $g_mobile, true) ?>>Column-2</option>
                        <option value="3" <?php selected('3', $g_mobile, true) ?>>Column-3</option>
                        <option value="4" <?php selected('4', $g_mobile, true) ?>>Column-4</option>
                    </select>
                </div>
            </div>

            <!--Pagination-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Display Pagination', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[grid_pagination]"
                                   id="grid_pagination"
                                   value="yes" <?php checked('yes', $grid_pagination, true); ?>>
                            <label for="grid_pagination"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[grid_pagination]"
                                   id="grid_pagination2"
                                   value="no" <?php checked('no', $grid_pagination, true); ?>>
                            <label for="grid_pagination2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- pagination color -->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu[pagi_color]">
                        Pagination Style
                    </label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-pagination">
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_color]">
                                <?php esc_html_e('Pagination Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_color ) ? $pagi_color : "#333"; ?>" />
                        </div>
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_border_color]">
                                <?php esc_html_e('Pagination Border Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_border_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_border_color ) ? $pagi_border_color : "#e4e4e4"; ?>" />
                        </div>
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_back_color]">
                                <?php esc_html_e('Pagination Background Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_back_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_back_color ) ? $pagi_back_color : "#fff"; ?>" />
                        </div>
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_hover_color]">
                                <?php esc_html_e('Pagination Hover Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_hover_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_hover_color ) ? $pagi_hover_color : "#fff"; ?>" />
                        </div>
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_hover_border_color]">
                                <?php esc_html_e('Pagination Hover Border Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_hover_border_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_hover_border_color ) ? $pagi_hover_border_color : "#ff5500"; ?>" />
                        </div>
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_hover_back_color]">
                                <?php esc_html_e('Pagination Hover Background Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_hover_back_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_hover_back_color ) ? $pagi_hover_back_color : "#ff5500"; ?>" />
                        </div>
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_active_color]">
                                <?php esc_html_e('Pagination Active Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_active_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_active_color ) ? $pagi_active_color : "#fff"; ?>" />
                        </div>
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_active_border_color]">
                                <?php esc_html_e('Pagination Active Border Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_active_border_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_active_border_color ) ? $pagi_active_border_color : "#ff5500"; ?>" />
                        </div>
                        <div class="cmb-pagination-item">
                            <label for="wcpscu[pagi_active_back_color]">
                                <?php esc_html_e('Pagination Active Background Color', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                            <input type="text" name="wcpscu[pagi_active_back_color]" class="cpa-color-picker"
                                value="<?php echo ! empty( $pagi_active_back_color ) ? $pagi_active_back_color : "#ff5500"; ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end cmb2-metabox -->
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-2
