<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<div class="row">
  <div class="col-md-8">
    <h1>Articles</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<img src="<?php echo the_field('featuredimage'); ?>" alt="top_story" />
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p style="font-size: 17.5px;"><blockquote><?php the_field('quote'); ?></blockquote></p>
<p style="font-size: 15px;"><?php the_field('excerpt'); ?></p>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <hr>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
  <div class="col-md-4">

    <?php get_sidebar(); ?>   

  </div>
</div>

<?php get_footer(); ?>