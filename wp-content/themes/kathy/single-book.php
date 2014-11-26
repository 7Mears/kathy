<?php
/**
* The template for displaying all single posts.
*
* @package kathy
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
      <div class="book-header">
        <h2><?php the_title(); ?></h2>
      </div>

      <div class="book-content wrap">
        <?php the_post_thumbnail(); ?>
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
