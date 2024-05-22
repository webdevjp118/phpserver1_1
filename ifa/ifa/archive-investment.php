<?php
get_header();
$year_list = [];
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
		$loop_year = get_the_date('Y'); //2020
		$loop_month = get_the_date('m'); //10
		$loop_pdf = get_field('pdf', $loop_id);
		if(!isset($year_list[$loop_year])) $year_list[$loop_year] = [];
		array_push($year_list[$loop_year], array( 'month'=> $loop_month, 'title' => $loop_title, 'pdf'=> $loop_pdf));
    endwhile;
endif;	
?>
<section id="contain">    	        
    <div class="banner_block_op" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img2.png) no-repeat top center;"> 
        <div class="banner_overlay_op">            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_op">                    	
                        <div class="banner_middle_op"> 
                            <div class="banner_top_op">            
                                <div class="banner_info_op">
                                    <h3>Investment </h3>
                                    <h2>投資活動の紹介</h2>
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
    <div class="sent_block_ip"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sent_block_in_ip">                    	
                    <div class="sent_middle_ip"> 
                        <div class="sent_grid_ip">              
                            <div class="sent_grid_box_ip">
                                <a href="#tab_1">
                                    <div class="sent_grid_info_ip">
                                        投資先送付書面及び受領書類
                                    </div>
                                    <div class="sent_grid_img_ip">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow_2.svg" alt="" />
                                    </div>
                                </a>        
                            </div>
                            <div class="sent_grid_box_ip">
                                <a href="#tab_2">
                                    <div class="sent_grid_info_ip">
                                        投資銘柄
                                    </div>
                                    <div class="sent_grid_img_ip">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow_2.svg" alt="" />
                                    </div>
                                </a>        
                            </div>
                            <div class="sent_grid_box_ip">
                                <a href="#tab_3">
                                    <div class="sent_grid_info_ip">
                                        投資方針
                                    </div>
                                    <div class="sent_grid_img_ip">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow_2.svg" alt="" />
                                    </div>
                                </a>        
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="documents_block_ip documents_change4_ip" id="tab_1"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 documents_block_in_ip">
                    <div class="common_title_hp">
                        <div class="common_title_in_hp">                    	
                            <h2>投資先送付書面及び受領書類</h2>
                        </div>   
                    </div>
                    <div class="documents_middle_ip"> 
