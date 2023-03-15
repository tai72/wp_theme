<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tai`s portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle_common.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-contact.css">

        <!-- jQuery読み込み -->
        <!-- <?php wp_enqueue_script('jquery'); ?> -->

        <!-- 管理画面表示 -->
        <?php wp_head(); ?>
    </head>
    <body>
        <p id="windowSize"></p>
        <section id="section-contact">
            <?php 
            if (have_posts()): 
                while (have_posts()): the_post(); 
            ?>

                <article>
                    <div class="wrapper-header">
                        <h3><?php the_title(); ?></h3>
                    </div>
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
