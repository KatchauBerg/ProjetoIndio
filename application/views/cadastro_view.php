<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin 2 - Register</title>

	<!-- Custom fonts for this template-->
	<link href="<?=base_url()?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?=base_url()?>vendor/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
				<div class="col-lg-7">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Crie Sua Conta!</h1>
						</div>
						<form class="user">
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="inputNome"
										   placeholder="Nome">
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-user" id="inputCpf"
										   placeholder="Cpf">
								</div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control form-control-user" id="inputEmail"
									   placeholder="Endereço de E-mail">
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user"
										   id="inputSenha" placeholder="Senha">
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user"
										   id="inputSenhaNovamente" placeholder="Repita sua senha">
								</div>
							</div>
							<button type="button" class="btn btn-primary btn-user btn-block" id = "btnCadastro">
								Register Account
							</button>

						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="forgot-password.html">Esqueceu a senha?</a>
						</div>
						<div class="text-center">
							<a class="small" href="<?= base_url('login')?>">Ja Possui uma conta?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<script src="<?php base_url()?>vendor/jquery/jquery.js"></script>
<script type="text/javascript">
	var base = "<?= base_url('cadastro')?>"

	$(document).ready(function () {

		$('#btnCadastro').on("click", function () {

			var email = $('#inputEmail').val();
			var senha = $('#inputSenha').val();
			var repeteSenha = $('#inputSenhaNovamente').val();
			var cpf =$('#inputCpf').val();
			var nome =$('#inputNome').val();

			$.post(base + "/registraUsuario", {
				email,
				senha,
				repeteSenha,
				cpf,
				nome,
			}, function (retorno) {
				alert(retorno)
				Swal.fire(
					'Sucesso',
					'Cadastro Realizado com Sucesso!',
					'success'
				)
				//window.location.href = "<?php //echo base_url('home')?>//"; <!-redireciona Pagina-->
			}).fail(function(){
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
					footer: '<a href="">Why do I have this issue?</a>'
				})
			});
		});

	});
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Bootstrap core JavaScript-->
<script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url()?>vendor/assets/js/sb-admin-2.min.js"></script>

</body>

</html>
