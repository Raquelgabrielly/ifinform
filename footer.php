	<!--JavaScript at end of body for optimized loading-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script>
		M.AutoInit();
	</script>

	    <script>
    	$(document).ready(function(){
    		$('.carousel').carousel();

    		$('.carousel.carousel-slider').carousel({
  	  			indicators: true
  			});

    		setInterval(function(){
    			$('.carousel').carousel('next');
    		}, 9000);
    	});
    </script>
	</body>
</html>