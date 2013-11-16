<?php get_header(); ?>
	<?php if (have_posts()) : ?>

	<div id="container" class="js-masonry">
	<?php while (have_posts()) : the_post(); ?>	

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="gridly-image">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'summary-image' );  ?></a>
					<div class="gridly-category">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</div>
				</div>

			</div>
	<?php endwhile; ?>
	</div>

	<?php else : ?>
	<?php endif; ?>
		
	<?php next_posts_link('<p class="view-older">View Older Entries</p>') ?>
<?php get_footer(); ?>
