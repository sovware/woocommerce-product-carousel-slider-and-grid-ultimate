<div class="wpcu-product <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product__img wpcu-pos-relative">
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
            </a>

            <!-- content top right corner -->
            <div class="wpcu-product__cover-content wpcu-product__cover-content--top-left">
                <?php if( 'yes' == $display_ratings ) { ?>
                <div class="wpcu-product__rating">
                    <div class="wpcu-product__rating__stars" title="<?php echo $ratings; ?>%">
                        <span style="width: <?php echo $ratings; ?>%;"></span>
                    </div>
                    <span class="wpcu-product__rating__total">(<?php echo $product->get_rating_count();?>)</span>
                </div>
                <?php } ?>
            </div>

            <div class="wpcu-overlay-content-bottom">
                <div class="wpcu-product__action-icons wpcu-product__action-icons--boxed">
                    <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/handbag.svg' ?>" alt="" /></a>
                    <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt="" /></a>
                    <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/heart.svg' ?>" alt="" /></a>
                    <!-- <a href=""><img class="wpcu-svg" src="<?php //echo WCPCSU_URL .'assets/icons/share.svg' ?>" alt="" /></a> -->
                </div>
            </div>
        </div>
        <div class="wpcu-product__details">
            <?php if( 'yes' == $display_title ) { ?>
            <h2 class="wpcu-product__title wpcu-mb-10 wpcu-text-center"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            <?php } ?>
            <?php if( 'yes' == $display_price && ! empty( $product->get_regular_price() ) ) { ?>
            <div class="wpcu-product__price wpcu-flex-center">
                <?php
                if( empty( $sale_price ) ) { ?>
                <span class="wpcu-product__price__sale">$<?php echo $product->get_regular_price(); ?></span>
                <?php
                } else { ?>
                <span class="wpcu-product__price__sale">$<?php echo $product->get_sale_price(); ?></span>
                <s>$<?php echo $product->get_regular_price(); ?></s>
                <span
                    class="wpcu-badge wpcu-badge--sm wpcu-badge--outlined wpcu-badge--rounded">-<?php echo $this->aazz_show_discount_percentage(); ?></span>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->
