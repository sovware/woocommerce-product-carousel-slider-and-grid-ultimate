<div class="wpcu-product wpcu-product--card wpcu-product--card-rounded <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product--card__body">
            <div class="wpcu-product__img wpcu-pos-relative">
                <a href="<?php echo get_the_permalink(); ?>">
                    <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
                </a>
                <!-- content top left corner -->
                <?php wpcsu_ribbon_badge( $ribbon_args, $this->aazz_show_discount_percentage() ); ?>

            </div>
            <div class="wpcu-product__details">
                <?php if( 'yes' == $display_title ) { ?>
                <h2 class="wpcu-product__title wpcu-mb-5"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                <?php } ?>
                <span class="wpcu-product__subtitle">Apporx 20 kg</span>

                <div class="wpcu-d-flex wpcu-space-between wpcu-mt-15 wpcu-mb-5">
                    <?php if( 'yes' == $display_price && ! empty( $product->get_regular_price() ) ) { ?>
                    <div class="wpcu-product__price wpcu-flex-center wpcu-flex-align-center">
                        <?php
                        if( empty( $sale_price ) ) { ?>
                        <span class="wpcu-product__price__sale">$<?php echo $product->get_regular_price(); ?></span>
                        <?php
                        } else { ?>
                        <s>$<?php echo $product->get_regular_price(); ?></s>
                        <span class="wpcu-product__price__sale">$<?php echo $product->get_sale_price(); ?></span>
                        <span
                            class="wpcu-badge wpcu-badge--outlined wpcu-badge--rounded-circle">-<?php echo $this->aazz_show_discount_percentage(); ?></span>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php if( 'yes' == $display_ratings ) { ?>
                    <div class="wpcu-product__rating wpcu-flex-center">
                        <div class="wpcu-product__rating__stars" title="<?php echo $ratings; ?>%">
                            <span style="width: <?php echo $ratings; ?>%;"></span>
                        </div>
                        <span class="wpcu-product__rating__total">(<?php echo $product->get_rating_count();?>)</span>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="wpcu-product__action-icons wpcu-product__action-icons--has-btn wpcu-product__action-icons--boxed">
                <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt="" /></a>
                <?php if( 'yes' == $display_cart ) { ?>
                    <div class="wpcu-button wpcu-button--lg wpcu-button--white">
                        <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
                    </div>
                <?php } ?>
                <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/heart.svg' ?>" alt="" /></a>
            </div>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->
