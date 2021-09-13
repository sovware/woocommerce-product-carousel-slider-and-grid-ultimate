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
                                value="<?php if(!empty($header_font_size)) { echo $header_font_size; }else { echo "24";} ?>"
                                placeholder="e.g. 20">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">px</span>
                                </div>
                            </div>
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
                                value="<?php echo ! empty( $ratings_size['theme_1'] ) ? esc_attr( $ratings_size['theme_1'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_2" name="wcpscu[ratings_size][theme_2]"
                                id="wcpscu_ratings_size"
                                value="<?php echo ! empty( $ratings_size['theme_2'] ) ? esc_attr( $ratings_size['theme_2'] ) : '16'; ?>">
                            <input type="text" class="cmb2-text-small theme_3" name="wcpscu[ratings_size][theme_3]"
                                id="wcpscu_ratings_size"
                                value="<?php echo ! empty( $ratings_size['theme_3'] ) ? esc_attr( $ratings_size['theme_3'] ) : '16'; ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon">px</span>
                                </div>
                            </div>
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
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_cart_button_hover_color"><?php esc_html_e('Button Background Hover Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_1"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_1]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_1'] ) ? esc_attr( $cart_button_hover_color['theme_1'] ) : '#ff5500'; ?>">
                        </div>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_2]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_2'] ) ? esc_attr( $cart_button_hover_color['theme_2'] ) : '#9A9A9A'; ?>">
                        </div>
                        <div class="theme_3">
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[cart_button_hover_color][theme_3]" id="wcpscu_cart_button_hover_color"
                                value="<?php echo ! empty( $cart_button_hover_color['theme_3'] ) ? esc_attr( $cart_button_hover_color['theme_3'] ) : '#ffffff'; ?>">
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
                </div>
            </div>

            <div class="cmb-row cmb-type-colorpicker theme_2">
                <div class="cmb-th">
                    <label
                        for="wcpscu_ribbon_font_color"><?php esc_html_e('"Quick View" Icon', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-navigation-item">
                        <label for="wcpscu[nav_arrow_color]">
                            <?php esc_html_e('Icon Color', WCPCSU_TEXTDOMAIN); ?>
                        </label>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[quick_view_icon_color][theme_2]"
                                id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_icon_color['theme_2'] ) ? esc_attr( $quick_view_icon_color['theme_2'] ) : '#ffffff'; ?>">
                        </div>
                    </div>
                    <div class="cmb-navigation-item">
                        <label for="wcpscu_ribbon_font_color"><?php esc_html_e('Icon Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                        <div class="theme_2"> 
                            <input type="text" class="cmb2-text-small cpa-color-picker"
                                name="wcpscu[quick_view_icon_back_color][theme_2]" id="wcpscu_ribbon_font_color"
                                value="<?php echo ! empty( $quick_view_icon_back_color['theme_2'] ) ? esc_attr( $quick_view_icon_back_color['theme_2'] ) : '#ff5500'; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end cmb2-metabox -->
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-4