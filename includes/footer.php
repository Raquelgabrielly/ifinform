<footer class="page-footer green">
<div class="container">
	<div class="row">
		<div class="col l6 s12">
			<h5 class="white-text">Siga-nos nas redes!</h5>
			<p class="grey-text text-lighten-4">@@@@@@@@@@@@@@@@@@@@@@@@@@@@@</p>
		</div>
		<div class="col l4 offset-l2 s12">
			<h5 class="white-text">Menu</h5>
			<ul>
				<li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
				<li><a class="grey-text text-lighten-3" href="#!">Sobre</a></li>
				<li><a class="grey-text text-lighten-3" href="#!">Contato</a></li>
				<li><a class="grey-text text-lighten-3" href="#!">Desenvolvedores</a></li>
			</ul>
		</div>
	</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2019 Copyright Text
			<a class="grey-text text-lighten-4 right" href="#!">Mais Links</a>
		</div>
	</div>
</footer>

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
    		}, 5000);
    	});
    </script>

	</body>
</html>