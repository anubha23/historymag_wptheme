<?php get_header(); ?>
<br/>
<div class="timeline">
<h3><span class="label label-default">TIMELINE</span></h3>

<?php 

/*$arrcat= wp_list_categories( array(
        'orderby'    => 'name'));
		
		print_r($arrcat[0]);*/
		
		
$categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
) );
//print_r($categories);
		?>
	<select name="categories">
<?php

	foreach ( $categories as $category ) {
	echo('<option value="'.esc_html($category->name).'">'.esc_html($category->name).'</option>');
	}	
?>
	
	</select>
	
	<?php
	$args = array(
    'post_type' => 'post'
    );
	$allperiods=array();
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :

    while ( $query->have_posts() ) : $query->the_post(); 
	$allperiods[]=get_field("eventyear");
	endwhile;
	wp_reset_postdata();
	endif;
	
	 $periods = array_unique($allperiods);
	 ?>
  
  <select name="period">
  <?php
 foreach ( $periods as $period ) {
	echo('<option value="'.esc_html($period).'">'.esc_html($period).'</option>');
	}	
	
?>  
	
  </select>
  <br/>
  
  <button>Scroll</button>
	<div id="buttons">
			<a class="prev" href="#">Previous</a>
			<a class="next" href="#">Next</a>
			<br class="clear" />
		</div>
  <div class="container-outer" id="target">
	
   <div class="container-inner">
   <ul>
   <?php
   $args = array(
    'post_type' => 'post'
    );
	$j=1;
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :

    while ( $query->have_posts() ) : $query->the_post(); 
	
   echo '<li class="content" id="item'.$j.'">';
   ?>
   <table class="contentgrp" style="margin-right: 10px;">
   <tr><td>
   <span style="color: #d02128; font-size: 12px;"><?php the_field('eventyear'); ?></span>
   </td></tr>
   <tr><td>
		<img src="<?php echo the_field('featuredimage'); ?>" width="200px" />
	</td></tr>
	<tr><td width="100px">
		<a href="<?php echo get_permalink($post->ID); ?>" target="_blank"><span style="color: #d02128; font-size: 17.5px;"><?php the_title(); ?></span></a>
	</td></tr>
	</table>
		</li>
	<?php
	$j++;
	endwhile;
	wp_reset_postdata();
	endif;
	
?>	
	<!--  <li class="content">
	  <img src="http://placehold.it/350x200" alt="top_story" />
	  </li>
	  
	  <li class="content" id="item3">
	  <img src="http://placehold.it/350x200" alt="top_story" />
	  </li>
	  
	  <li class="content" id="item4">
	  <img src="http://placehold.it/350x200" alt="top_story" />
	  </li>
	  
	  <li class="content" id="item5">
	  <img src="http://placehold.it/350x200" alt="top_story" />
	  </li>-->
	
	</ul>
   </div>	
</div>
  

</div>



<h3><span class="label label-default">TOP STORIES</span></h3>
<!--Carousel-->

<div id="myCarousel" class="carousel slide" data-interval="6000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Carousel items -->
    <div class="carousel-inner">
	
	<?php
		
		$args = array(
    'post_type' => 'post',
	'category_name'=> 'topstories'
    );
	$i=0;
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :

    while ( $query->have_posts() ) : $query->the_post(); 
		if ($i==0) : ?>
		<div class="item active">
		<?php else : ?>
		<div class="item">
        <?php endif; ?>	
        <!-- Start designing slide -->
		<div class="row">
			<div class="col-md-4">
			 <blockquote><?php the_field('quote'); ?></blockquote>
			<?php the_field('excerpt'); ?>
			</div>
			
			<div class="col-md-8">
			<img src="<?php the_field('featuredimage'); ?>" align="right">
            <div class="carousel-caption">
                <h3><?php the_title(); ?></h3>
            </div>
			</div>
			
		</div>
		</div>
		
		
		<!--End designing slide-->
		
		
		
    <?php 
	$i++;
	endwhile;
	wp_reset_postdata(); ?>
	</div>
	
	<!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
	</div>
 
	<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>



