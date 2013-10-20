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
	
<div id="wrap">
	<div id="header">
				
			<div id="logo">
					<a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<object data="<?php echo get_template_directory_uri(); ?>/images/logo.svg" type="image/svg+xml">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('sitename'); ?>" />
						</object>
					</a>			
			</div>
								
			 <?php if ( has_nav_menu( 'main_nav' ) ) { ?>
			 <div id="nav"><?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?></div>
			 <?php } else { ?>
		 <div id="nav"><ul><?php wp_list_pages("depth=1&title_li=");  ?></ul></div>
		 <?php } ?>

	 </div>
<!-- // header -->           