
<div class='main' id='theme_1'>
<?php 
 while($loop->have_posts()) : $loop->the_post(); 
 $aazz_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
 $wpcsu_img = $aazz_thumb['0'];
 ?>
    <?php  if ( has_post_thumbnail( $loop->post->ID ) ) { ?>
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
 <?php
endwhile; ?>
</div>