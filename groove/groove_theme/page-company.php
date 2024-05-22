<?php
get_header();
?>
<main>
	<section class="page_top">
		<h2 class="sectionTitle" data-aos="fade-up"
     data-aos-duration="3000">
			COMPANY
			<span class="-ja">会社情報</span>
		</h2>
		<h2 class="sectionTitle_large">
			COMPANY
		</h2>
	</section>
	<section class="company">
		<h2 class="sectionTitle_sub" id="会社概要">
			会社概要
		</h2>
		<div class="companyBox">
			<dl>
				<dt>商号</dt>
				<dd>株式会社グローバー / GROOVER CORPORATION</dd>
				<dt>略称</dt>
				<dd>GROOVER</dd>
<!-- 				<dt>本社</dt>
				<dd>〒640-8422 <br>
					和歌山市松江東4-7-10</dd> -->
				<dt>設立</dt>
				<dd>平成10年4月</dd>
				<dt>資本金</dt>
				<dd>4,000万円</dd>
				<dt>従業員数</dt>
				<dd>65名</dd>
				<dt>役員</dt>
				<dd>代表取締役社長/CEO 新田井　淳次</dd>
				<dt>取引金融機関</dt>
				<dd>三井住友銀行和歌山支店 / 紀陽銀行 和歌山中央支店 / きのくに信用金庫 紀の川支店</dd>
				<dt>業務内容</dt>
				<dd>
					<ul>
						<li>各種業務システムの開発</li>
						<li>スマートフォン・タブレット開発</li>
						<li>インフラソリューション</li>
						<li>パッケージソフトの開発</li>
						<li>システムメンテナンス</li>
						<li>要員派遣(SE、プログラマー、オペレータ等)</li>
						<li>職業紹介事業</li>
						<li>アウトソーシング業務</li>
					</ul>
				</dd>
				<dt>各種認定</dt>
				<dd>
					<ul>
						<li>プライバシーマーク(認定番号：第20000759(05)号)</li>
						<li>一般労働者派遣事業(許可番号：般 30-010028)</li>
						<li>有料職業紹介事業(許可番号：30-ユ-300025)</li>
					</ul>
				</dd>
				<dt>事業所所在地</dt>
				<dd>
					<ul>
						<li>
							・和歌山事務所<br>
							〒640-8434 和歌山市榎原74-1<br>
							TEL.073-453-9482　FAX.073-453-9489
						</li>
						<li>
							東京事業所<br>
							〒108-0073 東京都港区三田3丁目1番17号<br>
							アクシオール三田402 <br>
							TEL.03-6673-7117　FAX.03-6675-8667
						</li>
						<li>
							大阪事業所<br>
							〒550-0002 大阪府大阪市西区江戸堀1丁目18番35号<br>
							肥後橋IPビル<br>
							TEL.06-6449-1426　FAX.06-6449-1425
						</li>
					</ul>
				</dd>
			</dl>
		</div>
	</section>

	<section class="history">
		<div class="history-title">
			<h2 class="sectionTitle_sub">
				沿革
			</h2>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/history-emo.png">
		</div>
      <div class="history-inner">
<?php
	$history_items = get_field('single_history_item',get_the_ID());
	foreach($history_items as $item) {
?>
        <div class="timeline-item">
        	<div class="timeline-year">
				<div class="timeline-midpoint"></div>
				<span><?php echo $item['year']; ?></span>
        	</div>
          	<div class="timeline-desc">
<?php
		foreach($item['month_item'] as $month_item) { ?>
				<div class="desc-month-item">
					<p class="timeline-month"><?php echo $month_item['month'].'月'; ?></p>
					<div>
						<?php echo preg_replace( "/\n/", "<br>", $month_item['desc']); ?>
					</div>
				</div>
<?php		} ?>
			</div>
        </div>
<?php 
	}
?>
      </div>
    </section>
	
	<section class="client" id="主な取引先">
		<h2 class="sectionTitle_sub" data-aos="fade-up"
     data-aos-duration="3000">
			主な取引先
		</h2>
		<div class="clientBox">
			<figure class="clientFigure">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/client.png" alt="">
			</figure>
			<div class="clientLists" data-aos="fade-up"
     data-aos-duration="3000">
