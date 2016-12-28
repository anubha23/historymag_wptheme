<?php 


function example_ajax_request() {
 
    // The $_REQUEST contains all the data sent via ajax
   // if ( isset($_REQUEST) ) {
     
     //  echo "Hello Ajax";
     
   // }
?>
 <ul id="dates">
   <?php
  
    $category_name= $_REQUEST['cat_name'];
    $period_value= $_REQUEST['period_value'];
    
if ($category_name != "" )  :
   $args = array(
    'post_type' => 'post',
    'category_name'=> $category_name,'meta_key'=> 'eventyear','orderby'=> 'meta_value', 'order' => 'ASC' 
    );

endif;

if ($category_name == "" )  :
	 $args = array(
    'post_type' => 'post','meta_key'=> 'eventyear','orderby'=> 'meta_value', 'order' => 'ASC' 
    );
endif;

	$j=1;
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :

    while ( $query->have_posts() ) : $query->the_post(); 

if ($period_value == get_field('eventyear') || $period_value=="")  :
	
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
endif;
	endwhile;
	wp_reset_postdata();
	endif;
	
?>
	
	</ul>

<?php 
    // Always die in functions echoing ajax content
   die();
}

add_action( 'wp_ajax_example_ajax_request', 'example_ajax_request' );
add_action( 'wp_ajax_nopriv_example_ajax_request', 'example_ajax_request' );


function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	wp_register_script( 'scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'scrollTo' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('WPBeginner Widget', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
function widget( $args, $instance ) {

	/*
	* Output widget title
	*/
	echo $args['before_widget'];
	if ( ! empty( $instance['title'] ) ) {
		echo '<a href="#" >'. $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'].'</a>';
	}

	/*
	* Custom loop that fetches posts from the Post
	*/
	$i = 0;
	$query_args = array(
		    'post_type' => 'post'
	    );
	$query = new WP_Query( $query_args );
	if ( $query->have_posts() ) :
	    while ( $i<4 && $query->have_posts() ) : $query->the_post(); ?>
			<a class="thumbnail" href="#">
				<img src="<?php the_field('featuredimage'); ?>" />
			</a>
			<a href="<?php echo get_permalink($query->post->ID); ?>" target="_blank">
				<span style="color: #d02128; font-size: 17.5px;"><?php the_title(); ?></span>
			</a>
			<p><?php the_field('quote'); ?></p>
			<br/>
			<br/>
			<p style="font-size: 16.5px;"><?php //the_field('quote'); ?></p>
	    <?php $i++;
		endwhile;
		wp_reset_postdata();
	else : ?>
	 <p><?php _e( 'Sorry, no posts available.' ); ?></p>
	<?php endif; 
	echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ) ; ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title );?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
	

?>
