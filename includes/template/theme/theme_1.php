<div class="wpcu-product <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <!-- wpcu-product__img--hover-effect -->
    <!--    
        Zoom In: wpcu-product__img--zoom-in
        Zoom Out: wpcu-product__img--zoom-out
        Blur In: wpcu-product__img--blur-in
        Blur Out: wpcu-product__img--blur-out
        Grayscale In: wpcu-product__img--grayscale-in
        Grayscale Out: wpcu-product__img--grayscale-out
    -->
    
        <div class="wpcu-product__img <?php echo 'yes' == $img_hover_effect ? $img_animation_class : ''; ?>">
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
            </a>

            <?php wpcsu_ribbon_badge( $ribbon_args, $this->aazz_show_discount_percentage() ); ?>

            <?php if( 'yes' == $display_cart ) { ?>
            <div class="wpcu-overlay-content-bottom">
                <div class="wpcu-button wpcu-cart">
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
                    
                <span class="wpcu-product__price__sale"><?php echo $product->get_price_html(); ?></span>

                <?php if( ! empty( $sale_price ) ) { ?>

                    <span class="wpcu-badge wpcu-badge--sm wpcu-badge--outlined wpcu-badge--rounded">-<?php echo $this->aazz_show_discount_percentage(); ?></span>
                    
                <?php } ?>    

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

