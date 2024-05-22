<?php get_header(); ?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    件名 : ".$field1."<br>
    会社名 : ".$field2."<br>
    担当者名 : ".$field3."<br>
    担当者名（カナ） : ".$field4."<br>
    住所 : ".$field5."<br>
    電話番号 : ".$field6."<br>
    携帯電話番号 : ".$field7."<br>
    E-Mail : ".$field8."<br>
    お問合せ内容 : <br>".$field9."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field8 . "\r\n";
    $headers .= "Reply-To: " . $field8 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("送信しました。お問い合わせありがとうございました。"); location.href="'.home_url().'"</script>';
    } else {
        echo '<script>alert("送信失敗しました。"); location.href="'.home_url().'"</script>';
    }  
}
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="main-banner-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-banner-in-hp">
                    <div class="main-middle-hp">
                        <div class="common-title-hp" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="20">
                            <h3>CONTACT</h3>
                            <p>お問い合わせ</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="main-image-hp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_contact.jpg" alt="" />
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="newsdetail-block-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 newsdetail-block-in-hp">
                    <div class="newsdetail-middle-hp">
                        <h5 class="newsdetail-title-hp">お問い合わせ</h5>
                        <div class="newsdetail-content-hp">
                            <div class="contactform_block">
                                <div class="contactform_width">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form_field">
                                            <div class="field_cap">件名<span>必須</span></div>
                                            <div class="field_control">
                                                <input type="text" name="field1" required>
                                            </div>
                                        </div>
                                        <div class="form_field">
                                            <div class="field_cap">会社名<span>必須</span></div>
                                            <div class="field_control">
                                                <input type="text" name="field2" required>
                                            </div>
                                        </div>
                                        <div class="form_field">
                                            <div class="field_cap">担当者名<span>必須</span></div>
                                            <div class="field_control">
                                                <input type="text" name="field3" required>
                                            </div>
                                        </div>
                                        <div class="form_field">
                                            <div class="field_cap">担当者名（カナ）<span>必須</span></div>
                                            <div class="field_control">
                                                <input type="text" name="field4" required>
                                            </div>
                                        </div>
                                        <div class="form_field">
                                            <div class="field_cap">住所</div>
                                            <div class="field_control">
                                                <input type="text" name="field5">
                                            </div>
                                        </div>
                                        <div class="form_field">
                                            <div class="field_cap">電話番号<span>必須</span></div>
                                            <div class="field_control">
                                                <input type="text" name="field6" required>
                                            </div>
                                        </div>
                                        <div class="form_field">
                                            <div class="field_cap">携帯電話番号</div>
                                            <div class="field_control">
                                                <input type="text" name="field7">
                                            </div>
                                        </div>
                                        <div class="form_field">
                                            <div class="field_cap">E-Mail<span>必須</span></div>
                                            <div class="field_control">
                                                <input type="email" name="field8" required>
                                            </div>
                                        </div>
                                        <div class="form_field">
                                            <div class="field_cap">お問い合わせ内容<span>必須</span></div>
                                            <div class="field_control">
                                                <textarea name="field9"></textarea>
                                            </div>
                                        </div>
                                        <div class="field_contactbtn">
                                            <input type="hidden" name="submit-confirm" value="submit-confirm" />
                                            <input type="submit" value="送信">
                                        </div>  
                                    </form>          
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
    <div class="clearfix"></div>
</section>
<!-- CONTAIN_END -->

<?php get_footer(); ?>
