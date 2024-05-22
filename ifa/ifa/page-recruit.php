<?php
get_header();

if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';

    
    $to      = 'info@jitsugen.co.jp';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    電話番号 : ".$field3."<br>
    勤務先 : ".$field4."<br>
    希望勤務地 : ".$field5."<br>
    年代 : ".$field6."<br>
    ";

    $subject = '株式会社クラウドファンディング';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }    
}
?>
<section id="contain">    	        
    <div class="banner_block_op" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img6.png) no-repeat top center;"> 
        <div class="banner_overlay_op">            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_op">                    	
                        <div class="banner_middle_op"> 
                            <div class="banner_top_op">            
                                <div class="banner_info_op">
                                    <h3>Recruit</h3>
                                    <h2>アクティビストIFA積極採用中</h2>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                        </div>
                    </div> 
                </div>           
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="becoming_block_acp"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 becoming_block_in_acp">                    	
                    <div class="becoming_middle_acp"> 
                        <div class="becoming_box_acp">                               
                            <div class="becoming_box_title_acp">
                                日本一のIFA法人へ
                            </div>
                            <div class="becoming_box_info_acp">
                                <p>投資型クラウドファンディング</p>
                                <p><span>×</span></p>
                                <p>Independent Financial Advisor</p>                                    
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>         
    <div class="for_block_acp"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 for_block_in_acp">                    	
                    <div class="common_title_hp common_center_hp"> 
                        <h2>こんな悩みを抱える証券マンへ</h2>
                    </div>
                    <div class="for_middle_acp"> 
                        <div class="for_boxes_acp">
                            <div class="for_box_acp">
                                <div class="for_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/for_img1.svg" alt="" />
                                </div>
                                <div class="for_info_acp">
                                    さらなる高収入、<br/>キャリアアップを目指したい
                                </div>
                            </div>
                            <div class="for_box_acp">
                                <div class="for_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/for_img2.svg" alt="" />
                                </div>
                                <div class="for_info_acp">
                                    会社からのノルマに縛られず<br/>自由に営業したい
                                </div>
                            </div>
                            <div class="for_box_acp">
                                <div class="for_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/for_img3.svg" alt="" />
                                </div>
                                <div class="for_info_acp">
                                    本当に良いと思った商品を<br/>顧客に勧めたい
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="our_block_acp"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 our_block_in_acp">                    	                    	
                    <div class="our_middle_acp"> 
                        <div class="common_title_hp common_center_hp"> 
                            <h2>業界最高水準のバック率*の弊社で<br/>ともに日本一のIFAを目指しませんか？</h2>
                        </div>
                        <div class="our_top_acp">
                            <div class="our_left_acp">
                                ＊業界圧倒的NO.1
                            </div>
                            <div class="our_right_acp">
                                <div class="our_right_in_acp">
                                    <div class="our_right_title_acp">
                                        業務委託
                                    </div>
                                    <div class="our_right_title_in_acp">
                                        <div class="our_right_subinfo_acp">
                                            最大
                                            
                                        </div>
                                        <div class="our_right_subinfo_in_acp">
                                            72<span>%</span>
                                        </div>
                                    </div>    
                                </div>
                                <div class="our_right_in_acp">
                                    <div class="our_right_title_acp">
                                        正社員
                                    </div>
                                    <div class="our_right_title_in_acp">
                                        <div class="our_right_subinfo_acp">
                                            基本給＋最大                                             
                                        </div>
                                        <div class="our_right_subinfo_in_acp">
                                            50<span>%</span>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="job_block_acp"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 job_block_in_acp">                    	                    	
                    <div class="common_title_hp common_center_hp"> 
                        <h2>弊社IFA転職事例</h2>
                    </div>
                    <div class="job_middle_acp"> 
                        <div class="job_boxes_acp">       	                            
                            <div class="job_box_acp">
                                <div class="job_img_acp">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_img1.png" alt="" />
                                    </a>
                                </div>
                                <div class="job_in_acp">
                                    <div class="job_info_acp">
                                        <div class="job_info_left_acp">
                                            40代/男性
                                        </div>
                                        <div class="job_info_right_acp">
                                            業務委託
                                        </div>
                                    </div>
                                    <div class="job_subinfo_acp">
                                        大手証券会社より弊社IFAへ。
                                    </div>
                                    <div class="job_text_acp">
                                        年収1200万円→<span>5000<span class="to">万</span></span>円
                                    </div>
                                    <div class="job_bottom_info_acp">
                                        自分が本当に良いと思うものを提案できる環境によって、自身のパフォーマンスを最大限発揮できています！
                                    </div>
                                </div>
                            </div>
                            <div class="job_box_acp">
                                <div class="job_img_acp">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_img2.png" alt="" />
                                    </a>
                                </div>
                                <div class="job_in_acp">
                                    <div class="job_info_acp">
                                        <div class="job_info_left_acp">
                                            30代/男性
                                        </div>
                                        <div class="job_info_right_acp">
                                            業務委託
                                        </div>
                                    </div>
                                    <div class="job_subinfo_acp">
                                        中堅証券会社より弊社IFAへ。
                                    </div>
                                    <div class="job_text_acp">
                                        年収600万円→<span>3000<span class="to">万</span></span>円
                                    </div>
                                    <div class="job_bottom_info_acp">
                                        ノルマがなく、新規顧客獲得しやすい環境なので、自分のペースで営業できています！
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="five_block_acp"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 five_block_in_acp">                    	                    	
                    <div class="common_title_hp common_center_hp"> 
                        <h2>弊社IFA 5つの特徴</h2>
                    </div>
                    <div class="five_middle_acp"> 
                        <div class="five_top_info_acp">
                            弊社IFA最大の特徴は、業界最高水準のバック率ですが、​そのほかにも大きな特徴があります。
                        </div>
                        <div class="five_boxes_acp">
                            <div class="five_box_acp">
                                <div class="five_box_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/five_img1.svg" alt="" />
                                </div>
                                <div class="five_box_info_acp">
                                    最高水準のバック率
                                </div>
                            </div>
                            <div class="five_box_acp">
                                <div class="five_box_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/five_img2.svg" alt="" />
                                </div>
                                <div class="five_box_info_acp">
                                    ​独自の金融商品
                                </div>
                            </div>
                            <div class="five_box_acp">
                                <div class="five_box_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/five_img3.svg" alt="" />
                                </div>
                                <div class="five_box_info_acp">
                                    営業がしやすい環境
                                </div>
                            </div>
                            <div class="five_box_acp">
                                <div class="five_box_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/five_img4.svg" alt="" />
                                </div>
                                <div class="five_box_info_acp">
                                    ノルマなし
                                </div>
                            </div>
                            <div class="five_box_acp">
                                <div class="five_box_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/five_img5.svg" alt="" />
                                </div>
                                <div class="five_box_info_acp">
                                    転勤なし
                                </div>
                            </div>
                        </div>
                        <div class="five_grid_acp">
                            <div class="five_grid_in_acp">
                                <div class="five_grid_left_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock_img1.png" alt="" />
                                </div>
                                <div class="five_grid_right_acp">
                                    <div class="five_grid_title_acp">
                                        業界最高水準のバック率
                                    </div>
                                    <div class="five_grid_info_acp">
                                        所属するIFAが良いパフォーマンスを発揮できるように、高収入が見込まれるIFA業界の中でも、当社はトップクラスのバック率を設定しています。
                                    </div>
                                </div>
                            </div>
                            <div class="five_grid_in_acp five_reverse_acp">
                                <div class="five_grid_left_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock_img2.png" alt="" />
                                </div>
                                <div class="five_grid_right_acp">
                                    <div class="five_grid_title_acp">
                                        独自の金融商品
                                    </div>
                                    <div class="five_grid_info_acp">
                                        当社の基幹事業である投資型クラウドファンディング事業により、当社しか扱えない独自の金融商品が販売可能です。この投資型クラウドファンディングとIFAのシナジーが、当社の大きな強みです。
                                    </div>
                                </div>
                            </div>
                            <div class="five_grid_in_acp">
                                <div class="five_grid_left_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stock_img3.png" alt="" />
                                </div>
                                <div class="five_grid_right_acp">
                                    <div class="five_grid_title_acp">
                                        営業がしやすい環境
                                    </div>
                                    <div class="five_grid_info_acp">
                                        弊社クラウドファンディング事業ではネットで投資家の集客が可能です。また「お金の健康診断」サービスの活用により、毎月新規顧客を獲得。ネット集客と対面での新規顧客開拓の両面で営業活動がしやすい環境です。
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="ifa_block_acp"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ifa_block_in_acp">                    	                    	
                    <div class="common_title_hp common_center_hp"> 
                        <h2>弊社IFA 5つの特徴</h2>
                    </div>
                    <div class="ifa_middle_acp"> 
                        <div class="ifa_boxes_acp">  
                            <div class="ifa_box_acp">
                                <div class="ifa_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ifa_img1.png" alt="" />
                                </div>
                                <div class="ifa_info_acp">
                                    投資型クラウドファンディング事業によりネットで投資家を集客
                                </div>
                            </div>
                            <div class="ifa_box_acp">
                                <div class="ifa_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ifa_img2.png" alt="" />
                                </div>
                                <div class="ifa_info_acp">
                                    獲得した顧客をその後弊社IFAがサポート
                                </div>
                            </div>
                        </div>
                        <div class="ifa_grid_acp">
                            <div class="ifa_title_acp">
                                絶大なシナジー効果
                            </div>
                            <div class="ifa_info_acp">
                                <p>弊社の大きな強みは、IFA事業の他、投資型クラウドファンディング事業を行っている点です。</p>
                                <p>投資型クラウドファンディング事業で獲得した顧客を、その後弊社IFAがサポートしていくという一連の流れ、この二つの事業のシナジーには絶大的な効果があります。</p>
                                <p>今後弊社はこのシナジーによって、クラウドファンディング、IFA事業共に拡大していきます</p>
                            </div>
                        </div>
                        <div class="ifa_bottom_box_acp">
                            <div class="ifa_box_left_acp">
                                <div class="ifa_img_acp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ifa_img3.png" alt="" />
                                </div>
                                <div class="ifa_info_acp">
                                    40代/男性 ​<span>A様</span>
                                </div>
                            </div>
                            <div class="ifa_box_right_acp">
                                <div class="ifa_box_right_in_acp">
                                    最初は、新聞の記事がきっかけで、おいしいプラスファンドに投資しました。<br/>
                                    おいしいプラスファンドでは、情報がはっきり伝わってきたため、<span>投資において信頼</span>できました。<br/>
                                    その後、IFA事業の話を聞き、おいしいプラスファンドに投資した際に感じた信用性から、<br/>
                                    <span>クラウドファンディング社にIFAを依頼</span>するようになりました。
                                </div>
                            </div>                            	
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="flow_block_acp"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flow_block_in_acp">                    	                    	
                    <div class="common_title_hp common_center_hp"> 
                        <h2>IFA契約の流れ</h2>
                    </div>
                    <div class="flow_middle_acp"> 
                        <div class="flow_boxes_acp">
                            <div class="flow_box_acp">
                                <div class="flow_box_info_acp">
                                    Step 01
                                </div>
                                <div class="flow_box_subinfo_acp">
                                    申し込みフォーム入力
                                </div>
                            </div>
                            <div class="flow_box_acp">
                                <div class="flow_box_info_acp">
                                    Step 02
                                </div>
                                <div class="flow_box_subinfo_acp">
                                    オンライン個別相談会<br/>→まずは個別相談会で疑問や悩みを解消
                                </div>
                            </div>
                            <div class="flow_box_acp">
                                <div class="flow_box_info_acp">
                                    Step 03
                                </div>
                                <div class="flow_box_subinfo_acp">
                                    雇用形態等確定、契約
                                </div>
                            </div>
                        </div>
                        <div class="flow_arrow_acp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_arrow.svg" alt="" />
                        </div>
                        <div class="flow_box_bottom_acp">
                            弊社IFAとして活動！
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="application_block_acp"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 application_block_in_acp">                    	                    	                    	
                    <div class="application_middle_acp"> 
                        <div class="common_title_hp common_center_hp"> 
                            <h2>募集要項</h2>
                        </div>
                        <div class="application_boxes_acp">
                            <div class="application_box_acp">
                                <div class="application_left_acp">
                                    採用業種
                                </div>
                                <div class="application_right_acp">
                                    <div class="application_right_info_acp">
                                        ◎IFA（独立系ファイナンシャルアドバイザー）/証券営業
                                    </div>
                                </div>
                            </div>
                            <div class="application_box_acp">
                                <div class="application_left_acp">
                                    業務内容
                                </div>
                                <div class="application_right_acp">
                                    <div class="application_right_info_acp">
                                        ◎IFA/証券営業として、お客様の資産運用ニーズを把握し金融サービスを活用した解決を提案
                                    </div>
                                </div>
                            </div>
                            <div class="application_box_acp">
                                <div class="application_left_acp">
                                    必須条件
                                </div>
                                <div class="application_right_acp">
                                    <div class="application_right_info_acp">
                                        ◎金融機関での営業経験1年以上（銀行/証券/保険など）<br/>◎証券一種外務員資格をお持ちの方
                                    </div>
                                </div>
                            </div>
                            <div class="application_box_acp">
                                <div class="application_left_acp">
                                    求める人物像
                                </div>
                                <div class="application_right_acp">
                                    <div class="application_right_info_acp">
                                        ◎顧客本位で営業活動に従事できる方
                                    </div>
                                </div>
                            </div>
                            <div class="application_box_acp">
                                <div class="application_left_acp">
                                    年収例
                                </div>
                                <div class="application_right_acp">
                                    <div class="application_right_info_acp application_right_pd_acp">
                                        ◎完全歩合制（業務契約）<br/>
                                        ◎業界トップクラスの高いバック率で高年収を得られる可能性があります<br/>
                                        ◎正社員雇用制度有り 
                                    </div>
                                    <div class="application_right_info_acp application_right_pd_acp">
                                        【業務委託社員】<br/>
                                        ・バック率最大72％　席料15万円<br/>
                                        ・バック率最大65％　席料無し
                                    </div>
                                    <div class="application_right_info_acp application_right_pd_acp">
                                        【正社員】<br/>・バック率最大50％　月給20万円
                                    </div>
                                </div>
                            </div>
                            <div class="application_box_acp">
                                <div class="application_left_acp">
                                    採用業種
                                </div>
                                <div class="application_right_acp">
                                    <div class="application_right_info_acp">
                                        ◎IFA（独立系ファイナンシャルアドバイザー）/証券営業
                                    </div>
                                </div>
                            </div>                                                                                               
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="online_block_acp online_change_acp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 online_block_in_acp">                      	                   	
                    <form id="contact_form" action="" method="post" enctype="multipart/form-data">
                    <div class="online_middle_acp">
                        <div class="common_title_hp common_center_hp"> 
                            <h2>オンライン個別相談会申し込みフォーム</h2>
                        </div>
                        <div class="online_top_acp">
                            <div class="contact-form-cop">                                
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">お名前<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field1" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">メールアドレス<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="email" placeholder="" name="field2" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">電話番号<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field3" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">勤務先<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field3" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">希望勤務地<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field4" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                                                                        
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">年代<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <div class="form-list-cop">                                        	
                                            <div class="form-list-select-cop">
                                                <select class="custom-select" name="field5" required>
                                                    <option>20代</option>
                                                    <option>30代</option>
                                                    <option>40代</option>
													<option>50代以上</option>
                                                </select>                                                    
                                            </div>                                                                                 
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-radio-cp">
                                    <div class="form-field-radio-cp form-field-radio-main-cp">
                                        <label class="radio-container-cp"><a href="<?php echo get_site_url(); ?>/privacy/"><span>個人情報の取り扱い</span>に同意して、</a>送信ボタンを押してください。
                                            <input type="checkbox" name="inquiry" required>
                                            <span class="checkmark-cp"></span>
                                        </label>
                                    </div>
                                </div>                                                                                                                                                                                                                                                                                               
                            </div> 
                        </div>
                        <div class="how_left_in_btn_op">
                            <input type="hidden" name="submit-confirm" value="submit-confirm">       	
                            <button type="submit" class="common_btn_hp">送信する<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.svg" alt=""></a>                                           
                        </div> 
                    </div>                                               
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="inquiry_block_hp">            
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inquiry_block_in_hp">                    	
                    <div class="inquiry_middle_hp">
                        <a href="<?php echo get_site_url(); ?>/contact/">
                        <div class="inquiry_top_hp">
                            <div class="inquiry_left_hp">
                                <div class="inquiry_title_hp">
                                    お問い合わせ
                                </div>
                                <div class="inquiry_info_hp">
                                    Contact us
                                </div>
                            </div>
                            <div class="inquiry_right_hp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inquiry_icon.svg" alt="">
                            </div>  			     
                        </div></a>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>                     		                                 
</section>

<?php
get_footer();
