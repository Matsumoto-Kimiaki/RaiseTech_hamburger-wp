<?php get_header(); ?>

<main>
  <div class="l-main">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('template-parts/loop', 'main'); ?>

      <?php endwhile;
    else :
      ?><p>表示する記事がありません</p><?php
                          endif; ?>

  </div>
</main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>