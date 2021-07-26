<div class="wpcu-products wpcu-grid-two wpcu-lazy-load" id="theme-one">
    <div class="wpcu-row wpcu-column-5 wpcu-column-md-2">
        <?php

    while($loop->have_posts()) : $loop->the_post();
    global $post,$product;
    $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
    $wpcsu_img = $aazz_thumb['0'];
    $sale_price = $product->get_sale_price();
    $ratings = (($product->get_average_rating()/5)*100);
    ?>
        <div class="wpcu-product">
            <div class="wpcu-product__content">
                <div class="wpcu-product__img">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <img src="<?php echo $wpcsu_img; ?>" alt="">
                    </a>
                    <div class="wpcu-product__cover-content wpcu-product__cover-content--middle">
                        <div class="wpcu-button wpcu-button--icon-circle wpcu-btn-modal-js" data-wpcu-target="wpcu-product-01" data-product-id="<?php echo get_the_ID(); ?>" data-nonce="<?php  echo wp_create_nonce('wcpcsu_quick_view_' . get_the_ID() ); ?>">
                            <a href="#"><img class="wpcu-svg" src="<?php echo WCPCSU_URL .'assets/icons/eye.svg' ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="wpcu-product__cover-content wpcu-product__cover-content--top-right">
                        <span class="wpcu-badge wpcu-badge--primary wpcu-badge--rounded-circle">-20%</span>
                    </div>

                </div>
                <div class="wpcu-product__details">
                    <h2 class="wpcu-product__title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
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

                    <div class="wpcu-button wpcu-button--outlined wpcu-button--rounded-circle">
                        <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price = "false"]'); ?>
                    </div>
                </div>
            </div>
        </div><!-- ends: .wpcu-product -->
        <?php
endwhile; ?>
    </div>
</div><!-- ends: .wpcu-products -->

<div class="wpcu-modal wpcu-modal-js wpcu-fade wpcu-product-01">
	<div class="wpcu-modal__dialog">
		<div class="wpcu-modal__content">
			<form id="wpcu-report-abuse-form">
				<a href="" class="wpcu-modal-close wpcu-modal-close-js"><span aria-hidden="true">×</span></a>

				<div class="wpcu-modal__body">
	
				</div>
			</form>
		</div>
	</div>
</div>