<?php
/**
 * Register a setting and its data
 */
function theme_options_init() {
	register_setting(
		'design_plus_options',
		'dp_options',
		'theme_options_validate'
	);
}
add_action( 'admin_init', 'theme_options_init' );

/**
 * Add sub menu to the appearance menu
 */
function theme_options_add_page() {
  add_menu_page(
		__( 'TCD Theme', 'tcd-w' ),
		__( 'TCD Theme', 'tcd-w' ),
		'edit_theme_options',
		'theme_options',
    'theme_options_do_page',
    '',
    '2.0000012'
	);
}
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Default values array of theme option
 * @var array
 */
global $dp_default_options;
$dp_default_options = array();

/**
 * Get values of theme options
 *
 * @global array $dp_default_options
 * @return array
 */
function get_design_plus_options() {

	global $dp_default_options;
	$dp_default_options = apply_filters( 'before_getting_design_plus_option', $dp_default_options );

	return shortcode_atts( $dp_default_options, get_option( 'dp_options', array() ) );

}

/**
 * Render theme options page
 */
function theme_options_do_page() {

	global $tab_labels;
	$options = get_design_plus_options();

	$tab_labels = array();
	$tab_labels = apply_filters( 'tcd_tab_labels', $tab_labels );

	if ( ! isset( $_REQUEST['settings-updated'] ) ) {
		$_REQUEST['settings-updated'] = false;
	}
?>
<div class="wrap">
	<h2><?php _e( 'TCD Theme Options', 'tcd-w' ); ?></h2>
	<?php
	// 更新時のメッセージ
	if ( false !== $_REQUEST['settings-updated'] ) :
	?>
	<div class="updated fade">
		<p><strong><?php _e( 'Updated', 'tcd-w' ); ?></strong></p>
	</div>
	<?php
	endif;

  // Toolsメッセージ
  theme_options_tools_notices();
	?>
	<div id="my_theme_option" class="cf">
		<div id="my_theme_left">
   		<ul id="theme_tab" class="cf">
        <?php foreach ( $tab_labels as $key => $tab_label ) : ?>
    		<li><a href="#tab-content-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $tab_label ); ?></a></li>
        <?php endforeach; ?>
   		</ul>
  	</div>
  	<div id="my_theme_right">
			<form id="myOptionsForm" method="post" action="options.php" enctype="multipart/form-data">
				<?php settings_fields( 'design_plus_options' ); ?>
				<div id="tab-panel">
					<?php do_action( 'tcd_tab_panel', $options ); ?>
				</div><!-- END #tab-panel -->
			</form>
   		<div id="saved_data"></div>
   		<div id="saving_data" style="display:none;"><p><?php _e( 'Now saving...', 'tcd-w' ); ?></p></div>
		</div><!-- END #my_theme_right -->
	</div><!-- END #my_theme_option -->
</div><!-- END #wrap -->
<?php
}

/**
 * Validate options
 */
function theme_options_validate( $input ) {
	$input = apply_filters( 'theme_options_validate', $input );
 	return $input;
}

/*
 * Load modules
 */
require get_template_directory() . '/admin/inc/basic.php';
require get_template_directory() . '/admin/inc/logo.php';
require get_template_directory() . '/admin/inc/top.php';
require get_template_directory() . '/admin/inc/blog.php';
require get_template_directory() . '/admin/inc/news.php';
require get_template_directory() . '/admin/inc/event.php';
require get_template_directory() . '/admin/inc/interview.php';
require get_template_directory() . '/admin/inc/faq.php';
require get_template_directory() . '/admin/inc/header.php';
require get_template_directory() . '/admin/inc/footer.php';
require get_template_directory() . '/admin/inc/404.php';
require get_template_directory() . '/admin/inc/password.php';
require get_template_directory() . '/admin/inc/tools.php';

/**
 * オプションTools エクスポート・インポート・リセット 実行
 */
