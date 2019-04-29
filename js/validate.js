$(document).ready(function(){
				$("#formCadastro").validate({
					rules:{
						// atributos do cliente
							nome_cliente: {
								required: true
							},
							senha_cliente: {
								required: true,
								minlength: 6
							},
							login_cliente: {
								required: true
							},
						// atributos do funcionário
							nome_funcionario: {
								required: true
							},
							senha_funcionario: {
								required: true,
								minlength: 6
							},
							login_funcionario: {
								required: true
							},
							salario: {
								required: true,
								number: true,
								min: 0,
								max: 100000000000000000000000000000000000
							},
						// atributos do login
							login: {
								required: true
							},
							senha: {
								required: true,
								minlength: 6
							},
						// atributos da categoria
							descricao_categoria: {
								required: true
							},
						// atributos do produto
							descricao_produto: {
								required: true
							},
							preco: {
								required: true,
								number: true,
								min: 0,
								max: 1000000000000000000
							}
					}
				})
			})