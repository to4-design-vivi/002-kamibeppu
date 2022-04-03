<?php get_header();
/*
Template Name: mizuki
*/
?>
<div class="container shop_list">
    <h2>みずき薬局</h2>

    <div class="shop_contents">
        <span class="col-md-3 col-sm-3 shop_icon">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/icon_mizuki.png" alt="みずき薬局">
        </span>
        <dl class="col-md-9 col-sm-9 col-xs-12">
            <dt class="shop_name">
                みずき薬局
            </dt>
            <dd class="shop_introduction">
                西都市下三財、緑豊かな田園に囲まれた静かな環境の下、調剤を行っております。
                スタッフは、薬剤師3名、医療事務5名で、明るい笑顔と挨拶をモットーに日々がんばっております。
                いかなる処方に対しても、安全で正確な調剤を提供し、地域密着型の薬局として、患者様に信頼の頂ける薬局、愛される薬局を目指しております。
            </dd>
        </dl>
        <ul class="clear col-md-3 col-sm-3 col-xs-12">
            <li class="shop_postal_code">〒&nbsp;881-0113</li>
            <li class="shop_address">宮崎県西都市大字下三財3377番地3</li>
            <li class="shop_number">
                TEL&nbsp;0983-44-6251&nbsp;&nbsp;
                FAX&nbsp;0983-44-6254
            </li>
        </ul>
        <span class="col-md-8 col-sm-8 col-xs-12 shop_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop/image_mizuki.png" alt="みずき薬局">
        </span>
    </div>
    <h3>お知らせ</h3>
    <ul>
        <?php
        $param = array(
            'post_type' => array('mizuki'),
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
