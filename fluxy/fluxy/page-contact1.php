<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="pg_fv X_contact" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact.jpg);">
        <div class="pgfv_deco"></div>
        <div class="pgfv_title">
            <h1 class="pani4 js-split">CONTACT</h1>
            <p>お問い合わせ</p>
        </div>
    </div> 
    <div class="first_zigdeco">
        <div class="zig_deco X_cf">
            <div class="zdeco_shape">
                <div class="zdeco_origin X_3">
                    <div class="zdeco_rect X_lmask X_3_1">
                        <div class="zdeco_color X_3_1"></div>
                    </div>
                    <div class="zdeco_rect X_rmask X_3_2">
                        <div class="zdeco_color X_3_2"></div>
                    </div>
                    <div class="zdeco_rect X_lmask X_3_3">
                        <div class="zdeco_color X_3_3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="white_bg contactform_pad">
        <div class="contactform_block">
            <div class="contactform_width">
                <div class="form_pos">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form_field">
                            <div class="field_cap">お問い合わせ種別<span>*</span></div>
                            <div class="field_control">
                                <select name="field8_1">
                                    <option value="">選択してください</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                    <option value="XXX">XXX</option>
                                </select>
                            </div>
                        </div>
                        <div class="form_field">
                            <div class="field_cap">会社名</div>
                            <div class="field_control">
                                <input type="text" placeholder="株式会社fluxy" />
                            </div>
                        </div>
                        <div class="form_field">
                            <div class="field_cap">お名前<span>*</span></div>
                            <div class="field_control">
                                <input type="text" placeholder="鈴木 太郎"/>
                            </div>
                        </div>
                        <div class="form_field">
                            <div class="field_cap">メールアドレス<span>*</span></div>
                            <div class="field_control">
                                <input type="text" placeholder="email@example.com" />
                            </div>
                        </div>
                        <div class="form_field">
                            <div class="field_cap">お問い合わせ内容<span>*</span></div>
                            <div class="field_control">
                                <textarea></textarea>
                            </div>
                        </div>
                        <div class="privacy_field">
                            <div class="field_cap">個人情報の取り扱いについて<span>*</span></div>
                            <div class="field_control">
                                <textarea>
    個人情報の取り扱いについて
    株式会社saisai(以下、「当社」といいます。)は、本ウェブサイト上で提供するサービス(以下、「本サービス」といいます。)におけるユーザーの個人情報の取扱いについて、以下のとおりプライバシーポリシー(以下、「本ポリシー」といいます。)を定めます。
                                </textarea>
                            </div>
                            <div class="field_checkbox">
                                <input type="checkbox" id="id_privacy" value="" required>
                                <label for="id_privacy">同意する</label>
                            </div>
                        </div>
                        <div class="privacy_field">
                            <div class="form_field">
                                <div class="field_control">
                                    <div class="privacy_desc">
                                        <p>すべて入力がお済みになりましたら、確認画面ボタンを押してください。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field_contactbtn">
                            <input type="hidden" name="submit-confirm" value="submit-confirm">
                            <input type="submit" value="送信内容を確認する" id="form_submit">
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="run_ani">
        <div class="zig_deco">
            <div class="zdeco_shape X_f">
                <div class="zdeco_origin X_f">
                    <div class="zdeco_rect X_lmask X_f_1">
                        <div class="zdeco_color X_f_1"></div>
                    </div>
                    <div class="zdeco_rect X_lmask X_f_2">
                        <div class="zdeco_color X_f_2"></div>
                    </div>
                    <div class="zdeco_rect X_rmask X_f_3">
                        <div class="zdeco_color X_f_3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_expand"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
