<?php
/* ----------------------------------------------------
    自動更新を無効
---------------------------------------------------- */
add_filter( 'automatic_updater_disabled', '__return_true' );


/* ----------------------------------------------------
    サムネイル
---------------------------------------------------- */
add_theme_support('post-thumbnails');


/* ----------------------------------------------------
    Contact Form 7で自動挿入されるPタグ、brタグを削除
---------------------------------------------------- */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
}


/* ----------------------------------------------------
    固定ページへの noindex
---------------------------------------------------- */
// メタボックスの追加
add_action( 'admin_menu', 'add_noindex_metabox' );
function add_noindex_metabox() {
    add_meta_box( 'custom_noindex', 'インデックス設定', 'create_noindex', array('post', 'page'), 'side' );
}

// 管理画面にフィールドを出力
function create_noindex() {
    $keyname = 'noindex';
    global $post;
    $get_value = get_post_meta( $post->ID, $keyname, true );
    wp_nonce_field( 'action_' . $keyname, 'nonce_' . $keyname );
    $value = 'noindex';
    $checked = '';
    if( $value === $get_value ) $checked = ' checked';
    echo '<label><input type="checkbox" name="' . $keyname . '" value="' . $value . '"' . $checked . '>' . $keyname . '</label>';
}

// カスタムフィールドの保存
add_action( 'save_post', 'save_custom_noindex' );
function save_custom_noindex( $post_id ) {
    $keyname = 'noindex';
    if ( isset( $_POST['nonce_' . $keyname] )) {
        if( check_admin_referer( 'action_' . $keyname, 'nonce_' . $keyname ) ) {
            if( isset( $_POST[$keyname] )) {
                update_post_meta( $post_id, $keyname, $_POST[$keyname] );
            } else {
                delete_post_meta( $post_id, $keyname, get_post_meta( $post_id, $keyname, true ) );
            }
        }
    }
}


/* -------------------------------------------------------------------
    記事IDをスラッグにする
------------------------------------------------------------------- */
function auto_postid_slug( $slug, $post_ID, $post_status, $post_type ) {
	if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
		$slug = $post_ID;
	}
	return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_postid_slug', 10, 4  );



/* -------------------------------------------------------------------
    ページネーションのエラーを修正する
------------------------------------------------------------------- */
function adjust_category_paged( $query = []) {
    if (isset($query['name'])
        && $query['name'] === 'page'
        && isset($query['page'])
        && isset($query['category_name'])) {
            $query['paged'] = intval($query['page']); // 念のため整数化しておく
            unset($query['name']);
            unset($query['page']);
        }
        return $query;
}
add_filter('request', 'adjust_category_paged');


/******************************************************************************/

add_action( 'after_setup_theme', 'custom_setup_theme' );
function custom_setup_theme() {
	$new_page_list = [
		'company',
        'contact',
        'news',
        'policy',
        'privacy-policy',
        'service-contact',
        'service-detail',
        'service-faq',
        'service-price',
        'service-simulation',
        'service-thanks',
        'service',
        'thanks'
	];
	foreach($new_page_list as $page_slug) {
		$new_page = array(
				'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
				'post_title'    => $page_slug,	// Title of the Content
				'post_status'   => 'publish',			// Post Status
				'post_name'     => $page_slug			// Slug of the Post
		);
		if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
				$new_page_id = wp_insert_post($new_page);
		}
	}

	// for($i=0;$i<10;$i++) {
	// 	$new_page = array(
	// 		'post_type'     => 'post', 				// Post Type Slug eg: 'page', 'post'
	// 		'post_title'    => 'タイトルテキストがあります。タイトルテキストがあります。タイトルテキストがあります。',	// Title of the Content
	// 		'post_content' => '内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。',
	// 		'post_status'   => 'publish',			// Post Status
	// 		'post_name'     => 'post'.$i			// Slug of the Post
	// 	);
	// 	wp_insert_post($new_page);
	// }	
}	