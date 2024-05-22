<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>lp</title>
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
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    電話番号 : ".$field3."<br>
    お問い合わせ内容 : <br>".$field4."<br>
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
<div id="site_loader_overlay"><div id="site_loader_animation" class="c-load--type2"></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<header id="header" class="">
    <div class="header_set">
        <a class="header_logo" href="#">
            <img class="headlogo_white" src="images/logo_cut.svg">
            <img class="headlogo_green" src="images/logo_cut.svg">
        </a>
        <div class="header_menu">
            <a class="headmenu_a" href="#会社概要">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">会社概要</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="index.php#事業内容">
                <div class="headmenu_shape">
                    <div class="headmenu_cap">事業内容</div>
                    <div class="headmenu_uline"></div>
                </div>
            </a>
            <a class="headmenu_a" href="index.php#メリット">
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
                <a class="banner_logo_tp" href="index.php"><img src="images/banner_logo.svg"></a>
                <div class="banner_text_tp">
                    <h1>幸せを呼ぶ<br>黄色いお掃除屋さん</h1>
                </div>
            </div>
        </div>
        <div class="banner_right_tp">
            <div class="banner_img_tp">
                <img class="mv_image" src="images/recruit_banner.jpg">
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="phil_block_tp">
        <div class="phil_left_tp io fade lr">
            <img src="images/lp_phil01.png">
        </div>
        <div class="phil_center_tp io fade upS">
            <div class="phil_title_lp">
                <div class="common_title_hp">
                    <h2>企業理念</h2> 
                    <p>PHILOSOPHY</p>  
                </div>
            </div>
            <div class="hx6"></div>
            <div class="phil_subtle">夢を叶える人であふれる社会をつくる</div>
            <div class="hx4"></div>
            <div class="phil_text">
                夢を叶えるために挑戦して頑張っている人たちがいる。<br> 
                そんな人たちにはプレッシャーやストレスを癒やす時間や 場所が必要。<br>
                家庭はまさにそんな場所と時間を過ごす大切なもの。<br>
                    その家庭には犯罪や事故、<br class="br_pc">
                不和（喧嘩）など色々な トラブルに見舞われる機会がたくさんある。<br>
                それらを一つでも減らすことで、<br class="br_pc">
                本来の家庭の姿をつくり 夢のために挑戦し頑張る人たちを応援する。<br>
                そんな会社を目指しています。
            </div>
            <div class="hx6"></div>
            <div class="phil_btn_lp">
                <a class="com_job_btn" href="#Entry">
                    <span>
                        Entry
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.803" height="13.114" viewBox="0 0 13.803 13.114">
                        <g transform="translate(5692.532 8976.147) rotate(45)">
                          <line x2="12" transform="translate(-10367.608 -2317.153) rotate(-45)" fill="none" stroke-width="2"/>
                          <path d="M-10362.962-2339.46l5.85,5.85-5.85,5.85" transform="translate(-1385.231 -7999.462) rotate(-45)" fill="none" stroke-width="2"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <div class="phil_right_tp io fade rl">
            <img src="images/lp_phil02.jpg">
        </div>
    </div>
    <div class="pmh_anchor" id="SDGs事業"></div>
    <div class="hx10"></div>
    <div class="sdg_title_lp io fade upS">
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
    <div class="hx6"></div>
    <div class="cwidth14">
        <div class="sdg_row_lp">
            <div class="sdgrow_left_lp">
                <div class="sdgcontent_lp io fade lr">
                    <div class="sdgcontent_title_lp">女性を積極的に採用</div>
                    <div class="hx3"></div>
                    <div class="sdgcontent_text_lp">弊社は女性を積極的に採用することで、<br class="br_pc">女性の活躍できる世界を作る</div>
                </div>
            </div>
            <div class="sdgrow_right_lp io fade rl" style="background-image: url(images/lp_sdgbg01.jpg);">
                <div class="sdg_sign_lp"><img src="images/sdg11.svg"></div>
            </div>
        </div>
        <div class="hx8"></div>
        <div class="sdg_row_lp pxt_right">
            <div class="sdgrow_left_lp">
                <div class="sdgcontent_lp io fade rl">
                    <div class="sdgcontent_title_lp">地球を汚さない</div>
                    <div class="hx3"></div>
                    <div class="sdgcontent_text_lp">
                        環境にやさしい洗剤を使うことで<br class="br_pc">地球を汚さない</div>
                </div>
            </div>
            <div class="sdgrow_right_lp io fade lr" style="background-image: url(images/lp_sdgbg02.png);">
                <div class="sdg_sign_lp"><img src="images/sdg13.svg"></div>
            </div>
        </div>
        <div class="hx8"></div>
        <div class="sdg_row_lp">
            <div class="sdgrow_left_lp">
                <div class="sdgcontent_lp io fade lr">
                    <div class="sdgcontent_title_lp">女性でも楽々扱える</div>
                    <div class="hx3"></div>
                    <div class="sdgcontent_text_lp">弊社開発の重くないマシンを使うので<br class="br_pc">女性でも楽々扱える</div>
                </div>
            </div>
            <div class="sdgrow_right_lp io fade rl" style="background-image: url(images/lp_sdgbg03.jpg);">
                <div class="sdg_sign_lp"><img src="images/sdg05.svg"></div>
            </div>
        </div>
        <div class="hx8"></div>
        <div class="sdg_row_lp pxt_right">
            <div class="sdgrow_left_lp">
                <div class="sdgcontent_lp io fade rl">
                    <div class="sdgcontent_title_lp">取次営業・営業代行</div>
                    <div class="hx3"></div>
                    <div class="sdgcontent_text_lp">我々は建築・舗装・外構全般を設計・施工しています。<br>
                        今回新たな新事業とし、クリーニング市場に参入。自社製造の特殊なマシンを使い玄関周りや駐車場をクリーニングします。</div>
                </div>
            </div>
            <div class="sdgrow_right_lp io fade lr" style="background-image: url(images/lp_sdgbg04.jpg);">
                <div class="sdg_sign_lp"><img src="images/sdg05.svg"></div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="profile_block_lp">
        <div class="cwidth12">
            <div class="profile_title_lp io fade upS">
                <div class="common_title_hp">
                    <h2>募集要項</h2> 
                    <p>PROFILE</p>                                       
                </div>
            </div>
            <div class="hx4"></div>
            <div class="profile_table_lp io fade upS">
                <table>
                    <tr>
                        <th>仕事内容</th>
                        <td>一般家庭や店舗の玄関や駐車場の水垢・コケなどの汚れを高圧洗浄機でキレイにお掃除する作業です。力もいらないので女性でも可能です。<br>
                            新規事業なので、今なら上下関係がなく働きやすい職場です。短時間・短期間で稼ぎたい方にもオススメ。<br>
                            店員10名が決まり次第終了となります。</td>
                    </tr>
                    <tr>
                        <th>アピールポイント</th>
                        <td>我々は建築・舗装・外構全般を設計・施工しています。<br>
                            今回新たな新事業とし、クリーニング市場に参入。自社製造の特殊なマシンを使い玄関周りや駐車場をクリーニングします。</td>
                    </tr>
                    <tr>
                        <th>求める人材</th>
                        <td>力のいらない作業で女性も活躍中</td>
                    </tr>
                    <tr>
                        <th>勤務時間・曜日</th>
                        <td>ご自身でお選びいただくシフト制になります。</td>
                    </tr>
                    <tr>
                        <th>休暇・休日</th>
                        <td>ご自身でお選びいただくシフト制になります。</td>
                    </tr>
                    <tr>
                        <th>待遇・福利厚生</th>
                        <td>昇給制度あり。</td>
                    </tr>
                    <tr>
                        <th>雇用形態</th>
                        <td>業務委託</td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td>2,000円 - 4,500円 時給</td>
                    </tr>
                    <tr>
                        <th>職種カテゴリー</th>
                        <td>2,警備・清掃・ビル管理</td>
                    </tr>
                    <tr>
                        <th>タグ</th>
                        <td>2,週2・3日からOK、スキマ時間勤務</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="pmh_anchor" id="Entry"></div>
    <div class="contact_block_lp">
        <div class="contactform_width">
            <div class="hx8"></div>
            <div class="contact_title_lp io fade upS">
                <div class="common_title_hp">
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
                    <div class="field_cap">メールアドレス<span>必須</span></div>
                    <div class="field_control">
                        <input type="email" name="field2" required />
                    </div>
                </div>
                <div class="form_field io fade upS">
                    <div class="field_cap">電話番号<span>必須</span></div>
                    <div class="field_control">
                        <input type="text" name="field3" required />
                    </div>
                </div>
                <div class="form_field io fade upS">
                    <div class="field_cap">お問い合わせ内容<span>必須</span></div>
                    <div class="field_control">
                        <textarea name="field4" required ></textarea>
                    </div>
                </div>
                <div class="field_contactbtn io fade upS">
                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                    <input type="submit" value="送信" />
                </div>
            </form>
            <div class="hx6"></div>
        </div>    
    </div>
    <div class="pmh_anchor" id="会社概要"></div>
    <div class="company_block_lp">
        <div class="cwidth12">
            <div class="hx10"></div>
            <div class="company_title_lp io fade upS">
                <div class="common_title_hp">
                    <h2>会社概要</h2> 
                    <p>COMPANY</p>                                       
                </div>
            </div>
            <div class="hx4"></div>
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
                    <dt>代表取締役</dt>
                    <dd>嶋田典之</dd>
                </dl>
                <dl>
                    <dt>取締役</dt>
                    <dd>石川勝己　古市俊郎</dd>
                </dl>
                <dl>
                    <dt>設立</dt>
                    <dd>2020年4月</dd>
                </dl>
                <dl>
                    <dt>電話</dt>
                    <dd>052-462-1382</dd>
                </dl>
                <dl>
                    <dt>FAX</dt>
                    <dd>052-462-1383</dd>
                </dl>
                <dl>
                    <dt>建築業許可</dt>
                    <dd>愛知県知事許可第110562号</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<div class="footcontact_block io fade upS">
    <div class="footcontact_text">お電話でのご連絡はこちら</div>
    <div class="hx4"></div>
    <a class="foot_phone" href="tel:050-1808-8414">
        <div class="footphone_img"><img src="images/phone_icon.svg"></div>
        <div class="footphone_text">050-1808-8414</div>
    </a>
</div>
<!-- CONTAIN_END -->
<!-- FOOTER_START -->
<footer id="footer">
    <div class="footer_block pxt_recruit io fade upS">
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
