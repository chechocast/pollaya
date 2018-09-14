<?php
/*
* Template name: Especialidades
*/
 get_header(); ?>

  <?php while (have_posts()): the_post(); ?>

    <div class="black" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="principal content">
      <main>
        <?php the_content(); ?>
      </main>
    </div>
  <?php endwhile; ?>
  <div class="especialidades">
    <h3>Pizzas</h3>
    <div class="grid">
      <?php
        $args = array(
          'post_type' => 'especialidades',
          'posts_per_page' => -1,
          'orderby' => 'title',
          'order' => 'ASC',
          'category_name' => 'pizzas'
        );
        $pizzas = new WP_Query($args);
        while($pizzas->have_posts()): $pizzas->the_post();
       ?>
       <div class="">
         <?php the_post_thumbnail('especialidades'); ?>

         <div class="text">
           <h4><?php the_title(); ?> <span>$ <?php the_field('precio'); ?></span></h4>
           <?php the_content(); ?>
         </div>
       </div>
    </div>
   <?php endwhile; wp_reset_postdata();  ?>
   <h3>Otros</h3>
   <div class="grid">
     <?php
       $args = array(
         'post_type' => 'especialidades',
         'posts_per_page' => -1,
         'orderby' => 'title',
         'order' => 'ASC',
         'category_name' => 'otros'
       );
       $otros = new WP_Query($args);
       while($otros->have_posts()): $otros->the_post();
      ?>
      <div class="">
        <?php the_post_thumbnail('especialidades'); ?>

        <div class="text">
          <h4><?php the_title(); ?> <span>$ <?php the_field('precio'); ?></span></h4>
          <?php the_content(); ?>
        </div>
      </div>
   </div>
  <?php endwhile; wp_reset_postdata();  ?>
  </div>
<?php get_footer(); ?>
