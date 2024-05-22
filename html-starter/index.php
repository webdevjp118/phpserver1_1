<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
/**
 * 定数定義
 */

// HTTPS 経由か判定
if (is_https()) {
	$protocol = "https://";
} else {
	$protocol = "http://";
}

/**
 * HTTPS 経由での接続かどうか判定する。
 * @return bool
 */
function is_https()
{
	// Apache
	if (isset($_SERVER['HTTPS']) === true) {
		return ($_SERVER['HTTPS'] === 'on' or $_SERVER['HTTPS'] === '1');
	// IIS
	} else if (isset($_SERVER['SSL']) === true) {
		return ($_SERVER['SSL'] === 'on');
	// Reverse proxy
	} else if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) === true) {
		return (strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https');
	// Reverse proxy
	} else if (isset($_SERVER['HTTP_X_FORWARDED_PORT']) === true) {
		return ($_SERVER['HTTP_X_FORWARDED_PORT'] === '443');
	} elseif (isset($_SERVER['SERVER_PORT']) === true) {
		return ($_SERVER['SERVER_PORT'] === '443');
	}

	return false;
}

// ホスト名取得（ポート番号削除）
$hostname = str_replace(":443", "", $_SERVER["HTTP_HOST"]);

// CSRF対策用のトークン長（16 * 2 = 32バイト）
define('TOKEN_LENGTH', 16);

/**
 * 問い合わせフォーム用関数群
 */

/**
 * 出力用
 */
function _h($s)
{
	echo htmlspecialchars($s, ENT_QUOTES,'UTF-8');
}

/**
 * トークン生成
 * CSRF対策のためのトークンを生成する。
 * 
 * @return string
 */
function get_token()
{
	return bin2hex(openssl_random_pseudo_bytes(TOKEN_LENGTH));
}


/**
 * ブラウザのキャッシュを抑制
 * 
 * @return none
 */
function controlcache()
{
//	header("Pragma: no-cache");
//	header("Expires: -1");
//	header('Cache-Control: no-cache');
//	header('Cache-Control: no-store');
	header('Expires:-1');
	header('Cache-Control:');
	header('Pragma:');
}

/**
 * エラー表示用クラス名出力
 * エラー発生時のセッションは $_SESSION["error"] 固定。
 * エラー表示用のクラス名は error 固定。
 * 
 * @param string $error_sess_name
 * @param boolean $class_string
 */
function print_error_class($error_sess_name, $class_string = 0)
{
	$s = "";
	if (!empty($_SESSION["error"][$error_sess_name])) {
		if ($class_string) {
			$s = ' class="error"';
		} else {
			$s .= ' error';
		}
	}
	echo $s;
}

/**
 * 項目ごとにエラーメッセージ表示
 * エラー発生時のセッションは $_SESSION["error"] 固定。
 * エラー表示用のクラス名は error 固定。
 * 
 * @param string $error_sess_name
 * @param string $elm
 */
function print_error_each_message($error_sess_name, $elm)
{
	$s = "";
	if (!empty($_SESSION["error"][$error_sess_name])) {
		$s = '<'.$elm.' class="error">';
		$s .= $_SESSION["error"][$error_sess_name];
		$s .= '</'.$elm.'>';
	}
	echo $s;
}

/**
 * POST セッションの出力用
 * セッションは $_SESSION["post"] 固定。
 * 
 * @param type $post_sess_name
 * @param type $echo
 * @param type $print_noinput
 * @return type
 */
function print_post_session($post_sess_name, $echo = 1, $print_noinput = 0)
{
	$s = "";
	if (empty($_SESSION["post"][$post_sess_name]) and 1 == $print_noinput) {
		$s = "（未入力）";
	} else {
		$s = $_SESSION["post"][$post_sess_name];
	}
	if ($echo) {
		_h($s);
	} else {
		return $s;
	}
}

/**
 * POST セッションの出力用（電話番号・郵便番号）
 * セッションは $_SESSION["post"] 固定。
 * 
 * @param type $post_sess_name
 * @param type $echo
 * @param type $print_noinput
 * @return type
 */
function print_post_session_num($post_sess_name, $echo = 1, $print_noinput = 0)
{
	$s = "";
	if (is_array($post_sess_name)) {
		$tmp = "";
		$tmp2 = "";
		foreach ($post_sess_name as $val) {
			$tmp .= $_SESSION["post"][$val];
			$tmp2 .= $_SESSION["post"][$val]."-";
		}
		$tmp2 = substr($tmp2, 0, -1);
	} else {
		$tmp = $_SESSION["post"][$post_sess_name];
		$tmp2 = $_SESSION["post"][$post_sess_name];
	}
	if (empty($tmp) and 1 == $print_noinput) {
		$s = "（未入力）";
	} else {
		$s = $tmp2;
	}
	if ($echo) {
		_h($s);
	} else {
		return $s;
	}
}

/**
 * radio の checked 出力用
 * セッションは $_SESSION["post"] 固定。
 * 
 * @param type $post_sess_name
 * @param type $value_for_compare
 * @param type $echo
 * @return string
 */
function print_checked($post_sess_name, $value_for_compare, $echo = 1)
{
	$s = "";
	if ($value_for_compare == $_SESSION["post"][$post_sess_name]) {
		$s = " checked";
	} else {
		$s = "";
	}
	if ($echo) {
		echo $s;
	} else {
		return $s;
	}
}

/**
 * select の selected 出力用
 * セッションは $_SESSION["post"] 固定。
 * 
 * @param type $post_sess_name
 * @param type $value_for_compare
 * @param type $echo
 * @return string
 */
function print_selected($post_sess_name, $value_for_compare, $echo = 1)
{
	$s = "";
	if ($value_for_compare == $_SESSION["post"][$post_sess_name]) {
		$s = " selected";
	} else {
		$s = "";
	}
	if ($echo) {
		echo $s;
	} else {
		return $s;
	}
}

/**
 * 初期化処理
 */
// エラー全出力
//ini_set( 'display_errors', 1 );
// エラー表示抑止
//error_reporting(E_ALL ^ E_NOTICE);

// 文字コード指定 UTF-8
header('Content-Type: text/html; charset=UTF-8');

// XSS攻撃検知してブロック（XSS対策）
header("X-XSS-Protection: 1; mode=block");

// IEにファイルの内容からファイルの種類を決定させない（XSS対策）
header("X-Content-Type-Options: nosniff");
// IEでダウンロードしたファイルを直接開かせない。
header("X-Download-Options: noopen");

// Content Security Policy 設定（XSS対策・データインジェクション対策）
//header( "X-Content-Security-Policy: default-src 'self'" );	// Firefox
//header( "X-WebKit-CSP: default-src 'self'" );				// Chrome, Safari
//header( "Content-Security-Policy: default-src 'self'" );	// W3C

// このページを iframe に埋め込ませない
header("X-Frame-Options: DENY");

// 「戻る」ボタンでの期限切れ表示の抑制
session_cache_limiter('private, must-revalidate');

// セッション開始
session_start();

// セッションIDを再生成（セッションハイジャック対策）
session_regenerate_id(true);

// キャッシュを抑制
controlcache();

// トークン設定・確認処理（CSRF対策）
if ('POST' != $_SERVER['REQUEST_METHOD']) {
	// GET の場合はトークンをセット（トークンのチェックは行なわない）
	$_SESSION["token"] = get_token();
} else {
	// POST の場合は一律にトークンをチェック（トークンのセットは行なわない）
    if (empty($_SESSION["token"])) {
		// トークンが空の場合は不正遷移
 		header("Location: ./error.php");
		exit();
    }
	if ($_SESSION["token"] != filter_input(INPUT_POST, "token")) {
		// トークンが一致しない場合は不正遷移
 		header("Location: ./error.php");
		exit();
	}
}

// タイムゾーン設定 JST
date_default_timezone_set('Asia/Tokyo');

?>
<?php

// マルチチェックボックス用の連想配列作成
$artmp = array();
$arkey = array(
	"ご相談内容・がん先進治療",
	"ご相談内容・がん予防・再発防止",
	"ご相談内容・がん超早期発見検査",
	"ご相談内容・その他",
	);
