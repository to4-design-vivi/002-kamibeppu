<?php get_header();
/*
Template Name: shop
*/
?>
<div class="container shop_main">
    <h2>店舗一覧</h2>
    <ul class="row">
        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/sakura">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/sakura.png" alt="さくら薬局"></dt>
                    <dd>さくら調剤薬局</dd>
                </dl>
            </a>
        </li>
        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/anzu">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/anzu.png" alt="あんず薬局"></dt>
                    <dd>あんず薬局</dd>
                </dl>
            </a>
        </li>
<!--        <li class="col-md-4 col-sm-6 col-xs-6">-->
<!--            <a href="--><?php //echo site_url(); ?><!--/shop/midori">-->
<!--                <dl>-->
<!--                    <dt><img src="--><?php //bloginfo('template_directory'); ?><!--/img/shop/midori.png" alt="みどり薬局"></dt>-->
<!--                    <dd>みどり薬局</dd>-->
<!--                </dl>-->
<!--            </a>-->
<!--        </li>-->
        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/tanpopo">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/tanpopo.png" alt="たんぽぽ薬局"></dt>
                    <dd>たんぽぽ薬局</dd>
                </dl>
            </a>
        </li>
        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/yotsuba">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/yotsuba.png" alt="よつば薬局"></dt>
                    <dd>よつば薬局</dd>
                </dl>
            </a>
        </li>
        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/mizuki">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/mizuki.png" alt="みずき薬局"></dt>
                    <dd>みずき薬局</dd>
                </dl>
            </a>
        </li>
        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/matsunomi">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/matsunomi.png" alt="松の実薬局"></dt>
                    <dd>松の実薬局</dd>
                </dl>
            </a>
        </li>
        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/heiwa">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/heiwa.png" alt="松の実 平和台店"></dt>
                    <dd>松の実 平和台店</dd>
                </dl>
            </a>
        </li>
<!--        <li class="col-md-4 col-sm-6 col-xs-6">-->
<!--            <a href="--><?php //echo site_url(); ?><!--/shop/minori">-->
<!--                <dl>-->
<!--                    <dt><img src="--><?php //bloginfo('template_directory'); ?><!--/img/shop/minori.png" alt="みのり薬局"></dt>-->
<!--                    <dd>みのり薬局</dd>-->
<!--                </dl>-->
<!--            </a>-->
<!--        </li>-->
        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/naka">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/naka.png" alt="なか調剤薬局"></dt>
                    <dd>なか調剤薬局</dd>
                </dl>
            </a>
        </li>

        <li class="col-md-4 col-sm-6 col-xs-6">
            <a href="<?php echo site_url(); ?>/shop/soumu">
                <dl>
                    <dt><img src="<?php bloginfo('template_directory'); ?>/img/shop/soumu.png" alt="総務部"></dt>
                    <dd>総務部</dd>
                </dl>
            </a>
        </li>
    </ul>
</div>
<?php include("block_menu.php"); ?>
<?php get_footer(); ?>
