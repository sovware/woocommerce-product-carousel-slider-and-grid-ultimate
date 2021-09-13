<div class="wpcu-product <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product__img <?php echo 'yes' == $img_hover_effect ? 'wpcu-product__img--hover-effect' : ''; ?>">
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
            </a>
            <?php if( 'yes' == $quick_view ) { ?>
            <div class="wpcu-product__cover-content wpcu-product__cover-content--middle">
                <div class="wpcu-button wpcu-button--icon-circle wpcu-btn-modal-js" data-wpcu-target="wpcu-product-01" data-product-id="<?php echo get_the_ID(); ?>" data-nonce="<?php  echo wp_create_nonce('wcpcsu_quick_view_' . get_the_ID() ); ?>">
                    <a href="#"><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt=""></a>
                </div>
            </div>
            <?php } ?>

            <?php wpcsu_ribbon_badge( $ribbon_args, $this->aazz_show_discount_percentage() ); ?>

        </div>
        <div class="wpcu-product__details">
            <?php if( 'yes' == $display_title ) { ?>
            <h2 class="wpcu-product__title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            <?php } ?>
            <?php if( 'yes' == $display_ratings ) { ?>
                <div class="wpcu-product__rating">
                    <div class="wpcu-product__rating__stars" title="<?php echo $ratings; ?>%">
                        <div class="wpcu-product__rating__stars__wrap">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star.svg' ?>" alt="">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star.svg' ?>" alt="">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star.svg' ?>" alt="">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star.svg' ?>" alt="">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star.svg' ?>" alt="">
                        </div>
                        <div class="wpcu-product__rating__stars__solid" style="width: <?php echo $ratings; ?>%;">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star-solid.svg' ?>" alt="">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star-solid.svg' ?>" alt="">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star-solid.svg' ?>" alt="">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star-solid.svg' ?>" alt="">
                            <img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/star-solid.svg' ?>" alt="">
                        </div>
                    </div>
                    <span class="wpcu-product__rating__total">(<?php echo $product->get_rating_count();?>)</span>
                </div>
            <?php } ?>
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
            <?php if( 'yes' == $display_cart ) { ?>
            <div class="wpcu-button wpcu-button--outlined wpcu-button--rounded-circle">
                <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->


