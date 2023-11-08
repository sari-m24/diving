<?php
 function custom_theme_enqueue_styles_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap', array(), null );

    // CSS Files
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0.0' );
    wp_enqueue_style( 'theme-style', get_theme_file_uri( '/assets/css/style.css' ), array(), null );

    // JavaScript Files
    wp_enqueue_script( 'jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true );
    wp_enqueue_script( 'jquery-inview', get_theme_file_uri( '/assets/js/jquery.inview.min.js' ), array('jquery-cdn'), null, true );
    wp_enqueue_script( 'theme-script', get_theme_file_uri( '/assets/js/script.js' ), array('jquery-cdn'), null, true );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_styles_scripts' );

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

/*
 * Admin メニュー
*/
 
// 順序変更
// ====================================== //
function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
 
    return array(
        'index.php', // ダッシュボード
        'separator1', // 区切り線１
        'edit.php?post_type=campaign', // キャンペーン
        'edit.php?post_type=about-us', // 私たちについて
        'edit.php', // ブログ
        'edit.php?post_type=voice', // お客様の声
        'edit.php?post_type=price', // 料金一覧
        'edit.php?post_type=faq', // FAQ
        'edit.php?post_type=page', // 固定ページ
        'edit-comments.php', // コメント

        'separator2', // 区切り線2
        'upload.php', // メディア
        'users.php', // ユーザー
        'separator3', // 区切り線3
        'themes.php', // テーマ
        'plugins.php', // プラグイン
        'tools.php', // ツール
        'options-general.php', // 設定
        'separator-last', // 区切り線３
    );
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');


/*===================================================================
*テンプレート、カスタム投稿タイプ・カスタムタクソノミーごとの表示件数を設定
===================================================================*/
add_action('pre_get_posts','my_pre_get_posts');
function my_pre_get_posts( $query ) {

if(is_admin() || ! $query -> is_main_query()) return;

if($query->is_tax('campaign_category')){
    $query->set('posts_per_page',4);
}

if($query->is_tax('voice_category')){
    $query->set('posts_per_page',6);
}

if($query -> is_post_type_archive('campaign')){
$query -> set('posts_per_page',4);
}

if($query -> is_post_type_archive('about-us')){
	$query -> set('posts_per_page',-1);
    $query->set( 'order', 'ASC' );
    $query->set( 'orderby', 'date' );
	}

if($query -> is_post_type_archive('voice')){
	$query -> set('posts_per_page',6);
	}

if($query -> is_post_type_archive('price')){
	$query -> set('posts_per_page',-1);
    $query->set( 'order', 'ASC' );
    $query->set( 'orderby', 'date' );
	}

if($query -> is_post_type_archive('faq')){
	$query -> set('posts_per_page',-1);
	}
}

add_filter( 'use_block_editor_for_post', function( $use_block_editor, $post ) {
	if ( 'price' === $post->post_type ) {
		$use_block_editor = false;
	}
	return $use_block_editor;
}, 10, 2 );

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 

// ビューカウントを取得
function get_post_views($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Views";
    }
    return $count.' Views';
}

// ビューカウントを設定・更新
function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// 月別アーカイブ
function custom_monthly_archive_toggle() {
    global $wpdb;

    // SQLクエリを使用して、公開されている投稿のある年月を取得
    $query = "
        SELECT YEAR(post_date) AS 'year', MONTH(post_date) AS 'month', count(ID) as posts 
        FROM $wpdb->posts 
        WHERE post_type = 'post' AND post_status = 'publish'
        GROUP BY YEAR(post_date), MONTH(post_date) 
        ORDER BY post_date DESC
    ";
    
    $months = $wpdb->get_results($query);
    $current_year = '';

    // 結果をループしてリストを生成
    foreach($months as $month) {
        if ($current_year != $month->year) {
            // 新しい年が始まったら、前の年のulタグを閉じて新しいulタグを開始
            if ($current_year != '') {
                echo '</ul>';
            }
            echo '<p class="sidebar-archive__toggle-btn js-toggle">'.$month->year.'</p>';
            echo '<ul class="sidebar-archive__lists js-toggle-list" style="display:none;">';
            $current_year = $month->year;
        }
        
        $url = get_month_link($month->year, $month->month);
        $month_name = date_i18n('F', mktime(0, 0, 0, $month->month, 10)); // ローカライズされた月名
        echo '<li class="sidebar-archive__item"><a href="' . $url . '">' . $month_name . '</a></li>';
    }
    // 最後のulタグを閉じる
    echo '</ul>';
}

//Contact Form 7 セレクトボックスの選択肢をカスタム投稿のタイトルから自動生成

// 関数の作成
function campaign_selectlist($tag, $unused) {
    // セレクトボックスの名前が 'campaign-title' かどうか
    if ($tag['name'] != 'campaign-title') {
        return $tag;
    }

    // 今日の日付を取得
    $today = date('Ymd');

    // get_posts() でセレクトボックスの中身を作成する
    // クエリの作成
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'campaign',
        'orderby' => 'ID',
        'order' => 'ASC',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'campaign_start',
                'value' => $today,
                'compare' => '<=',
                'type' => 'DATE'
            ),
            array(
                'key' => 'campaign_end',
                'value' => $today,
                'compare' => '>=',
                'type' => 'DATE'
            )
        )
    );

    // クエリをget_posts()に入れる
    $campaign_posts = get_posts($args);

    // 最初の選択肢を追加
    $tag['raw_values'][] = '';
    $tag['values'][] = '';
    $tag['labels'][] = 'キャンペーン内容を選択';

    // クエリがなければ戻す
    if (!$campaign_posts) {
        return $tag;
    }

    // セレクトボックスにforeachで入れる
    foreach ($campaign_posts as $campaign_post) {
        $tag['raw_values'][] = $campaign_post->post_title;
        $tag['values'][] = $campaign_post->post_title;
        $tag['labels'][] = $campaign_post->post_title;
    }

    return $tag;
}

add_filter('wpcf7_form_tag', 'campaign_selectlist', 10, 2);

/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
  }
  function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'admin_menu', 'Change_menulabel' );
  
  
  /* ---------- 投稿の「カテゴリー」と「タグ」の非表示 ---------- */
  function my_unregister_taxonomies() {
    global $wp_taxonomies;
    // 「カテゴリー」の非表示
    if (!empty($wp_taxonomies['category']->object_type)) {
      foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
        if ($object_type == 'post') {
          unset($wp_taxonomies['category']->object_type[$i]);
        }
      }
    }
    // 「タグ」の非表示
    if (!empty($wp_taxonomies['post_tag']->object_type)) {
      foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
        if ($object_type == 'post') {
          unset($wp_taxonomies['post_tag']->object_type[$i]);
        }
      }
    }
    return true;
  }
  add_action('init', 'my_unregister_taxonomies');