<?php
foreach($year_list as $year=>$year_item) {
?>						
                        <div class="documents_top_ip">
                            <div class="documents_top_title_ip">
                                <?php echo $year.'年'; ?>
                            </div>
<?php
	foreach($year_item as $item) {
?>
                            <div class="banner_left_info_hp">
                                <a href="<?php echo $item['pdf']; ?>" target="_blank">
                                <div class="banner_left_in_hp documents_change_ip">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon_pdf.svg" alt="" />
                                    <?php echo $item['month'].'月'; ?>
                                </div>
                                <div class="banner_info_in_hp documents_change2_ip">
                                    送付書面 
                                </div>
                                <div class="banner_left_text_hp documents_change3_ip">
                                    <?php echo $item['title']; ?>
                                </div></a>
                            </div>
<?php
	}
?>
                        </div>
<?php
}
?>

                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="sec_block_ip" id="tab_2"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sec_block_in_ip">
                    <div class="common_title_hp">                    	
                        <div class="common_title_in_hp">
                            <h2>弊社が考えるSECカーボン企業価値向上案</h2>
                        </div>
                    </div>
                    <div class="sec_middle_ip"> 
                        <div class="sec_boxes_ip">                 
                            <div class="sec_box_ip">
                                <div class="sec_left_ip">
                                    ①
                                </div>
                                <div class="sec_right_ip">
                                    中期(長期)経営計画の早期策定
                                </div>
                            </div>
                            <div class="sec_box_ip">
                                <div class="sec_left_ip">
                                    ②
                                </div>
                                <div class="sec_right_ip">
                                    顧客基盤拡大に伴う資料作成及び目標設定
                                </div>
                            </div>
                            <div class="sec_box_ip">
                                <div class="sec_left_ip">
                                    ③
                                </div>
                                <div class="sec_right_ip">
                                    株式分割について
                                </div>
                            </div>
                            <div class="sec_box_ip">
                                <div class="sec_left_ip">
                                    ④
                                </div>
                                <div class="sec_right_ip">
                                    配当予想の開示→2023年2月13日に2度目の増配を発表
                                </div>
                            </div>
                            <div class="sec_box_ip">
                                <div class="sec_left_ip">
                                    ⑤
                                </div>
                                <div class="sec_right_ip">
                                    過度なリスクを減らす等のための政策保有株式の売却
                                </div>
                            </div>
                            <div class="sec_box_ip">
                                <div class="sec_left_ip">
                                    ⑥
                                </div>
                                <div class="sec_right_ip">
                                    プライム市場への意向表明
                                </div>
                            </div>
                        </div>
                        <div class="sec_subtitle_ip">
                            <span>④</span>の提案議題ですが、我々の働きかけにより<span>今期2度目の増配</span>を発表いたしました
                        </div>
                        <div class="sec_main_ip">
                            <div class="sec_table_ip">
                                <div class="sec_row_ip">
                                    <div class="sec_row_title_ip">
                                        
                                    </div>
                                    <div class="sec_row_title_ip">
                                        売上高(百万円)
                                    </div>
                                    <div class="sec_row_title_ip">
                                        当期純利益(百万円)
                                    </div>
                                    <div class="sec_row_title_ip">
                                        1株あたりの配当(円)
                                    </div>
                                    <div class="sec_row_title_ip">
                                        配当性向(％)
                                    </div>
                                </div>
                                <div class="sec_row_ip">
                                    <div class="sec_row_in_ip sec_row_in_bg_ip sec_row_in_align_ip">
                                        2019.3
                                    </div>
                                    <div class="sec_row_in_ip sec_row_in_bg_ip">
                                        37,935
                                    </div>
                                    <div class="sec_row_in_ip sec_row_in_bg_ip">
                                        11,838
                                    </div>
                                    <div class="sec_row_in_ip sec_row_in_bg_ip">
                                        200円
                                    </div>
                                    <div class="sec_row_in_ip sec_row_in_bg_ip">
                                        6.9％
                                    </div>
                                </div>
                                <div class="sec_row_ip">
                                    <div class="sec_row_in_ip sec_row_in_align_ip">
                                        2020.3
                                    </div>
                                    <div class="sec_row_in_ip">
                                        35,136
                                    </div>
                                    <div class="sec_row_in_ip">
                                        9,635
                                    </div>
                                    <div class="sec_row_in_ip">
                                        300円
                                    </div>
                                    <div class="sec_row_in_ip">
                                        12.7％
                                    </div>
                                </div>
                                <div class="sec_row_ip">
                                    <div class="sec_row_in_ip sec_row_in_align_ip">
                                        2021.3
                                    </div>
                                    <div class="sec_row_in_ip">
                                        21,299
                                    </div>
                                    <div class="sec_row_in_ip">
                                        2,496
                                    </div>
                                    <div class="sec_row_in_ip">
                                        200円
                                    </div>
                                    <div class="sec_row_in_ip">
                                        32.6％
                                    </div>
                                </div>
                                <div class="sec_row_ip">
                                    <div class="sec_row_in_ip sec_row_in_align_ip">
                                        2022.3
                                    </div>
                                    <div class="sec_row_in_ip">
                                        22,919
                                    </div>
                                    <div class="sec_row_in_ip">
                                        3,039
                                    </div>
                                    <div class="sec_row_in_ip">
                                        200円
                                    </div>
                                    <div class="sec_row_in_ip">
                                        26.8％
                                    </div>
                                </div>
                                <div class="sec_row_ip">
                                    <div class="sec_row_in_ip sec_row_in_align_ip">
                                        <span>予</span>2023.3
                                    </div>
                                    <div class="sec_row_in_ip">
                                        30,900
                                    </div>
                                    <div class="sec_row_in_ip">
                                        4,000
                                    </div>
                                    <div class="sec_row_in_ip">
                                            320円<span>今期2度目の増配</span>
                                    </div>
                                    <div class="sec_row_in_ip">
                                            32.5％
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="sec_bottom_info_ip">
                            <p>※2019.3 は過去最高益</p>
                            <p>参考：2019年3月期～2022年3月期の平均配当性向 20％</p>
                        </div>                            
                    <div class="clearfix"></div>
                    </div>
                </div> 
            </div>           
        <div class="clearfix"></div>
        </div>
    </div>
    <div class="policy_block_ip" id="tab_3"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 policy_block_in_ip">
                    <div class="common_title_hp">
                        <div class="common_title_in_hp">                    	
                            <h2>投資方針</h2>
                        </div>
                    </div>
                    <div class="policy_middle_ip"> 
                        <div class="policy_boxes_ip">             
                            <div class="policy_box_ip">
                                <div class="policy_left_ip">
                                    <div class="policy_left_points_ip">
                                        <div class="policy_left_points_in_ip">
                                            Point
                                        </div>
                                        <div class="policy_left_points_num_ip">
                                            1
                                        </div>
                                    </div>
                                    <div class="policy_left_points_info_ip">
                                        事業ポテンシャルは高いが、株価が低く評価されている企業へ投資を行い、株価向上へ向けた働きかけまで行う
                                    </div>
                                </div>
                                <div class="policy_right_ip">
                                    <div class="policy_right_btn_ip">
                                        <a href="#" class="common_btn_hp">企業価値向上の働きかけを行っている銘柄はこちら<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="policy_box_ip">
                                <div class="policy_left_ip">
                                    <div class="policy_left_points_ip">
                                        <div class="policy_left_points_in_ip">
                                            Point
                                        </div>
                                        <div class="policy_left_points_num_ip">
                                            2
                                        </div>
                                    </div>
                                    <div class="policy_left_points_info_ip">
                                        要望書や委任状を通じて、投資先企業<br/>の経営陣と積極的に対話を行う
                                    </div>
                                </div>
                                <div class="policy_right_ip">
                                    <div class="policy_right_btn_ip">
                                        <a href="#" class="common_btn_hp">投資先企業との対話の詳細はこちら<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="policy_box_ip">
                                <div class="policy_left_ip">
                                    <div class="policy_left_points_ip">
                                        <div class="policy_left_points_in_ip">
                                            Point
                                        </div>
                                        <div class="policy_left_points_num_ip">
                                            3
                                        </div>
                                    </div>
                                    <div class="policy_left_points_info_ip">
                                        徹底調査
                                    </div>
                                </div>
                                <div class="policy_right_ip">
                                    <div class="policy_right_btn_ip">
                                        <a href="#" class="common_btn_hp">弊社が作成した株価レポートはこちら<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.svg" alt=""></a>
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