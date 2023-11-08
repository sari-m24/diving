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
            <section class="single-body">
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                <?php set_post_views(get_the_ID()); ?>
                <div class="single-body__contents">
                    <div class="single-body__top">
                        <time class="single-body__meta"
                            datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                        <div class="single-body__title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <div class="single-body__mv">
                        <?php if(get_the_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                        <?php else: ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.webp"
                            alt="noimage>" />
                        <?php endif; ?>
                    </div>
                    <div class="single-body__content">
                        <?php the_content(); ?>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- ページネーション -->
                    <?php
                    // 前の投稿を取得
                    $args_prev = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'order' => 'DESC',
                        'date_query' => array(
                            array(
                                'before' => $post->post_date
                            )
                        )
                    );
                    $prev_query = new WP_Query($args_prev);
                    $prev_post = $prev_query->posts ? array_shift($prev_query->posts) : null;
                    
                    // 次の投稿を取得
                    $args_next = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'order' => 'ASC',
                        'date_query' => array(
                            array(
                                'after' => $post->post_date
                            )
                        )
                    );
                    $next_query = new WP_Query($args_next);
                    $next_post = $next_query->posts ? array_shift($next_query->posts) : null;
                    
                    ?>

                    <!-- ページネーション -->
                    <div class="single-body__pagenavi">
                        <?php if ($prev_post): ?>
                        <a class="single-body__prev" rel="prev" href="<?php echo get_permalink($prev_post->ID); ?>"></a>
                        <?php endif; ?>

                        <?php if ($next_post): ?>
                        <a class="single-body__next" rel="next" href="<?php echo get_permalink($next_post->ID); ?>"></a>
                        <?php endif; ?>
                    </div>

                    <?php
                    // クエリのリセット
                    wp_reset_postdata();
                    ?>


                    <?php wp_reset_postdata(); ?>
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