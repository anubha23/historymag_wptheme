<?php get_header(); ?>
<div class="container">
<div class="row">
<div class="col-md-4">
<h3><span class="label label-default">TOP STORIES</span></h3>
&nbsp;
<?php 
/*if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();*/
		
		$args = array(
    'post_type' => 'post'
    );
$query = new WP_Query( $args );
if ( $query->have_posts() ) :

    while ( $query->have_posts() ) : $query->the_post(); ?>
        <blockquote><?php the_field('quote'); ?></blockquote>
		<?php the_field('excerpt'); ?>
    <?php endwhile;
  wp_reset_postdata();
 
else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	<!--
<blockquote>‘We are still using a
completely outdated
understanding of
history and methods
of teaching it. The
emphasis is on dates
and events’</blockquote>
-Ranabir Chakravarti interviews
historian Romila Thapar,
Professor Emeritus, Jawaharlal
Nehru University
-->
</div>
<div class="col-md-8"><a class="thumbnail" href="#">
<img src="http://placekitten.com/500/500" alt="top_story" />
</a></div>
</div>
<div class="row">
<div class="col-md-12">
<h3><span class="label label-default">FEATURED</span></h3>
</div>
</div>
<div class="row">
<div class="col-md-6">
<a class="thumbnail">
<img src="http://placekitten.com/400/400" alt="top_story" />
</a>
<blockquote>‘We are still using a
completely outdated
understanding of
history and methods
of teaching it. The
emphasis is on dates
and events’</blockquote>
-Ranabir Chakravarti interviews
historian Romila Thapar,
Professor Emeritus, Jawaharlal
Nehru University

</div>
<div class="col-md-3" style="border-right: 2px solid #eeeeee;">
<a class="thumbnail" href="#">
<img src="http://placekitten.com/200/150" alt="top_story" />
</a>
<p style="font-size: 17.5px;">We are still using a
completely outdated
understanding of
history and methods
of teaching it. The
emphasis is on dates
and events.</p>
<p style="font-size: 15px;">Ranabir Chakravarti interviews
historian Romila Thapar,
Professor Emeritus, Jawaharlal
Nehru University</p>

</div>
<div class="col-md-3">
<a class="thumbnail" href="#">
<img src="http://placekitten.com/200/150" alt="top_story" />
</a>
<p style="font-size: 17.5px;">We are still using a
completely outdated
understanding of
history and methods
of teaching it. The
emphasis is on dates
and events.</p>
<p style="font-size: 15px;">Ranabir Chakravarti interviews
historian Romila Thapar,
Professor Emeritus, Jawaharlal
Nehru University</p>

</div>
</div>
<div class="row">
<div class="col-md-12">
<h3><span class="label label-default">ARCHIVE</span></h3>
</div>
</div>
<div class="row">
<?php
$args = array(
    'post_type' => 'post'
    );
$query = new WP_Query( $args );
if ( $query->have_posts() ) :

    while ( $query->have_posts() ) : $query->the_post(); ?>
	
	<div class="col-md-3" style="border-right: 2px solid #eeeeee;">

<a class="thumbnail" href="#">
<img src="http://placekitten.com/200/150" alt="top_story" />
</a>
<span style="color: #d02128; font-size: 17.5px;">INDIAN HISTORY</span>
<p style="font-size: 17.5px;"><?php the_field('quote'); ?></p>

</div>
    <?php endwhile;
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
</div>