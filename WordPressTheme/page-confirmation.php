<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--contact">
    <div class="sub-mv__inner">
        <div class="sub-mv__title">
            <h1 class="sub-mv__title-text">contact</h1>
        </div>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumbs'); ?>
<main>
    <div class="page-contact layout-page-contact">
        <div class="page-contact__inner inner">
            <div class="page-contact__content">
                <?php echo do_shortcode('[contact-form-7 id="d85584e" title="お問い合わせ確認"]'); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>