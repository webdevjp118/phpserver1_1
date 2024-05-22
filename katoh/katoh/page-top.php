<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="top_fv">
        <div class="tpfv_back">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_fv.jpg">
        </div>
        <div class="tpfv_title">
            <h1>
                施術を行っています。<br>
                サポートしたいという想いで<br>
                心の底から寄り添いたい。<br>
            </h1>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="cwidth12">
        <div class="tptitle1 io fade upS">
            <h2>お知らせ</h2>
        </div>
        <div class="hx4"></div>
        <div class="tpbrod_list">
<?php
$related_args = array(
	'post_type' => 'post',
    'posts_per_page' => 3,
);
$query = new WP_Query( $related_args );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_category_name = "";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>             
            <a class="tpbrod_item io fade upS" href="<?php echo $loop_permalink; ?>">
                <div class="tpbrod_arrow">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpbrod_right.svg">
                </div>
                <div class="tpbrod_img">
                    <img src="<?php echo $loop_thumb_url; ?>">
                </div>
                <div class="tpbrod_right">
                    <div class="tpbrod_top">
                        <div class="tpbrod_date"><?php echo $loop_date; ?></div>
                        <div class="tpbrod_cat"><?php echo $loop_category_name; ?></div>
                    </div>
                    <div class="hx2"></div>
                    <div class="tpbrod_title"><?php echo $loop_title; ?></div>
                </div>
            </a>
<?php
    endwhile;
