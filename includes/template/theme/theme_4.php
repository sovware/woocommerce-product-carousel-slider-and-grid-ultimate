<div class="wpcu-product <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product__img wpcu-pos-relative">
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
            </a>

            <!-- content top right corner -->
            <div class="wpcu-product__cover-content wpcu-product__cover-content--top-right">
                <span class="wpcu-badge wpcu-badge--primary wpcu-badge--circle">-50%</span>
            </div>

            <div class="wpcu-overlay-content-bottom">
                <div class="wpcu-product__action-icons">
                    <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt="" /></a>
                    <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt="" /></a>
                    <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt="" /></a>
                    <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="wpcu-product__details">
            <?php if( 'yes' == $display_title ) { ?>
            <h2 class="wpcu-product__title wpcu-mb-10"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            <?php } ?>
            <div class="wpcu-d-flex wpxu-d-sm-block wpcu-space-between">
                <?php if( 'yes' == $display_price && ! empty( $product->get_regular_price() ) ) { ?>
                <div class="wpcu-product__price">
                    <?php
            if(  empty( $sale_price ) ) { ?>
                    <span class="wpcu-product__price__sale">$<?php echo $product->get_regular_price(); ?></span>
                    <?php
            } else { ?>
                    <span class="wpcu-product__price__sale">$<?php echo $product->get_sale_price(); ?></span>
                    <s>$<?php echo $product->get_regular_price(); ?></s>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php if( 'yes' == $display_ratings ) { ?>
                <div class="wpcu-product__rating">
                    <div class="wpcu-product__rating__stars" title="<?php echo $ratings; ?>%">
                        <span style="width: <?php echo $ratings; ?>%;"></span>
                    </div>
                    <span class="wpcu-product__rating__total">(<?php echo $product->get_rating_count();?>)</span>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->
