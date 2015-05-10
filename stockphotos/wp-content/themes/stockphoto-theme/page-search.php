<?php get_header();
/*
Template Name: Search Page
*/
?>
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

<?php echo "results for $the_query" ?>

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
	    <p>Sorry, there are no posts that match your criteria. Please try your search again.</p>
	<?php endif; ?>

	</div>
	<?php get_footer();?>