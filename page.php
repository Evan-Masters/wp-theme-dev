<?php

  // Header
  get_header(); ?>
  
  
  <main>

    <?php
    // Loop through posts
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>

        <!-- Article -->
        <article class="post page">

          <?php
            if (has_children() OR $post->post_parent > 0 ) { ?>

            <!-- Sub Navinks -->
            <nav class="site-nav children-links clearfix">

              <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>

              <ul>
                <!-- List Sub Pages -->
                <?php $args = array(
                    'child_of' => get_top_ancestor_id(),
                    'title_li' => ''
                  );
                ?>

                <?php wp_list_pages($args); ?>
              </ul>
            </nav>
          <?php } ?>

          <!-- Content -->
          <div class="content">
            <!-- Post Heading -->
            <h2><?php the_title(); ?></h2>
            
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