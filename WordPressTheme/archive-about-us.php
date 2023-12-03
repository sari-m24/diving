<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--about-us">
    <div class="sub-mv__inner">
        <div class="sub-mv__title">
            <h1 class="sub-mv__title-text">about&nbsp;us</h1>
        </div>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumbs'); ?>

<main>
    <!-- about message -->
    <section class="archive-about-us layout-archive-about-us">
        <div class="archive-about-us__inner inner">
            <div class="archive-about-us__content-wrapper">
                <div class="archive-about-us__img-left u-desktop">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-img1.webp"
                        alt="屋根にあるシーサーの写真" />
                </div>
                <div class="archive-about-us__img-right">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us-img2.webp"
                        alt="海で泳ぐ黄色の魚の写真" />
                </div>
                <div class="archive-about-us__contents">
                    <div class="archive-about-us__message">
                        <h3 class="archive-about-us__message-main">
                            <span>d</span>ive&nbsp;into<br />the&nbsp;<span>o</span>cean
                        </h3>
                        <div class="archive-about-us__message-sub-wrapper">
                            <p class="archive-about-us__message-sub text text--white">
                                太陽のように明るく温かい海の体験を。<br />
                                私たちは、ダイビングの楽しさと海の大切さを伝えることに情熱を注いでいます。一人一人に寄り添った指導で、安全かつ楽しいダイビングを実現。<br />
                                Soleilと共に、海の美しさを存分に味わい、未来に続く美しい海を守りましょう。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="archive-about-us__illust">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish3.webp" alt="キンギョハナダイのイラスト" />
            </div>
        </div>
    </section>
    <!-- gallery -->
    <section class="gallery layout-gallery">
        <div class="gallery__inner inner">
            <div class="gallery__section-title section-title">
                <p class="section-title__main">gallery</p>
                <h2 class="section-title__sub">フォト</h2>
            </div>
            <div class="gallery__content">
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                <div class="gallery__image js-modal-img">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="gallery__modal js-modal">
                <div class="gallery__modal-content js-modal-content"></div>
            </div>
        </div>
    </section>
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
    <main>
        <?php get_footer(); ?>