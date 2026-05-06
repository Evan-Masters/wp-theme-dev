  <footer class="site-footer">

    <!-- Navigation -->
    <nav class="site-nav">
      
      <?php $args = array(
        'theme_location' => 'footer'
      ); ?>

      <?php wp_nav_menu($args); ?>
    </nav>

    <!-- Display Blog Info -->
    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

  </footer>


</div>
<!-- /container -->

<?php wp_footer(); ?>

</body>
</html>