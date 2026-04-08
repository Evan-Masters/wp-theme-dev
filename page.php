<?php

  // Header
  get_header();

  // Loop through posts
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

      <!-- Article -->
      <article class="post page">
        <!-- Post Heading -->
        <h2>
          <?php the_title(); ?>
        </h2>
        <!-- Post Content -->
        <?php the_content(); ?>
      </article>
      
      <?php endwhile;
        else :
          echo '<p>No content found</p>';
        endif;

  // Footer
  get_footer();

?>