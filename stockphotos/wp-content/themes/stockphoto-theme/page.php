<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="row">
    <h1><?php the_title(); ?></h1>
    </div>

    <div class="col-xs-4">
    <?php the_content(); ?>
    </div>
<div class="col-xs-4">
    <?php the_content(); ?>
    </div>
    <div class="col-xs-4">
    <?php the_content(); ?>
    </div>

<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>