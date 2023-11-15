<?php get_header('404'); ?>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumbs-white'); ?>
<main>
    <section class="page-404 layout-page-404">
        <div class="page-404__inner inner">
            <div class="page-404__message">
                <h1 class="page-404__text-big">404</h1>
                <p class="page-404__text">
                    申し訳ありません。<br />
                    お探しのページが見つかりません。
                </p>
            </div>
            <div class="page-404__button">
                <a href="<?php echo esc_url(home_url());?>" class="button button--white"><span
                        class="button__animation">page&nbsp;<span class="button__uppercase">top</span></span></a>
            </div>
        </div>
    </section>
</main>
<?php get_footer('contact'); ?>