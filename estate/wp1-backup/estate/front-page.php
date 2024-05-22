<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="banner_block_hp">                     	
        <div class="container-fluid">
            <div class="row">
                <div class="col banner_block_in_hp">                    	
                    <div class="banner_middle_hp"> 
                        <div class="banner_top_hp">
                            <div class="banner_left_hp">
                                <div class="banner_left_title_hp">
                                    <h3>人生を創る、想いを繋ぐ</h3>
                                </div>
                            </div>
                            <div class="banner_right_hp">
                                <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img1.png" alt="" /></a>
                            </div>
                        </div>			     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>        
    <div class="news_block_hp">                     	
        <div class="container">
            <div class="row">
                <div class="col news_block_in_hp">                    	
                    <div class="news_middle_hp"> 
                        <div class="news_top_hp">
                            <div class="news_left_hp">
                                <div class="common_title_hp common_title_align_hp">
                                    <h2>News</h2>
                                    <p>お知らせ</p>
                                </div>
                            </div>
                            <div class="news_right_hp">        
<?php
$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => 5,
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
                                <div class="news_right_row_hp">
                                    <a href="<?php echo $loop_permalink; ?>">
                                        <div class="news_right_date_hp">
                                            <?php echo $loop_date; ?>
                                        </div>
                                        <div class="news_right_box_hp">
                                            <div class="news_right_box_title_hp">
                                                <?php echo $loop_category_name; ?>
                                            </div>
                                            <div class="news_right_box_info_hp">
                                                <?php echo $loop_title; ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
<?php
    endwhile;