<?php
	$clients = get_field('clients',get_the_ID());
	$client_list = [];
	$index = 0;
	foreach($clients as $client) {
		if(count($client_list)<=0) {
			array_push($client_list, array());
		}
		if($index >= 9)
		{
			array_push($client_list, array());
			$index = 0;
		}
		array_push($client_list[count($client_list)-1], $client);
		$index++;
	}
	foreach($client_list as $client_col) {
		echo '<ul>';
		foreach($client_col as $client) {
			echo '<li>'.$client['client_name'].'</li>';
		}
		echo '</ul>';
	}
?>
			</div>
		</div>
	</section>
	<section class="office" id="本社・事務所">
		<h2 class="sectionTitle_sub" data-aos="fade-up"
     data-aos-duration="3000">
			事務所
		</h2>
<!-- 		<h3 class="officeTitle">本社</h3>
		<div class="flex" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
			<figure class="officeFigure">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/office_01.png" alt="">
			</figure>
			<div class="officeText_box">
				<h4 class="officeBox_title">本社</h4>
				<p class="officeText">
					〒640-8422 <br>
					和歌山市松江東4-7-10
				</p>
				<span class="officeBox_en">HEAD OFFICE</span>
			</div>
		</div> -->
		<h3 class="officeTitle">事業所</h3>
		<div class="flex" data-aos="fade-left"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3297.736591925605!2d135.13178175096664!3d34.2552644143555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000ade8e94d0e77%3A0xf84b289832f9d2c2!2z44CSNjQwLTg0MzQg5ZKM5q2M5bGx55yM5ZKM5q2M5bGx5biC5qaO5Y6f77yX77yU4oiS77yR!5e0!3m2!1sja!2sjp!4v1666709247923!5m2!1sja!2sjp"
					style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="officeText_box -none">
				<h4 class="officeBox_title">和歌山事務所</h4>
				<p class="officeText">
					〒640-8434<br>
					和歌山市榎原74-1<br>
					<span>TEL.073-453-9482　FAX.073-453-9489</span>
				</p>
				<span class="officeBox_en">WAKAYAMA</span>
			</div>
		</div>
		<div class="flex" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.1985167832777!2d139.74179295099535!3d35.647480339332084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bb04db232cd%3A0xbed25b4c0031afd2!2z44CSMTA4LTAwNzMg5p2x5Lqs6YO95riv5Yy65LiJ55Sw77yT5LiB55uu77yR4oiS77yR77yXIOOCouOCr-OCt-OCquODvOODq-S4ieeUsA!5e0!3m2!1sja!2sjp!4v1666709471213!5m2!1sja!2sjp"
					style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="officeText_box -none">
				<h4 class="officeBox_title">東京事務所</h4>
				<p class="officeText">
					〒108-0073<br>
					東京都港区三田3-1-17 アクシオール三田402<br>
					<span>TEL.003-6673-7117　FAX.03-6675-8667</span>
				</p>
				<span class="officeBox_en">TOKYO</span>
			</div>
		</div>
		<div class="flex" data-aos="fade-left"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.58594217716!2d135.49243535097548!3d34.69039829118129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6f07d8c9e17%3A0x48294f73d9a11e2e!2z44CSNTUwLTAwMDIg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy65rGf5oi45aCA77yR5LiB55uu77yR77yY4oiS77yT77yVIOiCpeW-jOapi0lQ44OT44Or!5e0!3m2!1sja!2sjp!4v1666709553759!5m2!1sja!2sjp"
					style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="officeText_box -none">
				<h4 class="officeBox_title">大阪事務所</h4>
				<p class="officeText">
					〒550-0002<br>
					大阪市西区江戸堀1丁目18番35号 肥後橋IPビル<br>
					<span>TEL.06-6449-1426　FAX.06-6449-1425</span>
				</p>
				<span class="officeBox_en">OSAKA</span>
			</div>
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
