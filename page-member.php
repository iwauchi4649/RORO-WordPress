<?php
/*
Template Name: member
*/
?>
<?php get_header()?>
  <main class="member">
    <!-- bootstrap等で幅を与えたい時のためにcontainerクラスを作成 -->
    <div class="member__container">
      <div class="member__container__person">
        <div class="member__container__person__content">
          <!-- 右55% -->
          <div class="member__container__person__content__box right">
            <img class="right__img" alt="Syoma" src="<?php echo get_template_directory_uri()?>/images/syoma.png">
          </div>
          <!-- 左45% -->
          <div class="member__container__person__content__box left">
            <div class="member__container__person__content__box__name">
              <h2 class="member__container__person__content__box__name__full">岩内 奨馬</h2>
              <p class="member__container__person__content__box__name__romaji">Syoma Iwauchi</p>
              <p class="member__container__person__content__box__name__occupation">アホアホプログラマー</p>
              <ul class="member__container__person__content__box__name__sns">
                <!-- iタグのno-iを外すと水色に変化 -->
                <li class="twitter"><a href="#" class="link-twitter sns-first-margin"><i class="fab fa-twitter no-i"></i></a></li>
                <li class="instagram"><a href="#" class="sns-link sns-middle-margin"><i class="fab fa-instagram no-i"></i></a></li>
                <li class="youtube"><a href="#" class="sns-link sns-middle-margin"><i class="fab fa-youtube no-i"></i></a></li>
                <li class="qiita"><a href="#" class="sns-link sns-middle-margin"><i class="fas fa-search no-i"></i></a></li>
                <li class="github"><a href="#" class="sns-link sns-middle-margin"><i class="fab fa-github no-i"></i></a></li>
                <li class="link"><a href="#" class="sns-link sns-last-margin"><i class="fas fa-link no-i"></i></a></li>
              </ul>
            </div>
            <div class="member__container__person__content__box__sentence">
              <p class="member__container__person__content__box__sentence__text">
                1993年生まれ、大阪育ち。
                <br><br>
                大学を卒業後に営業職をこなしつつ、vbaを使用し業務を効率化しておりました。最初にvbaを使用した時は感動し、「プログラミングで便利なサービスを展開してみたい」と考え方が変わり未経験からエンジニアを目指すようになりました。
                <br><br>
                趣味は麻雀で天鳳でのレートは2065で、アクティブユーザーの上位2%以内をキープしております。いわゆるネトゲ廃人。最近は盆栽に手を出そうとしており、方向性が読めない多趣味でユニークなクリエイターです。キャンプも好きで、youtuberデビューを果たそうとソロキャンプを計画中。
              </p>
            </div>
            <div class="member__container__person__content__box__skill">
              <h3 class="member__container__person__content__box__skill__title">スキルセット</h3>
              <ul class="member__container__person__content__box__skill__element">
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Adobe Xd</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer()?>