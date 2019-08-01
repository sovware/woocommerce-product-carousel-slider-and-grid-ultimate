jQuery(document).ready(function($) {
$(".lcsp-tabs-menu a").click(function(event) {
    event.preventDefault();
    $(this).parent().addClass("current");
    $(this).parent().siblings().removeClass("current");
    var tab = $(this).attr("href");
    $(".lcsp-tab-content").not(tab).css("display", "none");
    $(tab).fadeIn();
});

    //color picker
    jQuery( '.cpa-color-picker' ).wpColorPicker();

    //Layout select
    $("#lcg").change(function() {

        if($(this).val() === 'carousel') {
            $("#tab2").css('display', 'block');
            $("#tab3").css('display', 'none');
            $("#wcpscu_total_pdt").html("Total Products to Display");
        }


        if($(this).val() === 'grid'){
            $("#tab2").css('display', 'none');
            $("#tab3").css('display', 'block');
            $("#wcpscu_total_pdt").html("Products Per Page");
        }

    });

    $('#theme1, #theme2').hide();

    var $theme = $('#c_theme'); // get theme jQuery object

    var currentTheme = $theme.val(); // get current theme

    $('#' + currentTheme).show(); // show current theme
    $theme.on('change',function(){
        var $this = $(this);

        ('c_theme1' == $this.val() ) ? $('#theme1').show() : $('#theme1').hide();
        ('c_theme2' == $this.val() ) ? $('#theme2').show() : $('#theme2').hide();


    });
});