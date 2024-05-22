<?php
get_header();
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/first-visit'); ?>
<?php get_template_part('template-parts/dial-modal'); ?>
<input type="hidden" id="history_id" value="historyId_01">
<?php get_template_part('template-parts/fixed-cta'); ?>
<section id="contain">
    <div class="instad_head"></div>
    <div class="func_fv fvani_pos" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_functions.jpg);">
        <div class="funcfv_title"><h1>使い方と製品機能</h1></div>
    </div>
    <div class="cwidth8">
        <div class="hx8"></div>
        <div class="bflow_rel">
            <div class="bflow_bg"></div>
            <div class="bflow_text"><span>Basic Flow</span>基本的な流れ</div>
        </div>
    </div>
    <div class="cwidth9">
        <div class="flow_sec pioup">
            <div class="flow_no">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_no1.svg">
            </div>
            <div class="hx1"></div>
            <div class="flow_title">初回診察</div>
            <div class="hx2"></div>
            <div class="flow_row">
                <div class="flow_left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_left1.jpg">
                </div>
                <div class="flow_right">
                    <div class="flow_text">
                        初回は患者問診がまだ未実施で患者情報が少ないため、まずは基本的な指導から開始します。
                    </div>
                    <div class="hx4"></div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shot1.png">
                </div>
            </div>
        </div>
        <div class="flow_sec pioup">
            <div class="flow_no">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_no2.svg">
            </div>
            <div class="hx1"></div>
            <div class="flow_title">患者問診</div>
            <div class="hx2"></div>
            <div class="flow_row">
                <div class="flow_left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_left2.jpg">
                </div>
                <div class="flow_right">
                    <div class="flow_text">
                        問診に要する時間は初回のみ15分程度、2回目以降は数分です。<br>
                        なお、問診をスキップすることも可能です。（但し、指導精度は低下します）
                    </div>
                    <div class="hx4"></div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shot2.png">
                </div>
            </div>
        </div>
        <div class="pmh_anchor" id="func_step3"></div>
        <div class="flow_sec pioup">
            <div class="flow_no">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_no3.svg">
            </div>
            <div class="hx1"></div>
            <div class="flow_title">次回診察</div>
            <div class="hx2"></div>
            <div class="flow_row">
                <div class="flow_left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_left3.jpg">
                </div>
                <div class="flow_right">
                    <div class="flow_text">
                        2回目以降から本格的な、生活習慣指導を実施します。<br>
                        各種の必要情報は、問診結果やガイドライン条件等に基づきデフォルト表示されますので、医師の先生方は内容を確認の上、特に変更が必要なければ、<b>最少3クリックで指導が完結します。</b><br>
                        ※もちろん、必要に応じて、様々な条件を変更することも可能です。
                    </div>
                </div>
            </div>
            <div class="hx2"></div>
            <div class="pmh_anchor" id="func_autorank"></div>
            <div class="just_img">
                <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/shot3.png">
                <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/shot3_sp.png">
            </div>
        </div>
        <div class="ika_sec pioup">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ika.svg">
            <div class="hx1"></div>
            <div class="ika_text">以降、2と3を繰り返し</div>
        </div>
    </div>
    <div class="tpfirst_uspace"></div>
    <div class="cwidth8">
        <div class="pmh_anchor" id="func_role"></div>
        <div class="bflow_rel pioup">
            <div class="bflow_bg"></div>
            <div class="bflow_text"><span>Role Patterns</span>院内の役割分担パターン</div>
        </div>
        <div class="hx2"></div>
        <div class="bflow_next pioup">
            <span>生活習慣病DX</span>では、院内の役割分担に関して、様々なパターンで使って頂けるようになっています。
        </div>
    </div>
    <div class="bflow_uspace"></div>
    <div class="cwidth9">
        <div class="role_bg">
            <div class="role_pattern pioup">パターン1</div>
            <div class="hx2"></div> 
            <div class="role_row">
                <div class="role_col pioup">
                    <div class="rolecol_h3">医師</div>
                    <div class="hx1"></div>
                    <div class="rolecol_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/role01.jpg"></div>
                    <div class="hx1"></div>
                    <div class="rolecol_p">
                        医師は、<span class="colordx">生活習慣病DX</span>を最少3クリックで療養計画書や患者用資料の基となる治療方針決定に集中します。
                    </div>
                </div>
                <div class="rolecol_arrow pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rolecol_arrow.svg"></div>
                <div class="role_col pioup">
                    <div class="rolecol_h3">看護師・事務員等</div>
                    <div class="hx1"></div>
                    <div class="rolecol_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/role02.jpg"></div>
                    <div class="hx1"></div>
                    <div class="rolecol_p">
                        療養計画書や患者用資料は、看護師・事務員等が、患者様にお渡しします。
                    </div>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="pioup">
                <div class="role_pattern pioup">パターン2</div>
                <div class="hx2"></div>
                <div class="rolecol_h3">医師</div>
                <div class="hx1"></div>
                <div class="rolecol_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/role03.jpg"></div>
                <div class="hx1"></div>
                <div class="rolecol_p">
                    医師は、生活習慣病DXを最少3クリックで療養計画書や患者用資料の基となる治療方針を決定すると同時に、療養計画書や患者用資料をその場で印刷し、患者様へ資料内容の説明も加えながらお渡しします。
                </div>
            </div>
        </div>
    </div>
    <div class="tpfirst_uspace"></div>
    <div class="cwidth8">
        <div class="pmh_anchor" id="func_doc"></div>
        <div class="bflow_rel pioup">
            <div class="bflow_bg"></div>
            <div class="bflow_text"><span>Documents</span>患者様用の資料</div>
        </div>
        <div class="hx2"></div>
        <div class="bflow_next pioup">
            医師の治療方針を分かりやすく患者様へ伝えるために、<span class="colordx">生活習慣病DX</span>では各患者様へ個別化された資料を自動生成します。
        </div>
    </div>
    <div class="bflow_uspace"></div>
    <div class="cwidth9">
        <div class="role_bg">
            <div class="doc_row">
                <div class="doc_left">
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/doc01.png" data-fancybox="1" data-caption="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doc01.png">
                    </a>
                </div>
                <div class="doc_right">
                    <div class="doc_h3">生活習慣病 療養計画書</div>
                    <div class="hx2"></div>
                    <div class="doc_p">
                        生活習慣病管理料では、学会等の診療ガイドライン等を参考にすることが算定の要件になっています。<br>
                        診療ガイドライン等に丁重に従うと、必然的に<font color="#C00000"><b>患者様毎に個別化された記載内容の濃い資料</b></font>になりますが、<span class="colordx">生活習慣病DX</span>ではこれを最少3クリックで自動作成します。
                    </div>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="pioup">
                <div class="doc_h3"><span class="colordx">生活習慣病DX</span>オリジナルの患者用資料</div>
                <div class="hx2"></div>
                <div class="doc_p"><span class="colordx">生活習慣病DX</span>では、提携の療養計画書では不十分な点を患者様に分かりやすく補足する資料も、療養計画書と合わせて自動で作成します。</div>
            </div>
            <div class="hx4"></div>
            <div class="doc_row1">
                <div class="doc_col1">
                    <div class="doc_h4">治療方針のまとめ</div>
                    <div class="hx1"></div>
                    <div class="docol1_img">
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/doc02.png" data-fancybox="治療方針のまとめ" data-caption="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doc02.png">
                        </a>
                    </div>
                </div>
                <div class="doc_col1">
                    <div class="doc_h4">指導項目の具体化と実行記録</div>
                    <div class="hx1"></div>
                    <div class="docol1_img">
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/doc03.jpg" data-fancybox="指導項目の具体化と実行記録" data-caption="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doc03.jpg">
                        </a>
                    </div>
                </div>
                <div class="doc_col1">
                    <div class="doc_h4">指導項目の実行のポイント</div>
                    <div class="hx1"></div>
                    <div class="docol1_img">
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/doc04.jpg" data-fancybox="指導項目の実行のポイント" data-caption="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doc04.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bflow_uspace"></div>
    <div class="tpfirst_uspace"></div>
    <div class="cwidth8">
        <div class="pmh_anchor" id="func_guide"></div>
        <div class="bflow_rel pioup">
            <div class="bflow_bg"></div>
            <div class="bflow_text"><span>Guidelines</span>使用しているガイドライン</div>
        </div>
        <div class="hx2"></div>
        <div class="bflow_next pioup">
            <span>生活習慣病DX</span>のアルゴリズムは、糖尿病・高血圧・脂質異常症に関連する28種のガイドライン等を使用しています（2024年4月現在）。<br>
            各ガイドラインは常に更新されていくため、<span>生活習慣病DX</span>もその更新内容を数か月以内に反映するように努めていきます。
        </div>
    </div>
    <div class="guidetb_scroller pioup">
        <div class="guide_tb">
            <div class="guide_cap"><span>生活習慣病DX</span>生活習慣病DXで使用している診療ガイドライン等（2024年4月現在）</div>
            <div class="hx4"></div>
            <table>
                <tr><th>タイトル</th><th>年度・版元</th><th>発行・編集等</th></tr>
                <tr>
                    <td>糖尿病診療ガイドライン</td>
                    <td>2019</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>糖尿病治療ガイド</td>
                    <td>2022-2023</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>高齢者糖尿病診療ガイドライン</td>
                    <td>2023</td>
                    <td>日本糖尿病学会・日本老年医学会</td>
                </tr>
                <tr>
                    <td>高齢者糖尿病治療ガイド</td>
                    <td>2021</td>
                    <td>日本糖尿病学会・日本老年医学会</td>
                </tr>
                <tr>
                    <td>患者さんとその家族のための糖尿病　治療の手引き</td>
                    <td>2023 改訂第58版増強</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>糖尿病療養指導の手引き</td>
                    <td>改訂第5版</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>糖尿病食事療法のための食品交換表</td>
                    <td>第7版</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>糖尿病食事療法のための食品交換表【活用編】献立例とその実践</td>
                    <td>第2版</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>糖尿病腎症の食品交換表</td>
                    <td>第3版</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>糖尿病患者に対する歯周治療ガイドライン</td>
                    <td>改定第3版2023</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>高血圧治療ガイドライン</td>
                    <td>2019</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>高血圧診療ガイド-高血圧治療ガイドライン2019準-</td>
                    <td>2020</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>高血圧診療ステップアップ-高血圧治療ガイドラインを極める-</td>
                    <td>－</td>
                    <td>日本糖尿病学会</td>
                </tr>
                <tr>
                    <td>動脈硬化性疾患予防のための脂質異常症診療ガイド</td>
                    <td>2023年版</td>
                    <td>日本動脈硬化学会</td>
                </tr>
                <tr>
                    <td>動脈硬化性疾患予防ガイドライン</td>
                    <td>2022年版</td>
                    <td>日本動脈硬化学会</td>
                </tr>
                <tr>
                    <td>低脂血症の診断と治療　動脈硬化性疾患予防のための脂質異常症診療ガイド</td>
                    <td>2023年版</td>
                    <td>日本動脈硬化学会</td>
                </tr>
                <tr>
                    <td>一般社団法人日本動脈硬化学会WEBサイト</td>
                    <td>ー</td>
                    <td>日本動脈硬化学会</td>
                </tr>
                <tr>
                    <td>エビデンスに基づくCKD診療ガイドライン</td>
                    <td>2023</td>
                    <td>日本腎臓学会</td>
                </tr>
                <tr>
                    <td>医師・コメディカルのための慢性腎臓病生活・食事指導マニュアル</td>
                    <td>－</td>
                    <td>日本腎臓学会</td>
                </tr>
                <tr>
                    <td>慢性腎臓病生活・食事指導マニュアル―栄養指導実践編</td>
                    <td>－</td>
                    <td>日本腎臓学会</td>
                </tr>
                <tr>
                    <td>慢性腎臓病に対する食事療法基準</td>
                    <td>2014年版</td>
                    <td>日本腎臓学会</td>
                </tr>
                <tr>
                    <td>サルコペニア診療ガイドライン</td>
                    <td>2017年版</td>
                    <td>日本サルコペニア・フレイル学会</td>
                </tr>
                <tr>
                    <td>肥満症診療ガイドライン</td>
                    <td>2022</td>
                    <td>日本肥満学会</td>
                </tr>
                <tr>
                    <td>日本人の食事摂取基準</td>
                    <td>2020年版</td>
                    <td>厚生労働省</td>
                </tr>
                <tr>
                    <td>健康づくりのための身体活動・運動ガイド</td>
                    <td>2023</td>
                    <td>厚生労働省</td>
                </tr>
                <tr>
                    <td>e-ヘルスネット</td>
                    <td>－</td>
                    <td>厚生労働省</td>
                </tr>
                <tr>
                    <td>食育の推進</td>
                    <td>－</td>
                    <td>厚生労働省</td>
                </tr>
                <tr>
                    <td>健康に配慮した飲酒に関するガイドライン</td>
                    <td>－</td>
                    <td>厚生労働省</td>
                </tr>
            </table>
        </div>
    </div>
    
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
