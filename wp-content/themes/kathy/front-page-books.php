    <?php
        $args = array( 'post_type' => 'book', 'posts_per_page' => 2 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();?>

        <div class="post">
          <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <div class="post-content">
            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
          </div>
        </div>

    <?php endwhile; ?>
