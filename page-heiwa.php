<?php get_header();
/*
Template Name: heiwa
*/
?>
<div class="container shop_list">
    <h2>松の実薬局 平和台店</h2>

    <div class="shop_contents">
        <span class="col-md-3 col-sm-3 shop_icon">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/icon_heiwa.png" alt="松の実薬局 平和台店">
        </span>
        <dl class="col-md-9 col-sm-9 col-xs-12">
            <dt class="shop_name">
                松の実薬局 平和台店
            </dt>
            <dd class="shop_introduction">
                平成24年11月に開局したグループで今最もフレッシュな薬局です。
                明るい笑顔はもちろんのこと、親切・丁寧に皆様をお迎えし、これから徐々に地域貢献できる様心がけていきます。
                皆様が気軽にお声をお掛けくださる、そんなあたたかい薬局を目指します。どうぞ、よろしくおねがいいたします。
            </dd>
        </dl>
        <ul class="clear col-md-3 col-sm-3 col-xs-12 clear">
            <li class="shop_postal_code">〒&nbsp;880-0034</li>
            <li class="shop_address">宮崎県宮崎市矢の先町122−１パークビル1F</li>
            <li class="shop_number">
                TEL&nbsp;0985-34-9746&nbsp;&nbsp;
                FAX&nbsp;0985-34-9749
            </li>
        </ul>
        <span class="col-md-8 col-sm-8 col-xs-12 shop_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/image_heiwa.png" alt="松の実薬局 平和台店">
        </span>
    </div>
    <h3>お知らせ</h3>
    <ul>
        <?php
        $param = array(
            'post_type' => array('heiwa'),
            'numberposts' => 16,
            'orderby' => 'date',
        );
        query_posts($param);
        $count = 0; if( have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); $count++; ?>
            <li class="col-md-12 col-sm-12 col-xs-12 news_list">
                <a href="<?php the_permalink(); ?>">
                    <dl>
                        <dt class="news_image"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></dt>
                        <dd><?php the_title(); ?></dd>
                    </dl>
                </a>
            </li>
            <?php if ($count % 4 == 0): ?><div class="clear"></div><?php endif; ?>
        <?php endwhile; endif; ?>
    </ul>

</div>

<?php include("block_menu.php"); ?>
<?php get_footer(); ?>
