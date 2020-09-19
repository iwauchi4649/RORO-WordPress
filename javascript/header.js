// ハンバーガーメニュー
jQuery(".toggle").on("click", function () {
  jQuery('.toggle').toggleClass('active');
  jQuery('.header__container__responsive-button').toggleClass('active');
  jQuery('.header__container__global-menu').toggleClass('active');
});

// スクロールすると上からニョキっと出てきてそのまま追従するメニューの実装
var navPos = jQuery( '#header' ).offset().top; // グローバルメニューの位置
var navHeight = jQuery( '#header' ).outerHeight(); // グローバルメニューの高さ
jQuery( window ).on( 'scroll', function() {
  if ( 1000 < jQuery( this ).scrollTop() ) { // 1000px以上スクロールしたら
    jQuery( '#header' ).addClass( 'is-fixed' );
  } else {
    jQuery( '#header' ).removeClass( 'is-fixed' );
  }
});
