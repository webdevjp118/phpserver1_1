<?php
get_header();
?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
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
		$_photos = get_field('photos', $loop_id);
		$loop_photo = "#";
		if(is_array($_photos) && count($_photos)>0) {
			$loop_photo = $_photos[0]['photo'];
		}
        $_players = get_field('players', $loop_id);
	endwhile;
endif;
$player_list = [];
$position_map = [];
if(is_array($_players) && count($_players) > 0) {
    foreach($_players as $each_players) {
        $temp_plid = $each_players['player'];
        $temp_plpos = get_field('position', $temp_plid);
        if(!array_key_exists($temp_plpos['short'], $position_map)) {
            $position_map[$temp_plpos['short']] = $temp_plpos['full'];
        }
        if(!array_key_exists($temp_plpos['short'], $player_list)) {
            $player_list[$temp_plpos['short']] = array($temp_plid);
        } else {
            array_push($player_list[$temp_plpos['short']], $temp_plid);
        }
    }
}
?>
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_teaminfo.jpg);"></div>
        <div class="pgfv_front">
            <div class="pgfv_title">
                <h1 class="lang_en">TEAM INFO</h1>
                <p>チーム</p>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="news_width">
        <div class="news_tabs">
<?php
global $gTeam_List;
foreach($gTeam_List as $each_teamid) {
    if($each_teamid == $loop_id) {
        echo '<a class="news_tab X_active" href="#">'.get_the_title($each_teamid).'</a>';
    } else {
        echo '<a class="news_tab" href="'.get_the_permalink($each_teamid).'">'.get_the_title($each_teamid).'</a>';
    }
}
?>                        
        </div>
        <div class="hx4"></div>
        <div class="teaminfo_title"><?php echo $loop_title; ?></div>
        <div class="hx4"></div>
        <div class="fullw_img"><img src="<?php echo $loop_photo; ?>"></div>
        <div class="team_jump">
<?php
foreach($position_map as $key => $each_posmap) {
    echo '<a href="#'.$key.'">'.$key.'</a>';
}
?>            
        </div>
<?php
foreach($player_list as $key => $each_plist) {
//echo "<br><br><br><br><br><br><br>"; //--------------------------------------------------------------------------
//var_dump($player_list); //--------------------------------------------------------------------------------------
?>
        <div class="hx6"></div>
        <div class="pmh_anchor" id="<?php echo $key; ?>"></div>
        <div class="team_sttl pioup"><?php echo $position_map[$key]; ?></div>
        <div class="hx1"></div>
        <div class="player_list">
<?php    
    foreach($each_plist as $each_plid) {
        $tmp_permalink = get_the_permalink($each_plid);
        $_plphotos = get_field('photos', $each_plid);
		$tmp_plphoto1 = "#";
		if(is_array($_plphotos) && count($_plphotos) > 0) {
			$tmp_plphoto1 = $_plphotos[0]['photo'];
		}
        $tmp_plno = get_field('no', $each_plid);
		$_plname = get_field('name', $each_plid);
		$tmp_plname = $_plname['name1'].'　'.$_plname['name2'];
		$_plename = get_field('ename', $each_plid);
		$tmp_plename = $_plename['ename1'].' '.$_plename['ename2'];
?>
            <a class="player_item pioup" href="<?php echo $tmp_permalink; ?>">
                <div class="plitem_img"><img src="<?php echo $tmp_plphoto1; ?>"></div>
                <div class="plitem_no"><?php echo $tmp_plno; ?></div>
                <div class="plitem_botm">
                    <div class="plitem_name"><?php echo $tmp_plname; ?></div>
                    <div class="plitem_ename"><?php echo $tmp_plename; ?></div>
                </div>
            </a>
<?php
    }
?>
        </div>
<?php
}
?>        
    </div>
    <div class="hx8"></div>
	<?php get_template_part('template-parts/compartner'); ?>
    <div class="hx10"></div>
</section>

<?php
get_footer();
