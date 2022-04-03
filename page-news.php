<?php get_header(); ?>
    <div class="news_list_wrap container">
        <h2>お知らせ</h2>
        <ul>
            <?php
            $param = array(
                'post_type' => array(
                    'post',
                    'sakura',
                    'anzu',
                    'midori',
                    'tanpopo',
                    'yotsuba',
                    'mizuki',
                    'matsunomi',
                    'heiwa',
                    'naka',
                    'minori',
                    'soumu',
                ),
            'numberposts' => 100,
            'orderby' => 'date',
            );
            query_posts($param);
            $count = 0;
            if( have_posts()) :
                while($wp_query->have_posts()) : $wp_query->the_post();
                    $count++; ?>
                    <li class="col-md-12 col-sm-12 col-xs-12 news_list">
                        <a href="<?php the_permalink(); ?>">
                            <dl>
                                <dt class="news_image"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></dt>
                                <dd><?php the_title(); ?></dd>
                            </dl>
                        </a>
                    </li>
                    <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div>

<?php include("block_menu.php"); ?>
<?php get_footer(); ?>
