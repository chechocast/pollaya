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
  <?php endwhile; ?>
<?php get_footer(); ?>
