<?php
/**
 * Template Name: contact
 * Description: お問い合わせ
 */
?>
<?php get_header(); ?>

<main class="main">

  <!-- メインビジュアル -->
  <section class="contactPage__firstview__section" id="contact">
    <div class="container">
      <h1 class="top-heading-text">無料面談予約フォーム</h1>
      <p class="contact__heading-text">
        個性を活かして<span class="contact__heading--strong">複業</span>の<span class="contact__heading--strong">職人</span>を目指す
      </p>
      <p class="description">
        複業職人を通じて、自分自身の個性を活かし、<br>
        あなたらしい複業を、人生をより豊かにする選択肢を、<br class="c_sp-emerge">
        一緒に模索していきましょう！
      </p>
    </div>
  </section>

  <!-- 問合せフォーム -->
  <section class="contactPage__form__section">
    <div class="container">
      <div class="main-area">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>

            <?php the_post(); ?>
            <?php the_content(); ?>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>