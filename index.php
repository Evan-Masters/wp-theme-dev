<?php

  // Header
  get_header(); ?>

  <main>

    <?php
      // Loop through posts
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>

          <!-- Article -->
          <article class="post">
            <!-- Content -->
            <div class="content">
              <!-- Post Heading -->
              <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <p class="post-info"><?php the_time('F j, Y g:i a') ?></p>

              <!-- Post Content -->
              <?php the_content(); ?>
            </div>
          </article>
          
      <?php endwhile;
        else :
          echo '<p>No content found</p>';
        endif;
    ?>
  </main>
            
  <?php 
  // Footer
  get_footer();

?>
