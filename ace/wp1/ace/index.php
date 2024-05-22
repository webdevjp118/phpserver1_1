<?php
get_header();
?>
<main>
		<section class="mv">
				<div class="mvBox">
						<h1 class="mvTitle">最上級の技術と技能</h1>
						<h2 class="mvSub">拘り貫いた職人のプライド</h2>
				</div>
		</section>
		<section class="about">
				<h2 class="xl_en">ABOUT US</h2>
				<h2 class="section_title">ACEについて</h2>
				<h3 class="section_sub">
						地域一番【エース】を目指す会社です
				</h3>
				<div class="flex">
						<div class="aboutText_box">
								<p class="aboutText">
										私は大工職人を経て外装工事業に転身しました。<br> 職人として実際の作業　監督としてお客様のお家を管理させて頂くお仕事
								</p>
								<p class="aboutText">目指したいと思ったのは最上級の技術と技能でした。</p>
								<p class="aboutText">
										その夢を叶えるために独立し現在に至ります。<br> 高い意識を全員で持ち邁進してまいります。
								</p>
						</div>
						<div class="aboutFigure_box">
								<figure class="aboutFigure">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_01.png" alt="">
										<figcaption>代表取締役　◯◯ ◯◯</figcaption>
								</figure>
						</div>
				</div>
				<div class="btnBox">
						<a href="<?php echo get_site_url(); ?>/company" class="curl-top-right">会社概要を見る</a>
				</div>
		</section>
		<section class="service_top">
				<h2 class="xl_en">SERVICE</h2>
				<h2 class="section_title">事業案内</h2>
				<p class="service_topText">
						千葉県印西市で屋根工事 サイディング工事 雨樋工事 各種板金工事 内外装リフォーム工事を行っています。
				</p>
				<div class="flex">
						<div class="serviceCard">
								<h3 class="serviceCard_title">屋根工事</h3>
								<ul>
										<li>葺き替え</li>
										<li>カバー工法</li>
										<li>新築屋根</li>
								</ul>
						</div>
						<div class="serviceCard">
								<h3 class="serviceCard_title">外壁工事</h3>
								<ul>
										<li>サイディング(窯業)</li>
										<li>サイディング(金属)</li>
										<li>樹脂サイディング等</li>
								</ul>
						</div>
						<div class="serviceCard">
								<h3 class="serviceCard_title">雨樋工事</h3>
								<div class="serviceCard_list">
										<ul>
												<li>塩ビ雨樋</li>
												<li>金属ガルバ雨樋</li>
										</ul>
								</div>
						</div>
						<div class="serviceCard">
								<h3 class="serviceCard_title">板金工事</h3>
								<div class="serviceCard_list">
										<ul>
												<li>破風板金</li>
												<li>庇板金等</li>
										</ul>
								</div>
						</div>
				</div>
				<div class="btnBox">
						<a href="<?php echo get_site_url(); ?>/service" class="btn -type1">詳しく見る</a>
				</div>
		</section>
		<section class="works_top">
				<h2 class="xl_en">WORKS</h2>
				<h2 class="section_title">施工実績</h2>
				<div class="flex">
						<figure class="works_topFigure">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_05.png" alt="">
								<figcaption>屋根工事 - 葺き替え</figcaption>
						</figure>
						<figure class="works_topFigure">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_06.png" alt="">
								<figcaption>外壁工事 - サイディング(窯業)</figcaption>
						</figure>
						<figure class="works_topFigure">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_07.png" alt="">
								<figcaption>雨樋工事 - 塩ビ雨樋</figcaption>
						</figure>
						<figure class="works_topFigure">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_08.png" alt="">
								<figcaption>板金工事 - 破風板金</figcaption>
						</figure>
				</div>
				<div class="btnBox">
						<a href="<?php echo get_site_url(); ?>/works" class="btn -type1">詳しく見る</a>
				</div>
		</section>
		<section class="recruit_top">
				<h2 class="xl_en">RECRUIT</h2>
				<h2 class="recruit_topTitle">
						ACEと共に、<br> 成長とやりがいを実感しながら働いてみませんか？
				</h2>
				<p class="recruit_topText">
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
				</p>
				<div class="btnBox">
						<a href="<?php echo get_site_url(); ?>/recruit" class="btn -type2">採用情報を見る</a>
				</div>
		</section>
		<section class="contact_top ">
				<h2 class="xl_en">CONTACT</h2>
				<h2 class="section_title">お問い合わせ</h2>
				<p class="contact_topText">
						サービスに関するご質問やご相談は、お電話またはフォームからお問い合せください。
				</p>
				<div class="btnBox">
						<a href="tel:123-456-7890" class="btn -type3">
			<i class="fa-solid fa-phone"></i>123-456-7890
			<span>[営業時間] 平日9:00~18:00</span>
		</a>
						<a href="<?php echo get_site_url(); ?>/company" class="btn -type2">会社概要を見る</a>
				</div>
		</section>
</main>


<?php
get_footer();
