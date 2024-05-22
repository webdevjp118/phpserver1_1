<div class="company">
	<div class="inner">

		<div class="title">
			<img src="http://www.cfrepair.co.jp/img/contents/company/company_img.png" alt="">
		</div><!-- /.title -->

		<table border="0" cellspacing="0" cellpadding="0">

			<?php if(get_field('company_name',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">社　名</td>
				<td>
					<?php the_field('company_name',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

			<?php if(get_field('company_name_us',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">英文社名</td>
				<td>
					<?php the_field('company_name_us',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

			<?php if(get_field('company_place',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">会社所在地</td>
				<td>
					<?php the_field('company_place',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

			<?php if(get_field('company_shihonkin',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">資本金</td>
				<td>
					<?php the_field('company_shihonkin',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

			<?php if(get_field('company_seturitu',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">設立年月日</td>
				<td>
					<?php the_field('company_seturitu',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

			<?php if(get_field('company_ceo',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">代表者名</td>
				<td>
					<?php the_field('company_ceo',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

			<?php if(get_field('company_bank',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">取引銀行</td>
				<td>
					<?php the_field('company_bank',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

			<?php if(get_field('company_torihiki',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">主要取引先</td>
				<td>
					<?php the_field('company_torihiki',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

			<?php if(get_field('company_member',$post->ID)){ ?>
			<tr valign="top">
				<td class="company_title">従業員数</td>
				<td>
					<?php the_field('company_member',$post->ID); ?>
				</td>
			</tr>
			<?php } ?>

		</table>

	</div><!-- /.inner -->
</div><!-- /.company -->
