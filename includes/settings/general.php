<?php
if ( ! defined( 'ABSPATH' ) ) die( 'Are you cheating??? Accessing this file directly is forbidden.' );
$h_title_show         = !empty($h_title_show) ? $h_title_show : 'no';
$display_full_title   = !empty($display_full_title) ? $display_full_title : 'yes';
$ribbon = !empty($ribbon) ? $ribbon : 'discount';
$header = !empty($header) ? $header : 'center';
$total_products_label = (!empty($layout) && 'grid' == $layout) ? __("Products Per Page",WCPCSU_TEXTDOMAIN) : __("Total Products to Display",WCPCSU_TEXTDOMAIN);
?>

<div id="lcsp-tab-5" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">

            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_slider_title"><?php esc_html_e('Layout', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <select  name="wcpscu[layout]" id="lcg">
                        <option value="carousel">Carousel</option>
                        <option value="grid" <?php if(!empty($layout) && $layout == "grid"){ echo "selected";}?>>Grid</option>
                    </select>
                </div>
            </div>

            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ic">
                        <?php esc_html_e('Display Full Title', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[display_full_title]"
                                   id="wcpscu[display_full_title]1"
                                   value="yes" <?php checked('yes', $display_full_title, true);  ?>>
                            <label for="wcpscu[display_full_title]1">
                                <?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[display_full_title]"
                                   id="wcpscu[display_full_title]2"
                                   value="no" <?php checked('no', $display_full_title, true);  ?>>
                            <label for="wcpscu[display_full_title]2">
                                <?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Total Products -->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_total_products" id="wcpscu_total_pdt"><?php echo !empty($total_products_label) ? $total_products_label : __("Total Products to Display",WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[total_products]" id="wcpscu_total_products" value="<?php echo !empty($total_products) ? intval($total_products) : 12; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('How many products to display in the carousel slider', WCPCSU_TEXTDOMAIN); ?></p>
                </div>
            </div>

            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="lcsp_slider_title"><?php esc_html_e('Header Title', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-medium"
                           name="wcpscu[header_title]"
                           id="lcsp_slider_title"
                           value="<?php echo !empty($header_title) ? esc_attr($header_title) : ''; ?>">
                </div>
            </div>

            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ic">
                        <?php esc_html_e('Display Header', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[h_title_show]"
                                   id="wcpscu[h_title_show]1"
                                   value="yes" <?php checked('yes', $h_title_show, true);  ?>>
                            <label for="wcpscu[h_title_show]1">
                                <?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[h_title_show]"
                                   id="wcpscu[h_title_show]2"
                                   value="no" <?php checked('no', $h_title_show, true);  ?>>
                            <label for="wcpscu[h_title_show]2">
                                <?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="cmb-row cmb-type-multicheck">
                <div class="cmb-th">
                    <label for="wcpscup_products_type"><?php esc_html_e('Header Position', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">

                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[header]" id="center"
                                   value="center" <?php if( empty($header) || $header == "center" )  {echo "checked"; } ?>
                            >
                            <label for="center"><?php esc_html_e('Center', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>


                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[header]" id="left"
                                   value="left" <?php checked('left', $header); ?>
                            >
                            <label for="left"><?php esc_html_e('Left', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>

                        <li>
                            <input type="radio" class="cmb2-option"
                                   name="wcpscu[header]" id="right"
                                   value="right" <?php checked('right', $header); ?>
                            >
                            <label for="right"><?php esc_html_e('Right', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>

                    </ul>

                </div>
            </div>

            <!--Display Product Title-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu_display_title"><?php esc_html_e('Display Product Title', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[display_title]" id="wcpscu_display_title1"
                                   value="yes" <?php if(empty($display_title) || 'yes' === $display_title) { echo 'checked'; } ?>
                            >
                            <label for="wcpscu_display_title1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[display_title]" id="wcpscu_display_title2"
                                   value="no" <?php if (!empty($display_title)) { checked('no', $display_title); } ?>
                            >
                            <label for="wcpscu_display_title2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                </div>
            </div>

            <!-- Products type-->
            <div class="cmb-row cmb-type-multicheck">
                <div class="cmb-th">
                    <label for="wcpscu_products_type"><?php esc_html_e('Products Type', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li><input type="radio" class="cmb2-option" name="wcpscu[products_type]" id="wcpscu_products_type" value="latest" <?php if( (!empty($products_type) && 'latest' == $products_type) || empty($products_type)) { echo 'checked';} ?>> <label for="wcpscu_products_type"><?php esc_html_e('Latest Products', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[products_type]" id="wcpscu_products_type9" value="older" <?php if(!empty($products_type)) { checked('older', $products_type);}?>> <label for="wcpscu_products_type9"><?php esc_html_e('Older Products', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[products_type]" id="wcpscu_products_type3" value="featured" <?php if(!empty($products_type)) { checked('featured', $products_type);} ?>> <label for="wcpscu_products_type3"><?php esc_html_e('Featured Products', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                    <p class="cmb2-metabox-description"><?php esc_html_e('What type of products to display in the carousel slider', WCPCSU_TEXTDOMAIN); ?></p>
                    <ul>
                        <p style="font-size: 14px; margin: 13px 0 5px 0; font-style: italic;">Following options available in <a href="https://aazztech.com/product/woocommerce-product-carousel-slider-grid-ultimate-pro" target="_blank">Pro Version</a>:</p>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="onsale"> <label for="wcpscu_ds_products_type"><?php esc_html_e('On Sale Products', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="bestselling"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Best Selling Products', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="bestselling"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Top Rated Products', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="bestselling"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Random Products', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="category"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Category Products', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li class="productsbyidw"><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="productsbyid"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Products by ID', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="productsbysku"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Products by SKU', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="productsbytag"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Products by Tags', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="productsbyyear"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Products by Year', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input disabled type="radio" class="cmb2-option" name="wcpscu_products_type" id="wcpscu_ds_products_type" value="productsbymonth"> <label for="wcpscu_ds_products_type"><?php esc_html_e('Products by Month', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                </div>
            </div>

            <!--Show "sale' Ribbon for the product on sale-->
            <div class="cmb-row cmb-type-radio" id="sale_ribbon_wrapper">
                <div class="cmb-th">
                    <label for="wcpscu_display_sale_ribbon"><?php esc_html_e('Display "Sale" Ribbon', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_sale_ribbon]" id="wcpscu_display_sale_ribbon1" value="yes" <?php if(empty($display_sale_ribbon) || 'yes' === $display_sale_ribbon) { echo 'checked'; } ?>> <label for="wcpscu_display_sale_ribbon1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_sale_ribbon]" id="wcpscu_display_sale_ribbon2" value="no" <?php if (!empty($display_sale_ribbon)) { checked('no', $display_sale_ribbon); } ?>> <label for="wcpscu_display_sale_ribbon2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                    <p class="cmb2-metabox-description"><?php esc_html_e('Whether to show the "Sale" ribbon for On-Sale products or not', WCPCSU_TEXTDOMAIN); ?></p>

                    <!--Text for the sale ribbon-->
                    <div id="sale_ribbon_text_wrapper">
                        <input type="text" class="cmb2-text-medium" name="wcpscu[sale_ribbon_text]" id="wcpscu_sale_ribbon_text"
                               value="<?php echo !empty($sale_ribbon_text) ?  $sale_ribbon_text : esc_html__('Sale!', WCPCSU_TEXTDOMAIN); ?>"
                               placeholder="e.g. Sale!">
                        <p class="cmb2-metabox-description">
                            <?php esc_html_e('Enter the text for the sale ribbon. Default text is "Sale!".', WCPCSU_TEXTDOMAIN); ?>
                        </p>
                    </div>

                </div>
            </div>



            <!--Display "Featured" Ribbon-->
            <div class="cmb-row cmb-type-radio" id="feature_ribbon_wrapper">
                <div class="cmb-th">
                    <label for="wcpscu_display_featured_ribbon"><?php esc_html_e('Display "Featured" Ribbon', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_featured_ribbon]" id="wcpscu_display_featured_ribbon1" value="yes" <?php if(empty($display_featured_ribbon) || 'yes' === $display_featured_ribbon) { echo 'checked'; } ?>> <label for="wcpscu_display_featured_ribbon1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_featured_ribbon]" id="wcpscu_display_featured_ribbon2" value="no" <?php if (!empty($display_featured_ribbon)) { checked('no', $display_featured_ribbon); } ?>> <label for="wcpscu_display_featured_ribbon2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                    <p class="cmb2-metabox-description"><?php esc_html_e('Whether to show the "Featured" ribbon for featured products or not.', WCPCSU_TEXTDOMAIN); ?></p>
                    <!-- Text for the feature ribbon -->
                    <div id="feature_ribbon_text_wrapper">
                        <input type="text" class="cmb2-text-medium" name="wcpscu[feature_ribbon_text]" id="wcpscu_feature_ribbon_text"
                               value="<?php echo !empty($feature_ribbon_text) ?  $feature_ribbon_text : esc_html__('Featured!', WCPCSU_TEXTDOMAIN); ?>"
                               placeholder="e.g. Featured!">
                        <p class="cmb2-metabox-description">
                            <?php esc_html_e('Enter the text for the featured ribbon. Default text is "Featured!".', WCPCSU_TEXTDOMAIN); ?>
                        </p>
                    </div>
                </div>
            </div>


            <!--Show ribbon for sold out products-->
            <div class="cmb-row cmb-type-radio" id="sold_out_ribbon_wrapper">
                <div class="cmb-th">
                    <label for="wcpscu_display_sold_out_ribbon"><?php esc_html_e('Display the "Sold Out" Ribbon', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_sold_out_ribbon]" id="wcpscu_display_sold_out_ribbon1" value="yes" <?php if(empty($display_sold_out_ribbon) || 'yes' === $display_sold_out_ribbon) { echo 'checked'; } ?>> <label for="wcpscu_display_sold_out_ribbon1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label></li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_sold_out_ribbon]" id="wcpscu_display_sold_out_ribbon2" value="no" <?php if (!empty($display_sold_out_ribbon)) { checked('no', $display_sold_out_ribbon); } ?>> <label for="wcpscu_display_sold_out_ribbon2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                    <p class="cmb2-metabox-description"><?php esc_html_e('Whether to display the "Sold Out" ribbon for out-of-stock products or not', WCPCSU_TEXTDOMAIN); ?></p>

                    <!-- Text for the sold out ribbon -->

                    <div id="sold_out_ribbon_text_wrapper">
                        <input type="text" class="cmb2-text-medium" name="wcpscu[sold_out_ribbon_text]" id="wcpscu_sold_out_ribbon_text"
                               value="<?php echo !empty($sold_out_ribbon_text) ?  $sold_out_ribbon_text : esc_html__('Sold Out!', WCPCSU_TEXTDOMAIN); ?>"
                               placeholder="e.g. Sold Out!">
                        <p class="cmb2-metabox-description">
                            <?php esc_html_e('Enter the text for the sold out ribbon. Default text is "Sold Out!".', WCPCSU_TEXTDOMAIN); ?>
                        </p>
                    </div>

                </div>
            </div>

            <!--Display Product Price-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu_display_price"><?php esc_html_e('Display Product Price', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_price]" id="wcpscu_display_price1" value="yes" <?php if(empty($display_price) || 'yes' === $display_price) { echo 'checked'; } ?>
                            >
                            <label for="wcpscu_display_price1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_price]" id="wcpscu_display_price2"
                                   value="no" <?php if (!empty($display_price)) { checked('no', $display_price); } ?>
                            >
                            <label for="wcpscu_display_price2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Display Product Ratings-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu_display_ratings"><?php esc_html_e('Display Product Ratings', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[display_ratings]" id="wcpscu_display_ratings1"
                                   value="yes" <?php if(empty($display_ratings) || 'yes' === $display_ratings) { echo 'checked'; } ?>
                            >
                            <label for="wcpscu_display_ratings1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[display_ratings]" id="wcpscu_display_ratings2"
                                   value="no" <?php if (!empty($display_ratings)) { checked('no', $display_ratings); } ?>
                            >
                            <label for="wcpscu_display_ratings2"><?php _e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Display "Add to Cart" button-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu_display_cart"><?php esc_html_e('Display "Add to Cart" button', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[display_cart]" id="wcpscu_display_cart1"
                                   value="yes" <?php if(empty($display_cart) || 'yes' === $display_cart) { echo 'checked'; } ?>
                            >
                            <label for="wcpscu_display_cart1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[display_cart]" id="wcpscu_display_cart2"
                                   value="no" <?php if (!empty($display_cart)) { checked('no', $display_cart); } ?>
                            >
                            <label for="wcpscu_display_cart2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Enable image cropping and resizing-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu_img_crop"><?php esc_html_e('Image Resize & Crop', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">
                        <li><input type="radio" class="cmb2-option" name="wcpscu[img_crop]" id="wcpscu_img_crop1"
                                   value="yes" <?php if( empty($img_crop) || $img_crop === "yes" ) {echo "checked"; } ?>
                            >
                            <label for="wcpscu_img_crop1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option" name="wcpscu[img_crop]" id="wcpscu_img_crop2" value="no" <?php if( !empty($img_crop)) { checked( 'no', $img_crop); } ?>> <label for="wcpscu_img_crop2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                    <p class="cmb2-metabox-description"><?php esc_html_e('If the product images are not in the same size, this feature is helpful. It automatically resizes and crops. Note: your image must be higher than/equal to the cropping size set below. Otherwise, you may need to enable image upscaling feature from the settings below.', WCPCSU_TEXTDOMAIN); ?></p>
                </div>
            </div>

            <!--Image width-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_crop_image_width"><?php esc_html_e('Image Width', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[crop_image_width]" id="wcpscu_crop_image_width" value="<?php echo !empty($crop_image_width) ? intval($crop_image_width) : 300; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('Image cropping width', WCPCSU_TEXTDOMAIN); ?></p>
                </div>
            </div>

            <!--Image height-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_crop_image_height"><?php esc_html_e('Image Height', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[crop_image_height]" id="wcpscu_crop_image_height" value="<?php echo !empty($crop_image_height) ? intval($crop_image_height) : 300; ?>">
                    <p class="cmb2-metabox-description"><?php esc_html_e('Image cropping height', WCPCSU_TEXTDOMAIN); ?></p>
                </div>
            </div>
            </div>

        </div> <!-- end cmb2-metabox -->
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-1 -->
