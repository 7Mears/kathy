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

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="post">
          <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <div class="post-content">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
          </div>
        </div>

      <?php endwhile; ?>

      <?php kathy_paging_nav(); ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
