<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Proyectos
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

	<div id="primary" class="content-area">
		<?php while (have_posts()): the_post(); ?>
		<main id="main" class="site-main content-all">
			<ul class="list-projects">
			<?php 
				$args = array(
					'post_type' => 'proyectos',
					'posts_per_page' => -1,
					'orderby' => 'date',
					'order' => 'DES'
				);
				$proyectos = new WP_Query($args);
				while($proyectos->have_posts()): $proyectos->the_post();
			?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<span class="text-project">
							<h3><?php the_field(tipo_servicio); ?> <br />
								<?php the_field(cliente); ?>
							</h3>
							<i class="icon-plus"></i>
						</span>
						<?php the_post_thumbnail('mini-proyecto');  ?>
					</a>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</main><!-- #main -->
		<?php endwhile; ?> 
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
