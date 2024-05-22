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
    <div class="func_fv fvani_pos" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_faq.jpg); background-size:contain;">
        <div class="funcfv_title"><h1>FAQ</h1></div>
    </div>
    <div class="cwidth9">
        <div class="hx8"></div>
        <div class="faq_content">
            <div class="faq_row pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">申し込みは、どのようにすればよろしいでしょうか。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>WEB申し込み、または電話申し込みが可能です。以下のボタンからお申込み下さい。<br>
                            なお、WEB申込みは全日24時間可能、電話申込みは、平日の10-20時で可能です。</p>
                            <div class="hx4"></div>
                            <div class="faq_cta">
                                <a class="cta_btn" href="https://www.imedx-service.com/plans"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta_mail.svg"><span>WEB申込</span></a>
                                <a class="cta_btn X_phone open_dial_modal" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta_phone.svg"><span>050-3667-7433</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq_row pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">申し込みから使用を開始可能になるまで、どれくらいの時間がかかりますか。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>即日使用可能です。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq_row pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">料金支払い方法はどのようなものがありますか。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>
                                クレジットカード払いと、口座振替が選択できます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq_row  pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">使用方法はどのように習得すればよろしいでしょうか。<br>
                        また習得にどの程度の時間がかかりますか。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>申し込み後に、説明動画とトレーニング用サイトにて習得できます。平均的に、1時間程度かかります。<br>また、電話もしくはWEB会議による習得のサポートも実施しています（平日の10-20時）。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq_row  pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">無料トライアル後や契約中に解約する場合は、どうすればよいでしょうか。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>申し込み後に案内される管理画面がありますので、そこから解約可能です。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq_row  pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">生活習慣病DXの薬事上の区分は何になりますか。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>医療機器プログラムクラスⅠ相当になります。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq_row  pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">電子カルテとの連携は必要でしょうか。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>電子カルテとの連携は不要です。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq_row  pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">生活習慣病DXの使用環境を教えて下さい。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>
                                生活習慣病DXは、インターネットに接続された、<br>
                                ① 医師のPC用ソフトウェア<br>
                                ② 事務員・看護師のPC用ソフトウェア<br>
                                ③ 患者のスマートフォン用アプリ or PC用ソフトウェア（③はなしでも使用可能）<br>
                                で構成されます。<br>
                                ①②はWindowsもしくはMac OSにおいて、Google Chrome、Microsoft Edgeのウェブ  ブラウザ上で動作します。③は、スマートフォンの場合、iOSとAndroidで、PCの場合WindowsもしくはMac OSにおいて、Google Chrome、Microsoft Edge、Safari等の ウェブブラウザ上で動作します動作します。<br>
                                また、①もしくは②のPCとつながったA4を印刷できるプリンターが必要になります。<br>
                                <!-- その他の要件は以下のとおりです。 -->
                            </p>
                            <!-- <h3>動作環境</h3>
                            <p>① 医師のPC用ソフトウェア ② 事務員・看護師のPC用ソフトウェア、③ 患者のPC用ソフトウェア</p>
                            <table class="faq_tb">
                                <tr>
                                    <th>OS</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>ブラウザ</th>
                                    <td></td>
                                </tr>
                            </table>
                            <p>④ 患者のスマートフォン用アプリ</p>
                            <table class="faq_tb">
                                <tr>
                                    <th>OS</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>ブラウザ</th>
                                    <td></td>
                                </tr>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq_row  pioup">
                <div class="faq_header">
                    <div class="faq_cap">
                        <div class="faq_qtext">Q.</div>
                        <div class="faq_captext">生活習慣病DXを使用するための院内機材の注意点はありますか。</div>
                    </div>
                </div>
                <div class="faq_body">
                    <div class="faq_bodyrow">
                        <div class="faq_atext">A.</div>
                        <div class="faq_answer">
                            <p>生活習慣病DXは、通常のPCやそれに接続できるモニターで使用が可能です。<br>
                            なお、電子カルテ用のモニターには、電子カルテによっては、その電子カルテ以外のソフトウェアの使用ができなかったり、インターネットへの接続ができないものもあります。その場合は、別のPCやモニターをご用意下さい。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hx12"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
