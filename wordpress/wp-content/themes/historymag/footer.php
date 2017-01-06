</div>

<hr />
<center>
<div id="footer">
<p>
<p>&copy; Indian History Collective 2016</p>
<br />
</p>
</div>
</center>

    </div> <!-- /container -->

	
	<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-touch-events/1.0.5/jquery.mobile-events.js"></script>
<script>
	  (function($) {
			$(document).ready(function() {	
		$('.timelineleft').hide();
		
			
			$('button').click(function(){//this is not the cleanest way to do this, I'm just keeping it short.
				$('#target').scrollTo(document.getElementById('item5'), 2500);
			});
			
			$('.timelineleft').click(function () {
				$('#target').scrollTo('-=200px', 1000);
			});
			
			$('.timelineright').click(function () {

				$('#target').scrollTo('+=200px', 1000);
			});
			
			$('#target').scroll(function() {
				var contentwidth, leftscroll;
				contentwidth=$('.content').width()*$('.content').length;
				leftscroll=contentwidth-960;
				if($(window).width()<769)
				{contentwidth=$('.content').height()*$('.content').length;
				leftscroll=contentwidth-960;}
				
				
				
				
     if ($(this).scrollLeft() > 1) {
        $('.timelineleft').show();// Hide your element
		//alert($(this).scrollLeft());
		//alert($('.content').length);
		//alert($('.container-inner').width()-$('.container-outer').width());
    }
	
	else{
		$('.timelineleft').hide();
	}
			
	
	 if ($(this).scrollLeft() == leftscroll) {
		 
		 $('.timelineright').hide();
		 
	 }
	 
	 else
		 
		 {
			  $('.timelineright').show();
		 }

    /*else {
         alert('moved');// It's just if you want to show back the element if we're back on top
    }*/
});


$('.filterpostcontrol').change(function(){
        var post_id = $('#categories').val();
        var period_value = $('#period').val();
	
	//alert(post_id);
        $(".container-inner").html("loading...");
      //  $(".container-inner").load("http://<?php echo $_SERVER[HTTP_HOST]; ?>/ihc/wordpress/ajax/",{catid:post_id});



$.ajax({
        url: "http://<?php echo $_SERVER[HTTP_HOST]; ?>/ihc/wordpress/wp-admin/admin-ajax.php",
        data: {'action':'example_ajax_request','cat_name': post_id,'period_value': period_value } ,
        success:function(data) {
            // This outputs the result of the ajax request
           // console.log(data);
$(".container-inner").html(data);
$('#target').scrollTo('1px', 1);
$('.timelineright').show();
$('.timelineleft').hide();
        },
        error: function(errorThrown){
//alert("Hello Ajax Error");
           // console.log(errorThrown);
        }
    });  
return false;
    });


	
$('.spanclickexpand').click(function(){
$('.divfilter').toggle(600);
if ( $('.spanclickexpand span').attr('class')=="glyphicon glyphicon-plus")
{
$('.spanclickexpand span').removeClass("glyphicon glyphicon-plus");
$('.spanclickexpand span').addClass("glyphicon glyphicon-minus");
}
else
{
$('.spanclickexpand span').removeClass("glyphicon glyphicon-minus");
$('.spanclickexpand span').addClass("glyphicon glyphicon-plus");
}


});


if($(window).width()<769)
{
$('.timelineleft span').addClass("glyphicon-triangle-top");
$('.timelineright span').addClass("glyphicon-triangle-bottom");
}



$('.filterpostcontrol1').change(function(){
        var post_id = $('#categories').val();
        var period_value = $('#period').val();
	
	//alert(post_id);
        $(".container-inner1").html("loading...");
 



$.ajax({
        url: "http://<?php echo $_SERVER[HTTP_HOST]; ?>/ihc/wordpress/wp-admin/admin-ajax.php",
        data: {'action':'example_ajax_request1','cat_name': post_id,'period_value': period_value } ,
        success:function(data) {
            // This outputs the result of the ajax request
           // console.log(data);
$(".container-inner1").html(data);

        },
        error: function(errorThrown){
//alert("Hello Ajax Error");
           // console.log(errorThrown);
        }
    });  
return false;
    });




});
	  })(jQuery);
	</script>
  </body>
</html>