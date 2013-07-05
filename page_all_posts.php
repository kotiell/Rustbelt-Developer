<?php
/*
Template Name: My Custom Page
*/
get_header(); ?>
<?php
$args = array( 'numberposts' => -1, 'orderby' => 'post_date' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
  <div>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <br />  
    <?php the_date(); ?>
    <br />  
    <?php the_excerpt(); ?>
  </div>
<?php endforeach; ?>
<?php get_footer(); ?>