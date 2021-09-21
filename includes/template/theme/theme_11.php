<div class="wpcu-product wpcu-product--card <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product--card__body">
            <div class="wpcu-product__img wpcu-pos-relative <?php echo 'yes' == $img_hover_effect ? 'wpcu-product__img--hover-effect' : ''; ?>">
                <a href="<?php echo get_the_permalink(); ?>">
                    <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
                </a>
                <!-- content top left corner -->
                <?php wpcsu_ribbon_badge( $ribbon_args, $this->aazz_show_discount_percentage() ); ?>
            </div>

            <?php if( $categories ) { 
                foreach( $categories as $cat ) { ?>
                    <span class="wpcu-product__type">
                        <a><?php echo $cat->name; ?></a>
                    </span> 
                    <?php
                }   
            } ?>
            
            
            <?php if( 'yes' == $display_title ) { ?>
            <h2 class="wpcu-product__title wpcu-mb-10"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            <?php } ?>
            <div class="wpcu-d-flex wpcu-space-between">
                <?php if( 'yes' == $display_price && ! empty( $product->get_regular_price() ) ) { ?>
                    <div class="wpcu-product__price">
                        <?php
                        if( empty( $sale_price ) ) { ?>
                        <span class="wpcu-product__price__sale">$<?php echo $product->get_regular_price(); ?></span>
                        <?php
                        } else { ?>
                        <span class="wpcu-product__price__sale">$<?php echo $product->get_sale_price(); ?></span>
                        <s>$<?php echo $product->get_regular_price(); ?></s>
                        <span
                            class="wpcu-badge wpcu-badge--outlined wpcu-badge--rounded-circle">-<?php echo $this->aazz_show_discount_percentage(); ?></span>
                        <?php } ?>
                    </div>
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
            </div>
        </div>
        <div class="wpcu-product--card__footer wpcu-flex-center">
            <div class="wpcu-product__action-icons wpcu-product__action-icons--has-btn wpcu-product__action-icons--circle">
                <a href="" class="wpcu-btn-modal-js" data-wpcu-target="wpcu-product-01" data-product-id="<?php echo get_the_ID(); ?>" data-nonce="<?php  echo wp_create_nonce('wcpcsu_quick_view_' . get_the_ID() ); ?>"><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt="" /></a>
                <?php if( 'yes' == $display_cart ) { ?>
                    <div class="wpcu-button wpcu-button--lg wpcu-button--rounded-circle">
                        <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
                    </div>
                <?php } ?>
                <?php do_action('wishlist_button');?>
            </div>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->
