<?php
/*
Template Name: Document Library Home
*/

get_header(); 

	$args = array('category_name' => 'Articles', 'numberposts' => '1',  );	
	$article = get_posts($args);
	
	$args = array('meta_key' => 'type_of_work', 'meta_value' => 'whitepaper', 'hierarchical' => '0',
					'number' => '1', 'sort_column' => 'post_date', 'sort_order' => 'DESC');
	$whitepaper = get_pages($args);	
	
	$args = array('meta_key' => 'type_of_work', 'meta_value' => 'video', 'hierarchical' => '0',
					'number' => '1', 'sort_column' => 'post_date', 'sort_order' => 'DESC');
	$video = get_pages($args);	
	
	$args = array('category' => 89, 'posts_per_page' => -1);
	$blog_posts = get_posts($args);

?>
<div class="row">
<div class="span12 selection-row resourceLinks">
			<ul>
				<li><a href="/resource-library/articles">Articles</a></li>
				<li><a href="/resource-library/case-studies">Case Studies</a></li>
				<li><a href="/resource-library/videos">Videos</a></li>
				<li><a href="/resource-library/whitepapers">White Papers</a></li>
				<li><a href="/resource-library/webinars/">Webinars</a></li>
				<li><a href="/resource-library/root-blog">Blog Posts</a></li>
				<li><a href="/resource-library/marketing-collateral">Marketing Collateral</a></li>
				
			</ul>
		
</div>
</div>

<div class="row resource-rows home-resource-row">
	<div class="span3 resource-home-block box-shadow">
	<!-- <h2>Latest Blog posts</h2> -->
	<?php
		echo '<div class="row">
						<div class="span3">
							<h2><a href="/resource-library/root-blog">Blog</a></h2>
						</div>
					</div>
					<div class="row">
						<div class="span3 resource-home-image">
							<a href="'.get_permalink($blog_posts[0]->ID) .'"><img src="'. get_post_meta($blog_posts[0]->ID, 'image', true) .'"></a>';
		echo '	</div>
					</div>
					<div class="row">
						<div class="span3">					
							<a href="'.get_permalink($blog_posts[0]->ID) .'"><h4>'.get_the_title($blog_posts[0]->ID).'</h4></a>
							<p class="docDesc">';
		$length = 20;
		$desc = get_post_meta($blog_posts[0]->ID, 'meta_description', true);			
		$desc = str_replace("’","'", $desc);
		$desc = str_replace("®","&reg;", $desc);
		$desc = str_replace("”","&rdquo;", $desc);
		$desc = str_replace("“","&ldquo;", $desc);
		$desc = implode(' ',array_slice(str_word_count($desc,1,'&®</>–,;1234567890()!@#$%^&*.'),0,$length));
							
							
		echo 			$desc .'</p>
						</div>
					</div>';
	?>
	</div>
	<div class="span3 resource-home-block box-shadow">
	<!-- <h2>Latest Article</h2> -->
	<?php
		echo '
			<div class="row">
				<div class="span3">
					<h2><a href="/resource-library/articles">Articles</a></h2>
				</div>
			</div>
			<div class="row">
				<div class="span3 resource-home-image">
					<a href="'.get('url',1,1,true, $article[0]->ID) .'" target="_blank">'.
					get_image('image', 1,1, 1, $article[0]->ID) .'</a>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<a href="'.get('url',1,1,true, $article[0]->ID) .'" target="_blank"><h4>'
					.get_the_title($article[0]->ID).'</h4></a>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<p class="docDesc">'.get('author',1,1,true, $article[0]->ID).'</p>
				</div>
			</div>';
	?>
	</div>
	<div class="span3 resource-home-block box-shadow">
	<!-- <h2>Latest Whitepaper</h2> -->
	<?php
	$linkTo = get('formURL',1,1,true, $whitepaper[0]->ID);
			if(empty($linkTo)) {
				$linkTo = get_permalink($page->ID);
			}
		echo '
			<div class="row">
				<div class="span3">
					<h2><a href="/resource-library/whitepapers">White papers</a></h2>
				</div>
			</div>
			<div class="row">
				<div class="span3 resource-home-image">
					<a href="'. $linkTo .'">'.get_image('image', 1,1, 1, $whitepaper[0]->ID) .'</a>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<a href="'. $linkTo .'"><h4>'.get_the_title($whitepaper[0]->ID).'</h4></a>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<p class="docDesc">'.get('meta_description',1,1,true, $whitepaper[0]->ID).'</p>
				</div>
			</div>';
	?>
	</div>
	<div class="span3 resource-home-block box-shadow">
	<!--  h2>Latest Video</h2> -->
	<?php
		echo  '
			<div class="row">
				<div class="span3">
					<h2><a href="/resource-library/videos">Videos</a></h2>
				</div>
			</div>
			<div class="row">
				<div class="span3 resource-home-image">
					<a href="'. get_permalink($video[0]->ID).'">' . get_image('image', 1,1, 1, $video[0]->ID) .'</a>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<a href="'. get_permalink($video[0]->ID).'"><h4>'.get_the_title($video[0]->ID).'</h4></a>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<p class="docDesc">';
		$desc = get('meta_description',1,1,true, $video[0]->ID);
		$length = 20;		
		$desc = str_replace("’","'", $desc);
		$desc = str_replace("®","&reg;", $desc);
		$desc = str_replace("”","&rdquo;", $desc);
		$desc = str_replace("“","&ldquo;", $desc);
		$desc = implode(' ',array_slice(str_word_count($desc,1,'&®</>–,;1234567890()!@#$%^&*.'),0,$length));
		echo $desc .'</p>
				</div>
			</div>';
	?>
	</div>
</div>
<?php get_footer(); ?>