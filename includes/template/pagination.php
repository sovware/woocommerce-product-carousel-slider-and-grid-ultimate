<?php
if( 'grid' == $layout ) {
?>
<!-- .wpcu-pagination--left/.wpcu-pagination--right -->
<div class="wpcu-pagination">
    <?php
    echo wcpcsu_pagination( $loop, $paged );
    ?>
</div>
<?php } else { ?>
<!-- wpcu-carousel-pagination -->
<div class="wpcu-carousel-pagination"></div>
<?php } ?>