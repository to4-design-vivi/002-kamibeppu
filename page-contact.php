<?php get_header();
/*
Template Name: contact
*/
?>
<div class="container contact_wrap">
    <h2><?php echo get_the_title(); ?></h2>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="contact_form col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</div>
<?php include("block_menu.php"); ?>
<?php get_footer(); ?>
