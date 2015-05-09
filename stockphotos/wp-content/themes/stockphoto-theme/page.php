<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    This beautiful image is amazing! Buy it now!
    


<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>
