<div class="row">

	<div class="inner">

		<div class="row mb30">
			<section>
				<div class="news">

					<h2><img src="/img/index/icon_news.png" alt="NEWS新着情報" /></h2>
					
					<?php
					$args = array(
						'post_type'=>'news_list',
						'order'=>'DESC',
						'orderby'=> 'date',
						'posts_per_page'=>5
					);
					$wp_query = new WP_Query( $args );
					?>

					<?php if ( $wp_query->have_posts() ) : ?>
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

						<div class="box">
							<div class="date">
								<?php the_time('Y/m/d'); ?>
							</div>
							<div class="text">
								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
								<?php $works_icon = get_field('news_list_genre',$post->ID); ?>
								<?php if($works_icon == 'none'){ ?>
								<?php }elseif($works_icon == 'aircon'){ ?>
									<span class="index_news_icon">冷凍・空調事業</span>
								<?php }elseif($works_icon == 'fitness'){ ?>
									<span class="index_news_icon">ﾌｨｯﾄﾈｽ事業</span>
								<?php }elseif($works_icon == 'ec'){ ?>
									<span class="index_news_icon">EC事業</span>
								<?php } ?>
							</div>
						</div>
						<!--/.box-->

					<?php endwhile; ?>

					<?php else : ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					
					<div class="btn">
						<a href="<?php echo site_url(); ?>/news/">一覧はこちら</a>
					</div><!-- /.btn -->

				</div>

			</section>

			<section>
				<div class="greeting">
					<div class="row">
						<img src="http://www.cfrepair.co.jp/img/index/icon_greeting.png" alt="ごあいさつ" />
						<br /><br />
						<?php if(get_field('index_greeting_text',$post->ID)){ ?>
							<?php the_field('index_greeting_text',$post->ID); ?>
						<?php } ?>
						<br /><br />
						<strong>
						<?php if(get_field('index_greeting_name',$post->ID)){ ?>
							<?php the_field('index_greeting_name',$post->ID); ?>
						<?php } ?>
						</strong>
					</div><!-- /.row -->
				</div>
			</section>

		</div><!-- /.row -->

		<section>
			<div class="works">
				<h2><img src="http://www.cfrepair.co.jp/img/index/icon_works.png" alt="WORKS　事業案内"></h2>
				<div class="row">
					<div class="box">
						<?php if(get_field('index_aircon',$post->ID)){ ?>
							<?php the_field('index_aircon',$post->ID); ?>
						<?php } ?>
					</div>
					<div class="box">
						<?php if(get_field('index_fitness',$post->ID)){ ?>
							<?php the_field('index_fitness',$post->ID); ?>
						<?php } ?>
					</div>


					<div class="box">
						<?php if(get_field('index_ec',$post->ID)){ ?>
							<?php the_field('index_ec',$post->ID); ?>
						<?php } ?>
					</div>

					
					
					
					
					
					
					
					
					
					
				</div>
			</div><!-- /.works -->
		</section>

		<section>
			<div class="shopping">

				<div class="shop">

					<div class="row">
						<?php if(get_field('index_ec_shop',$post->ID)){ ?>
							<?php the_field('index_ec_shop',$post->ID); ?>
						<?php } ?>
					</div><!-- /.row -->
				</div><!-- /.shop -->

				<div class="item">

					<div class="row">
					
						<?php if( have_rows('index_ec_item') ): ?>
						<?php while( have_rows('index_ec_item') ): the_row(); ?>
								
							<?php
							$attachment_id = get_sub_field('index_ec_item_photo');
							$attachment_id = wp_get_attachment_image_src($attachment_id, "medium");
							$attachment_id = $attachment_id[0];
							$name = get_sub_field('index_ec_item_name');
							?>

							<div class="box">
								<img src="<?php echo $attachment_id; ?>" alt="<?php echo $name; ?>">
								<span><?php echo $name; ?></span>
							</div><!-- /.box -->

						<?php endwhile; ?>
						<?php endif; ?>

					</div><!-- /.row -->
				</div>

			</div><!-- /.shopping -->
		</section>

	</div>
	<!-- /.inner -->
