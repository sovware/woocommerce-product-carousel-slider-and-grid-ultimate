<!-- If we need navigation buttons -->
<!--
    Classes:
    -wpcu-carousel-nav--top-left
    -wpcu-carousel-nav--top-middle
    -wpcu-carousel-nav--top-right
    -wpcu-carousel-nav--bottom-left
    -wpcu-carousel-nav--bottom-middle
    -wpcu-carousel-nav--bottom-right
 -->
<div class="wpcu-carousel-nav wpcu-carousel-nav--<?php echo $nav_position; ?>" style="
  --navArrowColor: <?php echo $nav_arrow_color; ?>;
  --navArrowColorHover: <?php echo $nav_arrow_hover_color; ?>;
  --navBgColor: <?php echo $nav_back_color; ?>;
  --navBgColorHover: <?php echo $nav_back_hover_color; ?>;
  --navBorderColor: <?php echo $nav_border_color; ?>;
  --navBorderColorHover: <?php echo $nav_border_hover; ?>;
">
    <div class="wpcu-carousel-nav__btn wpcu-carousel-nav__btn--prev">
        <img src="<?php echo WCPCSU_URL .'assets/icons/arrow-left.svg' ?>" alt="" class="wpcu-svg">
    </div>
    <div class="wpcu-carousel-nav__btn wpcu-carousel-nav__btn--next">
        <img src="<?php echo WCPCSU_URL .'assets/icons/arrow-right.svg' ?>" alt="" class="wpcu-svg">
    </div>
</div>