endif;
?>            
        </div>
        <div class="hx4"></div>
        <div class="tpnews_btn io fade upS">
            <a class="com_btn" href="<?php echo get_site_url(); ?>/blog/">詳しく⾒る</a>
        </div>
        <div class="hx10"></div>
        <div class="pgtitle1 io fade upS">
            <h2>加藤接骨院にご相談ください！</h2>
            <div class="hx2"></div>
            <div class="pgtitle1_line"></div>
        </div>
        <div class="hx4"></div>
        <div class="try_row">
            <div class="try_item io fade upS">
                <div class="try_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/try01.svg">
                </div>
                <div class="try_text">
                    「腰」が<span>ズキッ</span>として<br>
                    寝返りができない
                </div>
            </div>
            <div class="try_item io fade upS">
                <div class="try_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/try02.svg">
                </div>
                <div class="try_text">
                    「股関節」「膝」が<span>ズキッ</span>として<br>
                    歩けない
                </div>
            </div>
            <div class="try_item io fade upS">
                <div class="try_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/try03.svg">
                </div>
                <div class="try_text">
                    じっとしていると<br>
                    「お尻」「太もも」が<span>うずく</span>
                </div>
            </div>
        </div>
        <div class="hx10"></div>
        <div class="pgtitle1 io fade upS">
            <h2>初めての⽅へ</h2>
            <div class="hx2"></div>
            <div class="pgtitle1_line"></div>
        </div>
        <div class="hx4"></div>
        <div class="tpstart">
            <div class="tpstart_left">
                <img class="io fade upS" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpstart01.jpg">
                <img class="io fade upS" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpstart02.jpg">
            </div>
            <div class="tpstart_right">
                <img class="io fade upS" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpstart03.jpg">
                <div class="hx6"></div>
                <div class="tpstart_title io fade upS">
                    今まで痛みに悩んできたあなたに応えられるように私も真剣に取り組みます。
                </div>
                <div class="hx4"></div>
                <div class="tpstart_text io fade upS">
                    • 「何が原因かわからず、加齢と諦めている」<br>
                    • 「色々通ったけどなかなか良くならない」<br>
                    とお悩みの方に心の底から寄り添いたい·サポートしたいという想いで施術を行っています。本気で改善したい方のご連絡をお待ちしております。私も真剣に取り組みます。
                </div>
                <div class="hx4"></div>
                <div class="tpstart_btn io fade upS">
                    <a class="com_btn" href="<?php echo get_site_url(); ?>/guide/">詳しく⾒る</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="reason_res">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue4_top.svg">
    </div>
    <div class="reason_bg">
        <div class="cwidth12">
            <div class="hx4"></div>
            <div class="pgtitle1 X_dark io fade upS">
                <h2>加藤接骨院が選ばれる理由</h2>
                <div class="hx2"></div>
                <div class="pgtitle1_line"></div>
            </div>
            <div class="hx4"></div>
            <div class="slogan_row X_dark">
                <div class="slogan_item io fade upS">
                    <div class="slogan_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason01.svg">
                    </div>
                    <div class="hx2"></div>
                    <div class="slogan_title">23年以上の実績と安心</div>
                    <div class="hx1"></div>
                    <div class="slogan_text">
                        中には、20年以上のお付き合いの患者様もいらっしゃいます。我々は、一生涯かけて患者様の健康生活に寄り添う思いです。
                    </div>
                </div>
                <div class="slogan_item io fade upS">
                    <div class="slogan_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason02.svg">
                    </div>
                    <div class="hx2"></div>
                    <div class="slogan_title">急患にも対応<br><span>（夜間や祝日の午前中など）<span></div>
                    <div class="hx1"></div>
                    <div class="slogan_text">
                        夜間に小さなお子様が肘を脱臼してしまった時や、祝日に捻挫してしまった時なども、できる限り対応いたします。まずはお電話ください。
                    </div>
                </div>
                <div class="slogan_item io fade upS">
                    <div class="slogan_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason03.svg">
                    </div>
                    <div class="hx2"></div>
                    <div class="slogan_title">女性が施術することも可能</div>
                    <div class="hx1"></div>
                    <div class="slogan_text">
                        女性スタッフに相談したい..<br>
                        そんな女性の患者様も安心です。<br>
                        当院は、女性のスタッフの施術も可能です。女性ならではのきめ細やかな配慮と温かい手による施術を提供しています。<br>
                        また、女性目線から歩き方や姿勢など少しの変化にも気付くように努力しています。
                    </div>
                </div>
            </div>
            <div class="hx8"></div>
            <div class="reason_btn io fade upS">
                <a class="com_btn X_dark" href="<?php echo get_site_url(); ?>/about/">詳しく⾒る</a>
            </div>
            <div class="hx4"></div>
        </div>
        <div class="reason_bres">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/white2_top.svg">
        </div>
    </div>
    <div class="cwidth12">
        <div class="hx6"></div>
        <div class="pgtitle1 io fade upS">
            <h2>こんな悩みはありませんか？</h2>
            <div class="hx2"></div>
            <div class="pgtitle1_line"></div>
        </div>
        <div class="hx4"></div>
        <div class="trouble1_row">
            <div class="trouble1_img io fade upS">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trouble01.svg">
            </div>
            <div class="trouble1_right io fade upS">
                <div class="trouble1_text">
                    <p>「腰」が<span>ズキッ</span>として寝返りができない</p>
                    <p>「股関節」「膝」が<span>ズキッ</span>として歩けない</p>
                    <p>じっとしていると「お尻」「太もも」が<span>うずく</span></p>
                    <p>「体がたるんでいく」</p>
                    <p>「食事量は変わっていないのに太る」</p>
                </div>                
            </div>
        </div>
        <div class="hx6"></div>
        <div class="trouble2_row">
            <div class="trouble2_col io fade upS">
                <div class="trouble2_title">
                    <h3>この状態は、</h3>
                </div>
                <div class="trouble2_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trouble03.svg">
                </div>
                <div class="trouble2_text">
                    ・  筋肉量が少ない<br>
                    ・『筋肉』に弾力がなく硬い<br>
                    ・『関節』がスムーズに動かない
                </div>
            </div>
            <div class="trouble2_col io fade upS">
                <div class="trouble2_title">
                    <h3>放っておくと..</h3>
                </div>
                <div class="trouble2_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trouble02.svg">
                </div>
                <div class="trouble2_text">
                    将来、歩いたり、動いたりできない..<br>
                    自分らしく生活を送れない..<br>
                    かもしれません。。
                </div>
            </div>
        </div>
        <div class="hx6"></div>
        <div class="turn_sec">
            <div class="turn_title io fade upS">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/turn_l.svg">
                <h2>40代がターニングポイントです！</h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/turn_r.svg">
            </div>
            <div class="hx4"></div>
            <div class="turn_img io fade upS">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/turn.svg">
            </div>
            <div class="hx4"></div>
            <div class="turn_text io fade upS">
                40代後半になると多くの方が<span>体の衰え</span>に<br class="disb_sp">気づきはじめます。<br>
                加えて<span>女性</span>は、脂肪の分解を助ける<span><br class="disb_sp">ホルモンが低</span>下して、<br>
                <span>「脂肪がつきやすい体」・「太りやすい体質」</span>に<br class="disb_sp">変化する時期でもあります。<br>
                <span>今からでも遅くありません！</span><br>
                この<span>体が大きく変化する時期</span>に、<br class="disb_sp">積極的に不安を改善して<br>
                <span>「一生涯自分で歩いて若々しい生活を送る」</span><br>
                第一歩を踏み出してみませんか。
            </div>
        </div>
        <div class="hx6"></div>
        <div class="fun_row io fade upS">
            <div class="fun_left">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fun_bub.svg">
                <div class="fun_text">
                    <p>ズキッとする痛みから解放されたあなたは、不安なく仕事や家事をこなし、<span>「晴れやかな人生を送る」</span>ことができるでしょう。</p>
                </div>
            </div>
            <div class="fun_right">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fun.svg">
            </div>
        </div>
        <div class="hx6"></div>
        <div class="power_row io fade upS">
            <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/power_text.svg">
            <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_power_text.svg">
        </div>
        <div class="hx1"></div>
        <div class="here_sec">
            <div class="here_img io fade upS"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/here.svg"></div>
            <div class="hx2"></div>
            <div class="here_line io fade upS">
                <div class="here_cap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/here_no01.svg">
                    <div class="here_title">施術（痛い原因の根本改善）</div>
                </div>
            </div>
            <div class="hx1"></div>
            <div class="here_ring io fade upS">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/here_ring1.png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/here_ring2.png">
            </div>
            <div class="hx1"></div>
            <div class="here_line io fade upS">
                <div class="here_cap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/here_no02.svg">
                    <div class="here_title">運動指導（ストレッチ、筋トレ、動画有り）</div>
                </div>
                <div class="hx1"></div>
                <div class="here_text">
                    若々しい姿勢・歩くことに必要な筋肉である<br class="disb_pc">
                    <span>「体幹（胴体部分）　お尻　太もも（表）（裏）」</span>を鍛え、<br class="disb_pc">
                    基礎を代謝アップさせます。
                </div>
            </div>
            <div class="hx2"></div>
            <div class="here_plus io fade upS"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/here_plus.svg"></div>
            <div class="hx2"></div>
            <div class="here_line io fade upS">
                <div class="here_cap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/here_no03.svg">
                    <div class="here_title">定期的なメンテナンスを続ける</div>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="here_bottom io fade upS">
                ①～③を継続することで、<br>
                『<span>しなやかな筋肉・滑らかな関節を取り戻して、<br class="disb_sp">キープする</span>』ことをサポートしています。<br>
            </div>
            <div class="hx5"></div>
            <div class="here_final io fade upS">心身ともに健康に、<br class="disb_sp">自分らしい生活を送り続けましょう！</div>
        </div>
        <div class="hx4"></div>
        <div class="assa_row">
            <div class="assa1 io fade upS">
                当院の施術や運動指導を通して、<br>
                ・一生涯歩き続けられる足腰<br>
                ・キビキビと動くことができる身体<br>
                ・若々しい姿勢をキープ（猫背にならない）<br>
                ・転倒しにくい、太りにくい身体に<br>
                ・生活習慣病を予防<br>
                ・精神的にも健康に<br>
            </div>
            <div class="assa2 io fade upS"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/assa_img.svg"></div>
            <div class="assa3 io fade upS">
                <span>遅いなんてことはありません。</span><br>
                40代は、体が大きく変化する、このターニングポイントです。勇気を持って、<span>どうか一歩踏み出してください。</span><br>
                <br>
                本気で悩みに向き合い、<span>「生涯自分で動いて生活を送りたい」</span>とお考えの方の思いを受け止め、真剣に取り組む覚悟です。ご来院をお待ちしております。
            </div>
        </div>
    </div>
    <div class="hx6"></div>
    <div class="wada_res">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue2_top.svg">
    </div>
    <div class="wada_bg X_dark">
        <div class="cwidth12">
            <div class="hx4"></div>
            <div class="pgtitle1 X_dark io fade upS">
                <h2>独⾃の施術で根本回復する理由</h2>
                <div class="hx2"></div>
                <div class="pgtitle1_line"></div>
            </div>
            <div class="hx4"></div>
            <div class="wada_row">
                <div class="wada_item X_dark io fade upS">
                    <div class="wada_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wada01.svg">
                    </div>
                    <div class="hx2"></div>
                    <div class="wada_title">23年以上の<br>実績と安心</div>
                    <div class="hx1"></div>
                    <div class="wada_text">
                        中には、20年以上のお付き合いの患者様もいらっしゃいます。我々は、一生涯かけて患者様の健康生活に寄り添う思いです。
                    </div>
                </div>
                <div class="wada_item X_dark io fade upS">
                    <div class="wada_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wada02.svg">
                    </div>
                    <div class="hx2"></div>
                    <div class="wada_title">のべ30,000人以上の<br>施術実績</div>
                    <div class="hx1"></div>
                    <div class="wada_text">
                        小さなお子様からご高齢の方まで、多くの患者様を施術してきました。どんな方にも丁寧に対応いたしますので、安心してご来院ください。
                    </div>
                </div>
                <div class="wada_item X_dark io fade upS">
                    <div class="wada_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wada03.svg">
                    </div>
                    <div class="hx2"></div>
                    <div class="wada_title">自分にあった腰コルセットや膝サポーターを提案・相談可能</div>
                    <div class="hx1"></div>
                    <div class="wada_text">
                        ヒアリングの上、患者様にあうものをご提案します。腰コルセットや膝サポーターなどの貸し出しも可能です。
                    </div>
                </div>
                <div class="wada_item X_dark io fade upS">
                    <div class="wada_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wada04.svg">
                    </div>
                    <div class="hx2"></div>
                    <div class="wada_title">急患にも対応<br>（夜間や祝日の午前中など）</div>
                    <div class="hx1"></div>
                    <div class="wada_text">
                        夜間に小さなお子様が肘を脱臼してしまった時や、祝日に捻挫してしまった時なども、できる限り対応いたします。まずはお電話ください。
                    </div>
                </div>
            </div>
            <div class="hx8"></div>
        </div>
        <div class="wada_bres">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/white2_top.svg">
        </div>
    </div>
    <div class="voice_bg">
        <div class="cwidth12">
            <div class="hx4"></div>
            <div class="pgtitle1 io fade upS">
                <h2>患者さんの声</h2>
                <div class="hx2"></div>
                <div class="pgtitle1_line"></div>
            </div>
            <div class="voice_row">
