<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instad_head"></div>
    <div class="pg_fv">
        <div class="pgfv_text">
            <h2>
                <font color="#4597A0">生活習慣病DX</font>販売開始時の案内ご希望フォーム
            </h2>
        </div>
    </div>
<?php
$field1 = isset($_POST['field1']) ? $_POST['field1']: '';
$field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
$field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
$field3_1 = isset($_POST['field3_1']) ? $_POST['field3_1']: '';
$field3_2 = isset($_POST['field3_2']) ? $_POST['field3_2']: '';
$field4 = isset($_POST['email']) ? $_POST['email']: '';
$field5 = isset($_POST['電話番号']) ? $_POST['電話番号']: '';
$field6 = isset($_POST['field6']) ? $_POST['field6']: '';
$field7 = isset($_POST['field7']) ? $_POST['field7']: '';
?>
    <div class="cwidth12">
        <div class="hx8"></div>
        <div class="cfsteps">
            <div class="cfstep1 X_2">1.お客様情報の入力</div>
            <div class="cfstep2 X_2">2.内容の確認</div>
            <div class="cfstep3 X_2">3.送信完了</div>
        </div>
        <div class="hx6"></div>
    </div>
    <div class="form_block">
        <div class="cwidth12">
            <div class="form_pos">
                <form action="<?php echo get_site_url(); ?>/contact-send/" method="post" enctype="multipart/form-data">
                    <div class="form_field">
                        <div class="field_left">
                            クリニック名
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field1; ?>
                                    <input type="hidden" name="field1" value="<?php echo $field1; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            医師のお名前
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="nameconfirm">
                                    <div class="nameconfirm1">
                                        <?php echo $field2_1.'　'.$field2_2; ?>
                                        <input type="hidden" name="field2_1" value="<?php echo $field2_1; ?>">
                                        <input type="hidden" name="field2_2" value="<?php echo $field2_2; ?>">
                                    </div>
                                    <div class="hx3"></div>
                                    <div class="nameconfirm1">
                                        <?php echo $field3_1.'　'.$field3_2; ?>
                                        <input type="hidden" name="field3_1" value="<?php echo $field3_1; ?>">
                                        <input type="hidden" name="field3_2" value="<?php echo $field3_2; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            メールアドレス
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field4; ?>
                                    <input type="hidden" name="field4" value="<?php echo $field4; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            電話番号
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field5; ?>
                                    <input type="hidden" name="field5" value="<?php echo $field5; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            ご使用の電子カルテメーカー<br>
                            (未使用の場合は「なし」と記載）
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field6; ?>
                                    <input type="hidden" name="field6" value="<?php echo $field6; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            ご要望・ご質問など
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext">&nbsp;</div>
                            <div class="field_vert">
                                <div class="field_control X_confirm">
                                    <?php echo $field7; ?>
                                    <input type="hidden" name="field7" value="<?php echo $field7; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="confirm_line"></div>
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <button type="button" onclick="history.back()" class="field_contactbtna X_2">戻る</button>
                        <button type="submit" class="field_contactbtna X_3">送信する</button>
                        <!-- <input type="submit" value="「個人情報のお取扱い」に同意して確認画面へ進む" id="form_submit"> -->
                    </div>   
                </form>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
