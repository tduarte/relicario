<?php get_header(); ?>
	<?php if (have_posts()) : ?>
	<div id="wrap">
	<div id="container" class="js-masonry">
	<?php while (have_posts()) : the_post(); ?>	

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="grid">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'summary-image' );  ?></a>
					<a href="<?php the_permalink() ?>" class="grid"><?php the_title(); ?></a>
				</div>

			</div>
	<?php endwhile; ?>
	</div>

	<?php else : ?>
	<?php endif; ?>
		
	<?php next_posts_link('<p class="view-older">View Older Entries</p>') ?>
<?php get_footer(); ?>
