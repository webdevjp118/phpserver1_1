<?php
get_header();
$this_teamid = 0;
if(isset($_GET['team_id'])) {
    $this_teamid = $_GET['team_id'];
}
$this_year = date("Y");
$game_list = get_field('game_list', 'option');
echo "<br><br><br><br><br><br><br>";
var_dump($game_list);
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_gameinfo.jpg);"></div>
        <div class="pgfv_front">
            <div class="pgfv_title">
                <h1 class="lang_en">GAME INFO</h1>
                <p>試合情報</p>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="news_width">
        <div class="news_tabs">
<?php
global $gTeam_List;
foreach($gTeam_List as $each_teamid) {
    if($each_teamid == $this_teamid) {
        echo '<a class="news_tab X_active" href="#">'.get_the_title($each_teamid).'</a>';
    } else {
        echo '<a class="news_tab" href="'.get_site_url().'/game-info/?team_id='.$each_teamid.'">'.get_the_title($each_teamid).'</a>';
    }
}
?>              
        </div>
        <div class="hx4"></div>
        <div class="game_cats pdropdown">
            <div class="gamecats_btn pdropdown_btn"><span>2023 SEASON</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_gamecats.svg"></div>
            <ul class="gamecats_ddownul pdropdown_ul">
                <li><a href="#">2023 SEASON</a></li>
                <li><a href="#">2023 SEASON</a></li>
                <li><a href="#">2023 SEASON</a></li>
                <li><a href="#">2023 SEASON</a></li>
                <li><a href="#">2023 SEASON</a></li>
                <li><a href="#">2023 SEASON</a></li>
            </ul>
        </div>
        <div class="hx4"></div>
        <div class="gamecats_title">
            <p>TOP/1967</p>
            <h2>2023 SEASON</h2>
        </div>
        <div class="hx4"></div>
        <div class="game_list">
            <div class="game_item pioup">
                <div class="game_name">2024シーズン　東京都社会人サッカーリーグ1部</div>
                <div class="game_date">2024年4月7日</div>
                <div class="hx2"></div>
                <div class="gamei_row">
                    <div class="gamei_teaml">TOP/1967</div>
                    <div class="game_result">
                        <div class="X_l">4</div>
                        <span>&nbsp;</span>
                        <div class="X_r">0</div>
                    </div>
                    <div class="gamei_teamr">AC/ ミドルレンジ</div>
                </div>
                <div class="hx2"></div>
                <div class="game_location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_mapin.svg"><span>三木防災公園競技場</span></div>
            </div>
            <div class="game_item pioup">
                <div class="game_name">2024シーズン　東京都社会人サッカーリーグ1部</div>
                <div class="game_date">2024年4月7日</div>
                <div class="hx2"></div>
                <div class="gamei_row">
                    <div class="gamei_teaml">TOP/1967</div>
                    <div class="game_result">
                        <div class="X_l">4</div>
                        <span>&nbsp;</span>
                        <div class="X_r">0</div>
                    </div>
                    <div class="gamei_teamr">AC/ ミドルレンジ</div>
                </div>
                <div class="hx2"></div>
                <div class="game_location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_mapin.svg"><span>三木防災公園競技場</span></div>
            </div>
            <div class="game_item pioup">
                <div class="game_name">2024シーズン　東京都社会人サッカーリーグ1部</div>
                <div class="game_date">2024年4月7日</div>
                <div class="hx2"></div>
                <div class="gamei_row">
                    <div class="gamei_teaml">TOP/1967</div>
                    <div class="game_result">
                        <div class="X_l">4</div>
                        <span>&nbsp;</span>
                        <div class="X_r">0</div>
                    </div>
                    <div class="gamei_teamr">AC/ ミドルレンジ</div>
                </div>
                <div class="hx2"></div>
                <div class="game_location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_mapin.svg"><span>三木防災公園競技場</span></div>
            </div>
            <div class="game_item pioup">
                <div class="game_name">2024シーズン　東京都社会人サッカーリーグ1部</div>
                <div class="game_date">2024年4月7日</div>
                <div class="hx2"></div>
                <div class="gamei_row">
                    <div class="gamei_teaml">TOP/1967</div>
                    <div class="game_result">
                        <div class="X_l">4</div>
                        <span>&nbsp;</span>
                        <div class="X_r">0</div>
                    </div>
                    <div class="gamei_teamr">AC/ ミドルレンジ</div>
                </div>
                <div class="hx2"></div>
                <div class="game_location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_mapin.svg"><span>三木防災公園競技場</span></div>
            </div>
            <div class="game_item pioup">
                <div class="game_name">2024シーズン　東京都社会人サッカーリーグ1部</div>
                <div class="game_date">2024年4月7日</div>
                <div class="hx2"></div>
                <div class="gamei_row">
                    <div class="gamei_teaml">TOP/1967</div>
                    <div class="game_result">
                        <div class="X_l">4</div>
                        <span>&nbsp;</span>
                        <div class="X_r">0</div>
                    </div>
                    <div class="gamei_teamr">AC/ ミドルレンジ</div>
                </div>
                <div class="hx2"></div>
                <div class="game_location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_mapin.svg"><span>三木防災公園競技場</span></div>
            </div>
        </div>
    </div>
    <div class="hx8"></div>
    <div class="partner_sec">
        <div class="cwidth12">
            <div class="partnersec_h2 pioup">PARTNER</div>
            <div class="partner_row">
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/monolith.svg"></div>
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hoppers.svg"></div>
            </div>
            <div class="partner_row">
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pixoaleiro.svg"></div>
            </div>
            <div class="partner_row">
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kriegerjpn.svg"></div>
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nishispo.svg"></div>
            </div>
            <div class="partner_row">
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spocomi.svg"></div>
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/atheletenail.svg"></div>
            </div>
            <div class="partner_row">
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/grip.svg"></div>
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sakurafm.svg"></div>
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/seed.svg"></div>
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/oneplus.svg"></div>
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/itoki.svg"></div>
                <div class="partner_wrap pioup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/artplan.svg"></div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
