<?php


//一括でスタイルシートを登録しておく
function register_style ()
{
    wp_register_style('style', get_bloginfo('template_directory') . '/style.css');
}


function add_stylesheet ()
{
    register_style();
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css');
    wp_enqueue_style('style');
}
add_action('wp_print_styles', 'add_stylesheet');


function add_scripts() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array( 'jquery' ), '20170503', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '20190324', true );
}
add_action('wp_print_scripts', 'add_scripts');