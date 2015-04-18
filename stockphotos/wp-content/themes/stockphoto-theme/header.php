<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

	<?php wp_head();?>
</head>
<body>

    	<script type="text/javascript">
(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('.navigationBar').fadeIn(500);
            } else {
                $('.navigationBar').fadeOut(500);
            }
        });
    });
})(jQuery);
</script><!--This right here makes the nav appear on scroll!!!-->

  <div class="container">
  	<div class="navigationBar col-xs-12">
			<ul class="navigationList">
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'home')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/home ">Home</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'about')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/about">About</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'share')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/share">Share</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'shine')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/shine">Shine On</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'editor')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/editor">Editor's Picks</a></li>
				<li><form style="display: inline-block;" action="<?php bloginfo('url'); ?>/search" method="get"><input type="text" name="query" width="200" class="form-control" placeholder="Search"><button type="submit" class="btn btn-default searchButton">Go</button></form></li>
			</ul>
		</div>

