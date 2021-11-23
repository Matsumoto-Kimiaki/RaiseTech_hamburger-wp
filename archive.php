<?php get_header(); ?>

<main>
  <div class="l-main">
    <!-- メインビジュアル -->
    <div class="p-hero--archive">
      <div class="p-hero--archive__bg"></div>
      <div class="p-hero--archive__title u-font-white u-font-roboto">
        <h2>Menu:</h2>
        <p>
          <?php if (is_category()) {
            single_cat_title();
          }
          ?>
        </p>
      </div>
    </div>

    <!-- イントロダクション -->
    <section class="p-introduction">
      <?php echo category_description(); ?>
    </section>

    <!-- 記事 -->
    <article class="p-menu-card">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <figure id="post-<?php the_ID(); ?>" <?php post_class('p-card c-card u-font-white'); ?>>
            <?php the_post_thumbnail('large'); ?>
            <figcaption class="p-card__figcaption">
              <?php the_title('<div class="p-card__figcaption__title">', '</div>'); ?>
              <?php the_excerpt(); ?>
              <button class="p-card__figcaption__button c-button"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
            </figcaption>
          </figure>

        <?php endwhile; ?>
      <?php endif; ?>

    </article>


    <!-- ページネーション -->
    <div class="l-pagination">
      <?php wp_pagenavi(); ?>

      <?php the_posts_navigation(array(     //スマホ表示用
        'prev_text' => '&lt;&lt;  前へ',
        'next_text' => '次へ  &gt;&gt;',
      )); ?>

    </div>

  </div>
</main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>