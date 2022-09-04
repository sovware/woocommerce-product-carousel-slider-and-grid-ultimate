<?php
if ( ! defined( 'ABSPATH' ) ) die( 'Are you cheating??? Accessing this file directly is forbidden.' );
$layout                     = ! empty( $layout ) ? $layout : 'carousel';
$h_title_show               = ! empty( $h_title_show ) ? $h_title_show : 'no';
$display_full_title         = ! empty( $display_full_title ) ? $display_full_title : 'yes';
$ribbon                     = ! empty( $ribbon ) ? $ribbon : 'discount';
$header_position            = ! empty( $header_position ) ? $header_position : 'middle';
$total_products_label       = ( ! empty( $layout ) && 'grid' == $layout ) ? __( "Products Per Page",WCPCSU_TEXTDOMAIN ) : __("Total Products to Display",WCPCSU_TEXTDOMAIN );
$theme                      = ! empty( $theme ) ? $theme : 'theme_1';
$display_sale_ribbon        = ! empty( $display_sale_ribbon ) ? $display_sale_ribbon : 'no';
$sale_ribbon_position       = ! empty( $sale_ribbon_position ) ? $sale_ribbon_position : 'top_left';
$display_featured_ribbon    = ! empty( $display_featured_ribbon ) ? $display_featured_ribbon : 'no';
$featured_ribbon_position   = ! empty( $featured_ribbon_position ) ? $featured_ribbon_position : 'top_right';
$display_sold_out_ribbon    = ! empty( $display_sold_out_ribbon ) ? $display_sold_out_ribbon : 'no';
$sold_out_ribbon_position   = ! empty( $sold_out_ribbon_position ) ? $sold_out_ribbon_position : 'bottom_left';
$display_discount_ribbon    = ! empty( $display_discount_ribbon ) ? $display_discount_ribbon : 'no';
$discount_ribbon_position   = ! empty( $discount_ribbon_position ) ? $discount_ribbon_position : 'bottom_right';
$img_hover_effect           = ! empty( $img_hover_effect ) ? $img_hover_effect : 'yes';
$products_type              = ! empty( $products_type ) ? $products_type : 'latest';
$img_animation                      = ! empty( $img_animation ) ? $img_animation : 'zoom-in';
?>

