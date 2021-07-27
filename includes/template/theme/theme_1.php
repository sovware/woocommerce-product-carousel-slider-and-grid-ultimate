<div class="wpcu-product <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
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
        
    