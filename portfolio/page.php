<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tai`s portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">

        <!-- jQuery読み込み -->
        <!-- <?php wp_enqueue_script('jquery'); ?> -->

        <!-- 管理画面表示 -->
        <?php wp_head(); ?>
    </head>
    <body>

        <?php 
        if (have_posts()): 
            while (have_posts()): the_post(); 
        ?>

            <h1><?php the_title(); ?></h1>
            <section><?php the_content(); ?></section>

        <?php
            endwhile;
        endif; 
        ?>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
