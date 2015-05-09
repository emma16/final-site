<?php get_header(); 
/*
Template Name: Home Page
*/
?>

    	

<script type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $("html, body").animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script> <!--smooth scrolling-->

<div class="frontCover">

	<img class="logo" src="<?php bloginfo('url');?>/wp-content/uploads/2015/05/logo.png" alt="">

	<h4>Your search for the perfect picture starts <a href="#postContent">[here]</a>.</h4>

</div>

<div class="col-xs-4">
	<div id="postContent">

<?php 
	$mountains = new WP_Query(['post_type'=>'post', 'category_name' => 'mountains']);

	if ($mountains->have_posts()) : while ($mountains->have_posts()) : $mountains->the_post(); ?>

		<?php the_content(); ?>
			
	<?php endwhile; else: ?>
	    <p>error, not found</p>
	<?php endif; ?>

</div>
	</div>

<!--end of first column-->

<div class="col-xs-4">
	<div id="postContent">

<?php 
	$ocean = new WP_Query(['post_type'=>'post', 'category_name' => 'ocean']);

	if ($ocean->have_posts()) : while ($ocean->have_posts()) : $ocean->the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; else: ?>
	    <p>error, not found</p>
	<?php endif; ?>

</div>
	</div>

<!---end of second column-->

<div class="col-xs-4">
	<div id="postContent">

<?php 
	$field = new WP_Query(['post_type'=>'post', 'category_name' => 'field']);

	if ($field->have_posts()) : while ($field->have_posts()) : $field->the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; else: ?>
	    <p>error, not found</p>
	<?php endif; ?>

</div>
	</div>

<!---end of third column-->

<?php get_footer();?>



