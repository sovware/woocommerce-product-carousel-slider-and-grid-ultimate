<div class="wpcu-product wpcu-product--card wpcu-product--card-rounded <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product--card__body">
            <div class="wpcu-product__img wpcu-pos-relative <?php echo 'yes' == $img_hover_effect ? 'wpcu-product__img--hover-effect' : ''; ?>">
                <a href="<?php echo get_the_permalink(); ?>">
                    <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
                </a>

                <!-- Quick view button -->
                <a href="" class="wpcu-quick-view-btn wpcu-btn-modal-js" data-wpcu-target="wpcu-product-01" data-product-id="<?php echo get_the_ID(); ?>" data-nonce="<?php  echo wp_create_nonce('wcpcsu_quick_view_' . get_the_ID() ); ?>">Quick View</a>
            </div>
            <div class="wpcu-product__details">
                <div class="wpcu-product__details__left">
                    <?php if( 'yes' == $display_title ) { ?>
                    <h2 class="wpcu-product__title wpcu-mb-10"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                    <?php } ?>

                    <?php if( 'yes' == $display_price && ! empty( $product->get_regular_price() ) ) { ?>
                    <div class="wpcu-product__price">
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
                </div>
                <div class="wpcu-product__details__right">
                    <?php if( 'yes' == $display_cart ) { ?>
                        <div class="wpcu-button wpcu-button--light wpcu-button--icon-circle">
                        <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
                            <!-- <a href=""><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/handbag.svg' ?>" alt="" /></a> -->
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->
