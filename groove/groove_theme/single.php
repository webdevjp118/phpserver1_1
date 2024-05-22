<?php
get_header();
?>
<?php  $taxonomy = 'category'; 
// ID Gets which assign post 
$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
 
// Links seprator.
$separator_link = ', ';
 
if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
 
    $term_ids = implode( ',' , $post_terms );
 
    $terms = wp_list_categories( array(
        'title_li' => '',
        'style'    => 'none',
        'echo'     => false,
        'taxonomy' => $taxonomy,
        'include'  => $term_ids
    ) );
 
    $terms = rtrim( trim( str_replace( '<br />',  $separator_link, $terms ) ), $separator_link );
}
$featured = get_the_post_thumbnail_url();  
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
		<div class="info_wrap">
			<ul>
				<li class="info_date"><?php echo get_the_date('Y/m/d'); ?></li>
				<li class="info_category"><?php echo $terms; ?></li>
			</ul>
		</div>
		<h2><?php the_title(); ?></h2>
		<img src="<?php echo $featured; ?>" alt="">
		<div class="pmhwp">
			<?php the_content(); ?>
		</div>
	</section>
	<section class="partnerBox">
		<div class="partner">
			<h3 class="bannerTitle">
				PARTNER
				<span class="-ja">パートナー募集</span>
			</h3>
			<p class="bannerText">
				弊社と共にお仕事いただける協力会社を<br>
				積極的に募集しております。
			</p>
			<div class="btnBox">
				<a href="#" class="btn -type4">READ MORE</a>
			</div>
		</div>
		<div class="recruit">
			<h3 class="bannerTitle">
				RECRUIT
				<span class="-ja">採用募集</span>
			</h3>
			<p class="bannerText">
				あなたの”やりたいこと”は何ですか？<br>
				ご自身の働き方や実現させたい夢を当社で一緒に叶えましょう。
			</p>
			<div class="btnBox">
				<a href="#" class="btn -type4">READ MORE</a>
			</div>
		</div>
	</section>
	<section class="contact_01">
		<div class="contactBox">
			<h3 class="contactTitle">
				CONTACT
				<span class="-ja">フォームまたはお電話にてお気軽にお問い合わせください。</span>
			</h3>
			<div class="btnBox">
				<a href="tel:073-453-9482" class="btn -type5">
					<i class="fa-solid fa-phone"></i>073-453-9482㈹
					<span>受付時間 9:00-18:00仮</span>
				</a>
				<a href="" class="btn -type6">お問い合わせフォーム</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
