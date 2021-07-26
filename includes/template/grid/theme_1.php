<div
class="wpcu-products wpcu-grid-one wpcu-lazy-load"
id="theme-one"
style="
    --headerFontSize: inherit;
    --headerFontColor: inherit;
    --productTitleSize: 15px;
    --productTitleColor: #363940;
    --productTitleColorHover: #000;
    --productPriceSize: 16px;
    --productPriceColor: #ff5500;
    --productRatingSize: 16px;
    --productRatingColor: #feb507;
    --buttonColor: #fff;
    --buttonColorHover: #fff;
    --buttonBgColor: #ff5500;
    --buttonBgColorHover: #d54500;
    --ribbonBgColor: #ff5500;
    --qvIconColor: #fff;
    --qvBgColor: #ff5500;
">
    <div class="wpcu-row wpcu-column-5 wpcu-column-md-2">
        <?php

    while($loop->have_posts()) : $loop->the_post();
    global $post,$product;
    $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
    $wpcsu_img = $aazz_thumb['0'];
    $sale_price = $product->get_sale_price();
    $ratings = (($product->get_average_rating()/5)*100);
    ?>
        <div class="wpcu-product">
            <div class="wpcu-product__content">
                <div class="wpcu-product__img">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <img src="<?php echo $wpcsu_img; ?>" alt="">
                    </a>
                    <div class="wpcu-overlay-content-bottom">
                        <div class="wpcu-button">
                            <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="wpcu-product__details">
                    <h2 class="wpcu-product__title"><a
                            href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                    <div class="wpcu-product__price">
                        <?php
                if(  empty( $sale_price ) ) { ?>
                        <span class="wpcu-product__price__sale">$<?php echo $product->get_regular_price(); ?></span>
                        <?php
                } else { ?>
                        <span class="wpcu-product__price__sale">$<?php echo $product->get_sale_price(); ?></span>
                        <s>$<?php echo $product->get_regular_price(); ?></s>
                        <span
                            class="wpcu-badge wpcu-badge--sm wpcu-badge--outlined wpcu-badge--rounded">-<?php echo $this->aazz_show_discount_percentage(); ?></span>
                        <?php } ?>
                    </div>
                    <div class="wpcu-product__rating">
                        <div class="atw_rating woocommerce">
                            <div class="woocommerce-product-rating">
                                <div class="star-rating" title="<?php echo $ratings; ?>%">
                                    <span style="width: <?php echo $ratings; ?>%;"></span>
                                </div>
                                <span class="total-rating">(<?php echo $product->get_rating_count();?>)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ends: .wpcu-product -->
        <?php
endwhile; ?>
    </div>
</div><!-- ends: .wpcu-products -->