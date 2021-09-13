<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    @yield('styles')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>App location</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- login -->	
    <link rel="stylesheet" type="text/css" href="aut/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="aut/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="aut/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="aut/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="aut/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="aut/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="aut/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="aut/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="aut/css/util.css">
    <link rel="stylesheet" type="text/css" href="aut/css/main.css">

</head>
<body>
    <div class="limiter">
            <div class="container-login100" style="background-image: url('aut/images/bg-01.jpg');">
                <div class="wrap-login100 p-t-62 p-b-33">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="txt1 col-md-4 col-form-label text-md-right">E-Mail</label>
                           <!-- 
                            'failed' => 'These credentials do not match our records.',
                            'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
                            -->
                            <div class="col-md-6 wrap-input100">
                                <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="txt1 col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6 wrap-input100">
                                <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row container-login100-form-btn m-t-17">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>
                                <!--
                                @.if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{!{ route('password.request') }}">
                                       Forgot Your Password}}
                                    </a>
                                @.endif
                                -->
                            </div>
                        </div>
                        <!--
                        <div class="w-full text-center p-t-55">
                            <span class="txt2">
                                Not a member?
                            </span>
    
                            <a href="#" class="txt2 bo1">
                                Sign up now
                            </a>
                        </div>
                        -->
                    </form>
                </div>
            </div>
        </div>
            
        <div id="dropDownSelect1"></div>
	<!--JS -->
    <script src="aut/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="aut/vendor/animsition/js/animsition.min.js"></script>
	<script src="aut/vendor/bootstrap/js/popper.js"></script>
	<script src="aut/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="aut/vendor/select2/select2.min.js"></script>
	<script src="aut/vendor/daterangepicker/moment.min.js"></script>
	<script src="aut/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="aut/vendor/countdowntime/countdowntime.js"></script>
	<script src="aut/js/main.js"></script>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" ></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}" ></script>
    <script>
        $('.flex-item').click(function(){
            $('.collapse').collapse('hide');
         });
    </script>
    @yield('script')
</body>
</html>