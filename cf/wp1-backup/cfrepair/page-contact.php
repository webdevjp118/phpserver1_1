<?php
get_header();

if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    
    $to      = 'info@cfrepair.co.jp';

    $message = "
    会社名　お名前 : ".$field1."<br>
    フリガナ : ".$field2."<br>
    郵便番号 : ".$field3."<br>
    ご住所(フリガナ) : ".$field4."<br>
    メールアドレス : ".$field5."<br>
    お電話番号 : ".$field6."<br>
    お問い合わせ内容 : <br>".$field7."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field5 . "\r\n";
    $headers .= "Reply-To: " . $field5 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }
    
    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Success!"); location.href="'.home_url().'"</script>';
    } else {
        echo '<script>alert("Failed!"); location.href="'.home_url().'"</script>';
    }  
}

?>
<!-- CONTAIN_START -->
<section id="contain">    
    <div class="instead_head"></div>	        
    <div class="pgtitle_block">
        <div class="c_width16">
            <div class="pgtitle initani initani_wbk">
                <p>お問い合わせ</p>
                <h1>CONTACT</h1>
            </div>
            <div class="breadcrumbs_block">
                <div class="breadcrumbs">
                    <a href="<?php echo get_site_url(); ?>/">ホーム</a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue_dot.svg"><span>お問い合わせ</span>
                </div>
            </div>
        </div>
    </div>
    <div class="pgfeature_block">
        <div class="pgfeature initani initani_ww">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact.jpg">
        </div>
    </div>
    <div class="hx6"></div>
    <div class="contactform_block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="c_width12">
                <div class="contactform_desc">
                    <p>弊社へのご質問、お問い合わせは、下記のフォームよりお願い致します。</p>
                </div>
                <div class="form_field">
                    <div class="field_cap">会社名　お名前<span>(必須)</span></div>
                    <div class="field_control">
                        <input type="text" name="field1" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">フリガナ<span>(必須)</span></div>
                    <div class="field_control">
                        <input type="text" name="field2" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">郵便番号<span>(必須)</span></div>
                    <div class="field_control">
                        <input type="text" name="field3" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">ご住所(フリガナ)<span>(必須)</span></div>
                    <div class="field_control">
                        <input type="text" name="field4" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">メールアドレス<span>(必須)</span></div>
                    <div class="field_control">
                        <input type="email" name="field5" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">お電話番号<span>(必須)</span></div>
                    <div class="field_control">
                        <input type="text" name="field6" required/>
                    </div>
                </div>
                <div class="form_field">
                    <div class="field_cap">お問い合わせ内容<span>(必須)</span></div>
                    <div class="field_control">
                        <textarea name="field7" required></textarea>
                    </div>
                </div>
                <div class="field_contactbtn">
                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                    <input type="submit" value="送信する">
                </div>            
            </div>
        </form>
    </div>
    <div class="hx10"></div>
    <div class="c_width12">
        <div class="policy_block">
            <p>株式会社シーエフは、高度情報化社会の進展に伴い、個人情報について適切な取扱いの重要性を認識し、 個人情報保護法についての指針・規定を定めております。</p>
            <h2>1．個人情報の収得</h2>
            <p>シーエフはお客様個人に関する情報を収得することがありますが、適用される法令、規範、及び当社のプライバシーポリシーを遵守し利用目的の達成に必要な範囲で行います。</p>
            <h2>2．個人情報の管理・保護</h2>
            <p>シーエフは個人情報の管理責任者を置き、情報の適切な管理を行うとともに外部流出防止に努めます。 また、外部に委託する場合は提携先企業と秘密保持契約等の契約締結とともに、適正な管理を実施させます。</p>
            <h2>３．個人情報の提供、開示・修正、削除</h2>
            <p>シーエフは正当な理由なく第三者に個人情報を提供、開示することはありません。 また、個人情報をご本人自らが照会・修正、削除等を希望される場合は合理的な範囲で対応させていただきます。</p>
            <h2>４．個人情報保護に関する継続的見直し</h2>
            <p>シーエフは個人情報保護に関する継続的な見直しを図ります。</p>
        </div>        
    </div>
    <div class="hx10"></div>
    <div class="c_width12">
        <div class="policy_contact">
            <div class="policontact_title">
                本ポリシーに関する当社の<br class="br_sp">お問い合わせ窓口
            </div>
            <div class="policontact_row">
                <div class="policy_address">
                    〒151-0071　東東京都渋谷区本町3-14-3<br>
                    松尾ビル2階  株式会社　シーエフ
                </div>
                <a class="policy_phone" href="tel:03-5354-7633">
                    03-5354-7633
                </a>
                <div class="policy_fax">
                    03-5354-7633
                </div>
                <a class="policy_mail" href="mailto:info@cfrepair.co.jp">
                    info@cfrepair.co.jp
                </a>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
