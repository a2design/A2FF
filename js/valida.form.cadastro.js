$(document).ready( function() {
		$("#formCadastro").validate({
			// Define as regras
			rules:{
				nome:{
					required: true,	minlength: 2
				},
				email:{
					required: true, email: true
				},
				senha1:{					
					required: true, 
					maxlength: 8,
					minlength: 6
				},
				senha2:{					
					required: true,
					maxlength: 8, 
					minlength: 6
				},
				pais:{					
					required: true, minlength: 2
				},
				cep:{					
					required: true, 
					minlength: 8,
					number: true
				},
				endereco:{					
					required: true, minlength: 5
				},
				numero:{					
					required: true, 
					minlength: 2,
					maxlength: 10
				},
				bairro:{					
					required: true, 
					minlength: 2
				},
				tel:{					
					required: true,
					number: true, 
					minlength: 8
					
				}
																			
			},
			// Define as mensagens de erro para cada regra
			messages:{
				nome:{
					required: "Digite o seu nome",
					minLength: "O seu nome deve conter, no m�nimo, 6 caracteres"
				},
				email:{
					required: "Digite o seu e-mail para contato",
					email: "Digite um e-mail v�lido"
				},
				senha1:{
					required: "Digite a sua senha",
					minLength: "A sua senha deve conter, no m�nimo, 6 caracteres"
				},
				senha2:{
					required: "Confirmar a senha",
					minLength: "A sua senha deve conter, no m�nimo, 6 caracteres",
					equalTo: true
				},
				pais:{
					required: "Digite o pa�s",
					minLength: "O seu pa�s deve conter, no m�nimo, 2 caracteres"
				},
				cep:{
					required: "Digite o Cep",
					minLength: "O cep deve conter 8 caracteres",
					number: "Digite apenas n�meros"
				},
				endereco:{
					required: "Digite o endere�o",
					minLength: "O endere�o deve conter, no m�nimo, 5 caracteres"
				},
				numero:{
					required: "Digite o n�mero",
					minLength: "O n�mero deve conter, no m�nimo, 2 caracteres"
					
				},
				bairro:{
					required: "Digite o bairro",
					minLength: "O n�mero deve conter, no m�nimo, 2 caracteres"					
				},
				tel:{
					required: "Digite o telefone",
					minLength: "Digite 8 caracteres no m�nimo",
					number: "Digite apenas n�meros"
					
				}
			}
		});
	});