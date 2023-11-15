<?php get_header(); ?>
<main>

    <!-- 下層ページのメインビュー -->
    <div class="sub-mv sub-mv--voice">
        <div class="sub-mv__inner">
            <div class="sub-mv__title">
                <h1 class="sub-mv__title-text">voice</h1>
            </div>
        </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumbs'); ?>

    <section class="archive-voice layout-archive-voice">
        <div class="archive-voice__inner inner">
            <div class="archive-voice__contents">
                <ul class="archive-voice__category-list category-list">
                    <?php $current_page = $_SERVER['REQUEST_URI'];

                        $all_link_class = (strpos($current_page, '/voice/') !== false && !is_tax('voice_category')) ? 'current' : '';
                        ?>

                    <li class="category-list__category">
                        <a class="category category--big js-highlight <?php echo esc_attr($all_link_class); ?>"
                            href="<?php echo esc_url(home_url('/voice/'));?>">all</a>
                    </li>

                    <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'voice_category',
                            'hide_empty' => true,
                            'orderby' => 'name',
                            'order'   => 'ASC'
                        ));

                        $current_term_id = get_queried_object_id();

                        if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                $link_class = ($term->term_id == $current_term_id) ? 'current' : '';
                                echo '<li class="category-list__category">
                                <a class="category category--big ' . esc_attr($link_class) . '" href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                            }
                        } ?>
                </ul>

                <div class="archive-voice__cards voice-cards">
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                    <div class="voice-cards__item voice-card">
                        <div class="voice-card__wrapper">
                            <div class="voice-card__top">
                                <div class="voice-card__label">
                                    <?php
                                        $age = get_field('age');
                                        $classification = get_field('classification');
                                        if ($age && $classification) {
                                        ?>
                                    <p class="voice-card__age"><?php echo $age; ?>(<?php echo $classification; ?>)</p>
                                    <?php
                                        }
                                        ?>
                                    <span class="voice-card__category category"><?php single_cat_title(); ?></span>
                                </div>
                                <h3 class="voice-card__title">
                                    <?php the_title(); ?>
                                </h3>
                            </div>
                            <div class="voice-card__img color-box js-color-box">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                            </div>
                        </div>
                        <p class="voice-card__text text">
                            <?php 
                            $content = get_the_content();
                            $content = wp_strip_all_tags( $content );
                            echo $content;
                            ?>
                        </p>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p class="text">投稿記事はありません。</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ページネーション -->
    <div class="archive-voice__pagenavi">
        <?php wp_pagenavi(); ?>
    </div>
    <?php get_footer(); ?>