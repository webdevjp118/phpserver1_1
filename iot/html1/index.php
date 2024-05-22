<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<title>YUKIMI</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="css/fonts.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://use.typekit.net/hrj3xmc.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.default.css" rel="stylesheet">
<link href="css/swiper.min.css" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/loading.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    
    $to      = 'info-iot@axelmark.net';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    お問い合わせ内容 : ".$field3."<br>
    お問い合わせ詳細 : <br>".$field4."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Success!");</script>';
    } else {
        echo '<script>alert("Failed!");</script>';
    }  
}
?>
<body>
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header" class="">
        <div class="header_set">
            <a href="index.php" class="header_logo">
                <img class="headlogo_white" src="images/logo_white.svg">
                <img class="headlogo_green" src="images/logo_white.svg">
            </a>
            <div class="header_menu">
                <a class="headmenu_a" href="index.php#anchor_feature">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">特長</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="index.php#anchor_strength">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">強み</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="works.html">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">活用事例</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="index.php#anchor_function">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">機能</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="index.php#anchor_faq">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">よくある質問</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a headmenu_contact" href="index.php#anchor_contact">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">お問い合わせ</div>
                    </div>
                </a>
            </div>
            <div class="hamburger_set js_hamburger">
                <a href="javascript:void(0)">
                    <div class="hamburger_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
    </header>
