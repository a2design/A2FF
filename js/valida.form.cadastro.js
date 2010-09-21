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
					minLength: "O seu nome deve conter, no mínimo, 6 caracteres"
				},
				email:{
					required: "Digite o seu e-mail para contato",
					email: "Digite um e-mail válido"
				},
				senha1:{
					required: "Digite a sua senha",
					minLength: "A sua senha deve conter, no mínimo, 6 caracteres"
				},
				senha2:{
					required: "Confirmar a senha",
					minLength: "A sua senha deve conter, no mínimo, 6 caracteres",
					equalTo: true
				},
				pais:{
					required: "Digite o país",
					minLength: "O seu país deve conter, no mínimo, 2 caracteres"
				},
				cep:{
					required: "Digite o Cep",
					minLength: "O cep deve conter 8 caracteres",
					number: "Digite apenas números"
				},
				endereco:{
					required: "Digite o endereço",
					minLength: "O endereço deve conter, no mínimo, 5 caracteres"
				},
				numero:{
					required: "Digite o número",
					minLength: "O número deve conter, no mínimo, 2 caracteres"
					
				},
				bairro:{
					required: "Digite o bairro",
					minLength: "O número deve conter, no mínimo, 2 caracteres"					
				},
				tel:{
					required: "Digite o telefone",
					minLength: "Digite 8 caracteres no mínimo",
					number: "Digite apenas números"
					
				}
			}
		});
	});