<?php
$grid_pagination          = !empty($grid_pagination) ? $grid_pagination : 'no';
?>
<!--TAB 3  Grid setting -->
<div id="lcsp-tab-3" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">
            <!--Select theme-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Select Theme', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <select id="g_theme" name="wcpscu[g_theme]">
                        <option value="g_theme1">Theme-1</option>
                        <option value="g_theme2" <?php if(!empty($g_theme) && $g_theme == "g_theme2"){ echo "selected";}?>>Theme-2</option>
                        <option value="g_theme3" <?php if(!empty($g_theme) && $g_theme == "g_theme3"){ echo "selected";}?>>Theme-3</option>
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

            <!--Select Column for desktop-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Select Columns', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <select id="g_theme" name="wcpscu[g_column]">
                        <option value="4">Column-4</option>
                        <option value="1" <?php if(!empty($g_column) && $g_column == "1"){ echo "selected";}?>>Column-1</option>
                        <option value="2" <?php if(!empty($g_column) && $g_column == "2"){ echo "selected";}?>>Column-2</option>
                        <option value="3" <?php if(!empty($g_column) && $g_column == "3"){ echo "selected";}?>>Column-3</option>
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
                        <option value="2">Column-2</option>
                        <option value="1" <?php if(!empty($g_tablet) && $g_tablet == "1"){ echo "selected";}?>>Column-1</option>
                        <option value="3" <?php if(!empty($g_tablet) && $g_tablet == "3"){ echo "selected";}?>>Column-3</option>
                        <option value="4" <?php if(!empty($g_tablet) && $g_tablet == "4"){ echo "selected";}?>>Column-4</option>
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
                        <option value="1">Column-1</option>
                        <option value="2" <?php if(!empty($g_mobile) && $g_mobile == "2"){ echo "selected";}?>>Column-2</option>
                        <option value="3" <?php if(!empty($g_mobile) && $g_mobile == "3"){ echo "selected";}?>>Column-3</option>
                        <option value="4" <?php if(!empty($g_mobile) && $g_mobile == "4"){ echo "selected";}?>>Column-4</option>
                    </select>
                </div>
            </div>



        </div> <!-- end cmb2-metabox -->
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-2
