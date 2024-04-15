<?php

/**
 * Template Name: 固定ページ
 * Description: Post Page
 */
?>
<?php get_header(); ?>

<main class="main">

  <!-- 問合せフォーム -->
  <section class="postPage__main__section">

    <div class="container">
      <div class="heading-area">
        <h1 class="main-heading-text"><?php the_title(); ?></h1>
      </div>
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