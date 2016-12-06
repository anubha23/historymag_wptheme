<?php get_header(); ?>

<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row">

  <div class="col-md-8">

	
		<h1 style="color:#d02128;"><?php the_title(); ?></h1>
		
<img src="<?php the_field('featuredimage'); ?>" align="right" width="100%">
	
	</div>
	
	<div class="col-md-4">
	
	</div>
	
	</div>
<div class="row">
	<div class="col-md-8">
	<br/><br/>
	<?php the_content(); ?>
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>
	  	<hr>
		<?php comments_template(); ?>
	</div>
	
	<div class="col-md-4">
	<?php get_sidebar(); ?>
	</div>

</div>
	<?php endwhile; ?>
	
	
	<?php else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="col-md-4">
	  	<?php get_sidebar(); ?>
  </div>
</div>



</div>
<?php get_footer(); ?>