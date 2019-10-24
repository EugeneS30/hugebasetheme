<?php get_header(); ?>

<div class="main">
  <div class="container">
    <?php if(have_posts()) : ?>
      <?php while (have_posts()): the_post(); ?>
        <article class="post">

          <h3>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?> </h3>
            </a>
            <div class="meta">
              Created by <? the_author(); ?> on <?php the_time('F j, Y g:i a') ?>
            </div>
            <?php the_content(); ?>
            <br>
            <a class="button" href="<?php the_permalink(); ?>">
              Read More
            </a>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <?php echo wpautop('sorry, no posts found');?>
      <?php endif; ?>
    </div>
  </div>

  <?php get_footer(); ?>
