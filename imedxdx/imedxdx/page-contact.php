<?php
get_header();
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/first-visit'); ?>
<?php get_template_part('template-parts/dial-modal'); ?>
<input type="hidden" id="history_id" value="historyId_01">
<?php get_template_part('template-parts/fixed-cta'); ?>
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_text">
            <h2>
                <font color="#4597A0">生活習慣病DX</font>販売開始時の案内ご希望フォーム
            </h2>
        </div>
    </div>
    <div class="cwidth12">
        <div class="hx6"></div>
        <div class="index_block">
            <p>現在、生活習慣病DXの正式販売開始は2024年5月1日を予定しています。</p>
            <p>また、先行予約割引キャンペーンの実施を3月中旬から予定しています。</p>
            <p>これらのタイミングでのメール等での案内をご希望のお客様は、以下のフォームに必要事項を記入して、送信下さい。</p>
        </div>
    </div>
    <div class="cwidth12">
        <div class="hx8"></div>
        <div class="cfsteps">
            <div class="cfstep1">1.お客様情報の入力</div>
            <div class="cfstep2">2.内容の確認</div>
            <div class="cfstep3">3.送信完了</div>
        </div>
        <div class="hx7"></div>
        <div class="cf_h2"><h2>個人情報の取り扱いについて</h2></div>
        <div class="hx2"></div>
        <div class="cf_p">
            <p>ご提供頂いた個人情報は、当社の個人情報保護方針に基づき適切に管理いたします。</p>
            <p>また、これらの情報はお問い合わせへの返信やお客様への情報提供のみに用い、<br class="disb_pc">ご本人様の同意なく他の目的には利用いたしません。</p>
        </div>
        <div class="hx4"></div>
    </div>
    <div class="form_block">
        <div class="cwidth12">
            <div class="form_pos">
                <form action="<?php echo get_site_url(); ?>/contact-confirm/" method="post" enctype="multipart/form-data" id="contact_form">
                    <div class="form_field">
                        <div class="field_left">
                            クリニック名
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <input type="text" name="field1" required/>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <select name="field1" required>
                                        <option value="">ご希望の店舗をお選びください</option>
                                        <option value="メセル新宿院">メセル新宿院</option>
                                        <option value="メセル名古屋駅前院">メセル名古屋駅前院</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            医師のお名前
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_nameset">
                                    <div class="field_nameset1">
                                        <div class="field_nameset2">姓</div>
                                        <div class="field_nameset3"><input type="text" name="field2_1" required/></div>
                                        <div class="field_nameset5"></div>
                                        <div class="field_nameset4"><span>必須</span></div>
                                        <div class="field_nameset2">名</div>
                                        <div class="field_nameset3"><input type="text"  name="field2_2" required/></div>
                                    </div>
                                    <div class="hx2"></div>
                                    <div class="field_nameset1">
                                        <div class="field_nameset2">せい</div>
                                        <div class="field_nameset3"><input type="text" pattern="^[ぁ-んァ-ヶー]+$" name="field3_1"/></div>
                                        <div class="field_nameset5"></div>
                                        <div class="field_nameset4">&nbsp;</div>
                                        <div class="field_nameset2">めい</div>
                                        <div class="field_nameset3"><input type="text" pattern="^[ぁ-んァ-ヶー]+$" name="field3_2"/></div>
                                    </div>
                                </div>
                                <div class="hx1"></div>
                                <div class="field_datesetp">
                                    ★全角でご記入ください。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            メールアドレス
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <input type="email" name="email" required/>
                                </div>
                                <div class="hx1"></div>
                                <div class="field_datesetp">★半角英数字でご記入ください。</div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            電話番号
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <!-- <input type="text" name="field8" required/> -->
                                    <input type="tel" name="電話番号" size="50" required/>
                                </div>
                                <div class="hx1"></div>
                                <div class="field_datesetp">★半角英数字でご記入ください。</div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_left">
                            ご使用の電子カルテメーカー<br>
                            (未使用の場合は「なし」と記載）
                        </div>
                        <div class="field_right">
                            <div class="field_reqtext"><span>必須</span></div>
                            <div class="field_vert">
                                <div class="field_control">
                                    <textarea name="field6"></textarea>
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
                                <div class="field_control">
                                    <textarea name="field7"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="privacy_field">
                        <div class="privacy_cap">
                            個人情報のお取扱い
                        </div>
                        <div class="field_control">
                            <div class="form_privacy mycustom_scroll_bar">
                                <div class="form_privacy_inner">
                                    <div class="pg_p">
                                        <p>株式会社iMedX(旧iDP株式会社)は、お客様のプライバシーに係わる個人情報を保護することに細心の注意を払い取り組みます。</p>
                                        <p>メセル発毛HCR法・美顔FCR法において、お客様ご自身の判断により個人情報をご提供いただく場合がございますが、その情報は必要最小限の情報とし、その他の情報のご提供につきましてはお客様の判断を尊重いたします。</p>
                                        <div class="hx3"></div>
                                        <p><b>1.個人情報の収集および利用目的について</b></p>
                                        <div class="hx1"></div>
                                        <p>
                                            株式会社iMedX(旧iDP株式会社)では依頼者・相談者をはじめとする個人情報を取得する場合、利用目的を明示し、適正かつ公正な手段によって行ないます。<br>
                                            <br>
                                            <利用目的><br>
                                            契約関係処理、ご案内、お問い合わせに関する回答の為<br>
                                            事件処理その他の業務遂行を目的とする情報管理・収集、書面等の発送及び連絡の為
                                        </p>
                                        <div class="hx3"></div>
                                        <p><b>2.個人情報の安全管理・保管</b></p>
                                        <div class="hx1"></div>
                                        <p>株式会社iMedX(旧iDP株式会社)は、ご提供いただいた個人情報を正確にデータ処理し、株式会社iMedX(旧iDP株式会社)が保有する個人情報の安全性を確保するため、適切な保護・安全対策を実施し、個人情報の紛失、破壊、改ざん、漏えいの防止に努めます。</p>
                                        <p><b></b></p>
                                        <div class="hx1"></div>
                                        <p></p>
                                        <p><b>3.個人情報の提供</b></p>
                                        <div class="hx3"></div>
                                        <div class="hx1"></div>
                                        <p>個人情報について、お客様ご本人の同意を得ずに株式会社iMedX(旧iDP株式会社)が第三者に提供することは、以下の場合を除き、原則いたしません。</p>
                                        <p>
                                            法令に基づく場合<br>
                                            人の生命、身体又は財産の保護のために必要がある場合<br>
                                            国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合<br>
                                            業務の遂行に係り、官公署へ書類を提出する場合。<br>
                                            広告等のための分析を行う場合。
                                        </p>
                                        <div class="hx3"></div>
                                        <p><b>4.個人情報の開示･利用停止・消去について</b></p>
                                        <div class="hx1"></div>
                                        <p></p>
                                        <p><b></b></p>
                                        <div class="hx1"></div>
                                        <p>個人情報の情報主体であるご本人が自己の個人情報について、開示、訂正、利用停止、消去等の要求をなされた場合は、適切な方法により、ご本人であることの確認を経た上で、法令または業務上拒否することが認められた場合を除き速やかに対応致します。</p>
                                        <div class="hx3"></div>
                                        <p><b>5.個人情報保護方針の改定</b></p>
                                        <div class="hx1"></div>
                                        <p>株式会社iMedX(旧iDP株式会社)では、社会情勢の変化、技術の進歩、諸環境の変化等に応じ、事前の予告なくプライバシーポリシーを変更することがあります。</p>
                                        <div class="hx3"></div>
                                        <p><b>6.著作権</b></p>
                                        <div class="hx1"></div>
                                        <p>本ウェブサイトのコンテンツ(文章、写真、画像、データ、イメージ、グラフィックス、など)及びこれらの配置・編集および構造などについての著作権は株式会社iMedX(旧iDP株式会社)に帰属しておりますので、これらの無断使用（Webサイトの全部あるいは一部の複製、送信、放送、出版、頒布、掲示、譲渡、貸与、翻訳、翻案、使用許諾、再利用等を含む）、転載、変更、改ざん、商業的利用はご遠慮ください。</p>
                                        <div class="hx3"></div>
                                        <p><b>7.免責事項</b></p>
                                        <div class="hx1"></div>
                                        <p>本ウェブサイトに掲載されている情報には万全を期していますが、法律の改正その他の原因により株式会社iMedX(旧iDP株式会社)の情報を利用することによって生じた損害に対して一切の責任（間接損害・特別損害・結果的損害及び付随的損害）を負うものではありません。情報の利用に関しましては全て最終自己責任で行って頂くようお願いします。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <button type="submit" class="field_contactbtna">「個人情報のお取扱い」に同意して<br class="disb_sp">確認画面へ進む</button>
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
