<?php get_header();
/*
Template Name: Search Page
*/
?>
<div class="navigationBar col-xs-12" style="display: block;">
			<ul class="navigationList">
				<li class="smallLogo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('url');?>/wp-content/uploads/2015/05/logo2.png" alt=""></a></li>
				<li><a href="<?php bloginfo('url');?> ">home</a></li>
				<li><a href="<?php bloginfo('url');?>/info">info</a></li>
				<li><a href="<?php bloginfo('url');?>/checkout">checkout</a></li>
				<li><a href="<?php bloginfo('url');?>/contact">contact</a></li>
				<li><form style="display: inline-block;" action="<?php bloginfo('url');?>/search" method="get"><input type="text" name="query" width="200" class="form-control" placeholder="search now"><button type="submit" class="btn btn-default searchButton">Go</button></form></li>
			</ul>
		</div>

<div class="navigationBar col-xs-12">
			<ul class="navigationList">
				<li class="smallLogo"><img src="<?php bloginfo('url');?>/wp-content/uploads/2015/05/logo2.png" alt=""></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], ' ')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?> ">home</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'about')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/info">info</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'share')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/checkout">checkout</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'shine')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/contact">contact</a></li>
				<li><form style="display: inline-block;" action="<?php bloginfo('url'); ?>/search" method="get"><input type="text" name="query" width="200" class="form-control" placeholder="search now"><button type="submit" class="btn btn-default searchButton">Go</button></form></li>
			</ul>
		</div>

<div class="shineOnContainer">

	<?php 

	if($_GET['query'] != "")
		$the_query = $_GET['query'];
	else
		$the_query=false; ?>

<div class="col-xs-12 searchTitle">	

	<h2><?php echo "results for $the_query" ?></h2>

</div>

	<?php

	$search = new WP_Query(array('s' => $the_query, 'category_names' => 'row1, row2, row3'));

	if ($search->have_posts()) : while ($search->have_posts()) : $search->the_post(); ?>
	
	  		<!--<div class="col-xs-12">
	 			<h1><?php the_title(); ?></h1>
	 		</div>-->
	 	
		<div class="row">
			<div class="col-xs-12">
				<div class="postContent">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<div class="col-xs-12 rule">
			<br><!-- this is where the horzontal rule goes-->
		</div>

	<?php endwhile; else: ?>
	    <h2>Sorry, there are no photos that match your criteria.<br>Please try your search again or browse the <a href="http://localhost:8888/stockphotos#postContent ">collection</a>.</h2>
	<?php endif; ?>

	</div>
	<br>
	<br>
	<br>
	<?php get_footer();?>