</div>
<!-- HEADER_END -->
<!-- CONTAIN_START -->
<!-- <div class="state_vals header_video"></div> -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="banner_block_tp">
        <div class="banner_left_tp">
            <div class="banner_content_tp">
                <h1>使いやすさで選ばれる<br>
                    豪雪地帯の積雪深<br>
                    監視システム</h1>
                <div class="banner_contact_tp"><a href="#anchor_contact">お問い合わせ</a></div>
                <p>無料相談会に申し込む(自治体向け)</p>
            </div>
        </div>
        <div class="banner_right_tp">
            <img src="images/banner_computer.png">
        </div>
        <div class="clearfix"></div>
    </div> 
    <div class="hx8"></div>
    <div class="c_width12">
        <div class="news_title_tp initani initani_ww">
            <div class="combg_title" style="background-image: url(images/txt_news.svg);">
                <h2>お知らせ</h2>
            </div>
        </div>
        <div class="hx6"></div>
        <div class="news_block_tp">
            <a href="news.html" class="js_opac">
                <div class="bline_hover">
                    <div class="news_row_tp">
                        <div class="news_left_tp">
                            <div class="news_date_tp">2023年4月1日</div>
                            <div class="news_cat_tp"><span>カテゴリー</span></div>
                        </div>
                        <div class="news_right_tp">
                            <p>ここにニュースタイトルのテキストがあります。</p>
                        </div>
                    </div>
                    <div class="news_arrow_tp"><img src="images/news_arrow.svg"></div>
                </div>
            </a>
            <a href="news.html" class="js_opac">
                <div class="bline_hover">
                    <div class="news_row_tp">
                        <div class="news_left_tp">
                            <div class="news_date_tp">2023年4月1日</div>
                            <div class="news_cat_tp"><span>カテゴリー</span></div>
                        </div>
                        <div class="news_right_tp">
                            <p>ここにニュースタイトルのテキストがあります。</p>
                        </div>
                    </div>
                    <div class="news_arrow_tp"><img src="images/news_arrow.svg"></div>
                </div>
            </a>
            <a href="news.html" class="js_opac">
                <div class="bline_hover">
                    <div class="news_row_tp">
                        <div class="news_left_tp">
                            <div class="news_date_tp">2023年4月1日</div>
                            <div class="news_cat_tp"><span>カテゴリー</span></div>
                        </div>
                        <div class="news_right_tp">
                            <p>ここにニュースタイトルのテキストがあります。</p>
                        </div>
                    </div>
                    <div class="news_arrow_tp"><img src="images/news_arrow.svg"></div>
                </div>
            </a>
            <a href="news.html" class="js_opac">
                <div class="bline_hover">
                    <div class="news_row_tp">
                        <div class="news_left_tp">
                            <div class="news_date_tp">2023年4月1日</div>
                            <div class="news_cat_tp"><span>カテゴリー</span></div>
                        </div>
                        <div class="news_right_tp">
                            <p>ここにニュースタイトルのテキストがあります。</p>
                        </div>
                    </div>
                    <div class="news_arrow_tp"><img src="images/news_arrow.svg"></div>
                </div>
            </a>
            <a href="news.html" class="js_opac">
                <div class="bline_hover">
                    <div class="news_row_tp">
                        <div class="news_left_tp">
                            <div class="news_date_tp">2023年4月1日</div>
                            <div class="news_cat_tp"><span>カテゴリー</span></div>
                        </div>
                        <div class="news_right_tp">
                            <p>ここにニュースタイトルのテキストがあります。</p>
                        </div>
                    </div>
                    <div class="news_arrow_tp"><img src="images/news_arrow.svg"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="c_width12">
        <div class="pmh_anchor" id="anchor_feature"></div>
        <div class="feature_title_tp initani initani_ww">
            <div class="combg_title" style="background-image: url(images/txt_feature.svg);">
                <h2>YUKIMIの特長</h2>
            </div>
        </div>
        <div class="hx6"></div>
        <div class="feature_grid_tp">
            <div class="feature_item_tp initani _0072BC_FFF anistart">
                <div class="featitem_title_tp">
                    <h3>簡単設置</h3>
                </div>
                <div class="featitem_img_tp">
                    <img src="images/tpfeature01.png">
                </div>
                <div class="featitem_subtitle_tp" data-mh="featitem_subtitle_tp">
                    <h4>少ない工具でだれでも簡単に</h4>
                </div>
                <div class="hx2"></div>
                <div class="featitem_text_tp">
                    <p>既存の支柱に付属のアタッチメントで固定することで簡単に設置できます。<br>
                        通信機能はセンサー内蔵、電源供給はバッテリー稼働にて冬季4か月連続稼働できます。</p>
                </div>
            </div>
            <div class="feature_item_tp initani _0072BC_FFF anistart">
                <div class="featitem_title_tp">
                    <h3>24時間遠隔監視</h3>
                </div>
                <div class="featitem_img_tp">
                    <img src="images/tpfeature02.png">
                </div>
                <div class="featitem_subtitle_tp" data-mh="featitem_subtitle_tp">
                    <h4>パソコン、スマートホンで<br>
                        各地の積雪深をいつでも確認</h4>
                </div>
                <div class="hx2"></div>
                <div class="featitem_text_tp">
                    <p>センサー設置地点の積雪深を24時間遠隔監視し、パソコン、スマホで確認できます。<br>
                        また、基準値を超えた場合、登録したメールアドレスにアラート通知を送ることで、除雪のための見回り作業を軽減します。</p>
                </div>
            </div>
            <div class="feature_item_tp initani _0072BC_FFF anistart">
                <div class="featitem_title_tp">
                    <h3>低コスト化</h3>
                </div>
                <div class="featitem_img_tp">
                    <img src="images/tpfeature03.png">
                </div>
                <div class="featitem_subtitle_tp" data-mh="featitem_subtitle_tp">
                    <h4>共通基盤システムの開発</h4>
                </div>
                <div class="hx2"></div>
                <div class="featitem_text_tp">
                    <p>共通基盤を用いてソフトウェア開発を行うことで導入コストを低減。<br>
                        誰でもカンタン便利に利用できるシステム画面の構築 を目指し、様々な環境から得たデータを集約。<br>
                        より良いアップデートを進めております。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hx4"></div>
    <div class="strength_block">
        <div class="c_width12">
            <div class="hx6"></div>
            <div class="pmh_anchor" id="anchor_strength"></div>
            <div class="strength_title_tp initani _F8FAFD">
                <div class="combg_title" style="background-image: url(images/txt_strength.svg);">
                    <h2>YUKIMIの強み</h2>
                </div>
            </div>
            <div class="hx8"></div>
            <div class="strength_grid">
                <div class="strength_item">
                    <div class="streitem_inner initani initani_ww">
                        <div class="streitem_title">
                            <h3>見回りにかかる労力の軽減</h3>
                        </div>
                        <div class="hx2"></div>
                        <div class="streitem_img">
                            <img src="images/tpstrength01.png">
                        </div>
                        <div class="hx2"></div>
                        <div class="streitem_text">
                            <p>ここに概要テキストがあります。ここに概要テキストがあります。ここに概要テキストがあります。</p>
                        </div>
                    </div>
                    <div class="streitem_no">01</div>
                </div>
                <div class="strength_item">
                    <div class="streitem_inner initani initani_ww">
                        <div class="streitem_title">
                            <h3>データを活用した除雪車の出動判断</h3>
                        </div>
                        <div class="hx2"></div>
                        <div class="streitem_img">
                            <img src="images/tpstrength02.png">
                        </div>
                        <div class="hx2"></div>
                        <div class="streitem_text">
                            <p>ここに概要テキストがあります。ここに概要テキストがあります。ここに概要テキストがあります。</p>
                        </div>
                    </div>
                    <div class="streitem_no">02</div>
                </div>
                <div class="strength_item">
                    <div class="streitem_inner initani initani_ww">
                        <div class="streitem_title">
                            <h3>人的リソース不足の解消</h3>
                        </div>
                        <div class="hx2"></div>
                        <div class="streitem_img">
                            <img src="images/tpstrength03.png">
                        </div>
                        <div class="hx2"></div>
                        <div class="streitem_text">
                            <p>ここに概要テキストがあります。ここに概要テキストがあります。ここに概要テキストがあります。</p>
                        </div>
                    </div>
                    <div class="streitem_no">03</div>
                </div>
                <div class="strength_item">
                    <div class="streitem_inner initani initani_ww">
                        <div class="streitem_title">
                            <h3>人の立入りが困難な状況でも計測が可能</h3>
                        </div>
                        <div class="hx2"></div>
                        <div class="streitem_img">
                            <img src="images/tpstrength04.png">
                        </div>
                        <div class="hx2"></div>
                        <div class="streitem_text">
                            <p>ここに概要テキストがあります。ここに概要テキストがあります。ここに概要テキストがあります。</p>
                        </div>
                    </div>
                    <div class="streitem_no">04</div>
                </div>
            </div>
        </div>
    </div>
    <div class="hx8"></div>
    <div class="c_width12">
        <div class="pmh_anchor" id="anchor_work"></div>
        <div class="work_title_tp initani initani_ww">
            <div class="combg_title" style="background-image: url(images/txt_work.svg);">
                <h2>活用事例</h2>
            </div>
        </div>
        <div class="hx6"></div>
        <div class="work_subtitle_tp js_opac">
            <h3>レポート共有、実機デモのリクエスト受付中</h3>
        </div>
        <div class="hx2"></div>
        <div class="work_text_tp js_opac">
            <p>現在、アクセルマークでは 「人的、時間的リソース不足の解消」と 「除雪車の効率的な出動判断」の実現を目指して、積雪深遠隔モニタリングシステムYUKIMIをリリースしました。</p>
        </div>
        <div class="hx4"></div>
        <div class="work_grid">
            <div class="work_item initani initani_ww">
                <div class="workitem_img">
                    <img src="images/tpwork01.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
            <div class="work_item initani initani_ww">
                <div class="workitem_img">
                    <img src="images/tpwork02.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
            <div class="work_item initani initani_ww anistart">
                <div class="workitem_img">
                    <img src="images/tpwork03.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
            <div class="work_item initani initani_ww anistart">
                <div class="workitem_img">
                    <img src="images/tpwork04.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
            <div class="work_item initani initani_ww anistart">
                <div class="workitem_img">
                    <img src="images/tpwork05.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
            <div class="work_item initani initani_ww anistart">
                <div class="workitem_img">
                    <img src="images/tpwork06.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
            <div class="work_item initani initani_ww anistart">
                <div class="workitem_img">
                    <img src="images/tpwork07.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
            <div class="work_item initani initani_ww anistart">
                <div class="workitem_img">
                    <img src="images/tpwork08.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
            <div class="work_item initani initani_ww anistart">
                <div class="workitem_img">
                    <img src="images/tpwork09.png">
                </div>
                <div class="hx3"></div>
                <div class="work_company">場所会社名テキスト</div>
                <div class="hx2"></div>
                <div class="workitem_title">
                    <h3>ここにタイトルテキストがあります。ここにタイトルテキストがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="work_catrow">
                    <div class="work_cat">サービステキスト</div>
                    <a href="work.html">▸ 詳細を見る</a>
                </div>
            </div>
        </div>
        <div class="hx2"></div>
        <div class="work_btn_tp">
            <div class="company_btn_tp js_opac on">
                <a class="com_job_btn" href="works.html">
                    <span>活用事例一覧</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7">
                        <circle id="Ellipse_1" data-name="Ellipse 1" cx="3.5" cy="3.5" r="3.5"></circle>
                    </svg>
                </a>
            </div>
        </div>
        <div class="hx6"></div>
        <div class="work_desc_tp">
            <p>全国30自治体での実証実験を通じて蓄積されたデータに基づき、各種環境での性能を検証し、品質を向上させました。<br>
                自治体、そして除雪に関わるすべての方々に、より円滑な除雪作業とリソース管理を実現するソリューションとしてぜひご活用ください。</p>
        </div>
        <div class="hx4"></div>
        <div class="work_download_tp">
            <p>詳しいサービス資料や実績をまとめた レポートの共有も行っておりますのでご関心ございましたらお気軽にお問合せください。</p>
        </div>
    </div>
    <div class="hx8"></div>
    <div class="function_block_tp">
        <div class="c_width12">
            <div class="hx8"></div>
            <div class="pmh_anchor" id="anchor_function"></div>
            <div class="function_title_tp initani _F8FAFD">
                <div class="combg_title" style="background-image: url(images/txt_function.svg);">
                    <h2>YUKIMIの機能</h2>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="function_row_tp">
                <div class="function_left_tp initani _F8FAFD">
                    <img src="images/tpfunction.svg">
                </div>
                <div class="function_right_tp initani _F8FAFD">
                    <div class="function_subtitle_tp">
                        <h3>積雪深自動モニタリングシステムYUKIMIとは</h3>
                    </div>
                    <div class="hx3"></div>
                    <div class="function_text_tp">
                        <p>「積雪深計測センサー」と「データ閲覧システム」が
                            一体になったモニタリングシステムです。<br>
                            <br>
                            各地点の積雪深を遠隔で計測し、
                            職場や自宅からいつでも、パソコン、スマホで確認。
                            目視が必要だった積雪深見回りを自動化し、
                            「人材の確保」「迅速な除雪判断」「除雪業務の効率化」を図ります。</p>
                    </div>
                </div>
            </div>
            <div class="hx6"></div>
        </div>
    </div>
    <div class="hx8"></div>
    <div class="c_width12">
        <div class="pmh_anchor" id="anchor_faq"></div>
        <div class="function_title_tp initani initani_ww">
            <div class="combg_title" style="background-image: url(images/txt_faq.svg);">
                <h2>よくある質問</h2>
            </div>
        </div>
        <div class="hx4"></div>
        <div class="faq_grid_tp">
            <div class="faq_item_tp js_opac">
                <div class="faq_title_tp">
                    <span>Q</span><h3>ここに質問タイトルがあります。ここに質問タイトルがあります。ここに質問タイトルがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="faq_text_tp"><p>ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。</p></div>
            </div>
            <div class="faq_item_tp js_opac">
                <div class="faq_title_tp">
                    <span>Q</span><h3>ここに質問タイトルがあります。ここに質問タイトルがあります。ここに質問タイトルがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="faq_text_tp"><p>ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。</p></div>
            </div>
            <div class="faq_item_tp js_opac">
                <div class="faq_title_tp">
                    <span>Q</span><h3>ここに質問タイトルがあります。ここに質問タイトルがあります。ここに質問タイトルがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="faq_text_tp"><p>ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。</p></div>
            </div>
            <div class="faq_item_tp js_opac">
                <div class="faq_title_tp">
                    <span>Q</span><h3>ここに質問タイトルがあります。ここに質問タイトルがあります。ここに質問タイトルがあります。</h3>
                </div>
                <div class="hx2"></div>
                <div class="faq_text_tp"><p>ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。ここに返事があります。</p></div>
            </div>
        </div>
        <div class="hx6"></div>
    </div>
    <div class="contact_block_tp">
        <div class="hx6"></div>
        <div class="pmh_anchor" id="anchor_contact"></div>
        <div class="contact_title_tp initani _739ED1">
            <div class="combg_title" style="background-image: url(images/txt_contact.svg);">
                <h2>お問い合わせ</h2>
            </div>
        </div>
        <div class="c_width9">
            <div class="other_contact_tp">
                <div class="othercontact_row_tp">
                    <a class="othercontact_phone_tp" href="tel:03-5354-3351">
                        03-5354-3351
                    </a>
                    <div class="othercontact_fax_tp">
                        03-5354-3351
                    </div>
                    <a class="othercontact_mail_tp" href="mailto:info-iot@axelmark.net">
                        info-iot@axelmark.net
                    </a>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="contactform_block">
                    <div class="form_field">
                        <div class="field_cap">お名前</div>
                        <div class="field_control">
                            <input type="text" name="field1" required>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">メールアドレス（返信用）</div>
                        <div class="field_control">
                            <input type="email" name="field2" required>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">お問い合わせ内容</div>
                        <div class="field_control">
                            <div class="fieldcheck_item">
                                <input name="field3" value="センサーのデモが見てみたい" id="checkbox1" type="checkbox" class="com_checkbox" required>
                                <label for="checkbox1">センサーのデモが見てみたい</label>
                            </div>
                            <div class="fieldcheck_item">
                                <input name="field3" value="価格が知りたい" id="checkbox2" type="checkbox" class="com_checkbox">
                                <label for="checkbox2">価格が知りたい</label>
                            </div>
                            <div class="fieldcheck_item">
                                <input name="field3" value="資料がほしい" id="checkbox3" type="checkbox" class="com_checkbox">
                                <label for="checkbox3">資料がほしい</label>
                            </div>
                            <div class="fieldcheck_item">
                                <input name="field3" value="詳しい説明を聞きたい" id="checkbox4" type="checkbox" class="com_checkbox">
                                <label for="checkbox4">詳しい説明を聞きたい</label>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">そのほかご要望</div>
                        <div class="field_control">
                            <textarea name="field4" required></textarea>
                        </div>
                    </div>
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <input type="submit" value="送　信">
                    </div>
                </div>
            </form>
            <div class="hx6"></div>
        </div>
    </div>
