<?php get_header(); ?>

<!-- MAIN SECTION -->

<div class="row mar_b_75">
 
<!-- CONTENT -->
       
  <div class="col-sm-offset-2 col-sm-8">
  
<?php
  if (have_posts() ): while (have_posts() ) : the_post();
    get_template_part('content-single', get_post_format() );
   
    if ( comments_open() || get_coments_number() );
      comments_template();
          
  endwhile; endif;
?>

  </div><!-- / END CONTENT -->

</div><!-- / END MAIN SECTION -->

<?php get_footer(); ?>
