<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact2.jpg);"></div>
        <div class="pgfv_front">
            <div class="pgfv_title">
                <h1 class="X_jp">チームサポートへのお問い合わせ</h1>
            </div>
        </div>
    </div>
    <div class="hx6"></div>
    <div class="contactform_block">
        <div class="contactform_width">
            <div class="form_ttl">お問い合わせフォーム</div>
            <div class="hx4"></div>
            <div class="form_desc">
                FC西宮へのお問い合わせは、下記フォームをご利用ください。<br>
                お問い合わせをいただく前に、本サイトの<a href="#" target="_blank">プライバシーポリシー</a>を必ずお読みください
            </div>
            <div class="hx4"></div>
            <div class="form_pos">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form_field">
                        <div class="field_cap">お問い合わせ内容<span>必須</span></div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="スポンサー協力について" id="radio_field1-1" checked>
                                    <label for="radio_field1-1">スポンサー協力について</label>
                                </div>
                                <div class="radio_wrap">
                                    <input class="pneed_reset" type="radio" name="field1" value="サポーターズクラブ入会について" id="radio_field1-2">
                                    <label for="radio_field1-2">サポーターズクラブ入会について</label>
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
                        <div class="field_cap">御社名<span class="X_2">（スポンサー協力についてのみ）</span></div>
                        <div class="field_control">
                            <input class="pneed_reset" placeholder="西宮　太郎" type="text" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">コメント</div>
                        <div class="field_control">
                            <textarea class="pneed_reset"></textarea>
                        </div>
                    </div>
                    <div class="privacy_field">入力内容をご確認の上、 送信ボタンをクリックして下さい。</div>
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
    <div class="hx8"></div>
    <?php get_template_part('template-parts/compartner'); ?>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
