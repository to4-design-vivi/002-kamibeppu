jQuery(function(){

    // PCサブメニューのホバーアクション
    jQuery("#js_nav_trigger").hover( function () {

        jQuery("#js_sub_nav").stop().fadeIn();
    }, function () {

        jQuery("#js_sub_nav").stop().fadeOut();
    });


    // SPハンバーガーメニュー
    jQuery("#js_sp_toggle").click(function() {
        jQuery(this).toggleClass("active");

        if (jQuery(this).hasClass("active")) {
            jQuery(".header_nav").slideDown();
        } else {
            jQuery(".header_nav").slideUp();
        }
    });
});