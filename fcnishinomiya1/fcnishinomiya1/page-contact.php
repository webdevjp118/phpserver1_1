<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="pg_fv fv_anipos">
        <div class="pgfv_bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact.jpg);"></div>
        <div class="pgfv_tdeco"></div>
        <div class="pgfv_conte">
            <h1>ENTRY</h1>
            <p>エントリー</p>
        </div>
    </div>
    <div class="fv_zig fv_anipos">
        <div class="zig_deco">
            <div class="zdeco_shape">
                <div class="zdeco8_origin">
                    <div class="zdeco8_lmask1">
                        <div class="zdeco8_limg1"></div>
                    </div>
                    <div class="zdeco8_rmask1">
                        <div class="zdeco8_rimg1"></div>
                    </div>
                    <div class="zdeco8_rmask2">
                        <div class="zdeco8_rimg2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contactform_block">
        <div class="contactform_width">
            <div class="form_ttl">エントリー内容を入力してください</div>
            <div class="hx4"></div>
            <div class="form_desc">
                FC西宮へのお問い合わせは、<br class="disb_sp">下記フォームをご利用ください。<br>
                お問い合わせをいただく前に、<br class="disb_sp">本サイトの<a target="_blank" href="<?php echo get_site_url(); ?>/privacy/" target="_blank">プライバシーポリシー</a>を必ずお読みください
            </div>
            <div class="hx4"></div>
            <div class="form_pos">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form_field">
                        <div class="field_cap">所属希望チーム<span>必須</span></div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="1967 / TOPチーム " id="radio_field1-1" checked>
                                    <label for="radio_field1-1">1967 / TOPチーム </label>
                                </div>
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="ブレイズ / 2ndチーム" id="radio_field1-2">
                                    <label for="radio_field1-2">ブレイズ / 2ndチーム</label>
                                </div>
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="グランデ / 3rdチーム" id="radio_field1-3">
                                    <label for="radio_field1-3">グランデ / 3rdチーム</label>
                                </div>
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="フォルティス / 4thチーム" id="radio_field1-4">
                                    <label for="radio_field1-4">フォルティス / 4thチーム</label>
                                </div>
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="ユナイテッド / 5thエンジョイチーム" id="radio_field1-5">
                                    <label for="radio_field1-5">ユナイテッド / 5thエンジョイチーム</label>
                                </div>
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="アカデミー/スクールについて" id="radio_field1-6">
                                    <label class="pneed_reset" for="radio_field1-6">アカデミー/スクールについて</label>
                                </div>
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="シニア / 40歳以上" id="radio_field1-7">
                                    <label for="radio_field1-7">シニア / 40歳以上</label>
                                </div>
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="キックス / フットサル" id="radio_field1-7">
                                    <label for="radio_field1-7">キックス / フットサル</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">氏名<span>必須</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" placeholder="西宮　太郎" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">ふりがな<span>必須</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" placeholder="にしのみや　たろう" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">メールアドレス<span>必須</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" placeholder="nishinomiya@example.com" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">メールアドレス確認<span>必須</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" placeholder="確認のためにもう一度ご入力ください" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">電話番号<span>必須</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" placeholder="0123456789" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">年齢<span>必須</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">直近の所属チーム<span>必須</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">過去所属チーム<span>必須</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">希望ポジション/担当<span>必須</span></div>
                        <div class="field_control">
                            <select name="field8_1">
                                <option value="volvo">選択</option>
                                <option value="XXX">XXX</option>
                                <option value="XXX">XXX</option>
                                <option value="XXX">XXX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">コメント<span class="X_2">※アピールポイント等</span></div>
                        <div class="field_control">
                            <textarea class="pneed_reset"></textarea>
                        </div>
                    </div>
                    <div class="privacy_field">入力内容をご確認の上、<br class="disb_sp">送信ボタンをクリックして下さい。</div>
                    <div class="hx4"></div>
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <input type="submit" value="送信" id="form_submit">
                        <div class="form_reset">リセット</div>
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
