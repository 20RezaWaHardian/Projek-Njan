

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login-form-07/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login-form-07/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login-form-07/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login-form-07css/style.css">
	<link rel="icon" type="image/png" sizes="96x96" href="login-form-07/images/jr.png">

    <title>Jasa Raharja</title>
  </head>

<body>
		<div class="content" style="margin-top:100px;">
			<div class="container">
			<div class="row">
				<div class="col-md-6">

				<img src="login-form-07/images/35238.png" alt="Image" class="img-fluid">
				</div>
				<div class="col-md-6 contents">
				<div class="row justify-content-center">
					<div class="col-md-8">
					<div class="mb-4">
						<center><img src="login-form-07/images/jr.png" alt=""></center>
						<hr>
					<h3>Sign In</h3>
					<p class="mb-4">Silahkan Masukkan Username dan Password Anda</p>
					</div>
					<form method="POST" action="{{ route('login') }}">
                                 @csrf
								<div class="form-group">
									<label for="username" class="control-label sr-only">Username</label>
									<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder='Password'>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
								</div>
								<!-- <div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
									</label>
								</div> -->
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --> 
							</form>
					</div>
				</div>
				
				</div>
				
			</div>
			</div>
		</div>
	<!-- END WRAPPER -->
	<script src="login-form-07/js/jquery-3.3.1.min.js"></script>
    <script src="login-form-07/js/popper.min.js"></script>
    <script src="login-form-07/js/bootstrap.min.js"></script>
    <script src="login-form-07/js/main.js"></script>
</body>

</html>
