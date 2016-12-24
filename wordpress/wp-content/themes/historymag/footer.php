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
			
			$('button').click(function(){//this is not the cleanest way to do this, I'm just keeping it short.
				$('#target').scrollTo(document.getElementById('item5'), 800);
			});
			
			$('.prev').click(function () {
				$('#target').scrollTo('-=200px', 800);
			});
			
			$('.next').click(function () {
				$('#target').scrollTo('+=200px', 800);
			});
	
});
	  })(jQuery);
	</script>
  </body>
</html>