function theme_options_tools() {
	global $pagenow;

	// テーマオプションサブミット先はoptions.php
	if ( 'options.php' != $pagenow ) return;

	// TCDテーマオプションサブミットチェック
	if ( empty( $_POST['option_page'] ) || 'design_plus_options' !== $_POST['option_page'] || empty( $_POST['dp_options'] ) ) return;

	// エクスポート
	if ( ! empty( $_POST['tcd-tools-export'] ) ) {
		// 現設定取得
		if ( function_exists( 'get_design_plus_options' ) ) {
			$dp_options = get_design_plus_options();
		} elseif ( function_exists( 'get_design_plus_option' ) ) {
			$dp_options = get_design_plus_option();
		} elseif ( function_exists( 'get_desing_plus_options' ) ) {
			$dp_options = get_desing_plus_options();
		} elseif ( function_exists( 'get_desing_plus_option' ) ) {
			$dp_options = get_desing_plus_option();
		} else {
			$dp_options = array();
		}


		// postされた設定取得して現設定にマージ
		if ( ! empty( $_POST['dp_options'] ) ) {
			$dp_options_posted = wp_unslash( $_POST['dp_options'] );
			// バリデート
			$dp_options_posted = theme_options_validate( $dp_options_posted );
			// マージ
			$dp_options = array_merge( $dp_options, $dp_options_posted );
		}

		// エクスポート設定フィルター
		$dp_options = apply_filters( 'tcd_theme_options_tools-export', $dp_options );

		// ファイル名
		$filename = implode( '-', array(
			'tcd_theme_options',
			'export',
			get_bloginfo( 'name' ),
			wp_get_theme()->get( 'Name' ),
			date( 'Ymd', current_time('timestamp' ) )
		) ) . '.json';

		// json出力
		header( 'Content-Type: application/json; charset=utf-8' );
		header( 'Content-Disposition: attachment; filename="' . rawurlencode( $filename ) . '"');
		if ( defined('JSON_PRETTY_PRINT') ) {
			echo json_encode( $dp_options, JSON_PRETTY_PRINT );
		} else {
			echo json_encode( $dp_options );
		}
		exit();

	// インポート
	} elseif ( ! empty( $_POST['tcd-tools-import'] ) ) {
		$json = _theme_options_tools_get_import_json();
		if ( is_numeric( $json ) ) {
			$import_error = $json;
		} elseif ( ! is_array( $json ) ) {
			$import_error = 15;
		} else {
			// 現設定取得
			if ( function_exists( 'get_design_plus_options' ) ) {
				$dp_options = get_design_plus_options();
			} elseif ( function_exists( 'get_design_plus_option' ) ) {
				$dp_options = get_design_plus_option();
			} elseif ( function_exists( 'get_desing_plus_options' ) ) {
				$dp_options = get_desing_plus_options();
			} elseif ( function_exists( 'get_desing_plus_option' ) ) {
				$dp_options = get_desing_plus_option();
			} else {
				$dp_options = array();
			}

			// 現設定にインポート設定マージ
			// jsonファイルを任意編集・部分インポートの場合を考慮してここではバリデートは行わない
			$dp_options = array_merge( $dp_options, $json );

			// インポート設定フィルター
			$dp_options = apply_filters( 'tcd_theme_options_tools-import', $dp_options );

			// 保存
			update_option( 'dp_options', $dp_options );
		}

		// エラーリダイレクト先
		if ( ! empty( $import_error ) ) {
			$redirect = add_query_arg( 'tcd-tools-result', 'import-error' . $import_error, wp_get_referer() );

		// 成功リダイレクト先
		} else {
			$redirect = add_query_arg( 'tcd-tools-result', 'import-success', wp_get_referer() );
		}

	// リセット
	} elseif ( ! empty( $_POST['tcd-tools-reset'] ) ) {
		// デフォルト設定取得
		global $dp_default_options;
		if ( $dp_default_options && is_array( $dp_default_options ) ) {
			$dp_options = $dp_default_options;
		} else {
			$dp_options = array();
		}

		// リセットデフォルト設定フィルター
		$dp_options = apply_filters( 'tcd_theme_options_tools-reset-default_options', $dp_options );

		// リセット設定フィルター
		$dp_options = apply_filters( 'tcd_theme_options_tools-reset', $dp_options );

		// デフォルト画像があれば上書きモードで実行
		if ( function_exists( 'theme_options_tools_initialize' ) ) {
			theme_options_tools_initialize( $dp_options, true, true );
		} else {
			// 保存 ここでtheme_options_validateが実行されるので値には注意
			update_option( 'dp_options', $dp_options );
		}

		// リダイレクト先
		$redirect = add_query_arg( 'tcd-tools-result', 'reset-success', wp_get_referer() );
	}

	// リダイレクト
	if ( ! empty( $redirect ) ) {
		// 保存メッセージが残っている場合があるので削除
		wp_redirect( remove_query_arg( 'settings-updated', $redirect ) );
		exit();
	}
}
add_action( 'admin_init', 'theme_options_tools' );

/**
 * オプションTools jsonインポート
 */
function _theme_options_tools_get_import_json() {
	if ( empty( $_FILES['tcd-tools-import-file'] ) ) {
		return 11;
	}

	$uploaded_file = $_FILES['tcd-tools-import-file'];

	if ( ! isset( $uploaded_file['tmp_name'], $uploaded_file['name'] ) ) {
		return 12;
	} elseif ( isset( $uploaded_file['error'] ) && 0 < $uploaded_file['error'] ) {
		return $uploaded_file['error'];
	}

	$wp_filetype = wp_check_filetype_and_ext( $uploaded_file['tmp_name'], $uploaded_file['name'], array( 'json' => 'application/json' ) );
	if ( ! wp_match_mime_types( 'json', $wp_filetype['type'] ) ) {
		return 13;
	}

	$file_contents = file_get_contents( $uploaded_file['tmp_name'] );

	if ( ! $file_contents ) {
		return 14;
	}

	$json = json_decode( $file_contents, true );

	if ( ! $json ) {
		return 15;
	}

	return $json;
}

/**
 * オプションToolsメッセージ
 */
