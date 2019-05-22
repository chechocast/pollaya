<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tresse_Creativos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Tresse Creativos">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">

	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#2FC594">
	<meta name="application-name" content="Tresse Creativos">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/android-icon.png" size="180x180">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tresse' ); ?></a>

	<header id="masthead" class="site-header navbar">
		<div class="content-all">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$tresse_description = get_bloginfo( 'description', 'display' );
				if ( $tresse_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $tresse_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			

			<div class="content-menus">
				<div class="hd-contact">
					<nav class="redes-menu">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'social-menu',
							'menu_id'        => 'social-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s redes">%3$s</ul>'
						) );
						?>
					</nav><!-- #social-menu -->
					<span>LLÁMANOS <a href="tel:+573125301090">+57 312 530 10 90</a></span>
					<br/>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="sr-only">Toggle Navigation</span>
						<i class="icon-menu"></i>	
					</button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s menu-header">%3$s</ul>'
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
			<br/>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
