<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Travel the World</title>

    <link rel="shortcut icon" href="{{ asset('cymer/assets/img/favicon.png') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cymer/assets/css/style.css') }}">

    <style>
        .toggle-password {
            cursor: pointer;
        }

        /* You can add styles for the "eye-slash" icon here if needed */
    </style>

</head>

<body>
    {{-- @include('includes.links') --}}
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        {{-- <img class="img-fluid" src="{{ asset('cymer/assets/img/login.png') }}" alt="Logo"> --}}
                        <img class="img-fluid" src="{{ asset('img/logo-png-1.png') }}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Welcome</h1>
                            <p class="account-subtitle">Need an account? <a href="{{ route('register') }}">Sign Up</a></p>
                            <h2>Sign in</h2>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @if ($errors->has('email'))
                                        <span class="profile-views" hidden><i class="fas fa-user-circle"></i></span>
                                    @else
                                        <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                    @endif

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    <span class="profile-views toggle-password" id="toggle-password">
                                        <i class="fas fa-eye"></i> <!-- Initial icon is 'eye' -->
                                    </span>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="forgotpass">
                                    <div class="remember-me">
                                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-block" type="submit">Login</button>
                                </div>
                            </form>

                            {{-- <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                            <div class="social-login">
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('cymer/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('cymer/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cymer/assets/js/feather.min.js') }}"></script>

    <!-- Custom JS to toggle password visibility -->
    <script>
        $(document).ready(function() {
            $('#toggle-password').on('click', function() {
                var passwordField = $('#password');
                var type = passwordField.attr('type') === 'password' ? 'text' : 'password';
                passwordField.attr('type', type);

                // Toggle the eye icon based on the password visibility
                var icon = $(this).find('i'); // Get the <i> inside the span
                if (type === 'password') {
                    icon.removeClass('fa-eye-slash').addClass('fa-eye'); // Show the 'eye' icon
                } else {
                    icon.removeClass('fa-eye').addClass('fa-eye-slash'); // Show the 'eye-slash' icon
                }
            });
        });
    </script>

    <script src="{{ asset('cymer/assets/js/script.js') }}"></script>
</body>

</html>
