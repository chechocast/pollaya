<?php get_header(); ?>

  <?php while (have_posts()): the_post(); ?>

    <div class="black" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <h1><?php echo esc_html( get_option('blogdescription')); ?></h1>
      <?php the_content(); ?>
      <?php $url = get_page_by_title('Nosotros'); ?>
      <a href="<?php echo get_permalink($url->ID); ?>">Leer mas</a>
    </div>
  <?php endwhile; ?>
    <div class="principal content">
      <main>
        <h2>Nuestras especialidades</h2>
        <?php $args = array(
          'posts_per_page' => 3,
          'orderby' => 'rand',
          'post_type' => 'especialidades',
        );
        $especialidades = new WP_Query($args);
        while($especialidades->have_posts()): $especialidades->the_post();
         ?>
         <div class="especialidad">
           <?php the_post_thumbnail(); ?>
           <div class="box">
             <h3><?php the_title(); ?></h3>
             <?php the_content(); ?>
             <p><?php the_field('precio'); ?></p>
             <a href="<?php the_permalink(); ?>">Leer mas</a>
           </div>
         </div>
         <?php endwhile; wp_reset_postdata(); ?>
      </main>
    </div>

    <section class="ingredientes">
      <div class="">
        <?php while(have_posts()): the_post(); ?>
          <div class="">
            <?php the_field('contenido'); ?>
            <?php $url = get_page_by_title('Nosotros'); ?>
            <a href="<?php echo get_permalink($url->ID); ?>">Leer mas</a>
          </div>
          <div class="">
            <img src="<?php the_field('imagen'); ?>">
          </div>
        <?php endwhile; ?>
      </div>
    </section>

    <section>
      <h2>Galeria</h2>
      <?php $url = get_page_by_title('Galeria'); ?>
      <?php echo get_post_gallery($url->ID); ?>
    </section>

    <section class="map">
      <div class="">
          mapa
      </div>
      <div class="">
        <?php get_template_part('templates/formulario', 'reserva'); ?>
      </div>
    </section>

<?php get_footer(); ?>
