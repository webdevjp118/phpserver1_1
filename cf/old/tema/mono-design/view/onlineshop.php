<div class="onlineshop">
	<div class="inner">

		<div class="title">
			<div class="img">
				<img src="http://www.cfrepair.co.jp/img/contents/works/ec/main_img.png" alt="">
			</div><!-- /.img -->
			<div class="txt">
				<span>毎日のお買い物やプレゼントなど<br>皆様の暮らしを彩るアイテムをご提案</span>
				今日ではパソコンだけでなく、スマートフォン、タブレットの普及により、 今やインターネットショッピングは、日々のお買い物の一部となってきました。 私たちは、お客様にライフスタイルにあったアイテムを豊富に探しやすく、適正な価格でご提供し、正確にお届けできるショップを展開しております。 これからも皆様の暮らしを彩るアイテムをご提案していきます
			</div><!-- /.txt -->
		</div><!-- /.title -->

		<h2 class="bar pink">事業案内<span></span></h2>

		<div class="row mb20 guide">

			<div class="col w65 txt">
				<img src="http://www.cfrepair.co.jp/img/contents/works/ec/guide_text.png" alt="">
				当社オンラインショップの「快適ROOM STYLEシャーロット」「charlotte-mama」は、eコマース事業に参入するにあたり、価格競争の起こりにくい高品質でブランド力の高い商品を取り扱うことと、着実に集客をすることが重要なポイントと考えました。 数多くのオンラインショップが存在する中、ただ安いだけでは存続できません。 シャーロットはお客様に本当にご満足していただける商品の品質と見合った価格で勝負をしたいと考えています。たくさんのショップからシャーロットを選んでいただける、そんな価値あるオンラインショップでいられるよう、今後も幅広い品揃え、品質、対面のような細やかな店舗対応に努めて参ります
			</div><!-- /.col -->

			<div class="col w30 fr img">
				<img src="http://www.cfrepair.co.jp/wp-content/uploads/2014/05/20170222syanai.jpg" alt="">
				<img src="http://www.cfrepair.co.jp/wp-content/uploads/2014/05/%E7%84%A1%E9%A1%8C1.jpg" alt="">
			</div><!-- /.col -->

		</div><!-- /.row -->

		<h2 class="bar pink">ショップ案内<span></span></h2>

		<div class="row col2 shop_list">
		
			<?php if( have_rows('onlineshop_guidebox') ): ?>
			<?php while( have_rows('onlineshop_guidebox') ): the_row(); ?>

				<div class="col">
					<?php
					$attachment_id = get_sub_field('onlineshop_guidebox_logo');
					$attachment_id = wp_get_attachment_image_src($attachment_id, "full");
					$attachment_id = $attachment_id[0];
					$shop_desp = get_sub_field('onlineshop_guidebox_text');
					?>
					<img src="<?php echo $attachment_id; ?>" /><br />
					<span><?php echo $shop_desp; ?></span>
					
					<div class="list">
					
						<?php if( have_rows('onlineshop_guidebox_shopbox') ): ?>
						<?php while( have_rows('onlineshop_guidebox_shopbox') ): the_row(); 
						$genre = get_sub_field('onlineshop_guidebox_shopbox_genre');
						$name = get_sub_field('onlineshop_guidebox_shopbox_name');
						$url = get_sub_field('onlineshop_guidebox_shopbox_url');
						?>
						
						<div class="row">
							<a href="<?php echo $url; ?>" target="_blank">
								<div class="col w20-sc">
									<?php
									$genre = $genre;
									if($genre == '楽天'){ $genre = '/img/contents/works/ec/up/shop_rakuten.png';
									}elseif($genre == 'yahoo'){ $genre = '/img/contents/works/ec/up/shop_yahoo.png';
									}elseif($genre == 'amazon'){ $genre = '/img/contents/works/ec/up/shop_amazon.png';
									}else{
									$genre = 'none';
									}
									?>
									<?php if($genre == 'none'){ ?>
										<div class="ec_insidebox_sp"></div>
									<?php }else{ ?>
										<img src="<?php echo $genre; ?>" />
									<?php } ?>
								</div><!-- /.col -->
								<div class="col w75-sc fr">
									<?php echo $name; ?>
								</div><!-- /.col -->
							</a>
						</div><!-- /.row -->

						<?php endwhile; ?>
						<?php endif; ?>

					</div>
					
				</div><!-- /.col -->

			<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- /.row -->

		<div class="row">
			<?php if(get_field('onlineshop_footer_img',$post->ID)){ ?>
				<?php
				$attachment_id = get_field('onlineshop_footer_img');
				$attachment_id = wp_get_attachment_image_src($attachment_id, "full");
				$attachment_id = $attachment_id[0];
				?>
				<img src="<?php echo $attachment_id; ?>">
			<?php } ?>
		</div><!-- /.row -->

	</div><!-- /.inner -->
</div><!-- /.onlineshop -->
