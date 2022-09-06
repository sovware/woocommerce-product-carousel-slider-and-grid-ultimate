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

    --wpcu-navArrowColor: #333;
    --wpcu-navArrowColorHover: #fff;

    --wpcu-navBgColor: #fff;
    --wpcu-navBgColorHover: #ff5500;
    
    --wpcu-navBoxWidth: 40px;
    --wpcu-navBoxWidthHover: 40px;
    
    --wpcu-navBoxHeight: 40px;
    --wpcu-navBoxHeightHover: 40px;

    --wpcu-navGutter: 0;
    --wpcu-navVerticalPosition: 96%;

    --wpcu-navBorderRadiusTop: 0px;
    --wpcu-navBorderRadiusRight: 0px;
    --wpcu-navBorderRadiusBottom: 0px;
    --wpcu-navBorderRadiusLeft: 0px;

    --wpcu-navBorderType: solid;
    --wpcu-navBorderWidthTop: 1px;
    --wpcu-navBorderWidthRight: 1px;
    --wpcu-navBorderWidthBottom: 1px;
    --wpcu-navBorderWidthLeft: 1px;

    --wpcu-navBorderColor: #fff;
    --wpcu-navBorderColorHover: #ff5500;

">
    <div class="wpcu-carousel-nav__btn wpcu-carousel-nav__btn--prev">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 1024" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M528 0q14 0 24 10q4 3 6 7t3 8.5t1 9t-1 8.5t-3 8t-6 8L96 515l450 450q6 6 8.5 15t0 18t-8.5 15q-10 10-24.5 10t-24.5-10L23 539q-10-10-10-24t10-24L504 10q10-10 24-10z"/><rect x="0" y="0" width="576" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
    </div>
    <div class="wpcu-carousel-nav__btn wpcu-carousel-nav__btn--next">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 1024" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M48 1023q-14 0-24.5-10T13 989t10-24l457-457L30 59q-6-7-8.5-16t0-17.5T30 10Q40 0 54.5 0T79 10l473 474q5 5 7.5 11.5t2.5 13t-2.5 12.5t-7.5 11L72 1013q-5 5-11.5 7.5T48 1023z"/><rect x="0" y="0" width="576" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
    </div>
</div>

