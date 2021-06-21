<div class="wpcu-products" id="theme-one">
    <?php
    
    while($loop->have_posts()) : $loop->the_post();
    global $post,$product;
    $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
    $wpcsu_img = $aazz_thumb['0'];
    $sale_price = $product->get_sale_price();
    $ratings = (($product->get_average_rating()/5)*100);
    ?>
    <div class="wpcu-product">
        <div class="wpcu-product__img">
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo wc_placeholder_img_src(); ?>" alt="">
            </a>
            <div class="overlay-content-bottom">
            <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
            </div>
        </div>
        <div class="wpcu-product__details">
            <h2 class="wpcu-product__title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            <p class="wpcu-product__price wpcu-product__price--discount">
                <?php 
                if(  empty( $sale_price ) ) { ?>
                <span><?php echo $product->get_regular_price(); ?></span> 
                <?php  
                } else { ?>
                <s><?php echo $product->get_regular_price(); ?></s> 
                - <span><?php echo $product->get_sale_price(); ?></span> 
                <span><?php echo $this->aazz_show_discount_percentage(); ?></span>
                <?php } ?>
            </p>
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
    </div><!-- ends: .wpcu-product -->
    <?php
endwhile; ?>
</div><!-- ends: .wpcu-products -->