if (!empty($arkey)) {
	foreach ($arkey as $keytmp => $valtmp) {
		if (!is_null($_SESSION["post"][$valtmp])) {
			foreach ($_SESSION["post"][$valtmp] as $key => $val) {
				$artmp[$valtmp][$val] = " checked";
			}
		}
	}
}

/* ==================== data ==================== */

//初期設定
//共通

//ページ設定
$bodyClass = "transition contents contact";
$pagename = "ご予約";
$catname = "";
$pagetitle = $pagename.(($catname!="") ? " | ".$catname : "");
$pagekeywords = "";
$pageDescription = "";
$pageOgpImg = "";

/* ==================== /data ==================== */
?>

<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">


<!-- Global site tag (gtag.js) - Google Analytics ___replace-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166622808-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166622808-1');
</script>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="email=no,telephone=no,address=no">
<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
<script type="text/javascript">
	if(!((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0))){
		document.write('<meta name="viewport" content="width=990">');
	}
</script>
<title>PageTitle___replace</title>
<meta name="robots" content="index,follow">
<meta name="keywords" content="keywords___replace">
<meta name="description" content="description___replace">
<!-- open graph protocol -->
<meta property="og:url" content="pageURL___replace">
<meta property="og:site_name" content="sitename___replace">
<meta property="og:title" content="pagetitle___replace">
<meta property="og:type" content="website/article___replace">
<meta property="og:description"  content="pageDescription___replace">
<meta property="og:image" content="ogImageUrl___replace">
<meta name="twitter:card" content="summary_large_image">
<!-- lang -->
<link rel="alternate" hreflang="ja" href="https://sitedomain___replace.com/">
<link rel="alternate" hreflang="en-gb" href="https://sitedomain___replace.com/en/">
<link rel="alternate" hreflang="en-us" href="https://sitedomain___replace.com/en/">
<link rel="alternate" hreflang="en" href="https://sitedomain___replace.com/en/">
<link rel="alternate" hreflang="zh-Hans" href="https://sitedomain___replace.com/ch/">
<link rel="alternate" hreflang="zh-Hant" href="https://sitedomain___replace.com/ch/">
<link rel="alternate" hreflang="x-default" href="https://sitedomain___replace.com/en/">
<!-- icon -->
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png">
<!-- CSS -->
<link rel="stylesheet" href="css/cssreset.css">
<link rel="stylesheet" href="css/html5-doctor-reset-stylesheet.min.css">
<link rel="stylesheet" href="css/com.css">
<!-- Javascript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.12.4.min.js"><\/script>')</script>
<script defer src="js/com.js"></script>
<!-- intersection observer -->
<script defer src="js/intersection-observer-polyfill.js"></script>
<script>
$(function() {
	var observer = new IntersectionObserver(function(entries) {
		entries.forEach(function(e) {
			if (!e.isIntersecting) return;
			e.target.classList.add('move'); // 交差した時の処理
			observer.unobserve(e.target);
			// target element:
		    //   e.target				ターゲット
		    //   e.isIntersecting		交差しているかどうか
		    //   e.intersectionRatio	交差している領域の割合
		    //   e.intersectionRect		交差領域のgetBoundingClientRect()
		    //   e.boundingClientRect	ターゲットのgetBoundingClientRect()
		    //   e.rootBounds			ルートのgetBoundingClientRect()
		    //   e.time					変更が起こったタイムスタンプ
		})

	},{
    	// オプション設定
		rootMargin: '0px 0px -5% 0px' //下端から5%入ったところで発火
		//threshold: [0, 0.5, 1.0]
	});

	var target = document.querySelectorAll('.io'); //監視したい要素をNodeListで取得
	for(var i = 0; i < target.length; i++ ) {
	    observer.observe(target[i]); // 要素の監視を開始
	}

	//アニメーションによる各要素のはみ出しを解消
	$("body").wrapInner("<div style='overflow:hidden;'></div>");

});
</script>
<!-- matchHeight -->
<script defer src="js/jquery.matchHeight.js"></script>
<script>
$(function() {
	$(window).on('load',function(){
		$(".contents_nav ul > li").matchHeight();
	});
});
</script>
<!-- GoogleMap iFrame-->
<!-- <script>
	$(window).on('load', function(){
		$('.footer_map').append('<iframe src="" frameborder="0" style="border:0" allowfullscreen></iframe>');
	});
</script> -->
<!--svgxuse for IE -->
<script defer src="js/svgxuse.js"></script>
<!--[if lt IE 9]>
<script src="js/IE9.js"></script>
<script src="js/html5shiv.js"></script>
<script>
	document.createElement('main');
</script>
<![endif]-->


<link rel="stylesheet" href="css/reserve.css">


<!-- プライバシーポリシー同意チェック -->
<script>
window.onpageshow = function(event) {
	var checkAgreement = document.getElementById('check');
	checkAgreement.checked = false;
};
function checkValue(check){
	var submitGo = document.getElementById('submit_go');

	if (check.checked) {
		submitGo.classList.remove("disabled");
		submitGo.removeAttribute("disabled");
	} else {
		submitGo.classList.add("disabled")
		submitGo.setAttribute("disabled", "disabled");
	}
}
</script>

