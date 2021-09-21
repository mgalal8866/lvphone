
<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.app')
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('loginp/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('loginp/css/main.css') }}">
<!--===============================================================================================-->
</head>
@section('content')
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('login') }}">
                    @csrf
				 
					<span class="login100-form-title">
                        {{ __('Login') }}
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror"  placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
 
						<span class="focus-input100"></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror"  placeholder="Password" name="password"   required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                         
						<span class="focus-input100"></span>
                        
                    </div>


                    <div class="wrap-input100 validate-input">
                        <input class="input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="txt1 txt2">
                            {{ __('Remember Me') }}
                    </span>
                    </div>




					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						@if (Route::has('password.request'))
                                    <a class="txt2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
					</div>

                    
                   
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                            {{ __('Login') }}
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{ asset('loginp/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginp/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginp/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('loginp/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginp/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginp/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('loginp/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginp/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginp/js/main.js') }}"></script>

</body>
</html>


                       
                         

                       
@endsection
