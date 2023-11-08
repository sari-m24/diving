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
    <div class="page-thanks layout-page-contact">
        <div class="page-thanks__inner inner">
            <div class="page-thanks__message">
                <p class="page-thanks__text">
                    お問い合わせ内容を送信完了しました。
                </p>
                <p class="page-thanks__text">
                    このたびは、お問い合わせ頂き<br class="u-mobile" />誠にありがとうございます。<br />
                    お送り頂きました内容を確認の上、<br class="u-mobile" />3営業日以内に折り返しご連絡させて頂きます。<br />
                    また、ご記入頂いたメールアドレスへ、<br class="u-mobile" />自動返信の確認メールをお送りしております。
                </p>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>