<!-- 日付カレンダーIE対応 -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
$( "#datepicker1,#datepicker2" ).datepicker( {
	dateFormat: 'yy年mm月dd日',
	monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
	minDate: '+1d'
});
} );
</script>
</head>
<body id="PAGETOP" class="transition contents contact">
<svg aria-hidden="true" style="display: none;" version="1.1" xmlns="http://www.w3.org/2000/svg">
	<defs>
		<filter id="filter_blur">
			<feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
		</filter>

		<filter id="filter_monotone">
			<feColorMatrix type="saturate" values="0" />
		</filter>


		<symbol id="icon_sns_fb" viewBox="0 0 32 32">
			<path d="M32,16.1A16,16,0,1,0,13.5,31.9V20.72H9.44V16.1H13.5V12.57c0-4,2.39-6.22,6-6.22a24.77,24.77,0,0,1,3.58.31V10.6h-2a2.31,2.31,0,0,0-2.61,2.5v3h4.44l-.71,4.62H18.5V31.9A16,16,0,0,0,32,16.1Z"></path>
		</symbol>

		<symbol id="icon_sns_insta" viewbox="0 0 32 32">
			<path d="M16 2.88c4.28 0 4.787 0 6.467 0.093 1.071 0.014 2.091 0.213 3.035 0.567l-0.062-0.020c0.717 0.273 1.326 0.682 1.825 1.199l0.001 0.001c0.523 0.501 0.932 1.117 1.189 1.807l0.011 0.033c0.347 0.882 0.552 1.902 0.56 2.97l0 0.003c0.067 1.68 0.093 2.187 0.093 6.453s0 4.787-0.093 6.467c-0.008 1.071-0.213 2.092-0.58 3.031l0.020-0.058c-0.263 0.723-0.668 1.338-1.185 1.839l-0.001 0.001c-0.504 0.518-1.119 0.927-1.806 1.189l-0.034 0.011c-0.883 0.335-1.903 0.534-2.968 0.547l-0.005 0c-1.68 0.080-2.187 0.093-6.453 0.093s-4.787 0-6.467-0.093c-1.071-0.012-2.091-0.212-3.035-0.567l0.061 0.020c-0.721-0.273-1.336-0.682-1.839-1.199l-0.001-0.001c-0.518-0.504-0.927-1.119-1.189-1.806l-0.011-0.034c-0.334-0.878-0.533-1.894-0.547-2.954l-0-0.006c-0.080-1.693-0.093-2.2-0.093-6.467s0-4.787 0.093-6.467c0.014-1.071 0.213-2.091 0.567-3.035l-0.020 0.062c0.273-0.717 0.682-1.326 1.199-1.825l0.001-0.001c0.504-0.522 1.119-0.935 1.806-1.202l0.034-0.012c0.878-0.334 1.894-0.533 2.954-0.547l0.006-0c1.68 0 2.187-0.093 6.467-0.093zM16 0c-4.347 0-4.88 0-6.587 0.093-1.406 0.028-2.74 0.299-3.973 0.774l0.080-0.027c-1.116 0.414-2.069 1.036-2.853 1.826l-0.001 0.001c-0.791 0.784-1.413 1.737-1.809 2.8l-0.017 0.054c-0.445 1.149-0.716 2.478-0.746 3.867l-0 0.013c-0.093 1.72-0.093 2.253-0.093 6.6s0 4.893 0.093 6.667c0.029 1.401 0.3 2.731 0.774 3.96l-0.027-0.080c0.427 1.089 1.047 2.017 1.826 2.786l0.001 0.001c0.776 0.794 1.719 1.42 2.774 1.822l0.053 0.018c1.149 0.446 2.479 0.718 3.868 0.746l0.012 0c1.733 0.080 2.28 0.080 6.627 0.080s4.88 0 6.587-0.093c1.401-0.026 2.731-0.298 3.959-0.774l-0.079 0.027c2.162-0.84 3.84-2.518 4.661-4.625l0.019-0.055c0.44-1.129 0.711-2.434 0.746-3.798l0-0.015c0.107-1.773 0.107-2.307 0.107-6.667s0-4.893-0.093-6.6c-0.029-1.401-0.3-2.731-0.774-3.96l0.027 0.080c-0.398-1.122-1.023-2.077-1.825-2.851l-0.002-0.002c-0.787-0.786-1.739-1.408-2.799-1.809l-0.055-0.018c-1.13-0.435-2.436-0.701-3.8-0.733l-0.014-0c-1.773-0.107-2.32-0.107-6.667-0.107z"></path>
			<path d="M16 7.787c-4.543 0-8.227 3.683-8.227 8.227s3.683 8.227 8.227 8.227c4.543 0 8.227-3.683 8.227-8.227 0-0.005 0-0.009 0-0.014v0.001c0 0 0 0 0 0 0-4.536-3.677-8.213-8.213-8.213-0.005 0-0.009 0-0.014 0h0.001zM16 21.333c-2.946 0-5.333-2.388-5.333-5.333s2.388-5.333 5.333-5.333c2.946 0 5.333 2.388 5.333 5.333v0c0 2.946-2.388 5.333-5.333 5.333v0z"></path>
			<path d="M26.467 7.453c0 1.060-0.86 1.92-1.92 1.92s-1.92-0.86-1.92-1.92c0-1.060 0.86-1.92 1.92-1.92v0c0.004-0 0.009-0 0.013-0 1.053 0 1.907 0.854 1.907 1.907 0 0.005-0 0.009-0 0.014v-0.001z"></path>
		</symbol>

		<symbol id="icon_sns_tw" viewbox="0 0 32 32">
			<path d="M31.693 6.267c-1.075 0.49-2.323 0.847-3.631 1.007l-0.062 0.006c1.325-0.812 2.322-2.047 2.813-3.514l0.013-0.046c-1.177 0.731-2.547 1.29-4.010 1.599l-0.083 0.015c-1.178-1.251-2.845-2.030-4.694-2.030-3.539 0-6.412 2.855-6.44 6.388l-0 0.003c-0 0.011-0 0.024-0 0.037 0 0.503 0.063 0.991 0.182 1.457l-0.009-0.041c-5.355-0.257-10.072-2.785-13.242-6.635l-0.025-0.031c-0.539 0.919-0.858 2.025-0.858 3.205 0 2.211 1.119 4.161 2.822 5.314l0.023 0.014c-1.076-0.032-2.078-0.325-2.952-0.817l0.032 0.017v0.080c-0 0.018-0 0.038-0 0.059 0 3.109 2.202 5.703 5.132 6.307l0.042 0.007c-0.511 0.144-1.097 0.227-1.702 0.227-0.001 0-0.003 0-0.004 0h0c-0.454-0.047-0.867-0.126-1.265-0.239l0.052 0.012c0.854 2.572 3.212 4.406 6.006 4.467l0.007 0c-2.166 1.72-4.941 2.76-7.958 2.76-0.015 0-0.029-0-0.044-0h0.002c-0.017 0-0.038 0-0.058 0-0.525 0-1.041-0.034-1.548-0.1l0.060 0.006c2.777 1.814 6.178 2.893 9.831 2.893 0.017 0 0.035-0 0.052-0h-0.003c0.040 0 0.087 0 0.133 0 10.044 0 18.187-8.142 18.187-18.187 0-0.028-0-0.057-0-0.085l0 0.004c0-0.28 0-0.56 0-0.827 1.264-0.923 2.33-2.027 3.184-3.287l0.030-0.046z"></path>
		</symbol>



		<symbol id="icon_close" viewbox="0 0 32 32">
			<path d="M25.24 8.64l-1.88-1.88-7.36 7.36-7.36-7.36-1.88 1.88 7.36 7.36-7.36 7.36 1.88 1.88 7.36-7.36 7.36 7.36 1.88-1.88-7.36-7.36 7.36-7.36z"></path>
		</symbol>

		<symbol id="icon_plus" viewbox="0 0 32 32">
			<path d="M25.333 14.667h-8v-8h-2.667v8h-8v2.667h8v8h2.667v-8h8v-2.667z"></path>
		</symbol>

		<symbol id="icon_minus" viewbox="0 0 32 32">
			<path d="M6.667 14.667h18.667v2.667h-18.667v-2.667z"></path>
		</symbol>

		<symbol id="icon_mail" viewbox="0 0 32 32">
			<path d="M29.333 5.333h-26.667v21.333h26.667zM26.667 24h-21.333v-13.333l10.667 6.667 10.667-6.667zM16 14.667l-10.667-6.667h21.333z"></path>
		</symbol>

		<symbol id="icon_mail_nega" viewbox="0 0 32 32">
			<path d="M29.333 5.333h-26.667v21.333h26.667zM26.667 10.667l-10.667 6.667-10.667-6.667v-2.667l10.667 6.667 10.667-6.667z"></path>
		</symbol>

		<symbol id="icon_phone" viewbox="0 0 32 32">
			<path d="M25.64 20.347l-3.387-0.347c-0.091-0.011-0.197-0.017-0.305-0.017-0.735 0-1.4 0.297-1.882 0.778l-2.453 2.453c-3.805-1.959-6.828-4.982-8.734-8.675l-0.052-0.112 2.467-2.52c0.452-0.477 0.73-1.123 0.73-1.833 0-0.125-0.009-0.247-0.025-0.367l0.002 0.014-0.333-3.36c-0.159-1.335-1.284-2.36-2.649-2.36-0.002 0-0.003 0-0.005 0h-3.68c-0.736 0-1.333 0.597-1.333 1.333v0c0 12.518 10.148 22.667 22.667 22.667v0c0.736 0 1.333-0.597 1.333-1.333v0-3.68c-0.005-1.361-1.028-2.481-2.347-2.639l-0.013-0.001z"></path>
		</symbol>
		
		<symbol id="icon_doc" viewbox="0 0 32 32">
			<path d="M17.52 3.613h-11.84v24.773h20.64v-16zM17.973 7.84l4.133 4.16h-4.133zM8.347 25.72v-19.44h7.653v7.693h7.68v11.747z"></path>
		</symbol>

		<symbol id="icon_blank" viewbox="0 0 32 32">
			<path d="M22.093 24.76h-14.853v-14.853h7.427v-2.667h-10.093v20.187h20.187v-10.093h-2.667v7.427z"></path>
			<path d="M17.787 4.573v2.667h5.093l-9.16 9.147 1.893 1.893 9.147-9.16v5.093h2.667v-9.64h-9.64z"></path>
		</symbol>

		<symbol id="icon_dl" viewbox="0 0 32 32">
			<path d="M24 18.653v5.333h-16v-5.333h-2.667v8h21.333v-8h-2.667z"></path>
			<path d="M22.813 13.28l-1.88-1.893-3.6 3.6v-8.307h-2.667v8.307l-3.6-3.6-1.88 1.893 6.813 6.813 6.813-6.813z"></path>
		</symbol>

		<symbol id="icon_search" viewbox="0 0 32 32">
			<path d="M20.667 18.667h-1.053l-0.373-0.36c1.301-1.509 2.093-3.489 2.093-5.653 0-4.794-3.886-8.68-8.68-8.68s-8.68 3.886-8.68 8.68c0 4.794 3.886 8.68 8.68 8.68 2.165 0 4.144-0.792 5.665-2.103l-0.011 0.009 0.36 0.373v1.053l6.667 6.667 1.987-2zM12.667 18.667c-3.314 0-6-2.686-6-6s2.686-6 6-6c3.314 0 6 2.686 6 6v0c0 0.004 0 0.009 0 0.013 0 3.306-2.68 5.987-5.987 5.987-0.005 0-0.009 0-0.014-0h0.001z"></path>
		</symbol>

		<symbol id="icon_cart" viewbox="0 0 32 32">
			<path d="M22.067 17.333c0.007 0 0.015 0 0.024 0 0.982 0 1.84-0.531 2.303-1.321l0.007-0.013 4.773-8.653c0.117-0.194 0.187-0.429 0.187-0.68 0-0.736-0.597-1.333-1.333-1.333-0.009 0-0.019 0-0.028 0l0.001-0h-19.72l-1.253-2.667h-4.36v2.667h2.667l4.8 10.12-1.8 3.213c-0.225 0.383-0.357 0.842-0.357 1.333 0 1.473 1.194 2.667 2.667 2.667 0.008 0 0.017-0 0.025-0h15.999v-2.667h-16l1.467-2.667zM9.547 8h16.2l-3.68 6.667h-9.333zM10.667 24c-1.473 0-2.667 1.194-2.667 2.667s1.194 2.667 2.667 2.667c1.473 0 2.667-1.194 2.667-2.667v0c0-1.473-1.194-2.667-2.667-2.667v0zM24 24c-1.473 0-2.667 1.194-2.667 2.667s1.194 2.667 2.667 2.667c1.473 0 2.667-1.194 2.667-2.667v0c0-1.473-1.194-2.667-2.667-2.667v0z"></path>
		</symbol>

		<symbol id="icon_calendar" viewbox="0 0 32 32">
			<path d="M29.333 4h-4v-2.667h-2.667v2.667h-13.333v-2.667h-2.667v2.667h-4v26.667h26.667zM26.667 28h-21.333v-17.333h21.333z"></path>
		</symbol>

		<symbol id="icon_pin" viewbox="0 0 32 32">
			<path d="M16 3.24c-5.25 0-9.507 4.256-9.507 9.507v0c0.037 1.715 0.487 3.317 1.254 4.721l-0.027-0.054c2.718 4.294 5.445 7.997 8.404 11.497l-0.124-0.151c2.835-3.35 5.562-7.053 8.034-10.934l0.246-0.413c0.74-1.35 1.19-2.952 1.226-4.655l0-0.011c0-5.25-4.256-9.507-9.507-9.507v0zM16 15.907c-0.004 0-0.009 0-0.013 0-1.745 0-3.16-1.415-3.16-3.16s1.415-3.16 3.16-3.16c1.745 0 3.16 1.415 3.16 3.16v0c0 0 0 0 0 0 0 1.741-1.407 3.152-3.146 3.16h-0.001z"></path>
		</symbol>



		<symbol id="arrow_right" viewbox="0 0 32 32">
			<path d="M12.28 26.28l-1.893-1.893 8.4-8.387-8.4-8.387 1.893-1.893 10.267 10.28-10.267 10.28z"></path>
		</symbol>

		<symbol id="arrow_right_w" viewbox="0 0 32 32">
			<path d="M7.947 26.28l-1.88-1.893 8.387-8.387-8.387-8.387 1.88-1.893 10.28 10.28-10.28 10.28z"></path>
			<path d="M16.6 26.28l-1.88-1.893 8.387-8.387-8.387-8.387 1.88-1.893 10.28 10.28-10.28 10.28z"></path>
		</symbol>

		<symbol id="arrow_right_line" viewbox="0 0 32 32">
			<path d="M17.040 5.72l-1.893 1.893 7.067 7.053h-15.64v2.667h15.64l-7.067 7.053 1.893 1.893 10.267-10.28-10.267-10.28z"></path>
		</symbol>

		<symbol id="arrow_right_large1" viewbox="0 0 32 32">
			<path d="M9.176 30.488l-0.56-0.568 13.92-13.92-13.92-13.92 0.56-0.568 14.496 14.488-14.496 14.488z"></path>
		</symbol>

		<symbol id="arrow_right_large2" viewbox="0 0 32 32">
			<path d="M9.464 30.768l-1.136-1.128 13.64-13.64-13.64-13.64 1.136-1.128 14.768 14.768-14.768 14.768z"></path>
		</symbol>

		<symbol id="arrow_right_large3" viewbox="0 0 32 32">
			<path d="M9.232 31.336l-2.264-2.264 13.072-13.072-13.072-13.072 2.264-2.264 15.336 15.336-15.336 15.336z"></path>
		</symbol>



		<symbol id="arrow_left" viewbox="0 0 32 32">
			<path d="M19.72 26.28l-10.267-10.28 10.267-10.28 1.893 1.893-8.4 8.387 8.4 8.387-1.893 1.893z"></path>
		</symbol>

		<symbol id="arrow_left_w" viewbox="0 0 32 32">
			<path d="M24.053 26.28l-10.28-10.28 10.28-10.28 1.88 1.893-8.387 8.387 8.387 8.387-1.88 1.893z"></path>
			<path d="M15.4 26.28l-10.28-10.28 10.28-10.28 1.88 1.893-8.387 8.387 8.387 8.387-1.88 1.893z"></path>
		</symbol>

		<symbol id="arrow_left_line" viewbox="0 0 32 32">
			<path d="M25.427 14.667h-15.64l7.067-7.053-1.893-1.893-10.267 10.28 10.267 10.28 1.893-1.893-7.067-7.053h15.64v-2.667z"></path>
		</symbol>

		<symbol id="arrow_left_large1" viewbox="0 0 32 32">
			<path d="M22.816 30.488l-14.488-14.488 14.488-14.488 0.568 0.568-13.92 13.92 13.92 13.92-0.568 0.568z"></path>
		</symbol>

		<symbol id="arrow_left_large2" viewbox="0 0 32 32">
			<path d="M22.536 30.768l-14.768-14.768 14.768-14.768 1.136 1.128-13.64 13.64 13.64 13.64-1.136 1.128z"></path>
		</symbol>

		<symbol id="arrow_left_large3" viewbox="0 0 32 32">
			<path d="M22.768 31.336l-15.336-15.336 15.336-15.336 2.264 2.264-13.072 13.072 13.072 13.072-2.264 2.264z"></path>
		</symbol>



		<symbol id="arrow_up" viewbox="0 0 32 32">
			<path d="M24.387 21.613l-8.387-8.4-8.387 8.4-1.893-1.893 10.28-10.267 10.28 10.267-1.893 1.893z"></path>
		</symbol>

		<symbol id="arrow_up_line" viewbox="0 0 32 32">
			<path d="M26.28 14.96l-10.28-10.267-10.28 10.267 1.893 1.893 7.053-7.067v15.64h2.667v-15.64l7.053 7.067 1.893-1.893z"></path>
		</symbol>

		<symbol id="arrow_up_large1" viewbox="0 0 53 32">
			<path d="M49.867 28.307l-23.2-23.2-23.2 23.2-0.947-0.947 24.147-24.147 24.147 24.147-0.947 0.947z"></path>
		</symbol>

		<symbol id="arrow_up_large2" viewbox="0 0 53 32">
			<path d="M49.4 28.787l-22.733-22.733-22.733 22.733-1.893-1.893 24.627-24.613 24.627 24.613-1.893 1.893z"></path>
		</symbol>

		<symbol id="arrow_up_large3" viewbox="0 0 53 32">
			<path d="M48.453 31.053l-21.787-21.787-21.787 21.787-3.773-3.773 25.56-25.56 25.56 25.56-3.773 3.773z"></path>
		</symbol>



		<symbol id="arrow_down" viewbox="0 0 32 32">
			<path d="M16 22.547l-10.28-10.267 1.893-1.893 8.387 8.4 8.387-8.4 1.893 1.893-10.28 10.267z"></path>
		</symbol>

		<symbol id="arrow_line_down" viewbox="0 0 32 32">
			<path d="M24.387 15.147l-7.053 7.067v-15.64h-2.667v15.64l-7.053-7.067-1.893 1.893 10.28 10.267 10.28-10.267-1.893-1.893z"></path>
		</symbol>

		<symbol id="arrow_down_large1" viewbox="0 0 53 32">
			<path d="M26.667 28.787l-24.147-24.147 0.947-0.947 23.2 23.2 23.2-23.2 0.947 0.947-24.147 24.147z"></path>
		</symbol>

		<symbol id="arrow_down_large2" viewbox="0 0 53 32">
			<path d="M26.667 29.72l-24.627-24.613 1.893-1.88 22.733 22.72 22.733-22.72 1.893 1.88-24.627 24.613z"></path>
		</symbol>

		<symbol id="arrow_down_large3" viewbox="0 0 53 32">
			<path d="M26.667 30.28l-25.56-25.56 3.773-3.773 21.787 21.787 21.787-21.787 3.773 3.773-25.56 25.56z"></path>
		</symbol>



		<symbol id="arrow_bottom" viewbox="0 0 14 30">
			<path d="m0,0h6v26h-1v-1h-1v-1h-1v-1h-1v-1h-2zm8,0h6v22h-2v1h-1v1h-1v1h-1v1h-1zm-5,21h-1v1h1zm9,0h-1v1h1zm-7,2h-1v1h1zm5,0h-1v1h1zm-10,1h1v1h1v1h1v1h1v1h1v1h1v1h-6zm13,0h1v6h-6v-1h1v-1h1v-1h1v-1h1v-1h1zm-11,2h-1v1h1zm11,0h-1v1h1zm-9,2h-1v1h1zm7,0h-1v1h1z" opacity="0"/>
			<path d="m6,0h2v26h1v-1h1v-1h1v-1h1v-1h2v2h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-2v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-2h2v1h1v1h1v1h1v1h1z"/>
			<path d="m2,21h1v1h-1zm9,0h1v1h-1zm-7,2h1v1h-1zm5,0h1v1h-1zm-8,3h1v1h-1zm11,0h1v1h-1zm-9,2h1v1h-1zm7,0h1v1h-1z" fill="#aaa" opacity="0"/>
		</symbol>
		
		<symbol id="arrow_top" viewbox="0 0 14 30">
			<path d="m0 0h6v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1zm4 1h-1v1h1zm4-1h6v6h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1zm3 1h-1v1h1zm-9 2h-1v1h1zm11 0h-1v1h1zm-8 1h1v26h-6v-22h2v-1h1v-1h1v-1h1zm3 0h1v1h1v1h1v1h1v1h2v22h-6zm-3 2h-1v1h1zm5 0h-1v1h1zm-7 2h-1v1h1zm9 0h-1v1h1z" opacity="0"/>
			<path d="m6 0h2v1h1v1h1v1h1v1h1v1h1v1h1v2h-2v-1h-1v-1h-1v-1h-1v-1h-1v26h-2v-26h-1v1h-1v1h-1v1h-1v1h-2v-2h1v-1h1v-1h1v-1h1v-1h1v-1h1z"/>
			<path d="m3 1h1v1h-1zm7 0h1v1h-1zm-9 2h1v1h-1zm11 0h1v1h-1zm-8 3h1v1h-1zm5 0h1v1h-1zm-7 2h1v1h-1zm9 0h1v1h-1z" fill="#aaa" opacity="0"/>
		</symbol>
		
		<symbol id="arrow_btn" viewbox="0 0 30 8">
			<path d="m0 0h19v1h1v-1h1v1h1v1h1v1h1v1h1v1h1v1h-26zm24 0h6v6h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1zm3 1h-1v1h1zm-5 1h-1v1h1zm7 1h-1v1h1z" opacity="0"/>
			<path d="m19 0h1v1h-1zm7 1h1v1h-1zm-5 1h1v1h-1z" fill="#aaa" opacity="0"/>
			<path d="m21 0h3v1h1v1h1v1h1v1h1v1h1v1h1v2h-30v-2h26v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1z"/>
			<path d="m28 3h1v1h-1z" opacity="0"/>
		</symbol>
		
		<symbol id="arrow_link" viewbox="0 0 120 14">
			<path d="m0,0h106v2h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h-116zm108,0h12v12h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1z" opacity="0"/>
			<path d="m106,0h2v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v2h-120v-2h116v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1v-1h-1z"/>
		</symbol>
	</defs>
