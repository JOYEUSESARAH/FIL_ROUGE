<!DOCTYPE html>
<html lang="en">

<!-- health lab/login.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Health lab</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>

					<div class="main-menu-wrapper">
						<div class="menu-header">

							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li>
								<a href="{{route('welcome')}}">Home</a>
							</li>





						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>

						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{route('welcome')}}">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">

									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>special-samoussa</span></h3>
										</div>
                                        @if (session('status'))
                                    <div class="alert alert-success">{{session('status')}}</div>
                                    @endif
									<form method="POST" class="py-3"  action="{{ route('login') }}">
										@csrf
											<div class="form-group form-focus">
												<input type="text" name="username"  class="form-control floating" id="yourUsername" required>
												<label class="focus-label">Username</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating" id="yourPassword" required>
												<label class="focus-label">Mot de passe</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="forgot-password.html">Mot de passe oublié ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Se conncter</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
											<div class="text-center dont-have">N'avez-vous pas de compte? <a href="register">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->

