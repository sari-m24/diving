<div class="sidebar">
    <div class="sidebar__inner">
        <div class="sidebar__content">
            <div class="sidebar__title">
                <h2>人気記事</h2>
            </div>
            <div class="sidebar__items sidebar-blog">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                );
                $popular_posts = new WP_Query($args);
                ?>
                <? if ($popular_posts->have_posts() ) : ?>
                <? while ($popular_posts->have_posts()) : $popular_posts->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="sidebar-blog__item">
                    <div class="sidebar-blog-card">
                        <div class="sidebar-blog-card__img">
                            <?php if(get_the_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                            <?php else: ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.webp"
                                alt="noimage>" />
                            <?php endif; ?>
                        </div>
                        <div class="sidebar-blog-card__body">
                            <time class="sidebar-blog-card__meta"
                                datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                            <h3 class="sidebar-blog-card__title">
                                <?php echo wp_trim_words( get_the_title(), 20, '…' ); ?></h3>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
                <? wp_reset_postdata(); ?>
            </div>
        </div>

        <div class="sidebar__content">
            <div class="sidebar__title">
                <h2>口コミ</h2>
            </div>
            <div class="sidebar__items">
                <?php
                $args = array(
                    'post_type'      => 'voice',
                    'posts_per_page' => 1,
                );
                $voice_query = new WP_Query($args);
                if ($voice_query->have_posts()) : 
                    while ($voice_query->have_posts()) : 
                        $voice_query->the_post();
                ?>
                <div class="sidebar__item sidebar-voice">
                    <div class="sidebar-voice__image">
                        <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                        <?php else : ?>
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.webp'); ?>"
                            alt="noimage" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="sidebar-voice__body">
                    <div class="sidebar-voice__age">
                        <?php
                        $age = get_field('age');
                        $classification = get_field('classification');
                        if ($age && $classification) : ?>
                        <p class="voice-card__age">
                            <?php echo esc_html($age); ?>(<?php echo esc_html($classification); ?>)</p>
                        <?php endif; ?>
                    </div>
                    <div class="sidebar-voice__title">
                        <?php the_title(); ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="sidebar__button">
                    <a href="<?php echo esc_url(home_url('/voice/'));?>" class="button"><span
                            class="button__animation">view
                            more</span></a>
                </div>
            </div>
        </div>
        <div class="sidebar__content">
            <div class="sidebar__title">
                <h2>キャンペーン</h2>
            </div>
            <div class="sidebar__items">
                <?php
                $args = array(
                    'posts_per_page' => 2,
                    'post_type' => 'campaign'
                );
                $campaign_posts = new WP_Query($args);
                ?>
                <? if ($campaign_posts->have_posts() ) : ?>
                <? while ($campaign_posts->have_posts()) : $campaign_posts->the_post();
                ?>
                <div class="sidebar__item sidebar-campaign-card">
                    <div class="sidebar-campaign-card">
                        <div class="sidebar-campaign-card__img">
                            <?php if(get_the_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                            <?php else: ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.webp"
                                alt="noimage>" />
                            <?php endif; ?>
                        </div>
                        <div class="sidebar-campaign-card__title-wrapper">
                            <h3 class="sidebar-campaign-card__title">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <div class="sidebar-campaign-card__text-wrapper">
                            <p class="sidebar-campaign-card__text">
                                全部コミコミ(お一人様)
                            </p>
                            <div class="sidebar-campaign-card__price">
                                <div class="campaign-card__original-price">¥<?php the_field('standard_fee'); ?></div>
                                <div class="campaign-card__discount-price">¥<?php the_field('special_price'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif ?>
                <? wp_reset_postdata(); ?>
            </div>
            <div class="sidebar__button">
                <a href="<?php echo esc_url(home_url('/campaign/'));?>" class="button"><span
                        class="button__animation">view
                        more</span></a>
            </div>
        </div>
        <div class="sidebar__content">
            <div class="sidebar__title">
                <h2>アーカイブ</h2>
            </div>
            <div class="sidebar__items sidebar-archive">
                <?php custom_monthly_archive_toggle(); ?>
            </div>
        </div>
    </div>
</div>