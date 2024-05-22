<?php
get_header();
?>

<main>
	<section class="mv">
		<div class="mvText_box">
			<h1 class="mainTitle" data-aos="fade-up"
     data-aos-duration="3000">
				CHALLENGE AND <br>STEP UP
				<span class="-s" data-aos="fade-up"
     data-aos-duration="3000">For System Development</span>
			</h1>
		</div>
		<figure class="mvFigure">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mv.png" alt="">
		</figure>
	</section>
	<section class="info_top">
		<h2 class="sectionTitle_large" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
			INFORMATION
		</h2>
		<div class="infoBox">
			<h2 class="sectionTitle" data-aos="fade-up"
     data-aos-duration="3000">
				INFORMATION
				<span class="-ja">お知らせ</span>
			</h2>
			<figure class="infoFigure">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/info.png" alt="">
			</figure>
			<div class="infoText_box">
<?php
    $args = array(
        'post_type' => 'post'
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
		</div>
	</section>
	<section class="about_top" >
		<h2 class="sectionTitle" data-aos="fade-up"
     data-aos-duration="3000">
			ABOUT
			<span class="-ja">私たちについて</span>
		</h2>
		<div class="flex">
			<figure class="aboutFigure" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.png" alt="">
			</figure>
			<div class="aboutText_box" data-aos="fade-left"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
				<p class="aboutText">
					株式会社グローバーはシステム開発を主とするソフトウェア会社として、お客様のニーズや技術解決にも、スピーディな開発能力で質の高いソフトウェアサービスを提供しております。<br>
					また、お客様の視点、現場のニーズから生まれる「システムソリューション」をご提案するとともに、今後もお客様の満足度向上、地域社会への貢献を目指し、新しい可能性に挑み続けてまいります。
				</p>
				<div class="btnBox">
					<a href="<?php echo get_site_url(); ?>/about" class="btn -type3">READ MORE</a>
				</div>
			</div>
		</div>
	</section>
	<section class="company_top">
		<h2 class="sectionTitle_large" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
			COMPANY
		</h2>
		<h2 class="sectionTitle" data-aos="fade-up"
     data-aos-duration="3000">
			COMPANY
			<span class="-ja">会社情報</span>
		</h2>
		<div class="flex">
			<figure class="companyFigure" data-aos="fade-left">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company.png" alt="">
			</figure>
			<div class="companyText_box">
				<p class="companyText" data-aos="fade-right">
					1998年。医療システム開発に特化したシステム会社として誕生。<br>
					和歌山を始め、拠点を大阪、東京へと拡大。<br>
					現在はお客様のニーズに合わせ、幅広い分野で受託開発や自社製品の開発を行っています。
				</p>
				<div class="btnBox">
					<a href="<?php echo get_site_url(); ?>/company" class="btn -type3">READ MORE</a>
				</div>
			</div>
		</div>
	</section>
	
	<section class="app_top" id="groover_application">
		<h2 class="sectionTitle" data-aos="fade-up"
     data-aos-duration="3000">
			GROOVER APPLICATION
			<span class="-ja">自社開発アプリ</span>
		</h2>
		<figure class="appFigure">
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner.png" alt="">
			</a>
		</figure>
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
