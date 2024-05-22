<?php
get_header();
?>
<section id="contain">    	        
    <div class="banner_block_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img.svg) no-repeat top center; background-size:cover;"> 
        <div class="banner_overlay_hp">            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_hp">                    	
                        <div class="banner_middle_hp"> 
                            <div class="banner_top_hp">
                                <div class="banner_left_hp">
                                    <div class="banner_left_title_hp">
                                        <h3>最新情報</h3>
                                    </div>
<?php
$args = array(
    'post_type' => 'post',
    'paged' => get_query_var('paged'),
    'orderby' => 'publish_date',
    'posts_per_page' => 3,
    'order' => 'DESC',
);
$query = new WP_Query($args);
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y年m月d日');
        $loop_permalink = get_the_permalink($loop_id);
        $loop_category_objects = get_the_category($loop_id);
        $loop_category_name = "";
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
?>                                    
                                    <div class="banner_left_info_hp">
                                        <a href="<?php echo $loop_permalink; ?>">
                                            <div class="banner_left_in_hp">
                                                <?php echo $loop_date; ?>
                                            </div>
                                            <div class="banner_info_in_hp">
                                                <?php echo $loop_category_name; ?>
                                            </div>
                                            <div class="banner_left_text_hp">
                                                <?php echo $loop_title; ?>
                                            </div>
                                        </a>
                                    </div>
<?php
    endwhile;
endif;
?>
                                </div>    
                                <div class="banner_right_hp">
                                    <div class="banner_right_title_hp">
                                        <h1>顧客利益のために動くIFA</h1>
                                        <p>弊社は一般的な株式の売買にとどまらず、投資先企業に対して企業価値向上へ向けた働きかけまで行います。しかしながら、通常の売買手数料以外の別途手数料は発生しません。</p>
                                    </div>
                                    <div class="banner_right_info_hp">
                                        <div class="banner_right_in_hp">
                                            ―口座開設はこちらから―
                                        </div>
                                        <div class="banner_info_right_hp">
                                            以下からお取引する証券会社をお選び下さい。
                                        </div>
                                        <div class="banner_text_hp">
                                            ※その際に弊社名とご希望の担当者をお伝え下さい。
                                        </div>
                                    </div>
                                    <div class="banner_right_about_hp">
                                        <div class="banner_right_in_hp">
                                            <div class="banner_right_img_hp">
                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img2.svg" alt=""></a>
                                            </div>
                                            <div class="banner_right_text_hp">
                                                <p>0120-581-861<span>(口座開設)</span></p>
                                            </div>
                                        </div>
                                        <div class="banner_right_in_hp">
                                            <div class="banner_right_img_hp">
                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img3.svg" alt=""></a>
                                            </div>
                                            <div class="banner_right_text_hp">
                                                <p>0120-746-104<span>(口座開設)</span></p>
                                            </div>
                                        </div>
                                        <div class="banner_right_in_hp">
                                            <div class="banner_right_img_hp">
                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img4.svg" alt=""></a>
                                            </div>
                                            <div class="banner_right_text_hp">
                                                <p>0120-753-960<span>(口座開設)</span></p>
                                            </div>
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
        </div>
    </div>
    <div class="invest_block_hp"> 
        <div class="invest_overlay_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/invest_img.svg) no-repeat top center; background-size:cover;">            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 invest_block_in_hp">                    	
                        <div class="invest_middle_hp"> 
                            <div class="invest_top_hp">
                                <div class="invest_left_hp">
                                    <div class="invest_title_hp">
                                        Our Investments
                                    </div>
                                    <div class="invest_left_box_hp">
                                        <a href="#">
                                            <div class="invest_box_img_hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/invest_icon.svg" alt="">
                                            </div>
                                            <div class="invest_box_text_hp">
                                                徹底的に調査した<br>弊社独自レポートはこちらか<br>	ら無料ダウンロード
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="invest_right_hp">
                                    <div class="invest_right_in_hp">
                                        <div class="invest_right_boxes_hp">
                                            <div class="invest_right_box_hp">
                                                <div class="invest_box_left_hp">
                                                    現在の投資銘柄
                                                </div>
                                                <div class="invest_box_right_hp">
                                                    SECカーボン（5304）
                                                </div>
                                            </div>
                                            <div class="invest_right_box_hp">
                                                <div class="invest_box_left_hp">
                                                    主要製品
                                                </div>
                                                <div class="invest_box_right_hp">
                                                    世界シェア約 <span>40％</span>
                                                </div>
                                            </div>
                                            <div class="invest_right_box_hp">
                                                <div class="invest_box_left_hp">
                                                    企業価値
                                                </div>
                                                <div class="invest_box_right_hp invest_box_right_in_hp">
                                                    約<span>-300億円</span> (純資産対比)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="invest_right_info_hp">
                                            <div class="invest_right_text_hp">
                                                この様に株価は極めて割安だが、財務基盤が強固且つ素晴らしい事業ポテンシャルを持つ株式をご提案し、弊社自ら企業価値向上へ向けた働きかけを行います。
                                            </div>
                                            <div class="style_btn_hp">
                                                <a href="https://www2.jpx.co.jp/disc/53040/140120220518551374.pdf" target="_blank" class="common_btn_hp invest_btn_hp">この銘柄の詳細はこちらから<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/invest_icon2.svg" alt=""></a>
                                            </div>
                                        </div>
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
    </div>        
    <div class="style_block_hp"> 
        <div class="style_overlay_hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/style_img.svg) no-repeat top center; background-size:cover;">            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 style_block_in_hp"> 
                        <div class="style_title_hp">
                            弊社の投資スタイル
                        </div>                   	
                        <div class="style_middle_hp"> 
                            <div class="style_text_hp">
                                一般的なIFAは金融商品の売買の提案のみですが、我々はお客様への金融商品のご提案をしっかり行う事はもちろん、<br>投資先企業に対して<span>友好的アクティビスト</span>として<br>中長期的な企業価値向上(株価上昇)へ向けた働きかけまで行い、顧客利益の最大化を追求するIFA法人です。
                            </div>
                            <div class="style_btn_hp">
                                <a href="<?php echo get_site_url(); ?>/company/" class="common_btn_hp">About Us<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/invest_icon2.svg" alt=""></a>
                            </div>		     
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
        <div class="clearfix"></div>
        </div>
    </div>        
    <div class="inquiry_block_hp">            
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inquiry_block_in_hp">                    	
                    <div class="inquiry_middle_hp">
                        <a href="<?php echo get_site_url(); ?>/contact/">
                        <div class="inquiry_top_hp">
                            <div class="inquiry_left_hp">
                                <div class="inquiry_title_hp">
                                    お問い合わせ
                                </div>
                                <div class="inquiry_info_hp">
                                    Contact us
                                </div>
                            </div>
                            <div class="inquiry_right_hp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inquiry_icon.svg" alt="">
                            </div>  			     
                        </div></a>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>  
</section>

<?php
get_footer();
