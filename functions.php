<?php
//テーマサポート
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );

//タイトル出力
function hamburger_title($title)
{
    if (is_front_page() && is_home()) { //トップページなら
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //シングルページなら
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');

//メニューバー表示
register_nav_menu( 'sidebar','サイドバー');


//スタイルシート出力
function hamburger_script()
{
    wp_enqueue_style('mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;400;700&display=swap', array());
    wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array());
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '4.7.0');
    wp_enqueue_style('hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_deregister_script( 'jquery');
    wp_enqueue_script('jquery','//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/javascript/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/javascript/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'hamburger_script');



add_action( 'after_setup_theme', function(){
	// ブロックエディタ用スタイル機能をテーマに追加 
	add_theme_support( 'editor-styles' );
	// ブロックエディタ用CSSの読み込み
    add_editor_style( get_template_directory_uri().'/css/editor-style.css' );
});