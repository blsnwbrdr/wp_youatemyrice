<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">


<?php wp_head(); ?>  

  </head>

<body class="fade_in">
 
<!-- BANNER -->

  <div id="banner">
    <div class="banner_container">
      <h1 class="blog_title animated lightSpeedIn">
        <a href="<?php bloginfo( 'wpurl' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
      </h1>
      <p class="blog_desc animated lightSpeedIn"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>
  </div>
    
<!-- NAV BAR -->
          
  <nav id="navbar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#nav_collapse">
          menu
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div id="nav_collapse" class="navbar-collapse collapse">
        
<!-- CUSTOM MENU CREATED IN WORDPRESS ADMIN -->
        
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ) ?>

      </div>
    </div>
  </nav>        

<!-- MAIN BODY -->
   
  <div class="container">