<div id="lcsp-tab-5" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="layout"><?php esc_html_e('Layout', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmd-switch">
                        <div class="cmd-switch-carousel <?php echo ( 'carousel' == $layout ) ? 'active' : ''; ?>">
                            <div class="cmd-switch-item cmd-switch-carousel-img" data-value="carousel">
                                <span class="cmd-switch-item-icon"><i class="fas fa-check-square"></i></span>
                                <img src="<?php echo WCPCSU_URL .'admin/img/carousel.jpg' ?>" alt="carousel">
                                <input type="radio" name="wcpscu[layout]"
                                    class="wcpscu_radio_layout wcpscu_carousel_layout" value="carousel"
                                    <?php checked( $layout, 'carousel' ); ?>>
                            </div>
                            <p><?php _e( 'Carousel', WCPCSU_TEXTDOMAIN );?></p>
                        </div>
                        <div class="cmd-switch-grid <?php echo ( 'grid' == $layout ) ? 'active' : ''; ?>">
                            <div class=" cmd-switch-item cmd-switch-grid-img" data-value="grid">
                                <span class="cmd-switch-item-icon"><i class="fas fa-check-square"></i></span>
                                <img src="<?php echo WCPCSU_URL .'admin/img/grid.jpg' ?>" alt="grid">
                                <input type="radio" name="wcpscu[layout]" class="wcpscu_radio_layout wcpscu_grid_layout"
                                    value="grid" <?php checked( $layout, 'grid' ); ?>>
                            </div>
                            <p><?php _e( 'Grid', WCPCSU_TEXTDOMAIN );?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Select theme-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e('Select Theme', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-theme-wrapper">
                        <select id="theme_" class="wcpscu_theme" name="wcpscu[theme]">
                            <option value="theme_1" <?php selected( $theme, 'theme_1'); ?>>Theme-1</option>
                            <option value="theme_2" <?php selected( $theme, 'theme_2'); ?>>Theme-2
                            </option>
                            <option value="theme_3" <?php selected( $theme, 'theme_3'); ?>>Theme-3
                            </option>
                            <option value="theme_4" <?php selected( $theme, 'theme_4'); ?>>Theme-4</option>
                            <option value="theme_5" <?php selected( $theme, 'theme_5'); ?>>Theme-5</option>
                            <option value="theme_6" <?php selected( $theme, 'theme_6'); ?>>Theme-6</option>
                            <option value="theme_7" <?php selected( $theme, 'theme_7'); ?>>Theme-7</option>
                            <option value="theme_8" <?php selected( $theme, 'theme_8'); ?>>Theme-8</option>
                            <option value="theme_9" <?php selected( $theme, 'theme_9'); ?>>Theme-9</option>
                            <option value="theme_10" <?php selected( $theme, 'theme_10'); ?>>Theme-10</option>
                            <option value="theme_11" <?php selected( $theme, 'theme_11'); ?>>Theme-11</option>
                            <option value="theme_12" <?php selected( $theme, 'theme_12'); ?>>Theme-12</option>
                            <option value="theme_13" <?php selected( $theme, 'theme_13'); ?>>Theme-13</option>
                            <option value="theme_14" <?php selected( $theme, 'theme_14'); ?>>Theme-14</option>
                            <option value="theme_15" <?php selected( $theme, 'theme_15'); ?>>Theme-15</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Total Products -->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_total_products"
                        id="wcpscu_total_pdt"><?php echo !empty($total_products_label) ? $total_products_label : __("Total Products to Display",WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <input type="text" class="cmb2-text-small" name="wcpscu[total_products]" id="wcpscu_total_products"
                        value="<?php echo !empty($total_products) ? intval($total_products) : 12; ?>">
                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('How many products to display in the carousel slider', WCPCSU_TEXTDOMAIN); ?>
                    </p>
                </div>
            </div>

            <div class="cmb-row cmb-type-radio bolod">
                <div class="cmb-th">
                    <label for="lcsp_ic">
                        <?php esc_html_e('Display Header', WCPCSU_TEXTDOMAIN); ?>
                    </label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1 wpcpsu_display_header_title"
                                name="wcpscu[h_title_show]" id="wcpscu[h_title_show]1" value="yes"
                                <?php checked('yes', $h_title_show, true);  ?>>
                            <label for="wcpscu[h_title_show]1">
                                <?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch2 wpcpsu_display_header_title"
                                name="wcpscu[h_title_show]" id="wcpscu[h_title_show]2" value="no"
                                <?php checked('no', $h_title_show, true);  ?>>
                            <label for="wcpscu[h_title_show]2">
                                <?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?>
                            </label>
                        </li>
                    </ul>
                    <div class="cmb-td-medium wcpcsu_header_dependency">
                        <label for="wcpcsu_header_title"><?php esc_html_e('Header Title', WCPCSU_TEXTDOMAIN); ?></label>
                        <input type="text" class="cmb2-text-medium" name="wcpscu[header_title]" id="wcpcsu_header_title"
                            value="<?php echo !empty($header_title) ? esc_attr($header_title) : ''; ?>">
                    </div>
                    <div class="cmb-td-multicheck wcpcsu_header_dependency">
                        <label
                            for="wcpscup_products_type"><?php esc_html_e('Header Position', WCPCSU_TEXTDOMAIN); ?></label>
                        <ul class="cmb2-radio-list cmb2-list">
                            <li>
                                <input type="radio" class="cmb2-option" name="wcpscu[header_position]" id="middle"
                                    value="middle" <?php checked('middle', $header_position); ?>>
                                <label for="middle"><?php esc_html_e('Middle', WCPCSU_TEXTDOMAIN); ?></label>
                            </li>


                            <li>
                                <input type="radio" class="cmb2-option" name="wcpscu[header_position]" id="left"
                                    value="left" <?php checked('left', $header_position); ?>>
                                <label for="left"><?php esc_html_e('Left', WCPCSU_TEXTDOMAIN); ?></label>
                            </li>

                            <li>
                                <input type="radio" class="cmb2-option" name="wcpscu[header_position]" id="right"
                                    value="right" <?php checked('right', $header_position); ?>>
                                <label for="right"><?php esc_html_e('Right', WCPCSU_TEXTDOMAIN); ?></label>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!--Display Product Title-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label
                        for="wcpscu_display_title"><?php esc_html_e('Display Product Title', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[display_title]"
                                id="wcpscu_display_title1" value="yes"
                                <?php if(empty($display_title) || 'yes' === $display_title) { echo 'checked'; } ?>>
                            <label for="wcpscu_display_title1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[display_title]"
                                id="wcpscu_display_title2" value="no"
                                <?php if (!empty($display_title)) { checked('no', $display_title); } ?>>
                            <label for="wcpscu_display_title2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Product type-->
            <div class="cmb-row cmb-type-multicheck">
                <div class="cmb-th">
                    <label for="wcpscup_products_type"><?php esc_html_e('Products Type', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list">

                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type" value="latest"
                                <?php if( empty($products_type) || $products_type == "latest" )  {echo "checked"; } ?>>
                            <label
                                for="wcpscup_products_type"><?php esc_html_e('Latest Products', WCPCSU_TEXTDOMAIN); ?></label>

                            <!--Category Selection-->
                            <p class="cmb2-metabox-description specific-categories latest">
                                <?php esc_html_e('Category (leave it blank to display the latest products from all categories):', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                            <input type="text" class="cmb2-text-medium" name="wcpscu[latest_products_bycategory]"
                                id="wcpscup_products_bycategory"
                                value="<?php if(!empty($latest_products_bycategory)) { echo esc_attr($latest_products_bycategory); } ?>"
                                placeholder="e.g. clothing, shoes, watches">

                            <!--Days Ago-->
                            <p class="cmb2-metabox-description specific-days">
                                <?php esc_html_e('Timeframe (leave it blank to display the latest products from all days):', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                            <input type="text" class="cmb2-text-medium" name="wcpscu[prodcuts_from_days_ago]"
                                id="prodcuts_from_days_ago"
                                value="<?php if(!empty($prodcuts_from_days_ago)) { echo esc_attr($prodcuts_from_days_ago); } ?>"
                                placeholder="e.g. 90 days ago">
                        </li>


                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type9" value="older" <?php checked('older', $products_type); ?>>
                            <label
                                for="wcpscup_products_type9"><?php esc_html_e('Older Products', WCPCSU_TEXTDOMAIN); ?></label>

                            <!--Category Selection-->
                            <p class="cmb2-metabox-description specific-categories older">
                                <?php esc_html_e('Category (leave it blank to display the oldest products from all categories):', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                            <input type="text" class="cmb2-text-medium" name="wcpscu[older_products_bycategory]"
                                id="wcpscup_products_bycategory4"
                                value="<?php if(!empty($older_products_bycategory)) { echo esc_attr($older_products_bycategory); } ?>"
                                placeholder="e.g. clothing, shoes, watches">
                        </li>



                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type_top_rated" value="top_rated"
                                <?php checked('top_rated', $products_type); ?>>
                            <label
                                for="wcpscup_products_type_top_rated"><?php esc_html_e('Top Rated Products', WCPCSU_TEXTDOMAIN); ?></label>

                            <!--Category Selection-->
                            <p class="cmb2-metabox-description specific-categories top_rated">
                                <?php esc_html_e('Category (leave it blank to display the Top Rated products from all categories):', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                            <input type="text" class="cmb2-text-medium" name="wcpscu[top_rated_products_bycategory]"
                                id="top_rated_products_bycategory"
                                value="<?php if(!empty($top_rated_products_bycategory)) { echo esc_attr($top_rated_products_bycategory); } ?>"
                                placeholder="e.g. clothing, shoes, watches">
                        </li>


                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type_rand" value="random"
                                <?php checked('random', $products_type); ?>>
                            <label
                                for="wcpscup_products_type_rand"><?php esc_html_e('Random Products', WCPCSU_TEXTDOMAIN); ?></label>

                            <!--Category Selection-->
                            <p class="cmb2-metabox-description specific-categories random">
                                <?php esc_html_e('Category (leave it blank to display the Random products from all categories):', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                            <input type="text" class="cmb2-text-medium" name="wcpscu[random_products_bycategory]"
                                id="random_products_bycategory"
                                value="<?php if(!empty($random_products_bycategory)) { echo esc_attr($random_products_bycategory); } ?>"
                                placeholder="e.g. clothing, shoes, watches">
                        </li>





                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type1" value="onsale" <?php checked('onsale', $products_type); ?>>
                            <label
                                for="wcpscup_products_type1"><?php esc_html_e('On Sale Products', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>



                        <li><input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type2" value="bestselling"
                                <?php checked('bestselling', $products_type); ?>>
                            <label
                                for="wcpscup_products_type2"><?php esc_html_e('Best Selling Products', WCPCSU_TEXTDOMAIN); ?></label>

                            <p class="cmb2-metabox-description specific-categories bestselling">
                                <?php esc_html_e('Category (leave it blank to display the best selling products from all categories):', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                            <input type="text" class="cmb2-text-medium" name="wcpscu[bestselling_products_bycategory]"
                                id="wcpscup_products_bycategory2"
                                value="<?php if(!empty($bestselling_products_bycategory)) { echo esc_attr($bestselling_products_bycategory); }  ?>"
                                placeholder="e.g. clothing, shoes, watches">
                        </li>

                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type3" value="featured"
                                <?php checked('featured', $products_type); ?>>
                            <label
                                for="wcpscup_products_type3"><?php esc_html_e('Featured Products', WCPCSU_TEXTDOMAIN); ?></label>

                            <p class="cmb2-metabox-description specific-categories featured">
                                <?php esc_html_e('Category (leave it blank to display Latest products from all categories):', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                            <input type="text" class="cmb2-text-medium" name="wcpscu[featured_products_bycategory]"
                                id="wcpscup_products_bycategory3"
                                value="<?php if(!empty($featured_products_bycategory)) { echo esc_attr($featured_products_bycategory); } ?>"
                                placeholder="e.g. clothing, shoes, watches">
                        </li>



                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type10" value="category"
                                <?php checked('category', $products_type); ?>>
                            <label
                                for="wcpscup_products_type10"><?php esc_html_e('Category Products', WCPCSU_TEXTDOMAIN); ?></label>

                            <input type="text" class="cmb2-text-medium" name="wcpscu[products_bycategory]"
                                id="wcpscup_products_bycategory5"
                                value="<?php if(!empty($products_bycategory)) { echo esc_attr($products_bycategory); } ?>"
                                placeholder="e.g. clothing, shoes, watches">
                        </li>


                        <li class="productsbyidw">
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type4" value="productsbyid"
                                <?php checked('productsbyid', $products_type); ?>>
                            <label
                                for="wcpscup_products_type4"><?php esc_html_e('Products by ID', WCPCSU_TEXTDOMAIN); ?></label>

                            <input type="text" class="cmb2-text-medium" name="wcpscu[products_byid]"
                                id="wcpscup_products_byid"
                                value="<?php if(!empty($products_byid)) { echo esc_attr($products_byid); } ?>"
                                placeholder="e.g. 10, 11, 18">
                        </li>



                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type5" value="productsbysku"
                                <?php checked('productsbysku', $products_type); ?>>
                            <label
                                for="wcpscup_products_type5"><?php esc_html_e('Products by SKU', WCPCSU_TEXTDOMAIN); ?></label>

                            <input type="text" class="cmb2-text-medium" name="wcpscu[prodcuts_bysku]"
                                id="wcpscup_prodcuts_bysku"
                                value="<?php if(!empty($prodcuts_bysku)) { echo esc_attr($prodcuts_bysku); }?>"
                                placeholder="e.g. Irmne, lrer, s1">
                        </li>



                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type6" value="productsbytag"
                                <?php checked('productsbytag', $products_type); ?>>
                            <label
                                for="wcpscup_products_type6"><?php esc_html_e('Products by Tags', WCPCSU_TEXTDOMAIN); ?></label>

                            <input type="text" class="cmb2-text-medium" name="wcpscu[products_bytag]"
                                id="wcpscup_products_bytag"
                                value="<?php if(!empty($products_bytag)) { echo esc_attr($products_bytag); } ?>"
                                placeholder="e.g. hoody, clothing">
                        </li>



                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type7" value="productsbyyear"
                                <?php  checked('productsbyyear', $products_type); ?>>
                            <label
                                for="wcpscup_products_type7"><?php esc_html_e('Products by Year', WCPCSU_TEXTDOMAIN); ?></label>

                            <input type="text" class="cmb2-text-small" name="wcpscu[prodcuts_from_year]"
                                id="wcpscup_prodcuts_from_year"
                                value="<?php if(!empty($prodcuts_from_year)) { echo esc_attr($prodcuts_from_year); } ?>"
                                placeholder="e.g. 2014">
                        </li>



                        <li>
                            <input type="radio" class="cmb2-option" name="wcpscu[products_type]"
                                id="wcpscup_products_type8" value="productsbymonth"
                                <?php checked('productsbymonth', $products_type); ?>>
                            <label
                                for="wcpscup_products_type8"><?php esc_html_e('Products by Month', WCPCSU_TEXTDOMAIN); ?></label>

                            <input type="text" class="cmb2-text-small" name="wcpscu[prodcuts_from_month]"
                                id="wcpscup_prodcuts_from_month"
                                value="<?php if(!empty($prodcuts_from_month)) { echo esc_attr($prodcuts_from_month); } ?>"
                                placeholder="e.g. 11">

                            <input type="text" class="cmb2-text-small" name="wcpscu[prodcuts_from_month_year]"
                                id="wcpscup_prodcuts_from_month_year"
                                value="<?php if(!empty($prodcuts_from_month_year)) { echo esc_attr($prodcuts_from_month_year); }  ?>"
                                placeholder="2014">
                        </li>

                    </ul>
                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('What type of products to display in the carousel slider', WCPCSU_TEXTDOMAIN); ?>
                    </p>
                </div>
            </div>

            <!--Show "sale' Ribbon for the product on sale-->
            <div class="cmb-row cmb-type-radio" id="sale_ribbon_wrapper">
                <div class="cmb-th">
                    <label
                        for="wcpscu_display_sale_ribbon"><?php esc_html_e('Display "Sale" Badge', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1"
                                name="wcpscu[display_sale_ribbon]" id="wcpscu_display_sale_ribbon1" value="yes"
                                <?php checked( $display_sale_ribbon, 'yes' ); ?>>
                            <label
                                for="wcpscu_display_sale_ribbon1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2"
                                name="wcpscu[display_sale_ribbon]" id="wcpscu_display_sale_ribbon2" value="no"
                                <?php checked( $display_sale_ribbon, 'no' ); ?>>
                            <label
                                for="wcpscu_display_sale_ribbon2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                    <!-- <p class="cmb2-metabox-description">
                        <?php esc_html_e('Whether to show the "Sale" ribbon for On-Sale products or not', WCPCSU_TEXTDOMAIN); ?>
                    </p> -->

                    <!--Text for the sale ribbon-->
                    <div id="sale_ribbon_text_wrapper">
                        <label for="wcpscu_sale_ribbon_text">
                            <?php esc_html_e( 'Text', WCPCSU_TEXTDOMAIN ); ?>
                        </label>
                        <input type="text" class="cmb2-text-medium" name="wcpscu[sale_ribbon_text]"
                            id="wcpscu_sale_ribbon_text"
                            value="<?php echo !empty($sale_ribbon_text) ?  $sale_ribbon_text : esc_html__('Sale!', WCPCSU_TEXTDOMAIN); ?>"
                            placeholder="e.g. Sale!">
                    </div>

                    <!--Position of sale ribbon -->
                    <div id="sale_ribbon_text_wrapper">
                        <label for="sale_ribbon_position">
                            <?php esc_html_e( 'Position', WCPCSU_TEXTDOMAIN ); ?>
                        </label>
                        <select id="sale_ribbon_position" class="sale_ribbon_position"
                            name="wcpscu[sale_ribbon_position]">
                            <option value="top_left" <?php selected( $sale_ribbon_position, 'top_left'); ?>>Top Left
                            </option>
                            <option value="top_right" <?php selected( $sale_ribbon_position, 'top_right'); ?>>Top Right
                            </option>
                            <option value="bottom_left" <?php selected( $sale_ribbon_position, 'bottom_left'); ?>>Bottom
                                Left
                            </option>
                            <option value="bottom_right" <?php selected( $sale_ribbon_position, 'bottom_right'); ?>>
                                Bottom Right
                            </option>
                        </select>
                    </div>

                </div>
            </div>



            <!--Display "Featured" Ribbon-->
            <div class="cmb-row cmb-type-radio" id="feature_ribbon_wrapper">
                <div class="cmb-th">
                    <label
                        for="wcpscu_display_featured_ribbon"><?php esc_html_e('Display "Featured" Badge', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1"
                                name="wcpscu[display_featured_ribbon]" id="wcpscu_display_featured_ribbon1" value="yes"
                                <?php checked( $display_featured_ribbon, 'yes' ); ?>>
                            <label
                                for="wcpscu_display_featured_ribbon1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2"
                                name="wcpscu[display_featured_ribbon]" id="wcpscu_display_featured_ribbon2" value="no"
                                <?php checked( $display_featured_ribbon, 'no' ); ?>>
                            <label
                                for="wcpscu_display_featured_ribbon2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                    <!-- <p class="cmb2-metabox-description">
                        <?php esc_html_e('Whether to show the "Featured" ribbon for featured products or not.', WCPCSU_TEXTDOMAIN); ?>
                    </p> -->
                    <!-- Text for the feature ribbon -->
                    <div id="feature_ribbon_text_wrapper">
                        <input type="text" class="cmb2-text-medium" name="wcpscu[feature_ribbon_text]"
                            id="wcpscu_feature_ribbon_text"
                            value="<?php echo !empty($feature_ribbon_text) ?  $feature_ribbon_text : esc_html__('Featured!', WCPCSU_TEXTDOMAIN); ?>"
                            placeholder="e.g. Featured!">
                        <p class="cmb2-metabox-description">
                            <?php esc_html_e('Enter the text for the featured ribbon. Default text is "Featured!".', WCPCSU_TEXTDOMAIN); ?>
                        </p>
                    </div>

                    <!--Position of Featured ribbon -->
                    <div id="featured_ribbon_text_wrapper">
                        <label for="featured_ribbon_position">
                            <?php esc_html_e( 'Position', WCPCSU_TEXTDOMAIN ); ?>
                        </label>
                        <select id="featured_ribbon_position" class="featured_ribbon_position"
                            name="wcpscu[featured_ribbon_position]">
                            <option value="top_left" <?php selected( $featured_ribbon_position, 'top_left'); ?>>Top Left
                            </option>
                            <option value="top_right" <?php selected( $featured_ribbon_position, 'top_right'); ?>>Top
                                Right
                            </option>
                            <option value="bottom_left" <?php selected( $featured_ribbon_position, 'bottom_left'); ?>>
                                Bottom Left
                            </option>
                            <option value="bottom_right" <?php selected( $featured_ribbon_position, 'bottom_right'); ?>>
                                Bottom Right
                            </option>
                        </select>
                    </div>
                </div>
            </div>


            <!--Show ribbon for sold out products-->
            <div class="cmb-row cmb-type-radio" id="sold_out_ribbon_wrapper">
                <div class="cmb-th">
                    <label
                        for="wcpscu_display_sold_out_ribbon"><?php esc_html_e('Display the "Sold Out" Badge', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1"
                                name="wcpscu[display_sold_out_ribbon]" id="wcpscu_display_sold_out_ribbon1" value="yes"
                                <?php checked( $display_sold_out_ribbon, 'yes' ); ?>>
                            <label
                                for="wcpscu_display_sold_out_ribbon1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2"
                                name="wcpscu[display_sold_out_ribbon]" id="wcpscu_display_sold_out_ribbon2" value="no"
                                <?php checked( $display_sold_out_ribbon, 'no' ); ?>>
                            <label
                                for="wcpscu_display_sold_out_ribbon2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                    <!-- <p class="cmb2-metabox-description">
                        <?php esc_html_e('Whether to display the "Sold Out" ribbon for out-of-stock products or not', WCPCSU_TEXTDOMAIN); ?>
                    </p> -->

                    <!-- Text for the sold out ribbon -->

                    <div id="sold_out_ribbon_text_wrapper">
                        <input type="text" class="cmb2-text-medium" name="wcpscu[sold_out_ribbon_text]"
                            id="wcpscu_sold_out_ribbon_text"
                            value="<?php echo !empty($sold_out_ribbon_text) ?  $sold_out_ribbon_text : esc_html__('Sold Out!', WCPCSU_TEXTDOMAIN); ?>"
                            placeholder="e.g. Sold Out!">
                        <p class="cmb2-metabox-description">
                            <?php esc_html_e('Enter the text for the sold out ribbon. Default text is "Sold Out!".', WCPCSU_TEXTDOMAIN); ?>
                        </p>
                    </div>

                    <!--Position of Featured ribbon -->
                    <div id="sold_out_ribbon_text_wrapper">
                        <label for="sold_out_ribbon_position">
                            <?php esc_html_e( 'Position', WCPCSU_TEXTDOMAIN ); ?>
                        </label>
                        <select id="sold_out_ribbon_position" class="sold_out_ribbon_position"
                            name="wcpscu[sold_out_ribbon_position]">
                            <option value="top_left" <?php selected( $sold_out_ribbon_position, 'top_left'); ?>>Top Left
                            </option>
                            <option value="top_right" <?php selected( $sold_out_ribbon_position, 'top_right'); ?>>Top
                                Right
                            </option>
                            <option value="bottom_left" <?php selected( $sold_out_ribbon_position, 'bottom_left'); ?>>
                                Bottom Left
                            </option>
                            <option value="bottom_right" <?php selected( $sold_out_ribbon_position, 'bottom_right'); ?>>
                                Bottom Right
                            </option>
                        </select>
                    </div>

                </div>
            </div>

            <!--Show ribbon for sold out products-->
            <div class="cmb-row cmb-type-radio" id="discount_ribbon_wrapper">
                <div class="cmb-th">
                    <label
                        for="wcpscu_display_discount_ribbon"><?php esc_html_e('Display the "Discount" Badge', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1"
                                name="wcpscu[display_discount_ribbon]" id="wcpscu_display_discount_ribbon1" value="yes"
                                <?php checked( $display_discount_ribbon, 'yes' ); ?>>
                            <label
                                for="wcpscu_display_discount_ribbon1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2"
                                name="wcpscu[display_discount_ribbon]" id="wcpscu_display_discount_ribbon2" value="no"
                                <?php checked( $display_discount_ribbon, 'no' ); ?>>
                            <label
                                for="wcpscu_display_discount_ribbon2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                    <!-- <p class="cmb2-metabox-description">
                        <?php esc_html_e('Whether to display the "Sold Out" ribbon for out-of-stock products or not', WCPCSU_TEXTDOMAIN); ?>
                    </p> -->

                    <!--Position of Featured ribbon -->
                    <div id="discount_ribbon_text_wrapper">
                        <label for="discount_ribbon_position">
                            <?php esc_html_e( 'Position', WCPCSU_TEXTDOMAIN ); ?>
                        </label>
                        <select id="discount_ribbon_position" class="discount_ribbon_position"
                            name="wcpscu[discount_ribbon_position]">
                            <option value="top_left" <?php selected( $discount_ribbon_position, 'top_left'); ?>>Top Left
                            </option>
                            <option value="top_right" <?php selected( $discount_ribbon_position, 'top_right'); ?>>Top
                                Right
                            </option>
                            <option value="bottom_left" <?php selected( $discount_ribbon_position, 'bottom_left'); ?>>
                                Bottom Left
                            </option>
                            <option value="bottom_right" <?php selected( $discount_ribbon_position, 'bottom_right'); ?>>
                                Bottom Right
                            </option>
                        </select>
                    </div>

                </div>
            </div>

            <!--Display Product Price-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label
                        for="wcpscu_display_price"><?php esc_html_e('Display Product Price', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[display_price]"
                                id="wcpscu_display_price1" value="yes"
                                <?php if(empty($display_price) || 'yes' === $display_price) { echo 'checked'; } ?>>
                            <label for="wcpscu_display_price1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[display_price]"
                                id="wcpscu_display_price2" value="no"
                                <?php if (!empty($display_price)) { checked('no', $display_price); } ?>>
                            <label for="wcpscu_display_price2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Display Product Ratings-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label
                        for="wcpscu_display_ratings"><?php esc_html_e('Display Product Ratings', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[display_ratings]"
                                id="wcpscu_display_ratings1" value="yes"
                                <?php if(empty($display_ratings) || 'yes' === $display_ratings) { echo 'checked'; } ?>>
                            <label for="wcpscu_display_ratings1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[display_ratings]"
                                id="wcpscu_display_ratings2" value="no"
                                <?php if (!empty($display_ratings)) { checked('no', $display_ratings); } ?>>
                            <label for="wcpscu_display_ratings2"><?php _e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Display "Add to Cart" button-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label
                        for="wcpscu_display_cart"><?php esc_html_e('Display "Add to Cart" Button', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[display_cart]"
                                id="wcpscu_display_cart1" value="yes"
                                <?php if(empty($display_cart) || 'yes' === $display_cart) { echo 'checked'; } ?>>
                            <label for="wcpscu_display_cart1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[display_cart]"
                                id="wcpscu_display_cart2" value="no"
                                <?php if (!empty($display_cart)) { checked('no', $display_cart); } ?>>
                            <label for="wcpscu_display_cart2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Exclude stock products from the query-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label
                        for="wcpscu_exclude_stock_out"><?php esc_html_e('Exclude Stock-out Products from the query', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[exclude_stock_out]"
                                id="wcpscu_exclude_stock_out1" value="yes"
                                <?php if(empty($exclude_stock_out) || 'yes' === $exclude_stock_out) { echo 'checked'; } ?>>
                            <label
                                for="wcpscu_exclude_stock_out1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[exclude_stock_out]"
                                id="wcpscu_exclude_stock_out2" value="no"
                                <?php if (!empty($exclude_stock_out)) { checked('no', $exclude_stock_out); } ?>>
                            <label for="wcpscu_exclude_stock_out2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                    </ul>
                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('Whether to exclude out-of-stock products from the query or not. Default value is "Yes". So, out-of-stock products are not displayed by default. You can include/display out-of-stock products by setting the value of this option to "No".', WCPCSU_TEXTDOMAIN); ?>
                    </p>
                </div>
            </div>
            <!--Display "Quick View" button-->
            <div class="cmb-row cmb-type-radio theme_2">
                <div class="cmb-th">
                    <label
                        for="wcpscu_quick_view"><?php esc_html_e('Display "Quick View Icon"', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[quick_view]"
                                id="wcpscu_quick_view1" value="yes"
                                <?php if(empty($quick_view) || 'yes' === $quick_view) { echo 'checked'; } ?>>
                            <label for="wcpscu_quick_view1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li>
                            <input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[quick_view]"
                                id="wcpscu_quick_view2" value="no"
                                <?php if (!empty($quick_view)) { checked('no', $quick_view); } ?>>
                            <label for="wcpscu_quick_view2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label>
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
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[img_crop]"
                                id="wcpscu_img_crop1" value="yes"
                                <?php if( empty($img_crop) || $img_crop === "yes" ) {echo "checked"; } ?>>
                            <label for="wcpscu_img_crop1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[img_crop]"
                                id="wcpscu_img_crop2" value="no"
                                <?php if( !empty($img_crop)) { checked( 'no', $img_crop); } ?>> <label
                                for="wcpscu_img_crop2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                    <p class="cmb2-metabox-description">
                        <?php esc_html_e('If the product images are not in the same size, this feature is helpful. It automatically resizes and crops. ', WCPCSU_TEXTDOMAIN); ?>
                    </p>
                    <div class="cmb2-metabox-note">
                        <p><strong>Note:</strong> your image must be higher than/equal to the cropping size set below.
                            Otherwise, you may need to enable image upscaling feature from the settings below.</p>
                    </div>
                </div>
            </div>

            <!--Image width-->
            <div class="cmb-row cmb-type-text-medium">
                <div class="cmb-th">
                    <label for="wcpscu_crop_image_width"><?php esc_html_e('Image Size', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-td-sizes">
                        <div class="cmb-td-size cmb-td-size-width">
                            <label
                                for="wcpscu_crop_image_width"><?php esc_html_e('Width', WCPCSU_TEXTDOMAIN); ?></label>
                            <input type="text" class="cmb2-text-small" name="wcpscu[crop_image_width]"
                                id="wcpscu_crop_image_width"
                                value="<?php echo !empty($crop_image_width) ? intval($crop_image_width) : 350; ?>">
                            <p class="cmb2-metabox-description">
                                <?php esc_html_e('Image cropping width', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                        </div>
                        <div class="cmb-td-size cmb-td-size-height">
                            <label
                                for="wcpscu_crop_image_height"><?php esc_html_e('Height', WCPCSU_TEXTDOMAIN); ?></label>
                            <input type="text" class="cmb2-text-small" name="wcpscu[crop_image_height]"
                                id="wcpscu_crop_image_height"
                                value="<?php echo !empty($crop_image_height) ? intval($crop_image_height) : 250; ?>">
                            <p class="cmb2-metabox-description">
                                <?php esc_html_e('Image cropping height', WCPCSU_TEXTDOMAIN); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Enable image hover effect-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="wcpscu_img_hover_effect"><?php esc_html_e('Image Hover Effect', WCPCSU_TEXTDOMAIN); ?></label>
                </div>
                <div class="cmb-td">
                    <ul class="cmb2-radio-list cmb2-list cmb2-radio-switch">
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch1" name="wcpscu[img_hover_effect]"
                                id="wcpscu_img_hover_effect1" value="yes"
                                <?php checked('yes', $img_hover_effect, true); ?>>
                            <label for="wcpscu_img_hover_effect1"><?php esc_html_e('Yes', WCPCSU_TEXTDOMAIN); ?></label>
                        </li>
                        <li><input type="radio" class="cmb2-option cmb2-radio-switch2" name="wcpscu[img_hover_effect]"
                                id="wcpscu_img_hover_effect2" value="no"
                                <?php checked('no', $img_hover_effect, true); ?>> <label
                                for="wcpscu_img_hover_effect2"><?php esc_html_e('No', WCPCSU_TEXTDOMAIN); ?></label></li>
                    </ul>
                </div>
            </div>

            <!--Select theme-->
            <div class="cmb-row cmb-type-radio">
                <div class="cmb-th">
                    <label for="lcsp_ap"><?php esc_html_e( 'Image Animation', WCPCSU_TEXTDOMAIN ); ?></label>
                </div>
                <div class="cmb-td">
                    <div class="cmb-theme-wrapper">
                        <select id="theme_" class="wcpscu_theme" name="wcpscu[img_animation]">
                            <option value="zoom-in" <?php selected( $img_animation, 'zoom-in'); ?>>Zoom In</option>
                            <option value="zoom-out" <?php selected( $img_animation, 'zoom-out'); ?>>Zoom Out
                            </option>
                            <option value="blur-in" <?php selected( $img_animation, 'blur-in'); ?>>Blur In
                            </option>
                            <option value="blur-out" <?php selected( $img_animation, 'blur-out'); ?>>Blur Out</option>
                            <option value="grayscale-in" <?php selected( $img_animation, 'grayscale-in'); ?>>Grayscale In</option>
                            <option value="grayscale-out" <?php selected( $img_animation, 'grayscale-out'); ?>>Grayscale Out</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end cmb2-metabox -->
</div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-1 -->