<?php get_header(); ?>
    <div class="row">
			<div class="span10">
				<?php
					$args = array( 'numberposts' => 10, 'order'=> 'DESC', 'orderby' => 'title' );
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?> 
						<div class="row">
							<div class="span10 the-post">
								<h1><?php the_title(); ?></h1>   
								<h3>Posted: <?php the_date(); ?></h3>
								<?php the_content(); ?></p>
							<a href="/index.php/all-posts/" class="all-post-link">See all posts</a>
							</div>
						</div>
					<?php endforeach; ?>
			</div>
    </div>
<?php get_footer(); ?>