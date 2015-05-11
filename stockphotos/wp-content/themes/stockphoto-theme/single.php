<?php get_header(); ?>

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


<script>
function goBack() {
    window.history.back();
}
</script><!--go back button-->

<div class="col-xs-12 singlePage">
	
	<ul>
      	<li><a href="http://localhost:8888/stockphotos#postContent ">browse all photos</a></li>
      	<li><a onclick="goBack()">go back</a></li>
    </ul>	

    <h1><?php the_title(); ?></h1>
    
    <?php the_content(); ?>

    <div class="col-xs-12 photoInfo">

    <p> 300 dpi royalty free stock photo $9.95</p>
    </div>  

    <div class="col-xs-12"> 	
	<p>
      <?php the_field("buy_button"); ?>
    </p>
    </div> 
</div>      

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<div class="col-xs-12">

<?php get_footer(); ?>
</div>