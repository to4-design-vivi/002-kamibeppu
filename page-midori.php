<?php get_header();
/*
Template Name: midori
*/
?>
<div class="container shop_list">
    <h2>みどり薬局</h2>

    <div class="shop_contents">
        <span class="col-md-3 col-sm-3 shop_icon">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/icon_midori.png" alt="みどり薬局">
        </span>
        <dl class="col-md-9 col-sm-9 col-xs-12">
            <dt class="shop_name">
                みどり薬局
            </dt>
            <dd class="shop_introduction">
                開局以来、内科を中心とした処方箋及び、<br>
                他の広域医療機関の処方箋を取り扱っています。<br>
                患者様とのコミュニケーションを大切にし、何でも気軽に相談していただけるよう地域密着を目指して、邁進していきます。
            </dd>
        </dl>
        <ul class="clear col-md-3 col-sm-3 col-xs-12">
            <li class="shop_postal_code">〒&nbsp;881-0012</li>
            <li class="shop_address">宮崎県西都市小野崎1丁目55番地</li>
            <li class="shop_number">
                TEL&nbsp;0983-43-5108&nbsp;&nbsp;
                FAX&nbsp;0983-43-1408
            </li>
        </ul>
        <span class="col-md-8 col-sm-8 col-xs-12 shop_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/image_midori.png" alt="みどり薬局">
        </span>
    </div>
    <h3>お知らせ</h3>
    <ul>
        <?php
        $param = array(
            'post_type' => array('midori'),
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
