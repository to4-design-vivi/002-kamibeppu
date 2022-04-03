<?php get_header();
/*
Template Name: anzu
*/
?>
<div class="container shop_list">
    <h2>あんず薬局</h2>

    <div class="shop_contents">
        <span class="col-md-3 col-sm-3 shop_icon">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/icon_anzu.png" alt="あんず薬局">
        </span>
        <dl class="col-md-9 col-sm-9 col-xs-12">
            <dt class="shop_name">
                あんず薬局
            </dt>
            <dd class="shop_introduction">
                あんず薬局は平成16年12月に開局しました。<br>
                笑顔、親切、丁寧をモットーに若さあふれるアットホームな雰囲気のある職場です。<br>
                気軽に声をかけてください。 地域と一体となって患者さんに安心していただけるように 頑張っていきたいとおもいます。
            </dd>
        </dl>
        <ul class="clear col-md-3 col-sm-3 col-xs-12">
            <li class="shop_postal_code">〒&nbsp;889-0616</li>
            <li class="shop_address">宮崎県東臼杵郡門川町南町2丁目20番地3</li>
            <li class="shop_number">
                TEL&nbsp;0982-50-4427&nbsp;&nbsp;
                FAX&nbsp;0982-50-4426
            </li>
        </ul>
        <span class="col-md-8 col-sm-8 col-xs-12 shop_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/image_anzu.png" alt="あんず薬局">
        </span>
    </div>
    <h3>お知らせ</h3>
    <ul>
        <?php
        $param = array(
            'post_type' => array('anzu'),
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
