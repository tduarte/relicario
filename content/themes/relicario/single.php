<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-image', false, '' ); ?>
		<div class="featured-image" style="background-image: url(<?php echo $thumb[0]; ?>)" data-speed="2">
			<div id="wrap">
				<h1><?php the_title(); ?></h1>
				<div class="social">
		            <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
		            <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
		            <div class="g-plusone" data-size="medium" data-href="<?php the_permalink(); ?>"></div>

		            <!-- Posicione esta tag depois da última tag do botão +1. -->
		            <script type="text/javascript">
		              window.___gcfg = {lang: 'pt-BR'};

		              (function() {
		                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		                po.src = 'https://apis.google.com/js/platform.js';
		                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		              })();
		            </script>

		            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="tduarte" data-lang="en">Tweet</a>
		            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		        </div>
	        </div>
		</div>
		<div id="wrap">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<!-- <p class="gridly-date"> <?php the_time(get_option('date_format')); ?></p> -->
				
				<?php the_content(); ?> 

				<?php comments_template(); ?> 			
			 </div>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
