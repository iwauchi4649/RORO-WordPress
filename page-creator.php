<?php
/*
Template Name: creator
*/
?>
<?php get_header()?>
  <main class="creator">
    <!-- bootstrap等で幅を与えたい時のためにcontainerクラスを作成 -->
    <div class="creator__container">
      <div class="creator__container__introduction">
        <div class="creator__container__introduction__title">
          <span class="creator__container__introduction__title__span">
            所属クリエイター
          </span>
        </div>
        <!-- box4個の全体 -->
        <div class="creator__container__introduction__content">
          <!-- ulタグ1個で全体50%、つまり2人で1セット -->
          <ul class="creator__container__introduction__content__box">
            <!-- liは1個100%が2個並び -->
            <li class="creator__container__introduction__content__box__square">
              <!-- aタグにpaddingを持たせるためdisplay:blockを付与 -->
              <a href="#" class="square__text">
                <!-- position:absoluteで中央寄せ -->
                <span class="square__text__span">Syoma</span>
              </a>
            </li>
            <li class="creator__container__introduction__content__box__square">
              <a href="#" class="square__text">
                <span class="square__text__span">Takuro</span>
              </a>
            </li>
          </ul>
          <ul class="creator__container__introduction__content__box">
            <li class="creator__container__introduction__content__box__square">
              <a href="#" class="square__text">
                <span class="square__text__span">Takuma</span>
              </a>
            </li>
            <li class="creator__container__introduction__content__box__square">
              <a href="#" class="square__text">
                <span class="square__text__span">Hikaru</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
<?php get_footer()?>