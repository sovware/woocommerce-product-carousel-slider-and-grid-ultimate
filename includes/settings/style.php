<!--TAB 4  Style setting -->
<div id="lcsp-tab-4" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_header_title_font_size"><?php esc_html_e('Header Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[header_font_size]" id="wcpscu_header_title_font_size" value="<?php if(!empty($header_font_size)) { echo $header_font_size; }else { echo "24px";} ?>"
                           placeholder="e.g. 20px">
                </div>
            </div>


            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_carousel_title_font_color"><?php esc_html_e('Header Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[header_font_color]" id="wcpscu_carousel_title_font_color" value="<?php if(!empty($header_font_color)) { echo $header_font_color; } else { echo "#303030"; } ?>">
                </div>
            </div>






            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_title_font_size"><?php esc_html_e('Product Title Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[title_font_size]" id="wcpscu_title_font_size" value="<?php if(!empty($title_font_size)) { echo $title_font_size; } else { echo "16px"; } ?>">
                </div>
            </div>


            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_title_font_color"><?php esc_html_e('Product Title Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_font_color]" id="wcpscu_title_font_color" value="<?php if(!empty($title_font_color)) { echo $title_font_color; } else { echo "#363940"; } ?>">
                </div>
            </div>


            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_title_hover_font_color"><?php esc_html_e('Product Title Hover Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[title_hover_font_color]" id="wcpscu_title_hover_font_color" value="<?php if(!empty($title_hover_font_color)) { echo $title_hover_font_color; } else { echo "#ff5500"; } ?>">
                </div>
            </div>




            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_price_font_size"><?php esc_html_e('Product Price Font Size', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small " name="wcpscu[price_font_size]" id="wcpscu_price_font_size"
                           value="<?php if(!empty($price_font_size)) { echo $price_font_size; } else { echo "14px"; } ?>"
                    >
                </div>
            </div>


            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_price_font_color"><?php esc_html_e('Product Price Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[price_font_color]" id="wcpscu_price_font_color" value="<?php if(!empty($price_font_color)) { echo $price_font_color; } else { echo "#ff5500"; } ?>">
                </div>
            </div>




            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_ratings_color"><?php esc_html_e('Product Ratings Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ratings_color]" id="wcpscu_ratings_color" value="<?php if(!empty($ratings_color)) { echo $ratings_color; } else { echo "#FEB507"; } ?>">
                </div>
            </div>

            <!--Product Ratings Size-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_ratings_size"><?php esc_html_e('Product Ratings Size', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[ratings_size]" id="wcpscu_ratings_size"
                           value="<?php if(!empty($ratings_size)) { echo esc_attr($ratings_size); } else { echo "1em"; } ?>"
                    >
                </div>
            </div>

            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_cart_font_color"><?php esc_html_e('"Add to Cart" Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_font_color]" id="wcpscu_cart_font_color" value="<?php if(!empty($cart_font_color)) { echo $cart_font_color; } else { echo "#ffffff"; } ?>">
                </div>
            </div>


            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_cart_bg_color"><?php esc_html_e('"Add to Cart" Button Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_bg_color]" id="wcpscu_cart_bg_color" value="<?php if(!empty($cart_bg_color)) { echo $cart_bg_color; } else { echo "#ff5500"; } ?>">
                </div>
            </div>


            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_cart_button_hover_color"><?php esc_html_e('"Add to Cart" Button Hover Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_button_hover_color]" id="wcpscu_cart_button_hover_color" value="<?php if(!empty($cart_button_hover_color)) { echo $cart_button_hover_color; } else { echo "#9A9A9A"; } ?>">
                </div>
            </div>


            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_cart_button_hover_font_color"><?php esc_html_e('"Add to Cart" Hover Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[cart_button_hover_font_color]" id="wcpscu_cart_button_hover_font_color" value="<?php if(!empty($cart_button_hover_font_color)) { echo $cart_button_hover_font_color; } else { echo "#ffffff"; } ?>">
                </div>
            </div>

            <!-- Sale ribbon Style-->
            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_ribbon_bg_color"><?php esc_html_e('Ribbon Background Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_bg_color]" id="wcpscu_ribbon_bg_color" value="<?php if(!empty($ribbon_bg_color)) { echo $ribbon_bg_color; } else { echo "#A4C741"; } ?>">
                </div>
            </div>


            <div class="cmb-row cmb-type-colorpicker">
                <div class="cmb-th">
                    <label for="wcpscu_ribbon_font_color"><?php esc_html_e('Ribbon Font Color', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small cpa-color-picker" name="wcpscu[ribbon_font_color]" id="wcpscu_ribbon_font_color" value="<?php if(!empty($ribbon_font_color)) { echo $ribbon_font_color; } else { echo "#fff"; }  ?>">
                </div>
            </div>







        </div> <!-- end cmb2-metabox -->
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-4