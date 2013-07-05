<?php
/**
Template Name: All posts
 */
get_header(); ?>
<div class="row">
	<div class="span10">
		<h1>All Posts</h1>
	</div>
</div>
		<?php
$args = array( 'numberposts' => -1, 'orderby' => 'post_date' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
    <div class="row">
			<div class="span10">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <?php the_date(); ?>
        <br />  
        <?php the_excerpt(); ?>
			</div>
	 </div>
<?php endforeach; ?>
<?php get_footer(); ?>