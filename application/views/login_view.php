<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin 2 - Login</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="vendor/assets/css/sb-admin-2.min.css" rel="stylesheet">

	<script
	src="https://code.jquery.com/jquery-3.6.4.js"
	integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
	crossorigin="anonymous"></script>
</head>

<body class="bg-gradient-primary">

<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
								</div>
								<form class="user">
									<div class="form-group">
										<input type="email" class="form-control form-control-user"
											   id="inputEmail" aria-describedby="emailHelp"
											   placeholder="Enter Email Address...">
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user"
											   id="inputSenha" placeholder="Password">
									</div>

									<button type="button" class="btn btn-primary btn-user btn-block" id="btnLogin">
										Login
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="forgot-password.html">Forgot Password?</a>
								</div>
								<div class="text-center">
									<a class="small" href="register.html">Create an Account!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php base_url('vendor/jquery/jquery.js')?>"></script>
<script type="text/javascript">
	var base = "<?= base_url('login')?>"


	$(document).ready(function () {

		$('#btnLogin').on("click", function () {

			var email = $('#inputEmail').val();
			var senha = $('#inputSenha').val();

			$.post(base + "/validaLogin", {
				email,
				senha
			}, function (retorno) {

				Swal.fire(
					'Bem-Vindo!!',
					'Login Realizado com Sucesso!',
					'success'
				)
				//window.location.href = "<?php //echo base_url('home')?>//";
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

<!--Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="<?= base_url()?>/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url()?>vendor/jquery-easing/jquery.easing.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url()?>vendor/assets/js/sb-admin-2.js"></script>

</body>

</html>
