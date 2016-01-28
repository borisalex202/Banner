jQuery(document).ready(function(){
    jQuery('.close').click(function(){
        jQuery(this).closest('.modal-form').animate({opacity:"hide"}, 400);
        jQuery('.btn-open').show();
        jQuery('body').removeClass('bg_shadow');
    });
    jQuery('.btn-open').click(function(){
        jQuery(this).hide()
        jQuery('body').addClass('bg_shadow');
    });
    jQuery('.btn-open.menu').click(function(){
        jQuery(this).closest('.wrapper').find('#main-menu').animate({left:0, opacity:"show"}, 700);
    });
    jQuery('.btn-open.reviews').click(function(){
        jQuery(this).closest('.wrapper').find('#reviews').animate({right:0, opacity:"show"}, 700);
    });
    jQuery('.desc').click(function(){
        jQuery(this).closest('.wrapper').find('#description').animate({right:0, opacity:"show"}, 700);
        jQuery(this).closest('.modal-form').animate({opacity:"hide"}, 400);
    });
    jQuery('.about').click(function(){
        jQuery(this).closest('.wrapper').find('#about_us').animate({right:0, opacity:"show"}, 700);
        jQuery(this).closest('.modal-form').animate({opacity:"hide"}, 400);
    });
    jQuery('.products').click(function(){
        jQuery(this).closest('.wrapper').find('#products').animate({right:0, opacity:"show"}, 700);
        jQuery(this).closest('.modal-form').animate({opacity:"hide"}, 400);
    });
});