<footer class="footer layout-footer">
    <div class="footer__inner inner">
        <div class="footer__wrapper">
            <a href="<?php echo esc_url(home_url());?>" class="footer__logo"><img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="CodeUps" /></a>
            <div class="footer__icon-wrap">
                <a href="#" class="footer__sns-icon"><img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-logo.svg"
                        alt="facebook" /></a>
                <a href="#" class="footer__sns-icon"><img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Instagram-logo.svg"
                        alt="instagram" /></a>
            </div>
        </div>
        <nav class="footer__nav nav">
            <div class="nav__wrapper">
                <ul class="nav__items">
                    <li class="nav__item">
                        <a href="<?php echo esc_url(home_url('/campaign/'));?>">キャンペーン</a>
                    </li>
                    <li class="nav__item nav__item--no-icon">
                        <a href="<?php echo esc_url(home_url('/campaign_category/license-course'));?>">ライセンス取得</a>
                    </li>
                    <li class="nav__item nav__item--no-icon">
                        <a href="<?php echo esc_url(home_url('/campaign_category/trial-diving'));?>">体験ダイビング</a>
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
                        <a href="<?php echo esc_url(home_url('/privacy-policy/'));?>">プライバシー<br /><span>ポリシー</span></a>
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
        </nav>
        <small
            class="footer__copy-right">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
    </div>
</footer>
<div class="page-top-button js-page-top">
    <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/right.png" alt="トップへ戻るボタン" /></a>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>