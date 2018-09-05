<?php get_header(); ?>

  <?php while (have_posts()): the_post(); ?>

    <div class="black" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="principal content contacto">
      <main>
          <?php get_template_part('templates/formulario', 'reserva'); ?>
      </main>
    </div>
  <?php endwhile; ?>
<?php get_footer(); ?>
