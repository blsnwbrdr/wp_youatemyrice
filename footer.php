  </div><!-- / MAIN BODY -->

<!-- FOOTER -->
   
  <footer class="blog_footer text-center">
  
<!-- FOOTER SIDEBARS -->
    <?php
    if ( is_active_sidebar( 'sidebar-2' ) ||
       is_active_sidebar( 'sidebar-3' ) ) :
    ?>
    <div class="container">
      <?php
      if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div class="col-sm-offset-2 col-sm-3">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
      <?php }
      if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
        <div class="col-sm-offset-2 col-sm-3">
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div>
      <?php } ?>
    </div>
    <?php endif; ?>

<!-- / END FOOTER SIDEBARS -->
   
    <div class="end_footer">
      <h1><a href="<?php bloginfo( 'wpurl' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      <p class="blog_desc"><?php echo get_bloginfo( 'description' ); ?></p>
      <br><br><br>
      <p>designed by <a class="brandon" href="http://brandonsco.de" target="_blank">brandons<span>CO.DE</span></a></p>
    </div>
    
  </footer><!-- / END FOOTER -->
    
<?php wp_footer(); ?>  
  
</body>
</html>