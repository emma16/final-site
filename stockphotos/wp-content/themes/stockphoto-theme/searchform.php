<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="row">
  <h1>Search Results</h1> 
    </div>

    <div class="col-xs-12">
  		<?php echo $_GET['query']; ?> 

  		
    </div>
	

<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>