</section>
<!-- CONTAIN_END -->
<!-- FOOTER_START -->
<footer id="footer">
    <div class="footer_block">
        <div class="page_top" id="gototop">
            <img src="images/page_top.svg">
        </div>
        <div class="footer_wrap">
            <div class="footer_row">
                <div class="footer_logo"> 
                    <a href="index.php">
                        <img src="images/logo_vert.svg" alt=""/>
                    </a>
                </div>
                <div class="footer_menu">
                    <ul class="footmenu_ul">
                        <li>
                            <div class="footmenu_shape">
                                <a href="index.php#anchor_feature">
                                    <div class="footmenu_cap">特長</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="index.php#anchor_strength">
                                    <div class="footmenu_cap">強み</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="works.html">
                                    <div class="footmenu_cap">活用事例</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="index.php#anchor_function">
                                    <div class="footmenu_cap">機能</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="index.php#anchor_faq">
                                    <div class="footmenu_cap">よくある質問</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright"><div class="copyright_link"><a href="https://www.axelmark.co.jp/">コーポレートページ</a><a href="https://www.axelmark.co.jp/privacy/">個人情報について</a></div><span>©AXELMARK INC.</span></div>
        </div>        
    </div>
</footer>
<!-- FOOTER_END -->
</div>

<script src="js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/theaterJS.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.matchHeight.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
