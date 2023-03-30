<!DOCTYPE html>
<!-- 
Template Name: Mintos - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Mintos I Login</title>
	<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Toggles CSS -->
	<link href="../Plantilla/html/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
	<link href="../Plantilla/html/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="../Plantilla/html/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<!-- <div class="preloader-it">
			<div class="loader-pendulums"></div>
		</div> -->
	<!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper">

		<!-- Main Content -->
		<div class="hk-pg-wrapper hk-auth-wrapper">
			<header class="d-flex justify-content-end align-items-center">
				<div class="btn-group btn-group-sm">
					<a href="#" class="btn btn-outline-secondary">Ayuda</a>
					<a href="#" class="btn btn-outline-secondary">Sobre Nosotros</a>
				</div>
			</header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 pa-0">
						<div class="auth-form-wrap pt-xl-0 pt-70">
							<div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
								<a class="auth-brand text-center d-block mb-20" href="#">
									<img class="brand-img" src="../Plantilla/html/dist/img/logo-light.png" alt="brand" />
								</a>
								<form method="POST" action="{{ route('login') }}">
									<h1 class="display-4 text-center mb-10">¡Bienvenido de vuelta! :)</h1>
									<p class="text-center mb-30">Ingresa tu cuenta para empezar a hacer cosas increibles.</p>
									<div class="form-group">
										<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

										<div class="col-md-12">
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

											@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

											<div class="col-md-12">
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

												@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>
									</div>
									<div class="custom-control custom-checkbox mb-25">
										<input class="custom-control-input" id="same-address" type="checkbox" checked>
										<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

										<label class="form-check-label" for="remember">
											{{ __('Remember Me') }}
										</label>
									</div>
									<div class="row mb-0">
										<div class="col-md-12 offset-md-0">
											<button type="submit" class="btn btn-primary btn-block">
												{{ __('Login') }}
											</button>
										</div>

										<br>


									</div>

									<div>
										<p class="font-14 text-center mt-15">¿Problemas para iniciar? <a href="{{ route('password.request') }}"> Olvide mi contraseña</a></p>
										<div class="option-sep">o</div>

										<p class="text-center">¿No tienes una cuenta aún? <a href="{{ route('register') }}">Registrate</a></p>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Content -->

	</div>
	<!-- /HK Wrapper -->

	<!-- JavaScript -->

	<!-- jQuery -->
	<script src="vendors/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
	<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- FeatherIcons JavaScript -->
	<script src="dist/js/feather.min.js"></script>

	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
</body>

</html>