<div class="recruit">
	<div class="inner">

		<div class="main">

			<?php
				$args = array(
				'post_type'=>'recruit_post',
				'order'=>'ASC',
				'orderby'=> 'menu_order',
				'posts_per_page'=>-1
			);
			$wp_query = new WP_Query( $args );
			?>

			<?php if ( $wp_query->have_posts() ) : ?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

			<div class="box">
				<h3>
					<?php the_title(); ?>
				</h3>
				<div class="txt">
					<?php $recruit_choice = get_field('recruit_choice'); ?>
					<?php if($recruit_choice == 'off'){ ?>
						※現在、募集をしておりません。<br>
						募集の際は、本ページにてご案内いたします。<br><br>
					<?php } ?>
				</div><!-- /.txt -->
				<table>
					<?php if(get_field('recruit_type',$post->ID)){ ?>
					<tr>
						<th>雇用形態</th>
						<td>
							<?php the_field('recruit_type'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(get_field('recruit_work',$post->ID)){ ?>
					<tr>
						<th>仕事内容</th>
						<td>
							<?php the_field('recruit_work'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(get_field('recruit_test',$post->ID)){ ?>
					<tr>
						<th>試用期間</th>
						<td>
							<?php the_field('recruit_test'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(get_field('recruit_place',$post->ID)){ ?>
					<tr>
						<th>勤務地</th>
						<td>
							<?php the_field('recruit_place'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(get_field('recruit_time',$post->ID)){ ?>
					<tr>
						<th>勤務時間</th>
						<td>
							<?php the_field('recruit_time'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(get_field('rrecruit_salary',$post->ID)){ ?>
					<tr>
						<th>給与</th>
						<td>
							<?php the_field('recruit_salary'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(get_field('recruit_hoken',$post->ID)){ ?>
					<tr>
						<th>各種保険</th>
						<td>
							<?php the_field('recruit_hoken'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(get_field('recruit_fukuri',$post->ID)){ ?>
					<tr>
						<th>福利厚生・待遇</th>
						<td>
							<?php the_field('recruit_fukuri'); ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(get_field('recruit_other',$post->ID)){ ?>
					<tr>
						<th>その他</th>
						<td>
							<?php the_field('recruit_other'); ?>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div><!-- /.box -->
			
			<?php endwhile; ?>

			<?php else : ?>
			<?php endif; ?>

			<?php wp_reset_query(); ?>

		</div><!-- /.main -->

		<div class="side">
			<?php get_sidebar(); ?>
		</div><!-- /.side -->

	</div><!-- /.inner -->
</div><!-- /.recruit -->
