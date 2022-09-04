<div class="wpcu-product <?php echo ( 'carousel' == $layout ) ? 'swiper-slide' : ''; ?>">
    <div class="wpcu-product__content">
        <div class="wpcu-product__img wpcu-pos-relative <?php echo 'yes' == $img_hover_effect ? $img_animation_class : ''; ?>">
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo $wpcsu_img; ?>" alt="<?php echo get_the_title(); ?>">
            </a>

            <?php wpcsu_ribbon_badge( $ribbon_args, $this->aazz_show_discount_percentage() ); ?>
        </div>
        <div class="wpcu-product__details">
                <div class="wpcu-product__details__content">
                    <?php if( 'yes' == $display_title ) { ?>
                        <h2 class="wpcu-product__title wpcu-mb-10"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                    <?php } ?>
                    <?php if( 'yes' == $display_price ) { ?>
                        <div class="wpcu-product__price wpcu-flex-center wpcu-mb-10">

                            <span class="wpcu-product__price__sale"><?php echo $product->get_price_html(); ?></span> 

                        </div>
                    <?php } ?>
                <?php if( 'yes' == $display_ratings ) { ?>
                    <div class="wpcu-product__rating wpcu-flex-center">
                        <?php wpcu_ratings($ratings); ?>
                        <span class="wpcu-product__rating__total">(<?php echo $product->get_rating_count();?>)</span>
                    </div>
                    <div class="wpcu-product__action-icons wpcu-product__action-icons--boxed">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1056" height="896" preserveAspectRatio="xMidYMid meet" viewBox="-3.63064 -66.0327 1030.76 1000.035" style="-ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);"><path d="M1022.74 17.3604l-83.4072 503.777c-7.44043 65.3115 -66.9766 118.432 -132.721 118.432h-70.6562v85.2803c0 130.16 -92.8477 236.032 -222.976 236.032c-130.096 0 -224.943 -105.872 -224.943 -236.032v-85.2803h-76.6719 c-65.7441 0 -125.28 -53.1201 -132.528 -117.056l-77.2803 -504.16c-2.97559 -26.5596 2.22461 -47.5039 15.4082 -62.2881c12.4316 -13.9043 30.5273 -20.9766 53.7432 -20.9766h873.568c32.9121 0 51.7764 13.2158 61.8408 24.3203 c9.21582 10.208 19.6475 28.1436 16.623 57.9512zM352.049 724.865c0 94.8477 66.127 172.031 160.943 172.031c94.816 0 158.977 -77.1836 158.977 -172.031v-85.2803h-319.92zM947.168 -0.446289l-872.498 -0.449219c-5.50391 0 -11.0078 2.94434 -9.71191 10.6885 l77.248 504.096c3.83984 33.4404 35.5039 61.6807 69.1523 61.6807h76.6885v-72.9277c-19.0723 -11.0723 -32.0479 -31.4883 -32.0479 -55.1367c0 -35.3438 28.6562 -64 64 -64s64 28.6562 64 64c0 23.6162 -12.9277 44 -31.9521 55.0879v72.9922h319.904v-72.9922 c-19.0078 -11.0879 -31.9521 -31.4883 -31.9521 -55.0879c0 -35.3438 28.6562 -64 64 -64s64 28.6562 64 64c0 23.6484 -12.9756 44.0645 -32.0479 55.1523v72.9277h70.6562c33.6641 0 65.3125 -28.2559 69.4082 -63.4395l83.3438 -503.28 c0.400391 -4.0957 -2.81543 -9.31152 -12.1914 -9.31152z"/></svg></a>
                        <a href="" class="wpcu-btn-modal-js" data-wpcu-target="wpcu-product-01" data-product-id="<?php echo get_the_ID(); ?>" data-nonce="<?php  echo wp_create_nonce('wcpcsu_quick_view_' . get_the_ID() ); ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1056" height="896" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1056 896" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M531 257q-39 0-74.5 15.5t-61 41t-41 61T339 449t15.5 75t41 61.5t61 40.5t74.5 15q53 0 97-25.5t69.5-69.5t25.5-97q0-79-56-135.5T531 257zm0 320q-34 0-64-17.5t-47.5-47T402 448q0-26 10-49.5t27.5-41t41-27.5t49.5-10q53 0 90.5 37.5T658 448t-37 91t-90 38zm509-136q0-1-.5-2.5t-.5-2.5t-.5-1.5l-.5-.5v-1l-1-2q-68-157-206-246.5T530 95q-107 0-206 39T144.5 249.5T18 431v2.5l-1 1.5v3l-1 2q-1 6-1 9q0 2 .5 4t.5 4q0 1 1 3v2l.5 1.5l.5.5v3q69 157 207.5 245.5T528 801q107 0 205.5-38.5T912 648t125-181q1 0 1-1v-1.5l.5-1l.5-.5v-3l1-2q1-6 1-9q0-2-.5-4t-.5-4zM528 737q-142 0-263-74.5T81 449q63-139 185-214.5T530 159q92 0 176.5 32T862 289.5T975 449q-63 139-184 213.5T528 737z"/><rect x="0" y="0" width="1056" height="896" fill="rgba(0, 0, 0, 0)" /></svg></a>
                        <?php do_action('wishlist_button');?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div><!-- ends: .wpcu-product -->
