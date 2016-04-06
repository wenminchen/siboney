/*!
 * Siboney - Template for personal website
 * Designed and Developed by Wenmin Chen (www.wenminchen.com)
 */

//scroll to top
$(function(){
    $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 100) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
    $('.scroll-top-wrapper').on('click', scrollToTop);
  });
 
  function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
  }

//carousel
$('#myCarousel').carousel({
    interval: 2000,
});

$('#testiCarousel').carousel({
    interval:   4000
});
