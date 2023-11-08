<?php get_header(); ?>

<!-- MV -->
<div class="mv">
    <div class="mv__inner">
        <div class="mv__slider mv-swiper swiper js-mv-swiper">
            <div class="mv-swiper__wrapper swiper-wrapper">
                <div class="mv-swiper__slide swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc1.webp"
                            media="(min-width:768px)" />
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp1.webp"
                            alt="ウミガメが綺麗な海を泳いでいる様子" />
                    </picture>
                </div>
                <div class="mv-swiper__slide swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc2.webp"
                            media="(min-width:768px)" />
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp2.webp"
                            alt="泳いでいるウミガメをダイビングしながら眺めている様子" />
                    </picture>
                </div>
                <div class="mv-swiper__slide swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc3.webp"
                            media="(min-width:768px)" />
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp3.webp"
                            alt="島と島の間に3隻のクルーザーが停まっている様子" />
                    </picture>
                </div>
                <div class="mv-swiper__slide swiper-slide">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc4.webp"
                            media="(min-width:768px)" />
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp4.webp"
                            alt="青い海と青い空と真っ白なビーチに数人の人がいる様子" />
                    </picture>
                </div>
            </div>
            <div class="mv__title">
                <h2 class="mv__title-large">diving</h2>
                <p class="mv__title-small">into&nbsp;the&nbsp;ocean</p>
            </div>
        </div>
    </div>
