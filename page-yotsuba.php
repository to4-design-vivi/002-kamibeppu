<?php get_header();
/*
Template Name: yotsuba
*/
?>
<div class="container shop_list">
    <h2>よつば薬局</h2>

    <div class="shop_contents">
        <span class="col-md-3 col-sm-3 shop_icon">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/icon_yotsuba.png" alt="よつば薬局">
        </span>
        <dl class="col-md-9 col-sm-9 col-xs-12">
            <dt class="shop_name">
                よつば薬局
            </dt>
            <dd class="shop_introduction">
                よつば薬局は平成22年10月、グループ最南端の薬局として、開局いたしました。
                私たちは、『和』の中にあって、笑顔をたやさない、親しみ易い雰囲気作りを心掛けています。
                そして、お薬の専門家としての知識を活かし、皆様の健やかな生活のお手伝いをさせていただきたいと思います。
            </dd>
        </dl>
        <ul class="clear col-md-3 col-sm-3 col-xs-12">
            <li class="shop_postal_code">〒&nbsp;889-1608</li>
            <li class="shop_address">宮崎県宮崎市清武町池田台北34－42</li>
            <li class="shop_number">
                TEL&nbsp;0985-55-0699&nbsp;&nbsp;
                FAX&nbsp;0985-55-0094
            </li>
        </ul>
        <span class="col-md-8 col-sm-8 col-xs-12 shop_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/image_yotsuba.png" alt="よつば薬局">
        </span>
    </div>
    <h3>お知らせ</h3>
    <ul>
        <?php
        $param = array(
            'post_type' => array('yotsuba'),
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