function theme_options_tools_notices() {
	// TCDテーマオプションページ以外なら終了
	if ( empty( $_GET['page'] ) || 'theme_options' !== $_GET['page'] ) return false;

	// メッセージクエリー文字列が無ければ終了
	if ( empty( $_GET['tcd-tools-result'] ) ) return false;

	// メッセージクエリー文字列を配列化
	$tools_result = explode( '-', $_GET['tcd-tools-result'] );

	// インポートエラーメッセージ
	if ( isset( $tools_result[0], $tools_result[1] ) && 'import' === $tools_result[0] && 'error' === $tools_result[1] ) {
		$message = '';

		if ( isset( $tools_result[2] ) ) {
			$int_import_error = intval( $tools_result[2] );
			switch( $int_import_error ) {
				// 1-4, 5-8はファイルアップロード時のエラーコード
				case 1:
					$message = $int_import_error . ' : ' . __( 'The uploaded file exceeds the upload_max_filesize directive in php.ini.' );
					break;
				case 2:
					$message = $int_import_error . ' : ' . __( 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.' );
					break;
				case 3:
					$message = $int_import_error . ' : ' . __( 'The uploaded file was only partially uploaded.' );
					break;
				case 4:
					$message = $int_import_error . ' : ' . __( 'No file was uploaded.' );
					break;
				case 6:
					$message = $int_import_error . ' : ' . __( 'Missing a temporary folder.' );
					break;
				case 7:
					$message = $int_import_error . ' : ' . __( 'Failed to write file to disk.' );
					break;
				case 8:
					$message = $int_import_error . ' : ' . __( 'File upload stopped by extension.' );
					break;
				case 11:
                  $message = $int_import_error . ' : ' . __( 'File has not been uploaded.', 'tcd-w' );
					break;
				case 12:
                  $message = $int_import_error . ' : ' . __( 'There is no file', 'tcd-w' );
					break;
				case 13:
                  $message = $int_import_error . ' : ' . __( 'The file extension is not .json', 'tcd-w' );
					break;
				case 14:
                  $message = $int_import_error . ' : ' . __( 'Failed to read the file', 'tcd-w' );
					break;
				case 15:
                    $message = $int_import_error . ' : ' . __( 'Json decoding failed', 'tcd-w' );
					break;
				default :
					$message = esc_html( $_GET['import-error'] );
					break;
			}
		}

		echo '<div class="update-message notice notice-error notice-alt"><p><strong>' . sprintf( __( 'Import error. %s', 'tcd-w' ), $message ) . '</strong></p></div>';

	// インポート成功メッセージ
	} elseif ( isset( $tools_result[0], $tools_result[1] ) && 'import' === $tools_result[0] && 'success' === $tools_result[1] ) {
        echo '<div class="updated"><p><strong>' . __( 'Settings imported', 'tcd-w' ) . '</strong></p></div>';

	// リセット成功メッセージ
	} elseif ( isset( $tools_result[0], $tools_result[1] ) && 'reset' === $tools_result[0] && 'success' === $tools_result[1] ) {
        echo '<div class="updated"><p><strong>' . __( 'Settings reset', 'tcd-w' ) . '</strong></p></div>';
	}
}

/**
 * オプションToolsメッセージのクエリー文字列自動削除
 */
function theme_options_tools_removable_query_args( $removable_query_args ) {
	$removable_query_args[] = 'tcd-tools-result';
	return $removable_query_args;
}
add_filter( 'removable_query_args', 'theme_options_tools_removable_query_args' );

/**
 * オプションTools デフォルト画像設定取得
 */
function theme_options_tools_get_default_images_settings() {
	// デフォルト画像設定
	$default_images_settings = array(
/*
		array(
			// 保存するファイル名 既存メディアの検索に使用するのでユニークなファイル名が望ましい
			// 未指定の場合はコピー元ファイル名が使用されます
			'media_filename' => 'op_1450x150.jpg',

			// コピー元のファイルパス
			'source_filepath' => get_template_directory() . '/img/op_default/op_1450x150.jpg',

			// 適用するテーマオプションキー
			// リピーター等の配列の場合は"['repeater'][0]['image']"のように指定
			'theme_option_keys' => array( 'slider_image1', 'index_content01_image' )
*/
	);

	$default_images_settings = apply_filters( 'tcd_theme_options_tools-get_default_images_settings', $default_images_settings );

	if ( ! $default_images_settings )
		return false;

	return $default_images_settings;
}

/**
 * オプションTools デフォルト画像をメディアに登録した分のテーマオプション配列を返す
 */
function theme_options_tools_get_default_images_options( $a = array() ) {
	// デフォルト画像設定取得
	$default_images_settings = theme_options_tools_get_default_images_settings();
	if ( ! $default_images_settings )
		return $a;

	// 引数チェック
	if ( ! $a || ! is_array( $a ) )
		$a = array();

	// デフォルト画像設定をループ
	foreach ( $default_images_settings as $key => &$value ) {
		// 既存メディアを検索しメディアID取得
		// なければ挿入しメディアID取得
		$attachment_id = theme_options_tools_get_media_id( $value, true );
		if ( $attachment_id )
			$value['attachment_id'] = $attachment_id;

		// テーマオプションに代入
		if ( $attachment_id && ! empty( $value['theme_option_keys'] ) ) {
			foreach ( (array) $value['theme_option_keys'] as $theme_option_key ) {
				// []で囲まれている場合はevalで無理矢理代入
				if ( '[' === substr( $theme_option_key, 0, 1 ) && ']' === substr( $theme_option_key, -1 ) ) {
          eval( '$a' . $theme_option_key . ' = ' . $value['attachment_id'] . ';' );
				} elseif ( empty( $a[$theme_option_key] ) ) {
					$a[$theme_option_key] = $attachment_id;
				}
			}
		}
	}

	return apply_filters( 'tcd_theme_options_tools-get_default_images_array', $a );
}

/**
 * オプションTools メディアからファイル名で検索しメディアidを返す
 */
function theme_options_tools_get_media_id( $a = array(), $not_found_insert = false ) {
	// 文字列の場合はコピー元ファイル扱い
	if ( is_string( $a ) )
		$a = array( 'source_filepath' => $a );

	// 必要ファイルインクルード
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/image.php' );

	// アップロード用ディレクトリのパスを取得
	$wp_upload_dir = wp_upload_dir();

	// 既存メディア検索用SQL
	global $wpdb;
	$sql = "SELECT ID FROM $wpdb->posts WHERE post_type = 'attachment' AND guid LIKE %s";

	// WPファイルシステム
	global $wp_filesystem;
	$can_wp_filesystem = WP_Filesystem();

	// コピー元ファイルが未設定もしくは存在しない場合は終了
	if ( empty( $a['source_filepath'] ) || ! file_exists( $a['source_filepath'] ) )
		return false;

	// 検索用ファイル名が未設定の場合はコピー元からファイル名取得
	if ( empty( $a['media_filename'] ) )
		$a['media_filename'] = basename( $a['source_filepath'] );

	// 既存メディアをファイル名で後方一致検索
	$attachment_id = $wpdb->get_var( $wpdb->prepare( $sql, '%/'.$wpdb->esc_like( $a['media_filename'] ) ) ) ;

	// 既存メディアあり
	if ( $attachment_id ) {
		return $attachment_id;

	// 既存メディアなしでインサートフラグあり
	} elseif ( $not_found_insert ) {
		// メディアパス・URL
		$file_path = $wp_upload_dir['path'] . '/' . $a['media_filename'];
		$file_url = $wp_upload_dir['url'] . '/' . $a['media_filename'];

		if ( $can_wp_filesystem ) {
			// アップロード用ディレクトリに上書きコピー
			$wp_filesystem->copy( $a['source_filepath'], $file_path, true, FS_CHMOD_FILE);

			// コピー失敗等でファイルが無い場合は終了
			if ( ! $wp_filesystem->exists( $file_path ) )
				return false;

		} else {
			// アップロード用ディレクトリに上書きコピー
			@copy( $a['source_filepath'], $file_path );

			// コピー失敗等でファイルが無い場合は終了
			if ( ! file_exists( $file_path ) )
				return false;

			// パーミッション変更
			@chmod( $file_path, defined('FS_CHMOD_FILE') ? FS_CHMOD_FILE : 0644 );
		}

		// メディア追加
		// http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_insert_attachment
		$filetype = wp_check_filetype( basename( $file_path ), null );
		$attachment_id = wp_insert_attachment( array(
			'guid' => $file_url,
			'post_mime_type' => $filetype['type'],
			'post_title' => preg_replace( '/\.[^.]+$/', '', basename( $file_path ) ),
			'post_content' => '',
			'post_status' => 'inherit'
		), $file_path, 0 );

		// メディア追加失敗時は終了
		if ( ! $attachment_id )
			return false;

		// 添付ファイルのメタデータを生成し、データベースを更新
		$attach_data = wp_generate_attachment_metadata( $attachment_id, $file_path );
		wp_update_attachment_metadata( $attachment_id, $attach_data );

		return $attachment_id;
	}

	return false;
}

/**
 * オプションTools 現在のテーマオプション設定にデフォルト画像をセットして返す
 */
function theme_options_tools_set_default_images( $dp_options = array(), $is_reset = false ) {
	$dp_options = (array) $dp_options;

	// 引数$is_resetが空でテーマオプションが保存されている場合は終了
	if ( ! $is_reset && get_option( 'dp_options', false ) !== false )
		return $dp_options;

	// デフォルト画像をセットした配列取得
	$default_images_options = theme_options_tools_get_default_images_options();
	if ( ! $default_images_options )
		return $dp_options;


	// 現設定にデフォルト画像をマージ
	$dp_options = array_replace_recursive( $dp_options, $default_images_options );

	return apply_filters( 'tcd_theme_options_tools-set_default_images', $dp_options, $default_images_options );
}

/**
 * オプションTools テーマ初期化 デフォルト・サンプル処理
 */
function theme_options_tools_initialize( $dp_options = array(), $is_reset = false, $update_option = true ) {
	// 念のため管理画面限定
	if ( ! is_admin() )
		return;

	// 引数$dp_optionsが空の場合は現設定取得
	if ( ! $dp_options || ! is_array( $dp_options ) ) {
		global $dp_default_options;
		if ( function_exists( 'get_design_plus_options' ) ) {
			$dp_options = get_design_plus_options();
		} elseif ( function_exists( 'get_design_plus_option' ) ) {
			$dp_options = get_design_plus_option();
		} elseif ( function_exists( 'get_desing_plus_options' ) ) {
			$dp_options = get_desing_plus_options();
		} elseif ( function_exists( 'get_desing_plus_option' ) ) {
			$dp_options = get_desing_plus_option();
		} elseif ( $dp_default_options && is_array( $dp_default_options ) ) {
			$dp_options = $dp_default_options;
		} else {
			$dp_options = array();
		}
	}

	// テーマオプションフィルター
	$dp_options_filterd = apply_filters( 'tcd_theme_options_tools-initialize', $dp_options, $is_reset, $update_option );

	// テーマオプション保存
	if ( $dp_options_filterd && is_array( $dp_options_filterd ) && $update_option ) {
		// テーマ変更時はフィルターで値が変更になった場合のみ保存する
		if ( $is_reset || $dp_options_filterd !== $dp_options ) {
			update_option( 'dp_options', $dp_options_filterd );
		}
	}

	if ( ! $update_option ) {
		return $dp_options;
	}
}

/**
 * テーマ変更後の最初の読み込みで実行されるアクションでテーマ初期化
 */
add_action( 'after_switch_theme', 'theme_options_tools_initialize' );

/**
 * テーマ初期化にテーマデフォルト画像フィルター追加
 */
add_filter( 'tcd_theme_options_tools-initialize', 'theme_options_tools_set_default_images', 10, 2 );

/**
 * オプションTools 新規サイトチェック
 */
function theme_options_tools_is_new_site() {
	static $is_new_site;

	if ( is_bool( $is_new_site ) )
		return $is_new_site;

	// 全投稿取得
	$posts = get_posts( array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 2
	) );

	// 全カテゴリー取得
	$categories = get_categories( array(
		'hide_empty' => false
	) );

	// 投稿数が1以下、カテゴリー数が1以下、テーマオプションが保存されていない場合は新規サイト扱い
	if ( count( $posts ) <= 1 && count( $categories ) <= 1 && get_option( 'dp_options', false ) === false ) {
		$is_new_site = true;
	} else {
		$is_new_site = false;
	}

	return $is_new_site;
}

