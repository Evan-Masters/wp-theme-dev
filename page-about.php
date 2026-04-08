<?php

  // Header
  get_header();

  // Loop through posts
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

      <!-- Article -->
      <article class="post page">

        <!-- col-container -->
        <div class="col-container clearfix">

          <!-- title-col -->
          <div class="title-col">
            <!-- Post Heading -->
            <h2><?php the_title(); ?></h2>
          </div><!-- /title-col -->

          <!-- text-col -->
          <div class="text-col">
            <!-- Post Content -->
            <?php the_content(); ?>
          </div><!-- /text-col -->
        </div><!-- /col-container -->

      </article>
      
      <?php endwhile;
        else :
          echo '<p>No content found</p>';
        endif;

  // Footer
  get_footer();

?>