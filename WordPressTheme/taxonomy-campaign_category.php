<?php get_header(); ?>
<main>
    <!-- 下層ページのメインビュー -->
    <div class="sub-mv sub-mv--campaign">
        <div class="sub-mv__inner">
            <div class="sub-mv__title">
                <h1 class="sub-mv__title-text">campaign</h1>
            </div>
        </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumbs'); ?>

    <section class="archive-campaign layout-archive-campaign">
        <div class="archive-campaign__inner inner">
            <div class="archive-campaign__contents">
                <ul class="archive-campaign__category-list category-list">
                    <?php $current_page = $_SERVER['REQUEST_URI'];

                    $all_link_class = (strpos($current_page, '/campaign/') !== false && !is_tax('campaign_category')) ? 'current' : '';
                    ?>

                    <li class="category-list__category">
                        <a class="category category--big js-highlight <?php echo esc_attr($all_link_class); ?>"
                            href="<?php echo esc_url(home_url('/campaign/'));?>">all</a>
                    </li>

                    <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'campaign_category',
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

                <div class="archive-campaign__cards">
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                    <div class="archive-campaign__card campaign-card campaign-card--big">
                        <div class="campaign-card__img">
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                        </div>
                        <div class="campaign-card__title-wrapper">
                            <span class="campaign-card__category category"><?php single_cat_title(); ?></span>
                            <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                        </div>
                        <div class="campaign-card__text-wrapper">
                            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                            <div class="campaign-card__price">
                                <div class="campaign-card__original-price">¥<?php the_field('standard_fee'); ?>
                                </div>
                                <div class="campaign-card__discount-price">¥<?php the_field('special_price'); ?>
                                </div>
                            </div>
                            <div class="campaign-card__add-wrapper">
                                <p class="campaign-card__add-text text">
                                    <?php 
                                        $content = get_the_content();
                                        $content = wp_strip_all_tags( $content );
                                        echo $content;
                                    ?>
                                </p>
                                <div class="campaign-card__contact">
                                    <div class="campaign-card__contact-text">
                                        <p class="campaign-card__period">
                                            <?php the_field('campaign_start'); ?>-<?php the_field('campaign_end'); ?>
                                        </p>
                                        <p>ご予約・お問い合わせはコチラ</p>
                                    </div>
                                    <div class="campaign-card__button">
                                        <a href="<?php echo esc_url(home_url('/contact/'));?>" class="button"><span
                                                class="button__animation">contact&nbsp;us</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <div class="archive-campaign__pagenavi">
        <?php wp_pagenavi(); ?>
    </div>
    <?php get_footer(); ?>