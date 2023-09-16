<?php

remove_action('wp_head', 'wp_generator');

function fukugyouShokunin_theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails', array('post', 'カスタム投稿名'));
  add_image_size('page_eyechatch', 1000, 500, true);


  wp_enqueue_script(
    'fukugyouShokunin-theme-common',
    get_template_directory_uri() . '/javascript/script.js',
    array(),
    '1.0.0',
    true
  );
}

add_action('after_setup_theme', 'fukugyouShokunin_theme_setup');


function fukugyouShokunin_enqueue_scripts()
{
  //jquery読み込み
  wp_enqueue_script('jquery');
  //JavaScript読み込み
  wp_enqueue_script(
    'fukugyouShokunin-theme-common',
    get_template_directory_uri() . '/javascript/script.js',
    array(),
    '1.0.0',
    true
  );

  wp_enqueue_style(
    'fukugyouShokunin_theme0styles',
    get_template_directory_uri() . '/css/style.css',
    array(),
    '1.0.0'
  );
}

add_action('wp_enqueue_scripts', 'fukugyouShokunin_enqueue_scripts');
