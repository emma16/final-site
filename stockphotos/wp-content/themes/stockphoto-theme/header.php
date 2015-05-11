<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Fjalla+One' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

	<?php wp_head();?>
</head>
<body>

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

  <div class="container-fluid">
  	<div class="navigationBar scrollIn col-xs-12">
			<ul class="navigationList">
				<li class="smallLogo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('url');?>/wp-content/uploads/2015/05/logo2.png" alt=""></a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], ' ')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?> ">home</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'about')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/info">info</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'share')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/checkout">checkout</a></li>
				<li><a <?php if(strpos($_SERVER['REQUEST_URI'], 'shine')) echo 'class="active"'; ?> href="<?php bloginfo('url'); ?>/contact">contact</a></li>
				<li><form style="display: inline-block;" action="<?php bloginfo('url'); ?>/search" method="get"><input type="text" name="query" width="200" class="form-control" placeholder="search now"><button type="submit" class="btn btn-default searchButton">Go</button></form></li>
			</ul>
		</div>