endif;	
?>                                
                            </div>
                        </div>
                        <!-- <div class="news_btn_hp">                            	
                            <a href="contact.html" class="common_btn_hp">詳細を見る<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>                                                            
                        </div>				      -->
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="about_block_hp">                     	
        <div class="container">
            <div class="row">
                <div class="col about_block_in_hp">                    	
                    <div class="about_middle_hp"> 
                        <div class="about_top_hp">
                            <div class="about_left_hp">
                                <div class="common_title_hp common_title_align_hp">
                                    <h2>About us</h2>
                                    <p>会社紹介</p>
                                </div>
                                <div class="about_left_info_hp">
                                    <h3>全く同じものがない <br /> 不動産だからこそ</h3>
                                    <p>
                                        土地や建物など不動産はたくさんありますが、全く同じものはありません。 <br />
                                        だからこそ、不動産を通して関わる人々の人生を創り・想いを繋ぐお手伝いをさせていただければと思います。<br />
                                        相続した土地や思い入れがある場所に住みたいなど、1人1人の生き方や価値観に合わせた、宮古島でしか得られない不動産の活用を創造し、過去・現在・未来へと想いを繋ぎます。
                                    </p>
                                </div>
                                <div class="about_btn_hp">                            	
                                    <a href="<?php echo get_site_url(); ?>/company/" class="common_btn_hp">会社案内<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>                                                            
                                </div>
                            </div>
                            <div class="about_right_hp">
                                <div class="about_right_img_hp">         
                                    <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_img1.png" alt="" /></a>     
                                </div>                              
                            </div>
                        </div>                            			     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="about_block_title_hp">
            About us
        </div>            
        <div class="clearfix"></div>
    </div>        
    <div class="estate_block_hp">                     	
        <div class="container container_real">
            <div class="row">
                <div class="col estate_block_in_hp">  
                    <div class="common_title_change_hp">               	
                        <div class="common_title_main_hp">                            
                            <h1>Real Estate</h1>
                        </div>
                        <div class="common_title_hp">                        	
                            <h2>Real Estate</h2>
                            <p>不動産事業</p>
                        </div>
                    </div>
                    <div class="estate_middle_hp"> 
                        <div class="estate_top_hp">
                            <div class="estate_box_hp">
                                <div class="estate_img_hp">
                                    <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/building.png" alt="" /></a>
                                    <div class="estate_digit_hp">
                                        01
                                    </div>
                                </div>
                                <div class="estate_btn_hp">
                                    <a href="<?php echo get_site_url(); ?>/sale/" class="common_btn_hp">売買仲介<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt=""></a>
                                </div>
                                <div class="estate_info_hp">
                                    <p>
                                        土地・戸建て・収益物件・ホテル・畑まで幅広く扱っております。 <br />
                                        掲載物件以外にも未公開物件もございますので、お気軽にお問い合わせ下さい。 <br />
                                        また、上記のような物件を探して欲しいというご要望にもお応えします。
                                    </p>
                                </div>
                            </div>
                            <div class="estate_box_hp">
                                <div class="estate_img_hp">
                                    <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/building1.png" alt="" /></a>
                                    <div class="estate_digit_hp">
                                        02
                                    </div>
                                </div>
                                <div class="estate_btn_hp">
                                    <a href="<?php echo get_site_url(); ?>/rental/" class="common_btn_hp">賃貸仲介<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt=""></a>
                                </div>
                                <div class="estate_info_hp">
                                    <p>
                                        アパート・テナント・事務所・駐車場・貸地など扱っております。 <br /> お客様のご要望に合った物件をお探しします。
                                    </p>
                                </div>
                            </div>
                            <div class="estate_box_hp">
                                <div class="estate_img_hp">
                                    <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/building2.png" alt="" /></a>
                                    <div class="estate_digit_hp">
                                        03
                                    </div>
                                </div>
                                <div class="estate_btn_hp">
                                    <a href="<?php echo get_site_url(); ?>/business#apart" class="common_btn_hp">アパート管理<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt=""></a>
                                </div>
                                <div class="estate_info_hp">
                                    <p>
                                        アパート・テナントの管理業務をオーナー様に代わって行います。 <br />
                                        オーナー様が収益物件を運営する上でお困りごとを解決します。
                                    </p>
                                </div>
                            </div>
                            <div class="estate_box_hp">
                                <div class="estate_img_hp">
                                    <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/building3.png" alt="" /></a>
                                    <div class="estate_digit_hp">
                                        04
                                    </div>
                                </div>
                                <div class="estate_btn_hp">
                                    <a href="<?php echo get_site_url(); ?>/business#villa" class="common_btn_hp">別荘管理、民泊運用代行<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt=""></a>
                                </div>
                                <div class="estate_info_hp">
                                    <p>
                                        オーナー様がご不在の期間、物件の管理を行います。 <br />
                                        また、物件を宿泊施設としても運用したい方向けにも運用代行を行なっております。
                                    </p>
                                </div>
                            </div>
                            <div class="estate_box_hp">
                                <div class="estate_img_hp">
                                    <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/building4.png" alt="" /></a>
                                    <div class="estate_digit_hp">
                                        05
                                    </div>
                                </div>
                                <div class="estate_btn_hp">
                                    <a href="<?php echo get_site_url(); ?>/business#land" class="common_btn_hp">土地、建物等の物件探し<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt=""></a>
                                </div>
                                <div class="estate_info_hp">
                                    <p>
                                        各種条件を伺い、お客様に合った物件をお探しします。
                                    </p>
                                </div>
                            </div>
                            <div class="estate_box_hp">
                                <div class="estate_img_hp">
                                    <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/building5.png" alt="" /></a>
                                    <div class="estate_digit_hp">
                                        06
                                    </div>
                                </div>
                                <div class="estate_btn_hp">
                                    <a href="<?php echo get_site_url(); ?>/business#purchase" class="common_btn_hp">買取<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt=""></a>
                                </div>
                                <div class="estate_info_hp">
                                    <p>
                                        不要な土地・建物を売却したい、すぐに現金化したいなどのお客様向けに弊社で買い取らせていただきます。
                                    </p>
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
    <div class="inheritance_block_hp">                     	
        <div class="container container_real">
            <div class="row">
                <div class="col inheritance_block_in_hp">  
                    <div class="common_title_change_hp common_title_change_white_hp">               	
                        <div class="common_title_main_hp">                            
                            <h1>Inheritance</h1>
                        </div>
                        <div class="common_title_hp">                        	
                            <h2>Inheritance </h2>
                            <p>相続コンサル</p>
                        </div>
                    </div>
                    <div class="inheritance_middle_hp"> 
                        <div class="inheritance_img_hp">
                            <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inheritance_img1.png" alt="" /></a>
                        </div> 
                        <div class="inheritance_box_hp">                            
                            <div class="inheritance_box_info_hp">
                                <h3>相続に関するお悩みを徹底サポート</h3>
                                <p>お客様のお悩みを伺い、円満解決に向けてお手伝いいたします。</p>
                            </div>
                            <div class="inheritance_btn_hp">
                                <a href="<?php echo get_site_url(); ?>/inheritance/" class="common_btn_hp">詳細を見る<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt=""></a>
                            </div>
                        </div>    		                            				     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>       
    
    <div class="contact_block_cp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/contact_img.png) no-repeat center center; background-size:cover;">                     	
        <div class="container">
            <div class="row">
                <div class="col contact_block_in_cp"> 
                    <div class="common_title_hp">
                            <h2>Contact</h2>
                            <p>お問い合わせ</p>
                        </div>                   	
                    <div class="contact_middle_cp">  
                            <div class="contact_top_cp">
                            <div class="contact_box_cp">
                                <div class="contact_box_info_cp">
                                    各種相談無料ですので、お気軽にお問い合わせ下さい。
                                </div>
                                <div class="contact_box_in_cp">
                                    <div class="contact_left_cp">
                                        <div class="contact_left_grid_cp">
                                            <div class="contact_grid_icon_cp">
                                                <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone_icon.svg" alt="" /></a>
                                            </div>
                                            <div class="contact_grid_number_cp">
                                                0980-75-0720
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact_right_cp">
                                        <div class="contact_btn_cp">
                                            <a href="<?php echo get_site_url(); ?>/contact/" class="common_btn_hp">お問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                                            <div class="contact_icon_cp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file_icon.svg" alt="" />
                                            </div>
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
    
    
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
