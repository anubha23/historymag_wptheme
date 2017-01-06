<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>INDIAN HISTORY COLLECTIVE</title>
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<!--<link rel="stylesheet" href="timeline/css/style.css" />-->
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

	<!--<script src="timeline/js/jquery.timelinr-0.9.6.js"></script>
	
	<script>
	jQuery(function(){
			jQuery().timelinr({
				arrowKeys: 'true'
			})
		});
	</script>-->


<style type="text/css">

.comment-form-comment label,.comment-form-email label,.comment-form-author label,.comment-form-url label { display:block !important;}
@media screen and (max-width: 768px) {
.container-outer { 

overflow-x: hidden; 
overflow-y:hidden;
width: 100% !important; 
height: 500px !important; 

}
.container-inner { height: 10000px !important; width:100% !important;
}

.content
{
list-style:none !important;
 display: block !important;

}

.carousel-control .glyphicon-chevron-right, .carousel-control .icon-next { margin-right:0px !important;}
.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev { margin-left:0px !important;}
.carousel-control { width:10px !important;}
.contentgrp td img { width:100% !important;}

.divrulerpart { display:none;}

.carousel-caption  { top:20px !important;}

}
</style>
  </head>
  <body>
  <div class="container">
  <h3 id="header">
<a href="<?php bloginfo('url'); ?>"><span style="color:#000000;font-size:30px;"><?php bloginfo('name'); ?></span></a>
</h3>
  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>