<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package kathy
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main wrap" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <h1>Books</h1>
      </header><!-- .page-header -->
      <div id="book-archive" class="books-content cf">
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <div class="post">
            <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <div class="post-content cf">
              <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php the_excerpt(); ?>
              <a href="<?php echo get_permalink(); ?>" class="button">More</a>
            </div>
          </div>

        <?php endwhile; ?>
      </div>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
