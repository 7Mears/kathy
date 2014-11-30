<?php
/**
* The template for displaying all single posts.
*
* @package kathy
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main cf" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="book-header">
        <h2><?php the_title(); ?></h2>
      </div>

      <div class="book-content wrap">
        <div class="book-sidebar">
          <?php the_post_thumbnail(); ?>
          <h4>Available at:</h4>
          <?php
          $buy_books = types_render_field("book-link", array("output"=>"html"));
          printf($buy_books);
          ?>

        </div>

        <div class="book-main">
          <?php the_content(); ?>
        </div>

      </div>
    <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
