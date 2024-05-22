<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>top</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="css/fonts.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://use.typekit.net/hrj3xmc.css">
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
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    名前 : ".$field1."<br>
    カナ : ".$field2."<br>
    住所 : ".$field3."<br>
    電話番号 : ".$field4."<br>
    メールアドレス : ".$field5."<br>
    お問い合わせ内容 : <br>".$field6."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field5 . "\r\n";
    $headers .= "Reply-To: " . $field5 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

   
    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Success!");</script>';
    } else {
        echo '<script>alert("Failed!");</script>';
    }  
}
?>
<div id="site_loader_overlay"><div id="site_loader_animation" class="c-load--type2"></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<header id="header" class="">
    <div class="header_set">
        <div class="header_left">
            <a class="header_logo" href="#">
                <img class="headlogo_white" src="images/logo_cut.svg">
                <img class="headlogo_green" src="images/logo_cut.svg">
            </a>
            <div class="header_desc">
                玄関美人
            </div>
        </div>
        <div class="header_menu">
            <a class="headmenu_a" href="#会社概要">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">会社概要</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="#事業内容">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">事業内容</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="#メリット">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">メリット</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="#SDGs事業">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">SDGs事業</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="recruit.php">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">RECRUIT</div>
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
<!-- HEADER_END -->
<!-- CONTAIN_START -->
<div class="state_vals is_top"></div>
<section id="contain">    	        
    <div class="banner_block_tp">
        <div class="banner_left_tp">
            <div class="banner_content_tp">
                <div class="banner_logo_tp"><img src="images/banner_logo.svg"></div>
                <div class="banner_text_tp">
                    <h1>幸せを呼ぶ<br>黄色いお掃除屋さん</h1>
                </div>
            </div>
        </div>
        <div class="banner_right_tp">
            <div class="banner_img_tp">
                <video class="video-div block_pc" data-type="mp4" src="images/gsclean_top.mp4" loop muted playsinline autoplay></video>
                <video class="video-div block_sp" data-type="mp4" src="images/sp.mp4" loop muted playsinline autoplay></video>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="phil_top_svg"><img src="images/phil_top.svg"></div>
    <div class="about_title_tp io fade upS">
        <div class="common_title_hp">
            <h2>幸せを呼ぶ黄色いお掃除屋さん</h2> 
            <p>ABOUT</p>                                       
        </div>
    </div>
    <div class="hx4"></div>
    <div class="about_row_tp">
        <div class="about_left io fade upS">
            <div class="about_img">
                <img src="images/tp_about01.png">
            </div>
        </div>
        <div class="about_right">
            <div class="about_content io fade upS">
                <div class="about_name">
                    <span>玄関美人</span><br>
                    玄関周りのプロお掃除チーム
                </div>
                <div class="about_text">
                    <br>
                    たった10年しか経ってないのに<br>
                    超汚くていいですか？<br>
                    <br>
                    古臭さと汚らしさ、、、<br>
                    <br>
                    玄関の印象でガラリと変わる！<br>
                    キレイでピカピカにすることで変わる
                </div>
                <div class="about_deco">
                    <img src="images/tp_about03.png">
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="cwidth12">
        <div class="example_row">
            <div class="example_left initani initani_wbk">
                <img src="images/before01.png">
                <div class="before_sign">BEFORE</div>
            </div>
            <div class="example_right initani initani_wy">
                <img src="images/after01.png">
                <div class="after_sign">AFTER</div>
            </div>
        </div>
        <div class="hx4"></div>
        <div class="example_row">
            <div class="example_left initani initani_wbk">
                <img src="images/before02.png">
                <div class="before_sign">BEFORE</div>
            </div>
            <div class="example_right initani initani_wy">
                <img src="images/after02.png">
                <div class="after_sign">AFTER</div>
            </div>
        </div>
        <div class="hx4"></div>
        <div class="example_row">
            <div class="example_left initani initani_wbk">
                <img src="images/before03.png">
                <div class="before_sign">BEFORE</div>
            </div>
            <div class="example_right initani initani_wy">
                <img src="images/after03.png">
                <div class="after_sign">AFTER</div>
            </div>
        </div>
        <div class="hx4"></div>
        <div class="example_row">
            <div class="example_left initani initani_wbk">
                <img src="images/before04.png">
                <div class="before_sign">BEFORE</div>
            </div>
            <div class="example_right initani initani_wy">
                <img src="images/after04.png">
                <div class="after_sign">AFTER</div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="habbit_block_tp">
        <div class="cwidth12">
            <div class="habbit_title_tp io fade upS">
                <h2>幸せな生活習慣</h2>
                <div class="hx3"></div>
                <div class="habbit_text_tp">
                    子供たちやその親御様など、家の雰囲気をすごく見ています。<br>
                    汚い家は印象が悪く、常にキレイにしていることで<br class="br_pc">
                    好印象を持たれる家庭に！<br>
                    子供たちの、いじめ被害などもこのような些細が原因で起きます。
                </div>
            </div>
        </div>
    </div>
    <div class="problem_block_tp">
        <div class="hx10"></div>
        <div class="cwidth12">
            <div class="problem_title_tp io fae upS">
                <div class="common_title_hp">
                    <h2>こんなお悩みありませんか？</h2> 
                    <p>PROBLEM</p>  
                </div>                                     
            </div>
            <div class="hx5"></div>
            <div class="problem_important_tp io fade upS">
                玄関が汚れていると。。。
            </div>
            <div class="hx3"></div>
            <div class="problem_img_tp io fade upS">
                <img src="images/tp_problem.svg" class="block_pc">
                <img src="images/tp_problem_sp.svg" class="block_sp">
            </div>
            <div class="problem_text io fade upS">
                築10年を超えてくると、長年の靴汚れや埃が雨の水垢と合わ さり硬く石灰化した汚れのため、ホームセンター等で販売し ている洗剤では歯が立たないと言われています10年点検はその名の通り、売主や施工会社またはハウスメー カーが、10年間の保証の最後の年に行う点検です。一般に住 宅は建築後10年目あたりから劣化が目立ち始め、メンテナン スが必要になると言われています。 したがって、最後の無償点検である10年点検においてしっかりメンテナンスを しておくことが、その後の住宅の寿命と資産価値を大きく左右します。
            </div>
        </div>
        <div class="hx10"></div>
    </div>
    <div class="hx8"></div>
    <div class="refresh_block_tp">
        <div class="refresh_width_tp io fade scaleUp">
            <div class="bubble_title_tp">
                <div class="bubble">そんな汚れを一気に玄関美人がリフレッシュ！</div>
            </div>
            <div class="refresh_img_tp">
                <img src="images/tp_refresh.png">
            </div>
            <div class="hx4"></div>
            <div class="refresh_text_tp">弊社開発の特殊な高圧洗浄でピカピカに仕上げます。</div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="pmh_anchor" id="事業内容"></div>
    <div class="feature_block_tp">
        <div class="feature_back_tp"></div>
        <div class="feature_front_tp">
            <div class="hx8"></div>
            <div class="feature_title_tp io fade upS">
                <div class="common_title_hp">
                    <h2>事業内容</h2> 
                    <p>FEATURE</p>  
                </div>
            </div>
            <div class="hx4"></div>
            <div class="feature_row_tp">
                <div class="feature_left_tp io fade lr">
                    <img src="images/tp_feature01.png">
                </div>
                <div class="feature_right_tp">
                    <div class="feature_content_tp io fade upS">
                        <div class="feature_no_tp">01</div>
                        <div class="hx3"></div>
                        <div class="feature_subtle_tp">プロフェッショナル集団</div>
                        <div class="hx3"></div>
                        <div class="feature_text_tp">１万軒以上の外構工事を手掛け、玄関・駐車場を知り尽くしたプロフェッショナル集団がつくった清掃サービス</div>
                    </div>
                </div>
            </div>
            <div class="feature_row_tp pxt_right">
                <div class="feature_left_tp io fade rl">
                    <img src="images/tp_feature02.png">
                </div>
                <div class="feature_right_tp">
                    <div class="feature_content_tp io fade upS">
                        <div class="feature_no_tp">02</div>
                        <div class="hx3"></div>
                        <div class="feature_subtle_tp">日本未発売の弊社オリジナルマシンを開発！開発に5年以上かけ</div>
                        <div class="hx3"></div>
                        <div class="feature_text_tp">素晴らしいマシンでご家庭を洗浄します</div>
                    </div>
                </div>
            </div>
            <div class="feature_row_tp">
                <div class="feature_left_tp io fade lr">
                    <img src="images/tp_feature03.png">
                </div>
                <div class="feature_right_tp">
                    <div class="feature_content_tp io fade upS">
                        <div class="feature_no_tp">03</div>
                        <div class="hx3"></div>
                        <div class="feature_subtle_tp">純植物 性の洗浄剤</div>
                        <div class="hx3"></div>
                        <div class="feature_text_tp">天然柑橘類を主成分とした純植物 性の洗浄剤を使用しているので家族に優しい</div>
                    </div>
                </div>
            </div>
            <div class="hx4"></div>
        </div>
    </div>
    <div class="video_block_tp">
        <div class="video_width_tp">
            <div class="video_topdiv io fade upS">
                <video class="video_tag" id="target_video1" data-type="mp4" src="images/montage.MP4"></video>
                <div class="video_front" id="play_video1">
                    <img src="images/tp_video_play.svg">
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="pmh_anchor" id="メリット"></div>
    <div class="feature_block_tp">
        <div class="feature_back_tp pxt_left"></div>
        <div class="feature_front_tp">
            <div class="hx8"></div>
            <div class="feature_title_tp io fade upS">
                <div class="common_title_hp">
                    <h2>メリット</h2> 
                    <p>MERIT</p>  
                </div>
            </div>
            <div class="hx4"></div>
            <div class="feature_row_tp pxt_right">
                <div class="feature_left_tp io fade rl">
                    <img src="images/tp_merit01.png">
                </div>
                <div class="feature_right_tp">
                    <div class="feature_content_tp io fade upS">
                        <div class="feature_no_tp">01</div>
                        <div class="hx3"></div>
                        <div class="feature_subtle_tp">落ちない汚れを一気に</div>
                        <div class="hx3"></div>
                        <div class="feature_text_tp">市販の機器では落ちない汚れを一気にピカピカ</div>
                    </div>
                </div>
            </div>
            <div class="hx4 block_pc"></div>
            <div class="feature_row_tp">
                <div class="feature_left_tp io fade lr">
                    <img src="images/tp_merit02.png">
                </div>
                <div class="feature_right_tp">
                    <div class="feature_content_tp io fade upS">
                        <div class="feature_no_tp">02</div>
                        <div class="hx3"></div>
                        <div class="feature_subtle_tp">清掃時間</div>
                        <div class="hx3"></div>
                        <div class="feature_text_tp">清掃時間がかかる。弊社に依頼することで余った時間を家庭円満にお使いください</div>
                    </div>
                </div>
            </div>
            <div class="hx4 block_pc"></div>
            <div class="feature_row_tp pxt_right">
                <div class="feature_left_tp io fade rl">
                    <img src="images/tp_merit03.png">
                </div>
                <div class="feature_right_tp">
                    <div class="feature_content_tp io fade upS">
                        <div class="feature_no_tp">03</div>
                        <div class="hx3"></div>
                        <div class="feature_subtle_tp">メンテナンス</div>
                        <div class="hx3"></div>
                        <div class="feature_text_tp">一度依頼すればメンテナンスが楽になる</div>
                    </div>
                </div>
            </div>
            <div class="hx4"></div>
        </div>
    </div>
    <div class="hx6"></div>
    <div class="phil_block_tp">
        <div class="phil_left_tp io fade lr">
            <img src="images/phil01.png">
        </div>
        <div class="phil_center_tp">
            <div class="phil_top_svg"><img src="images/phil_top.svg"></div>            
            <div class="phil_title_tp io fade upS">
                <div class="common_title_hp">
                    <h2>企業理念</h2> 
                    <p>PHILOSOPHY</p>  
                </div>
            </div>
            <div class="hx6"></div>
            <div class="phil_subtle io fade upS">夢を叶える人であふれる<br>社会をつくる</div>
            <div class="hx4"></div>
            <div class="phil_text io fade upS">
                夢を叶えるために挑戦して頑張っている人たちがいる。<br> 
                そんな人たちにはプレッシャーやストレスを癒やす時間や 場所が必要。<br>
                家庭はまさにそんな場所と時間を過ごす大切なもの。<br>
                    その家庭には犯罪や事故、<br class="br_pc">
                不和（喧嘩）など色々な トラブルに見舞われる機会がたくさんある。<br>
                それらを一つでも減らすことで、<br class="br_pc">
                本来の家庭の姿をつくり 夢のために挑戦し頑張る人たちを応援する。<br>
                そんな会社を目指しています。
            </div>
        </div>
        <div class="phil_right_tp io fade rl">
            <img src="images/phil02.png">
        </div>
    </div>
    <div class="hx8"></div>
    <div class="pmh_anchor" id="SDGs事業"></div>
    <div class="phil_top_svg"><img src="images/phil_top.svg"></div>
    <div class="sdg_title_tp io fade upS">
        <div class="common_title_hp">
            <h2>SDGs事業</h2> 
            <p>SDGs</p>  
        </div>
    </div>
    <div class="hx4"></div>
    <div class="sdg_line_tp panil3">
        <img src="images/sdg01.svg">
        <img src="images/sdg02.svg">
        <img src="images/sdg03.svg">
        <img src="images/sdg05.svg">
        <img src="images/sdg07.svg">
        <img src="images/sdg08.svg">
        <img src="images/sdg11.svg">
        <img src="images/sdg14.svg">
        <img src="images/sdg15.svg">
    </div>
    <div class="hx4"></div>
    <div class="sdgfull_img">
        <img src="images/sdg_full.png">
    </div>
    <div class="hx4"></div>
    <div class="cwidth14">
        <div class="sdg_row_tp">
            <div class="sdg_col_tp io fade upS">
                <div class="sdgcol_img_tp">
                    <img src="images/sdg_col1.png">
                </div>
                <div class="hx3"></div>
                <div class="sdgcol_title_tp">女性の働く場を提供</div>
                <div class="hx2"></div>
                <div class="sdgcol_text_tp">多くを女性スタッフを採用することで、女性の働く場を提供する</div>
                <div class="sdgcol_sign_tp"><img src="images/sdg10.svg"></div>
            </div>
            <div class="sdg_col_tp io fade upS">
                <div class="sdgcol_img_tp">
                    <img src="images/sdg_col2.png">
                </div>
                <div class="hx3"></div>
                <div class="sdgcol_title_tp">家庭が明るく幸せになる</div>
                <div class="hx2"></div>
                <div class="sdgcol_text_tp">玄関をキレイにすることで　家庭が明るく幸せになる</div>
                <div class="sdgcol_sign_tp"><img src="images/sdg13.svg"></div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="cwidth14">
        <div class="line_row_tp js_opac">
            <div class="hx6"></div>
            <div class="line_icon_tp"><img src="images/line_icon.svg"></div>
            <div class="hx2"></div>
            <div class="line_title_tp">LINEからご予約いただけます</div>
            <div class="hx2"></div>
            <div class="line_icon_tp"><img src="images/qr_code.svg"></div>
            <div class="hx2"></div>
            <div class="line_number"><span>ご予約電話番号</span>050-1808-8414</div>
            <div class="hx6"></div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="contact_block_tp">
        <div class="contactform_width">
            <div class="hx3"></div>
            <div class="phil_top_svg"><img src="images/phil_top.svg"></div>
            <div class="about_title_tp">
                <div class="common_title_hp io fade upS">
                    <h2>問い合わせ</h2> 
                    <p>CONTACT</p>                                       
                </div>
            </div>
            <div class="hx4"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form_field io fade upS">
                    <div class="field_cap">名前<span>必須</span></div>
                    <div class="field_control">
                        <input type="text" name="field1" required />
                    </div>
                </div>
                <div class="form_field io fade upS">
                    <div class="field_cap">カナ<span>必須</span></div>
                    <div class="field_control">
                        <input type="text"  name="field2" required />
                    </div>
                </div>
                <div class="form_field io fade upS">
                    <div class="field_cap">住所<span>必須</span></div>
                    <div class="field_control">
                        <input type="text"  name="field3" required />
                    </div>
                </div>
                <div class="form_field io fade upS">
                    <div class="field_cap">電話番号<span>必須</span></div>
                    <div class="field_control">
                        <input type="text"  name="field4" required />
                    </div>
                </div>
                <div class="form_field io fade upS">
                    <div class="field_cap">メールアドレス<span>必須</span></div>
                    <div class="field_control">
                        <input type="email"  name="field5" required />
                    </div>
                </div>
                <div class="form_field io fade upS">
                    <div class="field_cap">お問い合わせ内容<span>必須</span></div>
                    <div class="field_control">
                        <textarea  name="field6" required ></textarea>
                    </div>
                </div>
                <div class="field_contactbtn io fade upS">
                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                    <input type="submit" value="送信" />
                </div>
            </div>
            <div class="hx6"></div>
        </div>    
    </div>
    <div class="pmh_anchor" id="会社概要"></div>
    <div class="company_block_tp">
        <div class="cwidth12">
            <div class="hx10"></div>
            <div class="company_row">
                <div class="company_left">
                    <div class="hx3"></div>
                    <div class="phil_top_svg"><img src="images/phil_top.svg"></div>
                    <div class="about_title_tp io fade upS">
                        <div class="common_title_hp">
                            <h2>会社概要</h2> 
                            <p>COMPANY</p>                                       
                        </div>
                    </div>
                    <div class="hx4"></div>
                </div>
                <div class="company_right">
                    <div class="company_table io fade upS">
                        <dl>
                            <dt>社名</dt>
                            <dd>株式会社エスシー</dd>
                        </dl>
                        <dl>
                            <dt>所在地</dt>
                            <dd>
                                本社<br>
                                〒453-0033　愛知県名古屋市中村区栄生町８－４<br>
                                <br>
                                倉庫<br>
                                〒511-0808　愛知県清須市朝日愛宕１１０<br>
                                <br>
                                工場<br>
                                〒511-0808　三重県桑名市大字下深谷部2060番地
                            </dd>
                        </dl>
                        <dl>
                            <dt>建築業許可</dt>
                            <dd>愛知県知事許可第110562号</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<!-- FOOTER_START -->
