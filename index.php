<?php

/**
 * Template Name: Default
 * Description: デフォルトテンプレート
 */
?>

<?php get_header(); ?>

<main class="main">
  <!-- メインビジュアル -->

  <section class="firstview__section firstview__section--revise" id="firstview">
    <div class="container">
      <img class="topimg--pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_firstview-pc.png" alt="firstview">
      <img class="topimg--sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_firstview-sp.png" alt="firstview">
      <div class="button-area">
        <button class="button">
          <a class="button-link" href="<?php echo home_url(); ?>/contact">
            無料面談で複業スキルを発掘する
          </a>
        </button>
        <div id="aboutFukugyou"></div>
      </div>
      <div id="target"></div>
    </div>
  </section>

  <!-- こんな人におすすめ -->
  <!-- 
  <section class="target__section">
    <div class="container">
      <h2 class="c_heading-text">
        こんな人に <span class="text-large">オススメ</span>
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        複業をこれから考えている人も、既に始めている人も受講可能です
      </p>
      <div class="main-area">
        <div class="item">
          <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_target1.png" alt="people">
          <div class="text-portion">
            <p class="description-toptext">
              複業をしてみたいが<br>
              何から始めればよいか<br>
              わからない
            </p>
            <p class="description-bottomtext">
              複業の始め方から<br>
              取り組む流れまで<br>
              全体像を理解できます！
            </p>
          </div>
        </div>
        <div class="item">
          <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_target2.png" alt="people">
          <div class="text-portion">
            <p class="description-toptext">
              自分にどのような<br>
              複業ができるのか<br>
              わからない
            </p>
            <p class="description-bottomtext">
              ご自身の価値を見える化して<br>
              気づきづらい複業適職を<br>
              一緒に考えます！
            </p>
          </div>
        </div>
        <div class="item">
          <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_target3.png" alt="people">
          <div class="text-portion">
            <p class="description-toptext">
              報酬単価をもっと上げたり<br>
              単発でなく<br>
              長続きする複業を得たい
            </p>
            <p class="description-bottomtext">
              複業獲得におけるクライアントへの<br>
              提案方法や仕事が継続する<br>
              ポイントもお伝えします！
            </p>
          </div>
        </div>
      </div>
      <div id="about"></div>
    </div>
  </section>
  -->

  <!--  複業とは -->
  <section class="about__section about__section--revise" id="">
    <div class="container">
      <!-- <h2 class="c_heading-text">
        複業とは？
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        理想のライフスタイルを実現するための新しい働き方です
      </p> -->
      <div class="main-area">
      <div class="banner-area">
          <a href="https://amzn.asia/d/6BC1IFT" target="_blank" rel="noopener noreferrer">
            <img class="banner-img__book" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_book-ranking.jpg" alt="ranking-top">
          </a>
          <a href="https://www.1242.com/tytimes/tytimes_blog/20240502-317160/" target="_blank" rel="noopener noreferrer">
            <img class="banner-img__radio" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/radiobanner.jpg" alt="ranking-top">
          </a>
        </div>
        <div class="heading-box">
          <h3 class="heading2-text">
            <span class="heading2-text--strong">複業</span>という働き方は、<br>
            <span class="heading2-text--strong">理想のライフスタイル</span>を実現するための、<br>
            <span class="heading2-text--strong">あたらしい</span>働き方です。
          </h3>
        </div>
        <div class="button-box">
          <button class="about-button" id="js_about-button">
            「複業」と「副業」の違いとは？
          </button>
        </div>

        <!--       
        <img class="photo-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_about-pc.png" alt="doublework">
        <img class="photo-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_about-sp.png" alt="doublework">
        <div class="heading2-box">
          <h3 class="heading2-text">
            <span class="heading2-text--strong">複業</span>という働き方は、<br>
            <span class="heading2-text--strong">個性</span>を活かし、<br class="c_sp-emerge">人生を<span class="heading2-text--strong">豊か</span>にする。
          </h3>
        </div>
        <div class="description-box">
          <p class="description-text">
            <span class="description-text--number">1</span> 複数の企業で自分のスキルを自由に活かし<br>
            <span class="description-text--number">2</span> 指示された業務をこなすだけではなく、当事者意識を持って取り組み<br>
            <span class="description-text--number">3</span> どんな雇用（契約）形態であっても、複数の仕事に対し、いずれも本業として向き合う<br>
            私たちは、このような働き方を“<span class="description-text--strong"> 複業 </span>”と定義しています。
          </p>
          <p class="description-text">
            現在の仕事で得られる報酬額をプラスするための “副業” と比較して、<br class="c_sp-disappear">
            “<span class="description-text--strong">複業 </span>”は「<span class="description-text--strong">自己成長</span>」「<span class="description-text--strong">ライフスタイル</span>」「<span class="description-text--strong">社会貢献</span>」など、<br class="c_sp-disappear">
            あなたの思い描く 人生を理想のかたち にデザインするための選択肢となります。
          </p>
          <p class="description-text">
            私たちの定義する「<span class="description-text--strong">複業職人</span>」は、特定の企業内にとどまらず、ご自身のスキルを活かして<br class="c_sp-disappear">
            戦略から実行まで能動的に取り組むプロフェッショナルを指しています。
            指示待ちで外注として働く人材に比べて<span class="description-text--strong">圧倒的な差別化</span> を図れるうえ、<br class="c_sp-disappear">
            あなたの意識と努力次第でワークライフバランスを飛躍的に向上させることができます。
          </p>
          <p class="author-text">
            複業マイスター　若色広大　高橋範慈
          </p>
        </div> -->
      </div>
    </div>
    <div id="aboutFukugyouShokunin"></div>
  </section>

  <!-- ポップアップ-複業と副業の違い -->
  <div class="about-popup-block c_popup-block" id="js_about-popup-block">
    <div class="inner-box c_inner-box">
      <i class="fa-solid fa-xmark close-button" id="js_about-close-button"></i>
      <div class="main-content">
        <div class="top-portion">
          <p class="top-text">
            <span class="top-text--strong">“複業” </span>という働き方は、
          </p>
          <p class="top-text">
            <span class="top-text--strong">個性 </span>を活かし、人生を <span class="top-text--strong">豊か</span> にする。
          </p>
        </div>
        <img class="photo-sp c_tb-emerge" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_about-sp.png" alt="doublework">
        <div class="description-box">
          <p class="description-text">
            <span class="description-text--number">1.</span> 複数の企業で自分のスキルを自由に活かし<br>
            <span class="description-text--number">2.</span> 指示された業務をこなすだけではなく、当事者意識を持って取り組み<br>
            <span class="description-text--number">3.</span> どんな雇用（契約）形態であっても、複数の仕事に対し、いずれも本業として向き合う<br>
            私たちは、このような働き方を“<span class="description-text--strong"> 複業 </span>”と定義しています。
          </p>
          <p class="description-text">
            現在の仕事で得られる報酬額をプラスするための “副業” と比較して、<br class="c_sp-disappear">
            “<span class="description-text--strong">複業 </span>”は「<span class="description-text--strong">自己成長</span>」「<span class="description-text--strong">ライフスタイル</span>」「<span class="description-text--strong">社会貢献</span>」など、<br class="c_sp-disappear">
            あなたの思い描く 人生を理想のかたち にデザインするための選択肢となります。
          </p>
          <p class="description-text">
            私たちの定義する「<span class="description-text--strong">複業職人</span>」は、特定の企業内にとどまらず、ご自身のスキルを活かして<br class="c_sp-disappear">
            戦略から実行まで能動的に取り組むプロフェッショナルを指しています。
            指示待ちで外注として働く人材に比べて<span class="description-text--strong">圧倒的な差別化</span> を図れるうえ、<br class="c_sp-disappear">
            あなたの意識と努力次第でワークライフバランスを飛躍的に向上させることができます。
          </p>
          <p class="author-text">
            複業マイスター　若色広大　高橋範慈
          </p>
        </div>
      </div>
      <img class="photo-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_about-pc.png" alt="doublework">
    </div>
  </div>

  <!-- 複業職人とは -->
  <section class="fukugyoShokunin__section" id="">
    <div class="container">
      <h2 class="c_heading-text">
        複業職人 とは？
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        複業に必要な「仕事の獲得方法」「報酬設定」などを<br class="c_sp-emerge">学べる実践的なプログラムです
      </p>
      <div class="main-area">
        <div class="item">
          <div class="top-portion">
            <p class="point"> point 01</p>
            <h3 class="heading2-text">
              実践的な“複業力”を <br class="c_tb-emerge">身に付けられる
            </h3>
          </div>
          <div class="bottom-portion">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_feature1.png" alt="feature">
            <p class="text">
              複業市場で価値を高めていくには、与えられた仕事をこなすだけではなく、積極的にあなたが発揮できるスキルを言語化し、複業先への関わり方も具体的に提示していく必要があります。<br>
              <span class="text--strong">複業先の課題ではなく『”要望”を引き出す力』<br>
                複業先に対して適切に『自分自身を魅せる力』<br>
                複業先を自ら『リードするコミュニケーション力』</span><br>
              これら「複業力」を独力で身に付けるのは至難の業。<br>
              複業職人では、ポートフォリオを作成したり、ロールプレイングを交えたりして実践的に学びながら、即戦力として活躍できるよう成長していただけます。
            </p>
          </div>
        </div>
        <div class="item">
          <div class="top-portion">
            <p class="point"> point 02</p>
            <h3 class="heading2-text">
              すべて個別1on1形式<br class="c_tb-emerge"> 『個性の発揮』に注力 </h3>
          </div>
          <div class="bottom-portion">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_feature2.png" alt="feature">
            <p class="text">
              プログラムはすべてオンラインでの<span class="text--strong">1on1形式</span>で実施します。<br>
              私たちから一方的に教えるのではなく、コミュニケーションを取りながら、独自のライフスコアを使って現状を的確に把握し、あなたの目指す理想像を言語化していきます。<br>
              様々な複業ワーカーの個人差やデータを熟知した講師陣が、あなたの隠れた強みや個性を最大限に活かすために伴走。<br>
              経験がない間はどうしても苦労しがちな、<span class="text--strong">案件の効果的な獲得方法・単価の設定/上げ方</span>などについても1on1で習得していきます。
            </p>
          </div>
        </div>
        <div class="item">
          <div class="top-portion">
            <p class="point"> point 03</p>
            <h3 class="heading2-text">
              全職種に対応可能
            </h3>
          </div>
          <div class="bottom-portion">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_feature3.png" alt="feature">
            <p class="text">
              複業職人には、事業開発/営業マネジメント/人事・採用/マーケター/デザイナー/広報/プログラマーなど、多種多様な職務経験をお持ちの方にご利用いただいてます。<br>
              複業職人を通じて、<span class="text--strong">あなた自身も気づかない経験やスキル</span>を見出していきますので、例えば営業職の方が採用やマネジメント業務の複業を獲得した例もあります。<br>
              また、複業を獲得する/継続するスキルは、職種を問わず活用いただける内容です。企業の求めるスキルは多種多様ですので、まずはお気軽にご相談ください。
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="program"></div>
  </section>

  <!-- 特徴 -->
  <!-- 
    <section class="feature__section" id=""> 
    <div class="container">
      <h2 class="c_heading-text">
        特徴
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        複業に必要なノウハウすべてをマンツーマンで学べます
      </p>
      <div class="main-area">
        <div class="item">
          <div class="top-portion">
            <p class="point"> point 01</p>
            <h3 class="heading2-text">
              実践的な“複業力”を <br class="c_tb-only-disapear">身に付けられる
            </h3>
          </div>
          <div class="bottom-portion">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_feature1.png" alt="feature">
            <p class="text">
              複業市場では、依頼元のクライアント側でも「何をどのように依頼したらよいか？」不明確なことがあるため、自分自身のできることや、複業先への関わり方を、より具体的に提示していく必要があります。<br>
              そのノウハウを、ポートフォリオを作成したり、ロールプレイングも交えながら、実践的な形式で学びます。
            </p>
          </div>
        </div>
        <div class="item">
          <div class="top-portion">
            <p class="point"> point 02</p>
            <h3 class="heading2-text">
              すべて個別1on1形式<br class="c_tb-only-disapear"> 『個性の発揮』に注力 </h3>
          </div>
          <div class="bottom-portion">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_feature2.png" alt="feature">
            <p class="text">
              プログラムはすべてオンラインでの1on1形式で実施します。 私たちから一方的に教えるのではなく、コミュニケーションを取りながら、あなたの個性を最大限に活かしていく複業への取り組み方を、一緒に考えていきます。
            </p>
          </div>
        </div>
        <div class="item">
          <div class="top-portion">
            <p class="point"> point 03</p>
            <h3 class="heading2-text">
              プログラム修了後に<br class="c_tb-only-disapear"> 複業クラウド認定バッジを授与 </h3>
          </div>
          <div class="bottom-portion">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_feature3.png" alt="feature">
            <p class="text">
              本プログラム修了時には、日本最大級の複業プラットフォーム「複業クラウド」にて、認定バッジを提供します。認定バッジは、複業したい方を探している全国企業/自治体等から見れるようになりますので、複業活動をより優位に進めやすくなります。
            </p>
          </div>
        </div>
      </div>
      <div id="staff"></div>
    </div>
  </section>
