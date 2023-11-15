<?php get_header(); ?>


<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--blog">
    <div class="sub-mv__inner">
        <div class="sub-mv__title">
            <h1 class="sub-mv__title-text">blog</h1>
        </div>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumbs'); ?>

<div class="content-2columns layout-archive-home">
    <div class="content-2columns__inner inner">
        <main class="content-2columns__contents">
            <section class="archive-home">
                <div class="archive-home__contents">
                    <div class="archive-home__cards blog-cards blog-cards--2rows">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'posts_per_page' => 10,
                        );
                        $the_query = new WP_Query($args);
                        ?><?php if($the_query->have_posts()): ?>
                        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="blog-cards__item">
                            <div class="blog-card">
                                <div class="blog-card__img">
                                    <?php if(get_the_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                                    <?php else: ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.webp"
                                        alt="noimage>" />
                                    <?php endif; ?>
                                </div>
                                <div class="blog-card__body-top">
                                    <time class="blog-card__meta"
                                        datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                                    <h3 class="blog-card__title">
                                        <?php echo wp_trim_words( get_the_title(), 20, '…' ); ?>
                                    </h3>
                                </div>
                                <p class="blog-card__text text">
                                    <?php echo wp_trim_words( get_the_content(), 90, '…' ); ?>
                                </p>
                            </div>
                        </a>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <p class="text">投稿記事はありません。</p>
                        <?php endif; ?>
                    </div>
                    <!-- ページネーション -->
                    <div class="archive-home__pagenavi">
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>
            </section>
        </main>
        <!-- サイドバー -->
        <aside class="content-2columns__sidebar">
            <?php get_template_part('parts/sidebar'); ?>
        </aside>
    </div>
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
<?php get_footer(); ?>