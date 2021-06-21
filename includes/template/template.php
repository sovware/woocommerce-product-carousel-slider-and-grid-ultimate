
<div class='main' id='theme_1'>
<?php
 while($loop->have_posts()) : $loop->the_post();
 $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
 $wpcsu_img = $aazz_thumb['0'];
 ?>
    <?php  if ( has_post_thumbnail( $loop->post->ID ) ) { ?>
    <div class="cards">
    <div class='image'>
        <a href="<?php echo get_the_permalink(); ?>">
            <img src="<?php esc_url($wpcsu_img); ?>" alt="">
        </a>
    </div>
    <?php } ?>
    <div class='title'>
        <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
    </div>
    <div class='cart'> <?php echo do_shortcode('[add_to_cart id="'.get_the_ID().'"]');?>
    </div>
 </div>
 <?php
endwhile; ?>
</div>

<div class="wpcu-products" id="theme-one">
    <div class="wpcu-product">
        <div class="wpcu-product__img">
            <img src="https://via.placeholder.com/250x250" alt="">
            <div class="overlay-content-bottom">
                <a href="" class="wpcu-btn wpcu-btn-primary">Add to cart</a>
            </div>
        </div>
        <div class="wpcu-product__details">
            <h2 class="wpcu-product__title">Product Title One</h2>
            <p class="wpcu-product__price wpcu-product__price--discount"><s>$25.00</s> <span>$20.00</span></p>
            <div class="wpcu-product__rating">rating stars</div>
        </div>
    </div><!-- ends: .wpcu-product -->
</div><!-- ends: .wpcu-products -->