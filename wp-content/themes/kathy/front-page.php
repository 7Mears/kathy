<?php get_header(); ?>

<section id="hero">
  <div class="hero-section wrap">
    <h1>This is a header</h1>
    <h3>Ut leo. Sed aliquam ultrices mauris. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce a quam.</h3>
    <a href="contact.php" class="button">Contact us</a>
  </div>
</section><!-- /hero -->

<section id="about">
  <div class="about-section wrap cf">
    <h2>About</h2>
<?php include( get_template_directory() . '/front-page-about.php' ); ?>
  </div>

</section><!-- /about -->

<section id="portfolio">
  <div class="portfolio-section wrap cf">
    <h2>Portfolio</h2>
<?php include( get_template_directory() . '/front-page-portfolio.php' ); ?>
  </div><br style="clear:both"/>
</section><!-- /portfolio -->

<section id="members">
  <div class="members-section wrap cf">
    <h2>Members</h2>
<?php include( get_template_directory() . '/front-page-members.php' ); ?>
  </div>
</section><!-- /members -->

<?php get_footer(); ?>
