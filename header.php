<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="l-grid">
        <div class="l-wrapper">
            <!-- ヘッダー -->
            <header>
                <div class="l-header u-font-grey">
                    <nav class="p-global-navigation">
                        <h1 class="p-global-navigation__logo-title u-font-roboto"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h3 class="p-global-navigation__logo-menu js-menu u-font-roboto">Menu</h3>
                        <?php get_search_form(); ?>
                    </nav>
                </div>
            </header>