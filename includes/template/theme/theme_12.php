<div class="wpcu-product wpcu-product--card wpcu-product--card-rounded <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product--card__body">
            <div class="wpcu-product__img wpcu-pos-relative <?php echo 'yes' == $img_hover_effect ? 'wpcu-product__img--hover-effect' : ''; ?>">
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
                <span class="wpcu-product__subtitle"><?php echo $product->get_categories(); ?></span>

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
                            <?php wpcu_ratings($ratings); ?>
                            <span class="wpcu-product__rating__total">(<?php echo $product->get_rating_count();?>)</span>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="wpcu-product__action-icons wpcu-product__action-icons--has-btn wpcu-product__action-icons--boxed">
                <a href="" class="wpcu-btn-modal-js" data-wpcu-target="wpcu-product-01" data-product-id="<?php echo get_the_ID(); ?>" data-nonce="<?php  echo wp_create_nonce('wcpcsu_quick_view_' . get_the_ID() ); ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1056" height="896" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1056 896" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M531 257q-39 0-74.5 15.5t-61 41t-41 61T339 449t15.5 75t41 61.5t61 40.5t74.5 15q53 0 97-25.5t69.5-69.5t25.5-97q0-79-56-135.5T531 257zm0 320q-34 0-64-17.5t-47.5-47T402 448q0-26 10-49.5t27.5-41t41-27.5t49.5-10q53 0 90.5 37.5T658 448t-37 91t-90 38zm509-136q0-1-.5-2.5t-.5-2.5t-.5-1.5l-.5-.5v-1l-1-2q-68-157-206-246.5T530 95q-107 0-206 39T144.5 249.5T18 431v2.5l-1 1.5v3l-1 2q-1 6-1 9q0 2 .5 4t.5 4q0 1 1 3v2l.5 1.5l.5.5v3q69 157 207.5 245.5T528 801q107 0 205.5-38.5T912 648t125-181q1 0 1-1v-1.5l.5-1l.5-.5v-3l1-2q1-6 1-9q0-2-.5-4t-.5-4zM528 737q-142 0-263-74.5T81 449q63-139 185-214.5T530 159q92 0 176.5 32T862 289.5T975 449q-63 139-184 213.5T528 737z"/><rect x="0" y="0" width="1056" height="896" fill="rgba(0, 0, 0, 0)" /></svg></a>
                <?php if( 'yes' == $display_cart ) { ?>
                    <div class="wpcu-button wpcu-button--lg wpcu-button--white">
                        <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
                    </div>
                <?php } ?>
                <?php do_action('wishlist_button');?>
            </div>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->
