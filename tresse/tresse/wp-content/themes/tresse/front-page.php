<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tresse_Creativos
 */

get_header();
?>

	<div id="primary" class="content-area">
		<?php while (have_posts()): the_post(); 
			$args = array(
				'post_type' => 'banners',
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC'
			);
			$banners = new WP_Query($args);
		?>
			<div id="slideHome" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">

					<?php for ($iBanner=0; $iBanner < sizeof($banners->posts); $iBanner++) { 
						$activeStyle = $iBanner == 0 ? 'active' : '';

					?>
						<li data-target="#slideHome" data-slide-to="<?=$iBanner?>" class="<?=$activeStyle?>"></li>
					<?php } ?>
				</ol>
				<div class="carousel-inner">
					<?php
						$iBanner=0;
						while($banners->have_posts()): $banners->the_post();
							$activeStyle = $iBanner == 0 ? 'active' : '';
							$iBanner++;
					?>
					<div class="carousel-item <?=$activeStyle?>" >
						<?php 
							$id_imagen = get_field('imagen_desktop');							
							if ($id_imagen){
								echo wp_get_attachment_image($id_imagen, 'banner-desk');
							}

							$id_imagen = get_field('imagen_movil');
							if ($id_imagen){
								echo wp_get_attachment_image($id_imagen, 'banner-movil');
							}
						?>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<a class="carousel-control-prev" href="#slideHome" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slideHome" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<main id="main" class="site-main content-all home-block">
				<h2 class="title">Proyectos recientes</h2>
				<a class="bt-itn" href="proyectos">Ver todos los proyectos <i class="icon-plus"></i></a>
				<ul class="list-projects">
				<?php 
					$args = array(
						'post_type' => 'proyectos',
						'posts_per_page' => 3,
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
			<section class="home-block">
				<article class="content-all">
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
				</article>
			</section><!-- testimoniales-->
			<section class="home-block">
				<article class="middle-col">
					<div class="img-us">
						<img class="mask" src="<?php echo get_template_directory_uri(); ?>/images/img-us.svg" alt="" />
						<?php 
							$id_imagen = get_field('imagen_nosotros');
							$size = 'us-1';
							
							if ($id_imagen){
								echo wp_get_attachment_image($id_imagen, $size);
							}
						?>
						<img src="<?php echo $imagen[0]; ?>" alt="">
					</div>
					<div class="txt-us cinta-h">
						<?php the_content(); ?>
						<a class="btn-more" href="<?php the_field('link_nosotros'); ?>">
							<i class="icon-plus"></i>
						</a>
					</div>
				</article>
			</section>
			<section class="content-all">
				<h2 class="title">Nuestros clientes</h2>
				<div class="clients-carrusel">
				<?php 
					$args = array(
						'post_type' => 'clientes',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'ASC'
					);
					$clientes = new WP_Query($args);
					while($clientes->have_posts()): $clientes->the_post();
				?>
					<div class="client-box">
						<a href="">
							<?php the_post_thumbnail('logo-cliente');  ?>
						</a>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</section>
		<?php endwhile; ?>  
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
<script>
	jQuery(document).on('ready', function(){
		jQuery('#slideHome').carousel({
		  interval: 4000
		});
	});
</script>
<?php
