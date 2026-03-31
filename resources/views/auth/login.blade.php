<!DOCTYPE html>
<html lang="en">

<head>

<title>Login</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <meta name="keywords" content="NexaDash is a modern admin dashboard template built with Bootstrap 5. Featuring a clean and responsive design, it provides a range of customizable components and tools to efficiently manage and oversee various administrative tasks.">
<meta name="author" content="DexignZone">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
<meta name="description" content="NexaDash Bootstrap 5 template, admin dashboard design, modern admin panel, responsive admin template, Bootstrap 5 admin components, administrative task management, customizable dashboard design, NexaDash features, Bootstrap admin template, user-friendly admin interface">
<meta name="og:title" content="NexaDash Admin Dashboard Bootstrap 5 Template">
<meta name="og:description" content="NexaDash Bootstrap 5 template, admin dashboard design, modern admin panel, responsive admin template, Bootstrap 5 admin components, administrative task management, customizable dashboard design, NexaDash features, Bootstrap admin template, user-friendly admin interface">
<meta name="og:image" content="https://nexadash.dexignzone.com/xhtml/social-image.png">
<meta name="format-detection" content="telephone=no">
<meta name="twitter:title" content="NexaDash Admin Dashboard Bootstrap 5 Template">
<meta name="twitter:description" content="NexaDash Bootstrap 5 template, admin dashboard design, modern admin panel, responsive admin template, Bootstrap 5 admin components, administrative task management, customizable dashboard design, NexaDash features, Bootstrap admin template, user-friendly admin interface">
<meta name="twitter:image" content="https://nexadash.dexignzone.com/xhtml/social-image.png">
<meta name="twitter:card" content="summary_large_image"> --}}


<link rel="shortcut icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="{{asset('admin/assets/public/css/style.css')}}" rel="stylesheet" type="text/css"/>

</head>

<body class="vh-100">

		<div class="authincation h-100">
		<div class="container-fluid h-100">
			<div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<img src="{{asset('admin/assets/public/images/logo-full.png')}}" class="mb-3 login-sm-logo mx-auto" alt="">
							<h3 class="title">Admin Sign In</h3>
							{{-- <p>Sign in to your account to start using NexaDash</p> --}}
						</div>
						<form action="{{ route('login.attempt') }}" method="POST" id="admin-login-form">
							@csrf

							@if ($errors->any())
								<div class="alert alert-danger">
									{{ $errors->first() }}
								</div>
							@endif

							<div class="mb-4">
								<label class="mb-1">Email<span class="text-danger"> *</span></label>
								<input type="email" name="email" class="form-control form-control" value="{{ old('email') }}" required autofocus>
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1">Password<span class="text-danger"> *</span></label>
								<input type="password" name="password" id="dz-password" class="form-control form-control" required>
								<span class="show-pass eye">

									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>

								</span>
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" name="remember" class="form-check-input" id="customCheckBox1" checked>
										<label class="form-check-label mt-1" for="customCheckBox1">Remember my
											preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="#" class="btn-link text-primary">Forgot
										Password?</a>
								</div>
							</div>
							<div class="text-center mb-4 d-grid">
								<button type="submit" class="btn btn-primary">Sign In</button>
							</div>					
							<p class="text-center text-muted">Use your seeded system admin account to continue.</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


<script src="{{asset('admin/assets/vendor/global/global.min.js')}}" type="text/javascript"></script> 
{{-- <script src="{{asset('admin/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('admin/assets/js/custom.js')}}" type="text/javascript"></script>
<script>
	(() => {
		const form = document.getElementById('admin-login-form');

		if (!form) {
			return;
		}

		const renderError = (message) => {
			const existing = form.querySelector('[data-error-box]');

			if (existing) {
				existing.remove();
			}

			const errorBox = document.createElement('div');
			errorBox.className = 'alert alert-danger';
			errorBox.setAttribute('data-error-box', 'true');
			errorBox.textContent = message;
			form.prepend(errorBox);
		};

		form.addEventListener('submit', async (event) => {
			event.preventDefault();

			const submitButton = form.querySelector('[type="submit"]');

			if (submitButton) {
				submitButton.disabled = true;
			}

			try {
				const response = await fetch(form.action, {
					method: 'POST',
					headers: {
						'Accept': 'application/json',
						'X-Requested-With': 'XMLHttpRequest',
						'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
					},
					credentials: 'same-origin',
					body: new FormData(form),
				});

				const payload = await response.json();

				if (!response.ok) {
					renderError(payload?.message ?? 'Login failed.');
					return;
				}

				if (!payload?.redirect) {
					renderError('Dashboard route was not returned by the server.');
					return;
				}

				const pageResponse = await fetch(payload.redirect, {
					method: 'GET',
					headers: {
						'X-Requested-With': 'XMLHttpRequest',
					},
					credentials: 'same-origin',
				});

				const html = await pageResponse.text();
				window.history.pushState({}, '', payload.redirect);
				document.open();
				document.write(html);
				document.close();
			} catch (error) {
				renderError('Unable to complete the request right now.');
			} finally {
				if (submitButton) {
					submitButton.disabled = false;
				}
			}
		});
	})();
</script>
{{-- <script src="{{asset('admin/assets/js/deznav-init.js')}}" type="text/javascript"></script> --}}
{{-- <script src="{{asset('admin/assets/js/demo.js')}}" type="text/javascript"></script> --}}
{{-- <script src="{{asset('admin/assets/js/styleSwitcher.js')}}" type="text/javascript"></script> --}}

</body>

</html>
