<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="timeline" style="position:relative;">		
<h3><span class="label label-default"><?php the_title(); ?></span>
<span style="float: right;font-size: 12px;padding-top: 5px;color: #7F7F7F; cursor:pointer;" class="spanclickexpand">CLICK TO EXPAND <span class="glyphicon glyphicon-plus" style="padding-left: 7px;font-size: 14px"></span></span>
</h3>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>


<div class="divfilter" style="margin-bottom:5px; display:none;">
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
	<select name="categories" id="categories" class="filterpostcontrol1 form-control" style=" width:160px; display:inline !important;" >
<?php
	echo('<option value="">Select Category</option>');
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
  
  <select name="period" id="period" class="filterpostcontrol1 form-control" style=" width:160px; display:inline !important;">
  <?php
echo('<option value="">Select Year</option>');
 foreach ( $periods as $period ) {
	echo('<option value="'.esc_html($period).'">'.esc_html($period).'</option>');
	}	
	
?>  
	
  </select>
</div>


<div class="row">
  <div class="col-md-12 container-inner1" >
  <br/>
    <?php 
$i=0;
	$args = array(
    'post_type' => 'post'
    );

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<?php 
	$i++; 

if ($i==4) : 
$i=1;
?>
</div>
 <?php endif; ?>	

<?php if ($i==1) : ?>
<div class="row">
        <?php endif; ?>	


<div class="col-md-4 ">
	
	<img src="<?php echo the_field('featuredimage'); ?>" width="100%" />
    <h3><a style="font-size: 17.5px;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<p style="font-size: 17.5px;"><blockquote><?php the_field('quote'); ?></blockquote></p>
<p style="font-size: 15px;"><?php the_field('excerpt'); ?></p>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    
</div>
    <?php endwhile; 

if ($i<4) : 
$i=1;
?>
</div>
 <?php endif; 


else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>

</div>

</div>
<?php get_footer(); ?>