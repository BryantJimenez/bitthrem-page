$(document).ready(function(){
	//Usuarios login
	$("button[action='login']").on("click",function(){
		$("#formLogin").validate({
			rules:
			{
				email: {
					required: true,
					email: true,
					minlength: 5,
					maxlength: 191
				},

				password: {
					required: true,
					minlength: 8,
					maxlength: 40
				}
			},
			submitHandler: function(form) {
				$("button[action='login']").attr('disabled', true);
				form.submit();
			}
		});
	});

	//Usuarios register
	$("button[action='register']").on("click",function(){
		$("#formRegister").validate({
			rules:
			{
				name: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				lastname: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				email: {
					required: true,
					email: true,
					minlength: 5,
					maxlength: 191,
					remote: {
						url: "/usuarios/email",
						type: "get"
					}
				},

				password: {
					required: true,
					minlength: 8,
					maxlength: 40
				},

				terms: {
					required: true
				}
			},
			messages:
			{
				email: {
					remote: "Este correo ya esta en uso."
				}
			},
			submitHandler: function(form) {
				$("button[action='register']").attr('disabled', true);
				form.submit();
			}
		});
	});

	//Recuperar Contraseña
	$("button[action='recovery']").on("click",function(){
		$("#formRecovery").validate({
			rules:
			{
				email: {
					required: true,
					email: true,
					minlength: 5,
					maxlength: 191
				}
			},
			submitHandler: function(form) {
				$("button[action='recovery']").attr('disabled', true);
				form.submit();
			}
		});
	});

	//Restaurar Contraseña
	$("button[action='reset']").on("click",function(){
		$("#formReset").validate({
			rules:
			{
				email: {
					required: true,
					email: true,
					minlength: 5,
					maxlength: 191
				},

				password: {
					required: true,
					minlength: 8,
					maxlength: 40
				},

				password_confirmation: { 
					equalTo: "#password",
					minlength: 8,
					maxlength: 40
				}
			},
			submitHandler: function(form) {
				$("button[action='reset']").attr('disabled', true);
				form.submit();
			}
		});
	});

	//Perfil
	$("button[action='profile']").on("click",function(){
		$("#formProfile").validate({
			rules:
			{
				name: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				lastname: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				phone: {
					required: true,
					minlength: 5,
					maxlength: 15
				},

				password: {
					required: false,
					minlength: 8,
					maxlength: 40
				},

				password_confirmation: { 
					equalTo: "#password",
					minlength: 8,
					maxlength: 40
				}
			},
			submitHandler: function(form) {
				$("button[action='profile']").attr('disabled', true);
				form.submit();
			}
		});
	});

	// Usuarios
	$("button[action='user']").on("click",function(){
		$("#formUser").validate({
			rules:
			{
				name: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				lastname: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				email: {
					required: true,
					email: true,
					minlength: 5,
					maxlength: 191,
					remote: {
						url: "/usuarios/email",
						type: "get"
					}
				},

				phone: {
					required: true,
					minlength: 5,
					maxlength: 15
				},

				type: {
					required: true
				},

				password: {
					required: true,
					minlength: 8,
					maxlength: 40
				},

				password_confirmation: { 
					equalTo: "#password",
					minlength: 8,
					maxlength: 40
				}
			},
			messages:
			{
				email: {
					remote: "Este correo ya esta en uso."
				},

				type: {
					required: 'Seleccione una opción.'
				}
			},
			submitHandler: function(form) {
				$("button[action='user']").attr('disabled', true);
				form.submit();
			}
		});
	});

	// Categorias
	$("button[action='category']").on("click",function(){
		$("#formCategory").validate({
			rules:
			{
				"name[es]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"name[en]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				type: {
					required: true
				}
			},
			messages:
			{
				type: {
					required: 'Seleccione una opción.'
				}
			},
			submitHandler: function(form) {
				$("button[action='category']").attr('disabled', true);
				form.submit();
			}
		});
	});

	// Preguntas
	$("button[action='question']").on("click",function(){
		$("#formQuestion").validate({
			rules:
			{
				category_id: {
					required: true
				},
				
				"question[es]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"question[en]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"answer[es]": {
					required: true,
					minlength: 2,
					maxlength: 1000
				},

				"answer[en]": {
					required: true,
					minlength: 2,
					maxlength: 1000
				}
			},
			messages:
			{
				category_id: {
					required: 'Seleccione una opción.'
				}
			},
			submitHandler: function(form) {
				$("button[action='question']").attr('disabled', true);
				form.submit();
			}
		});
	});

	$("button[action='help']").on("click",function(){
		$("#formHelp").validate({
			rules:
			{
				category_id: {
					required: true
				},

				"title[es]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"title[en]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"content[es]": {
					required: true,
					minlength: 2,
					maxlength: 65000
				},

				"content[en]": {
					required: true,
					minlength: 2,
					maxlength: 65000
				}
			},
			messages:
			{
				category_id: {
					required: 'Seleccione una opción.'
				}
			},
			submitHandler: function(form) {
				$("button[action='help']").attr('disabled', true);
				form.submit();
			}
		});
	});

	// Articulos
	$("button[action='article']").on("click",function(){
		$("#formArticle").validate({
			rules:
			{
				category_id: {
					required: true
				},

				image: {
					required: true
				},

				"title[es]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"title[en]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"content[es]": {
					required: true,
					minlength: 2,
					maxlength: 65000
				},

				"content[en]": {
					required: true,
					minlength: 2,
					maxlength: 65000
				}
			},
			messages:
			{
				category_id: {
					required: 'Seleccione una opción.'
				},

				image: {
					required: 'Seleccione una imagen.'
				}
			},
			submitHandler: function(form) {
				$("button[action='article']").attr('disabled', true);
				form.submit();
			}
		});
	});

	$("button[action='article']").on("click",function(){
		$("#formArticleEdit").validate({
			rules:
			{
				category_id: {
					required: true
				},

				image: {
					required: false
				},

				"title[es]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"title[en]": {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				"content[es]": {
					required: true,
					minlength: 2,
					maxlength: 65000
				},

				"content[en]": {
					required: true,
					minlength: 2,
					maxlength: 65000
				}
			},
			messages:
			{
				category_id: {
					required: 'Seleccione una opción.'
				},

				image: {
					required: 'Seleccione una imagen.'
				}
			},
			submitHandler: function(form) {
				$("button[action='article']").attr('disabled', true);
				form.submit();
			}
		});
	});

	// Ajustes
	$("button[action='setting']").on("click",function(){
		$("#formSetting").validate({
			rules:
			{
				phone: {
					required: true,
					minlength: 5,
					maxlength: 20
				},

				email: {
					required: true,
					email: true,
					minlength: 5,
					maxlength: 191
				},

				address: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				facebook: {
					required: false,
					minlength: 2,
					maxlength: 191
				},

				youtube: {
					required: false,
					minlength: 2,
					maxlength: 191
				},

				instagram: {
					required: false,
					minlength: 2,
					maxlength: 191
				}
			},
			submitHandler: function(form) {
				$("button[action='setting']").attr('disabled', true);
				form.submit();
			}
		});
	});

	// Idiomas
	$("button[action='language']").on("click",function(){
		$("#formLanguage").validate({
			rules:
			{
				name: {
					required: true,
					minlength: 1,
					maxlength: 191
				},

				locale: {
					required: true,
					minlength: 1,
					maxlength: 191
				}
			},
			submitHandler: function(form) {
				$("button[action='language']").attr('disabled', true);
				form.submit();
			}
		});
	});

	// Traducciones
	$("button[action='translation']").on("click",function(){
		$("#formTranslation").validate({
			rules:
			{
				group: {
					required: false,
					minlength: 1,
					maxlength: 191
				},

				key: {
					required: true,
					minlength: 1,
					maxlength: 191
				},

				value: {
					required: true,
					minlength: 1,
					maxlength: 191
				},

				namespace: {
					required: true,
					minlength: 1,
					maxlength: 191
				}
			},
			submitHandler: function(form) {
				$("button[action='translation']").attr('disabled', true);
				form.submit();
			}
		});
	});
	
	// Formulario de Contacto (Web)
	$("button[action='contact']").on("click",function(){
		$("#formContactWeb").validate({
			rules:
			{
				name: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				email: {
					required: true,
					email: true,
					minlength: 5,
					maxlength: 191
				},

				subject: {
					required: true,
					minlength: 2,
					maxlength: 191
				},

				message: {
					required: true,
					minlength: 5,
					maxlength: 65000
				}
			},
			submitHandler: function(form) {
				$("button[action='contact']").attr('disabled', true);
				form.submit();
			}
		});
	});
});