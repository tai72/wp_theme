<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tai`s portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/single.css">

        <!-- jQuery読み込み -->
        <!-- <?php wp_enqueue_script('jquery'); ?> -->

        <!-- 管理画面表示 -->
        <?php wp_head(); ?>
    </head>
    <body>

        <section id="posted">
            <?php 
            if (have_posts()): 
                while (have_posts()): the_post(); 
            ?>
                <article>
                    <div class="wrapper-post-header">
                        <div class="date-and-title disp-flex-row">
                            <div class="post-date disp-flex-col">
                                <p class="post-y"><?php the_time('Y'); ?></p>
                                <p class="post-m-d"><?php the_time('n/j'); ?></p>
                            </div>
                            <span></span>
                            <div class="title">
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <div class="wrapper-category disp-flex-row">
                            <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/images/tag.png" alt="category-tag">
                            <div class="category-links">
                                <?php the_category(); ?>
                            </div>
                        </div>
                    </div>

                    <?php if (has_post_thumbnail()): ?>
                    <div class="wrapper-thumbnail">
                        <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php get_the_title(); ?>">
                    </div>
                    <?php endif; ?>

                    <div id="posted-content">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php
                endwhile;
            endif; 
            ?>
        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
