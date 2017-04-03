<?php get_header(); ?>

<!-- MAIN SECTION -->

<div class="row">
 
<!-- CONTENT -->

  <div class="col-sm-8">

    <?php
      if (have_posts() ): while (have_posts() ) : the_post();

        get_template_part('content', get_post_format() );

      endwhile; endif;
    ?>
    <nav>
      <ul class="pager">
        <li><?php next_posts_link( 'Previous' ); ?></li>
        <li><?php previous_posts_link( 'Next' ); ?></li>
      </ul>
    </nav>
  </div><!-- / END CONTENT -->

  <?php get_sidebar(); ?>

</div><!-- / END MAIN SECTION -->


<?php get_footer(); ?>
