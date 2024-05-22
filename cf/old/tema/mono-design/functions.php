<?php

//投稿アーカイブページの作成と名称変更
//function post_has_archive( $args, $post_type ) {
//
//if ( 'post' == $post_type ) {
//	$args['rewrite'] = true;
//	$args['has_archive'] = 'blog'; //任意のスラッグ名
//}
//return $args;
//
//}
//add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//メディアサイズ追加
add_image_size('portfolio_img_s', 320, 200, true);
add_image_size('portfolio_img', 800, 500, true);

//テーマ内ファイルの固定ページへの読み込み

function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    //include(get_theme_root() . '/' . get_template() . "/view/$file.php");
	include(get_theme_root() . '/' . 'mono-design' . "/view/$file.php");
    return ob_get_clean();
}
 
add_shortcode('myphp', 'Include_my_php');
//ここまで

//ダッシュボードのテキスト置き換え

add_action( 'admin_head-index.php', 'change_dashboard_h2' );
function change_dashboard_h2() {
    echo '
    <script type="text/javascript">
        jQuery(document).ready(function($){
	    $("#icon-index").next("h2").text("更新項目");
        });
    </script>';
}

//固定ページのテキスト置き換え

add_action( 'admin_head', 'change_page_h2' );
function change_page_h2() {
    echo '
    <script type="text/javascript">
        jQuery(document).ready(function($){
	    $("#icon-edit-pages").next("h2").text("項目を編集");
        });
    </script>';
}


//固定ページの「ゴミ箱へ移動」を削除
add_action( 'admin_head', 'gimibako_navi' );
function gimibako_navi() {
global $post_type;
if('page' == $post_type){
	 echo '<style type="text/css">#delete-action{display:none;}</style>';
}
}

//ダッシュボードのカスタマイズ
function example_remove_dashboard_widgets() {
 if (!current_user_can('level_10')) { //level10以下のユーザーの場合ウィジェットをunsetする
 global $wp_meta_boxes;
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); // アクティビティ
 }
 }
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');

//オリジナルダッシュボードメニュー

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
wp_add_dashboard_widget('custom_help_widget', 'お知らせ', 'dashboard_text');
}
function dashboard_text() {
    echo 'ホームページ更新管理画面へようこそ<br>左側メニューより各項目の更新が可能です。';
}

// バージョン更新を非表示にする
add_filter('pre_site_transient_update_core', '__return_zero');

// APIによるバージョンチェックの通信をさせない
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');

//管理バーを非表示にする

//function my_function_admin_bar($content) {
//  return ( !current_user_can("administrator") ) ? $content : false;
//}
//add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// 管理バーのヘルプメニューを非表示にする
function my_admin_head(){
 echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
 }
add_action('admin_head', 'my_admin_head');

//管理バーのメニューを全削除

function remove_bar_menus( $wp_admin_bar ) {
    $wp_admin_bar->remove_menu('wp-logo'); // W ロゴ
    $wp_admin_bar->remove_menu('site-name'); // サイト名
    $wp_admin_bar->remove_menu('view-site'); // サイト名 -> サイトを表示
    $wp_admin_bar->remove_menu('comments'); // コメント
    $wp_admin_bar->remove_menu('new-content'); // 新規
    $wp_admin_bar->remove_menu('new-post'); // 新規 -> 投稿
    $wp_admin_bar->remove_menu('new-media'); // 新規 -> メディア
    $wp_admin_bar->remove_menu('new-link'); // 新規 -> リンク
    $wp_admin_bar->remove_menu('new-page'); // 新規 -> 固定ページ
    $wp_admin_bar->remove_menu('new-user'); // 新規 -> ユーザー
    $wp_admin_bar->remove_menu('updates'); // 更新
    $wp_admin_bar->remove_menu('my-account'); // マイアカウント
    $wp_admin_bar->remove_menu('user-info'); // マイアカウント -> プロフィール
    $wp_admin_bar->remove_menu('edit-profile'); // マイアカウント -> プロフィール編集
    $wp_admin_bar->remove_menu('logout'); // マイアカウント -> ログアウト
    
}
add_action('admin_bar_menu', 'remove_bar_menus', 201);

