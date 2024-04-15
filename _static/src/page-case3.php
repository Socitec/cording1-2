<?php

/**
 * Template Name: Case3
 * Description: 受講者の声3
 */
?>

<?php get_header(); ?>

<main class="main case-page">

  <!-- 受講事例 -->
  <section class="main__section" id="case">
    <div class="container">
      <h2 class="c_heading-text">
        受講者の声
      </h2>
      <div class="c_heading-icon-area casePage-heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <div class="main-area">
        <h3 class="sub-heading-text">
          2ヶ月で月収10万UP！<br>
          複業案件数も増え、時給単価を上げられたことで仕事のモチベーションに！
        </h3>
        <div class="center-wrap">
          <div class="item-box">
            <div class="image-portion">
              <div class="top-text">
                <p class="case-text">Case</p>
                <p class="number number--pc">
                  03
                </p>
                <p class="name">
                  御堂河内麻衣さん<br>
                  （30代/女性）
                </p>
              </div>
              <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/case_person-3-pc.png" alt="case-person">
            </div>
            <div class="text-portion">
              <p class="career">
                会社員→<span class="career--strong">フリーランス</span>
              <p class="description-text">
                不動産、BPOサービスの提案営業を経て、更なる自己成長を目指しフリーランスに転進。<br>
                現在複数社から複業を獲得し、営業企画～実務まで幅広く対応している。
              </p>
            </div>
          </div>
          <div class="questions-box">
            <div class="question-item">
              <div class="question-portion">
                <p class="q-icon">
                  Q
                </p>
                <p class="question-text">
                  なぜ複業職人を受講しようと思ったのですか？
                </p>
              </div>
              <div class="answer-portion">
                <div class="a-icon-parts">
                  <p class="a-icon">
                    A
                  </p>
                </div>
                <p class="answer-text">会社員からフリーランスになり半年経った頃、講師の若色さん・高橋さんのセミナー参加がきっかけで受講しました。<br>
                  当時は安定した案件の獲得はできていたものの「このままでいいのかな？」という漠然とした不安があり、無料相談にて「報酬単価をあげる交渉をできるようになりたい」「営業戦略や更に上流業務にも挑戦したい」と相談したところ、自分のことを客観視して一緒に案件業務を整理したり、複業戦略を考えていける良い機会になると感じ、受講を決めました。
                </p>
              </div>
            </div>
            <div class="question-item">
              <div class="question-portion">
                <p class="q-icon">
                  Q
                </p>
                <p class="question-text">
                  複業職人を受講してどのような変化がありましたか？
                </p>
              </div>
              <div class="answer-portion">
                <div class="a-icon-parts">
                  <p class="a-icon">
                    A
                  </p>
                </div>
                <p class="answer-text">
                  複業職人のプログラムを通じて、仕事を洗い出して優先度を明確にしたり、自分の適性を客観視しながら、「これでいいんだっけ？」と振り返ることができました。<br>
                  また自分のスキルや強みを新たに発掘いただき、ハッシュタグ化して可視化することで自信に繋がったり、これまで自分では思い浮かばなかった仕事の適性も俯瞰して見出してくれました。目の前の複業にとどまらず、どのようなキャリアや人生にしたいか？も振り返られ、将来の幅を広げられるきっかけも掴めたと感じています。
                </p>
              </div>
            </div>
            <div class="question-item">
              <div class="question-portion">
                <p class="q-icon">
                  Q
                </p>
                <p class="question-text">
                  これから受講を検討する方へメッセージをお願いします！
                </p>
              </div>
              <div class="answer-portion">
                <div class="a-icon-parts">
                  <p class="a-icon">
                    A
                  </p>
                </div>
                <p class="answer-text">
                  仕事選びや報酬設定などを「正しく」設定し継続することで、複業はうまくいきます！<br>
                  ただ、フリーランスだと自分の時間にも限界があり、この仕事に自分が本当に合っているかどうか？報酬が見合っているかどうか？正しい判断は自分だけではわかりません。<br>
                  是非、複業職人を通じて講師のお二人の力を駆使して、自分のスキル/適性を見出していただき、新たな仕事にチャレンジされてみてはいかがでしょうか？
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- クロージング -->
  <section class="contact__section" id="contact">
    <div class="container">
      <h1 class="contact__heading-text">
        個性を活かして<span class="contact__heading--strong">複業</span>の<span class="contact__heading--strong">職人</span>を目指す
      </h1>
      <p class="description">
        複業職人を通じて、自分自身の個性を活かし、<br>
        あなたらしい複業を、人生をより豊かにする選択肢を、<br>
        一緒に模索していきましょう！
      </p>
      <a class="link" href="<?php echo home_url(); ?>/contact">
        <button class="contact-button">
          無料面談で複業スキルを発掘する
        </button>
      </a>
    </div>
  </section>

  <a class="fixed-button-link" href="<?php echo home_url(); ?>/contact">
    <div class="fixed-button">
      <div class="inner">
        <img class="chat-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/message_icon.png" alt="">
        <p class="button-text">
          無料面談で<br>
          複業スキルを<br>
          発掘する
        </p>
      </div>
    </div>
  </a>
</main>


<?php get_footer(); ?>