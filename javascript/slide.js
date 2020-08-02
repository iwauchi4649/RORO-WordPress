// jQueryの.slick
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

// javascriptのみでスライダーを実現
function sliderStart() {

  const slide = document.getElementById('slide_wrap');      //スライダー親
  const slideItem = slide.querySelectorAll('.slide_item');   //スライド要素
  const totalNum = slideItem.length - 1;                     // スライドの枚数を取得
  const FadeTime = 2000;                                     //フェードインの時間
  const IntarvalTime = 5000;                                 //クロスフェードさせるまでの間隔
  let actNum = 0;                                            //現在アクティブな番号
  let nowSlide;                                              //現在表示中のスライド
  let NextSlide;                                             //次に表示するスライド

  // DOM読み込み時にスライドの1枚目をフェードイン
  slideItem[0].classList.add('show_', 'zoom_');

  // 処理を繰り返す
  setInterval(() => {
      if (actNum < totalNum) {
        
          nowSlide = slideItem[actNum];
          NextSlide = slideItem[++actNum];

          //.show_削除でフェードアウト
          nowSlide.classList.remove('show_');
          // と同時に、次のスライドがズームしながらフェードインする
          NextSlide.classList.add('show_', 'zoom_');
          //フェードアウト完了後、.zoom_削除
          setTimeout(() => {
              nowSlide.classList.remove('zoom_');
          }, FadeTime);


      } else {

          nowSlide = slideItem[actNum];
          NextSlide = slideItem[actNum = 0];

          //.show_削除でフェードアウト
          nowSlide.classList.remove('show_');
          // と同時に、次のスライドがズームしながらフェードインする
          NextSlide.classList.add('show_', 'zoom_');
          //フェードアウト完了後、.zoom_削除
          setTimeout(() => {
              nowSlide.classList.remove('zoom_');
          }, FadeTime);

      };
  }, IntarvalTime);
}

// 文章をフェードイン
/* 到達したら要素を表示させる */
function showElementAnimation() {
  var element = document.getElementsByClassName("js-fadein");
  if (!element) return; // 要素がなかったら処理をキャンセル

  var showTiming = window.innerHeight > 768 ? 200 : 80; // 要素が出てくるタイミングはここで調整
  var scrollY = window.pageYOffset; //スクロール量を取得
  var windowH = window.innerHeight; //ブラウザウィンドウのビューポート(viewport)の高さを取得

  for (var i = 0; i < element.length; i++) {
    var elemClientRect = element[i].getBoundingClientRect();
    var elemY = scrollY + elemClientRect.top;
    if (scrollY + windowH - showTiming > elemY) {
      element[i].classList.add("is-show");
    } else if (scrollY + windowH < elemY) {
      // 上にスクロールして再度非表示にする場合はこちらを記述
      element[i].classList.remove("is-show");
    }
  }
}
showElementAnimation();
window.addEventListener("scroll", showElementAnimation);

//準備
let cursorR = 4; //カーソルの半径
const cursor = document.getElementById("cursor"); //カーソル用のdivを取得

//上記のdivタグをマウスに追従させる処理
document.addEventListener("mousemove", function (e) {
  cursor.style.transform =
    "translate(" + e.clientX + "px, " + e.clientY + "px)";
});

//リンクにホバー時はクラスをつける
const linkElem = document.querySelectorAll("a");
for (let i = 0; i < linkElem.length; i++) {
  linkElem[i].addEventListener("mouseover", function (e) {
    cursor.classList.add("hov_");
  });
  linkElem[i].addEventListener("mouseout", function (e) {
    cursor.classList.remove("hov_");
  });
}