<?php
$args = array(
'post_type'=>'side_box_post',
'order'=>'ASC',
'orderby'=> 'menu_order',
'posts_per_page'=>-1
);
$wp_query = new WP_Query( $args );
?>

<?php if ( $wp_query->have_posts() ) : ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

	<?php $post_type = get_field('side_box_type',$post->ID); ?>
	<?php $post_link = get_field('side_box_link_check',$post->ID); ?>
	
	<?php 
	$post_link_terget = get_field('side_box_link_target',$post->ID);
	if($post_link_terget == 'inside' ){
	$post_link_terget = '_self'; 
	}else{
	$post_link_terget = '_blank'; 
	}
	?>

	<?php if($post_type == 'text_link'){ ?>
	
		<?php if( $post_link == 'none' ){ ?>
			<p class="mb20">
			<?php the_field('side_box_text',$post->ID); ?>
			</p>
		<?php }else{ ?>
			<p class="mb20">
			<a href="<?php the_field('side_box_link',$post->ID); ?>" target="<?php echo $post_link_terget; ?>">
			<?php the_field('side_box_text',$post->ID); ?>
			</a>
			</p>
		<?php } ?>
		
	<?php }elseif($post_type == 'image_link'){ ?>

		<?php if( $post_link == 'none' ){ ?>
			<img src="<?php the_field('side_box_img',$post->ID); ?>" class="mb10">
		<?php }else{ ?>
			<a href="<?php the_field('side_box_link',$post->ID); ?>" target="<?php echo $post_link_terget; ?>">
			<img src="<?php the_field('side_box_img',$post->ID); ?>" class="mb10">
			</a>
		<?php } ?>

	<?php } ?>

<?php endwhile; ?>

<?php else : ?>
<?php endif; ?>

<?php wp_reset_query(); ?>