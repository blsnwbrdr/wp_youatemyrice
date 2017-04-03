<!-- SIDEBAR -->

<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
    
<div class="col-sm-3 col-sm-offset-1 blog_sidebar">
   
<!-- SEARCH INPUT -->
 
  <form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query() ?>" name="s"/>
  </form>
  
<!-- WELCOME IMAGE -->
 
  <a href="http://www.youatemyrice.com/about/">
    <div id="welcome">
      <div class="welcome_overlay">
        <h1>Welcome</h1>
      </div>
    </div>
  </a>

  <?php dynamic_sidebar( 'sidebar-1' ); ?>

</div><!-- / END SIDEBAR -->