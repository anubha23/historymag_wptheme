<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>INDIAN HISTORY COLLECTIVE</title>
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<!--<link rel="stylesheet" href="timeline/css/style.css" media="screen" />-->
    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  <!--<script>var $ = jQuery;</script>	
	<script src="timeline/js/jquery.timelinr-0.9.6.js"></script>
	
	<script language="javascript">
	jQuery(function(){
			jQuery().timelinr({
				arrowKeys: 'true'
			})
		});
	</script>-->
  </head>
  <body>
  <div class="container">
  <h3 id="header">
<a href="<?php bloginfo('url'); ?>"><span style="color:#000000;font-size:30px;"><?php bloginfo('name'); ?></span></a>
</h3>
  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

