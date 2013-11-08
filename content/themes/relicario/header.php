<!DOCTYPE html>
<html <?php language_attributes();?>> 
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('sitename'); ?> <?php wp_title(); ?> - <?php bloginfo('description'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
		<?php wp_head(); ?>
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
		<meta property="og:url" content="<?php the_permalink(); ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og_facebook.png"/>
		<meta property="og:type" content="<?php
		  if (is_single() || is_page()) { echo "article"; } else { echo "website";}
		?>"/>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
</head>

<body <?php body_class(); ?>>
	<header>
		<div id="wrap">
			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<object data="<?php echo get_template_directory_uri(); ?>/images/logo.svg" type="image/svg+xml">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('sitename'); ?>" />
					</object>
				</a>			
			</div>
			<nav id="menu-container" class="menu-wrapper">
			<button class="dl-trigger">Open Menu</button>
			<?php

			$defaults = array(
				'theme_location'  => 'main_nav',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);

			wp_nav_menu( $defaults );

			?>
			</nav>

			<!-- <div id="social">
				<ul>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt=""></a></li>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt=""></a></li>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/flickr.png" alt=""></a></li>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt=""></a></li>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt=""></a></li>
				</ul>
			</div> -->
		</div>
	</header>
	<div id="wrap">