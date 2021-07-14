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

    //Layout select
    $("#lcg").change(function () {

        if ($(this).val() === 'carousel') {
            $("#tab2").css('display', 'block');
            $("#tab3").css('display', 'none');
            $("#wcpscu_total_pdt").html("Total Products to Display");
        }



        if ($(this).val() === 'grid') {
            $("#tab2").css('display', 'none');
            $("#tab3").css('display', 'block');
            $("#wcpscu_total_pdt").html("Products Per Page");
        }

    });


    $('.cmd-switch > div').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('active');
        $(this).siblings().each(function () {
            $(this).removeClass('active');

        });
    });

    $(".cmd-switch-carousel").on('click',function (e) {
        e.preventDefault();
        $(".wcpscu_carousel_layout").attr('checked', true);
        $("#tab2").css('display', 'block');
        $("#tab3").css('display', 'none');
        $("#wcpscu_total_pdt").html("Total Products to Display");
    });

    $(".cmd-switch-grid").on('click',function (e) {
        e.preventDefault();
        $(".wcpscu_grid_layout").attr('checked', true);
        $("#tab2").css('display', 'none');
        $("#tab3").css('display', 'block');
        $("#wcpscu_total_pdt").html("Products Per Page");
    });





    $('.theme_1').hide();

    var $theme = $('.wcpscu_theme'); // get theme jQuery object

    var currentTheme = $theme.val(); // get current theme

    $('.' + currentTheme).show(); // show current theme
    $theme.on('change', function () {
        var $this = $(this);

        ('theme_1' == $this.val()) ? $('.theme_1').show(): $('.theme_1').hide();
        ('theme_2' == $this.val()) ? $('.theme_2').show(): $('.theme_2').hide();
        ('theme_3' == $this.val()) ? $('.theme_3').show(): $('.theme_3').hide();

    });

    $('.wcpscu_radio_layout').hide();
    

});