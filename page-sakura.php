<?php get_header();
/*
Template Name: sakura
*/
?>
<div class="container shop_list">
    <h2>さくら調剤薬局</h2>

    <div class="shop_contents">
        <span class="col-md-3 col-sm-3 shop_icon">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/icon_sakura.png" alt="さくら調剤薬局">
        </span>
        <dl class="col-md-9 col-sm-9 col-xs-12">
            <dt class="shop_name">
                さくら調剤薬局
            </dt>
            <dd class="shop_introduction">
                健康は人々の共通の願いです。人々の高まる健康志向をお手伝いするべく、さくら調剤薬局では早くから「かかりつけ薬局」として、その役割を担ってきました。
                その為に、お薬の専門家として、皆様にコミュニケーションと適切なアドバイスを実践しています。
                これからも培った経験とノウハウを活かし、地域医療に幅広く貢献します。
            </dd>
        </dl>
        <ul class="clear col-md-3 col-sm-3 col-xs-12">
            <li class="shop_postal_code">〒&nbsp;881-0016</li>
            <li class="shop_address">宮崎県西都市御舟町1丁目57番地2</li>
            <li class="shop_number">
                TEL&nbsp;0983-43-3046&nbsp;&nbsp;
                FAX&nbsp;0983-43-3968
            </li>
        </ul>
        <span class="col-md-8 col-sm-8 col-xs-12 shop_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/image_sakura.png" alt="さくら調剤薬局">
        </span>
    </div>

    <h3>お知らせ</h3>
    <ul>
        <?php
        $param = array(
            'post_type' => array('sakura'),
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
