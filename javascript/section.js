jQuery(function(){
  jQuery('.works-continer__items__contents').hide();

  jQuery('.secList').on('click',function(){
    jQuery('.works-continer__items__contents').not($($(this).attr('href'))).hide();

    // フェードイン・アウトのアニメーション付で、表示・非表示を交互に実行する
    jQuery(jQuery(this).attr('href')).fadeToggle(1000);

    // show を使うと、表示するだけ （ 同じボタンを何回押しても変わらない ）
    // $($(this).attr('href')).show();
  });
});