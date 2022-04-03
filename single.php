<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="container news_detail">
            <h2><?php the_title(); ?></h2>
            <?php if (get_field('image_01')): ?>
                <img src="<?php the_field('image_01'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>

            <p><?php the_content(); ?></p>

            <?php if (get_field('fb_url')): ?>
                <p class="news_fb"><a href="<?php (get_field('fb_url')); ?>" target="_blank">Facebookページはこちら</a></p>
            <?php endif; ?>

            <div class="news_back"><a href="<?php echo site_url(); ?>/news" rel="bookmark">お知らせ一覧へ戻る</a></div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php include("block_menu.php"); ?>
<?php get_footer(); ?>
