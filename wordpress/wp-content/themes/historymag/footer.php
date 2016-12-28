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
<script>
	  (function($) {
		$(document).ready(function() {	
		$('.glyphicon-triangle-left').hide();
		
			
			$('button').click(function(){//this is not the cleanest way to do this, I'm just keeping it short.
				$('#target').scrollTo(document.getElementById('item5'), 2500);
			});
			
			$('.glyphicon-triangle-left').click(function () {
				$('#target').scrollTo('-=200px', 1000);
			});
			
			$('.glyphicon-triangle-right').click(function () {
				$('#target').scrollTo('+=200px', 1000);
			});
			
			$('#target').scroll(function() {
				var contentwidth, leftscroll;
				contentwidth=$('.content').width()*$('.content').length;
				leftscroll=contentwidth-960;
				
     if ($(this).scrollLeft() > 1) {// can be whatever, 0 refers to the top space you allow
        $('.glyphicon-triangle-left').show();// Hide your element
		//alert($(this).scrollLeft());
		//alert($('.content').length);
		//alert($('.container-inner').width()-$('.container-outer').width());
    }
	
	else{
		$('.glyphicon-triangle-left').hide();
	}
			
	
	 if ($(this).scrollLeft() == leftscroll) {
		 
		 $('.glyphicon-triangle-right').hide();
		 
	 }
	 
	 else
		 
		 {
			  $('.glyphicon-triangle-right').show();
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
      //  $(".container-inner").load("http://<?php echo $_SERVER[HTTP_HOST]; ?>/ihcbeta/ajax/",{catid:post_id});



$.ajax({
        url: "http://<?php echo $_SERVER[HTTP_HOST]; ?>/IHC/wordpress/wp-admin/admin-ajax.php",
        data: {'action':'example_ajax_request','cat_name': post_id,'period_value': period_value } ,
        success:function(data) {
            // This outputs the result of the ajax request
           // console.log(data);
$(".container-inner").html(data);
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