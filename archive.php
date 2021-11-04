<?php get_header(); ?>

<main>
  <div class="l-main">
    <!-- メインビジュアル -->
    <div class="p-hero--archive">
      <div class="p-hero--archive__bg"></div>
      <div class="p-hero--archive__title u-font-white u-font-roboto">
        <h2>Menu:</h2>
        <p>チーズバーガー</p>
      </div>
    </div>

    <!-- イントロダクション -->
    <section class="p-introduction">
      <h2>小見出しが入ります</h2>
      <p>
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </section>

    <!-- 記事 -->
    <article class="p-menu-card">

      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

      <figure id="post-<?php the_ID(); ?>" <?php post_class('p-card c-card u-font-white'); ?>>
      <?php the_post_thumbnail('large'); ?>
        <figcaption class="p-card__figcaption">
          <?php the_title('<div class="p-card__figcaption__title">','</div>'); ?>
          <?php the_content(); ?>
          <button class="p-card__figcaption__button c-button"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
        </figcaption>
      </figure>

      <?php endwhile; ?>
      <?php endif; ?>

    </article>

    <!-- ページネーション -->
    <div class="l-pagination">
      <ul class="p-pagination u-font-roboto">
        <li class="p-pagination__information">
          <a href="#"><span>page 1/10</span></a>
        </li>
        <li class="p-pagination__previous">
          <a href="#">
            <span aria-hidden="true">&laquo;</span>
            <p>前へ</p>
          </a>
        </li>
        <li class="p-pagination__item"><a href="#"><span>1</span></a></li>
        <li class="p-pagination__item"><a href="#"><span>2</span></a></li>
        <li class="p-pagination__item"><a href="#"><span>3</span></a></li>
        <li class="p-pagination__item"><a href="#"><span>4</span></a></li>
        <li class="p-pagination__item"><a href="#"><span>5</span></a></li>
        <li class="p-pagination__item"><a href="#"><span>6</span></a></li>
        <li class="p-pagination__item"><a href="#"><span>7</span></a></li>
        <li class="p-pagination__item"><a href="#"><span>8</span></a></li>
        <li class="p-pagination__item"><a href="#"><span>9</span></a></li>
        <li class="p-pagination__next"><a href="#">
            <p>次へ</p>
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>