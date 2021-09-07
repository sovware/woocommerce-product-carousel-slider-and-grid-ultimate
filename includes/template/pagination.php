<?php
if( 'grid' == $layout ) {
?>
<!-- .wpcu-pagination--left/.wpcu-pagination--right -->
<div class="wpcu-pagination" style="
    --wpcu-pagColor: #333;
    --wpcu-pagColorHover: #fff;
    --wpcu-pagBorderColor: #e4e4e4;
    --wpcu-pagBorderColorHover: #ff5500;
    --wpcu-pagBgColor: #fff;
    --wpcu-pagBgColorHover: #ff5500;
    --wpcu-pagActiveColor: #fff;
    --wpcu-pagActiveBorderColor: #ff5500;
    --wpcu-pagActiveBgColor: #ff5500;
">
    <?php
    echo wcpcsu_pagination( $loop, $paged );
    ?>
</div>
<?php } else { ?>
<!-- wpcu-carousel-pagination -->
<div class="wpcu-carousel-pagination"></div>
<?php } ?>