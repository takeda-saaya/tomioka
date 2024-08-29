<?php

/**
 * Functions
 */

/**
 * WordPress標準機能
 */
function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
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
add_action('after_setup_theme', 'my_setup');



/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込み
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', "", "1.0.1");
	// Google Fonts(2つ以上ある場合は1つずつ書く)
	wp_enqueue_style('NotoSans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
	// swiperの読み込み
	wp_enqueue_script('swiper', '//unpkg.com/swiper@8/swiper-bundle.min.js', "", "1.0.1", false);
	wp_enqueue_style('swiper', '//unpkg.com/swiper@8/swiper-bundle.min.css', "", "1.0.1", false);
	// inviewの読み込み
	wp_enqueue_script('inview', get_template_directory_uri() . '/assets/inview/jquery.inview.min.js', array(), '1.0.1', true);
	// 自作jsファイルの読み込み
	wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
	// 自作cssファイルの読み込み
	wp_enqueue_style('my', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.1', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');


function my_archive_title($title)
{

	if (is_home()) {
		$title = 'ブログ';
	} elseif (is_category()) {
		$title = '' . single_cat_title('', false) . '';
	} elseif (is_tag()) {
		$title = '' . single_tag_title('', false) . '';
	} elseif (is_post_type_archive()) {
		$title = '' . post_type_archive_title('', false) . '';
	} elseif (is_tax()) {
		$title = '' . single_term_title('', false);
	} elseif (is_search()) {
		$title = '「' . esc_html(get_query_var('s')) . '」の検索結果';
	} elseif (is_author()) {
		$title = '' . get_the_author() . '';
	} elseif (is_date()) {
		$title = '';
		if (get_query_var('year')) {
			$title .= get_query_var('year') . '年';
		}
		if (get_query_var('monthnum')) {
			$title .= get_query_var('monthnum') . '月';
		}
		if (get_query_var('day')) {
			$title .= get_query_var('day') . '日';
		}
	}
	return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


function my_excerpt_length($length)
{
	return 80;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);




/**
 * 抜粋のpタグ削除
 */
remove_filter('the_excerpt', 'wpautop');


/**
 * ContactForm7で自動挿入されるPタグ、brタグを削除
 */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
	return false;
}


// archive投稿数
function my_pre_get_posts($query)
{
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	if ($query->is_date()) {
		$query->set('posts_per_page', 9);
	}
}
add_action('pre_get_posts', 'my_pre_get_posts');

// カテゴリー投稿数
function set_posts_per_page_for_category($query)
{
	if (is_category() && $query->is_main_query()) {
		$query->set('posts_per_page', 9);
	}
}
add_action('pre_get_posts', 'set_posts_per_page_for_category');


// cta
function display_cta_section()
{
?>
	<section class="p-cta">
		<div class="p-cta__inner l-inner">
			<a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-cta__body">
				<div class="p-cta__wrap">
					<div class="p-cta__left">
						<p class="p-cta__heading-en">contact</p>
						<h2 class="p-cta__heading-ja">お問い合わせ</h2>
						<div class="p-cta__text">直売・もぎ取り体験・配送サービスに<br class="u-hidden-pc">
							関するご質問や、<br class="u-hidden-sp"> その他のお問い合わせに<br class="u-hidden-pc">関してお気軽にご相談ください。</div>
					</div>
					<div class="p-cta__right">
						<div class="p-cta__btn">
							<div class="p-cta__btn__img">
								<img src="<?php echo get_theme_file_uri('assets/images/top/cta-btn.png'); ?>" alt="お問い合わせ" width="155" height="152" loading="lazy">
							</div>
							<span class="p-cta__deco">
								<img src="<?php echo get_theme_file_uri('assets/images/top/cta-deco-left.png'); ?>" alt="" width="153" height="154" loading="lazy">
							</span>
						</div>
					</div>
				</div>
			</a>
		</div>
	</section>
<?php

}
