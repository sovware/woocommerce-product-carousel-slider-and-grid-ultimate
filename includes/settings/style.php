<!--TAB 4  Style setting -->
<div id="lcsp-tab-4" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label
                        for="wcpscu_header_title_font_size"><?php esc_html_e('Header Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-header-font-styles">
                        <label for="wcpscu_header_title_font_size"><?php esc_html_e('Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="input-group">
                            <input type="text" class="cmb2-text-small" name="wcpscu[header_font_size]"
                                id="wcpscu_header_title_font_size"
                                value="<?php if(!empty($header_font_size)) { echo $header_font_size; }else { echo "24";} ?>"
                                placeholder="e.g. 20">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_carousel_title_font_color"><?php esc_html_e('Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[header_font_color]"
                            id="wcpscu_carousel_title_font_color"
                            value="<?php if(!empty($header_font_color)) { echo $header_font_color; } else { echo "#303030"; } ?>">
                    </div>
                </div>
            </div>

            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label
                        for="wcpscu_title_font_size"><?php esc_html_e('Product Title Font', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td theme_1">
                    <div class="cmb-header-font-styles">
                        <label for="wcpscu_header_title_font_size"><?php esc_html_e('Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="input-group">
                            <input type="text" class="cmb2-text-small" name="wcpscu[title_font_size][theme_1]"
                                id="wcpscu_title_font_size"
                                value="<?php echo ! empty( $title_font_size['theme_1'] ) ? esc_attr( $title_font_size['theme_1'] ) : 16; ?>"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"><?php esc_html_e('px', WCPCSU_TEXTDOMAIN); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_title_font_color"><?php esc_html_e( 'Font Color', WCPCSU_TEXTDOMAIN ); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color][theme_1]"
                            id="wcpscu_title_font_color"
                            value="<?php echo ! empty( $title_font_color['theme_1'] ) ? esc_attr( $title_font_color['theme_1'] ) : '#363940'; ?>">
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_title_hover_font_color"><?php esc_html_e('Hover Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker"
                            name="wcpscu[title_hover_font_color][theme_1]" id="wcpscu_title_hover_font_color"
                            value="<?php echo ! empty( $title_hover_font_color['theme_1'] ) ? esc_attr( $title_hover_font_color['theme_1'] ) : '#ff5500'; ?>">
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
                            <input type="text" class="cmb2-text-small " name="wcpscu[price_font_size]"
                                id="wcpscu_price_font_size"
                                value="<?php if(!empty($price_font_size)) { echo $price_font_size; } else { echo "14"; } ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">px</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_price_font_color"><?php esc_html_e('Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[price_font_color]"
                            id="wcpscu_price_font_color"
                            value="<?php if(!empty($price_font_color)) { echo $price_font_color; } else { echo "#ff5500"; } ?>">
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
                        <label for="wcpscu_header_title_font_size">Ratings Size</label>
                        <div class="input-group">
                            <input type="text" class="cmb2-text-small" name="wcpscu[ratings_size]"
                                id="wcpscu_ratings_size"
                                value="<?php if(!empty($ratings_size)) { echo esc_attr($ratings_size); } else { echo "1em"; } ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">em</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_ratings_color"><?php esc_html_e('Ratings Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color]"
                            id="wcpscu_ratings_color"
                            value="<?php if(!empty($ratings_color)) { echo $ratings_color; } else { echo "#FEB507"; } ?>">
                    </div>
                </div>
            </div>

            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label
                        for="wcpscu_cart_font_color"><?php esc_html_e('"Add to Cart" Button ', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_cart_font_color">
                            <?php esc_html_e('Font Color', WCPCSU_TEXTDOMAIN); ?>
                        </label>
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color]"
                            id="wcpscu_cart_font_color"
                            value="<?php if(!empty($cart_font_color)) { echo $cart_font_color; } else { echo "#ffffff"; } ?>">
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_cart_bg_color"><?php esc_html_e('Button Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color]"
                            id="wcpscu_cart_bg_color"
                            value="<?php if(!empty($cart_bg_color)) { echo $cart_bg_color; } else { echo "#ff5500"; } ?>">
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_cart_button_hover_color"><?php esc_html_e('Button Background Hover Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker"
                            name="wcpscu[cart_button_hover_color]" id="wcpscu_cart_button_hover_color"
                            value="<?php if(!empty($cart_button_hover_color)) { echo $cart_button_hover_color; } else { echo "#9A9A9A"; } ?>">
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_cart_button_hover_font_color"><?php esc_html_e('Button Hover Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker"
                            name="wcpscu[cart_button_hover_font_color]" id="wcpscu_cart_button_hover_font_color"
                            value="<?php if(!empty($cart_button_hover_font_color)) { echo $cart_button_hover_font_color; } else { echo "#ffffff"; } ?>">
                    </div>
                </div>
            </div>


            <!-- Sale ribbon Style-->
            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label
                        for="wcpscu_ribbon_bg_color"><?php esc_html_e('"Ribbon" Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color]"
                        id="wcpscu_ribbon_bg_color"
                        value="<?php if(!empty($ribbon_bg_color)) { echo $ribbon_bg_color; } else { echo "#A4C741"; } ?>">
                </div>
            </div>

            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label
                        for="wcpscu_ribbon_font_color"><?php esc_html_e('"Quick View" Icon', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation-item">
                        <label for="wcpscu[nav_arrow_color]">
                            <?php esc_html_e('Icon Color', WCPCSU_TEXTDOMAIN); ?>
                        </label>
                        <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[quick_view_icon_color]"
                            id="wcpscu_ribbon_font_color"
                            value="<?php if(!empty($quick_view_icon_color)) { echo $quick_view_icon_color; } else { echo "#fff"; }  ?>">
                    </div>
                    <div class="cmb-navigation-item">
                        <label
                            for="wcpscu_ribbon_font_color"><?php esc_html_e('Icon Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-small cpa-color-picker"
                            name="wcpscu[quick_view_icon_back_color]" id="wcpscu_ribbon_font_color"
                            value="<?php if(!empty($quick_view_icon_back_color)) { echo $quick_view_icon_back_color; } else { echo "#ff5500"; }  ?>">
                    </div>
                </div>
            </div>
        </div> <!-- end cmb2-metabox -->
        <div class="cmb2-save-setting">
            <button type="button">Save Settings</button>
        </div>
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-4