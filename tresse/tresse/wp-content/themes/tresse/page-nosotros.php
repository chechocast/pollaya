<?php
/**
 * The template for displaying all pages
 *
 *
 * Template Name: Nosotros
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
		<main id="main" class="site-main content-us">
			<article class="middle-col c-us">
				<div class="img-us">
					<img class="mask" src="<?php echo get_template_directory_uri(); ?>/images/img-us.svg" alt="" />
					<?php 
						$id_imagen = get_field('imagen_1');
						$size = 'us-1';
						
						if ($id_imagen){
							echo wp_get_attachment_image($id_imagen, $size);
						}
					?>
					<img src="<?php echo $imagen[0]; ?>" alt="">
				</div>
				<div class="txt-us">
					<h2 class="title"><?php the_field(titulo_1); ?></h2>
					<?php the_field(texto_1); ?>
				</div>
				<div class="txt-us">
					<h2 class="title"><?php the_field(titulo_2); ?></h2>
					<?php the_field(texto_2); ?>
				</div>
				<div class="img-us">
					<img class="mask" src="<?php echo get_template_directory_uri(); ?>/images/img-us2.svg" alt="" />
					<?php 
						$id_imagen = get_field('imagen_2');
						$size = 'us-2';
						
						if ($id_imagen){
							echo wp_get_attachment_image($id_imagen, $size);
						}
					?>
					<img src="<?php echo $imagen[0]; ?>" alt="">
				</div>
			</article>
		</main><!-- #main -->
		<section class="content-all">
			<div class="mark-us"><?php the_field(texto_destacado); ?></div><!-- contenido mark-us-->
			<h2 class="title">¿Qué ofrecemos?</h2>
			<div class="middle-col">
				<article class="box-doit">
					<h3>Enfoque</h3>
					<h4><?php the_field(enfoque); ?></h4>
					<?php the_field(texto_enfoque); ?>
				</article>
				<article class="box-doit">
					<h3>Herramientas</h3>
					<div class="box-tools">
						<div class="tit-tools">
							Marketing
							<span>digital</span>
						</div>
						<div class="text-tools"><?php the_field(herramienta_1); ?></div>
						<br/>
					</div>
					<div class="box-tools">
						<div class="tit-tools">
							Recursos
							<span>gráficos</span>
						</div>
						<div class="text-tools"><?php the_field(herramienta_2); ?></div>
						<br/>
					</div>
					<div class="box-tools">
						<div class="tit-tools">
							diseño de
							<span>experiencias</span>
						</div>
						<div class="text-tools"><?php the_field(herramienta_3); ?></div>
						<br/>
					</div>
				</article>
			</div>

			<div class="home-block client-us">
				<h2 class="title">¿Qué opinan nuestros clientes?</h2>
				<?php 
					$args = array(
						'post_type' => 'testimonial',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'ASC'
					);
					$testimonial = new WP_Query($args);
					while($testimonial->have_posts()): $testimonial->the_post();
				?>
					<div class="client-feedbacks">
						<div class="client-img">
							<?php the_post_thumbnail('foto-testimonial');  ?>
						</div>
						<div class="feedback-box">
							<blockquote class="message"><?php the_field(testimonial); ?></blockquote>
							<div class="client">
								<span class="client-name"><?php the_field(nombre_cliente); ?></span>
								<span class="client-company">
									<?php the_field(cargo_cliente); ?>
									<?php the_field(empresa); ?>
									</span>
							</div>
						</div>
						<br/>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</section>
		<?php endwhile; ?> 
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
