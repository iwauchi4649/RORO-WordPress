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