-->

  <!-- プログラム -->
  <section class="program__section" id="">
    <div class="container">
      <h2 class="c_heading-text">
        プログラム
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        全職種、”即実践” で活かせる複業スキルを<br>
        <span class="text--strong">「1on1」</span>かつ<span class="text--strong">「3ヵ月」</span>で体得する独自プログラムです
      </p>
      <div class="main-area">
        <div class="inner-wrapper">
          <div class="box">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_program1.png" alt="">
            <div class="heading2-item">
              <p class="number">
                01
              </p>
              <div class="heading2-portion">
                <h3 class="heading2-text">
                  ご自身のライフスコアの可視化
                </h3>
              </div>
            </div>
            <p class="description">
              複業をより有意義に進められるように、独自の“ライフスコア”を活用し、<br>
              「何のために複業をするのか？」目的の明確化と、その根拠となる動機の発掘を行います。<br>
              また複業の進め方も共有し、複業が初めての方も複業活動の全体像が把握できるように進めていきます。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--starter">
                トライアルプラン
              </p>
              <p class="plan-icon icon--standard">
                複業職人プラン
              </p>
            </div>
          </div>
          <div class="box">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_program2.png" alt="">
            <div class="heading2-item">
              <p class="number">
                02
              </p>
              <div class="heading2-portion">
                <h3 class="heading2-text">
                  自身のスキル把握 ／ <br class="c_sp-emerge"> ハッシュタグ化
                </h3>
              </div>
            </div>
            <p class="description">
              『個性を活かす』＝”自分自身の価値を築き上げ、その価値が最大限伝わるようアウトプットできるようになる”ことだと定義し、まずはあなた自身を「ハッシュタグ化」して、今ある強みをキーワードとして洗い出します。<br>
              また、あなたの価値や、どのような貢献ができるのかを汎用的に伝えるために、自己紹介として使える「ポートフォリオ」を作成します。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--starter">
                トライアルプラン
              </p>
              <p class="plan-icon icon--standard">
                複業職人プラン
              </p>
            </div>
          </div>
          <div class="box">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_program3.png" alt="">
            <div class="heading2-item">
              <p class="number">
                03
              </p>
              <div class="heading2-portion">
                <h3 class="heading2-text">
                  複業獲得の進め方①
                </h3>
                <p class="heading2-bottom-text">
                  複業先選び～初回商談での要望ヒアリング
                </p>
              </div>
            </div>
            <p class="description">
              複業案件の探し方/選び方から、初回の複業先とのアポイントの進め方までの一連の流れとポイントを押さえます。<br>
              商談はロールプレイング形式で行い、実際の複業先とどのようなコミュニケーションを取ればよいか？など、個別案件に応じてフィードバックいたします。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--starter">
                トライアルプラン
              </p>
              <p class="plan-icon icon--standard">
                複業職人プラン
              </p>
            </div>
          </div>
          <div class="box">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_program4.png" alt="">
            <div class="heading2-item">
              <p class="number">
                04
              </p>
              <div class="heading2-portion">
                <h3 class="heading2-text">
                  複業獲得の進め方②
                </h3>
                <p class="heading2-bottom-text">
                  提案立案～プレゼン<br class="c_sp-emerge">テーション～受注まで
                </p>
              </div>
            </div>
            <p class="description">
              複業では、複業先があなたとの関わり方を明確にイメージできていない場合もありますので、複業先の要望をもとに業務内容や定例打合せの実施などを提案していく必要があるケースも多いです。<br>
              初回ヒアリング内容をもとにした提案内容の立案からプレゼンテーションまでを、ロールプレイング形式で行っていきます。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--standard">
                複業職人プラン
              </p>
            </div>
          </div>
          <div class="box">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_program5.png" alt="">
            <div class="heading2-item">
              <p class="number">
                05
              </p>
              <div class="heading2-portion">
                <h3 class="heading2-text">
                  複業案件契約後の進め方
                </h3>
                <p class="heading2-bottom-text">
                  契約内容固め～定例打合せ含めた業務の進め方
                </p>
              </div>
            </div>
            <p class="description">
              複業時の諸リスクも鑑みた契約内容の留意点、複業契約後の関わり方や流れ、また契約が長期化しやすいテクニックなど、継続的に複業に取り組んでいける土台となるポイントを共有します。<br>
              また、本プログラムを受講前後での自身の変化も振り返り、複業クラウド認定バッジの活用イメージや、修了後のサポート体制などもお伝えします。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--standard">
                複業職人プラン
              </p>
            </div>
          </div>
          <div class="box">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_program6.png" alt="">
            <div class="heading2-item">
              <p class="number">
                06
              </p>
              <div class="heading2-portion">
                <h3 class="heading2-text">
                  アップセル
                </h3>
              </div>
            </div>
            <p class="description">
              本プログラム修了された方が複業マイスターと継続的にチャット相談や定期面談を実施できるようになるプランです。<br>
              継続的に複業案件を確保できるよう、個別の業務状況を伺いながら、複業先との折衝力の向上や、業務のマネジメント/ディレクションスキルを磨いていきます。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--afterfollow">
                アップセルプラン
              </p>
            </div>
          </div>
        </div>
        <div class="line"></div>
      </div>
    </div>
    <div id="staff"></div>
  </section>

  <!-- 講師紹介-改修 -->
  <section class="staffIntroduction__section" id="">
    <div class="container">
      <h2 class="c_heading-text">
        講師紹介
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        複業経験の豊富なマイスターがマンツーマンで支援します
      </p>
      <p class="aboutMister-text">
        ※複業マイスター＝100社以上の複業実績のあるプロフェッショナルのこと。<br class="c_sp-emerge">
        複業職人の本プログラムの開発および講師を務めています。
      </p>
      <div class="main-area">
        <div class="box">
          <img class="img-pc" id="js_profile1-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-wakairo-sp.png" alt="staff">
          <div class="text-portion">
            <p class="company">
              Color WiTh株式会社
            </p>
            <h3 class="heading2-text">
              複業マイスター　<span class="text-large">若色 広大</span><br class="c_sp-emerge">
              <span class="english">
                Wakairo Kodai
              </span>
            </h3>
            <div class="button-parts">
              <a href="https://twitter.com/wakairo_CW" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter x-twitter-icon"></i></a>
              <button id="js_profile1-button" class="profile-button">profile</button>
            </div>
          </div>
        </div>
        <div class="box">
          <img class="img-pc" id="js_profile2-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-takahashi-sp.png" alt="staff">
          <div class="text-portion">
            <p class="company">
              Color WiTh株式会社
            </p>
            <h3 class="heading2-text">
              複業マイスター　<span class="text-large">高橋 範慈</span><br class="c_sp-emerge">
              <span class="english">
                Takahashi Norichika </span>
            </h3>
            <div class="button-parts">
              <a href="https://twitter.com/takahashi_CW" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter x-twitter-icon"></i></a>
              <button id="js_profile2-button" class="profile-button">profile</button>
            </div>
          </div>
        </div>
      </div>
      <div class="book-area">
        <h3 class="heading-main-text">
          著書紹介
        </h3>
        <div class="image-box">
          <a href="https://www.amazon.co.jp/dp/4295409383?ref_=cm_sw_r_cp_ud_dp_9QS7KPXSEN6GTVTH7B0X" target="_blank" rel="noopener noreferrer">
            <img class="book-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_book-issue.jpg" alt="book">
          </a>
        </div>
      </div>
      <div id="supervise"></div>
    </div>
  </section>

  <!-- 講師紹介 -->
  <!-- 
  <section class="staff__section" id="">
    <div class="container">
      <h2 class="c_heading-text">
        講師紹介
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        複業経験の豊富なマイスターがマンツーマンで支援します
      </p>
      <div class="main-area">
        <div class="box">
          <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-wakairo-pc.png" alt="staff">
          <img class="img-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-wakairo-sp.png" alt="staff">
          <div class="text-portion">
            <p class="company">
              Color WiTh株式会社
            </p>
            <h3 class="heading2-text">
              複業マイスター　<span class="text-large">若色 広大</span><br class="c_sp-emerge">
              <span class="english">
                Wakairo Kodai
              </span>
            </h3>
            <p class="description">
              新卒でコカ・コーラボトラーズジャパン株式会社へ入社し、1年目で新人セールス賞受賞、3年目でエリア課長に就任。<br>
              その後、株式会社パソナ（現：株式会社パソナJOB HUB）へ転職。顧問やフリーランスを業務委託紹介する新規事業に従事し、年間MVPなど複数受賞。 <br>
              その傍ら、パソナ社長直轄にて高橋と共に新規事業部署を立ち上げ、複数の新規事業を創出し、全て黒字化に導く。<br>
              更に日本全国地場産業を盛り上げるため、株式会社トレジャーフットへ事業部長として参画し、複業人材マッチング事業を創出。0→10人の組織拡大に加え、会社全体の売り上げの約40%を一人で創出。<br>
              全ての企業様が抱いている『要望』を0から共に実現させるため、高橋と共にColor WiThを創業。経営層からの要望を実現に向けて、0→1のアイディア出し～組織作り～会社/組織全体のディレクション、ときには自身で営業活動も行うなど、一貫して密な携わり方をすることで、多方面の分野で結果を出し続けている。 <br>
              個人事業主や高橋との協業により、全国で累計のべ100社を超えた複業実績をもとに、独自の複業実践プログラム「複業職人」を開発するに至る。
            </p>
          </div>
        </div>
        <div class="box">
          <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-takahashi-pc.png" alt="staff">
          <img class="img-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-takahashi-sp.png" alt="staff">
          <div class="text-portion">
            <p class="company">
              Color WiTh株式会社
            </p>
            <h3 class="heading2-text">
              複業マイスター　<span class="text-large">高橋 範慈</span><br class="c_sp-emerge">
              <span class="english">
                Takahashi Norichika </span>
            </h3>
            <p class="description">
              新卒で株式会社パソナに入社後、法人営業／キャリアカウンセラーとして全国20都県以上を行脚。 <br>
              商工会議所や地場企業と連携した採用イベント、東日本大震災被災者のカウンセリング、防衛省からの受託事業運営など、全国各地の産業や雇用問題に触れながら、数々の新規プロジェクト立上げへ参画。 <br>
              その後、経営者向け営業部隊を立上げた際、経営層の抱える課題・特命事項に触れたことをきっかけに、自身でも新規事業を志し、若色と複数の新規事業を創出。すべて黒字化を達成。 地方創生ベンチャーの全国営業部長を経て、更なる地域貢献と、すべての企業様が抱く『要望』の実現に尽力したいという想いから、若色と共にColor WiThを創業。 <br>
              複業では、個人事業主として、また若色とともに他分野での実績を積み上げる。<br>
              経営層からの様々な要望をいかにして実現するか？にこだわり、実現までのストーリーづくりを強みとすることで、自身の経験のある新規事業開発や採用支援をはじめ、人事評価制度構築やWEBマーケティングなど幅広いプロジェクトに携わった経験を持つ。
            </p>
          </div>
        </div>
      </div>
      <div class="book-area">
        <div class="heading-box">
          <div class="heading-balloon-portion">
            <p class="heading-top-text">
              複業マイスター
            </p>
            <h3 class="heading-main-text">
              若色 & 高橋による<br>
              複業実践本も発売中！
            </h3>
          </div>
        </div>
        <div class="image-box">
          <img class="book-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_book-issue.jpg" alt="book">
        </div>
        <div class="book-description-box">
          <p class="book-description-top-text">
            複業コンパス 100社経験から語る複業実践ノウハウ
          </p>
          <p class="book-description-main-text">
            誰もが知らなかった「複業の暗黙知」を明らかにし、<br>
            誰もが実践できる「複業実践ノウハウ」が満載の一冊！
          </p>
        </div>
      </div>
      <div id="supervise"></div>
    </div>
  </section>
   -->

  <!-- ポップアップ-プロフィール1 -->
  <div class="profile1-popup-block c_popup-block" id="js_profile1-popup-block">
    <div class="inner-box c_inner-box">
      <i class="fa-solid fa-xmark close-button" id="js_profile1-close-button"></i>
      <div class="box">
        <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-wakairo-pc.png" alt="staff">
        <img class="img-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-wakairo-sp.png" alt="staff">
        <div class="text-portion">
          <p class="company">
            Color WiTh株式会社
          </p>
          <h3 class="heading2-text">
            複業マイスター　<span class="text-large">若色 広大</span><br class="c_sp-emerge">
            <span class="english">
              Wakairo Kodai
            </span>
          </h3>
          <p class="description">
            新卒でコカ・コーラボトラーズジャパン株式会社へ入社し、1年目で新人セールス賞受賞、3年目でエリア課長に就任。<br>
            その後、株式会社パソナ（現：株式会社パソナJOB HUB）へ転職。顧問やフリーランスを業務委託紹介する新規事業に従事し、年間MVPなど複数受賞。 <br>
            その傍ら、パソナ社長直轄にて高橋と共に新規事業部署を立ち上げ、複数の新規事業を創出し、全て黒字化に導く。<br>
            更に日本全国地場産業を盛り上げるため、株式会社トレジャーフットへ事業部長として参画し、複業人材マッチング事業を創出。0→10人の組織拡大に加え、会社全体の売り上げの約40%を一人で創出。<br>
            全ての企業様が抱いている『要望』を0から共に実現させるため、高橋と共にColor WiThを創業。経営層からの要望を実現に向けて、0→1のアイディア出し～組織作り～会社/組織全体のディレクション、ときには自身で営業活動も行うなど、一貫して密な携わり方をすることで、多方面の分野で結果を出し続けている。 <br>
            個人事業主や高橋との協業により、全国で累計のべ100社を超えた複業実績をもとに、独自の複業実践プログラム「複業職人」を開発するに至る。
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- ポップアップ-プロフィール2 -->
  <div class="profile2-popup-block c_popup-block" id="js_profile2-popup-block">
    <div class="inner-box c_inner-box">
      <i class="fa-solid fa-xmark close-button" id="js_profile2-close-button"></i>
      <div class="box">
        <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-takahashi-pc.png" alt="staff">
        <img class="img-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_staff-takahashi-sp.png" alt="staff">
        <div class="text-portion">
          <p class="company">
            Color WiTh株式会社
          </p>
          <h3 class="heading2-text">
            複業マイスター　<span class="text-large">高橋 範慈</span><br class="c_sp-emerge">
            <span class="english">
              Takahashi Norichika
            </span>
          </h3>
          <p class="description">
            新卒で株式会社パソナに入社後、法人営業／キャリアカウンセラーとして全国20都県以上を行脚。 <br>
            商工会議所や地場企業と連携した採用イベント、東日本大震災被災者のカウンセリング、防衛省からの受託事業運営など、全国各地の産業や雇用問題に触れながら、数々の新規プロジェクト立上げへ参画。 <br>
            その後、経営者向け営業部隊を立上げた際、経営層の抱える課題・特命事項に触れたことをきっかけに、自身でも新規事業を志し、若色と複数の新規事業を創出。すべて黒字化を達成。 地方創生ベンチャーの全国営業部長を経て、更なる地域貢献と、すべての企業様が抱く『要望』の実現に尽力したいという想いから、若色と共にColor WiThを創業。 <br>
            複業では、個人事業主として、また若色とともに他分野での実績を積み上げる。<br>
            経営層からの様々な要望をいかにして実現するか？にこだわり、実現までのストーリーづくりを強みとすることで、自身の経験のある新規事業開発や採用支援をはじめ、人事評価制度構築やWEBマーケティングなど幅広いプロジェクトに携わった経験を持つ。
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- 監修 -->
  <section class="supervise__section" id="">
    <div class="container">
      <h2 class="c_heading-text">
        監修
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <div class="main-area">

        <div class="box">
          <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_supervisor-pc.png" alt="staff">
          <img class="img-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_supervisor-sp.png" alt="staff">
          <div class="text-portion">
            <p class="company">
              株式会社Another works
            </p>
            <h3 class="heading2-text">
              複業エバンジェリスト　<span class="text-large">大林 尚朝</span><br class="c_sp-emerge">
              <span class="english">
                Obayashi Naotomo
              </span>
            </h3>
            <p class="description">
              早稲田大学法学部卒業。パソナグループに新卒入社後、株式会社ビズリーチ(現.ビジョナル株式会社)での事業立ち上げ経験を経て、2019年、株式会社Another works創業。<br>
              業界初、複業したい個人と企業や自治体を繋ぐ、成功報酬無料の総合型複業マッチングプラットフォーム「複業クラウド」を開発・運営。リリース4年で累計60,000名、1,000社以上が登録。<br>
              複業や令和の働き方、キャリアの最前線を発信し、テレビ東京「WBS（ワールドビジネスサテライト）」など多数メディアに複業推進企業の代表として出演。東京都や大阪産業局が主催するプログラムなど多方面で講師やメンターを務める。<br>
              <br>
              <br>
              著書「スキルマッチング型複業(副業)の実践書」<br>
              <a class="link" href="https://fukugyo.naotomo-obayashi.com/" target="_blank" rel="noopener noreferrer">
                https://fukugyo.naotomo-obayashi.com/
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="plan"></div>
  </section>

  <!-- プラン -->
  <section class="plan__section" id="">
    <div class="container">
      <h2 class="c_heading-text">
        プラン
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        あなたの複業の状況に応じて、<br class="c_sp-emerge">ノウハウを凝縮したプランをご用意しています
      </p>
      <div class="main-area">
        <table class="table-pc" border="1">
          <thead>
            <tr class="top-row">
              <th class="heading-column"></th>
              <th class="row-heading row-heading--starter">トライアルプラン</th>
              <th class="row-heading row-heading--standard table-line--top">
                <img class="recommend-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/plan_recommend.png" alt="recommend">
                <img class="crown-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/plan_crown.png" alt="crown">
                複業職人プラン
              </th>
              <th class="row-heading row-heading--afterfollow">アップセルプラン<br> <span class="afterfollow--small">※複業職人プラン修了者のみ申込可能</span></th>
            </tr>
          </thead>
          <tbody>
            <tr class="main-row">
              <td class="heading-column">こんな方に オススメ</td>
              <td class="main-data">
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                複業に不安をお持ちの方 <br>
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                自身に向いている複業案件を知りたい方<br>
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                自身の複業スキルを可視化されたい方
              </td>
              <td class="main-data table-line--middle">
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                スキルには自信があり、面談には進むも<br>
                　案件獲得が難しい方 <br>
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                複業先と対等に折衝する力を得たい方
              </td>
              <td class="main-data">
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon-orange.png" alt="">
                安定して3ヶ月以上の案件を得たい方<br>
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon-orange.png" alt="">
                自身の契約単価を今よりも上げたい方<br>
                ※複業職人プラン修了者のみ申込可能なプランです。
              </td>
            </tr>
            <tr class="main-row">
              <td class="heading-column">内容／<br class="sp-disappear"> 得られること</td>
              <td class="main-data">
                <span class="main-data--heading">プログラム１～３まで</span><br>
                <span class="main-data--stater-number">1.</span>ご自身のライフスコアの可視化 <br>
                <span class="main-data--stater-number">2.</span> ご自身のハッシュタグ／ポートフォリオ作成<br>
                <span class="main-data--stater-number">3.</span> 自分に適した案件を見つける力
              </td>
              <td class="main-data table-line--middle">
                <span class="main-data--heading">プログラム1～5まで</span><br>
                <span class="main-data--standard-number">1.</span> ご自身のライフスコアの可視化 <br>
                <span class="main-data--standard-number">2.</span> ご自身のハッシュタグ／ポートフォリオ作成<br>
                <span class="main-data--standard-number">3.</span> 自分に適した案件を見つける力<br>
                <span class="main-data--standard-number">4.</span> 自身のプレゼンテーションスキル <br>
                <span class="main-data--standard-number">5.</span> 複業先との提案力／折衝力<br>
              </td>
              <td class="main-data">
                <span class="main-data--heading">プログラム6</span><br>
                <span class="main-data--afterfollow-number">6.</span><span class="main-data--heading">複業活動全般のフォローアップ</span><br>
                ・新規複業案件の獲得における提案検討<br>
                ・既存の複業先に対する報酬や契約期間の<br>
                　アップセル検討<br>
                ・複業先との業務をよりよく進めるため、<br>
                　業務をマネジメント／ディレクションする<br>
                　方法を教示
              </td>
            </tr>
            <tr class="main-row">
              <td class="heading-column">受講期間／時間</td>
              <td class="main-data data--center">
                <span class="main-data--heading">1ヶ月<br>
                  （月2回の1on1受講:約3時間程度）</span><br>
                ※1回につき1.5～2時間程度
              </td>
              <td class="main-data data--center table-line--middle">
                <span class="main-data--heading">3ヶ月 <br>
                  （月2回の1on1受講:約10時間程度） </span><br>
                ※1回につき1.5～2時間程度
              </td>
              <td class="main-data data--center">
                <span class="main-data--heading">6ヶ月〜 </span><br>
                面談は月1回/1時間程度 <br>
                チャットは随時可能
              </td>
            </tr>
            <tr class="main-row">
              <td class="heading-column">料金</td>
              <td class="main-data data--center">
                <span class="main-data--heading">15万円</span><br>
                ※受講開始時にお支払い<br>
                （分割可）
              </td>
              <td class="main-data data--center table-line--middle">
                <span class="main-data--heading">40万円 </span><br>
                ※受講開始時にお支払い<br>
                （分割可）
              </td>
              <td class="main-data data--center">
                面談＋チャット：月5万円 <br>
                ※アップセルプランのみ<br>
                月額支払いとなります
              </td>
            </tr>
            <tr class="main-row">
              <td class="heading-column">特典</td>
              <td class="main-data data--center">
                ご自身の価値を最大化する <br>
                ポートフォリオ集<br>
                受講者様独自のライフスコアシート
              </td>
              <td class="main-data data--center table-line--bottom">
                <span class="main-data--heading">複業クラウド認定バッジ </span><br>
                複業コミュニティ招待/複業職人ロール付与 <br>
                （複業/副業案件紹介あり）<br>
                ポートフォリオ集<br>
                提案資料ひな型<br>
                複業契約書ひな形
              </td>
              <td class="main-data data--center">
                若色/高橋から <br>
                複業案件を優先的にご紹介
              </td>
            </tr>
          </tbody>
        </table>

        <div class="table-box-sp">
          <table class="table" border="1">
            <thead>
              <tr class="top-row">
                <th class="row-heading row-heading--starter">トライアルプラン</th>
              </tr>
            </thead>
            <tbody>
              <tr class="main-row">
                <td class="heading-column">こんな方に オススメ</td>
                <td class="main-data">
                  <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                  複業に不安をお持ちの方 <br>
                  <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                  自身に向いている複業案件を知りたい方<br>
                  <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                  自身の複業スキルを可視化されたい方
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">内容／得られること</td>
                <td class="main-data">
                  <span class="main-data--heading">プログラム１～３まで</span><br>
                  <span class="main-data--stater-number">1.</span> ご自身のライフスコアの可視化 <br>
                  <span class="main-data--stater-number">2.</span> ご自身のハッシュタグ／ポートフォリオ作成<br>
                  <span class="main-data--stater-number">3.</span> 自分に適した案件を見つける力
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">受講期間／時間</td>
                <td class="main-data data--center">
                  <span class="main-data--heading">1ヶ月<br>
                    （月2回の1on1受講:約3時間程度）</span><br>
                  ※1回につき1.5～2時間程度
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">料金</td>
                <td class="main-data data--center">
                  <span class="main-data--heading">15万円 </span><br>
                  ※受講開始時にお支払い<br>
                  （分割可）
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">特典</td>
                <td class="main-data data--center">
                  ご自身の価値を最大化する <br>
                  ポートフォリオ集<br>
                  受講者様独自のライフスコアシート
                </td>
              </tr>
            </tbody>
          </table>

          <table class="table table-sp--standard" border="1">
            <thead>
              <tr class="top-row">
                <th class="row-heading row-heading--standard">
                  <img class="recommend-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/plan_recommend.png" alt="recommend">
                  <img class="crown-img --sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/plan_crown.png" alt="crown">
                  複業職人プラン
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="main-row">
                <td class="heading-column">こんな方に オススメ</td>
                <td class="main-data">
                  <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                  スキルには自信があり、面談には進むも <br>
                  　案件獲得が難しい方<br>
                  <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                  複業先と対等に折衝する力を得たい方
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">内容／得られること</td>
                <td class="main-data">
                  <span class="main-data--heading">プログラム1～5まで</span><br>
                  <span class="main-data--standard-number">1.</span> ご自身のライフスコアの可視化 <br>
                  <span class="main-data--standard-number">2.</span> ご自身のハッシュタグ／ポートフォリオ作成<br>
                  <span class="main-data--standard-number">3.</span> 自分に適した案件を見つける力<br>
                  <span class="main-data--standard-number">4.</span> 自身のプレゼンテーションスキル <br>
                  <span class="main-data--standard-number">5.</span> 複業先との提案力／折衝力<br>
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">受講期間／時間</td>
                <td class="main-data data--center">
                  <span class="main-data--heading">3ヶ月 <br>
                    （月2回の1on1受講:約10時間程度） </span><br>
                  ※1回につき1.5～2時間程度
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">料金</td>
                <td class="main-data data--center">
                  <span class="main-data--heading">40万円 </span><br>
                  ※受講開始時にお支払い<br>
                  （分割可）
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">特典</td>
                <td class="main-data data--center">
                  <span class="main-data--heading">複業クラウド認定バッジ </span><br>
                  複業コミュニティ招待/複業職人ロール付与<br>
                  （複業/副業案件紹介あり）<br>
                  ポートフォリオ集<br>
                  提案資料ひな型 <br>
                  複業契約書ひな形
                </td>
              </tr>
            </tbody>
          </table>

          <table class="table" border="1">
            <thead>
              <tr class="top-row">
                <th class="row-heading row-heading--afterfollow">アップセルプラン<br> <span class="afterfollow--small">※複業職人プラン修了者のみ申込可能</span></th>
              </tr>
            </thead>
            <tbody>
              <tr class="main-row">
                <td class="heading-column">こんな方に オススメ</td>
                <td class="main-data">
                  <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon-orange.png" alt="">
                  安定して3ヶ月以上の案件を得たい方<br>
                  <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon-orange.png" alt="">
                  自身の契約単価を今よりも上げたい方<br>
                  ※複業職人プラン修了者のみ申込可能なプランです。
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">内容／得られること</td>
                <td class="main-data">
                  <span class="main-data--heading">プログラム6</span><br>
                  <span class="main-data--afterfollow-number">6.</span>複業活動全般のフォローアップ<br>
                  ・新規複業案件の獲得における提案検討<br>
                  ・既存の複業先に対する報酬や契約期間の<br>
                  　アップセル検討<br>
                  ・複業先との業務をよりよく進めるため、<br>
                  　業務をマネジメント／ディレクションする<br>
                  　方法を教示
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">受講期間／時間</td>
                <td class="main-data data--center">
                  <span class="main-data--heading">6ヶ月〜 </span><br>
                  面談は月1回/1時間程度 <br>
                  チャットは随時可能
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">料金</td>
                <td class="main-data data--center">
                  面談＋チャット：月5万<br>
                  ※アップセルプランのみ<br>
                  月額支払いとなります
                </td>
              </tr>
              <tr class="main-row">
                <td class="heading-column">特典</td>
                <td class="main-data data--center">
                  若色/高橋から<br>
                  複業案件を優先的にご紹介
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="portfolio-area">
        <h2 class="c_heading-text">
          特典イメージ
        </h2>
        <div class="c_heading-icon-area">
          <div class="c_heading-icon"></div>
        </div>
        <div class="main-box">
          <div class="portfolio-item">
            <div class="portfolio-balloon-box">
              <p class="portfolio-balooon-text">
                ポートフォリオひな形
              </p>
            </div>
            <div class="portfolio-image-box">
              <img class="portfolio-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/plan_portfolio-1.png" alt="portfolio">
            </div>
          </div>
          <div class="portfolio-item">
            <div class="portfolio-balloon-box">
              <p class="portfolio-balooon-text">
                提案資料ひな形
              </p>
            </div>
            <div class="portfolio-image-box">
              <img class="portfolio-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/plan_portfolio-2.png" alt="portfolio">
            </div>
          </div>
        </div>
      </div>
      <div class="supplyment-area">
        <p class="supplyment">
          ※　金額はすべて税別です。
        </p>
        <p class="supplyment">
          ※　トライアルプラン修了後、プログラム④⑤の追加受講を希望される場合、プラン③修了後 1週間以内に希望した場合は＋25万円にて、1週間以降に希望した場合は＋35万円にて、受講可能となります。 <br>
        </p>
        <p class="supplyment">
          ※　受講期間を過ぎた場合の延長保証は、追加1ヶ月間までとなります。 <br>
        </p>
        <p class="supplyment">
          ※　分割支払いも可能です。（分割回数/金額はプランにより変動しますので、お問い合わせください）
        </p>
      </div>
    </div>
    <div id="case"></div>
  </section>

  <!-- 受講事例 -->
  <section class="case__section case__section--revise" id="case">
    <div class="container">
      <h2 class="c_heading-text">
        受講者の声
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <div class="main-area">
        <div class="item-box">
          <div class="image-portion">
            <p class="description-text">
              月1件成約50万円の営業売上から、<br>
              月5件成約350万円の<br>
              過去最高記録を樹立！
            </p>
            <a class="read-button-link" href="<?php echo home_url(); ?>/top/case1">
              <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/case_person-1-pc.png" alt="case-person">
            </a>
          </div>
          <div class="text-portion">
            <div class="top-text">
              <p class="number number--pc">
                01
              </p>
              <div class="text-block">
                <p class="name">
                  長木唯さん <span class="name--age">（30代/女性）</span>
                </p>
                <p class="career">
                  会社員→<span class="career--strong">個人事業主</span>
                </p>
              </div>
            </div>
            <div class="description">
              <a class="read-button-link" href="<?php echo home_url(); ?>/top/case1">
                <button class="read-button">
                  詳しく見てみる
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="item-box">
          <div class="image-portion">
            <p class="description-text">
              平均3ヶ月で終了していた複業案件が<br>
              平均6ヶ月以上続くようになることで<br>
              起業のきっかけに！
            </p>
            <a class="read-button-link" href="<?php echo home_url(); ?>/top/case2">
              <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/case_person-2-pc.png" alt="case-person">
            </a>
          </div>
          <div class="text-portion">
            <div class="top-text">
              <p class="number number--pc">
                02
              </p>
              <div class="text-block">
                <p class="name">
                  荒井祥平さん<span class="name--age"> （20代/男性）</span>
                </p>
                <p class="career">
                  会社員→個人事業主→<span class="career--strong">会社経営</span></p>
                </p>
              </div>
            </div>
            <div class="description">
              <a class="read-button-link" href="<?php echo home_url(); ?>/top/case2">
                <button class="read-button">
                  詳しく見てみる
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="item-box">
          <div class="image-portion">
            <p class="description-text">
              2ヶ月で月収10万UP！<br>
              複業案件数も増え、時給単価を上げられた<br>
              ことで仕事のモチベーションに！
            </p>
            <a class="read-button-link" href="<?php echo home_url(); ?>/top/case3">
              <img class="img-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/case_person-3-pc.png" alt="case-person">
            </a>
          </div>
          <div class="text-portion">
            <div class="top-text">
              <p class="number number--pc">
                03
              </p>
              <div class="text-block">
                <p class="name">
                  御堂河内麻衣さん<span class="name--age">（30代/女性）</span>
                </p>
                <p class="career">
                  会社員→<span class="career--strong">フリーランス</span>
                </p>
              </div>
            </div>
            <div class="description">
              <a class="read-button-link" href="<?php echo home_url(); ?>/top/case3">
                <button class="read-button">
                  詳しく見てみる
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- 初回公開時 -->
      <!-- <div class="comingsoon">
        <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/coming_soon.png" alt="comingsoon">
      </div> -->
      <div id="news"></div>
    </div>
  </section>

  <!-- ニュース -->
  <section class="news__section news__section--revise" id="">
    <div class="container">
      <h2 class="c_heading-text">
        ニュース
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <div class="main-area">
        <div class="item">
          <p class="date-text">2024/4/25</p>
          <p class="title">
            <a class="link" href="https://podcast.1242.com/show/t-times/" target="_blank" rel="noopener noreferrer">
              ニッポン放送 "竹内由恵のT-Times"にて講師の若色が対談をしました！
            </a>
          </p>
        </div>
        <div class="item">
          <p class="date-text">2024/3/4</p>
          <p class="title">
            <a class="link" href="https://www.amazon.co.jp/dp/4295409383?ref_=cm_sw_r_cp_ud_dp_9QS7KPXSEN6GTVTH7B0X" target="_blank" rel="noopener noreferrer">
              『複業コンパス　100社経験から語る複業実践ノウハウ』出版
            </a>
          </p>
        </div>
        <div class="item">
          <p class="date-text">2023/11/14</p>
          <p class="title">
            <a class="link" href="https://fukugyo-shokunin.peatix.com/view" target="_blank" rel="noopener noreferrer">
              ウェビナー『100社の複業を経験したマイスターが教える『複業のマル秘ポイント』を大公開！』開催
            </a>
          </p>
        </div>
        <div class="item">
          <p class="date-text">2023/9/26</p>
          <p class="title">
            <a class="link" href="https://company.aw-anotherworks.com/event/20230926" target="_blank" rel="noopener noreferrer">
              ウェビナー『複業の案件獲得率と単価の上げ方を徹底解説〜地方案件も完全網羅〜』開催
            </a>
          </p>
        </div>
      </div>
      <!-- 初回公開時 -->
      <!-- <div class="comingsoon">
        <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/coming_soon.png" alt="comingsoon">
      </div> -->
    </div>
  </section>

  <!-- 紹介動画 -->
  <section class="movie__section" id="">
    <div class="container">
      <h2 class="c_heading-text">
        紹介動画
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        複業職人のプロモーションムービー（30秒）
      </p>
      <div class="main-area">
        <div class="movie-box">
          <iframe width="100%" height="auto" src="https://www.youtube-nocookie.com/embed/8JseYwXaujc?si=sDewofHZqOkSen3g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
        <button class="contact-button" id="ga_contactClosingButton">
          無料面談で複業スキルを発掘する
        </button>
      </a>
    </div>
  </section>

  <a class="fixed-button-link" href="<?php echo home_url(); ?>/contact">
    <div class="fixed-button" id="ga_contactFixedButton">
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