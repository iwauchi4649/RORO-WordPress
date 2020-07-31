// jQuery(function () {
//   console.log("動作しました。");
// });
jQuery(function() {
  jQuery('.your-class').slick({
  autoplay: true, // 自動再生
  autoplaySpeed: 3000, // 自動再生で切り替えをする時間
  speed: 800, // 自動再生でスライドさせるスピード
  infinite: true, // 無限スクロール
  slidesToShow: 1, // スライドのエリアに画像がいくつ表示されるかを指定
  slidesToScroll: 1, // 一度にスライドする数
  arrows: true, // 左右の次へ、前へボタンを表示
  dots: true, // 画像下のドット（ページ送り）を表示
  });
});
