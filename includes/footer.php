<footer class="page-footer green darken-2">
<div class="container">
	<div class="row">
		<div class="col l6 s12">
			<h5 class="white-text">Siga-nos nas redes!</h5>
			<a href="https://www.instagram.com/ifpecampusigarassu/?hl=pt-br"> instagran do iF</a>
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

			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.datepicker');
				var instances = M.Datepicker.init(elems, options);
			});

			// Or with jQuery

			$(document).ready(function(){
				
	    	$('.datepicker').datepicker({
				  format:'dd/mm/yyyy',
				i18n:{
				  months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
				  monthsShort: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
				  weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
				  weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
				  today: 'Hoje',
				  clear: 'Limpar',
				  close: 'Pronto',
				  labelMonthNext: 'Próximo mês',
				  labelMonthPrev: 'Mês anterior',
				  labelMonthSelect: 'Selecione um mês',
				  labelYearSelect: 'Selecione um ano',
				  selectMonths: true,
				  selectYears: 15,
				  cancel: 'Cancelar',
				  clear: 'Limpar'
				}
});

			});

    </script>

	</body>
</html>