<?php get_header(); ?>
	<?php if (have_posts()) : ?>

	<div id="post-area">
	<?php while (have_posts()) : the_post(); ?>	

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="gridly-image">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'summary-image' );  ?></a>
				</div>

				<div class="gridly-category">
					<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
				</div>

			</div>
	<?php endwhile; ?>
	</div>

	<?php else : ?>
	<?php endif; ?>
		
	<?php next_posts_link('<p class="view-older">View Older Entries</p>') ?>
<?php get_footer(); ?>
