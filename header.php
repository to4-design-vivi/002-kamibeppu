<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container_wrap">
    <div class="container header_wrap">
        <header class="header">
            <h1 class="header_logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
            </h1>

            <div class="header_tel">
                <a href="TEL:0983426227">TEL 0983-42-6227</a>
            </div>

            <div id="js_sp_toggle" class="sp_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="header_nav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                    <li id="js_nav_trigger" class="hidden-xs"><a href="javascript:void(0)">事業案内</a>
                        <ul id="js_sub_nav" class="header_nav_child">
                            <!--<li><a href="<?php /*echo site_url(); */ ?>/home_nursing">訪問看護ステーション&nbsp;すみれ</a></li>-->
                            <li><a href="<?php echo site_url(); ?>/care">在宅医療</a></li>
                        </ul>
                    </li>
                    <li class="hidden-lg hidden-md hidden-sm"><a href="<?php echo site_url(); ?>/care">在宅医療</a></li>
                    <li><a href="<?php echo site_url(); ?>/about">企業情報</a></li>
                    <li><a href="<?php echo site_url(); ?>/shop">店舗一覧</a></li>
                    <li><a href="<?php echo site_url(); ?>/recruit">採用情報</a></li>
                    <li><a href="<?php echo site_url(); ?>/contact">お問い合わせ</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <!-- End of .container -->
