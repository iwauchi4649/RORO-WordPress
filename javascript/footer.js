// footer-btn
jQuery(document).ready(function(){
  var pagetop = jQuery('.footer__return__top');
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 500) {
          pagetop.fadeIn();
      } 
      else {
          pagetop.fadeOut();
          }
      });
      pagetop.click(function () {
        jQuery('body, html').animate({ scrollTop: 0 }, 500);
          return false;
    });
});