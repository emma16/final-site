<?php get_header();
/*
Template Name: Contact Page
*/
?>

<!--<div class="navigationBar col-xs-12" style="display: block;">
			<ul class="navigationList">
				<li class="smallLogo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('url');?>/wp-content/uploads/2015/05/logo2.png" alt=""></a></li>
				<li><a href="<?php bloginfo('url');?> ">home</a></li>
				<li><a href="<?php bloginfo('url');?>/info">info</a></li>
				<li><a href="<?php bloginfo('url');?>/checkout">checkout</a></li>
				<li><a href="<?php bloginfo('url');?>/contact">contact</a></li>
				<li><form style="display: inline-block;" action="<?php bloginfo('url');?>/search" method="get"><input type="text" name="query" width="200" class="form-control" placeholder="search now"><button type="submit" class="btn btn-default searchButton">Go</button></form></li>
			</ul>
		</div>-->

<div class="row2">
	<div class="col-xs-12">
		<br><br><br><br><br><br><br><br><br>
		<h3>We are currently searching for photographers.<br><hr>
			Contact us for details.</h3>
	</div>
</div>

<div class="col-xs-12 contact1">
	<p>Please call our sales team if you have questions regarding the information provided on this website.<br>
We will be happy to answer questions regarding pricing, sizes, file types, licensing, and general image search assistance.</p>
</div>

<div class="col-xs-12">
	<div class="col-xs-4">
		<h2>Phone Numbers</h2>
		<p>Customer Service: 1-888-777-7000</p>
		<p>Fax: 1-888-778-8000</p>
	</div>

	<div class="col-xs-4">
		<h2>Email</h2>
		<p><a href="mailto:picturesque@contact.com?Subject=Hello%20beautiful" target="_top">picturesque@contact.com</a></p>
	</div>

	<div class="col-xs-4">
		<h2>Address</h2>
		<p>PO Box 401<br>
			Los Angeles, CA<br>
			90017</p>
	</div>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<!--<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>-->


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>