/************************************************/
/* ここからSwitch用設定 */
/************************************************/

/**
 * Switch オプションTools デフォルト画像設定フィルター
 */
function switch_theme_options_tools_get_default_images_settings( $default_images_settings ) {
	// デフォルト画像設定
	return array(
/*
		array(
			// 保存するファイル名 既存メディアの検索に使用するのでユニークなファイル名が望ましい
			// 未指定の場合はコピー元ファイル名が使用されます
			'media_filename' => 'op_1450x150.jpg',

			// コピー元のファイルパス
			'source_filepath' => get_template_directory() . '/img/op_default/op_1450x150.jpg',

			// 適用するテーマオプションキー
			// リピーター等の配列の場合は"['repeater'][0]['image']"のように指定
			'theme_option_keys' => array( 'slider_image1', 'index_content01_image' )
*/
		array(
			'media_filename' => 'switch-op_top-slider.gif',
			'source_filepath' => get_template_directory() . '/assets/images/op_default/op_top-slider.gif',
      'theme_option_keys' => array(
        'header_slider_img1',
        'header_slider_img2',
        'header_slider_img3'
      )
		),
		array(
			'media_filename' => 'switch-op_top-slider_sp.gif',
			'source_filepath' => get_template_directory() . '/assets/images/op_default/op_top-slider_sp.gif',
      'theme_option_keys' => array(
        'header_slider_img_sp1',
        'header_slider_img_sp2',
        'header_slider_img_sp3'
      )
		),
		array(
			'media_filename' => 'switch-image_570x570.gif',
			'source_filepath' => get_template_directory() . '/assets/images/op_default/image_570x570.gif',
      'theme_option_keys' => array(
        'index_4_images_and_text_img1',
        'index_4_images_and_text_img2',
        'index_4_images_and_text_img3',
        'index_4_images_and_text_img4'
      )
		),
		array(
			'media_filename' => 'switch-image_740x520.gif',
			'source_filepath' => get_template_directory() . '/assets/images/op_default/image_740x520.gif',
      'theme_option_keys' => array(
        'index_three_column_img1',
        'index_three_column_img2',
        'index_three_column_img3'
      )
		),
		array(
			'media_filename' => 'switch-image_1450x500.gif',
			'source_filepath' => get_template_directory() . '/assets/images/op_default/image_1450x500.gif',
      'theme_option_keys' => array(
        'index_image_image',
        'footer_links_bg_img'
      )
		),
		array(
			'media_filename' => 'switch-image_1450x600.gif',
			'source_filepath' => get_template_directory() . '/assets/images/op_default/image_1450x600.gif',
      'theme_option_keys' => array(
        'ph_img',
        'news_ph_img',
        'event_ph_img',
        'interview_ph_img'
      )
		),
		array(
			'media_filename' => 'switch-image_800x240.gif',
			'source_filepath' => get_template_directory() . '/assets/images/op_default/image_800x240.gif',
      'theme_option_keys' => array(
        'footer_links_banner_img1',
        'footer_links_banner_img2'
      )
		),
	);
}

