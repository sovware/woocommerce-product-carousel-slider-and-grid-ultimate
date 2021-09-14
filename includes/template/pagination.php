<?php
if( 'grid' == $layout ) {
?>
<!-- .wpcu-pagination--left/.wpcu-pagination--right -->
<div class="wpcu-pagination" style="
    --wpcu-pagColor: <?php echo $pagi_color; ?>;
    --wpcu-pagColorHover: <?php echo $pagi_hover_color; ?>;
    --wpcu-pagBorderColor: <?php echo $pagi_border_color; ?>;
    --wpcu-pagBorderColorHover: <?php echo $pagi_hover_border_color; ?>;
    --wpcu-pagBgColor: <?php echo $pagi_back_color; ?>;
    --wpcu-pagBgColorHover: <?php echo $pagi_hover_back_color; ?>;
    --wpcu-pagActiveColor: <?php echo $pagi_active_color; ?>;
    --wpcu-pagActiveBorderColor: <?php echo $pagi_active_border_color; ?>;
    --wpcu-pagActiveBgColor: <?php echo $pagi_active_back_color; ?>;
">
    <?php
    echo wcpcsu_pagination( $loop, $paged );
    ?>
</div>
<?php } else { ?>
<!-- wpcu-carousel-pagination -->
<div class="wpcu-carousel-pagination" style="
    --wpcu-dotsColor: <?php echo $dots_color; ?>;
    --wpcu-dotsActiveColor: <?php echo $dots_active_color; ?>;
"></div>
<?php } ?>