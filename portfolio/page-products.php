<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tai`s portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-products.css">

        <!-- jQuery読み込み -->
        <!-- <?php wp_enqueue_script('jquery'); ?> -->

        <!-- 管理画面表示 -->
        <?php wp_head(); ?>
    </head>
    <body>
        <section id="section-post">
            <div class="container-post">
                <div class="wrapper-header">
                    <h3>制作実績一覧</h3>
                </div>
                <div class="wrapper-post">

                <?php
                    $args = array(
                        'posts_per_page' => 5,        // 読み込みしたい記事数（全件取得時は-1）
                        'category'       => 3,        // （読み込みしたいカテゴリID（複数の場合は '1,2'）
                        'orderby'        => 'date',     // 何順で記事を読み込むか（デフォルトは日付順）
                        'order'          => 'DESC',   // 昇順（ASC） or 降順
                        'exclude'        => '0',      // 一覧に表示したくない記事のID
                    );

                    // 記事データ取得
                    $datas = get_posts( $args );

                    // 取得した記事内容の表示
                    if ( $datas ):
                        // $post 変数名は変えちゃだめ
                        foreach ( $datas as $post ):
                            // setup_postdata( $post );
                ?>

                    <div class="post disp-flex-row">
                        <div class="wrapper-thumbnail">
                            <?php
                                if (has_post_thumbnail()):
                            ?>
                            <img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail">
                            <?php
                                else:
                            ?>
                            <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/no_img.png" alt="no-img">
                            <?php
                                endif;
                            ?>
                        </div>
                        <div class="wrapper-post-content">
                            <div class="date-posted disp-flex-row">
                                <img class="clock-icon" src="<?php echo get_template_directory_uri(); ?>/images/clock.png" alt="clock">
                                <p><?php echo get_the_date(); ?></p>
                            </div>
                            <h3 class="title-post"><?php the_title(); ?></h3>
                            <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                            <a class="link-detail-btn">
                                <p>続きを読む ></p>
                            </a>
                        </div>
                    </div>

                <?php
                        endforeach;
                    else:
                ?>

                    <h3>記事がありません。</h3>
                
                <?php
                    endif;

                    // 一覧取得時に利用したループをリセットする
                    wp_reset_postdata();
                ?>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