</div>
<main>
    <!-- Campaign -->
    <section class="campaign layout-top-campaign">
        <div class="campaign__inner inner">
            <div class="campaign__section-title section-title">
                <p class="section-title__main">campaign</p>
                <h2 class="section-title__sub">キャンペーン</h2>
            </div>
            <div class="campaign__swiper-button swiper-navigation">
                <button class="campaign__swiper-button-prev swiper-button-prev"></button>
                <button class="campaign__swiper-button-next swiper-button-next"></button>
            </div>
            <div class="campaign__slider campaign-swiper swiper js-campaign-swiper">
                <div class="campaign__cards swiper-wrapper">
                    <?php $campaign_query = new WP_Query(
                        array(
                            'post_type'      => 'campaign',
                            'posts_per_page' => 4,
                        )
                        ); ?>
                    <?php if ( $campaign_query->have_posts() ) : ?>
                    <?php while ( $campaign_query->have_posts() ) : ?>
                    <?php $campaign_query->the_post(); ?>
                    <div class="swiper-slide campaign__card">
                        <div class="campaign-card">
                            <div class="campaign-card__img">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                            </div>
                            <div class="campaign-card__title-wrapper">
                                <?php
                            $terms = get_the_terms($post->ID, 'campaign_category');
                            if(!empty($terms)) {
                                foreach($terms as $term):
                                echo '<span
                                class="campaign-card__category category">' . $term->name . '</span>';
                            endforeach;
                            } else {
                                echo '<span
                                class="campaign-card__category category">未分類</span>';
                            }
                            ?>
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
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="campaign__button">
            <a href="<?php echo esc_url(home_url('/campaign/'));?>" class="button"><span
                    class="button__animation">view&nbsp;more</span></a>
        </div>
        </div>
    </section>
    <!-- About us -->
    <section class="about-us layout-top-about-us">
        <div class="about-us__inner inner">
            <div class="about-us__section-title section-title">
                <p class="section-title__main">about&nbsp;us</p>
                <h2 class="section-title__sub">私たちについて</h2>
            </div>
            <div class="about-us__content-wrapper">
                <div class="about-us__img-left">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-img1.webp"
                        alt="屋根にあるシーサーの写真" />
                </div>
                <div class="about-us__img-right">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-img2.webp"
                        alt="海で泳ぐ黄色の魚の写真" />
                </div>
                <div class="about-us__contents">
                    <div class="about-us__message">
                        <h3 class="about-us__message-main">
                            <span>d</span>ive&nbsp;into<br />the&nbsp;<span>o</span>cean
                        </h3>
                        <div class="about-us__message-sub-wrapper">
                            <p class="about-us__message-sub text text--white">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                            </p>
                            <div class="about-us__button">
                                <a href="<?php echo esc_url(home_url('/about-us/'));?>" class="button"><span
                                        class="button__animation">view&nbsp;more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us__illust">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sea-anemone.webp"
                    alt="サンゴ礁とイソギンチャクのイラスト" />
            </div>
        </div>
    </section>
    <!-- Information -->
    <section class="information layout-top-information">
        <div class="information__inner inner">
            <div class="information__section-title section-title">
                <p class="section-title__main">information</p>
                <h2 class="section-title__sub">ダイビング情報</h2>
            </div>
            <div class="information__contents">
                <div class="information__img color-box js-color-box">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-information.webp"
                        alt="青い海の中で黄色の魚がサンゴ礁の近くを泳ぐ様子" />
                </div>
                <div class="information__text-wrapper">
                    <h3 class="information__text-title">ライセンス講習</h3>
                    <p class="information__text text">
                        当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                    </p>
                    <div class="information__button">
                        <a href="<?php echo esc_url(home_url('/information/'));?>" class="button"><span
                                class="button__animation">view&nbsp;more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog layout-top-blog">
        <div class="blog__inner inner">
            <div class="blog__illust-top">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish1.webp" alt="キンギョハナダイのイラスト" />
            </div>
            <div class="blog__section-title section-title section-title--white">
                <p class="section-title__main">blog</p>
                <h2 class="section-title__sub">ブログ</h2>
            </div>
            <div class="blog__cards blog-cards">
                <?php $blog_query = new WP_Query(
                        array(
                            'post_type'      => 'post',
                            'posts_per_page' => 3,
                        )
                        ); ?>
                <?php if ( $blog_query->have_posts() ) : ?>
                <?php while ( $blog_query->have_posts() ) : ?>
                <?php $blog_query->the_post(); ?>
                <a href="<?php the_permalink();?>" class="blog-cards__item">
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
                            <h3 class="blog-card__title"><?php echo wp_trim_words( get_the_title(), 20, '…' ); ?></h3>
                        </div>
                        <p class="blog-card__text text">
                            <?php echo wp_trim_words( get_the_content(), 90, '…' ); ?>
                        </p>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="blog__button">
                <a href="<?php echo esc_url(home_url('/blog/'));?>" class="button"><span
                        class="button__animation">view&nbsp;more</span></a>
            </div>
        </div>
    </section>
    <!-- Voice -->
    <section class="voice layout-top-voice">
        <div class="voice__inner inner">
            <div class="voice__illust-top">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish2.webp" alt="キンギョハナダイのイラスト" />
            </div>
            <div class="voice__section-title section-title">
                <p class="section-title__main">voice</p>
                <h2 class="section-title__sub">お客様の声</h2>
            </div>
            <div class="voice__cards voice-cards">
                <?php $voice_query = new WP_Query(
                        array(
                            'post_type'      => 'voice',
                            'posts_per_page' => 2,
                        )
                        ); ?>
                <?php if ( $voice_query->have_posts() ) : ?>
                <?php while ( $voice_query->have_posts() ) : ?>
                <?php $voice_query->the_post(); ?>
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
                            $content = get_the_content(); // 本文を取得
                            $content = wp_strip_all_tags( $content ); // HTMLタグを除去
                            echo $content; // 出力
                            ?>
                    </p>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="voice__button">
                <a href="<?php echo esc_url(home_url('/voice/'));?>" class="button"><span
                        class="button__animation">view&nbsp;more</span></a>
            </div>
            <div class="voice__illust-bottom">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/seahorse.webp" alt="イバラタツのイラスト" />
            </div>
        </div>
    </section>
    <!-- Price -->
    <section class="price layout-top-price">
        <div class="price__inner inner">
            <div class="price__section-title section-title">
                <p class="section-title__main">Price</p>
                <h2 class="section-title__sub">料金一覧</h2>
            </div>
            <div class="price__wrapper">
                <div class="price__img color-box js-color-box">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price.webp"
                            media="(min-width: 768px)" />
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price2.webp"
                            alt="ウミガメが泳いでいる様子" />
                    </picture>
                </div>
                <div class="price__lists-box">
                    <?php $price_query = new WP_Query(
                        array(
                            'post_type'      => 'price',
                            'posts_per_page' => 4,
                            'order' => 'ASC'
                        )
                        ); ?>
                    <?php if ( $price_query->have_posts() ) : ?>
                    <?php while ( $price_query->have_posts() ) : ?>
                    <?php $price_query->the_post(); ?>
                    <ul class="price__lists">
                        <li class="price__list price-list">
                            <h3 class="price-list__title"><?php the_title(); ?></h3>
                            <dl class="price-list__body">
                                <?php
                        $price_list = CFS()->get('price_list');
                        $pairs_to_display = 3;
                        $pairs_filled = 0;
                        if (!empty($price_list) && is_array($price_list)):
                            $rowCount = count($price_list); // フィールドの行数を取得
                            foreach ($price_list as $price_item):  // $post を $price_item に変更
                                $pairs_filled++;
                        ?>
                                <div class="price-list__content-wrapper">
                                    <dt class="price-list__content">
                                        <?php echo (!empty($price_item['course'])) ? $price_item['course'] : '-'; ?>
                                    </dt>
                                    <dd class="price-list__price">
                                        ¥<?php echo (!empty($price_item['price'])) ? $price_item['price'] : '-'; ?>
                                    </dd>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </dl>
                        </li>
                    </ul>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="price__button">
                <a href="<?php echo esc_url(home_url('/price/'));?>" class="button"><span
                        class="button__animation">view&nbsp;more</span></a>
            </div>
            <div class="price__illust">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish3.webp" alt="キンギョハナダイのイラスト" />
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact layout-top-contact">
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