<?php get_header();
/*
Template Name: tanpopo
*/
?>
<div class="container shop_list">
    <h2>たんぽぽ薬局</h2>

    <div class="shop_contents">
        <span class="col-md-3 col-sm-3 shop_icon">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/icon_tanpopo.png" alt="たんぽぽ薬局">
        </span>
        <dl class="col-md-9 col-sm-9 col-xs-12">
            <dt class="shop_name">
                たんぽぽ薬局
            </dt>
            <dd class="shop_introduction">
                たんぽぽ薬局は、明るく活気に満ちた薬局です。<br>
                内科・小児科・歯科を中心として、小さなお子様からご年配の方まで来客される為、親しみ易い雰囲気作りを心掛けています。<br>
                患者さんの相談に応じながら、地域の皆様のかかりつけ薬局を目指しています。
            </dd>
        </dl>
        <ul class="clear col-md-3 col-sm-3 col-xs-12">
            <li class="shop_postal_code">〒&nbsp;884－0002</li>
            <li class="shop_address">宮崎県児湯郡高鍋町北高鍋1392番地</li>
            <li class="shop_number">
                TEL&nbsp;0983-22-3011&nbsp;&nbsp;
                FAX&nbsp;0983-22-3607
            </li>
        </ul>
        <span class="col-md-8 col-sm-8 col-xs-12 shop_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/image_tanpopo.png" alt="たんぽぽ薬局">
        </span>
    </div>
    <h3>お知らせ</h3>
    <ul>
        <?php
        $param = array(
            'post_type' => array('tanpopo'),
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
