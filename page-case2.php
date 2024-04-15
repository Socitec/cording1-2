<?php

/**
 * Template Name: Case2
 * Description: 受講者の声2
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
          平均3ヶ月で終了していた複業案件が<br>
          平均6ヶ月以上続くようになることで起業のきっかけに！
        </h3>
        <div class="center-wrap">
          <div class="item-box">
            <div class="image-portion">
              <div class="top-text">
                <p class="case-text">Case</p>
                <p class="number number--pc">
                  02
                </p>
                <p class="name">
                  荒井祥平さん<br>
                  （20代/男性）
                </p>
              </div>
              <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/case_person-2-pc.png" alt="case-person">
            </div>
            <div class="text-portion">
              <p class="career">
                会社員→個人事業主→<span class="career--strong">会社経営</span></p>
              <p class="description-text">
                飲食店向け、医療機関向け、SaaS等様々な商材のインサイドセールスでキャリアを積む。
                個人事業主を経て、現在は起業し、自身の会社の代表を務める。
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
                <p class="answer-text">
                  元々講師の若色さん、高橋さんの活躍をX（旧Twitter）にて拝見しており、新規事業や人材マッチング事業を伸ばしてきている経験から、「人の魅せ方」や「プロジェクトの継続の仕方」に長けている方だろうと感じていたためです。<br>
                  実際にお話をしてみると、やはり人の強みを引き出すことが上手いことを実感し、今の自分に足りないものを見出せるのではないかと思い、複業職人を受講することを決めました。
                </p>
              </div>
            </div>
            <div class="question-item">
              <div class="question-portion">
                <p class="q-icon">
                  Q
                </p>
                <p class="question-text">
                  複業職人の1on1を通じてどのような変化がありましたか？
                </p>
              </div>
              <div class="answer-portion">
                <div class="a-icon-parts">
                  <p class="a-icon">
                    A
                  </p>
                </div>
                <p class="answer-text">
                  1on1を通じて、クライアント1社1社の相談に乗っていただき、自分のスキル/強みを踏まえた提案内容を再度考えなおせたことで、複業獲得における提案資料の精度が上がり、受注件数も増えました。<br>
                  また複業を獲得した後に、どのような対応をしていけばよいか？クライアントをリードする方法も学ぶことができ、急に業務終了に至ることが無くなり、契約期間も長期化することができました。<br>
                  売上が安定したことで法人化に進めることもできました。
                </p>
              </div>
            </div>
            <div class="question-item">
              <div class="question-portion">
                <p class="q-icon">
                  Q
                </p>
                <p class="question-text">
                  複業職人はどのような方へお勧めしたいですか？
                </p>
              </div>
              <div class="answer-portion">
                <div class="a-icon-parts">
                  <p class="a-icon">
                    A
                  </p>
                </div>
                <p class="answer-text">
                  複業案件を安定して獲得していきたい方や、案件獲得ができているものの契約期間が短期で終わってしまう悩みを持たれている方にオススメです。<br>
                  高単価で案件獲得できない...なぜ急に案件が終了してしまうのか...？自分では分からないことだらけでしたが、第三者目線で各案件の状況を見ていただき、一緒に今後のtodoや具体的施策まで、共に考えていただくところまで伴走してくれることで自分だけでどちらも払拭することができました...！<br>
                  ここまで併走～コミットしてくれるサービスは、他には見たことがないのでまずはご面談をお勧めします！
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