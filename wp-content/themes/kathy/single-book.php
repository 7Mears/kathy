<?php
/**
* The template for displaying all single posts.
*
* @package kathy
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main wrap" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php the_post_thumbnail(); ?>
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>

    <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
