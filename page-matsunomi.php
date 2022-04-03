<?php get_header();
/*
Template Name: matsunomi
*/
?>
<div class="container shop_list">
    <h2>松の実薬局</h2>

    <div class="shop_contents">
        <span class="col-md-3 col-sm-3 shop_icon">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/icon_matsunomi.png" alt="松の実薬局">
        </span>
        <dl class="col-md-9 col-sm-9 col-xs-12">
            <dt class="shop_name">
                松の実薬局
            </dt>
            <dd class="shop_introduction">
                私たち松の実薬局は、明るく笑顔に満ちあふれた調剤薬局です。<br>
                常に患者様の立場を一人一人が意識していると共に、サービス精神を心掛けています。<br>
                地域医療に貢献できる、かかりつけ薬局を目指しています。
            </dd>
        </dl>
        <ul class="clear col-md-3 col-sm-3 col-xs-12 clear">
            <li class="shop_postal_code">〒&nbsp;880-0211</li>
            <li class="shop_address">宮崎県宮崎市佐土原町下田島9813番地5</li>
            <li class="shop_number">
                TEL&nbsp;0985-73-6802&nbsp;&nbsp;
                FAX&nbsp;0985-73-7926
            </li>
        </ul>
        <span class="col-md-8 col-sm-8 col-xs-12 shop_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/image_matsunomi.png" alt="松の実薬局">
        </span>
    </div>
    <h3>お知らせ</h3>
    <ul>
        <?php
        $param = array(
            'post_type' => array('matsunomi'),
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