<div class="row">
<div class="col-md-12">
<h3><span class="label label-default">FEATURED</span></h3>
</div>
</div>
<div class="row">


<?php 		
		$args = array(
    'post_type' => 'post',
	'category_name'=> 'featured'
    );
	$i=0;
$query = new WP_Query( $args );
if ( $query->have_posts() ) :

    while ( $i<3 && $query->have_posts() ) : $query->the_post();
			if ($i==0) : ?>
			<div class="col-md-6">
			<a class="thumbnail">
			<img src="<?php echo the_field('featuredimage'); ?>" />
</a>
<a href="<?php echo get_permalink($post->ID); ?>" target="_blank"><span style="color: #d02128; font-size: 17.5px;"><?php the_title(); ?></span></a>
<blockquote><?php the_field('quote'); ?></blockquote>
<?php the_field('excerpt'); ?>
</div>
<?php else : ?>
	<div class="col-md-3"">
<a class="thumbnail" href="#">
<img src="<?php echo the_field('featuredimage'); ?>" alt="top_story" />
</a>
<a href="<?php echo get_permalink($post->ID); ?>" target="_blank"><span style="color: #d02128; font-size: 17.5px;"><?php the_title(); ?></span></a>
<p style="font-size: 17.5px;"><blockquote><?php the_field('quote'); ?></blockquote></p>
<p style="font-size: 15px;"><?php the_field('excerpt'); ?></p>
	</div>

<?php endif; ?>
       
    <?php 
	$i++;
	endwhile;
  wp_reset_postdata();
 
else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<div class="row">
<div class="col-md-12">
<h3><span class="label label-default">ARCHIVE</span></h3>
</div>
</div>
<div class="row">
<?php
global $post;
$i=0;
$args = array(
    'post_type' => 'post'
    );
$query = new WP_Query( $args );
if ( $query->have_posts() ) :

    while ( $i<4 && $query->have_posts() ) : $query->the_post(); ?>
	
	<div class="col-md-3 homearchive">

<a class="thumbnail" href="#">
<img src="<?php the_field('featuredimage'); ?>" />
<?php 
//echo get_permalink($post->ID);
/*the_field('featuredimage'); 
/*echo $imagecontent[3][3];
*/
?>
</a>
<a href="<?php echo get_permalink($post->ID); ?>" target="_blank"><span style="color: #d02128; font-size: 17.5px;"><?php the_title(); ?></span></a><br/><br/>
<p style="font-size: 16.5px;"><?php the_field('quote'); ?></p>
<p style="font-size: 15px;"><?php the_field('excerpt'); ?></p>
</div>
    <?php 
	$i++;
	endwhile;
  wp_reset_postdata();
 
else : 
?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<!--<div class="col-md-3" style="border-right: 2px solid #eeeeee;">

<a class="thumbnail" href="#">
<img src="http://placekitten.com/200/150" alt="top_story" />
</a>
<span style="color: #d02128; font-size: 17.5px;">INDIAN HISTORY</span>
<p style="font-size: 17.5px;">We are still using a
completely outdated
understanding of
history and methods
of teaching it. The
emphasis is on dates
and events.</p>

</div>
<div class="col-md-3" style="border-right: 2px solid #eeeeee;">

<a class="thumbnail" href="#">
<img src="http://placekitten.com/200/150" alt="top_story" />
</a>
<span style="color: #d02128; font-size: 17.5px;">INDIAN HISTORY</span>
<p style="font-size: 17.5px;">We are still using a
completely outdated
understanding of
history and methods
of teaching it. The
emphasis is on dates
and events.</p>

</div>
<div class="col-md-3" style="border-right: 2px solid #eeeeee;">

<a class="thumbnail" href="#">
<img src="http://placekitten.com/200/150" alt="top_story" />
</a>
<span style="color: #d02128; font-size: 17.5px;">INDIAN HISTORY</span>
<p style="font-size: 17.5px;">We are still using a
completely outdated
understanding of
history and methods
of teaching it. The
emphasis is on dates
and events.</p>
</div>-->
</div>
<?php get_footer(); ?>