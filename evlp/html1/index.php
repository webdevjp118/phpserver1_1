<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>00_top</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="css/fonts.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.default.css" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/loading.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';

    $to      = 'info@gmail.com';

    $message = "
    氏名 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    電話番号 : ".$field3."<br>
    題名 : ".$field4."<br>
    メッセージ本文 : <br>".$field5."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Success!"); location.href="'.home_url().'"</script>';
    } else {
        echo '<script>alert("Failed!"); location.href="'.home_url().'"</script>';
    } 
}
?>
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header" class="">
        <div class="header_set">
            <div class="header_left">
                <a class="header_logo">
                    <img class="headlogo_white" src="images/logo.svg">
                    <img class="headlogo_green" src="images/logo.svg">
                </a>
            </div>
            <div class="header_menu">
                <a class="headmenu_a" href="#purpose">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">Purpose</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="#feature">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">Feature</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="#spec">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">Spec</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="#qa">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">Q&A</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="#voice">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">Voice</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="#company">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">Company</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="#contact">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">Contact</div>
                        <div class="headmenu_uline"></div>
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
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="top_fv">
        <div class="topfv_bg">
            <img class="topfv_img" src="images/top_fv.jpg">
            <img class="topfv_img991" src="images/sptop_fv.jpg">
        </div>
        <div class="topfv_deco1"></div>
        <div class="topfv_deco2"></div>
        <div class="topfv_title">
            <h1>
                <span>さあ！新しい</span>
                <span>乗り物ライフを</span>
                <span>始めよう！</span>
            </h1>
        </div>
        <div class="topfv_text">
            スマートな移動手段で、毎日をエコに、そして快適に変えるマイクロモビリティ。<br>
            あなたの日常をもっと便利にもっと楽しく。今日から、未来の風を感じてみませんか？
        </div>
    </div>
    <div class="scene_block">
        <div class="hx10"></div>
        <div class="pmh_anchor" id="purpose"></div>
        <div class="centered_title">
            <div class="common_title_hp">
                <div><h2 class="pamako">Use Scene</h2></div>
                <div><p class="pamako">利用シーン</p></div>
            </div>
        </div>
        <div class="hx4"></div>
        <div class="scene_row">
            <div class="scene_img">
                <div class="scene_img1" style="background-image: url(images/scene01.jpg);"></div>
            </div>
            <div class="scene_text">
                <div class="scene_text1">
                    <div class="scene_subtle"><h3 class="pamako"><span>地方で</span>の利用</h3></div>
                    <div><p class="pamako">車がすれ違えないような狭い道も、EV 三輪なら問題なし。快適な走行性と安定性で、移動が楽々。地域コミュニティの新しい足として、EV 三輪は皆の生活を豊かに彩ります。</p></div>
                </div>
            </div>
        </div>
        <div class="scene_row X_r">
            <div class="scene_img X_r">
                <div class="scene_img1 X_right" style="background-image: url(images/scene02.jpg);"></div>
            </div>
            <div class="scene_text X_left">
                <div class="scene_text1">
                    <div class="scene_subtle X_r"><h3 class="pamako"><span>離島で</span>の利用</h3></div>
                    <div><p class="pamako">絶景の離島の道を EV 三輪が軽やかに駆け抜けます。限られたスペースでもそのコンパクトさが光るこの車両は、島の観光に新たな移動の楽しさをもたらします。ちょっとした買い物から島の魅力を巡る冒険まで、EV 三輪は離島の時間をより便利で魅力的なものにします。</p></div>
                </div>
            </div>
        </div>
        <div class="scene_row">
            <div class="scene_img">
                <div class="scene_img1" style="background-image: url(images/scene03.jpg);"></div>
            </div>
            <div class="scene_text">
                <div class="scene_text1">
                    <div class="scene_subtle"><h3 class="pamako"><span>観光地で</span>の利用</h3></div>
                    <div><p class="pamako">EV 三輪は観光地での新たな移動手段としてぴったり。その静かで快適な走行は、観光客に新しい体験を提供します。自然保護区や歴史的な場所を巡る際にも、そのエコフレンドリーな特性が魅力をさらに高めます。観光地の探索が、EV 三輪でより楽しく、深いものに変わります。</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="feature_rel">
        <div class="feature_abs"></div>
        <div class="feature_front">
            <div class="cwidth12">
                <div class="pmh_anchor" id="feature"></div>
                <div class="centered_title">
                    <div class="common_title_hp">
                        <div><h2 class="pamako">Feature</h2></div>
                        <div><p class="pamako">製品の特徴</p></div>
                    </div>
                </div>
                <div class="hx4"></div>
                <div class="feature_row">
                    <div class="feature_col pamako">
                        <div class="feature_img"><img src="images/feature01.jpg"></div>
                        <div class="hx1"></div>
                        <h3>普通免許で運転できる手軽さ</h3>
                        <p>普通自動車免許があれば、EV 三輪を運転できます。特別なバイクの免許や追加の訓練は不要で、レンタカー感覚で EV 三輪をお試しいただけます。EV三輪で新しい運転の楽しみを発見しましょう。</p>
                    </div>
                    <div class="feature_col pamako">
                        <div class="feature_img"><img src="images/feature02.jpg"></div>
                        <div class="hx1"></div>
                        <h3>環境に優しいエコな走り</h3>
                        <p>EV 三輪車はガソリンを使わず、CO2 排出量を削減します。静かでクリーンな走行は騒音を減らし、より快適な生活環境を提供します。あなたの一日一日が、地球環境に優しい選択となります。</p>
                    </div>
                    <div class="feature_col pamako">
                        <div class="feature_img"><img src="images/feature03.jpg"></div>
                        <div class="hx1"></div>
                        <h3>普通免許で運転できる手軽さ</h3>
                        <p>荷物も人もしっかり載せられる EV 三輪。ショッピングからキャンプ、レジャーまで、あらゆるシーンで大活躍。限られたスペースでもその小回りの良さが光ります。一人でも、大切な人と一緒でも、EV 三輪はあなたの日常を支え、彩ります。</p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="hx10"></div>
    <div class="pmh_anchor" id="spec"></div>
    <div class="centered_title">
        <div class="common_title_hp">
            <div><h2 class="pamako">Spec</h2></div>
            <div><p class="pamako">技術仕様</p></div>
        </div>
    </div>
    <div class="hx4"></div>
    <div class="spec_width">
        <div class="spec_col">
            <div class="spec_row pamako">
                <div class="spec_th">サイズ</div>
                <div class="spec_td"><span>高さ 1,270mm、</span><span>幅 1,000mm、</span><span>全長 1,980m</span></div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">車両重量</div>
                <div class="spec_td">67.5kg</div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">最大速度</div>
                <div class="spec_td">30km/h</div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">充電時間（フル）</div>
                <div class="spec_td">4時間</div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">充電時航続距離</div>
                <div class="spec_td">30km</div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">耐荷重</div>
                <div class="spec_td">200kg</div>
            </div>
        </div>
        <div class="spec_col X_r">
            <div class="spec_row pamako">
                <div class="spec_th">サスペンション</div>
                <div class="spec_td">F：コイル式<br>R：コイル式</div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">ブレーキ</div>
                <div class="spec_td">F：ディスク<br>R：ダブルディスク</div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">タイヤサイズ</div>
                <div class="spec_td">F：225.55-8<br>R：225.55-8</div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">バッテリー</div>
                <div class="spec_td">60V/12Ahリチウムイオン</div>
            </div>
            <div class="spec_row pamako">
                <div class="spec_th">出力</div>
                <div class="spec_td">定格出力 590W<br>最大出力1,600W</div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="pmh_anchor" id="qa"></div>
    <div class="centered_title">
        <div class="common_title_hp">
            <div><h2 class="pamako">Q & A</h2></div>
            <div><p class="pamako">よくある質問</p></div>
        </div>
    </div>
    <div class="hx4"></div>
    <div class="cwidth12">
        <div class="faq_row">
            <div class="faq_headed pamako">
                <div class="faq_q">Q</div>
                <div class="faq_title">電動モビリティって免許は必要？</div>
            </div>
            <div class="hx2"></div>
            <div class="faq_headed pamako">
                <div class="faq_a">A</div>
                <div class="faq_text">車種により異なりますが、免許不要、原動機付自転車免許、普通自動車運転免許の３タイプがございます。詳しくは各商品の基本情報＞運転免許欄をご確認ください。</div>
            </div>
        </div>
        <div class="faq_row">
            <div class="faq_headed pamako">
                <div class="faq_q">Q</div>
                <div class="faq_title">どのぐらいスピードがでるの？</div>
            </div>
            <div class="hx2"></div>
            <div class="faq_headed pamako">
                <div class="faq_a">A</div>
                <div class="faq_text">２輪タイプは時速30km前後、３輪・４輪タイプは時速60km～90kmほどが最高時速の車種が多いです。</div>
            </div>
        </div>
        <div class="faq_row">
            <div class="faq_headed pamako">
                <div class="faq_q">Q</div>
                <div class="faq_title">充電時間と電気代はどのぐらい？</div>
            </div>
            <div class="hx2"></div>
            <div class="faq_headed pamako">
                <div class="faq_a">A</div>
                <div class="faq_text">フル充電の場合、充電時間は4時間～8時間、その際の電気代は２輪タイプで20円前後、３輪・４輪タイプは50円～150円程度となっています。</div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="feature_rel">
        <div class="feature_abs"></div>
        <div class="feature_front">
            <div class="cwidth12">
                <div class="pmh_anchor" id="voice"></div>
                <div class="centered_title">
                    <div class="common_title_hp">
                        <div><h2 class="pamako">Voice</h2></div>
                        <div><p class="pamako">お客様の声</p></div>
                    </div>
                </div>
                <div class="hx4"></div>
                <div>
                    <div class="voice_desc pamako">
                        「かわいいのでレンタルしてみましたが大正解でした。オープンカーのように風が気持ちよく二輪免許を持ってなくても乗れたので最高の旅行になりました」
                    </div>
                </div>                
                <div class="hx4"></div>
                <div class="voice_row">
                    <div class="voice_col pamako">
                        <div class="voice_img"><img src="images/voice01.jpg"></div>
                        <div class="hx1"></div>
                        <h3>体験談①</h3>
                        <p>「レンタルバイクでいく予定でしたが EV 三輪にして大正解でした。少し天気が悪くなったのですが屋根があったので気にならず、音も静かで波の音まで聞こえてバッチリでした」</p>
                    </div>
                    <div class="voice_col pamako">
                        <div class="voice_img"><img src="images/voice02.jpg"></div>
                        <div class="hx1"></div>
                        <h3>体験談②</h3>
                        <p>「観光地でのレンタルサービスに導入しましたが、お客様からの評判が上々です。環境への配慮を重視する観光客に特に人気があります。」</p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="hx10"></div>
    <div class="pmh_anchor" id="category"></div>
    <div class="centered_title">
        <div class="common_title_hp">
            <div><h2 class="pamako">Category</h2></div>
            <div><p class="pamako">車種の紹介</p></div>
        </div>
    </div>
    <div class="hx4"></div>
    <div class="cat_row">
        <div class="cat_img">
            <div class="cat_img1" style="background-image: url(images/cat01.jpg);"></div>
            <div class="product paong"><img src="images/product01.png"></div>
        </div>
        <div class="cat_text">
            <div class="cat_text1">
                <div class="cat_subtle"><h3 class="pamako">カプセル</h3></div>
                <div><p class="pamako">ミニカーのような乗り心地！車のように乗れるのに車じゃない。<br>小さなボディーで狭い道もスイスイ進む。全天候型で雨が降っても問題なし。</p></div>
            </div>
        </div>
    </div>
    <div class="cat_row X_r">
        <div class="cat_img X_r">
            <div class="cat_img1 X_r" style="background-image: url(images/cat02.jpg);"></div>
            <div class="product X_r paong"><img src="images/product02.png"></div>
        </div>
        <div class="cat_text X_r">
            <div class="cat_text1">
                <div class="cat_subtle"><h3 class="pamako">フェリオ</h3></div>
                <div><p class="pamako">コンパクトで手軽でパワフルなフェリオ。ちょっとした買い物から離島をめぐる冒険まで、誰でも手軽に EV3 輪を体験できます。</p></div>
            </div>
        </div>
    </div>
    <div class="cat_row">
        <div class="cat_img">
            <div class="cat_img1" style="background-image: url(images/cat03.jpg);"></div>
            <div class="product paong"><img src="images/product03.png"></div>
        </div>
        <div class="cat_text">
            <div class="cat_text1">
                <div class="cat_subtle"><h3 class="pamako">オリオン</h3></div>
                <div><p class="pamako">ビジュアルインパクト抜群のトゥクトゥクスタイル。複数人での利用もできるので送迎や買い物などにもピッタリです。</p></div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="pmh_anchor" id="company"></div>
    <div class="centered_title">
        <div class="common_title_hp">
            <div><h2 class="pamako">Company</h2></div>
            <div><p class="pamako">会社概要</p></div>
        </div>
    </div>
    <div class="hx4"></div>
    <div class="profile_width">
        <div class="profi_table">
            <div class="profi_row pamako">
                <div class="profi_cap">社名</div>
                <div class="profi_field">
                    <p>three株式会社</p>
                </div>
            </div>
            <div class="profi_row pamako">
                <div class="profi_cap">代表者名</div>
                <div class="profi_field">
                    <p>西山 哲弘</p>
                    <p>大津 秀一</p>
                </div>
            </div>
            <div class="profi_row pamako">
                <div class="profi_cap">住所</div>
                <div class="profi_field">
                    <p>〒812-0027</p>
                    <p>福岡県福岡市博多区下川端町9-15溝口ビル行の町テラス204</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="pmh_anchor" id="contact"></div>
    <div class="centered_title">
        <div class="common_title_hp">
            <div><h2 class="pamako">Contact</h2></div>
            <div><p class="pamako">お問い合わせ</p></div>
        </div>
    </div>
    <div class="hx2"></div>
    <div class="contactform_block">
        <div class="contactform_width">
            <div class="form_pos">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form_field">
                        <div class="field_cap">氏名<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="field1" required />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">メールアドレス<span>*</span></div>
                        <div class="field_control">
                            <input type="email" name="field2" required />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">電話番号</div>
                        <div class="field_control">
                            <input type="text" name="field3" />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">題名<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="field4" required />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">メッセージ本文</div>
                        <div class="field_control">
                            <textarea name="field5"></textarea>
                        </div>
                    </div>
                    <div class="privacy_field">
                        <div class="form_field">
                            <div class="field_control">
                                <div class="privacy_desc">
                                    <p><a href="#">個人情報の取り扱いについて</a></p>
                                </div>
                                <div class="hx2"></div>
                                <div class="privacy_checkbox">
                                    <input type="checkbox" id="id_privacy" value="" required=""><label for="id_privacy">プライバシーポリシーに同意する</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <input type="submit" value="送信" id="form_submit">
                    </div>   
                </form>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<!-- FOOTER_START -->
<footer id="footer">
    <div class="footer_block">
        <a class="page_top" href="#"><img src="images/page_top.svg"></a>
        <div class="footer_logo">
            <img src="images/footer_logo.svg">
        </div>
        <div class="hx2"></div>
        <div class="footer_menu">
            <a href="#">プライバシーポリシー</a>
        </div>
        <div class="hx2"></div>
        <div class="footer_copyright">© Three 株式会社 Co.Ltd. All Right Reserved.</div>
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
<script src="js/custom.js"></script>

</body>
</html>