<footer id="footer">
    <div class="footer_block io fade upS">
        <a class="footer_logo" href="#">
            <img src="images/banner_logo.svg">
        </a>
        <div class="hx6"></div>
        <div class="footer_copyright">©2023 玄関美人</div>     
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

<!-- <div class="recruit_block_tp">
    <div class="recruit_left">
        <div class="recruit_left_wrap initani initani_bkw">
            <div class="recruit_content">
                <div class="common_title_hp">
                    <h2>Recruit</h2> 
                    <p>採⽤情報</p>                                       
                </div>
                <div class="recruit_text">
                    実は、予想外にスタッフが集まることもあれば集まらない時もあります。<br>
                    地域性もあれば、業種職種もあります。<br>
                    あと、時期タイミングもあります。<br>
                    正社員を好む地域もあれば契約社員を好む地域もあります。<br>
                </div>
                <div class="js_opac">
                    <a class="common_btn_hp" href="#">
                        <span>
                            VIEW MORE
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.558" height="22.496" viewBox="0 0 23.558 22.496">
                            <g id="Group_9" data-name="Group 9" transform="translate(-709.5 -1740.715)">
                                <path id="Path_5" data-name="Path 5" d="M721.1,1741.422l10.541,10.541L721.1,1762.5" fill="none" stroke="#a9cd36" stroke-width="2"/>
                                <line id="Line_2" data-name="Line 2" x2="22" transform="translate(709.5 1751.963)" fill="none" stroke="#a9cd36" stroke-width="2"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="recruit_right">
        <div class="recruit_right_wrap initani initani_wc">&nbsp;</div>
    </div>
</div> -->
    