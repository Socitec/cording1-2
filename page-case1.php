<?php

/**
 * Template Name: Case1
 * Description: 受講者の声1
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
          月1件成約50万円の営業売上から、<br>
          月5件成約350万円の過去最高記録を樹立！
        </h3>
        <div class="center-wrap">
          <div class="item-box">
            <div class="image-portion">
              <div class="top-text">
                <p class="case-text">Case</p>
                <p class="number number--pc">
                  01
                </p>
                <p class="name">
                  長木唯さん<br>
                  （30代/女性）
                </p>
              </div>
              <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/case_person-1-pc.png" alt="case-person">
            </div>
            <div class="text-portion">
              <p class="career">
                会社員→<span class="career--strong">個人事業主</span>
              </p>
              <p class="description-text">
                金融関連の窓口業務からキャリアをスタートし、自分の将来を考えて様々な業務へチャレンジした末、
                現在は広告サービスの提案営業職をメインに個人事業主として独立し、複数の仕事をこなしている。
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
                  複業職人受講前後で、ギャップはありましたか？
                </p>
              </div>
              <div class="answer-portion">
                <div class="a-icon-parts">
                  <p class="a-icon">
                    A
                  </p>
                </div>
                <p class="answer-text">
                  元々は複業のテクニックを授業のように一方的に教えてもらえるサービスだと思っていましたが、無料相談を通じて、逆に私自身の話を聞いていただき、営業同席を通じて、スキルや適性を見出してくれたうえで、私のライフスタイルに合わせたプログラムで進めてくれました。<br>
                  型のある一方通行ではなくコミュニケーションを大事にして、私の考えを引き出してくれる、良いギャップがありましたね。
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
                  自分では気づかない自分の特徴や良さを見てくれて、仕事の中で自分で意識できるようになっていきました。<br>
                  一人でどれだけ紙に書き出しても埋まらないものが整理されて、明確化されたイメージです。<br>
                  特に営業業務では、商材の良さを知っていれば売るためには十分だと思っていましたが、相手が何に困っているのか？商品の道筋を作っていくことが提案営業だということに気づき、そこから成果が出始めるようになっていきました。
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
                  今後自身の仕事におけるキャリア/方向性が描けないという方は、ぜひ受講いただくとよいと思います！<br>
                  会社員でもスキルを教えてもらえる場面はあると思いますが、実際に複業を100社経験されている複業職人の講師から得られる気づきは多く、複業はもちろん、現職の仕事や転職にも活きてくる学びがあるのではないかと思います。<br>
                  今の仕事をしながらスキルを発掘したい、複業をやってみたいけどなかなか踏み出せない方は、一度面談されてみてはいかがでしょうか？自分で気付けていないスキルも見出してもらえるかもしれません。
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