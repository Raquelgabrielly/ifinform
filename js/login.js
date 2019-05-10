function get(id){
	return document.getElementById(id);
	}

	var perfilDiscente = get('perfil-discente');
	var perfilDocente = get('perfil-docente');
	var perfilVisitante = get('perfil-visitante');

	var icone = get('icone');
	var input = get('perfil');
	var label = get('label');

	perfilDiscente.addEventListener('click', function add(evt) {
			evt.preventDefault();
			input.type = 'text';
			input.name = 'matricula';
			input.removeAttribute("disabled");
			input.removeAttribute("value");
			input.id = 'matricula';
			label.for ='matricula';
			label.innerHTML = 'Matrícula';
			icone.innerHTML = 'power_input';
	});

	perfilDocente.addEventListener('click', function add1(evt) {
			evt.preventDefault();
			input.type = 'text';
			input.name = 'siape';
			input.removeAttribute("disabled");
			input.removeAttribute("value");
			input.id = 'siape';
			label.for ='siape';
			label.innerHTML = 'Siape';
			icone.innerHTML = 'power_input';
	});

	perfilVisitante.addEventListener('click', function add2(evt) {
			evt.preventDefault();
			input.type = 'text';
			input.name = 'cpf';
			input.removeAttribute("disabled");
			input.removeAttribute("value");
			input.id = 'cpf';
			label.for ='cpf';
			label.innerHTML = 'CPF';
			icone.innerHTML = 'power_input';
	});