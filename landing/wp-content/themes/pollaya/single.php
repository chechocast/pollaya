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
    <div class="comentarios">
      <?php comment_form(); ?>
    </div>
    <ol>
      <?php
        $comentarios = get_comments(array(
          'post_id' => '$post->ID',
          'status' => 'approve'
        ));
        wp_list_comments( array(
          'per_page' => 10,
          'reserve_top_level' => false
        ), $comentarios);
       ?>
    </ol>
  <?php endwhile; ?>
<?php get_footer(); ?>
