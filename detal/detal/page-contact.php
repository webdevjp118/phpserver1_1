<?php
get_header();
?>
<?php

if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field71 = isset($_POST['field71']) ? $_POST['field71']: '';
    $field72 = isset($_POST['field72']) ? $_POST['field72']: '';
    $field81 = isset($_POST['field81']) ? $_POST['field81']: '';
    $field82 = isset($_POST['field82']) ? $_POST['field82']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    $field10 = isset($_POST['field10']) ? $_POST['field10']: '';
    
    $to      = 'prgfinal216@gmail.com';
    
    $message = "
    お問い合わせ種別 : ".$field1."<br>
    お名前 : ".$field2."<br>
    郵便番号 : ".$field3."<br>
    住所 : ".$field4."<br>
    ご連絡先 : ".$field5."<br>
    メールアドレス : ".$field6."<br>
    ご予約希望日時<br>
    第1希望 : ".$field71." ".$field72."時ごろ<br>
    第2希望 : ".$field81." ".$field82."時ごろ<br>
    医院からの返信方法 : ".$field9."<br>
    ご要望など : <br>".$field10."<br>
    ";

    $subject = 'Team Building';

    $headers = "From: " . $field6 . "\r\n";
    $headers .= "Reply-To: " . $field6 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }    
}
?>
<!-- CONTAIN_START -->
<form action="" method="post" enctype="multipart/form-data">
<section id="contain">    	                                
    <div class="banner_block_cp">        	            
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_cp">
                    <div class="banner_middle_cp"> 
                        <div class="banner_title_cp">
                            <h3>お問い合わせ</h3>
                            <p>CONTACT</p>
                        </div>                           
                        <div class="banner_img_cp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_5.png" alt="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="breadcrumb_block_cp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_cp">
                    <div class="breadcrumb_middle_cp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">TOP</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">お問い合わせ</a></li>                                                              
                        </ol>                                                                                             
                    </div>                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>    
    <div class="contact_block_cop">        	            
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_cop">
                    <div class="contact_middle_cop">    
                        <div class="contact_details_cop">
                            医療法人センヤ会　いずたにデンタルクリニック（枚方市）では、<br>
                            患者さまの疑問やお悩みなどにお答えするために無料カウンセリングを行っております。<br>
                            診療・お問い合わせをご希望の方はこちらのフォームより記入してください。<br>
                            また診療やお問い合わせをご希望の方もこちらよりお問い合わせください。
                        </div>
                        <div class="contact-form-cop">
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">お問い合わせ種別</div>
                                <div class="form-field-input-cop form-field-radio-row-cop">
                                    <div class="form-radio-cop">
                                        <div class="form-field-radio-cop">
                                            <label class="radio-container-cop">無料カウンセリング
                                                <input type="radio" name="field1" value="無料カウンセリング"  checked="checked" name="inquiry">
                                                <span class="checkmark-cop"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cop">
                                        <div class="form-field-radio-cop">
                                            <label class="radio-container-cop">診察
                                                <input type="radio" name="field1" value="診察" name="inquiry">
                                                <span class="checkmark-cop"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cop">
                                        <div class="form-field-radio-cop">
                                            <label class="radio-container-cop">資料請求
                                                <input type="radio" name="field1" value="資料請求" name="inquiry">
                                                <span class="checkmark-cop"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cop">
                                        <div class="form-field-radio-cop">
                                            <label class="radio-container-cop">お問い合わせ
                                                <input type="radio" name="field1" value="お問い合わせ" name="inquiry">
                                                <span class="checkmark-cop"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">お名前<span>必須</span></div>
                                <div class="form-field-input-cop"><input type="text" name="field2" placeholder="枚方　花子" required></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop post-code-cop">
                                <div class="form-field-lable-cop">郵便番号</div>
                                <div class="form-field-input-cop"><input type="text" name="field3" placeholder="573-0027"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">住所</div>
                                <div class="form-field-input-cop"><input type="text" name="field4" placeholder="大阪府枚方市大垣内町2-8-10 宮村三甲ビル8階"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">ご連絡先<span>必須</span></div>
                                <div class="form-field-input-cop"><input type="text" name="field5" placeholder="072-894-8248" required></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop field-top-cop">
                                <div class="form-field-lable-cop">メールアドレス<span>必須</span></div>
                                <div class="form-field-input-cop">
                                    <input type="email" name="field6" placeholder="◯◯◯@◯◯.jp" required>
                                    <div class="email-details-cop">
                                        ※お申し込み直後に、このメールアドレス宛に医院から自動返信メールが届きます。<br>
                                        ※万一届かない場合は、メールアドレスのご入力ミスの可能性がありますので、入力再確認をお願いいたします。
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop field-top-cop">
                                <div class="form-field-lable-cop">ご予約希望日時</div>
                                <div class="form-field-input-cop">
                                    <div class="form-list-cop">
                                        <div class="form-list-title-cop">第1希望</div>
                                        <div class="form-list-select-cop">
                                            <input type="text" name="field71" id="datepicker1" placeholder="年/月/日"/>
                                        </div>
                                        <div class="form-list-input-cop">
                                            <input type="text" name="field72" placeholder="10">
                                        </div>    
                                        <div class="form-list-title-cop">時ごろ</div>
                                    </div>
                                    <div class="form-list-cop form-list-last-cop">
                                        <div class="form-list-title-cop">第2希望</div>
                                        <div class="form-list-select-cop">
                                            <input type="text" name="field81" id="datepicker2" placeholder="年/月/日"/>
                                        </div>
                                        <div class="form-list-input-cop">
                                            <input type="text" name="field82" placeholder="10">
                                        </div>    
                                        <div class="form-list-title-cop">時ごろ</div>
                                    </div>
                                    <div class="email-details-cop">
                                        ※診療時間内でお願いします。（診療時間　月・火・木・金・土　10:00〜18:00）<br>
                                        ※1週間後以降でご指定下さい。<br>
                                        ※お申し込みは仮予約となります。医院からの予約確認連絡の後にご予約が確定いたします。
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">医院からの返信方法</div>
                                <div class="form-field-input-cop">
                                    <div class="form-radio-cop">
                                        <div class="form-field-radio-cop">
                                            <label class="radio-container-cop">TEL
                                                <input type="radio" name="field9" value="TEL" checked="checked">
                                                <span class="checkmark-cop"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cop">
                                        <div class="form-field-radio-cop">
                                            <label class="radio-container-cop">メール
                                                <input type="radio" name="field9" value="メール">
                                                <span class="checkmark-cop"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cop">
                                        <div class="form-field-radio-cop">
                                            <label class="radio-container-cop">どちらでも可
                                                <input type="radio" name="field9" value="どちらでも可">
                                                <span class="checkmark-cop"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-field-cop field-top-cop">
                                <div class="form-field-lable-cop">ご要望など</div>
                                <div class="form-field-input-cop"><textarea name="field10"></textarea></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-info-cop">
                                    <div class="form-field-details-cop">
                                    <div class="form-field-details-in-cop">
                                        <h3>
                                            プライバシーポリシー
                                        </h3>
                                        <p>医療法人センヤ会　いずたにデンタルクリニック（以下「当医院」といいます）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進いたします。</p>
                                        
                                        <p>
                                            <span>個人情報保護方針</span><br>
                                            当医院は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
                                        </p>
                                        
                                        <p>
                                            <span>個人情報の管理</span><br>
                                            当医院は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                                        </p>
                                        
                                        <p>
                                            <span>個人情報の利用目的</span><br>
                                            本ウェブサイトでは、お客様からのお問い合わせ時に、お名前、e-mailアドレス、電話番号等の個人情報をご登録いただく場合がございますが、これらの個人情報はご提供いただく際の目的以外では利用いたしません。<br>
                                            お客さまからお預かりした個人情報は、当医院からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。
                                        </p>
                                        
                                        <p>
                                            <span>個人情報の第三者への開示・提供の禁止M</span><br>
                                            当医院は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br>
                                            ・お客さまの同意がある場合<br>
                                            ・法令に基づき開示することが必要である場合
                                        </p>
                                        
                                        <p>
                                            <span>個人情報の安全対策</span><br>
                                            当医院は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。
                                        </p>
                                        
                                        <p>
                                            <span>ご本人の照会</span><br>
                                            お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
                                        </p>
                                        
                                        <p>
                                            <span>法令、規範の遵守と見直し</span><br>
                                            当医院は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
                                        </p>
                                        
                                        <p>
                                            <span>お問い合わせ</span><br>
                                            当医院の個人情報の取扱に関するお問い合せは下記までご連絡ください。<br>
                                            医療法人センヤ会　いずたにデンタルクリニック<br>
                                            TEL：072-894-8248
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-field-radio-main-cop">
                                <div class="form-field-radio-cop">
                                    <label class="radio-container-cop"><a href="<?php echo get_site_url(); ?>/" target="_blank" >プライバシーポリシー</a>に同意する
                                        <input type="checkbox" required>
                                        <span class="checkmark-cop"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="contact-btn-cop">
                                <!-- <a href="" class="common_btn_hp">入力内容を確認する</a> -->
                                <input type="hidden" name="submit-confirm" value="submit-confirm">
                                <button id="submit-btn" class="common_btn_hp" type="submit">入力内容を確認する</button>
                            </div>
                        </div>             
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>                                                                                                             
    <div class="clearfix"></div>
</section>
</form>
<!-- CONTAIN_END -->
<?php
get_footer();