</svg>

<div id="loader-wrapper"><div id="loader"></div></div>
<header>
	<ul class="language">
		<li><a href="/">JP</a></li>
		<li><a href="/en/">EN</a></li>
		<li><a href="/ch/">CH</a></li>
	</ul>
	
	<div class="header_bar">
		<h1><a href="/"><img src="images/logo_head.svg" alt="sitename_replace"></a></h1>
		<ul class="header_logo">
			<li><a href="reserve.php">Menu1</a></li>
			<li><a href="/menu2/">Menu2</a></li>
			<li><a href="/menu3/">Menu3</a></li>
		</ul>
	</div><!-- /header_bar -->
	
	<div id="nav_btnwrapper"><div id="nav_btn"><span id="nav_btn_icon"></span></div></div>
	<nav>
		<div class="nav_inner">
			<a href="/"><img src="images/logo_nav.svg" alt="sitename____replace"></a>
			<ul>
				<li><span><a href="/Menu1">Menu1</a></span></li>
				<li>
					<span class="sp_toggle"><a href="/menu1/">Menu1</a></span>
					<ol>
						<li><a href="/menu2/submenu1"><svg><use xlink:href="#arrow_right"></use></svg>Menu2_Sub1</a></li>
						<li><a href="/menu2/submenu2"><svg><use xlink:href="#arrow_right"></use></svg>Menu2_Sub2</a></li>
						<li><a href="/menu2/submenu3"><svg><use xlink:href="#arrow_right"></use></svg>Menu2_Sub3</a></li>
					</ol>
				</li>
				<li>
					<span class="sp_toggle"><a href="/menu2/">Menu2</a></span>
					<ol>
						<li><a href="/menu3/submenu1"><svg><use xlink:href="#arrow_right"></use></svg>Menu3_Sub1</a></li>
						<li><a href="/menu3/submenu2"><svg><use xlink:href="#arrow_right"></use></svg>Menu3_Sub2</a></li>
						<li><a href="/menu3/submenu3"><svg><use xlink:href="#arrow_right"></use></svg>Menu3_Sub3</a></li>
						<li><a href="/menu3/submenu4"><svg><use xlink:href="#arrow_right"></use></svg>Menu3_Sub4</a></li>
					</ol>
				</li>
				<li>
				<span class="sp_toggle"><a href="/menu3/">Menu3</a></span>
					<ol>
						<li><a href="/menu4/submenu1"><svg><use xlink:href="#arrow_right"></use></svg>Menu4_Sub1</a></li>
						<li><a href="/menu4/submenu2"><svg><use xlink:href="#arrow_right"></use></svg>Menu4_Sub2</a></li>
						<li><a href="/menu4/submenu3"><svg><use xlink:href="#arrow_right"></use></svg>Menu4_Sub3</a></li>
						<li><a href="/menu4/submenu4"><svg><use xlink:href="#arrow_right"></use></svg>Menu4_Sub4</a></li>
					</ol>
				</li>

				<li><span><a href="/menu5">Menu5</a></span></li>
			</ul>
			<ul>
				<li><span><a href="/sidemenu1/">SideMenu1</a></span></li>
				<li><span><a href="/sidemenu2/">SideMenu2</a></span></li>
				<li><span><a href="/sidemenu3/">SideMenu3</a></span></li>
				<li><span><a href="/sidemenu4/">SideMenu4</a></span></li>
				<li><span><a href="/sidemenu5/">SideMenu5</a></span></li>
				<li class="nav_btn"><span><a href="/button1/">Button1<svg class="arrow_btn"><use xlink:href="#arrow_btn"></use></svg></a></span></li>
				<li class="nav_btn"><span><a href="/button2/">Button2<svg class="arrow_btn"><use xlink:href="#arrow_btn"></use></svg></a></span></li>
			</ul>
		</div>
	</nav>
