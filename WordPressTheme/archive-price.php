<?php get_header(); ?>


<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--price">
    <div class="sub-mv__inner">
        <div class="sub-mv__title">
            <h1 class="sub-mv__title-text">price</h1>
        </div>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumbs'); ?>
<main>
    <section class="archive-price layout-archive-price">
        <div class="archive-price__inner inner">
            <div class="archive-price__content">
                <?php if(have_posts()): ?>
                <?php $count = 0; ?>
                <?php while(have_posts()): the_post(); ?>
                <?php 
                $count++;
                $price_list = CFS()->get('price_list');
                if (!empty($price_list) && is_array($price_list)):
                    $rowCount = count($price_list); // フィールドの行数を取得
                    if ($rowCount > 0):  // 行が1行以上ある場合のみ表を表示
                ?>
                <div id="price-table<?php echo $count; ?>" class="archive-price__table price-table">
                    <div class="price-table__title-wrapper">
                        <h3 class="price-table__title"><?php the_title(); ?></h3>
                    </div>
                    <dl class="price-table__body">
                        <?php
                        $pairs_to_display = 2;
                        $pairs_filled = 0;

                        foreach ($price_list as $price_item):
                            $pairs_filled++;
                        ?>
                        <div class="price-table__content-wrapper">
                            <dt class="price-table__content">
                                <?php echo (!empty($price_item['course'])) ? $price_item['course'] : '-'; ?>
                            </dt>
                            <dd class="price-table__price">
                                ¥<?php echo (!empty($price_item['price'])) ? $price_item['price'] : '-'; ?></dd>
                        </div>
                        <?php endforeach; ?>

                        <?php
                        // 空行の調整
                        $empty_rows_needed = $pairs_to_display - $pairs_filled;
                        if ($empty_rows_needed > 0) {  // 空行が必要な場合のみ
                        for ($i = 0; $i < $empty_rows_needed; $i++): ?>
                        <div class="price-table__content-wrapper">
                            <dt class="price-table__content">&emsp;</dt>
                            <dd class="price-table__price">&emsp;</dd>
                        </div>
                        <?php endfor; }?>
                    </dl>
                </div>
                <?php
                    endif;
                endif;
                endwhile; ?>
                <?php endif; ?>
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
</main>
<?php get_footer(); ?>