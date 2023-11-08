<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--others">
    <div class="sub-mv__inner">
        <div class="sub-mv__title">
            <h1 class="sub-mv__title-text">site&nbsp;<span>map</span></h1>
        </div>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumbs'); ?>
<main>
    <div class="page-site-map layout-page-site-map">
        <div class="page-site-map__inner inner">
            <div class="page-site-map__content">
                <div class="page-site-map__menu nav nav--green">
                    <div class="nav__wrapper">
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/campaign/'));?>">キャンペーン</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a
                                    href="<?php echo esc_url(home_url('/campaign_category/license-course'));?>">ライセンス取得</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a
                                    href="<?php echo esc_url(home_url('/campaign_category/trial-diving'));?>">貸切体験ダイビング</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a href="<?php echo esc_url(home_url('/campaign_category/fun-diving'));?>">ファンダイビング</a>
                            </li>
                        </ul>
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/about-us/'));?>">私たちについて</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav__wrapper">
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/information/'));?>">ダイビング情報</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a href="<?php echo esc_url(home_url('/information#tab1'));?>">ライセンス講習</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a href="<?php echo esc_url(home_url('/information#tab3'));?>">体験ダイビング</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a href="<?php echo esc_url(home_url('/information#tab2'));?>">ファンダイビング</a>
                            </li>
                        </ul>
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/blog/'));?>">ブログ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav__wrapper">
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/voice/'));?>">お客様の声</a>
                            </li>
                        </ul>
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/price/'));?>">料金一覧</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a href="<?php echo esc_url(home_url('/price#price-table1'));?>">ライセンス講習</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a href="<?php echo esc_url(home_url('/price#price-table2'));?>">体験ダイビング</a>
                            </li>
                            <li class="nav__item nav__item--no-icon">
                                <a href="<?php echo esc_url(home_url('/price#price-table3'));?>">ファンダイビング</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav__wrapper">
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/faq/'));?>">よくある質問</a>
                            </li>
                        </ul>
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/site-map/'));?>">サイトマップ</a>
                            </li>
                        </ul>
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a
                                    href="<?php echo esc_url(home_url('/privacy-policy/'));?>">プライバシー<br /><span>ポリシー</span></a>
                            </li>
                        </ul>
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/terms-of-service/'));?>">利用規約</a>
                            </li>
                        </ul>
                        <ul class="nav__items">
                            <li class="nav__item">
                                <a href="<?php echo esc_url(home_url('/contact/'));?>">お問い合わせ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
</main>
<?php get_footer(); ?>