</header>


<main>
	<section class="pankuzu"><div class="inner"><a href="/">TOP</a>&nbsp;&gt;&nbsp;pagename_replace</div></section>
	<section class="contents_ttl">
		<h2>pagename_replace</h2>
	</section>
	<section class="inner">
		<div class="contactCotainer">
			<div class="form_flow">
				<p class="active">入力</p>
				<p>内容確認</p>
				<p>送信完了</p>
			</div>
			<form id="application" action="./confirm.php" method="post">
				<div class="form_area">
					<dl> 
						<dt>お名前<span>必須</span></dt>
						<dd class="short<?php print_error_class("お名前", 0); ?>"><em>姓</em><input type="text" name="お名前" value="<?php print_post_session("お名前"); ?>" placeholder=""><em>名</em><input type="text" name="お名前・名" value="<?php print_post_session("お名前・名"); ?>" placeholder=""><?php print_error_each_message("お名前", "b"); ?>
						</dd>
						<dt>フリガナ<span>必須</span></dt>
						<dd class="short<?php print_error_class("フリガナ", 0); ?>"><em>姓</em><input type="text" name="フリガナ" value="<?php print_post_session("フリガナ"); ?>" placeholder=""><em>名</em><input type="text" name="フリガナ・名" value="<?php print_post_session("フリガナ・名"); ?>" placeholder=""><?php print_error_each_message("フリガナ", "b"); ?>
						</dd>
						<dt>性別<span>必須</span></dt>
						<dd<?php print_error_class("性別", 1); ?>>
							<label><input type="radio" name="性別" value="男性"<?php print_checked("性別", "男性"); ?>>男性</label>
							<label><input type="radio" name="性別" value="女性"<?php print_checked("性別", "女性"); ?>>女性</label><?php print_error_each_message("性別", "b"); ?>
						</dd>
						<dt>年齢<span>必須</span></dt>
						<dd<?php print_error_class("年齢", 1); ?>>
							<input type="number" name="年齢" value="<?php print_post_session("年齢"); ?>">歳<?php print_error_each_message("年齢", "b"); ?>
						</dd>
						<dt>電話番号<span>必須</span></dt>
						<dd<?php print_error_class("電話番号", 1); ?>>
							<input type="tel" inputmode="tel" name="電話番号" maxlength="4" value="<?php print_post_session("電話番号"); ?>"> - <input type="tel" inputmode="tel" name="電話番号2" maxlength="4" value="<?php print_post_session("電話番号2"); ?>"> - <input type="tel" inputmode="tel" name="電話番号3" maxlength="4" value="<?php print_post_session("電話番号3"); ?>"><span class="excuse">（半角英数字）</span><?php print_error_each_message("電話番号", "b"); ?>
							<p class="excuse">※ご連絡可能な電話番号をご記入ください。<br>※ご不在の場合は留守番電話にメッセージを残させていただく場合もございますのでご了承ください。</p>
						</dd>
						<dt>お電話可能な時間帯<span>必須</span></dt>
						<dd<?php print_error_class("お電話可能な時間帯", 1); ?>>
							<label><input type="radio" name="お電話可能な時間帯" value="10時～12時"<?php print_checked("お電話可能な時間帯", "10時～12時"); ?>>10時～12時</label>
							<label><input type="radio" name="お電話可能な時間帯" value="12時～13時"<?php print_checked("お電話可能な時間帯", "12時～13時"); ?>>12時～13時</label>
							<label><input type="radio" name="お電話可能な時間帯" value="13時～18時"<?php print_checked("お電話可能な時間帯", "13時～18時"); ?>>13時～18時</label>
							<label><input type="radio" name="お電話可能な時間帯" value="18時～19時"<?php print_checked("お電話可能な時間帯", "18時～19時"); ?>>18時～19時</label>
							<label><input type="radio" name="お電話可能な時間帯" value="何時でも"  <?php print_checked("お電話可能な時間帯", "何時でも"); ?>>何時でも</label><?php print_error_each_message("お電話可能な時間帯", "b"); ?>
						</dd>
						<dt>メールアドレス<span>必須</span></dt>
						<dd<?php print_error_class("メールアドレス", 1); ?>><input type="email" inputmode="email" name="メールアドレス" value="<?php print_post_session("メールアドレス"); ?>"><span class="excuse">（半角英数字）</span><?php print_error_each_message("メールアドレス", "b"); ?></dd>
						<dt>メールアドレス（確認）<span>必須</span></dt>
						<dd<?php print_error_class("メールアドレス（確認）", 1); ?>><input type="email" inputmode="email" name="メールアドレス（確認）" value="<?php print_post_session("メールアドレス（確認）"); ?>"><span class="excuse">（半角英数字）</span><?php print_error_each_message("メールアドレス（確認）", "b"); ?></dd>
						<dt>住所</dt>
						<dd<?php print_error_class("住所", 1); ?>><input type="text" name="住所" value="<?php print_post_session("住所"); ?>"><?php print_error_each_message("住所", "b"); ?></dd>
						<dt>かかりつけ</dt>
						<dd<?php print_error_class("かかりつけ", 1); ?>><input type="text" name="かかりつけ" value="<?php print_post_session("かかりつけ"); ?>" placeholder="かかりつけの病院はどちらですか？"><?php print_error_each_message("かかりつけ", "b"); ?></dd>
						<dt>ご紹介者</dt>
						<dd<?php print_error_class("ご紹介者", 1); ?>><input type="text" name="ご紹介者" value="<?php print_post_session("ご紹介者"); ?>" placeholder="ご紹介者様はいらっしゃいますか？"><?php print_error_each_message("ご紹介者", "b"); ?></dd>
						<dt>診察について<span>必須</span></dt>
						<dd<?php print_error_class("診察について", 1); ?>>
							<label><input type="radio" name="診察について" value="初診"<?php print_checked("診察について", "初診"); ?>>初診</label>
							<label><input type="radio" name="診察について" value="再診"<?php print_checked("診察について", "再診"); ?>>再診</label><?php print_error_each_message("診察について", "b"); ?>
						</dd>
						<dt>ご相談内容<span>必須</span></dt>
						<dd<?php print_error_class("ご相談内容", 1); ?>>
							<strong>がん先進治療</strong>
							<label><input type="checkbox" name="ご相談内容・がん先進治療[]"<?php echo $artmp["ご相談内容・がん先進治療"]["がん遺伝子治療"]; ?> value="がん遺伝子治療">がん遺伝子治療</label>
							<label><input type="checkbox" name="ご相談内容・がん先進治療[]"<?php echo $artmp["ご相談内容・がん先進治療"]["光がん免疫療法"]; ?> value="光がん免疫療法">光がん免疫療法</label>
							<label><input type="checkbox" name="ご相談内容・がん先進治療[]"<?php echo $artmp["ご相談内容・がん先進治療"]["高分子抗がん剤"]; ?> value="高分子抗がん剤">高分子抗がん剤</label>
							<label><input type="checkbox" name="ご相談内容・がん先進治療[]"<?php echo $artmp["ご相談内容・がん先進治療"]["血管塞栓療法"]; ?> value="血管塞栓療法">血管塞栓療法</label>
							<label><input type="checkbox" name="ご相談内容・がん先進治療[]"<?php echo $artmp["ご相談内容・がん先進治療"]["温熱療法"]; ?> value="温熱療法">温熱療法</label>
							<strong>がん予防・再発防止</strong>
							<label><input type="checkbox" name="ご相談内容・がん予防・再発防止[]"<?php echo $artmp["ご相談内容・がん予防・再発防止"]["光がん予防（LLLT）"]; ?> value="光がん予防（LLLT）">光がん予防（LLLT）</label>
							<label><input type="checkbox" name="ご相談内容・がん予防・再発防止[]"<?php echo $artmp["ご相談内容・がん予防・再発防止"]["遺伝子予防"]; ?> value="遺伝子予防">遺伝子予防</label>
							<label><input type="checkbox" name="ご相談内容・がん予防・再発防止[]"<?php echo $artmp["ご相談内容・がん予防・再発防止"]["アフェレーシス（血液浄化療法）"]; ?> value="アフェレーシス（血液浄化療法）">アフェレーシス（血液浄化療法）</label>
							<label><input type="checkbox" name="ご相談内容・がん予防・再発防止[]"<?php echo $artmp["ご相談内容・がん予防・再発防止"]["オゾン療法（血液クレンジング）"]; ?> value="オゾン療法（血液クレンジング）">オゾン療法（血液クレンジング）</label>
							<strong>がん超早期発見検査</strong>
							<label><input type="checkbox" name="ご相談内容・がん超早期発見検査[]"<?php echo $artmp["ご相談内容・がん超早期発見検査"]["CTC（血中循環がん細胞）検査"]; ?> value="CTC（血中循環がん細胞）検査">CTC（血中循環がん細胞）検査</label>
							<label><input type="checkbox" name="ご相談内容・がん超早期発見検査[]"<?php echo $artmp["ご相談内容・がん超早期発見検査"]["マイクロアレイ検査"]; ?> value="マイクロアレイ検査">マイクロアレイ検査</label>
							<label><input type="checkbox" name="ご相談内容・がん超早期発見検査[]"<?php echo $artmp["ご相談内容・がん超早期発見検査"]["プロテオ検査"]; ?> value="プロテオ検査">プロテオ検査</label>
							<label><input type="checkbox" name="ご相談内容・がん超早期発見検査[]"<?php echo $artmp["ご相談内容・がん超早期発見検査"]["サリバチェック"]; ?> value="サリバチェック">サリバチェック</label>
							<label><input type="checkbox" name="ご相談内容・がん超早期発見検査[]"<?php echo $artmp["ご相談内容・がん超早期発見検査"]["がん遺伝子検査"]; ?> value="がん遺伝子検査">がん遺伝子検査</label>
							<strong>その他</strong>
							<label><input type="checkbox" name="ご相談内容・その他[]"<?php echo $artmp["ご相談内容・その他"]["セカンドオピニオン"]; ?> value="セカンドオピニオン">セカンドオピニオン</label>
							<?php print_error_each_message("ご相談内容", "b"); ?>
						</dd>
						<dt>ご希望の診察日<span>必須</span></dt>
						<dd class="short<?php print_error_class("第一希望日", 0); ?>">
							<strong>第一希望</strong>
							<input type="text" id="datepicker1" name="第一希望日" value="<?php print_post_session("第一希望日"); ?>">
							<select name="第一希望時間">
								<option value="">お時間をお選びください</option>
								<option value="9:30〜10:30"<?php print_selected("第一希望時間", "9:30〜10:30"); ?>>9:30〜10:30</option>
								<option value="10:30〜11:30"<?php print_selected("第一希望時間", "10:30〜11:30"); ?>>10:30〜11:30</option>
								<option value="11:30〜12:30"<?php print_selected("第一希望時間", "11:30〜12:30"); ?>>11:30〜12:30</option>
								<option value="14:30〜15:30"<?php print_selected("第一希望時間", "14:30〜15:30"); ?>>14:30〜15:30</option>
								<option value="15:30〜16:30"<?php print_selected("第一希望時間", "15:30〜16:30"); ?>>15:30〜16:30</option>
								<option value="16:30〜17:30"<?php print_selected("第一希望時間", "16:30〜17:30"); ?>>16:30〜17:30</option>
								<option value="17:30〜18:30"<?php print_selected("第一希望時間", "17:30〜18:30"); ?>>17:30〜18:30</option>
							</select>
							<?php print_error_each_message("第一希望日", "b"); ?>
						</dd>
						<dd class="short<?php print_error_class("第二希望日", 0); ?>">
							<strong>第二希望</strong>
							<input type="text" id="datepicker2" name="第二希望日" value="<?php print_post_session("第二希望日"); ?>">
							<select name="第二希望時間">
								<option value="">お時間をお選びください</option>
								<option value="9:30〜10:30"<?php print_selected("第二希望時間", "9:30〜10:30"); ?>>9:30〜10:30</option>
								<option value="10:30〜11:30"<?php print_selected("第二希望時間", "10:30〜11:30"); ?>>10:30〜11:30</option>
								<option value="11:30〜12:30"<?php print_selected("第二希望時間", "11:30〜12:30"); ?>>11:30〜12:30</option>
								<option value="14:30〜15:30"<?php print_selected("第二希望時間", "14:30〜15:30"); ?>>14:30〜15:30</option>
								<option value="15:30〜16:30"<?php print_selected("第二希望時間", "15:30〜16:30"); ?>>15:30〜16:30</option>
								<option value="16:30〜17:30"<?php print_selected("第二希望時間", "16:30〜17:30"); ?>>16:30〜17:30</option>
								<option value="17:30〜18:30"<?php print_selected("第二希望時間", "17:30〜18:30"); ?>>17:30〜18:30</option>
							</select>
							<?php print_error_each_message("第二希望日", "b"); ?>
						</dd>
						<dt>その他</dt>
						<dd<?php print_error_class("その他", 1); ?>><textarea name="その他"><?php print_post_session("その他"); ?></textarea><?php print_error_each_message("その他", "b"); ?></dd>
					</dl>
				</div>
				
				<div class="attention">
					<h3>注意事項</h3>
					<p>こちらのフォームは仮のご予約受付です。ご入力いただいた連絡先に、当クリニックよりお電話かメールで折り返しご連絡させていただき、提示した日時のご了承を頂いた時点でご予約完了となります。</p>
					<p>・ご入力された内容に誤りがある場合、ご利用いただけない場合があります。<br>
						・メール送信後、内容確認メールが届かない場合は、再度ご記入いただくか、お電話でご予約ください。<br>
						・お電話でご連絡がつかない場合は、メールにてご連絡させていただくこともございますのでご確認くださいませ。<br>
						・お申込み（フォーム送信時間）より24時間が過ぎてもご本人様とご連絡がつかない場合は、自動的にキャンセルとなりますのでご注意くださいませ。<br>
						・お急ぎの方はお電話でもご予約を承ります。
					</p>
					<em>お電話でのお問い合せ</em>
					<p>TEL: <a href="tel:phonenumber___replace">PhoneNumber____replace</a><br>受付時間　9:30～18:30（月～金）</p>
					<em>メールアドレスの記載について</em>
					<p>携帯電話のメールアドレスで、迷惑メールの設定をされている場合、<a href="mailto:info@sitedomain.com">info@sitedomain.com</a>からの受信が行えるよう、設定のご確認をお願い致します。</p>
				</div>
				
				<div class="privacypolicy">
					<h3>プライバシーポリシー</h3>
					<div class="scroll">
						<p>SiteName____replace（以下当クリニック）は、個人の人格尊重の理念のもとに、ご利用される皆様のプライバシーを尊重し、個人情報の管理・保護に努めます。</p>
						<em>個人情報の収集について</em>
						<p>当クリニックが収集した個人情報は、ご利用者のお問い合わせやご相談への対応、医療サービスに対するご意見をいただくのに必要です。その他の目的に個人情報を利用する場合は、利用目的をあらかじめお知らせし、ご了解を得た上で実施致します。</p>
						<em>個人情報の利用について</em>
						<p>個人情報の利用にあたっては、その利用目的を特定することとし、特定された利用目的以外の利用はいたしません。</p>
						<em>個人情報の提供・開示について</em>
						<p>当クリニックでは、ご本人の同意を得ている場合を除き、取得した個人情報を第三者に提供することはいたしません。ただし、下記の項目に該当する場合、ご提供いただいた個人情報を開示することがあります。
							<span>・法令の規定による場合<br>情報主体または公衆の生命、健康、財産などの重大な利益を保護するために必要な場合</span>
							<span>・個人情報の管理<br>個人情報への不当なアクセスまたは個人情報の紛失、破壊、改ざん、漏洩等個人情報に関するリスクに対して、技術面および組織面において合理的な安全対策が必要な場合</span>
						</p>
						<em>個人情報に関する法令およびその他規範の遵守</em>
						<p>当クリニックは、個人情報保護を適切に実行する為に、「個人情報保護規定」を策定し、これを遵守いたします。また、院内規定・院内体制を定期的に見直し、継続的な維持改善に努めます。</p>
						<em>個人情報保護マネジメントシステムの継続的改善について</em>
						<p>当クリニックは、社会情勢・環境の変化を踏まえて、継続的に個人情報保護マネジメントシステムを見直し、 個人情報保護への取り組みを改善していきます。</p>
						<em>ホームページのクッキー（cookie）について</em>
						<p>サイトの最適化によるお客様サービスの向上を目的としたトラフィックデータの収集のため、当サイトではcookieの使用をしています。</p>
						<em>アクセスログ収集とその利用について</em>
						<p>本サイトでは、ご利用される皆様のアクセスをログ（履歴）として収集しております。これらのアクセスログは、サーバの運用状況や、ユーザー利便性向上のために利用され、それ以外の目的で利用されることはございません。</p>
						<em>内容改訂について</em>
						<p>当クリニックは「プライバシーポリシー」の内容を予告なく改訂する場合がございます。重要な改訂の場合、当ホームページ上にて皆様にお知らせいたします。</p>
						<em>個人情報の取扱いに関するお問合せについて</em>
						<p>当クリニックは、個人情報の取扱いに関する苦情及び相談を受けた場合は、その内容について迅速に事実関係等を調査し、 合理的な期間内に誠意をもって対応致します。当クリニックの個人情報の取扱いに関するご相談や苦情等のお問い合わせについては、 下記の窓口までご連絡いただきますよう、お願い申し上げます。</p>
						<em>［お問い合わせ先］</em>
						<p>SiteName___replace<br>TEL: <a href="tel:phonenumber___replace">PhoneNumber___replace</a><br>受付時間　9:30～18:30（月～金）</p>
					</div>
					<div class="privacypolicy_agree">
						<label><input type="checkbox" id="check" onclick="checkValue(this)">プライバシーポリシーに同意する</label>
					</div>
				</div>
				<div class="confirmBtn"><input type="submit" id="submit_go" class="disabled" value="内容を確認する" disabled="disabled"></div>
                <input type="hidden" name="token" value="<?php _h($_SESSION["token"]); ?>">
			</form>
		</div><!-- /contactCotainer -->
	</section><!-- /inner -->
