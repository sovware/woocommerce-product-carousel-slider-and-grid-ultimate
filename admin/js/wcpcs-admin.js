jQuery(document).ready(function ($) {
    $(".lcsp-tabs-menu a").click(function (event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".lcsp-tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    //color picker
    jQuery('.cpa-color-picker').wpColorPicker();


    $('.cmd-switch > div').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('active');
        $(this).siblings().each(function () {
            $(this).removeClass('active');

        });
    });

    $(".cmd-switch-carousel").on('click',function (e) {
        e.preventDefault();
        $(".wcpscu_grid_layout").removeAttr('checked');
        $(".wcpscu_carousel_layout").attr('checked', true);
        $("#tab2").css('display', 'block');
        $("#tab3").css('display', 'none');
        $("#wcpscu_total_pdt").html("Total Products to Display");
    });

    $(".cmd-switch-grid").on('click',function (e) {
        e.preventDefault();
        $(".wcpscu_carousel_layout").removeAttr('checked');
        $(".wcpscu_grid_layout").attr('checked', true);
        $("#tab2").css('display', 'none');
        $("#tab3").css('display', 'block');
        $("#wcpscu_total_pdt").html("Products Per Page");
    });





    $('.wcpscu_cart_icon, .theme_1, .theme_2, .theme_3, .theme_4, .theme_5, .theme_6, .theme_7, .theme_8, .theme_9, .theme_10, .theme_11, .theme_12, .theme_13, .theme_14, .theme_15').hide();

    var $theme = $('.wcpscu_theme'); // get theme jQuery object

    var currentTheme = $theme.val(); // get current theme

    $('.' + currentTheme).show(); // show current theme
    $theme.on('change', function () {
        var $this = $(this);

        ('theme_1' == $this.val()) ? $('.theme_1').show() : $('.theme_1').hide();
        ('theme_2' == $this.val()) ? $('.theme_2').show() : $('.theme_2').hide();
        ('theme_3' == $this.val()) ? $('.theme_3').show() : $('.theme_3').hide();
        ('theme_4' == $this.val()) ? $('.theme_4').show() : $('.theme_4').hide();
        ('theme_5' == $this.val()) ? $('.theme_5').show() : $('.theme_5').hide();
        ('theme_6' == $this.val()) ? $('.theme_6').show() : $('.theme_6').hide();
        ('theme_7' == $this.val()) ? $('.theme_7').show() : $('.theme_7').hide();
        ('theme_8' == $this.val()) ? $('.theme_8').show() : $('.theme_8').hide();
        ('theme_9' == $this.val()) ? $('.theme_9').show() : $('.theme_9').hide();
        ('theme_10' == $this.val()) ? $('.theme_10').show() : $('.theme_10').hide();
        ('theme_11' == $this.val()) ? $('.theme_11').show() : $('.theme_11').hide();
        ('theme_12' == $this.val()) ? $('.theme_12').show() : $('.theme_12').hide();
        ('theme_13' == $this.val()) ? $('.theme_13').show() : $('.theme_13').hide();
        ('theme_14' == $this.val()) ? $('.theme_14').show() : $('.theme_14').hide();
        ('theme_15' == $this.val()) ? $('.theme_15').show() : $('.theme_15').hide();

        if( $this.val() == 'theme_10' || $this.val() == 'theme_11' ) {
            $('.wcpscu_quickView_button').show();
        } else {
            $('.wcpscu_quickView_button').hide();
        }

        if( $this.val() == 'theme_4' || $this.val() == 'theme_11' ) {
            $('.wcpscu_cart_button').hide();
        } else {
            $('.wcpscu_cart_button').show();
        }

        if( $this.val() == 'theme_4' || $this.val() == 'theme_5' || $this.val() == 'theme_6' || $this.val() == 'theme_7' || $this.val() == 'theme_8' || $this.val() == 'theme_9' || $this.val() == 'theme_10' || $this.val() == 'theme_11' || $this.val() == 'theme_12' || $this.val() == 'theme_13' || $this.val() == 'theme_14' || $this.val() == 'theme_15' ) {
            $('.wcpscu_action_icon').show();
        } else {
            $('.wcpscu_action_icon').hide();
        }
    });

    if( $('.wcpscu_theme').val() == 'theme_10' || $('.wcpscu_theme').val() == 'theme_11' ) {
        $('.wcpscu_quickView_button').show();
    } else {
        $('.wcpscu_quickView_button').hide();
    }

    if( $('.wcpscu_theme').val() == 'theme_4' || $('.wcpscu_theme').val() == 'theme_11' ) {
        $('.wcpscu_cart_button').hide();
    } else {
        $('.wcpscu_cart_button').show();
    }

    if( $('.wcpscu_theme').val() == 'theme_4' || $('.wcpscu_theme').val() == 'theme_5' || $('.wcpscu_theme').val() == 'theme_6' || $('.wcpscu_theme').val() == 'theme_7' || $('.wcpscu_theme').val() == 'theme_8' || $('.wcpscu_theme').val() == 'theme_9' || $('.wcpscu_theme').val() == 'theme_10' || $('.wcpscu_theme').val() == 'theme_11' || $('.wcpscu_theme').val() == 'theme_12' || $('.wcpscu_theme').val() == 'theme_13' || $('.wcpscu_theme').val() == 'theme_14' || $('.wcpscu_theme').val() == 'theme_15') {
        $('.wcpscu_action_icon').show();
    } else {
        $('.wcpscu_action_icon').hide();
    }

    $('.wcpscu_radio_layout').hide();

    // autoplay dependable
    if( $("input[name='wcpscu[A_play]']:checked").val() === 'yes' ) {
        $('.wpcu_auto_play_depend').show();
    } else {
        $('.wpcu_auto_play_depend').hide();
    }

    $('.wcpcu_auto_play').on('click', function(){ 
        if( $(this).val() === 'yes' ) {
            $('.wpcu_auto_play_depend').show();
        } else {
            $('.wpcu_auto_play_depend').hide();
        }
    });

    //header title
    if( $("input[name='wcpscu[h_title_show]']:checked").val() === 'yes' ) {
        $('.wcpcsu_header_dependency').show();
    } else {
        $('.wcpcsu_header_dependency').hide();
    }

    $('.wpcpsu_display_header_title').on('click', function(){
        if( $(this).val() === 'yes' ) {
            $('.wcpcsu_header_dependency').show();
        } else {
            $('.wcpcsu_header_dependency').hide();
        }
    });

    //navigation dependable
    if( $("input[name='wcpscu[nav_show]']:checked").val() === 'yes' ) {
        $('.wpcu_navigation_depend').show();
    } else {
        $('.wpcu_navigation_depend').hide();
    }

    $('.wcpcu_navigation').on('click', function(){ 
        if( $(this).val() === 'yes' ) {
            $('.wpcu_navigation_depend').show();
        } else {
            $('.wpcu_navigation_depend').hide();
        }
    });

    //carausel pagination dependable
    if( $("input[name='wcpscu[carousel_pagination]']:checked").val() === 'yes' ) {
        $('.wpcu_carousel_pagination_depend').show();
    } else {
        $('.wpcu_carousel_pagination_depend').hide();
    }

    $('.wcpcu_carousel_pagination').on('click', function(){ 
        if( $(this).val() === 'yes' ) {
            $('.wpcu_carousel_pagination_depend').show();
        } else {
            $('.wpcu_carousel_pagination_depend').hide();
        }
    });

    

    //product type
    $('#random_products_bycategory, #wcpscup_products_bycategory, #top_rated_products_bycategory, .specific-categories.top_rated, #wcpscup_products_bycategory1, #wcpscup_products_bycategory2, #wcpscup_products_bycategory3, #wcpscup_products_bycategory4, #wcpscup_products_bycategory5, #wcpscup_products_byid, #wcpscup_prodcuts_bysku, #wcpscup_products_bytag, #wcpscup_prodcuts_from_year, #wcpscup_prodcuts_from_month, #wcpscup_prodcuts_from_month_year, .specific-categories.latest, .specific-categories.older, .specific-categories.onsale, .specific-categories.bestselling, .specific-categories.featured, .specific-categories.random, #custom_ribbon, #prodcuts_from_days_ago, .specific-days').hide();

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type') {
            $('#wcpscup_products_bycategory, .specific-categories.latest, #prodcuts_from_days_ago, .specific-days').show();
        }
        else {
            $('#wcpscup_products_bycategory, .specific-categories.latest, #prodcuts_from_days_ago, .specific-days').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type1') {
            $('#wcpscup_products_bycategory1, .specific-categories.onsale').show();
        }
        else {
            $('#wcpscup_products_bycategory1, .specific-categories.onsale').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type2') {
            $('#wcpscup_products_bycategory2, .specific-categories.bestselling').show();
        }
        else {
            $('#wcpscup_products_bycategory2, .specific-categories.bestselling').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type3') {
            $('#wcpscup_products_bycategory3, .specific-categories.featured').show();
        }
        else {
            $('#wcpscup_products_bycategory3, .specific-categories.featured').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type4') {
            $('#wcpscup_products_byid').show();
        }
        else {
            $('#wcpscup_products_byid').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type5') {
            $('#wcpscup_prodcuts_bysku').show();
        }
        else {
            $('#wcpscup_prodcuts_bysku').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type6') {
            $('#wcpscup_products_bytag').show();
        }
        else {
            $('#wcpscup_products_bytag').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type7') {
            $('#wcpscup_prodcuts_from_year').show();
        }
        else {
            $('#wcpscup_prodcuts_from_year').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type8') {
            $('#wcpscup_prodcuts_from_month, #wcpscup_prodcuts_from_month_year').show();
        }
        else {
            $('#wcpscup_prodcuts_from_month, #wcpscup_prodcuts_from_month_year').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type9') {
            $('#wcpscup_products_bycategory4, .specific-categories.older').show();
        }
        else {
            $('#wcpscup_products_bycategory4, .specific-categories.older').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type_rand') {
            $('#random_products_bycategory, .specific-categories.random').show();
        }
        else {
            $('#random_products_bycategory, .specific-categories.random').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type_top_rated') {
            $('#top_rated_products_bycategory, .specific-categories.top_rated').show();
        }
        else {
            $('#top_rated_products_bycategory, .specific-categories.top_rated').hide();
        }
    });

    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'wcpscup_products_type10') {
            $('#wcpscup_products_bycategory5').show();
        }
        else {
            $('#wcpscup_products_bycategory5').hide();
        }
    });



    if( $('input[id=wcpscup_products_type]').is(':checked') ) {
        $('#wcpscup_products_bycategory, .specific-categories.latest').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type1]').is(':checked') ) {
        $('#wcpscup_products_bycategory1, .specific-categories.onsale').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type2]').is(':checked') ) {
        $('#wcpscup_products_bycategory2, .specific-categories.bestselling').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type3]').is(':checked') ) {
        $('#wcpscup_products_bycategory3, .specific-categories.featured').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type4]').is(':checked') ) {
        $('#wcpscup_products_byid').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type5]').is(':checked') ) {
        $('#wcpscup_prodcuts_bysku').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type6]').is(':checked') ) {
        $('#wcpscup_products_bytag').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type7]').is(':checked') ) {
        $('#wcpscup_prodcuts_from_year').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type8]').is(':checked') ) {
        $('#wcpscup_prodcuts_from_month, #wcpscup_prodcuts_from_month_year').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type9]').is(':checked') ) {
        $('#wcpscup_products_bycategory4, .specific-categories.older').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type_rand]').is(':checked') ) {
        $('#random_products_bycategory, .specific-categories.random').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type_top_rated]').is(':checked') ) {
        $('#top_rated_products_bycategory, .specific-categories.top_rated').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type10]').is(':checked') ) {
        $('#wcpscup_products_bycategory5').addClass('wcpscup_active');
    }
    if( $('input[id=wcpscup_products_type_days_ago]').is(':checked') ) {
        $('#prodcuts_from_days_ago').addClass('wcpscup_active');
    }
    

});