<!-- STICKY POST LOOKUP -->

<?php
$args = array(
        'posts_per_page' => 1,
        'post__in'  => get_option( 'sticky_posts' ),
        'ignore_sticky_posts' => 1
);
$query = new WP_Query( $args );
?>

<!-- BLOG LOOP -->
<div class="row blog_post">
 
<!-- DATE AND AUTHOR -->
 
  <div class="col-sm-3">
    <p class="blog_post_meta"><?php the_date(); ?><br>
    by <?php the_author(); ?></p>
  </div>
  
<!-- MAIN POST BODY -->
  
  <div class="col-sm-9">
     
<!-- POST TITLE -->
     
    <h3 class="blog_post_title sr_default"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<!-- EXCERPT WITH FEATURED IMAGE -->

    <?php if ( has_post_thumbnail() ) {?>
    <div class="row">
        <?php	the_post_thumbnail( 'large', ['class' => 'img-responsive'] ); ?>
        <br><br>
        <?php the_excerpt(); ?>
    </div>

<!-- EXCERPT WITHOUT FEATURED IMAGE -->

    <?php } else { ?>
    <?php the_excerpt(); ?>
    <?php } ?>
    
    <?php echo do_shortcode('[apss-share]'); ?>
  </div>
</div><!-- / END BLOG LOOP -->