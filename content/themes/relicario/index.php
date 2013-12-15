<?php get_header(); ?>
	<?php if (have_posts()) : ?>
	<div id="wrap">
	<div id="container" class="js-masonry">
	<?php while (have_posts()) : the_post(); ?>	
			<div id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
				<a href="<?php the_permalink() ?>">
					<?php the_post_thumbnail( 'summary-image' );  ?>
					<h2><?php the_title(); ?></h2>
				</a>
			</div>
	<?php endwhile; ?>
	</div>

	<?php else : ?>
	<?php endif; ?>
		
	<?php next_posts_link('<p class="view-older">View Older Entries</p>') ?>
<?php get_footer(); ?>
