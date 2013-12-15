<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-image', false, '' ); ?>
		<div class="featured-image" style="background-image: url(<?php echo $thumb[0]; ?>)" data-speed="2">
		</div>
		<div id="wrap">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>   
			<div class="gridly-copy">
			
				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?> 
				<?php wp_link_pages(); ?>
			
			</div>			
		 </div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
