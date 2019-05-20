<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tresse_Creativos
 */

get_header();
?>

	<div id="primary" class="content-area inter-tresse">
		<main id="main" class="site-main content-all">
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="intet-text">
					<label><?php the_field(tipo_servicio); ?></label>
					<h1 class="title"><?php the_title(); ?></h1>
					<?php the_field(descripcion_proyecto); ?>
					<time><?php the_field(fecha_creacion); ?></time>
				</div>
				<figure class="img-principal">
					<?php the_post_thumbnail('img-proyecto');  ?>
				</figure>
				<br/>
				<div>
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tresse' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tresse' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
				<!--<a class="btn-back" href="proyectos"><i class="icon-left"></i> Volver a proyectos</a>-->
			</article><!-- #post-<?php the_ID(); ?> -->

			<?php
			the_post_navigation();

		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