</main>

<section class="contents_nav inner">
	<ul class="io fade upS">
		<li>
			<a href="/menu1/" class="flex_container">Menu1<small>Menu1</small></a>
			<ol>
				<li><a href="/menu1/sub1"><svg><use xlink:href="#arrow_right"></use></svg>Menu1_Sub1</a></li>
				<li><a href="/menu1/sub2"><svg><use xlink:href="#arrow_right"></use></svg>Menu1_Sub2</a></li>
				<li><a href="/menu1/sub3"><svg><use xlink:href="#arrow_right"></use></svg>Menu1_Sub3</a></li>
			</ol>
		</li>
		<li>
			<a href="/menu2/" class="flex_container">Menu2<small>Menu2</small></a>
			<ol>
				<li><a href="/menu2/sub1/"><svg><use xlink:href="#arrow_right"></use></svg>Menu2_Sub1</a></li>
				<li><a href="/menu2/sub2/"><svg><use xlink:href="#arrow_right"></use></svg>Menu2_Sub2</a></li>
				<li class="col1"><a href="/menu2/sub3/"><svg><use xlink:href="#arrow_right"></use></svg>Menu2_Sub3</a></li>
				<li class="col1"><a href="/menu2/sub4/"><svg><use xlink:href="#arrow_right"></use></svg>Menu2_Sub4</a></li>
				<li class="col1"><a href="/menu2/sub5/"><svg><use xlink:href="#arrow_right"></use></svg>Menu2_Sub5</a></li>
			</ol>
		</li>
		<li>
			<a href="/menu3/" class="flex_container">Menu3<small>Menu3</small></a>
			<ol>
				<li class="col1"><a href="/menu3/sub1"><svg><use xlink:href="#arrow_right"></use></svg>Menu3_Sub1</a></li>
				<li class="col1"><a href="/menu3/sub1"><svg><use xlink:href="#arrow_right"></use></svg>Menu3_Sub2</a></li>
			</ol>
		</li>
	</ul>
