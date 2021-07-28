<div
    class="wpcu-products wpcu-theme-one wpcu-lazy-load wpcu-carousel"
    data-wpcu-items="4"
    data-wpcu-margin="30"
    data-wpcu-loop="true"
    data-wpcu-perslide="1"
    data-wpcu-speed="300"
    data-wpcu-autoplay='{
        "delay": "3000",
        "pauseOnMouseEnter": "false",
        "disableOnInteraction": "false"
    }'
    data-wpcu-responsive='{
        "320": {"slidesPerView": "2", "spaceBetween": "20"},
        "480": {"slidesPerView": "3", "spaceBetween": "30"},
        "640": {"slidesPerView": "4", "spaceBetween": "30"}
    }'
>
    <div class="swiper-wrapper">
        <?php

    while($loop->have_posts()) : $loop->the_post();
    global $post,$product;
    $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
    $wpcsu_img = $aazz_thumb['0'];
    $sale_price = $product->get_sale_price();
    $ratings = (($product->get_average_rating()/5)*100);
    ?>
        <div class="wpcu-product swiper-slide">
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
    <!-- If we need navigation buttons -->
    <div class="wpcu-carousel-nav wpcu-carousel-nav--bottom">
        <div class="wpcu-carousel-nav__btn wpcu-carousel-nav__btn--prev">
            <img src="<?php echo WCPCSU_URL .'assets/icons/arrow-left.svg' ?>" alt="" class="wpcu-svg">
        </div>
        <div class="wpcu-carousel-nav__btn wpcu-carousel-nav__btn--next">
            <img src="<?php echo WCPCSU_URL .'assets/icons/arrow-right.svg' ?>" alt="" class="wpcu-svg">
        </div>
    </div>
</div><!-- ends: .wpcu-products -->