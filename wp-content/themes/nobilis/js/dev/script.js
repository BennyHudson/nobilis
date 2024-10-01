var $ = jQuery.noConflict();

$(document).ready(function() {

	$('.container').fitVids();

	var footerHeight = $('footer').outerHeight();
  $('.footer-fix').css('padding-bottom', footerHeight);

  $('.mobile-nav-trigger').click(function(e) {
    e.preventDefault()
    $('.mobile-nav-overlay').fadeIn()
    $('.mobile-nav-close').fadeIn()
    $('.mobile-nav').addClass('active')
    $('html').css('overflow', 'hidden');
  })

  $('.mobile-nav-close').click(function(e) {
    e.preventDefault()
    $('.mobile-nav-overlay').fadeOut()
    $('.mobile-nav-close').fadeOut()
    $('.mobile-nav').removeClass('active')
    $('html').css('overflow', 'auto');
  })

  $('.menu-item-has-children > a').click(function(e) {
    e.preventDefault()
    $('.menu-item-has-children ul').slideToggle()
    $('.menu-item-has-children').toggleClass('active')
  })

  $('#quick-contact-trigger').click(function(e) {
    e.preventDefault();
    $('html').css('overflow', 'hidden');
    $('.overlay-cover, #contact-overlay').show().css('visibility', 'visible');
  });

  $('.overlay-close').click(function(e) {
    e.preventDefault();
    $('html').css('overflow', 'auto');
    $('.overlay-cover, .overlay-wrap').hide();
  });
});

enquire
  .register("screen and (min-width: 601px)", function() {
      $(document).ready(function() {
        $('.news-carousel').bxSlider({
          minSlides: 4,
          maxSlides: 4,
          moveSlides: 1,
          slideWidth: 335,
          slideMargin: 20,
          nextText: '<i class="fa fa-angle-right"></i>',
          prevText: '<i class="fa fa-angle-left"></i>',
          infiniteLoop: false,
          hideControlOnEnd: true,
        });
      });
  }, true)
  .register("screen and (max-width: 600px)", function() {
      $(document).ready(function() {
        $('.news-carousel').bxSlider({
          minSlides: 1,
          nextText: '<i class="fa fa-angle-right"></i>',
          prevText: '<i class="fa fa-angle-left"></i>',
          infiniteLoop: false,
          hideControlOnEnd: true,
        });

        $('.care-columns').bxSlider({
          minSlides: 1,
          nextText: '<i class="fa fa-angle-right"></i>',
          prevText: '<i class="fa fa-angle-left"></i>',
          infiniteLoop: false,
          hideControlOnEnd: true,
        });

        $('.landing-feature .quick-contact').insertBefore('.care-services')
      });
  });

var ieVersion = null;
if (document.body.style['msFlexOrder'] != undefined) {
    ieVersion = "ie10";
    $('html').addClass('ie-10');
}
if (document.body.style['msTextCombineHorizontal'] != undefined) {
    ieVersion = "ie11";
    $('html').removeClass('ie-10').addClass('ie-11');
}
