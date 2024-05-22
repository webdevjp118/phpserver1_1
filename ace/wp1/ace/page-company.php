<?php
get_header();
?>
<main>
		<section class="page _company">
				<h1 class="pageTitle">会社概要</h1>
				<h2 class="xl_en">COMPANY</h2>
				<div class="breadcrumb">
						<span class="bread_top"><a href="<?php echo get_site_url(); ?>/">TOP</a></span>
						<span>&nbsp; &gt; &nbsp;</span>
						<span>会社概要</span>
				</div>
		</section>
		<section class="message">
				<h2 class="_en">MESSAGE</h2>
				<h2 class="section_title">代表メッセージ</h2>
				<div class="message_box">
						<div class="flex">
								<div class="textBox">
										<p class="message_text">
												テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br> テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
										</p>
										<p class="message_text">
												テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
										</p>
								</div>
								<figure class="messageFigure">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company_02.png" alt="">
										<figcaption>代表取締役　◯◯ ◯◯</figcaption>
								</figure>
						</div>
						<p class="message_text">
								テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>
				</div>
		</section>
		<section class="company">
				<h2 class="_en">COMPANY</h2>
				<h2 class="section_title">会社概要</h2>
				<div class="compnayBox">
						<dl>
								<dt>会社名</dt>
								<dd>ACE</dd>
								<dt>代表取締役</dt>
								<dd>◯◯ ◯◯</dd>
								<dt>設立</dt>
								<dd>20XX年X月</dd>
								<dt>資本金</dt>
								<dd>XXX万円</dd>
								<dt>所在地</dt>
								<dd>〒000-0000　〇〇県〇〇市〇〇〇〇-〇</dd>
								<dt>電話番号</dt>
								<dd>123-456-7890</dd>
								<dt>事業内容</dt>
								<dd>
										建設業<br> リフォーム
								</dd>
						</dl>
				</div>
		</section>
		<section class="history">
				<h2 class="_en">HISTORY</h2>
				<h2 class="section_title">沿革</h2>
				<div class="flex">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company_02.png" alt="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company_03.png" alt="">
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
