<?php get_header(); ?>

  <?php while (have_posts()): the_post(); ?>

    <div class="black" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="principal content">
      <main>
        <?php the_content(); ?>
      </main>
    </div>

    <div class="box-nostros">
      <div class="box">
        <?php
          $id_imagen = get_field('imagen_1');
          $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
         ?>
        <img src="<?php echo $imagen[0]; ?>" class="img">
        <div class="txt">
            <?php the_field('descripcion_1'); ?>
        </div>
      </div>
      <div class="box">
        <?php
          $id_imagen = get_field('imagen_2');
          $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
         ?>
        <img src="<?php echo $imagen[0]; ?>" class="img">
        <div class="txt">
            <?php the_field('descripcion_2'); ?>
        </div>
      </div>
      <div class="box">
        <?php
          $id_imagen = get_field('imagen_3');
          $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
         ?>
        <img src="<?php echo $imagen[0]; ?>" class="img">
        <div class="txt">
            <?php the_field('descripcion_3'); ?>
        </div>
      </div>
    </div>


  <?php endwhile; ?>
<?php get_footer(); ?>
