<?php get_header();
/*
Template Name: Checkout Page
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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-xs-12 checkoutPage">

  	<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

</div>

<div class="col-xs-12">
<?php get_footer(); ?>
</div>