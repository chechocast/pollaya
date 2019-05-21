<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Contacto
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tresse_Creativos
 */

get_header();
?>

	<div id="primary" class="content-area contact-us">
		<?php while (have_posts()): the_post(); ?>
		<main id="main" class="site-main content-all">
			<div class="middle-col">
				<article class="contact-us-text">
					<p><?php the_field(texto_1); ?></p>
					<br/>
					<h1><?php the_field(texto_2); ?></h1>
					<address>
						<div><a href="tel:<?php echo esc_html( get_option('tresse_telefono') ); ?>"><?php echo esc_html( get_option('tresse_telefono') ); ?></a></div>
						<div><a href="mailto:<?php echo esc_html( get_option('tresse_mail') ); ?>"><?php echo esc_html( get_option('tresse_mail') ); ?></a></div>
						<div><?php echo esc_html( get_option('tresse_ciudad') ); ?></div>
					</address>
				</article>
				<div class="contact-form">
					<?php the_content(); ?> 
				</div>
			</div>
		</main><!-- #main -->
		<?php endwhile; ?>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