<?php
$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'voice'
		)
	)
);
$query = new WP_Query( $related_args );
$voice_count = 0;
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_permalink = get_the_permalink($loop_id);
        $voice_count = $voice_count + 1;
        if($voice_count % 2 == 1) {
            $loop_thumb_url = get_stylesheet_directory_uri()."/images/voice01.svg";
        } else {
            $loop_thumb_url = get_stylesheet_directory_uri()."/images/voice02.svg";
        }
?>            
                <div class="voice_item io fade upS">
                    <div class="voice_img">
                        <img src="<?php echo $loop_thumb_url; ?>">
                    </div>
                    <div class="hx2"></div>
                    <div class="voice_title"><?php echo $loop_title; ?></div>
                    <div class="hx2"></div>
                    <div class="voice_text"><?php echo $loop_content; ?></div>
                </div>
<?php
    endwhile;
endif;	
?>
            </div>
            <div class="hx4"></div>
            <div class="voice_btn io fade upS">
                <a class="com_btn" href="<?php echo get_site_url(); ?>/category/voice/">詳しく⾒る</a>
            </div>
            <div class="hx6"></div>
        </div>
        <div class="wada_bres">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyan2_top.svg">
        </div>
    </div>
    <div class="wada_bg">
        <div class="cwidth12">
            <div class="hx4"></div>
            <div class="pgtitle1 io fade upS">
                <h2>よくある質問</h2>
                <div class="hx2"></div>
                <div class="pgtitle1_line"></div>
            </div>
            <div class="hx4"></div>
            <div class="faq_width io fade upS">
                <div class="faq_content paccordion">
