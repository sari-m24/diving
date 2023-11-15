<?php get_header(); ?>

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
<main>
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
                                    <p class="voice-card__age"><?php echo $age; ?>(<?php echo $classification; ?>)
                                    </p>
                                    <?php
                                        }
                                        ?>
                                    <?php
                                    $terms = get_the_terms($post->ID, 'voice_category');
                                    if(!empty($terms)) {
                                        foreach($terms as $term):
                                        echo '<span
                                        class="voice-card__category category">' . $term->name . '</span>';
                                    endforeach;
                                    } else {
                                        echo '<span
                                        class="voice-card__category category">未分類</span>';
                                    }
                                    ?>
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
    <section class="contact layout-sub-contact">
        <div class="contact__inner inner">
            <div class="contact__illust">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish3.webp" alt="キンギョハナダイのイラスト" />
            </div>
            <div class="contact__contents">
                <div class="contact__store-info">
                    <a href="<?php echo esc_url(home_url());?>" class="contact__logo">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.svg"
                            alt="CodeUps" />
                    </a>
                    <div class="contact__address-wrapper">
                        <address class="contact__address">
                            沖縄県那覇市1-1<br />TEL:0120-000-0000<br />営業時間:8:30-19:00<br />定休日:毎週火曜日
                        </address>
                        <div class="contact__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d28635.982459379786!2d127.66184162995282!3d26.213009876403387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zT2tpbmF3YSwgMS0xIOmCo-imh-W4giDmspbnuITnnIw!5e0!3m2!1sja!2sjp!4v1689455322999!5m2!1sja!2sjp"
                                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="contact__button-wrapper">
                    <div class="contact__section-title section-title section-title--large">
                        <p class="section-title__main">contact</p>
                        <h2 class="section-title__sub">お問い合わせ</h2>
                    </div>
                    <p class="contact__text">ご予約・お問い合わせはコチラ</p>
                    <div class="contact__button">
                        <a href="<?php echo esc_url(home_url('/contact/'));?>" class="button"><span
                                class="button__animation">contact&nbsp;us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>