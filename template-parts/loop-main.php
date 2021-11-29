<!-- メインビジュアル -->
<div class="p-hero--single" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()),); ?>)">
    <div class="p-hero--single__title u-font-white">
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<!-- コンテンツ -->
<div class="l-content">
    <div <?php post_class(); ?>>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</div>