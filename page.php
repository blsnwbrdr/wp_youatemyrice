<?php get_header(); ?>

<!-- MAIN SECTION -->

<div class="row mar_b_75">
 
<!-- CONTENT -->
       
  <div class="col-sm-offset-2 col-sm-8">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
    <div class="single_page">
      <h2 class="single_page_title"><?php the_title(); ?></h2>

      <?php the_content(); ?>
      
      <?php endwhile; endif; ?>

    </div>

  </div><!-- / END CONTENT -->

</div><!-- / END MAIN SECTION -->

<?php get_footer(); ?>
