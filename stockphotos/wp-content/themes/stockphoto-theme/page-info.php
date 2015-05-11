<?php get_header();
/*
Template Name: Info Page
*/
?>

<div class="row1">
	<div class="col-xs-12">
		<h3>We offer a large collection of handpicked landscape photos.<br><hr>
		All of our images are high quality and perfect for any project.<br></h3>
	</div>
</div>

	<div class="col-xs-12">
		<h1>Our price policy and licence terms are simple and easy to remember.</h1>
	</div>
	<div class="col-xs-4 col-xs-offset-4">
			<h2>You can use our images in all projects as long and as often as you like, 
			no matter how high the circulation is.
			Reprints of any kind are not a problem!<h2>
	</div> 

<div class="col-xs-12">
	<div class="col-xs-4">
		<h2><i class="fa fa-picture-o fa-3x"></i></h2>
		<h2>Choose a Photo</h2>
		<p>Make your selection from our large collection of beautiful landscape photography.
		You can browse the entire collection, or search for a specific photograph.</p>
	</div>

	<div class="col-xs-4">
		<h2><i class="fa fa-cc-paypal fa-3x"></i></h2>
		<h2>Pay using PayPal</h2>
		<p>We do not require a subscription. You will be redirected to Paypal during your order to complete the payment. More information is available at www.paypal.com. 
		</p>
	</div>

	<div class="col-xs-4">
		<h2><i class="fa fa-download fa-3x"></i></h2>
		<h2>Download Instantly</h2>
		<p>We will send you an email as soon as your order has been confirmed with a link for you to download the images. 
		Download images directly after your order.</p>
	</div>
</div>

<div class="col-xs-12">
<p>Please, do not hesitate to contact us for additional image search assistance.
		If you cannot find exactly what you are looking for on our site, one of our professional
		photographers can help capture your ideal landscape photo! </p>
	
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

<div class="col-xs-12">
<?php get_footer(); ?>
</div>