<!DOCTYPE html>
<html>
  <head>
    <title>RustBelt Developer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  </head>
  <body>
  <header>
    <div class="container">
      <div class="row header-row">
        <div class="span4 header-text">
          Rust Belt Developer
        </div>
		<div class="span4">
		<ul class="top-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
		</div>
		
		<div class="span4">
          <form class="navbar-search pull-left" style="padding-top:20px;">
            <input type="text" class="search-query" placeholder="Search">
          </form>
        </div>
      </div>
    </div>
	</header>
	<div class="container">
	<?php get_sidebar(); ?>