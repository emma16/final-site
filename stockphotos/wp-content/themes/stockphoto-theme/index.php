<?php get_header ();
/*
Template Name: Home Page
*/
?>

<script type="text/javascript">
(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 250) {
                $('.scrollIn').fadeIn(500);
            } else {
                $('.scrollIn').fadeOut(500);
            }
        });
    });
})(jQuery);
</script><!--This right here makes the nav appear on scroll!!!-->

    	

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
	$row1 = new WP_Query(['post_type'=>'post', 'category_name' => 'row1']);

	if ($row1->have_posts()) : while ($row1->have_posts()) : $row1->the_post(); ?>

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
	$row2 = new WP_Query(['post_type'=>'post', 'category_name' => 'row2']);

	if ($row2->have_posts()) : while ($row2->have_posts()) : $row2->the_post(); ?>

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
	$row3 = new WP_Query(['post_type'=>'post', 'category_name' => 'row3']);

	if ($row3->have_posts()) : while ($row3->have_posts()) : $row3->the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; else: ?>
	    <p>error, not found</p>
	<?php endif; ?>

</div>
	</div>

<!---end of third column-->

<?php get_footer();?>



