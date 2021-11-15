<div class="wpcu-product <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product__img <?php echo 'yes' == $img_hover_effect ? 'wpcu-product__img--hover-effect' : ''; ?>">
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
            </a>

            <?php wpcsu_ribbon_badge( $ribbon_args, $this->aazz_show_discount_percentage() ); ?>

            <?php if( 'yes' == $display_cart ) { ?>
            <div class="wpcu-overlay-content-bottom">
                <div class="wpcu-button">
                    <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="wpcu-product__details">
            <?php if( 'yes' == $display_title ) { ?>
            <h2 class="wpcu-product__title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            <?php } ?>
            <?php if( 'yes' == $display_price ) { ?>
            <div class="wpcu-product__price">
                <?php if ( $product->is_type( 'simple' ) && ! empty( $product->get_regular_price() ) ) { ?>

                    <?php if( empty( $sale_price ) ) { ?>
                    <span class="wpcu-product__price__sale"><?php echo get_woocommerce_currency_symbol() . $product->get_regular_price(); ?></span>
                    <?php
                    } else { ?>
                    <span class="wpcu-product__price__sale"><?php echo get_woocommerce_currency_symbol() . $product->get_sale_price(); ?></span>
                    <s><?php echo get_woocommerce_currency_symbol() . $product->get_regular_price(); ?></s>
                    <span class="wpcu-badge wpcu-badge--sm wpcu-badge--outlined wpcu-badge--rounded">-<?php echo $this->aazz_show_discount_percentage(); ?></span>
                    <?php } ?>

                <?php } else { ?>
                    <span class="wpcu-product__price__sale"><?php echo $product->get_price_html(); ?></span>
                <?php }  ?>

            </div>
            <?php } ?>
            <?php if( 'yes' == $display_ratings ) { ?>
                <div class="wpcu-product__rating">
                    <?php wpcu_ratings($ratings); ?>
                    <span class="wpcu-product__rating__total">(<?php echo $product->get_rating_count();?>)</span>
                </div>
            <?php } ?>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->

