<?php get_header(); ?>
    <div class="row">
			<div class="span10">
				<?php
					$args = array( 'numberposts' => 10, 'order'=> 'DESC', 'orderby' => 'title' );
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?> 
						<div class="row">
							<div class="span10 preview-box">
								<h1><?php the_title(); ?></h1>   
								<h3><?php the_date(); ?></h3>
								<p><?php the_content(); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
								
			
				<div class="row">
					<div class="span10 preview-box">
						<h1>Blog Title</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam purus sed dolor cursus sollicitudin eu eu ligula. Morbi blandit, quam eu sodales tincidunt, quam eros congue mi, ut iaculis dui urna eu neque. Fusce in justo leo, eu fringilla felis. Nam feugiat eros at justo scelerisque eu egestas nibh pharetra. Mauris sagittis massa non diam sagittis ut molestie lacus luctus. Sed malesuada tristique dolor, eu eleifend libero porta sed. In sagittis egestas hendrerit. Morbi in ante orci. Phasellus euismod placerat sem eget hendrerit. Vivamus ornare tincidunt quam, sit amet lacinia purus suscipit a. Sed vulputate adipiscing nisl vel vestibulum. Aenean hendrerit imperdiet enim, quis interdum elit adipiscing vitae. Aenean tincidunt viverra tellus nec convallis. Proin ut nisl id turpis iaculis egestas.
						</p>
						
						<img src="img/code-color.png">
						
						<p>Curabitur venenatis orci a justo egestas porta. Pellentesque et mauris et augue luctus ornare. Aliquam a enim quis risus interdum pellentesque in quis purus. Vestibulum porttitor mi vitae sapien egestas vel pellentesque tellus condimentum. Duis vulputate, est et malesuada convallis, nisl orci tincidunt orci, eu euismod odio arcu in ante. Sed est leo, blandit et feugiat ac, accumsan quis arcu. Integer molestie tortor eu metus ornare fermentum. In tempus lorem vel ipsum accumsan condimentum. In eget eros dolor. Quisque non ante id dui ullamcorper convallis a non turpis. Etiam augue nunc, cursus eu tincidunt vel, aliquet et sapien. Mauris ut est vitae tellus feugiat luctus vel sed nulla. Praesent eu risus sit amet nibh laoreet tristique. Phasellus mauris neque, posuere id condimentum ut, congue sit amet est. Sed egestas tempor condimentum. Nulla sed erat velit, a dictum nibh.</p>

						<p>Ut risus metus, rhoncus ac tincidunt a, volutpat ac massa. Cras eleifend commodo eros, a pellentesque ipsum aliquam a. Ut sed tellus nec nibh viverra aliquam sit amet sed erat. Duis tincidunt, dui quis imperdiet tincidunt, dolor nibh tincidunt lacus, quis semper leo mauris eu massa. Fusce ac orci non arcu adipiscing vulputate. Proin consequat nunc sit amet dolor pulvinar egestas. Praesent ornare, nibh ac imperdiet ullamcorper, dui nulla rhoncus ligula, id ultrices justo leo ac erat. Praesent ligula ipsum, fringilla quis sollicitudin et, pretium ac lectus. Aliquam sit amet augue sed nulla vehicula vehicula at dictum risus. Phasellus laoreet ipsum nec eros aliquet vulputate. Donec eget bibendum lectus.</p>
						<div class="row">
							<div class="span5">
								<p><strong>Category:</strong> <a href="#">Tag1</a></p>
							</div>
							<div class="span5">
								<img src="img/social-links.png">
							</div>
						</div>
					</div>
				</div>
				
				 <div class="row">
					<div class="span10 preview-box">
						<h1>This is a title</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam purus sed dolor cursus sollicitudin eu eu ligula. Morbi blandit, quam eu sodales tincidunt, quam eros congue mi, ut iaculis dui urna eu neque. Fusce in justo leo, eu fringilla felis. Nam feugiat eros at justo scelerisque eu egestas nibh pharetra. Mauris sagittis massa non diam sagittis ut molestie lacus luctus. Sed malesuada tristique dolor, eu eleifend libero porta sed. In sagittis egestas hendrerit. Morbi in ante orci. Phasellus euismod placerat sem eget hendrerit. Vivamus ornare tincidunt quam, sit amet lacinia purus suscipit a. Sed vulputate adipiscing nisl vel vestibulum. Aenean hendrerit imperdiet enim, quis interdum elit adipiscing vitae. Aenean tincidunt viverra tellus nec convallis. Proin ut nisl id turpis iaculis egestas.
						</p>
						
						<img src="img/code-color.png">

						<p>Curabitur venenatis orci a justo egestas porta. Pellentesque et mauris et augue luctus ornare. Aliquam a enim quis risus interdum pellentesque in quis purus. Vestibulum porttitor mi vitae sapien egestas vel pellentesque tellus condimentum. Duis vulputate, est et malesuada convallis, nisl orci tincidunt orci, eu euismod odio arcu in ante. Sed est leo, blandit et feugiat ac, accumsan quis arcu. Integer molestie tortor eu metus ornare fermentum. In tempus lorem vel ipsum accumsan condimentum. In eget eros dolor. Quisque non ante id dui ullamcorper convallis a non turpis. Etiam augue nunc, cursus eu tincidunt vel, aliquet et sapien. Mauris ut est vitae tellus feugiat luctus vel sed nulla. Praesent eu risus sit amet nibh laoreet tristique. Phasellus mauris neque, posuere id condimentum ut, congue sit amet est. Sed egestas tempor condimentum. Nulla sed erat velit, a dictum nibh.</p>

						<p>Ut risus metus, rhoncus ac tincidunt a, volutpat ac massa. Cras eleifend commodo eros, a pellentesque ipsum aliquam a. Ut sed tellus nec nibh viverra aliquam sit amet sed erat. Duis tincidunt, dui quis imperdiet tincidunt, dolor nibh tincidunt lacus, quis semper leo mauris eu massa. Fusce ac orci non arcu adipiscing vulputate. Proin consequat nunc sit amet dolor pulvinar egestas. Praesent ornare, nibh ac imperdiet ullamcorper, dui nulla rhoncus ligula, id ultrices justo leo ac erat. Praesent ligula ipsum, fringilla quis sollicitudin et, pretium ac lectus. Aliquam sit amet augue sed nulla vehicula vehicula at dictum risus. Phasellus laoreet ipsum nec eros aliquet vulputate. Donec eget bibendum lectus.</p>
						<div class="row">
							<div class="span5">
								<p><strong>Category:</strong> <a href="#">Tag1</a></p>
							</div>
							<div class="span5">
								<img src="img/social-links.png">
							</div>
						</div>
					</div>
				</div>
			
				 <div class="row">
					<div class="span10 preview-box">
						<h1>Tiell is the best!</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam purus sed dolor cursus sollicitudin eu eu ligula. Morbi blandit, quam eu sodales tincidunt, quam eros congue mi, ut iaculis dui urna eu neque. Fusce in justo leo, eu fringilla felis. Nam feugiat eros at justo scelerisque eu egestas nibh pharetra. Mauris sagittis massa non diam sagittis ut molestie lacus luctus. Sed malesuada tristique dolor, eu eleifend libero porta sed. In sagittis egestas hendrerit. Morbi in ante orci. Phasellus euismod placerat sem eget hendrerit. Vivamus ornare tincidunt quam, sit amet lacinia purus suscipit a. Sed vulputate adipiscing nisl vel vestibulum. Aenean hendrerit imperdiet enim, quis interdum elit adipiscing vitae. Aenean tincidunt viverra tellus nec convallis. Proin ut nisl id turpis iaculis egestas.
						</p>

						<img src="img/code-color.png">
						
						<p>Curabitur venenatis orci a justo egestas porta. Pellentesque et mauris et augue luctus ornare. Aliquam a enim quis risus interdum pellentesque in quis purus. Vestibulum porttitor mi vitae sapien egestas vel pellentesque tellus condimentum. Duis vulputate, est et malesuada convallis, nisl orci tincidunt orci, eu euismod odio arcu in ante. Sed est leo, blandit et feugiat ac, accumsan quis arcu. Integer molestie tortor eu metus ornare fermentum. In tempus lorem vel ipsum accumsan condimentum. In eget eros dolor. Quisque non ante id dui ullamcorper convallis a non turpis. Etiam augue nunc, cursus eu tincidunt vel, aliquet et sapien. Mauris ut est vitae tellus feugiat luctus vel sed nulla. Praesent eu risus sit amet nibh laoreet tristique. Phasellus mauris neque, posuere id condimentum ut, congue sit amet est. Sed egestas tempor condimentum. Nulla sed erat velit, a dictum nibh.</p>

						<p>Ut risus metus, rhoncus ac tincidunt a, volutpat ac massa. Cras eleifend commodo eros, a pellentesque ipsum aliquam a. Ut sed tellus nec nibh viverra aliquam sit amet sed erat. Duis tincidunt, dui quis imperdiet tincidunt, dolor nibh tincidunt lacus, quis semper leo mauris eu massa. Fusce ac orci non arcu adipiscing vulputate. Proin consequat nunc sit amet dolor pulvinar egestas. Praesent ornare, nibh ac imperdiet ullamcorper, dui nulla rhoncus ligula, id ultrices justo leo ac erat. Praesent ligula ipsum, fringilla quis sollicitudin et, pretium ac lectus. Aliquam sit amet augue sed nulla vehicula vehicula at dictum risus. Phasellus laoreet ipsum nec eros aliquet vulputate. Donec eget bibendum lectus.</p>
						<div class="row">
							<div class="span5">
								<p><strong>Category:</strong> <a href="#">Tag1</a></p>
							</div>
							<div class="span5">
								<img src="img/social-links.png">
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
<?php get_footer(); ?>