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
	<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=301197393245207";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	<header>
		<div id="wrap">
			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Monkey face">
				</a>			
			</div>
			<div id="menu">
				<a href="#sidr"><i class="icon-menu"></i></a>
			</div>
			
			<nav id="sidr">
			<?php wp_nav_menu(); ?>
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