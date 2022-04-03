<?php get_header(); ?>
<div class="top_main">
    <img src="<?php bloginfo('template_directory'); ?>/img/top_main.png" alt="こころにやさしい和める薬局">
</div>
<section class="top_company_news container">
    <h2>社名変更につきましてご案内</h2>
    <p>
        いつも弊社ホームページをご閲覧頂き感謝申し上げます。<sapn class="sp_none"><br></sapn>
        この度、弊社としまして企業躍進及びイメージをより一層明確にする為、ホールディングス化をする運びとなり、<sapn class="sp_none"><br></sapn>
        ２０１９年４月１日より上別府グループ調剤薬局から『株式会社　上別府コミュニティファーマシー』へ社名変更致しました。<sapn class="sp_none"><br></sapn>
        これからも社員一同、患者様や地域の皆様の為に、全力で取り組んで邁進致す所存です。<sapn class="sp_none"><br></sapn>
        日頃の皆様のお引き立てに心より感謝申し上げますと共に、何卒倍旧のご支援お引き立てを賜りますようお願い申し上げます。<sapn class="sp_none"><br></sapn>
    </p>
    <small>
        <span>株式会社  上別府コミュニティファーマシー</span>
        <span>代表取締役  上別府 正悟</span>
    </small>
</section>
<?php
    global $post;
    $my_posts = get_posts(array(
        'post_type'   => array(
            'post',
            'sakura',
            'anzu',
            'midori',
            'tanpopo',
            'yotsuba',
            'mizuki',
            'matsunomi',
            'heiwa'
        ),
        'numberposts' => 5,
        'orderby'     => 'date'
    ));
    if ($my_posts):
    ?>
    <div class="top_news_wrap container">
        <h2><span>お</span>知らせ</h2>

        <div class="top_news col-md-12 col-sm-12 col-xs-12">
            <?php foreach ($my_posts as $post):setup_postdata($post); ?>
                <div class="news_content">
                    <time class="col-md-2 col-sm-2 col-xs-12" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <h3 class="col-md-10 col-sm-10 col-xs-12">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
            <?php endforeach;
            wp_reset_postdata(); ?>
            <div class="col-md-2 col-md-offset-10 col-sm-3 col-sm-offset-9 col-xs-12 news_link">
                <a href="<?php echo site_url(); ?>/news" rel="bookmark">お知らせ一覧へ</a>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php include("block_menu.php"); ?>
<?php get_footer(); ?>
