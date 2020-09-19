// ハンバーガーメニュー
jQuery(".toggle").on("click", function () {
  jQuery('.toggle').toggleClass('active');
  jQuery('.header__container__responsive-button').toggleClass('active');
  jQuery('.header__container__global-menu').toggleClass('active');
});

// スクロールすると上からニョキっと出てきてそのまま追従するメニューの実装
jQuery(function() {
  jQuery(window).on('load resize', function(){
        // masthead scroll
        var header   = jQuery('#header'); // fixed DOM
        var addclass = 'scrolled'; // add css class
        var offset   = header.offset();
        var scrollY  = offset.top; // scroll

        jQuery(window).scroll(function() {
        if (jQuery(window).scrollTop() > scrollY) {
            header.addClass(addclass);
        } 
        else {
            header.removeClass(addclass);
        }
    });
  });
});