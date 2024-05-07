<?php

/**
 * Template Name: Default
 * Description: デフォルトテンプレート
 */
?>



<?php get_header(); ?>

<main class="main">
  <!-- メインビジュアル -->

  <section class="firstview__section" id="firstview">
    <div class="container">
      <img class="topimg--pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_firstview-pc.png" alt="firstview">
      <img class="topimg--sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_firstview-sp.png" alt="firstview">
      <button class="button">
        <a class="button-link" href="<?php echo home_url(); ?>/contact">
          複業マイスターと無料面談してみる
        </a>
      </button>
    </div>
  </section>

  <!-- こんな人におすすめ -->
  <section class="target__section" id="target">
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
    </div>
  </section>

  <!--  複業職人とは -->
  <section class="about__section" id="about">
    <div class="container">
      <h2 class="c_heading-text">
        複業職人 とは？
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        複業活動に必要な実践ノウハウを体得する、独自のプログラムです
      </p>
      <div class="main-area">
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
            複業は、複数の仕事を行って報酬アップするためだけにとどまらず、<br>
            新たなスキル習得・キャリアアップ・自己実現・地域や組織への恩返しなど<br>
            目的が多様化してきており、今や「自身の生き方をより充実させる手段のひとつ」に<br>
            なってきていると考えています。
          </p>
          <p class="description-text">
            また、複業は雇用される働き方とは異なる部分も多く、通常のビジネスシーンでは<br>
            学べない、いわば<span class="description-text--strong"> ”複業力” </span>ともいうべき<span class="description-text--strong">独特なテクニック</span>が必要です。<br>
          </p>
          <p class="description-text">
            複業職人 は、これまで複業で多くの成果を出してきたプロが<br>
            これから複業を始めたい人、もっと複業で活躍したい方々に対して、<br>
            <span class="description-text--strong">複業活動ならではのノウハウ</span>を盛り込んだ、<span class="description-text--strong">独自プログラム</span>をご用意しています。<br>
          </p>
          <p class="description-text">
            複業であなたの個性を最大限に活かし、より豊かな人生を実現しましょう！
          </p>
          <p class="author-text">
            複業マイスター　若色広大　高橋範慈
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 特徴 -->
  <section class="feature__section" id="feature">
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
              実践的な“複業力”を <br>身に付けられる
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
              すべて個別1on1形式<br> 『個性の発揮』に注力 </h3>
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
              プログラム修了後に<br> 複業クラウド認定バッジを授与 </h3>
          </div>
          <div class="bottom-portion">
            <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_feature3.png" alt="feature">
            <p class="text">
              本プログラム修了時には、日本最大級の複業プラットフォーム「複業クラウド」にて、認定バッジを提供します。認定バッジは、複業したい方を探している全国企業/自治体等から見れるようになりますので、複業活動をより優位に進めやすくなります。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 講師紹介 -->
  <section class="staff__section" id="staff">
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
              代表取締役　<span class="text-large">若色 広大</span>
              <span class="english">
                wakairo kodai
              </span>
            </h3>
            <p class="description">
              新卒でコカ・コーラボトラーズジャパン株式会社へ入社。入社1年で新人セールス賞受賞、3年でエリア課長就任。その後、株式会社パソナ（現：株式会社パソナJOB
              HUB）へ転職。<br>
              顧問やフリーランスを業務委託紹介する新規事業に従事。年間MVPなど複数受賞。<br>
              その傍ら、パソナグループ社長直轄にて高橋と共に新規事業部署を立ち上げ、複数の新規事業を創出し、全て黒字化に導く。<br>
              更に日本全国地場産業を盛り上げるため、株式会社トレジャーフットへ事業部長として参画し、複業人材マッチング事業を創出。<br>
              0→10人の組織拡大に加え、会社全体の売り上げの約40%を一人で創出。<br>
              全ての企業様が抱いている『要望』を0から共に実現させる為、高橋と共にColorWiThを創業。
              経営層からの要望を実現する為、いただいた要望に対して0→1のアイディア出し～組織作り～会社/組織全体のディレクション、ときには自身での営業活動まで、一貫して密に携わり様々な分野で結果を出すことで、複業実績を全国のべ約50社まで積み上げ、独自の複業実践プログラムを開発するに至る。
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
              代表取締役　<span class="text-large">高橋 範慈</span>
              <span class="english">
                Takahashi Norichika </span>
            </h3>
            <p class="description">
              新卒で株式会社パソナに入社後、法人営業／キャリアカウンセラーとして20都県以上を行脚。商工会議所や地場企業と連携した採用イベント、東日本大震災被災者のカウンセリング、防衛省からの受託事業運営など、全国各地の産業や雇用問題に触れながら、数々の新規プロジェクト立上げへ参画。
              その後、経営者向け営業部隊を立上げた際、経営層の抱える課題・特命事項に触れたことをきっかけに、自身でも新規事業を志し、若色と複数の新規事業を創出。すべて黒字化を達成。
              地方創生ベンチャーの全国営業部長を経て、更なる地域貢献と、すべての企業様が抱く『要望』の実現に尽力したいという想いから、若色と共にColor WiThを創業。
              複業では、経営層からの様々な要望をいかにして実現するか？にこだわり、実現までのストーリーづくりを強みとすることで、自身の経験のある新規事業開発や採用支援をはじめ、人事評価制度構築やWEBマーケティングなど幅広いプロジェクトに携わった経験を持つ。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 監修 -->
  <section class="supervise__section" id="supervise">
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
              代表取締役　<span class="text-large">大林 尚朝</span>
              <span class="english">
                obayashi naotomo
              </span>
            </h3>
            <p class="description">
              業界初、複業したい個人と企業や自治体を繋ぐ、成功報酬無料の総合型複業マッチングプラットフォーム「複業クラウド」を開発・運営。
              日本経済新聞が運営する「日経COMEMO」のKOLを務め、複業やキャリア構築、働き方のトレンドに関する情報を毎月寄稿。複業人材採用を前提とした組織構築や複業を通じたリスキリングの促進、人材の流動化による社会課題の解決、官民・産学連携での地域活性などの新概念を啓蒙し、行政や教育機関をはじめ100件以上の登壇実績を持つ。高知県宿毛市にて行政における複業総合アドバイザーとしての参画経験も有する。
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
  </section>

  <!-- プログラム -->
  <section class="program__section" id="program">
    <div class="container">
      <h2 class="c_heading-text">
        プログラム
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        すべてのプログラムは複業マイスターとの個別1on1にて実施<br>
        ”<span class="text--strong">即実践</span>” にこだわり、最小時間にノウハウを凝縮しています
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
                  複業の目的 ／<br class="c_sp-emerge"> 動機の発掘
                </h3>
              </div>
            </div>
            <p class="description">
              複業をより有意義に進められるように「何のために複業をするのか？」目的の明確化と、その根拠となる動機の発掘を行います。また複業の進め方も共有し、複業が初めての方も複業活動の全体像が把握できるように進めていきます。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--starter">
                スタータープラン
              </p>
              <p class="plan-icon icon--standard">
                スタンダードプラン
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
              『個性を活かす』＝”自分自身の価値を築き上げ、その価値が最大限伝わるようアウトプットできるようになる”ことだと定義し、まずは自身を「ハッシュタグ化」することで、自身の強みをキーワードとして洗い出します。
              また、初対面でもあなたがどのような貢献ができるのか？自身の価値を表す「ポートフォリオ」を作成することで、自身の価値を汎用的に伝えられるようにかたちにします。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--starter">
                スタータープラン
              </p>
              <p class="plan-icon icon--standard">
                スタンダードプラン
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
              複業案件の探し方/選び方から、初回の複業先とのアポイントの進め方までの一連の流れとポイントを押さえます。
              商談はロールプレイング形式にて行い、実際の複業先とどのようなコミュニケーションを取ればよいか？個別案件に応じたフィードバックを行います。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--starter">
                スタータープラン
              </p>
              <p class="plan-icon icon--standard">
                スタンダードプラン
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
                  提案立案～プレゼンテーション～受注まで
                </p>
              </div>
            </div>
            <p class="description">
              複業では、複業先があなたとの関わり方を明確にイメージできていない場合もありますので、複業先の要望をもとに業務内容や定例打合せの実施などを提案していく必要があるケースも多いです。初回ヒアリング内容をもとにした提案内容の立案からプレゼンテーションまでを、ロールプレイング形式で行っていきます。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--standard">
                スタンダードプラン
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
              複業時の諸リスクも鑑みた契約内容の留意点、複業契約後の関わり方や流れ、また契約が長期化しやすいテクニックなど、継続的に複業に取り組んでいける土台となるポイントを共有します。また、本プログラムを受講前後での自身の変化も振り返り、複業クラウド認定バッジの活用イメージや、修了後のサポート体制などもお伝えします。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--standard">
                スタンダードプラン
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
                  アフターフォロー
                </h3>
              </div>
            </div>
            <p class="description">
              本プログラム修了された方が複業マイスターと継続的にチャット相談や定期面談を実施できるようになるプランです。
              継続的に複業案件を確保できるよう、個別の業務状況を伺いながら、複業先との折衝力の向上や、業務のマネジメント/ディレクションスキルを磨いていきます。
            </p>
            <div class="icon-portion">
              <p class="plan-icon icon--afterfollow">
                アフターフォロープラン
              </p>
            </div>
          </div>
        </div>
        <div class="line"></div>
      </div>
    </div>
  </section>

  <!-- プラン -->
  <section class="plan__section" id="plan">
    <div class="container">
      <h2 class="c_heading-text">
        プラン
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">
        あなたの複業の状況に応じて、ノウハウを凝縮したプランをご用意しています
      </p>
      <div class="main-area">
        <table class="table" border="1">
          <thead>
            <tr class="top-row">
              <th class="heading-column"></th>
              <th class="row-heading row-heading--starter">スタータープラン</th>
              <th class="row-heading row-heading--standard">スタンダードプラン</th>
              <th class="row-heading row-heading--afterfollow">アフターフォロープラン<br> <span class="afterfollow--small">※スタンダードプラン修了者のみ申込可能</span></th>
            </tr>
          </thead>
          <tbody>
            <tr class="main-row">
              <td class="heading-column">こんな方に オススメ</td>
              <td class="main-data">
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                これから複業をしたい方 <br>
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                複業して間もない方
              </td>
              <td class="main-data">
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                これから複業を本格的に行っていきたい方 <br>
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon.png" alt="">
                既に複業しており、更に案件を増やしたい方
              </td>
              <td class="main-data">
                <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/check_icon-orange.png" alt="">
                安定した中長期の案件を得たい方<br>
                ※スタンダードプラン修了者のみ申込可能なプランです。
              </td>
            </tr>
            <tr class="main-row">
              <td class="heading-column">内容／<br> 得られること</td>
              <td class="main-data">
                <span class="main-data--heading">プログラム１～３まで</span><br>
                <span class="main-data--stater-number">1.</span>複業の目的／動機の明確化 <br>
                <span class="main-data--stater-number">2.</span> 自身のハッシュタグ／ポートフォリオ<br>
                <span class="main-data--stater-number">3.</span> 自分に適した案件を見つける力
              </td>
              <td class="main-data">
                <span class="main-data--heading">プログラム1～5まで</span><br>
                <span class="main-data--standard-number">1.</span>複業の目的／動機の明確化 <br>
                <span class="main-data--standard-number">2.</span> 自身のハッシュタグ／ポートフォリオ<br>
                <span class="main-data--standard-number">3.</span> 自分に適した案件を見つける力<br>
                <span class="main-data--standard-number">4.</span> 自身のプレゼンテーションスキル <br>
                <span class="main-data--standard-number">5.</span> 複業先との提案力／折衝力<br>
              </td>
              <td class="main-data">
                <span class="main-data--heading">プログラム6</span><br>
                <span class="main-data--afterfollow-number">6.</span>複業先との業務をよりよく進めるため、<br> 業務をマネジメント／<br> ディレクションするスキル
              </td>
            </tr>
            <tr class="main-row">
              <td class="heading-column">受講期間／時間</td>
              <td class="main-data data--center">
                <span class="main-data--heading">1.5ヶ月間<br> 計5時間程度</span><br>
                ※プログラム1回につき1.5～2時間程度
              </td>
              <td class="main-data data--center">
                <span class="main-data--heading">3ヶ月間 <br>計8時間程度 </span><br>
                ※プログラム1回につき1.5～2時間程度
              </td>
              <td class="main-data data--center">
                <span class="main-data--heading">1年間 </span><br>
                面談は月1回/1時間程度 <br>チャットは随時可能
              </td>
            </tr>
            <tr class="main-row">
              <td class="heading-column">料金</td>
              <td class="main-data data--center">
                <span class="main-data--heading">20万円 </span>
                ※受講開始時にお支払い（分割可）
              </td>
              <td class="main-data data--center">
                <span class="main-data--heading">30万円 </span>
                ※受講開始時にお支払い（分割可）
              </td>
              <td class="main-data data--center">
                チャットのみ：月3万円 <br>面談＋チャット：月5万円<br> ※アフターフォロープランのみ<br> 月額支払いとなります
              </td>
            </tr>
            <tr class="main-row">
              <td class="heading-column">特典</td>
              <td class="main-data data--center">
                ご自身の価値を最大化する ポートフォリオ集
              </td>
              <td class="main-data data--center">
                <span class="main-data--heading">複業クラウド認定バッジ </span><br>
                ポートフォリオ集 複業先向け提案資料ひな型 複業契約書ひな形
              </td>
              <td class="main-data data--center">
                随時Color WiTh社より <br>案件紹介の可能性あり
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="supplyment">
        ※　金額はすべて税別です。 <br>
        ※　スタータープラン終了後、プログラム④⑤の追加希望の場合、 1週間以内に希望した場合＋15万円、以降の希望の場合は＋20万円が発生します。 <br>
        ※　追加延長保証は1ヶ月まで <br>
        ※　分割支払いも可能（分割回数/金額はプランにより変動）
      </p>
    </div>
  </section>


  <!-- ニュース -->
  <section class="news__section" id="news">
    <div class="container">
      <h2 class="c_heading-text">
        ニュース
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <div class="main-area">
        <!-- <div class="slider-area"> -->
        <!-- Slider main container -->
        <!-- <div class="swiper"> -->
        <!-- Additional required wrapper -->
        <!-- <div class="swiper-wrapper"> -->
        <!-- Slides -->
        <!-- <div class="swiper-slide">Slide 1</div>
              <div class="swiper-slide">Slide 2</div>
              <div class="swiper-slide">Slide 3</div>
              ...
            </div> -->
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->

        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->

        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div>
          </div>
        </div>-->
      </div>
      <div class="comingsoon">
        <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/coming_soon.png" alt="comingsoon">
      </div>
    </div>
  </section>

  <!-- 受講事例 -->
  <section class="case__section" id="case">
    <div class="container">
      <h2 class="c_heading-text">
        受講事例
      </h2>
      <div class="c_heading-icon-area">
        <div class="c_heading-icon"></div>
      </div>
      <p class="c_subheading-text">

      </p>
      <div class="main-area">
      </div>
      <div class="comingsoon">
        <img class="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/coming_soon.png" alt="comingsoon">
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
          複業マイスターと無料面談してみる
        </button>
      </a>
    </div>
  </section>

  <a class="fixed-button-link" href="<?php echo home_url(); ?>/contact">
    <div class="fixed-button">
      <div class="inner">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/message_icon.png" alt="">
        <p class="button-text">
          <span class="sp-disappear">複業マイスター<br>
            と</span>無料面談<br>
          してみる
        </p>
      </div>
    </div>
  </a>
</main>


<?php get_footer(); ?>