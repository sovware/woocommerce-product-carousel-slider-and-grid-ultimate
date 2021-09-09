<!--TAB 4  Style setting -->
<div id="lcsp-tab-4" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_header_title_font_size"><?php esc_html_e('Header Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-header-font-styles">
                        <label for="wcpscu_header_title_font_size"><?php esc_html_e('Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="input-group">
                            <input type="text" class="cmb2-text-small" name="wcpscu[header_font_size]"
                                id="wcpscu_header_title_font_size"
                                value="<?php if(!empty($header_font_size)) { echo $header_font_size; }else { echo "24px";} ?>"
                                placeholder="e.g. 20px">

                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_carousel_title_font_color"><?php esc_html_e('Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[header_font_color]"
                            id="wcpscu_carousel_title_font_color"
                            value="<?php if(!empty($header_font_color)) { echo $header_font_color; } else { echo "#303030"; } ?>">
                    </div>
                </div>
            </div>

            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_title_font_size"><?php esc_html_e('Product Title Font', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-header-font-styles">
                        <label for="wcpscu_header_title_font_size"><?php esc_html_e('Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="input-group">
                            <input type="text" class="cmb2-text-small theme_1" name="wcpscu[title_font_size][theme_1]"
                                id="wcpscu_title_font_size"
                                value="<?php echo ! empty( $title_font_size['theme_1'] ) ? esc_attr( $title_font_size['theme_1'] ) : 16; ?>">
                            <input type="text" class="cmb2-text-small theme_2" name="wcpscu[title_font_size][theme_2]"
                                id="wcpscu_title_font_size"
                                value="<?php echo ! empty( $title_font_size['theme_2'] ) ? esc_attr( $title_font_size['theme_2'] ) : 16; ?>">
                            <input type="text" class="cmb2-text-small theme_3" name="wcpscu[title_font_size][theme_3]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_3'] ) ? esc_attr( $title_font_size['theme_3'] ) : 16; ?>">
                            <input type="text" class="cmb2-text-small theme_4" name="wcpscu[title_font_size][theme_4]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_4'] ) ? esc_attr( $title_font_size['theme_4'] ) : 15; ?>">
                            <input type="text" class="cmb2-text-small theme_5" name="wcpscu[title_font_size][theme_5]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_5'] ) ? esc_attr( $title_font_size['theme_5'] ) : 15; ?>">
                            <input type="text" class="cmb2-text-small theme_6" name="wcpscu[title_font_size][theme_6]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_6'] ) ? esc_attr( $title_font_size['theme_6'] ) : 15; ?>">
                            <input type="text" class="cmb2-text-small theme_6" name="wcpscu[title_font_size][theme_6]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_7'] ) ? esc_attr( $title_font_size['theme_7'] ) : 15; ?>">
                            <input type="text" class="cmb2-text-small theme_8" name="wcpscu[title_font_size][theme_8]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_8'] ) ? esc_attr( $title_font_size['theme_8'] ) : 15; ?>">
                            <input type="text" class="cmb2-text-small theme_9" name="wcpscu[title_font_size][theme_9]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_9'] ) ? esc_attr( $title_font_size['theme_9'] ) : 15; ?>">
                            <input type="text" class="cmb2-text-small theme_10" name="wcpscu[title_font_size][theme_10]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_10'] ) ? esc_attr( $title_font_size['theme_10'] ) : 16; ?>">
                            <input type="text" class="cmb2-text-small theme_11" name="wcpscu[title_font_size][theme_11]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_11'] ) ? esc_attr( $title_font_size['theme_11'] ) : 16; ?>">
                            <input type="text" class="cmb2-text-small theme_12" name="wcpscu[title_font_size][theme_12]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_12'] ) ? esc_attr( $title_font_size['theme_12'] ) : 16; ?>">
                            <input type="text" class="cmb2-text-small theme_13" name="wcpscu[title_font_size][theme_13]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_13'] ) ? esc_attr( $title_font_size['theme_13'] ) : 16; ?>">
                            <input type="text" class="cmb2-text-small theme_14" name="wcpscu[title_font_size][theme_14]"
                            id="wcpscu_title_font_size"
                            value="<?php echo ! empty( $title_font_size['theme_14'] ) ? esc_attr( $title_font_size['theme_14'] ) : 16; ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"><?php esc_html_e('px', WCPCSU_TEXTDOMAIN); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_title_font_color"><?php esc_html_e( 'Font Color', WCPCSU_TEXTDOMAIN ); ?></label>
                        <div class="theme_1">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_1]"
                            id="wcpscu_title_font_color"
                            value="<?php echo ! empty( $title_font_color['theme_1'] ) ? esc_attr( $title_font_color['theme_1'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_2">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_2]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_2'] ) ? esc_attr( $title_font_color['theme_2'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_3"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_3]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_3'] ) ? esc_attr( $title_font_color['theme_3'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_4"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_4]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_4'] ) ? esc_attr( $title_font_color['theme_4'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_5"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_5]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_5'] ) ? esc_attr( $title_font_color['theme_5'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_6"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_6]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_6'] ) ? esc_attr( $title_font_color['theme_6'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_7"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_7]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_7'] ) ? esc_attr( $title_font_color['theme_7'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_8"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_8]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_8'] ) ? esc_attr( $title_font_color['theme_8'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_9"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_9]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_9'] ) ? esc_attr( $title_font_color['theme_9'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_10"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_10]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_10'] ) ? esc_attr( $title_font_color['theme_10'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_11"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_11]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_11'] ) ? esc_attr( $title_font_color['theme_11'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_12"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_12]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_12'] ) ? esc_attr( $title_font_color['theme_12'] ) : '#000000'; ?>">
                        </div>
                        <div class="theme_13"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_13]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_13'] ) ? esc_attr( $title_font_color['theme_13'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_14"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_14]"
                                id="wcpscu_title_font_color"
                                value="<?php echo ! empty( $title_font_color['theme_14'] ) ? esc_attr( $title_font_color['theme_14'] ) : '#000000'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_title_hover_font_color"><?php esc_html_e('Hover Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_1"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_1"
                                name="wcpscu[title_hover_font_color][theme_1]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_1'] ) ? esc_attr( $title_hover_font_color['theme_1'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_2">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_2"
                                name="wcpscu[title_hover_font_color][theme_2]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_2'] ) ? esc_attr( $title_hover_font_color['theme_2'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_3"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_3"
                                name="wcpscu[title_hover_font_color][theme_3]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_3'] ) ? esc_attr( $title_hover_font_color['theme_3'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_4"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_4"
                                name="wcpscu[title_hover_font_color][theme_4]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_4'] ) ? esc_attr( $title_hover_font_color['theme_4'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_5">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_5"
                                name="wcpscu[title_hover_font_color][theme_5]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_5'] ) ? esc_attr( $title_hover_font_color['theme_5'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_6">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_6"
                                name="wcpscu[title_hover_font_color][theme_6]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_6'] ) ? esc_attr( $title_hover_font_color['theme_6'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_7">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_7"
                                name="wcpscu[title_hover_font_color][theme_7]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_7'] ) ? esc_attr( $title_hover_font_color['theme_7'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_8">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_8"
                                name="wcpscu[title_hover_font_color][theme_8]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_8'] ) ? esc_attr( $title_hover_font_color['theme_8'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_9">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_9"
                                name="wcpscu[title_hover_font_color][theme_9]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_9'] ) ? esc_attr( $title_hover_font_color['theme_9'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_10">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_10"
                                name="wcpscu[title_hover_font_color][theme_10]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_10'] ) ? esc_attr( $title_hover_font_color['theme_10'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_11">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_11"
                                name="wcpscu[title_hover_font_color][theme_11]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_11'] ) ? esc_attr( $title_hover_font_color['theme_11'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_12">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_12"
                                name="wcpscu[title_hover_font_color][theme_12]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_12'] ) ? esc_attr( $title_hover_font_color['theme_12'] ) : '#68b22e'; ?>">
                        </div>
                        <div class="theme_13">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_13"
                                name="wcpscu[title_hover_font_color][theme_13]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_13'] ) ? esc_attr( $title_hover_font_color['theme_13'] ) : '#3bc492'; ?>">
                        </div>
                        <div class="theme_14">
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_14"
                                name="wcpscu[title_hover_font_color][theme_14]" id="wcpscu_title_hover_font_color"
                                value="<?php echo ! empty( $title_hover_font_color['theme_14'] ) ? esc_attr( $title_hover_font_color['theme_14'] ) : '#ff0000'; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label
                        for="wcpscu_price_font_size"><?php esc_html_e('Product Price Font', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-header-font-styles">
                        <label for="wcpscu_header_title_font_size">Font Size</label>
                        <div class="input-group">
                            <input type="text" class="cmb2-text-small theme_1" name="wcpscu[price_font_size][theme_1]"
                                id="wcpscu_price_font_size"
                                value="<?php echo ! empty( $price_font_size['theme_1'] ) ? esc_attr( $price_font_size['theme_1'] ) : '14'; ?>">
                            <input type="text" class="cmb2-text-small theme_2" name="wcpscu[price_font_size][theme_2]"
                                id="wcpscu_price_font_size"
                                value="<?php echo ! empty( $price_font_size['theme_2'] ) ? esc_attr( $price_font_size['theme_2'] ) : '14'; ?>">
                            <input type="text" class="cmb2-text-small theme_3" name="wcpscu[price_font_size][theme_3]"
                                id="wcpscu_price_font_size"
                                value="<?php echo ! empty( $price_font_size['theme_3'] ) ? esc_attr( $price_font_size['theme_3'] ) : '14'; ?>">
                            <input type="text" class="cmb2-text-small theme_4" name="wcpscu[price_font_size][theme_4]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_4'] ) ? esc_attr( $price_font_size['theme_4'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_5" name="wcpscu[price_font_size][theme_5]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_5'] ) ? esc_attr( $price_font_size['theme_5'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_6" name="wcpscu[price_font_size][theme_6]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_6'] ) ? esc_attr( $price_font_size['theme_6'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_7" name="wcpscu[price_font_size][theme_7]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_7'] ) ? esc_attr( $price_font_size['theme_7'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_8" name="wcpscu[price_font_size][theme_8]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_8'] ) ? esc_attr( $price_font_size['theme_8'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_9" name="wcpscu[price_font_size][theme_9]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_9'] ) ? esc_attr( $price_font_size['theme_9'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_10" name="wcpscu[price_font_size][theme_10]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_10'] ) ? esc_attr( $price_font_size['theme_10'] ) : '18'; ?>">
                            <input type="text" class="cmb2-text-small theme_11" name="wcpscu[price_font_size][theme_11]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_11'] ) ? esc_attr( $price_font_size['theme_11'] ) : '18'; ?>">
                            <input type="text" class="cmb2-text-small theme_12" name="wcpscu[price_font_size][theme_12]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_12'] ) ? esc_attr( $price_font_size['theme_12'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_13" name="wcpscu[price_font_size][theme_13]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_13'] ) ? esc_attr( $price_font_size['theme_13'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_14" name="wcpscu[price_font_size][theme_14]"
                            id="wcpscu_price_font_size"
                            value="<?php echo ! empty( $price_font_size['theme_14'] ) ? esc_attr( $price_font_size['theme_14'] ) : '16'; ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_price_font_color"><?php esc_html_e('Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_1"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_1" name="wcpscu[price_font_color][theme_1]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_1'] ) ? esc_attr( $price_font_color['theme_1'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_2" name="wcpscu[price_font_color][theme_2]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_2'] ) ? esc_attr( $price_font_color['theme_2'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_3"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_3" name="wcpscu[price_font_color][theme_3]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_3'] ) ? esc_attr( $price_font_color['theme_3'] ) : '#0f9cf5'; ?>">
                        </div>
                        <div class="theme_4"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_4" name="wcpscu[price_font_color][theme_4]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_4'] ) ? esc_attr( $price_font_color['theme_4'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_5"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_5" name="wcpscu[price_font_color][theme_5]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_5'] ) ? esc_attr( $price_font_color['theme_5'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_6"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_6" name="wcpscu[price_font_color][theme_6]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_6'] ) ? esc_attr( $price_font_color['theme_6'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_7"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_7" name="wcpscu[price_font_color][theme_7]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_7'] ) ? esc_attr( $price_font_color['theme_7'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_8"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_8" name="wcpscu[price_font_color][theme_8]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_8'] ) ? esc_attr( $price_font_color['theme_8'] ) : '#0f9cf5'; ?>">
                        </div>
                        <div class="theme_9"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_9" name="wcpscu[price_font_color][theme_9]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_9'] ) ? esc_attr( $price_font_color['theme_9'] ) : '#0f9cf5'; ?>">
                        </div>
                        <div class="theme_10"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_10" name="wcpscu[price_font_color][theme_10]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_10'] ) ? esc_attr( $price_font_color['theme_10'] ) : '#0f9cf5'; ?>">
                        </div>
                        <div class="theme_11"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_11" name="wcpscu[price_font_color][theme_11]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_11'] ) ? esc_attr( $price_font_color['theme_11'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_12"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_12" name="wcpscu[price_font_color][theme_12]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_12'] ) ? esc_attr( $price_font_color['theme_12'] ) : '#68b22e'; ?>">
                        </div>

                        <div class="theme_13"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_13" name="wcpscu[price_font_color][theme_13]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_13'] ) ? esc_attr( $price_font_color['theme_13'] ) : '#3bc492'; ?>">
                        </div>

                        <div class="theme_14"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_14" name="wcpscu[price_font_color][theme_14]"
                                id="wcpscu_price_font_color"
                                value="<?php echo ! empty( $price_font_color['theme_14'] ) ? esc_attr( $price_font_color['theme_14'] ) : '#ff0000'; ?>">
                        </div>
                    </div>

                </div>
            </div>

            <!--Product Ratings Size-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_ratings_size"><?php esc_html_e('Product Ratings', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-header-font-styles">
                        <label for="wcpscu_header_title_font_size"><?php esc_html_e('Ratings Size', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="input-group">
                            <input type="text" class="cmb2-text-small theme_1" name="wcpscu[ratings_size][theme_1]"
                                id="wcpscu_ratings_size"
                                value="<?php echo ! empty( $ratings_size['theme_1'] ) ? esc_attr( $ratings_size['theme_1'] ) : '1em'; ?>">
                            <input type="text" class="cmb2-text-small theme_2" name="wcpscu[ratings_size][theme_2]"
                                id="wcpscu_ratings_size"
                                value="<?php echo ! empty( $ratings_size['theme_2'] ) ? esc_attr( $ratings_size['theme_2'] ) : '1em'; ?>">
                            <input type="text" class="cmb2-text-small theme_3" name="wcpscu[ratings_size][theme_3]"
                                id="wcpscu_ratings_size"
                                value="<?php echo ! empty( $ratings_size['theme_3'] ) ? esc_attr( $ratings_size['theme_3'] ) : '1em'; ?>">
                            <input type="text" class="cmb2-text-small theme_4" name="wcpscu[ratings_size][theme_4]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_4'] ) ? esc_attr( $ratings_size['theme_4'] ) : '16px'; ?>">
                            <input type="text" class="cmb2-text-small theme_5" name="wcpscu[ratings_size][theme_5]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_5'] ) ? esc_attr( $ratings_size['theme_5'] ) : '16px'; ?>">
                            <input type="text" class="cmb2-text-small theme_6" name="wcpscu[ratings_size][theme_6]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_6'] ) ? esc_attr( $ratings_size['theme_6'] ) : '16px'; ?>">
                            <input type="text" class="cmb2-text-small theme_7" name="wcpscu[ratings_size][theme_7]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_7'] ) ? esc_attr( $ratings_size['theme_7'] ) : '16px'; ?>">
                            <input type="text" class="cmb2-text-small theme_8" name="wcpscu[ratings_size][theme_8]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_8'] ) ? esc_attr( $ratings_size['theme_8'] ) : '16px'; ?>">
                            <input type="text" class="cmb2-text-small theme_9" name="wcpscu[ratings_size][theme_9]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_9'] ) ? esc_attr( $ratings_size['theme_9'] ) : '16px'; ?>">
                            <input type="text" class="cmb2-text-small theme_10" name="wcpscu[ratings_size][theme_10]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_10'] ) ? esc_attr( $ratings_size['theme_10'] ) : '16px'; ?>">
                            <input type="text" class="cmb2-text-small theme_12" name="wcpscu[ratings_size][theme_12]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_12'] ) ? esc_attr( $ratings_size['theme_12'] ) : '15px'; ?>">
                            <input type="text" class="cmb2-text-small theme_13" name="wcpscu[ratings_size][theme_13]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_13'] ) ? esc_attr( $ratings_size['theme_13'] ) : '15px'; ?>">
                            <input type="text" class="cmb2-text-small theme_14" name="wcpscu[ratings_size][theme_14]"
                            id="wcpscu_ratings_size"
                            value="<?php echo ! empty( $ratings_size['theme_14'] ) ? esc_attr( $ratings_size['theme_14'] ) : '15px'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_ratings_color"><?php esc_html_e('Ratings Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_1"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_1]"
                                id="wcpscu_ratings_color"
                                value="<?php echo ! empty( $ratings_color['theme_1'] ) ? esc_attr( $ratings_color['theme_1'] ) : '#FEB507'; ?>">
                        </div>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_2]"
                                id="wcpscu_ratings_color"
                                value="<?php echo ! empty( $ratings_color['theme_2'] ) ? esc_attr( $ratings_color['theme_2'] ) : '#FEB507'; ?>">
                        </div>
                        <div class="theme_3"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_3]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_3'] ) ? esc_attr( $ratings_color['theme_3'] ) : '#FEB507'; ?>">
                        </div>
                        <div class="theme_4"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_4]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_4'] ) ? esc_attr( $ratings_color['theme_4'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_5"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_5]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_5'] ) ? esc_attr( $ratings_color['theme_5'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_6"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_6]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_6'] ) ? esc_attr( $ratings_color['theme_6'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_7"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_7]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_7'] ) ? esc_attr( $ratings_color['theme_7'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_8"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_8]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_8'] ) ? esc_attr( $ratings_color['theme_8'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_9"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_9]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_9'] ) ? esc_attr( $ratings_color['theme_9'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_10"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_10]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_10'] ) ? esc_attr( $ratings_color['theme_10'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_12"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_12]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_12'] ) ? esc_attr( $ratings_color['theme_12'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_13"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_13]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_13'] ) ? esc_attr( $ratings_color['theme_13'] ) : '#feb507'; ?>">
                        </div>
                        <div class="theme_14">
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color][theme_14]"
                            id="wcpscu_ratings_color"
                            value="<?php echo ! empty( $ratings_color['theme_14'] ) ? esc_attr( $ratings_color['theme_14'] ) : '#feb507'; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="cmb-row cmb-type-colorpicker wcpscu_cart_button">
                <div class="cmb-th">
                    <label
                        for="wcpscu_cart_font_color"><?php esc_html_e('"Add to Cart" Button ', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_cart_font_color">
                            <?php esc_html_e('Font Color', WCPCSU_TEXTDOMAIN); ?>
                        </label>
                        <div class="theme_1"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_1]"
                                id="wcpscu_cart_font_color"
                                value="<?php echo ! empty( $cart_font_color['theme_1'] ) ? esc_attr( $cart_font_color['theme_1'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_2]"
                                id="wcpscu_cart_font_color"
                                value="<?php echo ! empty( $cart_font_color['theme_2'] ) ? esc_attr( $cart_font_color['theme_2'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_3"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_3]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_3'] ) ? esc_attr( $cart_font_color['theme_3'] ) : '#000000'; ?>">
                        </div>
                        <div class="theme_6"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_6]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_6'] ) ? esc_attr( $cart_font_color['theme_6'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_7"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_7]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_7'] ) ? esc_attr( $cart_font_color['theme_7'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_8"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_8]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_8'] ) ? esc_attr( $cart_font_color['theme_8'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_9"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_9]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_9'] ) ? esc_attr( $cart_font_color['theme_9'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_10"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_10]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_10'] ) ? esc_attr( $cart_font_color['theme_10'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_12"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_12]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_12'] ) ? esc_attr( $cart_font_color['theme_12'] ) : '#9192a3'; ?>">
                        </div>

                        <div class="theme_13"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_13]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_13'] ) ? esc_attr( $cart_font_color['theme_13'] ) : '#ffffff'; ?>">
                        </div>

                        <div class="theme_14"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color][theme_14]"
                            id="wcpscu_cart_font_color"
                            value="<?php echo ! empty( $cart_font_color['theme_14'] ) ? esc_attr( $cart_font_color['theme_14'] ) : '#9192a3'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_cart_bg_color"><?php esc_html_e('Button Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_1"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_1]"
                                id="wcpscu_cart_bg_color"
                                value="<?php echo ! empty( $cart_bg_color['theme_1'] ) ? esc_attr( $cart_bg_color['theme_1'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_2]"
                                id="wcpscu_cart_bg_color"
                                value="<?php echo ! empty( $cart_bg_color['theme_2'] ) ? esc_attr( $cart_bg_color['theme_2'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_3"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_3]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_3'] ) ? esc_attr( $cart_bg_color['theme_3'] ) : '#ffffff'; ?>">
                        </div>    
                        <div class="theme_6"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_6]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_6'] ) ? esc_attr( $cart_bg_color['theme_6'] ) : '#ff5500'; ?>">
                        </div>  
                        <div class="theme_7"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_7]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_7'] ) ? esc_attr( $cart_bg_color['theme_7'] ) : '#0f9cf5'; ?>">
                        </div>  
                        <div class="theme_8"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_8]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_8'] ) ? esc_attr( $cart_bg_color['theme_8'] ) : '#0f9cf5'; ?>">
                        </div>  
                        <div class="theme_9"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_9]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_9'] ) ? esc_attr( $cart_bg_color['theme_9'] ) : '#0f9cf5'; ?>">
                        </div>
                        <div class="theme_10"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_10]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_10'] ) ? esc_attr( $cart_bg_color['theme_10'] ) : '#0f9cf5'; ?>">
                        </div> 
                        <div class="theme_12"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_12]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_12'] ) ? esc_attr( $cart_bg_color['theme_12'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_13"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_13]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_13'] ) ? esc_attr( $cart_bg_color['theme_13'] ) : '#3bc492'; ?>">
                        </div> 
                        <div class="theme_14"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color][theme_14]"
                            id="wcpscu_cart_bg_color"
                            value="<?php echo ! empty( $cart_bg_color['theme_14'] ) ? esc_attr( $cart_bg_color['theme_14'] ) : '#ffffff'; ?>">
                        </div> 
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_cart_button_hover_color"><?php esc_html_e('Button Background Hover Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_1"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_1]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_1'] ) ? esc_attr( $cart_button_hover_color['theme_1'] ) : '#9A9A9A'; ?>">
                        </div>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_2]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_2'] ) ? esc_attr( $cart_button_hover_color['theme_2'] ) : '#9A9A9A'; ?>">
                        </div>
                        <div class="theme_3">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_3]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_3'] ) ? esc_attr( $cart_button_hover_color['theme_3'] ) : '#f4f4f4'; ?>">
                        </div>
                        <div class="theme_6">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_6]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_6'] ) ? esc_attr( $cart_button_hover_color['theme_6'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_7">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_7]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_7'] ) ? esc_attr( $cart_button_hover_color['theme_7'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_8">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_8]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_8'] ) ? esc_attr( $cart_button_hover_color['theme_8'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_9">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_9]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_9'] ) ? esc_attr( $cart_button_hover_color['theme_9'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_10">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_10]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_10'] ) ? esc_attr( $cart_button_hover_color['theme_10'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_12">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_12]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_12'] ) ? esc_attr( $cart_button_hover_color['theme_12'] ) : '#68b22e'; ?>">
                        </div>

                        <div class="theme_13">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_13]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_13'] ) ? esc_attr( $cart_button_hover_color['theme_13'] ) : '#3bc492'; ?>">
                        </div>

                        <div class="theme_14">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_14]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_14'] ) ? esc_attr( $cart_button_hover_color['theme_14'] ) : '#ff0000'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_cart_button_hover_font_color"><?php esc_html_e('Button Hover Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_1"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_font_color][theme_1]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_1'] ) ? esc_attr( $cart_button_hover_font_color['theme_1'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_font_color][theme_2]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_2'] ) ? esc_attr( $cart_button_hover_font_color['theme_2'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_3"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_3"
                                name="wcpscu[cart_button_hover_font_color][theme_3]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_3'] ) ? esc_attr( $cart_button_hover_font_color['theme_3'] ) : '#000000'; ?>">
                        </div>
                        <div class="theme_6"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_6"
                                name="wcpscu[cart_button_hover_font_color][theme_6]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_6'] ) ? esc_attr( $cart_button_hover_font_color['theme_6'] ) : '#e14c02'; ?>">
                        </div>
                        <div class="theme_7"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_7"
                                name="wcpscu[cart_button_hover_font_color][theme_7]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_7'] ) ? esc_attr( $cart_button_hover_font_color['theme_7'] ) : '#e14c02'; ?>">
                        </div>
                        <div class="theme_8"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_8"
                                name="wcpscu[cart_button_hover_font_color][theme_8]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_8'] ) ? esc_attr( $cart_button_hover_font_color['theme_8'] ) : '#0079c6'; ?>">
                        </div>
                        <div class="theme_9"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_9"
                                name="wcpscu[cart_button_hover_font_color][theme_9]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_9'] ) ? esc_attr( $cart_button_hover_font_color['theme_9'] ) : '#0079c6'; ?>">
                        </div>
                        <div class="theme_10"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_10"
                                name="wcpscu[cart_button_hover_font_color][theme_10]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_10'] ) ? esc_attr( $cart_button_hover_font_color['theme_10'] ) : '#0079c6'; ?>">
                        </div>
                        <div class="theme_12"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_12"
                                name="wcpscu[cart_button_hover_font_color][theme_12]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_12'] ) ? esc_attr( $cart_button_hover_font_color['theme_12'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_13"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_13"
                                name="wcpscu[cart_button_hover_font_color][theme_13]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_13'] ) ? esc_attr( $cart_button_hover_font_color['theme_13'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_14"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker theme_14"
                                name="wcpscu[cart_button_hover_font_color][theme_14]" id="wcpscu_cart_button_hover_font_color"
                                value="<?php echo ! empty( $cart_button_hover_font_color['theme_14'] ) ? esc_attr( $cart_button_hover_font_color['theme_14'] ) : '#ffffff'; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="cmb-row cmb-type-colorpicker wcpscu_action_icon">
                <div class="cmb-th">
                    <label
                        for="wcpscu_cart_icon_font_color"><?php esc_html_e('Action Icon ', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_action_icon_font_color">
                            <?php esc_html_e('Color', WCPCSU_TEXTDOMAIN); ?>
                        </label>
                        <div class="theme_4"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_4]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_4'] ) ? esc_attr( $action_icon_font_color['theme_4'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_5">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_5]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_5'] ) ? esc_attr( $action_icon_font_color['theme_5'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_6">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_6]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_6'] ) ? esc_attr( $action_icon_font_color['theme_6'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_7">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_7]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_7'] ) ? esc_attr( $action_icon_font_color['theme_7'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_8">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_8]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_8'] ) ? esc_attr( $action_icon_font_color['theme_8'] ) : '#9192a3'; ?>">
                        </div>
                        <div class="theme_9">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_9]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_9'] ) ? esc_attr( $action_icon_font_color['theme_9'] ) : '#9192a3'; ?>">
                        </div>
                        <div class="theme_10">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_10]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_10'] ) ? esc_attr( $action_icon_font_color['theme_10'] ) : '#9192a3'; ?>">
                        </div>
                        <div class="theme_11">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_11]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_11'] ) ? esc_attr( $action_icon_font_color['theme_11'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_12">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_12]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_12'] ) ? esc_attr( $action_icon_font_color['theme_12'] ) : '#9192a3'; ?>">
                        </div>
                        <div class="theme_13">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_13]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_13'] ) ? esc_attr( $action_icon_font_color['theme_13'] ) : '#9192a3'; ?>">
                        </div>
                        <div class="theme_14">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_font_color][theme_14]"
                                id="wcpscu_action_icon_font_color"
                                value="<?php echo ! empty( $action_icon_font_color['theme_14'] ) ? esc_attr( $action_icon_font_color['theme_14'] ) : '#9192a3'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_action_icon_hover_color"><?php esc_html_e('hover Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_4"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_4]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_4'] ) ? esc_attr( $action_icon_hover_color['theme_4'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_5"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_5]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_5'] ) ? esc_attr( $action_icon_hover_color['theme_5'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_6"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_6]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_6'] ) ? esc_attr( $action_icon_hover_color['theme_6'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_7"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_7]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_7'] ) ? esc_attr( $action_icon_hover_color['theme_7'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_8"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_8]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_8'] ) ? esc_attr( $action_icon_hover_color['theme_8'] ) : '#0f9cf5'; ?>">
                        </div>
                        <div class="theme_9"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_9]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_9'] ) ? esc_attr( $action_icon_hover_color['theme_9'] ) : '#0f9cf5'; ?>">
                        </div>
                        <div class="theme_10"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_10]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_10'] ) ? esc_attr( $action_icon_hover_color['theme_10'] ) : '#0f9cf5'; ?>">
                        </div>
                        <div class="theme_11"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_11]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_11'] ) ? esc_attr( $action_icon_hover_color['theme_11'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_12"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_12]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_12'] ) ? esc_attr( $action_icon_hover_color['theme_12'] ) : '#68b22e'; ?>">
                        </div>
                        <div class="theme_13"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_13]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_13'] ) ? esc_attr( $action_icon_hover_color['theme_13'] ) : '#3bc492'; ?>">
                        </div>
                        <div class="theme_14"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[action_icon_hover_color][theme_14]"
                                id="wcpscu_action_icon_hover_color"
                                value="<?php echo ! empty( $action_icon_hover_color['theme_14'] ) ? esc_attr( $action_icon_hover_color['theme_14'] ) : '#ff0000'; ?>">
                        </div>
                    </div>
                    
                </div>
            </div>


            <!-- Sale ribbon Style-->
            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_ribbon_bg_color"><?php esc_html_e('"Ribbon" Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="theme_1"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_1]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_1'] ) ? esc_attr( $ribbon_bg_color['theme_1'] ) : '#ff5500'; ?>">
                    </div>
                    <div class="theme_2"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_2]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_2'] ) ? esc_attr( $ribbon_bg_color['theme_2'] ) : '#ff5500'; ?>">
                    </div>
                    <div class="theme_3"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_3]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_3'] ) ? esc_attr( $ribbon_bg_color['theme_3'] ) : '#0f9cf5'; ?>">
                    </div>
                    <div class="theme_4"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_4]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_4'] ) ? esc_attr( $ribbon_bg_color['theme_4'] ) : '#ff5500'; ?>">
                    </div>
                    <div class="theme_5"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_5]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_5'] ) ? esc_attr( $ribbon_bg_color['theme_5'] ) : '#ff5500'; ?>">
                    </div>
                    <div class="theme_6"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_6]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_6'] ) ? esc_attr( $ribbon_bg_color['theme_6'] ) : '#ff5500'; ?>">
                    </div>
                    <div class="theme_7"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_7]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_7'] ) ? esc_attr( $ribbon_bg_color['theme_7'] ) : '#00b46a'; ?>">
                    </div>
                    <div class="theme_8"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_8]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_8'] ) ? esc_attr( $ribbon_bg_color['theme_8'] ) : '#00b46a'; ?>">
                    </div>
                    <div class="theme_9"> 
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_9]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_9'] ) ? esc_attr( $ribbon_bg_color['theme_9'] ) : '#00b46a'; ?>">
                    </div>
                    <div class="theme_10">
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color][theme_10]"
                            id="wcpscu_ribbon_bg_color"
                            value="<?php echo ! empty( $ribbon_bg_color['theme_10'] ) ? esc_attr( $ribbon_bg_color['theme_10'] ) : '#00b46a'; ?>">
                    </div>
                </div>
            </div>

            <div class="cmb-row cmb-type-colorpicker wcpscu_quickView_button">
                <div class="cmb-th">
                    <label for="wcpscu_ribbon_font_color"><?php esc_html_e('"Quick View" Button', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation-item">
                        <label for="wcpscu[quick_view_button_color]">
                            <?php esc_html_e('Font Color', WCPCSU_TEXTDOMAIN); ?>
                        </label>
                        <div class="theme_10">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[quick_view_button_color][theme_10]"
                                id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_button_color['theme_10'] ) ? esc_attr( $quick_view_button_color['theme_10'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_11">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[quick_view_button_color][theme_11]"
                                id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_button_color['theme_11'] ) ? esc_attr( $quick_view_button_color['theme_11'] ) : '#ffffff'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_ribbon_font_color"><?php esc_html_e('Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_10"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[quick_view_button_back_color][theme_10]" id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_button_back_color['theme_10'] ) ? esc_attr( $quick_view_button_back_color['theme_10'] ) : '#363940'; ?>">
                        </div>
                        <div class="theme_11">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[quick_view_button_back_color][theme_11]" id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_button_back_color['theme_11'] ) ? esc_attr( $quick_view_button_back_color['theme_11'] ) : '#000000'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu[quick_view_button_hover_color]">
                            <?php esc_html_e('Hover Font Color', WCPCSU_TEXTDOMAIN); ?>
                        </label>
                        <div class="theme_10">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[quick_view_button_hover_color][theme_10]"
                                id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_button_hover_color['theme_10'] ) ? esc_attr( $quick_view_button_hover_color['theme_10'] ) : '#ffffff'; ?>">
                        </div>
                        <div class="theme_11">
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[quick_view_button_hover_color][theme_11]"
                                id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_button_hover_color['theme_11'] ) ? esc_attr( $quick_view_button_hover_color['theme_11'] ) : '#ffffff'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_ribbon_font_color"><?php esc_html_e('Hover Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_10"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[quick_view_button_hover_back_color][theme_10]" id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_button_hover_back_color['theme_10'] ) ? esc_attr( $quick_view_button_hover_back_color['theme_10'] ) : '#000000'; ?>">
                        </div>
                        <div class="theme_11"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[quick_view_button_hover_back_color][theme_11]" id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_button_hover_back_color['theme_11'] ) ? esc_attr( $quick_view_button_hover_back_color['theme_11'] ) : '#000000'; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end cmb2-metabox -->
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-4