<?php
get_header();
?>
<main>
	<section class="page_top -privacy">
    <h2 class="sectionTitle" data-aos="fade-up"
     data-aos-duration="3000">
      INFORMATION
      <span class="-ja">お知らせ</span>
    </h2>
    <h2 class="sectionTitle_large">
			INFORMATION
    </h2>
  </section>
	<section class="information">
		<div class="infoText_box">
<?php
    $args = array(
        'post_type' => 'post',
				'posts_per_page'   => -1
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();

						$taxonomy = 'category'; 
						$terms = "";
						// ID Gets which assign post 
						$post_id = get_the_ID();
						$category_list=get_the_category($post_id);//$post->ID
						if(count($category_list) > 0) {
							$terms = $category_list[0]->cat_name;
						}
?>
				<a class="news_row" href="<?php echo get_the_permalink(); ?>">
					<div class="news_left">
						<div class="news_date"><?php echo get_the_date("Y/m/d"); ?></div>
						<div class="news_catwrap">
							<?php if(!empty($terms)) { ?><div class="news_cat"><?php echo $terms; ?></div><?php } ?>
						</div>
					</div>
					<div class="news_title"><?php echo get_the_title(); ?></div>
				</a>
            <?php
            }
        }
?>
		</div>
	</section>
	<section class="partnerBox">
		<div class="partner" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
			<h3 class="bannerTitle">
				PARTNER
				<span class="-ja">パートナー募集</span>
			</h3>
			<p class="bannerText">
				弊社と共にお仕事いただける協力会社を<br>
				積極的に募集しております。
			</p>
			<div class="btnBox">
				<a href="<?php echo get_site_url(); ?>/partner" class="btn -type4">READ MORE</a>
			</div>
		</div>
		<div class="recruit" data-aos="fade-left"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
			<h3 class="bannerTitle">
				RECRUIT
				<span class="-ja">採用募集</span>
			</h3>
			<p class="bannerText">
				あなたの”やりたいこと”は何ですか？<br>
				ご自身の働き方や実現させたい夢を当社で一緒に叶えましょう。
			</p>
			<div class="btnBox">
				<a href="<?php echo get_site_url(); ?>/recruit" class="btn -type4">READ MORE</a>
			</div>
		</div>
	</section>
	<section class="contact_01">
		<div class="contactBox" data-aos="fade-up"
     data-aos-duration="3000">
			<h3 class="contactTitle">
				CONTACT
				<span class="-ja">フォームまたはお電話にてお気軽にお問い合わせください。</span>
			</h3>
			<div class="btnBox">
				<a href="tel:073-453-9482" class="btn -type5">
					<i class="fa-solid fa-phone"></i>073-453-9482㈹
					<span>受付時間 9:00-18:00仮</span>
				</a>
				<a href="<?php echo get_site_url(); ?>/contact" class="btn -type6">お問い合わせフォーム</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
