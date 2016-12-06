<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

<div class="row">
  <div class="col-md-12">
  <br/>
    <?php 
	$args = array(
    'post_type' => 'post'
    );

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	<img src="<?php echo the_field('featuredimage'); ?>" width="25%" />
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<p style="font-size: 17.5px;"><blockquote><?php the_field('quote'); ?></blockquote></p>
<p style="font-size: 15px;"><?php the_field('excerpt'); ?></p>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <hr>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>

</div>

<?php get_footer(); ?>