<?php
$qa_no = 1;
if( have_rows('qa', 'option') ):
    while( have_rows('qa', 'option') ) : the_row();
        the_sub_field('title');
        $faq_row = "faq_row pacc";
        if($qa_no == 1) {
            $faq_row = "faq_row pacc pst_show";
        }
        $qa_no = $qa_no + 1;
?>
                    <div class="<?php echo $faq_row; ?>">
                        <div class="faq_header pacc_header">
                            <div class="faq_cap">
                                <div class="faq_qtext">Q.</div>
                                <div class="faq_captext"><?php the_sub_field('q'); ?></div>
                            </div>
                            <div>
                                <img class="pacc_opened" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_icon.svg">
                                <img class="pacc_closed" src="<?php echo get_stylesheet_directory_uri(); ?>/images/minus_icon.svg">
                            </div>
                        </div>
                        <div class="faq_body pacc_collapse">
                            <div class="faq_bodyrow">
                                <div class="faq_atext">A.</div>
                                <div class="faq_answer">
                                    <?php the_sub_field('a'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hx2"></div>
<?php 
    endwhile; 
endif; 
?>
                </div>
            </div>
            <div class="hx6"></div>
        </div>
        <div class="wada_bres">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/white4_top.svg">
        </div>
    </div>
    <div class="cwidth12">
        <div class="hx4"></div>
        <div class="pgtitle1 io fade upS">
            <h2>施術の流れ</h2>
            <div class="hx2"></div>
            <div class="pgtitle1_line"></div>
        </div>
        <div class="hx4"></div>
        <div class="flow_list">
            <div class="flow_item io fade upS">
                <div class="flow_cap">
                    <div class="flow_no">01</div>
                    <div class="flow_title">ご予約</div>
                </div>
                <div class="flow_text">電話or公式LINEから予約</div>
                <div class="flow_line"></div>
                <div class="flow_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow01.jpg"></div>
            </div>
            <div class="flow_item io fade upS">
                <div class="flow_cap">
                    <div class="flow_no">02</div>
                    <div class="flow_title">カウンセリング</div>
                </div>
                <div class="flow_text">症状·お悩み·ご不安な点などをお聞きし、施術内容のご相談をします。(筋肉を緩めるため、電気治療を数分行います)</div>
                <div class="flow_line"></div>
                <div class="flow_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow02.jpg"></div>
            </div>
            <div class="flow_item io fade upS">
                <div class="flow_cap">
                    <div class="flow_no">03</div>
                    <div class="flow_title">施術</div>
                </div>
                <div class="flow_text">施術に入ります。ほぐすことで筋肉のバランスを整え、状態により骨盤の歪みにもアプローチしてゆきます。</div>
                <div class="hx2"></div>
                <div class="flow_bubble">
                    治療後に、今後の進め方についての説明をします。ご納得がいけば、治療を続けてください。（受付で次回のご予約をいただきます。）<br>
                    無理に通院を勧めるようなことはありませんのでご安心ください。
                </div>
                <div class="hx1"></div>
                <div class="flow_line"></div>
                <div class="flow_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow03.jpg"></div>
            </div>
            <div class="flow_item io fade upS">
                <div class="flow_cap">
                    <div class="flow_no">04</div>
                    <div class="flow_title">終了</div>
                </div>
                <div class="flow_text">最後に受付で次回のご予約をいただいて終了です。</div>
                <div class="flow_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow04.jpg"></div>
            </div>
        </div>            
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
