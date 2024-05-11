<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrap wrap--bg-green">
        <!-- ヘッダー -->
        <header class="header layout-header js-header">
            <div class="header__inner">
                <h1 class="header__name">
                    <a class="header__logo" href="<?php echo esc_url(home_url());?>">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg"
                            alt="CodeUps" /></a>
                </h1>
                <nav class="header__nav">
                    <ul class="header__items">
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('/campaign/'));?>" class="header__link header-link">
                                <p class="header-link__main">campaign</p>
                                <p class="header-link__sub">キャンペーン</p>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('/about-us/'));?>" class="header__link header-link">
                                <div class="header-link__main">about&nbsp;us</div>
                                <div class="header-link__sub">私たちについて</div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('/information/'));?>" class="header__link header-link">
                                <div class="header-link__main">information</div>
                                <div class="header-link__sub">ダイビング情報</div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('/blog/'));?>" class="header__link header-link">
                                <div class="header-link__main">blog</div>
                                <div class="header-link__sub">ブログ</div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('/voice/'));?>" class="header__link header-link">
                                <div class="header-link__main">voice</div>
                                <div class="header-link__sub">お客様の声</div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('/price/'));?>" class="header__link header-link">
                                <div class="header-link__main">price</div>
                                <div class="header-link__sub">料金一覧</div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('/faq/'));?>" class="header__link header-link">
                                <div class="header-link__main header-link__main--uppercase">
                                    faq
                                </div>
                                <div class="header-link__sub">よくある質問</div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('/contact/'));?>" class="header__link header-link">
                                <div class="header-link__main">contact</div>
                                <div class="header-link__sub">お問い合わせ</div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- ハンバーガーメニュー -->
            <button class="header__hamburger hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- ドロワーメニュー -->
            <div class="header__drawer-menu drawer-menu js-drawer">
                <div class="drawer-menu__addClass">
                    <div class="drawer-menu__nav nav">
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
                                    <a
                                        href="<?php echo esc_url(home_url('/campaign_category/fun-diving'));?>">ファンダイビング</a>
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
        </header>