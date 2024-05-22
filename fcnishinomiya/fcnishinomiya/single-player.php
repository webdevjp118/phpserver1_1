<?php
get_header();
?>
<section id="contain">
    <div class="instead_head"></div>
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
		$loop_plno = get_field('no', $loop_id);
		$_plname = get_field('name', $loop_id);
		$loop_plname = $_plname['name1'].' '.$_plname['name2'];
		$_plename = get_field('ename', $loop_id);
		$loop_plename = $_plename['ename1'].' '.$_plename['ename2'];
		$_plposition = get_field('position', $loop_id);
		$loop_plpostion2 = $_plposition['short'];
		$_plphotos = get_field('photos', $loop_id);
		$loop_plphoto1 = "#";
		$loop_plphoto2 = "#";
		if(is_array($_plphotos) && count($_plphotos) > 0) {
			$loop_plphoto1 = $_plphotos[0]['photo'];
		}
		if(is_array($_plphotos) && count($_plphotos) > 1) {
			$loop_plphoto2 = $_plphotos[1]['photo'];
		}
        $loop_teamid = 0;
        $loop_teamid = get_field('team', $loop_id);
        $loop_teamlink = "";
        if(!empty($loop_teamid)) {
            $loop_teamlink = get_the_permalink($loop_teamid);
        }
?>	
    <div class="pf_fv" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_profile.jpg);">
        <div class="pfv_logo">
            <img class="disb_pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pfv_logo.svg">
            <img class="disb_sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pfv_logo_sp.svg">
        </div>
        <div class="pfv_content">
            <div class="pfv_info">
                <div class="pfv_no"><?php echo $loop_plno; ?></div>
                <div class="pfv_pos"><?php echo $loop_plpostion2; ?></div>
                <div class="pfv_name"><?php echo $loop_plname; ?></div>
                <div class="pfv_ename"><?php echo $loop_plename; ?></div>
            </div>
            <div class="pfv_photo">
                <img class="pfv_player1" src="<?php echo $loop_plphoto1; ?>">
                <div class="pfv_photo2">
                    <img class="pfv_player2" src="<?php echo $loop_plphoto2; ?>">
                </div>
            </div>
        </div>
        
    </div>
    <div class="hx10"></div>
    <div class="news_width">
        <div class="titled_sec">
            <div class="titled_left">
                <div class="profile_title"><h3>CAREER</h3><p>所属／経歴</p></div>
            </div>
            <div class="titled_right">
                <div class="profile_desc"><?php echo get_field('career', $loop_id); ?></div>
            </div>
        </div>
        <div class="hx10"></div>
        <div class="titled_sec">
            <div class="titled_left">
                <div class="profile_title"><h3>MESSAGE</h3><p>サポーターのみなさんへ</p></div>
            </div>
            <div class="titled_right">
                <div class="profile_desc"><?php echo get_field('message', $loop_id); ?></div>
            </div>
        </div>
        <div class="hx10"></div>
        <div class="titled_sec">
            <div class="titled_left">
                <div class="profile_title"><h3>PROFILE</h3><p>プロフィール</p></div>
            </div>
            <div class="titled_right">
                <div class="pfinfo_list">
<?php
			$loop_spec = get_field('profile', $loop_id);
			foreach($loop_spec as $each_spec) {			
				if(!$each_spec['hide']):
?>					
                    <dl class="pfinfo_dl">
                        <dt><?php echo $each_spec['spec_name']; ?></dt>
                        <dd><?php echo $each_spec['spec_value']; ?></dd>
                    </dl>
<?php
				endif;
			}
?>										
                </div>
            </div>
        </div>
    </div>
<?php
    if(!empty($loop_teamlink)) {
?>
    <div class="hx6"></div>    
    <div class="profile_btn">
        <a href="<?php echo $loop_teamlink; ?>"><span>選手一覧へ戻る</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_inlink.svg"></a>
    </div>
<?php
    }
	endwhile;
endif;
?>
    <div class="hx8"></div>
    <?php get_template_part('template-parts/compartner'); ?>
    <div class="hx10"></div>
</section>
<?php
get_footer();
