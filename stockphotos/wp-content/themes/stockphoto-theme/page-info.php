<?php get_header();
/*
Template Name: Info Page
*/
?>


<div class="row1">
	<div class="col-xs-12">
		<p>We have many options to help you find just the right image for your project.<br>
Please call our sales team if you have questions regarding the information below.<br>
We will be happy to answer questions regarding pricing, sizes, file types, licensing, and general image search assistance.<hr></p>
	</div>
</div>


	<div class="col-xs-12">
		<h3>Our price policy and licence terms are simple and easy to remember. <br>
			You can use our images in all projects of a customers as long and as often as you like - no matter how high the circulation is. <br>
			Reprints of any kind are not a problem.</h3>
	</div>




	<div class="col-xs-4">
		<h2><i class="fa fa-picture-o fa-3x"></i></h2>
		<h2>Choose a Photo</h2>
		<p>Make your selection from our large collection of beautiful landscape photography.
		You can browse the entire collection, or search for a specific photograph.
		<!--Please, do not hesitate to contact us for additional image search assistance.
		If you cannot find exactly what you are looking for on our site, one of our professional
		photographers can help capture your ideal landscape photo! --></p>
	</div>

	<div class="col-xs-4">
		<h2><i class="fa fa-cc-paypal fa-3x"></i></h2>
		<h2>Pay using PayPal</h2>
		<p>You will be redirected to Paypal during your order to complete the payment. More information is available at www.paypal.com. 
		</p>
	</div>

	<div class="col-xs-4">
		<h2><i class="fa fa-download fa-3x"></i></h2>
		<h2>Download Instantly</h2>
		<p>We will send you an email as soon as your order has been confirmed with a link for you to download the images. 
		Download images directly after your order.</p>
	</div>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<!--<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>-->


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>