// 管理バーにログアウトを追加
function add_new_item_in_admin_bar() {
 global $wp_admin_bar;
 $wp_admin_bar->add_menu(array(
 'id' => 'new_item_in_admin_bar_site',
 'title' => __('サイトを確認'),
 'href' => site_url().'/',
 'meta' => array('target' => '_blank')
 ));
 $wp_admin_bar->add_menu(array(
 'id' => 'new_item_in_admin_bar_top',
 'title' => __('管理画面トップ'),
 'href' => site_url().'/wp-admin/'
 ));
 $wp_admin_bar->add_menu(array(
 'id' => 'new_item_in_admin_bar',
 'title' => __('ログアウト'),
 'href' => wp_logout_url()
 ));
 }
add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');

//投稿タイプ別にタイトルの文字を変更

function change_post_enter_title_here($title) {
$screen = get_current_screen();
if ($screen->post_type == 'case_list') {
$title = '施工事例タイトルをいれてください　(例)T様邸';
}
if ($screen->post_type == 'voice_list') {
$title = 'お客様の名前をいれてください　(例)Ｔ様';
}
return $title;
}
add_filter('enter_title_here', 'change_post_enter_title_here');

//カスタムナビゲーションのショートコード表示用

function single_page_custom_menu($atts, $content = null) {
    extract(shortcode_atts(array(
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => ''),
        $atts));

    return wp_nav_menu( array(
        'menu'            => $menu,
        'container'       => $container,
        'container_class' => $container_class,
        'container_id'    => $container_id,
        'menu_class'      => $menu_class,
        'menu_id'         => $menu_id,
        'echo'            => false,
        'fallback_cb'     => $fallback_cb,
        'before'          => $before,
        'after'           => $after,
        'link_before'     => $link_before,
        'link_after'      => $link_after,
        'depth'           => $depth,
        'walker'          => $walker,
        'theme_location'  => $theme_location));
}
add_shortcode("cmenu", "single_page_custom_menu");

//------------------------------------------------
// ウィジェットエリア
// サイドバーのウィジェット
register_sidebar( array(
	'name' => __( 'Side Widget' ),
	'id' => 'side-widget',
	'before_widget' => '<li class="widget-container">',
	'after_widget' => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
) );

// フッターエリアのウィジェット
register_sidebar( array(
	'name' => __( 'Footer Widget' ),
	'id' => 'footer-widget',
	'before_widget' => '<div class="widget-area"><ul><li class="widget-container">',
	'after_widget' => '</li></ul></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
) );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(220, 165, true ); // 幅 220px、高さ 165px、切り抜きモード


// カスタムナビゲーションメニュー
add_theme_support('menus');

// 管理画面アップデート表示非表示
add_filter('pre_site_transient_update_core', '__return_zero');
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');

// 管理画面フッター文字変更
function remove_footer_admin () {
  echo '';
}
add_filter('admin_footer_text', 'remove_footer_admin');

//管理画面用オリジナルCSSの読み込み(管理者以外)
function admin_css() {
	if (!current_user_can('edit_users')) {
		global $post_type;
		if('page' == $post_type){//固定ページの場合は別CSS読み込み指定の場合
		echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo("template_directory").'/admin-page.css">';
		}else{
		echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo("template_directory").'/admin.css">';
		}
	}
}
add_action('admin_head', 'admin_css');

//ログイン画面用オリジナルCSSの読み込み
function login_css() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo("template_directory").'/login.css">';
}
add_action('login_head', 'login_css');

// カスタムタクソノミーでフィルター （絞り込み機能）
add_action( 'restrict_manage_posts', 'add_post_taxonomy_restrict_filter' ); 
function add_post_taxonomy_restrict_filter() { 
global $post_type; 
if ( 'tourist_list' == $post_type ) { //カスタム投稿タイプ
?> 
<select name="tourist_list_cat"> 
<option value="">カテゴリー指定なし</option> 
<?php 
$terms = get_terms('tourist_list_cat'); //カスタム投稿タイプのタクソノミー
foreach ($terms as $term) { ?> 
<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option> 
<?php } ?> 
</select> 
<?php 
} 
} 

//contact form7にメール確認を追加する ※フォームの記述方法はマニュアルを確認のこと
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                $result['valid'] = false;
                $result['reason'][$name] = '確認用のメールアドレスが一致していません';
            }
        }
    }
    return $result;
}

//条件分岐　子ページ追加

function is_subpage() {
    global $post; // $post には現在の固定ページの情報があります
	if ( is_page() && $post->post_parent ){ // 現在の固定ページが親ページを持つかどうかをチェックします
		$parentID = $post->post_parent; // 親ページの ID を取得します
		return $parentID; // 親ページの ID を返します
	} else { // 親ページを持っていない場合
		return false; // false を返します
	};
};