/**
 * Switch オプションTools サンプルカテゴリー
 */
function switch_theme_options_tools_set_sample_categories( $dp_options ) {

  // 新規サイト以外、「サンプル記事追加」のチェックなしの場合は終了
  // サンプルイベント追加にはイベントタグが必須
  if ( ! theme_options_tools_is_new_site() && empty( $_POST['tcd-tools-reset-sample-posts'] ) ) {
    return $dp_options;
  }

  // サンプルカテゴリー設定配列
  $sample_categories = array(
    array(
      'taxonomy' => 'event_tag',
      'name' => __( 'Event tag', 'tcd-w' ),
      'slug' => 'sample-event-tag',
      'metas' => array(
        'color' => '#ffffff',
        'bg' => '#ff8000',
        'color_hover' => '#ffffff',
        'bg_hover' => '#ff8000',
        'ph_key_color' => '#ff8000'
      )
    )
  );

  // サンプルカテゴリー設定ループ
  foreach ( $sample_categories as $sample_category ) {

    if ( empty( $sample_category['name'] ) ) {
      continue;
    }

    if ( empty( $sample_category['taxonomy'] ) ) {
      $sample_category['taxonomy'] = 'category';
    }

    if ( empty( $sample_category['slug'] ) ) {
      $sample_category['slug'] = sanitize_title( $sample_category['name'] );
    }

    // 同スラッグカテゴリーがある場合は追加しない
    $term = get_term_by( 'slug', $sample_category['slug'], $sample_category['taxonomy'] );

    if ( ! empty( $term->term_id ) ) {
      continue;
    }

    // タイムアウト対策
    set_time_limit( 15 );

    // カテゴリー追加
    $result = wp_insert_term(
      $sample_category['name'],
      $sample_category['taxonomy'],
      array(
        'description'=> isset( $sample_category['description'] ) ? $sample_category['description'] : '',
        'slug' => $sample_category['slug'],
        'parent'=> isset( $sample_category['parent'] ) ? absint( $sample_category['parent'] ) : 0
      )
    );

    // カテゴリー追加成功時、カテゴリーメタ保存
    if ( ! is_wp_error( $result ) && ! empty( $result['term_id'] ) && ! empty( $sample_category['metas'] ) ) {

      foreach ( $sample_category['metas'] as $meta_key => $meta_value ) {
        if ( ! is_int( $meta_key ) && $meta_value ) {
          update_term_meta( $result['term_id'], $meta_key, $meta_value );
        }
  	  }
    }
  }

  // テーマオプションフィルター内で動作しているためreturn必須
  return $dp_options;
}

/**
 * Switch オプションTools サンプル記事
 */
