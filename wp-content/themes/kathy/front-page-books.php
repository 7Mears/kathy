    <?php
        $args = array( 'post_type' => 'book', 'posts_per_page' => 2 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();?>

        <div class="post">
          <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <div class="post-content">
            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
          </div>
        </div>

    <?php endwhile; ?>