</section>
<div class="pagetop"><a href="#PAGETOP"><svg class="arrow_top"><use xlink:href="#arrow_top"></use></svg>TOP</a></div>
<footer class="io fade upS">

	<div class="footer_map">
		<a href="/access/">アクセス<small>ACCESS</small><svg class="arrow_btn"><use xlink:href="#arrow_btn"></use></svg></a>
	</div>
	<div class="footer_contact inner io fade upS" id="CONTACT">
		<h2 class="io fade upS">ご予約・お問い合わせ<small>RESERVE / CONTACT</small></h2>
		<p class="io fade upS">当クリニックを受診される際は、ご予約が必要です。<small>※当クリニックの治療は、自由診療となります。</small></p>
		<div class="io fade upS">
			<h3><span>医療法人 紀隆会</span>SiteName____replace</h3>
			<div class="footer_contact_tel">
				<em>連絡先</em>
				<p><a href="tel:phonenumber___replace" class="tel"><svg class="icon_phone"><use xlink:href="#icon_phone"></use></svg>PhoneNumber___replace</a><small>受付時間　9:30〜18:30（月〜金）</small></p>
				<p><a href="mapaddress___replace" target="_blank">Address___replace</a></p>
			</div>
			<div class="footer_contact_time">
				<em>診察時間</em>
				<table>
					<tr><th></th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th></tr>
					<tr><th>午前<small>9:30〜13:00</small></th><td>&#9675;</td><td>&#9675;</td><td>&#9675;</td><td>&#9675;</td><td>&#9675;</td><td>&#10005;</td><td>&#10005;</td></tr>
					<tr><th>午後<small>14:30〜18:30</small></th><td>&#9675;</td><td>&#9675;</td><td>&#9675;</td><td>&#9675;</td><td>&#9675;</td><td>&#10005;</td><td>&#10005;</td></tr>
				</table>
				<small>休診日　土曜・日曜・祝日</small>
			</div>
		</div>
		<div class="footer_link io fade upS">
			<div><a href="/reserve/">ご予約<svg class="arrow_btn"><use xlink:href="#arrow_btn"></use></svg></a></div>
			<div><a href="/contact/">お問い合わせ<svg class="arrow_btn"><use xlink:href="#arrow_btn"></use></svg></a></div>
		</div>
		<div class="footer_nav io fade upS">
			<ul>
				<li><a href="/menu1">&raquo;&nbsp;Menu1</a></li>
				<li><a href="/menu2/">&raquo;&nbsp;Menu2</a></li>
				<li><a href="/menu3/">&raquo;&nbsp;Menu3</a></li>
			</ul>
			<ul>
				<li><a href="/menu4/">&raquo;&nbsp;Menu4</a></li>
				<li><a href="/menu5/">&raquo;&nbsp;Menu5</a></li>
				<li><a href="/menu6/">&raquo;&nbsp;Menu6</a></li>
			</ul>
			<ul>
				<li><a href="/menu7/">&raquo;&nbsp;Menu7</a></li>
				<li><a href="/menu8/">&raquo;&nbsp;Menu8</a></li>
				<li><a href="/menu9/">&raquo;&nbsp;Menu9</a></li>
				<li><a href="/menu10/">&raquo;&nbsp;Menu10</a></li>
			</ul>
			<ul>
				<li><a href="/menu11/">&raquo;&nbsp;Menu11</a></li>
				<li><a href="/menu12/">&raquo;&nbsp;Menu12</a></li>
				<li><a href="/menu13/">&raquo;&nbsp;Menu13</a></li>
			</ul>
		</div>
	</div><!-- /inner -->
	<ul class="language">
		<li><a href="/">JP</a></li>
		<li><a href="/en/">EN</a></li>
		<li><a href="/ch/">CH</a></li>
	</ul>
	<div class="footer_copyright">&copy; Copyright___replace</div>
</footer>

<!-- SmoothScroll -->
<script src="js/smooth-scroll.polyfills.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]', {
		speed: 400,
		easing:'easeOutQuint'
	});
</script>

</body>
</html>
<?php
// 不要セッションの削除
unset($_SESSION["post"]);
unset($_SESSION["error"]);
