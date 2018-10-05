jQuery('.slider-for').slick({
  dots: false,
});
jQuery('.my_click_test').each(function() {
  jQuery(this).on('click',function() {
    if(jQuery(this).parent('.sub2-w3l').parent('.click_main_w3l').find('.addClassBlock').find('.slick-active').width() === 0){
    jQuery(this).parent('.sub2-w3l').parent('.click_main_w3l').find('.addClassBlock').addClass('addWidth100');
  }
  })
});


 jQuery('.addClassBlock .slick-arrow').on('click',function() {
   jQuery('.addClassBlock').removeClass('addWidth100');
 })


jQuery('#topMenu li a').addClass('hvr-overline-from-center scroll');
