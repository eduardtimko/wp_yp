$('.slider-for').slick({
  dots: false,
});

 // $('.slick-arrow').each(function() {
 //   $(this).on('click',function() {
 //     $(this).parent('.slider-for').siblings('.wrap_imgdelit').find('.delit_nax').css({'position': 'absolute','opacity': '0'});
 //   })
 // });


$('.my_click_test').each(function() {
  $(this).on('click',function() {
    if($(this).parent('.sub2-w3l').parent('.click_main_w3l').find('.addClassBlock').find('.slick-active').width() === 0){
    $(this).parent('.sub2-w3l').parent('.click_main_w3l').find('.addClassBlock').addClass('addWidth100');
  }
  })
});


 $('.addClassBlock .slick-arrow').on('click',function() {
   $('.addClassBlock').removeClass('addWidth100');
 })