function switch_theme_options_tools_set_sample_posts( $dp_options ) {

	// アイキャッチ メディアID
	$media_id['post'] = theme_options_tools_get_media_id( array(
		'media_filename' => 'switch-image_725x465.gif',
		'source_filepath' => get_template_directory() . '/assets/images/op_default/image_725x465.gif'
	), true );

	// 「投稿」と共通
  //$media_id['news'] = theme_options_tools_get_media_id( array(
	//	'media_filename' => 'switch-image_770x480.gif',
	//	'source_filepath' => get_template_directory() . '/assets/images/op_default/image_770x480.gif'
	//), true );

	// 「投稿」と共通
	//$media_id['event'] = theme_options_tools_get_media_id( array(
	//	'media_filename' => 'switch-image_740x500.gif',
	//	'source_filepath' => get_template_directory() . '/assets/images/op_default/image_740x500.gif'
	//), true );

	$media_id['interview'] = theme_options_tools_get_media_id( array(
		'media_filename' => 'switch-image_1000x512.gif',
		'source_filepath' => get_template_directory() . '/assets/images/op_default/image_1000x512.gif'
	), true );

  // 固定ページ
	$media_id['page'] = theme_options_tools_get_media_id( array(
		'media_filename' => 'switch-image_1180x430.gif',
		'source_filepath' => get_template_directory() . '/assets/images/op_default/image_1180x430.gif'
	), true );

  // ページヘッダー
	$media_id['page_header'] = theme_options_tools_get_media_id( array(
		'media_filename' => 'switch-image_1450x600.gif',
		'source_filepath' => get_template_directory() . '/assets/images/op_default/image_1450x600.gif'
	), true );

	// 記事「Hello world!」にアイキャッチセット
	$find_posts = get_posts( array(
	  'name' => 'hello-world',
	  'post_type' => 'post',
	  'post_status' => 'any',
	  'posts_per_page' => 1
	) );
	if ( ! empty( $find_posts[0]->ID ) ) {
		if ( ! has_post_thumbnail( $find_posts[0]->ID ) ) {
			if ( $media_id['post'] ) {
				set_post_thumbnail( $find_posts[0]->ID, $media_id['post'] );
			}
		}
	}

  // 固定ページ「サンプルページ」に固定ページテンプレート3に関する設定をセット
  $sample_page = get_posts( array(
    'name' => 'sample-page',
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => 1
  ) );

  $sample_page_metas = array(

    // ページヘッダー
    'ph_title' => 'SERVICE',
    'ph_desc' => __( 'Enter description here.' . "\n" . 'Enter description here.', 'tcd-w' ),
    'ph_desc_font_size' => 40,
    'ph_desc_color' => '#ffffff',
    'ph_desc_writing_mode' => 'type1',
    'ph_img' => $media_id['page_header'],
    'ph_img_animation_type' => 'type3',
    'ph_overlay' => '#000000',
    'ph_overlay_opacity' => 0.3,

    // 固定ページテンプレート
    'page_tcd_template_type' => 'type4',
    'page_type4_a' => __( 'Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_b' => $media_id['page'],
    'page_type4_c_1' => __( 'Enter catchphrase here.', 'tcd-w' ),
    'page_type4_c_2' => __( 'Enter description here. Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_c_3' => __( 'Enter catchphrase here.', 'tcd-w' ),
    'page_type4_c_4' => __( 'Enter description here. Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_d_1' => 'PLAN PLICE',
    'page_type4_d_2' => __( 'Headline', 'tcd-w' ),
    'page_type4_d_3' => __( 'Enter catchphrase here. Enter catchphrase here.', 'tcd-w' ),
    'page_type4_d_4' => __( 'Enter description here. Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_d_5' => array(
      'name' => __( 'Plan name', 'tcd-w' ),
      'name_bg' => '#a19283',
      'strong' => 0,
      'price' => '5,000',
      'price_bg' => '#ece9e6',
      'price_color' => '#442506',
      'unit' => '￥',
      'per' => __( 'per month', 'tcd-w' ),
      'data' => array(
        __( 'sample text sample text.', 'tcd-w' ),
        __( 'sample text sample text.', 'tcd-w' )
      )
    ),
    'page_type4_d_6' => array(
      'name' => __( 'Plan name', 'tcd-w' ),
      'name_bg' => '#442506',
      'strong' => 1,
      'price' => '10,000',
      'price_bg' => '#ece9e6',
      'price_color' => '#442506',
      'unit' => '￥',
      'per' => __( 'per month', 'tcd-w' ),
      'data' => array(
        __( 'sample text sample text.', 'tcd-w' ),
        __( 'sample text sample text.', 'tcd-w' )
      )
    ),
    'page_type4_d_7' => array(
      'name' => __( 'Plan name', 'tcd-w' ),
      'name_bg' => '#a19283',
      'strong' => 0,
      'price' => '30,000',
      'price_bg' => '#ece9e6',
      'price_color' => '#442506',
      'unit' => '￥',
      'per' => __( 'per month', 'tcd-w' ),
      'data' => array(
        __( 'sample text sample text.', 'tcd-w' ),
        __( 'sample text sample text.', 'tcd-w' )
      )
    ),
    'page_type4_d_8_headline' => __( 'Table caption', 'tcd-w' ),
    'page_type4_d_8_headline_bg' => '#a19283',
    'page_type4_d_8_table' => array(
      'name' => array(
        __( 'Plan name', 'tcd-w' ),
        __( 'Plan name', 'tcd-w' ),
        __( 'Plan name', 'tcd-w' )
      ),
      'content' => array(
        __( 'sample text. sample text.', 'tcd-w' ),
        __( 'sample text. sample text.', 'tcd-w' ),
        __( 'sample text. sample text.', 'tcd-w' )
      ),
      'price' => array(
        __( '￥3,000 / hour', 'tcd-w' ),
        __( '￥3,000 / hour', 'tcd-w' ),
        __( '￥3,000 / hour', 'tcd-w' )
      )
    ),
    'page_type4_d_9_headline' => __( 'Table caption', 'tcd-w' ),
    'page_type4_d_9_headline_bg' => '#a19283',
    'page_type4_d_9_table' => array(
      'name' => array(
        __( 'Plan name', 'tcd-w' ),
        __( 'Plan name', 'tcd-w' ),
        __( 'Plan name', 'tcd-w' )
      ),
      'content' => array(
        __( 'sample text. sample text.', 'tcd-w' ),
        __( 'sample text. sample text.', 'tcd-w' ),
        __( 'sample text. sample text.', 'tcd-w' )
      ),
      'price' => array(
        __( '￥3,000 / hour', 'tcd-w' ),
        __( '￥3,000 / hour', 'tcd-w' ),
        __( '￥3,000 / hour', 'tcd-w' )
      )
    ),
    'page_type4_d_11_headline' => __( 'Enter catchphrase here.', 'tcd-w' ),
    'page_type4_d_11_desc' => __( 'Enter description here. Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_e' => $media_id['page'],
    'page_type4_f_1' => __( 'Enter catchphrase here.', 'tcd-w' ),
    'page_type4_f_2' => __( 'Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_g' => array(
      'icon_type' => array(
        'type1',
        'type1',
        'type1',
        'type1'
      ),
      'icon_font' => array(
        'bookmark',
        'bookmark',
        'bookmark',
        'bookmark'
      ),
      'icon_img' => array(
        '',
        '',
        '',
        ''
      ),
      'desc' => array(
        __( 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
        __( 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
        __( 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
        __( 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' )
      )
    ),
    'page_type4_g_bg' => '#f5f5f5',
    'page_type4_h_1_headline' => __( 'Enter catchphrase here.', 'tcd-w' ),
    'page_type4_h_1_desc' => __( 'Enter description here. Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_h_2_headline' => __( 'Enter catchphrase here.', 'tcd-w' ),
    'page_type4_h_2_desc' => __( 'Enter description here. Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_h_3_headline' => __( 'Enter catchphrase here.', 'tcd-w' ),
    'page_type4_h_3_desc' => __( 'Enter description here. Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' ),
    'page_type4_h_4_headline' => __( 'Enter catchphrase here.', 'tcd-w' ),
    'page_type4_h_4_desc' => __( 'Enter description here. Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' )
  );

  if ( ! empty( $sample_page[0]->ID ) ) {

    $page_tcd_template_type = get_post_meta( $sample_page[0]->ID, 'page_tcd_template_type', true );

    if ( ! preg_match( '/type[234]/', $page_tcd_template_type ) ) {

      foreach ( $sample_page_metas as $meta_key => $meta_value ) {
        update_post_meta( $sample_page[0]->ID, $meta_key, $meta_value );
      }
    }
  }

	// 新規サイト以外、リセットチェックなしの場合は終了
	if ( ! theme_options_tools_is_new_site() && empty( $_POST['tcd-tools-reset-sample-posts'] ) )
		return $dp_options;

	// サンプル記事設定配列
	$sample_posts = array();
  for ( $i = 5; $i >= 1; $i-- ) {
    $sample_posts[] = array(
			'post_title' => __( 'Blog sample', 'tcd-w' ) . $i,
			'post_content' => __( 'sample text sample text.', 'tcd-w' ),
			'post_name' => 'sample-post' . $i,
			'post_status' => 'publish',
			'post_type' => 'post',
      // アイキャッチ メディアIDもしくはtheme_options_tools_get_media_id()用の配列もしくはコピー元ファイルパス
      // 既存の場合は string で返るため、int に変換
      'thumbnail' => intval( $media_id['post'] ),
      // タクソノミー タクソノミースラッグ => タームスラッグ（配列指定可）
      //'taxonomies' => array(
      //  'category' => 'sample-category1'
      //),
      // カスタムフィールド meta_key => meta_value
      //'metas' => array(
      //  'header_content' => 'on'
      //)
		);
    $sample_posts[] = array(
			'post_title' => __( 'News sample', 'tcd-w' ) . $i,
			'post_content' => __( 'sample text sample text.', 'tcd-w' ),
			'post_name' => 'sample-news' . $i,
			'post_status' => 'publish',
			'post_type' => 'news',
      //'thumbnail' => intval( $media_id['post'] )
		);
    $sample_posts[] = array(
			'post_title' => __( 'Event sample', 'tcd-w' ) . $i,
			'post_content' => __( 'sample text sample text.', 'tcd-w' ),
			'post_name' => 'sample-event' . $i,
			'post_status' => 'publish',
			'post_type' => 'event',
      'thumbnail' => intval( $media_id['post'] )
		);
    $sample_posts[] = array(
			'post_title' => __( 'Interview sample', 'tcd-w' ) . $i,
			'post_content' => __( 'sample text sample text.', 'tcd-w' ),
			'post_name' => 'sample-interview' . $i,
			'post_status' => 'publish',
			'post_type' => 'interview',
      'thumbnail' => intval( $media_id['interview'] ),
      'metas' => array(
        'interviewee_name' => __( 'Enter name here', 'tcd-w' ),
        'interviewee_age' => __( 'Twenties', 'tcd-w' )
      )
		);
	}

	// サンプル記事設定ループ
	foreach( $sample_posts as $i => $sample_post ) {
		if ( empty( $sample_post['post_title'] ) )
			continue;

		// 同スラッグ記事がある場合は追加しない
		$find_posts = get_posts( array(
		  'name' => ! empty( $sample_post['post_name'] ) ? $sample_post['post_name'] : sanitize_title( $sample_post['post_title'] ),
		  'post_type' => ! empty( $sample_post['post_type'] ) ? $sample_post['post_type'] : 'post',
		  'post_status' => 'any',
		  'posts_per_page' => 1
		) );
		if ( $find_posts )
			continue;

    // アイキャッチ・タクソノミー・カスタムフィールド指定を抜き出し
    if ( isset( $sample_post['thumbnail'] ) ) {
      $thumbnail = $sample_post['thumbnail'];
      unset( $sample_post['thumbnail'] );
    } else {
      $thumbnail = null;
    }
    if ( isset( $sample_post['taxonomies'] ) ) {
      $taxonomies = $sample_post['taxonomies'];
      unset( $sample_post['taxonomies'] );
    } else {
      $taxonomies = null;
    }
    if ( isset( $sample_post['metas'] ) ) {
      $metas = $sample_post['metas'];
      unset( $sample_post['metas'] );
    } else {
      $metas = null;
    }

		// 記事追加
		$post_id = wp_insert_post( $sample_post );

		// 記事追加成功時
		if ( $post_id ) {

			// アイキャッチ
      if ( $thumbnail ) {
        // int以外の場合はメディアID取得を試みる
        if ( ! is_int( $thumbnail ) )
          $thumbnail = theme_options_tools_get_media_id( $thumbnail, true );

        if ( is_int( $thumbnail ) )
          set_post_thumbnail( $post_id, $thumbnail );
      }

      // タクソノミー
      if ( $taxonomies && is_array( $taxonomies ) ) {
        foreach( $taxonomies as $taxonomy => $terms ) {
          $set_terms = array();

          foreach( (array) $terms as $term ) {
            if ( is_int( $term ) ) {
              $set_terms[] = $term;
            } else {
              $term_exists = term_exists( $term, $taxonomy );
              if ( ! empty( $term_exists['term_id'] ) )
                $set_terms[] = (int) $term_exists['term_id'];
            }
          }

          if ( $set_terms ) {
            wp_set_object_terms( $post_id, $set_terms, $taxonomy, false );
					}
        }
      }

      // カスタムフィールド
      if ( $metas && is_array( $metas ) ) {
        foreach( $metas as $meta_key => $meta_value ) {
          if ( ! is_int( $meta_key ) && $meta_value )
            update_post_meta( $post_id, $meta_key, $meta_value);
        }
      }

		}
	}

	// テーマオプションフィルター内で動作しているためreturn必須
	return $dp_options;
}

/**
 * Switch オプションTools サンプルメニュー
 */
function switch_theme_options_tools_set_sample_menus( $dp_options ) {

	// 新規サイト以外、リセットチェックなしの場合は終了
	if ( ! theme_options_tools_is_new_site() && empty( $_POST['tcd-tools-reset-sample-menus'] ) )
		return $dp_options;

	// グローバルメニュー設定済みの場合は終了
	$menu_locations = get_nav_menu_locations();
	$nav_menus = wp_get_nav_menus();
	if ( ! empty( $menu_locations['global'] ) && $nav_menus && ! is_wp_error( $nav_menus ) ) {
		foreach( $nav_menus as $nav_menu ) {
			if ( $nav_menu->term_id == $menu_locations['global'] )
				return $dp_options;
		}
	}

	// サンプルメニュー設定済みの場合は終了
	if ( $nav_menus && ! is_wp_error( $nav_menus ) ) {
		foreach( $nav_menus as $nav_menu ) {
			if ( $nav_menu->name == __( 'Sample menu', 'tcd-w' ) )
				return $dp_options;
		}
	}

	// サンプルメニュー作成
	$menu_id = wp_create_nav_menu( __( 'Sample menu', 'tcd-w' ) );
	if ( is_wp_error( $menu_id ) )
		return $dp_options;

	// メニューアイテム
	$menu_items = array();
  for ( $i = 1; $i <= 6; $i++ ) {
    $menu_items[] = array(
      'name' => "Menu{$i}",
      'url' => '#'
    );
  }

	// 親メニューアイテム作成
	foreach( $menu_items as $menu_item ) {
		if ( empty( $menu_item['name'] ) || empty( $menu_item['url'] ) )
			continue;

		$menu_item_db_id = wp_update_nav_menu_item( $menu_id, 0, array(
			'menu-item-type' => 'custom',
			'menu-item-title' => $menu_item['name'],
			'menu-item-url' => $menu_item['url'],
			'menu-item-status' => 'publish'
		) );

	}

	// グローバルメニュー、フッターメニューにセット
	$menu_locations = (array) $menu_locations;
	$menu_locations['global'] = (int) $menu_id;
	$menu_locations['footer'] = (int) $menu_id;
	set_theme_mod( 'nav_menu_locations', $menu_locations );

	// テーマオプションフィルター内で動作しているためreturn必須
	return $dp_options;
}

/**
 * Switch オプションTools サンプルウィジェット
 */
function switch_theme_options_tools_set_sample_widgets( $dp_options ) {

	// 新規サイト以外、リセットチェックなしの場合は終了
	if ( ! theme_options_tools_is_new_site() && empty( $_POST['tcd-tools-reset-sample-widgets'] ) )
		return $dp_options;

	// next_widget_id_number用にインクルード
	require_once ABSPATH . '/wp-admin/includes/widgets.php';

	// ウィジェットエリア設定取得
	$sidebars_widgets = wp_get_sidebars_widgets();

	// サンプルウィジェット設定
	$sample_widgets = array(

    // AdSense (tcd ver)
		array(
			'class_name' => 'ad_widget',
			'params' => array(
				'banner_code1' => '',
				'banner_image1' => 	theme_options_tools_get_media_id( array(
					'media_filename' => 'switch-image_300x250.gif',
					'source_filepath' => get_template_directory() . '/assets/images/op_default/image_300x250.gif'
				), true ),
				'banner_url1' => '#',
				'banner_code2' => '',
				'banner_image2' => '',
				'banner_url2' => '',
				'banner_code3' => '',
				'banner_image3' => '',
				'banner_url3' => '',
			)
		),

    // Styled post list (tcd ver)
		array(
			'class_name' => 'styled_post_list_widget',
			'params' => array(
        'title' => '',
        'display1' => 1,
        'title1' => __( 'Recent post', 'tcd-w' ),
        'post_type1' => 'recent_post',
        'post_order1' => 'date1',
        'post_num1' => 3,
        'display_date1' => 1,
        'display2' => 1,
        'title2' => __( 'Topics', 'tcd-w' ),
        'post_type2' => 'recent_post',
        'post_order2' => 'date1',
        'post_num2' => 3,
        'display_date2' => 1,
      )
		),

    // Archive list (tcd ver)
		array(
			'class_name' => 'tcdw_archive_list_widget',
			'params' => array(
        'title' => ''
      )
		),

    // Google Custom Search (tcd ver)
		array(
			'class_name' => 'google_search',
			'params' => array(
        'title' => '',
        'google_search_id' => ''
      )
		)
	);

	// 基本ウィジェットエリア
	foreach( array( 'common_widget' ) as $sidebar ) {

		// 現ウィジェットの設定を削除
		if ( ! empty( $sidebars_widgets[$sidebar] ) ) {
			foreach( $sidebars_widgets[$sidebar] as $widget_id ) {
				$pieces = explode( '-', $widget_id );
				$multi_number = array_pop( $pieces );
				$id_base = implode( '-', $pieces );
				$widget_db = get_option( 'widget_' . $id_base );
				if ( isset( $widget_db[$multi_number] ) ) {
					unset( $widget_db[$multi_number] );
					update_option( 'widget_' . $id_base, $widget_db );
				}
			}
		}

		// ウィジェットエリアを空に
		$sidebars_widgets[$sidebar] = array();

		// ウィジェットループしてウィジェット追加
		foreach( $sample_widgets as $sample_widget ) {
			$widget_class = null;

			if ( isset( $sample_widget['class_name'] ) && class_exists( $sample_widget['class_name'] ) ) {
				$widget_class = new $sample_widget['class_name'];
				$widget_id_base = $widget_class->id_base;
			} elseif ( ! empty( $sample_widget['id'] ) ) {
				$widget_id_base = $sample_widget['id'];
			} else {
				continue;
			}

			// WP_Widget::update_callback()等を使う方法もあるがPOSTで前提で扱いずらいためDBのオプション値を直接変更
			$widget_db = get_option( 'widget_' . $widget_id_base, array() );

			// ウィジェットID番号
			$widget_id_number = next_widget_id_number( $widget_id_base );
			foreach( array_keys( $widget_db ) as $key ) {
				if ( is_int( $key ) ) {
					$widget_id_number = max( $widget_id_number, $key + 1);
				}
			}

			// ウィジェット値
			if ( isset( $sample_widget['params'] ) ) {
				if ( $widget_class ) {
					$widget_db[$widget_id_number] = $widget_class->update( $sample_widget['params'], array() );
				} else {
					$widget_db[$widget_id_number] = $sample_widget['params'];
				}
			} else {
				$widget_db[$widget_id_number] = array();
			}

			// ウィジェットDB保存
			if ( ! isset( $widget_db['_multiwidget'] ) )
				$widget_db['_multiwidget'] = 1;

			update_option( 'widget_' . $widget_id_base, $widget_db );

			// ウィジェットエリアに追加
			$sidebars_widgets[$sidebar][] = $widget_id_base . '-' . $widget_id_number;
		}
	}

	// ウィジェットエリア保存
	wp_set_sidebars_widgets( $sidebars_widgets );

	// テーマオプションフィルター内で動作しているためreturn必須
	return $dp_options;
}

/**
 * Switch テーマ初期化フィルター
 */
add_filter( 'tcd_theme_options_tools-get_default_images_settings', 'switch_theme_options_tools_get_default_images_settings', 10, 1 );
//add_filter( 'tcd_theme_options_tools-initialize', 'switch_theme_options_tools_set_sample_categories', 10, 1 );
add_filter( 'tcd_theme_options_tools-initialize', 'switch_theme_options_tools_set_sample_posts', 10, 1 );
add_filter( 'tcd_theme_options_tools-initialize', 'switch_theme_options_tools_set_sample_menus', 10, 1 );
add_filter( 'tcd_theme_options_tools-initialize', 'switch_theme_options_tools_set_sample_widgets', 10, 1 );
