<?php get_header(); ?>

  <main class="blogs">
    <?php while (have_posts()): the_post(); ?>
      <article class="blog">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('especialidades'); ?>
        </a>
        <div class="info">
          <div class="date">
            <time>
              <?php echo the_time( 'd' ); ?>
              <span><?php the_time( 'M' ); ?></span>
            </time>
          </div>
          <div class="title">
            <h2><?php the_title(); ?></h2>
            <p><?php the_author(); ?></p>
          </div>
          <div class="content-blog">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn">Leer más</a>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
    <?php echo paginate_links();  ?>
    <div class="pagina2">
      <span class="prev">
        <?php next_posts_link('siguientes'); ?>
      </span>
      <span class="next">
        <?php previous_posts_link('anteriores'); ?>
      </span>
    </div>
  </main>
  <?php get_sidebar(); ?>
  <br/>

<?php get_footer(); ?>
